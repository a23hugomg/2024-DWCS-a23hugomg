def tripleCheck(array):
    contador = 0
    numero = 0
    triple = False
    for i in array:
        if numero == array[i]:
            contador = contador +1
            if contador>2:
                triple = True
                return True
        else:
            numero = array[i]
    return triple

array =  [ 1, 1, 2, 1, 2, 3]
print(f"bool({tripleCheck(array)})")



def countries(paises):
    for pais,capital in paises.items():
        print(f"The capital of {pais} is {capital}")

ceu = { "Italy":"Rome", "Luxembourg":"Luxembourg", "Belgium": "Brussels", "Denmark":"Copenhagen", "Finland":"Helsinki", "France" : "Paris", "Slovakia":"Bratislava", "Slovenia":"Ljubljana", "Germany" : "Berlin", "Greece" : "Athens", "Ireland":"Dublin", "Netherlands":"Amsterdam", "Portugal":"Lisbon", "Spain":"Madrid", "Sweden":"Stockholm", "United Kingdom":"London", "Cyprus":"Nicosia", "Lithuania":"Vilnius", "Czech Republic":"Prague", "Estonia":"Tallin", "Hungary":"Budapest", "Latvia":"Riga", "Malta":"Valetta", "Austria" : "Vienna", "Poland":"Warsaw"} ;

countries(ceu)