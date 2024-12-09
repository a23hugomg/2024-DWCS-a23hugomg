import json

with open('Unit 3/pythonHome/catalog.json','r') as file:
    catalog = json.load(file)
    
for key, value in catalog.items():
    print(key)
    if isinstance(value,dict):
        for key1,value1 in value.items():
            if isinstance(value1,list):
                print(key1 + ":")
                for object in value1:
                    for k,v in object.items():
                        print(f"{k}: {v}")
            else:
                print(f"{key1}: {value1}")

for book in catalog['catalog']['book']:
    print(f"{book['title']}")

def findValue(dict,id):
    for book in dict['catalog']['book']:
        if book['id'] == id:
            print(book)
            
findValue(catalog,4)