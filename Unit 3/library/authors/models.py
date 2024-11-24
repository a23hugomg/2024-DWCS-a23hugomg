from django.db import models

# Create your models here.

class Author(models.Model):
    name = models.CharField(max_length=255)
    bio = models.TextField()
    image = models.ImageField(upload_to='authors/images/')

    def __str__(self):
        return self.name