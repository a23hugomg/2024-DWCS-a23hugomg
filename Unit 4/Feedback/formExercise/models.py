from django.db import models

class Form(models.Model):
    SERVER_CHOICES = [
        (1, 'Apache'),
        (2, 'Django'),
        (3, 'Node'),
    ]
    
    ROLE_CHOICES = [
        (1, "Admin"),
        (2, "Engineer"),
        (3, "Manager"),
        (4, "Guest"),
    ]
    
    SING_CHOICES = [
        (1, "Mail"),
        (2, "Payroll"),
        (3,"Self-service")
    ]
    
    user_name = models.CharField(max_length=100)
    password = models.CharField(max_length=50)
    city = models.CharField(max_length=100)
    web_server = models.IntegerField(choices=SERVER_CHOICES, default=1)
    role = models.IntegerField(choices=ROLE_CHOICES)
    sign_on = models.IntegerField(choices=SING_CHOICES,default=2)

    def __str__(self):
        return self.user_name
