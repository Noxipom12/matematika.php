<?php
$ data = $_POST["nilai"];

$kali = $_data*$data*$data;

if (!$data) {
    // code...
}else {
  echo "hasil ".$data." pangkat 3 adalah "
  .$kali;
}
?>

<form action="" method="POST">
  <input type="number" name="nilai"></input>
  <button type="submit">SUBMIT</button>
</form>
