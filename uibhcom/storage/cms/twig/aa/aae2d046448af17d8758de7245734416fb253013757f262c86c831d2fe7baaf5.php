<?php

/* /var/www/uibhcom/themes/demo/layouts/bh-dev.htm */
class __TwigTemplate_787a5b8a1af4f34f0dded793e657acb01b97520d21ad610c5d76c1f5e2d759e1 extends Twig_Template
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


          <meta name=\"VIcurrentDateTime\" content=\"636068963531828061\" />
          <script type=\"text/javascript\" src=\"http://www.bellhelicopter.com/layouts/system/VisitorIdentification.js\"></script>
          <meta charset=\"utf-8\">
          <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
          <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\">
          <meta name=\"sitelanguage\" content=\"English\"/>


          <title>Bell Helicopter</title>
          <script type=\"text/javascript\" src=\"http://use.typekit.net/gpx1zdm.js\"></script>    <script type=\"text/javascript\">
          try {
            Typekit.load();
          } catch (e) {
          }
        </script>
        <script type=\"text/javascript\"> var searchResultPage = \"/search-results\";</script>
        <link href=\"http://www.bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"http://www.bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap-slider.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css\">
        <link href=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/slick.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/slick-theme.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"http://www.bellhelicopter.com/Presentation/includes/css/app.min.css\" rel=\"stylesheet\">
        <link href=\"http://www.bellhelicopter.com/Presentation/includes/css/jquery-social-stream/css/dcsns_wall.css\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://cdn.jsdelivr.net/jquery.slick/1.5.5/slick.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/lazyYT.css\" />
        <script src=\"https://code.jquery.com/jquery-3.1.0.min.js\" integrity=\"sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=\" crossorigin=\"anonymous\"></script>
        ";
        // line 37
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("config/config.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "
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
            }x
            if(window.attachEvent) { window.attachEvent('onload', async_load); }
            else { window.addEventListener('load', async_load, false); }
          })();
        </script>
        <!-- end Pardot Website Tracking code -->

        <style type=\"text/css\">
          .home-cta-text div {
            display: block;
            color: rgba(88,88,90,.9);
          }
          .bg-tint {
            /*background-color: rgba(0,0,0,0.4);*/
            padding:1em;
            box-shadow: 2px 2px 6px #303030;
            background-color: rgba(225,225,225,0.9);
          }
          .bg-muted {
            padding-top:10vh;
            background: #f4f4f4;
            min-height: 80vh;
          }
          /*.home-cta-text .row {*/
          .home-cta-text .row {
            margin-top:12em;
          }
          .home-cta-text form {
            width:40%;
            display: inline-block;
            text-align: center;
            background-color:#f4f4f4;
          }
          .home-cta-text img {
            width:100%;
          }
          .home-cta-text {
            margin-bottom: 0;
          }
          .error {
            color:red;
            text-align: left;
          }
          p.error.no-label {
            border-top:solid 3px red;
            position: relative;
            bottom: 13px;
          }
          .form-field {
            width: 46%;
            display: inline-block;
          }
/*          #pardot-form .first_name, #pardot-form .last_name {
            position: relative;
            right: 6px;
          }*/
          .pd-text input {
            display: block;
            width: 100%;
            padding: 0.4em;
            font-size: 12px;
            line-height: 1.33333333;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
          }
          /*.pd-checkbox:first-of-type {*/
          .pd-checkbox {
            display:block;
            width:100%;
            height: 61px;
            margin-bottom:1em;
          }
          .pd-checkbox label {
            padding-left: 1.5em;
            padding-right: 1.5em;
          }
          .pd-checkbox input {
            /*height: 35px;*/
          }
          .field-label { 
            position: relative;
            top: 4px;
            font-size: 0.65em;
            text-align: left;
            display: block;
            margin-left: 0;
          }
          .submit {
            padding: 0px 16px;
          }
          .submit input {
            display: block;
            width:100%;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 16px;
            font-weight: 700;
            line-height: 1.33333333;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: #58595B;
            color: #fff;
            border: none;
            font-weight: 400;
          }
          .form-field input:hover, .form-field input:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
          }
