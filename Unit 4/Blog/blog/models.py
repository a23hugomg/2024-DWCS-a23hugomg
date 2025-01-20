from django.db import models

# Create your models here.
class Tags(models.Model):
    caption = models.CharField(max_length=150)

class Author(models.Model):
    first_name = models.CharField(max_length=50)
    last_name = models.CharField(max_length=100)
    email = models.CharField(max_length=100)


class Post(models.Model):
    title = models.CharField(max_length=200)
    excerpt = models.CharField(max_length=200)
    imageName = models.CharField(max_length=500)
    date = models.DateField()
    slug = models.SlugField(default="", null=False, db_index=True)
    content = models.CharField(max_length=2000)
    author = models.ForeignKey(Author)
    tag = models.ManyToManyField(Tags)