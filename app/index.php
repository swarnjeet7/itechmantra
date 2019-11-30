
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo IMG; ?>/favicon.png" sizes="16x16" type="image/png">
    <title>iTechMantra ---- Make programing simple as that easy to understand</title>
    <link href="https://fonts.googleapis.com/css?family=Gupter:500,700|Open+Sans" rel="stylesheet">
    <style>
        <?php
            echo file_get_contents(CSS.'/bootstrap.min.css');
            echo file_get_contents(CSS.'/custom.css');
        ?>
    </style>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-3">
            <a href="/">
                <img src="<?php echo IMG; ?>/logo.jpg" alt="itechmantra: where you can learn programing in simple language">
            </a>

            <button type="button" class="btn btn-primary">Subscribe</button>
        </header>

        <main>
            <div class="text-center p-5">
                <h1>Get updates about what <br />you like most</h1>
            </div>
            <div>
                <ul class="list-unstyled text-center topic-list">
                    <li>
                        <a href="/programming">
                            <span class="icon">#</span>Programming
                        </a>
                    </li>
                </ul>
            </div>
        </main>

    </div>


</body>
</html>
