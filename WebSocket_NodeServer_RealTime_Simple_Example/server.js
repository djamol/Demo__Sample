/*
Run 
npm install ws uuid
node server.js 
run in pm2 service
then 
npm install -g pm2
pm2 start server.js -n "Backend-Nodejs"
pm2 status -status of service
*/
const WebSocket = require('ws');
const { v4: uuidv4 } = require('uuid');

// Create a WebSocket server
const wss = new WebSocket.Server({ port: 8088 });

// Data structure to store session IDs and WebSocket connections
const sessions = new Map();

// Event handler for new WebSocket connections
wss.on('connection', (ws) => {
console.log("connected");
  // Generate a unique session ID for the client
  const sessionId = uuidv4();

  // Store the session ID and WebSocket connection
  sessions.set(sessionId, ws);

  // Send the session ID to the client
  ws.send(JSON.stringify({ sessionId }));

  // Event handler for receiving messages from the client
  ws.on('message', (message) => {
    // Handle incoming messages from the client
    console.log(`Received message from client with session ID ${sessionId}: ${message}`);
  });

  // Event handler for closing the WebSocket connection
  ws.on('close', () => {
    // Remove the session ID and WebSocket connection from the data structure
    sessions.delete(sessionId);
  });
});

// Function to send an event to a specific session ID
function sendEventToSession(sessionId, event) {
  const ws = sessions.get(sessionId);
  if (ws) {
    ws.send(JSON.stringify(event));
  }
}

// Example usage: send an event to a specific session ID
const sessionId = 'your_session_id'; // Replace with the desired session ID
const event = { type: 'your_event_type', data: 'your_event_data' };
sendEventToSession(sessionId, event);
