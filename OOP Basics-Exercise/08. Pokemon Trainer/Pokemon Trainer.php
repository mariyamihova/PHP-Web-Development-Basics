
<?php

    include "Pokemon.php";
    include "Trainer.php";

    $inputLine=explode(" ",trim(fgets(STDIN)));
    $trainers=[];
    while($inputLine[0]!="Tournament"){

$trainerName=$inputLine[0];

$pokemonName=$inputLine[1];
$element=$inputLine[2];
$health=$inputLine[3];

$pokemon=new Pokemon($pokemonName,$element,$health);

$trainer=new Trainer($trainerName);
$trainer->addPokemon($pokemon);

if(!array_key_exists($trainerName,$trainers)){
    $trainers[$trainerName]=$trainer;
}
$trainers[$trainerName]->addPokemon($pokemon);


        $inputLine=explode(" ",trim(fgets(STDIN)));
    }
print_r($trainers);
    $readElement=trim(fgets(STDIN));

    While($readElement!="End"){

        foreach ($trainers as $name => $trainer) {
            if ($trainer->hasPokemonOfElement($readElement)) {
                $trainer->addBadge();
            } else {
                $trainer->reducePokemonsHealth(10);
                $trainer->removeDeadPokemons();
            }
        }
        $readElement=trim(fgets(STDIN));
    }

usort($trainers, function (Trainer $trainer1, Trainer $trainer2) {
    return -($trainer1->getBadgesCount() <=> $trainer2->getBadgesCount());
});

    foreach ($trainers as $trainer){
        echo $trainer;
    }