<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
$vardas = "Alex";
$pavarde = "stul";
$gimData = "1996";
$sieMetai = "2022";

echo "As esu ". $vardas. " " . $pavarde. " . Man yra " . ($sieMetai - $gimData). " metai(ų)";


 $number = 12;

 if ($number > 4) {
    echo "<p> teiginys teisingas<p>";
 }
 /*Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. 
 Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.
*/

$num1 = rand(0,4);
$num2 = rand(0,4);

echo $num1 . " " . $num2. "<br>";

if ($num1 != 0 && $num2 != 0) {
    if ($num1 > $num2) {
        echo "pirma dalinsiu is antro.". (  round($num1 / $num2, 2)  );
    }else {
        echo "antra dalinsiu is pirmo.". (  round($num2 / $num1, 2)  );
    }
}else {
    echo "dalyba is nulio negalima<br>";
}
echo "<br>";

 //Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10).
//Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų.

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);
if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $c)) {
    echo "Gaunasi trikampis";
} else {
    echo "Nesigauna trikampis";
}
echo "<br>";

//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

$name = "Anthony";
$lastName = "Hopkinsas";
echo "simboliu suma = ". strlen($name);
echo "<br>";
echo "simboliu suma = ". strlen($lastName);
echo "<br>";
if (strlen($name) > strlen($lastName)) {
    echo "trumpesnis zodis - ".$lastName;
}else {
    echo "trumpesnis zodis - ".$name;
}
echo "<br>";

//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
//Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.

$name = "Anthony";
$lastName = "Hopkins";
echo strtoupper($name) ." ". strtolower($lastName);
echo "<br>";

//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
//Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir 
//pavardės kintamųjų raidžių. Jį atspausdinti.

$aktorius1 = "pitt";
$aktorius2 = "cruz";
$mix = $aktorius1[0] . $aktorius2[0];
echo $mix;
echo "<br>";

//Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus.
//Sukurti trečią kintamąjį ir jam priskirti stringą, 
//sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$aktorius3 = "holand";
$aktorius4 = "aniston";
$mix2 = substr($aktorius3, -3) . substr($aktorius4, -3);
echo $mix2;
echo "<br>";

//Sukurti kintamąjį su stringu: “An American in Paris”. 
//Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$tekstas = "An American in Paris";
strtolower($tekstas);
echo str_replace("a","*", str_replace("A","*", $tekstas));
echo "<br>";

//.......06..........
//Sukurti kintamąjį su stringu: “An American in Paris”. 
//Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

$tekstas = "An American in Paris";
$a = substr_count($tekstas, "a");
$a = substr_count($tekstas, "A");
echo $a + $a;
echo "<br>";

//Sukurti kintamąjį su stringu: “An American in Paris”. 
//Jame ištrinti visas balses. Rezultatą atspausdinti. 
//Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”. 

$some_dirname = "An American in Paris";
$pure_dirname = preg_replace("#[aeiou\s]+#i" , " " , $some_dirname);
print $pure_dirname;
echo "<br>";

$some_dirname = "Breakfast at Tiffany's";
$pure_dirname = preg_replace("#[aeiou\s]+#i" , " " , $some_dirname);
print $pure_dirname;
echo "<br>";

$some_dirname = "2001: A Space Odyssey";
$pure_dirname = preg_replace("#[aeiou\s]+#i" , " " , $some_dirname);
print $pure_dirname;
echo "<br>";

$some_dirname = "It's a Wonderful Life";
$pure_dirname = preg_replace("#[aeiou\s]+#i" , " " , $some_dirname);
print $pure_dirname;
echo "<br>";

//Antras budas
//
//$tekstas4 = "Breakfast at Tiffany's";
//$tekstas5 = "2001: A Space Odyssey";
//$tekstas6 = "It's a Wonderful Life";
//$vowels = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");
//echo str_replace($vowels, "", $tekstas4);
//echo "<br>"
//echo str_replace($vowels, "", $tekstas5);
//echo "<br>"
//echo str_replace($vowels, "", $tekstas6);
//echo "<br>"

//............08...........
//Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; 
//Surasti ir atspausdinti epizodo numerį

$starWars = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo "<p>" .$starWars. "<p>";
echo substr($starWars,-14,1);
echo " ", "<br>";


//Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” 
//yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, 
//geriant sultis pas save kvartale”.

$search = array(",", ".", ";", ":", "-", "!", "?", "(", ")");
$txt = array("Don't Be a Menace to South Central While Drinking Your Juice in the Hood", "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale");
foreach ($txt as $txts) {
    $kiek = 0;
    $worlds = str_replace($search,"", $txts);
    $worlds = explode(" ", $worlds);
    $ilgis = count($worlds);
    for ($i-0; $i < $ilgis; $i++) { 
        if (strlen($wolds[$i]) <= 5) {
            $kiek++;
        }
    }
    echo $kiek."<br>";
}

//10.....
//Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai

$txt = "";
$characters = array_merge(range('A','Z'), range('a','z'));
$max = count($characters) - 1;
for ($i = 0; $i < 3; $i++) { 
    $rand = mt_rand(0,$max);
    $txt = $characters($rand);
}
echo $txt. "<br>";

//11
//Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių,
// o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)

$search = array(",", ".", ";", ":", "-", "!", "?", "(", ")");
$txt = array("Don't Be a Menace to South Central While Drinking Your Juice in the Hood", "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale");
$words1 = str_replace($search, "", $txt[0]);
$words1 = explode(" ",$words1);
$words2 = str_replace($search, "", $txt[1]);
$words2 = explode(" ",$words2);
$words = array_merge($words1, $words2);
$keys = array_rand($words, 9);
$txt = "";
for ($i=0; $i < 9; $i++) { 
    $txt = $txt. " " . $words($keys[$i]);
}

echo $txt. "<br>";

 ?>
 
<body>
</body>
</html>