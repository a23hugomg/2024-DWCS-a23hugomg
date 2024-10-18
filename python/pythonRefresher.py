age = 17
name = "marcos"

print(name)
print(f"hy, my name is {name}")
print(f'my name is {name} and i have {age} years')

if age > 18:
    print('you are too old')
else:
    print('you can\'t buy alcohol')

todayIsCold = False

if todayIsCold:
    print('its a day cold')
else: 
    print('its sunny')


def hello(nombre):
    print('hello world')
    print(f'hello {nombre}')

hello(name)