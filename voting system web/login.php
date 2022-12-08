<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link href="login.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">
    <title>Voting System</title>
</head>
<body  class="bg-success">
    <div style="font-family: monoton;" class="container my-5">
    <h1 >Online Voting System</h1>
    </div>
    <hr>
    <div class="container bg-secondary login">
        <h4 id="subhead">Log-In</h4>
        <form action="profile.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" 
    name="name" type="text" placeholder="Enter Your Name">
  </div>
  <div class="mb-3">
    <label name="password">Password</label>
    <input type="password" placeholder="Password" name="password" class="value form-control">
  </div>
  <div class="mb-3 form-check">
    <input onclick="showpassword()" type="checkbox" class="password">
    <label >Check My Password</label>
  </div> 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
New User? <a href="signup.php">Register Here</a>
    <script>
         let pword = document.querySelector(".password");
          let value = document.querySelector(".value");
         pword.addEventListener("click",function showpassword(){
                     if(value.type == "password"){
                        value.type="text";
                    }else{
                        value.type="password";
                    };
            })
    </script>
</body>
</html>