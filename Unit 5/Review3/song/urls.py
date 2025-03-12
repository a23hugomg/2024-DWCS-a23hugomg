from django.urls import path
from . import views

urlpatterns = [
    path('', views.HomeView.as_view(),name="home"),
    path('songs/', views.SongList.as_view(),name="song-list"),
    path('songs/favourite/', views.AddFavouriteSong.as_view(),name="song-favourite"),
    path('songs/add/', views.SongAdd.as_view(),name="song-add"),
    path('songs/<slug:slug>/', views.SongDetail.as_view(),name="song-detail"),
    path('songs/<slug:slug>/update/', views.SongUpdate.as_view(),name="song-update"),
    path('songs/<slug:slug>/delete', views.SongDelete.as_view(),name="song-delete"),

]