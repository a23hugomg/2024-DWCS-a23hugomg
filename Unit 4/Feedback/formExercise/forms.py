from django import forms
from .models import Form

class ReviewForm(forms.ModelForm):
        # user_name = forms.CharField(label="Username", max_length=100,widget=forms.TextInput(attrs={"placeholder":"Enter username"}))
        # password = forms.CharField(label="Password", max_length=100,widget=forms.TextInput(attrs={"placeholder":"Enter password"}))
        # city = forms.CharField(required=False ,label="City of employment", max_length=100,widget=forms.TextInput(attrs={"placeholder":"Enter city"}))
   
        # web = forms.ChoiceField(
        #     choices=Form.SERVER_CHOICES,
        #     widget=forms.Select,
        #     required=False,
        #     label="Web Server"
        # )
        # role = forms.ChoiceField(
        #     choices=Form.ROLE_CHOICES,
        #     widget=forms.RadioSelect,
        #     required=False,
        #     label="Please specify your role"
        # )
        # sign_on = forms.MultipleChoiceField(
        #     choices=Form.SING_CHOICES,
        #     widget=forms.CheckboxSelectMultiple,
        #     required=False,
        #     label="Please Sign-on to the following:"
        # )    
    class Meta:
        model = Form
        fields = ['user_name', 'password', 'city', 'web_server', 'role', 'sign_on']
        labels = {
            "user_name": "Username",
            "password": "Password",
            "city": "City",
            "web_server": "Web Server",
        }
        
    city = forms.CharField(required=False, label="City of employment")        

    role = forms.ChoiceField(
        choices=Form.ROLE_CHOICES,
        widget=forms.RadioSelect,
        label="Please specify your role",
        required=False
    )

    sign_on = forms.ChoiceField(
         choices=Form.SING_CHOICES,
         widget=forms.CheckboxSelectMultiple,
         label="Single Sing-on to the following",
         required=False
     )

    error_messages = {
         "required": "This field cannot be empty!",
    }
