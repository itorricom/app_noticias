<style>
  .aEnlaceCustom > small {
    font-size: 15px;
    font-weight: 500;
    color: #808080;
    cursor: pointer;
  }  
  .aEnlaceCustom > small:hover {
    color: #e30613 !important;
    text-decoration: underline !important;
  }
  /* table.one {
    border-collapse:collapse;
    width:100%;
    border-spacing:10px;
  } */
  tr.color {
    background-color:#6F7072;
  }
  td.color2 {
    border: #00b3ba 2px solid;
    background-color:#00b3ba;
    border-width:5px;
    padding:1px;
  }
  td.colorCA {
    border: #00b3ba 2px solid;
    background-color:#FFFFFF;
    border-width:5px;
    padding:1px;
  }
  td.color22 {
    border:#00b3ba 2px solid;
    background-color:#00b3ba;
    border-width:5px;
    padding:1px;
  }
  input:required:invalid {
    border: 1px solid red;
  }
  input:required:valid {
    border: 1px solid #00800000;
  }
  select:required:invalid {
    border: 1px solid red;
  }
  select:required:valid {
    border: 1px solid #00800000;
  }
  .form-group {
    padding-left: 8px;
  }
  .box2{
    display: inline-block;
    /* width: 190px; */
    margin: 3px;
  }
</style>
<script type="text/javascript">
    function valor(a)
    {
        $("#titulo").text(a);
    }
    function clearTxt() 
    {
      document.getElementById('usuario').value    = '';
      document.getElementById('clave').value      = '';
    }
</script>

