<?php if (isset($_SESSION[ 'user'])){ redirect( 'usuario'); } ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>Pantilla/css/home.css">

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
<style type="text/css">
</style>

<body>





    <div>
        <h1>Bienvenido!</h1>

        <p>Pagina principal de administrador</p>




        <ul class="list-inline intro-social-buttons">
            <li>

                <a href="<?php echo site_url('Cliente/CrearClientemostra'); ?>" class="btn btn-default btn-lg">



                    
                </i> <span class="network-name">Crear Cliente</span>
            </a>
        </li>
        <li>

            <a href="<?php echo site_url('Cliente/ModificarClientemostra'); ?>"class="btn btn-default btn-lg">
            </i> <span class="network-name">Modificar Cliente</span>
        </a>
    </li>
    <li>

        <a href="<?php echo site_url('Cliente/EliminarClientemostra'); ?>" class="btn btn-default btn-lg">
        </i> <span class="network-name">Eliminar Cliente</span>
    </a>
</li>


<li>

    <a href="<?php echo site_url('Cliente/mostrar'); ?>" class="btn btn-default btn-lg">
    </i> <span class="network-name"> mostar</span>
</a>
</li>
</ul>


<br>




<br>

<ul class="list-inline intro-social-buttons">



    <li>

        <a href="<?php echo site_url('Contacto/CrearContatctosmostra'); ?>" class="btn btn-default btn-lg">
        </i> <span class="network-name">Crear Contatos</span>
    </a>
</li>
<li>

    <a href="<?php echo site_url('Contacto/ModificarClientemostra'); ?>" class="btn btn-default btn-lg">
    </i> <span class="network-name">Modificar Contatos</span>
</a>
</li>
<li>

    <a href="<?php echo site_url('Contacto/EliminarContatctosmostra'); ?>" class="btn btn-default btn-lg">
    </i> <span class="network-name">Eliminar contactos</span>
</a>
</li>


<li>

    <a href="<?php echo site_url('Contacto/mostrar'); ?>" class="btn btn-default btn-lg">
    </i> <span class="network-name">mostrar contactos</span>
</a>
</li>
</ul>




<br>
<br>
<ul class="list-inline intro-social-buttons">



    <li>

        <a href="<?php echo site_url('Reunion/Crearreunionesmostra'); ?>" class="btn btn-default btn-lg">
        </i> <span class="network-name">Crear Reunion</span>
    </a>
</li>
<li>

    <a href="<?php echo site_url('Reunion/Modificarreunionesmostra'); ?>"class="btn btn-default btn-lg">
    </i> <span class="network-name">Modificar Reunion</span>
</a>
</li>

<li>

    <a href="<?php echo site_url('Reunion/Eliminarreunionesmostra'); ?>"class="btn btn-default btn-lg">
    </i> <span class="network-name">Eliminar Reunion</span>
</a>
</li>

<li>

    <a href="<?php echo site_url('Reunion/mostrar'); ?>"class="btn btn-default btn-lg">
    </i> <span class="network-name">Mostar Reunion</span>
</a>
</li>

</ul>



<br>
<br>


<ul class="list-inline intro-social-buttons">



    <li>

        <a href="<?php echo site_url('tickets/Creartiketsmostra'); ?>" class="btn btn-default btn-lg">
        </i> <span class="network-name">Crear tickets</span>
    </a>
</li>
<li>

    <a href="<?php echo site_url('tickets/Modificartiketsmostra'); ?>"class="btn btn-default btn-lg">
    </i> <span class="network-name">Modificar tickets</span>
</a>
</li>

<li>

    <a href="<?php echo site_url('tickets/Eliminarticketsmostra'); ?>"class="btn btn-default btn-lg">
    </i> <span class="network-name">Eliminar tickets</span>
</a>
</li>

<li>

    <a href="<?php echo site_url('tickets/mostrar'); ?>"class="btn btn-default btn-lg">
    </i> <span class="network-name">Mostar tickets</span>
</a>
</li>

</ul>





</body>

</html>