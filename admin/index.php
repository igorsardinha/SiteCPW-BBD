<!DOCTYPE html >
<meta charset="utf-8">
<head>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
<title>Compuway Login</title>
</head>
<body>
<center>
<img src="../imgs/logo-v.png" width="400" height="211">
</center>
<br>
<br>

<h3 class="form-signin-heading" style="text-align: center;">Somente pessoal autorizado, <br>por favor identifique-se!</h3>
<br>
<br>
<form action="restrito/logar.php" method="POST" class="form-signin">
<label for="inputEmail" class="sr-only">Nome de usuario</label>
<input type="text" name="usuario" size="30" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
<label for="inputPassword" class="sr-only">Senha</label>
<input type="password" name="senha" size="30" id="inputPassword" class="form-control" placeholder="Senha" required>
<button class="btn btn-lg btn-danger btn-block" type="submit">Acessar</button>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


</form>
<body>
</body>
</html>