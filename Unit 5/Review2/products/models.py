from django.db import models
from django.utils.text import slugify
from django.urls import reverse

# Create your models here.
class Category(models.Model):
    name = models.CharField(max_length=250)
    
    def __str__(self):
        return self.name
    
    
class Product(models.Model):
    name = models.CharField(max_length=150)
    description = models.TextField()
    price = models.IntegerField()
    picture = models.ImageField()
    slug = models.SlugField(default="", null=False, db_index=True, unique=True)
    category = models.ForeignKey(Category,related_name="fkcategory", on_delete=models.CASCADE, null=True)
    favourite = models.BooleanField(default=False)
    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.name)
        super().save(*args, **kwargs)
    
    def get_absolute_url(self):
        return reverse("product-detail", args=[self.slug])
    
    def __str__(self):
        return self.name
    