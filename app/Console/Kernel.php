<?php

namespace App\Console;

use App\Subscription;
use App\Tsub;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{

    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->call(function () {
            $subscriptions = Subscription::whereStatusSub('paid')->get();
            foreach($subscriptions as $subscription)
            {
                if($subscription->remaining_days <= 5)
                {
                    $subscription->update(['status_sub' => 'unpaid']);
                    $subscription->user->syncRoles(['role_id' => 4]);
                }
            }

            $tsubs = Tsub::whereStatusTsub('paid')->get();
            foreach($tsubs as $tsub)
            {
                if($tsub->tsub_days <= 5)
                {
                    $tsub->update(['status_tsub' => 'unpaid']);
                }
            }
        })->twiceDaily(1, 13);

        $schedule->command('daily:update')->weekly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
