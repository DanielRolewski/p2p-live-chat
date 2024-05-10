# P2P Live Chat (WIP)
#### Student project with peer-to-peer live chat in Laravel.

### To Do
- [X] implement rooms with chat
- [X] redirect `/` to `/chats/{id}` and generate random `id` parameter
- [X] sharing chats via link
- [X] implement adding new messages on chat
- [X] implement real-time showing messages on chat
- [X] add nicknames for users
- [X] UI design for chat

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
    - <b>`APPLICATION IN PRODUCTION`<b> i niżej `Are you sure you want to run this command? (yes/no)` wpisz <b>`yes`</b>
    - jeśli potem wyskoczy ci `Would you like to create it? (yes/no)` wpisz <b>`yes`</b>
* w głównym folderze `p2p-live-chat` zrób plik <b>`.env`</b> i wklej tekst z linka: <a href="www.pastebin.com/t29uBmDk">www.pastebin.com/t29uBmDk </a>. Hasło do linka jest takie samo jak do pdfów.
* po ogarnięciu poprzednich punktów, w cmd wejdź do folderu `p2p-live-chat` i wpisz: `php artisan serve`
* w kolejnym oknie terminala wpisz komendę: `php artisan reverb:start`
* w kolejnym oknie terminala wpisz komendę: `npm run dev`
* w przeglądarce wejdź w `localhost:8000` i zobacz czy ładuje się bazowy projekt Laravela.

