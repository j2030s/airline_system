<!-- layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="d-flex flex-column h-100">
    
        <!-- Sidebar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ms-auto fixed-top ">
                <div class="container">
                    <a class="navbar-brand" href="#">PUC AIRLINES</a>

                    <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav"
                    >
                    <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto p-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Log in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Registration">Registration</a>
                            </li>
                            <!-- Add more menu items as needed -->
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        

        
            <!-- Main Content -->
    <main class="flex-grow-1 d-flex">
         <!-- Sidebar -->
        <nav id="sidebar"  class="bg-dark text-light position-fixed " style="height: 100%;width:180px; margin-top: 72px;">
        <!-- Sidebar content goes here -->
            <ul class="nav  flex-column  "  >
                <br><br><br>
               @yield('side-items')
            </ul>
        </nav>


        <!-- Your main content goes here -->
        <div class="container-fluid " style="margin-top: 56px;">>
            <div class="row">
                <!-- Content area, adjust the classes based on your design -->
                <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </main>
        


   
          <div class="container mb-5">
            <br><br><br>
            </div> 
    <!-- Footer -->
    <footer class="footer bg-dark navbar-dark mt-5 position-relative">
        <div class="container-fluid col-md-9 text-light">
            <div class="row">
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <p>Email: info@yourairlinesystem.com</p>
                    <p>Phone: +1 (555) 123-4567</p>
                </div>
                <div class="col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Where We Fly</a></li>
                        <li><a href="#">User Experience</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Connect with Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" target="_blank">Facebook</a></li>
                        <li><a href="#" target="_blank">Twitter</a></li>
                        <li><a href="#" target="_blank">Instagram</a></li>
                    </ul>
                </div>
           
    </footer>
    
</body>
</html>
