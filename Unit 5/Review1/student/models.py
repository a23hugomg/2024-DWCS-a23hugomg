from django.db import models
from django.core.validators import MinValueValidator, MaxValueValidator
from django.utils.text import slugify
from django.urls import reverse


# Create your models here.
class Degree(models.Model):
    name = models.CharField(max_length=100)
    description = models.TextField()
    years = models.IntegerField(validators=[MinValueValidator(1),MaxValueValidator(4)])
    
    def __str__(self):
        return ( self.id ) + self.name
    
class Student(models.Model):
    name_surname = models.CharField(max_length=250)
    picture = models.ImageField()
    age = models.IntegerField(validators=[MinValueValidator(1970),MaxValueValidator(2010)])
    slug = models.SlugField(default="", null=False, db_index=True, unique=True)
    finished_degree = models.BooleanField(default=False)
    degree = models.ForeignKey(Degree, related_name="fkstudents", on_delete=models.CASCADE, null=True)
    
    def save(self, *args, **kwargs):
        self.slug = slugify(self.name_surname)
        super().save(*args, **kwargs)
        
    def get_absolute_url(self):
        return reverse("student-detail", args=[self.slug])
    
    def __str__(self):
        return self.name_surname
    