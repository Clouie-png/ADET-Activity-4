<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record Database Management System</title>
    </head>
    <style>
        body {
            background-color: #F5F5DC;
            font-family: Verdana, Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            text-align: center;
            font-family: Arial, sans-serif;
        }

        li {
            list-style: none;
            margin-bottom: 10px;
        }

        li a {
            display: inline-block;
            width: 200px;
            padding: 10px;
            background-color: #4CAF50;
            color: black;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        li a:hover {
            background-color: #45a049;
        }
        img {
        display: block;
        margin: 0 auto 20px;
        border-radius: 50%;
        }
    </style>
    <body background-color=BROWN>
        <img src="WALTER.jpeg" alt="logo icon" width="150" height="150">
        <br></br>

        <h1>Welcome to Clouie's <br>Student Database Management System</h1><p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "student_records";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }else{
                echo "Connected to Database<br>";
                echo "What would you like to do?";
            }


            $conn->close();
            ?>
        <br></br>
        <br></br>
        <li><a href="input_form.php">Create New Record</a></li>        
        <li><a href="view.php">Read Record</a></li>
        <li><a href="edit.php">Update Record</a></li>
        <li><a href="delete.php">Delete Record</a></li>

</p>
    </body>
</html>
