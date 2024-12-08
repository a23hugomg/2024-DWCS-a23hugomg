def nome(age = int, name = None, surname = "Apelido"):
    if name != None:
        print(f"{name} {surname} is {age} years old.")
    else:
        print(f"{surname} is {age} years old.")
        
nome(18)
nome(18,None,"Mosquera")
nome(18,"Hugo","Mosquera")