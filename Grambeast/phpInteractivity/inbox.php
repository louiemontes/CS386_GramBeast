<?php
	session_start();
  include "dbh.php";
?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Inbox Form
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../stylesheet.css"/>
    </head> 
<script>
function translateToEnglish(){
  // just reloading the page currently
  history.go(0);
}
function translateToSpanish() {
  document.getElementById("mainContent").innerHTML = "<h1>Will translate to Spanish soon!</h1>";
}
function translateToArabic(){
  document.getElementById("mainContent").innerHTML = "<h1>Will translate to Arabic later!</h1>";
}
</script>
<body>
  <div id = "pageContainer">
    <div id = "header">
      <div id = "navigationBar">
        <ul>
          <li><a href="../../~lm877/index.php">Home Page</a></li>
          <li><a href="../About/index.php">About Me</a></li>
          <li><a href="../Contact/index.php">Contact</a></li>
          <li><a href="../LearningSites/index.php">Great Sites For Learning Arabic</a></li>
          <li><a href="../Resume/index.php" target="_blank">Résumé</a></li>
        <?php 
        if (!isset($_SESSION['uid'])) {
          echo "<li><a href='../phpInteractivity/users.php'>Login</a></li>";
        } else {
          echo "<li><a href='../phpInteractivity/users.php'>Logout</a></li>";
        echo "<li><a href='../phpInteractivity/messanger.php'>Messanger</a></li>";
        echo "<li><a href='../phpInteractivity/inbox.php'>Inbox</a></li>";
        }
        ?>
        </ul>

      </div>
    </div>

    <div id = "leftSideBar">
      <ul>
        <li>
          <button onclick="translateToEnglish()">
            <img src= "../images/americanFlag.jpeg" style="width:40px;height:30px;">
          </button>
        </li>
        
        <li>
          <button onclick="translateToSpanish()">
            <img src= "../images/spanishFlag.jpeg" style="width:40px;height:30px;">
          </button>
        </li>
        
        <li>
          <button onclick="translateToArabic()">
            <img src= "../images/arabicFlag.jpeg" style="width:40px;height:30px;">
          </button>
        </li>
      </ul>
    

      <div id = "notificationBar">
        <ul>
          Notifications
          <li>Visual enhancments</li>
          <li>Language support coming</li>
        </ul>
      </div>

    </div>

    <div id = "mainContent">
    	<br><br>
    	<?php 
    		if (!isset($_SESSION['uid'])) {
    			echo "You are not logged in.";
    			echo "<br><br><br>";
    			echo "<form action='login.php' method='POST'>";
    			echo "<input type='text' name='uid' placeholder='Username'><br>";
    			echo "<input type='password' name='pwd' placeholder='Password'><br>";
    			echo "<button type='submit'>LOGIN</button>";
    			echo "</form>";
    			echo "<br><br><br>";
    		} else {
				echo "Here are your messages, ";
				echo $_SESSION['uid'];
				echo ".";
        echo "<br><br><br>";
        $uid = $_SESSION['uid'];
        $sql = "SELECT * FROM messages WHERE target='$uid'";
        $process = "UPDATE messages SET seen=true WHERE target='$uid'";
        $result = $db->query($sql);
        $toProcess = $db->query($process);

        if ($result->num_rows > 0) {
            // output data of each row (used from W3Schools, altered for my needs)
            while($row = $result->fetch_assoc()) {
                echo "From: " . $row["sender"]. "<br>" . " Subject: " . $row["subject"]. "<br>" . " Body: " . $row["body"]. "<br>";
                echo "<br>";

            }
        } else {
            echo "0 results";
        }

        echo "<br><br><br>";
        echo "<form action='logout.php'>";
        echo "<button>LOG OUT</button>";
        echo "</form>";
      }
      ?>
    </div>

<?php

?>

    <div id ="footer">
      <div id = "contactBar">
        <ul>
          <li><a href="https://plus.google.com/u/0/101781539549443431358/posts">Google+</a></li>
          <li><a href="https://www.youtube.com/channel/UCO07PCFm8hcgPFOYH6j5Msg">YouTube</a></li>
          <li><a href="https://twitter.com/louiemontes">Twitter (@louiemontes)</a></li>
          <li><a href="https://github.com/louiemontes">Github (@louiemontes)</a></li>
          <li><a>Skype: evilgorky</a></li>
          <li><a>Email: lm877@nau.edu</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>
</html>
