<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Editable Tables</title>
</head>
<body>
    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentrecord";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("COnnection failed: " . $conn->connect_error);
        }


        // Update Student
        if(isset($_POST['student_update'])) {
            $id = $_POST['id'];
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $dateOfBirth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $edited = 0;

            if ($firstName != null){
                $sql = "UPDATE Student SET FirstName='$firstName' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($lastName != null){
                $sql = "UPDATE Student SET LastName='$lastName' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
            
            if ($dateOfBirth != null){
                $sql = "UPDATE Student SET DateOfBirth='$dateOfBirth' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($email != null){
                $sql = "UPDATE Student SET Email='$email' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($phone != null){
                $sql = "UPDATE Student SET Phone='$phone' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($edited === 1) {
                echo "Updated Student ID = $id";
    
            } else {
                echo "Error updating entity: " . $conn->error;
            }
        }

        // Update Course
        if(isset($_POST['student_update'])) {
            $id = $_POST['id'];
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $dateOfBirth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $edited = 0;

            if ($firstName != null){
                $sql = "UPDATE Student SET FirstName='$firstName' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($lastName != null){
                $sql = "UPDATE Student SET LastName='$lastName' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
            
            if ($dateOfBirth != null){
                $sql = "UPDATE Student SET DateOfBirth='$dateOfBirth' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($email != null){
                $sql = "UPDATE Student SET Email='$email' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($phone != null){
                $sql = "UPDATE Student SET Phone='$phone' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($edited === 1) {
                echo "Updated Student ID = $id";
    
            } else {
                echo "Error updating entity: " . $conn->error;
            }
        }

        // Update Instructor
        if(isset($_POST['student_update'])) {
            $id = $_POST['id'];
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $dateOfBirth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $edited = 0;

            if ($firstName != null){
                $sql = "UPDATE Student SET FirstName='$firstName' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($lastName != null){
                $sql = "UPDATE Student SET LastName='$lastName' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
            
            if ($dateOfBirth != null){
                $sql = "UPDATE Student SET DateOfBirth='$dateOfBirth' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($email != null){
                $sql = "UPDATE Student SET Email='$email' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($phone != null){
                $sql = "UPDATE Student SET Phone='$phone' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($edited === 1) {
                echo "Updated Student ID = $id";
    
            } else {
                echo "Error updating entity: " . $conn->error;
            }
        }

        // Update Enrollment
        if(isset($_POST['student_update'])) {
            $id = $_POST['id'];
            $firstName = $_POST['first_name'];
            $lastName = $_POST['last_name'];
            $dateOfBirth = $_POST['date_of_birth'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $edited = 0;

            if ($firstName != null){
                $sql = "UPDATE Student SET FirstName='$firstName' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($lastName != null){
                $sql = "UPDATE Student SET LastName='$lastName' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
            
            if ($dateOfBirth != null){
                $sql = "UPDATE Student SET DateOfBirth='$dateOfBirth' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($email != null){
                $sql = "UPDATE Student SET Email='$email' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($phone != null){
                $sql = "UPDATE Student SET Phone='$phone' WHERE StudentID=$id";
                $conn->query($sql);
                $edited = 1;
            }
    
            if ($edited === 1) {
                echo "Updated Student ID = $id";
    
            } else {
                echo "Error updating entity: " . $conn->error;
            }
        }

        $conn->close();

    ?>
</body>
</html>