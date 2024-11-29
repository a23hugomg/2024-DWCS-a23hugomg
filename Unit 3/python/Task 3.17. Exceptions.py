class DivisionByZeroError(Exception):
    def __init__(self, message):
        self.message = message

    def __str__(self):
        return self.message

def divide_numbers(num,den):
     if den == 0:
         raise DivisionByZeroError("Cannot divide by zero.")
     else:
         resultado = num/den
         return resultado

try:
    print(divide_numbers(10,0))
    #print(divide_numbers(10,2))
except DivisionByZeroError as error:
    print(error)