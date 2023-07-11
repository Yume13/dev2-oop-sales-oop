<?php
    session_start();

    include "../classes/Product.php";
    $product = new Product;
    $product_details = $product->displaySpecificProduct($_GET['product_id']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container">
    <form action="../actions/product-actions.php" method="post">
    <input type="hidden" name="product_id" value="<?= $product_details['id']?>">

        <div class="card border-0">
            <div class="card-body text-center">
                <h1 class="bold text-warning">
                <i class="fa-solid fa-pen-to-square"></i>
                Edit Product

                </h1>
                <div class="row justify-content-center">
                    <div class="col-6 mb-2">
            
                        <label for="productname" class="form-label">Product Name</label>
                        <input type="text" name="product_name" id="product_name" class="form-control" value="<?= $product_details['product_name']?>" required auto-focus>

                    </div>

                </div> 
                <div class="row justify-content-center">
                    <div class="col-3 mb-2">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" id="price" class="form-control" value="<?= $product_details['price']?>"required auto-focus>
                        
                    </div>
                    <div class="col-3 mb-2">

                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" value="<?= $product_details['quantity']?>"required auto-focus>

                </div>
                </div>
                    <div class="mb-1">
                        <button type="submit" class="btn btn-warning w-50 mx-auto" name="edit_product">Edit</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
  </form>  
</body>
</html>