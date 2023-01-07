<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        During the general course of communication, you may come across many characters
        that are not included in a document’s text encoding, or that are not readily available on
        the keyboard. Examples of such characters include the copyright symbol (©), the cent
        sign (¢), and the grave accent (è). To facilitate such shortcomings, a set of universal key
        codes was devised, known as character entity references. When these entities are parsed
        by the browser, they will be converted into their recognizable counterparts. For example,
        the three aforementioned characters would be presented as &copy;, &cent;, and
        &Egrave;, respectively.
        To perform these conversions, you can use the htmlentities() function.
    </p>

    <h4 style="color: red;">
        EXAMPLE:
    </h4>

    <?php
    $advertisement = "Coffee at 'Cafè Française' costs $2.25.";
    echo htmlentities($advertisement);
    ?>


</body>

</html>