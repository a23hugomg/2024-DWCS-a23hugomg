def factorial(num):
    resultado = 1
    if type(num) is int and num >= 0:
        for i in range(1, num+1):
            resultado = resultado * i
        return resultado
    else:
        raise Exception("The number is not an int or is less than 0")
    
try:
    print(factorial(5))
except Exception as e:
    print(e)