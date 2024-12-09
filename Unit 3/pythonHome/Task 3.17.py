class DivisionByZeroError(Exception):
    pass

def divide_numbers(num,den):
    if den <= 0:
        raise DivisionByZeroError("Cannot divide by zero.")
    else:
        resultado = num/den
        return f"{num} entre {den} es igual a {resultado}"
    
try:
    print(divide_numbers(10,2.3))
    print(divide_numbers(10,0))
except DivisionByZeroError as e:
    print(e)
    