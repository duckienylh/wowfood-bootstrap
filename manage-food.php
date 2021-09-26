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
                <div class="row pt-5">
                    <h1 class="fw-bold fs-3">Manage Food</h1>
                    <div class="mt-5 mb-5">
                        <button type="button" class="btn btn-primary rounded-0">Add Food</button>
                    </div>
                </div> 
                
                <table class="table caption-top">
                    <thead>
                        <tr class="align-middle">
                            <th class="col-1">S.N.</th>
                            <th class="col-2">Title</th>
                            <th class="col-1">Price</th>
                            <th class="col-2">Image</th>
                            <th class="col-1">Featured</th>
                            <th class="col-1">Active</th>
                            <th class="col-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td scope="row">1.</td>
                            <td>Dumplings Specicals</td>
                            <td>$5.00</td>
                            <td><img src="./assets/img/menu-momo.jpg" class="w-50"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Food</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                            </td>
                        </tr>
                
                        <tr class="align-middle">
                            <td scope="row">2.</td>
                            <td>Best Burger</td>
                            <td>$4.00</td>
                            <td><img src="./assets/img/menu-burger.jpg" class="w-50"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Food</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                            </td>
                        </tr>
                
                        <tr class="align-middle">
                            <td scope="row">3.</td>
                            <td>Smoky BBQ Pizza</td>
                            <td>$6.00</td>
                            <td><img src="./assets/img/menu-pizza.jpg" class="w-50"></td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Food</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                            </td>
                        </tr>
                
                        <tr class="align-middle">
                            <td scope="row">4.</td>
                            <td>Sadeko Momo</td>
                            <td>$6.00</td>
                            <td><img src="./assets/img/menu-momo.jpg" class="w-50"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Food</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                            </td>
                        </tr>
                
                        <tr class="align-middle">
                            <td scope="row">5.</td>
                            <td>Mixed Pizza</td>
                            <td>$10.00</td>
                            <td><img src="./assets/img/menu-pizza.jpg" class="w-50"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Food</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                            </td>
                        </tr>
                
                        <tr class="align-middle">
                            <td scope="row">6.</td>
                            <td>Sed ipsum cillum in</td>
                            <td>$52.00</td>
                            <td><img src="" class="w-50" alt="image not Added" style="color: #ff6b81;"></td>
                            <td>No</td>
                            <td>No</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Food</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Food</button>
                            </td>
                        </tr>
                    </tbody>
                </table>    
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