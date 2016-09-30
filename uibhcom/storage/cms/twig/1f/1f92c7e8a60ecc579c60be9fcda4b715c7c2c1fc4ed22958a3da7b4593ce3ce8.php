<?php

/* /var/www/uibhcom/themes/demo/layouts/bh-live.htm */
class __TwigTemplate_9c355ecfa4dc7addd182c413e1cf64e6967e2697ce2090c9afee9f673370c151 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>

    <script>
        //if (!document.cookie.indexOf('cookieName') >= 0) {
            document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';
            //}</script>


            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta name=\"sitelanguage\" content=\"English\"/>







            <title>Bell Helicopter</title>
            <script type=\"text/javascript\" src=\"//use.typekit.net/gpx1zdm.js\"></script>    <script type=\"text/javascript\">
            try {
                Typekit.load();
            } catch (e) {
            }
        </script>
        <script type=\"text/javascript\"> var searchResultPage = \"/search-results\";</script>

        <link href=\"http://bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"http://bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap-slider.css\" rel=\"stylesheet\">
<!--         <link href=\"http://bellhelicopter.com/Presentation/includes/fonts/ss-social-regular.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"http://bellhelicopter.com/Presentation/includes/fonts/ss-geomicons-squared.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"http://bellhelicopter.com/Presentation/includes/fonts/ss-standard.css\" rel=\"stylesheet\" type=\"text/css\" /> -->
        <link href=\"//ui.bellhelicopter.com/assets/fonts/ss-standard/webfonts/ss-standard.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"//ui.bellhelicopter.com/assets/fonts/ss-social-regular/webfonts/ss-social-regular.css\" rel=\"stylesheet\" type=\"text/css\" /
        <link href=\"//ui.bellhelicopter.com/assets/fonts/ss-geomicons-squared/webfonts/ss-geomicons-squared.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"//ui.bellhelicopter.com/assets/fonts/ss-symbolicons-block/webfonts/ss-symbolicons-block.css\" rel=\"stylesheet\" type=\"text/css\" />


        <link href=\"http://bellhelicopter.com/Presentation/includes/js/lib/slick.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"http://bellhelicopter.com/Presentation/includes/js/lib/slick-theme.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"http://bellhelicopter.com/Presentation/includes/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"http://bellhelicopter.com/Presentation/includes/css/jquery-social-stream/css/dcsns_wall.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://bellhelicopter.com/Presentation/includes/js/lib/lazyYT.css\" />
        

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-10221913-1', 'auto');
          ga('send', 'pageview');

      </script>
      <!-- begin Pardot Website Tracking code -->
      <script type=\"text/javascript\">
        piAId = '132161';
        piCId = '1255';

        (function() {
           function async_load(){
              var s = document.createElement('script'); s.type = 'text/javascript';
              s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';
              var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);
          }
          if(window.attachEvent) { window.attachEvent('onload', async_load); }
          else { window.addEventListener('load', async_load, false); }
      })();
  </script>
  <!-- end Pardot Website Tracking code -->

