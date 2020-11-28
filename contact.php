<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Life Style Store</title>
        
        <link href="css/bootstrap.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        
        <script src="js/jquery.js"></script>
        
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
    
    <?php
        include 'includes/header.php';
        ?>
        <div class="container">
<h1>LIVE SUPPORT</h1>
<div class="col-xs-10">
<h4>24 hours | 7 days a week | 365 days a year LIVE Technical Support</h4>
<p>We would love to hear from you! Reach out to us through any of the modes below, and we shall respond at the earliest.<br>

</p>
</div>
<div class="col-xs-2">
<img src="new_img/contact.png" alt="">
</div>

<div class="container">
<div class="col-xs-5 ">
<div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>CONTACT US</h4>
                            </div>
                            <div class="panel-body">
                                
                                <form action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="name" class="form-control"  placeholder="NAME" name="name" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="EMAIL" name="email" required = "true">
                                    </div>
                                    <div class="form-group">
                                    Message:<br>
                                        <textarea></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button><br><br>
                                    
                                </form><br/>
                            </div>
                            
                        </div>
</div>
<div class="col-xs-5 col-xs-offset-2 ">
<h2>Company Information:</h2>

<p>
500 Lorem Ipsum Dobor Str.<br>
22-58-2-9 Str Armet Lorem<br>
USA<br>
Phone: (00)222 666 444<br>
Fax:(000) 000 000 00 00<br>
Email: info@mysompany.com<br>
Follow on: Facebook, Twitter
</p>
</div>

        </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
        </body>
        </html>