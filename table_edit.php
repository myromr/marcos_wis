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

                $sql = "INSERT INTO Course (CourseName, Credits) VALUES ('$courseName', '$credits')";

                if ($conn->query($sql) === TRUE) {
                    echo "Added Course";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add Instructor
            else if(isset($_POST['instructor_add'])) {
                $firstName = $_POST['first_name'];
                $lastName= $_POST['last_name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];

                $sql = "INSERT INTO Instructor (FirstName, LastName, Email, Phone) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phone')";

                if ($conn->query($sql) === TRUE) {
                    echo "Added Instructor";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Add Enrollment
            else if(isset($_POST['enrollment_add'])) {
                $studentId = $_POST['student_id'];
                $courseId= $_POST['course_id'];
                $enrollmentDate = $_POST['enrollment_date'];
                $grade = $_POST['grade'];

                $sql = "INSERT INTO Enrollment (StudentID, CourseID, EnrollmentDate, Grades) VALUES ('$studentId', '$courseId', '$enrollmentDate', '$grade')";

                if ($conn->query($sql) === TRUE) {
                    echo "Added Enrollment";
                } else {
                    echo "Error adding entity: " . $conn->error;
                }
            }

            // Update Users
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['users_update'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;

                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1){
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }

            // Update Student
            else if(isset($_POST['student_update'])) {
                $id = $_POST['id'];
                $firstName = $_POST['first_name'];
                $lastName = $_POST['last_name'];
                $dateOfBirth = $_POST['date_of_birth'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $edited = 0;

                if ($firstName != null){
                    $sql = "UPDATE Student SET FirstName='$firstname' WHERE StudentID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($lastName != null){
                    $sql = "UPDATE Student SET LastName='$lastName' WHERE StudentID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1){
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }
            // Update Course
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['users_update'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;

                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1){
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }
            // Update Instructor
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['users_update'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;

                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1){
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }
            // Update Enrollment
            else if(isset($_POST['users_update'])) {
                $id = $_POST['id'];
                $username = $_POST['users_update'];
                $email = $_POST['email'];
                $passwd = $_POST['passwd'];
                $edited = 0;

                if ($username != null){
                    $sql = "UPDATE Users SET Username='$username' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($email != null){
                    $sql = "UPDATE Users SET Email='$email' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($passwd != null){
                    $sql = "UPDATE Users SET Passwd='$passwd' WHERE UserID=$id";
                    $conn->query($sql);
                    $edited = 1;
                }

                if ($edited === 1){
                    echo "Updated User ID = $id";
                } else {
                    echo "Error updating entity: " . $conn->error;
                }
            }


        ?>
    </div>
</body>
</html>