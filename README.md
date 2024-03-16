# P2P Live Chat (WIP)
#### Student project with peer-to-peer live chat in Laravel.

### To Do:
* more complex plan
* basic project
* connect LiveWire
* chatting window
* connection with two clients without server
* design & UI
* tests

### Instruction
* wersja php <b>8.3.4</b>
* usuń ze swojego folderu głównego phpa (domyślnie `C:\php`) plik `php.ini`
* w nim, zrób kopię `php.ini-development` i zmień jej nazwę na `php.ini`
* otwierasz `php.ini`
* znajdujesz podane linijki i odkomentowywujesz (usuwasz z przodu `;`):
    - `extension=openssl`
    - `extension=zip`
    - `extension=curl`
    - `extension=fileinfo`
    - `extension=pdo_sqlite`
    - `extension=sqlite3`
* w cmd wpisz: `composer self-update`
* zainstaluj w Visual Studio Code rozszerzenie <b>SQLite</b> 
* w cmd wpisz `composer update`
* w cmd wpisz `composer install`
* w cmd wpisz `php artisan migrate`. Jeśli wyskoczy ci:
    - <b>`APPLICATION IN PRODUCTION`<b> i niżej `Are you sure you want to run this command? (yes/no)` wpisz `<b>yes</b>`
    - jeśli potem wyskoczy ci `Would you like to create it? (yes/no)` wpisz <b>`yes`</b>
* w głównym folderze `p2p-live-chat` zrób plik <b>`.env`</b> i wklej tekst z linka: <a href="www.pastebin.com/t29uBmDk">www.pastebin.com/t29uBmDk</a>. Hasło do linka jest takie samo jak do pdfów.
* po ogarnięciu poprzednich punktów, w cmd wejdź do folderu `p2p-live-chat` i wpisz: `php artisan serve`
* w przeglądarce wejdź w `localhost:8000` i zobacz czy ładuje się bazowy projekt Laravela.

