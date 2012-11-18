<?php
    
    require_once("common.php");
    
    $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    $langMgr=new CLangMgr($lang,"");
    
    ?>

<html>
<head>
<meta http- equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $langMgr->getContent(PIDX_CLANG_ABOUT);?></title>
</head>

<body>
<?php require("header.php");?>

<?php require("footer.php");?>
</body>
</html>