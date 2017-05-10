<html>
  <head>
    <title>done.txt</title>
  </head>
  <body style="display: flex; justify-content: center;">
    <div style="flex-direction: column; ">
      <?php echo '<h1>Done.txt</h1>'; ?>
      <h3> Enter a date:</h3>
      <?php //This gets the last working day a
        $currentWeekDay = date( "w" );
        switch ($currentWeekDay) {
          case "1": {
            $lastWorkingDay = date("d", strtotime("-3 day"));
            break;
          }
          case "0": {
            $lastWorkingDay = date("d", strtotime("-2 day"));
            break;
          }
          default: {
            $lastWorkingDay = date("d", strtotime("-1 day"));
            break;
          }
        }
        $lastWorkingDate = date("Y-m-").$lastWorkingDay;
      ?>
      <form onsubmit="alert('submited')" >
        <input type="date" value="<?php echo $lastWorkingDate; ?>" />
        <br />
        <input type="submit" value="Get Tasks"/>
      </form>
    </div>
  </body>
</html>
