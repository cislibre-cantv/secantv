<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Panel de Control Administrativo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free yii themes, free web application theme">
    <meta name="author" content="Webapplicationthemes.com">
	<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');


	?>

    <!-- Fav and Touch and touch icons -->
    <link rel="shortcut icon" href='<?php echo $baseUrl;?>/img/icons/favicon.ico'>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $baseUrl;?>/img/icons/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $baseUrl;?>/img/icons/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $baseUrl;?>/img/icons/apple-touch-icon-57-precomposed.png">
	<?php  
	  $cs->registerCssFile($baseUrl.'/css/bootstrap.min.css');
	  $cs->registerCssFile($baseUrl.'/css/font-awesome.min.css');
	  $cs->registerCssFile($baseUrl.'/css/smartadmin-production.css');
	  $cs->registerCssFile($baseUrl.'/css/smartadmin-skins.css');
          $cs->registerCssFile($baseUrl.'/css/demo.css');
          $cs->registerCssFile($baseUrl.'/css/jquery.fileupload-ui-noscript.css');
          //$cs->registerCssFile($baseUrl.'/css/layout2.css');

     
  	  ?>

 
  </head>

<body class="">
  
<!-- Require the navigation -->
<?php include_once('tpl_navigation.php')?>
<aside id="left-panel" >
            
            <!-- User info -->
            <div class="login-info">
                <span>
                    <!-- User image size is adjusted inside CSS, it should stay as it --> 
                    <img src="<?php echo $baseUrl;?>/img/avatars/sunny.png" alt="me" class="online" /> 
                    <a href="javascript:void(0);" id="show-shortcut">john.doe <i class="fa fa-angle-down"></i></a>
                </span>
            </div>
            <!-- end user info -->
            
            <!-- NAVIGATION : This navigation is also responsive 
                 
                 To make this navigation dynamic please make sure to link the node 
                 (the reference to the nav > ul) after page load. Or the navigation 
                 will not initialize.
            -->
            <nav>
                <!-- NOTE: Notice the gaps after each icon usage <i></iasi 
                     Please note that these links work a bit different than
                     traditional hre="" links. See documentation for details.
                    -->
                
                <ul>
                    <li class=""><a href="ajax/dashboard.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i>  <span class="menu-item-parent">Dashboard</span></a></li>
                    <li><a href="ajax/inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i>  <span class="menu-item-parent">Inbox</span><span class="badge pull-right inbox-badge">14</span></a></li>
                    <li><a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i>  <span class="menu-item-parent">Graphs</span></a>
                        <ul>
                            <li><a href="ajax/flot.html">Flot Chart</a></li>
                            <li><a href="ajax/morris.html">Morris Charts</a></li>
                            <li><a href="ajax/inline-charts.html">Inline Charts</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-lg fa-fw fa-table"></i>  <span class="menu-item-parent">Tables</span></a>
                            <ul>
                                 <li><a href="ajax/table.html">Normal Tables</a></li>
                                 <li><a href="ajax/datatables.html">Data Tables</a></li>
                            </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i>  <span class="menu-item-parent">Forms</span></a>
                        <ul>
                             <li><a href="ajax/form-elements.html">Smart Form Elements</a></li>
                             <li><a href="ajax/form-templates.html">Smart Form Layouts</a></li>
                             <li><a href="ajax/validation.html">Smart Form Validation</a></li>
                             <li><a href="ajax/bootstrap-forms.html">Bootstrap Form Elements</a></li>
                             <li><a href="ajax/plugins.html">Form Plugins</a></li>
                             <li><a href="ajax/wizard.html">Wizards</a></li>
                             <li><a href="ajax/other-editors.html">Bootstrap Editors</a></li>
                             <li><a href="ajax/dropzone.html">Dropzone <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i>  <span class="menu-item-parent">UI Elements</span></a>
                        <ul>
                             <li><a href="ajax/general-elements.html">General Elements</a></li>
                             <li><a href="ajax/buttons.html">Buttons</a></li>
                             <li><a href="#">Icons</a>
                                <ul>
                                     <li><a href="ajax/fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
                                     <li><a href="ajax/glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons </a>   
                                </ul>
                             </li>
                             <li><a href="ajax/grid.html">Grid</a></li>
                             <li><a href="ajax/treeview.html">Tree View</a></li>
                             <li><a href="ajax/nestable-list.html">Nestable Lists</a></li>
                             <li><a href="ajax/jqui.html">JQuery UI</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-lg fa-fw fa-folder-open"></i>  <span class="menu-item-parent">6 Level Navigation</span></a>
                        <ul>
                            <li><a href="#"><i class="fa fa-fw fa-folder-open"></i> 2nd Level</a>
                                <ul>
                                     <li><a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                                        <ul>
                                             <li><a href="#"><i class="fa fa-fw fa-file-text"></i> File</a></li>
                                             <li><a href="#"><i class="fa fa-fw fa-folder-open"></i> 4th Level</a>
                                                <ul>
                                                     <li><a href="#"><i class="fa fa-fw fa-file-text"></i> File</a></li>
                                                     <li><a href="#"><i class="fa fa-fw fa-folder-open"></i> 5th Level</a>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-fw fa-file-text"></i> File</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-file-text"></i> File</a></li>
                                                        </ul>
                                                     </li>
                                                </ul>
                                             </li>
                                        </ul>
                                     </li>
                                </ul>
                             </li>
                             <li><a href="#"><i class="fa fa-fw fa-folder-open"></i> Folder</a>
                                
                                <ul>
                                     <li><a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                                        <ul>
                                             <li><a href="#"><i class="fa fa-fw fa-file-text"></i> File</a></li>
                                             <li><a href="#"><i class="fa fa-fw fa-file-text"></i> File</a></li>
                                        </ul>
                                     </li>
                                </ul>
                                
                             </li>
                        </ul>
                    </li>   
                    <li><a href="ajax/calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i>  <span class="menu-item-parent">Calendar</span></a></li>
                    <li><a href="ajax/widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i>  <span class="menu-item-parent">Widgets</span></a></li>
                    <li><a href="<?php echo $baseUrl.'/views/site/form-templates.html'; ?>"><i class="fa fa-lg fa-fw fa-picture-o"></i>  <span class="menu-item-parent">Gallery</span></a></li>
                    <li><a href="ajax/gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i>  <span class="menu-item-parent">Google Map Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a></li>                   
                    <li><a href="#"><i class="fa fa-lg fa-fw fa-windows"></i>  <span class="menu-item-parent">Miscellaneous</span></a>
                        <ul>
                             <li><a href="ajax/typography.html">Typography</a></li>
                             <li><a href="ajax/pricing-table.html">Pricing Tables</a></li>
                             <li><a href="ajax/invoice.html">Invoice</a></li>
                             <li><a href="login.html" target="_top">Login</a></li>
                             <li><a href="register.html" target="_top">Register</a></li>
                             <li><a href="lock.html" target="_top">Locked Screen</a></li>
                             <li><a href="ajax/error404.html">Error 404</a></li>
                             <li><a href="ajax/error500.html">Error 500</a></li>
                             <li><a href="ajax/blank_.html">Blank Page</a></li>
                             <li><a href="ajax/email-template.html">Email Template</a></li>
                             <li><a href="ajax/search.html">Search Page</a></li>
                             <li><a href="ajax/ckeditor.html">CK Editor</a></li>
                        </ul>
                    </li>                       
                </ul>
            </nav>
            <span class="minifyme">
                <i class="fa fa-arrow-circle-left hit"></i>
            </span>

            
        </aside>

     
