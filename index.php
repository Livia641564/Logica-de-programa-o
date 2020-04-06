<html>
    <head>
        <title> Formulário </title>
        <style type="text/css">
                body{background-color:#eeeeee}
                hl{font-weight:bold;}
                .bt{cursor:pointer;}
        </style>
    </head>
    <body>
        <hl>Matrícula</hl>
        <form action="script.php" method="post">
        Nome: <input type="nome" name="nome"><br>
        Data de nascimento: <input id="date" type="date"><br>
        Escolha do curso: <form action="select.php" method="post">
            <select name=processador>
            <option value=Manucire>Manicure</option>
            <option value=Informática>Informática</option>
            <option value=Mecanica>Mecanica</option>
        </select><BR><BR>
        <input type=submit class="bts" value="OK">
        </form>
</html>