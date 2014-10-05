<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
 <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!-- Begin page content -->
    <div id="maincontent" class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="contact_header" class="page-header">
                    <h1 class="animated flipInX">Get in touch</h1>
                </div>
                <!-- /#contact_header -->
                <p class="lead animated fadeIn delayhalfs">I can't wait to hear from you!</p>
            </div>
            <!-- /.col-sm-12 -->
            <div id="form_wrapper" class="col-sm-12">
                <!--start contact form HTML -->
                <form id="contact_form" role="form" method="post" action="mailer.php" class="animated fadeIn delay1s">
                <!-- checks to see if user is a human -->
                    <input id="non_human_catcher" name="is_human" type="email" spellcheck="false" class="hidden">
                <!-- end of human check -->
                    <div id="name_div" class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i>
                        </span>
                        <input onchange="nameValidator(this.value)" id="input_name" name="name" type="text" spellcheck="false" class="form-control" placeholder="Full Name" required pattern=".{4,100}">
                    </div>
                    <!-- /#name_div -->
                    <div id="error_name" class="hidden" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <i class="fa fa-exclamation-triangle"></i>
                        <strong>Yikes!</strong>&nbsp;It looks like you may have forgot to type in your full name.
                    </div>
                    <!-- /#error_name -->
                    <div id="email_div" class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-at fa-fw"></i>
                        </span>
                        <input id="input_email" onchange="emailValidator(this.value)" name="email" type="email" spellcheck="false" class="form-control" required placeholder="you@awesomeperson.com">
                    </div>
                    <!-- /#email_div -->
                    <div id="error_email" class="hidden" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <i class="fa fa-exclamation-triangle"></i>
                        <strong>Oh Snap!</strong>&nbsp;Something doesn't seem on the level with that email address.
                    </div>
                    <!-- /#error_email -->
                    <div id="phone_div" class="input-group ">
                        <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i>
                        </span>
                        <input id="input_phone" onchange="phoneValidator(this.value)" name="phone" type="tel" class="form-control" placeholder="(555) 867-5309" pattern="^(?:(?:\+?1\s*(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$">
                    </div>
                    <div id="error_phone" class="hidden" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <i class="fa fa-exclamation-triangle"></i>
                        <strong>Darn!</strong>&nbsp;That phone number doesn't look quite right, could you double check it?
                    </div>
                    <!-- /#phone_div -->
                    <textarea id="input_comments" name="comments" spellcheck="true" required maxlength="5000" rows="6" class="form-control " placeholder="Your comments here..."></textarea>
                    <!-- /#input_comments -->
                    <div id="error_comments" class="alert alert-info hidden" role="alert">
                        <i class="fa fa-exclamation-triangle"></i>
                        <strong>Oops!</strong>&nbsp;You forgot to type a message for me.
                    </div>
                    <!-- /#error_comments -->
                    <button id="submit_btn" name="submit" type="submit" value='submit' class="btn btn-primary btn-lg btn-block ">
                        <i class="fa fa-paper-plane fa-fw"></i>&nbsp;Send!
                    </button>
                    <!-- /#submit_btn -->
                </form>
                <!-- /#contact_form -->
            </div>
            <!-- /#form_wrapper -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#maincontent -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
<script src="/js/bootstrap.min.js" type="text/javascript"></script>
<script src="validate_form.js" type="text/javascript"></script>

</body>

</html>
