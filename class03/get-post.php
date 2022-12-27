<?php
//http://localhost/Round53/php/r53php/class03/get-post.php?id=abc
// echo $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="p">

    </div>
    <script>
        let url = "https://dummyjson.com/products/"+<?php echo $_GET['pid']; ?>;
        // alert(url);
        fetch(url)
.then(res => res.json())
.then(d=>{
    let html = ``;
    html += `<h3>${d.title}</h3>`;
    html += `<p>${d.description}</p>`;
    d.images.forEach(i => {
        html += `<img src='${i}' width='120px'/>`; 
    });
    document.getElementById('p').innerHTML = html;
    console.log(d)
});
    </script>
</body>
</html>
