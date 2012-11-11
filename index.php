<?php
 
    require_once("common.php");
    
    $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    $langMgr=new CLangMgr($lang,"");

 if(Tweet("Leon_Zh","kim0110","Tweet from php.")==TRUE)
    echo "Tweet success";
 else
    echo "Tweet failed<br/>";

?>

<html>
<head>
<title><?php echo $langMgr->getFileContent(IDX_LANG_IDXTITLE);?></title>
</head>

<body>
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
    
    var_dump(json_decode($result));
    echo $resultArray['http_code'];
?>

</body>
</html>