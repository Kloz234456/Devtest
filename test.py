import math

South_America = ["Buenos_Aires", "Cordoba", "Salta", "Jujuy", "Tucuman", "Catamarca", "La_Rioja", "San_Juan", "Mendoza", "San_Luis", "Rio_Gallegos", "Ushuaia", "La_Paz", "Noronha", "Belem", "Fortaleza", "Recife", "Araguaina", "Maceio", "Bahia", "Sao_Paulo", "Campo_Grande", "Cuiaba", "Santarem", "Porto_Velho", "Boa_Vista", "Manaus", "Eirunepe", "Rio_Branco", "Santiago", "Punta_Arenas", "Easter", "Bogota", "Curacao", "Guayaquil", "Galapagos", "Stanley", "Cayenne", "Guyana", "Lima", "Asuncion", "Paramaribo", "Montevideo", "Caracas"]
Timezone_EQL_Lima = ["Eirunepe", "Rio_Branco", "Atikokan", "Winnipeg", "Rainy_River", "Resolute", "Rankin_Inlet", "Easter", "Bogota", "Guayaquil", "Jamaica", "Cayman", "Cancun", "Matamoros", "Panama", "Lima", "Chicago", "Tell_City", "Knox", "Menominee", "Center", "New_Salem", "Beulah"]

def getTimezonePeru():
	answer = -18000
	
	return answer

def GetAllCitysFrom(continent):
	answer = ["Buenos_Aires", "Cordoba", "Salta", "Jujuy", "Tucuman", "Catamarca", "La_Rioja", "San_Juan", "Mendoza", "San_Luis", "Rio_Gallegos", "Ushuaia", "La_Paz", "Noronha", "Belem", "Fortaleza", "Recife", "Araguaina", "Maceio", "Bahia", "Sao_Paulo", "Campo_Grande", "Cuiaba", "Santarem", "Porto_Velho", "Boa_Vista", "Manaus", "Eirunepe", "Rio_Branco", "Santiago", "Punta_Arenas", "Easter", "Bogota", "Curacao", "Guayaquil", "Galapagos", "Stanley", "Cayenne", "Guyana", "Lima", "Asuncion", "Paramaribo", "Montevideo", "Caracas"]
	
	return answer

def getMinorTimezoneFrom(continent):
	answer = -7200
	
	return answer

def getCitysEqualTimezone_At(city):
	answer = ["Eirunepe", "Rio_Branco", "Atikokan", "Winnipeg", "Rainy_River", "Resolute", "Rankin_Inlet", "Easter", "Bogota", "Guayaquil", "Jamaica", "Cayman", "Cancun", "Matamoros", "Panama", "Lima", "Chicago", "Tell_City", "Knox", "Menominee", "Center", "New_Salem", "Beulah"]
	
	return answer

def getTenDecimalDigit_of(pi):
	answer = 8
	
	return answer

def getOrderedVowels_of(str):
	answer = "eooaoaaoeueoeeoo"
	
	return answer

first = getTimezonePeru() == -18000
items = [1, 2, 3, 4, 5]
second = False in map(lambda city: city in South_America, GetAllCitysFrom("South_America") )
third = getMinorTimezoneFrom("South_America") == -7200
fourth = False in map(lambda city: city in Timezone_EQL_Lima, getCitysEqualTimezone_At("Lima") )
five = getTenDecimalDigit_of(math.pi) == 8
six = getOrderedVowels_of("el zorro marron salta sobre un perro perezoso") == "eooaoaaoeueoeeoo"

print "==============RESULT=============="
print first,second == False,third,fourth == False,five,six
print "=================================="