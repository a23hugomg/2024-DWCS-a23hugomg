from django.contrib import admin
from .models import Artist, Song
# Register your models here.
class ArtistModel(admin.ModelAdmin):
    list_filter = ("name", "debut_year",)
    list_display = ("name", "debut_year",)
    
class SongModel(admin.ModelAdmin):
    prepopulated_fields = {"slug": ("title",)}
    list_filter = ("artist", "release_year","is_hit")
    list_display = ("title", "artist","is_hit",)
    
admin.site.register(Artist, ArtistModel)
admin.site.register(Song,SongModel)