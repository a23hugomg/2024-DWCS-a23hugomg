from django.urls import path
from . import views

app_name = 'book'

urlpatterns = [
    path('', views.Home.as_view(), name='home'),
    path('books/', views.ListBooks.as_view(), name="books"),
    path('books/<int:pk>/', views.DetailBook.as_view(), name="detail"),
    path("books/add", views.AddBook.as_view(), name="add"),
    path("books/<int:pk>/update", views.UpdateBook.as_view(), name="update"),
    path("books/<int:pk>/delete", views.DeleteBook.as_view(), name="delete"),
    
    path('authors/',views.ListAuthors.as_view(), name='authors'),
    path("authors/<int:pk>/", views.DetailAuthor.as_view(), name="authors_detail"),
    
    path('search/', views.SearchView.as_view(), name='search'),
]

#NUEVAS URLS
