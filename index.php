<!DOCTYPE html>
<?php include("config/bd.php"); ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>CondoEasy</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	<link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="css/fullcalendar.css">
	<link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	<link href="css/xcharts.min.css" rel=" stylesheet">	
	<link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><img src="img/logoCondoEasy.png"></a>
            <!--logo end-->
             <div class="top-nav">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class=" dropdown-toggle" href="#">
                       
                            <span class="branco lite fa fa-building-o"     <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="fa fa-money"></i>Financeiros</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-comment"></i> Mural</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-male"></i><i class="fa fa-female"></i> Funcionários</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-calendar"></i>Agenda</a>
                            </li>
                            <li>
                               <a href="#"><i class="fa fa-heart"></i>Suporte</a>
                            </li>
                        
                        </ul>
                    </li>
                
                    <li id="alert_notificatoin_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="icon-bell-l"></i>
                            <span class="badge bg-important">2</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <div class="notify-arrow notify-arrow-blue"></div>
                            <li>
                                <p class="blue">Você tem 2 notificações</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="icon_documents"></i></span> 
                                    Conta de agua em aberto
                                    <span class="small italic pull-right">03/06/2015</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon_pin"></i></span>  
                                    Visita agendada
                                    <span class="small italic pull-right">06/06/2015 às 12:00</span>
                                </a>
                            </li>
                             <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="fa  fa-envelope-o"></i></span>  
                                    Cartas 
                                    <span class="small italic pull-right">06/06/2015 às 12:00</span>
                                </a>
                            </li>
                          
                        </ul>
                    </li>
               
                    <!--MENU DO USUARIO-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                          
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i>Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_mail_alt"></i> Publicar no Mural</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_clock_alt"></i> Cadastrar Visita</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-calendar"></i>Realizar Reservas</a>
                            </li>
                            <li>
                                <a href="login.html"><i class="icon_key_alt"></i>Veiculos</a>
                            </li>
                            <li>
                                <a href="documentation.html"><i class="fa fa-dollar"></i>Pagamento</a>
                            </li>
                          <li>
                                
                            </li>
                        </ul>
                    </li>
                    <!-- MENU DO USUARIO -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
            
            
            
      
          
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">   
                  
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-money"></i>
                          <span>Financeiro</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="#">Contas a Pagar</a></li>                          
                          <li><a class="" href="#">Contas a Receber</a></li>
                          <li><a class="" href="#">Contas em aberto</a></li>
                          <li><a class="" href="#">Prestadores de Serviços</a></li>
                      </ul>
                  </li> 
                <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-comments"></i>
                          <span>Mural</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_component.html">Publicar</a></li>                          
                          <li><a class="" href="form_validation.html">Ver Publicações</a></li>
                      </ul>
                  </li>       
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-calendar"></i>
                          <span>Agenda</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Eventos</a></li>
                          <li><a class="" href="buttons.html">Reuniões</a></li>
                          
                      </ul>
                  </li>
                 
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-male"></i><i class="fa fa-female"></i>
                          <span>Funcionarios</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Funcionarios</a></li>
                          <li><a class="" href="buttons.html">Cadastrar</a></li>
                          
                      </ul>
                  </li>
                   <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-car"></i>
                          <span>Garagem</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Vagas</a></li>
                          <li><a class="" href="buttons.html">Veiculos</a></li>
                      </ul>
                  </li>
                     <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-male"></i><i class="fa fa-female"></i>
                          <span>Parceiros</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">Parceiros</a></li>
                          <li><a class="" href="buttons.html">Cadastrar</a></li>
                      </ul>
                  </li>
                  
                             
             
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
           
              <div><h1>TESTE</h1> </div> 
          

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
	<script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
	<script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js" ></script>
	<script src="assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
	<script src="js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="js/xcharts.min.js"></script>
	<script src="js/jquery.autosize.min.js"></script>
	<script src="js/jquery.placeholder.min.js"></script>
	<script src="js/gdp-data.js"></script>	
	<script src="js/morris.min.js"></script>
	<script src="js/sparklines.js"></script>	
	<script src="js/charts.js"></script>
	<script src="js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
