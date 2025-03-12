from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator
from django.urls import reverse
from django.utils.text import slugify


# Create your models here.
class Artist(models.Model):
    name = models.CharField(max_length=200)
    biography = models.TextField()
    debut_year = models.IntegerField(validators=[MinValueValidator(1950), MaxValueValidator(2024)])
    
    def __str__(self):
        return self.name
    
class Song(models.Model):
    title = models.CharField(max_length=250)
    cover = models.ImageField(upload_to="images",null= True)
    release_year = models.IntegerField(validators=[MinValueValidator(1960), MaxValueValidator(2024)])
    slug = models.SlugField(default="", null=False, db_index=True, unique=True)
    is_hit = models.BooleanField(default=False)
    artist = models.ForeignKey(Artist, on_delete=models.CASCADE, null=True, related_name="fksongs")

    def get_absolute_url(self):
        return reverse("song-detail", args = [self.slug])
    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.title)
        super().save(*args, **kwargs)
        
    def __str__(self):
        return f"{self.title} ({self.release_year})"
