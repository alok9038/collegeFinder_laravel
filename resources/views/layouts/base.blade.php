<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discover Colleges, Courses & Exams for Higher Education in India</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="header bg-dark" style="height:85vh; background-image:url({{ asset('images/bg.svg') }}); background-size:cover; background-position:bottom;">
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
            <div class="container">
                <a href="" class="navbar-brand">Vidyalaya</a>
                <form action="" class="form-inline mx-auto">
                    <div class="input-group">
                        <input type="search" size="80" class="form-control rounded-0 shadow-sm">
                        <div class="input-group-append">
                            <input type="submit" value="search" class="btn rounded-0 btn-light shadow-none">
                        </div>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="" class="nav-link">Ask</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="" class="nav-link">Sign Up</a></li>
                </ul>
            </div>
        </nav>
        <div class="search-card " style="margin-top:calc(80vh - 340px);">
            <div class="col-lg-7 p-3 mx-auto" style="border-radius: 20px; background-color:rgba(0, 0, 0, 0.352); backdrop-filter:blur(10px);">
                <div class="card bg-transparent border-0 text-white text-center">
                    <div class="card-body">
                        <h5 class="fw-light h4">Find Colleges, Courses & Exams that are Best for You</h5>
                        <p class="small">49,000+ Colleges2,95,000+ Courses2,10,000+ Reviews700+ Exams</p>
                        <form action="" class="form-inline">
                            <div class="input-group">
                                <input type="search" name="search" id="" class="form-control rounded-0 shadow-none">
                                <div class="input-group-append">
                                    <input type="submit" value="search" class="btn btn-warning rounded-0">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>