<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row justify-content-center gx-0 offset-md-3">
            <div class="col-8">
                <div class="col-5 mt-3 mb-2 ">
                    <h1 class="bold text-center">LOGIN
                        <i class="fa-solid fa-right-to-bracket text-primary text-center"></i>
                    </h1>
                </div>   

                <form action="../actions/login.php" method="post">
                    <div class="col-6 mb-2">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required auto-focus placeholder=Username>

                    </div>
                    <div class="col-6 mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="upassword" class="form-control" required auto-focus placeholder=Password>

                    </div>
                    <div class="mb-2">
                        <button type="login" class="btn btn-primary w-50">Login</button>
                    </div>
                    <div class="mb-1">
                    <button type="account" class="btn btn-danger w-50 mx-auto" data-bs-toggle="modal" data-bs-target="#register">Create an account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1"     aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
        <div class="modal-body">
        <div class="row">
            <div class="col-md-6 justfy-content-center offset-md-3">
                <div class=" text-danger text-center mt-5">
                
                    <h1 class="bold"><i class="fa-solid fa-user-plus h1"></i>Registration</h1>
                </div>
                <form action="../actions/register.php" method="post">
                    <div class="mb-3 ">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text"  name="first_name" id="first_name" autofocus required class="form-control">
                    
                        <label for="last_name" class="last-name">Last Name</label>
                        <input type="text"  name="last_name" id="last_name" autofocus required class="form-control">
                       
                        
                    </div>
                    <div class=" mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username">
                    </div> 
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div> 
                    <div class="mb-3">
                        <button type="submit" class="btn btn-danger w-100">Register</button>
                    </div>
                </form>
            </div>
                
        </div>
        </div>
    </div>
  
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    
</body>
</html>