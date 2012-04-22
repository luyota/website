<?php

$opt = $_GET["option"];

if ($opt=="profile" || $opt == "") {
?>

<h1>Profile</h1>
<hr/>
<table>
<tr><td width="120px" style="border-right: 1px solid #AAAAAA; vertical-align: top">
	<!--h3 style="margin-top: 0px; margin-bottom: 10px;">Yu-Ta Lu</h3-->
	<img src="image/me.jpg"/><br/>
	<!--span class="intro">	
	Masters<br/>
    The Computer Science Department<br/>
	Stanford University<br/>
	</span-->
	<!--span style="color: black; font-weight: bold">My</span-->
	<ul class="list" style="list-style-type: none; margin-top: 3px;">
	<li class="list"><span style="color:green; font-size: 14px">Email</span><br/>
    <span style="font-size: 11px">
    luyota@stanford.edu<br/><br/>
    </span>
    </li>
	<li class="list"><a href="http://www.linkedin.com/pub/yu-ta-lu/26/125/127" target="_blank">LinkedIn</a></li>	
	<li class="list"><a href="http://www.facebook.com/luyota" target="_blank">Facebook</a></li>	
	<li class="list"><a href="http://www.streetvoice.com.tw/luyota" target="_blank">Music Blog</a></li>
	<li class="list"><a href="DAism/index.php" target="_blank">Old website</a></li>
    </ul>
</td>

<td style="padding-left: 10px; vertical-align: top">	
<p class="desc">
Hi, I'm <span class="emphasis">Yu-Ta Lu</span>, or you can call me <span class="emphasis">Michael</span>. 
</p>

<p class="desc">
I'm currently a <span class="emphasis">masters</span> student in the <span class="emphasis">Computer Science Department at Stanford</span>. I specialize in <span class="emphasis">human-computer interaction (HCI)</span> because I like humans more than machines :P
</p>
<p class="desc">
I started programming when I was in high school and refined my skills in the CS department in National Taiwan University. After choosing the HCI track at Stanford, I learned how technology and design ideas can change human behavior and change the world, and I'd love to become one of the guys that makes an impact. Here's a video I like a lot:<br/><br/>
<iframe title="YouTube video player" width="480" height="390" src="http://www.youtube.com/embed/2lXh2n0aPyw" frameborder="0" allowfullscreen></iframe>
</p>
<p class="desc">
Besides programming, I'm also a music player. I started to learn piano at the age of 3, but now I'm even better at playing the guitar though not at a professional level. Anyway, I like <span class="emphasis">music</span>.  
</p>
<p class="desc">
Hope you will enjoy my website!
</p>
</td></tr>

</table>


<?php
}

else if($opt == "academic") {
?>
<h1>Academic Experience</h1>
<hr/>
<table>

<tr><td>	
<p>
	<h4 class="title">Research Experience (July 2008 - June 2009)</h4>
	<ul class="list">
	<li class="list"><b>"Tag Recommendation" research project</b><br/>
	Duration: July 2008 to June 2009<br/>
	Advisor: Prof. Jane Yung-Jen Hsu, National Taiwan University.<br/>
	Grants: National Science Council NSC 97-2815-C-002-106-E.<br/>
	Co-partners: Shoou-I Yu and Tsung-Chieh Chang<br/>	
	</li>	
	</ul>
</p>

<p>
	<h4 class="title">Publication</h4>
	<ul class="list">
	<li class="list">
	<i>Yu-Ta Lu, Shoou-I Yu, Tsung-Chieh Chang, Jane Yung-jen Hsu. </i>
	"A Content-Based Method to Enhance Tag Recommendation."
	In IJCAI '09: Proceedings of the Twenty-first International Joint Conference on Artificial Intelligence, 
	pages 2064 - 2069, 2009
	<a href="http://ijcai.org/papers09/Papers/IJCAI09-340.pdf" target="_blank">[PDF]</a><br/>	
	</li>	
	</ul>
</p>

<p>
	<h4 class="title">Others</h4>
	<ul class="list">
	<li class="list">ACM Contestant Cultivation Camp in junior year</li>
	<li class="list">IOI Contestant Cultivation Camp in high school</li>
	</ul>
</p>

</td></tr>
</table>

<?php
}

