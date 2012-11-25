<?php
    
    require_once("../common.php");
    
    $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    $langMgr=new CLangMgr($lang,"../");

?>

<html>
<head>
<meta http- equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="default.css" media="screen" />
<title><?php echo $langMgr->getFileContent(IDX_LANG_PROJECTSTITLE);?></title>
</head>

<body>
<?php require("../header.php");?>


<?php require("../footer.php");?>
</body>
</html>