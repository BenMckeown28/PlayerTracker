
 <?php
 $page='playerlist';
 include 'header.php';

 $str = $pdo->query('SELECT * FROM Strikers WHERE idStrikers = '.$_GET['id'])->fetch() ;
 $id=$_GET['id'];

   ?>


  <h2><?php echo $str['Firstname']." ". $str['Surname']   ?></h2>
  <?php echo '<img class="shot" src="data:image/jpeg;base64,'.base64_encode($str['Picture']).'" />';
  echo $str['Player_Number'] .'<br />';
  echo 'Games Played:'." ".$str['Games'] .'<br />';
  echo 'Minutes Played:'." ".$str['Minutes_Played']. '<br />';
  echo 'Goals:'." ".$str['Goals'] .'<br />';
  echo 'Goals Against'." ".$str['Assists'] .'<br />';
  echo 'Yellow Cards:'." ".$str['Yellow_Card'] .'<br />';
  echo 'Red Cards:'." ".$str['Red_Card']. '<br />';
  echo 'Date of Birth'." ".$str['Date_Of_Birth']. '<br />';
  echo 'Height'." ".$str['Height']. '<br />';
  echo 'Signed'." ".$str['Signed'] .'<br />';
  echo 'Nationality'." ".$str['Nationality'] .'<br />';
   ?>
