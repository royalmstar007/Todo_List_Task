<?php
  // Include Connection
  include 'config.php';

  $sql = "DELETE FROM demo";
  $result = mysqli_query($conn, $sql);

  if ($result) {
    echo 1;
  }else {
    echo "Error: {$sql}" . mysqli_error($conn);
  }
?>
