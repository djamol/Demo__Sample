/*
Front-end Js File code

*/
const webSocketUrl = 'ws://example.com:8088';
const sessionId = 'pqrstuiv'; // Replace with the desired session ID

// Create a new WebSocket connection
const socket = new WebSocket(webSocketUrl);

// Event handler for when the WebSocket connection is established
socket.onopen = () => {
  console.log('WebSocket connection established');

  // Send an event to the specific session ID
  const event = {
    sessionId: sessionId,
    message: 'Your event data here',
  };
  socket.send(JSON.stringify(event));
};

// Event handler for receiving messages from the server
socket.onmessage = (event) => {
  const message = JSON.parse(event.data);
  console.log('Received message from server:', message);
};

// Event handler for when the WebSocket connection is closed
socket.onclose = () => {
  console.log('WebSocket connection closed');
};
