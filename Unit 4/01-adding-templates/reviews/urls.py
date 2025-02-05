from django.urls import path

from . import views

urlpatterns = [
     path("", views.ReviewView.as_view()),
     path("thank-you", views.ThankYouView.as_view()),
     path("reviews", views.ReviewsListView.as_view()),
     path("details/<int:pk>", views.SingleReviewView.as_view()),
     
     path("student/", views.StudentView.as_view()),
     path("students", views.StudentListView.as_view()),
     path("student_details/<int:pk>", views.StudentDetailsView.as_view()),

]
