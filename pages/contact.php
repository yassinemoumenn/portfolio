<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

      

    <div class="container">

      
                    <h2 class="intro-text text-center">Contact
                    </h2>
                    <hr>
                    <div id="add_err2"></div>
                    <h4 class="sent-notification"></h4>

                    <form role="form" id="myForm">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" id="name" name="fname" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" id="email" name="email" maxlength="25" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Subject</label>
                                <input type="text" id="subject" name="subject" maxlength="25" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Message</label>
                                <textarea class="form-control" id="body" name="message" maxlength="100" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <button type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<script type="text/javascript">
  function sendEmail(){
    var name = $("#name");
    var email = $("#email");
    var subject = $("#subject");
    var body = $("#body");

    if(isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)){
      $.ajax({
        url: 'sendEmail.php',
        method: 'POST',
        dataType: 'json',
        data:{
          name: name.val(),
          email: email.val(),
          subject: subject.val(),
          body: body.val()
        }, success: function(response){
          $('#myForm')[0].reset();
          $('.sent-notification').text("Message sent successfully.");
        }
      });
    }
  }
  function isNotEmpty(caller){
    if(caller.val() == ""){
      caller.css('border','1px solid red');
      return false;
    }
    else
    {
      caller.css('border', '');
      return true;
    }
  }
</script>


</body>

</html>