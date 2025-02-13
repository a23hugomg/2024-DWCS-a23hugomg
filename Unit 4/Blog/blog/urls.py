from django.urls import path
from . import views

app_name = 'blog'

urlpatterns = [
    path("", views.Index.as_view()),
    path("all-posts/",views.PostList.as_view(), name="all_posts"),
    path("<slug:slug>",views.PostDetail.as_view(), name="blog_detail"),
    path("read-later/",views.ReadLater.as_view(), name="read-later")
]