<div id="main" role="main">
  <div id="ribbon">
        
        <span class="ribbon-button-alignment">
          <span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true"><i class="fa fa-refresh"></i></span>
        </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
          <?php if(isset($this->breadcrumbs)):?>
              <?php $this->widget('zii.widgets.CBreadcrumbs', array(
             'links'=>$this->breadcrumbs,
              )); ?><!-- breadcrumbs -->
            <?php endif?>
 </ol>   

  </div>
  

  <?php echo $content; ?>
</div>


  <script> 
        if (!window.jQuery) { document.write('<script src="js/jquery-2.0.2.min.js"><\/script>');} 
    </script>

    <?php
        $cs->registerScriptFile($baseUrl.'/js/jquery-ui.min.js');
    ?>

<script> 
  if (!window.jQuery.ui) { 
    document.write('<script src="js/jquery-ui-1.10.3.min.js"><\/script>');} 
</script>

<script type="text/javascript" src="<?php echo $baseUrl;?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/SmartNotification.min.js"></script>


<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/vendor/jquery.ui.widget.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/vendor/tmpl.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/vendor/load-image.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/vendor/canvas-to-blob.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/jquery.iframe-transport.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/jquery.fileupload.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/jquery.fileupload-fp.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/jquery.fileupload-ui.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/fileupload/jquery.fileupload-jui.js"></script>


<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jarvis.widget.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery.easy-pie-chart.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/bootstrap-slider.min.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/app.js"></script>
<script type="text/javascript" src="<?php echo $baseUrl;?>/js/demo.js"></script>

 <script>
 $.root_.addClass("container");

            $('input[type="checkbox"]#smart-fixed-ribbon')
                .prop('checked', false);
            $.root_.removeClass("fixed-ribbon");

            $('input[type="checkbox"]#smart-fixed-navigation')
                .prop('checked', false);
            $.root_.removeClass("fixed-navigation");


  </script>
<?php

   /*$cs->registerScriptFile($baseUrl.'/js/bootstrap.min.js');
    $cs->registerScriptFile($baseUrl.'/js/SmartNotification.min.js');
    $cs->registerScriptFile($baseUrl.'/js/jarvis.widget.min.js');
    $cs->registerScriptFile($baseUrl.'/js/jquery.easy-pie-chart.min.js');
    $cs->registerScriptFile($baseUrl.'/js/jquery.sparkline.min.js');
    $cs->registerScriptFile($baseUrl.'/js/jquery.validate.min.js');
    $cs->registerScriptFile($baseUrl.'/js/jquery.maskedinput.min.js');
    $cs->registerScriptFile($baseUrl.'/js/select2.min.js');
    $cs->registerScriptFile($baseUrl.'/js/bootstrap-slider.min.js');
    $cs->registerScriptFile($baseUrl.'/js/jquery.mb.browser.min.js');
   
    $cs->registerScriptFile($baseUrl.'/js/app.js');*/


  ?>
  

    <!-- Your GOOGLE ANALYTICS CODE Below -->
    <script type="text/javascript">
   // $("#smart-fixed-container").prop("checked", "checked");

         var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-43548732-3']);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>
<!-- Require the footer -->

  </body>
</html>