class Person:
    def __init__(self, id, name, age):
        self.id = id
        self.name = name
        self.age = age
    
class Student:
    person = Person()
    def __init__(self, id, person, degree):
        self.id = id
        self.person = person.Person()
        self.degree = degree
    
class StudentPerson:
    