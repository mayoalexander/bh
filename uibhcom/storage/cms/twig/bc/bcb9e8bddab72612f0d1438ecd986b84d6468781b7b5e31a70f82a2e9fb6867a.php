<?php

/* /var/www/uibhcom/themes/demo/pages/training-requests.htm */
class __TwigTemplate_06d3240c93a7469b4be3b8af60b3c2384b70b943414539382ed9f05011e4fa42 extends Twig_Template
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
        echo "<!-- Required style sheets -->
<link href=\"http://www.bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"http://www.bellhelicopter.com/Presentation/includes/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<style type=\"text/css\">
\thtml, body {
\t\tmargin: 0 !important;
\t\tpadding: 0 !important;
\t}
\t.training-request-form form {
\t\t/*padding-top: 10vh;*/
\t\tbackground: #f4f4f4;
\t}
\t.main {
\t\tmin-height: 20vh;
\t\t-webkit-transition: height 1s; 
\t\t-moz-transition: height 1s; 
\t\t-ms-transition: height 1s; 
\t\t-o-transition: height 1s; 
\t\ttransition: height 1s;  
\t}
\t.navbar-ie {
\t\tdisplay: none;
\t}
\tlabel:hover {
\t\tcursor: pointer;
\t\t/*color: #737373;*/
\t\tcolor: #000000;
\t}
\t.page-header {
\t\tfont-weight: bolder;
\t}
\t.training-request-form label {
\t\t/*font-size: 1.5em;*/
\t\t/*color: #e3e3e3;*/
\t}
\t.training-request-form label input {
\t\tposition: relative;
\t\tbottom: 3px;
\t}
\t.training-request-form .form-control:focus, .training-request-form .form-control {
\t\tfont-size:2em;
\t\theight: inherit;
\t\toutline: none;
\t\tbox-shadow: none;
\t\tborder:none;
    background: transparent;
\t\tborder-bottom: #e3e3e3 solid 2px;
\t\tborder-radius: 0;
\t}
\t.training-request-form .form-control:focus {
\t\tbackground:#f9f9f9;
\t}
</style>
<script src=\"/Scripts/js.cookie.js\" type=\"text/javascript\"></script>

<form class=\"training-request-form\" action=\"/Home/Send\" method=\"post\">
\t<section class=\"container well main\">
\t\t
\t\t<h1 class=\"page-header\">Request Login</h1>
\t\t<div class=\"form-group\"\">
\t\t\t<label for=\"AttendTrainingCheckBox\">
\t\t\t\t<input data-val=\"true\" data-val-required=\"The AttendTrainingCheckBox field is required.\" id=\"AttendTrainingCheckBox\" name=\"AttendTrainingCheckBox\" type=\"checkbox\" value=\"true\" /><input name=\"AttendTrainingCheckBox\" type=\"hidden\" value=\"false\" /> Have you attended Bell Training Academy before?
\t\t\t</label>
\t\t</div>
\t\t<h3 class=\"page-header\">I am Registering For:</h3>
\t\t<section class=\"row\">
\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t<label for=\"MyselfCheckBox\">
\t\t\t\t\t<input type=\"radio\" name=\"registering_for\" value='myself' id='MyselfCheckBox'> Myself
\t\t\t\t\t<!-- <input data-val=\"true\" data-val-required=\"The MyselfCheckBox field is required.\" id=\"MyselfCheckBox\" name=\"MyselfCheckBox\" onclick=\"MUpdate();\" type=\"radio\" value=\"true\" /><input name=\"MyselfCheckBox\" type=\"hidden\" value=\"false\" /> -->
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t<label for=\"MyselfAndOthersCheckBox\"> 
\t\t\t\t\t<input type=\"radio\" name=\"registering_for\" value='myselfAndOthers' id='MyselfAndOthersCheckBox'> Myself and Others
\t\t\t\t\t<!-- <input data-val=\"true\" data-val-required=\"The MyselfAndOthersCheckBox field is required.\" id=\"MyselfAndOthersCheckBox\" name=\"MyselfAndOthersCheckBox\" onclick=\"MOUpdate();\" type=\"radio\" value=\"true\" /><input name=\"MyselfAndOthersCheckBox\" type=\"hidden\" value=\"false\" /> -->
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t<label for=\"OthersCheckBox\">
\t\t\t\t\t<input type=\"radio\" name=\"registering_for\" value='othersOnly' id='OthersCheckBox'> Others
\t\t\t\t\t<!-- <input data-val=\"true\" data-val-required=\"The OthersCheckBox field is required.\" id=\"OthersCheckBox\" name=\"OthersCheckBox\" onclick=\"OUpdate();\" type=\"radio\" value=\"true\" /><input name=\"OthersCheckBox\" type=\"hidden\" value=\"false\" /> -->
\t\t\t\t</label>
\t\t\t</div>
\t\t</section>

