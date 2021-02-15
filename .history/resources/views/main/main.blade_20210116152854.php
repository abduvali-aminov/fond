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
            #section {
                background-image: url("logo/photo_3.jpg");
                background-repeat: no-repeat !important;
                background-size: 100% 100%;
                height: 400px;
            }
        </style>
</head>

<body>

    <!-- Creating a navigation bar using the
            .navbar class of bootstrap -->
    <nav class="navbar navbar-expand-sm  " id="navbar">
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
                <a class="nav-link" href="{{ route('apply-create') }}" href="#">
                    Create
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>
    @yield('content')



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script></body>

</html>
