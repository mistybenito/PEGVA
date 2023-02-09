<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        
        <link href="nav-new.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="navbar-header">

</div>
<div class="sidenav">
<p class="title"><img src="../images/logo.png" alt="Admin" class="avatar">Cainta Catholic College</p> 


  <button class="dropdown-btn">Student List 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="student_ABREED.php">ABREED</a>
    <a href="student_BEED.php">BEED</a>
    <a href="student_BSED-ENG.php">BSED-ENG</a>
    <a href="student_BSED-MATH.php">BSED-MATH</a>
    <a href="student_BSED-SCI.php">BSED-SCI</a>
    <a href="student_BSBA.php">BSBA</a>
    <a href="student_BSCS.php">BSCS</a>
    <a href="student_BSOA.php">BSOA</a>
  </div>

  <button class="dropdown-btn">Student Per Subject
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="viewsub_ABREED.php">ABREED</a>
    <a href="viewsub_BEED.php">BEED</a>
    <a href="viewsub_BSED-ENG.php">BSED-ENG</a>
    <a href="viewsub_BSED-MATH.php">BSED-MATH</a>
    <a href="viewsub_BSED-SCI.php">BSED-SCI</a>
    <a href="viewsub_BSBA.php">BSBA</a>
    <a href="viewsub_BSCS.php">BSCS</a>
    <a href="viewsub_BSOA.php">BSOA</a>
  </div>


  <a href="user-list.php">User List</a>


<a href="view_sched.php">Schedule</a>

<button class="dropdown-btn">Curiculum 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="ABREED.php">ABREED</a>
    <a href="BEED.php">BEED</a>
    <a href="BSED-ENG.php">BSED-ENG</a>
    <a href="BSED-MATH.php">BSED-MATH</a>
    <a href="BSED-SCI.php">BSED-SCI</a>
    <a href="BSBA.php">BSBA</a>
    <a href="BSCS.php">BSCS</a>
    <a href="BSOA.php">BSOA</a>
  </div>
  <div id="logoutbtn">
    <a href="logout.php" style="color:#a70000;">Logout</a>
  </div>

</div>

<div class="main">
  
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
