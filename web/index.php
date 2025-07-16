<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>RETRO ARCADE CLUB</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="https://www.retrogames.cz/gfx/icon/arcade.png">
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body>
    <div id="particles-js"></div>

    <div class="main-container">
        <h1>🔒 RETRO ARCADE CLUB 🔒</h1>
        <p class="sub">Sólo miembros legendarios del ciberespacio acceden aquí...</p>

        <form class="login-box" method="POST" action="login.php">
            <input type="text" name="username" placeholder="👾 Usuario retro" required><br>
            <input type="password" name="password" placeholder="🔐 Clave secreta" required><br>
            <input type="submit" value="🚪 Ingresar al portal">
        </form>

        <div class="hint">💡 Pista: ¿y si el sistema fuera vulnerable...? 👨‍💻</div>
    </div>

    <!-- Scripts al final -->
    <script src="particles.js"></script>
    <script>
      particlesJS.load('particles-js', 'particles-config.json');
    </script>
</body>
</html>
