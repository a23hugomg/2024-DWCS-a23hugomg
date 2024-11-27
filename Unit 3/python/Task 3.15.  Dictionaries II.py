import json

with open('catalog.json','r') as file:
    diccionario = json.load(file)
    
for k,v in diccionario.values():
    print(k, v)
