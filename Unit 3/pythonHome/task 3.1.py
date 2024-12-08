words = ["List", "Dictionary", "Array"]

definitions = ["Ordered array of objects", "Unordered array of key-value pairs", "Mathematic definition"]

cooldictionary = {}

for i in range(0,3):
    cooldictionary[words[i]]=definitions[i]
        

print("The contents of the dictionary are:")
for key, value in cooldictionary.items():
    print(f"\t{key}:{value}")

        