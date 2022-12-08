<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <link href="login.css" rel="stylesheet" type="text/css">
    <title>Voting(sign-up) System</title>
</head>
<body  class="bg-success">
<div style="font-family: monoton;" class="container my-5">
    <h1 class="col-6">Online Voting System</h1>
    </div>
    <hr>
   
<div class="container bg-secondary login">  
    <div class="row align-items-center">  
        <h3 class="col-auto">Registration</h3>
    </div>  
    <!-- Name and Mobile -->
    <form method="post" action="uploads.php" enctype="multipart/form-data">
     <div class="row g-3 align-items-center">
        <div class="col-6">
            <input type="text" class="form-control" placeholder="Name" name="name">
        </div>
        <div class="col-6">
            <input type="number" class="form-control" placeholder="Mobile" name="mobile">
        </div>
     </div>
     <!-- Password -->
    <div class="row g-3 align-items-center">
        <div class="col-6 my-4">
            <input type="password" placeholder="Password" class="form-control password" name="password">
            <!-- <span class="error"></span> -->
        </div>
        <div class="col-6 my-4">
            <input type="password" placeholder="Confirm Password" class="form-control cpassword" name="cpassword">
        </div> 
    </div>
        <!-- Address -->
    <input type="text"  class="form-control" placeholder="Address" name="address">
    <div class="mb-3 my-2">
        <select name="std" class="form-select m-auto">
            <option>Select Category</option>
            <option value="Group" name="group">Group</option>
            <option value="Voter" name="voter">Voter</option>
        </select>
    </div>
    
    <!-- Upload Image -->
    <div class="container my-5">
          <div class="upload col-auto">  
                <p class="my-4">  Upload Image:<input class="upload" type="file" name="file"></p>
          </div>
    </div>
    <button type="submit" name="register" class="btn btn-primary col-12">Register</button>
    </form>
</div> 

     <!-- <script>
        let password = document.querySelector(".password")
        let cpassword = document.querySelector(".cpassword")

        if(password != cpassword){
            alert("Passwords do not match")
        }else{
        } 
   </script>  -->
</body>
</html>