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
        <h3>Results for ID serarch</h3>
        <a class="btn btn-primary" href="test.php" role="button">Back To search</a>
    </div>

    <?php
    if (!empty($_POST['searchID'])) {

        $conn = new mysqli("localhost", "root", "", "test");

        $data = array_map(array($conn, 'real_escape_string'), $_POST);
        extract($data);


        $sql = "SELECT * FROM customers WHERE id = $searchID";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $IDV =  ("ID: "  . $row['ID'] . " ");
                $NameV = ("Name: " . $row['FirstName'] . " " . $row['LastName'] . " ");
                $SexV =  ("Sex: " . $row['Sex'] . "<br>");
            }
        } else {
            echo "0 results";
        }
    } else {
        echo ("Please enter an ID");
    }
    ?>
    <div class="container">
        <br>
        <h4>
            <?php 
            echo $IDV;
            echo $NameV;
            echo $SexV;
             ?> 
        </h4>
    </div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>