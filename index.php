<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="stylesheet" href="css/lib/normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.css" />
    <link rel="stylesheet" href="css/home.css" />
    <script src="js/lottie.min.js"></script>
    <title>Xordium: Research & Creative Digital Marketing Company</title>
</head>
<body>
    <?php 
        $home = true;
        include('components/header.php');
    ?>
    <div class="main-banner"></div>
    <div id="fullpage" class="wrapper">
        <div class="section no-bg" data-anchor="Intro">
            <div class="section-1 content text-center">
                <h1 class="text-white">iTechMantra</h1>
                <p class="r-light">Create an <span class="oswald">Illustrious Brand</span> Identity</p>
            </div>
        </div>
        <div class="section bg1" data-anchor="webDesign">
            <div class="section-2 flexbox align-center content">
                <div class="left-col" id="webDesignAnimation">
                    <img src="img/home/web.svg" alt="">
                </div>
                <div class="right-col">
                    <h2 class="oswald">Website Design &amp; Development</h2>
                    <p>Partner with Xordium’s professional designers and dive into a website that shouts originality, creativity and quality. We help you build a dynamic website using the latest technologies available.</p>
                    <div class="action-box">
                        <a href="website-design" class="btn-default">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg2" data-anchor="mobileApp">
            <div class="section-3 flexbox align-center content">
                <div class="left-col">
                    <h2 class="oswald">Mobile App Development</h2>
                    <p>Design and develop stunning mobile apps with Xordium. We provide a full range of mobile application development services for iPhone, iPad and Android. Our experienced personnel are equipped with deep knowledge of frameworks and mobile technologies.</p>
                    <div class="action-box">
                        <a href="/mobile-app-development" class="btn-default">Read More</a>
                    </div>
                </div>
                <div class="right-col" id="mobileAnimation">
                    <img src="img/home/app.svg" alt="Mobile app">
                </div>
            </div>
        </div>
        <div class="section bg3" data-anchor="seo">
            <div class="section-4 flexbox align-center content">
                <div class="left-col" id="seoAnimation">
                    <img src="img/home/seo.svg" alt="seo">
                </div>
                <div class="right-col">
                    <h2 class="oswald">Search Engine Optimization (SEO)</h2>
                    <p>Give your business the boost with Xordium’s SEO services. We will help you maximize traffic, increase leads and sales. Our in-house research and audit team rigorously tests SEO techniques and incorporate the most successful ones into our SEO process. We offer a transparent platform with affordable and effective results.</p>
                    <div class="action-box">
                        <a href="/search-engine-optimization" class="btn-default">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg4" data-anchor="e-commerce">
            <div class="section-5 flexbox align-center content">
                <div class="left-col">
                    <h2 class="oswald">E-Commerce Development</h2>
                    <p>Build-up an E-commerce website with the most advanced features and readymade designs to choose from. Xordium creates a hassle-free sign up for your customers keeping them engaged and giving the time and convenience to explore the website at their own pace.</p>
                    <div class="action-box">
                        <a href="/e-commerce-development" class="btn-default">Read More</a>
                    </div>
                </div>
                <div class="right-col" id="ecommerceAnimation">
                    <img src="img/home/ecom.svg" alt="e-commerce">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/animation.js"></script>
    <?php if(
        strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'ipad') || 
        (!strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') &&
        !strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android'))) { ?>
    <script src="js/lib/fullpage.min.js"></script>
    <ul id="myMenu" class="side-menu">
        <li data-menuanchor="Intro" class="active"><a href="#Intro">First</a></li>
        <li data-menuanchor="webDesign"><a href="#webDesign">Second</a></li>
        <li data-menuanchor="mobileApp"><a href="#mobileApp">Third</a></li>
        <li data-menuanchor="seo"><a href="#seo">Fourth</a></li>
        <li data-menuanchor="e-commerce"><a href="#e-commerce">Fourth</a></li>
        <li data-menuanchor="sem"><a href="#sem">Fourth</a></li>
    </ul>
    <script>
        new fullpage('#fullpage', {
            licenseKey: null,
            autoScrolling:true,
            scrollHorizontally: true,
            anchors: ['Intro', 'webDesign', 'mobileApp', 'seo', 'e-commerce'],
            menu: '#myMenu',
            navigation: true,
            navigationPosition: 'right',
            navigationTooltips: ['Intro', 'WebDesign', 'MobileApp', 'SEO', 'E-Commerce', 'SEM']
        });
    </script>
    <?php } else { ?>
    <script src="/js/script.js"></script>
    <?php } ?>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400|Oswald:400,600" rel="stylesheet">
</body>
</html>