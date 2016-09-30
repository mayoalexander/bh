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
<link rel=\"stylesheet\" type=\"text/css\" href=\"http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css\">
<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\" integrity=\"sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=\" crossorigin=\"anonymous\"></script>
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
\t-webkit-transition: height 1s; 
\t\t-moz-transition: height 1s; 
\t\t-ms-transition: height 1s; 
\t\t-o-transition: height 1s; 
\t\ttransition: height 1s;  
\t}
\t/*.form-area .row ,*/ .main .row {
\t\t/*margin-bottom: 2em;*/
\t\tpadding: 2em;
\t}
\t.form-area h2, .form-area h4 {
\t\tcolor:#ac1a2f;
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
/*\t.training-request-form label input {
\t\tposition: relative;
\t\tbottom: 3px;
\t}
\t.training-request-form .form-control:focus, .training-request-form .form-control {
\t\tfont-size:2em;
\t\theight: inherit;
\t\toutline: none;
\t\tbox-shadow: none;
\t\tborder:none;
\t    background: transparent;
\t\tborder-bottom: #e3e3e3 solid 2px;
\t\tborder-radius: 0;
\t}
\t.training-request-form .form-control:focus {
\t\tbackground:#f9f9f9;
\t}*/
\t.ui-state-default, .ui-state-hover, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-widget-header {
\t\tbackground: transparent;
\t\tborder: transparent;
\t}
\t.ui-datepicker-calendar td a {
\t\t/*transition: all 0.25s;*/
\t}
\t.ui-datepicker-calendar td a:hover {
\t\tcolor:#ac1a2f;
\t\tbackground: #f4f4f4;
\t}
\t#DateIssued:hover {
\t\tcursor: pointer;
\t}
</style>
<script src=\"http://www.bellhelicopter.com/Scripts/js.cookie.js\" type=\"text/javascript\"></script>

<form class=\"training-request-form\" action=\"/Home/Send\" method=\"post\">
\t<section class=\"container well main\">
\t\t
\t\t<h1 class=\"page-header\">Request Login</h1>
\t\t<div class=\"form-group\"\">
\t\t\t<label for=\"AttendTrainingCheckBox\">
\t\t\t\t<input data-val-required=\"The AttendTrainingCheckBox field is required.\" id=\"AttendTrainingCheckBox\" name=\"AttendTrainingCheckBox\" type=\"checkbox\" value=\"true\" /><input name=\"AttendTrainingCheckBox\" type=\"hidden\" value=\"false\" /> Have you attended Bell Training Academy before?
\t\t\t</label>
\t\t</div>
\t\t<h3 class=\"page-header\">I am Registering For</h3>
\t\t<section class=\"row\">
\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t<label for=\"MyselfCheckBox\">
\t\t\t\t\t<input type=\"radio\" name=\"registering_for\" value='myself' id='MyselfCheckBox'> Myself
\t\t\t\t\t<!-- <input data-val-required=\"The MyselfCheckBox field is required.\" id=\"MyselfCheckBox\" name=\"MyselfCheckBox\" onclick=\"MUpdate();\" type=\"radio\" value=\"true\" /><input name=\"MyselfCheckBox\" type=\"hidden\" value=\"false\" /> -->
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t<label for=\"MyselfAndOthersCheckBox\"> 
\t\t\t\t\t<input type=\"radio\" name=\"registering_for\" value='myselfAndOthers' id='MyselfAndOthersCheckBox'> Myself and Others
\t\t\t\t\t<!-- <input data-val-required=\"The MyselfAndOthersCheckBox field is required.\" id=\"MyselfAndOthersCheckBox\" name=\"MyselfAndOthersCheckBox\" onclick=\"MOUpdate();\" type=\"radio\" value=\"true\" /><input name=\"MyselfAndOthersCheckBox\" type=\"hidden\" value=\"false\" /> -->
\t\t\t\t</label>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 form-group\">
\t\t\t\t<label for=\"OthersCheckBox\">
\t\t\t\t\t<input type=\"radio\" name=\"registering_for\" value='othersOnly' id='OthersCheckBox'> Others
\t\t\t\t\t<!-- <input data-val-required=\"The OthersCheckBox field is required.\" id=\"OthersCheckBox\" name=\"OthersCheckBox\" onclick=\"OUpdate();\" type=\"radio\" value=\"true\" /><input name=\"OthersCheckBox\" type=\"hidden\" value=\"false\" /> -->
\t\t\t\t</label>
\t\t\t</div>
\t\t</section>

