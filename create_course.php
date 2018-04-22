<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png"  href="img/sh-icon3.ico">
  <!--meta-->
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--css files-->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.grid.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<header>
          <nav class="navbar navbar-expand-lg navbar-light navbar-border ">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="img/skillhub-logo.png" width="100" height="60" class="d-inline-block align-top" alt=""></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!-- Navbar items-->
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item disabled">
                    <a class="nav-link" href="about.html">About<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item disabled">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                  <li class="nav-item nav-btn">
                   <a class="btn btn-outline-primary" href="#" role="button">Sign in</a>
                  </li>
                  <li class="nav-item nav-btn">
                    <a class="btn btn-outline-primary" href="register.php" role="button">Sign up</a>
                  </li>
                  
                
                </ul>
                
              </div>
            </div>
          </nav>
     </header>  
     <div class="container">
<h2>Create Course</h2>
<form action="Create_course_connet.php" class="form">
  <input list="browsers" name="browser" value="Choose Course Category.">
  <datalist id="browsers">
    <option value="Art">
    <option value="Music, Singing, Dance">
    <option value="Engineering Academics">
    <option value="Computer Science">
    <!--<option value="Safari">-->
  </datalist>
  <h4>Enter Course Name.</h4>
  <input type="text" placeholder="Course name" name="coursename" required /></br>
  <h4>Enter Course Description.</h4>
  <textarea name="message" rows="10" cols="30">Enter your Course Description here.</textarea>
  <h4>Enter Course Fee.</h4>
  <input type="text" placeholder="Course Fee" name="coursefee" required /></br>
  <h4>Enter Course Fee.</h4>
  <input type="text" placeholder="Course Fee" name="coursefee" required /></br>
  <input list="bros" name="b">
  <datalist id="bros" value="Course fee Duration">
    <option value="Per Hour">
    <option value="Per Weekly">
    <option value="Per Monthaly">
  </datalist>
  <h4>Enter Course Size(in Days).</h4>
  <input type="text" placeholder="Course Size" name="coursesize" required  value="Course Size"/></br>
  <h4>Enter Course Duration.</h4>
  <input type="text" placeholder="Course Duration in Days(number)." name="courseduration" required /></br>
  <button type="button" class="btn btn-primary" value="submit">Create course card</button>
</form>
</div>

<!-- javascript files-->
<script type="text/javascript" src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js" ></script>
</body>
</html>
