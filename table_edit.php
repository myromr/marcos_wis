<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Edit Table</title>
</head>
<body>
    <div class="container">
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "marcos";

            $conn = new mysql($server, $username, $password. $dbname);

            if ($conn->connect_error) {
                die("COnnection failed: " . $conn->connect_error);
            }

            // Add User
            if(isset($_POST['users_add'])) {
                $username = $_POST['username'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];

                $sql = "INSERT INTO Users (Username, Email, Passwd) VALUES ('$username', '$email', '$passwd')";

                if ($conn->query($sql) === TRUE) {
                    echo "Added User";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add Student
            if(isset($_POST['student_add'])) {
                $firstName = $_POST['first_name'];
                $lastName= $_POST['last_name'];
                $dateOfBirth = $_POST['date_of_birth'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $sql = "INSERT INTO Student (FirstName, LastName, DateofBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

                if ($conn->query($sql) === TRUE) {
                    echo "Added Student";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add Course
            else if(isset($_POST['course_add'])) {
                $courseName = $_POST['course_name'];
                $credits= $_POST['credits'];

                $sql = "INSERT INTO Course (FirstName, LastName, DateofBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

                if ($conn->query($sql) === TRUE) {
                    echo "Added Student";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add Instructor
            if(isset($_POST['student_add'])) {
                $firstName = $_POST['first_name'];
                $lastName= $_POST['last_name'];
                $dateOfBirth = $_POST['date_of_birth'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $sql = "INSERT INTO Student (FirstName, LastName, DateofBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

                if ($conn->query($sql) === TRUE) {
                    echo "Added Student";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add Enrollment
            if(isset($_POST['student_add'])) {
                $firstName = $_POST['first_name'];
                $lastName= $_POST['last_name'];
                $dateOfBirth = $_POST['date_of_birth'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $sql = "INSERT INTO Student (FirstName, LastName, DateofBirth, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

                if ($conn->query($sql) === TRUE) {
                    echo "Added Student";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }
        ?>
    </div>
</body>
</html>