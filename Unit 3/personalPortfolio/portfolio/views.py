from django.shortcuts import render
from .models import Proyect

# Create your views here.
def home(request):
    projects = Proyect.objects.all()
    return render(request, 'portfolio/home.html', {'projects':projects})