def showDictionary(dict):
    for key, value in dict.items():
        print(f"{key}: {value}")

def findValue(dict,k):
    for key, value in dict.items():
        if key == k:
            print(f"{key}: {value}")
            
def mergeDictionaries(dict1,dict2):
    dict3 = {}
    dict3.update(dict1)
    dict3.update(dict2)
    return dict3

products = {0: 'potatoes', 1: 'tomatoes', 3: 'onions', 4: 'garlic'}

showDictionary(products)

products.update({5: 'carrot'})
products.update({6: 'potatoes'})

showDictionary(products)

findValue(products,5)

diccionario = {2:"Futbol", 5:"goal"}

print(mergeDictionaries(products,diccionario))