<?php
    
    require_once("common.php");
    
    if(!isset($lang))
        $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
    if(!isset($langMgr))
        $langMgr=new CLangMgr($lang,"");
?>

<br><br><p>
<div align="center">
© leonzh.net <?php echo date("Y");?>
</div>
</p>