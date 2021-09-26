<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div id="main">
        <div id="header">
            <div class="row">
                <ul class="nav justify-content-center border-bottom border-dark">
                    <li class="nav-item">
                        <a class="nav-link" href="Dashboard.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-user.php">Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-category.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-food.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage-order.php">Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">logout</a>
                    </li>
                </ul>
            </div>
        </div>

        <div id="manage-user" class="bg-light">
            <div class="container pb-5">
                <div class="row pt-5 pb-5">
                    <h1 class="fw-bold fs-3">Dashboard</h1>
                </div>

                <div class="row d-flex justify-content-between m-4">
                    <div class="col text-center">
                        <div class="card border-0 mb-2 my-min-width">
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-3">4</h5>
                                <p class="card-text mt-3">Categories</p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card border-0 mb-2 my-min-width">
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-3">6</h5>
                                <p class="card-text mt-3">Foods</p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card border-0 mb-2 my-min-width">
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-3">3</h5>
                                <p class="card-text mt-3">Total Orders</p>
                            </div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="card border-0 mb-2 my-min-width">
                            <div class="card-body">
                                <h5 class="card-title fw-bold fs-3">$36.00</h5>
                                <p class="card-text mt-3">Revenue Generated</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="bg-danger text-center p-3 text-white fs-4">
                2020 All right reserved. Food House. Designed By - <a href="#" style="color: blue;">Duc kien</a>
            </div>
        </div>
    </div>
</body>
</html>