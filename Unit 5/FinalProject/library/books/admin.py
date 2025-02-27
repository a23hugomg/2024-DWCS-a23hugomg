from django.contrib import admin
from .models import Book, Author

# Register your models here.
# admin.site.register(Book)
# admin.site.register(Author)

class BookAdmin(admin.ModelAdmin):
    list_filter = ("rating","price",)
    list_display = ("title","rating","price", "publication_date")

admin.site.register(Book, BookAdmin)

class AuthorAdmin(admin.ModelAdmin):
    list_filter = ("readers",)
    list_display = ("name","readers")

admin.site.register(Author, AuthorAdmin)