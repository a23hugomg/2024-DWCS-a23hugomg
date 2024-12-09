class Person():
    def __init__(self,id, name, age):
        self.id = id
        self.name = name
        self.age = age
    
    def __str__(self):
        return f"Id:{self.id} Name:{self.name} Age:{self.age}"
    
class Student():
    def __init__(self, id, person, degree):
        self.id = id
        self.person = person
        self.degree = degree
        
    def __str__(self):
        return f"""Id:{self.id} 
Person:     {self.person} 
Degree: {self.degree}
"""
        
class StudentGroup():
    def __init__(self, id, groupName, students):
        self.id = id
        self.groupName = groupName
        self.students = students
        
    def __str__(self):
        return f"""Id:{self.id} 
GroupName:{self.groupName} 
Students:
    {self.students}"""

    
# Create three different students. Show the value of the attributes on the screen.
person1 = Person(1,"paco",56)
person2 = Person(2,"manolo",46)
person3 = Person(3,"angeles",57)

student1 = Student(1,person1,"mate")
student2 = Student(1,person2,"lengua")
student3 = Student(1,person3,"music")

print(student1)
print(student2)
print(student3)

# Create an student group that contains the previously created students and show on the screen all the information of the students in this group.
students = [student1,student2,student3]
group1 = StudentGroup(1,"Grupo A", students)

print(group1)

# Remove a student from this group. Show the information of the group on the screen.


# Add a new student to this group. Show the information of the group on the screen.    

    