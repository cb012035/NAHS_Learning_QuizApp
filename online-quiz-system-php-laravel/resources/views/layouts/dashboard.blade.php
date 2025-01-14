<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    @yield('title')

    <!-- Custom styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }

        .navbar {
            padding: 0.5rem 1rem;
        }

        .nav-link {
            color: #333 !important;
        }

        .nav-link:hover {
            color: #3498db !important;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .alert {
            margin-bottom: 15px;
        }

        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Online Quiz</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                @if(session('user_role')=='admin')
                    <li class="nav-item active">
                        <a class="nav-link" href="{{route('add.quiz')}}">Add Quiz</a>
                    </li>
                @endif
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('list.quiz')}}">Quiz List </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('results')}}">Results </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if(session('success'))
                <span class="alert alert-success">{{session('success')}}</span>
            @endif
            @if(session('msg'))
                <span class="alert alert-info">{{session('msg')}}</span>
            @endif
            @if(session('error'))
                <span class="alert alert-danger">{{session('error')}}</span>
            @endif
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="main-content">
                @yield('main')
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
-->
</body>
</html>