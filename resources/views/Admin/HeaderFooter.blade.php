<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AdminDashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="Admin/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="Admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="Admin/lib/tempusdominus/Admin/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="Admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Admin/css/style.css" rel="stylesheet">
 
</head>

<body >
    <div class="container-fluid position-relative d-flex p-0" >
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark" >
                <a href="/AdminDashboard" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class=" me-2"></i>AdminDashboard</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="Admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100" >
                    <a href="/dashboard" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle " data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Doctors</a>
                        <div class="dropdown-menu bg-transparent border-0">
                           
                            <a href="/doctors" class="dropdown-item">View Doctor Requests</a>
                            <a href="/approveddoctors" class="dropdown-item">View Approved Doctors</a>

                        </div>
                    </div>
                    <a href="/widget" class="nav-item nav-link"><i class="fa fa-th me-2"></i>CurrentDoctors</a>
                
                    <a href="/addcities" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Add Cities</a>
                     <a href="/cities" class="nav-item nav-link"><i class="fa fa-table me-2"></i> Cities</a>
                     <a href="/complainsec" class="nav-item nav-link"><i class="fa fa-table me-2"></i> Complaints</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Other</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/viewallappointments" class="dropdown-item">View All Appointments</a>
                            <a href="/" class="dropdown-item">Back To website</a>
                            
                           
                        </div>
                    </div>
                </div>
            </nav>
        </div>
 <!-- Content Start -->
        <div class="content" ">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
               
                <div class="navbar-nav align-items-center ms-auto">
                   
                    <div class="nav-item dropdown">
                        
                        
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="Admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{Auth::user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger w-100">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
        <!-- Sidebar End -->
         @yield('content')

           <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="Admin/lib/chart/chart.min.js"></script>
    <script src="Admin/lib/easing/easing.min.js"></script>
    <script src="Admin/lib/waypoints/waypoints.min.js"></script>
    <script src="Admin/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="Admin/lib/tempusdominus/Admin/js/moment.min.js"></script>
    <script src="Admin/lib/tempusdominus/Admin/js/moment-timezone.min.js"></script>
    <script src="Admin/lib/tempusdominus/Admin/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="Admin/js/main.js"></script>
</body>

</html>