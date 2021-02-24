<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administració</title>
    <!-- CSS only -->
    <link href="./src/css/main.css" rel="stylesheet">
    </head>
    <body>
        <form id="adminForm" action="">
            <div class="tab">Registre Administració:
                <p>Correu eletrònic: <input type="email" id="CorreoAdmin" placeholder="something@inspedralbes.cat" oninput="this.className = ''" required></p>
                <p>Contrasenya: <input placeholder="Contrasenya" id="ContrasenyaAdmin" oninput="this.className = ''"></p>
                <input id="botonAdmin" type="submit" value="Accedeix"/>
            </div>
        </form>
        <script src="./src/js/main.js"></script>
    </body>
</html>
