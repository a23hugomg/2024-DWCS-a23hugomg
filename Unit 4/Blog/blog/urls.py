from django.urls import path
from . import views

app_name = 'blog'

urlpatterns = [
    path("", views.index),
    path("all-posts/",views.all_posts, name="all_posts"),
    path("<slug:slug>",views.blog_detail, name="blog_detail")
]