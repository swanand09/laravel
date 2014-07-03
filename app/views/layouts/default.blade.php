<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Aboweb - <?php //echo $template['title']; ?></title>
  
 <!-- Included CSS Files (Compressed) -->
{{ HTML::style('assets/css/foundation.min.css') }}
{{ HTML::style('assets/css/app.css') }}
{{ HTML::style('assets/css/main.css') }}
{{ HTML::style('assets/css/etape.css') }}
{{ HTML::style('assets/css/font.css') }}
{{ HTML::style('assets/css/validationEngine.jquery.css') }}
{{ HTML::style('assets/css/jquery-ui.css') }}
{{ HTML::style('assets/css/combobox.css') }}
 
<!--[if IE 7]>{{ HTML::style('css/ie7.css') }}<![endif]-->
<!--[if IE 8]>{{ HTML::style('css/ie8.css') }}<![endif]-->
{{ HTML::script('assets/js/modernizr.foundation.js') }}
{{ HTML::script('assets/js/jquery.js') }}
{{ HTML::script('assets/js/foundation.min.js') }}
{{ HTML::script('assets/js/jquery-ui.js') }}
{{ HTML::script('assets/js/jquery.blockUI.js') }}
{{ HTML::script('assets/js/custom_autocomplete.js') }}
 

  <style>
      .highli{
          font-weight:bold;
      }
      #prlodtxt{
          display:none;
      }
  </style>
</head>
<body>
<noscript>
  <div class='no-script'>Javascript est désactivé sur votre navigateur. Veuillez l'activer pour continuer. </div>
  </noscript>
<!--HEADER-->
  <header class='row header'>
    <div class='three columns'><h1 class='main-title'>SOUSCRIPTION EN LIGNE</h1></div>
    <div class='three columns service-client text-center'>{{ HTML::image('assets/images/service_client.png', 'Numéro de téléphone', array('title' => 'Service client - 0811 57 57 57')) }}</div>
<!--    <div class='three columns chat last-2'> Une question ?<span>CHATER AVEC MOI</span></div>-->
    <div class='three columns end rapeler last-2'><a href='#' data-reveal-id="modalBesoinDaide" title="Vous faire rappeler gratuitement">Besoin d'aide ?<span>VOUS FAIRE RAPPELER</span></a></div>
  </header>
  <!--END OF HEADER-->

  <!--NAV-->
  <nav class='navigation'>
    <div class='row'>
      <div class='twelve columns'> {{ HTML::image('assets/images/logo_mediaserv.png','Mediaserv', array('title' => 'Souscription en ligne')) }}<?php //echo image('logo_mediaserv.png',NULL,array("title"=>"Souscription en ligne", "alt"=>"Mediaserv")); ?></div>
    </div>
  </nav>
  <!--END OF NAV-->
 <script>
    var monOffre                = '<?php //echo base_url('mon_offre');?>';
    var ajax_proc_interogeligib = '<?php //echo base_url('mon_offre/ajax_proc_interogeligib');?>';
    var forfait                 = '<?php //echo base_url('mon_offre/forfait');?>';
    var refreshRecapCol         = '<?php //echo base_url('mon_offre/refreshRecapCol');?>'; 
    var updateTvDecodeur        = '<?php //echo base_url('mon_offre/updateTvDecodeur');?>'; 
    var mesCoordonnes           = '<?php //echo base_url('mon_offre/mesCoordonnes');?>';   
    var mesCoordonnees2           = '<?php //echo base_url('mes_coordonnees');?>';  
    var verifEmail              = '<?php //echo base_url('mes_coordonnees/verifEmail');?>';
    var verifParain             = '<?php //echo base_url('mes_coordonnees/verifParain');?>';
    var cancelParain             = '<?php //echo base_url('mes_coordonnees/cancelParain');?>';
    var updateBouquet           = '<?php //echo base_url('mon_offre/updateBouquet');?>';  
    var updateOptions           = '<?php //echo base_url('mon_offre/updateOptions');?>';
    var updateFacture           = '<?php //echo base_url('mes_coordonnees/updateFacture'); ?>';
    //var option_tv               = '<?php //echo base_url('assets/javascripts/tv_option.js'); ?>';
</script>
{{ HTML::script('assets/js/custom_tv_option.js') }}
{{ HTML::script('assets/js/main_functions.js') }}

  <!--MAIN SECTION-->
  <section class='row main-content'>
    <section class='nine columns left-content'>
      <ul class="block-grid four-up etapes <?php //echo $pageid; ?>">        
        <li class='etape1 state1' data-nav='<?php //echo $allow[0]; ?>'><?php //echo image('etape.png')?><?php //echo ($etapes_url[0]=="#")?"<a><span>1</span>Mon<br/>offre</a>":anchor($etapes_url[0],'<span>1</span> Mon<br/>offre'); ?></li>
        <li class='etape2' data-nav='<?php //echo $allow[1]; ?>'><?php //echo image('etape.png')?><?php //echo ($etapes_url[1]=="#")?"<a><span>2</span> Mes<br/>coordonnées</a>":anchor($etapes_url[1],'<span>2</span> Mes<br/>coordonnées'); ?></li>
        <li class='etape3' data-nav='<?php //echo $allow[2]; ?>'><?php //echo image('etape.png')?><?php //echo ($etapes_url[2]=="#")?"<a><span>3</span> Mon<br/>récapitulatif</a>":anchor($etapes_url[2],'<span>3</span> Mon<br/>récapitulatif'); ?></li>
        <li class='etape4' data-nav='<?php //echo $allow[3]; ?>'><?php //echo image('etape.png')?><?php //echo ($etapes_url[3]=="#")?"<a><span>4</span> Paiement</a>":anchor($etapes_url[3],'<span>4</span> Paiement'); ?></li>
      </ul>
<!--      <div>-->
           <?php //echo $template['partials']['contenu_gauche'];?>
           @yield('contenu_gauche')
<!--      </div>    -->
    </section>
    <section class='three column right-content'>       
         <?php //echo $template['partials']['contenu_droit'];?>           
        @include('includes.contenu_droit')
    </section>
      
  </section>
  <!--END OF MAIN SECTION-->

  <!--FOOTER-->
  @include('includes.footer')
  <!-- END OF FOOTER-->


    <!--mention legales-->
 @include('includes.mention_legal')
  <!-- End of mention legale-->

  <!--Modal Besoin d'aide-->
  @include('includes.modal_besoin_aide')
  <!-- End of modal-->
  
  <!-- Included JS Files (Compressed) --> 
  {{ HTML::script('assets/js/app.js')  }}
  {{ HTML::script('assets/js/raphael.2.1.0.min.js')  }}
  {{ HTML::script('assets/js/justgage.1.0.1.min.js')  }}
  {{ HTML::script('assets/js/jquery.maskedinput.min.js')  }}
  {{ HTML::script('assets/js/jquery.validationEngine.js')  }}
  {{ HTML::script('assets/js/languages/jquery.validationEngine-fr.js')  }}
  {{ HTML::script('assets/js/custom_main.js')  }}
  {{ HTML::script('assets/js/jquery.foundation.reveal.js')  }}
  {{ HTML::script('assets/js/combobox.js')  }}
  {{ HTML::image('assets/images/ajax-loader.gif','', array('style' => 'display:none;','id'=>'displayBox')) }}
  <h3 id="prlodtxt">Veuillez patienter...</h3> 
</body>
</html>
