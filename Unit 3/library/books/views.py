from django.shortcuts import render, get_object_or_404
from .models  import Book

# Create your views here.
def home(request):
    books = Book.objects.all()
    return render(request, 'books/home.html', {'books':books})

# def detail(request, book_id):
#     book = get_object_or_404(Book, pk=book_id)

#     return render(request, 'books/book_details.html',{'book':book})