<html>
    <body>

    <hl>Matrícula</hl>
    <form action="script.php" method="post">
    Nome: <input type=text name=Nome><br>
    Data de nascimento: <input id="date" type="date"><br>
    Escolha do curso: <form action="select.php" method="post">
        <select name=processador>
        <option value=Manucire>Manicure</option>
        <option value=Informática>Informática</option>
        <option value=Mecanica>Mecanica</option>
        </select><BR><BR>
    <input type=submit value="OK">
</form>
