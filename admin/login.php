
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/css/sigin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="acesso.php" method="post">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Área Restrita</h1>
      <label for="inputUsuario" name="usuario" class="sr-only">Email address</label>
      <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
  </body>
</html>
