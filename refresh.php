<?php
$url = 'https://www.facebook.com/colegioequipe1/';
$fields = array(
            'id'=>urlencode('http://m-l-a-b-s.com'),
            'scrape'=>urlencode(true),
            'access_token'=>"<737624206422211|MOaNOhjy61xEzJSSFq8UlBVm2sc>"
        );

$fields_string = '';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
$fields_string = rtrim($fields_string,'&');


$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

$result = curl_exec($ch);
?>
