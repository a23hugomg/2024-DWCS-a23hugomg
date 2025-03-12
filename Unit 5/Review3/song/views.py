from django.shortcuts import render
from django.http import HttpResponse, HttpResponseRedirect
from django.views.generic import View, ListView, DetailView, CreateView, UpdateView, DeleteView
from .models import Artist, Song
from django.urls import reverse_lazy


# Create your views here.
class HomeView(ListView):
    template_name = "song/home.html"
    model = Song
    context_object_name = "songs"
    
    def get_queryset(self):
        base_query = super().get_queryset()
        data = base_query.filter(is_hit=True)
        return data
    
class SongList(ListView):
    template_name = "song/song-list.html"
    model = Song
    context_object_name = "songs"
    
class SongDetail(DetailView):
    template_name = "song/song-detail.html"
    model = Song
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        loaded_song = self.object
        request = self.request
        stored_songs = request.session.get("stored_songs", [])
        context["is_favourite"] = str(loaded_song.id) in stored_songs
        return context
    
class SongAdd(CreateView):
    model = Song
    template_name = "song/song-add.html"
    success_url = reverse_lazy("song-list")
    
class SongUpdate(UpdateView):
    model = Song
    template_name = "song/song-update.html"
    success_url = reverse_lazy("song-detail")
    
class SongDelete(DeleteView):
    model = Song
    template_name = "song/song-delete.html"
    success_url = reverse_lazy("song-list") 
    
class AddFavouriteSong(View):
    def get(self, request):
        stored_songs = request.session.get("stored_songs", [])
        context = {}
        if stored_songs is None or len(stored_songs) == 0:
            context["has_songs"] = False
        else:
            songs = Song.objects.filter(id__in=stored_songs)
            context["songs"] = songs
            context["has_songs"] = True
        return render(request, "song/favourite.html", context)
    
    def post(self, request):
        stored_songs = request.session.get("stored_songs", [])
        song_id = str(request.POST["song_id"])
        if song_id not in stored_songs:
            stored_songs.append(song_id)
        else:
            stored_songs.remove(song_id)
        request.session["stored_songs"] = stored_songs
        return HttpResponseRedirect("")
    
    def is_stored_song(self, request, song_id):
        stored_songs = request.session.get("stored_songs")
        if stored_songs is None:
            is_favourite = False
        else:
            is_favourite = song_id in stored_songs
        return is_favourite
    
