<?php
 include 'connect.php';
// $register = $_POST["register"];
$username = $_POST["name"];
$mobile = $_POST["mobile"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$address = $_POST["address"];
$image = $_FILES["file"];
$std = $_POST["std"];
// $stdgrp = "select standard from `voter` where standard = 'group'";
if($password != $cpassword){
               echo "<script>
                alert('Passwords do not match');
                window.location = 'signup.php'
                </script>";
        }
       else{
            print_r($image);
            echo "<br>";
            $imgFileName = $image["name"];
            print_r($imgFileName);
            echo "<br>"; 
            $imgTempName = $image["tmp_name"];
            print_r($imgTempName);
            echo "<br>"; 

            $filename_separate = explode('.',$imgFileName);
            print_r($filename_separate);
            echo "<br>"; 
            $fileExtension = strtolower(end($filename_separate));
            print_r($fileExtension);
            echo "<br>";
            $extension = ["jpeg","png","jpg"];

            $data = "select * from `voter` where name=$username and mobile=$mobile";
            if(in_array($fileExtension,$extension)){
                $upload_image = 'img/'.$imgFileName;
                move_uploaded_file($imgTempName,$upload_image);
                $data =  "insert into `voter` (name, mobile, password, address, image, standard)
                values('$username','$mobile','$password','$address','$upload_image','$std')";
                $result = mysqli_query($con,$data);
                if($result){
                   echo "
                        <div style='width:100px; height:100%;'>
                            <h2><b>CONGRATULATIONS!!</b></h2>
                            <h5>You Have Successfully Registered</h5> 
                        </div>";
                   }else{
                    echo "Data Not Inserted Successfully";
                //    die(mysqli_error($con));
                }  
            }else{
                echo "<script>
                        alert('Upload a jpeg, png or jpg file');
                        window.location = 'signup.php'
                      </script>";
            } 
        }
    
          // $folder = "img/".$image;
          // echo $folder;
          // move_uploaded_file($tmp_name,$folder);
        
        //Method to Prepare multiple inputs
        //  $sql = $con->prepare( "insert into `voter` (name, mobile, password, address) 
        //  values(?,?,?,?)");
        //     $sql -> bind_param("siss",$username,$mobile,$password,$address);        
        //     $sql -> execute();
        //     echo "New record created successfully";

        //  $lastId = mysqli_insert_id($con);
        // echo $lastId;
        //   print_r($image);
        //  $imgFileError = $image["error"];
        //  print_r($imgFileError)."<br>";
            

//  var_dump($username,$mobile,$password,$cpassword,$address);
    //   echo $password;
    //   echo $cpassword;
    // // $result = mysqli_query($con, $sql);
    // if($result){
    //     echo "Data Inserted Successfully";
    //     header("location: signup.php");
    // }else{
    //     die(mysqli_error($con));
    // }
    // if(isset($submit)){
    //     if($password != $cpassword){
    //         echo "<script>alert('Passwords Do Not Match<')</script>";
    //     }
    // }
// }

// move_uploaded_file($_FILES["image"]["tmp_name"], "image/".FILES["image"]["name"]);
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
     </head>
     <body>
         <h1> Hiii!, these are my details</h1>    
            <?php
                var_dump($username);
                var_dump ($address);
                var_dump ($mobile);
                var_dump ($password);   
                var_dump($image);
                ?> 
     </body>
     </html>