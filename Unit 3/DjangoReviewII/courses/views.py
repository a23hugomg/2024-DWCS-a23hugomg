from django.shortcuts import render
from .models import Courses

# Create your views here.
def home(request):
    courses = Courses.objects.all()
    return render(request, 'courses/home.html', {'courses':courses})