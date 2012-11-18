<?php

 require_once("common.php");
 
  if(!isset($lang))
     $lang=ReadGETnPOSTParam("lang",DEFLANG_NAME);
  if(!isset($langMgr))
     $langMgr=new CLangMgr($lang,"");

?>

<!--<script language="javascript" src="../web_main/js/FloatLayer.js"></script>-->
<script language="javascript" src="../web_main/js/FixedLayer.js"></script>
<script language="javascript" src="../web_main/js/gen_lib.js"></script>

<div id="SocialBtnLayer" style="position:absolute;width:50;top:2px;right:0px;background:#FFFFFF;border:solid black 1px;padding:5px">
<a href="javascript:ShowHideDiv('SocialLayer');" ><img src="image/social.png" title="<?php echo $langMgr->getFileContent(IDX_LANG_SHAREWITHSOCIAL);?>"/></a>
<div id="SocialLayer" style="visibility:hidden;">Fuck</div>
</div>

<script language="javascript">
SetupFixedLayer("SocialBtnLayer");
/*new FloatLayer('SocialBtnLayer',0,0,10);
//function detach(){
	lay=document.getElementById('SocialBtnLayer');
	l=getXCoord(lay);
	t=getYCoord(lay);
	lay.style.position='absolute';
	lay.style.top=t;
	lay.style.left=l;
	getFloatLayer('SocialBtnLayer').initialize();
	//alignFloatLayers();
	
	//document.body.onscroll = alignFloatLayers;
	//document.body.onresize = alignFloatLayers;

	function placeIt() {
		var y1 = getFloatLayer('SocialBtnLayer').ifloatY;   // change the # on the left to adjuct the Y co-ordinate
	    (document.getElementById) ? dom = true : dom = false;
		if (dom && !document.all) {lay.style.top = window.pageYOffset + (window.innerHeight - (window.innerHeight-y1)) + "px";}
		if (document.all) {document.all["SocialBtnLayer"].style.top = document.documentElement.scrollTop + (document.documentElement.clientHeight - (document.documentElement.clientHeight-y1)) + "px";}
		window.setTimeout("placeIt()", 10); 
	}
	placeIt();
//}*/
</script>


<div id="header">
<img src="image/logo.png" />
</div>