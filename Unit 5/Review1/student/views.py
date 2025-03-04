from django.shortcuts import render

# Create your views here.
def home(request):
    return render(request, 'student/base.html')

def StudentDetail(arg):
    pass