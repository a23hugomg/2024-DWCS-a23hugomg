from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator


# Create your models here.

class Author(models.Model):
    name = models.CharField(max_length=255)
    bio = models.TextField()
    image = models.ImageField(upload_to='authors/images/', blank=True, null=True)
    readers = models.PositiveIntegerField(default=1, validators=[MinValueValidator(1)])

    def __str__(self):
        return self.name
    
class Book(models.Model):
    title = models.CharField(max_length=250)
    image = models.ImageField(upload_to='books/images/', blank=True, null=True)
    description = models.TextField()
    price = models.DecimalField(max_digits=10, decimal_places=2)
    publication_date = models.DateField()
    rating = models.IntegerField(validators=[MinValueValidator(0), MaxValueValidator(10)])
    authors = models.ManyToManyField(Author)

    def __str__(self):
        return self.title+f" ({self.id})"
    