from django.urls import path
from . import views

app_name = 'book'

urlpatterns = [
    path('<int:book_id>/', views.book_detail, name='detail'),
    path('search/', views.book_search, name='search'),
    path('authors/',views.author, name='authors')
]
