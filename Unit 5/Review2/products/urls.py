from django.urls import path
from products import views

urlpatterns = [
    path('',views.Home.as_view()),
    path('products/',views.AllProducts.as_view(),name="product-list"),
    path('products/add/',views.AddProduct.as_view(),name="product-add"),
    path('products/<slug:slug>/update/',views.UpdateProduct.as_view(),name="product-update"),
    path('products/<slug:slug>/delete/',views.DeleteProduct.as_view(),name="product-delete"),

    path('products/<slug:slug>/',views.DetailProduct.as_view(),name="product-detail"),
]
