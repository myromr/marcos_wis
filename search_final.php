<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Search Results</title>
</head>
<body class="mb-3 mt-3">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mosawan";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $searchTerm = $_GET['search'];
    ?>

    <div class="container mb-3 mt-3">
        <h1>Search Results</h1>
    </div>

    <!-- Users -->
    <div class="container mb-5 mt-5">
        <h2>Table: Users</h2>
        <table class="table table-striped">
            <tr>
                <td>User ID</td>
                <td>Username</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
            <?php
                $sqlUsers = "SELECT * FROM Users WHERE ";
                $columnsUsers = ['UsersID', 'Username', 'Email', 'Passwd'];

                $conditionsUsers = [];
                foreach ($columnsUsers as $column) {
                    $conditionsUsers[] = "$column LIKE '%searchTerm%'";
                }

                $sqlUsers .= implode(" OR ", $conditionsUsers);

                $resultUsers = $conn->query($sqlUsers);

                if ($resultUsers->num_rows > 0) {
                    while ($row = $resultUsers->fetch_assocc()) {
                        echo "<tr><td>" .$row["UserID"]. "</td>";
                        echo "<td>" .$row["Username"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Passwd"]. "</td></tr>";
                    }
                } else {
                    echo "0 result from Users";
                }
            ?>
        </table>
    </div>

    <!-- Student -->
    <div class="container mb-5 mt-5">
        <h2>Table: Student</h2>
        <table class="table table-striped">
            <tr>
                <td>Student ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Date of Birth</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            <?php
                $sqlStudent = "SELECT * FROM Student WHERE ";
                $columnsStudent = ['StudentID', 'FirstName', 'LastName', 'DateOfBirth', 'Email', 'Phone'];

                $conditionsStudent = [];
                foreach ($columnsStudent as $column) {
                    $conditionsStudent[] = "$column LIKE '%searchTerm%'";
                }

                $sqlStudent .= implode(" OR ", $conditionsStudent);

                $resultStudent = $conn->query($sqlStudent);

                if ($resultStudent->num_rows > 0) {
                    while ($row = $resultStudent->fetch_assocc()) {
                        echo "<tr><td>" .$row["StudentID"]. "</td>";
                        echo "<td>" .$row["FirstName"]. "</td>";
                        echo "<td>" .$row["LastName"]. "</td>";
                        echo "<td>" .$row["DateOfBirth"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Phone"]. "</td></tr>";
                    }
                } else {
                    echo "0 result from Student";
                }
            ?>
        </table>
    </div>

    <!-- Course -->
    <div class="container mb-5 mt-5">
        <h2>Table: Course</h2>
        <table class="table table-striped">
            <tr>
                <td>Course ID</td>
                <td>Course Name</td>
                <td>Credits</td>
            </tr>
            <?php
                $sqlCourse = "SELECT * FROM Course WHERE ";
                $columnsCourse= ['CourseID', 'CourseName', 'Credits'];

                $conditionsCourse = [];
                foreach ($columnsCourse as $column) {
                    $conditionsCourse[] = "$column LIKE '%searchTerm%'";
                }

                $sqlCourse .= implode(" OR ", $conditionsCourse);

                $resultCourse = $conn->query($sqlCourse);

                if ($resultCourse->num_rows > 0) {
                    while ($row = $resultCourse->fetch_assocc()) {
                        echo "<tr><td>" .$row["CourseID"]. "</td>";
                        echo "<td>" .$row["CourseName"]. "</td>";
                        echo "<td>" .$row["Credits"]. "</td></tr>";
                    }
                } else {
                    echo "0 result from Course";
                }
            ?>
        </table>
    </div>

    <!-- Instructor -->
    <div class="container mb-5 mt-5">
        <h2>Table: Instructor</h2>
        <table class="table table-striped">
            <tr>
                <td>Instructor ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            <?php
                $sqlInstructor = "SELECT * FROM Instructor WHERE ";
                $columnsInstructor = ['InstructorID', 'FirstName', 'LastName', 'Email', 'Phone'];

                $conditionsInstructor = [];
                foreach ($columnsInstructor as $column) {
                    $conditionsInstructor[] = "$column LIKE '%searchTerm%'";
                }

                $sqlInstructor .= implode(" OR ", $conditionsInstructor);

                $resultInstructor = $conn->query($sqlInstructor);

                if ($resultInstructor->num_rows > 0) {
                    while ($row = $resultInstructor->fetch_assocc()) {
                        echo "<tr><td>" .$row["InstructorID"]. "</td>";
                        echo "<td>" .$row["FirstName"]. "</td>";
                        echo "<td>" .$row["LastName"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Phone"]. "</td></tr>";
                    }
                } else {
                    echo "0 result from Instructor";
                }
            ?>
        </table>
    </div>

    <!-- Enrollment -->
    <div class="container mb-5 mt-5">
        <h2>Table: Enrollment</h2>
        <table class="table table-striped">
            <tr>
                <td>Enrollment ID</td>
                <td>Student ID</td>
                <td>Course ID</td>
                <td>Enrollment Date</td>
                <td>Grade</td>
            </tr>
            <?php
                $sqlEnrollment = "SELECT * FROM Enrollment WHERE ";
                $columnsEnrollment = ['EnrollmentID', 'StudentID', 'CourseID', 'ENrollmentDate', 'Grade'];

                $conditionsEnrollment = [];
                foreach ($columnsEnrollment as $column) {
                    $conditionsEnrollment[] = "$column LIKE '%searchTerm%'";
                }

                $sqlEnrollment .= implode(" OR ", $conditionsEnrollment);

                $resultEnrollment = $conn->query($sqlEnrollment);

                if ($resultEnrollment->num_rows > 0) {
                    while ($row = $resultEnrollment->fetch_assocc()) {
                        echo "<tr><td>" .$row["EnrollmentID"]. "</td>";
                        echo "<td>" .$row["StudentID"]. "</td>";
                        echo "<td>" .$row["CourseID"]. "</td>";
                        echo "<td>" .$row["EnrollmentDate"]. "</td>";
                        echo "<td>" .$row["Grade"]. "</td></tr>";
                    }
                } else {
                    echo "0 result from Enrollment";
                }
            ?>
        </table>
    </div>

    <?php
        $conn->close();
    ?>
</body>
</html>