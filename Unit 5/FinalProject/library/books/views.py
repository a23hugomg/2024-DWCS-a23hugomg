from django.shortcuts import render, get_object_or_404
from .models  import Book, Author
from django.views.generic.base import TemplateView
from django.views.generic import ListView, DetailView, CreateView, DeleteView, UpdateView
from .forms import AuthorForm

# Book
class Home(ListView):
    template_name = "books/home.html"
    model = Book
    context_object_name = "books"
    
    def get_queryset(self):
        return Book.objects.all().order_by("-rating")[:3]

class ListBooks(ListView):
    template_name = "books/book_list.html"
    model = Book
    context_object_name = "books"

    def get_queryset(self):
        sort_by = self.request.GET.get("sort_by", "")
        books = Book.objects.all()

        if sort_by in ["price", "-price", "publication_date", "-publication_date", "rating", "-rating"]:
            books = books.order_by(sort_by)

        return books


class DetailBook(DetailView):
    template_name = "books/book_detail.html"
    model = Book
    
class AddBook(CreateView):
    model = Book
    fields = "__all__"
    template_name = "books/add_book.html"
    success_url = "/books"
    
class UpdateBook(UpdateView):
    model = Book
    fields = "__all__"
    template_name = "books/update_book.html"
    success_url = "/books"

class DeleteBook(DeleteView):
    model = Book
    fields = "__all__"
    template_name = "books/delete_book.html"
    success_url = "/books"
    
# Author    
class ListAuthors(ListView):
    template_name = "authors/author_list.html"
    model = Author
    context_object_name = "authors"
    
    def get_queryset(self):
        return Author.objects.all().order_by("-readers")

class DetailAuthor(DetailView):
    template_name = "authors/author_detail.html"
    model = Author
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["books_by_author"] = Book.objects.filter(authors=self.object)
        return context
        
class AddAuthor(CreateView):
    model = Author
    form_class = AuthorForm
    template_name = "authors/add_author.html"
    success_url = "/authors"

class UpdateAuthor(UpdateView):
    model = Author
    form_class = AuthorForm
    template_name = "authors/update_author.html"
    success_url = "/authors"
    
class DeleteAuthor(DeleteView):
    model = Author
    template_name = "authors/delete_author.html"
    success_url = "/authors"

# Barra de busquéda
class SearchView(ListView):
    template_name = "books/search.html"
    context_object_name = "books"

    def get_queryset(self):
        query = self.request.GET.get("q", "").strip()
        filter_option = self.request.GET.get("filter", "all")

        books = Book.objects.filter(title__icontains=query) if query else Book.objects.all()
        authors = Author.objects.filter(name__icontains=query) if query else Author.objects.all()

        if filter_option == "books":
            return books
        elif filter_option == "authors":
            return [] 
        return books

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        query = self.request.GET.get("q", "").strip()
        filter_option = self.request.GET.get("filter", "all") 

        context["query"] = query
        context["filter"] = filter_option 

        if filter_option in ["all", "authors"]:
            context["authors"] = Author.objects.filter(name__icontains=query) if query else Author.objects.all()
        else:
            context["authors"] = [] 

        return context