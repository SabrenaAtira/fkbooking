<!DOCTYPE html>
<html>
<head>
    <title>FK BOOKING</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Franklin Gothic Book;
  padding: 15px;
  background: #FFF;
  height: 100%;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


.box{
 background-image: url('assets/fkump.jpg');
 opacity: 2;
 padding: 100px;
 background-repeat: no-repeat;
 background-size: 100%;
 }


.header h1 {
  font-family: Brush Script MT;
  font-size: 50px;
  color: #FFA07A;
}

.header h3 {
  font-family: Franklin Gothic Book;
  font-size: 20px;
  color: #fff;
}


.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #000;
  border: none;
  color: #fff;
  text-align: center;
  font-size: 25px;
  padding: 10px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 3px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit] {
  background-color: #000;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #c6c6ec;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="box">
 
   
  <div class="row">

      <div class="column" style="float: left;background-color:#fff;padding:50px">
       <h1>FK BOOKING</h1>
        <h3>Faculty of Computing, Universiti Malaysia Pahang</h3>
          <p>For Booking Facilities of Faculty for students and lecturers.</p>
        <button class="button" style="vertical-align:middle"><span>View Calender </span></button>
        <button class="button" style="vertical-align:middle"><span>Register </span></button>
      </div>
  <div style="float: right;">
  <h3 style="color: white;">Forgot Password</h3>
    <form action="index.php">
  <div class="row">
    <div class="col-75">
      <input type="text" placeholder="Email">
    </div>
  </div>
  <div class="row">
    <div class="col-25" style="padding-top:10px">
    </div>
    <div class="col-75">
      <select>
        <option>Students</option>
        <option>Lecturer</option>
        <option>Manager</option>
        <option>Technician</option>
        <option>Administrator</option>
      </select>
    </div>
  </div>
  <br>
  <div class="row" style="padding-top:10px">
    <input type="submit" value="Send">
  </div>
  </form>
  </div>
  
</div>
</div>
</body>
</html>
