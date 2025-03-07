# Generated by Django 4.2.18 on 2025-01-31 13:12

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Form',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('user_name', models.CharField(max_length=100)),
                ('password', models.CharField(max_length=50)),
                ('city', models.CharField(max_length=100)),
                ('web_server', models.IntegerField(choices=[(1, 'Apache'), (2, 'Django'), (3, 'Node')], default=1)),
                ('role', models.IntegerField(choices=[(1, 'Admin'), (2, 'Engineer'), (3, 'Manager'), (4, 'Guest')])),
                ('sign_on', models.IntegerField(choices=[(1, 'Pay'), (2, 'Hola')], default=2)),
            ],
        ),
        migrations.CreateModel(
            name='SignOn',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('name', models.CharField(max_length=100)),
            ],
        ),
    ]
