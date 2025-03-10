from django.shortcuts import render, HttpResponseRedirect
from django.views.generic import ListView, DetailView,  CreateView, DeleteView, UpdateView, View
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
    
    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        loaded_product = self.object
        request = self.request
        favorite_id = request.session.get("stored_products")
        context["is_favorite"] = favorite_id == str(loaded_product.id)
        return context

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
    
class AddFavourite(View):
    def get(self, request):
        favourites_products = request.session.get("stored_products", [])
        context = {}
        if favourites_products is None or len(favourites_products) == 0:
            context["has_products"] = False
        else:
            products = Product.objects.filter(id__in=favourites_products)
            context["products"] = products
            context["has_products"] = True
        return render(request, "products/favourites.html", context)
    
    def post(self, request):
        stored_products = request.session.get("stored_products", [])
        product_id = int(request.POST["product_id"])
        if product_id not in stored_products:
            stored_products.append(product_id)
        else:
            stored_products.remove(product_id)
        request.session["stored_products"] = stored_products
        return HttpResponseRedirect("/products/favourites/")
        
    def is_stored_post(self, request, product_id):
        stored_products = request.session.get("stored_products")
        if stored_products is None:
            is_favourite = False
        else:
            is_favourite = product_id in stored_products
        return is_favourite