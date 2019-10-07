<?php
  $q1 = $_POST["q1"];
  $q2 = $_POST["q2"];
  $q3 = $_POST["q3"];
  $q4 = $_POST["q4"];
  $q5 = $_POST["q5"];

  echo "What is the capital of Illinois" . "<br>";
  echo "Your Answer: $q1" . "<br>";
  echo "Correct Answer: Springfield" . "<br><br>";

  echo "What is the capital of Kansas" . "<br>";
  echo "Your Answer: $q2" . "<br>";
  echo "Correct Answer: Topeka" . "<br><br>";

  echo "What is the capital of California" . "<br>";
  echo "Your Answer: $q3" . "<br>";
  echo "Correct Answer: Sacramento" . "<br><br>";

  echo "What is the capital of Texas" . "<br>";
  echo "Your Answer: $q4" . "<br>";
  echo "Correct Answer: Austin" . "<br><br>";

  echo "What is the capital of Missouri" . "<br>";
  echo "Your Answer: $q5" . "<br>";
  echo "Correct Answer: Jefferson City" . "<br><br>";

  $total =0;
  $correct = 0;
  if ($q1 == "Springfield") {
    $total = $total + 20;
    $correct = $correct +1;
  }
  if ($q2 == "Topeka") {
    $total = $total + 20;
    $correct = $correct +1;
  }
  if ($q3 == "Sacramento") {
    $total = $total + 20;
    $correct = $correct +1;
  }
  if ($q4 == "Austin") {
    $total = $total + 20;
    $correct = $correct +1;
  }
  if ($q5 == "Jefferson City") {
    $total = $total + 20;
    $correct = $correct +1;

  }


echo "\n";
echo "You got $total%" . "<br>";
echo "$correct/5 correct answers";


 ?>
