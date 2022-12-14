<!DOCTYPE html>
<html>
<head>

{% load static %}

<title>SERVICIOS</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/bootstrap.min.css' %}">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/font-awesome.min.css' %}">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/animate.css' %}">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/font.css' %}">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/li-scroller.css' %}">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/slick.css' %}">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/jquery.fancybox.css' %}">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/theme.css' %}">
<link rel="stylesheet" type="text/css" href="{% static 'ProyectoWebApp/css/style.css' %}">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<style type="text/css">
.mifecha {
   background-color: #999;
   padding: 3px;
   width: 110px;
   text-align: center;
   font-family:verdana, arial;
   font-size: 12pt;
}
.mifecha .ano{
   background-color: #339;
   padding: 2px;
   font-size: 100%;
   margin-bottom: 3px;
   color: #fff;
   letter-spacing: 3px;
   font-weight: bold;
}
.mifecha .dia{
   background-color: #99f;
   font-size: 300%;
   padding: 5px 8px;
   margin-bottom: 3px;
   font-weight: bold;
}
.mifecha .mes{
   background-color: #339;
   font-size: 80%;
   padding: 2px;
   color: #fff;
   font-weight: bold;
}
</style>
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_top">
          <div class="header_top_left">
            <ul class="top_nav">
              <li><a href="index.html">Inicio</a></li>
              <li><a href="#">Acerca de</a></li>
              <li><a href="pages/contact.html">Contactos</a></li>
            </ul>
          </div>
          <div class="header_top_right">
            <p>Friday, December 05, 2045</p>
			
			
			
          </div>
        </div>
      </div>
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="index.html" class="logo"><img src="{% static 'ProyectoWebApp/images/logo2.jpg' %}" alt=""></a></div>
          <div class="add_banner"><a href="#"><img src="{% static 'ProyectoWebApp/images/addbanner.jpg' %}" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.html"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Inicio</span></a></li>
          <li><a href="#">&Uacute;ltimas</a></li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Actualidad</a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Local</a></li>
              <li><a href="#">Departamental</a></li>
              <li><a href="#">Internacional</a></li>
            </ul>
          </li>
          <li><a href="#">Tendencias</a></li>
          <li><a href="#">Especiales</a></li>
          <li><a href="pages/contact.html">Necrologicoas</a></li>
          <li><a href="pages/404.html">Contacto</a></li>
        </ul>
      </div>
    </nav>
  </section>
  <section id="newsSection">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="latest_newsarea"> <span>&Uacute;ltimas Noticias</span>
          <ul id="ticker01" class="news_sticker">
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail3.jpg' %}" alt="">Mi Primera Noticia</a></li>
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail3.jpg' %}" alt="">Mi Segunda Noticia</a></li>
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail3.jpg' %}" alt="">Mi Tercera Noticia</a></li>
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail3.jpg' %}" alt="">Mi Cuarta Noticia</a></li>
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail3.jpg' %}" alt="">Mi Quinta Noticia</a></li>
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail3.jpg' %}" alt="">Mi Sexta Noticia</a></li>
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail3.jpg' %}" alt="">Mi Septima Noticia</a></li>
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail3.jpg' %}" alt="">Mi Octava Noticia</a></li>
            <li><a href="#"><img src="{% static 'ProyectoWebApp/images/news_thumbnail2.jpg' %}" alt="">Mi Novena Noticia</a></li>
          </ul>
          <div class="social_area">
            <ul class="social_nav">
              <li class="facebook"><a href="#"></a></li>
              <li class="twitter"><a href="#"></a></li>
              <li class="flickr"><a href="#"></a></li>
              <li class="pinterest"><a href="#"></a></li>
              <li class="googleplus"><a href="#"></a></li>
              <li class="vimeo"><a href="#"></a></li>
              <li class="youtube"><a href="#"></a></li>
              <li class="mail"><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="sliderSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="slick_slider">
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{% static 'ProyectoWebApp/images/slider1.jpg' %}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Universidad Adventista de Bolivia</a></h2>
              <p>iglesia adventista, iglesia adventista del septimo dia...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{% static 'ProyectoWebApp/images/slider2.jpg' %}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Universidad Adventista de Bolivia</a></h2>
              <p>Profesionales con valores</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{% static 'ProyectoWebApp/images/slider3.jpg' %}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">????ltimas Noticias de la Iglesia Adventista en Ucrania</a></h2>
              <p>El Director del grupo Hope Media de #Ucrania ?????????????????? comparte algunas de las ????ltimas #noticias de la Iglesia #Adventista en ese pa????s, tras la invasi????n por...</p>
            </div>
          </div>
          <div class="single_iteam"> <a href="pages/single_page.html"> <img src="{% static 'ProyectoWebApp/images/slider4.jpg' %}" alt=""></a>
            <div class="slider_article">
              <h2><a class="slider_tittle" href="pages/single_page.html">Destaques de reuni????n mundial adventista</a></h2>
              <p>Realizado ????ltimo concilio antes de la 61???? Asamblea de la Asociaci????n General. Vea las noticias adventistas mundiales.Vea m????s contenidos de la Iglesia Adventi...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>&Uacute;ltimas noticias</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">  M????s que ense????anza - Noticias - Adventistas 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post1.jpg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post2.jpg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title">M????s que ense????anza - Noticias - Adventistas 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post3.jpeg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post4.jpg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                </div>
              </li>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Negocios</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="{% static 'ProyectoWebApp/images/featured_img1.jpg' %}"> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">  M????s que ense????anza - Noticias - Adventistas 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">  M????s que ense????anza - Noticias - Adventistas 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title">  M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">
            <div class="fashion">
              <div class="single_post_content">
                <h2><span>Moda</span></h2>
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="{% static 'ProyectoWebApp/images/featured_img2.jpg' %}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="technology">
              <div class="single_post_content">
                <h2><span>Tecnologia</span></h2>
                <ul class="business_catgnav">
                  <li>
                    <figure class="bsbig_fig wow fadeInDown"> <a href="pages/single_page.html" class="featured_img"> <img alt="" src="{% static 'ProyectoWebApp/images/featured_img3.jpg' %}"> <span class="overlay"></span> </a>
                      <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                    </figure>
                  </li>
                </ul>
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> M????s que ense????anza - Noticias - Adventistas 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_post_content">
            <h2><span>fotografias</span></h2>
            <ul class="photograph_nav  wow fadeInDown">
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{% static 'ProyectoWebApp/images/photograph_img2.jpg' %}" title="Titulo de la fotografia 1"> <img src="{% static 'ProyectoWebApp/images/photograph_img2.jpg' %}" alt=""/></a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{% static 'ProyectoWebApp/images/photograph_img3.jpg' %}" title="Titulo de la fotografia 2"> <img src="{% static 'ProyectoWebApp/images/photograph_img3.jpg' %}" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{% static 'ProyectoWebApp/images/photograph_img4.jpg' %}" title="Titulo de la fotografia 3"> <img src="{% static 'ProyectoWebApp/images/photograph_img4.jpg' %}" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{% static 'ProyectoWebApp/images/photograph_img4.jpg' %}" title="Titulo de la fotografia 4"> <img src="{% static 'ProyectoWebApp/images/photograph_img4.jpg' %}" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{% static 'ProyectoWebApp/images/photograph_img2.jpg' %}" title="Titulo de la fotografia 5"> <img src="{% static 'ProyectoWebApp/images/photograph_img2.jpg' %}" alt=""/> </a> </figure>
                </div>
              </li>
              <li>
                <div class="photo_grid">
                  <figure class="effect-layla"> <a class="fancybox-buttons" data-fancybox-group="button" href="{% static 'ProyectoWebApp/images/photograph_img3.jpg' %}" title="Titulo de la fotografia 6"> <img src="{% static 'ProyectoWebApp/images/photograph_img3.jpg' %}" alt=""/> </a> </figure>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_post_content">
            <h2><span>Juegos</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav">
                <li>
                  <figure class="bsbig_fig  wow fadeInDown"> <a class="featured_img" href="pages/single_page.html"> <img src="{% static 'ProyectoWebApp/images/featured_img1.jpg' %}" alt=""> <span class="overlay"></span> </a>
                    <figcaption> <a href="pages/single_page.html">Proin rhoncus consequat nisl eu ornare mauris</a> </figcaption>
                    <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a phare...</p>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 1</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 2</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 3</a> </div>
                  </div>
                </li>
                <li>
                  <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                    <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 4</a> </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Publicaci&oacute;n Popular</span></h2>
            <ul class="spost_nav">
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 1</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 2</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 3</a> </div>
                </div>
              </li>
              <li>
                <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                  <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 4</a> </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Categoria</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
              <li role="presentation"><a href="#comments" aria-controls="messages" role="tab" data-toggle="tab">Comentarios</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Deportes</a></li>
                  <li class="cat-item"><a href="#">Moda</a></li>
                  <li class="cat-item"><a href="#">Negocios</a></li>
                  <li class="cat-item"><a href="#">Tecnologia</a></li>
                  <li class="cat-item"><a href="#">Juegos</a></li>
                  <li class="cat-item"><a href="#">Vida &amp; Estilo</a></li>
                  <li class="cat-item"><a href="#">Fotografia</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="http://www.youtube.com/embed/h5QWbURNEpA?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="comments">
                <ul class="spost_nav">
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 1</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 2</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img1.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 3</a> </div>
                    </div>
                  </li>
                  <li>
                    <div class="media wow fadeInDown"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="{% static 'ProyectoWebApp/images/post_img2.jpg' %}"> </a>
                      <div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Titulo de la fotografia 4</a> </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Clasificados</span></h2>
            <a class="sideAdd" href="#"><img src="images/add_img.jpg" alt=""></a> </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Archivo de Categorias</span></h2>
            <select class="catgArchive">
              <option>Seleccione Categoria</option>
              <option>Estilos de vida</option>
              <option>Sports</option>
              <option>Tecnologia</option>
            </select>
          </div>
          <div class="single_sidebar wow fadeInDown">
            <h2><span>Enlaces</span></h2>
            <ul>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Login</a></li>
              <li><a href="#">Vida &amp; Estilo</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInLeftBig">
            <h2>Im????genes de Flickr</h2>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInDown">
            <h2>Tag</h2>
            <ul class="tag_nav">
              <li><a href="#">Juegos</a></li>
              <li><a href="#">Deportes</a></li>
              <li><a href="#">Moda</a></li>
              <li><a href="#">Negocios</a></li>
              <li><a href="#">Vida &amp; Estilo</a></li>
              <li><a href="#">Tecnologia</a></li>
              <li><a href="#">Fotografias</a></li>
              <li><a href="#">Control Deslizante</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4">
          <div class="footer_widget wow fadeInRightBig">
            <h2>Contactos</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            <address>
            Perfect News,1238 S . 123 St.Suite 25 Town City 3333,USA Phone: 123-326-789 Fax: 123-546-567
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Derechos Reservados &copy; 2022 <a href="index.html">Nuevas Noticias</a></p>
      <p class="developer"><FONT COLOR="white">Desarrollado por  GRUPO NRO. 2 "PYTHON"</font></p>
    </div>
  </footer>
</div>
<script src="{% static 'ProyectoWebApp/js/jquery.min.js' %}"></script> 
<script src="{% static 'ProyectoWebApp/js/wow.min.js' %}"></script> 
<script src="{% static 'ProyectoWebApp/js/bootstrap.min.js' %}"></script> 
<script src="{% static 'ProyectoWebApp/js/slick.min.js' %}"></script> 
<script src="{% static 'ProyectoWebApp/js/jquery.li-scroller.1.0.js' %}"></script> 
<script src="{% static 'ProyectoWebApp/js/jquery.newsTicker.min.js' %}"></script> 
<script src="{% static 'ProyectoWebApp/js/jquery.fancybox.pack.js' %}"></script> 
<script src="{% static 'ProyectoWebApp/js/custom.js' %}"></script>
</body>
</html>