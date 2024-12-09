from django.shortcuts import render,get_object_or_404
from .models import Event

# Create your views here.
def home(request):
    return render(request,'events/home.html')

def events(request):
    events = Event.objects.all()
    return render(request, 'events/events.html', {'events':events})

def detail(request,event_id):
    event = get_object_or_404(Event,pk=event_id)
    return render(request, 'events/detail.html', {'event':event})