<html>
    <head>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CLOUIE - VIEW ALL FORMS</title>

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
            background-color: white;
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

        table {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center, left;
        }
        th {
            background-color: #45a049;
            color: white;
        }
        tr:nth-child(even) {
            background-color: white;
        }
        img {
        display: block;
        margin: 0 auto 20px;
        border-radius: 50%;
        }
    </style>
    <body>
        <img src="WALTER.jpeg" alt="walter" width="150" height="150">
        <?php


        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "student_records";


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        echo "<h2>STUDENT INFORMATION</h2>";
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Student ID</th><th>Student Name</th><th>Student Age</th><th>Student Grade</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td>" . $row["grade"] . "</td>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "0 results";
        }



        $conn->close();
        ?>
        <li><a href="index.php">Back to Home</a></li>
        <li><a href="view.php">Search another record</a></li>
    </body>
</html>