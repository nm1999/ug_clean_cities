<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="images/lukardventuresFavicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="fonts/font-awesome.min.css">
    <link rel="stylesheet" href="w3css.css">
    <link rel="stylesheet" href="style.css">
    <title>Admin Dashboard</title>
    
</head>
<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2" type="button" onclick="drop('myNavbar')" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar -->
                    <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
                        <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">CodeAndCreate</a>
                        <div class="bottom-border pb-3">
                            <img src="./images/100.jpg" width="50" class="rounded-circle mr-3">
                            <a href="#" class="text-white">Helen Smith</a>
                        </div>
                        <ul class="navbar-nav flex-column mt-4">
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 current"><i class="fa fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-user text-light fa-lg mr-3"></i>Profile</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-envelope text-light fa-lg mr-3"></i>Inbox</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-shopping-cart text-light fa-lg mr-3"></i>Sales</a></li>
                            <!-- <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-line-chart text-light fa-lg mr-3"></i>Analytics</a></li> -->
                            <!-- <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-bar-chart text-light fa-lg mr-3"></i>Charts</a></li> -->
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-table text-light fa-lg mr-3"></i>Tables</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>
                            <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-file-text text-light fa-lg mr-3"></i>Documentation</a></li>
                        </ul>

                    </div>
                    <!-- end of sidebar -->
                    <!-- top-nav -->
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                            </div>
                            <div class="col-md-5">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control search-input" placeholder="Search...">
                                        <button type="button" class="btn btn-white search-button"><i class="fa fa-search text-danger"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-3">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fa fa-comments text-muted fa-lg"></i></a></li>
                                    <li class="nav-item icon-parent"><a href="#" class="nav-link icon-bullet"><i class="fa fa-bell text-muted fa-lg"></i></a></li>
                                    <li class="nav-item ml-md-auto"><a class="nav-link btn" onclick="ope()" data-toggle="modal" data-target="#myModal" ><i class="fa fa-sign-out text-danger fa-lg"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end of top-nav -->
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- modal -->
  
    <div class="modal " id="sign-out" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Want to leave?</h4>
                    <button class="btn"  onclick="closebtn()" >&times;</button>
                </div>
                <div class="modal-body">
                    Press logout to leave
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="closebtn()" >Stay Here</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Logout</button>
                </div>
            </div>
        </div>
    </div>

    <!-- end of modal -->

    <!-- cards -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row pt-md-5 mt-md-3 mb-5">
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa fa-shopping-cart fa-3x text-warning"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Sales</h5>
                                            <h3>$135,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">                                  
                                    <i class="fa fa-refresh mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa fa-money fa-3x text-success"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Expenses</h5>
                                            <h3>$39,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">                                  
                                    <i class="fa fa-refresh mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa fa-users fa-3x text-info"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Users</h5>
                                            <h3>15,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">                                  
                                    <i class="fa fa-refresh mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 p-2">
                            <div class="card card-common">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fa fa-line-chart fa-3x text-danger"></i>
                                        <div class="text-right text-secondary">
                                            <h5>Visitors</h5>
                                            <h3>45,000</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-secondary">                                  
                                    <i class="fa fa-refresh mr-3"></i>
                                    <span>Updated Now</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of cards -->

    <!-- tables -->
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                            <h3 class="text-muted text-center mb-3">Staff Salary</h3>
                            <table class="table table-striped bg-light text-center">
                                <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Date</th>
                                        <th>Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>John</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Ann</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Mark</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Mary</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Bob</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- pagination -->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- end of pagination -->

                        </div>
                        <div class="col-xl-6 col-12">
                            <h3 class="text-muted text-center mb-3">Recent Payments</h3>
                            <table class="table table-dark table-hover text-center">
                                <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Monica</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Nick</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Alex</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Jane</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Michael</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Kate</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                </tbody>
                            </table>

                            <!-- pagination -->
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="#" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="#" class="page-link py-2 px-3">
                                            <span>Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- end of pagination -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of tables -->

    <!-- progress / task list -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row mb-4 align-items-center">
                        <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                            <div class="bg-dark text-white p-4 rounded">
                                <h4 class="mb-5">Conversion Rates</h4>
                                <h6 class="mb-3">Google Chrome</h6>
                                <div class="progress mb-4" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped font-weight-bold" style="width: 91%;">
                                        91%
                                    </div>
                                </div>
                                <h6 class="mb-3">Mozilla Firefox</h6>
                                <div class="progress mb-4" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-success" style="width: 82%;">
                                        82%
                                    </div>
                                </div>
                                <h6 class="mb-3">Safari</h6>
                                <div class="progress mb-4" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-danger" style="width: 67%;">
                                        67%
                                    </div>
                                </div>
                                <h6 class="mb-3">IE</h6>
                                <div class="progress mb-4" style="height: 20px;">
                                    <div class="progress-bar progress-bar-striped font-weight-bold bg-info" style="width: 10%;">
                                        10%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <h4 class="text-muted p-3 mb-3">Tasks:</h4>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit<h6>" data-html="true" data-placement="top"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete<h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit<h6>" data-html="true" data-placement="top"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete<h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit<h6>" data-html="true" data-placement="top"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete<h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit<h6>" data-html="true" data-placement="top"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete<h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger "></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid bg-white">
                                <div class="row py-3 mb-4 task-border align-items-center">
                                    <div class="col-1">
                                        <input type="checkbox" checked>
                                    </div>
                                    <div class="col-sm-9 col-8">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>edit<h6>" data-html="true" data-placement="top"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                    <div class="col-1">
                                        <a href="#" data-toggle="tooltip" title="<h6>delete<h6>" data-html="true" data-placement="top"><i class="fa fa-trash fa-lg text-danger "></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- progress / task list -->

    <!-- activities / Quick post -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row align-items-center mb-5">
                        <div class="col-xl-7">
                            <h4 class="text-muted mb-4">Recent Customer Activities</h4>
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseOne">
                                            <img src="./images/20.jpg" width="50" class="mr-3 rounded">
                                            John posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse show" id="collapseOne" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseTwo">
                                            <img src="./images/36.jpg" width="50" class="mr-3 rounded">
                                            Mark posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseThree">
                                            <img src="./images/52.jpg" width="50" class="mr-3 rounded">
                                            Monica posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseThree" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFour">
                                            <img src="./images/71.jpg" width="50" class="mr-3 rounded">
                                            Vivian posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseFour" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseFive">
                                            <img src="./images/D16.jpg" width="50" class="mr-3 rounded">
                                            Nick posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseFive" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <button class="btn btn-block bg-secondary text-light text-left" data-toggle="collapse" data-target="#collapseSix">
                                            <img src="./images/D10.jpg" width="50" class="mr-3 rounded">
                                            Ann posted a new comment
                                        </button>
                                    </div>
                                    <div class="collapse" id="collapseSix" data-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi ad fugit at quaerat quam tempora laudantium nulla facere culpa magni, neque ut impedit, iusto quis!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 mt-5">
                            <div class="card rounded">
                                <div class="card-body">
                                    <h5 class="text-muted text-center mb-4">Quick Status Post</h5>
                                    <ul class="list-inline text-center py-3">
                                        <li class="list-inline-item mr-4">
                                            <a href="#">
                                                <i class="fa fa-pencil text-success"></i>
                                                <span class="h6 text-muted">Status</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-4">
                                            <a href="#">
                                                <i class="fa fa-camera text-info"></i>
                                                <span class="h6 text-muted">Photo</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#">
                                                <i class="fa fa-map-marker text-primary"></i>
                                                <span class="h6 text-muted">Check-in</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control py-2 mb-3" placeholder="What's Your Status...">
                                            <button type="button" class="btn btn-block text-uppercase font-weight-bold text-light bg-info py-2 mb-5">Submit Post</button>
                                        </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="card bg-light">
                                                <i class="fa fa-calendar fa-5x text-warning d-block m-auto py-3"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center font-weight-bold text-uppercase">Mon, may 26</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="card bg-light">
                                                <i class="fa fa-clock-o fa-5x text-danger d-block m-auto py-3"></i>
                                                <div class="card-body">
                                                    <p class="card-text text-center font-weight-bold text-uppercase">3:50 am</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of activities / Quick post -->

    <!-- footer -->
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                    <div class="row border-top pt-3">
                        <div class="col-lg-6 text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-2">
                                    <a href="#" class="text-dark">CodeAndCreate</a>
                                </li>
                                <li class="list-inline-item mr-2">
                                    <a href="#" class="text-dark">About</a>
                                </li>
                                <li class="list-inline-item mr-2">
                                    <a href="#" class="text-dark">Support</a>
                                </li>
                                <li class="list-inline-item mr-2">
                                    <a href="#" class="text-dark">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-center">
                            <p>&copy; 2018 Copyright. Made With <i class="fa fa-heart text-danger"></i> by <span class="text-success">CodeAndCreate</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->
    <script>
        function ope(){
            document.getElementsByClassName("modal")[0].style.display = "block";
        }
        function closebtn(){
            document.getElementsByClassName("modal")[0].style.display = "none";    
        }
        function drop(id) {
         var x = document.getElementById(id);
         if (x.className.indexOf("w3-show") == -1) {
             x.className += " w3-show";
         } else {
             x.className = x.className.replace(" w3-show", "");
         }
         }
     </script>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>
</html>