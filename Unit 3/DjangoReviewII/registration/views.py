from django.shortcuts import render
from .models import Registration

# Create your views here.
def home(request):
    return render(request, 'courses/home.html')

def registration(request):
    return render(request, 'registration/home.html', {'registration':'registration'})


def registration_details(request):
    name = request.GET.get("name")
    surname = request.GET.get("surname")
    age = request.GET.get("age")
    
    return render(request, 'registration/details.html', {'name':name, 'surname':surname, 'age':age})