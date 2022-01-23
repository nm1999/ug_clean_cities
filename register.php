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

    <div class="container mt-5 h-100">
        <div class="card " style="background-color: #020138;">
            <div class="card-header text-white font-weight-bold">
                <h4>Register Form</h4> 
            </div>
            <div class="card-body" >
                <form action="index" method="POST">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-user fa-lg"></i></span>
                            </div>
                            <input type="text" name="surname" id="surname" class="form-control input_user py-2" placeholder="Enter Surname" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-user-circle-o"></i></span>
                            </div>
                            <input type="text" name="firstname" id="firstname" class="form-control input_user py-2" placeholder="Enter Firstname" required>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" id="email" class="form-control input_user py-2" placeholder="Email Address" required>
                        </div> 

                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-lock fa-lg"></i></span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control input_pass py-2" 
                                placeholder="Create Password" required>
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-lock fa-lg"></i></span>
                            </div>
                            <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control input_pass py-2" 
                                placeholder="Confirm Password" required>
                        </div>                   
                        
                        <button type="submit" name="register" class="btn btn-primary seebtn mt-2">Register User</button>
                    </form>
                
            </div>
        </div>
           
    </div>
   


 