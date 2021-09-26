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
                    <h1 class="fw-bold fs-3">Manage Order</h1>
                </div>
                <table class="table caption-top mt-5">
                    <thead>
                        <tr class="align-middle">
                            <th scope="col">S.N.</th>
                            <th scope="col">Food</th>
                            <th scope="col">Price</th>
                            <th scope="col">Qty.</th>
                            <th scope="col">Total</th>
                            <th scope="col">Date</th>
                            <th scope="col">Status</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="align-middle">
                            <td scope="row">1.</td>
                            <td>Mixed Pizza</td>
                            <td>10.00</td>
                            <td>2</td>
                            <td>20.00</td>
                            <td>2020-11-30 04:07:17</td>
                            <td class="text-success">Delivered</td>
                            <td>Jana Bush</td>
                            <td>+1 (562) 101-2028</td>
                            <td>tydujiy@mailnator.com</td>
                            <td>Minima iure ducimus</td>
                            <td>
                                <h5 class="bg-success">Update Order</h5>
                            </td>

                        </tr>

                        <tr class="align-middle">
                            <td scope="row">2.</td>
                            <td>Best Burger</td>
                            <td>4.00</td>
                            <td>4</td>
                            <td>16.00</td>
                            <td>2020-11-30 04:07:17</td>
                            <td class="text-success">Delivered</td>
                            <td>keylly Dillard</td>
                            <td>+1 (562) 101-2028</td>
                            <td>fexekihor@mailnator.com</td>
                            <td>Incidunt ipsum ad d</td>
                            <td>
                                <h5 class="bg-success">Update Order</h5>
                            </td>

                        </tr>

                        <tr class="align-middle">
                            <td scope="row">3.</td>
                            <td>sadeko Momo</td>
                            <td>6.00</td>
                            <td>3</td>
                            <td>18.00</td>
                            <td>2020-11-30 04:07:17</td>
                            <td class="text-danger">Cancelled</td>
                            <td>Bradley Farrell</td>
                            <td>+1 (562) 101-2028</td>
                            <td>zuhafig@mailnator.com</td>
                            <td>Duis aliqua Qui lor</td>
                            <td>
                                <h5 class="bg-success">Update Order</h5>
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