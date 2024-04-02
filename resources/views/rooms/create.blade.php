<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live chat - create room</title>
    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5; /* Kolor tła */
        }

        .header{
            padding:0;
            margin:0;
            height: 50px;
            width: 100%;
            background-color: #4e68d6;
            color: #fff;
            text-align: center;
            line-height: 50px;
        }

        .create-window {
            display: flex;
            justify-content: center;
            align-items: center; /* Wyśrodkowanie kontenera w pionie */
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            height: calc(50vh - 50px); /* Uwzględnienie wysokości nagłówka */
            padding-top: 20px; /* Dodatkowy odstęp od góry */
            padding-bottom: 20px;
        }

        .create-container {
            max-width: 400px;
            width: 80%;
            height: 100%;
            border-radius: 10px;
            padding-top: 10px; /* Dodatkowy odstęp od góry */
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            display: flex; /* Dodajemy flexbox */
            flex-direction: column; /* Ustawiamy układ w kolumnie */
            align-items: center; /* Wyśrodkowanie elementów w kontenerze w pionie */
        }

        .create-container input,
        .create-container button {
            width: 200px; /* Szerokość równa szerokości kontenera */
            padding: 10px;
            margin-bottom: 10px; /* Dodajemy odstęp między polem input a przyciskiem */
            background-color: #fff;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            border: none;
            outline: none;
        }
        form button {
            align-items: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }

        .create-container button {
            background-color:  #4e68d6;
            align-self: center;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        @media screen and (max-width: 600px) {
            .create-container {
                width: 90%; /* Zmniejszenie szerokości dla mniejszych ekranów */
            }
        }

    </style>
</head>
<body>
    <div class="header">
        CREATE LIVE CHAT ROOM
    </div>
    <div class="create-window">
        <div class="create-container">
            <form action="/rooms" method="POST">
                @csrf
                <input type="text" name="nickname" placeholder="Enter nickname...">
                <button type="submit">Create room</button>
            </form>
        </div>
    </div>
</body>
</html>
