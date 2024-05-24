fetch('/request/database.php')
    .then(response => response.json())
    .then(data => {
        let data5 = data;
        console.log("%cDatabase", "color: green");
    })
    .catch(error => console.error('Ошибка:', error));