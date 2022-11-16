<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>


        <li class="nav-item">
          <a class ="nav-link" href="subjects.php">Subjects</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="one-home.php">One</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="two-home.php">Two</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="three-home.php">Three</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin_page.php">Admin Page</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="user-list.php">User List</a>
        </li>

        <?php if(!isset($_SESSION['verified_user_id'])) : ?>

        <li class="nav-item">
          <a class="nav-link" href="register.php">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>

        <?php else :
        ?>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <?php endif; ?>
        
    </div>
  </div>
</nav>