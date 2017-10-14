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
<body>
    <style>
        h3{
            
            font-family: fonts/Roboto-Medium.woff;
            
            
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
    
    <div>
    <form action="" method="POST">
        <!--<div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" name="fname" type="text" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>-->
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
