<html>
    <head>
        
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
    form {
        text-align: center;
        font-family: Verdana, sans-serif;
    }
    input[type="text"],
    input[type="int"],
    textarea {
        width: 30%;
        padding: 10px;
        margin: 5px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: none;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 16px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 25%;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
    </style>
    <body>
        <br></br>
        <img src="pixel-cat.gif" alt="cat" width="150" height="150">
        <br></br>
        <?php
        $name = $_POST["name"];
        $age = $_POST["age"];
        $grade = $_POST["grade"];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "student_records";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO students (name, age, grade)
        VALUES ('$name', '$age', '$grade')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        $conn->close();
        ?>
        <br></br>
        <br></br>
        <li><a href="index.php">Back to Home</a></li>
        <li><a href="input_form.php">Create Another Record</a></li>
    </body>
</html>