<http>
<head>
      <title>Welcome Instructor! </title>
</head>
  <style type = "text/css">
  div.note{
    position: fixed;
    bottom: 0;
    right: 0;
    width:200px;
    border: 20px solid lightblue;
  }
  h1{
    position: absolute;
    top: 40px;
    left: 450px;
    color: black;
  }
  h3{
    position: relative;
  }
  h4{
    position: relative;
    left: 465px;
  }
  ul{
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    overflow: hidden;
    background-color: #333;
  }
  li{
    display: inline;
    float: left;
    border-right: 1px solid #bbb;
  }
  li a{
    display: block;
    color: white;
    text-align: center;
    padding: 8px;
  }
  li a:hover {
    background-color: #dddddd;
  }
  #page-container{
    width: 1000px;
    height: 800px;
    margin:inherit;
  }
  #tabs{
    background: yellow;
    height: 50px;
  }
  #footer{
    clear: both;
    background: yellow;
    height: 80px;

  }
  #leftSidebar{
    float: left;
    width: 220px;
    height: 400px;
    background: green;

  }
  #rightSidebar{
    float: right;
    width: 220px;
    height: 400px;
    background: green;

  }
  p{
    position: relative;
    top: 5px;
    left: 480px;

  }
  </style>
<body>
      <div id = "page-container">
        <div class="note">
          under maintanence
        </div>
        <div id = "tabs">
          <h1>Welcome!</h1>
          <ul>
            <li> <a href =""> Add Course</a>
            </li>
            <li> <a href ="addWork.php"> Add Work</a>
            </li>
            <li> <a href =""> Remove Course </a>
            </li>
            <li> <a href =""> Sign Out</a>
            </li>

          </ul>
        </div>
        <div id = "leftSidebar">
          <h3>Current Courses</h3>
          <br>

            "Your current list of courses are empty"

        </div>
        <div id = "rightSidebar">
          <h3>Class Ranks</h3>
          <br>

            "Your current list of courses are empty"

        </div>
        <div id = "mainContent">
        </div>
        <div id = "footer">
          <h4> GramBeast</h4>
            <p>CS386<br>
        </div>
      </div>
</body>
</http>