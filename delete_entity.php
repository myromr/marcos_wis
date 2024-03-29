<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Editable Table</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentrecord";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Delete Student
        if(isset($_POST['student_delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM Student WHERE StudentID = $id";

            try {
                if ($conn->query($sql) === TRUE) {
                    echo "Deleted Student";
                } else {
                    echo "Error deleting entity: " . $conn->error;
                }
            } catch (Exception $e){
                echo "Cannot delete student. Student is connected with other tables.";
            }
        }
        
        // Delete Course
        else if(isset($_POST['course_delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM Course WHERE CourseID = $id";

            try {
                if ($conn->query($sql) === TRUE) {
                    echo "Deleted Course";
                } else {
                    echo "Error deleting entity: " . $conn->error;
                }
            } catch (Exception $e){
                echo "Cannot delete course. Course is connected with other tables.";
            }
        }

        // Delete Instructor
        else if(isset($_POST['instructor_delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM Instructor WHERE InstructorID = $id";

            try {
                if ($conn->query($sql) === TRUE) {
                    echo "Deleted Instructor";
                } else {
                    echo "Error deleting entity: " . $conn->error;
                }
            } catch (Exception $e){
                echo "Cannot delete instructor. Instructor is connected with other tables.";
            }
        }

        // Delete Enrollment
        if(isset($_POST['enrollment_delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM Enrollment WHERE EnrollmentID = $id";

            try {
                if ($conn->query($sql) === TRUE) {
                    echo "Deleted Enrollment";
                } else {
                    echo "Error deleting entity: " . $conn->error;
                }
            } catch (Exception $e){
                echo "Cannot delete enrollment. Enrollment is connected with other tables.";
            }
        }

        $conn->close();
    ?>
</body>
</html>