from django.shortcuts import render
from .models import Blog

# Create your views here.

def all_blogs(request):
    """ return render(request, 'blog/all_blogs.html') """
    blogs = Blog.objects.all()
    
    return render(request, 'blog/all_blogs.html', {'blogs':blogs})