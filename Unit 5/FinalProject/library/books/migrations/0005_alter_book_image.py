# Generated by Django 4.2.16 on 2025-02-20 16:55

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('books', '0004_author_readers_book_authors_book_rating'),
    ]

    operations = [
        migrations.AlterField(
            model_name='book',
            name='image',
            field=models.ImageField(blank=True, null=True, upload_to='books/images/'),
        ),
    ]
