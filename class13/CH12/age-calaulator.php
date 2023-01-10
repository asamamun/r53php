 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            text-align: center;
        }
        #title,#calc{
            transition: all 0.5s;
        }
        #title:hover{
            padding:0px 20px;
            color: green;
        }
        #calc:hover{
            padding:10px;
            color: white;
            background-color: lightseagreen;
        }
        #result{
            text-align: center;
            font-size: 2em;
            color: blue;
            animation: changecolor 4s linear infinite;
        }
        @keyframes changecolor {
            0%{color:red; text-shadow: 0px 0px 10px  green;}
            25%{color:green;text-shadow: 0px 0px 10px blue;}
            50%{color:blue;text-shadow: 0px 0px 10px red;}
            100%{color:red;text-shadow: 0px 0px 10px green;}
        }
    </style>
 </head>
 <body>
    <div class="container">
    <h1 id="title">Please select a date to calculate your age</h1>
    <form action="" method="post">
        <input type="date" name="dob" required>
        <input id="calc" type="submit" name="calc" value="Calculate Age">
    </form>
    <p id="result">
 <?php
if(isset($_POST['dob'])){
$ismailDOB = new DateTime($_POST['dob']);
// $ismailDOB->setDate(1996,1,6);
// $ismailDOB->setTime(20,55);
// $ismailDOB->modify("+27 hours");
$datenow = new DateTime('today');
$result = $ismailDOB->diff($datenow);
echo $result->format('You are %Y Years %m month %d days old');
}
?>
</p>
</div>
 </body>
 </html>