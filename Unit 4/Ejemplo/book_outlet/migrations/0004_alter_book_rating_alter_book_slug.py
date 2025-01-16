# Generated by Django 4.2.17 on 2025-01-16 12:21

import django.core.validators
from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('book_outlet', '0003_book_slug'),
    ]

    operations = [
        migrations.AlterField(
            model_name='book',
            name='rating',
            field=models.IntegerField(validators=[django.core.validators.MinValueValidator(1), django.core.validators.MaxValueValidator(10)]),
        ),
        migrations.AlterField(
            model_name='book',
            name='slug',
            field=models.SlugField(blank=True, default=''),
        ),
    ]
