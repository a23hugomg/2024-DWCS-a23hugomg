from django.shortcuts import render
from .models import Registration

# Create your views here.
def home(request):
    return render(request, 'courses/home.html')

def registration(request):
    return render(request, 'registration/home.html', {'registration':'registration'})

