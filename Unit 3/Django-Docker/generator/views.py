from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.


def home(request):
    #return HttpResponse("hola mundo")
    return render(request,"generator/home.html", {"password":"kfkdjfalkjd"})

def password(request):
    return HttpResponse("<h1>Eggs are so tasty</h1>")
    #return render(request,"generator/home.html")
