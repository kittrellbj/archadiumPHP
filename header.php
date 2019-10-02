<?php
/*		name:  header.php
		description:  The primary header for Archadium
		written by:   Brian Kittrell, Archadium
		created:	  12/11/2008
		modified:
*/
include("$base_dir"."includes/config.php");
?>
<html>
<head>
<title>Archadium</title>
<link rel="stylesheet" type="text/css" href="<?php echo $base_dir; ?>includes/style.css" />
<script language="JavaScript">
<!--
// PRELOADING IMAGES
if (document.images) {
 img1_off =new Image(); img1_off.src ="<?php echo $images;?>home_off.gif";
 img1_on=new Image(); img1_on.src="<?php echo $images;?>home_on.gif";

 img2_off =new Image(); img2_off.src ="<?php echo $images;?>news_off.gif";
 img2_on=new Image(); img2_on.src="<?php echo $images;?>news_on.gif";

 img3_off =new Image(); img3_off.src ="<?php echo $images;?>/register_off.gif";
 img3_on=new Image(); img3_on.src="<?php echo $images;?>/register_on.gif";

 img4_off =new Image(); img4_off.src ="<?php echo $images;?>/games_off.gif";
 img4_on=new Image(); img4_on.src="<?php echo $images;?>/games_on.gif";

 img5_off =new Image(); img5_off.src ="<?php echo $images;?>/faq_off.gif";
 img5_on=new Image(); img5_on.src="<?php echo $images;?>/faq_on.gif";

 img6_off =new Image(); img6_off.src ="<?php echo $images;?>/community_off.gif";
 img6_on=new Image(); img6_on.src="<?php echo $images;?>/community_on.gif";

 img7_off =new Image(); img7_off.src ="<?php echo $images;?>/support_off.gif";
 img7_on=new Image(); img7_on.src="<?php echo $images;?>/support_on.gif";
 
 img8_off =new Image(); img8_off.src ="<?php echo $images;?>/premium_off.gif";
 img8_on=new Image(); img8_on.src="<?php echo $images;?>/premium_on.gif";
 
 img9_off =new Image(); img9_off.src ="<?php echo $images;?>/contact_off.gif";
 img9_on=new Image(); img9_on.src="<?php echo $images;?>/contact_on.gif";
}

function movr(k) {
 if (document.images)
  eval('document.img'+k+'.src=img'+k+'_on.src');
}

function mout(k) {
 if (document.images)
  eval('document.img'+k+'.src=img'+k+'_off.src');
}

function handleOver() {
 if (document.images)
  document.imgName.src=img_on.src;
}

function handleOut() {
 if (document.images)
  document.imgName.src=img_off.src;
}
//-->
</script>
<script type="text/javascript">

