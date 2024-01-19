<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
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
    <!-- Course -->
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

    <!-- Instructor -->
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

    <!-- Enrollment -->
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

    <?php
        $conn->close();
    ?>
</body>
</html>