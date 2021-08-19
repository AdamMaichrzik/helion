<?php
    $xmlFromWebsite = file_get_contents("https://dlabystrzakow.pl/xml/produkty-dlabystrzakow.xml");
    $xmlJSON = simplexml_load_string($xmlFromWebsite);
    $json = json_encode($xmlJSON);
    file_put_contents('file.json', $json);
?>