<html onload="clearTxt();">
  <head>
      <meta charset="utf-8"/>
      <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
      <meta content="width=device-width, initial-scale=1" name="viewport"/>
      <title>iGob 24/7</title>
      <link href="../../../../structureIgob/images/favicon.png" rel="icon">
      <!-- <script type="text/javascript" src="../../../libs/js/jquery-1.11.2.min.js"></script> -->
      <script src="../../../../structureIgob/js/jquery-3.3.1.min.js"></script>
  
      <script type="text/javascript" src="../../../controller/autenticacion/config.js"></script>  
      <script type="text/javascript" src="../../../libs/js/aes.js"></script>       
      <script type="text/javascript" src="../../../libs/login/login.js"></script>
      <!-- <link rel="stylesheet" href="../../../libs/css_one/bootstrap.min.css"/> -->
      <!-- <link rel="stylesheet" href="../../../libs/css_one/styleinspinia.min.css"/> -->
      <link rel="stylesheet" href="../../../libs/css/sweetalert.min.css"/>

      <link rel="stylesheet" href="../../../../structureIgob/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../../../structureIgob/fonts/icofont/icofont.css">
      <link rel="stylesheet" href="../../../../structureIgob/css/login/login.css">
      <style>
          .ng-table tr.colorInactivo td { background-color: #F9EFE0; font-weight: bold; }
          .ng-table tr.colorBloqueado td { background-color: #D9E9F7; font-weight: bold; }
          .offNav{
            display: none;
          }
          .onNav{
            display: block !important;
          }
          .fondo_menu
          {
             position: relative;
             height: 100%;
             width: 200px;
             background:#39AB6F;
          }
      </style>
  </head>
  <body> 
    <script type="text/javascript">    
     
      window.onbeforeunload = closingCode;
    
    function closingCode(){
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
        console.log('User signed out.');
      });
    }


    $(document).ready(function()
    {
      try{
        validarUrlSession();
      }catch(e){} 
      document.getElementById('clave').type = 'password';
      var u  = $("#usuario").val();
      var p  = $("#clave").val();
      var cke= document.cookie;
      var v = 2;
      
      if(cke == "" && u.length == 0 && p.length == 0)
      {
        $("#btnIngresar").prop("disabled",true);
        $("#name-form-alert").css("display","block");
        $("#pass-form-alert").css("display","block");
        $("#usuario").css({'border': '1px solid red'});
        $("#clave").css({'border': '1px solid red'});
        $("#mC").css("display","none");
      }


      $("#usuario").keyup(function()
      {
          u=$("#usuario").val();
          p=$("#clave").val();
          if(u.length==0)
          {
            $("#name-form-alert").css("display","block");
            $("#namelengthMin-form-alert").css("display","none");
            $("#namelengthMax-form-alert").css("display","none");
            $("#btnIngresar").prop("disabled",true);
            $("#usuario").css({'border': '1px solid red'});
            $("#btnIngresar").css({'border': 'none'});
          }
          else
          {
            $("#name-form-alert").css("display","none");
            $("#namelengthMin-form-alert").css("display","none");
            $("#namelengthMax-form-alert").css("display","none");



            $("#usuario").css({'border': '1px solid green'});
            if (p.length==0)
            {
              $("#btnIngresar").prop("disabled",true);
            }
            else
            {
              $("#btnIngresar").prop("disabled",false);
              $("#btnIngresar").css({'border': '2px solid rgb(60, 52, 27)'});  
              //$("#btnIngresar").on("click",autenticacionNodeR);              
            }
          }
      });


      $("#clave").keyup(function()
      {
        var value = $(this).val();


          u=$("#usuario").val();
          p=$("#clave").val();

          if(p.length==0)
          {
            $("#pass-form-alert").css("display","block");
            $("#passlengthMin-form-alert").css("display","none");
            $("#passlengthMax-form-alert").css("display","none");
            $("#btnIngresar").prop("disabled",true);
            $("#clave").css({'border': '1px solid red'});
            $("#btnIngresar").css({'border': 'none'});
            $("#mC").css("display","none");
            $("#mC").val(1);

            $('#mC').html('Mostrar Contraseña');
            $("#mC").css({'color': 'green'});
          }
          else
          {
            $("#pass-form-alert").css("display","none");
            $("#passlengthMin-form-alert").css("display","none");
            $("#passlengthMax-form-alert").css("display","none");
            $("#clave").css({'border': '1px solid green'});
            $("#mC").css("display","block");

            if (u.length==0)
            {
              $("#btnIngresar").prop("disabled",true);
            }
            else
            {
              $("#btnIngresar").prop("disabled",false);
              $("#btnIngresar").css({'border': '2px solid rgb(60, 52, 27)'});
              //$("#btnIngresar").on("click",autenticacionNodeR);
            }
          }
      });
    });    
  
    function RFunction()
    {
      document.getElementById('clave').type = 'text';
    }

    function RFunction1()
    {
      document.getElementById('clave').type = 'password';      
    }
    function validarUrlSession(){
        var URLactual   =   window.location;
        var origenurl   =   URLactual.href;
        var urlSessionApp   =   window.location.href;
        if(urlSessionApp.indexOf('modulo=') != -1 && urlSessionApp.indexOf('&oid=') != -1 &&  urlSessionApp.split('?').length > 1){
            var splitSessionApp =   urlSessionApp.split('?');
            var splitSessionApp_ =   splitSessionApp[1].split('&');
            var smodulo =   splitSessionApp_[0].split('=');
            var soid =   splitSessionApp_[1].split('=');
            var soidtxt = soid[1];
            soidtxt = soidtxt.trim();
            if(smodulo && soid){
                if(smodulo[1] === 'ae' || smodulo[1] === 'pc' || smodulo[1] === 'dp' || smodulo[1] === 'at'){
                  var loginapp    = new loginNodeApp();
                  loginapp.soid   = soidtxt;
                  loginapp.iniciarLoginApp(function(resp){
                    //console.log("resp:", resp);
                    var jsonObj = [];
                    jsonObj.push(JSON.parse(resp));
                    sessionStorage.setItem("Idioma", "C");
                    sessionStorage.setItem("sessionAPP", smodulo[1]);
                    sessionStorage.setItem("autenticacion", JSON.stringify(jsonObj));
                    var sArrayData   = sessionStorage.getItem("autenticacion");
                    sessionStorage.setItem('TOKEN_API', jsonObj[0].token);
                    sessionStorage.setItem("autenticacion", JSON.stringify(jsonObj));
                    window.location.href = "../index.html";
                  });
                }
            }                
        }        
    }
    ////////////////LOGIN GOOGLE////////////////

    function signOutGoogle() {
      var auth2 = gapi.auth2.getAuthInstance();
      console.log("Auth2....",auth2);
      auth2.signOut().then(function () {
        console.log('User signed out....!!!');
      });
      auth2.disconnect();
    }

    var GoogleAuth;
    function onLoadFunction() {
      gapi.client.init({
          'clientId': '52027467967-ir59vlp1kdi501pco8gjgeh2cfoe1vds.apps.googleusercontent.com',
          'scope': 'https://www.googleapis.com/auth/drive.metadata.readonly',
          'discoveryDocs': ['https://www.googleapis.com/discovery/v1/apis/drive/v3/rest']
      }).then(function () {
          GoogleAuth = gapi.auth2.getAuthInstance();
      });
    }   

    function autenticacionGoogle()
    {
      var gmail = {
        username:"",
        email:""
      }
      var params = {
        'clientid' : '52027467967-ir59vlp1kdi501pco8gjgeh2cfoe1vds.apps.googleusercontent.com',
        'cookiepolicy':'single_host_origin',
        'callback':function(result){  
          if(result['status']['signed_in']){
            var request = gapi.client.plus.people.get(
              {
                'userId':'me'
              }
            );
            request.execute(function(resp){
            });
          }
        },
        'approvalprompt': 'force',
        'scope': 'https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/user.emails.read'
      }
      gapi.auth.signIn(params);
    }

    var GoogleAuth;
    var SCOPE = 'https://www.googleapis.com/auth/drive.metadata.readonly';
    function handleClientLoad() {
      gapi.load('client:auth2', initClient);
    }
    function initClient() {
      var discoveryUrl = 'https://www.googleapis.com/discovery/v1/apis/drive/v3/rest';
      gapi.client.init({
        'clientId': '52027467967-ir59vlp1kdi501pco8gjgeh2cfoe1vds.apps.googleusercontent.com',
        'discoveryDocs': [discoveryUrl],
        'scope': SCOPE
      }).then(function () {
        GoogleAuth = gapi.auth2.getAuthInstance();
        GoogleAuth.isSignedIn.listen(updateSigninStatus);
        var user = GoogleAuth.currentUser.get();
        setSigninStatus();
        $('#btnIngresarGoogle').click(function () {
          handleAuthClick();
        });
      });
    }

    function handleAuthClick() {
      if (GoogleAuth.isSignedIn.get()) {
        GoogleAuth.signOut();
      } else {
        GoogleAuth.signIn();
      }
    }
    function revokeAccess() {
      GoogleAuth.disconnect();
    }

    function setSigninStatus() {
      var user = GoogleAuth.currentUser.get();
      //console.log("AUTORIZACION DE USUARIO :", user);
      var isAuthorized = user.hasGrantedScopes(SCOPE);
      if (isAuthorized) {
        var j=1;
        //////////////////////////////
        var count = Object.keys(user).length;
        //console.log("coooooooo",count);
        for(var k=0;k<count;k++){
          //console.log("kkkkk",k,Object.entries(user)[k][1]);
          var json = Object.entries(user)[k][1];
          var str = JSON.stringify(json);
          var first = str.charAt(0);
            if(first == '{')
            {
              if(str.includes('id_token')){
              }
              else{
                var json_1 = JSON.parse(str);
                var result = [];
                for(var i in json_1){
                  if(json[i].includes('@gmail.com')){
                      var correo_google = json_1[i];
                  }
                }         
              }
            }
        }
        
        //////////////////////////////
        //var scorreo = user.it.Tt;
        var scorreo = correo_google;
        localStorage.setItem('gCorreo', scorreo);
        scorreo = ((typeof(scorreo) == 'undefined' || scorreo == null) ? '' : scorreo);
        if (scorreo != '') {
          autenticacionFacebokGoogle(scorreo);              
        }
        else{
        }             
      } else {
      }
    }

    function updateSigninStatus() {
      setSigninStatus();
    }
    ///////////////END LOGIN GOOGGLE////////////

    ////////////////LOGIN FACEBOOK////////////////
    $(function() {

      var app_id = '830534584542482';
      var scopes = 'email';
      var btn_login = '<a href="#" id="login" class="btn btn-primary">Iniciar sesión</a>';
      var div_session = "<div id='facebook-session'>"+
                "<strong></strong>"+
                "<img>"+
                "<a href='#' id='logout' class='btn btn-danger'>Cerrar sesión</a>"+
                "</div>";

      window.fbAsyncInit = function() {

        FB.init({
          appId           : app_id,
          autoLogAppEvents: true,
          status          : true,
          cookie          : true, 
          xfbml           : true, 
          version         : 'v2.1'
        });
        FB.getLoginStatus(function(response) {
          statusChangeCallback(response, function() {});
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));

      var statusChangeCallback = function(response, callback) {
        if (response.status === 'connected') {
            getFacebookData();
        } else {
          callback(false);
        }
      }

      var checkLoginState = function(callback) {
        FB.getLoginStatus(function(response) {
            callback(response);
        });
      }

      var getFacebookData =  function() {
        FB.api('/me', { locale: 'en_US', fields: 'name, email' }, function(response) {
          //console.log("DATOS FACEBOOK...", response);
          //////////////////////////////////////////////
          autenticacionFacebokGoogle(response.email);
          //////////////////////////////////////////////
          /*
          $('#facebook-session img').attr('src','http://graph.facebook.com/'+response.id+'/picture?type=large');
          */
        });
      }

      var facebookLogin = function() {
        checkLoginState(function(data) {
          if (data.status !== 'connected') {
            FB.login(function(response) {
              if (response.status === 'connected')
                getFacebookData();
            }, {scope: scopes});
          }
        })
      }

      var facebookLogout = function() {
        checkLoginState(function(data) {
          if (data.status === 'connected') {
          FB.logout(function(response) {
            $('#facebook-session').before(btn_login);
            $('#facebook-session').remove();
          })
        }
        })
      }

      $(document).on('click', '#login', function(e) {
        e.preventDefault();

        facebookLogin();
      })

      $(document).on('click', '#logout', function(e) {
        e.preventDefault();

        if (confirm("¿Está seguro?"))
          facebookLogout();
        else 
          return false;
      })
    });
    ///////////////END LOGIN FACEBOOK/////////////

    function autenticacionNodeR()
    {
      var sUsuario        = $("#usuario").val();
      var sClave          = $("#clave").val();
      var objLogin        = new loginNode();
      objLogin.usuario    =  sUsuario;
      objLogin.pin        =  sClave;

      objLogin.iniciarLogin(function(resultado)
      {
        //console.log(resultado,999);
          response = JSON.parse(resultado);
          if (!response.error) 
          {
              $.unblockUI();
                var aRespuesta    =   new Array();
                var sNroRegistros =   0;
                aRespuesta.push(response);
                sNroRegistros     =   Object.keys(aRespuesta[0]).length;
                if(sNroRegistros > 0)
                {
                    var sError  = ((typeof(aRespuesta[0].error) == 'undefined' || aRespuesta[0].error == null) ? ""   : aRespuesta[0].error);
                    if(sError && sError != "")
                    {
                        sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                    }
                    else
                    {
                      var sJson = aRespuesta[0];
                      //console.log(sJson);

                      //console.log(aRespuesta[0].dtspsl_estado_activacion);
                      if (aRespuesta[0].dtspsl_estado_activacion=="DESBLOQUEADO"){
                        
                        if(aRespuesta[0].dtspsl_activaciond.trim()   !=   ""  &&  aRespuesta[0].dtspsl_activacionf.trim()    !=   "")
                        {
                            sessionStorage.setItem('TOKEN_API', response.token);
                            sessionStorage.setItem("autenticacion", JSON.stringify(aRespuesta));
                            window.location.href = "../index.html";
                        }
                        else
                        {
                            var sMensaje    =   "por primera y única vez,";
                            sweetAlert('', "Estimado usuario. Active su cuenta aproximándose " + sMensaje +" a la plataforma más cercana, donde validarán sus datos y activarán su cuenta. Otorgándole acceso a los servicios en línea del GAMLP.", 'warning');
                        }  
                      } else {
                        sweetAlert('', "Estimado usuario. Su cuenta fue Bloqueada por razones administrativas, se ruega pasar por nuestras plataformas de atención Ciudadana o llamar al numero 800 13 5555", 'warning');

                      }
                      
                    }
                }
                else
                {
                  sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                }
          }
          else
          {
            if(response.error.code == 703)
            {
                sweetAlert("", response.error.message, "warning");
            }            
            if(response.error.code == 603)
            {
                sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
            }
            else if(response.error.code == 602)
            {
                sweetAlert("", "Usuario no registrado", "warning");
            }
          }
      });
    }

    function autenticacionFacebokGoogle(scorreo){
      var objLogin    = new loginNode();
      objLogin.correo = scorreo;
      objLogin.iniciarLoginFG(function(resultado){
          response = JSON.parse(resultado);
          //console.log("reeeee",response);
          if (!response.error) 
          {
              $.unblockUI();
                var aRespuesta    =   new Array();
                var sNroRegistros =   0;

                //console.log("RESPUESTA GOOGLEGGGGGG :", response);


                aRespuesta.push(response);


                //console.log("RESPUESTA ARRAY 1: ", aRespuesta);
                //console.log("RESPUESTA ARRAY 2: ", Object.keys(aRespuesta[0]).length);

                sNroRegistros     =   Object.keys(aRespuesta[0]).length;

                if(sNroRegistros > 0)
                {
                    var sError  = ((typeof(aRespuesta[0].error) == 'undefined' || aRespuesta[0].error == null) ? ""   : aRespuesta[0].error);
                    if(sError && sError != "")
                    {
                        sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                    }
                    else
                    {
                      var sJson = aRespuesta[0];

                      //console.log("RESPUESTA ARRAY 2: ", aRespuesta[0]);

                      if (aRespuesta[0].dtspsl_estado_activacion=="DESBLOQUEADO"){                        
                        if(aRespuesta[0].dtspsl_activaciond.trim()   !=   ""  &&  aRespuesta[0].dtspsl_activacionf.trim()    !=   "")
                        {
                            sessionStorage.setItem('TOKEN_API', response.token);
                            sessionStorage.setItem("autenticacion", JSON.stringify(aRespuesta));
                            //console.log("SERVICIO 7777 :", JSON.stringify(aRespuesta));
                            window.location.href = "../index.html";
                        }
                        else
                        {
                            var sMensaje    =   "por primera y única vez,";
                            sweetAlert('', "Estimado usuario. Active su cuenta aproximándose " + sMensaje +" a la plataforma más cercana, donde validarán sus datos y activarán su cuenta. Otorgándole acceso a los servicios en línea del GAMLP.", 'warning');
                        }  
                      } else {
                        sweetAlert('', "Estimado usuario. Su cuenta fue Bloqueada por razones administrativas, se ruega pasar por nuestras plataformas de atención Ciudadana o llamar al numero 800 13 5555", 'warning');
                      }                      
                    }
                }
                else
                {
                  sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                }
          }
          else
          {
            if(response.error.code == 703)
            {
                sweetAlert("", response.error.message, "warning");
            }            
            if(response.error.code == 603)
            {
                //sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
              /////////////////////////
              swal({   
                  title: "El correo no esta registrado!!!",   
                  text: "¿Desea registrarse?",   
                  type: "warning",   
                  showCancelButton: true,   
                  confirmButtonColor: "#3CECC4",   
                  confirmButtonText: "SI, REGISTRARME",
                  cancelButtonText: "CANCELAR", 
                  closeOnConfirm: false 
              },function(isConfirm){
                  if (isConfirm) {
                    window.location.href = "../partials/registro_gmail.html#/registro";
                  } else {
                    signOutGoogle();
                  }
              });
              //////////////////////////
            }
            else if(response.error.code == 602)
            { 
              //setTimeout(sweetAlert("", "Usuario no registrado", "warning"), 5000);
              //setTimeout(window.location.href = "../partials/registro_gmail.html#/registro", 10000);
              /////////////////////////
              swal({   
                  title: "El correo no esta registrado!!!",   
                  text: "¿Desea registrarse?",   
                  type: "warning",   
                  showCancelButton: true,   
                  confirmButtonColor: "#3CECC4",   
                  confirmButtonText: "SI, REGISTRARME",
                  cancelButtonText: "CANCELAR", 
                  closeOnConfirm: false 
              },function(isConfirm){
                  if (isConfirm) {
                    window.location.href = "../partials/registro_gmail.html#/registro";
                  } else {
                    signOutGoogle();
                  }
              });
              //////////////////////////
            }
          }
      });
    }
    /*
    ).then(function(isConfirm) {
                if (isConfirm) {
                  window.location.href = "../partials/registro_gmail.html#/registro";
                } else {
                  signOutGoogle();
                }
              });
    */

    if(jsonURLS){
      var enviocorreo = jsonURLS.SERVICE_ENVIO_CORREO;
    }    


    </script>  
    
    <script type="text/javascript">    
    $(document).ready(function()
    {
      try{
        validarUrlSession();
      }catch(e){} 
      document.getElementById('clave').type = 'password';
      var u  = $("#usuario").val();
      var p  = $("#clave").val();
      var cke= document.cookie;
      var v = 2;
      
      if(cke == "" && u.length == 0 && p.length == 0)
      {
        $("#btnIngresar").prop("disabled",true);
        $("#name-form-alert").css("display","block");
        $("#pass-form-alert").css("display","block");
        $("#usuario").css({'border': '1px solid red'});
        $("#clave").css({'border': '1px solid red'});
        $("#mC").css("display","none");
      }


      $("#usuario").keyup(function()
      {
          u=$("#usuario").val();
          p=$("#clave").val();
          if(u.length==0)
          {
            $("#name-form-alert").css("display","block");
            $("#namelengthMin-form-alert").css("display","none");
            $("#namelengthMax-form-alert").css("display","none");
            $("#btnIngresar").prop("disabled",true);
            $("#usuario").css({'border': '1px solid red'});
            $("#btnIngresar").css({'border': 'none'});
          }
          else
          {
            $("#name-form-alert").css("display","none");
            $("#namelengthMin-form-alert").css("display","none");
            $("#namelengthMax-form-alert").css("display","none");



            $("#usuario").css({'border': '1px solid green'});
            if (p.length==0)
            {
              $("#btnIngresar").prop("disabled",true);
            }
            else
            {
              $("#btnIngresar").prop("disabled",false);
              $("#btnIngresar").css({'border': '2px solid rgb(60, 52, 27)'});  
              //$("#btnIngresar").on("click",autenticacionNodeR);              
            }
          }
      });


      $("#clave").keyup(function()
      {
        var value = $(this).val();


          u=$("#usuario").val();
          p=$("#clave").val();

          if(p.length==0)
          {
            $("#pass-form-alert").css("display","block");
            $("#passlengthMin-form-alert").css("display","none");
            $("#passlengthMax-form-alert").css("display","none");
            $("#btnIngresar").prop("disabled",true);
            $("#clave").css({'border': '1px solid red'});
            $("#btnIngresar").css({'border': 'none'});
            $("#mC").css("display","none");
            $("#mC").val(1);

            $('#mC').html('Mostrar Contraseña');
            $("#mC").css({'color': 'green'});
          }
          else
          {
            $("#pass-form-alert").css("display","none");
            $("#passlengthMin-form-alert").css("display","none");
            $("#passlengthMax-form-alert").css("display","none");
            $("#clave").css({'border': '1px solid green'});
            $("#mC").css("display","block");

            if (u.length==0)
            {
              $("#btnIngresar").prop("disabled",true);
            }
            else
            {
              $("#btnIngresar").prop("disabled",false);
              $("#btnIngresar").css({'border': '2px solid rgb(60, 52, 27)'});
              //$("#btnIngresar").on("click",autenticacionNodeR);
            }
          }
      });
    });    
  
    function RFunction()
    {
      document.getElementById('clave').type = 'text';
    }

    function RFunction1()
    {
      document.getElementById('clave').type = 'password';      
    }
    function validarUrlSession(){
        var URLactual   =   window.location;
        var origenurl   =   URLactual.href;
        var urlSessionApp   =   window.location.href;
        if(urlSessionApp.indexOf('modulo=') != -1 && urlSessionApp.indexOf('&oid=') != -1 &&  urlSessionApp.split('?').length > 1){
            var splitSessionApp =   urlSessionApp.split('?');
            var splitSessionApp_ =   splitSessionApp[1].split('&');
            var smodulo =   splitSessionApp_[0].split('=');
            var soid =   splitSessionApp_[1].split('=');
            var soidtxt = soid[1];
            soidtxt = soidtxt.trim();
            if(smodulo && soid){
                if(smodulo[1] === 'ae' || smodulo[1] === 'pc' || smodulo[1] === 'dp' || smodulo[1] === 'at'){
                  var loginapp    = new loginNodeApp();
                  loginapp.soid   = soidtxt;
                  loginapp.iniciarLoginApp(function(resp){
                    console.log("resp:", resp);
                    var jsonObj = [];
                    jsonObj.push(JSON.parse(resp));
                    sessionStorage.setItem("Idioma", "C");
                    sessionStorage.setItem("sessionAPP", smodulo[1]);
                    sessionStorage.setItem("autenticacion", JSON.stringify(jsonObj));
                    var sArrayData   = sessionStorage.getItem("autenticacion");
                    sessionStorage.setItem('TOKEN_API', jsonObj[0].token);
                    sessionStorage.setItem("autenticacion", JSON.stringify(jsonObj));
                    window.location.href = "../index.html";
                  });
                }
            }                
        }        
    }
    function autenticacionNodeR()
    {
      var sUsuario        = $("#usuario").val();
      var sClave          = $("#clave").val();
      var objLogin        = new loginNode();
      objLogin.usuario    =  sUsuario;
      objLogin.pin        =  sClave;

      objLogin.iniciarLogin(function(resultado)
      {
        console.log(resultado,999);
          response = JSON.parse(resultado);
          if (!response.error) 
          {
              $.unblockUI();
                var aRespuesta    =   new Array();
                var sNroRegistros =   0;
                aRespuesta.push(response);
                sNroRegistros     =   Object.keys(aRespuesta[0]).length;
                if(sNroRegistros > 0)
                {
                    var sError  = ((typeof(aRespuesta[0].error) == 'undefined' || aRespuesta[0].error == null) ? ""   : aRespuesta[0].error);
                    if(sError && sError != "")
                    {
                        sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                    }
                    else
                    {
                      var sJson = aRespuesta[0];
                      console.log(sJson);

                      console.log(aRespuesta[0].dtspsl_estado_activacion);
                      if (aRespuesta[0].dtspsl_estado_activacion=="DESBLOQUEADO"){
                        
                        if(aRespuesta[0].dtspsl_activaciond.trim()   !=   ""  &&  aRespuesta[0].dtspsl_activacionf.trim()    !=   "")
                        {
                            sessionStorage.setItem('TOKEN_API', response.token);
                            sessionStorage.setItem("autenticacion", JSON.stringify(aRespuesta));
                            window.location.href = "../index.html";
                        }
                        else
                        {
                            var sMensaje    =   "por primera y única vez,";
                            sweetAlert('', "Estimado usuario. Active su cuenta aproximándose " + sMensaje +" a la plataforma más cercana, donde validarán sus datos y activarán su cuenta. Otorgándole acceso a los servicios en línea del GAMLP.", 'warning');
                        }  
                      } else {
                        sweetAlert('', "Estimado usuario. Su cuenta fue Bloqueada por razones administrativas, se ruega pasar por nuestras plataformas de atención Ciudadana o llamar al numero 800 13 5555", 'warning');

                      }
                      
                    }
                }
                else
                {
                  sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                }
          }
          else
          {
            if(response.error.code == 703)
            {
                sweetAlert("", response.error.message, "warning");
            }            
            if(response.error.code == 603)
            {
                sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
            }
            else if(response.error.code == 602)
            {
                sweetAlert("", "Usuario no registrado", "warning");
            }
          }
      });
    }

    if(jsonURLS){
      var enviocorreo = jsonURLS.SERVICE_ENVIO_CORREO;
    }    

    </script>

    <script>
      var numero = "";
      var captchaerror="";
      if(sessionStorage.getItem("Idioma") != null) 
      {
        var idioma = sessionStorage.getItem("Idioma");
      }
      else 
      {
        sessionStorage.setItem("Idioma", "C");
        idioma = sessionStorage.getItem("Idioma", "C");
      }
      var verTitulos = new idiomaPlat();
      verTitulos.idioma = sessionStorage.getItem("Idioma");
      var elArray = new Array();
      verTitulos.obtenerTitulos(function(resultado)
      {
          a = JSON.parse(resultado);
          $.each( a.success, function( key, value ) 
          {
              elArray[value.idm_label] = value.idm_contenido;
          });
      });
      function autenticacionNode()
      {
          var sUsuario        = $("#usuario").val();
          var sClave          = $("#clave").val();
          

          var objLogin        = new loginNode();
          objLogin.usuario    =  sUsuario;
          objLogin.pin        =  sClave;
          objLogin.iniciarLogin(function(resultado)
          {
              response = JSON.parse(resultado);
              if (!response.error) 
              {
                  $.unblockUI();
                    var aRespuesta    =   new Array();
                    var sNroRegistros =   0;
                    aRespuesta.push(response);
                    sNroRegistros     =   Object.keys(aRespuesta[0]).length;
                    if(sNroRegistros > 0)
                    {
                        var sError  = ((typeof(aRespuesta[0].error) == 'undefined' || aRespuesta[0].error == null) ? ""   : aRespuesta[0].error);
                        if(sError && sError != "")
                        {
                            sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                        }
                        else
                        {
                          var sJson = aRespuesta[0];
                          if(aRespuesta[0].dtspsl_activaciond.trim()   !=   ""  &&  aRespuesta[0].dtspsl_activacionf.trim()    !=   "")
                          {
                              sessionStorage.setItem("autenticacion", JSON.stringify(aRespuesta));
                              window.location.href = "../index.html";
                          }
                          else
                          {
                              var sMensaje    =   "por primera y única vez,";
                              sweetAlert('', "Estimado usuario. Active su cuenta aproximándose " + sMensaje +" a la plataforma más cercana, donde validarán sus datos y activarán su cuenta. Otorgándole acceso a los servicios en línea del GAMLP.", 'warning');
                          }
                        }
                    }
                    else
                    {
                      sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                    }
              }
              else
              {
                if(response.error.code == 603)
                {
                    sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
                }
                else if(response.error.code == 602)
                {
                    sweetAlert("", "Usuario no registrado", "warning");
                }
              }
          });
      }
      function resetPassword()
      {
        var captch  = $("#resultadoC").val();
        var id = numero;
        var verCaptcha = new captcha();
        verCaptcha.identificador = id;
        verCaptcha.respuesta = captch;
        verCaptcha.verificarCaptcha(function(resultado)
        {
          json = JSON.parse(resultado);
          if(json.success[0] == undefined)
          {
              sweetAlert("", "Error en el captcha intentar de nuevo por favor", "warning");
              obtCaptha();
          }
          else
          {
              resetPassword2();
          }
        });
      }
      function getlimpiareRROR()
      {
        var usuario = $("#prsCI").val();
        var correo = $("#prsCorreo").val();
        var captch  = $("#resultadoC").val();
        if(usuario!=""&&correo != "" && captch != "")
        {
          document.getElementById("EnvRes").disabled = false;
        }
        else
        {
          document.getElementById("EnvRes").disabled = true;
        }
      }
	  
      function resetPassword2()
      {
        var sUser   = $("#prsCI").val();
        var sEmail  = $("#prsCorreo").val();
        var objPassword = new password();
        objPassword.usuario = sUser;
        objPassword.correo  = sEmail;
        objPassword.resetPass(function(resultado)
        {
            response = JSON.parse(resultado);
            if (!response.error) {
              var aRespuesta    =   new Array();
              var sNroRegistros =   0;
              aRespuesta.push(response);
              sNroRegistros     =   Object.keys(aRespuesta[0]).length;
              if(sNroRegistros > 0) {
                var sError  = ((typeof(aRespuesta[0].error) == 'undefined' || aRespuesta[0].error == null) ? ""   : aRespuesta[0].error);
                if(sError && sError != "") {
                    sweetAlert("", "Error en usuario y/o e-mail vuelva a intentarlo por favor", "warning");
                } else {
                    var sJson = aRespuesta[0];
                    if(aRespuesta[0].success != "") {
                      var scorreo = document.getElementById("prsCorreo").value;
                      document.getElementById("prsCI").value="";
                      document.getElementById("prsCorreo").value="";
                      sweetAlert("RESTAURACIÓN EXITOSA", "Estimado Ciudadano, revise la bandeja de su correo electrónico.  " + scorreo, "success");
                      /*
                      var npin=aRespuesta[0].success.PIN;
                      var ciudadano="";
                      var mensajeCorreo = "_Estimado_Ciudadano_su_Nuevo_PIN_es_:_<b>_" + npin + "_</b>";
                      var vAsunto ="Restauración_de_PIN_24/7";
                      var vMensaje = "";
                      var email=sEmail;
                      var sMensajeValidacion = mensajeCorreo.replace(/ /g, "_");
                      var parametros = {
                          "cuerpo" : sMensajeValidacion,
                          "asunto" : vAsunto,
                          "para" : email,
                          "ciudadano" : ciudadano,
                          "mensaje": vMensaje
                      }
                      $.ajax({ 
                          data: parametros, 
                          url: enviocorreo,//'http://200.105.139.183:9090/smsemail/email/mail.php',
                          type: 'get', 
                          beforeSend: function (){}, 
                          success: function (response){}
                      });
                      */
                    } else {
                        var sMensaje    = "por primera y única vez,";
                        sweetAlert('', "Estimado usuario. Active su cuenta aproximándose " + sMensaje +" a la plataforma más cercana, donde validarán sus datos y activarán su cuenta. Otorgándole acceso a los servicios en línea del GAMLP.", 'warning');
                    }
                }
              } else {
                sweetAlert("", "Error en usuario y/o contraseña vuelva a intentarlo por favor", "warning");
              }
            } else {
                if(response.error.code == 603){
                    sweetAlert("", "Error en usuario y/o email vuelva a intentarlo por favor", "warning");
                }
            }
        });
      }
	  
      function obtCaptha()
      {
        var objCaptcha = new captcha();
        objCaptcha.obtcaptcha(function(resultado)
        {
          json = JSON.parse(resultado);
          partes = json.success[0].sp_captcha_porx1.split(',');
          numero = partes[0].substring(1);
          i1=(partes[2]+ "," + partes[3]);
          i2=(partes[4] + "," + partes[5]);
          document.getElementById('img2').src = i1.substring(1, i1.length - 1);
          document.getElementById('img1').src = i2.substring(1, i2.length - 2);
          var lengua = "";
          if(partes[1] == 'A') {
              lengua = 'AYMARA';
          } else if(partes[1] == 'Q') {
              lengua = 'QUECHUA';
          } else if(partes[1] == 'G'){
              lengua = 'GUARANI';
          } else if(partes[1] == 'C'){
              lengua = 'CASTELLANO';
          } else {
          }
          document.getElementById('img1').title = "Palabra en " + lengua;
          document.getElementById('resultadoC').placeholder = "Ingrese texto: " + lengua + " CASTELLANO";
          document.getElementById('lbllengua').placeholder = "Ingrese texto: " + lengua + " CASTELLANO";
        });
      }

      function limpiarCamposRecuperacion()
      {
        document.getElementById("prsCorreo").disabled = true;         
        document.getElementById("prsCorreo").value = '';
        document.getElementById("prsCI").value = '';
        document.getElementById("resultadoC").disabled = true;
        document.getElementById("EnvRes").disabled = true;                            
        document.getElementById("btnObtenerCapcha").disabled = true;
        document.getElementById("resultadoC").value = '';                   
        document.getElementById("resultadoC").value = '';
        document.getElementById("resultadoC").value = '';
      }

      function limpiarCamposValidarCi()
      {
        document.getElementById("prsCorreo").disabled = true;         
        document.getElementById("prsCorreo").value = '';
        document.getElementById("resultadoC").disabled = true;
        document.getElementById("EnvRes").disabled = true;                            
        document.getElementById("btnObtenerCapcha").disabled = true;
        document.getElementById("resultadoC").value = '';                   
        document.getElementById("resultadoC").value = '';
        document.getElementById("resultadoC").value = '';
        document.getElementById("msg_correo").innerHTML = "Nota: Para restaurar su contraseña, su Correo Electrónico debe estar registrado en la cuenta del iGob 24/7.";
        document.getElementById("msg_correo").style.color = "black";
        document.getElementById("resultadoC").disabled = false;
      }

      function capLock(e){}
      
      var con_api_if  = "";
      if(jsonURLS)
      {              
        con_api_if = jsonURLS.CONEXION_API_PG_RC;
        urlRC = jsonURLS.CONEXION_API_PG_RC + "wsRCIgob";
        key = jsonURLS.KEY;
      }
      var scorreociudadano = "";  


      function validarCedulaIdentidad(ci)
      {   
        limpiarCamposValidarCi();
        var stoquen = "";
        var urlToken = urlRC + "/token2";
        $.ajax({
            dataType: "json",
            type: "POST",
            url : urlToken,
            data: {},
            async: false,
            success: function(response) {
              var token = response.token;
              stoquen =  'Bearer ' + token;
            },
            error: function (response, status, error) {
                dataResp = "{\"error\":{\"message\":\""+response.responseText+"\",\"code\":700}}";
                console.log(dataResp);
            }
        });
        $.ajax({ 
            data: {ci:ci.value}, 
            url: con_api_if + 'wsRCIgob/validarciudadano',
            type: 'post', 
            headers: {
              'authorization': stoquen
            }, 
            beforeSend: function(){}, 
            success: function (response) 
            { 
              response = CryptoJS.AES.decrypt(response, key);
              response = response.toString(CryptoJS.enc.Utf8);
              response = JSON.parse(response);
              console.log(response,888);                    
              if(response.error)
              {                      
                document.getElementById("msg_cedula").innerHTML = "Usuario no registrado";
                document.getElementById("msg_cedula").style.color = "red";                
                document.getElementById("resultadoC").disabled = true;
                document.getElementById("resultadoC").value = "";
                document.getElementById("resultadoC").disabled = true;
                document.getElementById("btnObtenerCapcha").disabled = true;    
                document.getElementById("EnvRes").disabled = true;
                document.getElementById("prsCorreo").disabled = true;
                document.getElementById("prsCorreo").value = "";                            
              }
              else
              {
                document.getElementById("msg_cedula").innerHTML = "";
                document.getElementById("msg_cedula").style.color = "black";
                scorreociudadano = response[0].mail;
                var correo  =   ((typeof(scorreociudadano)    == 'undefined' || scorreociudadano  == null) ? '' : scorreociudadano);
                if(correo.trim() != "")
                {
                  document.getElementById("prsCorreo").disabled = true;
                  document.getElementById("prsCorreo").value = correo;
                  document.getElementById("resultadoC").disabled = false;    
                  document.getElementById("btnObtenerCapcha").disabled = false;
                }
                else
                {
                  document.getElementById("msg_correo").innerHTML = "Señor ciudadano. No se puede restablecer su contraseña, debido a que usted no posee su correo electrónico en nuestros registros. Debe llamar a la línea gratuita 800 13 5555 para mayor información.";
                  document.getElementById("msg_correo").style.color = "red";
                  document.getElementById("resultadoC").disabled = true;
                }
              }
            }
        });
      }

      function validarCorreoElectronico(correo)
      {
        var correoinput = correo.value;
        if(correoinput  != scorreociudadano)
        {
          document.getElementById("msg_correo").innerHTML = "El correo electronico no esta registrado dentro del igob247";
          document.getElementById("msg_correo").style.color = "red";
          document.getElementById("resultadoC").disabled = true;
        }
        else
        {
          document.getElementById("msg_correo").innerHTML = "Nota: Para restaurar su contraseña, su Correo Electrónico debe estar registrado en la cuenta del iGob 24/7.";
          document.getElementById("msg_correo").style.color = "black";
          document.getElementById("resultadoC").disabled = false;
        }
      }            
      var tiemporespuesta = null;
      var ErrorCapchasXX  = "";
      var SuccesCapchasxx = "";
      var habGuardar1 = "";
      function verificarKeyPress(captch)
      {
        var id = numero;
        var verCaptcha = new captcha();
        verCaptcha.identificador = id;
        verCaptcha.respuesta = captch;
        verCaptcha.verificarCaptcha(function(resultado)
        {
            json = JSON.parse(resultado);
            var nroregsitros = json.success.length;
            if(nroregsitros == 0)
            {
                habGuardar1 = true;
                ErrorCapchasXX = "Verifique el Capcha";
                SuccesCapchasxx="";
                document.getElementById("msg_capcha").innerHTML = ErrorCapchasXX;
                document.getElementById("msg_cedula").style.color = "red";
                document.getElementById("EnvRes").disabled = true;
            }
            else
            {
                habGuardar1 = false;
                ErrorCapchasXX = "";
                SuccesCapchasxx="Capcha correcto";
                document.getElementById("msg_capcha").innerHTML = SuccesCapchasxx;
                document.getElementById("msg_cedula").style.color = "black";
                document.getElementById("EnvRes").disabled = false;
            }
        });
      }
      function VerificarCapchaa (datos)
      {
          document.getElementById("EnvRes").disabled = true;
          var captch  = $("#resultadoC").val();
          if(captch.length == 0)
              ErrorCapchasXX = "";
          if(captch.length > 3)
          {
              clearTimeout(tiemporespuesta);
              tiemporespuesta = setTimeout(verificarKeyPress.bind(undefined, captch), 1500);
          }
      };
    </script>

<main>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 login-section-wrapper loginBackground">

        <div class="brand-wrapper" data-aos="fade-up" data-aos-delay="100">
          <a href="../../../../index.html">
          <img src="../../../../structureIgob/images/logNormal.png" alt="logo" class="logo">
          </a>
        </div>
        <div class="login-wrapper mx-auto my-auto">
          
          <div class="contenedor_log" >
            <div class="middle-box text-center loginscreen  animated fadeInDown">
            <div class="row">
            <div class="col-md-12">
              <div class="logo_integra">
              </div>
            </div>
          </div>

          <div class="row">
            <div  class="col-md-12">
              <h3 class="login-title">
                <script type="text/javascript">
                    document.write(elArray["lbl_02_03"]);
                </script>
              </h3>
              <div style="text-align: left;">
                <div class="form-group label-floating is-empty">
                  <label class="control-label" for="focusedInput1" placeholder="Usuario" >
                  <script type="text/javascript">
                     document.write(elArray["lbl_02_04"]);
                  </script></label>
                  <div class="input-group">
                    <input class="form-control" type="text" id="usuario" tabindex="1" name="usuario" ng-model="login.usuario" placeholder="CÉDULA DE IDENTIDAD o NIT" maxlength="">
                    <button class="btn btn-default btn-circle" type="button" data-toggle="popover" data-trigger="focus" title="Tipos de usuario" data-content="Si esta registrado como persona natural, utilice su CÉDULA DE IDENTIDAD o si esta registrado como persona jurídica, utilice el n° de NIT." style="margin: 0 0 0 5px;"><i class="icofont-question"></i></button>
                  </div>
                  <p class="form-alert" id="name-form-alert" style="display:none;color:#e41b25;">El Usuario es requerido</p>
                  <p class="form-alert" id="namelengthMin-form-alert" style="display:none;color:#e41b25;">La longitud del campo es muy corto</p>
                  <p class="form-alert" id="namelengthMax-form-alert" style="display:none;color:#e41b25;">La longitud del campo es muy largo</p>
        
                </div>
                <div class="form-group label-floating is-empty">
                  <label class="control-label" for="focusedInput1" for="clave">
                  <script type="text/javascript">
                     document.write(elArray["lbl_02_06"]);
                  </script></label> 
                  <div class="input-group">
                    <input type="password" id="clave" name="clave" tabindex="2" class="form-control" type="text" ng-model="login.clave" placeholder="CONTRASEÑA" onKeyPress="capLock(event)" maxlength="99" th="100">            
                    <button class="btn btn-default btn-circle" onmousedown="RFunction();"onmouseup="RFunction1();" style="margin: 0 0 0 5px;">
                      <i class="icofont-eye-alt"></i>
                    </button>
                  </div>
                  <!--<a id="mC" name="mC" onClick="RFunction();" value="1" style="float: right;">Mostrar Contraseña</a>-->
        
                  <p class="form-alert" id="pass-form-alert" style="display:none;color:#e41b25;">La Contraseña es requerido</p>
                  <p class="form-alert" id="passlengthMin-form-alert" style="display:none;color:#e41b25;">La longitud del campo es muy corto</p>
                  <p class="form-alert" id="passlengthMax-form-alert" style="display:none;color:#e41b25;">La longitud del campo es muy largo</p>
        
                </div>
              </div>
              <div id="caplock" style="visibility:hidden">El bloqueo de mayúsculas está activado</div>
              <button id="btnIngresar" class="btn btn-sm btn-white btn-block" onclick="autenticacionNodeR();" style="color: #eefeff; background: linear-gradient(270deg, #00b3ba, #23a0af); border: 2px solid #006e80 !important; padding: 2px; font-size: 16px; font-weight: 600;">Ingresar<div class="ripple-container"></div>
              </button>
              <br>
              <button id="btnIngresarGoogle" onclick="onLoadFunction()" class="button-ms-gmail btn-block" style="display:none">                
                <i class="icofont-google-plus"></i>&nbsp;Ingresar con Google<div class="ripple-container"></div> 
              </button>
              <br>
              <p><a class="aEnlaceCustom" data-toggle="modal" data-target="#password" onClick="obtCaptha();limpiarCamposRecuperacion();"><small>
              <script type="text/javascript">
                     document.write(elArray["lbl_02_09"]);
              </script> ¡Presione aqui!</small></a></p>
              <p><a href="../../autenticacion/partials/registro_.html" class="aEnlaceCustom"><small>
                ¿Aún no tiene una cuenta? ¡Registrese aqui!
              </small><div class="ripple-container"></div></a>
              </p>
              <p><a href="../../../../index.html" ui-sref="forgot_password" href="/forgot_password" class="aEnlaceCustom"><small>
              <script type="text/javascript">
                   document.write(elArray["lbl_02_10"]);
              </script></small><div class="ripple-container"></div></a>
              </p>
            </div>
          </div>
          </div>
          </div>
        </div>
        
      </div>
      <div class="col-sm-8 px-0 d-none d-sm-block">
        <!-- <img src="images/cadastral.jpg" alt="login image" class="login-img"> -->

        <div class="card1 pb-5">
          <div class="row">
              <h5 class="titleSectionStore">PRUEBE NUESTRAS APLICACIONES MÓVILES</h5>
          </div>
          <div class="row px-3 justify-content-center mt-lg-5 mt-md-0">
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4000">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" id="li1" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1" id="li2"></li>
                      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="2" id="li3"></li> -->
                      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="3" id="li4"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="4" id="li5"></li> -->
                  </ol>
                  <div class="carousel-inner">

                      <div class="carousel-item active card border-0 card-0">
                        <div class="text-center"> <img src="../../../../structureIgob/images/iconsApps/igob.png" class="img-fluid profile-pic"> </div>
                        <hr width="100%">
                        <div class="row">
                          <div class="col-lg-4 columns">
                            <div class="captureStoreGraphic"> 
                              <img src="../../../../structureIgob/images/iconsApps/captureIgob.png" alt="sample" style="height: 100%;">
                            </div>
                          </div>
                            
                          <div class="col-lg-8 columns">
                            <h1 class="titleStore">iGob 24/7</h1>
                            <hr width="50%">
                            <span class="descriptionStore">Modernizando e innovando la gestión pública, en cuanto a optimización de servicios, acceso a información e interacción ciudadana, las 24 horas del día.</span>

                            <div class="buttonsStore">
                              <div class="row container d-flex justify-content-initial">
                                <div class="template-demo mt-2"> 
                                  <a href="https://apps.apple.com/us/app/igob-24-7/id1413515752" target="_blank" class="btn btn-outline-light btn-icon-text"> 
                                    <i class="icofont-brand-apple btn-icon-prepend mdi-36px"></i> 
                                    <span class="d-inline-block text-left"> <small class="font-weight-light d-block">Disponible en</small> App Store </span>
                                  </a> 
                                  <a href="https://play.google.com/store/apps/details?id=com.gamlp.igob247" target="_blank" class="btn btn-outline-light btn-icon-text"> 
                                    <i class="icofont-brand-android-robot btn-icon-prepend mdi-36px"></i> 
                                    <span class="d-inline-block text-left"> <small class="font-weight-light d-block">Disponible en</small> Google Play </span>
                                  </a> 
                                </div>
                              </div>
                            </div>

                          </div>
                        
                        </div>
                      </div>

                      <div class="carousel-item card border-0 card-0">
                          <div class="text-center"> <img src="../../../../structureIgob/images/iconsApps/movplp.png" class="img-fluid profile-pic"> </div>
                          <hr width="100%">
                          <div class="row">
                            <div class="col-lg-4 columns">
                              <div class="captureStoreGraphic"> 
                                <img src="../../../../structureIgob/images/iconsApps/captureMovplp.png" alt="sample" style="height: 100%;">
                              </div>
                            </div>
                              
                            <div class="col-lg-8 columns">
                              <h1 class="titleStore">MOVIENDONOS POR LA PAZ</h1>
                              <hr width="50%">
                              <span class="descriptionStore">Permite al ciudadano conocer 559 rutas y 935 recorridos del transporte municipal y público que operan y realizan el servicio en el Municipio de la Ciudad de La Paz.</span>

                              <div class="buttonsStore">
                                <div class="row container d-flex justify-content-initial">
                                  <div class="template-demo mt-2"> 
                                    <a href="https://play.google.com/store/apps/details?id=com.gamlp.moviendonos_x_lp" class="btn btn-outline-light btn-icon-text" target="_blank"> 
                                      <i class="icofont-brand-android-robot btn-icon-prepend mdi-36px"></i> 
                                      <span class="d-inline-block text-left"> <small class="font-weight-light d-block">Disponible en</small> Google Play </span>
                                    </a> 
                                  </div>
                                </div>
                              </div>

                            </div>
                          
                          </div>
                      </div>

                      <!-- <div class="carousel-item card border-0 card-0">
                        <div class="text-center"> <img src="../../../../structureIgob/images/iconsApps/caserita.png" class="img-fluid profile-pic"> </div>
                        <hr width="100%">
                        <div class="row">
                          <div class="col-lg-4 columns">
                            <div class="captureStoreGraphic"> 
                              <img src="../../../../structureIgob/images/iconsApps/captureCaserita.png" alt="sample" style="height: 100%;">
                            </div>
                          </div>
                          <div class="col-lg-8 columns">
                            <h1 class="titleStore">CASERIT@ VIRTUAL</h1>
                            <hr width="50%">
                            <span class="descriptionStore">Descubra los mejores servicios y productos cerca de usted; COMERCIO ELECTRÓNICO en: alimentos, construcción, entretenimiento, hoteleria, turismo, industria, salud, etc.</span>

                            <div class="buttonsStore">
                              <div class="row container d-flex justify-content-initial">
                                <div class="template-demo mt-2"> 
                                  <a href="https://play.google.com/store/apps/details?id=com.gamlp.igob247aeenlinea" target="_blank" class="btn btn-outline-light btn-icon-text"> 
                                    <i class="icofont-brand-android-robot btn-icon-prepend mdi-36px"></i> 
                                    <span class="d-inline-block text-left"> <small class="font-weight-light d-block">Disponible en</small> Google Play </span>
                                  </a> 
                                </div>
                              </div>
                            </div>

                          </div>
                        
                        </div>
                      </div> -->


                      <!-- <div class="carousel-item card border-0 card-0">
                          <div class="text-center"> <img src="https://i.imgur.com/ndQx2Rg.jpg" class="img-fluid profile-pic"> </div>
                          <h6 class="font-weight-bold mt-5">Richard Finch</h6> <small class="mb-2">UI/UX Designer</small>
                          <hr width="50%">
                          <p class="content mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.<br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      </div>
                      <div class="carousel-item card border-0 card-0">
                          <div class="text-center"> <img src="https://i.imgur.com/gazoShk.jpg" class="img-fluid profile-pic"> </div>
                          <h6 class="font-weight-bold mt-5">Marielle Haag</h6> <small class="mb-2">Backend Developer</small>
                          <hr width="50%">
                          <p class="content mt-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod incididunt ut labore et dolore magna aliqua.<br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                      </div> -->
                  </div>
              </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</main>



<!-- MODAL -->
<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form name="signupForm" readOnly="true" novalidate>
        <div class="modal-header" style="background: linear-gradient(270deg, #00b3ba, #23a0af);">
          <h3 style="font-size: 18px;font-weight: 600; color: #eefeff;"><script type="text/javascript">document.write(elArray["lbl_20_43"]);</script></h3>
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
          <!--<h4 class="modal-title" id="myModalLabel">Envio de Mensaje</h4>-->
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <center><h5 style="font-size: 15px;font-weight: 600; color: 707070 !important;"><script type="text/javascript">document.write(elArray["lbl_20_44"]);</script></h5>
                <img src="../../../../assets/img/cominiquese.png" width="234px" height="61px"></center>
                <center><h5 style="font-size: 15px;font-weight: 600; color: 707070 !important;">Para restaurar su contraseña, su correo electrónico debe estar registrado en el iGOB247. Ante cualquier duda o consulta debe contactarse con la línea gratuita 800 13 5555.</h5></center>
            </div>
          </div>
          <div class="row">
            <div class="col-md-10">
              <div class="form-group" >
                <label for="url" ><script type="text/javascript">document.write(elArray["lbl_02_04"]);</script></label>
                <div class="controls">
                  <input ng-model="prsCI" id="prsCI" name="prsCI" class="form-control" onChange="validarCedulaIdentidad(this)" onKeyPress="getlimpiareRROR();" on- type="text" placeholder="Ingrese su número de carnet de identidad" required/>
                  <p id="msg_cedula"></p>
                </div>
              </div>
            </div>
            <div class="col-md-10">
              <div class="form-group" >
                <label for="url" ><script type="text/javascript">document.write(elArray["lbl_06_18"]);</script></label>
                <div class="controls">
                  <input ng-model="prsCorreo" id="prsCorreo" name="prsCorreo" onChange="validarCorreoElectronico(this);" onKeyPress="getlimpiareRROR()" class="form-control" type="email" placeholder="Ingrese su correo eléctronico registrado en Igob 24/7" disabled required/>
                  <p id="msg_correo"<h5 style="font-size: 15px;font-weight: 600; color: 707070 !important;"><script type="text/javascript">document.write(elArray["lbl_20_45"]);</script></h5></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12" align="center" >
            <table width="100%" border="3" cellspacing="0" cellpadding="2"  class="one">
                <tr class="color">
                  <div style="background: #FFFFFF;" >
                     <div class="box2">
                        <img id="img1" class="img-responsive" src="" title="">
                      </div>
                      <div class="box2">
                          <img id="img2" class="img-responsive" src=""  title="Palabra en CASTELLANO">
                      </div>
                  </div>
                </tr>
                  <tr class="color">
                    <td class="color22" colspan="3" width="70"  align="center">
                        <input id="resultadoC" name="resultadoC" type="text" style="border: 0px !important;" class="form-control"  placeholder="" ng-model="resultadoC"  onkeyup="VerificarCapchaa(this)" onKeyPress="getlimpiareRROR()" required/>
                          <span  ng-show="formulario.resultadoC.$invalid">
                              <span ng-show="formulario.resultadoC.$error.required">
                                  <input id="lbllengua" name="lbllengua" type="text" size="50" disabled="disabled"/>
                              </span>
                          </span>     
                          <p id="msg_capcha"></p>
                    </td>                    
                        <td class="color2" width="30"  align="center">
                            <button id="btnObtenerCapcha"  type="button" class="btn btn-default btn-circle" data-toggle="modal" data-target="modal" onClick="obtCaptha()">
                                <img type="button" src="data:image/png;base64,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" width="24px" height="24px" data-toggle="modal" data-target="modal" onClick="obtCaptha()">
                            </button>
                        </td>
                  </tr>
            </table>
            <br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><script type="text/javascript">document.write(elArray["lbl_020_18"]);</script></button>
          <button id= "EnvRes" data-toggle="modal" onClick="resetPassword();" odisabled=""  data-target="#formModal" type="submit" class="btn btn-primary" data-dismiss="modal" style="background-color: #00b3ba"><script type="text/javascript">document.write(elArray["lbl_013_44"]);</script></button>        
        </div>
      </form>
    </div>
  </div>
</div>
<!--/ endMODAL-->


<script src="../../../../structureIgob/js/popper.min.js"></script>
<script src="../../../../structureIgob/js/bootstrap.min.js"></script>
<script src="../../../../structureIgob/js/login/login.js"></script>

<script type="text/javascript" src="../../../libs/js/jquery.blockUI.min.js"></script>
<!-- <script type="text/javascript" src="../../../libs/js_one/bootstrap.min.js"></script> -->
<script type="text/javascript" src="../../../libs/js/sweetalert.min.js"></script>

<meta name="google-signin-client_id" content="52027467967-ir59vlp1kdi501pco8gjgeh2cfoe1vds.apps.googleusercontent.com">
<script async defer src="https://apis.google.com/js/api.js" onload="handleClientLoad()"
onreadystatechange="if (this.readyState === 'complete') this.onload()"></script>

</body>
</html>