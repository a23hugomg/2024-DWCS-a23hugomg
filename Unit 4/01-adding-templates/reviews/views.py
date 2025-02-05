from reviews.models import Review, Student
from django.http import HttpResponseRedirect
from django.shortcuts import render
from django.views import View
from django.views.generic.base import TemplateView
from django.views.generic import ListView, DetailView, UpdateView, DeleteView
from django.views.generic.edit import FormView, CreateView
from .forms import ReviewForm, StudentForm

# Create your views here.


# class ReviewView(FormView):
#     form_class = ReviewForm
#     template_name = "reviews/review.html"
#     success_url = "/thank-you"
    
#     def form_valid(self, form):
#         form.save()
#         return super().form_valid(form)
    
    # def get(self, request):
    #     form = ReviewForm()

    #     return render(request, "reviews/review.html", {
    #         "form": form
    #     })

    # def post(self, request):
    #     form = ReviewForm(request.POST)

    #     if form.is_valid():
    #         form.save()
    #         return HttpResponseRedirect("/thank-you")

    #     return render(request, "reviews/review.html", {
    #         "form": form
    #     })



class ReviewView(CreateView):
    model = Review
    form_class = ReviewForm
    template_name = "reviews/review.html"
    success_url = "/thank-you"

class ThankYouView(TemplateView):
    template_name = "reviews/thank_you.html"
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["message"] = "This works!" 
        return context
    
class ReviewsListView(ListView):
    template_name = "reviews/review_list.html"
    model = Review
    context_object_name = "reviews"
    
    # def get_context_data(self, **kwargs):
    #     context = super().get_context_data(**kwargs)
    #     reviews = Review.objects.all()
    #     context["reviews"] = reviews
    #     return context

class SingleReviewView(DetailView):
    template_name = "reviews/details.html"
    model = Review
    
    # def get_context_data(self, **kwargs):
    #     context = super().get_context_data(**kwargs)
    #     review_id = kwargs["id"]
    #     selected_review = Review.objects.get(pk=review_id)
    #     context["review"] = selected_review
    #     return context
    
    
# STUDENT

class StudentView(CreateView):
    model = Student
    form_class = StudentForm
    template_name = "students/student.html"
    success_url = "/student/list"
    
class StudentListView(ListView):
    template_name = "students/student_list.html"
    model = Student
    context_object_name = "students"
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context["message"] = "Successful operation!" 
        return context

class StudentDetailsView(DetailView):
    template_name = "students/details.html"
    model = Student
    
class StudentUpdateView(UpdateView):
    model = Student
    form_class = StudentForm
    template_name = "students/update.html"
    success_url = "/student/list"
    
class StudentDeleteView(DeleteView):
    model = Student
    form_class = StudentForm
    template_name = "students/delete.html"
    success_url = "/student/list"