<!DOCTYPE html>
<html>
<head>
  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
</head>
<body>

<h2>Ereate Course..</h2>
<form action="Create_course_connet.php" class="form">
  <input list="browsers" name="choosen_course" value="Choose Course Category.">
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
  <textarea name="message" rows="50" cols="30" name="coursedesc">Enter your Course Description here.</textarea>
  <h4>Enter Course Address.</h4>
  <textarea name="message" rows="50" cols="30" name="courseadd">Enter your Course Address here.</textarea>
  <h4>Enter Course Fee.</h4>
  <input type="text" placeholder="Course Fee" name="coursefee" required /></br>
  <h4>Enter Course Fee Duration.</h4>
  <input list="bros" name="coursefeedur">
  <datalist id="bros" value="Course fee Duration">
    <option value="Per Hour">
    <option value="Per Weekly">
    <option value="Per Monthaly">
  </datalist>
  <h4>Enter Course Size(in Days).</h4>
  <input type="text" placeholder="Course Size" name="coursesize" required  value="Course Size"/></br>
  <h4>Enter Course Duration.</h4>
  <input type="text" placeholder="Course Duration in Days(number)." name="courseduration" required /></br>
  <input type="submit">
</form>
</body>
</html>
