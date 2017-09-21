<?php
$animals = [
            'Australia' => ['Inaria','Agalychnis callidryas'],            
            'North America' => ['Conuropsis carolinensis'],
            'South America' => ['Smilisca','Panthera leo'],
            'Antarctica' => ['Aptenodytes forsteri'],
            'Eurasia' => ['Fulica atra'],
            'Africa' => ['Hydrochoerus hydrochaeris','Actinopterygii','Ailuropoda melanoleuca','Dendropithecus','Amphibia','Animalia','Anser indicus','Anseriformes']
            ];
$firstname = [];
$lastname = [];
foreach ($animals as $continent => $animals) {
    foreach ($animals as $animal) {
        if (str_word_count($animal) == 2) {        
            $double = explode(' ', $animal);
            $firstname[$continent][] = $double [0];
            $lastname[] = $double [1];
        }
    }
}
shuffle($lastname);
$shuffleanimal = [];
$i = 0;
foreach ($firstname as $continent => $first) {
    foreach ($first as $value) {
        $shuffleanimal[$continent][] = $value . ' ' . $lastname [$i];
        $i++;
    }
}
echo '<pre>'
;print_r($shuffleanimal);
?>