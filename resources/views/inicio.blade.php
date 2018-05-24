<html>
<head>
    <title>
        Paginda de inicio
    </title>
</head>
<body>
<form method="POST" action="usuariospermitidos">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <input value="Usuario" name="usuario" id="usuario"><br>
    <input value="Enviar" name="Enviar" type="submit"/>
</form>
</body>
</html>