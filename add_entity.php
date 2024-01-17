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
        else if(isset($POST['course_add'])) {
            $courseName = $_POST['course_name'];
            $credits = $_POST['credits'];

            $sql = "INSERT INTO Course (CourseName, Credits) VALUES ('$courseName', '$credits')";

            if ($conn->query($sql) === TRUE) {
                echo "Added Course";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }

        // Add Instructor
        else if(isset($POST['instructor_add'])) {
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            $sql = "INSERT INTO Instructor (FirstName, LastName, Email, Phone) VALUES ('$firstName', '$lastName', '$email', '$phone')";

            if ($conn->query($sql) === TRUE) {
                echo "Added Instructor";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }

        // Add Enrollment
        else if(isset($POST['enrollment_add'])) {
            $studentId = $_POST['student_id'];
            $courseId = $_POST['course_id'];
            $enrollmentDate = $_POST['enrollment_date'];
            $grade = $_POST['grade'];

            $sql = "INSERT INTO Enrollment (StudentID, LCourseID, EnrollmentDate, Grade) VALUES ('$studentId', '$courseId', '$enrollmentDate', '$grade')";

            if ($conn->query($sql) === TRUE) {
                echo "Added Enrollment";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }

        $conn->close();
    ?>
</body>
</html>