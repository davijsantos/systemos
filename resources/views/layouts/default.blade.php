<!doctype html>
<html lang="pt-br">
<head>
    @include('includes.head')
</head>
<body>

    <header class="row menu-top">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        <div class="container text-center">
            @yield('content')
        </div>
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
