<?php 
//echo "test";

    //readTemplateFile('index.html');

    $hotels = array(
        'hotel1' => 'Wynn',
        'hotel2' => 'Trump International Hotel',
        'hotel3' => 'The Venetian',
    );

    function readTemplateFile(string $path) : string{
        //echo $path;
        $handle = fopen($path, "r+");
        $contents = fread($handle, filesize($path));
        fclose($handle);
        //var_dump($contents);
        return $contents;
    };

    $cont = readTemplateFile('../../WEBT/ViewaLasVegas_Quenteam2.0/index.html');
    foreach($hotels as $key => $hotel){
        $cont = str_replace($key, $hotel, $cont);
    };
    echo "<hr>";
    echo $cont;
?>
    