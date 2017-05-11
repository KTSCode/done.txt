<?php
  $date = $_GET['date'];
  $pattern = "/x\s".$date."/";
  echo "<h2> Daily Stand Up For<br />".date('l, m-d-y', strtotime($date))."  </h2>";
  $handle = fopen("https://dl.dropboxusercontent.com/s/bpcy3u37uy0i6f7/done.txt?dl=0", "r");

  if ($handle) {
    while (($line = fgets($handle)) !== false) {
      $task = preg_filter($pattern ,'', $line);
      if ($task && strpos($task, '@work') !== false) {
        echo "<p>".$task."</p>";
      }
    }
    fclose($handle);
  } else {
    echo "<h3 class=\"error\"> An error occured while trying to read done.txt </h3>";
  }
?>
