<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use App\Subscription;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::where('id','2')->get();
        $subscribers = Subscription::where('status_sub', 'unpaid')->orwhere('remain', '<', 10)->get();
        return view('backend.pages.admin.message.index',compact(['messages','subscribers']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }

    public function send_message(Request $request)
    {
        $message = Message::where('id', $request->message_id)->first();
        if( $message )
        {
            $subscribers = Subscription::whereIn('id', $request->subscriber_id)->get();
            if( $subscribers->count() > 0)
            {
                foreach($subscribers as $subscriber)
                {
                    $composeMessage = Str::replaceArray('[USER]', [$subscriber->user->name, $subscriber->end], $message->message);
                    $fields = array(
                        "sender_id" => "TXTIND",
                        "message" => $composeMessage,
                        "route" => "v3",
                        "numbers" => $subscriber->user->contact,
                    );

                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                      CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_SSL_VERIFYHOST => 0,
                      CURLOPT_SSL_VERIFYPEER => 0,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => json_encode($fields),
                      CURLOPT_HTTPHEADER => array(
                        "authorization: VvFChtGLNazpYjnox21B63w5D7IXKH4bMlE8Q9sOuicqrZdmWPBXdiUtD9makp4wIZJH6xMqflTKE2W0",
                        "accept: */*",
                        "cache-control: no-cache",
                        "content-type: application/json"
                      ),
                    ));

                    $response = curl_exec($curl);
                    $err = curl_error($curl);

                    curl_close($curl);

                    if ($err) {
                      echo "cURL Error #:" . $err;
                    } else {
                      echo $response;
                    }
                }
            }
        }
    }


    public function birthday()
    {
        $messages = Message::where('id','1')->get();
        $subscribers =  User::whereDate('dob','>=', now())
        ->whereDate( 'dob', '<=', now()->addDays(7))
        ->get();
        return view('backend.pages.admin.message.birthday',compact(['messages','subscribers']));
    }


    public function birthday_send_message(Request $request)
    {
        $message = Message::where('id', $request->message_id)->first();
        if( $message )
        {
            $subscribers = User::whereIn('id', $request->subscriber_id)->get();
            if( $subscribers->count() > 0)
            {
                foreach($subscribers as $subscriber)
                {
                    $composeMessage = str_replace('[USER]', $subscriber->name, $message->message);
                    $fields = array(
                        "sender_id" => "TXTIND",
                        "message" => $composeMessage,
                        "route" => "v3",
                        "numbers" => $subscriber->contact,
                    );

                    $curl = curl_init();

                    curl_setopt_array($curl, array(
                      CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2",
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => "",
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 30,
                      CURLOPT_SSL_VERIFYHOST => 0,
                      CURLOPT_SSL_VERIFYPEER => 0,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => "POST",
                      CURLOPT_POSTFIELDS => json_encode($fields),
                      CURLOPT_HTTPHEADER => array(
                        "authorization: VvFChtGLNazpYjnox21B63w5D7IXKH4bMlE8Q9sOuicqrZdmWPBXdiUtD9makp4wIZJH6xMqflTKE2W0",
                        "accept: */*",
                        "cache-control: no-cache",
                        "content-type: application/json"
                      ),
                    ));

                    $response = curl_exec($curl);
                    $err = curl_error($curl);

                    curl_close($curl);

                    if ($err) {
                      echo "cURL Error #:" . $err;
                    } else {
                      echo $response;
                    }
                }
            }
        }
    }

}
