<?php /*
changelog index.php
2024-06-10 12:00:00 +0200
- Erste Version der Mini Todo Liste
*/
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Mini PHP + JS Demo</title>
  <script src="script.js" defer></script>
  <style>
    body { font-family: sans-serif; margin: 40px; }
    input, button { padding: 8px; margin-right: 4px; }
    li { margin-top: 4px; }
  </style>
</head>
<body>
  <h1>📝 Mini Todo Liste</h1>
  <input id="todoInput" placeholder="Neue Aufgabe">
  <button id="addBtn">Hinzufügen</button>
  <ul id="todoList"></ul>
</body>
</html>
