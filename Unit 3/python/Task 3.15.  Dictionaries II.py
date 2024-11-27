import json

with open('catalog.json','r') as file:
    diccionario = json.load(file)

# print(isinstance(diccionario, dict))

# Diccionario entero
for key, value in diccionario.items():
    if isinstance(value, dict):
        print(f"{key}:")
        for subkey, subvalue in value.items():
            if isinstance(subvalue, list):
                print(f"  {subkey}:")
                for item in subvalue:
                    print("    -")
                    for item_key, item_value in item.items():
                        print(f"      {item_key}: {item_value}")
            else:
                print(f"  {subkey}: {subvalue}")


# Titulo de los libros
# for book in diccionario['catalog']['book']:
#     print(f"{book['title']}")