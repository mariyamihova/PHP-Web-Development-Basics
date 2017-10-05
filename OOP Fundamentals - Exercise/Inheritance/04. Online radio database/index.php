<?php
include "Song.php";

$n=intval(trim(fgets(STDIN)));

    $songs=[];
    for($i=0;$i<$n;$i++) {
        try {
            $inputLine = explode(";", trim(fgets(STDIN)));

            $authorName = $inputLine[0];
            $songName = $inputLine[1];
            $duration = $inputLine[2];

            $songs[] = new Song($authorName, $songName, $duration);
            echo "Songs added." . "\n";
        }catch (Exception $e){
    echo $e->getMessage();
}
    }

    echo "Songs added: ".count($songs)."\n";

$totalSeconds=0;
foreach ($songs as $song){
    $data=explode(":",$song->getLength());
    $minutes=$data[0];
    $seconds=$data[1];

    $totalSeconds+=($minutes*60+$seconds);
}

echo "Playlist length: ".convertSeconds($totalSeconds);


function convertSeconds($seconds) {
    $t = round($seconds);
    return sprintf('%01dh %02dm %02ds', ($t/3600),($t/60%60), $t%60);
}




