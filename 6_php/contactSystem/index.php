
<?php 
include 'db.php';



if (isset($_POST["name"]) &&
    isset($_POST["user_email"]) &&
    isset($_POST["user_password"])
) {
    $name = $_POST['name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $c_password = $_POST['confirm'];



    if ($password == $c_password) {
        $sql ="
        INSERT INTO
        `members`
        (`id`,`username`,`email`,`password`)
        VALUES
        (NULL,'$name','$email','$password');
        ";

        var_dump($sql);

    $insert_result = mysqli_query($CONNECTION, $sql);
    
    
}
}
 ?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="login-box">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="card-header">REGISTER</h1>
                    <div class="card-body">

                        <form class="form-horizontal" method="POST" action="index.php">

                            <div class="form-group">
                                <label for="name" class="cols-sm-2 control-label">Your Name</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                        <input type="text" class="form-control" name="user_email" id="email" placeholder="Enter your Email"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="cols-sm-2 control-label">Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="user_password" id="password" placeholder="Enter your Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                <div class="cols-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                        <input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
                            </div>
                            <div class="registration.php">
                                <a href="index.php">Login</a>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>