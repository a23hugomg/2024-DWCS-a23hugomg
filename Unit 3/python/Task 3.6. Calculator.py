class Calculator:
    numberOfObjects=0
    
    def __init__(self,num1=None, num2=None):
        if num1 == None or num2 == None:
            num1 = 0
            num2 = 0
        
        if type(num1) is not int:
            raise Exception("The numbers must be int")
        elif type(num2) is not int:
            raise Exception("The numbers must be int")
        else:
            self.num1 = num1
            self.num2 = num2
        self.numberOfObjects =+1
    
    def __str__(self):
        return f"Numero1 = {self.num1} Numero2 = {self.num2}"
    
    def suma(self):
        resultado = self.num1 + self.num2
        return f"Suma: {self.num1} + {self.num2} = {resultado}"


try:
    firstCalcule = Calculator()
    firstCalcule.num1 = 2
    firstCalcule.num2 = 5
    print(f"Numero1 = {firstCalcule.num1} Numero2 = {firstCalcule.num2}")
except Exception as error:
    print(error)

try: 
    secondCalcule = Calculator(4,4)
    print(secondCalcule)
    print(secondCalcule.suma())
except Exception as error:
    print(error)