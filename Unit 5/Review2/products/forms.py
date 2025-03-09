from django import forms

from .models import Product
        
class ProductForm(forms.ModelForm):
    class Meta:
        model = Product
        fields = "__all__"
        labels = {
            "name": "Product name:",
            "description": "Product description:",
            "price":"price",
            "picture":"picture",          
            "slug":"slug",
            "category":"category",
        }
