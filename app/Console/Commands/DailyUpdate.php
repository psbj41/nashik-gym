<?php

namespace App\Console\Commands;

use App\Moneytable;
use App\Ptmoney;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class DailyUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Weekly Report for payments details';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $totalMoney = DB::table('subscriptions')->where('payment_price', '!=', "")->sum('payment_price');
        $totaladvance = DB::table('subscriptions')->where('advance', '!=', "")->sum('advance');
        $totalbalance = DB::table('subscriptions')->where('balance', '!=', "")->sum('balance');
        $totalPtMoney = DB::table('tsubs')->where('price', '!=', "")->sum('price');
        $totalPtadvance = DB::table('tsubs')->where('advance', '!=', "")->sum('advance');
        $totalPtbalance = DB::table('tsubs')->where('balance', '!=', "")->sum('balance');
        $moneyall = Moneytable::create([
            'paid_amt' => $totalMoney,
            'advance'=> $totaladvance,
            'balance'=> $totalbalance,
        ]);

        $ptmoneyall = Ptmoney::create([
            'pt_total' => $totalPtMoney,
            'pt_advance'=> $totalPtadvance,
            'pt_balance'=> $totalPtbalance,
        ]);
    }
}
