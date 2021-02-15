<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href=
    "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            #navbar {
                /*margin-top: 20px;*/
                -webkit-text-fill-color: white;
                background-color: #32a573;
                /*position:fixed;*/
                /*top:0;*/
            }
        </style>
</head>

<body>

    <!-- Creating a navigation bar using the
            .navbar class of bootstrap -->
    <nav class="navbar navbar-expand-sm  " id="navbar">
        <div class="col-lg-2 ">
            <img style="background: white" bs alt="no logo" class="img-fluid ">
        </div>
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="#">
                    About
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Contacts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Settings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    All-The-Applies
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('apply-create') }}">
                    Create
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>
    @yield('content')



    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>
