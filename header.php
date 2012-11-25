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
<script type="text/javascript">
(function() {
 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
 po.src = 'https://apis.google.com/js/plusone.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
 })();
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
         fjs.parentNode.insertBefore(js, fjs);
         }(document, 'script', 'facebook-jssdk'));</script>

<div id="SocialBtnLayer" style="position:absolute;top:2px;right:0px;background:#FFFFFF;padding:5px">
<a href="javascript:ShowHideDiv('SocialLayer');AlignElementPos('SocialLayer','SocialBtnLayer');" ><img width="24" height="24" src="image/social_logo.png" title="<?php echo $langMgr->getFileContent(IDX_LANG_SHAREWITHSOCIAL);?>"/></a>
</div>
<div id="SocialLayer" style="visibility:hidden;display:none;position:absolute;border:solid">
<!-- Place this tag after the last +1 button tag. -->
<div class="g-plusone" data-size="medium" data-annotation="inline" data-width="120"></div>

<?php
    require("social.php");
?>

<div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div>

<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-counter="right"></script>
</div>

<script language="javascript">
SetupFixedLayer("SocialBtnLayer");
SetupFixedLayer("SocialLayer");
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
<div><a href="projects/" title="">PROJECTS</a>&nbsp;<a href="" title="">BLOG</a>&nbsp;<a href="about.php" title="">ABOUT</a>&nbsp;<a href="contact.php" title="">CONTACT</a>&nbsp;</div>

 <img src="image/logo.png" />
</div>