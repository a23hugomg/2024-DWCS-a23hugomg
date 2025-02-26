from django import forms

from .models import Author
        
class AuthorForm(forms.ModelForm):
    class Meta:
        model = Author
        fields = "__all__"
        labels = {
            "name": "Author name:",
            "bio": "Author bio:",
            "image":"Author image",
            "readers":"Number of readers"
        }


    