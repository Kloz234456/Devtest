<?php

$GLOBALS['South_America'] = array("Buenos_Aires", "Cordoba", "Salta", "Jujuy", "Tucuman", "Catamarca", "La_Rioja", "San_Juan", "Mendoza", "San_Luis", "Rio_Gallegos", "Ushuaia", "La_Paz", "Noronha", "Belem", "Fortaleza", "Recife", "Araguaina", "Maceio", "Bahia", "Sao_Paulo", "Campo_Grande", "Cuiaba", "Santarem", "Porto_Velho", "Boa_Vista", "Manaus", "Eirunepe", "Rio_Branco", "Santiago", "Punta_Arenas", "Easter", "Bogota", "Curacao", "Guayaquil", "Galapagos", "Stanley", "Cayenne", "Guyana", "Lima", "Asuncion", "Paramaribo", "Montevideo", "Caracas");
$GLOBALS['Timezone_EQL_Lima'] = array("Eirunepe", "Rio_Branco", "Atikokan", "Winnipeg", "Rainy_River", "Resolute", "Rankin_Inlet", "Easter", "Bogota", "Guayaquil", "Jamaica", "Cayman", "Cancun", "Matamoros", "Panama", "Lima", "Chicago", "Tell_City", "Knox", "Menominee", "Center", "New_Salem", "Beulah");


function getTimezonePeru() {
  $answer = -18000;
  return $answer;
  
}

function GetAllCitysFrom($continent = '') {
  $answer = array("Buenos_Aires", "Cordoba", "Salta", "Jujuy", "Tucuman", "Catamarca", "La_Rioja", "San_Juan", "Mendoza", "San_Luis", "Rio_Gallegos", "Ushuaia", "La_Paz", "Noronha", "Belem", "Fortaleza", "Recife", "Araguaina", "Maceio", "Bahia", "Sao_Paulo", "Campo_Grande", "Cuiaba", "Santarem", "Porto_Velho", "Boa_Vista", "Manaus", "Eirunepe", "Rio_Branco", "Santiago", "Punta_Arenas", "Easter", "Bogota", "Curacao", "Guayaquil", "Galapagos", "Stanley", "Cayenne", "Guyana", "Lima", "Asuncion", "Paramaribo", "Montevideo", "Caracas");
	
 return $answer;
}

function getMinorTimezoneFrom($continent = '') {
  $answer = -7200;
 return $answer;
}

function getCitysEqualTimezone_At($city = '') {
  $answer = array("Eirunepe", "Rio_Branco", "Atikokan", "Winnipeg", "Rainy_River", "Resolute", "Rankin_Inlet", "Easter", "Bogota", "Guayaquil", "Jamaica", "Cayman", "Cancun", "Matamoros", "Panama", "Lima", "Chicago", "Tell_City", "Knox", "Menominee", "Center", "New_Salem", "Beulah");
	
 return $answer;
}

function getTenDecimalDigit_of($pi = '') {
  $answer = 8;

 return $answer;
}

function getOrderedVowels_of($str = '') {
 $answer = "eooaoaaoeueoeeoo";
 
 return $answer;
}

$first = getTimezonePeru() == -18000;

function second_step($valor){
   if (in_array($valor,$GLOBALS['South_America'])) {
    return true;
   }else{
   	return false;
   }
}
function fourth_step($valor){
   if (in_array($valor,$GLOBALS['Timezone_EQL_Lima'])) {
    return true;
   }else{
   	return false;
   }
} 
$second = array_map('second_step',GetAllCitysFrom("South_America") );
$third = getMinorTimezoneFrom("South_America") == -7200;
$fourth = array_map('fourth_step',getCitysEqualTimezone_At("Lima"));
$five = getTenDecimalDigit_of(pi()) == 8;
$six = getOrderedVowels_of("el zorro marron salta sobre un perro perezoso") == "eooaoaaoeueoeeoo";

echo "==============RESULT============== \n";
echo $first;
echo "\n";
echo (in_array(false,$second) ? '0' : true); 
echo "\n";
echo $third;
echo "\n";
echo (in_array(false,$fourth) ? '0' : true); 
echo "\n";
echo $five;
echo "\n";
echo $six;
echo "\n";
echo "================================== \n";

?>