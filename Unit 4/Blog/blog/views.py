from django.shortcuts import render, get_object_or_404
from .models import Post
from django.views.generic import ListView, DetailView
from .forms import CommentForm
from django.views import View
from django.http import HttpResponseRedirect
from django.urls import reverse

# Create your views here.
# def index(request):
#     posts = Post.objects.order_by("-date")[:3]
    
#     return render(request, "blog/index.html", {"posts": posts})
    
# def all_posts(request):
#     all_posts = Post.objects.all().order_by("-date")
#     return render(request, "blog/all_posts.html", {"all_posts":all_posts})

# def blog_detail(request, slug):
#     post = get_object_or_404(Post, slug=slug)
#     tags = post.tag.all()
#     return render(request, "blog/blog_detail.html", {"post":post,"tags":tags})


class Index(ListView):
    template_name = "blog/index.html"
    model = Post
    context_object_name = "posts"
    
    def get_queryset(self):
        return Post.objects.all().order_by("-date")[:3]
    
class PostList(ListView):
    template_name = "blog/all_posts.html"
    model = Post
    context_object_name = "all_posts"
    
    def get_queryset(self):
        return Post.objects.all().order_by("-date")
    
class PostDetail(View):
    # template_name = "blog/blog_detail.html"
    # model = Post
    
    def get(self,request,slug):
        post = Post.objects.get(slug=slug)
        context = {
            "post":post,
            "post_tags": post.tag.all(),
            "comment_form":CommentForm(),
            "comments": post.comments.all().order_by("-id")
        }
        return render(request, "blog/blog_detail.html",context)

    def post(self,request,slug):
        comment_form = CommentForm(request.POST)
        post = Post.objects.get(slug=slug)
        
        if comment_form.is_valid():
            comment = comment_form.save(commit=False)
            comment.post = post
            comment.save()
            return HttpResponseRedirect(reverse("blog:blog_detail",args=[slug]))
        
        context = {
            "post":post,
            "post_tags": post.tag.all(),
            "comment_form":CommentForm()
        }
        return render(request, "blog/blog_detail.html",context)
    
    # def get_context_data(self, **kwargs):
    #     context = super().get_context_data(**kwargs)
    #     tags = self.object.tags.all()
    #     context["post_tags"] = tags
    #     context["comment_form"] = CommentForm
    #     return context

class ReadLater(View):
    def get(self, request):
        stored_posts = request.session.get("stored_posts")

        context = {}
        if stored_posts is None or len(stored_posts) == 0:
            context["stored_posts"] = []
            context["has_posts"] = False
        else:
            posts = Post.objects.filter(id__in=stored_posts)
            context["posts"] = posts
            context["has_posts"] = True
            
        return render(request, "blog/stored_posts.html", context)
    def post(self, request):
        stored_posts = request.session.get("stored_posts")
        if stored_posts is None:
            stored_posts = []
        post_id = int(request.POST["post_id"])
        if post_id not in stored_posts:
            stored_posts.append(post_id)
        else:
            stored_posts.remove(post_id)
            
        request.session["stored_posts"] = stored_posts
        return HttpResponseRedirect("/")