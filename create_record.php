<html>
    <head>
        
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
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <body>
        <h1><?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "student_records";
                    
            $name = "name";
            $age = "age";
            $grade = "grade";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }else{
                        echo "Connected to Database<br>";
                    }


                $insert = "INSERT INTO students (`id`, `name`, `age`, `grade`) 
                VALUES (NULL, $name, $age, $grade)";
                    
                if ($conn->query($insert) === TRUE) {
                    echo "New record created successfully"."<br>";
                    } else {
                        echo "Error: " . $insert . "<br>" . $conn->error;
                    }

            $conn->close();

        ?></h1>
        <p>
            <?php
                    $inputform= "input_form.php";
                    echo '<a href="' . $inputform . '" class="button">Create another Record</a>'.'<br>';
            ?>
        </p>
    </body>
</html>