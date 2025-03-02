from django.contrib import admin
from .models import Student, Degree

# Register your models here.

class StudentAdmin(admin.ModelAdmin):
    prepopulated_fields = {"slug": ("name_surname",)}
    list_filter = ("age", "finished_degree", "degree")
    list_display = ("name_surname", "age","degree", "finished_degree")
    
class DegreeAdmin(admin.ModelAdmin):
    list_filter = ("years",)
    list_display = ("name","years")
    
admin.site.register(Student,StudentAdmin)
admin.site.register(Degree,DegreeAdmin)
    