\t\t<div class=\"form-area\" style=\"display:none;\">
\t\t\t<div class=\"myself\">
\t\t\t\t<h4 class=\"page-header\">Personal Info:</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"First_Given_Name:\">First(Given)Name:</label>
\t\t\t\t\t\t<input data-val=\"true\" data-val-length=\"The field FirstName must be a string with a maximum length of 25.\" data-val-length-max=\"25\" id=\"FirstName\" maxlength=\"25\" name=\"FirstName\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid data-valmsg-for=\"FirstName\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"First_Given_Name:\">Middle Name:</label>
\t\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"First_Given_Name:\">Last Name:</label>
\t\t\t\t\t\t<input data-val=\"true\" data-val-length=\"The field LastName must be a string with a maximum length of 25.\" id=\"LastName\" maxlength=\"25\" name=\"LastName\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"LastName\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div><!-- end of .row -->
\t\t\t</div>
\t\t\t<div class=\"row myself\">
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"First_Given_Name:\">Email:</label>
\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"First_Given_Name:\">Business Title:</label>
\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"First_Given_Name:\">Home Address 1:</label>
\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t<br>
\t\t\t\t\t<label for=\"First_Given_Name:\">Home Address 2:</label>
\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<div class=\"Others1\">
\t\t\t\t<h4 class=\"page-header\">Others Info:</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"First_Given_Name:\">Others1:</label>
\t\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"First_Given_Name:\">Others1 Title:</label>
\t\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"First_Given_Name:\">Others1 1:</label>
\t\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<label for=\"First_Given_Name:\">Others1 :</label>
\t\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row Others2\">
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"First_Given_Name:\">Others2:</label>
\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"First_Given_Name:\">Others2:</label>
\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"First_Given_Name:\">Others2 1:</label>
\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t\t<br>
\t\t\t\t\t<label for=\"First_Given_Name:\">Others2 2:</label>
\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"25\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\" value=\"\"><span class=\"field-validation-valid\" data-valmsg-for=\"BusinessTitle\" data-valmsg-replace=\"true\"></span>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row Submit\">
\t\t\t\t<div class=\"col-md-12 clearfix\">
\t\t\t\t\t<input type=\"submit\" name=\"Submit Request\" class=\"btn btn-primary btn-lg pull-right\" value=\"Submit Request\" class=\"submit\">\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</section>
</form>

