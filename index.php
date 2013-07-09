<?php
 
 require("common.php");

 if(Tweet("Leon_Zh","ur_pwd_here","Tweet from php.")==TRUE)
    echo "Tweet success";
 else
    echo "Tweet failed<br/>";

?>

<html>
<head>
<title><?php echo "";?></title>
</head>

<body>
<?php
    $httpReq=new CHttpReq;
    $httpReq->setOpt(CURLOPT_CONNECTTIMEOUT, 2);
    $httpReq->setOpt(CURLOPT_RETURNTRANSFER, 1);
    //$httpReq->setOpt(CURLOPT_POSTFIELDS, "status=$status");
    //$httpReq->setOpt(CURLOPT_USERPWD, "$login_user:$pwd");
    
    $result = $httpReq->sendPost("http://maps.googleapis.com/maps/api/directions/json?origin=Chicago,IL&destination=Los+Angeles,CA&waypoints=Joplin,MO|Oklahoma+City,OK&sensor=false",null);
    $resultArray = $httpReq->getInfo();
    
    echo var_dump(json_decode($result));
    echo $resultArray['http_code'];
?>

</body>
</html>
