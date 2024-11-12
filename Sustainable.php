

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: logIn.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: logIn.php");
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustainable Farming App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .header {
            background-color: #28a745;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .footer {
            background-color: #28a745;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .feature {
            margin-top: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body background="ttt.jpg">

    <div class="header">
        <h1>Sustainable Farming in Uganda</h1>
        <p>Empowering Farmers for a Greener Future</p>
    </div>


    <div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome, <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
</div>



    <div class="container">
        <div class="row">
            <div class="col-md-4 feature">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Crop Selection</h5>
                        <p class="card-text">Find suitable crops for your region and season with care and harvesting tips.</p>
                        <a href="#" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 feature">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Weather Forecasts</h5>
                        <p class="card-text">Get real-time weather updates tailored to your farming location.</p>
                        <a href="#" class="btn btn-success">Check Weather</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 feature">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Soil Analysis</h5>
                        <p class="card-text">Learn how to test your soil and improve its health and fertility.</p>
                        <a href="#" class="btn btn-success">Analyze Soil</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 feature">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pest & Disease Control</h5>
                        <p class="card-text">Identify common pests and diseases and learn how to control them.</p>
                        <a href="#" class="btn btn-success">Get Help</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 feature">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Market Information</h5>
                        <p class="card-text">Stay updated on market prices to make informed decisions.</p>
                        <a href="#" class="btn btn-success">View Prices</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 feature">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Community Forums</h5>
                        <p class="card-text">Connect with other farmers to share experiences and knowledge.</p>
                        <a href="#" class="btn btn-success">Join Forum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" ><a href = "LogOut.php"><strong>LOG OUT</strong></a></button>


    <div class="footer">
        <p>&copy; 2023 Sustainable Farming App. All Rights Reserved.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
``