\t";
        // line 176
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("tracking.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 177
        echo "
\t<script type=\"text/javascript\">
\t\t\$(function(){
\t\t\t/* STATIC GLOBAL FUNCTIONS + VARIABLES */
\t\t\tvar activeSelection = false;
\t\t\tvar div = '';
\t\t\tfunction hideAll() {
\t\t\t\tvar children = \$('.form-area').children();
\t\t\t\tchildren.hide();
\t\t\t\t\$.each(children.find('.form-control'), function(index, value){
\t\t\t\t\tvalue.value = '';
\t\t\t\t});
\t\t\t}

\t\t\tfunction getForm(value) {
\t\t\t\tif (value=='myself') {
\t\t\t\t\tdivs = ['myself', 'Others1', 'Submit'];
\t\t\t\t} else if (value=='myselfAndOthers') {
\t\t\t\t\tdivs = ['myself', 'Others1', 'Submit'];
\t\t\t\t} else if (value=='othersOnly') {
\t\t\t\t\tdivs = ['Others1', 'Others2', 'Submit'];
\t\t\t\t} else {
\t\t\t\t\talert('there as an error in the development');
\t\t\t\t\treturn;
\t\t\t\t}
\t\t\t\t\$.each(divs,function(index, value){
\t\t\t\t\tdebug('value: ' + value);
\t\t\t\t\t\$('.' + value).show();
\t\t\t\t});
\t\t\t\treturn div;
\t\t\t}

\t\t\tfunction updateView(checkboxes) {
\t\t\t\t\$.each(checkboxes, function( index, value ) {
\t\t\t\t\tif (value.checked==true) {
\t\t\t\t\t\tif (activeSelection===true) {
\t\t\t\t\t\t\t\$('.form-area').fadeOut('fast', function(){
\t\t\t\t\t\t\t\thideAll();
\t\t\t\t\t\t\t\tgetForm(value.value);
\t\t\t\t\t\t\t\t\$('.form-area').fadeIn();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t\tdebug('reactivate: ' + value.value);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\$('.form-area').fadeIn();
\t\t\t\t\t\t\t\$('.' + value.value).show();
\t\t\t\t\t\t\tactiveSelection = true;
\t\t\t\t\t\t\tdebug('first time: ' + value.value);
\t\t\t\t\t\t}

\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\tfunction getBaseUrl() {
\t\t\t\tvar baseUrl = 'http://ui.bell.com/';
\t\t\t\treturn baseUrl;
\t\t\t}




\t\t\t/* INITALIZE */
\t\t\tvar checkboxes = \$('input[name=registering_for]');
\t\t\tcheckboxes.click(function(){
\t\t\t\tupdateView(checkboxes);
\t\t\t});

\t\t\t/* FORM SUBMISSION */
\t\t\t\$('.training-request-form').submit(function(e){
\t\t\t\te.preventDefault();
\t\t\t\tvar data = \$(this).serialize();
\t\t\t\tvar elem = \$(this).find('.container');
\t\t\t\tvar originHtml = elem.html()
\t\t\t\t// var postUrl = getBaseUrl() + 'config/index.php';
\t\t\t\tvar postUrl = '../config/index.php';

\t\t\t\telem.html('Please Wait..');
\t\t\t\t// setTimeout(function(){
\t\t\t\t// \telem.html(originHtml);
\t\t\t\t// },2000);

\t\t\t\t\$.post(postUrl, data, function(result){
\t\t\t\t\telem.html(result);
\t\t\t\t});
\t\t\t});
\t\t});
\t</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/pages/training-requests.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 177,  196 => 176,  19 => 1,);
    }
}
/* <!-- Required style sheets -->*/
/* <link href="http://www.bellhelicopter.com/Presentation/includes/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />*/
/* <link href="http://www.bellhelicopter.com/Presentation/includes/css/app.min.css" rel="stylesheet" type="text/css" media="all" />*/
/* <style type="text/css">*/
/* 	html, body {*/
/* 		margin: 0 !important;*/
/* 		padding: 0 !important;*/
/* 	}*/
/* 	.training-request-form form {*/
/* 		/*padding-top: 10vh;*//* */
/* 		background: #f4f4f4;*/
/* 	}*/
/* 	.main {*/
/* 		min-height: 20vh;*/
/* 		-webkit-transition: height 1s; */
/* 		-moz-transition: height 1s; */
/* 		-ms-transition: height 1s; */
/* 		-o-transition: height 1s; */
/* 		transition: height 1s;  */
/* 	}*/
/* 	.navbar-ie {*/
/* 		display: none;*/
/* 	}*/
/* 	label:hover {*/
/* 		cursor: pointer;*/
/* 		/*color: #737373;*//* */
/* 		color: #000000;*/
/* 	}*/
/* 	.page-header {*/
/* 		font-weight: bolder;*/
/* 	}*/
/* 	.training-request-form label {*/
/* 		/*font-size: 1.5em;*//* */
/* 		/*color: #e3e3e3;*//* */
/* 	}*/
/* 	.training-request-form label input {*/
/* 		position: relative;*/
/* 		bottom: 3px;*/
/* 	}*/
/* 	.training-request-form .form-control:focus, .training-request-form .form-control {*/
/* 		font-size:2em;*/
/* 		height: inherit;*/
/* 		outline: none;*/
/* 		box-shadow: none;*/
/* 		border:none;*/
/*     background: transparent;*/
/* 		border-bottom: #e3e3e3 solid 2px;*/
/* 		border-radius: 0;*/
/* 	}*/
/* 	.training-request-form .form-control:focus {*/
/* 		background:#f9f9f9;*/
/* 	}*/
/* </style>*/
/* <script src="/Scripts/js.cookie.js" type="text/javascript"></script>*/
/* */
/* <form class="training-request-form" action="/Home/Send" method="post">*/
/* 	<section class="container well main">*/
/* 		*/
/* 		<h1 class="page-header">Request Login</h1>*/
/* 		<div class="form-group"">*/
/* 			<label for="AttendTrainingCheckBox">*/
/* 				<input data-val="true" data-val-required="The AttendTrainingCheckBox field is required." id="AttendTrainingCheckBox" name="AttendTrainingCheckBox" type="checkbox" value="true" /><input name="AttendTrainingCheckBox" type="hidden" value="false" /> Have you attended Bell Training Academy before?*/
/* 			</label>*/
/* 		</div>*/
/* 		<h3 class="page-header">I am Registering For:</h3>*/
/* 		<section class="row">*/
/* 			<div class="col-md-4 form-group">*/
/* 				<label for="MyselfCheckBox">*/
/* 					<input type="radio" name="registering_for" value='myself' id='MyselfCheckBox'> Myself*/
/* 					<!-- <input data-val="true" data-val-required="The MyselfCheckBox field is required." id="MyselfCheckBox" name="MyselfCheckBox" onclick="MUpdate();" type="radio" value="true" /><input name="MyselfCheckBox" type="hidden" value="false" /> -->*/
/* 				</label>*/
/* 			</div>*/
/* 			<div class="col-md-4 form-group">*/
/* 				<label for="MyselfAndOthersCheckBox"> */
/* 					<input type="radio" name="registering_for" value='myselfAndOthers' id='MyselfAndOthersCheckBox'> Myself and Others*/
/* 					<!-- <input data-val="true" data-val-required="The MyselfAndOthersCheckBox field is required." id="MyselfAndOthersCheckBox" name="MyselfAndOthersCheckBox" onclick="MOUpdate();" type="radio" value="true" /><input name="MyselfAndOthersCheckBox" type="hidden" value="false" /> -->*/
/* 				</label>*/
/* 			</div>*/
/* 			<div class="col-md-4 form-group">*/
/* 				<label for="OthersCheckBox">*/
/* 					<input type="radio" name="registering_for" value='othersOnly' id='OthersCheckBox'> Others*/
/* 					<!-- <input data-val="true" data-val-required="The OthersCheckBox field is required." id="OthersCheckBox" name="OthersCheckBox" onclick="OUpdate();" type="radio" value="true" /><input name="OthersCheckBox" type="hidden" value="false" /> -->*/
/* 				</label>*/
/* 			</div>*/
/* 		</section>*/
/* */
/* 		<div class="form-area" style="display:none;">*/
/* 			<div class="myself">*/
/* 				<h4 class="page-header">Personal Info:</h4>*/
/* 				<div class="row">*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="First_Given_Name:">First(Given)Name:</label>*/
/* 						<input data-val="true" data-val-length="The field FirstName must be a string with a maximum length of 25." data-val-length-max="25" id="FirstName" maxlength="25" name="FirstName" type="text" class="form-control" value=""><span class="field-validation-valid data-valmsg-for="FirstName" data-valmsg-replace="true"></span>*/
/* 					</div>*/
/* */
/* 					<div class="form-group col-md-4">*/
/* 						<label for="First_Given_Name:">Middle Name:</label>*/
/* 						<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 					</div>*/
/* */
/* 					<div class="form-group col-md-4">*/
/* 						<label for="First_Given_Name:">Last Name:</label>*/
/* 						<input data-val="true" data-val-length="The field LastName must be a string with a maximum length of 25." id="LastName" maxlength="25" name="LastName" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>*/
/* 					</div>*/
/* 				</div><!-- end of .row -->*/
/* 			</div>*/
/* 			<div class="row myself">*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="First_Given_Name:">Email:</label>*/
/* 					<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="First_Given_Name:">Business Title:</label>*/
/* 					<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="First_Given_Name:">Home Address 1:</label>*/
/* 					<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 					<br>*/
/* 					<label for="First_Given_Name:">Home Address 2:</label>*/
/* 					<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* */
/* 			<div class="Others1">*/
/* 				<h4 class="page-header">Others Info:</h4>*/
/* 				<div class="row">*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="First_Given_Name:">Others1:</label>*/
/* 						<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 					</div>*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="First_Given_Name:">Others1 Title:</label>*/
/* 						<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 					</div>*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="First_Given_Name:">Others1 1:</label>*/
/* 						<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 						<br>*/
/* 						<label for="First_Given_Name:">Others1 :</label>*/
/* 						<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row Others2">*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="First_Given_Name:">Others2:</label>*/
/* 					<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="First_Given_Name:">Others2:</label>*/
/* 					<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="First_Given_Name:">Others2 1:</label>*/
/* 					<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 					<br>*/
/* 					<label for="First_Given_Name:">Others2 2:</label>*/
/* 					<input id="BusinessTitle" maxlength="25" name="BusinessTitle" type="text" class="form-control" value=""><span class="field-validation-valid" data-valmsg-for="BusinessTitle" data-valmsg-replace="true"></span>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="row Submit">*/
/* 				<div class="col-md-12 clearfix">*/
/* 					<input type="submit" name="Submit Request" class="btn btn-primary btn-lg pull-right" value="Submit Request" class="submit">				*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 	</section>*/
/* </form>*/
/* */
/* 	{% partial "tracking.htm" %}*/
/* */
/* 	<script type="text/javascript">*/
/* 		$(function(){*/
/* 			/* STATIC GLOBAL FUNCTIONS + VARIABLES *//* */
/* 			var activeSelection = false;*/
/* 			var div = '';*/
/* 			function hideAll() {*/
/* 				var children = $('.form-area').children();*/
/* 				children.hide();*/
/* 				$.each(children.find('.form-control'), function(index, value){*/
/* 					value.value = '';*/
/* 				});*/
/* 			}*/
/* */
/* 			function getForm(value) {*/
/* 				if (value=='myself') {*/
/* 					divs = ['myself', 'Others1', 'Submit'];*/
/* 				} else if (value=='myselfAndOthers') {*/
/* 					divs = ['myself', 'Others1', 'Submit'];*/
/* 				} else if (value=='othersOnly') {*/
/* 					divs = ['Others1', 'Others2', 'Submit'];*/
/* 				} else {*/
/* 					alert('there as an error in the development');*/
/* 					return;*/
/* 				}*/
/* 				$.each(divs,function(index, value){*/
/* 					debug('value: ' + value);*/
/* 					$('.' + value).show();*/
/* 				});*/
/* 				return div;*/
/* 			}*/
/* */
/* 			function updateView(checkboxes) {*/
/* 				$.each(checkboxes, function( index, value ) {*/
/* 					if (value.checked==true) {*/
/* 						if (activeSelection===true) {*/
/* 							$('.form-area').fadeOut('fast', function(){*/
/* 								hideAll();*/
/* 								getForm(value.value);*/
/* 								$('.form-area').fadeIn();*/
/* 							});*/
/* 							debug('reactivate: ' + value.value);*/
/* 						} else {*/
/* 							$('.form-area').fadeIn();*/
/* 							$('.' + value.value).show();*/
/* 							activeSelection = true;*/
/* 							debug('first time: ' + value.value);*/
/* 						}*/
/* */
/* 					}*/
/* 				});*/
/* 			}*/
/* */
/* 			function getBaseUrl() {*/
/* 				var baseUrl = 'http://ui.bell.com/';*/
/* 				return baseUrl;*/
/* 			}*/
/* */
/* */
/* */
/* */
/* 			/* INITALIZE *//* */
/* 			var checkboxes = $('input[name=registering_for]');*/
/* 			checkboxes.click(function(){*/
/* 				updateView(checkboxes);*/
/* 			});*/
/* */
/* 			/* FORM SUBMISSION *//* */
/* 			$('.training-request-form').submit(function(e){*/
/* 				e.preventDefault();*/
/* 				var data = $(this).serialize();*/
/* 				var elem = $(this).find('.container');*/
/* 				var originHtml = elem.html()*/
/* 				// var postUrl = getBaseUrl() + 'config/index.php';*/
/* 				var postUrl = '../config/index.php';*/
/* */
/* 				elem.html('Please Wait..');*/
/* 				// setTimeout(function(){*/
/* 				// 	elem.html(originHtml);*/
/* 				// },2000);*/
/* */
/* 				$.post(postUrl, data, function(result){*/
/* 					elem.html(result);*/
/* 				});*/
/* 			});*/
/* 		});*/
/* 	</script>*/
