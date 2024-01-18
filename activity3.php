<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentinfo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connection_error);
        }

        // Create
        if(isset($_POST['create'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];

            $sql = "INSERT INTO users (username, email) VALUES ('$username', '$email')";

            if ($conn->query($sql) === TRUE) {
                echo "Created $username";
            } else {
                echo "Error adding entity: " . $conn->error;
            }
        }

        // Update
        if(isset($_POST['update'])) {
            $id = $_POST['username'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $edited = 0;
        }

        if ($email != null) {
            $sql = "UPDATE users SET emial='email' WHERE id=$id";
            $conn->query($sql);
            $edited = 1;
        }

        if ($edited === 1) {
            echo "Updated id = $id";
        } else {
            echo "Error updating entity: " . $conn->error;
        }

        // Delete

        // Read

    ?>
</body>
</html>