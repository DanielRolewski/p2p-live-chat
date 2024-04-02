<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messenger-like Chat App</title>
    <style>
        /* CSS Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5; /* Kolor tła */
        }

        .header {
            height: 50px;
            width: 100%;
            background-color: #4e68d6;
            color: #fff;
            text-align: center;
            line-height: 50px;
        }

        .chat-container {
            display: flex;
            justify-content: end;
            align-items: end;
            height: calc(100vh - 50px); /* Uwzględnienie wysokości nagłówka */
            padding-top: 20px; /* Dodatkowy odstęp od góry */
        }

        .chat-window {
            width: 80%;
            height:90%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .messages {
            max-height: 70vh; /* Maksymalna wysokość obszaru wiadomości */
            margin-left: 20px;
            margin-right: 20px;
            margin-top: 40px;

            border-radius: 20px;
            overflow-y: auto;
            padding: 10px;
            background-color: #fff; /* Kolor tła obszaru wiadomości */
            margin-bottom: 20px;
        }

        .message-container {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .avatar {
            width: 30px; /* Rozmiar awatara */
            height: 30px; /* Rozmiar awatara */
            border-radius: 50%;
            background-color: #000;
            margin-right: 10px;
            flex-shrink: 0; /* Zapobieganie zmnianie rozmiaru awatara */
        }

        .message-bubble {
            max-width: 70%;
            border-radius: 20px;
            padding: 10px;
            word-wrap: break-word;
            position: relative;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); /* Cień dla dymka */
        }

        .message.sent .message-bubble {
            background-color: #0000ff; /* Kolor tła dymka dla wiadomości wysłanych przez użytkownika */
            color: #fff;
            align-self: flex-end;
            text-align: left; /* Wiadomości wysłane wyświetlane po lewej stronie */
        }

        .message.received .message-bubble {
            background-color: #7d93a6; /* Kolor tła dymka dla wiadomości otrzymanych przez użytkownika */
            color: #000;
            align-self: flex-start; /* Wiadomości otrzymane wyświetlane po lewej stronie */
        }

        .input-box {
            display: flex;
            padding: 10px;
            margin-left: 20px;
            margin-right: 20px;
            background-color: #fff;
            border-radius: 20px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1); /* Cień dla pola wejściowego */
        }

        .input-box input {
            flex: 1;
            padding: 10px;
            border-radius: 20px;
            border: none;
            margin-right: 10px;
            outline: none;
        }

        .input-box button {
            padding: 10px 20px;
            background-color: #4e68d6;
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .input-box button:hover {
            background-color: #4054b2;
        }
    </style>
</head>
<body>
    <div class="header">LIVE CHAT</div>
    <div class="chat-container">
        <div class="chat-window">
            <div class="messages" id="messages">
                <!-- Tutaj będą wyświetlane wiadomości -->
            </div>
            <div class="input-box">
                <input type="text" id="message-input" placeholder="Wpisz wiadomość...">
                <button onclick="sendMessage()">Wyślij</button>
            </div>
        </div>
    </div>

    <script>
        // JavaScript Code
        function sendMessage() {
            var messageInput = document.getElementById("message-input");
            var message = messageInput.value.trim();
            if (message !== "") {
                var messagesContainer = document.getElementById("messages");
                var newMessageContainer = document.createElement("div");
                newMessageContainer.className = "message-container sent";
                var newAvatar = document.createElement("div");
                newAvatar.className = "avatar";
                newMessageContainer.appendChild(newAvatar);
                var newMessageBubble = document.createElement("div");
                newMessageBubble.className = "message-bubble"; // Usunięcie klasy "sent"
                newMessageBubble.style.backgroundColor = "#0000ff"; // Dodanie koloru tła dla wiadomości wysłanych przez użytkownika
                newMessageBubble.style.color = "#fff"; // Zmiana koloru tekstu na biały
                var x = "{{ $nickname }}";
                    newMessageBubble.innerText = x +": "+message;
                newMessageContainer.appendChild(newMessageBubble);
                messagesContainer.appendChild(newMessageContainer);
                // Wysłanie wiadomości do drugiego użytkownika (symulacja)
                receiveMessage("Nickname ziomka", message); // Zmieniono nadawcę na "You"
                messageInput.value = "";
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
            }
        }

        function receiveMessage(sender, message) {
            var messagesContainer = document.getElementById("messages");
            var newMessageContainer = document.createElement("div");
            newMessageContainer.className = "message-container received"; // Tutaj zmieniamy klasę na "received"
            var newAvatar = document.createElement("div");
            newAvatar.className = "avatar";
            newMessageContainer.appendChild(newAvatar);
            var newMessageBubble = document.createElement("div");
            newMessageBubble.className = "message-bubble"; // Usunięcie klasy "received"
            newMessageBubble.style.backgroundColor = "#7d93a6"; // Dodanie koloru tła dla wiadomości otrzymanych przez użytkownika
            newMessageBubble.innerText = sender + ": " + message;
            newMessageContainer.appendChild(newMessageBubble);
            messagesContainer.appendChild(newMessageContainer);
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
        }
    </script>
</body>
</html>
