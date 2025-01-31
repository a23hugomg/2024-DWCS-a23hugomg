from django import forms
from .models import Form

class ReviewForm(forms.ModelForm):
    class Meta:
        model = Form
        fields = ['user_name', 'password', 'city', 'web_server', 'role', 'sign_on']
        labels = {
            "user_name": "Username",
            "password": "Password",
            "city": "City",
            "web_server": "Web Server",
            "role": "Please specify your role:",
            "sign_on": "Single Sign-on to the following"
        }
        
    city = forms.CharField(required=False)        

    role = forms.ChoiceField(
        choices=Form.ROLE_CHOICES,
        widget=forms.RadioSelect,
        label="Select Role",
        required=False
    )

    sign_on = forms.ChoiceField(
        choices=Form.SING_CHOICES,
        widget=forms.CheckboxSelectMultiple,
        label="Sign Up for",
        required=False
    )

    error_messages = {
        "required": "This field cannot be empty!",
    }
