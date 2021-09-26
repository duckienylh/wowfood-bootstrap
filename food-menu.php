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
        <div id="header" class="container">
            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="./assets/img/logo.png" alt="" class="img-fluid">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
                                <li class="nav-item">
                                        <a class="nav-link " href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="explore-food.php">Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="food-menu.php">Foods</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="Dashboard.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <div id="slider" class="content-bg">
            <form class="d-flex col-6">
                <input class="form-control me-1 " type="search" placeholder="Searh for Food.." aria-label="Search">
                <button class="btn btn-outline-warning mysearch-color " type="submit">Search</button>
            </form>
        </div>

        <div id="food-menu" class="food-menu-bg">
            <div class="container pt-5 pb-5 mb-3">
                <div class="row mb-5">
                    <h2 class="text-center fw-bold ef-fz">Food Menu</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-12 d-flex card img-bd m-4" style="flex-direction: row;">
                        <div class="w-25 mt-3">
                            <img src="./assets/img/menu-momo.jpg" alt="Chicke Hawain Pizza" class="card-img-top img-bd">
                        </div>
        
                        <div class="card-body" >
                            <h4>Dumpling Specicals</h4>
                            <p class="card-text fs-4">$5.00</p>
                            <p class="card-text fs-5 fw-light">
                                Chicken Dumpling with herbs from Mountains.
                            </p>
        
                            <a href="#" class="btn mysearch-color">Order Now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 col-12 d-flex card img-bd m-4" style="flex-direction: row;">
                        <div class="w-25 mt-3">
                            <img src="./assets/img/menu-burger.jpg" alt="Chicke Hawain Pizza" class="card-img-top img-bd">
                        </div>
        
                        <div class="card-body" >
                            <h4>Best Burger</h4>
                            <p class="card-text fs-4">$4.00</p>
                            <p class="card-text fs-5 fw-light">
                                Burger with Ham, Pineapple and lots of Cheese.
                            </p>
        
                            <a href="#" class="btn mysearch-color">Order Now</a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 d-flex card img-bd m-4" style="flex-direction: row;">
                        <div class="w-25 mt-3">
                            <img src="./assets/img/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="card-img-top img-bd">
                        </div>
        
                        <div class="card-body" >
                            <h4>Smoky BBQ Pizza</h4>
                            <p class="card-text fs-4">$6.00</p>
                            <p class="card-text fs-5 fw-light">
                                Best Firewood Pizza in Town.
                            </p>
        
                            <a href="#" class="btn mysearch-color">Order Now</a>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 d-flex card img-bd m-4" style="flex-direction: row;">
                        <div class="w-25 mt-3">
                            <img src="./assets/img/menu-momo.jpg" alt="Chicke Hawain Pizza" class="card-img-top img-bd">
                        </div>
        
                        <div class="card-body" >
                            <h4>Sadeko Momo</h4>
                            <p class="card-text fs-4">$6.00</p>
                            <p class="card-text fs-5 fw-light">
                                Best Spicy Momo for Winter
                            </p>
        
                            <a href="#" class="btn mysearch-color">Order Now</a>
                        </div>
                    </div>               
                    
                    <div class="col-lg-5 col-12 d-flex card img-bd m-4" style="flex-direction: row;">
                        <div class="w-25 mt-3">
                            <img src="./assets/img/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="card-img-top img-bd">
                        </div>
        
                        <div class="card-body" >
                            <h4>Mixed Pizza</h4>
                            <p class="card-text fs-4">$10.00</p>
                            <p class="card-text fs-5 fw-light">
                                Pizza with chicken, Ham, Buff, Mushroom and Vegetables
                            </p>
        
                            <a href="#" class="btn mysearch-color">Order Now</a>
                        </div>
                    </div>               

                    <div class="col-lg-5 col-12 d-flex m-4" style="flex-direction: row;">
                        
                    </div>               
                </div>
            </div>
        </div>
        <div id="footer" class="text-center">
            <div class="mb-4">
                <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
                
                <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
                
                <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" /></a>
            </div>
            <p>All right reserved. Designed By <a href="#">Duc kien</a></p>
        </div>
    </div>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>