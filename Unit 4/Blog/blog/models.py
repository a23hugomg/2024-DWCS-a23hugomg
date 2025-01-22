from django.db import models
from django.core.validators import MinLengthValidator
from django.urls import reverse

# Create your models here.
class Tag(models.Model):
    caption = models.CharField(max_length=150)
    
    def __str__(self):
        return f"{self.caption}"

class Author(models.Model):
    first_name = models.CharField(max_length=50)
    last_name = models.CharField(max_length=100)
    email = models.CharField(max_length=100)
    
    def __str__(self):
        return f"{self.first_name} {self.last_name}"


class Post(models.Model):
    title = models.CharField(max_length=200)
    excerpt = models.CharField(max_length=200)
    imageName = models.CharField(max_length=500)
    date = models.DateField(auto_now=True)
    slug = models.SlugField(default="", null=False, db_index=True)
    content = models.TextField(validators=[MinLengthValidator(10)])
    author = models.ForeignKey(Author, null=True, on_delete=models.SET_NULL, related_name="fkauthor", blank=True)
    tag = models.ManyToManyField(Tag)
    
    def get_absolute_url(self):
        return reverse("blog_detail", args=[self.slug])