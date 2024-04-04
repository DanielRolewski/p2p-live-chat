<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Chat - Chat Number: {{ $id }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset('css/show-chat.css') }}>
</head>
<body>
<nav>
    <svg class="logo" width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g filter="url(#filter0_ii_28_78)">
            <circle cx="28" cy="28" r="25" transform="rotate(-180 28 28)" fill="#FCB2A5"/>
        </g>
        <circle cx="28" cy="28" r="26.5" transform="rotate(-180 28 28)" stroke="#222944" stroke-width="3"/>
        <defs>
            <filter id="filter0_ii_28_78" x="-3" y="-10" width="59" height="69" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="-13"/>
                <feGaussianBlur stdDeviation="5"/>
                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.866667 0 0 0 0 0.576471 0 0 0 0 0.643137 0 0 0 1 0"/>
                <feBlend mode="normal" in2="shape" result="effect1_innerShadow_28_78"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feMorphology radius="7" operator="dilate" in="SourceAlpha" result="effect2_innerShadow_28_78"/>
                <feOffset dx="-4" dy="15"/>
                <feGaussianBlur stdDeviation="5"/>
                <feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0.992157 0 0 0 0 0.996078 0 0 0 0 1 0 0 0 1 0"/>
                <feBlend mode="normal" in2="effect1_innerShadow_28_78" result="effect2_innerShadow_28_78"/>
            </filter>
        </defs>
    </svg>
</nav>
    <main>
        <div class="window">
            <div class="form-container">
                <div class="banner">
                    <span>live chat</span>
                    <hr>
                </div>
                <div class="messages" id="messages">
                    <div class="you message"><span class="nickname">you: </span><p>test test test</p></div>
                    <div class="someone message"><span class="nickname">{{ $nickname }}: </span><p>super test super test</p></div>
                </div>
                <div class="buttons-container">
                    <input type="text" id="message-input" name="message" placeholder="send message.." maxlength="35">
                    <button onclick="sendMessage()">submit</button>
                </div>
            </div>
        </div>
    </main>

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
