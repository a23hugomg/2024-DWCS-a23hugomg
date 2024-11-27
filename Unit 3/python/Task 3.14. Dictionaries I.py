productos = {0: "potatoes", 1:"tomatoes", 3:"onions", 4:"garlic"} 

def showDictionary(dictionary):
    for key,value in dictionary.items():
        print(f"{key} => {value}")
        
productos.update({7:"carrot"})
productos.update({8:"lettuce"})

def findValue(dictionary, key):
    for k,v in dictionary.items():
        if k == key:
            print(f"{k} => {v}")

productos2 = {2: "patatas", 3:"tomates", 4:"cebolla", 5:"ajo"} 

def mergeDictionaries(d1,d2):                
    for k,v in d2.items():
        d1.update({k:v})
    return d1

print("-Imprimir productos")
showDictionary(productos)

print("-Imprimir producto por clave")
findValue(productos,3)
findValue(productos,7)
findValue(productos,8)

print("-Unir dos diccionarios")
showDictionary(mergeDictionaries(productos,productos2))