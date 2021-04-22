<?php
require_once "./vendor/autoload.php";
//echo "test";


$loader = new \Twig\Loader\FilesystemLoader(__DIR__);
$twig = new \Twig\Environment($loader, [
    //'cache' => __DIR__,
]);
$options = array(
    'hotels' => [
        'Wynn' => 'The Wynn Las Vegas, often simply referred to as Wynn, is a luxury resort and casino located on the Las Vegas Strip in Paradise, Nevada, United States, on the site of the old Desert Inn Hotel. The US$2.7-billion resort is named after casino developer Steve Wynn and is the flagship property of Wynn Resorts. The resort covers 215 acres (87 ha). It is located at the northeast corner of Las Vegas Boulevard and Sands Avenue, directly across The Strip from the Fashion Show Mall.',
        'Trump International Hotel' => 'The Trump International Hotel Las Vegas is a 64-story hotel, condominium, and timeshare located on Fashion Show Drive in Paradise, Nevada, named for Donald Trump. It is located down the street from Wynn Las Vegas, behind the former site of the New Frontier Hotel and Casino on 3.46 acres (14,000 m2), near the Fashion Show Mall, and features both non-residential hotel condominiums and residential condominiums. The exterior glass is infused with gold.[1]',
        'The Venetian' => 'The Venetian Las Vegas is a luxury hotel and casino resort located on the Las Vegas Strip in Paradise, Nevada, United States, on the site of the old Sands Hotel. Designed by KlingStubbins, the hotel tower contains 36 stories and rises 475 feet (145 m). The Venetian is owned and operated by Las Vegas Sands. The Venetian also serves as the seat of the corporate headquarters for its parent company.'
    ]
);

echo $twig->render('indexTwig.html', $options);


require __DIR__ . '/vendor/typo3fluid/fluid/examples/include/view_init.php';
//vendor\typo3fluid\fluid\examples\include\view_init.php
$view->assignMultiple([
    // Casting types
    'hotels' => [
        'Wynn' => 'The Wynn Las Vegas, often simply referred to as Wynn, is a luxury resort and casino located on the Las Vegas Strip in Paradise, Nevada, United States, on the site of the old Desert Inn Hotel. The US$2.7-billion resort is named after casino developer Steve Wynn and is the flagship property of Wynn Resorts. The resort covers 215 acres (87 ha). It is located at the northeast corner of Las Vegas Boulevard and Sands Avenue, directly across The Strip from the Fashion Show Mall.',
        'Trump International Hotel' => 'The Trump International Hotel Las Vegas is a 64-story hotel, condominium, and timeshare located on Fashion Show Drive in Paradise, Nevada, named for Donald Trump. It is located down the street from Wynn Las Vegas, behind the former site of the New Frontier Hotel and Casino on 3.46 acres (14,000 m2), near the Fashion Show Mall, and features both non-residential hotel condominiums and residential condominiums. The exterior glass is infused with gold.[1]',
        'The Venetian' => 'The Venetian Las Vegas is a luxury hotel and casino resort located on the Las Vegas Strip in Paradise, Nevada, United States, on the site of the old Sands Hotel. Designed by KlingStubbins, the hotel tower contains 36 stories and rises 475 feet (145 m). The Venetian is owned and operated by Las Vegas Sands. The Venetian also serves as the seat of the corporate headquarters for its parent company.'
    ],
]);
$paths->setTemplatePathAndFilename(__DIR__ . '/indexFluid.html');
$output = $view->render();

// Output using helper from view_init.php
example_output($output);

$hotels = array(
    'hotel1' => 'Wynn',
    'hotel2' => 'Trump International Hotel',
    'hotel3' => 'The Venetian',
);

$hotelinfo = array(
    'info_hotel1' => 'The Wynn Las Vegas, often simply referred to as Wynn, is a luxury resort and casino located on the Las Vegas Strip in Paradise, Nevada, United States, on the site of the old Desert Inn Hotel. The US$2.7-billion resort is named after casino developer Steve Wynn and is the flagship property of Wynn Resorts. The resort covers 215 acres (87 ha). It is located at the northeast corner of Las Vegas Boulevard and Sands Avenue, directly across The Strip from the Fashion Show Mall.',
    'info_hotel2' => 'The Trump International Hotel Las Vegas is a 64-story hotel, condominium, and timeshare located on Fashion Show Drive in Paradise, Nevada, named for Donald Trump. It is located down the street from Wynn Las Vegas, behind the former site of the New Frontier Hotel and Casino on 3.46 acres (14,000 m2), near the Fashion Show Mall, and features both non-residential hotel condominiums and residential condominiums. The exterior glass is infused with gold.[1]',
    'info_hotel3' => 'The Venetian Las Vegas is a luxury hotel and casino resort located on the Las Vegas Strip in Paradise, Nevada, United States, on the site of the old Sands Hotel. Designed by KlingStubbins, the hotel tower contains 36 stories and rises 475 feet (145 m). The Venetian is owned and operated by Las Vegas Sands. The Venetian also serves as the seat of the corporate headquarters for its parent company.',
);

function readTemplateFile(string $path): string

{
    //echo $path;
    $handle = fopen($path, "r+");
    $contents = fread($handle, filesize($path));
    fclose($handle);
    //var_dump($contents);
    return $contents;
};

$cont = readTemplateFile('../../WEBT/ViewaLasVegas_Quenteam2.0/index.html');
foreach ($hotelinfo as $key => $hotel) {
    $cont = str_replace($key, $hotel, $cont);
};
foreach ($hotels as $key => $hotel) {
    $cont = str_replace($key, $hotel, $cont);
};
echo $cont;

/*kek:
indexaction nicht in hotrl.php sondern in index.php

    template view_init
    hotel.name

    examples anschauen


*/
