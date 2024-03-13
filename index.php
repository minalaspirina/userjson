
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Example</title>
</head>
<body>
    <h1>Users:</h1>
    <ul id="userList"></ul>

    <script>
        fetch('users.php')
            .then(response => response.json())
            .then(data => {
                const userList = document.getElementById('userList');
                data.forEach(user => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `id: ${user.id}, name: ${user.name}`;
                    userList.appendChild(listItem);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>