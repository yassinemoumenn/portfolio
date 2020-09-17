<!doctype html>
<html lang="en">

    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>Bootstrap Footer Template</title>

       

        <!-- Favicon and touch icons -->
  <!--  -->

    </head>
    <style>
        
         #popup-box {
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: var(--aqua);
    color: #FFFFFF;
    width: 90%;
    max-width: 600px;
    padding: 30px;
    border: 2px solid var(--yellow);
    display: none;
    z-index: 1;
}

#popup-close {
    position: absolute;
    top: -25px;
    right: -25px;
    cursor: pointer;
    width: 40px;
}

#popup-box h1 {
    margin: 0;
}

#popup-box form {
    margin-bottom: 0px;
}

#popup-box input {
    padding: 10px;
    border: 1px solid #333;
    width: 40%;
}

#popup-box button {
    padding: 10px;
    border: 1px solid #333;
}
    </style>

    <body>

        <!-- Footer -->
 <div id="list-builder"></div>
    <div id="popup-box">
        <img src="img/close.png" id="popup-close" />
        <div id="popup-box-content">
            <h2>Subscribe to Zarrraq Portfolio Newsletter</h2>
            <form id="popup-form" action="">
                <input type="hidden" name="list" value="key_list_etc" />
                <input type="text" name="name" placeholder="Full Name" />
                <input type="text" name="email" placeholder="Email Address" />
                <button type="button" name="subscribe">Subscribe</button>
            </form>
        </div>
    </div>


        <!-- Javascript -->
     
    </body>

</html>
<script>
    
    $(document).ready(function() {

    var delay = 2500; // milliseconds
    var cookie_expire = 0; // days

    var cookie = localStorage.getItem("list-builder");
    if (cookie == undefined || cookie == null) {
        cookie = 0;
    }

    if (((new Date()).getTime() - cookie) / (1000 * 60 * 60 * 24) > cookie_expire) {
        $("#list-builder").delay(delay).fadeIn("fast", () => {
            $("#popup-box").fadeIn("fast", () => {});
        });

        $("button[name=subscribe]").click(() => {
            $.ajax({
                type: "POST",
                url: $("#popup-form").attr("action"),
                data: $("#popup-form").serialize(),
                success: (data) => {
                    $("#popup-box-content").html("<p style='text-align: center'>Thank you for subscribing to The Polyglot Developer newsletter!</p>");
                }
            });
        });

        $("#popup-close").click(() => {
            $("#list-builder, #popup-box").hide();
            localStorage.setItem("list-builder", (new Date()).getTime());
        });
    }


});
</script>