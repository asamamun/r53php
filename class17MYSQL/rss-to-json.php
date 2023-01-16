<?php
/* function Parse ($url) {
    $fileContents= file_get_contents($url);
    $fileContents = str_replace(array("\n", "\r", "\t"), '', $fileContents);
    $fileContents = trim(str_replace('"', "'", $fileContents));
    $simpleXml = simplexml_load_string($fileContents);
    $json = json_encode($simpleXml);
    return $json;
} */

function Parse($url){
    $simpleXml = simplexml_load_file($url, "SimpleXMLElement", LIBXML_NOCDATA);
    var_dump($simpleXml);
    exit;
    $json = json_encode($simpleXml);
    return $json;
}

echo Parse("https://prod-qt-images.s3.amazonaws.com/production/prothomalo-bangla/feed.xml");