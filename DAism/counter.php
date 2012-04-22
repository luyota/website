<html>
<head>
<title>Counter</title>

<style type="text/css">
<!--
body,td,th {
	color: #FFFFFF;
}
body {
	background-color: #000000;
}
.style3 {
	font-size: xx-small;
	color: #FFFF00;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<body>
<span class="style3">U R →<?php
$fin = fopen("counter", "r");
fscanf($fin, "%d", $num);
fclose($fin);
$num++;
echo((string)$num);
$fout = fopen("counter", "w");
fputs($fout, (string)$num);
fclose($fout);
?>TH← PPL HERE 
</span>
</body>
</html>
