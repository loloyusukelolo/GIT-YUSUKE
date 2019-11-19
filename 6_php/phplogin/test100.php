<?php 
include 'test200.php';


var_dump($CONNECTION);


if (isset($_POST["add1_name"]) &&
    isset($_POST["add2_company"]) &&
    isset($_POST["add3_phone"]) &&
    isset($_POST["add4_email"]) )

    {
    $name = $_POST['add1_name'];
    $company = $_POST['add2_company'];
    $phone = $_POST['add3_phone'];
    $email = $_POST['add4_email'];
  

  
 

   $sql ="
   INSERT INTO
    `cotactSystemSpecs`
    (`id`,`company`,`phone`,`email`) 
    VALUES 
    (NULL,'$name','$company','$phone','$email');";

$insert_result = mysqli_query($CONNECTION, $sql);
var_dump($insert_result);
var_dump(mysqli_error($CONNECTION));


var_dump($sql);
} 
 ?>














<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
       

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
        

        <style type="text/css">
            .form-signin input {
                border-radius: 2px !important;
                margin-bottom: 10px !important;
            }
        </style>
    </head>
    <body class="text-center">
        <form class="form-addContact" method="GET">
            
            
            
         
            <input type="text" name ="add1_name" class="form-control" placeholder="add_name" >

            <input type="text" name ="add2_company" class="form-control" placeholder="add_company" >

            <input type="text" name ="add3_phone" class="form-control" placeholder="add_phone" >

            <input type="password" name ="add4_email" class="form-control" placeholder="add_email" >
            

             <div class="checkbox mb-3">
                <label>
                    
                </label>
            </div>


            <!-- login ;button -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">add_information</button>

</br>

</br>
</br>
</br>
</br>
</br>
          <form class="form-signin" method="POST">
            
            
            
         
            <input type="text" name ="name" class="form-control" placeholder="name" >
            <input type="text" name ="company" class="form-control" placeholder="company" >
            <input type="text" name ="phone" class="form-control" placeholder="phone" >
            <input type="password" name ="email" class="form-control" placeholder="email" >


             <div class="checkbox mb-3">
                <label>
                    
                </label>
            </div>

            <!-- login ;button -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">login</button>
    </body>
</html>

