def potencia(base, exponente):
    if(type(base) is int or type(exponente) is int):
        resultado = 1
        for i in range(0,exponente):
            resultado = resultado * base
        print(resultado)
    else:
        raise Exception("The parameters must be int.")
    
try:
    potencia(3,3)
except Exception as error:
    print(error)
    
try:
    potencia("hola","jpñ")
except Exception as error:
    print(error)
