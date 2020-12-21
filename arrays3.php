<?php

$kundenliste=array();

$kunde=array("Name"=>"Schmidt","Netto"=>2000,"Brutto"=>2000*1.19);

array_push($kundenliste,$kunde);
$kunde=array("Name"=>"Meier","Netto"=>1000,"Brutto"=>1000*1.19);

array_push($kundenliste,$kunde);
$kunde=array("Name"=>"Müller","Netto"=>3000,"Brutto"=>3000*1.19);

array_push($kundenliste,array("Name"=>"Müller","Netto"=>3000,"Brutto"=>3000*1.19));

foreach($kundenliste as $k){
    echo $k['Name'].": Umsatz ". $k['Brutto']." €</br>";
}
    



$a=$a;

