<?php
    
    require_once("common.php");
    
    $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    $langMgr=new CLangMgr($lang,"");

?>

<html>
<head>
<title><?php echo $langMgr->getFileContent(IDX_LANG_PROJECTSTITLE);?></title>
</head>

<body>


</body>
</html>