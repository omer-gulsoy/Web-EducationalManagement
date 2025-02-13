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

<body>
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
    <!-- slider section -->
    <section class="slider_section ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">                  
                     <!-- BURAYA EKLENECEK -->



                     <div class="detail-box">
                     <?php
// Veritabanı bağlantısı
include 'db.php';

// Not aralıkları bazlı öğrenci verilerini al
$sql = "
SELECT 
    CASE 
        WHEN grade < 50 THEN '0-49'
        WHEN grade BETWEEN 50 AND 59 THEN '50-59'
        WHEN grade BETWEEN 60 AND 69 THEN '60-69'
        WHEN grade BETWEEN 70 AND 79 THEN '70-79'
        WHEN grade BETWEEN 80 AND 89 THEN '80-89'
        ELSE '90+' 
    END AS grade_range,
    COUNT(*) AS student_count
FROM students
GROUP BY grade_range
";
$result = $conn->query($sql);

// Not aralıkları ve öğrenci sayıları için dizi oluştur
$grade_ranges = [];
$student_counts = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $grade_ranges[] = $row['grade_range'];
        $student_counts[] = $row['student_count'];
    }
}
?>

<h1>Grade Statistics</h1>
<br/>
<canvas id="gradeChart" width="400" height="400"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
// PHP'den gelen verileri JavaScript değişkenlerine aktar
const gradeRanges = <?php echo json_encode($grade_ranges); ?>;
const studentCounts = <?php echo json_encode($student_counts); ?>;

// Chart.js ile pasta dilimi grafiği oluştur
const ctx = document.getElementById('gradeChart').getContext('2d');
new Chart(ctx, {
    type: 'pie',
    data: {
        labels: gradeRanges, // Not aralıkları
        datasets: [{
            label: 'Student Count by Grade',
            data: studentCounts, // Öğrenci sayıları
            backgroundColor: [
                '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'
            ],
            hoverOffset: 4
        }]
    }
});
</script>

</div>








                     <!-- BURAYA EKLENECEK -->
                  </div>
                </div>
                <div class="offset-md-1 col-md-4 img-container">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- end slider section -->
  </div>





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