</head>
<body data-spy=\"scroll\" data-offset=\"60\">

   ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("bell/header.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "
    ";
        // line 82
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 83
        echo "


<footer class=\"nocontent\">

    <div class=\"footer-wrapper\">
        <div class=\"container\">
            <footer>
                <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <input class=\"form-control\" name=\"qFooter\" data-lang=\"English\" type=\"search\" placeholder=\"Search for...\">
                                <div class=\"input-group-addon\"><span class=\"ss-icon globalSearch\" style=\"top: 3px; position: relative; cursor: pointer;\">&#x1F50E;</span></div>
                            </div>
                        </div>

                        <h4>Connect with us</h4>
                        <p>
                            <a href=\"https://www.facebook.com/bellhelicopter\" class=\"ss-icon ss-social-regular ss-facebook\"></a>
                            <a href=\"https://twitter.com/one_bell\" class=\"ss-icon ss-social-regular ss-twitter\"></a>
                            <a href=\"https://www.youtube.com/user/TheBellHelicopter\" class=\"ss-icon ss-social-regular ss-youtube\"></a>
                        </p>


                    </div>

                    <div class=\"col-md-2 col-sm-6\">
                        <h4>Aircraft</h4>
                        <ul>
                            <li><a href=\"/commercial\">All Commercial</a></li>
                            <li><a href=\"/military\">All Military</a></li>
                            <li><a href=\"/support-and-service/support/css-directory/customer-sales-and-support\">Sales Reps</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-2 col-sm-6\">
                        <h4>Company</h4>
                        <ul>
                            <li><a href=\"/careers\">Careers</a></li>
                            <li><a href=\"/company/community-programs\">Community Programs</a></li>
                            <li><a href=\"/contact\">Contact</a></li>
                            <li><a href=\"/knowledgebase\">Knowledgebase</a></li>
                            <li><a href=\"/news\">News</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-2 col-sm-6\">
                        <h4>Customers</h4>
                        <ul>
                            <li><a href=\"/support-and-service/support/css-directory/customer-sales-and-support\">Customer Support & Services Directory</a></li>
                            <li><a href=\"/support-and-service/services\">Services</a></li>
                            <li><a href=\"/support-and-service/support\">Support</a></li>
                            <li><a href=\"/support-and-service/training\">Training</a></li>
                        </ul>
                    </div>
                    <div class=\"col-md-2 col-sm-6\">
                        <h4>Legal</h4>
                        <ul>
                            <li><a href=\"/legal\">Business Conduct and Privacy Statement</a></li>
                            <li><a href=\"/legal/copyright-notice\">Copyright Notice</a></li>
                            <li><a href=\"/legal/terms-of-use\">Terms of Use</a></li>
                            <li><a href=\"/legal/ca-transparency-in-suppliers-act\">CA Transparency in Suppliers Act</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <p class=\"copy\">Copyright 2016 Bell Helicopter Textron Inc.</p>
            </footer>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/lib/jquery.scrollTo.min.js\"></script>
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/bootstrap/bootstrap.min.js\"></script>
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/lib/sticky.js\"></script>
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/bootstrap/bootstrap-slider.js\"></script>
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/lib/jquery.cookie.js\"></script>
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/jquery-social-stream/js/jquery.social.stream.wall.1.6.js\"></script>
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/jquery-social-stream/js/jquery.social.stream.1.5.11.min.js\"></script>
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/lib/slick.min.js\" type=\"text/javascript\"></script>
    <script src=\"http://bellhelicopter.com/Presentation/includes/js/lib/lazyYT.js\" type=\"text/javascript\"></script>

    <!-- Leave this outside of script files. Do not place any script files before this -->
    <script>
        var \$j = jQuery.noConflict();
    </script>
    <script type=\"text/javascript\" src=\"http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.search.js\"></script>
    <script type=\"text/javascript\" src=\"http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.search.news.js\"></script>
    <script type=\"text/javascript\" src=\"http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.contact.js\"></script>

    <script type=\"text/javascript\" src=\"http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.site.js\"></script>
    <script>
        var frenchRedirectURL = \"http://fr.bellhelicopter.com/\";
    </script>
    <script type=\"text/javascript\" src=\"http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.frenchredirect.js\"></script>
</footer>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/layouts/bh-live.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 83,  107 => 82,  104 => 81,  100 => 80,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* */
/*     <script>*/
/*         //if (!document.cookie.indexOf('cookieName') >= 0) {*/
/*             document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';*/
/*             //}</script>*/
/* */
/* */
/*             <meta charset="utf-8">*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*             <meta name="sitelanguage" content="English"/>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/*             <title>Bell Helicopter</title>*/
/*             <script type="text/javascript" src="//use.typekit.net/gpx1zdm.js"></script>    <script type="text/javascript">*/
/*             try {*/
/*                 Typekit.load();*/
/*             } catch (e) {*/
/*             }*/
/*         </script>*/
/*         <script type="text/javascript"> var searchResultPage = "/search-results";</script>*/
/* */
/*         <link href="http://bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="http://bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap-slider.css" rel="stylesheet">*/
/* <!--         <link href="http://bellhelicopter.com/Presentation/includes/fonts/ss-social-regular.css" rel="stylesheet" type="text/css" />*/
/*         <link href="http://bellhelicopter.com/Presentation/includes/fonts/ss-geomicons-squared.css" rel="stylesheet" type="text/css" />*/
/*         <link href="http://bellhelicopter.com/Presentation/includes/fonts/ss-standard.css" rel="stylesheet" type="text/css" /> -->*/
/*         <link href="//ui.bellhelicopter.com/assets/fonts/ss-standard/webfonts/ss-standard.css" rel="stylesheet" type="text/css" />*/
/*         <link href="//ui.bellhelicopter.com/assets/fonts/ss-social-regular/webfonts/ss-social-regular.css" rel="stylesheet" type="text/css" /*/
/*         <link href="//ui.bellhelicopter.com/assets/fonts/ss-geomicons-squared/webfonts/ss-geomicons-squared.css" rel="stylesheet" type="text/css" />*/
/*         <link href="//ui.bellhelicopter.com/assets/fonts/ss-symbolicons-block/webfonts/ss-symbolicons-block.css" rel="stylesheet" type="text/css" />*/
/* */
/* */
/*         <link href="http://bellhelicopter.com/Presentation/includes/js/lib/slick.css" rel="stylesheet" type="text/css" />*/
/*         <link href="http://bellhelicopter.com/Presentation/includes/js/lib/slick-theme.css" rel="stylesheet" type="text/css" />*/
/*         <link href="http://bellhelicopter.com/Presentation/includes/css/app.min.css" rel="stylesheet">*/
/*         <link href="http://bellhelicopter.com/Presentation/includes/css/jquery-social-stream/css/dcsns_wall.css" rel="stylesheet" type="text/css" />*/
/*         <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.css" />*/
/*         <link rel="stylesheet" type="text/css" href="http://bellhelicopter.com/Presentation/includes/js/lib/lazyYT.css" />*/
/*         */
/* */
/*         <script>*/
/*           (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*               (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*               m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*           })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*           ga('create', 'UA-10221913-1', 'auto');*/
/*           ga('send', 'pageview');*/
/* */
/*       </script>*/
/*       <!-- begin Pardot Website Tracking code -->*/
/*       <script type="text/javascript">*/
/*         piAId = '132161';*/
/*         piCId = '1255';*/
/* */
/*         (function() {*/
/*            function async_load(){*/
/*               var s = document.createElement('script'); s.type = 'text/javascript';*/
/*               s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';*/
/*               var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);*/
/*           }*/
/*           if(window.attachEvent) { window.attachEvent('onload', async_load); }*/
/*           else { window.addEventListener('load', async_load, false); }*/
/*       })();*/
/*   </script>*/
/*   <!-- end Pardot Website Tracking code -->*/
/* */
/* </head>*/
/* <body data-spy="scroll" data-offset="60">*/
/* */
/*    {% partial "bell/header.htm" %}*/
/* */
/*     {% page %}*/
/* */
/* */
/* */
/* <footer class="nocontent">*/
/* */
/*     <div class="footer-wrapper">*/
/*         <div class="container">*/
/*             <footer>*/
/*                 <div class="row">*/
/*                     <div class="col-md-4 col-sm-12">*/
/*                         <div class="form-group">*/
/*                             <div class="input-group">*/
/*                                 <input class="form-control" name="qFooter" data-lang="English" type="search" placeholder="Search for...">*/
/*                                 <div class="input-group-addon"><span class="ss-icon globalSearch" style="top: 3px; position: relative; cursor: pointer;">&#x1F50E;</span></div>*/
/*                             </div>*/
/*                         </div>*/
/* */
/*                         <h4>Connect with us</h4>*/
/*                         <p>*/
/*                             <a href="https://www.facebook.com/bellhelicopter" class="ss-icon ss-social-regular ss-facebook"></a>*/
/*                             <a href="https://twitter.com/one_bell" class="ss-icon ss-social-regular ss-twitter"></a>*/
/*                             <a href="https://www.youtube.com/user/TheBellHelicopter" class="ss-icon ss-social-regular ss-youtube"></a>*/
/*                         </p>*/
/* */
/* */
/*                     </div>*/
/* */
/*                     <div class="col-md-2 col-sm-6">*/
/*                         <h4>Aircraft</h4>*/
/*                         <ul>*/
/*                             <li><a href="/commercial">All Commercial</a></li>*/
/*                             <li><a href="/military">All Military</a></li>*/
/*                             <li><a href="/support-and-service/support/css-directory/customer-sales-and-support">Sales Reps</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="col-md-2 col-sm-6">*/
/*                         <h4>Company</h4>*/
/*                         <ul>*/
/*                             <li><a href="/careers">Careers</a></li>*/
/*                             <li><a href="/company/community-programs">Community Programs</a></li>*/
/*                             <li><a href="/contact">Contact</a></li>*/
/*                             <li><a href="/knowledgebase">Knowledgebase</a></li>*/
/*                             <li><a href="/news">News</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="col-md-2 col-sm-6">*/
/*                         <h4>Customers</h4>*/
/*                         <ul>*/
/*                             <li><a href="/support-and-service/support/css-directory/customer-sales-and-support">Customer Support & Services Directory</a></li>*/
/*                             <li><a href="/support-and-service/services">Services</a></li>*/
/*                             <li><a href="/support-and-service/support">Support</a></li>*/
/*                             <li><a href="/support-and-service/training">Training</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="col-md-2 col-sm-6">*/
/*                         <h4>Legal</h4>*/
/*                         <ul>*/
/*                             <li><a href="/legal">Business Conduct and Privacy Statement</a></li>*/
/*                             <li><a href="/legal/copyright-notice">Copyright Notice</a></li>*/
/*                             <li><a href="/legal/terms-of-use">Terms of Use</a></li>*/
/*                             <li><a href="/legal/ca-transparency-in-suppliers-act">CA Transparency in Suppliers Act</a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*                 <hr>*/
/*                 <p class="copy">Copyright 2016 Bell Helicopter Textron Inc.</p>*/
/*             </footer>*/
/*         </div>*/
/*     </div>*/
/*     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/*     <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/lib/jquery.scrollTo.min.js"></script>*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/bootstrap/bootstrap.min.js"></script>*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/lib/sticky.js"></script>*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/bootstrap/bootstrap-slider.js"></script>*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/lib/jquery.cookie.js"></script>*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/jquery-social-stream/js/jquery.social.stream.wall.1.6.js"></script>*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/jquery-social-stream/js/jquery.social.stream.1.5.11.min.js"></script>*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/lib/slick.min.js" type="text/javascript"></script>*/
/*     <script src="http://bellhelicopter.com/Presentation/includes/js/lib/lazyYT.js" type="text/javascript"></script>*/
/* */
/*     <!-- Leave this outside of script files. Do not place any script files before this -->*/
/*     <script>*/
/*         var $j = jQuery.noConflict();*/
/*     </script>*/
/*     <script type="text/javascript" src="http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.search.js"></script>*/
/*     <script type="text/javascript" src="http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.search.news.js"></script>*/
/*     <script type="text/javascript" src="http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.contact.js"></script>*/
/* */
/*     <script type="text/javascript" src="http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.site.js"></script>*/
/*     <script>*/
/*         var frenchRedirectURL = "http://fr.bellhelicopter.com/";*/
/*     </script>*/
/*     <script type="text/javascript" src="http://bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.frenchredirect.js"></script>*/
/* </footer>*/
/* </body>*/
/* </html>*/
