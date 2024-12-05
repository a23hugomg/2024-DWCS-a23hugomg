from django.db import models

# Create your models here.

class Courses(models.Model):
    name = models.CharField(max_length=100)
    description = models.CharField(max_length=250)
    image = models.ImageField(upload_to='courses/images/')
    
    def __str__(self) -> str:
        return self.name
    
