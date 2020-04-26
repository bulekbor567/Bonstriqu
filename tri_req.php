<?php

class tri{
..
  function curls($host,$header,$body,$method)
  <---->{
  <----><------>$ch = curl_init();
  <----><------>curl_setopt($ch, CURLOPT_URL, $hos
  <----><------>curl_setopt($ch, CURLOPT_HTTPHEADE
  <----><------>curl_setopt($ch, CURLOPT_HEADER, t
  <----><------>curl_setopt($ch, CURLOPT_CUSTOMREQ
  <----><------>curl_setopt($ch, CURLOPT_RETURNTRA
  <----><------>curl_setopt($ch, CURLOPT_ENCODING,
  <----><------>curl_setopt($ch, CURLOPT_POSTFIELD
  <----><------>curl_setopt($ch, CURLOPT_COOKIEJAR
  <----><------>curl_setopt($ch, CURLOPT_COOKIEFIL
  <----><------>curl_setopt($ch, CURLOPT_SSL_VERIF
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
  <----><------>$req = curl_exec($ch);
  <----><------>$req = explode("\r\n\r\n", $req);
  <----><------>return $req;
  <---->}
  
  
  
  function request_otp($msisdn,$imei)
  {
    $body = array("msisdn"=>$msisdn);
    $body = json_encode($body);
    $ctl = strlen($body);
    $header = array("Host:bonstri.tri.co.id" ,
 "Connection:keep-alive" ,
 "Content-Length:" . $ctl ,
 "Accept:application/json, text/plain, */*" ,
 "Origin:http://bonstri.tri.co.id" ,
 "User-Agent:Mozilla/5.0 (Linux; Android 9; Redmi
 "Content-Type:application/json" ,
 "Referer:http://bonstri.tri.co.id/login?returnUrl
 "Accept-Encoding:gzip, deflate" ,
 "Accept-Language:id-ID,id;q=0.9,en-US;q=0.8,en;q=
   $response = $this->curls("http://bonstri.tri.co
   return $response[1];
...
  }
..
  function claim($bearer,$id,$id1)
  {
    $body = array("rewardId"=>$id1,"rewardTransact
    $body = json_encode($body);
    $ctl = strlen($body);
    $header = array("Host:bonstri.tri.co.id" ,
 "Connection:keep-alive" ,
 "Content-Length:" . $ctl ,
 "Accept:application/json, text/plain, */*" ,
 "Origin:http://bonstri.tri.co.id" ,
 "Authorization:Bearer " . $bearer ,
 "User-Agent:Mozilla/5.0 (Linux; Android 9; Redmi
 "Content-Type:application/json" ,
 "Referer:http://bonstri.tri.co.id/voucherku" ,
 "Accept-Encoding:gzip, deflate" ,
 "Accept-Language:id-ID,id;q=0.9,en-US;q=0.8,en;q=
     $response = $this->curls("http://bonstri.tri.
     return $response[1];
  }
..
..
..
}
?>