else if($opt == "achievement") {
?>
<h1>Achievements</h1>
<hr/>
<table>

<tr><td>	
<p>
	<h4 class="title">Presidential Awards, National Taiwan University</h4>
	<h5 style="margin-top: 0px; margin-bottom: 2px; font-weight: lighter">
	(Awarded to the top 5% students in terms of grades for each semester)</h5>
	<ul class="list">	
	<li class="list">2004 Fall Semester</li>	
	<li class="list">2006 Spring Semester</li>	
	</ul>
</p>

<p>
	<h4 class="title">Scholarship</h4>
	<ul class="list">
	<li class="list">
	<a href = "http://www.faos.org.tw/" target="_blank">Foundation for The Advancement of Outstanding Scholarship</a> Special Travel Grants to <a href="http://www.ijcai09.org" target="_blank">Twenty-first International Joint Conference on Artificial Intelligence</a>, USA	
	<br/>	
	</li>	
	<li>
	<a href="http://www.nsc.gov.tw" target="_blank">National Science Council</a> Undergraduate Student Research Fellowship
	</li>
	</ul>
</p>

<p>
	<h4 class="title">Music Competitions</h4>
	<ul class="list">
	<li class="list"><b>Championship and "Best Melody Award"</b> in song writing section of 24th National Chenchi University Golden Melody Award</li>
	<li class="list"><b>Championship</b> in NTU Graduation Cup Singing Competition</li>
	<li class="list"><b>2nd prize</b> in NTU CSIE Singing Competition</li>
	<li class="list"><b>2nd prize</b> in Soochow University Golden String Award</li>
	</ul>
</p>

<p>
	<h4 class="title">Other Competitions</h4>
	<ul class="list">
	<li class="list"><b>Championship</b> in "Who's The Unluckiest Guy in NTU"" paper-scissors-rock game</li>	
	</ul>
</p>
</td></tr>
</table>

<?php
}

else if($opt == "music") {
?>
<h1>Music Work</h1>
<hr/>
<table>

<tr><td>	
<p>
	<h4 class="title">Some Songs I Have Written</h4>
	<?php

		$xml=simplexml_load_file("music_list.xml");
		echo "<table class='content_table'><br/>";
		echo "<tr><td width='80px'><b>Title</b></td><td width='250px'><b>Description</b></td><td><b>Listen</b></td><td><b>Info</b></td></tr>\n";
		//echo $xml->getName() . "<br />";

		foreach($xml->children() as $child)
		 {
		 echo "<tr>";
		  foreach ($child->children() as $c2) 	
			echo "<td class='content_col'>$c2</td>\n";
		echo "</tr>";
		}
		echo "</table>\n";
	?>
</p>

</td></tr>
</table>

<?php
}
else if($opt == "project") {
?>
<h1>Projects</h1>
<hr/>
<table>
<tr><td>	
<span style="color: #FF6644; font-weight:bold">Here are some cool projects I did. Please contact me (email: luyota@stanford.edu) if you found some projects interesting and would like to know more!</span>
<p>
	<?php

		$xml=simplexml_load_file("project_list.xml");
		//echo "<table class='content_table'><br/>";
		//echo "<tr><td width='80px'><b>Project Name</b></td><td width='400px'><b>Description</b></td><td><b>Screenshot</b></td><td><b>Other</b></td></tr>\n";
		//echo $xml->getName() . "<br />";

		foreach($xml->children() as $child)
		 {
             $name = $desc = $img = $link = $other = "";
		 //echo "<tr>";
		 foreach ($child->children() as $c2) {
             if ($c2->getName() == 'NAME')
    			$name = $c2;
             elseif ($c2->getName() == 'DESC') 
    			$desc = $c2;
             elseif ($c2->getName() == 'SHOT') 
    			$img = $c2;
             elseif ($c2->getName() == 'OTHER') 
    			$other = "$c2";
             elseif ($c2->getName() == 'LINK') 
    			$link = "$c2";
         }
         echo "<table>";
         echo "<tr><td colspan='2'><span style='font-size: 18px; font-weight: bold; color: black'>$name</span><span style='font-size:12px; float:right'>$link</font></td></tr>";
         echo "<tr><td>$img</td><td valign='top' style='padding-left: 15px'>$desc</td></tr>";
         echo "<tr><td colspan='2'><span style='font-size: 14px'>$other</span></td></tr>";
         echo "</table>";
         echo "<hr/>";
		//echo "<td class='content_col'>$c2</td>\n";
		//echo "</tr>";
		}
		//echo "</table>\n";
	?>
	
</p>
</td></tr>
</table>
<?php
}
?>
