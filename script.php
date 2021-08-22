<?php
    $xmlFromWebsite = file_get_contents("https://dlabystrzakow.pl/xml/produkty-dlabystrzakow.xml");
    $dataFromWebsite = simplexml_load_string($xmlFromWebsite);
    file_put_contents('JSONTableFromXML.json', '[', FILE_APPEND);
    foreach ($dataFromWebsite->lista->ksiazka as $ksiazka) {
        $singleData = [
            '{' . '"ident"' . ':' . '"' . $ksiazka->ident . '"' . ',' . "\n",
            '"tytul"' . ':' . '"' . $ksiazka->tytul . '"' . ',' ."\n",
            '"liczbaStron"' . ':' . '"' . $ksiazka->liczbastron . '"' . ',' ."\n",
            '"dataWydania"' . ':' . '"' . $ksiazka->datawydania . '"' . '}' . ',' ."\n",
        ];
        file_put_contents('JSONTableFromXML.json', $singleData, FILE_APPEND);
    }

    file_put_contents('JSONTableFromXML.json', ']', FILE_APPEND);
?>