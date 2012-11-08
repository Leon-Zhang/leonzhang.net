<?php
    
    require("common.php");
    
    $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    $langMgr=new CLangMgr($lang,"");
    
    ?>

<html>
<head>
<title><?php echo $langMgr->getContent(PIDX_CLANG_ABOUT);?></title>
</head>

<body>


</body>
</html>