 <html>
 <head>
   <script type="text/javascript">
   function validateForm() {
    var x = document.forms["myForm"]["questions"].value;
    if (x == "") {
        alert("Fill in a question");
        return false;
    }

    var z = document.forms["myForm"]["answer"].value;
    if (z == "") {
        alert("Fill in an answer");
        return false;
    }

}

   </script>
   <title>GramBeast: Instructor</title>
   <style type='text/css'>
   <!--
   #page-container{
     width: 900px;
     height: 900px;
   }
   body{
     font-family: monospace;
   }
   h1{
     text-align: center;
   }
   h3{
     text-align: center;
   }
   p{
     text-align: center;

   }
   select{
     display: block;
     margin-left: auto;
     margin-right: auto;
     margin-top: 20px;
   }
   textarea{
     display: block;
     margin-left: auto;
     margin-right: auto;
     margin-top: 10px;
   }
   input[type=text]{
     display: block;
     margin-left: auto;
     margin-right: auto;
   }

   #leftSidebar{
     float:left;
     background: orange;
     height: 700px;
     width: 150px;
   }
   #rightSidebar{
     float: right;
     background: orange;
     height: 700px;
     width: 150px;
   }

  form { margin: 0 0 0 0; padding: 0; }
  .field { margin-left: 170px; margin-top: 10px; padding-top: .5em; }
  label { font-weight: bold; float: left; width: 20%; margin-right: 1em; text-align: right;}
  #submit { margin-left: 46%; padding-top: 1em; }
  -->
  </style>
</head>
<body>

    <h1>Adding Coursework</h1>
  <div class="page-container">
  <div id="leftSidebar"></div>
  <div id="rightSidebar"></div>
  <form name="myForm" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method='POST' onsubmit="return validateForm();"

<div id='fields'>
     <p>Question: </p><input type='text' name='question' size='65' maxlength='65' />
     <br>
     <p>Answer: </p><input type='text' name='answer' size='65' maxlength='65' />
     <br>
</div>
  <h3>Type</h3>
<select name='header'>

  <option value='daily'>Daily</option>
  <option value='weekly'>Weekly</option>
  <option value='review'>Exam Review</option>
  <option value='other'>Other</option>
</select>
<div id='submit'>
  <input name ='submit' type='submit' value='Submit' />
</div>
</form>
</div>
</body>
</html>
