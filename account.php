<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Account</title>
  </head>
<body>
<header>
      <div class = "navbar">
    <nav class = "navbar">
        <ol>
            <li class = "nav"><a href = "home.html">Home</a></li>
            <li class = "nav"><a href = "signin.html">Sign-in</a></li>
            <li class = "nav"><a href = "contactform.html">Contact Us</a></li>
        </ol>
    </nav>
</div>
  </header>
  <div class = "container">
  <div class = "left_container">
  <img src="puppy.jpg" alt="puppy" width = "500"/>  
  </div>
  <div class = "right_container">
  <h1> Welcome Back User!</h1> <br>
  <h2> Your Chores are: </h2><br>
  <ol>
      <li>Wash Dogs</li>
      <li>Clean Cages </li>
  </ol> 
  <br><br>
  <h2> To apply for higher skill jobs, fill out the form below </h2>
  <div class="contact_container">
      <form action="#">
          <label for ="levels">What skill level would you like to apply for?</label><br>
        <select name = "levels">
            <option value = "level1"> Level 1</option>
            <option value = "level2"> Level 2</option>
            <option value = "level3"> Level 3</option>
        </select>
        <br>
        <label for="question">Why should we increase your level?</label><br />
        <textarea name="question" rows="5" cols="25"> </textarea><br /><br />
        <input type="submit" value="Submit" />
      </form>
  
  </div>
</div>

</body>
</html>