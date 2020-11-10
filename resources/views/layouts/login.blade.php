<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body class="text-center">
<div class="container">

    <div id="main" class="row">

        <form method="post" action="user" class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
            <label for="inputUsuario" class="sr-only">Usuário</label>
            <input type="usuario" id="inputUsuario" class="form-control" placeholder="Usuário" required="" autofocus="">
            <label for="inputSenha" class="sr-only">Senha</label>
            <input type="senha" id="inputSenha" class="form-control" placeholder="Senha" required="">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        </form>

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
