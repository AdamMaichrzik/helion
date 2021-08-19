<?php
    $xmlFromWebsite = file_get_contents("https://dlabystrzakow.pl/xml/produkty-dlabystrzakow.xml");
    $data = simplexml_load_string($xmlFromWebsite);
    
    foreach ($data->lista->ksiazka as $ksiazka)
    {
        echo "Ident: " . $ksiazka->ident . "\n";
        echo "Tytuł: " . $ksiazka->tytul . "\n";
        echo "Liczba stron: " . $ksiazka->liczbastron . "\n";
        echo "Data wydania: " . $ksiazka->datawydania . "\n" . "\n";
    }

    
?>

