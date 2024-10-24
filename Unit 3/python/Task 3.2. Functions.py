def person(age, name=None, surname="Apelido"):
    if name == None:
        print(f"{surname} is {age} years old.")
    else:
        print(f"{name} {surname} is {age} years old.")


person(19, "Hugo", "Mosquera")
person(20)
