<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="navbar.css" rel="stylesheet" type="text/css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<nav>
        <input type="checkbox" id="check">
            <label for="check" class="chckbtn">
                <i class="fa fa-bars"></i>
            </label>
            <label class="title">Cainta Catholic College</label>
            <?php if(isset($_SESSION['verified_chairman'])):?>
            <ul class="main-navigation">
                <li><a href="">Student List</a>
                <ul class="course">
					<li><a href="student_ABREED.php">ABREED</a></li>
                    <li><a href="student_BEED.php">BEED</a></li>
                    <li><a href="student_BSED-ENG.php">BSED-ENG</a></li>
                    <li><a href="student_BSED-MATH.php">BSED-MATH</a></li>
                    <li><a href="student_BSED-SCI.php">BSED-SCI</a></li>
                    <li><a href="student_BSBA.php">BSBA</a></li>
                    <li><a href="student_BSCS.php">BSCS</a></li>
                    <li><a href="student_BSOA.php">BSOA</a></li>
                </ul>
            </li>
            <?php endif; ?>


            <ul class="main-navigation">
                <li><a href="">Per Subject</a>
                <ul class="course">
					<li><a href="viewsub_ABREED.php">ABREED</a></li>
                    <li><a href="viewsub_BEED.php">BEED</a></li>
                    <li><a href="viewsub_BSED-ENG.php">BSED-ENG</a></li>
                    <li><a href="viewsub_BSED-MATH.php">BSED-MATH</a></li>
                    <li><a href="viewsub_BSED-SCI.php">BSED-SCI</a></li>
                    <li><a href="viewsub_BSBA.php">BSBA</a></li>
                    <li><a href="viewsub_BSCS.php">BSCS</a></li>
                    <li><a href="viewsub_BSOA.php">BSOA</a></li>
                </ul>
            </li>

            <?php if(isset($_SESSION['verified_registrar'])) :?>
                <li><a href="user-list.php">User List</a></li>
                
                <?php endif; ?>
                <li><a href="#">Curriculum</a>
                <ul class="course">
					<li><a href="ABREED.php">ABREED</a></li>
                    <li><a href="BEED.php">BEED</a></li>
                    <li><a href="BSED-ENG.php">BSED-ENG</a></li>
                    <li><a href="BSED-MATH.php">BSED-MATH</a></li>
                    <li><a href="BSED-SCI.php">BSED-SCI</a></li>
                    <li><a href="BSBA.php">BSBA</a></li>
                    <li><a href="BSCS.php">BSCS</a></li>
                    <li><a href="BSOA.php">BSOA</a></li>
                </ul>
                </li>
                <li><a href="registrar.php">Home</a>
                <ul class ="course">
                    <li><a href="view_sched.php">Schedule</a></li>
                </ul>
                </li>
                <?php if(!isset($_SESSION['verified_user_id'])) : ?>
                    <li>
                    <a href="register.php">Register</a>
                    </li>

                    <li>
                    <a href="login.php">Login</a>
                    </li>

                    <?php else :
                    ?>
                    <li>
                    <a href="logout.php">Logout</a>
                    </li>
                    <?php endif; ?>
            </ul>
    </nav>