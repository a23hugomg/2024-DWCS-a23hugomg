from django.shortcuts import render
from django.http import HttpResponse
import random

# Create your views here.


def home(request):
    #return HttpResponse("hola mundo")
    return render(request,"generator/home.html")

def about(request):
    return render(request,"generator/about.html")

def password(request):
    #return HttpResponse("<h1>Eggs are so tasty</h1>")
    thepassword = ''
    
    characters = list("abcdefghijklmñopqrstuvwxyz")
    
    if request.GET.get("uppercase"):
        mayus = list()
        for c in characters:
            mayus += c.upper()
        characters.extend(mayus)
        
    if request.GET.get("numbers"):
        characters.extend("0123456789")
        
    if request.GET.get("special"):
        characters.extend("!·$%&/()=?¿`+ḉ,.-^*¨Ç;:_}[]{•· ̣")
    
    length = int(request.GET.get("length"))
    
    for x in range(length):
        thepassword += random.choice(characters)
    
    return render(request,"generator/password.html",{"password":thepassword})
