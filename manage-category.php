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
                    <h1 class="fw-bold fs-3">Manage Category</h1>
                    <div class="mt-5 mb-5">
                        <button type="button" class="btn btn-primary rounded-0">Add Category</button>
                    </div>
                </div>
                <table class="table caption-top">
                    <thead>
                        <tr class="align-middle">
                            <th class="col-1">S.N.</th>
                            <th class="col-3">Title</th>
                            <th class="col-2">Image</th>
                            <th class="col-1">Featured</th>
                            <th class="col-1">Active</th>
                            <th class="col-4">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td scope="row">1.</td>
                            <td>Pizza</td>
                            <td><img src="./assets/img/pizza.jpg" class="w-100"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Category</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Category</button>
                            </td>
                        </tr>

                        <tr class="align-middle">
                            <td scope="row">2.</td>
                            <td>Burger</td>
                            <td><img src="./assets/img/burger.jpg" class="w-100"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Category</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Category</button>
                            </td>
                        </tr>

                        <tr class="align-middle">
                            <td scope="row">3.</td>
                            <td>MoMo</td>
                            <td><img src="./assets/img/momo.jpg" class="w-100"></td>
                            <td>Yes</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Category</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Category</button>
                            </td>
                        </tr>

                        <tr class="align-middle">
                            <td scope="row">4.</td>
                            <td>Quia est ipsum id id</td>
                            <td><img src="./assets/img/pizza.jpg" class="w-100"></td>
                            <td>No</td>
                            <td>Yes</td>
                            <td>
                                <button type="button" class="btn btn-success rounded-0">Update Category</button>
                                <button type="button" class="btn btn-danger rounded-0">Delete Category</button>
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