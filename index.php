<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record Database Management System</title>
    </head>
    <style>
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
            text-align: center;
            font-family: Verdana, sans-serif;
        }
    </style>
    <body background-color=BROWN>
        <h1>Welcome to Student CRUD Database</h1><p>
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

        <li><a href="input_form.php">Create New Record</a></li>
        <li><a href="delete.php">Delete Record</a></li>

</p>
    </body>
</html>
