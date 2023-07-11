<?php
session_start();
include "../classes/Product.php";

    $product = new Product;

    $product_list = $product->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between">
        <a href="dashboard.php" class="ms-3" title="Home">
            <i class="fa-solid fa-house fa-2x text-dark"></i>
        </a>

        <a href="profile.php" class="nav-link text-secondary">
            <span class="fw-bold fs-5">Welcome, <?= ucfirst($_SESSION['username'])?></span>
        </a>

        <!-- <div class="ms-auto me-3 navbar-nav"> -->
            <a href="../actions/logout.php" class="me-3" title="Logout"><i class="fa-solid fa-user-xmark fa-2x text-danger"></i></a>
        <!-- </div> -->
    </nav>
    <div class="container mt-5">
        <div class="card w-75 border-0 mx-auto">
            <div class="card-header bg-white border-0">
                <div class="row">
                    <div class="col text-start">
                        <h1 class="display-6 fw-bold">Product List</h1>
                    </div>
                    <div class="col text-end">
                        <i class="fa-solid fa-plus fa-3x text-info" data-bs-toggle="modal" data-bs-target="#register" style="cursor: pointer;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <table class="table table-hover">
            <thead class="table-dark">
                <th>ID</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <?php
                
                foreach($product_list as $product)
                {
                    ?>
                    <tr>
                        <td><?= $product['id']?></td>
                        <td><?= $product['product_name']?></td>
                        <td><?= $product['price']?></td>
                        <td><?= $product['quantity']?></td>
                        <td class="">
                            <a href="edit-product.php?product_id=<?=$product['id']?>" class="btn btn-warning btn-sm" title="Edit Product">
                            <i class="fa-solid fa-pen"></i></a>
                            <a href="../actions/delete-product.php?product_id=<?=$product['id']?>" class="btn btn-danger btn-sm" title="Delete Product"><i>
                            <i class="fa-solid fa-pen"></i></a>
                        </td>
                        <td>
                            <a href="../views/buy-product.php?product_id=<?=$product['id']?>" class="btn btn-success btn-sm" title="Buy Product"><i class="fa-solid fa-cash-register"></i></a>
                        </td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
        

    <!-- Modal -->
<div class="modal fade" id="register" tabindex="-1"     aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
            
        <div class="modal-body">
        <div class="card ">
            <div class="card-body text-center">
                <h1 class="bold text-info">
                
                <i class="fa-solid fa-box"></i>
                Add Product

                </h1>
                <form action="../actions/product-actions.php" method="post">
                    <div class="row justify-content-center">
                        <div class="col-6 mb-2">
                
                            <label for="product-name" class="form-label">Product Name</label>
                            <input type="text" name="product_name" id="productname" class="form-control" required auto-focus>

                        </div>

                    </div> 
                    <div class="row justify-content-center">
                        <div class="col-3 mb-2">
                
                            <label for="price" class="form-label">Price</label>
                            <input type="number" name="price" id="price" class="form-control" required auto-focus>
                            
                        </div>
                        <div class="col-3 mb-2">

                            <label for="quantity" class="form-label">Quantity</label>
                            <input type="number" name="quantity" id="quantity" class="form-control" required auto-focus>

                    </div>
                    </div>
                        <div class="mb-1">
                            <button type="submit" class="btn btn-info w-50 mx-auto" name="add_product">Add</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>