/***********************************************
* AnyLink Drop Down Menu- � Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

//Contents for menu 1
var menu1=new Array()
menu1[0]='<a href="<?php echo "$base_dir" . "news.php" ?>">New Articles</A>'
menu1[1]='<a href="<?php echo "$base_dir" . "archive.php" ?>">Archived Articles</A>'

//Contents for menu 2, and so on
var menu2=new Array()
// menu2[0]='<a href="<?php echo "$base_dir" . "board/index.php" ?>">Board Games</a>'
menu2[0]='<a href="<?php echo "$base_dir" . "soi/index.php" ?>">Spheres of Influence</a>'
// menu2[1]='<a href="<?php echo "$base_dir" . "zombies/index.php" ?>">Undead</a>'
// menu2[2]='<a href="<?php echo "$base_dir" . "soi/index.php" ?>">Spheres of Influence</a>'

var menu3=new Array()
menu3[0]='<a href="<?php echo "$base_dir" . "faq_rules.php" ?>">Membership Rules</A>'
menu3[1]='<a href="<?php echo "$base_dir" . "faq_tech.php" ?>">Technical Issues</A>'
menu3[2]='<a href="<?php echo "$base_dir" . "faq_top10.php" ?>">Top 10 FAQs</A>'

var menu4=new Array()
menu4[0]='<a href="<?php echo "$base_dir" . "forum.php" ?>">Forums</A>'
menu4[1]='<a href="<?php echo "$base_dir" . "members.php" ?>">Members</A>'
menu4[2]='<a href="<?php echo "$base_dir" . "stats.php" ?>">Statistics</A>'

var menu5=new Array()
menu5[0]='<a href="<?php echo "$base_dir" . "email_support.php" ?>">Email Support</A>'
menu5[1]='<a href="<?php echo "$base_dir" . "support forums" ?>">Support Forums</A>'

var menuwidth='165px' //default menu width
var menubgcolor='white'  //menu bgcolor
var disappeardelay=250  //menu disappear speed onMouseout (in miliseconds)
var hidemenu_onclick="yes" //hide menu when user clicks within menu?

/////No further editting needed

var ie4=document.all
var ns6=document.getElementById&&!document.all

if (ie4||ns6)
document.write('<div id="dropmenudiv" style="visibility:hidden;width:'+menuwidth+';background-color:'+menubgcolor+'" onMouseover="clearhidemenu()" onMouseout="dynamichide(event)"></div>')

function getposOffset(what, offsettype){
var totaloffset=(offsettype=="left")? what.offsetLeft : what.offsetTop;
var parentEl=what.offsetParent;
while (parentEl!=null){
totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
parentEl=parentEl.offsetParent;
}
return totaloffset;
}


function showhide(obj, e, visible, hidden, menuwidth){
if (ie4||ns6)
dropmenuobj.style.left=dropmenuobj.style.top="-500px"
if (menuwidth!=""){
dropmenuobj.widthobj=dropmenuobj.style
dropmenuobj.widthobj.width=menuwidth
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover")
obj.visibility=visible
else if (e.type=="click")
obj.visibility=hidden
}

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge(obj, whichedge){
var edgeoffset=0
if (whichedge=="rightedge"){
var windowedge=ie4 && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj.contentmeasure=dropmenuobj.offsetWidth
if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure)
edgeoffset=dropmenuobj.contentmeasure-obj.offsetWidth
}
else{
var topedge=ie4 && !window.opera? iecompattest().scrollTop : window.pageYOffset
var windowedge=ie4 && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj.contentmeasure=dropmenuobj.offsetHeight
if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure){ //move up?
edgeoffset=dropmenuobj.contentmeasure+obj.offsetHeight
if ((dropmenuobj.y-topedge)<dropmenuobj.contentmeasure) //up no good either?
edgeoffset=dropmenuobj.y+obj.offsetHeight-topedge
}
}
return edgeoffset
}

function populatemenu(what){
if (ie4||ns6)
dropmenuobj.innerHTML=what.join("")
}


function dropdownmenu(obj, e, menucontents, menuwidth){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu()
dropmenuobj=document.getElementById? document.getElementById("dropmenudiv") : dropmenudiv
populatemenu(menucontents)

if (ie4||ns6){
showhide(dropmenuobj.style, e, "visible", "hidden", menuwidth)
dropmenuobj.x=getposOffset(obj, "left")
dropmenuobj.y=getposOffset(obj, "top")
dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")+"px"
dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+obj.offsetHeight+"px"
}

return clickreturnvalue()
}

function clickreturnvalue(){
if (ie4||ns6) return false
else return true
}

function contains_ns6(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide(e){
if (ie4&&!dropmenuobj.contains(e.toElement))
delayhidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
delayhidemenu()
}

function hidemenu(e){
if (typeof dropmenuobj!="undefined"){
if (ie4||ns6)
dropmenuobj.style.visibility="hidden"
}
}

function delayhidemenu(){
if (ie4||ns6)
delayhide=setTimeout("hidemenu()",disappeardelay)
}

function clearhidemenu(){
if (typeof delayhide!="undefined")
clearTimeout(delayhide)
}

if (hidemenu_onclick=="yes")
document.onclick=hidemenu

</script>
</head>
<BODY BGCOLOR="black">
<table id="Table_01" width="1024" height="50" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td>
			<img src="<?php echo $images;?>archadium_logo.gif" width="241" height="50" alt=""></td>
		<td>
			<img src="<?php echo $images;?>Untitled-1_02.gif" width="20" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(1);return true;" onMouseOut="mout(1);return true;" onClick="return true;">
			<img src="<?php echo $images;?>home_off.gif" width="48" height="50" alt="" name="img1" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_04.gif" width="22" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(2);dropdownmenu(this, event, menu1, '150px');return true;" onMouseOut="mout(2);delayhidemenu();return true;" onClick="return clickreturnvalue();return true;">
			<img src="<?php echo $images;?>news_off.gif" width="57" height="50" alt="" name="img2" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_06.gif" width="21" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(3);return true;" onMouseOut="mout(3);return true;" onClick="return true;">
			<img src="<?php echo $images;?>register_off.gif" width="67" height="50" alt="" name="img3" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_08.gif" width="23" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(4);dropdownmenu(this, event, menu2, '150px');return true;" onMouseOut="mout(4);delayhidemenu();return true;" onClick="return clickreturnvalue();return true;">
			<img src="<?php echo $images;?>games_off.gif" width="60" height="50" alt="" name="img4" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_10.gif" width="20" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(5);dropdownmenu(this, event, menu3, '150px');return true;" onMouseOut="mout(5);delayhidemenu();return true;" onClick="return clickreturnvalue();return true;">
			<img src="<?php echo $images;?>faq_off.gif" width="39" height="50" alt="" name="img5" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_12.gif" width="17" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(6);dropdownmenu(this, event, menu4, '150px');return true;" onMouseOut="mout(6);delayhidemenu();return true;" onClick="return clickreturnvalue();return true;">
			<img src="<?php echo $images;?>community_off.gif" width="99" height="50" alt="" name="img6" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_14.gif" width="16" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(7);dropdownmenu(this, event, menu5, '150px');return true;" onMouseOut="mout(7);delayhidemenu();return true;" onClick="return clickreturnvalue();return true;">
			<img src="<?php echo $images;?>support_off.gif" width="79" height="50" alt="" name="img7" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_16.gif" width="16" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(8);return true;" onMouseOut="mout(8);return true;" onClick="return true;">
			<img src="<?php echo $images;?>premium_off.gif" width="79" height="50" alt="" name="img8" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_18.gif" width="19" height="50" alt=""></td>
		<td>
			<A HREF="<?php echo $base_dir;?>" onMouseOver="movr(9);return true;" onMouseOut="mout(9);return true;" onClick="return true;">
			<img src="<?php echo $images;?>contact_off.gif" width="65" height="50" alt="" name="img9" BORDER="0"></td>
		<td>
			<img src="<?php echo $images;?>layout_off_20.gif" width="16" height="50" alt=""></td>
	</tr>
	</table>
	<table>
	<tr>
		<td width="74"></td>
		<td width="700" valign=top><FONT COLOR="white">Server Time : <?php $today = date("F j, Y, g:i A"); echo $today; ?></FONT></td>
		<td width="250" align="right" valign=top><FONT COLOR="white"><?php Login(); ?></FONT></td>
	</tr>
</table>
