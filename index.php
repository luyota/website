<?php
    session_start();
        $fin = fopen ("counter", "r");
        fscanf ($fin, "%d", $num);
        fclose ($fin);
    if ($_SESSION['ip'] != $_SERVER['REMOTE_ADDR']) {
        $num ++;
        $fout = fopen ("counter", "w");
        fprintf ($fout, "%d", $num);
        fclose ($fout);
        $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    }
?>
<html>
<head>
	<title>Welcome to Yu-Ta's Homepage</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23538751-3']);
  _gaq.push(['_setCookiePath', '/~luyota/cgi-bin/']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="main_frame">
    <div id="centered_frame">
        <div id="header">
            <img src="image/header.jpg" style="margin-left: auto; margin-right: auto; width: 700px"/>
        </div>
        <div id="menu">
            <ul>
				<li class="menuitem"><a href="index.php?option=profile" class="menulink">Profile</a></li>
				<li class="menuitem"><a href="index.php?option=project#" class="menulink">Projects</a></li>				
				<li class="menuitem"><a href="files/resume.pdf" class="menulink" target="_blank">Resume</a></li>				
			    <li class="menuitem"><a href="index.php?option=academic" class="menulink">Academic</a></li>
				<li class="menuitem"><a href="index.php?option=achievement" class="menulink">Achievements</a></li>
				<li class="menuitem"><a href="index.php?option=music" class="menulink">Music Work</a></li>
            </ul>
        </div>
        <div id="page_info_wrapper">
            <a href="#" onclick="$('#page_info').toggle('slow'); " style="color:#0066dd; text-decoration:none">Like</a>
	    <div id="page_info">
			<font color="#00BBBB" style="display:none">You are my <?php echo $num; ?> visitors. Welcome!</font>
            <iframe src="http://www.facebook.com/plugins/like.php?href=http://stanford.edu/~luyota"
                scrolling="no" frameborder="0"
                style="border:none; width:200px; height:80px"></iframe>
            <a href="#" onclick="$('#page_info').toggle('slow'); " style="color:#0066dd">x</a>
		</div>
        </div>
        <div id="body">
			<?php include ("content.php"); ?>
        </div>
    </div>
	<div id="footer">2009-2011 Copyright by Yu-Ta Lu. All Rights Reserved.</div>
</div>
</body>
</html>
