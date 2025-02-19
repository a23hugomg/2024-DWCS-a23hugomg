from django.shortcuts import render
from .models import Author

# Create your views here.
def author(request):
    authors = Author.objects.all()
    return render(request, 'authors/author.html', {'authors':authors})