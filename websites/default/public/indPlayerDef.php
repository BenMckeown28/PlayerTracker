<?php
$page='playerlist';
include 'header.php';



$def = $pdo->query('SELECT * FROM Defenders WHERE idDefenders= '.$_GET['id'])->fetch() ;
$id=$_GET['id'];

 ?>


<h2><?php echo $def['Firstname']." ". $def['Surname']   ?></h2>
<?php echo '<img class="shot" src="data:image/jpeg;base64,'.base64_encode($def['Picture']).'" />';
echo $def['Player_Number'] .'<br />';
echo 'Games Played:'." ".$def['Games'] .'<br />';
echo 'Minutes Played:'." ".$def['Minutes_Played']. '<br />';
echo 'Goals:'." ".$def['Goals'] .'<br />';
echo 'Goals Against'." ".$def['Assists'] .'<br />';
echo 'Yellow Cards:'." ".$def['Yellow_Cards'] .'<br />';
echo 'Red Cards:'." ".$def['Red_Cards']. '<br />';
echo 'Date of Birth'." ".$def['Date_Of_Birth']. '<br />';
echo 'Height'." ".$def['Height']. '<br />';
echo 'Signed'." ".$def['Signed'] .'<br />';
echo 'Nationality'." ".$def['Nationality'] .'<br />';
 ?>
