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
   <!--
    <div>
    <form action="" method="POST">
        <!--<div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" name="fname" type="text" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field col s6">
            <h3>Please enter your first name</h3>
          <input placeholder="Enter your first name here" id="first_name" name="fname" type="text" class="validate" required>
        </div>
    
            <h3>What are your interests?</h3>
            <div >
                <input id="coding" type="checkbox" name="coding" value="coding" checked>
                <label for="coding">Coding</label>
                
                <br>
                
                <input id="sleeping" type="checkbox" name="sleeping" value="sleeping" checked>
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
        
            <h3>What is your major?</h3>
        <div class="input-field col s12">
    <select name="majors" required="required" class="validate" id="myForm">   
      <option value="" disabled selected>Choose your option</option>
      <option value="Engineering">Engineering</option>
      <option value="Journalism">Journalism</option>
      <option value="Business">Business</option>
      <option value="Marketing">Marketing</option>
      <option value="Biological Science">Biological Science</option>
    </select>
    <label>Materialize Select</label>
  </div>
        
        
        <h3>What is your Dorm?</h3>
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
    <label>Materialize Select</label>
  </div>
    
    
    <div class="input-field col s12">
    <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
    <i class="material-icons right">send</i>
  </button>
        
    
        </div>
    
    
    
    </form>
        
    </div>
-->

    
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
    <form action="#">
      <ul>
        
        <li>
          <p class="left">
            <input type="text" name="last_name" placeholder="First Name" required/>
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
          <input class="btn btn-submit" type="submit" value="Submit" />
        </li>
          
        
      </ul>
    </form>  
  </div>
</div>
               
    
<!-- PHP starts here. Written by Andrew Krall -->
<?php
    if(isset($_POST['submit'])){
	$mysqli = new mysqli('172.31.29.248', 'webserver', 'password', 'ourdatabase');
        echo "Got here!";
	if ($mysqli->connect_errno) { //Terminate script if there is a connection error
	    echo "Failed to connect to MySQLI on Line 5";
	    exit();
	}
        echo "Got here!";
        $query = "INSERT INTO USERDATA VALUES(?,?,?)";
        $stmt = $mysqli->stmt_init();
        if(!$stmt->prepare($query)){
            exit();
        }
        $stmt->bind_param("sss", $_POST['fname'], $_POST['majors'],$_POST['Dorms']);
        $stmt->execute();
        $query2 = "INSERT INTO INTERESTS VALUES(?,?,?,?,?)";
        $stmt = $mysqli->stmt_init();
        if(!$stmt->prepare($query2)){
            exit();
        }
        echo "Got here!";
        $stmt->bind_param("sssss", $_POST['coding'], $_POST['sleeping'], $_POST['reading'], $_POST['skating'], $_POST['instrument']);
        $stmt->execute();
        
	/**
	 * The big problem with my implementation of the search is that I am not using prepared statements.
	 * For you lab, you will need to change this code to use prepared statements.
	 */
        $sql = "SELECT * FROM USERDATA;"; //where `major` LIKE '" . $_POST['majors'] . "%'
        
	$result = $mysqli->query($sql); //Execute query
         while($row = $result->fetch_array(MYSQLI_NUM)){ //Fetch the results as a numeric array
        echo "<tr>"; //Each element of the array is a row
        /*
         * Each row's data is stored in an array
         * Iterate that array and place each value
         * into the table
         */
        foreach($row as $r){
            echo "<td>" . $r . "</td>";
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
    


  

  </body>
</html>
