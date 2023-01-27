## Mit Docker

1. Wechseln Sie in das Projektverzeichnis
2. Kopieren Sie Datei .env.docker nach .env
3. Installieren Sie die PHP-Dependencies mit docker-compose run app composer install
4. Installieren Sie die Datenbank mit docker-compose run app php artisan migrate
5. Starten Sie die Server mit docker-compose up app
6. Besuchen Sie die Seite im Browser unter http://localhost:8000
7. Bei Problemen löschen Sie den Browser- und Servercache (docker-compose run app php artisan cache:clear)

## Mit VS-Code Dev Containers

1. Öffnen Sie den Projekt-Ordner mit VS-Code
2. Kopieren Sie Datei .env.docker nach .env
3. Stellen Sie sicher, dass Sie die Extension «Dev Containers» und Docker installiert haben
4. Öffnen Sie das Projekt als Container (unten Links oder mit dem Command «Reopen in Container»)
5. Warten Sie, bis die Extensions im Container installiert sind
6. Starten Sie den Development-Server in einem Terminal in VS-Code mit php artisan serve --host 0.0.0.0
7. Besuchen Sie die Seite im Browser unter http://localhost:8000
8. Bei Problemen löschen Sie den Browser- und Servercache (php artisan cache:clear)

## Mit XAMPP

1. Wechseln Sie in das Projektverzeichnis
1. Legen Sie auf ihrem MySQL Server eine neue Datenbank "6_1_applikation_anpassen" an (mit "CREATE DATABASE 6_1_applikation_anpassen")
1. Legen Sie allenfalls einen neuen Benutzer an, der auf diese Datenbank zugreifen kan1.(z.B. mit "CREATE USER 'web'@'localhost')
1. Geben Sie dem neuen User Rechte auf der neuen Datenbank (z.B. mit "GRANT ALL O1.6_1_applikation_anpassen.\* TO 'web'@'localhost')")
1. Kopieren Sie die Datei ".env.example" nach ".env" und passen Sie die dari1.enthaltenen Angaben an Ihre Umgebung an (z.B. den User für die Datenbank in de1.Variable DB_USERNAME)
1. Führen Sie den Befehl "composer install" aus
1. Führen Sie den Befehl "php artisan key:generate" aus
1. Führen Sie den Befehl "php artisan migrate" aus
1. Führen Sie den Befehl "php artisan serve" aus
1. Öffnen Sie die Seite im Browser unter http://localhost:8000

Schauen Sie sich die Applikation im Browser und überprüfen Sie, ob alles funktioniert.
