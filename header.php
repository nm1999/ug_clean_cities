    
    <head>
    <title>UG Clean Cities</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="styled.css">
    <link rel="stylesheet" href="w3css.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script src="jquery.min.js"></script>

        <style>
            .nav-2{
                display: none;
            }
            .logoCW{
                display: none;
            }
            .nav-links {
            display: flex;
            justify-content: space-around;
            width: 30%;
            }

            .nav-links li {
            list-style: none;
            }

            .nav-links a {
            color: rgb(226, 226, 226);
            text-decoration: none;
            letter-spacing: 3px;
            font-weight: bold;
            font-size: 14px;
            }

            .navr{
                display:none;
                }

            @media screen and (max-width: 768px) {
                body {
                    overflow-x: hidden;
                }
                .nav-2{
                    display: flex;
                }
                .logoCW{
                    display: block;
                }
                .nav-links {
                    position: absolute;
                    right: 0px;
                    height: 98vh;
                    top: 12vh;
                    padding: 10px;
                    background-color: #051e58;
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    width: 250px;
                    transform: translateX(100%);
                    transition: transform 0.5s ease-in;
                }
                .nav-links li {
                    opacity: 0;
                }
                .burger {
                    display: block;
                }
                .navr{
                display:block;
                }
            }

            .nav-active {
            transform: translateX(0%);
            }

            @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0px);
            }
            }

            .toggle .line1 {
            transform: rotate(-45deg) translate(-5px, 6px);
            }

            .toggle .line2 {
            opacity: 0;
            }

            .toggle .line3 {
            transform: rotate(45deg) translate(-5px, -6px);
            }

        </style>
    </head>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand logoCW" href="/feed">
            <!-- <img src="../images/white2.jpg" alt="logo" -->
                <!-- style=" height: 80px; width: 100px; background-color: rgb(255, 255, 254);"> -->
        </a>
        
        <div class="">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar -->                    
                    <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top" style="background-color:#006400">                        
                        <div class="bottom-border pb-3 d-flex align-items-center">                                                       
                            <img class="rounded-circle mr-3 imgPreview" src="images/logo.PNG" style="width:100px;height:100px;margin-left:30px; background-color: rgb(156, 156, 156);">    
                        </div>                       
                        <ul class="navbar-nav flex-column mt-4 ">
                            <li class="nav-item"><a href="#" class="sell nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-home text-light fa-lg mr-3"></i>Sell plastics</a></li>
                            <li class="nav-item"><a href="#" class="customer nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-user text-light fa-lg mr-3"></i>Customer requests</a></li>
                            <li class="nav-item"><a href="#" class="invest nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-edit text-light fa-lg mr-3"></i>innovations</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-comments text-light fa-lg mr-3"></i>collection targets</a></li>
                            <li class="nav-item"><a href="#" class="progressbar nav-link text-white p-3 mb-2 sidebar-link "><i class="fa fa-users text-light fa-lg mr-3"></i>Progress</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-bullhorn text-light fa-lg mr-3"></i>Settings</a></li>
                            <li class="nav-item"><a href="index" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-grav text-light fa-lg mr-3"></i>Logout</a></li>
                            <!-- <li class="nav-item"><a href="/page-under-devt" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-wrench text-light fa-lg mr-3"></i>Settings</a></li> -->
                        </ul>

                    </div>                    
                    <!-- end of sidebar -->
                    <!-- top-nav -->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto fixed-top py-2 top-navbar" style="background-color:#0000FF">
                        <div class="row align-items-center">
                           <h3 class="ml-5" style="text-shadow:2px 3px white">Uganda Clean cities</h3>
                        </div>
                    </div>
                    <!-- end of top-nav -->
                </div>
           
        </div>
    </nav>
        <div class="navr d-flex navbar" style="background-color:#0000FF">
            <div class="">
                <h3 style="color:white">Uganda clean cities</h3>
            </div>
            <div class="">
                <button class="btn dropdown-toggle ml-auto mb-2 logoCW" type="button" data-toggle="dropdown" onclick="navSlide()"> ☰</button>
            </div>
        </div>
    <!-- end of navbar -->

    <div class="nav-2" >
        <ul class="nav-links" style="z-index: 1000;background-color:#006400">
            <div style="justify-content: left;">
            <li class="nav-item"><a href="#" class="sell nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-home text-light fa-lg mr-3"></i>Sell plastics</a></li>
                <li class="nav-item"><a href="#" class="customer nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-user text-light fa-lg mr-3"></i>Customer requests</a></li>
                <li class="nav-item"><a href="#" class="invest nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-edit text-light fa-lg mr-3"></i>innovations</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-comments text-light fa-lg mr-3"></i>collection targets</a></li>
                <li class="nav-item"><a href="#" class="progressbar nav-link text-white p-3 mb-2 sidebar-link "><i class="fa fa-users text-light fa-lg mr-3"></i>Progress</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-bullhorn text-light fa-lg mr-3"></i>Settings</a></li>
                <li class="nav-item"><a href="https://ugcleancities.herokuapp.com" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-grav text-light fa-lg mr-3"></i>Logout</a></li>

            </div>
        </ul>
    </div>
    </div>
            <div class="row mt-5">  
                <div class="col-sm-3"></div>              
                <div class="col-sm-9 router">
                                                              
                </div>
            </div>
    <script>
            const nav = document.querySelector('.nav-links');
            const navLinks = document.querySelectorAll('.nav-links li');

            
            function navSlide() {
                // Toggle Nav
                nav.classList.toggle('nav-active');

                //Animate Links
                navLinks.forEach((link, index) => {
                    if(link.style.animation){
                        link.style.animation = '';
                    } else{
                        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
                    }
                });
            }

            $(document).ready(function(){
                $(".invest").click(function(){
                    $(".router").load("investiment.php")
                })
                $(".router").load("sell.php");
                $(".sell").click(function(){
                    $(".router").load("sell.php")
                })
                $(".progressbar").click(function(){
                    $(".router").load("progress.php")
                })

                $(".customer").click(function(){
                    $(".router").load("partnership.php")
                })
            })
    </script>

 

   

    