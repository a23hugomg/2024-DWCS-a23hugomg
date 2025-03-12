from django.shortcuts import render
from django.http import HttpResponse
from django.views.generic import ListView
from .models import Artist, Song

# Create your views here.
class HomeView(ListView):
    template_name = "song/home.html"
    model = Song
    context_object_name = "songs"
    
    def get_queryset(self):
        base_query = super().get_queryset()
        data = base_query.filter(is_hit=True)
        return data