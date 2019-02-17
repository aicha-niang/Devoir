<!doctype html>
<html>
<head> <title>tableau</title>
<meta charset="utf-8">
<link rel ="stylesheet" href="BB.css">

</head>
<body>

<center> <table border> </center>	
<tr>
<td>
 <p></p>
 <p><mark></mark></p>

 <img src="img/BeautyPlus_20180927151737053_save.jpg"  height=200 width=250 />
 <hr><form method="post" action ="tableau2.php"></hr>

<?php
$personne=array(
"prenom:"=>"aicha",
"nom:"=>"niang",
"addresse:"=>"dakar",
"tel:"=>"772437658",
"Mail:"=>"niangaicha096@gmail.com",
"github:"=>"github.com/aicha-niang",
"SLACK:"=>"AICHA-NIANG",
"Date de naissance"=>"20.02.1998"
);
foreach($personne as $key => $values){
	echo " ".$key." ".$values."</br> "; 
}
?>
</td>
  </tr>
  </table border>
</body>
</html>