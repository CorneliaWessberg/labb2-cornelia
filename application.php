<?php
/* Template Name: Application */

//ett sätt att få ut information från posts från wordpress.
$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'http://localhost/labb2-cornelia/wp-json/wp/v2/posts');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$List = curl_exec($cURLConnection);
curl_close($cURLConnection);

$data = json_decode($List);

// var_dump($data);


foreach ($data as $key => $value) {
    # code...

    echo 'this is my post id: ' . $value->id;
}
