<p align="center"></p>

<p align="center">
</p>

## Über Calculator

## Voraussetzungen
Folgende Programme müssen installiert sein:
 * Apache Webserver
 * MySql Datenbank
 * PHP 7.2
 * git
 * composer
 
## Instalation
 * Erstellen Sie eine Datenbank in MySql. Z.B. calculator. 
   Geben Sie der Datenbank die entsprechenden Rechte für lesen, schreiben und löschen.
 
 * Wechsel Sie das DocumentRoot Verzeichnis des Webservers.
   Mit 
   git clone https://github.com/reinhardp/calculator.git
   wird im DocumentRoot Verzeichnis das Verzeichnis calculator erstellt und das Repro installiert.
 
 * Wechseln Sie in das Verzeichnis <DocumentRoot>/calculator.
   Benennen Sie die Datei .env.example in .env um.
   Füllen Sie folgende Einträge entsprechend Ihren Einstellungen aus:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=calculator
   DB_USERNAME=root
   DB_PASSWORD=
   
   Nun führen Sie in diesem Verzeichnis das Komando "composer install" (ohne Hochkomma) aus.
   (Dieses Komando installiert das vendor Verzeichnis.)
   
   Danach müssen Sie folgende Komandos ausführen:
   php artisan key:generate
   php artisan migrate
   
   php artisan key:generate:   erzeugt einen eindeutigen Key für APP_KEY in .env
   php artisan migrate:        erzeugt die Tabelle für die History und andere, die aber in dieser App nicht gebraucht werden. 
   

## Aufruf der App

Mit http(s)://localhost/calculator/ rufen Sie die App auf.

