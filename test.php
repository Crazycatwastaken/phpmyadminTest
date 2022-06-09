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
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-3">Customer Search </h1>
                <p class="lead">Input an ID.</p>
                <hr class="my-2">
                <p>Alternivity</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button">Jumbo action name</a>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h2>Search Via ID</h2><br>
                <form action="searchID.php" method="post">
                    <input type="text" name="searchID" placeholder="enter ID">
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>
            <div class="col-lg-6">
            <div class="col-lg-6">
                <h2>Search Via Name</h2><br>
                <form action="searchName.php" method="post">
                    <input type="text" name="searchName" placeholder="enter Name">
                    <input type="submit" name="submit" value="submit">
                </form>
            </div>
        </div>
        <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>