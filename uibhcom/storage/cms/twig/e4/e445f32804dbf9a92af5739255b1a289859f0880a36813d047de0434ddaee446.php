<?php

/* /var/www/uibhcom/themes/demo/pages/facebook.htm */
class __TwigTemplate_53eb52adaee410d21ea27140dd23ac4c03cd6b23d9aa256e8638238ef034eac6 extends Twig_Template
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
        echo "<section class=\"container\">
<style type=\"text/css\">
\t.form-control {
\t\tfont-size:4em;
\t\theight: inherit;
\t}
\t.form-control:focus, .form-control {
\t\toutline: none;
\t\tbox-shadow: none;
\t\tborder:none;
    background: transparent;
\t\tborder-bottom: #e3e3e3 solid 2px;
\t\tborder-radius: 0;
\t}
\t.form-control:focus {
\t\tbackground:#f9f9f9;
\t}
</style>

<h1>Facebook API</h1>
<h2>Upload Photo via URL</h2>
<script>
     
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
      appId      : '517675315091419',
      xfbml      : true,
      cookie      : true,
      version    : 'v2.7'
    });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"//connect.facebook.net/en_US/sdk.js\";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      console.log(response);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
        showPostForm(response.id);
    });
  }



  function showPostForm(userId) {
  \t\$('#status').html('<form class=\"postForm\" data-user-id=\"'+ userId +'\"><label>Enter URL: </label><input type=\"url\" name=\"imgUrl\" class=\"form-control\" placeholder=\"Paste image url..\"></form>');
\t  \$('.postForm').submit(function(e){
\t  \t\te.preventDefault();
\t  \t\talert('sumbit the form');
\t        imgUrl = \$(this).find(\"input[name*='imgUrl']\").val();
\t        responseId = \$(this).attr('data-user-id');
\t\t\tupload_photo(responseId, imgUrl);
\t  });
  }

  // function get_photos(response) {
  //   FB.api(
  //       \"/\" + response.id + \"/photos\",
  //       function (response) {
  //         if (response && !response.error) {
  //           alert('success! returning all photos!');
  //         } else {
  //           alert('did not load the users photos!');
  //         }
  //         console.log(response);
  //       }
  //   );
  // }

  // function update_status() {
  //   var message_str= 'I just took a selfie!';
  //   FB.api('/me/photos', 'POST', { message: message_str, url:imgFile}, function(response) {
  //     if (!response || response.error) {
  //       alert('Couldn\\'t Publish Data');
  //     } else {
  //       alert(\"Message successfully posted to your wall\");
  //     }
  //   });
  // }

  function upload_photo(id, imgUrl) {
    /* make the API call */
    FB.api(
        \"/\" + id + \"/photos\",
        \"POST\",
        {
            \"url\": imgUrl
            // \"url\": \"https://www.petfinder.com/wp-content/uploads/2012/11/101438745-cat-conjunctivitis-causes.jpg\"
        },
        function (response) {
          if (response && !response.error) {
            alert('successfully posted!');
          } else {
            alert('could not post');
          }
          console.log(response);
        }
    );
  }
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->

<fb:login-button scope=\"public_profile,email,publish_actions\" onlogin=\"checkLoginState();\">
</fb:login-button>

<div id=\"status\">
</div>


</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/uibhcom/themes/demo/pages/facebook.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <section class="container">*/
/* <style type="text/css">*/
/* 	.form-control {*/
/* 		font-size:4em;*/
/* 		height: inherit;*/
/* 	}*/
/* 	.form-control:focus, .form-control {*/
/* 		outline: none;*/
/* 		box-shadow: none;*/
/* 		border:none;*/
/*     background: transparent;*/
/* 		border-bottom: #e3e3e3 solid 2px;*/
/* 		border-radius: 0;*/
/* 	}*/
/* 	.form-control:focus {*/
/* 		background:#f9f9f9;*/
/* 	}*/
/* </style>*/
/* */
/* <h1>Facebook API</h1>*/
/* <h2>Upload Photo via URL</h2>*/
/* <script>*/
/*      */
/*   // This is called with the results from from FB.getLoginStatus().*/
/*   function statusChangeCallback(response) {*/
/*     console.log('statusChangeCallback');*/
/*     console.log(response);*/
/*     // The response object is returned with a status field that lets the*/
/*     // app know the current login status of the person.*/
/*     // Full docs on the response object can be found in the documentation*/
/*     // for FB.getLoginStatus().*/
/*     if (response.status === 'connected') {*/
/*       // Logged into your app and Facebook.*/
/*       testAPI();*/
/*     } else if (response.status === 'not_authorized') {*/
/*       // The person is logged into Facebook, but not your app.*/
/*       document.getElementById('status').innerHTML = 'Please log ' +*/
/*         'into this app.';*/
/*     } else {*/
/*       // The person is not logged into Facebook, so we're not sure if*/
/*       // they are logged into this app or not.*/
/*       document.getElementById('status').innerHTML = 'Please log ' +*/
/*         'into Facebook.';*/
/*     }*/
/*   }*/
/* */
/*   // This function is called when someone finishes with the Login*/
/*   // Button.  See the onlogin handler attached to it in the sample*/
/*   // code below.*/
/*   function checkLoginState() {*/
/*     FB.getLoginStatus(function(response) {*/
/*       statusChangeCallback(response);*/
/*     });*/
/*   }*/
/* */
/*   window.fbAsyncInit = function() {*/
/*   FB.init({*/
/*       appId      : '517675315091419',*/
/*       xfbml      : true,*/
/*       cookie      : true,*/
/*       version    : 'v2.7'*/
/*     });*/
/* */
/*   // Now that we've initialized the JavaScript SDK, we call */
/*   // FB.getLoginStatus().  This function gets the state of the*/
/*   // person visiting this page and can return one of three states to*/
/*   // the callback you provide.  They can be:*/
/*   //*/
/*   // 1. Logged into your app ('connected')*/
/*   // 2. Logged into Facebook, but not your app ('not_authorized')*/
/*   // 3. Not logged into Facebook and can't tell if they are logged into*/
/*   //    your app or not.*/
/*   //*/
/*   // These three cases are handled in the callback function.*/
/* */
/*   FB.getLoginStatus(function(response) {*/
/*     statusChangeCallback(response);*/
/*   });*/
/* */
/*   };*/
/* */
/*   // Load the SDK asynchronously*/
/*   (function(d, s, id) {*/
/*     var js, fjs = d.getElementsByTagName(s)[0];*/
/*     if (d.getElementById(id)) return;*/
/*     js = d.createElement(s); js.id = id;*/
/*     js.src = "//connect.facebook.net/en_US/sdk.js";*/
/*     fjs.parentNode.insertBefore(js, fjs);*/
/*   }(document, 'script', 'facebook-jssdk'));*/
/* */
/*   // Here we run a very simple test of the Graph API after login is*/
/*   // successful.  See statusChangeCallback() for when this call is made.*/
/*   function testAPI() {*/
/*     console.log('Welcome!  Fetching your information.... ');*/
/*     FB.api('/me', function(response) {*/
/*       console.log('Successful login for: ' + response.name);*/
/*       console.log(response);*/
/*       document.getElementById('status').innerHTML =*/
/*         'Thanks for logging in, ' + response.name + '!';*/
/*         showPostForm(response.id);*/
/*     });*/
/*   }*/
/* */
/* */
/* */
/*   function showPostForm(userId) {*/
/*   	$('#status').html('<form class="postForm" data-user-id="'+ userId +'"><label>Enter URL: </label><input type="url" name="imgUrl" class="form-control" placeholder="Paste image url.."></form>');*/
/* 	  $('.postForm').submit(function(e){*/
/* 	  		e.preventDefault();*/
/* 	  		alert('sumbit the form');*/
/* 	        imgUrl = $(this).find("input[name*='imgUrl']").val();*/
/* 	        responseId = $(this).attr('data-user-id');*/
/* 			upload_photo(responseId, imgUrl);*/
/* 	  });*/
/*   }*/
/* */
/*   // function get_photos(response) {*/
/*   //   FB.api(*/
/*   //       "/" + response.id + "/photos",*/
/*   //       function (response) {*/
/*   //         if (response && !response.error) {*/
/*   //           alert('success! returning all photos!');*/
/*   //         } else {*/
/*   //           alert('did not load the users photos!');*/
/*   //         }*/
/*   //         console.log(response);*/
/*   //       }*/
/*   //   );*/
/*   // }*/
/* */
/*   // function update_status() {*/
/*   //   var message_str= 'I just took a selfie!';*/
/*   //   FB.api('/me/photos', 'POST', { message: message_str, url:imgFile}, function(response) {*/
/*   //     if (!response || response.error) {*/
/*   //       alert('Couldn\'t Publish Data');*/
/*   //     } else {*/
/*   //       alert("Message successfully posted to your wall");*/
/*   //     }*/
/*   //   });*/
/*   // }*/
/* */
/*   function upload_photo(id, imgUrl) {*/
/*     /* make the API call *//* */
/*     FB.api(*/
/*         "/" + id + "/photos",*/
/*         "POST",*/
/*         {*/
/*             "url": imgUrl*/
/*             // "url": "https://www.petfinder.com/wp-content/uploads/2012/11/101438745-cat-conjunctivitis-causes.jpg"*/
/*         },*/
/*         function (response) {*/
/*           if (response && !response.error) {*/
/*             alert('successfully posted!');*/
/*           } else {*/
/*             alert('could not post');*/
/*           }*/
/*           console.log(response);*/
/*         }*/
/*     );*/
/*   }*/
/* </script>*/
/* */
/* <!--*/
/*   Below we include the Login Button social plugin. This button uses*/
/*   the JavaScript SDK to present a graphical Login button that triggers*/
/*   the FB.login() function when clicked.*/
/* -->*/
/* */
/* <fb:login-button scope="public_profile,email,publish_actions" onlogin="checkLoginState();">*/
/* </fb:login-button>*/
/* */
/* <div id="status">*/
/* </div>*/
/* */
/* */
/* </section>*/
