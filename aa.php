<?
$strAccessToken = "";

$strUrl = "https://api.line.me/v2/bot/message/push";
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$arrPostData = array();
$arrPostData['to'] = "Uafb8898da1f464f55adfe6806a532405";//"USER_ID";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message from Sahapanich";
$ch = curl_init();
   echo "777";
?>	  
