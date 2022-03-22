<?php 
//1
$veta = "Kolik lidi zabil covid?";
$vyrazy = array("covid");
        echo isShowCovid($veta, $vyrazy);
        
function isShowCovid($veta,$vyrazy){
    $pomoc = "nic se nenaslo";
    foreach($vyrazy as $vyraz){
        if(strpos($veta, $vyraz)){
            $pomoc = "neco se naslo";
        }
    }
    return $pomoc;
}
//2
$jmena = "MaTej, jIri miLaN; maRTiN";
function prepareNames($jmena){
    
    $jmena = str_replace(";",",",$jmena);
    $jmena = str_replace(" ",",",$jmena);
    $jmena = str_replace(",,",",",$jmena);
    $jmena = strtolower($jmena);
    $ucwords = ($jmena);
    $jmena = explode (",", $jmena);
    return($jmena);
 }
    var_dump(prepareNames($jmena));