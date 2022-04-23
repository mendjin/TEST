<?php

  include("connectDB.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Layouts - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <main>

    <div class="pagetitle">
      <h1>Form Add Product</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
          <li class="breadcrumb-item">Save</li>
          <li class="breadcrumb-item active">product</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="">
        <div class="">


        <div class="card">
            <div class="card-body">
              <h5 class="card-title"> Product</h5>

               <!-- Multi Columns Form -->
               <form class="row g-3">
               <div class="col-md-12">
                  <label for="inputReference5" class="form-label">Familly name</label>
                  <select name="familly" id="familly" class="form-select">
                  <option value="-1">selectionnez une famille</option>
                  <?php
                        $querySelectListFamille ="SELECT Distinct idFamille, nomFamille FROM familleproduit order by nomFamille";
                        $res = mysqli_query($con, $querySelectListFamille);

                        while($row = mysqli_fetch_array($res))
                        {
                          echo "<option value='".$row["idFamille"]."'>".$row["nomFamille"]."</option>";
                        }

                        ?>
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="inputReference5" class="form-label">Category</label>
                  <select name="category" id="category" class="form-select">
                     <option></option> 
                  </select>
                </div>
                <div class="col-md-12">
                  <label for="inputReference5" class="form-label">Reference</label>
                  <input type="text" class="form-control" id="inputReference5">
                </div>
                <div class="col-md-12">
                  <label for="inputDesignation5" class="form-label">Designation</label>
                  <input type="texte" class="form-control" id="inputDesignation5">
                </div>
                <div class="col-md-12">
                  <label for="inputPrice5" class="form-label">Price</label>
                  <input type="number" class="form-control" id="inputPrice5">
                </div>
                
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
<!-- jQuery -->
<script src="//code.jquery.com/jquery-1.12.0.min.js">

</body>

</html>

<script type="text/javascript">
  //alert("djdkdkjd 1");
      $(document).ready(function (){
          var familly = $("#familly");
          var category = $("#category");
          //alert("djdkdkjd");
          familly.change(function (){
            //alert("djdkdkjd");
            var familly = $("#familly").val();
            $.post(
              "ajax/ControlleurCategory.php?familly="+familly,
              function (data){
                  category.html(data);
                 // alert(data);
              });
          });
      });
  </script>