from django.shortcuts import render, get_object_or_404
from .models import Post

# Create your views here.
def index(request):
    posts = Post.objects.order_by("-date")[:3]
    
    return render(request, "blog/index.html", {"posts": posts})

def blog_detail(request, slug):
    post = get_object_or_404(Post, slug=slug)
    tags = post.tag.all()
    return render(request, "blog/blog_detail.html", {"post":post,"tags":tags})

def all_posts(request):
    all_posts = Post.objects.all().order_by("-date")
    return render(request, "blog/all_posts.html", {"all_posts":all_posts})