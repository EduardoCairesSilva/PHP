fetch('http://localhost/teste.php')
    .then(response => response.json)
    .then(data => console.log(data))
    .catch(e => console.error(e));
    
