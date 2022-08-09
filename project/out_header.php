<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <div class="container">
    <header class="blog-header lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
        </div>
        <div class="col-4 text-center">
            <a href="main.php"><img src="logo.png" alt="로고"></a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center" id="cat">
            <!-- <span><a href="login_form.php" id="login">Login</a></span> -->
            <!-- <span>/</span> -->
            <!-- <span><a href="join.php" id="join">Join</a></span> -->
            <a class="btn btn-sm btn-outline-secondary" href="login_form.php" id="login">Login</a>
            <a class="btn btn-sm btn-outline-secondary" href="join.php" id="join">Join</a>
        </div>
        </div>
    </header>
    <div class="nav_wrap">
        <div class="nav-scroller py-1 mb-2">
            <a class="p-2 link-secondary" href="main.php">Home</a>
            <a class="p-2 link-secondary" href="#">community</a>
            <a class="p-2 link-secondary" href="#">Transaction</a>
        </div>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
</body>
</html>