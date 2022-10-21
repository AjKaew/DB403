<?php
function roll($score = false) {
  $dice1 = rand(1, 6);
  $dice2 = rand(1, 6);
  $sum = $dice1 + $dice2;
  return $score ?
         "2 Dices roll => $dice1 + $dice2 => ผลรวมคือ $sum" :
         "2 Dices roll => ผลรวมคือ $sum";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dices Roller</title>
</head>
<body>
  <h1>without score</h1>
  <p><?= roll() ?></p>
  <h1>with score</h1>
  <p><?= roll(true) ?></p>
</body>
</html>