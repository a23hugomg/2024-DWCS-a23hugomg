def tripleCheck(lista):
    contador = 0
    numero = lista[0]
    triple = False
    for i in lista:
        if numero == lista[i]:
            contador = contador + 1
        else:
            numero = lista[i]
            contador = 0
            
        if contador == 3:
            triple = True
    return triple

def countries(lista):
    for key,value in lista.items():
        print(f"The capital of {key} is {value}")
        

array =  [ 1, 1, 2, 2, 1]
print(f"bool({tripleCheck(array)})")  

ceu = { "Italy":"Rome", "Luxembourg":"Luxembourg", "Belgium": "Brussels", "Denmark":"Copenhagen", "Finland":"Helsinki", "France" : "Paris", "Slovakia":"Bratislava", "Slovenia":"Ljubljana", "Germany" : "Berlin", "Greece" : "Athens", "Ireland":"Dublin", "Netherlands":"Amsterdam", "Portugal":"Lisbon", "Spain":"Madrid", "Sweden":"Stockholm", "United Kingdom":"London", "Cyprus":"Nicosia", "Lithuania":"Vilnius", "Czech Republic":"Prague", "Estonia":"Tallin", "Hungary":"Budapest", "Latvia":"Riga", "Malta":"Valetta", "Austria" : "Vienna", "Poland":"Warsaw"} ;

countries(ceu)