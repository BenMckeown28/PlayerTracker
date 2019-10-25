<?php
$page='playerlist';
include 'header.php';

 $mid = $pdo->query('SELECT * FROM Midfielders WHERE idMidfielders = '.$_GET['id'])->fetch() ;
 $id=$_GET['id'];

  ?>


 <h2><?php echo $mid['Firstname']." ". $mid['Surname']   ?></h2>
 <?php echo '<img class="shot" src="data:image/jpeg;base64,'.base64_encode($mid['Picture']).'" />';
 echo $mid['Player_Number'] .'<br />';
 echo 'Games Played:'." ".$mid['Games'] .'<br />';
 echo 'Minutes Played:'." ".$mid['Minutes_Played']. '<br />';
 echo 'Goals:'." ".$mid['Goals'] .'<br />';
 echo 'Goals Against'." ".$mid['Assists'] .'<br />';
 echo 'Yellow Cards:'." ".$mid['Yellow_Cards'] .'<br />';
 echo 'Red Cards:'." ".$mid['Red_Cards']. '<br />';
 echo 'Date of Birth'." ".$mid['Date_Of_Birth']. '<br />';
 echo 'Height'." ".$mid['Height']. '<br />';
 echo 'Debut'." ".$mid['Debut'] .'<br />';
 echo 'Nationality'." ".$mid['Nationality'] .'<br />';
  ?>
