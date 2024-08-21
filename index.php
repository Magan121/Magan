<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("vendor/inc/head.php"); ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        
        header .carousel-item {
            height: 65vh;
            background-size: cover;
            background-position: center;
        }
        
        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            padding: 1em;
            border-radius: 10px;
        }
        
        h1, h2 {
            background-color: #402a23;
            padding: 10px;
            border-radius: 10px;
            color: white;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        
        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }
        
        .card-header {
            background-color: #402a23;
            color: white;
            border-bottom: none;
        }
        
        .portfolio-item img {
            border-radius: 10px;
        }
        
        .center {
            text-align: center;
        }

        .breadcrumb {
            padding: 10px 20px;
            font-size: 1rem;
            background-color: black;
            border-radius: 5px;
        }

        .breadcrumb a {
            color: white;
            text-decoration: none;
        }

        .breadcrumb a:hover {
            text-decoration: underline;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        footer {
            padding: 20px 0;
            background-color: #402a23;
            color: white;
        }

        footer .container {
            text-align: center;
        }

        footer .fa-heartbeat {
            color: red;
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <?php include("vendor/inc/nav.php"); ?>
    <!-- End Navigation -->

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One -->
                <div class="carousel-item active">
                    <img src="qaa.jpg" class="d-block w-100" alt="Slide Image">
                    <div class="carousel-caption d-none d-md-block" style="background-color: #402a23;">
                        <h3>Welcome to Our Magan Website</h3>
                        <p>Experience the best Magan Website</p>
                    </div>
                </div>
                <!-- Additional slides can be added here -->
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container my-4">
        <h1>Welcome to Magan Website</h1>

        <!-- Marketing Icons Section -->
        <div class="row mb-4">
            <div class="col-lg-6">
                <div class="card h-100">
                    <h4 class="card-header">Why Us</h4>
                    <div class="card-body">
                        <p class="card-text">We create accountability in the transport sector, enhance mobility and
                            ease of accessing various transport modes</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100">
                    <h4 class="card-header">Core Values</h4>
                    <div class="card-body">
                        <p class="card-text">
                            Excellence, Trust and Openness, Integrity, Take Responsibility, Customer Orientation
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5">
        <div class="container text-center" style="background-color: #402a23; color: white;">
            <p class="m-0 text-white">
                &copy; <?php echo date('Y'); ?> Magan Building Material System | Crafted with 
                <i class="fa fa-heartbeat" aria-hidden="true"></i> by Zadik Faysal
            </p>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
