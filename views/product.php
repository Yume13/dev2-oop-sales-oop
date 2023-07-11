<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <div class="card ">
            <div class="card-body text-center">
                <h1 class="bold text-info">
                <i class="fa-solid fa-box"></i>
                Add Product

                </h1>
                <div class="row justify-content-center">
                    <div class="col-6 mb-2">
            
                        <label for="productname" class="form-label">Product Name</label>
                        <input type="text" name="productname" id="productname" class="form-control" required auto-focus>

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
                        <button type="account" class="btn btn-info w-50 mx-auto" >Add</button>
                    </div>

            </div>
        </div>
    </div>
    
</body>
</html>