from django.shortcuts import render, get_object_or_404
from .models  import Book, Author

# Create your views here.
def home(request):
    books = Book.objects.all()
    return render(request, 'books/home.html', {'books':books})

def book_detail(request, book_id):
    book = get_object_or_404(Book, id=book_id)
    return render(request, 'books/book_detail.html', {'book': book})

def book_search(request):
    query = request.GET.get('q', '')
    books = Book.objects.filter(title__icontains=query) if query else Book.objects.all()
    return render(request, 'books/book_search.html', {'books': books, 'query': query})

def author(request):
    authors = Author.objects.all()
    return render(request, 'authors/author.html', {'authors':authors})