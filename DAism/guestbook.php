<html>
<head><title>GUESTBOOK</title>
<script type="text/jscript">
function setscrollstyle(){  
  document.body.style.scrollbar3dLightColor = "gray";
  document.body.style.scrollbarArrowColor = "black";
  document.body.style.scrollbarBaseColor = "black";
  document.body.style.scrollbarDarkShadowColor = "gray";
  document.body.style.scrollbarFaceColor = "white";
  document.body.style.scrollbarHighlightColor = "white";
  document.body.style.scrollbarShadowColor = "white";
  document.body.style.scrollbarTrackColor = "white";
}
</script>
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: x-large;
	font-family: "Courier New", Courier, mono;
	font-weight: bold;
}
.style2 {font-size: x-small}
.style3 {
	color: #0066FF;
	font-family: Arial, Helvetica, sans-serif;
}
.style4 {font-size: x-small; color: #0066FF; }
.style5 {
	color: #999999;
	font-size: x-small;
	font-family: Arial, Helvetica, sans-serif;
}
a:link {
	color: #0066FF;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #0066FF;
}
a:hover {
	text-decoration: underline;
	color: #0066FF;
}
a:active {
	text-decoration: none;
	color: #0066FF;
}
.style9 {
	color: #FF9900;
	font-size: x-small;
}
.style11 {font-size: x-small; color: #0066CC;}
-->
</style>
<?php
function showall(){
	return;
	$dir = dir("guestbook");
	for ($count = 0; ($fname[] = $dir->read()) != false; $count++);
	$count = $count - 2;
	echo("<span style={font-size=x-small;font-weight=bold;color=#009999;}>¯d¨¥¼Æ¡G".(string)$count."</span><br><br>");	
	$dir->close();
	rsort($fname);
	for ($i = 0; $i <= $count + 1; $i ++){
		if (strcmp(".", $fname[$i]) == 0 || strcmp("..", $fname[$i]) == 0 || strcmp("count.txt", $fname[$i]) == 0)
			continue;
		$fin = fopen("guestbook/".$fname[$i], "r");				
		$str = fgets($fin);
		parse_str($str, $info_arr);
		echo("<table width=\"320\" border=\"0\" height=\"10\"><tr>");
		//echo("<td width=\"100\" class=\"style2 style3\"><a href =\"guestedit.php?article=".$fname[$i]."\">".htmlentities($info_arr['title'], ENT_QUOTES)."</a></td>");
		//echo("<td width=\"100\" class=\"style2 style3\">".htmlentities($info_arr['author'], ENT_QUOTES)."</td>");
		echo("<td width=\"100\" class=\"style2 style3\"><a href =\"guestedit.php?article=".$fname[$i]."\">".html_entity_decode($info_arr['title'])."</a></td>");
		echo("<td width=\"100\" class=\"style2 style3\">".html_entity_decode($info_arr['author'])."</td>");
		echo("<td width=\"120\" class=\"style2 style3\">".substr($fname[$i],0, 4).'-'.substr($fname[$i],4, 2).'-'.substr($fname[$i],6, 2).' '.substr($fname[$i],8, 2).':'.substr($fname[$i],10, 2)."</td>");
		echo("</tr></table><table width=\"450\" border=\"0\"><tr><td width=\"400\" class=\"style2 style5\">");
		while (!feof($fin)){
			//echo(htmlentities(fgets($fin), ENT_QUOTES)."<br>");
			echo(html_entity_decode(fgets($fin))."<br>");
		}
		echo("</td></tr></table>");
		echo("<br><br>");		
	}
}

?>
<script type="text/javascript">
function checkvalid(){
	if (document.getElementById("txt_title").value == "" || document.getElementById("txt_name").value == "" ||
		document.getElementById("txt_password").value == "" || document.getElementById("txt_message").value == ""){
		alert("All space must be filled :p");
		return false;
	}
	return true;
}
</script>
<meta http-equiv="Content-Type" content="text/html; charset=big5"></head>
<body onLoad="setscrollstyle()">
<p align="center" class="style1">G U E S T B ¡Û K</p>
<form action="guestnew.php" method="post" name="form1" onSubmit="return checkvalid()">
<p><span class="style9"><span class="style11">L e a v e M e s s a g e H e r e :) </span><br>
    Title:
      <input name="txt_title" type="text" id="txt_title" size="13" maxlength="20">
    Name:
    <input name="txt_name" type="text" id="txt_name" size="13" maxlength="12"> 
    Password(For Edit): 
    <input name="txt_password" type="password" id="txt_password" size="9" maxlength="12">
    <br>
    Message:</span><br>
    <textarea name="txt_message" cols="62" rows="5" id="txt_message"></textarea>
    <br>
    <input type="submit" name="Submit" value="OK">
    <input type="reset" name="Submit2" value="Reset">
</p>
</form>
<br>
<?php showall();?> 
</body>

</html>