\t\t<div class=\"form-area\" style=\"display:none;\">
\t\t\t<div class=\"myself\">
\t\t\t\t<h4 class=\"page-header\">Personal Info</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"FirstName\">First Name</label>
\t\t\t\t\t\t<input id=\"FirstName\" maxlength=\"85\" name=\"FirstName\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"MiddleName\">Middle Name</label>
\t\t\t\t\t\t<input id=\"MiddleName\" maxlength=\"85\" name=\"MiddleName\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"LastName\">Last Name</label>
\t\t\t\t\t\t<input id=\"LastName\" maxlength=\"85\" name=\"LastName\" type=\"text\" class=\"form-control\"><span class=\"field-validation-valid\" ></span>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"Email\">Email</label>
\t\t\t\t\t\t<input id=\"Email\" maxlength=\"85\" name=\"Email\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-8\">
\t\t\t\t\t\t<label for=\"BusinessTitle\">Business Title</label>
\t\t\t\t\t\t<input id=\"BusinessTitle\" maxlength=\"85\" name=\"BusinessTitle\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div><!-- end of .row -->
\t\t\t</div>
\t\t\t<div class=\"row myself\">
\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t<label for=\"HomeAddress1\">Home Address 1</label>
\t\t\t\t\t<input id=\"HomeAddress1\" maxlength=\"85\" name=\"HomeAddress1\" type=\"text\" class=\"form-control\">
\t\t\t\t\t<br>
\t\t\t\t\t<label for=\"HomeAddress2\">Home Address 2</label>
\t\t\t\t\t<input id=\"HomeAddress2\" maxlength=\"85\" name=\"HomeAddress2\" type=\"text\" class=\"form-control\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"City\">City</label>
\t\t\t\t\t<input id=\"City\" maxlength=\"85\" name=\"City\" type=\"text\" class=\"form-control\"><span class=\"field-validation-valid\" data-valmsg-for=\"City\"></span>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-2\">
\t\t\t\t\t<label for=\"State\">State</label>
\t\t\t\t\t<input id=\"State\" maxlength=\"85\" name=\"State\" type=\"text\" class=\"form-control\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-2\">
\t\t\t\t\t<label for=\"ZipCode\">Zip</label>
\t\t\t\t\t<input id=\"ZipCode\" maxlength=\"85\" name=\"ZipCode\" type=\"text\" class=\"form-control\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"Phone\">Phone</label>
\t\t\t\t\t<input id=\"Phone\" maxlength=\"85\" name=\"Phone\" type=\"text\" class=\"form-control\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row myself\">
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"Citizenship\">Country of Citizenship</label>
\t\t\t\t\t<select id=\"Citizenship\" name=\"Citizenship\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">-- Select Citizenship --</option>
\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t<option value=\"Afghanistan\">Afghanistan</option>
\t\t\t\t\t\t<option value=\"Albania\">Albania</option>
\t\t\t\t\t\t<option value=\"Algeria\">Algeria</option>
\t\t\t\t\t\t<option value=\"American Samoa\">American Samoa</option>
\t\t\t\t\t\t<option value=\"Andorra\">Andorra</option>
\t\t\t\t\t\t<option value=\"Angola\">Angola</option>
\t\t\t\t\t\t<option value=\"Anguilla\">Anguilla</option>
\t\t\t\t\t\t<option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
\t\t\t\t\t\t<option value=\"Argentina\">Argentina</option>
\t\t\t\t\t\t<option value=\"Armenia\">Armenia</option>
\t\t\t\t\t\t<option value=\"Aruba\">Aruba</option>
\t\t\t\t\t\t<option value=\"Ascension\">Ascension</option>
\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t<option value=\"Austria\">Austria</option>
\t\t\t\t\t\t<option value=\"Azerbaijan\">Azerbaijan</option>
\t\t\t\t\t\t<option value=\"Bahamas\">Bahamas</option>
\t\t\t\t\t\t<option value=\"Bahrain\">Bahrain</option>
\t\t\t\t\t\t<option value=\"Bangladesh\">Bangladesh</option>
\t\t\t\t\t\t<option value=\"Barbados\">Barbados</option>
\t\t\t\t\t\t<option value=\"Belarus\">Belarus</option>
\t\t\t\t\t\t<option value=\"Belgium\">Belgium</option>
\t\t\t\t\t\t<option value=\"Belize\">Belize</option>
\t\t\t\t\t\t<option value=\"Benin\">Benin</option>
\t\t\t\t\t\t<option value=\"Bermuda\">Bermuda</option>
\t\t\t\t\t\t<option value=\"Bhutan\">Bhutan</option>
\t\t\t\t\t\t<option value=\"Bolivia\">Bolivia</option>
\t\t\t\t\t\t<option value=\"Bosnia and Herzegovina\">Bosnia and Herzegovina</option>
\t\t\t\t\t\t<option value=\"Botswana\">Botswana</option>
\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t<option value=\"British Virgin Islands\">British Virgin Islands</option>
\t\t\t\t\t\t<option value=\"Brunei Darussalam\">Brunei Darussalam</option>
\t\t\t\t\t\t<option value=\"Bulgaria\">Bulgaria</option>
\t\t\t\t\t\t<option value=\"Burkina Faso\">Burkina Faso</option>
\t\t\t\t\t\t<option value=\"Burundi \">Burundi </option>
\t\t\t\t\t\t<option value=\"Cambodia\">Cambodia</option>
\t\t\t\t\t\t<option value=\"Cameroon\">Cameroon</option>
\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t<option value=\"Cape Verde\">Cape Verde</option>
\t\t\t\t\t\t<option value=\"Cayman Islands\">Cayman Islands</option>
\t\t\t\t\t\t<option value=\"Central African Republic\">Central African Republic</option>
\t\t\t\t\t\t<option value=\"Chad\">Chad</option>
\t\t\t\t\t\t<option value=\"Chile\">Chile</option>
\t\t\t\t\t\t<option value=\"China\">China</option>
\t\t\t\t\t\t<option value=\"Christmas Island\">Christmas Island</option>
\t\t\t\t\t\t<option value=\"Cocos (Keeling) Islands\">Cocos (Keeling) Islands</option>
\t\t\t\t\t\t<option value=\"Colombia\">Colombia</option>
\t\t\t\t\t\t<option value=\"Comoros\">Comoros</option>
\t\t\t\t\t\t<option value=\"Congo, Democratic Republic of the\">Congo, Democratic Republic of the</option>
\t\t\t\t\t\t<option value=\"Congo, Republic of the\">Congo, Republic of the</option>
\t\t\t\t\t\t<option value=\"Cook Islands\">Cook Islands</option>
\t\t\t\t\t\t<option value=\"Costa Rica\">Costa Rica</option>
\t\t\t\t\t\t<option value=\"Croatia\">Croatia</option>
\t\t\t\t\t\t<option value=\"Cuba\">Cuba</option>
\t\t\t\t\t\t<option value=\"Cyprus\">Cyprus</option>
\t\t\t\t\t\t<option value=\"Czech Republic\">Czech Republic</option>
\t\t\t\t\t\t<option value=\"Côte D'ivoire (Ivory Coast)\">Côte D'ivoire (Ivory Coast)</option>
\t\t\t\t\t\t<option value=\"Denmark\">Denmark</option>
\t\t\t\t\t\t<option value=\"Djibouti\">Djibouti</option>
\t\t\t\t\t\t<option value=\"Dominica\">Dominica</option>
\t\t\t\t\t\t<option value=\"Dominican Republic\">Dominican Republic</option>
\t\t\t\t\t\t<option value=\"Ecuador\">Ecuador</option>
\t\t\t\t\t\t<option value=\"Egypt\">Egypt</option>
\t\t\t\t\t\t<option value=\"El Salvador\">El Salvador</option>
\t\t\t\t\t\t<option value=\"Equatorial Guinea\">Equatorial Guinea</option>
\t\t\t\t\t\t<option value=\"Eritrea\">Eritrea</option>
\t\t\t\t\t\t<option value=\"Estonia\">Estonia</option>
\t\t\t\t\t\t<option value=\"Ethiopia\">Ethiopia</option>
\t\t\t\t\t\t<option value=\"Falkland Islands\">Falkland Islands</option>
\t\t\t\t\t\t<option value=\"Faroe Islands\">Faroe Islands</option>
\t\t\t\t\t\t<option value=\"Fiji\">Fiji</option>
\t\t\t\t\t\t<option value=\"Finland\">Finland</option>
\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t<option value=\"French Guyana\">French Guyana</option>
\t\t\t\t\t\t<option value=\"French Polynesia\">French Polynesia</option>
\t\t\t\t\t\t<option value=\"Gabon\">Gabon</option>
\t\t\t\t\t\t<option value=\"Gambia\">Gambia</option>
\t\t\t\t\t\t<option value=\"Georgia\">Georgia</option>
\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t<option value=\"Ghana\">Ghana</option>
\t\t\t\t\t\t<option value=\"Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t<option value=\"Greece\">Greece</option>
\t\t\t\t\t\t<option value=\"Greenland\">Greenland</option>
\t\t\t\t\t\t<option value=\"Grenada\">Grenada</option>
\t\t\t\t\t\t<option value=\"Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t<option value=\"Guam\">Guam</option>
\t\t\t\t\t\t<option value=\"Guatemala\">Guatemala</option>
\t\t\t\t\t\t<option value=\"Guinea\">Guinea</option>
\t\t\t\t\t\t<option value=\"Guinea-Bissau\">Guinea-Bissau</option>
\t\t\t\t\t\t<option value=\"Guyana\">Guyana</option>
\t\t\t\t\t\t<option value=\"Haiti\">Haiti</option>
\t\t\t\t\t\t<option value=\"Honduras\">Honduras</option>
\t\t\t\t\t\t<option value=\"Hong Kong\">Hong Kong</option>
\t\t\t\t\t\t<option value=\"Hungary\">Hungary</option>
\t\t\t\t\t\t<option value=\"Iceland\">Iceland</option>
\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t<option value=\"Indonesia\">Indonesia</option>
\t\t\t\t\t\t<option value=\"Iran\">Iran</option>
\t\t\t\t\t\t<option value=\"Iraq\">Iraq</option>
\t\t\t\t\t\t<option value=\"Ireland\">Ireland</option>
\t\t\t\t\t\t<option value=\"Israel\">Israel</option>
\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t<option value=\"Jamaica\">Jamaica</option>
\t\t\t\t\t\t<option value=\"Japan\">Japan</option>
\t\t\t\t\t\t<option value=\"Jordan\">Jordan</option>
\t\t\t\t\t\t<option value=\"Kazakhstan\">Kazakhstan</option>
\t\t\t\t\t\t<option value=\"Kenya\">Kenya</option>
\t\t\t\t\t\t<option value=\"Kiribati\">Kiribati</option>
\t\t\t\t\t\t<option value=\"Korea, Democratic People's Republic of (North Korea)\">Korea, Democratic People's Republic of (North Korea)</option>
\t\t\t\t\t\t<option value=\"Korea, Republic of (South Korea)\">Korea, Republic of (South Korea)</option>
\t\t\t\t\t\t<option value=\"Kuwait\">Kuwait</option>
\t\t\t\t\t\t<option value=\"Kyrgyzstan\">Kyrgyzstan</option>
\t\t\t\t\t\t<option value=\"Laos\">Laos</option>
\t\t\t\t\t\t<option value=\"Latvia\">Latvia</option>
\t\t\t\t\t\t<option value=\"Lebanon\">Lebanon</option>
\t\t\t\t\t\t<option value=\"Lesotho\">Lesotho</option>
\t\t\t\t\t\t<option value=\"Liberia\">Liberia</option>
\t\t\t\t\t\t<option value=\"Libya\">Libya</option>
\t\t\t\t\t\t<option value=\"Liechtenstein\">Liechtenstein</option>
\t\t\t\t\t\t<option value=\"Lithuania\">Lithuania</option>
\t\t\t\t\t\t<option value=\"Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t<option value=\"Macau\">Macau</option>
\t\t\t\t\t\t<option value=\"Macedonia\">Macedonia</option>
\t\t\t\t\t\t<option value=\"Madagascar\">Madagascar</option>
\t\t\t\t\t\t<option value=\"Malawi\">Malawi</option>
\t\t\t\t\t\t<option value=\"Malaysia\">Malaysia</option>
\t\t\t\t\t\t<option value=\"Maldives\">Maldives</option>
\t\t\t\t\t\t<option value=\"Mali\">Mali</option>
\t\t\t\t\t\t<option value=\"Malta\">Malta</option>
\t\t\t\t\t\t<option value=\"Marshall Islands\">Marshall Islands</option>
\t\t\t\t\t\t<option value=\"Martinique\">Martinique</option>
\t\t\t\t\t\t<option value=\"Mauritania\">Mauritania</option>
\t\t\t\t\t\t<option value=\"Mauritius\">Mauritius</option>
\t\t\t\t\t\t<option value=\"Mayotte\">Mayotte</option>
\t\t\t\t\t\t<option value=\"Mexico\">Mexico</option>
\t\t\t\t\t\t<option value=\"Micronesia, Federated States of\">Micronesia, Federated States of</option>
\t\t\t\t\t\t<option value=\"Moldova\">Moldova</option>
\t\t\t\t\t\t<option value=\"Monaco\">Monaco</option>
\t\t\t\t\t\t<option value=\"Mongolia\">Mongolia</option>
\t\t\t\t\t\t<option value=\"Montenegro\">Montenegro</option>
\t\t\t\t\t\t<option value=\"Montserrat\">Montserrat</option>
\t\t\t\t\t\t<option value=\"Morocco\">Morocco</option>
\t\t\t\t\t\t<option value=\"Mozambique\">Mozambique</option>
\t\t\t\t\t\t<option value=\"Myanmar\">Myanmar</option>
\t\t\t\t\t\t<option value=\"Namibia\">Namibia</option>
\t\t\t\t\t\t<option value=\"Nauru\">Nauru</option>
\t\t\t\t\t\t<option value=\"Nepal\">Nepal</option>
\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t<option value=\"Netherlands Antilles\">Netherlands Antilles</option>
\t\t\t\t\t\t<option value=\"New Caledonia\">New Caledonia</option>
\t\t\t\t\t\t<option value=\"New Zealand\">New Zealand</option>
\t\t\t\t\t\t<option value=\"Nicaragua\">Nicaragua</option>
\t\t\t\t\t\t<option value=\"Niger\">Niger</option>
\t\t\t\t\t\t<option value=\"Nigeria\">Nigeria</option>
\t\t\t\t\t\t<option value=\"Niue\">Niue</option>
\t\t\t\t\t\t<option value=\"Norfolk Island\">Norfolk Island</option>
\t\t\t\t\t\t<option value=\"Northern Mariana Islands\">Northern Mariana Islands</option>
\t\t\t\t\t\t<option value=\"Norway\">Norway</option>
\t\t\t\t\t\t<option value=\"Oman\">Oman</option>
\t\t\t\t\t\t<option value=\"Pakistan\">Pakistan</option>
\t\t\t\t\t\t<option value=\"Palau\">Palau</option>
\t\t\t\t\t\t<option value=\"Panama\">Panama</option>
\t\t\t\t\t\t<option value=\"Papua New Guinea\">Papua New Guinea</option>
\t\t\t\t\t\t<option value=\"Paraguay\">Paraguay</option>
\t\t\t\t\t\t<option value=\"Peru\">Peru</option>
\t\t\t\t\t\t<option value=\"Philippines\">Philippines</option>
\t\t\t\t\t\t<option value=\"Pitcairn Island\">Pitcairn Island</option>
\t\t\t\t\t\t<option value=\"Poland\">Poland</option>
\t\t\t\t\t\t<option value=\"Portugal\">Portugal</option>
\t\t\t\t\t\t<option value=\"Puerto Rico\">Puerto Rico</option>
\t\t\t\t\t\t<option value=\"Qatar\">Qatar</option>
\t\t\t\t\t\t<option value=\"Reunion\">Reunion</option>
\t\t\t\t\t\t<option value=\"Romania\">Romania</option>
\t\t\t\t\t\t<option value=\"Russia\">Russia</option>
\t\t\t\t\t\t<option value=\"Rwanda\">Rwanda</option>
\t\t\t\t\t\t<option value=\"Saint Helena\">Saint Helena</option>
\t\t\t\t\t\t<option value=\"Saint Kitts and Nevis\">Saint Kitts and Nevis</option>
\t\t\t\t\t\t<option value=\"Saint Lucia\">Saint Lucia</option>
\t\t\t\t\t\t<option value=\"Saint Pierre and Miquelon\">Saint Pierre and Miquelon</option>
\t\t\t\t\t\t<option value=\"Saint Vincent and the Grenadines\">Saint Vincent and the Grenadines</option>
\t\t\t\t\t\t<option value=\"Samoa\">Samoa</option>
\t\t\t\t\t\t<option value=\"San Marino \">San Marino </option>
\t\t\t\t\t\t<option value=\"Sao Tome and Principe\">Sao Tome and Principe</option>
\t\t\t\t\t\t<option value=\"Saudi Arabia\">Saudi Arabia</option>
\t\t\t\t\t\t<option value=\"Senegal\">Senegal</option>
\t\t\t\t\t\t<option value=\"Serbia\">Serbia</option>
\t\t\t\t\t\t<option value=\"Seychelles\">Seychelles</option>
\t\t\t\t\t\t<option value=\"Sierra Leone \">Sierra Leone </option>
\t\t\t\t\t\t<option value=\"Singapore\">Singapore</option>
\t\t\t\t\t\t<option value=\"Slovakia\">Slovakia</option>
\t\t\t\t\t\t<option value=\"Slovenia\">Slovenia</option>
\t\t\t\t\t\t<option value=\"Solomon Islands\">Solomon Islands</option>
\t\t\t\t\t\t<option value=\"Somalia\">Somalia</option>
\t\t\t\t\t\t<option value=\"South Africa\">South Africa</option>
\t\t\t\t\t\t<option value=\"South Georgia &amp; South Sandwich Islands\">South Georgia &amp; South Sandwich Islands</option>
\t\t\t\t\t\t<option value=\"South Sudan\">South Sudan</option>
\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t<option value=\"Sri Lanka\">Sri Lanka</option>
\t\t\t\t\t\t<option value=\"Sudan\">Sudan</option>
\t\t\t\t\t\t<option value=\"Suriname\">Suriname</option>
\t\t\t\t\t\t<option value=\"Swaziland\">Swaziland</option>
\t\t\t\t\t\t<option value=\"Sweden\">Sweden</option>
\t\t\t\t\t\t<option value=\"Switzerland\">Switzerland</option>
\t\t\t\t\t\t<option value=\"Syria\">Syria</option>
\t\t\t\t\t\t<option value=\"Taiwan\">Taiwan</option>
\t\t\t\t\t\t<option value=\"Tajikistan\">Tajikistan</option>
\t\t\t\t\t\t<option value=\"Tanzania\">Tanzania</option>
\t\t\t\t\t\t<option value=\"Thailand\">Thailand</option>
\t\t\t\t\t\t<option value=\"Timor-Leste\">Timor-Leste</option>
\t\t\t\t\t\t<option value=\"Togo\">Togo</option>
\t\t\t\t\t\t<option value=\"Tokelau\">Tokelau</option>
\t\t\t\t\t\t<option value=\"Tonga\">Tonga</option>
\t\t\t\t\t\t<option value=\"Trinidad and Tobago\">Trinidad and Tobago</option>
\t\t\t\t\t\t<option value=\"Tristan da Cunha\">Tristan da Cunha</option>
\t\t\t\t\t\t<option value=\"Tunisia\">Tunisia</option>
\t\t\t\t\t\t<option value=\"Turkey\">Turkey</option>
\t\t\t\t\t\t<option value=\"Turkmenistan\">Turkmenistan</option>
\t\t\t\t\t\t<option value=\"Turks and Caicos Islands\">Turks and Caicos Islands</option>
\t\t\t\t\t\t<option value=\"Tuvalu\">Tuvalu</option>
\t\t\t\t\t\t<option value=\"Uganda\">Uganda</option>
\t\t\t\t\t\t<option value=\"Ukraine\">Ukraine</option>
\t\t\t\t\t\t<option value=\"United Arab Emirates\">United Arab Emirates</option>
\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t<option value=\"Uruguay\">Uruguay</option>
\t\t\t\t\t\t<option value=\"Uzbekistan\">Uzbekistan</option>
\t\t\t\t\t\t<option value=\"Vanuatu\">Vanuatu</option>
\t\t\t\t\t\t<option value=\"Vatican City (Holy See)\">Vatican City (Holy See)</option>
\t\t\t\t\t\t<option value=\"Venezuela\">Venezuela</option>
\t\t\t\t\t\t<option value=\"Vietnam\">Vietnam</option>
\t\t\t\t\t\t<option value=\"Virgin Islands (US)\">Virgin Islands (US)</option>
\t\t\t\t\t\t<option value=\"Wallis and Futuna\">Wallis and Futuna</option>
\t\t\t\t\t\t<option value=\"Western Sahara\">Western Sahara</option>
\t\t\t\t\t\t<option value=\"Yemen\">Yemen</option>
\t\t\t\t\t\t<option value=\"Zambia\">Zambia</option>
\t\t\t\t\t\t<option value=\"Zimbabwe\">Zimbabwe</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"TimeZoneId\">Timezone</label>
\t\t\t\t\t<!-- <input id=\"TimeZoneId\" maxlength=\"85\" name=\"TimeZoneId\" type=\"text\" class=\"form-control\"> -->
\t\t\t\t\t<select id=\"TimeZoneId\" name=\"TimeZoneId\"  class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">-- Select Time Zone --</option>
\t\t\t\t\t\t<option value=\"(GMT-12:00) Eniwektok, Kwajalein\">(GMT-12:00) Eniwektok, Kwajalein</option>
\t\t\t\t\t\t<option value=\"(GMT-11:00) Midway Island, Samoa\">(GMT-11:00) Midway Island, Samoa</option>
\t\t\t\t\t\t<option value=\"(GMT-10:00) Hawaii\">(GMT-10:00) Hawaii</option>
\t\t\t\t\t\t<option value=\"(GMT-09:00) Alaska\">(GMT-09:00) Alaska</option>
\t\t\t\t\t\t<option value=\"(GMT-08:00) Pacific Time (US &amp; Canada), Tijuana\">(GMT-08:00) Pacific Time (US &amp; Canada), Tijuana</option>
\t\t\t\t\t\t<option value=\"(GMT-07:00) Arizona\">(GMT-07:00) Arizona</option>
\t\t\t\t\t\t<option value=\"(GMT-07:00) Mountain Time (US &amp; Canada)\">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
\t\t\t\t\t\t<option value=\"(GMT-06:00) Saskatchewan\">(GMT-06:00) Saskatchewan</option>
\t\t\t\t\t\t<option value=\"(GMT-06:00) Mexico City, Tegucigalpa\">(GMT-06:00) Mexico City, Tegucigalpa</option>
\t\t\t\t\t\t<option value=\"(GMT-06:00) Central Time (US &amp; Canada)\">(GMT-06:00) Central Time (US &amp; Canada)</option>
\t\t\t\t\t\t<option value=\"(GMT-06:00) Central America\">(GMT-06:00) Central America</option>
\t\t\t\t\t\t<option value=\"(GMT-05:00) Indiana (East)\">(GMT-05:00) Indiana (East)</option>
\t\t\t\t\t\t<option value=\"(GMT-05:00) Bogota, Lima, Quito\">(GMT-05:00) Bogota, Lima, Quito</option>
\t\t\t\t\t\t<option value=\"(GMT-05:00) Eastern Time (US &amp; Canada)\">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
\t\t\t\t\t\t<option value=\"(GMT-04:30) Caracas\">(GMT-04:30) Caracas</option>
\t\t\t\t\t\t<option value=\"(GMT-04:00) Atlantic Time (Canada)\">(GMT-04:00) Atlantic Time (Canada)</option>
\t\t\t\t\t\t<option value=\"(GMT-04:00) La Paz\">(GMT-04:00) La Paz</option>
\t\t\t\t\t\t<option value=\"(GMT-03:30) Newfoundland\">(GMT-03:30) Newfoundland</option>
\t\t\t\t\t\t<option value=\"(GMT-03:00) Buenos Aires, Georgetown\">(GMT-03:00) Buenos Aires, Georgetown</option>
\t\t\t\t\t\t<option value=\"(GMT-03:00) Brasilia\">(GMT-03:00) Brasilia</option>
\t\t\t\t\t\t<option value=\"(GMT-02:00) Mid-Atlantic\">(GMT-02:00) Mid-Atlantic</option>
\t\t\t\t\t\t<option value=\"(GMT-01:00) Azores, Cape Verde Is.\">(GMT-01:00) Azores, Cape Verde Is.</option>
\t\t\t\t\t\t<option value=\"(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London\">(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
\t\t\t\t\t\t<option value=\"(GMT+01:00) Belgrade, Bratislava, Ljubljana, Prague\">(GMT+01:00) Belgrade, Bratislava, Ljubljana, Prague</option>
\t\t\t\t\t\t<option value=\"(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna\">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
\t\t\t\t\t\t<option value=\"(GMT+01:00) West Central Africa\">(GMT+01:00) West Central Africa</option>
\t\t\t\t\t\t<option value=\"(GMT+01:00) Brussels, Copenhagen, Madrid, Paris\">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
\t\t\t\t\t\t<option value=\"(GMT+01:00) Sarajevo, Skopje, Sofija, Warsaw, Zagreb\">(GMT+01:00) Sarajevo, Skopje, Sofija, Warsaw, Zagreb</option>
\t\t\t\t\t\t<option value=\"(GMT+02:00) Israel\">(GMT+02:00) Israel</option>
\t\t\t\t\t\t<option value=\"(GMT+02:00) Harare, Pretoria\">(GMT+02:00) Harare, Pretoria</option>
\t\t\t\t\t\t<option value=\"(GMT+02:00) Cairo\">(GMT+02:00) Cairo</option>
\t\t\t\t\t\t<option value=\"(GMT+02:00) Athens, Istanbul, Minsk\">(GMT+02:00) Athens, Istanbul, Minsk</option>
\t\t\t\t\t\t<option value=\"(GMT+02:00) Bucharest\">(GMT+02:00) Bucharest</option>
\t\t\t\t\t\t<option value=\"(GMT+02:00) Helsinki, Riga, Tallinn, Vilnius\">(GMT+02:00) Helsinki, Riga, Tallinn, Vilnius</option>
\t\t\t\t\t\t<option value=\"(GMT+03:00) Nairobi\">(GMT+03:00) Nairobi</option>
\t\t\t\t\t\t<option value=\"(GMT+03:00) Baghdad, Kuwait, Riyadh\">(GMT+03:00) Baghdad, Kuwait, Riyadh</option>
\t\t\t\t\t\t<option value=\"(GMT+03:00) Moscow, St. Petersburg, Volgograd\">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
\t\t\t\t\t\t<option value=\"(GMT+03:30) Tehran\">(GMT+03:30) Tehran</option>
\t\t\t\t\t\t<option value=\"(GMT+04:00) Abu Dhabi, Muscat\">(GMT+04:00) Abu Dhabi, Muscat</option>
\t\t\t\t\t\t<option value=\"(GMT+04:00) Baku, Tbilisi\">(GMT+04:00) Baku, Tbilisi</option>
\t\t\t\t\t\t<option value=\"(GMT+04:30) Kabul\">(GMT+04:30) Kabul</option>
\t\t\t\t\t\t<option value=\"(GMT+05:00) Ekaterinburg\">(GMT+05:00) Ekaterinburg</option>
\t\t\t\t\t\t<option value=\"(GMT+05:00) Islamabad, Karachi, Tashkent\">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
\t\t\t\t\t\t<option value=\"(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi\">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
\t\t\t\t\t\t<option value=\"(GMT+06:00) Colombo\">(GMT+06:00) Colombo</option>
\t\t\t\t\t\t<option value=\"(GMT+06:00) Almaty, Dhaka\">(GMT+06:00) Almaty, Dhaka</option>
\t\t\t\t\t\t<option value=\"(GMT+06:00) Novosibirsk\">(GMT+06:00) Novosibirsk</option>
\t\t\t\t\t\t<option value=\"(GMT+07:00) Bangkok, Hanoi, Jakarta\">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
\t\t\t\t\t\t<option value=\"(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi\">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
\t\t\t\t\t\t<option value=\"(GMT+08:00) Taipei\">(GMT+08:00) Taipei</option>
\t\t\t\t\t\t<option value=\"(GMT+08:00) Perth\">(GMT+08:00) Perth</option>
\t\t\t\t\t\t<option value=\"(GMT+08:00) Singapore\">(GMT+08:00) Singapore</option>
\t\t\t\t\t\t<option value=\"(GMT+09:00) Osaka, Sapporo, Tokyo\">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
\t\t\t\t\t\t<option value=\"(GMT+09:00) Yakutsk\">(GMT+09:00) Yakutsk</option>
\t\t\t\t\t\t<option value=\"(GMT+09:00) Seoul\">(GMT+09:00) Seoul</option>
\t\t\t\t\t\t<option value=\"(GMT+09:30) Darwin\">(GMT+09:30) Darwin</option>
\t\t\t\t\t\t<option value=\"(GMT+09:30) Adelaide\">(GMT+09:30) Adelaide</option>
\t\t\t\t\t\t<option value=\"(GMT+10:00) Vladivostok\">(GMT+10:00) Vladivostok</option>
\t\t\t\t\t\t<option value=\"(GMT+10:00) Guam, Port Moresby\">(GMT+10:00) Guam, Port Moresby</option>
\t\t\t\t\t\t<option value=\"(GMT+10:00) Canberra, Melbourne, Sydney\">(GMT+10:00) Canberra, Melbourne, Sydney</option>
\t\t\t\t\t\t<option value=\"(GMT+10:00) Brisbane\">(GMT+10:00) Brisbane</option>
\t\t\t\t\t\t<option value=\"(GMT+10:00) Hobart\">(GMT+10:00) Hobart</option>
\t\t\t\t\t\t<option value=\"(GMT+11:00) Magadan, Soloman Is, New Caledonia\">(GMT+11:00) Magadan, Soloman Is, New Caledonia</option>
\t\t\t\t\t\t<option value=\"(GMT+12:00) Fiji, Kamchatka, Marshall Is.\">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
\t\t\t\t\t\t<option value=\"(GMT+12:00) Auckland, Wellington\">(GMT+12:00) Auckland, Wellington</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
<label for=\"Country\">Country</label>
\t\t\t\t\t<!-- <input id=\"Country\" maxlength=\"85\" name=\"Country\" type=\"text\" class=\"form-control\"> -->
\t\t\t\t\t<select id=\"Country\" name=\"Country\" class=\"form-control\">
\t\t\t\t\t\t<option value=\"\">-- Select Country --</option>
\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t<option value=\"Afghanistan\">Afghanistan</option>
\t\t\t\t\t\t<option value=\"Albania\">Albania</option>
\t\t\t\t\t\t<option value=\"Algeria\">Algeria</option>
\t\t\t\t\t\t<option value=\"American Samoa\">American Samoa</option>
\t\t\t\t\t\t<option value=\"Andorra\">Andorra</option>
\t\t\t\t\t\t<option value=\"Angola\">Angola</option>
\t\t\t\t\t\t<option value=\"Anguilla\">Anguilla</option>
\t\t\t\t\t\t<option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
\t\t\t\t\t\t<option value=\"Argentina\">Argentina</option>
\t\t\t\t\t\t<option value=\"Armenia\">Armenia</option>
\t\t\t\t\t\t<option value=\"Aruba\">Aruba</option>
\t\t\t\t\t\t<option value=\"Ascension\">Ascension</option>
\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t<option value=\"Austria\">Austria</option>
\t\t\t\t\t\t<option value=\"Azerbaijan\">Azerbaijan</option>
\t\t\t\t\t\t<option value=\"Bahamas\">Bahamas</option>
\t\t\t\t\t\t<option value=\"Bahrain\">Bahrain</option>
\t\t\t\t\t\t<option value=\"Bangladesh\">Bangladesh</option>
\t\t\t\t\t\t<option value=\"Barbados\">Barbados</option>
\t\t\t\t\t\t<option value=\"Belarus\">Belarus</option>
\t\t\t\t\t\t<option value=\"Belgium\">Belgium</option>
\t\t\t\t\t\t<option value=\"Belize\">Belize</option>
\t\t\t\t\t\t<option value=\"Benin\">Benin</option>
\t\t\t\t\t\t<option value=\"Bermuda\">Bermuda</option>
\t\t\t\t\t\t<option value=\"Bhutan\">Bhutan</option>
\t\t\t\t\t\t<option value=\"Bolivia\">Bolivia</option>
\t\t\t\t\t\t<option value=\"Bosnia and Herzegovina\">Bosnia and Herzegovina</option>
\t\t\t\t\t\t<option value=\"Botswana\">Botswana</option>
\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t<option value=\"British Virgin Islands\">British Virgin Islands</option>
\t\t\t\t\t\t<option value=\"Brunei Darussalam\">Brunei Darussalam</option>
\t\t\t\t\t\t<option value=\"Bulgaria\">Bulgaria</option>
\t\t\t\t\t\t<option value=\"Burkina Faso\">Burkina Faso</option>
\t\t\t\t\t\t<option value=\"Burundi \">Burundi </option>
\t\t\t\t\t\t<option value=\"Cambodia\">Cambodia</option>
\t\t\t\t\t\t<option value=\"Cameroon\">Cameroon</option>
\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t<option value=\"Cape Verde\">Cape Verde</option>
\t\t\t\t\t\t<option value=\"Cayman Islands\">Cayman Islands</option>
\t\t\t\t\t\t<option value=\"Central African Republic\">Central African Republic</option>
\t\t\t\t\t\t<option value=\"Chad\">Chad</option>
\t\t\t\t\t\t<option value=\"Chile\">Chile</option>
\t\t\t\t\t\t<option value=\"China\">China</option>
\t\t\t\t\t\t<option value=\"Christmas Island\">Christmas Island</option>
\t\t\t\t\t\t<option value=\"Cocos (Keeling) Islands\">Cocos (Keeling) Islands</option>
\t\t\t\t\t\t<option value=\"Colombia\">Colombia</option>
\t\t\t\t\t\t<option value=\"Comoros\">Comoros</option>
\t\t\t\t\t\t<option value=\"Congo, Democratic Republic of the\">Congo, Democratic Republic of the</option>
\t\t\t\t\t\t<option value=\"Congo, Republic of the\">Congo, Republic of the</option>
\t\t\t\t\t\t<option value=\"Cook Islands\">Cook Islands</option>
\t\t\t\t\t\t<option value=\"Costa Rica\">Costa Rica</option>
\t\t\t\t\t\t<option value=\"Croatia\">Croatia</option>
\t\t\t\t\t\t<option value=\"Cuba\">Cuba</option>
\t\t\t\t\t\t<option value=\"Cyprus\">Cyprus</option>
\t\t\t\t\t\t<option value=\"Czech Republic\">Czech Republic</option>
\t\t\t\t\t\t<option value=\"Côte D'ivoire (Ivory Coast)\">Côte D'ivoire (Ivory Coast)</option>
\t\t\t\t\t\t<option value=\"Denmark\">Denmark</option>
\t\t\t\t\t\t<option value=\"Djibouti\">Djibouti</option>
\t\t\t\t\t\t<option value=\"Dominica\">Dominica</option>
\t\t\t\t\t\t<option value=\"Dominican Republic\">Dominican Republic</option>
\t\t\t\t\t\t<option value=\"Ecuador\">Ecuador</option>
\t\t\t\t\t\t<option value=\"Egypt\">Egypt</option>
\t\t\t\t\t\t<option value=\"El Salvador\">El Salvador</option>
\t\t\t\t\t\t<option value=\"Equatorial Guinea\">Equatorial Guinea</option>
\t\t\t\t\t\t<option value=\"Eritrea\">Eritrea</option>
\t\t\t\t\t\t<option value=\"Estonia\">Estonia</option>
\t\t\t\t\t\t<option value=\"Ethiopia\">Ethiopia</option>
\t\t\t\t\t\t<option value=\"Falkland Islands\">Falkland Islands</option>
\t\t\t\t\t\t<option value=\"Faroe Islands\">Faroe Islands</option>
\t\t\t\t\t\t<option value=\"Fiji\">Fiji</option>
\t\t\t\t\t\t<option value=\"Finland\">Finland</option>
\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t<option value=\"French Guyana\">French Guyana</option>
\t\t\t\t\t\t<option value=\"French Polynesia\">French Polynesia</option>
\t\t\t\t\t\t<option value=\"Gabon\">Gabon</option>
\t\t\t\t\t\t<option value=\"Gambia\">Gambia</option>
\t\t\t\t\t\t<option value=\"Georgia\">Georgia</option>
\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t<option value=\"Ghana\">Ghana</option>
\t\t\t\t\t\t<option value=\"Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t<option value=\"Greece\">Greece</option>
\t\t\t\t\t\t<option value=\"Greenland\">Greenland</option>
\t\t\t\t\t\t<option value=\"Grenada\">Grenada</option>
\t\t\t\t\t\t<option value=\"Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t<option value=\"Guam\">Guam</option>
\t\t\t\t\t\t<option value=\"Guatemala\">Guatemala</option>
\t\t\t\t\t\t<option value=\"Guinea\">Guinea</option>
\t\t\t\t\t\t<option value=\"Guinea-Bissau\">Guinea-Bissau</option>
\t\t\t\t\t\t<option value=\"Guyana\">Guyana</option>
\t\t\t\t\t\t<option value=\"Haiti\">Haiti</option>
\t\t\t\t\t\t<option value=\"Honduras\">Honduras</option>
\t\t\t\t\t\t<option value=\"Hong Kong\">Hong Kong</option>
\t\t\t\t\t\t<option value=\"Hungary\">Hungary</option>
\t\t\t\t\t\t<option value=\"Iceland\">Iceland</option>
\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t<option value=\"Indonesia\">Indonesia</option>
\t\t\t\t\t\t<option value=\"Iran\">Iran</option>
\t\t\t\t\t\t<option value=\"Iraq\">Iraq</option>
\t\t\t\t\t\t<option value=\"Ireland\">Ireland</option>
\t\t\t\t\t\t<option value=\"Israel\">Israel</option>
\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t<option value=\"Jamaica\">Jamaica</option>
\t\t\t\t\t\t<option value=\"Japan\">Japan</option>
\t\t\t\t\t\t<option value=\"Jordan\">Jordan</option>
\t\t\t\t\t\t<option value=\"Kazakhstan\">Kazakhstan</option>
\t\t\t\t\t\t<option value=\"Kenya\">Kenya</option>
\t\t\t\t\t\t<option value=\"Kiribati\">Kiribati</option>
\t\t\t\t\t\t<option value=\"Korea, Democratic People's Republic of (North Korea)\">Korea, Democratic People's Republic of (North Korea)</option>
\t\t\t\t\t\t<option value=\"Korea, Republic of (South Korea)\">Korea, Republic of (South Korea)</option>
\t\t\t\t\t\t<option value=\"Kuwait\">Kuwait</option>
\t\t\t\t\t\t<option value=\"Kyrgyzstan\">Kyrgyzstan</option>
\t\t\t\t\t\t<option value=\"Laos\">Laos</option>
\t\t\t\t\t\t<option value=\"Latvia\">Latvia</option>
\t\t\t\t\t\t<option value=\"Lebanon\">Lebanon</option>
\t\t\t\t\t\t<option value=\"Lesotho\">Lesotho</option>
\t\t\t\t\t\t<option value=\"Liberia\">Liberia</option>
\t\t\t\t\t\t<option value=\"Libya\">Libya</option>
\t\t\t\t\t\t<option value=\"Liechtenstein\">Liechtenstein</option>
\t\t\t\t\t\t<option value=\"Lithuania\">Lithuania</option>
\t\t\t\t\t\t<option value=\"Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t<option value=\"Macau\">Macau</option>
\t\t\t\t\t\t<option value=\"Macedonia\">Macedonia</option>
\t\t\t\t\t\t<option value=\"Madagascar\">Madagascar</option>
\t\t\t\t\t\t<option value=\"Malawi\">Malawi</option>
\t\t\t\t\t\t<option value=\"Malaysia\">Malaysia</option>
\t\t\t\t\t\t<option value=\"Maldives\">Maldives</option>
\t\t\t\t\t\t<option value=\"Mali\">Mali</option>
\t\t\t\t\t\t<option value=\"Malta\">Malta</option>
\t\t\t\t\t\t<option value=\"Marshall Islands\">Marshall Islands</option>
\t\t\t\t\t\t<option value=\"Martinique\">Martinique</option>
\t\t\t\t\t\t<option value=\"Mauritania\">Mauritania</option>
\t\t\t\t\t\t<option value=\"Mauritius\">Mauritius</option>
\t\t\t\t\t\t<option value=\"Mayotte\">Mayotte</option>
\t\t\t\t\t\t<option value=\"Mexico\">Mexico</option>
\t\t\t\t\t\t<option value=\"Micronesia, Federated States of\">Micronesia, Federated States of</option>
\t\t\t\t\t\t<option value=\"Moldova\">Moldova</option>
\t\t\t\t\t\t<option value=\"Monaco\">Monaco</option>
\t\t\t\t\t\t<option value=\"Mongolia\">Mongolia</option>
\t\t\t\t\t\t<option value=\"Montenegro\">Montenegro</option>
\t\t\t\t\t\t<option value=\"Montserrat\">Montserrat</option>
\t\t\t\t\t\t<option value=\"Morocco\">Morocco</option>
\t\t\t\t\t\t<option value=\"Mozambique\">Mozambique</option>
\t\t\t\t\t\t<option value=\"Myanmar\">Myanmar</option>
\t\t\t\t\t\t<option value=\"Namibia\">Namibia</option>
\t\t\t\t\t\t<option value=\"Nauru\">Nauru</option>
\t\t\t\t\t\t<option value=\"Nepal\">Nepal</option>
\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t<option value=\"Netherlands Antilles\">Netherlands Antilles</option>
\t\t\t\t\t\t<option value=\"New Caledonia\">New Caledonia</option>
\t\t\t\t\t\t<option value=\"New Zealand\">New Zealand</option>
\t\t\t\t\t\t<option value=\"Nicaragua\">Nicaragua</option>
\t\t\t\t\t\t<option value=\"Niger\">Niger</option>
\t\t\t\t\t\t<option value=\"Nigeria\">Nigeria</option>
\t\t\t\t\t\t<option value=\"Niue\">Niue</option>
\t\t\t\t\t\t<option value=\"Norfolk Island\">Norfolk Island</option>
\t\t\t\t\t\t<option value=\"Northern Mariana Islands\">Northern Mariana Islands</option>
\t\t\t\t\t\t<option value=\"Norway\">Norway</option>
\t\t\t\t\t\t<option value=\"Oman\">Oman</option>
\t\t\t\t\t\t<option value=\"Pakistan\">Pakistan</option>
\t\t\t\t\t\t<option value=\"Palau\">Palau</option>
\t\t\t\t\t\t<option value=\"Panama\">Panama</option>
\t\t\t\t\t\t<option value=\"Papua New Guinea\">Papua New Guinea</option>
\t\t\t\t\t\t<option value=\"Paraguay\">Paraguay</option>
\t\t\t\t\t\t<option value=\"Peru\">Peru</option>
\t\t\t\t\t\t<option value=\"Philippines\">Philippines</option>
\t\t\t\t\t\t<option value=\"Pitcairn Island\">Pitcairn Island</option>
\t\t\t\t\t\t<option value=\"Poland\">Poland</option>
\t\t\t\t\t\t<option value=\"Portugal\">Portugal</option>
\t\t\t\t\t\t<option value=\"Puerto Rico\">Puerto Rico</option>
\t\t\t\t\t\t<option value=\"Qatar\">Qatar</option>
\t\t\t\t\t\t<option value=\"Reunion\">Reunion</option>
\t\t\t\t\t\t<option value=\"Romania\">Romania</option>
\t\t\t\t\t\t<option value=\"Russia\">Russia</option>
\t\t\t\t\t\t<option value=\"Rwanda\">Rwanda</option>
\t\t\t\t\t\t<option value=\"Saint Helena\">Saint Helena</option>
\t\t\t\t\t\t<option value=\"Saint Kitts and Nevis\">Saint Kitts and Nevis</option>
\t\t\t\t\t\t<option value=\"Saint Lucia\">Saint Lucia</option>
\t\t\t\t\t\t<option value=\"Saint Pierre and Miquelon\">Saint Pierre and Miquelon</option>
\t\t\t\t\t\t<option value=\"Saint Vincent and the Grenadines\">Saint Vincent and the Grenadines</option>
\t\t\t\t\t\t<option value=\"Samoa\">Samoa</option>
\t\t\t\t\t\t<option value=\"San Marino \">San Marino </option>
\t\t\t\t\t\t<option value=\"Sao Tome and Principe\">Sao Tome and Principe</option>
\t\t\t\t\t\t<option value=\"Saudi Arabia\">Saudi Arabia</option>
\t\t\t\t\t\t<option value=\"Senegal\">Senegal</option>
\t\t\t\t\t\t<option value=\"Serbia\">Serbia</option>
\t\t\t\t\t\t<option value=\"Seychelles\">Seychelles</option>
\t\t\t\t\t\t<option value=\"Sierra Leone \">Sierra Leone </option>
\t\t\t\t\t\t<option value=\"Singapore\">Singapore</option>
\t\t\t\t\t\t<option value=\"Slovakia\">Slovakia</option>
\t\t\t\t\t\t<option value=\"Slovenia\">Slovenia</option>
\t\t\t\t\t\t<option value=\"Solomon Islands\">Solomon Islands</option>
\t\t\t\t\t\t<option value=\"Somalia\">Somalia</option>
\t\t\t\t\t\t<option value=\"South Africa\">South Africa</option>
\t\t\t\t\t\t<option value=\"South Georgia &amp; South Sandwich Islands\">South Georgia &amp; South Sandwich Islands</option>
\t\t\t\t\t\t<option value=\"South Sudan\">South Sudan</option>
\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t<option value=\"Sri Lanka\">Sri Lanka</option>
\t\t\t\t\t\t<option value=\"Sudan\">Sudan</option>
\t\t\t\t\t\t<option value=\"Suriname\">Suriname</option>
\t\t\t\t\t\t<option value=\"Swaziland\">Swaziland</option>
\t\t\t\t\t\t<option value=\"Sweden\">Sweden</option>
\t\t\t\t\t\t<option value=\"Switzerland\">Switzerland</option>
\t\t\t\t\t\t<option value=\"Syria\">Syria</option>
\t\t\t\t\t\t<option value=\"Taiwan\">Taiwan</option>
\t\t\t\t\t\t<option value=\"Tajikistan\">Tajikistan</option>
\t\t\t\t\t\t<option value=\"Tanzania\">Tanzania</option>
\t\t\t\t\t\t<option value=\"Thailand\">Thailand</option>
\t\t\t\t\t\t<option value=\"Timor-Leste\">Timor-Leste</option>
\t\t\t\t\t\t<option value=\"Togo\">Togo</option>
\t\t\t\t\t\t<option value=\"Tokelau\">Tokelau</option>
\t\t\t\t\t\t<option value=\"Tonga\">Tonga</option>
\t\t\t\t\t\t<option value=\"Trinidad and Tobago\">Trinidad and Tobago</option>
\t\t\t\t\t\t<option value=\"Tristan da Cunha\">Tristan da Cunha</option>
\t\t\t\t\t\t<option value=\"Tunisia\">Tunisia</option>
\t\t\t\t\t\t<option value=\"Turkey\">Turkey</option>
\t\t\t\t\t\t<option value=\"Turkmenistan\">Turkmenistan</option>
\t\t\t\t\t\t<option value=\"Turks and Caicos Islands\">Turks and Caicos Islands</option>
\t\t\t\t\t\t<option value=\"Tuvalu\">Tuvalu</option>
\t\t\t\t\t\t<option value=\"Uganda\">Uganda</option>
\t\t\t\t\t\t<option value=\"Ukraine\">Ukraine</option>
\t\t\t\t\t\t<option value=\"United Arab Emirates\">United Arab Emirates</option>
\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t<option value=\"Uruguay\">Uruguay</option>
\t\t\t\t\t\t<option value=\"Uzbekistan\">Uzbekistan</option>
\t\t\t\t\t\t<option value=\"Vanuatu\">Vanuatu</option>
\t\t\t\t\t\t<option value=\"Vatican City (Holy See)\">Vatican City (Holy See)</option>
\t\t\t\t\t\t<option value=\"Venezuela\">Venezuela</option>
\t\t\t\t\t\t<option value=\"Vietnam\">Vietnam</option>
\t\t\t\t\t\t<option value=\"Virgin Islands (US)\">Virgin Islands (US)</option>
\t\t\t\t\t\t<option value=\"Wallis and Futuna\">Wallis and Futuna</option>
\t\t\t\t\t\t<option value=\"Western Sahara\">Western Sahara</option>
\t\t\t\t\t\t<option value=\"Yemen\">Yemen</option>
\t\t\t\t\t\t<option value=\"Zambia\">Zambia</option>
\t\t\t\t\t\t<option value=\"Zimbabwe\">Zimbabwe</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row myself\">
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"PassportNumber\">Passport Number</label>
\t\t\t\t\t<input id=\"PassportNumber\" maxlength=\"85\" name=\"PassportNumber\" type=\"text\" class=\"form-control\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"PassportCountry\">Passport Country of Origin</label>
\t\t\t\t\t<input id=\"PassportCountry\" maxlength=\"85\" name=\"PassportCountry\" type=\"text\" class=\"form-control\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t<label for=\"DateIssued\">Date Issued</label>
\t\t\t\t\t<input id=\"DateIssued\" maxlength=\"85\" name=\"DateIssued\" type=\"text\" class=\"form-control\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"Others1\">
\t\t\t\t<h4 class=\"page-header\">Company Info</h4>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"Company\">Company</label>
\t\t\t\t\t\t<input id=\"Company\" maxlength=\"85\" name=\"Company\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"BellAccountNumber\">Bell Account Number</label>
\t\t\t\t\t\t<input id=\"BellAccountNumber\" maxlength=\"85\" name=\"BellAccountNumber\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"CompanyFax\">Company Fax</label>
\t\t\t\t\t\t<input id=\"CompanyFax\" maxlength=\"85\" name=\"CompanyFax\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-12\">
\t\t\t\t\t\t<label for=\"CompanyAddress1\">Company Address</label>
\t\t\t\t\t\t<input id=\"CompanyAddress1\" maxlength=\"85\" name=\"CompanyAddress1\" type=\"text\" class=\"form-control\">
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<label for=\"CompanyAddress2\">Company Address 2</label>
\t\t\t\t\t\t<input id=\"CompanyAddress2\" maxlength=\"85\" name=\"CompanyAddress2\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"CompanyCity\">Company City</label>
\t\t\t\t\t\t<input id=\"CompanyCity\" maxlength=\"85\" name=\"CompanyCity\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-2\">
\t\t\t\t\t\t<label for=\"CompanyState\">Company State</label>
\t\t\t\t\t\t<input id=\"CompanyState\" maxlength=\"85\" name=\"CompanyState\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-2\">
\t\t\t\t\t\t<label for=\"CompanyZipCode\">Company Zip</label>
\t\t\t\t\t\t<input id=\"CompanyZipCode\" maxlength=\"85\" name=\"CompanyZipCode\" type=\"text\" class=\"form-control\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group col-md-4\">
\t\t\t\t\t\t<label for=\"CompanyCountry\">Company Country</label>
\t\t\t\t\t\t<select id=\"CompanyCountry\" name=\"CompanyCountry\" class=\"form-control\">
\t\t\t\t\t\t\t<option value=\"\">-- Select Country --</option>
\t\t\t\t\t\t\t<option value=\"USA\">USA</option>
\t\t\t\t\t\t\t<option value=\"Afghanistan\">Afghanistan</option>
\t\t\t\t\t\t\t<option value=\"Albania\">Albania</option>
\t\t\t\t\t\t\t<option value=\"Algeria\">Algeria</option>
\t\t\t\t\t\t\t<option value=\"American Samoa\">American Samoa</option>
\t\t\t\t\t\t\t<option value=\"Andorra\">Andorra</option>
\t\t\t\t\t\t\t<option value=\"Angola\">Angola</option>
\t\t\t\t\t\t\t<option value=\"Anguilla\">Anguilla</option>
\t\t\t\t\t\t\t<option value=\"Antigua and Barbuda\">Antigua and Barbuda</option>
\t\t\t\t\t\t\t<option value=\"Argentina\">Argentina</option>
\t\t\t\t\t\t\t<option value=\"Armenia\">Armenia</option>
\t\t\t\t\t\t\t<option value=\"Aruba\">Aruba</option>
\t\t\t\t\t\t\t<option value=\"Ascension\">Ascension</option>
\t\t\t\t\t\t\t<option value=\"Australia\">Australia</option>
\t\t\t\t\t\t\t<option value=\"Austria\">Austria</option>
\t\t\t\t\t\t\t<option value=\"Azerbaijan\">Azerbaijan</option>
\t\t\t\t\t\t\t<option value=\"Bahamas\">Bahamas</option>
\t\t\t\t\t\t\t<option value=\"Bahrain\">Bahrain</option>
\t\t\t\t\t\t\t<option value=\"Bangladesh\">Bangladesh</option>
\t\t\t\t\t\t\t<option value=\"Barbados\">Barbados</option>
\t\t\t\t\t\t\t<option value=\"Belarus\">Belarus</option>
\t\t\t\t\t\t\t<option value=\"Belgium\">Belgium</option>
\t\t\t\t\t\t\t<option value=\"Belize\">Belize</option>
\t\t\t\t\t\t\t<option value=\"Benin\">Benin</option>
\t\t\t\t\t\t\t<option value=\"Bermuda\">Bermuda</option>
\t\t\t\t\t\t\t<option value=\"Bhutan\">Bhutan</option>
\t\t\t\t\t\t\t<option value=\"Bolivia\">Bolivia</option>
\t\t\t\t\t\t\t<option value=\"Bosnia and Herzegovina\">Bosnia and Herzegovina</option>
\t\t\t\t\t\t\t<option value=\"Botswana\">Botswana</option>
\t\t\t\t\t\t\t<option value=\"Brazil\">Brazil</option>
\t\t\t\t\t\t\t<option value=\"British Virgin Islands\">British Virgin Islands</option>
\t\t\t\t\t\t\t<option value=\"Brunei Darussalam\">Brunei Darussalam</option>
\t\t\t\t\t\t\t<option value=\"Bulgaria\">Bulgaria</option>
\t\t\t\t\t\t\t<option value=\"Burkina Faso\">Burkina Faso</option>
\t\t\t\t\t\t\t<option value=\"Burundi \">Burundi </option>
\t\t\t\t\t\t\t<option value=\"Cambodia\">Cambodia</option>
\t\t\t\t\t\t\t<option value=\"Cameroon\">Cameroon</option>
\t\t\t\t\t\t\t<option value=\"Canada\">Canada</option>
\t\t\t\t\t\t\t<option value=\"Cape Verde\">Cape Verde</option>
\t\t\t\t\t\t\t<option value=\"Cayman Islands\">Cayman Islands</option>
\t\t\t\t\t\t\t<option value=\"Central African Republic\">Central African Republic</option>
\t\t\t\t\t\t\t<option value=\"Chad\">Chad</option>
\t\t\t\t\t\t\t<option value=\"Chile\">Chile</option>
\t\t\t\t\t\t\t<option value=\"China\">China</option>
\t\t\t\t\t\t\t<option value=\"Christmas Island\">Christmas Island</option>
\t\t\t\t\t\t\t<option value=\"Cocos (Keeling) Islands\">Cocos (Keeling) Islands</option>
\t\t\t\t\t\t\t<option value=\"Colombia\">Colombia</option>
\t\t\t\t\t\t\t<option value=\"Comoros\">Comoros</option>
\t\t\t\t\t\t\t<option value=\"Congo, Democratic Republic of the\">Congo, Democratic Republic of the</option>
\t\t\t\t\t\t\t<option value=\"Congo, Republic of the\">Congo, Republic of the</option>
\t\t\t\t\t\t\t<option value=\"Cook Islands\">Cook Islands</option>
\t\t\t\t\t\t\t<option value=\"Costa Rica\">Costa Rica</option>
\t\t\t\t\t\t\t<option value=\"Croatia\">Croatia</option>
\t\t\t\t\t\t\t<option value=\"Cuba\">Cuba</option>
\t\t\t\t\t\t\t<option value=\"Cyprus\">Cyprus</option>
\t\t\t\t\t\t\t<option value=\"Czech Republic\">Czech Republic</option>
\t\t\t\t\t\t\t<option value=\"Côte D'ivoire (Ivory Coast)\">Côte D'ivoire (Ivory Coast)</option>
\t\t\t\t\t\t\t<option value=\"Denmark\">Denmark</option>
\t\t\t\t\t\t\t<option value=\"Djibouti\">Djibouti</option>
\t\t\t\t\t\t\t<option value=\"Dominica\">Dominica</option>
\t\t\t\t\t\t\t<option value=\"Dominican Republic\">Dominican Republic</option>
\t\t\t\t\t\t\t<option value=\"Ecuador\">Ecuador</option>
\t\t\t\t\t\t\t<option value=\"Egypt\">Egypt</option>
\t\t\t\t\t\t\t<option value=\"El Salvador\">El Salvador</option>
\t\t\t\t\t\t\t<option value=\"Equatorial Guinea\">Equatorial Guinea</option>
\t\t\t\t\t\t\t<option value=\"Eritrea\">Eritrea</option>
\t\t\t\t\t\t\t<option value=\"Estonia\">Estonia</option>
\t\t\t\t\t\t\t<option value=\"Ethiopia\">Ethiopia</option>
\t\t\t\t\t\t\t<option value=\"Falkland Islands\">Falkland Islands</option>
\t\t\t\t\t\t\t<option value=\"Faroe Islands\">Faroe Islands</option>
\t\t\t\t\t\t\t<option value=\"Fiji\">Fiji</option>
\t\t\t\t\t\t\t<option value=\"Finland\">Finland</option>
\t\t\t\t\t\t\t<option value=\"France\">France</option>
\t\t\t\t\t\t\t<option value=\"French Guyana\">French Guyana</option>
\t\t\t\t\t\t\t<option value=\"French Polynesia\">French Polynesia</option>
\t\t\t\t\t\t\t<option value=\"Gabon\">Gabon</option>
\t\t\t\t\t\t\t<option value=\"Gambia\">Gambia</option>
\t\t\t\t\t\t\t<option value=\"Georgia\">Georgia</option>
\t\t\t\t\t\t\t<option value=\"Germany\">Germany</option>
\t\t\t\t\t\t\t<option value=\"Ghana\">Ghana</option>
\t\t\t\t\t\t\t<option value=\"Gibraltar\">Gibraltar</option>
\t\t\t\t\t\t\t<option value=\"Greece\">Greece</option>
\t\t\t\t\t\t\t<option value=\"Greenland\">Greenland</option>
\t\t\t\t\t\t\t<option value=\"Grenada\">Grenada</option>
\t\t\t\t\t\t\t<option value=\"Guadeloupe\">Guadeloupe</option>
\t\t\t\t\t\t\t<option value=\"Guam\">Guam</option>
\t\t\t\t\t\t\t<option value=\"Guatemala\">Guatemala</option>
\t\t\t\t\t\t\t<option value=\"Guinea\">Guinea</option>
\t\t\t\t\t\t\t<option value=\"Guinea-Bissau\">Guinea-Bissau</option>
\t\t\t\t\t\t\t<option value=\"Guyana\">Guyana</option>
\t\t\t\t\t\t\t<option value=\"Haiti\">Haiti</option>
\t\t\t\t\t\t\t<option value=\"Honduras\">Honduras</option>
\t\t\t\t\t\t\t<option value=\"Hong Kong\">Hong Kong</option>
\t\t\t\t\t\t\t<option value=\"Hungary\">Hungary</option>
\t\t\t\t\t\t\t<option value=\"Iceland\">Iceland</option>
\t\t\t\t\t\t\t<option value=\"India\">India</option>
\t\t\t\t\t\t\t<option value=\"Indonesia\">Indonesia</option>
\t\t\t\t\t\t\t<option value=\"Iran\">Iran</option>
\t\t\t\t\t\t\t<option value=\"Iraq\">Iraq</option>
\t\t\t\t\t\t\t<option value=\"Ireland\">Ireland</option>
\t\t\t\t\t\t\t<option value=\"Israel\">Israel</option>
\t\t\t\t\t\t\t<option value=\"Italy\">Italy</option>
\t\t\t\t\t\t\t<option value=\"Jamaica\">Jamaica</option>
\t\t\t\t\t\t\t<option value=\"Japan\">Japan</option>
\t\t\t\t\t\t\t<option value=\"Jordan\">Jordan</option>
\t\t\t\t\t\t\t<option value=\"Kazakhstan\">Kazakhstan</option>
\t\t\t\t\t\t\t<option value=\"Kenya\">Kenya</option>
\t\t\t\t\t\t\t<option value=\"Kiribati\">Kiribati</option>
\t\t\t\t\t\t\t<option value=\"Korea, Democratic People's Republic of (North Korea)\">Korea, Democratic People's Republic of (North Korea)</option>
\t\t\t\t\t\t\t<option value=\"Korea, Republic of (South Korea)\">Korea, Republic of (South Korea)</option>
\t\t\t\t\t\t\t<option value=\"Kuwait\">Kuwait</option>
\t\t\t\t\t\t\t<option value=\"Kyrgyzstan\">Kyrgyzstan</option>
\t\t\t\t\t\t\t<option value=\"Laos\">Laos</option>
\t\t\t\t\t\t\t<option value=\"Latvia\">Latvia</option>
\t\t\t\t\t\t\t<option value=\"Lebanon\">Lebanon</option>
\t\t\t\t\t\t\t<option value=\"Lesotho\">Lesotho</option>
\t\t\t\t\t\t\t<option value=\"Liberia\">Liberia</option>
\t\t\t\t\t\t\t<option value=\"Libya\">Libya</option>
\t\t\t\t\t\t\t<option value=\"Liechtenstein\">Liechtenstein</option>
\t\t\t\t\t\t\t<option value=\"Lithuania\">Lithuania</option>
\t\t\t\t\t\t\t<option value=\"Luxembourg\">Luxembourg</option>
\t\t\t\t\t\t\t<option value=\"Macau\">Macau</option>
\t\t\t\t\t\t\t<option value=\"Macedonia\">Macedonia</option>
\t\t\t\t\t\t\t<option value=\"Madagascar\">Madagascar</option>
\t\t\t\t\t\t\t<option value=\"Malawi\">Malawi</option>
\t\t\t\t\t\t\t<option value=\"Malaysia\">Malaysia</option>
\t\t\t\t\t\t\t<option value=\"Maldives\">Maldives</option>
\t\t\t\t\t\t\t<option value=\"Mali\">Mali</option>
\t\t\t\t\t\t\t<option value=\"Malta\">Malta</option>
\t\t\t\t\t\t\t<option value=\"Marshall Islands\">Marshall Islands</option>
\t\t\t\t\t\t\t<option value=\"Martinique\">Martinique</option>
\t\t\t\t\t\t\t<option value=\"Mauritania\">Mauritania</option>
\t\t\t\t\t\t\t<option value=\"Mauritius\">Mauritius</option>
\t\t\t\t\t\t\t<option value=\"Mayotte\">Mayotte</option>
\t\t\t\t\t\t\t<option value=\"Mexico\">Mexico</option>
\t\t\t\t\t\t\t<option value=\"Micronesia, Federated States of\">Micronesia, Federated States of</option>
\t\t\t\t\t\t\t<option value=\"Moldova\">Moldova</option>
\t\t\t\t\t\t\t<option value=\"Monaco\">Monaco</option>
\t\t\t\t\t\t\t<option value=\"Mongolia\">Mongolia</option>
\t\t\t\t\t\t\t<option value=\"Montenegro\">Montenegro</option>
\t\t\t\t\t\t\t<option value=\"Montserrat\">Montserrat</option>
\t\t\t\t\t\t\t<option value=\"Morocco\">Morocco</option>
\t\t\t\t\t\t\t<option value=\"Mozambique\">Mozambique</option>
\t\t\t\t\t\t\t<option value=\"Myanmar\">Myanmar</option>
\t\t\t\t\t\t\t<option value=\"Namibia\">Namibia</option>
\t\t\t\t\t\t\t<option value=\"Nauru\">Nauru</option>
\t\t\t\t\t\t\t<option value=\"Nepal\">Nepal</option>
\t\t\t\t\t\t\t<option value=\"Netherlands\">Netherlands</option>
\t\t\t\t\t\t\t<option value=\"Netherlands Antilles\">Netherlands Antilles</option>
\t\t\t\t\t\t\t<option value=\"New Caledonia\">New Caledonia</option>
\t\t\t\t\t\t\t<option value=\"New Zealand\">New Zealand</option>
\t\t\t\t\t\t\t<option value=\"Nicaragua\">Nicaragua</option>
\t\t\t\t\t\t\t<option value=\"Niger\">Niger</option>
\t\t\t\t\t\t\t<option value=\"Nigeria\">Nigeria</option>
\t\t\t\t\t\t\t<option value=\"Niue\">Niue</option>
\t\t\t\t\t\t\t<option value=\"Norfolk Island\">Norfolk Island</option>
\t\t\t\t\t\t\t<option value=\"Northern Mariana Islands\">Northern Mariana Islands</option>
\t\t\t\t\t\t\t<option value=\"Norway\">Norway</option>
\t\t\t\t\t\t\t<option value=\"Oman\">Oman</option>
\t\t\t\t\t\t\t<option value=\"Pakistan\">Pakistan</option>
\t\t\t\t\t\t\t<option value=\"Palau\">Palau</option>
\t\t\t\t\t\t\t<option value=\"Panama\">Panama</option>
\t\t\t\t\t\t\t<option value=\"Papua New Guinea\">Papua New Guinea</option>
\t\t\t\t\t\t\t<option value=\"Paraguay\">Paraguay</option>
\t\t\t\t\t\t\t<option value=\"Peru\">Peru</option>
\t\t\t\t\t\t\t<option value=\"Philippines\">Philippines</option>
\t\t\t\t\t\t\t<option value=\"Pitcairn Island\">Pitcairn Island</option>
\t\t\t\t\t\t\t<option value=\"Poland\">Poland</option>
\t\t\t\t\t\t\t<option value=\"Portugal\">Portugal</option>
\t\t\t\t\t\t\t<option value=\"Puerto Rico\">Puerto Rico</option>
\t\t\t\t\t\t\t<option value=\"Qatar\">Qatar</option>
\t\t\t\t\t\t\t<option value=\"Reunion\">Reunion</option>
\t\t\t\t\t\t\t<option value=\"Romania\">Romania</option>
\t\t\t\t\t\t\t<option value=\"Russia\">Russia</option>
\t\t\t\t\t\t\t<option value=\"Rwanda\">Rwanda</option>
\t\t\t\t\t\t\t<option value=\"Saint Helena\">Saint Helena</option>
\t\t\t\t\t\t\t<option value=\"Saint Kitts and Nevis\">Saint Kitts and Nevis</option>
\t\t\t\t\t\t\t<option value=\"Saint Lucia\">Saint Lucia</option>
\t\t\t\t\t\t\t<option value=\"Saint Pierre and Miquelon\">Saint Pierre and Miquelon</option>
\t\t\t\t\t\t\t<option value=\"Saint Vincent and the Grenadines\">Saint Vincent and the Grenadines</option>
\t\t\t\t\t\t\t<option value=\"Samoa\">Samoa</option>
\t\t\t\t\t\t\t<option value=\"San Marino \">San Marino </option>
\t\t\t\t\t\t\t<option value=\"Sao Tome and Principe\">Sao Tome and Principe</option>
\t\t\t\t\t\t\t<option value=\"Saudi Arabia\">Saudi Arabia</option>
\t\t\t\t\t\t\t<option value=\"Senegal\">Senegal</option>
\t\t\t\t\t\t\t<option value=\"Serbia\">Serbia</option>
\t\t\t\t\t\t\t<option value=\"Seychelles\">Seychelles</option>
\t\t\t\t\t\t\t<option value=\"Sierra Leone \">Sierra Leone </option>
\t\t\t\t\t\t\t<option value=\"Singapore\">Singapore</option>
\t\t\t\t\t\t\t<option value=\"Slovakia\">Slovakia</option>
\t\t\t\t\t\t\t<option value=\"Slovenia\">Slovenia</option>
\t\t\t\t\t\t\t<option value=\"Solomon Islands\">Solomon Islands</option>
\t\t\t\t\t\t\t<option value=\"Somalia\">Somalia</option>
\t\t\t\t\t\t\t<option value=\"South Africa\">South Africa</option>
\t\t\t\t\t\t\t<option value=\"South Georgia &amp; South Sandwich Islands\">South Georgia &amp; South Sandwich Islands</option>
\t\t\t\t\t\t\t<option value=\"South Sudan\">South Sudan</option>
\t\t\t\t\t\t\t<option value=\"Spain\">Spain</option>
\t\t\t\t\t\t\t<option value=\"Sri Lanka\">Sri Lanka</option>
\t\t\t\t\t\t\t<option value=\"Sudan\">Sudan</option>
\t\t\t\t\t\t\t<option value=\"Suriname\">Suriname</option>
\t\t\t\t\t\t\t<option value=\"Swaziland\">Swaziland</option>
\t\t\t\t\t\t\t<option value=\"Sweden\">Sweden</option>
\t\t\t\t\t\t\t<option value=\"Switzerland\">Switzerland</option>
\t\t\t\t\t\t\t<option value=\"Syria\">Syria</option>
\t\t\t\t\t\t\t<option value=\"Taiwan\">Taiwan</option>
\t\t\t\t\t\t\t<option value=\"Tajikistan\">Tajikistan</option>
\t\t\t\t\t\t\t<option value=\"Tanzania\">Tanzania</option>
\t\t\t\t\t\t\t<option value=\"Thailand\">Thailand</option>
\t\t\t\t\t\t\t<option value=\"Timor-Leste\">Timor-Leste</option>
\t\t\t\t\t\t\t<option value=\"Togo\">Togo</option>
\t\t\t\t\t\t\t<option value=\"Tokelau\">Tokelau</option>
\t\t\t\t\t\t\t<option value=\"Tonga\">Tonga</option>
\t\t\t\t\t\t\t<option value=\"Trinidad and Tobago\">Trinidad and Tobago</option>
\t\t\t\t\t\t\t<option value=\"Tristan da Cunha\">Tristan da Cunha</option>
\t\t\t\t\t\t\t<option value=\"Tunisia\">Tunisia</option>
\t\t\t\t\t\t\t<option value=\"Turkey\">Turkey</option>
\t\t\t\t\t\t\t<option value=\"Turkmenistan\">Turkmenistan</option>
\t\t\t\t\t\t\t<option value=\"Turks and Caicos Islands\">Turks and Caicos Islands</option>
\t\t\t\t\t\t\t<option value=\"Tuvalu\">Tuvalu</option>
\t\t\t\t\t\t\t<option value=\"Uganda\">Uganda</option>
\t\t\t\t\t\t\t<option value=\"Ukraine\">Ukraine</option>
\t\t\t\t\t\t\t<option value=\"United Arab Emirates\">United Arab Emirates</option>
\t\t\t\t\t\t\t<option value=\"United Kingdom\">United Kingdom</option>
\t\t\t\t\t\t\t<option value=\"Uruguay\">Uruguay</option>
\t\t\t\t\t\t\t<option value=\"Uzbekistan\">Uzbekistan</option>
\t\t\t\t\t\t\t<option value=\"Vanuatu\">Vanuatu</option>
\t\t\t\t\t\t\t<option value=\"Vatican City (Holy See)\">Vatican City (Holy See)</option>
\t\t\t\t\t\t\t<option value=\"Venezuela\">Venezuela</option>
\t\t\t\t\t\t\t<option value=\"Vietnam\">Vietnam</option>
\t\t\t\t\t\t\t<option value=\"Virgin Islands (US)\">Virgin Islands (US)</option>
\t\t\t\t\t\t\t<option value=\"Wallis and Futuna\">Wallis and Futuna</option>
\t\t\t\t\t\t\t<option value=\"Western Sahara\">Western Sahara</option>
\t\t\t\t\t\t\t<option value=\"Yemen\">Yemen</option>
\t\t\t\t\t\t\t<option value=\"Zambia\">Zambia</option>
\t\t\t\t\t\t\t<option value=\"Zimbabwe\">Zimbabwe</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t

