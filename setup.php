<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5;final_project.php">
    <title>Create Databases</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Create Database
        $create_db = "CREATE DATABSE IF NOT EXISTS marcos";
        if ($conn->query($create_db) === true) {
            echo "Database Created";
        } else {
            echo "Error creating database: ".$conn->error;
        }

        $conn->select_db("marcos");

        // Create Tables
        $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID),
            )";

        $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID),
            )";

        $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID),
            )";

        $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID),
            )";

        $create_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID int NOT NULL AUTO_INCREMENT,
            Username varchar(255),
            Email varchar(255),
            Passwd varchar(255),
            PRIMARY KEY (UserID),
            )";

        $conn->query($create_users);
        $conn->query($create_student);
        $conn->query($create_course);
        $conn->query($create_instructor);
        $conn->query($create_enrollment);

        // Create contents of table
        $users = "INSERT INTO Users (Username, Email, Passwd)
            VALUES ('User1', 'user@email.com', 'password'),
            ('UserTwo', 'user@gmail.com', '12345678'),
            ('ThirdUser', 'user@example.com', '87456321')";

        $student = "INSERT INTO Student (FirstName, LastName, DateOfBirth, Email, Phone)
            VALUES ('Yew', 'Wey', '2001-09-08', 'ywe@email.com', '09245826142'),
            ('Ure', 'Mew', '2021-01-21', 'mew@email.com', '09245826987'),
            ('Mano', 'Wer', '1999-05-08', 'mple@email.com', '09245826986')";

        $course = "INSERT INTO course (CourseName, Credits)
            VALUES ('Test Course', 80),
            ('WIS', 80),
            ('Racing Course', 80)";

        $instructor = "INSERT INTO instructor (FirstName, LastName, Email, Phone)
            VALUES ('TestInst', 'Lastname', 'email@email.com', '09123456789'),
            ('Tam', 'Lem', 'lem@email.com', '09123456780'),
            ('Instlo', 'Holo', 'emil@email.com', '09123456788')";

        $enrollment = "INSERT INTO Enrollment (StudentID, CourseID, EnrollmentDate, Grade)
            VALUES (1, 1, '2023-11-21', 75),
            (2, 2, '2023-11-21', 85),
            (3, 2, '2023-11-21', 95)";

        $conn->query($users);
        $conn->query($student);
        $conn->query($course);
        $conn->query($instructor);
        $conn->query($enrollment);

        $conn->close();

        echo "<br><br>Redireting in 5 seconds...";
    ?>
</body>
</html>