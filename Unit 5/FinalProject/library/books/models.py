from django.db import models

# Create your models here.

class Book(models.Model):
    title = models.CharField(max_length=250)
    image = models.ImageField(upload_to='books/images/')
    description = models.TextField()
    price = models.DecimalField(max_digits=10, decimal_places=2)
    publication_date = models.DateField()

    def __str__(self):
        return self.title+f" ({self.id})"
    
class Author(models.Model):
    name = models.CharField(max_length=255)
    bio = models.TextField()
    image = models.ImageField(upload_to='authors/images/')

    def __str__(self):
        return self.name