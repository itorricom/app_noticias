from django.shortcuts import render, HttpResponse

# Create your views here.

def inicio(request):
    
    return render(request, "ProyectoWebApp/index.php")

def servicios(request):
    
    return render(request, "ProyectoWebApp/servicios.php")

def tienda(request):
    
    return render(request, "ProyectoWebApp/tienda.html")

def blog(request):
    
    return render(request, "ProyectoWebApp/blog.html")

def contacto(request):
    
    return render(request, "ProyectoWebApp/contacto.html")

def contacto(request):
    
    return render(request, "ProyectoWebApp/login.php")