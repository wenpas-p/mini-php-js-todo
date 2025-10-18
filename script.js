document.getElementById('addBtn').addEventListener('click', async () => {
  const input = document.getElementById('todoInput');
  const todo = input.value.trim();
  if (!todo) return;

  const res = await fetch('save.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'todo=' + encodeURIComponent(todo)
  });

  const data = await res.json();
  renderTodos(data);
  input.value = '';
});

async function loadTodos() {
  const res = await fetch('todos.json');
  const data = await res.json();
  renderTodos(data);
}

function renderTodos(todos) {
  const list = document.getElementById('todoList');
  list.innerHTML = '';
  todos.forEach(t => {
    const li = document.createElement('li');
    li.textContent = t;
    list.appendChild(li);
  });
}

loadTodos();
