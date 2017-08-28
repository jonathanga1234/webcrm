<!DOCTYPE html>
<html>

<head>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CRM</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <link href="signin.css" rel="stylesheet">


    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>


</head>

<body>




    <div id="container">
        <h1>ModificarCliente</h1>
        <div id="body">
            <p> ModificarCliente </p>

        </div>
        <form class="form-inline" action="<?php echo site_url('Cliente/Modifcar'); ?>" method="post">


           id : <input name="id"  type="text" value="" required autofocus>  
          Nombre:  <input name="Nombre"  type="text" value="" > 
          cedula:   <input type="text" name="cedula" value=""> 
           pagina:  <input type="text" name="pagina" value="" > 
           dirrecion:  <input type="text" name="dirrecion" value="" > 
           telefono:  <input type="text" name="telefono" value="" > 
           sector:  <input type="text" name="sector" value="" > 


                <br>

              

                <br>

            <button type="submit" class="button button-block" />Modificar</button>
        </form>
    </div>
    </div>

</body>

</html>
