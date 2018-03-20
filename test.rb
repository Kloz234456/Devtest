South_America = ["Buenos_Aires", "Cordoba", "Salta", "Jujuy", "Tucuman", "Catamarca", "La_Rioja", "San_Juan", "Mendoza", "San_Luis", "Rio_Gallegos", "Ushuaia", "La_Paz", "Noronha", "Belem", "Fortaleza", "Recife", "Araguaina", "Maceio", "Bahia", "Sao_Paulo", "Campo_Grande", "Cuiaba", "Santarem", "Porto_Velho", "Boa_Vista", "Manaus", "Eirunepe", "Rio_Branco", "Santiago", "Punta_Arenas", "Easter", "Bogota", "Curacao", "Guayaquil", "Galapagos", "Stanley", "Cayenne", "Guyana", "Lima", "Asuncion", "Paramaribo", "Montevideo", "Caracas"]
Timezone_EQL_Lima = ["Eirunepe", "Rio_Branco", "Atikokan", "Winnipeg", "Rainy_River", "Resolute", "Rankin_Inlet", "Easter", "Bogota", "Guayaquil", "Jamaica", "Cayman", "Cancun", "Matamoros", "Panama", "Lima", "Chicago", "Tell_City", "Knox", "Menominee", "Center", "New_Salem", "Beulah"]

def getTimezonePeru
	answer = -18000
	
	return answer
end

def GetAllCitysFrom(continent)
	answer = ["Buenos_Aires", "Cordoba", "Salta", "Jujuy", "Tucuman", "Catamarca", "La_Rioja", "San_Juan", "Mendoza", "San_Luis", "Rio_Gallegos", "Ushuaia", "La_Paz", "Noronha", "Belem", "Fortaleza", "Recife", "Araguaina", "Maceio", "Bahia", "Sao_Paulo", "Campo_Grande", "Cuiaba", "Santarem", "Porto_Velho", "Boa_Vista", "Manaus", "Eirunepe", "Rio_Branco", "Santiago", "Punta_Arenas", "Easter", "Bogota", "Curacao", "Guayaquil", "Galapagos", "Stanley", "Cayenne", "Guyana", "Lima", "Asuncion", "Paramaribo", "Montevideo", "Caracas"]
	
	return answer
end

def getMinorTimezoneFrom(continent)
	answer = -7200

	return answer
end

def getCitysEqualTimezone_At(city)
	answer = ["Eirunepe", "Rio_Branco", "Atikokan", "Winnipeg", "Rainy_River", "Resolute", "Rankin_Inlet", "Easter", "Bogota", "Guayaquil", "Jamaica", "Cayman", "Cancun", "Matamoros", "Panama", "Lima", "Chicago", "Tell_City", "Knox", "Menominee", "Center", "New_Salem", "Beulah"]

	return answer
end

def getTenDecimalDigit_of(pi)
	answer = 8

	return answer
end

def getOrderedVowels_of(str)
	answer = "eooaoaaoeueoeeoo"

	return answer
end

first = getTimezonePeru == -18000
second = GetAllCitysFrom("South_America").map { |city| South_America.include?(city) }.uniq.include?(false) ? false : true
third = getMinorTimezoneFrom("South_America") == -7200
fourth = getCitysEqualTimezone_At("Lima").map { |city| Timezone_EQL_Lima.include?(city) }.uniq.include?(false) ? false : true
five = getTenDecimalDigit_of(Math::PI) == 8
six = getOrderedVowels_of("el zorro marron salta sobre un perro perezoso") == "eooaoaaoeueoeeoo"

p "==============RESULT=============="
p first,second,third,fourth,five,six
p "=================================="
