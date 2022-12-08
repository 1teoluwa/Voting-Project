<?php 
    include "connect.php";
    $username = $_POST["name"];
    //$mobile = $_POST["mobile"];
    $password = $_POST["password"];
    // $group = $_POST["group"];
    // $std = $_POST["std"];
    //$address = $_POST["address"];
    // $image = $_FILES["image"];
    // $res = mysqli_query($con,$std);
    $data = "select * from voter where name = '$username'and password = '$password'";
    $result = mysqli_query($con,$data); 
    if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        //echo "name :" . $row['name'].$row['mobile'].$row['address'].$row['image']."<br>";
    }
    }else{
     echo "<script>
     alert('Incorrect Username Or Password')
     window.location = 'login.php'
     </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet" crossorigin="anonymous"/>
    <link href="login.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">    
    <title>Profile</title>
</head>
    <body class= "bg-success">    
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
            <div class="navbar-nav">
                <a class="nav-link" href="#"><i class="d-inline-block align-text-top fa fa-chevron-left fa-2x text-outline-dark" aria-hidden="true"></i></a>
             </div>
                <h1><a style="font-family: monoton, san-serif" class="text-center navbar-brand" href="#">Online Voting System</a></h1>
            <div class="navbar-nav">   
                <a class="btn btn-outline-warning nav-link" onclick="logout()">Logout</a>
            </div>
          </div>
        </nav>
      <hr>
      <div class="col-12">
        <div class="row">
            <div class="bg-light col-3 ms-5 alert alert-info voterProfile" style="width:20rem; height:20em;">
                <img class="ms-5 my-3 text-center"  src="<?php $result = mysqli_query($con,$data); 
                                        if(mysqli_num_rows($result) > 0 ){
                                         while($row = mysqli_fetch_assoc($result)){
                                          echo $row['image'];
                                             }
             }?>" style="border-radius: 5rem;"height="150" width="150">
            <br>
            <h5><b>Name : </b><?php echo $username; ?></h6>
            <h5><b>Mobile : </b><?php  
                          $result = mysqli_query($con,$data); 
                          if(mysqli_num_rows($result) > 0 ){
                          while($row = mysqli_fetch_assoc($result)){
                                echo $row["mobile"];
                          }
                        };?></h5>
            <h5><b>Address :</b><?php 
                                    $result = mysqli_query($con,$data); 
                                    if(mysqli_num_rows($result) > 0 ){
                                    while($row = mysqli_fetch_assoc($result)){
                                          echo $row["address"];
                                    }                      
                                } 
                                    ?></h5>
            <h5><b>Status :</b><?php
                                    $result = mysqli_query($con,$data); 
                                    if(mysqli_num_rows($result) > 0 ){
                                    while($row = mysqli_fetch_assoc($result)){
                                            if($row["status"] == 0){
                                                echo "<b class='text-danger'> Not Voted</b>";
                                            }else{
                                                echo "<b class='text-success'> Voted</b>";
                                            };
                                    }                      
                                } 
                                    ?>
                                         
        </div>
        
        <div class="container bg-light mb-5 col-3" name="std">
            <h5>Group Name:</h5> <p><?php
                    $result = mysqli_query($con,$data);
                        if(mysqli_num_rows($result) > 0){
                           $SQL= "select name, image, votes, id  from voter where standard ='group' ";
                            $res = mysqli_query($con,$SQL);
                            if(mysqli_num_rows($res) > 0){
                                $groups = mysqli_fetch_assoc($res);
                                echo strtoupper($groups["name"]); 
                            }
                        };?></p>
                        <img class="ms-5 "src="<?php $result = mysqli_query($con,$data);
                                         if(mysqli_num_rows($result)>0){
                                            $SQL= "select * from `voter` where standard = 'group'";
                                            $res = mysqli_query($con, $SQL);
                                            if(mysqli_num_rows($res) > 0){
                                                $groups = mysqli_fetch_assoc($res);
                                                echo $groups["image"];
                                            }
                                        }
                                             ?>"style="border-radius: 4rem;" width="100" height="100"/>
            </div>
        </div>
    </div>
<script>
            function logout(){
                alert("Log-Out Successful")
                window.location= "login.php"
            }               
        </script>
    </body>
</html>
