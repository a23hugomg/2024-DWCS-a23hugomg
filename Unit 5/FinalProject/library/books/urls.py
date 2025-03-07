from django.urls import path
from . import views

app_name = 'book'

urlpatterns = [
    path('', views.Home.as_view(), name='home'),
    path('books/', views.ListBooks.as_view(), name="books"),
    path('books/read-later/add/', views.AddReadLater.as_view(), name="addReadLater"),
    path('books/read-later/', views.ReadLaterList.as_view(), name="readLater"),
    path('books/read-later/', views.ReadLaterList.as_view(), name="readLater"),
    
    path('books/<int:pk>/', views.DetailBook.as_view(), name="detail"),
    path("books/add", views.AddBook.as_view(), name="add"),
    path("books/<int:pk>/update", views.UpdateBook.as_view(), name="update"),
    path("books/<int:pk>/delete", views.DeleteBook.as_view(), name="delete"),
    
    path('authors/',views.ListAuthors.as_view(), name='authors'),
    path("authors/<int:pk>/", views.DetailAuthor.as_view(), name="authors_detail"),
    path("authors/add", views.AddAuthor.as_view(), name="addAuthor"),
    path("authors/<int:pk>/update", views.UpdateAuthor.as_view(), name="updateAuthor"),
    path("authors/<int:pk>/delete", views.DeleteAuthor.as_view(), name="deleteAuthor"),
    
    path('search/', views.SearchView.as_view(), name='search'),
]