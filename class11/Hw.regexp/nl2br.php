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
        The nl2br() function converts all newline (\n) characters in a string to their XHTMLcompliant equivalent, <br />.
    </p>
    <h4 style="color: red;">
        EXAMPLE:
    </h4>

    <?php
    $recipe = "
    জ্যোৎস্নায় ভাসছে ঢাকা, অবসন্ন হাটুরের মতো বসে আছি
    হাঁটু মুড়ে নগর ভেলায়।
    এ এক প্রকৃত খেলা, এই ভেসে-যাওয়া তীরবর্তী শোভা দেখে,
    জ্যোৎস্নার মাধ্যমে গড়ে তোলা মধুর সম্পর্ক কোনো
    মহিলার সাথে।
    বাতিল প্রেমিক যদি ফের খুঁজে পায় বেলাবেলি সম্প্রীতির ডেরা,
    তাহ’লে সে নীলিমাকে জানিয়ে অভিবাদন, প্রায়
    ফুরফুরে প্রজাপতি হয়ে উড়ে উড়ে অপরাহ্নে
    ঘাসের অম্লান সবুজকে চুমু খেয়ে, হাত রেখে
    খরগোশ অথবা কাঠবিড়ালীর পিঠে, হাত রেখে
    খরগোশ অথবা কাঠবিড়ালীর পিঠে, দেয়ালের শ্যাওলায়
    মগ্ন হবে গৃহপ্রবেশের সূরে এক লহমায়। কয়েক শতাব্দী তার
    আঙুলে উঠবে নেচে, দেশলাই জ্বালালে আঁধারে
    প্রাচীন দেয়ালচিত্র অকস্মাৎ হবে উন্মোচিত, বুঝিবা আহত হবে
    কাতর হৃদয় তার অতীতের অসামাজিকতা হেতু আর
    রাখবে সে চোখ টিকটিকি কিংবা বাতির ওপর।";
    // convert the newlines to <br />'s.
    echo nl2br($recipe);
    // echo $recipe;
    ?>
    
</body>

</html>