\t\t\t<div class=\"row Submit\">
\t\t\t\t<div class=\"col-md-12 clearfix\">
\t\t\t\t\t<input type=\"submit\" name=\"Submit Request\" class=\"btn btn-primary btn-lg pull-right\" value=\"Submit Request\" class=\"submit\">\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>

\t</section>
</form>

\t";
        // line 1028
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("tracking.htm"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 1029
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
\t\t\t\tunsetRequired(); // unset required inputs
\t\t\t\t\$.each(divs,function(index, value){
\t\t\t\t\tdebug('value: ' + value);
\t\t\t\t\t\$('.' + value).show();
\t\t\t\t\t\$('.' + value + ' input').attr('required', true); // set requried inputs
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
\t\t\t\t\t\tsetRequired();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\tfunction getBaseUrl() {
\t\t\t\tvar baseUrl = 'http://ui.bell.com/';
\t\t\t\treturn baseUrl;
\t\t\t}
\t\t\tfunction unsetRequired() {
\t\t\t\t\$.each(\$('.form-area input'), function(index, value){
\t\t\t\t\tvalue.removeAttribute('required')
\t\t\t\t\tconsole.log('Value: ' + value.getAttribute('required'));
\t\t\t\t});
\t\t\t}
\t\t\tfunction setRequired() {
\t\t\t\t\$.each(\$('.form-area input'), function(index, value){
\t\t\t\t\tvalue.setAttribute('required', 1)
\t\t\t\t\tconsole.log('Value: ' + value.getAttribute('required'));
\t\t\t\t});
\t\t\t}




\t\t\t/* INITALIZE */
\t\t\tvar checkboxes = \$('input[name=registering_for]');
\t\t\tcheckboxes.click(function(){
\t\t\t\tupdateView(checkboxes);
\t\t\t});

\t\t\t/* ADD DATE PICKER */
\t\t\t\$( \"#DateIssued\" ).datepicker();

\t\t\t/* REQUIRE ALL INPUTS */

\t\t\t\t

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
        return array (  1052 => 1029,  1048 => 1028,  19 => 1,);
    }
}
/* <!-- Required style sheets -->*/
/* <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">*/
/* <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>*/
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
/* 	-webkit-transition: height 1s; */
/* 		-moz-transition: height 1s; */
/* 		-ms-transition: height 1s; */
/* 		-o-transition: height 1s; */
/* 		transition: height 1s;  */
/* 	}*/
/* 	/*.form-area .row ,*//*  .main .row {*/
/* 		/*margin-bottom: 2em;*//* */
/* 		padding: 2em;*/
/* 	}*/
/* 	.form-area h2, .form-area h4 {*/
/* 		color:#ac1a2f;*/
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
/* /*	.training-request-form label input {*/
/* 		position: relative;*/
/* 		bottom: 3px;*/
/* 	}*/
/* 	.training-request-form .form-control:focus, .training-request-form .form-control {*/
/* 		font-size:2em;*/
/* 		height: inherit;*/
/* 		outline: none;*/
/* 		box-shadow: none;*/
/* 		border:none;*/
/* 	    background: transparent;*/
/* 		border-bottom: #e3e3e3 solid 2px;*/
/* 		border-radius: 0;*/
/* 	}*/
/* 	.training-request-form .form-control:focus {*/
/* 		background:#f9f9f9;*/
/* 	}*//* */
/* 	.ui-state-default, .ui-state-hover, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default, .ui-widget-header {*/
/* 		background: transparent;*/
/* 		border: transparent;*/
/* 	}*/
/* 	.ui-datepicker-calendar td a {*/
/* 		/*transition: all 0.25s;*//* */
/* 	}*/
/* 	.ui-datepicker-calendar td a:hover {*/
/* 		color:#ac1a2f;*/
/* 		background: #f4f4f4;*/
/* 	}*/
/* 	#DateIssued:hover {*/
/* 		cursor: pointer;*/
/* 	}*/
/* </style>*/
/* <script src="http://www.bellhelicopter.com/Scripts/js.cookie.js" type="text/javascript"></script>*/
/* */
/* <form class="training-request-form" action="/Home/Send" method="post">*/
/* 	<section class="container well main">*/
/* 		*/
/* 		<h1 class="page-header">Request Login</h1>*/
/* 		<div class="form-group"">*/
/* 			<label for="AttendTrainingCheckBox">*/
/* 				<input data-val-required="The AttendTrainingCheckBox field is required." id="AttendTrainingCheckBox" name="AttendTrainingCheckBox" type="checkbox" value="true" /><input name="AttendTrainingCheckBox" type="hidden" value="false" /> Have you attended Bell Training Academy before?*/
/* 			</label>*/
/* 		</div>*/
/* 		<h3 class="page-header">I am Registering For</h3>*/
/* 		<section class="row">*/
/* 			<div class="col-md-4 form-group">*/
/* 				<label for="MyselfCheckBox">*/
/* 					<input type="radio" name="registering_for" value='myself' id='MyselfCheckBox'> Myself*/
/* 					<!-- <input data-val-required="The MyselfCheckBox field is required." id="MyselfCheckBox" name="MyselfCheckBox" onclick="MUpdate();" type="radio" value="true" /><input name="MyselfCheckBox" type="hidden" value="false" /> -->*/
/* 				</label>*/
/* 			</div>*/
/* 			<div class="col-md-4 form-group">*/
/* 				<label for="MyselfAndOthersCheckBox"> */
/* 					<input type="radio" name="registering_for" value='myselfAndOthers' id='MyselfAndOthersCheckBox'> Myself and Others*/
/* 					<!-- <input data-val-required="The MyselfAndOthersCheckBox field is required." id="MyselfAndOthersCheckBox" name="MyselfAndOthersCheckBox" onclick="MOUpdate();" type="radio" value="true" /><input name="MyselfAndOthersCheckBox" type="hidden" value="false" /> -->*/
/* 				</label>*/
/* 			</div>*/
/* 			<div class="col-md-4 form-group">*/
/* 				<label for="OthersCheckBox">*/
/* 					<input type="radio" name="registering_for" value='othersOnly' id='OthersCheckBox'> Others*/
/* 					<!-- <input data-val-required="The OthersCheckBox field is required." id="OthersCheckBox" name="OthersCheckBox" onclick="OUpdate();" type="radio" value="true" /><input name="OthersCheckBox" type="hidden" value="false" /> -->*/
/* 				</label>*/
/* 			</div>*/
/* 		</section>*/
/* */
/* 		<div class="form-area" style="display:none;">*/
/* 			<div class="myself">*/
/* 				<h4 class="page-header">Personal Info</h4>*/
/* 				<div class="row">*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="FirstName">First Name</label>*/
/* 						<input id="FirstName" maxlength="85" name="FirstName" type="text" class="form-control">*/
/* 					</div>*/
/* */
/* 					<div class="form-group col-md-4">*/
/* 						<label for="MiddleName">Middle Name</label>*/
/* 						<input id="MiddleName" maxlength="85" name="MiddleName" type="text" class="form-control">*/
/* 					</div>*/
/* */
/* 					<div class="form-group col-md-4">*/
/* 						<label for="LastName">Last Name</label>*/
/* 						<input id="LastName" maxlength="85" name="LastName" type="text" class="form-control"><span class="field-validation-valid" ></span>*/
/* 					</div>*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="Email">Email</label>*/
/* 						<input id="Email" maxlength="85" name="Email" type="text" class="form-control">*/
/* 					</div>*/
/* 					<div class="form-group col-md-8">*/
/* 						<label for="BusinessTitle">Business Title</label>*/
/* 						<input id="BusinessTitle" maxlength="85" name="BusinessTitle" type="text" class="form-control">*/
/* 					</div>*/
/* 				</div><!-- end of .row -->*/
/* 			</div>*/
/* 			<div class="row myself">*/
/* 				<div class="form-group col-md-12">*/
/* 					<label for="HomeAddress1">Home Address 1</label>*/
/* 					<input id="HomeAddress1" maxlength="85" name="HomeAddress1" type="text" class="form-control">*/
/* 					<br>*/
/* 					<label for="HomeAddress2">Home Address 2</label>*/
/* 					<input id="HomeAddress2" maxlength="85" name="HomeAddress2" type="text" class="form-control">*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="City">City</label>*/
/* 					<input id="City" maxlength="85" name="City" type="text" class="form-control"><span class="field-validation-valid" data-valmsg-for="City"></span>*/
/* 				</div>*/
/* 				<div class="form-group col-md-2">*/
/* 					<label for="State">State</label>*/
/* 					<input id="State" maxlength="85" name="State" type="text" class="form-control">*/
/* 				</div>*/
/* 				<div class="form-group col-md-2">*/
/* 					<label for="ZipCode">Zip</label>*/
/* 					<input id="ZipCode" maxlength="85" name="ZipCode" type="text" class="form-control">*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="Phone">Phone</label>*/
/* 					<input id="Phone" maxlength="85" name="Phone" type="text" class="form-control">*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row myself">*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="Citizenship">Country of Citizenship</label>*/
/* 					<select id="Citizenship" name="Citizenship" class="form-control">*/
/* 						<option value="">-- Select Citizenship --</option>*/
/* 						<option value="USA">USA</option>*/
/* 						<option value="Afghanistan">Afghanistan</option>*/
/* 						<option value="Albania">Albania</option>*/
/* 						<option value="Algeria">Algeria</option>*/
/* 						<option value="American Samoa">American Samoa</option>*/
/* 						<option value="Andorra">Andorra</option>*/
/* 						<option value="Angola">Angola</option>*/
/* 						<option value="Anguilla">Anguilla</option>*/
/* 						<option value="Antigua and Barbuda">Antigua and Barbuda</option>*/
/* 						<option value="Argentina">Argentina</option>*/
/* 						<option value="Armenia">Armenia</option>*/
/* 						<option value="Aruba">Aruba</option>*/
/* 						<option value="Ascension">Ascension</option>*/
/* 						<option value="Australia">Australia</option>*/
/* 						<option value="Austria">Austria</option>*/
/* 						<option value="Azerbaijan">Azerbaijan</option>*/
/* 						<option value="Bahamas">Bahamas</option>*/
/* 						<option value="Bahrain">Bahrain</option>*/
/* 						<option value="Bangladesh">Bangladesh</option>*/
/* 						<option value="Barbados">Barbados</option>*/
/* 						<option value="Belarus">Belarus</option>*/
/* 						<option value="Belgium">Belgium</option>*/
/* 						<option value="Belize">Belize</option>*/
/* 						<option value="Benin">Benin</option>*/
/* 						<option value="Bermuda">Bermuda</option>*/
/* 						<option value="Bhutan">Bhutan</option>*/
/* 						<option value="Bolivia">Bolivia</option>*/
/* 						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>*/
/* 						<option value="Botswana">Botswana</option>*/
/* 						<option value="Brazil">Brazil</option>*/
/* 						<option value="British Virgin Islands">British Virgin Islands</option>*/
/* 						<option value="Brunei Darussalam">Brunei Darussalam</option>*/
/* 						<option value="Bulgaria">Bulgaria</option>*/
/* 						<option value="Burkina Faso">Burkina Faso</option>*/
/* 						<option value="Burundi ">Burundi </option>*/
/* 						<option value="Cambodia">Cambodia</option>*/
/* 						<option value="Cameroon">Cameroon</option>*/
/* 						<option value="Canada">Canada</option>*/
/* 						<option value="Cape Verde">Cape Verde</option>*/
/* 						<option value="Cayman Islands">Cayman Islands</option>*/
/* 						<option value="Central African Republic">Central African Republic</option>*/
/* 						<option value="Chad">Chad</option>*/
/* 						<option value="Chile">Chile</option>*/
/* 						<option value="China">China</option>*/
/* 						<option value="Christmas Island">Christmas Island</option>*/
/* 						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>*/
/* 						<option value="Colombia">Colombia</option>*/
/* 						<option value="Comoros">Comoros</option>*/
/* 						<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>*/
/* 						<option value="Congo, Republic of the">Congo, Republic of the</option>*/
/* 						<option value="Cook Islands">Cook Islands</option>*/
/* 						<option value="Costa Rica">Costa Rica</option>*/
/* 						<option value="Croatia">Croatia</option>*/
/* 						<option value="Cuba">Cuba</option>*/
/* 						<option value="Cyprus">Cyprus</option>*/
/* 						<option value="Czech Republic">Czech Republic</option>*/
/* 						<option value="Côte D'ivoire (Ivory Coast)">Côte D'ivoire (Ivory Coast)</option>*/
/* 						<option value="Denmark">Denmark</option>*/
/* 						<option value="Djibouti">Djibouti</option>*/
/* 						<option value="Dominica">Dominica</option>*/
/* 						<option value="Dominican Republic">Dominican Republic</option>*/
/* 						<option value="Ecuador">Ecuador</option>*/
/* 						<option value="Egypt">Egypt</option>*/
/* 						<option value="El Salvador">El Salvador</option>*/
/* 						<option value="Equatorial Guinea">Equatorial Guinea</option>*/
/* 						<option value="Eritrea">Eritrea</option>*/
/* 						<option value="Estonia">Estonia</option>*/
/* 						<option value="Ethiopia">Ethiopia</option>*/
/* 						<option value="Falkland Islands">Falkland Islands</option>*/
/* 						<option value="Faroe Islands">Faroe Islands</option>*/
/* 						<option value="Fiji">Fiji</option>*/
/* 						<option value="Finland">Finland</option>*/
/* 						<option value="France">France</option>*/
/* 						<option value="French Guyana">French Guyana</option>*/
/* 						<option value="French Polynesia">French Polynesia</option>*/
/* 						<option value="Gabon">Gabon</option>*/
/* 						<option value="Gambia">Gambia</option>*/
/* 						<option value="Georgia">Georgia</option>*/
/* 						<option value="Germany">Germany</option>*/
/* 						<option value="Ghana">Ghana</option>*/
/* 						<option value="Gibraltar">Gibraltar</option>*/
/* 						<option value="Greece">Greece</option>*/
/* 						<option value="Greenland">Greenland</option>*/
/* 						<option value="Grenada">Grenada</option>*/
/* 						<option value="Guadeloupe">Guadeloupe</option>*/
/* 						<option value="Guam">Guam</option>*/
/* 						<option value="Guatemala">Guatemala</option>*/
/* 						<option value="Guinea">Guinea</option>*/
/* 						<option value="Guinea-Bissau">Guinea-Bissau</option>*/
/* 						<option value="Guyana">Guyana</option>*/
/* 						<option value="Haiti">Haiti</option>*/
/* 						<option value="Honduras">Honduras</option>*/
/* 						<option value="Hong Kong">Hong Kong</option>*/
/* 						<option value="Hungary">Hungary</option>*/
/* 						<option value="Iceland">Iceland</option>*/
/* 						<option value="India">India</option>*/
/* 						<option value="Indonesia">Indonesia</option>*/
/* 						<option value="Iran">Iran</option>*/
/* 						<option value="Iraq">Iraq</option>*/
/* 						<option value="Ireland">Ireland</option>*/
/* 						<option value="Israel">Israel</option>*/
/* 						<option value="Italy">Italy</option>*/
/* 						<option value="Jamaica">Jamaica</option>*/
/* 						<option value="Japan">Japan</option>*/
/* 						<option value="Jordan">Jordan</option>*/
/* 						<option value="Kazakhstan">Kazakhstan</option>*/
/* 						<option value="Kenya">Kenya</option>*/
/* 						<option value="Kiribati">Kiribati</option>*/
/* 						<option value="Korea, Democratic People's Republic of (North Korea)">Korea, Democratic People's Republic of (North Korea)</option>*/
/* 						<option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>*/
/* 						<option value="Kuwait">Kuwait</option>*/
/* 						<option value="Kyrgyzstan">Kyrgyzstan</option>*/
/* 						<option value="Laos">Laos</option>*/
/* 						<option value="Latvia">Latvia</option>*/
/* 						<option value="Lebanon">Lebanon</option>*/
/* 						<option value="Lesotho">Lesotho</option>*/
/* 						<option value="Liberia">Liberia</option>*/
/* 						<option value="Libya">Libya</option>*/
/* 						<option value="Liechtenstein">Liechtenstein</option>*/
/* 						<option value="Lithuania">Lithuania</option>*/
/* 						<option value="Luxembourg">Luxembourg</option>*/
/* 						<option value="Macau">Macau</option>*/
/* 						<option value="Macedonia">Macedonia</option>*/
/* 						<option value="Madagascar">Madagascar</option>*/
/* 						<option value="Malawi">Malawi</option>*/
/* 						<option value="Malaysia">Malaysia</option>*/
/* 						<option value="Maldives">Maldives</option>*/
/* 						<option value="Mali">Mali</option>*/
/* 						<option value="Malta">Malta</option>*/
/* 						<option value="Marshall Islands">Marshall Islands</option>*/
/* 						<option value="Martinique">Martinique</option>*/
/* 						<option value="Mauritania">Mauritania</option>*/
/* 						<option value="Mauritius">Mauritius</option>*/
/* 						<option value="Mayotte">Mayotte</option>*/
/* 						<option value="Mexico">Mexico</option>*/
/* 						<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>*/
/* 						<option value="Moldova">Moldova</option>*/
/* 						<option value="Monaco">Monaco</option>*/
/* 						<option value="Mongolia">Mongolia</option>*/
/* 						<option value="Montenegro">Montenegro</option>*/
/* 						<option value="Montserrat">Montserrat</option>*/
/* 						<option value="Morocco">Morocco</option>*/
/* 						<option value="Mozambique">Mozambique</option>*/
/* 						<option value="Myanmar">Myanmar</option>*/
/* 						<option value="Namibia">Namibia</option>*/
/* 						<option value="Nauru">Nauru</option>*/
/* 						<option value="Nepal">Nepal</option>*/
/* 						<option value="Netherlands">Netherlands</option>*/
/* 						<option value="Netherlands Antilles">Netherlands Antilles</option>*/
/* 						<option value="New Caledonia">New Caledonia</option>*/
/* 						<option value="New Zealand">New Zealand</option>*/
/* 						<option value="Nicaragua">Nicaragua</option>*/
/* 						<option value="Niger">Niger</option>*/
/* 						<option value="Nigeria">Nigeria</option>*/
/* 						<option value="Niue">Niue</option>*/
/* 						<option value="Norfolk Island">Norfolk Island</option>*/
/* 						<option value="Northern Mariana Islands">Northern Mariana Islands</option>*/
/* 						<option value="Norway">Norway</option>*/
/* 						<option value="Oman">Oman</option>*/
/* 						<option value="Pakistan">Pakistan</option>*/
/* 						<option value="Palau">Palau</option>*/
/* 						<option value="Panama">Panama</option>*/
/* 						<option value="Papua New Guinea">Papua New Guinea</option>*/
/* 						<option value="Paraguay">Paraguay</option>*/
/* 						<option value="Peru">Peru</option>*/
/* 						<option value="Philippines">Philippines</option>*/
/* 						<option value="Pitcairn Island">Pitcairn Island</option>*/
/* 						<option value="Poland">Poland</option>*/
/* 						<option value="Portugal">Portugal</option>*/
/* 						<option value="Puerto Rico">Puerto Rico</option>*/
/* 						<option value="Qatar">Qatar</option>*/
/* 						<option value="Reunion">Reunion</option>*/
/* 						<option value="Romania">Romania</option>*/
/* 						<option value="Russia">Russia</option>*/
/* 						<option value="Rwanda">Rwanda</option>*/
/* 						<option value="Saint Helena">Saint Helena</option>*/
/* 						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>*/
/* 						<option value="Saint Lucia">Saint Lucia</option>*/
/* 						<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>*/
/* 						<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>*/
/* 						<option value="Samoa">Samoa</option>*/
/* 						<option value="San Marino ">San Marino </option>*/
/* 						<option value="Sao Tome and Principe">Sao Tome and Principe</option>*/
/* 						<option value="Saudi Arabia">Saudi Arabia</option>*/
/* 						<option value="Senegal">Senegal</option>*/
/* 						<option value="Serbia">Serbia</option>*/
/* 						<option value="Seychelles">Seychelles</option>*/
/* 						<option value="Sierra Leone ">Sierra Leone </option>*/
/* 						<option value="Singapore">Singapore</option>*/
/* 						<option value="Slovakia">Slovakia</option>*/
/* 						<option value="Slovenia">Slovenia</option>*/
/* 						<option value="Solomon Islands">Solomon Islands</option>*/
/* 						<option value="Somalia">Somalia</option>*/
/* 						<option value="South Africa">South Africa</option>*/
/* 						<option value="South Georgia &amp; South Sandwich Islands">South Georgia &amp; South Sandwich Islands</option>*/
/* 						<option value="South Sudan">South Sudan</option>*/
/* 						<option value="Spain">Spain</option>*/
/* 						<option value="Sri Lanka">Sri Lanka</option>*/
/* 						<option value="Sudan">Sudan</option>*/
/* 						<option value="Suriname">Suriname</option>*/
/* 						<option value="Swaziland">Swaziland</option>*/
/* 						<option value="Sweden">Sweden</option>*/
/* 						<option value="Switzerland">Switzerland</option>*/
/* 						<option value="Syria">Syria</option>*/
/* 						<option value="Taiwan">Taiwan</option>*/
/* 						<option value="Tajikistan">Tajikistan</option>*/
/* 						<option value="Tanzania">Tanzania</option>*/
/* 						<option value="Thailand">Thailand</option>*/
/* 						<option value="Timor-Leste">Timor-Leste</option>*/
/* 						<option value="Togo">Togo</option>*/
/* 						<option value="Tokelau">Tokelau</option>*/
/* 						<option value="Tonga">Tonga</option>*/
/* 						<option value="Trinidad and Tobago">Trinidad and Tobago</option>*/
/* 						<option value="Tristan da Cunha">Tristan da Cunha</option>*/
/* 						<option value="Tunisia">Tunisia</option>*/
/* 						<option value="Turkey">Turkey</option>*/
/* 						<option value="Turkmenistan">Turkmenistan</option>*/
/* 						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>*/
/* 						<option value="Tuvalu">Tuvalu</option>*/
/* 						<option value="Uganda">Uganda</option>*/
/* 						<option value="Ukraine">Ukraine</option>*/
/* 						<option value="United Arab Emirates">United Arab Emirates</option>*/
/* 						<option value="United Kingdom">United Kingdom</option>*/
/* 						<option value="Uruguay">Uruguay</option>*/
/* 						<option value="Uzbekistan">Uzbekistan</option>*/
/* 						<option value="Vanuatu">Vanuatu</option>*/
/* 						<option value="Vatican City (Holy See)">Vatican City (Holy See)</option>*/
/* 						<option value="Venezuela">Venezuela</option>*/
/* 						<option value="Vietnam">Vietnam</option>*/
/* 						<option value="Virgin Islands (US)">Virgin Islands (US)</option>*/
/* 						<option value="Wallis and Futuna">Wallis and Futuna</option>*/
/* 						<option value="Western Sahara">Western Sahara</option>*/
/* 						<option value="Yemen">Yemen</option>*/
/* 						<option value="Zambia">Zambia</option>*/
/* 						<option value="Zimbabwe">Zimbabwe</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="TimeZoneId">Timezone</label>*/
/* 					<!-- <input id="TimeZoneId" maxlength="85" name="TimeZoneId" type="text" class="form-control"> -->*/
/* 					<select id="TimeZoneId" name="TimeZoneId"  class="form-control">*/
/* 						<option value="">-- Select Time Zone --</option>*/
/* 						<option value="(GMT-12:00) Eniwektok, Kwajalein">(GMT-12:00) Eniwektok, Kwajalein</option>*/
/* 						<option value="(GMT-11:00) Midway Island, Samoa">(GMT-11:00) Midway Island, Samoa</option>*/
/* 						<option value="(GMT-10:00) Hawaii">(GMT-10:00) Hawaii</option>*/
/* 						<option value="(GMT-09:00) Alaska">(GMT-09:00) Alaska</option>*/
/* 						<option value="(GMT-08:00) Pacific Time (US &amp; Canada), Tijuana">(GMT-08:00) Pacific Time (US &amp; Canada), Tijuana</option>*/
/* 						<option value="(GMT-07:00) Arizona">(GMT-07:00) Arizona</option>*/
/* 						<option value="(GMT-07:00) Mountain Time (US &amp; Canada)">(GMT-07:00) Mountain Time (US &amp; Canada)</option>*/
/* 						<option value="(GMT-06:00) Saskatchewan">(GMT-06:00) Saskatchewan</option>*/
/* 						<option value="(GMT-06:00) Mexico City, Tegucigalpa">(GMT-06:00) Mexico City, Tegucigalpa</option>*/
/* 						<option value="(GMT-06:00) Central Time (US &amp; Canada)">(GMT-06:00) Central Time (US &amp; Canada)</option>*/
/* 						<option value="(GMT-06:00) Central America">(GMT-06:00) Central America</option>*/
/* 						<option value="(GMT-05:00) Indiana (East)">(GMT-05:00) Indiana (East)</option>*/
/* 						<option value="(GMT-05:00) Bogota, Lima, Quito">(GMT-05:00) Bogota, Lima, Quito</option>*/
/* 						<option value="(GMT-05:00) Eastern Time (US &amp; Canada)">(GMT-05:00) Eastern Time (US &amp; Canada)</option>*/
/* 						<option value="(GMT-04:30) Caracas">(GMT-04:30) Caracas</option>*/
/* 						<option value="(GMT-04:00) Atlantic Time (Canada)">(GMT-04:00) Atlantic Time (Canada)</option>*/
/* 						<option value="(GMT-04:00) La Paz">(GMT-04:00) La Paz</option>*/
/* 						<option value="(GMT-03:30) Newfoundland">(GMT-03:30) Newfoundland</option>*/
/* 						<option value="(GMT-03:00) Buenos Aires, Georgetown">(GMT-03:00) Buenos Aires, Georgetown</option>*/
/* 						<option value="(GMT-03:00) Brasilia">(GMT-03:00) Brasilia</option>*/
/* 						<option value="(GMT-02:00) Mid-Atlantic">(GMT-02:00) Mid-Atlantic</option>*/
/* 						<option value="(GMT-01:00) Azores, Cape Verde Is.">(GMT-01:00) Azores, Cape Verde Is.</option>*/
/* 						<option value="(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London">(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>*/
/* 						<option value="(GMT+01:00) Belgrade, Bratislava, Ljubljana, Prague">(GMT+01:00) Belgrade, Bratislava, Ljubljana, Prague</option>*/
/* 						<option value="(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>*/
/* 						<option value="(GMT+01:00) West Central Africa">(GMT+01:00) West Central Africa</option>*/
/* 						<option value="(GMT+01:00) Brussels, Copenhagen, Madrid, Paris">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>*/
/* 						<option value="(GMT+01:00) Sarajevo, Skopje, Sofija, Warsaw, Zagreb">(GMT+01:00) Sarajevo, Skopje, Sofija, Warsaw, Zagreb</option>*/
/* 						<option value="(GMT+02:00) Israel">(GMT+02:00) Israel</option>*/
/* 						<option value="(GMT+02:00) Harare, Pretoria">(GMT+02:00) Harare, Pretoria</option>*/
/* 						<option value="(GMT+02:00) Cairo">(GMT+02:00) Cairo</option>*/
/* 						<option value="(GMT+02:00) Athens, Istanbul, Minsk">(GMT+02:00) Athens, Istanbul, Minsk</option>*/
/* 						<option value="(GMT+02:00) Bucharest">(GMT+02:00) Bucharest</option>*/
/* 						<option value="(GMT+02:00) Helsinki, Riga, Tallinn, Vilnius">(GMT+02:00) Helsinki, Riga, Tallinn, Vilnius</option>*/
/* 						<option value="(GMT+03:00) Nairobi">(GMT+03:00) Nairobi</option>*/
/* 						<option value="(GMT+03:00) Baghdad, Kuwait, Riyadh">(GMT+03:00) Baghdad, Kuwait, Riyadh</option>*/
/* 						<option value="(GMT+03:00) Moscow, St. Petersburg, Volgograd">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>*/
/* 						<option value="(GMT+03:30) Tehran">(GMT+03:30) Tehran</option>*/
/* 						<option value="(GMT+04:00) Abu Dhabi, Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>*/
/* 						<option value="(GMT+04:00) Baku, Tbilisi">(GMT+04:00) Baku, Tbilisi</option>*/
/* 						<option value="(GMT+04:30) Kabul">(GMT+04:30) Kabul</option>*/
/* 						<option value="(GMT+05:00) Ekaterinburg">(GMT+05:00) Ekaterinburg</option>*/
/* 						<option value="(GMT+05:00) Islamabad, Karachi, Tashkent">(GMT+05:00) Islamabad, Karachi, Tashkent</option>*/
/* 						<option value="(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>*/
/* 						<option value="(GMT+06:00) Colombo">(GMT+06:00) Colombo</option>*/
/* 						<option value="(GMT+06:00) Almaty, Dhaka">(GMT+06:00) Almaty, Dhaka</option>*/
/* 						<option value="(GMT+06:00) Novosibirsk">(GMT+06:00) Novosibirsk</option>*/
/* 						<option value="(GMT+07:00) Bangkok, Hanoi, Jakarta">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>*/
/* 						<option value="(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>*/
/* 						<option value="(GMT+08:00) Taipei">(GMT+08:00) Taipei</option>*/
/* 						<option value="(GMT+08:00) Perth">(GMT+08:00) Perth</option>*/
/* 						<option value="(GMT+08:00) Singapore">(GMT+08:00) Singapore</option>*/
/* 						<option value="(GMT+09:00) Osaka, Sapporo, Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>*/
/* 						<option value="(GMT+09:00) Yakutsk">(GMT+09:00) Yakutsk</option>*/
/* 						<option value="(GMT+09:00) Seoul">(GMT+09:00) Seoul</option>*/
/* 						<option value="(GMT+09:30) Darwin">(GMT+09:30) Darwin</option>*/
/* 						<option value="(GMT+09:30) Adelaide">(GMT+09:30) Adelaide</option>*/
/* 						<option value="(GMT+10:00) Vladivostok">(GMT+10:00) Vladivostok</option>*/
/* 						<option value="(GMT+10:00) Guam, Port Moresby">(GMT+10:00) Guam, Port Moresby</option>*/
/* 						<option value="(GMT+10:00) Canberra, Melbourne, Sydney">(GMT+10:00) Canberra, Melbourne, Sydney</option>*/
/* 						<option value="(GMT+10:00) Brisbane">(GMT+10:00) Brisbane</option>*/
/* 						<option value="(GMT+10:00) Hobart">(GMT+10:00) Hobart</option>*/
/* 						<option value="(GMT+11:00) Magadan, Soloman Is, New Caledonia">(GMT+11:00) Magadan, Soloman Is, New Caledonia</option>*/
/* 						<option value="(GMT+12:00) Fiji, Kamchatka, Marshall Is.">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>*/
/* 						<option value="(GMT+12:00) Auckland, Wellington">(GMT+12:00) Auckland, Wellington</option>*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* <label for="Country">Country</label>*/
/* 					<!-- <input id="Country" maxlength="85" name="Country" type="text" class="form-control"> -->*/
/* 					<select id="Country" name="Country" class="form-control">*/
/* 						<option value="">-- Select Country --</option>*/
/* 						<option value="USA">USA</option>*/
/* 						<option value="Afghanistan">Afghanistan</option>*/
/* 						<option value="Albania">Albania</option>*/
/* 						<option value="Algeria">Algeria</option>*/
/* 						<option value="American Samoa">American Samoa</option>*/
/* 						<option value="Andorra">Andorra</option>*/
/* 						<option value="Angola">Angola</option>*/
/* 						<option value="Anguilla">Anguilla</option>*/
/* 						<option value="Antigua and Barbuda">Antigua and Barbuda</option>*/
/* 						<option value="Argentina">Argentina</option>*/
/* 						<option value="Armenia">Armenia</option>*/
/* 						<option value="Aruba">Aruba</option>*/
/* 						<option value="Ascension">Ascension</option>*/
/* 						<option value="Australia">Australia</option>*/
/* 						<option value="Austria">Austria</option>*/
/* 						<option value="Azerbaijan">Azerbaijan</option>*/
/* 						<option value="Bahamas">Bahamas</option>*/
/* 						<option value="Bahrain">Bahrain</option>*/
/* 						<option value="Bangladesh">Bangladesh</option>*/
/* 						<option value="Barbados">Barbados</option>*/
/* 						<option value="Belarus">Belarus</option>*/
/* 						<option value="Belgium">Belgium</option>*/
/* 						<option value="Belize">Belize</option>*/
/* 						<option value="Benin">Benin</option>*/
/* 						<option value="Bermuda">Bermuda</option>*/
/* 						<option value="Bhutan">Bhutan</option>*/
/* 						<option value="Bolivia">Bolivia</option>*/
/* 						<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>*/
/* 						<option value="Botswana">Botswana</option>*/
/* 						<option value="Brazil">Brazil</option>*/
/* 						<option value="British Virgin Islands">British Virgin Islands</option>*/
/* 						<option value="Brunei Darussalam">Brunei Darussalam</option>*/
/* 						<option value="Bulgaria">Bulgaria</option>*/
/* 						<option value="Burkina Faso">Burkina Faso</option>*/
/* 						<option value="Burundi ">Burundi </option>*/
/* 						<option value="Cambodia">Cambodia</option>*/
/* 						<option value="Cameroon">Cameroon</option>*/
/* 						<option value="Canada">Canada</option>*/
/* 						<option value="Cape Verde">Cape Verde</option>*/
/* 						<option value="Cayman Islands">Cayman Islands</option>*/
/* 						<option value="Central African Republic">Central African Republic</option>*/
/* 						<option value="Chad">Chad</option>*/
/* 						<option value="Chile">Chile</option>*/
/* 						<option value="China">China</option>*/
/* 						<option value="Christmas Island">Christmas Island</option>*/
/* 						<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>*/
/* 						<option value="Colombia">Colombia</option>*/
/* 						<option value="Comoros">Comoros</option>*/
/* 						<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>*/
/* 						<option value="Congo, Republic of the">Congo, Republic of the</option>*/
/* 						<option value="Cook Islands">Cook Islands</option>*/
/* 						<option value="Costa Rica">Costa Rica</option>*/
/* 						<option value="Croatia">Croatia</option>*/
/* 						<option value="Cuba">Cuba</option>*/
/* 						<option value="Cyprus">Cyprus</option>*/
/* 						<option value="Czech Republic">Czech Republic</option>*/
/* 						<option value="Côte D'ivoire (Ivory Coast)">Côte D'ivoire (Ivory Coast)</option>*/
/* 						<option value="Denmark">Denmark</option>*/
/* 						<option value="Djibouti">Djibouti</option>*/
/* 						<option value="Dominica">Dominica</option>*/
/* 						<option value="Dominican Republic">Dominican Republic</option>*/
/* 						<option value="Ecuador">Ecuador</option>*/
/* 						<option value="Egypt">Egypt</option>*/
/* 						<option value="El Salvador">El Salvador</option>*/
/* 						<option value="Equatorial Guinea">Equatorial Guinea</option>*/
/* 						<option value="Eritrea">Eritrea</option>*/
/* 						<option value="Estonia">Estonia</option>*/
/* 						<option value="Ethiopia">Ethiopia</option>*/
/* 						<option value="Falkland Islands">Falkland Islands</option>*/
/* 						<option value="Faroe Islands">Faroe Islands</option>*/
/* 						<option value="Fiji">Fiji</option>*/
/* 						<option value="Finland">Finland</option>*/
/* 						<option value="France">France</option>*/
/* 						<option value="French Guyana">French Guyana</option>*/
/* 						<option value="French Polynesia">French Polynesia</option>*/
/* 						<option value="Gabon">Gabon</option>*/
/* 						<option value="Gambia">Gambia</option>*/
/* 						<option value="Georgia">Georgia</option>*/
/* 						<option value="Germany">Germany</option>*/
/* 						<option value="Ghana">Ghana</option>*/
/* 						<option value="Gibraltar">Gibraltar</option>*/
/* 						<option value="Greece">Greece</option>*/
/* 						<option value="Greenland">Greenland</option>*/
/* 						<option value="Grenada">Grenada</option>*/
/* 						<option value="Guadeloupe">Guadeloupe</option>*/
/* 						<option value="Guam">Guam</option>*/
/* 						<option value="Guatemala">Guatemala</option>*/
/* 						<option value="Guinea">Guinea</option>*/
/* 						<option value="Guinea-Bissau">Guinea-Bissau</option>*/
/* 						<option value="Guyana">Guyana</option>*/
/* 						<option value="Haiti">Haiti</option>*/
/* 						<option value="Honduras">Honduras</option>*/
/* 						<option value="Hong Kong">Hong Kong</option>*/
/* 						<option value="Hungary">Hungary</option>*/
/* 						<option value="Iceland">Iceland</option>*/
/* 						<option value="India">India</option>*/
/* 						<option value="Indonesia">Indonesia</option>*/
/* 						<option value="Iran">Iran</option>*/
/* 						<option value="Iraq">Iraq</option>*/
/* 						<option value="Ireland">Ireland</option>*/
/* 						<option value="Israel">Israel</option>*/
/* 						<option value="Italy">Italy</option>*/
/* 						<option value="Jamaica">Jamaica</option>*/
/* 						<option value="Japan">Japan</option>*/
/* 						<option value="Jordan">Jordan</option>*/
/* 						<option value="Kazakhstan">Kazakhstan</option>*/
/* 						<option value="Kenya">Kenya</option>*/
/* 						<option value="Kiribati">Kiribati</option>*/
/* 						<option value="Korea, Democratic People's Republic of (North Korea)">Korea, Democratic People's Republic of (North Korea)</option>*/
/* 						<option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>*/
/* 						<option value="Kuwait">Kuwait</option>*/
/* 						<option value="Kyrgyzstan">Kyrgyzstan</option>*/
/* 						<option value="Laos">Laos</option>*/
/* 						<option value="Latvia">Latvia</option>*/
/* 						<option value="Lebanon">Lebanon</option>*/
/* 						<option value="Lesotho">Lesotho</option>*/
/* 						<option value="Liberia">Liberia</option>*/
/* 						<option value="Libya">Libya</option>*/
/* 						<option value="Liechtenstein">Liechtenstein</option>*/
/* 						<option value="Lithuania">Lithuania</option>*/
/* 						<option value="Luxembourg">Luxembourg</option>*/
/* 						<option value="Macau">Macau</option>*/
/* 						<option value="Macedonia">Macedonia</option>*/
/* 						<option value="Madagascar">Madagascar</option>*/
/* 						<option value="Malawi">Malawi</option>*/
/* 						<option value="Malaysia">Malaysia</option>*/
/* 						<option value="Maldives">Maldives</option>*/
/* 						<option value="Mali">Mali</option>*/
/* 						<option value="Malta">Malta</option>*/
/* 						<option value="Marshall Islands">Marshall Islands</option>*/
/* 						<option value="Martinique">Martinique</option>*/
/* 						<option value="Mauritania">Mauritania</option>*/
/* 						<option value="Mauritius">Mauritius</option>*/
/* 						<option value="Mayotte">Mayotte</option>*/
/* 						<option value="Mexico">Mexico</option>*/
/* 						<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>*/
/* 						<option value="Moldova">Moldova</option>*/
/* 						<option value="Monaco">Monaco</option>*/
/* 						<option value="Mongolia">Mongolia</option>*/
/* 						<option value="Montenegro">Montenegro</option>*/
/* 						<option value="Montserrat">Montserrat</option>*/
/* 						<option value="Morocco">Morocco</option>*/
/* 						<option value="Mozambique">Mozambique</option>*/
/* 						<option value="Myanmar">Myanmar</option>*/
/* 						<option value="Namibia">Namibia</option>*/
/* 						<option value="Nauru">Nauru</option>*/
/* 						<option value="Nepal">Nepal</option>*/
/* 						<option value="Netherlands">Netherlands</option>*/
/* 						<option value="Netherlands Antilles">Netherlands Antilles</option>*/
/* 						<option value="New Caledonia">New Caledonia</option>*/
/* 						<option value="New Zealand">New Zealand</option>*/
/* 						<option value="Nicaragua">Nicaragua</option>*/
/* 						<option value="Niger">Niger</option>*/
/* 						<option value="Nigeria">Nigeria</option>*/
/* 						<option value="Niue">Niue</option>*/
/* 						<option value="Norfolk Island">Norfolk Island</option>*/
/* 						<option value="Northern Mariana Islands">Northern Mariana Islands</option>*/
/* 						<option value="Norway">Norway</option>*/
/* 						<option value="Oman">Oman</option>*/
/* 						<option value="Pakistan">Pakistan</option>*/
/* 						<option value="Palau">Palau</option>*/
/* 						<option value="Panama">Panama</option>*/
/* 						<option value="Papua New Guinea">Papua New Guinea</option>*/
/* 						<option value="Paraguay">Paraguay</option>*/
/* 						<option value="Peru">Peru</option>*/
/* 						<option value="Philippines">Philippines</option>*/
/* 						<option value="Pitcairn Island">Pitcairn Island</option>*/
/* 						<option value="Poland">Poland</option>*/
/* 						<option value="Portugal">Portugal</option>*/
/* 						<option value="Puerto Rico">Puerto Rico</option>*/
/* 						<option value="Qatar">Qatar</option>*/
/* 						<option value="Reunion">Reunion</option>*/
/* 						<option value="Romania">Romania</option>*/
/* 						<option value="Russia">Russia</option>*/
/* 						<option value="Rwanda">Rwanda</option>*/
/* 						<option value="Saint Helena">Saint Helena</option>*/
/* 						<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>*/
/* 						<option value="Saint Lucia">Saint Lucia</option>*/
/* 						<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>*/
/* 						<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>*/
/* 						<option value="Samoa">Samoa</option>*/
/* 						<option value="San Marino ">San Marino </option>*/
/* 						<option value="Sao Tome and Principe">Sao Tome and Principe</option>*/
/* 						<option value="Saudi Arabia">Saudi Arabia</option>*/
/* 						<option value="Senegal">Senegal</option>*/
/* 						<option value="Serbia">Serbia</option>*/
/* 						<option value="Seychelles">Seychelles</option>*/
/* 						<option value="Sierra Leone ">Sierra Leone </option>*/
/* 						<option value="Singapore">Singapore</option>*/
/* 						<option value="Slovakia">Slovakia</option>*/
/* 						<option value="Slovenia">Slovenia</option>*/
/* 						<option value="Solomon Islands">Solomon Islands</option>*/
/* 						<option value="Somalia">Somalia</option>*/
/* 						<option value="South Africa">South Africa</option>*/
/* 						<option value="South Georgia &amp; South Sandwich Islands">South Georgia &amp; South Sandwich Islands</option>*/
/* 						<option value="South Sudan">South Sudan</option>*/
/* 						<option value="Spain">Spain</option>*/
/* 						<option value="Sri Lanka">Sri Lanka</option>*/
/* 						<option value="Sudan">Sudan</option>*/
/* 						<option value="Suriname">Suriname</option>*/
/* 						<option value="Swaziland">Swaziland</option>*/
/* 						<option value="Sweden">Sweden</option>*/
/* 						<option value="Switzerland">Switzerland</option>*/
/* 						<option value="Syria">Syria</option>*/
/* 						<option value="Taiwan">Taiwan</option>*/
/* 						<option value="Tajikistan">Tajikistan</option>*/
/* 						<option value="Tanzania">Tanzania</option>*/
/* 						<option value="Thailand">Thailand</option>*/
/* 						<option value="Timor-Leste">Timor-Leste</option>*/
/* 						<option value="Togo">Togo</option>*/
/* 						<option value="Tokelau">Tokelau</option>*/
/* 						<option value="Tonga">Tonga</option>*/
/* 						<option value="Trinidad and Tobago">Trinidad and Tobago</option>*/
/* 						<option value="Tristan da Cunha">Tristan da Cunha</option>*/
/* 						<option value="Tunisia">Tunisia</option>*/
/* 						<option value="Turkey">Turkey</option>*/
/* 						<option value="Turkmenistan">Turkmenistan</option>*/
/* 						<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>*/
/* 						<option value="Tuvalu">Tuvalu</option>*/
/* 						<option value="Uganda">Uganda</option>*/
/* 						<option value="Ukraine">Ukraine</option>*/
/* 						<option value="United Arab Emirates">United Arab Emirates</option>*/
/* 						<option value="United Kingdom">United Kingdom</option>*/
/* 						<option value="Uruguay">Uruguay</option>*/
/* 						<option value="Uzbekistan">Uzbekistan</option>*/
/* 						<option value="Vanuatu">Vanuatu</option>*/
/* 						<option value="Vatican City (Holy See)">Vatican City (Holy See)</option>*/
/* 						<option value="Venezuela">Venezuela</option>*/
/* 						<option value="Vietnam">Vietnam</option>*/
/* 						<option value="Virgin Islands (US)">Virgin Islands (US)</option>*/
/* 						<option value="Wallis and Futuna">Wallis and Futuna</option>*/
/* 						<option value="Western Sahara">Western Sahara</option>*/
/* 						<option value="Yemen">Yemen</option>*/
/* 						<option value="Zambia">Zambia</option>*/
/* 						<option value="Zimbabwe">Zimbabwe</option>*/
/* 					</select>*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="row myself">*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="PassportNumber">Passport Number</label>*/
/* 					<input id="PassportNumber" maxlength="85" name="PassportNumber" type="text" class="form-control">*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="PassportCountry">Passport Country of Origin</label>*/
/* 					<input id="PassportCountry" maxlength="85" name="PassportCountry" type="text" class="form-control">*/
/* 				</div>*/
/* 				<div class="form-group col-md-4">*/
/* 					<label for="DateIssued">Date Issued</label>*/
/* 					<input id="DateIssued" maxlength="85" name="DateIssued" type="text" class="form-control">*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 			<div class="Others1">*/
/* 				<h4 class="page-header">Company Info</h4>*/
/* 				<div class="row">*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="Company">Company</label>*/
/* 						<input id="Company" maxlength="85" name="Company" type="text" class="form-control">*/
/* 					</div>*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="BellAccountNumber">Bell Account Number</label>*/
/* 						<input id="BellAccountNumber" maxlength="85" name="BellAccountNumber" type="text" class="form-control">*/
/* 					</div>*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="CompanyFax">Company Fax</label>*/
/* 						<input id="CompanyFax" maxlength="85" name="CompanyFax" type="text" class="form-control">*/
/* 					</div>*/
/* 					<div class="form-group col-md-12">*/
/* 						<label for="CompanyAddress1">Company Address</label>*/
/* 						<input id="CompanyAddress1" maxlength="85" name="CompanyAddress1" type="text" class="form-control">*/
/* 						<br>*/
/* 						<label for="CompanyAddress2">Company Address 2</label>*/
/* 						<input id="CompanyAddress2" maxlength="85" name="CompanyAddress2" type="text" class="form-control">*/
/* 					</div>*/
/* 				</div>*/
/* 				<div class="row">*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="CompanyCity">Company City</label>*/
/* 						<input id="CompanyCity" maxlength="85" name="CompanyCity" type="text" class="form-control">*/
/* 					</div>*/
/* 					<div class="form-group col-md-2">*/
/* 						<label for="CompanyState">Company State</label>*/
/* 						<input id="CompanyState" maxlength="85" name="CompanyState" type="text" class="form-control">*/
/* 					</div>*/
/* 					<div class="form-group col-md-2">*/
/* 						<label for="CompanyZipCode">Company Zip</label>*/
/* 						<input id="CompanyZipCode" maxlength="85" name="CompanyZipCode" type="text" class="form-control">*/
/* 					</div>*/
/* 					<div class="form-group col-md-4">*/
/* 						<label for="CompanyCountry">Company Country</label>*/
/* 						<select id="CompanyCountry" name="CompanyCountry" class="form-control">*/
/* 							<option value="">-- Select Country --</option>*/
/* 							<option value="USA">USA</option>*/
/* 							<option value="Afghanistan">Afghanistan</option>*/
/* 							<option value="Albania">Albania</option>*/
/* 							<option value="Algeria">Algeria</option>*/
/* 							<option value="American Samoa">American Samoa</option>*/
/* 							<option value="Andorra">Andorra</option>*/
/* 							<option value="Angola">Angola</option>*/
/* 							<option value="Anguilla">Anguilla</option>*/
/* 							<option value="Antigua and Barbuda">Antigua and Barbuda</option>*/
/* 							<option value="Argentina">Argentina</option>*/
/* 							<option value="Armenia">Armenia</option>*/
/* 							<option value="Aruba">Aruba</option>*/
/* 							<option value="Ascension">Ascension</option>*/
/* 							<option value="Australia">Australia</option>*/
/* 							<option value="Austria">Austria</option>*/
/* 							<option value="Azerbaijan">Azerbaijan</option>*/
/* 							<option value="Bahamas">Bahamas</option>*/
/* 							<option value="Bahrain">Bahrain</option>*/
/* 							<option value="Bangladesh">Bangladesh</option>*/
/* 							<option value="Barbados">Barbados</option>*/
/* 							<option value="Belarus">Belarus</option>*/
/* 							<option value="Belgium">Belgium</option>*/
/* 							<option value="Belize">Belize</option>*/
/* 							<option value="Benin">Benin</option>*/
/* 							<option value="Bermuda">Bermuda</option>*/
/* 							<option value="Bhutan">Bhutan</option>*/
/* 							<option value="Bolivia">Bolivia</option>*/
/* 							<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>*/
/* 							<option value="Botswana">Botswana</option>*/
/* 							<option value="Brazil">Brazil</option>*/
/* 							<option value="British Virgin Islands">British Virgin Islands</option>*/
/* 							<option value="Brunei Darussalam">Brunei Darussalam</option>*/
/* 							<option value="Bulgaria">Bulgaria</option>*/
/* 							<option value="Burkina Faso">Burkina Faso</option>*/
/* 							<option value="Burundi ">Burundi </option>*/
/* 							<option value="Cambodia">Cambodia</option>*/
/* 							<option value="Cameroon">Cameroon</option>*/
/* 							<option value="Canada">Canada</option>*/
/* 							<option value="Cape Verde">Cape Verde</option>*/
/* 							<option value="Cayman Islands">Cayman Islands</option>*/
/* 							<option value="Central African Republic">Central African Republic</option>*/
/* 							<option value="Chad">Chad</option>*/
/* 							<option value="Chile">Chile</option>*/
/* 							<option value="China">China</option>*/
/* 							<option value="Christmas Island">Christmas Island</option>*/
/* 							<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>*/
/* 							<option value="Colombia">Colombia</option>*/
/* 							<option value="Comoros">Comoros</option>*/
/* 							<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>*/
/* 							<option value="Congo, Republic of the">Congo, Republic of the</option>*/
/* 							<option value="Cook Islands">Cook Islands</option>*/
/* 							<option value="Costa Rica">Costa Rica</option>*/
/* 							<option value="Croatia">Croatia</option>*/
/* 							<option value="Cuba">Cuba</option>*/
/* 							<option value="Cyprus">Cyprus</option>*/
/* 							<option value="Czech Republic">Czech Republic</option>*/
/* 							<option value="Côte D'ivoire (Ivory Coast)">Côte D'ivoire (Ivory Coast)</option>*/
/* 							<option value="Denmark">Denmark</option>*/
/* 							<option value="Djibouti">Djibouti</option>*/
/* 							<option value="Dominica">Dominica</option>*/
/* 							<option value="Dominican Republic">Dominican Republic</option>*/
/* 							<option value="Ecuador">Ecuador</option>*/
/* 							<option value="Egypt">Egypt</option>*/
/* 							<option value="El Salvador">El Salvador</option>*/
/* 							<option value="Equatorial Guinea">Equatorial Guinea</option>*/
/* 							<option value="Eritrea">Eritrea</option>*/
/* 							<option value="Estonia">Estonia</option>*/
/* 							<option value="Ethiopia">Ethiopia</option>*/
/* 							<option value="Falkland Islands">Falkland Islands</option>*/
/* 							<option value="Faroe Islands">Faroe Islands</option>*/
/* 							<option value="Fiji">Fiji</option>*/
/* 							<option value="Finland">Finland</option>*/
/* 							<option value="France">France</option>*/
/* 							<option value="French Guyana">French Guyana</option>*/
/* 							<option value="French Polynesia">French Polynesia</option>*/
/* 							<option value="Gabon">Gabon</option>*/
/* 							<option value="Gambia">Gambia</option>*/
/* 							<option value="Georgia">Georgia</option>*/
/* 							<option value="Germany">Germany</option>*/
/* 							<option value="Ghana">Ghana</option>*/
/* 							<option value="Gibraltar">Gibraltar</option>*/
/* 							<option value="Greece">Greece</option>*/
/* 							<option value="Greenland">Greenland</option>*/
/* 							<option value="Grenada">Grenada</option>*/
/* 							<option value="Guadeloupe">Guadeloupe</option>*/
/* 							<option value="Guam">Guam</option>*/
/* 							<option value="Guatemala">Guatemala</option>*/
/* 							<option value="Guinea">Guinea</option>*/
/* 							<option value="Guinea-Bissau">Guinea-Bissau</option>*/
/* 							<option value="Guyana">Guyana</option>*/
/* 							<option value="Haiti">Haiti</option>*/
/* 							<option value="Honduras">Honduras</option>*/
/* 							<option value="Hong Kong">Hong Kong</option>*/
/* 							<option value="Hungary">Hungary</option>*/
/* 							<option value="Iceland">Iceland</option>*/
/* 							<option value="India">India</option>*/
/* 							<option value="Indonesia">Indonesia</option>*/
/* 							<option value="Iran">Iran</option>*/
/* 							<option value="Iraq">Iraq</option>*/
/* 							<option value="Ireland">Ireland</option>*/
/* 							<option value="Israel">Israel</option>*/
/* 							<option value="Italy">Italy</option>*/
/* 							<option value="Jamaica">Jamaica</option>*/
/* 							<option value="Japan">Japan</option>*/
/* 							<option value="Jordan">Jordan</option>*/
/* 							<option value="Kazakhstan">Kazakhstan</option>*/
/* 							<option value="Kenya">Kenya</option>*/
/* 							<option value="Kiribati">Kiribati</option>*/
/* 							<option value="Korea, Democratic People's Republic of (North Korea)">Korea, Democratic People's Republic of (North Korea)</option>*/
/* 							<option value="Korea, Republic of (South Korea)">Korea, Republic of (South Korea)</option>*/
/* 							<option value="Kuwait">Kuwait</option>*/
/* 							<option value="Kyrgyzstan">Kyrgyzstan</option>*/
/* 							<option value="Laos">Laos</option>*/
/* 							<option value="Latvia">Latvia</option>*/
/* 							<option value="Lebanon">Lebanon</option>*/
/* 							<option value="Lesotho">Lesotho</option>*/
/* 							<option value="Liberia">Liberia</option>*/
/* 							<option value="Libya">Libya</option>*/
/* 							<option value="Liechtenstein">Liechtenstein</option>*/
/* 							<option value="Lithuania">Lithuania</option>*/
/* 							<option value="Luxembourg">Luxembourg</option>*/
/* 							<option value="Macau">Macau</option>*/
/* 							<option value="Macedonia">Macedonia</option>*/
/* 							<option value="Madagascar">Madagascar</option>*/
/* 							<option value="Malawi">Malawi</option>*/
/* 							<option value="Malaysia">Malaysia</option>*/
/* 							<option value="Maldives">Maldives</option>*/
/* 							<option value="Mali">Mali</option>*/
/* 							<option value="Malta">Malta</option>*/
/* 							<option value="Marshall Islands">Marshall Islands</option>*/
/* 							<option value="Martinique">Martinique</option>*/
/* 							<option value="Mauritania">Mauritania</option>*/
/* 							<option value="Mauritius">Mauritius</option>*/
/* 							<option value="Mayotte">Mayotte</option>*/
/* 							<option value="Mexico">Mexico</option>*/
/* 							<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>*/
/* 							<option value="Moldova">Moldova</option>*/
/* 							<option value="Monaco">Monaco</option>*/
/* 							<option value="Mongolia">Mongolia</option>*/
/* 							<option value="Montenegro">Montenegro</option>*/
/* 							<option value="Montserrat">Montserrat</option>*/
/* 							<option value="Morocco">Morocco</option>*/
/* 							<option value="Mozambique">Mozambique</option>*/
/* 							<option value="Myanmar">Myanmar</option>*/
/* 							<option value="Namibia">Namibia</option>*/
/* 							<option value="Nauru">Nauru</option>*/
/* 							<option value="Nepal">Nepal</option>*/
/* 							<option value="Netherlands">Netherlands</option>*/
/* 							<option value="Netherlands Antilles">Netherlands Antilles</option>*/
/* 							<option value="New Caledonia">New Caledonia</option>*/
/* 							<option value="New Zealand">New Zealand</option>*/
/* 							<option value="Nicaragua">Nicaragua</option>*/
/* 							<option value="Niger">Niger</option>*/
/* 							<option value="Nigeria">Nigeria</option>*/
/* 							<option value="Niue">Niue</option>*/
/* 							<option value="Norfolk Island">Norfolk Island</option>*/
/* 							<option value="Northern Mariana Islands">Northern Mariana Islands</option>*/
/* 							<option value="Norway">Norway</option>*/
/* 							<option value="Oman">Oman</option>*/
/* 							<option value="Pakistan">Pakistan</option>*/
/* 							<option value="Palau">Palau</option>*/
/* 							<option value="Panama">Panama</option>*/
/* 							<option value="Papua New Guinea">Papua New Guinea</option>*/
/* 							<option value="Paraguay">Paraguay</option>*/
/* 							<option value="Peru">Peru</option>*/
/* 							<option value="Philippines">Philippines</option>*/
/* 							<option value="Pitcairn Island">Pitcairn Island</option>*/
/* 							<option value="Poland">Poland</option>*/
/* 							<option value="Portugal">Portugal</option>*/
/* 							<option value="Puerto Rico">Puerto Rico</option>*/
/* 							<option value="Qatar">Qatar</option>*/
/* 							<option value="Reunion">Reunion</option>*/
/* 							<option value="Romania">Romania</option>*/
/* 							<option value="Russia">Russia</option>*/
/* 							<option value="Rwanda">Rwanda</option>*/
/* 							<option value="Saint Helena">Saint Helena</option>*/
/* 							<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>*/
/* 							<option value="Saint Lucia">Saint Lucia</option>*/
/* 							<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>*/
/* 							<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>*/
/* 							<option value="Samoa">Samoa</option>*/
/* 							<option value="San Marino ">San Marino </option>*/
/* 							<option value="Sao Tome and Principe">Sao Tome and Principe</option>*/
/* 							<option value="Saudi Arabia">Saudi Arabia</option>*/
/* 							<option value="Senegal">Senegal</option>*/
/* 							<option value="Serbia">Serbia</option>*/
/* 							<option value="Seychelles">Seychelles</option>*/
/* 							<option value="Sierra Leone ">Sierra Leone </option>*/
/* 							<option value="Singapore">Singapore</option>*/
/* 							<option value="Slovakia">Slovakia</option>*/
/* 							<option value="Slovenia">Slovenia</option>*/
/* 							<option value="Solomon Islands">Solomon Islands</option>*/
/* 							<option value="Somalia">Somalia</option>*/
/* 							<option value="South Africa">South Africa</option>*/
/* 							<option value="South Georgia &amp; South Sandwich Islands">South Georgia &amp; South Sandwich Islands</option>*/
/* 							<option value="South Sudan">South Sudan</option>*/
/* 							<option value="Spain">Spain</option>*/
/* 							<option value="Sri Lanka">Sri Lanka</option>*/
/* 							<option value="Sudan">Sudan</option>*/
/* 							<option value="Suriname">Suriname</option>*/
/* 							<option value="Swaziland">Swaziland</option>*/
/* 							<option value="Sweden">Sweden</option>*/
/* 							<option value="Switzerland">Switzerland</option>*/
/* 							<option value="Syria">Syria</option>*/
/* 							<option value="Taiwan">Taiwan</option>*/
/* 							<option value="Tajikistan">Tajikistan</option>*/
/* 							<option value="Tanzania">Tanzania</option>*/
/* 							<option value="Thailand">Thailand</option>*/
/* 							<option value="Timor-Leste">Timor-Leste</option>*/
/* 							<option value="Togo">Togo</option>*/
/* 							<option value="Tokelau">Tokelau</option>*/
/* 							<option value="Tonga">Tonga</option>*/
/* 							<option value="Trinidad and Tobago">Trinidad and Tobago</option>*/
/* 							<option value="Tristan da Cunha">Tristan da Cunha</option>*/
/* 							<option value="Tunisia">Tunisia</option>*/
/* 							<option value="Turkey">Turkey</option>*/
/* 							<option value="Turkmenistan">Turkmenistan</option>*/
/* 							<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>*/
/* 							<option value="Tuvalu">Tuvalu</option>*/
/* 							<option value="Uganda">Uganda</option>*/
/* 							<option value="Ukraine">Ukraine</option>*/
/* 							<option value="United Arab Emirates">United Arab Emirates</option>*/
/* 							<option value="United Kingdom">United Kingdom</option>*/
/* 							<option value="Uruguay">Uruguay</option>*/
/* 							<option value="Uzbekistan">Uzbekistan</option>*/
/* 							<option value="Vanuatu">Vanuatu</option>*/
/* 							<option value="Vatican City (Holy See)">Vatican City (Holy See)</option>*/
/* 							<option value="Venezuela">Venezuela</option>*/
/* 							<option value="Vietnam">Vietnam</option>*/
/* 							<option value="Virgin Islands (US)">Virgin Islands (US)</option>*/
/* 							<option value="Wallis and Futuna">Wallis and Futuna</option>*/
/* 							<option value="Western Sahara">Western Sahara</option>*/
/* 							<option value="Yemen">Yemen</option>*/
/* 							<option value="Zambia">Zambia</option>*/
/* 							<option value="Zimbabwe">Zimbabwe</option>*/
/* 							</select>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* */
/* 		*/
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
/* 				unsetRequired(); // unset required inputs*/
/* 				$.each(divs,function(index, value){*/
/* 					debug('value: ' + value);*/
/* 					$('.' + value).show();*/
/* 					$('.' + value + ' input').attr('required', true); // set requried inputs*/
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
/* 						setRequired();*/
/* 					}*/
/* 				});*/
/* 			}*/
/* */
/* 			function getBaseUrl() {*/
/* 				var baseUrl = 'http://ui.bell.com/';*/
/* 				return baseUrl;*/
/* 			}*/
/* 			function unsetRequired() {*/
/* 				$.each($('.form-area input'), function(index, value){*/
/* 					value.removeAttribute('required')*/
/* 					console.log('Value: ' + value.getAttribute('required'));*/
/* 				});*/
/* 			}*/
/* 			function setRequired() {*/
/* 				$.each($('.form-area input'), function(index, value){*/
/* 					value.setAttribute('required', 1)*/
/* 					console.log('Value: ' + value.getAttribute('required'));*/
/* 				});*/
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
/* 			/* ADD DATE PICKER *//* */
/* 			$( "#DateIssued" ).datepicker();*/
/* */
/* 			/* REQUIRE ALL INPUTS *//* */
/* */
/* 				*/
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
