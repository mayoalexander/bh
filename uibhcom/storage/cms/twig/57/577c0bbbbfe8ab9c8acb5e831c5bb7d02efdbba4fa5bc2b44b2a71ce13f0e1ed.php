<?php

/* /var/www/uibhcom/themes/demo/pages/orientation.htm */
class __TwigTemplate_c84d1dade7084f8e64bbb224a47422c571619e24613515b50654a18feced2b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style type=\"text/css\">
\t.videoPlaceholder {
\t\tmargin-top:5em;
\t\twidth: 320px;
\t\theight: 320px;
\t\ttext-align: center;
\t\tpadding:1em;
\t\t/*border: 1px solid #303030;*/
\t\tbackground-size: auto 100%;
\t\tbackground-position: center center;
\t}

\t.pleaseRotate {
\t  animation: pulse 2s infinite;
\t}
\t.pleaseRotate div , .videoPlaceholder i {
\t\tdisplay:block;
\t}
\t.videoPlaceholder i {
\t\tfont-size: 8em;
\t}

\t@keyframes pulse {
\t  0% {

\t    transform: rotate(90deg);
\t  }
\t  50% {

\t    transform: rotate(0deg);
\t  }
\t  100% {
\t    /*background-color: #FF4136;*/
\t    transform: rotate(90deg);
\t  }
\t}
</style>
<div class=\"container videoPlaceholder\" >
    this is the container
    <button class=\"btn btn-primary getScreen\">Get Screen</button>
</div>

<script>
\tvar orientation = window.screen.orientation;
    var wrap = \$('.videoPlaceholder');
    
    function showAnimation(active) {
    \tif (active===true) {
    \t\twrap.html('<div><i class=\"fa fa-mobile-phone\"></i>Please turn your phone!</div>');
    \t\t\$('.videoPlaceholder i ').addClass('pleaseRotate');
    \t\t// alert('This is the animation');
    \t} else {
    \t\twrap.html('Okay youre good!');
    \t\twrap.removeClass('pleaseRotate');
    \t\t// alert('This is the animation');
    \t}
    }
\t\$(window).on('resize orientationChange', function(e) {

\t  \tresizeTimer = setTimeout(function() {
\t\t\tif (orientation.type==='landscape-primary') {
\t\t\t\tshowAnimation(true);
\t\t\t\t// wrap.css('background-image', 'url(https://az616578.vo.msecnd.net/files/responsive/embedded/any/desktop/2016/07/30/636055084736463790-1434063336_6.jpg)');
\t\t\t} else {
\t\t\t\tshowAnimation(false);
\t\t\t\t// wrap.css('background-image', 'url(http://www.newyorker.com/wp-content/uploads/2015/09/Sullivan-Trump-Homecoming-King-1200.jpg)');
\t\t\t}
\t\t            
\t\t  }, 250);
\t  \tresizeTimer;


  });


</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/pages/orientation.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <style type="text/css">*/
/* 	.videoPlaceholder {*/
/* 		margin-top:5em;*/
/* 		width: 320px;*/
/* 		height: 320px;*/
/* 		text-align: center;*/
/* 		padding:1em;*/
/* 		/*border: 1px solid #303030;*//* */
/* 		background-size: auto 100%;*/
/* 		background-position: center center;*/
/* 	}*/
/* */
/* 	.pleaseRotate {*/
/* 	  animation: pulse 2s infinite;*/
/* 	}*/
/* 	.pleaseRotate div , .videoPlaceholder i {*/
/* 		display:block;*/
/* 	}*/
/* 	.videoPlaceholder i {*/
/* 		font-size: 8em;*/
/* 	}*/
/* */
/* 	@keyframes pulse {*/
/* 	  0% {*/
/* */
/* 	    transform: rotate(90deg);*/
/* 	  }*/
/* 	  50% {*/
/* */
/* 	    transform: rotate(0deg);*/
/* 	  }*/
/* 	  100% {*/
/* 	    /*background-color: #FF4136;*//* */
/* 	    transform: rotate(90deg);*/
/* 	  }*/
/* 	}*/
/* </style>*/
/* <div class="container videoPlaceholder" >*/
/*     this is the container*/
/*     <button class="btn btn-primary getScreen">Get Screen</button>*/
/* </div>*/
/* */
/* <script>*/
/* 	var orientation = window.screen.orientation;*/
/*     var wrap = $('.videoPlaceholder');*/
/*     */
/*     function showAnimation(active) {*/
/*     	if (active===true) {*/
/*     		wrap.html('<div><i class="fa fa-mobile-phone"></i>Please turn your phone!</div>');*/
/*     		$('.videoPlaceholder i ').addClass('pleaseRotate');*/
/*     		// alert('This is the animation');*/
/*     	} else {*/
/*     		wrap.html('Okay youre good!');*/
/*     		wrap.removeClass('pleaseRotate');*/
/*     		// alert('This is the animation');*/
/*     	}*/
/*     }*/
/* 	$(window).on('resize orientationChange', function(e) {*/
/* */
/* 	  	resizeTimer = setTimeout(function() {*/
/* 			if (orientation.type==='landscape-primary') {*/
/* 				showAnimation(true);*/
/* 				// wrap.css('background-image', 'url(https://az616578.vo.msecnd.net/files/responsive/embedded/any/desktop/2016/07/30/636055084736463790-1434063336_6.jpg)');*/
/* 			} else {*/
/* 				showAnimation(false);*/
/* 				// wrap.css('background-image', 'url(http://www.newyorker.com/wp-content/uploads/2015/09/Sullivan-Trump-Homecoming-King-1200.jpg)');*/
/* 			}*/
/* 		            */
/* 		  }, 250);*/
/* 	  	resizeTimer;*/
/* */
/* */
/*   });*/
/* */
/* */
/* </script>*/
