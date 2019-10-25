<?php
$page='playerlist';
include 'header.php';



$gol = $pdo->query('SELECT * FROM Goalkeepers WHERE idGoalkeepers = '.$_GET['id'])->fetch() ;
$id=$_GET['id'];

 ?>

<div class="top">
<h2><?php echo'<ul<li>'. $gol['Firstname']." ".$gol['Player_Number'].'<br />'." ".$gol['Surname'].'<br /><a>Goalkeeper</a>' ?> </h2>

<?php
echo '</li>';
 echo '<li><img class="shot" src="data:image/jpeg;base64,'.base64_encode($gol['Picture']). '" /></li></ul>
 </div>';


 ?>

 <div class="statscontainer">

 <div class="title">
<h4>Season Statistics</h4>
</div>
 <div class="stats">

 <?php
echo '<table>';
echo '<th><h3>Games Played</h3> </th>';
echo '<th><h3>Minutes Played</h3> </th>';
echo '<th><h3>Clean Sheets </h3></th>';
echo '<th><h3>Goals Against</h3> </th>';
echo '<th><h3>Yellow Cards</h3> </th>';
echo '<th><h3>Red Cards </h3></th>';



echo'<tr>';
echo '<td><h5>'.$gol['Games']. '</h5></td><br />';
echo '<td><h5>'.$gol['Minutes_Played']. '</h5></td><br />';
echo '<td><h5>'.$gol['Clean_Sheets'] .'</h5></td><br />';
echo '<td><h5>'.$gol['Goals_Against'] .'</h5></td><br />';
?>

  <?php
echo '<td class="cardy"><h5 class="yellow">'.$gol['Yellow Cards'] .'</h5></td><br />';
echo '<td class="cardr"><h5 class="red">'.$gol['Red Cards']. '</h5></td><br />';



echo'</tr>' ;







echo '</table></div>';

?>
<div class="personalstats">

<?php
echo '<table>';
echo '<th>Date Of Birth: </th>';
echo '<th>Height: </th>';
echo '<th>Signed: </th>';
echo '<th>Nationality: </th>';

echo '<tr>
<td>'.$gol['Date_of_Birth']. '</td><br />
<td>'.$gol['Height']. '</td><br />
<td>'.$gol['Signed'] .'</td><br />
<td>'.$gol['Nationality'] .'</td>
</tr>' ;

echo '</table>
</div>';

?>

</div>