/*          .comments {
            height:30px;
          }*/
          .comments {
            height:inherit;
          }
          .comments .description, .Pro_Pilot_Consent .description {
            display: block;
            font-size:10px;
            text-align: left;
            padding-left:25px;
            padding-right:25px;
          }
          .comments .value, .Pro_Pilot_Consent .value {
            top:7px;
          }
          .value, form.form .pd-checkbox .value input {
            position: relative;
            bottom: 26.25px;
          }

          .social-links .fa {
            padding: 0.3em;
            font-size: 3em;
            color:#ffffff;
          }
          .landing-page-right {
            float:right;
          }

          .feature-spotlight .fa {
            display: block;
          }
          .hero {
            margin-top:11vh;
            background-image: url('http://www.bellhelicopter.com/~/media/bell/products/bell%20412ep/412ep_photo_laco-sdsl2749_150520-r00.ashx');
          }
          a:hover {
            color: #f4f4f4;
            text-decoration: none;
          }
          .navbar-ie {
            display: none;
          }
          .Pro_Pilot_Consent {
            height: auto;
          }
          @media(max-width: 991px) { /* IPAD AND TABLETS */
            .home-cta-text form {
              width:100%;
              padding: 1em;
            }
            .landing-page-left h1 {
              text-align: center;
            }
            .submit {
              padding: 0px 3.75%;
            }
            .pd-text input {
              font-size:1.5em;
            }
            .comments {
              height:35px;
            }
            .Privacy_Policy .value , .Marketing_Consent .value {
              bottom:10px;
            }
            .submit input {
              font-size:1.5em;
            }
            .pd-checkbox {
              padding-left: 1.5em;
              padding-right: 1.5em;
            }
          }
          @media(max-width: 460px) { /* MOBILE DEVICES */
            .form-field {
              width: 100%;
            }
            .pd-checkbox label {
              margin-left: 20px;
              position: relative;
              top: 12px;
            }
            #pardot-form .first_name, #pardot-form .last_name {
                right: 0px;
            }

            .submit {
              padding: 0px;
            }

            .value, form.form .pd-checkbox .value input {
                position: relative;
                bottom: 23px;
            }
            .home-cta-text .row {
              margin-top:6em;
            }
            .Privacy_Policy {
              height: 63px;
            }
            .Marketing_Consent {
              height:80px;
            }
          }

        </style>

        <!--[if IE]>
          <link rel=\"stylesheet\" type=\"text/css\" href=\"http://go.bh.com/l/131161/2016-09-13/hqhwh/131161/21788/pardot_1.css\" />
        <![endif]-->

      </head>
      <body data-spy=\"scroll\" data-offset=\"60\">
        <header class=\"nocontent\">

          <a class=\"ss-directup scroll-top\" href=\"#sectionTop\" id=\"scrollToTop\" style=\"display: none;\"></a>
          <div class=\"navbar navbar-utility\" id=\"sectionTop\">
            <div class=\"container\">
              <div class=\"collapse navbar-collapse\" id=\"utility-nav-collapse\">
                <ul class=\"nav navbar-nav navbar-right\">
                  <li><a href=\"http://www.bellhelicopter.com/suppliers\">Suppliers</a></li>  
                  <li><a href=\"http://www.bellhelicopter.com/company\">Company</a></li>  
                  <li><a href=\"http://www.bellhelicopter.com/careers\">Careers</a></li>  
                  <li><a href=\"http://www.bellhelicopter.com/news\">News</a></li>  
                  <li><a href=\"http://www.bellhelicopter.com/contact\">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class=\"navbar-ie\" role=\"navigation\">
                <a href='http://www.bellhelicopter.com/' >
                  <img src=\"http://www.bellhelicopter.com/~/media/bell/images/navigation/logohires.ashx\" alt=\"LogoHiRes\">
                </a>
          </div>

          <div class=\"navbar navbar-static-top navbar-home\" role=\"navigation\">
            <div class=\"navbar-home-top-wrap\">
              <div class=\"container\">
                <ul class=\"nav navbar-nav navbar-right\">
                  <li class=\"hidden-xs\"><a href=\"#\" id=\"navCommercial\">Commercial <span class=\"caret\"></span></a></li>
                  <li class=\"hidden-xs\"><a href=\"#\" id=\"navMilitary\">Military <span class=\"caret\"></span></a></li>
                  <li class=\"hidden-xs\"><a href=\"#\" id=\"navSupportService\">Support & Services <span class=\"caret\"></span></a></li>
                  <li><a href=\"#\" id=\"navSearch\" class=\"hidden-md hidden-sm hidden-xs\"><span class=\"fa fa-search\"></span></a></li>


                  <li class=\"dropdown visible-xs xs-dropdown-menu\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"fa fa-bars\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                      <li><a href=\"http://www.bellhelicopter.com/commercial\">Commercial</a></li>
                      <li><a href=\"http://www.bellhelicopter.com/military\">Military</a></li>
                      <li><a href=\"http://www.bellhelicopter.com/support-and-service\">Support & Services</a></li>
                      <li><a href=\"http://www.bellhelicopter.com/search-results\">Search</a></li>
                      <li role=\"presentation\" class=\"divider\"></li>
                      <li><a href=\"http://www.bellhelicopter.com/suppliers\">Suppliers</a></li>
                      <li><a href=\"http://www.bellhelicopter.com/company\">Company</a></li>
                      <li><a href=\"http://www.bellhelicopter.com/careers\">Careers</a></li>
                      <li><a href=\"http://www.bellhelicopter.com/news\">News</a></li>
                      <li><a href=\"http://www.bellhelicopter.com/contact\">Contact</a></li>

                    </ul>
                  </li>
                </ul>

                <div class=\"navbar-header\">
                  <a href='http://www.bellhelicopter.com/' class='navbar-brand' target='Active Browser' >                    <img src=\"http://www.bellhelicopter.com/~/media/bell/images/navigation/logohires.ashx\" alt=\"LogoHiRes\">
                  </a>            </div>
                </div><!--/.navbar-collapse -->
              </div>
              <div class=\"navbar-search hidden-xs\">
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-md-5 col-md-offset-7\">
                      <form action=\"http://www.bellhelicopter.com/search-results/\" class=\"search-form\">
                        <div class=\"input-group\">
                          <input class=\"form-control\" name=\"q\" data-lang=\"English\" type=\"search\" placeholder=\"Search for...\">
                          <span class=\"input-group-btn\">
                            <button class=\"btn btn-primary globalSearch\" type=\"button\"><span class=\"fa\">Search</span></button>
                          </span>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"navbar-super hidden-xs\" id=\"navBarSuperCommercial\">
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-3 navbar-subnav\" style=\"padding-right: 0;\">                          
                      <ul class=\"navbar-subnav-menu\">
                        <li class=\"navbar-subnav-heading\"><span class=\"hidden-lg hidden-md\">Commercial</span><span class=\"hidden-sm\">Commercial Aircraft</span></li>
                        <li><a data-id=\"mega-Bell206L4\">Bell 206L4</a></li>
                        <li><a data-id=\"mega-Bell407GXP\">Bell 407GXP</a></li>
                        <li><a data-id=\"mega-Bell412EP\">Bell 412EP</a></li>
                        <li><a data-id=\"mega-Bell412EPI\">Bell 412EPI</a></li>
                        <li><a data-id=\"mega-Bell429\">Bell 429</a></li>
                        <li><a data-id=\"mega-Bell429WLG\">Bell 429WLG</a></li>
                        <li><a data-id=\"mega-Bell505JetRangerX\">Bell 505 Jet Ranger X</a></li>
                        <li><a data-id=\"mega-Bell525Relentless\">Bell 525 Relentless</a></li>
                        <li><a data-id=\"mega-BellHueyII\">Bell Huey II</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/commercial/pre-owned\">Pre-Owned Aircraft</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/commercial\" class=\"nav-super-more\">All Commercial &raquo;</a></li>
                      </ul>
                    </div>

                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-206l4\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-Bell206L4\" style=\"padding-left: 0; \">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/206l4_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell 206L4</h1>
                            <p>Reliability Meets Proven Capability</p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-download text-large\"></div>
                                2,119 lbs. Useful Load
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-compass text-large\"></div>
                                325 nm Max Range
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                6 Passengers
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-407gxp\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-Bell407GXP\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/407gxp_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell 407GXP</h1>
                            <p>Superior Performance Reaches a Higher Level</p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                140 kts Max Speed
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-download text-large\"></div>
                                2,558 lbs. Useful Load (IGW)
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                6 Passengers
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-412ep\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-Bell412EP\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/412ep_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell 412EP</h1>
                            <p>A daily workhorse in the most extreme climates on the planet</p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-download text-large\"></div>
                                5,100 lbs. Useful Load
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-compass text-large\"></div>
                                357 nm Max Range
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                14 Passengers
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-412epi\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-Bell412EPI\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/412epi_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell 412EPI</h1>
                            <p>The 412EPI goes digital with the Bell BasiX-Pro™ Flight Deck. </p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-download text-large\"></div>
                                4,829 lbs. Useful Load
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-compass text-large\"></div>
                                364 nm Max Range
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                14 Passengers
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-429\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-Bell429\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/429_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell 429</h1>
                            <p>Exceptional Speed, Range and Performance</p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                150 kts Max Cruise
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-briefcase text-large\"></div>
                                204 ft&sup3; Cabin Volume
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                7 Passengers
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-429wlg\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-Bell429WLG\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/429wlg_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell 429WLG</h1>
                            <p>Superb Performance with Sleek Design</p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                154 kts Max Cruise
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-wrench text-large\"></div>
                                Retractable Landing Gear
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                7 Passengers
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-505\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-Bell505JetRangerX\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/505_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell 505 Jet Ranger X</h1>
                            <p>Best in Class Combination of Payload, Speed and Range</p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                125+ kts Max Cruise
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-download text-large\"></div>
                                1,500 lbs. Useful Load
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                4 Passengers
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-525\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-Bell525Relentless\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/525_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell 525 Relentless</h1>
                            <p>Best in Class Payload, Range, Cabin and Mission Capability</p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                162 kts Max Cruise
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-compass text-large\"></div>
                                570 nm Max Range
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                Up to 20 Passengers
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/commercial/bell-huey-ii\">
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-BellHueyII\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/hueyii_website-headers.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\" btn btn-default pull-right\">Learn More</div>
                            <h1>Bell Huey II</h1>
                            <p></p>
                            <br>
                            <div class=\"row feature-spotlight\">

                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-download text-large\"></div>
                                4,873 lbs. Useful Load
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-briefcase text-large\"></div>
                                220 ft&sup3; Cabin Volume
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                1+14 Max Seating
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>
                  </div>
                </div>
              </div>
              <div class=\"navbar-super hidden-xs\" id=\"navBarSuperMilitary\">
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-3 navbar-subnav\" style=\"padding-right: 0;\">
                      <ul class=\"navbar-subnav-menu\">
                        <li class=\"navbar-subnav-heading\"><span class=\"hidden-lg hidden-md\">Military</span><span class=\"hidden-sm\">Military Aircraft</span></li>
                        <li><a data-id=\"mega-BellAH1Z\" id=\"military\">Bell AH-1Z</a></li>
                        <li><a data-id=\"mega-BellBoeingV22Osprey\" id=\"military\">Bell Boeing V-22 Osprey</a></li>
                        <li><a data-id=\"mega-BellUH1Y\" id=\"military\">Bell UH-1Y</a></li>
                        <li><a data-id=\"mega-BellV280Valor\" id=\"military\">Bell V-280 Valor</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/military\" class=\"nav-super-more\">All Military &raquo;</a></li>
                      </ul>
                    </div>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/military/bell-ah-1z\" >
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-BellAH1Z\" style=\"padding-left: 0; \">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/ah-1z_website-header.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\"btn btn-default pull-right\">Learn More</div>
                            <h1>Bell AH-1Z</h1>
                            <p>The most advanced attack helicopter in the world.</p>
                            <br>
                            <div class=\"row feature-spotlight\">
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                200 KIAS Max Speed
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-crosshair text-large\"></div>
                                131 nm Combat Radius
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                2 Pilots
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/military/bell-boeing-v-22\" >
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-BellBoeingV22Osprey\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/mv-22_website-header.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\"btn btn-default pull-right\">Learn More</div>
                            <h1>Bell Boeing V-22 Osprey</h1>
                            <p>The V-22 redefines operational possibilities </p>
                            <br>
                            <div class=\"row feature-spotlight\">
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                266 kts Max Cruise
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-compass text-large\"></div>
                                24,000 ft Service Ceiling
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                24 Troop Seats
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/military/bell-uh-1y\" >
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-BellUH1Y\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/uh-1y_website-header.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\"btn btn-default pull-right\">Learn More</div>
                            <h1>Bell UH-1Y</h1>
                            <p>The utility helicopter built on a rich history with 21st century technology</p>
                            <br>
                            <div class=\"row feature-spotlight\">
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                170 KIAS Max Speed
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-crosshair text-large\"></div>
                                119 nm Combat Radius
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                2 Crew and 8 Passenger Seats
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class=\"navlink\" href=\"http://www.bellhelicopter.com/military/bell-v-280\" >
                      <div class=\"col-sm-9 navbar-hero-wrap\" id=\"mega-BellV280Valor\" style=\"padding-left: 0; display:none;\">
                        <div class=\"navbar-hero-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/v-280_website-header.ashx');\">
                          <div class=\"navbar-hero-text\">
                            <div class=\"btn btn-default pull-right\">Learn More</div>
                            <h1>Bell V-280 Valor</h1>
                            <p>Twice the speed, twice the range of current helicopters</p>
                            <br>
                            <div class=\"row feature-spotlight\">
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-crosshair text-large\"></div>
                                500-800nm Combat Range
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-dashboard text-large\"></div>
                                280 KTAS
                              </div>
                              <div class=\"col-md-2 col-sm-3 col-xs-6 text-center\">
                                <div class=\"fa fa-users text-large\"></div>
                                4 Crew & 14 Troops
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>

                  </div>
                </div>
              </div>
              <div class=\"navbar-super hidden-xs nav-super\" id=\"navBarSuperCSS\">
                <div class=\"container\">
                  <div class=\"row\">
                    <div class=\"col-sm-3 navbar-subnav\">
                      <ul class=\"navbar-subnav-menu\">
                        <li class=\"navbar-subnav-heading\"><span class=\"hidden-sm\">Customer</span> Support & Services</li>

                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/support\">Support</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/services\">Services</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/training\">Training</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/services/customer-advantage-plans\">Customer Advantage Plans</a></li>
                        <li><a href=\"https://bellportal.textron.com/\">Customer Portal</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/knowledgebase\">Knowledgebase</a></li>

                        <li><a href=\"http://www.bellhelicopter.com/support-and-service\" class=\"nav-super-more\">More &raquo;</a></li>
                      </ul>
                    </div>
                    <div class=\"col-sm-3 nav-super-item\" data-url=\"/support-and-service/support\">
                      <div class=\"nav-super-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/css/support.ashx');\">
                        <div class=\"nav-super-image-overlay\">
                        </div>
                      </div>
                      <span class=\"fa fa-chat\"></span>
                      <div class=\"nav-super-title\">Support</div>
                      <div class=\"nav-super-sub\">Find contact information for your local Customer Service Facility and Bell Technical Support.</div>
                    </div>
                    <div class=\"col-sm-3 nav-super-item\" data-url=\"/support-and-service/services\">
                      <div class=\"nav-super-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/css/services.ashx');\">
                        <div class=\"nav-super-image-overlay\">
                        </div>
                      </div>
                      <span class=\"fa fa-settings\"></span>
                      <div class=\"nav-super-title\">Services</div>
                      <div class=\"nav-super-sub\">Easy access to parts, technical publications, bulletins and information on our other services.</div>
                    </div>
                    <div class=\"col-sm-3 nav-super-item\" data-url=\"/support-and-service/training\">
                      <div class=\"nav-super-image\" style=\"background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/css/training.ashx');\">
                        <div class=\"nav-super-image-overlay\">
                        </div>
                      </div>
                      <span class=\"fa fa-clipboard\"></span>
                      <div class=\"nav-super-title\">Training</div>
                      <div class=\"nav-super-sub\">Learn about and register for classes at the premier Bell Helicopter Training Academy.</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </header>





          <div class=\"bg-muted\">
            ";
        // line 824
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 825
        echo "          </div>


          <footer class=\"nocontent\">

            <div class=\"footer-wrapper\">
              <div class=\"container\">
                <footer>
                  <div class=\"row\">
                    <div class=\"col-md-4 col-sm-12 connect\">
                      <div class=\"form-group\">
                        <div class=\"input-group\">
                          <input class=\"form-control\" name=\"qFooter\" data-lang=\"English\" type=\"search\" placeholder=\"Search for...\">
                          <div class=\"input-group-addon\"><span class=\"fa fa-search globalSearch\" style=\"top: 3px; position: relative; cursor: pointer;\"></span></div>
                        </div>
                      </div>

                      <h4>Connect with us</h4>
                      <p class=\"social-links\">
                        <a href=\"https://www.facebook.com/bellhelicopter\" class=\"fa fa-facebook\"></a>
                        <a href=\"https://twitter.com/one_bell\" class=\"fa fa-twitter\"></a>
                        <a href=\"https://www.youtube.com/user/TheBellHelicopter\" class=\"fa fa-youtube\"></a>
                      </p>


                    </div>

                    <div class=\"col-md-2 col-sm-6\">
                      <h4>Aircraft</h4>
                      <ul>
                        <li><a href=\"http://www.bellhelicopter.com/commercial\">All Commercial</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/military\">All Military</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/support/css-directory/customer-sales-and-support\">Sales Reps</a></li>
                      </ul>
                    </div>
                    <div class=\"col-md-2 col-sm-6\">
                      <h4>Company</h4>
                      <ul>
                        <li><a href=\"http://www.bellhelicopter.com/careers\">Careers</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/company/community-programs\">Community Programs</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/contact\">Contact</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/knowledgebase\">Knowledgebase</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/news\">News</a></li>
                      </ul>
                    </div>
                    <div class=\"col-md-2 col-sm-6\">
                      <h4>Customers</h4>
                      <ul>
                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/support/css-directory/customer-sales-and-support\">Customer Support & Services Directory</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/services\">Services</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/support\">Support</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/support-and-service/training\">Training</a></li>
                      </ul>
                    </div>
                    <div class=\"col-md-2 col-sm-6\">
                      <h4>Legal</h4>
                      <ul>
                        <li><a href=\"http://www.bellhelicopter.com/legal\">Business Conduct and Privacy Statement</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/legal/copyright-notice\">Copyright Notice</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/legal/terms-of-use\">Terms of Use</a></li>
                        <li><a href=\"http://www.bellhelicopter.com/legal/ca-transparency-in-suppliers-act\">CA Transparency in Suppliers Act</a></li>
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
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/jquery.scrollTo.min.js\"></script>
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/bootstrap/bootstrap.min.js\"></script>
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/sticky.js\"></script>
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/bootstrap/bootstrap-slider.js\"></script>
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/jquery.cookie.js\"></script>
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/jquery-social-stream/js/jquery.social.stream.wall.1.6.js\"></script>
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/jquery-social-stream/js/jquery.social.stream.1.5.11.min.js\"></script>
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/slick.min.js\" type=\"text/javascript\"></script>
            <script src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/lazyYT.js\" type=\"text/javascript\"></script>
            <!-- Leave this outside of script files. Do not place any script files before this -->
            <script>
              var \$j = jQuery.noConflict();
            </script>
            <script type=\"text/javascript\" src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.search.js\"></script>
            <script type=\"text/javascript\" src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.search.news.js\"></script>
            <script type=\"text/javascript\" src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.contact.js\"></script>

            <script type=\"text/javascript\" src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.site.js\"></script>
            <script>
              var frenchRedirectURL = \"http://fr.bellhelicopter.com/\";
            </script>
            <script type=\"text/javascript\" src=\"http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.frenchredirect.js\"></script>

          </footer>
        </body>
        </html>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/layouts/bh-dev.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  851 => 825,  849 => 824,  61 => 38,  57 => 37,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* */
