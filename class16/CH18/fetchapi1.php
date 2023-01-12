<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="container">

    </div>
    <script>
        fetch('http://192.168.54.118/Round53/php/r53php/class16/api1.php')
.then(res => res.json())
.then(d=>{
    console.log(d)
    document.getElementById("container").innerHTML = `<img src="${d[3]}" alt="">`;
});
    </script>
</body>
</html>