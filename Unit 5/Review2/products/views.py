from django.shortcuts import render
from django.views.generic import ListView, DetailView,  CreateView, DeleteView, UpdateView
from .models import Category,Product
from .forms import ProductForm

# Create your views here.
class Home(ListView):
    template_name = "products/home.html"
    model = Product
    context_object_name = "products"

    def get_queryset(self):
        return Product.objects.filter(favourite = True)
    
class AllProducts(ListView):
    template_name = "products/all_products.html"
    model = Product
    context_object_name = "products"
    
class DetailProduct(DetailView):
    template_name = "products/detail_product.html"
    model = Product
    context_object_name = "product"

class AddProduct(CreateView):
    model = Product
    form_class = ProductForm
    template_name = "products/add_product.html"
    success_url = "/products/"
    
class  UpdateProduct(UpdateView):
    model = Product
    form_class = ProductForm
    template_name = "products/update_product.html"
    success_url = "/products/"
    
class DeleteProduct(DeleteView):
    model = Product
    form_class = ProductForm
    template_name = "products/delete_product.html"
    success_url = "products/"