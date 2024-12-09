from django.urls import path
from . import views

app_name="participants"

urlpatterns = [
 path('', views.register, name='register'),
 path('detail/', views.detail, name='detail'),
]
