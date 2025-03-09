from django.contrib import admin
from .models import Category, Product

# Register your models here.
class CategoryAdmin(admin.ModelAdmin):
    list_filter = ("name",)
    list_display = ("name",)

class ProductAdmin(admin.ModelAdmin):
    prepopulated_fields = {"slug": ("name",)}
    list_filter = ("price","category")
    list_display = ("name","price","category")

admin.site.register(Category,CategoryAdmin)
admin.site.register(Product,ProductAdmin)