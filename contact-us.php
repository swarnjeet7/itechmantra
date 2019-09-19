<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/lib/normalize.css" />
    <link rel="stylesheet" href="css/style.css?1" />
    <title>Xordium: Research & Creative Digital Marketing Company</title>
</head>
<body>
    <div class="wrapper contact-us">
        <?php include('components/header.php'); ?>

        <main class="main-content">
            <div class="banner-box contact-banner">
                <h1 class="h1">
                    <i class="doted-border"></i>
                    <small><span class="color-blue">Contact</span> Us</small>
                </h1>
                <h3 class="h3"></h3>
            </div>
            <h2 class="h2">GET IN <span>TOUCH</span></h2>
            <div class="text-box text-center ptb0">
                <p><span class="color-blue">Connect with Us!</span> Our dedicated team of specialist will cater to your concerns individually.</p>
            </div>
            <div class="text-box text-center">
                <div class="d-inline-block">
                    <p class="color-blue">Please Fill the form below and we will get in touch with you shortly</p>
                    <div class="mail flexbox align-center justify-center"><img src="img/contact/mail.jpg" alt="mail"></div>
                </div>
            </div>

            <div class="form-wrapper own-container--md flexbox">
                <div class="col-6 form-box">
                    <form id="contact-form" class="contact-form" action="/send_form_email.php">
                        <div class="notice">
                            <p>* indicates required field</p>
                        </div>
                        <div class="input-group">
                            <label for="name">Name:*</label>
                            <div>
                                <input type="text" name="name" id="name" />
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="email">Email:*</label>
                            <div>
                                <input type="email" name="email" id="email" />
                            </div>
                        </div>
                        <div class="input-group">
                            <label for="description">Project Description:*</label>
                            <div>
                                <textarea name="description" id="description" id="" cols="30" rows="8"></textarea>
                            </div>
                        </div>
<!--                        <div class="input-group">-->
<!--                            <div class="mb10"><img src="img/contact/captcha.jpg" alt=""></div>-->
<!--                            <label for="description">CAPTCHA Code:*</label>-->
<!--                            <div>-->
<!--                                <input type="text" class="no-style" >-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="input-group">
                            <button type="submit" class="btn-submit">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-6 address-box">
                    <h3 class="address__title">ADDRESS</h3>
                    <address>
                        <span class="d-block"><strong>Head Office:</strong> </span>
                        <span class="d-block">Okhla A10, New Delhi, Delhi 110020</span>
                    </address>
                    <div class="phone-box">
                        <span>Phone: </span><a href="tel:+919999558808">+ 91-9999558808</a>
                    </div>
                    <div class="write-us">
                        <span>E-mail: </span><a href="mailto:info@xordiumsolutions.in">info@xordiumsolutions.in</a>
                    </div>
                </div>
            </div>

            <div class="text-box text-center pb0">
                <div class="d-inline-block">
                    <p>Get Connected for an integrated solution to all your concerns. We provide an extensive portfolio of IT & Research solutions comprising of web design & development, advertising, e-marketing, content writing, blog writing and many more.</p>
                </div>
            </div>

        </main>

        <?php include('components/footer.php'); ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/script.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400|Oswald:400,600" rel="stylesheet">
</body>
</html>
