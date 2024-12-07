from django.shortcuts import render
from .models import Courses

# Create your views here.
def home(request):
    return render(request, 'courses/home.html')

def courses(request):
    courses = Courses.objects.all()
    return render(request, 'courses/courses.html', {'courses':courses})