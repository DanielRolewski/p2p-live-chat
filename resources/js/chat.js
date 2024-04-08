function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift().replaceAll('%20', ' ');
}

// Listen for new messages using Laravel Echo.
window.Echo.channel('chatroom')
    .listen('.message.sent', (callback) => {
        // Append the new message to the chatroom.
        const messages = document.getElementById('messages');
        const message = document.createElement('div');
        const paragraph = document.createElement('p');
        const span = document.createElement('span');
        const nickname = callback.message.slice(0, callback.message.indexOf(': ') + 2);

        message.classList.add("someone", "message");
        span.classList.add("nickname");

        paragraph.innerText = callback.message.slice(callback.message.indexOf(': ') + 2, callback.message.length);
        span.innerText = nickname;

        message.appendChild(span);
        message.appendChild(paragraph);
        messages.appendChild(message);
    });

// Function to send a new message.
window.sendMessage = function() {
    const messageInput = document.getElementById('message-input');
    const nickname = getCookie('nickname');
    let messageValue = messageInput.value;

    if (nickname !== undefined) messageValue = nickname + ': ' + messageInput.value;

    axios.post('/chat/send-message', { message: messageValue })
        .then(response => {
            messageInput.value = ''; // Clear the input field after sending.
        })
        .catch(error => console.error(error));
};
