<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>Restaurante</title>

	<link href="<?php echo base_url('assets/css/bootstrap.min');?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/signin');?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min');?>"></script>
	<script src="<?php echo base_url('assets/js/popper.min');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min');?>"></script>
    
</head>
<body class="text-center">
	 <form class="form-signin">
      <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputUser" class="sr-only">Usuário ou E-mail</label>
      <input type="user" id="inputUser" class="form-control" placeholder="Usário / E-mail" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="lembrar"> Lembrar-me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Logar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-20xx</p>
    </form>
</body>
</html>