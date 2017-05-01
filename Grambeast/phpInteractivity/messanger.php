<?php
	session_start();
?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Messager
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
    			echo "Log in to use this feature.";
    		} else {
				echo "Feeling talkitive ";
				echo $_SESSION['uid'];
				echo "?";
				echo "<br><br><br>";
        echo "<form action='messageSend.php' method='POST'>";
        echo "From: ";
        echo $_SESSION['uid'];
        echo "<br>";
        echo "To: <input type='text' name='to' placeholder='anotherUsername'><br>";
        echo "Subject: <input type='text' name='subject' placeholder='On Tombstone (1979)'><br>";
        echo "<br><br>";
        echo "Body:";
        echo "<br>"; 
        echo "<textarea name='body' rows='4' cols='50' placeholder='Lorem Ipsum...'></textarea><br>";
        echo "<button type='submit'>Send!</button>";
        echo "</form>";
    		}

      ?>
    </div>

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
