# Generated by Django 4.2.16 on 2025-02-21 11:36

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('books', '0008_alter_author_image'),
    ]

    operations = [
        migrations.AlterField(
            model_name='author',
            name='image',
            field=models.ImageField(blank=True, default='authors/predeterminado.jpg', null=True, upload_to='authors/images/'),
        ),
    ]
