# 🕹️ Retro SQLi CTF

> *"Un reto clásico de inyección SQL con vibes retro para practicar hacking ético."*

Este CTF es una pequeña máquina vulnerable construida con Docker, ideal para practicar tus habilidades en **SQL Injection**, reconocimiento básico, y algo de enumeración de credenciales.

Diseñado para que tanto principiantes como entusiastas del hacking web puedan disfrutar y aprender en el proceso.

---

## 📦 Tecnologías utilizadas

- 🐳 Docker & Docker Compose
- 🐘 MySQL como base de datos
- 🌐 PHP + HTML para la aplicación vulnerable
- 🐧 Compatible con Linux, Windows y macOS

---

## 🚀 Cómo levantar el CTF

Asegúrate de tener **Docker y Docker Compose** instalados en tu sistema.

### ▶️ 1. Clona el repositorio

git clone https://github.com/hikarii1120/ctf-retro-sqli.git
cd ctf-retro-sqli

Levanta los contenedores

docker-compose up --build

Una vez esté todo en marcha, abre tu navegador en:

http://localhost:8080

👀 ¡Explora, analiza, rompe cosas! 

🧠 Objetivo del reto
Explotar una vulnerabilidad de inyección SQL clásica.

Acceder a datos sensibles o paneles ocultos.

Encontrar la flag oculta en algún rincón de la app.

🧨 Este reto está pensado para principiantes en pentesting web y SQLi, pero sigue siendo divertido para cualquier entusiasta del hacking ético.

Tips y pistas
❗ ¡No mires el código directamente si quieres jugarlo como reto real!

Revisa las peticiones GET y POST.

¿Hay formularios o inputs sin validación?

¿Qué pasa si pruebas: ' OR '1'='1?

Las bases de datos a veces dicen más de lo que aparentan..

 Formato de la flag

FLAG{ALGO_COMO_ESTO}

Notas técnicas
El servicio web se expone por defecto en el puerto 8080 (localhost:8080)

La base de datos se inicializa automáticamente con los datos definidos en init.sql

No hay autenticación MySQL real (por simplicidad del reto)

No se requiere conexión a internet para jugar el CTF

💡 ¿Y si quiero modificar el reto?
Puedes editar libremente los archivos dentro de web/ o db/init.sql para crear tus propias versiones del reto, agregar usuarios, desafíos adicionales, flags alternativas o funcionalidades nuevas.

📜 Licencia
Este reto es open-source y puede ser usado con fines educativos y no comerciales.
¡Distribúyelo, mejóralo o intégralo en tu propia plataforma de CTFs!
Sólo recuerda siempre actuar con ética 🕶️
