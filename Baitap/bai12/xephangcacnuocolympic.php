<?php
class Country
{
    public static array $arrCountry;
    public function __construct($name, $Medals)
    {
        self::$arrCountry[$name]=$Medals;
    }
}

$vn= new Country("Việt Nam",50);
$usa= new Country("Mỹ",20);
$france= new Country("Pháp",30);
$korea= new Country("Hàn Quốc",40);
if(isset(Country::$arrCountry))
{
    arsort(Country::$arrCountry);
    $i=1;
    foreach(Country::$arrCountry as $name=>$Medals)
{
    echo "Top".$i.": ".$name."<br>";
    echo "Medals: ".$Medals."<br>";
    $i++;
}
}
?>