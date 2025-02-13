<?php
include 'auth.php';
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Spering</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="" />
            <span>
              Spering
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Add Student <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="list_students.php"> List Students</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="total_student_count.php"> Total Student </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="class_report.php">Class Report </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="grade_report.php">Grade Report </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="logout.php">
                <span>
                  Logout
                </span>
              </a>
            </div>
          </div>

          <div>
            <div class="custom_menu-btn ">
              <button>
                <span class=" s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- freelance section -->

  <section class="freelance_section layout_padding">
    <div id="accordion">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5 offset-md-1">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Add New Student
                </h2>
              </div>
              <div class="tab_container">
              <form action="add_student.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required oninput="validateInput(event)"><br><br>

                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required min="0" max="100" oninput="validateAgeInput(event)"><br><br>

                <label for="class">Class:</label>
                <input type="text" id="class" name="class" required><br><br>

               <label for="grade">Grade:</label>
               <input type="number" id="grade" name="grade" required min="0" max="100" step="0.01" oninput="validateGradeInput(event)"><br><br>

        <input type="submit" value="Add">
    </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
            <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
              <div class="img-box">
                <img src="images/freelance-img.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end freelance section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="info_container layout_padding-top">
      <div class="container">
        <div class="info_top">
          <div class="info_logo">
            <img src="images/logo.png" alt="" />
            <span>
              Spering
            </span>
          </div>
        </div>

        <div class="info_main">
        </div>
        <div class="row">
          <div class="col-lg-9 col-md-10 mx-auto">
            <div class="info_contact layout_padding2">
              <div class="row">
                <div class="col-md-3">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/location.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Location
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-4">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/mail.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        demo@gmail.com
                      </h6>
                    </div>
                  </a>
                </div>
                <div class="col-md-5">
                  <a href="#" class="link-box">
                    <div class="img-box">
                      <img src="images/call.png" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Call +370 1234567890
                      </h6>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <footer class="container-fluid footer_section ">
    <div class="container">
      <p>
        &copy; <span id="displayDate"></span> All Rights Reserved By
        <a href="https://tr.linkedin.com/in/omer-h-gulsoy">Ömer Hasan GÜLSOY</a>
      </p>
    </div>
  </footer>
  <!-- end  footer section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>


</body>
</body>

<script>
        function validateInput(event) {
            const input = event.target;
            const regex = /^[a-zA-Z\s]*$/;
            if (!regex.test(input.value)) {
                input.value = input.value.replace(/[^a-zA-Z\s]/g, ''); // Geçersiz karakterleri kaldır
            }
        }
    </script>

</html>
<script>
        function validateAgeInput(event) {
            const input = event.target;
            const value = parseInt(input.value, 10);
            
            if (value > 100) {
                input.value = 100; // 100'den büyükse, 100'e sabitle
            } else if (value < 0) {
                input.value = 0; // Negatifse, 0'a sabitle
            }
        }
    </script>

<script>
        function validateGradeInput(event) {
            const input = event.target;
            const value = parseFloat(input.value);
            
            if (value > 100) {
                input.value = 100; // 100'den büyükse, 100'e sabitle
            } else if (value < 0) {
                input.value = 0; // Negatifse, 0'a sabitle
            }
        }
    </script>