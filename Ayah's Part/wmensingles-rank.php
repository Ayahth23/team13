<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet"
        type="text/css"
        href="rankings.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src=https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js></script>
    <script type="text/javascript" src="women.js"></script>
    <title>Women's Singles Rankings</title>
  </head>
  <body>
    <!--menu-->
    <div class="topnav">
      <a href="homepage.html">Home</a>
      <a href="content.html">Content</a>
      <a class="active" href="homerankings.html">Rankings</a>
      <a href="#interactive">Interactive</a>
      <a href="contact.html"> Contact</a>
      <a href="about.html">About</a>
          
      <h3>TSH.tennis</h3>
    </div>
    <div class="menu">
      <br>
      <p class="rankName">Top 20 Players</p>
    </div>
    <br>
    <!--creates dropdown button for five years of men's singles rankings-->
    <div class="dropdown" id="center">
    <!--shows year buttons when main button is clicked through function-->
      <button onclick="myFunction()" class="dropbtn">Year &nbsp;&nbsp;&nbsp;<i class="arrow"></i></button>
      <div id="myDropdown" class="dropdown-content">
        <!--runs different js functions depending on button clicked-->
        <a href="#" id="m20" onclick="one();">2020 Women's Singles</a>
        <a href="#" id="m19" onclick="two();">2019 Women's Singles</a>
        <a href="#" id="m18" onclick="three();">2018 Women's Singles</a>
        <a href="#" id="m17" onclick="four();">2017 Women's Singles</a>
        <a href="#" id="m16" onclick="five();">2016 Women's Singles</a>
      </div>
    </div>
    <!--establishes connection to database of year 2020-->
    <br><br>
    <?php
      $dbOk = false;
      @ $db = new mysqli('localhost', 'root', '', 'termproject');   
      if ($db->connect_error) {
        echo '<div class="messages">Could not connect to the database. Error: ';
        echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
      } else {
        $dbOk = true; 
      }
    ?>
    <!--if connection establishes, selects all rows in database of year 2020 
    and outputs them, closes connection and database-->
    <table id="t1" class="rankTable">
    <?php
      if ($dbOk) {
        $query = 'select * from womensingles2020 order by rank';
        $result = $db->query($query);
        $numRecords = $result->num_rows;        
        echo '<tr><th>Rank:</th><th>Name:</th><th>Country:</th><th>Points:</th><th></th></tr>';
        for ($i=0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc();
          if ($i % 2 == 0) {
            echo "\n".'<tr id="actor-' . $record['rank'] . '"><td>';
          } else {
            echo "\n".'<tr class="odd" id="actor-' . $record['rank'] . '"><td>';
          }
          echo htmlspecialchars($record['rank']); 
          echo '</td><td>';
          echo htmlspecialchars($record['name']);
          echo '</td><td>';
          echo htmlspecialchars($record['country']); 
          echo '</td><td>';
          echo htmlspecialchars($record['points']);
          echo '</td><td>';
        }        
        $result->free();        
        $db->close();
      }      
    ?>
    <!--repeats process for years 2016-2019-->
    </table>
    <?php
      $dbOk = false;
      @ $db = new mysqli('localhost', 'root', '', 'termproject');   
      if ($db->connect_error) {
        echo '<div class="messages">Could not connect to the database. Error: ';
        echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
      } else {
        $dbOk = true; 
      }
    ?>
    <table id="t2" class="rankTable">
    <?php
      if ($dbOk) {
        $query = 'select * from womensingles2019 order by rank';
        $result = $db->query($query);
        $numRecords = $result->num_rows;        
        echo '<tr><th>Rank:</th><th>Name:</th><th>Country:</th><th>Points:</th><th></th></tr>';
        for ($i=0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc();
          if ($i % 2 == 0) {
            echo "\n".'<tr id="actor-' . $record['rank'] . '"><td>';
          } else {
            echo "\n".'<tr class="odd" id="actor-' . $record['rank'] . '"><td>';
          }
          echo htmlspecialchars($record['rank']); 
          echo '</td><td>';
          echo htmlspecialchars($record['name']);
          echo '</td><td>';
          echo htmlspecialchars($record['country']); 
          echo '</td><td>';
          echo htmlspecialchars($record['points']);
          echo '</td><td>';
        }        
        $result->free();        
        $db->close();
      }      
    ?>
    </table>
    <?php
      $dbOk = false;
      @ $db = new mysqli('localhost', 'root', '', 'termproject');   
      if ($db->connect_error) {
        echo '<div class="messages">Could not connect to the database. Error: ';
        echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
      } else {
        $dbOk = true; 
      }
    ?>
    <table id="t3" class="rankTable">
    <?php
      if ($dbOk) {
        $query = 'select * from womensingles2018 order by rank';
        $result = $db->query($query);
        $numRecords = $result->num_rows;        
        echo '<tr><th>Rank:</th><th>Name:</th><th>Country:</th><th>Points:</th><th></th></tr>';
        for ($i=0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc();
          if ($i % 2 == 0) {
            echo "\n".'<tr id="actor-' . $record['rank'] . '"><td>';
          } else {
            echo "\n".'<tr class="odd" id="actor-' . $record['rank'] . '"><td>';
          }
          echo htmlspecialchars($record['rank']); 
          echo '</td><td>';
          echo htmlspecialchars($record['name']);
          echo '</td><td>';
          echo htmlspecialchars($record['country']); 
          echo '</td><td>';
          echo htmlspecialchars($record['points']);
          echo '</td><td>';
        }        
        $result->free();        
        $db->close();
      }      
    ?>
    </table>
    <?php
      $dbOk = false;
      @ $db = new mysqli('localhost', 'root', '', 'termproject');   
      if ($db->connect_error) {
        echo '<div class="messages">Could not connect to the database. Error: ';
        echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
      } else {
        $dbOk = true; 
      }
    ?>
    <table id="t4" class="rankTable">
    <?php
      if ($dbOk) {
        $query = 'select * from womensingles2017 order by rank';
        $result = $db->query($query);
        $numRecords = $result->num_rows;        
        echo '<tr><th>Rank:</th><th>Name:</th><th>Country:</th><th>Points:</th><th></th></tr>';
        for ($i=0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc();
          if ($i % 2 == 0) {
            echo "\n".'<tr id="actor-' . $record['rank'] . '"><td>';
          } else {
            echo "\n".'<tr class="odd" id="actor-' . $record['rank'] . '"><td>';
          }
          echo htmlspecialchars($record['rank']); 
          echo '</td><td>';
          echo htmlspecialchars($record['name']);
          echo '</td><td>';
          echo htmlspecialchars($record['country']); 
          echo '</td><td>';
          echo htmlspecialchars($record['points']);
          echo '</td><td>';
        }        
        $result->free();        
        $db->close();
      }      
    ?>
    </table>
    <?php
      $dbOk = false;
      @ $db = new mysqli('localhost', 'root', '', 'termproject');   
      if ($db->connect_error) {
        echo '<div class="messages">Could not connect to the database. Error: ';
        echo $db->connect_errno . ' - ' . $db->connect_error . '</div>';
      } else {
        $dbOk = true; 
      }
    ?>
    <table id="t5" class="rankTable">
    <?php
      if ($dbOk) {
        $query = 'select * from womensingles2016 order by rank';
        $result = $db->query($query);
        $numRecords = $result->num_rows;        
        echo '<tr><th>Rank:</th><th>Name:</th><th>Country:</th><th>Points:</th><th></th></tr>';
        for ($i=0; $i < $numRecords; $i++) {
          $record = $result->fetch_assoc();
          if ($i % 2 == 0) {
            echo "\n".'<tr id="actor-' . $record['rank'] . '"><td>';
          } else {
            echo "\n".'<tr class="odd" id="actor-' . $record['rank'] . '"><td>';
          }
          echo htmlspecialchars($record['rank']); 
          echo '</td><td>';
          echo htmlspecialchars($record['name']);
          echo '</td><td>';
          echo htmlspecialchars($record['country']); 
          echo '</td><td>';
          echo htmlspecialchars($record['points']);
          echo '</td><td>';
        }        
        $result->free();        
        $db->close();
      }      
    ?>
    </table>
    <br><br>
  </body>
</html>