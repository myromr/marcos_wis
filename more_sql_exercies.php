<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="script.js"></script>
</head>
<body class="mb-3 mt-3">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "studentrecord";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>

    <div class="container mb-3">
        <form action="search.php" method="GET">
            <label for="search">Search:</label>
            <input type="text" id="search" name="search">
            <button type="submit">Submit</button>
        </form>
    </div>

    <!-- Student Table -->

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
                $sqlStudent = "SELECT * FROM Student";
                $resultStudent = $conn->query($sqlStudent);

                if ($resultStudent){
                    while ($row = $resultStudent->fetch_assoc()) {
                        echo "<tr><td?>" .$row["StudentID"]. "</td>";
                        echo "<td>" .$row["FirstName"]. "</td>";
                        echo "<td>" .$row["LastName"]. "</td>";
                        echo "<td>" .$row["DateOfBirth"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Phone"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>

        <button onclick="toggleFormStudentCreate()">Add</button>
        <button onclick="toggleFormStudentUpdate()">Update</button>
        <button onclick="toggleFormStudentDelete()">Delete</button>

        <div class="mt-3">
            <form id="StudentFormCreate" method="post" action="add_entity.php" style="display: none;">
                <h4>Add Student</h4>
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="last_name" placeholder="Last Name">
                <input type="text" name="date_of_birth" placeholder="Date of Birth">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
                <input type="submit" name="student_add" value="Add Student">
            </form>

            <form id="StudentFormUpdate" method="post" action="update_entity.php" style="display: none;">
                <h4>Update Student</h4>
                <input type="text" name="id" placeholder="Student ID" required>
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="last_name" placeholder="Last Name">
                <input type="date" name="date_of_birth" placeholder="Date of Birth">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="phone" placeholder="Phone">
                <input type="submit" name="student_update" value="Update Student">
            </form>

            <form id="StudentFormDelete" method="post" action="delete_entity.php" style="display: none;">
                <h4>Delete Student</h4>
                <input type="text" name="id" placeholder="Student ID" required>
                <input type="submit" name="student_delete" value="Delete Student">
            </form>
        </div>
    </div>

    <!-- Course Table -->

    <div class="container mb-5 mt-5">
        <h2>Table: Course</h2>
        <table class="table table-stripped">
            <tr>
                <td>Course Id</td>
                <td>Course Name</td>
                <td>Credit</td>
            </tr>

            <?php
                echo "<br>";
                $sqlCourse = "SELECT * FROM Course";
                $resultCourse = $conn->query($sqlCourse);

                if ($resultCourse){
                    while($row = $resultCourse->fetch_assoc()) {
                        echo "<tr><td>" .$row["CourseID"]. "</td>";
                        echo "<td>" .$row["CourseName"]. "</td>";
                        echo "<td>" .$row["Credits"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>

        <button onclick="toggleFormCourseCreate()">Add</button>
        <button onclick="toggleFormCourseUpdate()">Update</button>
        <button onclick="toggleFormCourseDelete()">Delete</button>

        <div class="mt-3">
            <form id="CourseFormCreate" method="post" action="add_entity.php" style="display: none;">
                <h4>Add Course</h4>
                <input type="text" name="course_name" placeholder="Course Name">
                <input type="text" name="credits" placeholder="Credits">
                <input type="submit" name="course_add" value="Add Course">
            </form>

            <form id="CourseFormUpdate" method="post" action="update_entity.php" style="display: none;">
                <h4>Update Course</h4>
                <input type="text" name="id" placeholder="Course ID" required>
                <input type="text" name="course_name" placeholder="Course Name">
                <input type="text" name="credits" placeholder="Credits">
                <input type="submit" name="course_update" value="Update Course">
            </form>

            <form id="CourseFormDelete" method="post" action="delete_entity.php" style="display: none;">
                <h4>Delete Course</h4>
                <input type="text" name="id" placeholder="Course ID" required>
                <input type="submit" name="course_delete" value="Delete Course">
            </form>
        </div>
    </div>

    <!-- Instructor Table -->

    <div class="container mb-5 mt-5">
        <h2>Table: Instructor</h2>
        <table class="table table-stripped">
            <tr>
                <td>Instructor ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>

            <?php
                echo "<br>";
                $sqlInst = "SELECT * FROM Instructor";
                $resultInst = $conn->query($sqlInst);

                if ($resultInst){
                    while($row = $resultInst->fetch_assoc()) {
                        echo "<tr><td>" .$row["InstructorID"]. "</td>";
                        echo "<td>" .$row["FirstName"]. "</td>";
                        echo "<td>" .$row["LastName"]. "</td>";
                        echo "<td>" .$row["Email"]. "</td>";
                        echo "<td>" .$row["Phone"]. "</td></tr>";
                    }
                }
                else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            ?>
        </table>

        <button onclick="toggleFormInstructorCreate()">Add</button>
        <button onclick="toggleFormInstructorUpdate()">Update</button>
        <button onclick="toggleFormInstructorDelete()">Delete</button>

        <div class="mt-3">
            <form id="InstructorFormCreate" method="post" action="add_entity.php" style="display: none;">
                <h4>Add Instructor</h4>
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="last_name" placeholder="Last Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="Phone" placeholder="Phone">
                <input type="submit" name="instructor_add" value="Add Instructor">
            </form>
            
            <form id="InstructorFormUpdate" method="post" action="update_entity.php" style="display: none;">
                <h4>Update Instructor</h4>
                <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="last_name" placeholder="Last Name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="Phone" placeholder="Phone">
                <input type="submit" name="instructor_add" value="Add Instructor">
            </form>

            
        </div>
    </div>


</body>
</html>