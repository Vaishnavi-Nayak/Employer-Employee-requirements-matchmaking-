<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candidate Dashboard</title>

    <!--font cdn link-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!--custom css file link-->
    <link rel="stylesheet" href="css/candidate_style.css" />
  </head>
  <body>
    <!--header section starts-->
    <header>
      <div class="user">
        <img src="images/candidate.avif" alt="cannot display img" />
        <h3 class="name">Name</h3>
      </div>

      <nav class="navbar">
        <ul>
          <li><a href="#profile">Profile</a></li>
          <li><a href="#personalinfo">Personal Info</a></li>
          <li><a href="#education">Education</a></li>
          <li><a href="#certification">Certifications</a></li>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#Preferences">Job Preferences</a></li>
          <a href="EmployeeLogout.php">Logout</a>
        </ul>
      </nav>
    </header>

    <!--header section ends-->

    <div id="menu" class="fas fa-bars"></div>

    <!--jquery cdn link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </body>
</html>