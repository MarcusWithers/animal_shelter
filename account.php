<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <!--Insert Page Name-->
    <title>Account Page</title>
</head>

<body>
  <!--script for header-->
<script language="javascript" type="text/javascript" 
  src="header.txt"></script>
  <div class="heading">
      <h1>Welcome Back User! </h1> <br>
      <!--User will be dynamically created-->
    </div>
    <br></br>
    <!--Insert Body of Page-->
    
  <div class = "container">
  <div class = "left_container">
  <img src="user.jpg" alt="user" width = "500"/>  
  </div>
  <div class = "right_container">
  
  <h2> Your Chores are: </h2><br>
  <ol>
      <li>Wash Dogs</li>
      <li>Clean Cages </li>
      <!--Chorse will be dynamically created-->
  </ol> 
</div>
</div>
  <br><br>
  <h2> To apply for higher skill jobs, fill out the form below </h2>
  <div class="contact_container">
      <form action="processSkills.php" method="POST" >
      <fieldset>
   
   <legend>Personal Information</legend>
   <div class="form-example">
   <br></br>
   <label for="First Name" >First Name: </label>
     <input type="text" name="FirstName" id="First Name" maxlength="15" placeholder="First Name"  spellcheck="false" title="Enter the First Name" required />
     
   <label for="Last Name" >Last Name: </label>
     <input type="text" name="LastName" id="Last Name" maxlength="25" placeholder="Last Name"  spellcheck="false" title="Enter the Last Name" required />
   <br></br>
   <label for="Address" >Address: </label>
     <input type="text" name="Address" id="Address" placeholder="1234 Street Avenue, City, State, Zip"  spellcheck="false" title="Address" required />
   <br></br>	
   </div>
</fieldset>
          <label for ="levels">What skill level would you like to apply for?</label><br>
        <select name = "levels">
            <option value = "level1"> Level 1</option>
            <option value = "level2"> Level 2</option>
            <option value = "level3"> Level 3</option>
        </select>
        <br>
        <p>
Did you take the required course?
	<input type= "radio" name="Yes" id= "Yes" value="Yes"/>
		<label for="Yes" > Yes </label>
	<input type= "radio" name ="No" id ="No" value="No"/>
		<label for="No" > No  </label>
</p>
        <label for="question">Why should we increase your level?</label><br />
        <textarea name="question" rows="5" cols="25" spellcheck="true" > </textarea><br /><br />
        <input type="submit" value="Submit" />
      </form>
  
  
</div>

</body>
<!--script for footer-->
<script language="javascript" type="text/javascript" 
  src="footer.txt"></script>
</html>