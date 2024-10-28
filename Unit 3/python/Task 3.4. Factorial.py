def factorial(numero):
    if type(numero) == int and numero > 0:
        resultado = 1
        for i in range(1, numero+1):
            resultado = resultado * i
            i =+1
        return resultado
    else:
        raise Exception("The number must be int and greatter than 0")

try:
    numero = 5
    print(f"El factorial de {numero} es {factorial(numero)} ")
except Exception as error:
    print(error);