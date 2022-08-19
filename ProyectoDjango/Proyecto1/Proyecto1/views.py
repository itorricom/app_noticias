from ast import Return
from re import template
from xml.dom.minidom import Document
from django.http import HttpResponse
import datetime
from django.template import Template, Context
from django.template.loader import get_template
from django.shortcuts import render

class Persona(object):
    
    def __init__(self, nombre, apellido):
        
        self.nombre=nombre
        
        self.apellido=apellido

def saludo(request): #Primera vista
    
    p1=Persona("Profesor Juan", "Diaz")
    
    #doc_externo=open("C:/Users/PC-3/Desktop/ProyectoDjango/Proyecto1/Proyecto1/plantillas/index.html")
   
    #nombre="Juan"
    
    #apellido="Diaz"
    
    temasDelCurso=["Plantillas", "Modelos", "Formularios", "Vistas", "Despliegue"]
    
    ahora=datetime.datetime.now()
    
    #doc_externo=open("C:/Users/PC-3/Desktop/ProyectoDjango/Proyecto1/Proyecto1/plantillas/index.html")
    
    #plt=Template(doc_externo.read())
   
    #doc_externo.close()
    
    #doc_externo=get_template('index.html')
    
    #ctx=Context({"nombre_persona":p1.nombre, "apellido_persona":p1.apellido})
   
    #documento=doc_externo.render({"nombre_persona":p1.nombre, "apellido_persona":p1.apellido})
    #documento=plt.render(ctx)
    
    return render(request, "index.html",{"nombre_persona":p1.nombre, "apellido_persona":p1.apellido})
    #doc_externo=get_template('index.html')
     
def cursoC(request):
    
    fecha_actual=datetime.datetime.now()
    
    return render(request, "CursoC.html", {"dameFecha":fecha_actual})
    
    #documento=doc_externo.render({"nombre_persona":p1.nombre, "apellido_persona":p1.apellido})
    
    return render(request, "index.html", {"nombre_persona":p1.nombre, "apellido_persona":p1.apellido})

def cursoCss(request):
    
    fecha_actual=datetime.datetime.now()
    
    return render(request, "CursoCss.html", {"dameFecha":fecha_actual})
    
    #documento=doc_externo.render({"nombre_persona":p1.nombre, "apellido_persona":p1.apellido})
    
    return render(request, "index.html", {"nombre_persona":p1.nombre, "apellido_persona":p1.apellido})

def despedida(request):
    
    return HttpResponse("Hasta la vista alumnos de django")
    
def dameFecha(request):
    
    fecha_actual=datetime.datetime.now()
    
    documento="""<html>
    <body>
    <h4>
    Fecha y hora actuales %s
    </h4>
    </body>
    </html>
    """ % fecha_actual
    
    return HttpResponse(documento)

def calculaEdad(request, edad, agno):
    
    #edadActual=18
    periodo=agno-2022
    edadFutura=edad+periodo
    documento="<html><body><h2>En el año %s tendras %s años" %(agno, edadFutura)
    
    return HttpResponse(documento)