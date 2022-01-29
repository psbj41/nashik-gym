<?php

if(isset($_POST['sumbit']))
{
    $number = $_POST['number'];

    $fields = array(
        "sender_id" => "TXTIND",
        "message" => "This is a test message",
        "route" => "v3",
        "numbers" => "$number",
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
        "authorization: c6IQA8aTPnYOl7sRUGLx1ivuNhfdF2EyWD4BM3qj5JwHekgm9CzsqoPtDJiKMSBH1k09wEc7uOxrXU52",
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

?>
