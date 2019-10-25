<?php
$page='table';
require 'header.php';

$teams = $pdo->query('SELECT * FROM EPL_Table')
 ?>
 <div class="epltable">

<table>

<th>
Team
</th>
<th>
Pl
</th>
<th>
W
</th>
<th>
D
</th>
<th>
L
</th>
<th>
F
</th>
<th>
A
</th>
<th>
GD
</th>
<th>
Pts
</th>

<?php
foreach($teams as $club){

$ptswins = $club['Wins'] * 3 ;
$ptsdraws = $club['Draws'] * 1 ;

$pts = $ptswins + $ptsdraws ;

 ?>
<tr>
  <?php
  echo '<td>'.$club['Team'].'</td>' ;
    echo '<td>'.$club['Played'].'</td>' ;
      echo '<td>'.$club['Wins'].'</td>' ;
        echo '<td>'.$club['Draws'].'</td>' ;
          echo '<td>'.$club['Losses'].'</td>' ;
            echo '<td>'.$club['Goals_For'].'</td>' ;
              echo '<td>'.$club['Goals_Against'].'</td>' ;
                echo '<td>'.$club['Goal_Difference'].'</td>' ;
                            echo '<td>'.$pts.'</td>' ;
   ?>
</tr>
<?php }?>

</table>

</div>
