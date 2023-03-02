<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Title Page-->
     <title>Machine Learning</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
<div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Energy Efficiency Prediction</h2>
                    <!--FORM-->
                    <form method="POST" action="prediction.php">
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" placeholder="RELATIVE COMPACTNESS" name="relative_compactness">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" placeholder="SURFACE AREA" name="surface_area">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" placeholder="WALL AREA" name="wall_area">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" placeholder="ROOF AREA" name="roof_area">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" placeholder="OVERALL HEIGHT" name="overall_height">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" placeholder="ORIENTATION" name="orientation">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" placeholder="GLAZING AREA" name="glazing_area">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="number" step="0.01" placeholder="GLAZING AREA DISTRIBUTION" name="glazing_area_distribution">
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
        
</body>
</html>