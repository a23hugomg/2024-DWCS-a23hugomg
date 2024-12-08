from django.shortcuts import render, get_object_or_404
from .models import Courses

# Create your views here.
def home(request):
    return render(request, 'courses/home.html')

def courses(request):
    courses = Courses.objects.all()
    return render(request, 'courses/courses.html', {'courses':courses})

def detail(request, course_id):
    course = get_object_or_404(Courses, pk=course_id)
    return render(request, 'courses/detail.html', {'course':course})