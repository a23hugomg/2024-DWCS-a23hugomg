from django.db import models

# Create your models here.
class Participant(models.Model):
    name = models.CharField(max_length=100)
    surname = models.CharField(max_length=100)
    age = models.PositiveIntegerField()
    event = models.CharField(max_length=200)