class Car:
    description = "The magic car"
    def __init__(self, color, power):
        self.color = color
        self.power = power
        
    def __str__(self):
        return f"""{self.description}:
    Color: {self.color} 
    Power: {self.power}"""
    
    def getColor(self):
        return self.color
    
    def getDescripcion():
        return Car.description
    
    
trueno = Car("azul y oro",1000)
coche = Car("Negro",300)

print(trueno)
coche.color="blanco"
print(coche)

print(trueno.getColor())

print(Car.getDescripcion())