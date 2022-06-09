<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Background.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Results for ID serarch</h1>
        <a class="btn btn-primary" href="test.php" role="button">Back To search</a>

        <?php
        if (!empty($_POST['searchName'])) {

            //Creats a database connection
            $conn = new mysqli("localhost", "root", "", "test");

            // Extracts data and converts to variables
            $data = array_map(array($conn, 'real_escape_string'), $_POST);
            extract($data);


            $sql = "SELECT * FROM customers WHERE FirstName LIKE '%$searchName%'";
            $result = $conn->query($sql);


            if ($result->num_rows > 0) {
        ?>
                <table>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Loan amount</th>
                    </tr>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo ("<td>: "  . $row['FirstName'] . "</td>");
                        echo ("<td>: " . $row['LastName'] . "</td>");
                        echo ("<td>: " . $row['LoanAmount'] . "</td>");
                        echo "</tr>";
                    }
                    ?>
                </table>
        <?php

            } else {
                echo "0 results";
            }
        } else {
            echo ("Please enter an ID");
        }
        ?>
    </div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>