<?php include"./admin/datebase.php"?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
      
        <div id="list-builder"></div>
        <div class="j" id="popup-box">
            <img src="./img/closee.png" id="popup-close" />
            <div id="popup-box-content">
                <h3>Subscribe to The Polyglot Developer Newsletter</h3>
                <form id="popup-form" action="">
                    <input type="hidden" name="list" value="key_list_etc" />
                    <input type="text" name="name" placeholder="Full Name" />
                    <input type="text" name="email" placeholder="Email Address" />
                    <button type="button" name="subscribe">Subscribe</button>
                </form>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="list-builder.js"></script>
    </body>
</html>