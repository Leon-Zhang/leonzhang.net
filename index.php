<?php
 
    require_once("common.php");
    
    $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    $langMgr=new CLangMgr($lang,"");

 if(Tweet("Leon_Zh","kim0110","Tweet from php.")==TRUE)
    echo "Tweet success";
 else
    echo "Tweet failed<br/>";

?>

<html lang="<?php echo $lang;?>">
<head>
<meta http- equiv="Content-Type" content="text/html; charset=utf-8">

<title><?php echo $langMgr->getFileContent(IDX_LANG_IDXTITLE);?></title>
</head>

<body>
<?php require("header.php");?>

<?php
    $httpReq=new CHttpReq;
    $httpReq->setOpt(CURLOPT_CONNECTTIMEOUT, 2);
    $httpReq->setOpt(CURLOPT_RETURNTRANSFER, 1);
    //$httpReq->setOpt(CURLOPT_POSTFIELDS, "status=$status");
    //$httpReq->setOpt(CURLOPT_USERPWD, "$login_user:$pwd");
   
    //39.7391536,-104.9847034|36.455556,-116.866667
	//$url="http://maps.googleapis.com/maps/api/directions/json?origin=Chicago,IL&destination=Los+Angeles,CA&waypoints=Joplin,MO|Oklahoma+City,OK&sensor=false";
	$url="http://maps.googleapis.com/maps/api/directions/json?origin=39.7391536,-104.9847034&destination=36.455556,-116.866667&sensor=false";
    $result = $httpReq->sendPost($url,null);
    $resultArray = $httpReq->getInfo();
    
    //echo nl2br($result);
	$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($result, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

	foreach ($jsonIterator as $key => $val) {
    if(is_array($val)) {
        echo "$key:<br>";
    } else {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;$key => $val<br>";
    }
}
    echo $resultArray['http_code'];
?>

<?php require("footer.php");?>
</body>
</html>