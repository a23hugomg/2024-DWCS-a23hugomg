from django.urls import path
from . import views

app_name = 'book'  # Define el namespace

urlpatterns = [
    path('<int:book_id>/', views.book_detail, name='detail'),
    path('search/', views.book_search, name='search'),
]
