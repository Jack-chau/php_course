<?php
    function printHeader( $title = "IT | IVE(CW)" ){
?>
        <html>

        <head>
        <title><?=$title ?></title>
        </head>

        <body>
        <div id="wrapper">
            <!-- start header -->
            <header>
                <section class="callaction">
                    <div class="container">
                        <div class="row">
                        
                            <div class="col-lg-12">
                                
                                <div class="header_title">
                                    <div class="big-cta">
                                        <div class="cta-text">
                                            <h1>Information Technology</h1>
                                            <h2>IVE (Chai Wan)</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-collapse collapse ">
                            <ul>
                                <li><a href="Welcome.php">Welcome from Head<a></li>
                                <li><a href="Activities.php">Activities<a></li>
                                <li><a href="Links.php">Links<a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </header>
<?php
    }
?>

<?php
    function printFooter( ){
?>
        <footer>
            <div class="container">
            <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                <p>
                    <span>&copy; 2017 All right reserved
                    <br/>Information Technology</span>
                    <br/>
                    <a href="http://www.ive.edu.hk/ivesite/html/en/campus/cw_overview.html" target="_blank" title="Hong Kong Institute of Vocational Education (Chai Wan)">Hong Kong Institute of Vocational Education (Chai Wan)</a>
                    <br/>
                    <a href="http://www.vtc.edu.hk/html/en" target="_blank" title="Vocational Training Council">Vocational Training Council</a>
                    <br/>
                </p>
                </div>
            </div>
            </div>
            </div>
        </footer>
            </div>
        </body>

        </html>
<?php
    }
?>