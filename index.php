<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="ja"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />

        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width" />

        <title>tomohiro.me</title>

        <link rel="stylesheet" href="stylesheets/foundation.min.css">
        <link rel="stylesheet" href="stylesheets/app.css">

        <script src="javascripts/modernizr.foundation.js">
        <script src="javascripts/google-analytics.js">

        <!-- IE Fix for HTML5 Tags -->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
        <![endif]-->

    </head>
    <body class="row">

        <header>
            <h1>Hi, I'm Tomohiro</h1>
            <h4 class="subheader">Developer &hearts; Shell, Ruby, JavaScript and PHP</h4>
        </header>

        <article>
            <h2>About me</h2>
            <section id="profile">
            <p>I'm Tomohiro, TAIRA and a web application developer.</p>
            </section>
        </article>

        <article>
            <h2>Portfolio</h2>
            I'm create software, mostly in shell script or Ruby.
            <div class="row">
                <div class="twelove columns">
                    <section id="projects">
                        <h3>Open source software projects</h3>
                        <ul>
                            <li><a href="http://tomohiro.github.com/bundlizer">Bundlizer</a> | RubyGems and Bundler application manager</li>
                            <li><a href="http://tomohiro.github.com/redmine_irc_gateway">Redmine IRC Gateway</a> | Provides an access to Redmine API via IRC Gateway</li>
                            <li><a href="https://github.com/Tomohiro/p">p</a> | Anything distribution package management wrapper</li>
                        </ul>
                    </section>

                    <section id="services">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="http://okinawa-movie.heroku.com">沖縄映画上映時間</a> | 沖縄県内の映画上映時間をスマートフォンから確認できるサービス</li>
                            <li><a href="http://fluentular.heroku.com">Fluentular</a> | A Fluentd regular expression editor</li>
                        </ul>
                    </section>
                    <p><a href="https://github.com/Tomohiro">and more projects...</p>
                </div>
            </div>
        </article>

        <!-- Included JS Files (Compressed) -->
        <script src="javascripts/foundation.min.js"></script>

        <!-- Initialize JS Plugins -->
        <script src="javascripts/app.js"></script>
    </body>
</html>
