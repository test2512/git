<?
//$strAccessToken = "04xEhe/EUGysyc4sRXFc4eISQ9nySGxyn2cHTh3uY+F6btffebfZdJ2EC2UOLoC6EqHN/XZQv3fLzyDc0MA7g959PKP+h5MTFOEvbb4jUvqIbvm/5/nV7zap542mHBXgR2htQnnOk8k7XUuNSp2OOVyJkyQKxupqlZ5I0qCNTE8=";
$strAccessToken = "t4dYu+OXU410/rDWhExXMJg90YZE8xueP0VWCCfofcQm+xfTfYOw17UNNMLM1jtcaE7dkt5HnRNBwtpyNtJSz21QMyELyn28U8ctgdg/BOJRBTsc8AxMlhDoi32BZ8uVZ/aFmis97dfE8KKKi5ztlQdB04t89/1O/w1cDnyilFU=";

$strUrl = "https://api.line.me/v2/bot/message/push";
$arrHeader = array();
$arrHeader[] = "Content-Type: application/json";
$arrHeader[] = "Authorization: Bearer {$strAccessToken}";
$arrPostData = array();
$arrPostData['to'] = "u25c733ee101047846d54984df0dfb713";//"Uafb8898da1f464f55adfe6806a532405";//"USER_ID";
$arrPostData['messages'][0]['type'] = "text";
$arrPostData['messages'][0]['text'] = "นี้คือการทดสอบ Push Message from Sahapanich";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$strUrl);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $arrHeader);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($arrPostData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close ($ch);
   echo "ok";
?>	  
