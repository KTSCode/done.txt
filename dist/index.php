<html>
  <head>
    <title>done.txt</title>
    <style>
      body {
        text-align: center;
        font-size: 30px;
        background-color: #111517;
        color: #2ecc71;
      }
      h1 {
        font-size: 64px;
      }
      h3 {
        font-size: 44px;
      }
      li {
        text-align: left;
        margin-left: 5px;
        font-size: 34px;
      }
      .button {
        height: 100px;
        width: 400px;
        margin: 20px;
        font-size: 40px;
        background-color: #2ecc71;
      }
      #date-field {
        width: 400px;
        height: 100px;
        font-size: 44px;
      }
      #dail-stand-up {
        width: 400px;
      }

    </style>
  </head>
  <body style="display: flex; justify-content: center;">
    <div style="flex-direction: column; ">
      <?php echo '<h1>Done.txt</h1>'; ?>
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
      <form id="form-date-form">
        <input type="date" id="date-field" value="<?php echo $lastWorkingDate; ?>" />
        <br />
        <input type="submit" value="Get Tasks" class="button"/>
      </form>
      <div id="daily-stand-up" style="width ">
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>
