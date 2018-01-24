<?php

   require_once './controls/Connection.php';
   require_once './controls/DataAccess.php';   
   require_once './controls/DataTable.php';
   require_once './controls/Login.php';   
   require_once './datatable_demo.php';
   
?>

<!DOCTYPE html>

<html>
   <head>
      <meta charset="UTF-8">
      <title></title>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

      <style type="text/css">

	 .center_percent {
	    position: absolute;
	    left: 50%;
	    top: 50%;
	    transform: translate(-50%, -50%);
	    -webkit-transform: translate(-50%, -50%);
	 }

	 body{
	    background: url(userinterface/imgs/pw_maze__white.png) repeat 0 0;
	 }	 

      </style>
   
   </head>
   <body>
      
      <!--Crear una tabla basada en una tabla mysql.--> 
      <?php
//	 $datatable = new datatable_demo();
//	 echo $datatable->CreateTableHTML(); 
      ?>
      
      <?php
	 $Login = new Login();
	 $Login->SetSendByAjax(true);
	 $Login->SetSendActionFile('post.php');
	 echo $Login->Login();
      ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <!-- Compiled and minified JavaScript -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
   
   <script type="text/javascript">
      <?php echo $Login->FunctionAjax(); ?>
   </script>
   
   
   </body>
</html>
