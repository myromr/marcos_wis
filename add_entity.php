<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3;more_sql_exercise.php">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Edited Table</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $passqord = "";
        $dbname = "studentrecord";

        $conn = new mysql($servername, $username, $passqord, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Add Student
        if(isset($POST['student_add'])) {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $dateOfBirth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO Student (FirstName, LastName, DateOfBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "Added Student";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }

        // Add Course
        if(isset($POST['student_add'])) {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $dateOfBirth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO Student (FirstName, LastName, DateOfBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "Added Student";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }

        // Add Instructor
        if(isset($POST['student_add'])) {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $dateOfBirth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO Student (FirstName, LastName, DateOfBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "Added Student";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }

        // Add Enrollment
        if(isset($POST['student_add'])) {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $dateOfBirth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO Student (FirstName, LastName, DateOfBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "Added Student";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }
    ?>
</body>
</html>