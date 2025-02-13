<?php
// Veritabanı bağlantısını dahil et
include 'db.php';

// Kayıt işlemi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdan gelen veriler
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Veritabanına kaydetmek için sorgu
    // SQL enjeksiyonunu engellemek için prepare ve bind_param kullanılmalı
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    // Şifreyi hashleme (güvenli bir şekilde kaydetmek için)
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if ($stmt->execute()) {
        echo "Record is correct! <a href='login.php'>Sign In</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Bağlantıyı kapat
    $stmt->close();
}

// Bağlantıyı kapat
$conn->close();
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
              <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php"> Add Student</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="list_students.php">List Students </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="class_report.php"> Total Students </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="class_report.php"> Class Report </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="grade_report.php"> Grade Report </a>
              </li>
            </ul>
            <div class="user_option">
              <a href="login.php">
                <span>
                  Sign In&nbsp;&nbsp;
                </span>
              </a>
              <a href="">
                <span>
                  |&nbsp;&nbsp;
                </span>
              </a>
              <a href="signup.php">
                <span>
                  Sign Up
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

  <!-- category section -->

  <section class="category_section layout_padding">
    <div class="container">
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Kaydol">
    </form>
    </div>
  </section>
  <!-- end category section -->


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

</html>