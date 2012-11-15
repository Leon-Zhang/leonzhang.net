<?php
    
    require_once("common.php");
    
    $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    $langMgr=new CLangMgr($lang,"");

?>

<html>
<head>
<meta http- equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $langMgr->getFileContent(IDX_LANG_PROJECTSTITLE);?></title>
</head>

<body>


<?php require("footer.php");?>
</body>
</html>