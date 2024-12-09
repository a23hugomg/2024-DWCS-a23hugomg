from django.shortcuts import render
from .models import Participant

# Create your views here.
def home(request):
    return render(request,'events/home.html')

def register(request):
    return render(request, 'participants/form.html', {'register':'register'})

def detail(request):
    name = request.GET.get('name')
    surname = request.GET.get('surname')
    age = int(request.GET.get('age'))
    event = request.GET.get('event')
    
    return render(request, 'participants/details.html', {'name':name, 'surname':surname,'age':age, 'event':event})
