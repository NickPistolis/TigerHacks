<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>TigerHacks Project</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body bgcolor="#FFD700">
    <style>
        @import "compass/css3";
// Font imports
@import url(https://fonts.googleapis.com/css?family=Lato:300,400,700);
// Color vars
$white: #fff;
$grey: #ccc;
$dark_grey: #555;
$blue: #4f6fad;
$pink: #ee9cb4;
// Mixins
@mixin lato-book { font-family: 'Lato', sans-serif; font-weight: 300; }
@mixin lato-reg { font-family: 'Lato', sans-serif; font-weight: 400; }
@mixin lato-bold { font-family: 'Lato', sans-serif; font-weight: 700; }
@mixin btn($color) {
  background-color: $color;
  border-bottom-color: darken($color, 15%);
  &:hover {
      background-color: lighten($color, 5%);
    }
}
// Functions
@function pxtoem($target, $context){
  @return ($target/$context)+0em;
}
//
body {
}
div, textarea, input {
  @include box-sizing(border-box); 
}  
.container {  
  max-width: 550px;
  min-width: 324px;
  margin: -135px auto 0px;
  border: 1px solid lighten($grey, 1%); 
  border-bottom: 3px solid $grey;
  background-color: #FAFAFA;
  box-shadow: 5px 3px 3px rgba(97, 97, 97,0.5) ;
    
}
.row {
  width: 100%;
  margin: 0 0 1em 0;
  padding: 0 2.5em;
  &.header {
    padding: 1.5em 2.5em;
    border-bottom: 1px solid $grey; 
    background: url(http://niiiick.com/files/blur-city-1.jpg) left -80px;
    color: $white;
  }
  &.body {
    padding: .5em 2.5em 1em;
  }
}
.pull-right {
  float: right; 
}
h3 {
  @include lato-book;
  display: inline-block;
  font-weight: 100;
  font-size: pxtoem(45, 16);
  border-bottom: 1px solid hsla(100%, 100%, 100%, 0.3);
  margin: 0 0 0.2em 0;
  padding: 0 0 0.4em 0;
  color:#000000;
  
}
h3 {
  @include lato-reg;
  font-size: pxtoem(20, 16);
  margin: 1em 0 0.4em 0;
    
}
.btn {
  font-size: pxtoem(17, 16);
  display: inline-block;
  padding: 0em 1.3em 0.1em;
  margin: 1.5em 0 0;
  color: white;
  background-color: #00b38f;
  border-width: 0 0 0 0;
  border-bottom: 1px solid;
  text-transform: uppercase;
  @include btn(darken($grey, 10%));
  @include lato-book;
        }
}
        label{
            text-decoration-color: black;
        }
form {
  max-width: 100%;
  display: block;
    
  ul {
    margin: 0;
    padding: 0;
    list-style: none;
    li {
      margin: 0 0 0.25em 0; 
      clear: both;
      display: inline-block;
      width: 100%;
      &:last-child {
          margin: 0;    
        }
        p {
          margin: 0;
          padding: 0;
          float: left;
          &.right {
            float: right;
          }
        }     
        .divider {
          margin: 0.5em 0 0.5em 0;
          border: 0;
          height: 1px;
          width: 100%;
          display: block;
          background-color: $blue;
          background-image: linear-gradient(to right, $pink, $blue);
        }
        .req {
          color: $pink; 
        }
    }
  }
  label {
    display: block;
    margin: 0 0 0.5em 0;
    color: $blue;
    font-size: pxtoem(16, 16);
  }
  input {
    margin: 0 0 0.5em 0;
    border: 1px solid $grey;
    padding: 6px 10px;
    color: $dark_grey;
    font-size: pxtoem(16, 16)
  }
    
}
        
      
        label::checkbox{
        
        color:black;
    }
// Media Queries
@media only screen and (max-width:480px) {
  .pull-right {
    float: none; 
  }
  input {
    width: 100%; 
  }
  label {
    width: 100%;
    display: inline-block;
    float: left;
    clear: both;
  }
  li, p {
   width: 100%; 
  }
  input.btn {
   margin: 1.5em 0 0.5em; 
  }
  h1 {
   font-size: pxtoem(36, 16); 
  }
  h3 {
    font-size: pxtoem(5, 10)
  }
    h2{
        text-align: justify;
        
    }
  li small {
   display: none; 
  }
}
        .rekt{
            width: 100%;
            height: 200px;
            border: 0px solid #000000;
            background-color: #212121;
          
            
            
        }
        .logo1{
            
            position: fixed;
            left:inherit;
            
        }
        .logo2{
            position: fixed;
            right: 30px;
        }
    
    
    </style>
    <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
    
    <script>
        $("select[required]").css({display: "block", height: 0, padding: 0, width: 0, position: 'absolute'});
    </script>
    
<!-- Good Form starts here -->
    
    <div class="rekt">
    
    
    
    </div>
    <div class="logo1">
<img src="mizzou logo (1).png" alt="Ol' Mizzou" style="width:200;height:102;">
    </div>
    
    <div class="logo2">
<img src="tigerhacks logo.png" alt="Ol' Mizzou 2" style="width:300px;height:275px;bottom-margin:0px;">
        </div>
    
    <div class="container">
  <div class="row header">
    <h3><strong>Fill out the form below to learn more!</strong></h3>
  </div>
  <div class="row body">
    <form action="" method="POST">
      <ul>
        
        <li>
          <p class="left">
            <input type="text" name="first_name" placeholder="First Name" required/>
          </p>
        </li>
          <li>
          <p class="left">
            <input type="text" name="last_name" placeholder="Last Name" required/>
          </p>
        </li><li>
          <p class="left">
            <input type="text" name="Pawprint" placeholder="Pawprint"  required/>
          </p>
        </li>
        <li>
          <!-- Major goes here -->
            <h3><strong>What is your major?</strong></h3>
        <div class="input-field col s12">
    <select name="majors" required="required" class="validate" id="myForm">   
      <option value="" disabled selected>Choose your option</option>
      <option value="Engineering">Engineering</option>
      <option value="Journalism">Journalism</option>
      <option value="Business">Business</option>
      <option value="Marketing">Marketing</option>
      <option value="Biological Science">Biological Science</option>
    </select>
  </div>
            
        </li>
          <li><div class="divider"></div></li>
           <li>
          <!-- Dorm goes here -->
                <h3><strong>Where do you live ?</strong></h3>
  <div class="input-field col s12">
    <select name="Dorms" required="required" class="validate" id="myForm">   
      <option value="" disabled selected>Choose your option</option>
      <option value="Hatch/Schurz">Hatch/Schurz</option>
      <option value="Gillett/Hudson">Gillett/Hudson</option>
      <option value="North/South">North/South</option>
      <option value="Gateway">Gateway</option>
      <option value="College Ave.">College Ave.</option>
      <option value="Off Campus/other">Off Campus/other</option>
    </select>
  </div>
            
        </li>
          <li><div class="divider"></div></li>
 <li>
          <!--Interests are here -->
            <h3><strong>What are your interests?</strong></h3>
            <div >
                <input id="coding" type="checkbox" name="coding" value="coding">
                <label for="coding">Coding</label>
                
                <br>
                
                <input id="sleeping" type="checkbox" name="sleeping" value="sleeping">
                <label for="sleeping">Sleeping</label>
                
                <br>
                
                <input id="Reading" type="checkbox" name="reading" value="Reading">
                <label for="Reading">Reading</label>
                
                <br>
                
                
                <input id="skating" type="checkbox" name="skating" value="skating">
                <label for="skating">Skating</label>
                
                <br>
                
                
                <input id="instrument " type="checkbox" name="instrument" value="instrument ">
                <label for="instrument ">Playing an instrament </label>
            </div>
            
            
        </li>       
        
        <li>
          <input class="btn btn-submit" type="submit" name="submit" value="submit"/>
        </li>
          
        
      </ul>
    </form>  
  </div>
</div>
               
    
<!-- PHP starts here. Written by Andrew Krall -->
<?php
    
    //Constants
    const MULTIPLIERS = [
        'major'=>10,
        'dorm'=>15,
        'coding'=>5,
        'sleeping'=>5,
        'reading'=>5,
        'skating'=>5,
        'instrument'=>5
    ];
    
    if(isset($_POST['submit'])){
	$mysqli = new mysqli('172.31.29.248', 'webserver', 'password', 'ourdatabase');
	if ($mysqli->connect_errno) { //Terminate script if there is a connection error
	    echo "Failed to connect to MySQLI on Line 367";
	    exit();
	}
        //If statement to convert the values of the checkbox into booleans
        if(isset($_POST['coding'])) {
            $coding = true;
        }
        else {
            $coding = false;
        }
        if(isset($_POST['sleeping'])) {
            $sleeping = true;
        }
        else {
            $sleeping = false;
        }
        if(isset($_POST['reading'])) {
            $reading = true;
        }
        else {
            $reading = false;
        }
        if(isset($_POST['skating'])) {
            $skating = true;
        }
        else {
            $skating = false;
        }
        if(isset($_POST['instrument'])) {
            $instrument = true;
        }
        else {
            $instrument = false;
        }
        $query = "INSERT INTO USERDATA VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt = $mysqli->stmt_init();
        if(!$stmt->prepare($query)){
            echo "Didn't prepare the statement properly";
            exit();
        }
        echo "<br>";
        $fullname =  $_POST['first_name'] . $_POST['last_name'];
        $stmt->bind_param("sssssssss", $_POST['Pawprint'], $fullname, $_POST['majors'],$_POST['Dorms'], $coding, $sleeping, $reading, $skating, $instrument);
        $stmt->execute();
        
        /*
	    //Create majors array
        $majors = array("Engineering", "Journalism", "Business", "Marketing", "Biological Science");
        
        //Create ratings array
        $numStudents = 10;
        for($i = 0; $i < numStudents; $i++) {
            
        }
        for($i = 0; $i < sizeof($majors); $i++) {
            echo $majors[$i];
            echo "<br>";
        }
        
        $name = "Andrew";
        $sql = "select * from USERDATA where `name` LIKE '" . $name . "%'";
        */
        
        //Query
        /*
        $query = 'with current_user as (
            select major,residence from USERDATA where pawprint=?
        )
        SELECT
            pawprint,
            name,
            (
                textScore(c.major,u.major,?) +
                textScore(c.residence,u.residence,?) +
                boolScore(c.coding,u.coding,?) + 
                boolScore(c.sleeping,u.sleeping,?) +
                boolScore(c.reading,u.reading,?) +
                boolScore(c.skating,u.skating,?) +
                boolScore(c.instrument,u.instrument,?) 
            ) AS score
        FROM USERDATA u
        LEFT JOIN current_user c ON true = true
        WHERE u.name <> c.name 
        ORDER BY score DESC
        LIMIT ?
        '; 
        
        'with current_user as (
            select * from USERDATA where pawprint='ankwdf'
        )'
        
        */

        /* THIS IS EXACTLY WHAT WE WANT: */
        
        /* Binding parameters: 
        
        $query = "INSERT INTO USERDATA VALUES(?,?,?,?,?,?,?,?,?)";
        $stmt = $mysqli->stmt_init();
        if(!$stmt->prepare($query)){
            echo "Didn't prepare the statement properly";
            exit();
        }
        echo $_POST['Pawprint'];
        echo "<br>";
        $fullname =  $_POST['first_name'] . $_POST['last_name'];
        echo $fullname;
        $stmt->bind_param("sssssssss", $_POST['Pawprint'], $fullname, $_POST['majors'],$_POST['Dorms'], $coding, $sleeping, $reading, $skating, $instrument);
        echo $_POST['pawprint'];
        echo "<br>";
        echo $_POST['fname'] + $_POST['lname'];
        $stmt->execute();
        
        */
        
        /* What works well:
        
        $query = 'SELECT
            u.pawprint,
            u.name,
            (
                textScore(c.major,u.major,10.2) +
                textScore(c.residence,u.residence,16.4) +
                boolScore(c.coding,u.coding,8.0) + 
                boolScore(c.sleeping,u.sleeping,12.6) +
                boolScore(c.reading,u.reading,22.4) +
                boolScore(c.skating,u.skating,7.4) +
                boolScore(c.instrument,u.instrument,15.1) 
            ) AS score
        FROM USERDATA u
        LEFT JOIN 
            (
                SELECT * FROM USERDATA WHERE pawprint = "ankwdf" LIMIT 1
            )
        c ON true = true
        WHERE u.name <> c.name 
        ORDER BY score DESC
        LIMIT 5
        ';
        
        
        echo MULTIPLIERS['major'];
        echo MULTIPLIERS['dorm'];
        echo MULTIPLIERS['coding'];
        echo MULTIPLIERS['sleeping'];
        echo MULTIPLIERS['reading'];
        echo MULTIPLIERS['skating'];
        echo MULTIPLIERS['instrument'];
        
        */
        
        //This is the full SQL statement we need to bind with constants and the pawprint name
        $pawprint = $_POST['Pawprint'];
        $query2 = 'SELECT
            u.pawprint,
            u.name,
            (
                textScore(c.major,u.major,' . MULTIPLIERS['major'] . ') +
                textScore(c.residence,u.residence,' . MULTIPLIERS['dorm'] . ') +
                boolScore(c.coding,u.coding,' . MULTIPLIERS['coding'] . ') + 
                boolScore(c.sleeping,u.sleeping,' . MULTIPLIERS['sleeping'] . ') +
                boolScore(c.reading,u.reading,' . MULTIPLIERS['reading'] . ') +
                boolScore(c.skating,u.skating,' . MULTIPLIERS['skating'] . ') +
                boolScore(c.instrument,u.instrument,' . MULTIPLIERS['instrument'] . ') 
            ) AS score
        FROM USERDATA u
        LEFT JOIN 
            (
                SELECT * FROM USERDATA WHERE pawprint = "' . $pawprint . '" LIMIT 1
            )
        c ON true = true
        WHERE u.name <> c.name 
        ORDER BY score DESC
        LIMIT 5
        ';
        /*
        $query2 = 'SELECT
            u.pawprint,
            u.name,
            (
                textScore(c.major,u.major,10.2) +
                textScore(c.residence,u.residence,16.4) +
                boolScore(c.coding,u.coding,8.0) + 
                boolScore(c.sleeping,u.sleeping,12.6) +
                boolScore(c.reading,u.reading,22.4) +
                boolScore(c.skating,u.skating,7.4) +
                boolScore(c.instrument,u.instrument,15.1) 
            ) AS score
        FROM USERDATA u
        LEFT JOIN 
            (
                SELECT * FROM USERDATA WHERE pawprint = "ankwdf" LIMIT 1
            )
        c ON true = true
        WHERE u.name <> c.name 
        ORDER BY score DESC
        LIMIT 5
        ';
        */
        
        /* Constants: 
        
        const MULTIPLIERS = [
        'major'=>0.5,
        'dorm'=>0.25,
        'coding'=>0.10, 
        'sleeping'=>0.15,
        'reading'=>0.08,
        'skating'=>0.12,
        'instrument'=>0.19
    ];
    
        */
        
        //Need to bind the values to the prepared statement
        /*$stmt = $mysqli->stmt_init();
        if(!$stmt->prepare($query2)){
            echo "Didn't prepare the statement properly";
            exit();
        }
        echo "Got here!";
        echo MULTIPLIERS['major'];
        echo MULTIPLIERS['dorm'];
        echo MULTIPLIERS['coding'];
        echo MULTIPLIERS['sleeping'];
        echo MULTIPLIERS['reading'];
        echo MULTIPLIERS['skating'];
        echo MULTIPLIERS['instrument'];
        echo $_POST['Pawprint'];
        $pawprint = $_POST['Pawprint'] . '%';
        echo $pawprint;
        //$stmt2->bind_param("ddddddds", MULTIPLIERS['major'], MULTIPLIERS['dorm'], MULTIPLIERS['coding'], MULTIPLIERS['sleeping'], MULTIPLIERS['reading'], MULTIPLIERS['skating'], MULTIPLIERS['instrument'], $pawprint);
        if(!$stmt->bind_param("ddddddds", 0.12, 15.2, 19.4, 26.2, 9.28, 0.42, 1.23, "aek193%")) {
            echo "Binding parameter worked!";
        }
        else {
            echo "Binding parameters did not work.";
        }
        if($stmt->execute()) {
            echo "It worked!";
        }
        else {
            echo "Execute didn't work";
        }*/
	    $result2 = $mysqli->query($query2); //Execute query
        if(isset($result2) == false) {
            echo "Result not set";
        }
        while($fieldInfo = mysqli_fetch_field($result2)){
            echo "<th>". $fieldInfo->name. "</th>";
            echo "<br>";
        }
         while($row2 = $result2->fetch_array(MYSQLI_ASSOC)){ //Fetch the results as a numeric array
        //echo "<tr>"; //Each element of the array is a row
        /*
         * Each row's data is stored in an array
         * Iterate that array and place each value
         * into the table
         */
        /*foreach($row as $r){
            echo "<td>" . $r . "</td>";
            echo "<br>";
        }*/
             foreach ($row2 as $key => $value) {
                 echo "$key: $value";
                 echo "<br>";
             }
         }
    $mysqli->close(); //Close mysql connection
        
    }
?>

<?php
    /*Hillary Clinton
    *9/11 was an inside job
    *
    *First Email,BUT HER EMAILZ
    */
    
    
    
    
    
    ?>
    
    <script>
  POST https://outlook.office.com/api/v2.0/me/sendmail

{
  "Message": {
    "Subject": "HI mum?",
    "Body": {
      "ContentType": "Text",
      "Content": "from Nick"
    },
    "ToRecipients": [
      {
        "EmailAddress": {
          "Address": "nppg3c@mail.missouri.edu"
        }
      }
    ]
    
    
    </script>
        


  

  </body>
</html>
