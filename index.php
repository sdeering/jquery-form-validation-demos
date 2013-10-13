<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta name="keywords" content="basic jquery validation form demo" />

<script type="text/javascript" src="../js/jquery-1.6.4.js"></script>
<script type="text/javascript" src="../script.js"></script>
<script type="text/javascript" src="jquery.validate.min.js"></script>


<!-- BuySellAds Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- End BuySellAds Ad Code -->


<title>Basic jQuery Validation Form Demo | jQuery4u</title>

<link rel="stylesheet" type="text/css" href="../styles.css">
<style lang="text/css">
 /* example styles for validation form demo */
#register-form {
    background: url("form-fieldset.gif") repeat-x scroll left bottom #F8FDEF;
    border: 1px solid #DFDCDC;
    /*border-radius: 15px 15px 15px 15px;*/
    display: inline-block;
    margin-bottom: 30px;
    margin-left: 20px;
    margin-top: 10px;
    padding: 25px 50px 10px;
    width: 350px;
}

#register-form .fieldgroup {
    background: url("form-divider.gif") repeat-x scroll left top transparent;
    display: inline-block;
    padding: 8px 10px;
    width: 340px;
}

#register-form .fieldgroup label {
    float: left;
    padding: 15px 0 0;
    text-align: right;
    width: 110px;
}

#register-form .fieldgroup input, #register-form .fieldgroup textarea, #register-form .fieldgroup select {
    float: right;
    margin: 10px 0;
    height: 35px;
    width: 200px;
}

#register-form .submit {
    color: gray;
    padding: 10px;
    width: 220px;
    height: 40px !important;
}

#register-form .submit:hover {
    color: #FFF;
}

#register-form .fieldgroup label.error {
    color: #FB3A3A;
    display: inline-block;
    margin: 4px 0 5px 125px;
    padding: 0;
    text-align: left;
    width: 220px;
}

h2 {
    padding-bottom: 15px;
}
</style>

<script type="text/javascript">
/**
  * Basic jQuery Validation Form Demo Code
  * Copyright Sam Deering 2012
  * Licence: http://www.jquery4u.com/license/
  */
(function($,W,D)
{
    var JQUERY4U = {};

    JQUERY4U.UTIL =
    {
        setupFormValidation: function()
        {
            //form validation rules
            $("#register-form").validate({
                rules: {
                    firstname: "required",
                    lastname: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 5
                    },
                    agree: "required"
                },
                messages: {
                    firstname: "Please enter your firstname",
                    lastname: "Please enter your lastname",
                    password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long"
                    },
                    email: "Please enter a valid email address",
                    agree: "Please accept our policy"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        }
    }

    //when the dom has loaded setup form validation rules
    $(D).ready(function($) {
        JQUERY4U.UTIL.setupFormValidation();
    });

})(jQuery, window, document);
</script>

</head>
<body>
<div id="page-wrap">

	<?php include("../header.php"); ?>


<div id="content">

<h1>Basic jQuery Validation Form Demo</h1>

<p class="padleft">This demo shows you how easy validation your forms can be using a little jQuery. It uses the jQuery validation plugin and some basic input validation rules. See the tutorial for details on how to setup your own validation in just a few minutes.</p>

<!-- HTML form for validation demo -->
<form action="" method="post" id="register-form" novalidate="novalidate">

    <h2>User Registration</h2>

    <div id="form-content">
        <fieldset>

            <div class="fieldgroup">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname">
            </div>

            <div class="fieldgroup">
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname">
            </div>

            <div class="fieldgroup">
                <label for="email">Email</label>
                <input type="text" name="email">
            </div>

            <div class="fieldgroup">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>

            <div class="fieldgroup">
                <p class="right">By clicking register you agree to our policy.</p>
                <input type="submit" value="Register" class="submit">
            </div>

        </fieldset>
    </div>

        <div class="fieldgroup">
            <p>Already registered? Sign in.</p>
        </div>
</form>
<!-- END HTML form for validation -->

<p>
<a class="seelivedemo" href="http://www.jquery4u.com/forms/basic-jquery-form-validation-tutorial/">Tutorial</a>
<a class="seelivedemo" href="http://www.jquery4u.com/demos/basic-jquery-validation-form/basic-jquery-validation-form-demo.zip">Download</a>
</p>

</div>

	<!-- footer (includes analytics) -->
	<?php include("../footer.php"); ?>

</div> <!-- end page wrap -->

</body>
</html>