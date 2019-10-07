<?php

function multiply($i, $j){
  return $i * $j;

}
  echo "<table>";

  for ($i=0; $i <= 100; $i++) {
    echo "<tr>";
    for ($j=0; $j <= 100; $j++) {
      if ($i==0 && $j==0) {

        echo "<th></th>";
      }
      elseif ($j ==1 && $i != 0) {
        echo "<th> $i </th>";
      }
      elseif ($i == 1 && $j != 0) {
        echo "<th> $j </th>";
      }
      else {
        $p = multiply($i, $j);
        echo "<td> $p </td>";
      }
    }
    echo "</tr>";
  }

echo "</table>";
 ?>
