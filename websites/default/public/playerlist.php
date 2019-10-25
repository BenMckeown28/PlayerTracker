<?php
$page='playerlist';
require 'header.php';
 ?>

<a id="toplink" href="#top">
<button class="backtotop">^</button>
</a>
<div id="top">
<div class="title">
<h1>Player List</h1>
</div>
</div>


<ul class="filters">
  <a id="link4" href="#Goalkeepers">
  <li>
    GoalKeepers
  </li>
</a>
  <a id="link3" href="#Defenders">
  <li>
    Defenders
  </li>
</a>
    <a id="link2" href="#Midfielders">
  <li>
    Midfielders
  </li>
</a>
  <a id="link" href="#forwards">
  <li>
    Forwards
  </li>
  </a>
</ul>
<div id="Goalkeepers">

<div class="title">
<h5>Goalkeepers</h5>
</div>
<div class="fade_rule"></div>
<div class="goal">

<table>

<?php $goalkeepers=$pdo->query('SELECT * FROM Goalkeepers ');
$A=1;
foreach ($goalkeepers as $g){
if ($A==1){
  echo '<tr>';}
echo '<td><div class="shot"><img class="shot" src="data:image/jpeg;base64,'.base64_encode($g['Picture']).'" /> </div>

<a href="indPlayerGol.php?id='.$g['idGoalkeepers'].'"></li><span>'.$g['Player_Number']." ".'<br /> '.'<b>'.$g['Firstname'].'</b> '." ".$g['Surname'].' </td>';
if($A==4){
  $A = 1;
  echo "</tr>";
}
else{
  $A++;
}
}

?>

</table>
</div>

</div>

<div id="Defenders">
<div class="title">
<h5 >Defenders</h5>
</div>
<div class="fade_rule"></div>
 <div class="DEF">
 <table>
 <?php $Defenders=$pdo->query('SELECT * FROM Defenders');
 $A=1;
 foreach ($Defenders as $g){
 if ($A==1){
   echo '<tr>';}
 echo '<td><div class="shot"><img class="shot" src="data:image/jpeg;base64,'.base64_encode($g['Picture']).'" /> </div>
<a href="indPlayerDef.php?id='.$g['idDefenders'].'"><span>'.$g['Player_Number'].'<b>'.$g['Firstname'].'</b> '.$g['Surname'].' </td>';
 if($A==4){
   $A = 1;
   echo "</tr>";
 }
 else{
   $A++;
 }
 }

 ?>

 </table>
 </div>

</div>










<div id="Midfielders">

<div class="title">
<h5>Midfielders</h5>
</div>
<div class="fade_rule"></div>
<div class="MID">
<table>
<?php $Midfielders=$pdo->query('SELECT * FROM Midfielders');
$A=1;
foreach ($Midfielders as $g){
if ($A==1){
  echo '<tr>';}
echo '<td><div class="shot"><img class="shot" src="data:image/jpeg;base64,'.base64_encode($g['Picture']).'" /> </div>
<a href="indPlayerMid.php?id='.$g['idMidfielders'].'"><span>'.$g['Player_Number'].'<b>'.$g['Firstname'].'</b> '.$g['Surname'].' </td>';
if($A==4){
  $A = 1;
  echo "</tr>";
}
else{
  $A++;
}
}

?>

</table>
</div>

</div>




<div id="forwards">

<div class="title">
      <h5 >Forwards</h5>
</div>
<div class="fade_rule"></div>




 <div class="For">
 <table>
 <?php $Strikers=$pdo->query('SELECT * FROM Strikers');
 $A=1;
 foreach ($Strikers as $g){
 if ($A==1){
   echo '<tr>';}
 echo '<td><div class="shot"><img class="shot" src="data:image/jpeg;base64,'.base64_encode($g['Picture']).'" /> </div>
 <a href="indPlayerStr.php?id='.$g['idStrikers'].'"><span>'.$g['Player_Number'].'<b>'.$g['Firstname'].'</b> '.$g['Surname'].' </td>';
 if($A==4){
   $A = 1;
   echo "</tr>";
 }
 else{
   $A++;
 }
 }

 ?>

 </table>
 </div>

</div>








<script>


$("#toplink").click(function() {

  $('html, body').animate({
    scrollTop: $("#top").offset().top
  }, 'slow');
});


$("#link").click(function() {

  $('html, body').animate({
    scrollTop: $("#forwards").offset().top
  }, 'slow');
});

$("#link2").click(function() {
  $('html, body').animate({
    scrollTop: $("#Midfielders").offset().top
  }, 'slow');
});

$("#link3").click(function() {

  $('html, body').animate({
    scrollTop: $("#Defenders").offset().top
  }, 'slow');
});

$("#link4").click(function() {

  $('html, body').animate({
    scrollTop: $("#Goalkeepers").offset().top
  }, 'slow');
});

</script>
