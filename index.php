<?php
 
 $err = '';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password  = $_POST['password'];

    if($email == 'ugcleancities@gmail.com' and $password =='Cleanugcities123'){
        header('location:header.php');
    }else{
        $err = "invalid password or email address";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UG Clean Cities</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="w3css.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script src="jquery.min.js"></script>
</head>
<style>
    .fa{
        font-size:20px;
        position: absolute;
        background-color:blue;
        width:35px;
        margin-top:1px;
        border-radius:2px
    }
    .fa-lock{
        font-size:23px;
        padding:6px;
    }
    .fa-envelope{
        padding:7px;
    }
    input[type='password'],input[type='email']{
        padding-left:40px;
    }
    .profile_pic{
        background-image: url('images/person.png');
        background-size:100% 100%;
    }
</style>
<body class="w3-light-grey">
    <div class="w3-card-2 w3-white w3-round-large mt-5" style="margin:auto;width:410px;">
        <div class="img-thumbnail profile_pic  w3-center" style="border-radius:100%;width:100px;height:100px;margin:auto;">
            
        </div>
        <form action="#" method="post">
            <div class="w3-center" style="color:red"><?php echo $err?></div>
            <div class="" style="width:75%;margin:auto;">
                <div class="mt-5">                    
                    <div class="form-group w3-50">
                        <i class="fa fa-envelope"></i>
                        <input type="email" class="form-control" name="email" placeholder="email address">
                    </div>
                </div>
                <div class="mt-5">                   
                    <div class="form-group">
                        <i class="fa fa-lock"></i>
                        <input type="password" name="password" class="form-control w3-50" placeholder="Password">
                    </div>
                </div>
                <div class="form-group w3-center">
                    <input type="submit" name="submit" class=" w3-btn w3-round w3-blue w-50" value="login">
                </div>
                <i style="font-size:12px;" class="w3-center"><a href="">Forgot password ?</a></i>
            </div>
            <div class="w3-center" style="padding:30px">
                <a href="">Register</a>
            </div>
        </form>
    </div>
</body>
</html>