/*   <script>*/
/*         //if (!document.cookie.indexOf('cookieName') >= 0) {*/
/*           document.cookie = 'resolution=' + Math.max(screen.width, screen.height) + '; path=/';*/
/*           //}</script>*/
/* */
/* */
/*           <meta name="VIcurrentDateTime" content="636068963531828061" />*/
/*           <script type="text/javascript" src="http://www.bellhelicopter.com/layouts/system/VisitorIdentification.js"></script>*/
/*           <meta charset="utf-8">*/
/*           <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*           <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">*/
/*           <meta name="sitelanguage" content="English"/>*/
/* */
/* */
/*           <title>Bell Helicopter</title>*/
/*           <script type="text/javascript" src="http://use.typekit.net/gpx1zdm.js"></script>    <script type="text/javascript">*/
/*           try {*/
/*             Typekit.load();*/
/*           } catch (e) {*/
/*           }*/
/*         </script>*/
/*         <script type="text/javascript"> var searchResultPage = "/search-results";</script>*/
/*         <link href="http://www.bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap.min.css" rel="stylesheet">*/
/*         <link href="http://www.bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap-slider.css" rel="stylesheet">*/
/*         <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">*/
/*         <link href="http://www.bellhelicopter.com/Presentation/includes/js/lib/slick.css" rel="stylesheet" type="text/css" />*/
/*         <link href="http://www.bellhelicopter.com/Presentation/includes/js/lib/slick-theme.css" rel="stylesheet" type="text/css" />*/
/*         <link href="http://www.bellhelicopter.com/Presentation/includes/css/app.min.css" rel="stylesheet">*/
/*         <link href="http://www.bellhelicopter.com/Presentation/includes/css/jquery-social-stream/css/dcsns_wall.css" rel="stylesheet" type="text/css" />*/
/*         <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.5.5/slick.css" />*/
/*         <link rel="stylesheet" type="text/css" href="http://www.bellhelicopter.com/Presentation/includes/js/lib/lazyYT.css" />*/
/*         <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>*/
/*         {% partial "config/config.htm" %}*/
/* */
/*         <script>*/
/*           (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*             (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*           })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*           ga('create', 'UA-10221913-1', 'auto');*/
/*           ga('send', 'pageview');*/
/* */
/*         </script>*/
/*         <!-- begin Pardot Website Tracking code -->*/
/*         <script type="text/javascript">*/
/*           piAId = '132161';*/
/*           piCId = '1255';*/
/* */
/*           (function() {*/
/*             function async_load(){*/
/*               var s = document.createElement('script'); s.type = 'text/javascript';*/
/*               s.src = ('https:' == document.location.protocol ? 'https://pi' : 'http://cdn') + '.pardot.com/pd.js';*/
/*               var c = document.getElementsByTagName('script')[0]; c.parentNode.insertBefore(s, c);*/
/*             }x*/
/*             if(window.attachEvent) { window.attachEvent('onload', async_load); }*/
/*             else { window.addEventListener('load', async_load, false); }*/
/*           })();*/
/*         </script>*/
/*         <!-- end Pardot Website Tracking code -->*/
/* */
/*         <style type="text/css">*/
/*           .home-cta-text div {*/
/*             display: block;*/
/*             color: rgba(88,88,90,.9);*/
/*           }*/
/*           .bg-tint {*/
/*             /*background-color: rgba(0,0,0,0.4);*//* */
/*             padding:1em;*/
/*             box-shadow: 2px 2px 6px #303030;*/
/*             background-color: rgba(225,225,225,0.9);*/
/*           }*/
/*           .bg-muted {*/
/*             padding-top:10vh;*/
/*             background: #f4f4f4;*/
/*             min-height: 80vh;*/
/*           }*/
/*           /*.home-cta-text .row {*//* */
/*           .home-cta-text .row {*/
/*             margin-top:12em;*/
/*           }*/
/*           .home-cta-text form {*/
/*             width:40%;*/
/*             display: inline-block;*/
/*             text-align: center;*/
/*             background-color:#f4f4f4;*/
/*           }*/
/*           .home-cta-text img {*/
/*             width:100%;*/
/*           }*/
/*           .home-cta-text {*/
/*             margin-bottom: 0;*/
/*           }*/
/*           .error {*/
/*             color:red;*/
/*             text-align: left;*/
/*           }*/
/*           p.error.no-label {*/
/*             border-top:solid 3px red;*/
/*             position: relative;*/
/*             bottom: 13px;*/
/*           }*/
/*           .form-field {*/
/*             width: 46%;*/
/*             display: inline-block;*/
/*           }*/
/* /*          #pardot-form .first_name, #pardot-form .last_name {*/
/*             position: relative;*/
/*             right: 6px;*/
/*           }*//* */
/*           .pd-text input {*/
/*             display: block;*/
/*             width: 100%;*/
/*             padding: 0.4em;*/
/*             font-size: 12px;*/
/*             line-height: 1.33333333;*/
/*             color: #555;*/
/*             background-color: #fff;*/
/*             background-image: none;*/
/*             border: 1px solid #ccc;*/
/*             border-radius: 4px;*/
/*             -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);*/
/*             box-shadow: inset 0 1px 1px rgba(0,0,0,.075);*/
/*             -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;*/
/*             -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;*/
/*             transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;*/
/*           }*/
/*           /*.pd-checkbox:first-of-type {*//* */
/*           .pd-checkbox {*/
/*             display:block;*/
/*             width:100%;*/
/*             height: 61px;*/
/*             margin-bottom:1em;*/
/*           }*/
/*           .pd-checkbox label {*/
/*             padding-left: 1.5em;*/
/*             padding-right: 1.5em;*/
/*           }*/
/*           .pd-checkbox input {*/
/*             /*height: 35px;*//* */
/*           }*/
/*           .field-label { */
/*             position: relative;*/
/*             top: 4px;*/
/*             font-size: 0.65em;*/
/*             text-align: left;*/
/*             display: block;*/
/*             margin-left: 0;*/
/*           }*/
/*           .submit {*/
/*             padding: 0px 16px;*/
/*           }*/
/*           .submit input {*/
/*             display: block;*/
/*             width:100%;*/
/*             padding: 6px 12px;*/
/*             margin-bottom: 0;*/
/*             font-size: 16px;*/
/*             font-weight: 700;*/
/*             line-height: 1.33333333;*/
/*             text-align: center;*/
/*             white-space: nowrap;*/
/*             vertical-align: middle;*/
/*             cursor: pointer;*/
/*             -webkit-user-select: none;*/
/*             -moz-user-select: none;*/
/*             -ms-user-select: none;*/
/*             user-select: none;*/
/*             background-image: none;*/
/*             border: 1px solid transparent;*/
/*             border-radius: 4px;*/
/*             background-color: #58595B;*/
/*             color: #fff;*/
/*             border: none;*/
/*             font-weight: 400;*/
/*           }*/
/*           .form-field input:hover, .form-field input:focus {*/
/*             border-color: #66afe9;*/
/*             outline: 0;*/
/*             -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);*/
/*             box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);*/
/*           }*/
/* /*          .comments {*/
/*             height:30px;*/
/*           }*//* */
/*           .comments {*/
/*             height:inherit;*/
/*           }*/
/*           .comments .description, .Pro_Pilot_Consent .description {*/
/*             display: block;*/
/*             font-size:10px;*/
/*             text-align: left;*/
/*             padding-left:25px;*/
/*             padding-right:25px;*/
/*           }*/
/*           .comments .value, .Pro_Pilot_Consent .value {*/
/*             top:7px;*/
/*           }*/
/*           .value, form.form .pd-checkbox .value input {*/
/*             position: relative;*/
/*             bottom: 26.25px;*/
/*           }*/
/* */
/*           .social-links .fa {*/
/*             padding: 0.3em;*/
/*             font-size: 3em;*/
/*             color:#ffffff;*/
/*           }*/
/*           .landing-page-right {*/
/*             float:right;*/
/*           }*/
/* */
/*           .feature-spotlight .fa {*/
/*             display: block;*/
/*           }*/
/*           .hero {*/
/*             margin-top:11vh;*/
/*             background-image: url('http://www.bellhelicopter.com/~/media/bell/products/bell%20412ep/412ep_photo_laco-sdsl2749_150520-r00.ashx');*/
/*           }*/
/*           a:hover {*/
/*             color: #f4f4f4;*/
/*             text-decoration: none;*/
/*           }*/
/*           .navbar-ie {*/
/*             display: none;*/
/*           }*/
/*           .Pro_Pilot_Consent {*/
/*             height: auto;*/
/*           }*/
/*           @media(max-width: 991px) { /* IPAD AND TABLETS *//* */
/*             .home-cta-text form {*/
/*               width:100%;*/
/*               padding: 1em;*/
/*             }*/
/*             .landing-page-left h1 {*/
/*               text-align: center;*/
/*             }*/
/*             .submit {*/
/*               padding: 0px 3.75%;*/
/*             }*/
/*             .pd-text input {*/
/*               font-size:1.5em;*/
/*             }*/
/*             .comments {*/
/*               height:35px;*/
/*             }*/
/*             .Privacy_Policy .value , .Marketing_Consent .value {*/
/*               bottom:10px;*/
/*             }*/
/*             .submit input {*/
/*               font-size:1.5em;*/
/*             }*/
/*             .pd-checkbox {*/
/*               padding-left: 1.5em;*/
/*               padding-right: 1.5em;*/
/*             }*/
/*           }*/
/*           @media(max-width: 460px) { /* MOBILE DEVICES *//* */
/*             .form-field {*/
/*               width: 100%;*/
/*             }*/
/*             .pd-checkbox label {*/
/*               margin-left: 20px;*/
/*               position: relative;*/
/*               top: 12px;*/
/*             }*/
/*             #pardot-form .first_name, #pardot-form .last_name {*/
/*                 right: 0px;*/
/*             }*/
/* */
/*             .submit {*/
/*               padding: 0px;*/
/*             }*/
/* */
/*             .value, form.form .pd-checkbox .value input {*/
/*                 position: relative;*/
/*                 bottom: 23px;*/
/*             }*/
/*             .home-cta-text .row {*/
/*               margin-top:6em;*/
/*             }*/
/*             .Privacy_Policy {*/
/*               height: 63px;*/
/*             }*/
/*             .Marketing_Consent {*/
/*               height:80px;*/
/*             }*/
/*           }*/
/* */
/*         </style>*/
/* */
/*         <!--[if IE]>*/
/*           <link rel="stylesheet" type="text/css" href="http://go.bh.com/l/131161/2016-09-13/hqhwh/131161/21788/pardot_1.css" />*/
/*         <![endif]-->*/
/* */
/*       </head>*/
/*       <body data-spy="scroll" data-offset="60">*/
/*         <header class="nocontent">*/
/* */
/*           <a class="ss-directup scroll-top" href="#sectionTop" id="scrollToTop" style="display: none;"></a>*/
/*           <div class="navbar navbar-utility" id="sectionTop">*/
/*             <div class="container">*/
/*               <div class="collapse navbar-collapse" id="utility-nav-collapse">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                   <li><a href="http://www.bellhelicopter.com/suppliers">Suppliers</a></li>  */
/*                   <li><a href="http://www.bellhelicopter.com/company">Company</a></li>  */
/*                   <li><a href="http://www.bellhelicopter.com/careers">Careers</a></li>  */
/*                   <li><a href="http://www.bellhelicopter.com/news">News</a></li>  */
/*                   <li><a href="http://www.bellhelicopter.com/contact">Contact</a></li>*/
/*                 </ul>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="navbar-ie" role="navigation">*/
/*                 <a href='http://www.bellhelicopter.com/' >*/
/*                   <img src="http://www.bellhelicopter.com/~/media/bell/images/navigation/logohires.ashx" alt="LogoHiRes">*/
/*                 </a>*/
/*           </div>*/
/* */
/*           <div class="navbar navbar-static-top navbar-home" role="navigation">*/
/*             <div class="navbar-home-top-wrap">*/
/*               <div class="container">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                   <li class="hidden-xs"><a href="#" id="navCommercial">Commercial <span class="caret"></span></a></li>*/
/*                   <li class="hidden-xs"><a href="#" id="navMilitary">Military <span class="caret"></span></a></li>*/
/*                   <li class="hidden-xs"><a href="#" id="navSupportService">Support & Services <span class="caret"></span></a></li>*/
/*                   <li><a href="#" id="navSearch" class="hidden-md hidden-sm hidden-xs"><span class="fa fa-search"></span></a></li>*/
/* */
/* */
/*                   <li class="dropdown visible-xs xs-dropdown-menu">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-bars"></span></a>*/
/*                     <ul class="dropdown-menu" role="menu">*/
/*                       <li><a href="http://www.bellhelicopter.com/commercial">Commercial</a></li>*/
/*                       <li><a href="http://www.bellhelicopter.com/military">Military</a></li>*/
/*                       <li><a href="http://www.bellhelicopter.com/support-and-service">Support & Services</a></li>*/
/*                       <li><a href="http://www.bellhelicopter.com/search-results">Search</a></li>*/
/*                       <li role="presentation" class="divider"></li>*/
/*                       <li><a href="http://www.bellhelicopter.com/suppliers">Suppliers</a></li>*/
/*                       <li><a href="http://www.bellhelicopter.com/company">Company</a></li>*/
/*                       <li><a href="http://www.bellhelicopter.com/careers">Careers</a></li>*/
/*                       <li><a href="http://www.bellhelicopter.com/news">News</a></li>*/
/*                       <li><a href="http://www.bellhelicopter.com/contact">Contact</a></li>*/
/* */
/*                     </ul>*/
/*                   </li>*/
/*                 </ul>*/
/* */
/*                 <div class="navbar-header">*/
/*                   <a href='http://www.bellhelicopter.com/' class='navbar-brand' target='Active Browser' >                    <img src="http://www.bellhelicopter.com/~/media/bell/images/navigation/logohires.ashx" alt="LogoHiRes">*/
/*                   </a>            </div>*/
/*                 </div><!--/.navbar-collapse -->*/
/*               </div>*/
/*               <div class="navbar-search hidden-xs">*/
/*                 <div class="container">*/
/*                   <div class="row">*/
/*                     <div class="col-md-5 col-md-offset-7">*/
/*                       <form action="http://www.bellhelicopter.com/search-results/" class="search-form">*/
/*                         <div class="input-group">*/
/*                           <input class="form-control" name="q" data-lang="English" type="search" placeholder="Search for...">*/
/*                           <span class="input-group-btn">*/
/*                             <button class="btn btn-primary globalSearch" type="button"><span class="fa">Search</span></button>*/
/*                           </span>*/
/*                         </div>*/
/*                       </form>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="navbar-super hidden-xs" id="navBarSuperCommercial">*/
/*                 <div class="container">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-3 navbar-subnav" style="padding-right: 0;">                          */
/*                       <ul class="navbar-subnav-menu">*/
/*                         <li class="navbar-subnav-heading"><span class="hidden-lg hidden-md">Commercial</span><span class="hidden-sm">Commercial Aircraft</span></li>*/
/*                         <li><a data-id="mega-Bell206L4">Bell 206L4</a></li>*/
/*                         <li><a data-id="mega-Bell407GXP">Bell 407GXP</a></li>*/
/*                         <li><a data-id="mega-Bell412EP">Bell 412EP</a></li>*/
/*                         <li><a data-id="mega-Bell412EPI">Bell 412EPI</a></li>*/
/*                         <li><a data-id="mega-Bell429">Bell 429</a></li>*/
/*                         <li><a data-id="mega-Bell429WLG">Bell 429WLG</a></li>*/
/*                         <li><a data-id="mega-Bell505JetRangerX">Bell 505 Jet Ranger X</a></li>*/
/*                         <li><a data-id="mega-Bell525Relentless">Bell 525 Relentless</a></li>*/
/*                         <li><a data-id="mega-BellHueyII">Bell Huey II</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/commercial/pre-owned">Pre-Owned Aircraft</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/commercial" class="nav-super-more">All Commercial &raquo;</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/* */
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-206l4">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-Bell206L4" style="padding-left: 0; ">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/206l4_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell 206L4</h1>*/
/*                             <p>Reliability Meets Proven Capability</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-download text-large"></div>*/
/*                                 2,119 lbs. Useful Load*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-compass text-large"></div>*/
/*                                 325 nm Max Range*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 6 Passengers*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-407gxp">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-Bell407GXP" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/407gxp_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell 407GXP</h1>*/
/*                             <p>Superior Performance Reaches a Higher Level</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 140 kts Max Speed*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-download text-large"></div>*/
/*                                 2,558 lbs. Useful Load (IGW)*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 6 Passengers*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-412ep">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-Bell412EP" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/412ep_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell 412EP</h1>*/
/*                             <p>A daily workhorse in the most extreme climates on the planet</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-download text-large"></div>*/
/*                                 5,100 lbs. Useful Load*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-compass text-large"></div>*/
/*                                 357 nm Max Range*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 14 Passengers*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-412epi">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-Bell412EPI" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/412epi_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell 412EPI</h1>*/
/*                             <p>The 412EPI goes digital with the Bell BasiX-Pro™ Flight Deck. </p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-download text-large"></div>*/
/*                                 4,829 lbs. Useful Load*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-compass text-large"></div>*/
/*                                 364 nm Max Range*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 14 Passengers*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-429">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-Bell429" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/429_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell 429</h1>*/
/*                             <p>Exceptional Speed, Range and Performance</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 150 kts Max Cruise*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-briefcase text-large"></div>*/
/*                                 204 ft&sup3; Cabin Volume*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 7 Passengers*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-429wlg">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-Bell429WLG" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/429wlg_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell 429WLG</h1>*/
/*                             <p>Superb Performance with Sleek Design</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 154 kts Max Cruise*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-wrench text-large"></div>*/
/*                                 Retractable Landing Gear*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 7 Passengers*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-505">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-Bell505JetRangerX" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/505_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell 505 Jet Ranger X</h1>*/
/*                             <p>Best in Class Combination of Payload, Speed and Range</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 125+ kts Max Cruise*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-download text-large"></div>*/
/*                                 1,500 lbs. Useful Load*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 4 Passengers*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-525">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-Bell525Relentless" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/525_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell 525 Relentless</h1>*/
/*                             <p>Best in Class Payload, Range, Cabin and Mission Capability</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 162 kts Max Cruise*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-compass text-large"></div>*/
/*                                 570 nm Max Range*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 Up to 20 Passengers*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/commercial/bell-huey-ii">*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-BellHueyII" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/hueyii_website-headers.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class=" btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell Huey II</h1>*/
/*                             <p></p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/* */
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-download text-large"></div>*/
/*                                 4,873 lbs. Useful Load*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-briefcase text-large"></div>*/
/*                                 220 ft&sup3; Cabin Volume*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 1+14 Max Seating*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                     </a>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="navbar-super hidden-xs" id="navBarSuperMilitary">*/
/*                 <div class="container">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-3 navbar-subnav" style="padding-right: 0;">*/
/*                       <ul class="navbar-subnav-menu">*/
/*                         <li class="navbar-subnav-heading"><span class="hidden-lg hidden-md">Military</span><span class="hidden-sm">Military Aircraft</span></li>*/
/*                         <li><a data-id="mega-BellAH1Z" id="military">Bell AH-1Z</a></li>*/
/*                         <li><a data-id="mega-BellBoeingV22Osprey" id="military">Bell Boeing V-22 Osprey</a></li>*/
/*                         <li><a data-id="mega-BellUH1Y" id="military">Bell UH-1Y</a></li>*/
/*                         <li><a data-id="mega-BellV280Valor" id="military">Bell V-280 Valor</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/military" class="nav-super-more">All Military &raquo;</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/military/bell-ah-1z" >*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-BellAH1Z" style="padding-left: 0; ">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/ah-1z_website-header.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class="btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell AH-1Z</h1>*/
/*                             <p>The most advanced attack helicopter in the world.</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 200 KIAS Max Speed*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-crosshair text-large"></div>*/
/*                                 131 nm Combat Radius*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 2 Pilots*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/military/bell-boeing-v-22" >*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-BellBoeingV22Osprey" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/mv-22_website-header.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class="btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell Boeing V-22 Osprey</h1>*/
/*                             <p>The V-22 redefines operational possibilities </p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 266 kts Max Cruise*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-compass text-large"></div>*/
/*                                 24,000 ft Service Ceiling*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 24 Troop Seats*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/military/bell-uh-1y" >*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-BellUH1Y" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/uh-1y_website-header.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class="btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell UH-1Y</h1>*/
/*                             <p>The utility helicopter built on a rich history with 21st century technology</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 170 KIAS Max Speed*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-crosshair text-large"></div>*/
/*                                 119 nm Combat Radius*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 2 Crew and 8 Passenger Seats*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/*                     <a class="navlink" href="http://www.bellhelicopter.com/military/bell-v-280" >*/
/*                       <div class="col-sm-9 navbar-hero-wrap" id="mega-BellV280Valor" style="padding-left: 0; display:none;">*/
/*                         <div class="navbar-hero-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/tab-headers/v-280_website-header.ashx');">*/
/*                           <div class="navbar-hero-text">*/
/*                             <div class="btn btn-default pull-right">Learn More</div>*/
/*                             <h1>Bell V-280 Valor</h1>*/
/*                             <p>Twice the speed, twice the range of current helicopters</p>*/
/*                             <br>*/
/*                             <div class="row feature-spotlight">*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-crosshair text-large"></div>*/
/*                                 500-800nm Combat Range*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-dashboard text-large"></div>*/
/*                                 280 KTAS*/
/*                               </div>*/
/*                               <div class="col-md-2 col-sm-3 col-xs-6 text-center">*/
/*                                 <div class="fa fa-users text-large"></div>*/
/*                                 4 Crew & 14 Troops*/
/*                               </div>*/
/*                             </div>*/
/*                           </div>*/
/*                         </div>*/
/*                       </div>*/
/*                     </a>*/
/* */
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*               <div class="navbar-super hidden-xs nav-super" id="navBarSuperCSS">*/
/*                 <div class="container">*/
/*                   <div class="row">*/
/*                     <div class="col-sm-3 navbar-subnav">*/
/*                       <ul class="navbar-subnav-menu">*/
/*                         <li class="navbar-subnav-heading"><span class="hidden-sm">Customer</span> Support & Services</li>*/
/* */
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/support">Support</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/services">Services</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/training">Training</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/services/customer-advantage-plans">Customer Advantage Plans</a></li>*/
/*                         <li><a href="https://bellportal.textron.com/">Customer Portal</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/knowledgebase">Knowledgebase</a></li>*/
/* */
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service" class="nav-super-more">More &raquo;</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <div class="col-sm-3 nav-super-item" data-url="/support-and-service/support">*/
/*                       <div class="nav-super-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/css/support.ashx');">*/
/*                         <div class="nav-super-image-overlay">*/
/*                         </div>*/
/*                       </div>*/
/*                       <span class="fa fa-chat"></span>*/
/*                       <div class="nav-super-title">Support</div>*/
/*                       <div class="nav-super-sub">Find contact information for your local Customer Service Facility and Bell Technical Support.</div>*/
/*                     </div>*/
/*                     <div class="col-sm-3 nav-super-item" data-url="/support-and-service/services">*/
/*                       <div class="nav-super-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/css/services.ashx');">*/
/*                         <div class="nav-super-image-overlay">*/
/*                         </div>*/
/*                       </div>*/
/*                       <span class="fa fa-settings"></span>*/
/*                       <div class="nav-super-title">Services</div>*/
/*                       <div class="nav-super-sub">Easy access to parts, technical publications, bulletins and information on our other services.</div>*/
/*                     </div>*/
/*                     <div class="col-sm-3 nav-super-item" data-url="/support-and-service/training">*/
/*                       <div class="nav-super-image" style="background-image: url('http://bellhelicopter.com/~/media/bell/images/navigation/css/training.ashx');">*/
/*                         <div class="nav-super-image-overlay">*/
/*                         </div>*/
/*                       </div>*/
/*                       <span class="fa fa-clipboard"></span>*/
/*                       <div class="nav-super-title">Training</div>*/
/*                       <div class="nav-super-sub">Learn about and register for classes at the premier Bell Helicopter Training Academy.</div>*/
/*                     </div>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </header>*/
/* */
/* */
/* */
/* */
/* */
/*           <div class="bg-muted">*/
/*             {% page %}*/
/*           </div>*/
/* */
/* */
/*           <footer class="nocontent">*/
/* */
/*             <div class="footer-wrapper">*/
/*               <div class="container">*/
/*                 <footer>*/
/*                   <div class="row">*/
/*                     <div class="col-md-4 col-sm-12 connect">*/
/*                       <div class="form-group">*/
/*                         <div class="input-group">*/
/*                           <input class="form-control" name="qFooter" data-lang="English" type="search" placeholder="Search for...">*/
/*                           <div class="input-group-addon"><span class="fa fa-search globalSearch" style="top: 3px; position: relative; cursor: pointer;"></span></div>*/
/*                         </div>*/
/*                       </div>*/
/* */
/*                       <h4>Connect with us</h4>*/
/*                       <p class="social-links">*/
/*                         <a href="https://www.facebook.com/bellhelicopter" class="fa fa-facebook"></a>*/
/*                         <a href="https://twitter.com/one_bell" class="fa fa-twitter"></a>*/
/*                         <a href="https://www.youtube.com/user/TheBellHelicopter" class="fa fa-youtube"></a>*/
/*                       </p>*/
/* */
/* */
/*                     </div>*/
/* */
/*                     <div class="col-md-2 col-sm-6">*/
/*                       <h4>Aircraft</h4>*/
/*                       <ul>*/
/*                         <li><a href="http://www.bellhelicopter.com/commercial">All Commercial</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/military">All Military</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/support/css-directory/customer-sales-and-support">Sales Reps</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <div class="col-md-2 col-sm-6">*/
/*                       <h4>Company</h4>*/
/*                       <ul>*/
/*                         <li><a href="http://www.bellhelicopter.com/careers">Careers</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/company/community-programs">Community Programs</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/contact">Contact</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/knowledgebase">Knowledgebase</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/news">News</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <div class="col-md-2 col-sm-6">*/
/*                       <h4>Customers</h4>*/
/*                       <ul>*/
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/support/css-directory/customer-sales-and-support">Customer Support & Services Directory</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/services">Services</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/support">Support</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/support-and-service/training">Training</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                     <div class="col-md-2 col-sm-6">*/
/*                       <h4>Legal</h4>*/
/*                       <ul>*/
/*                         <li><a href="http://www.bellhelicopter.com/legal">Business Conduct and Privacy Statement</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/legal/copyright-notice">Copyright Notice</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/legal/terms-of-use">Terms of Use</a></li>*/
/*                         <li><a href="http://www.bellhelicopter.com/legal/ca-transparency-in-suppliers-act">CA Transparency in Suppliers Act</a></li>*/
/*                       </ul>*/
/*                     </div>*/
/*                   </div>*/
/*                   <hr>*/
/*                   <p class="copy">Copyright 2016 Bell Helicopter Textron Inc.</p>*/
/*                 </footer>*/
/*               </div>*/
/*             </div>*/
/*             <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/* */
/*             <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/lib/jquery.scrollTo.min.js"></script>*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/bootstrap/bootstrap.min.js"></script>*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/lib/sticky.js"></script>*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/bootstrap/bootstrap-slider.js"></script>*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/lib/jquery.cookie.js"></script>*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/jquery-social-stream/js/jquery.social.stream.wall.1.6.js"></script>*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/jquery-social-stream/js/jquery.social.stream.1.5.11.min.js"></script>*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/lib/slick.min.js" type="text/javascript"></script>*/
/*             <script src="http://www.bellhelicopter.com/Presentation/includes/js/lib/lazyYT.js" type="text/javascript"></script>*/
/*             <!-- Leave this outside of script files. Do not place any script files before this -->*/
/*             <script>*/
/*               var $j = jQuery.noConflict();*/
/*             </script>*/
/*             <script type="text/javascript" src="http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.search.js"></script>*/
/*             <script type="text/javascript" src="http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.search.news.js"></script>*/
/*             <script type="text/javascript" src="http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.contact.js"></script>*/
/* */
/*             <script type="text/javascript" src="http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.site.js"></script>*/
/*             <script>*/
/*               var frenchRedirectURL = "http://fr.bellhelicopter.com/";*/
/*             </script>*/
/*             <script type="text/javascript" src="http://www.bellhelicopter.com/Presentation/includes/js/lib/bellhelicopter.frenchredirect.js"></script>*/
/* */
/*           </footer>*/
/*         </body>*/
/*         </html>*/
