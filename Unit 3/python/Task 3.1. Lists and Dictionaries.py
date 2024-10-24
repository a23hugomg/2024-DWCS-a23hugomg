words = ["List", "Dictionary", "Array"]

definitions = ["Ordered array of objects", "Unordered array of key-value pairs", "Mathematic definition"]

cooldictionary ={}

for i in range(0,3):
    cooldictionary.update({words[i]:definitions[i]})

print("The contens of the dictionary are:")

for a in range(0,3):
    print(words[a]+ ":"+ definitions[a])