<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout Page</title>
    <style>


body {
            background-color: #8ffaf1;
            font-family: Arial, sans-serif;
        }
        .header {
            background-color:#28a745;
            color: rgb(255, 255, 255);
            padding: 20px 0;
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }


        .logout-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            width: 300px;
            align-items: center;
            margin-right: auto;
            margin-left: auto;
            margin-top: 140px;
          

          
        }
        h2 {
            color: #dc3545; /* Bootstrap danger color */
        }
        p {
            margin: 20px 0;
            color: #555;
        }
        .btn {
            background-color: #28a745; /* Bootstrap success color */
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
            transition: background-color 0.3s;
        }
        .btn:hover {
            background-color: #218838; /* Darker green on hover */
        }
        .btn-cancel {
            background-color: #dc3545; /* Bootstrap danger color */
        }
        .btn-cancel:hover {
            background-color: #c82333; /* Darker red on hover */
        }
    </style>

</head>
<body background="ttt.jpg">
    <div class="header">
        <h1>Sustainable Farming in Uganda</h1>
        <p style="color: rgb(255, 255, 255);">Empowering Farmers for a Greener Future</p>
    </div>

    <div class="logout-container">
        <h2 style="color: #212388; ">Logout</h2>
        <p>Are you sure you want to log out?</p>
        <button class="btn" onclick="confirmLogout()">Yes, Log Out</button>
        <button class="btn btn-cancel" onclick="cancelLogout()">Cancel</button>
    </div>

    <script>
        function confirmLogout() {
            // Redirect to the logout processing page or perform logout action
            window.location.href = 'logIn.php'; // Change this to your logout processing URL
        }

        function cancelLogout() {
            // Redirect back to the previous page or home page
            window.location.href = 'Sustainable.php'; // Change this to your home page URL
        }
    </script>

</body>
</html>