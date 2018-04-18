<?php

include ('head.php');
include ('header.php');

/*$response = $_GET['radio'];

if(isset($_POST['boution'])){

  if($_POST['fruit'] == "vol") 
  {
        include 'transport.php';
  } 
  elseif($_POST['fruit'] == "train") 
  {
        include 'train.php';
      //header('Location: http://localhost:8888/Journey2/train.php');
  } 
  elseif($_POST['fruit'] == "chauffeur") 
  {
        include 'chauffeur.php';
      //header('Location: http://localhost:8888/Journey2/chauffeur.php');
  }
} else {
  
}*/

if(!isset($_GET['boution'])) :
	$radio1 = $_POST['fruit1'];
	$radio2 = $_POST['fruit2'];
	$radio3 = $_POST['fruit3'];
 
	if($radio1) :
		header('Location: http://localhost:8888/Journey2/transport.php');;
	endif;
	if($radio2) :
		header('Location: http://localhost:8888/Journey2/train.php');;
	endif;
	if($radio3) :
		header('Location: http://localhost:8888/Journey2/chauffeur.php');;
	endif;
endif;

include ('footer.php')
?>