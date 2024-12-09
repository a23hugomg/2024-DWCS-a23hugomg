from django.db import models

# Create your models here.
class Event(models.Model):
    name = models.CharField(max_length=100)
    description = models.CharField(max_length=250)
    image = models.ImageField(upload_to='events/images/')
    fecha = models.DateField()
    
    def __str__(self) -> str:
        return self.name