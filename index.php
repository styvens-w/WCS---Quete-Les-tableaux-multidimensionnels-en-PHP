<?php

$movies = [
    "Les Aventuriers de l'arche perdue" => ["Harrison Ford", "Karen Allen", "Paul Freeman", "Ronald Lacey", "John Rhys-Davies"],
    "Indiana Jones et le Temple maudit" => ["Harrison Ford", "Kate Capshaw", "Ke Huy Quan", "Amrish Puri", "Roshan Seth"],
    "Indiana Jones et la Dernière Croisade" => ["Harrison Ford", "Sean Connery", "Denholm Elliott", "Alison Doody", "John Rhys-Davies"]
];

foreach ($movies as $key => $acteurs) {
    echo "Dans le film ''$key'', les principaux acteurs sont :<br>";

    foreach ($acteurs as $acteur) {
        echo "- $acteur<br>";
    }

    echo "<br>";
}