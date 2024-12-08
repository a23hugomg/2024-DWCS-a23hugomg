def potencia(base,exponente):
    resultado = 1
    if type(base) is int and type(exponente) is int:
        for i in range(0,exponente):
            resultado = resultado * base
        return resultado
    else:
        raise Exception("No se puede calcular la potencia")
            
try:
    print(potencia(3,2))
except Exception as e:
    print(e)