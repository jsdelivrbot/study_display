<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Project Files, Kevin G. Smith</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="./css/normalize.min.css">
        <link rel="stylesheet" href="./css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
          include('./php/header.php') ?>
        <div class="main-container">
            <div class="main wrapper clearfix">
                <article>
                      <header>
                        <h2>Genre: Analysis Essay</h1>
                      </header>
                      <section class="docs">
                        <?php
                        $genre='essay';
                        include('./php/docs.php')
                        ?>
                      </section>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            $genre='essay';
                            include('./php/list_students_essay.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <aside>
                    <h3>Display site</h3>
                    <p>This is a site for the display of de-identified student work.</p>
                </aside>
                <article>
                      <header>
                        <h2>Genre: Movie Review</h1>
                      </header>
                      <section class="docs">
                        <?php
                        $genre='review';
                        include('./php/docs.php')
                        ?>
                      </section>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_review.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <article>
                      <header>
                        <h2>Genre: Satirical Article</h1>
                      </header>
                      <section class="docs">
                        <?php
                        $genre='article';
                        include('./php/docs.php')
                        ?>
                      </section>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_article.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <article>
                      <header>
                        <h2>Genre: Op-Ed</h1>
                      </header>
                      <section class="docs">
                        <?php
                        $genre='oped';
                        include('./php/docs.php')
                        ?>
                      </section>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_oped.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <article>
                      <header>
                        <h2>Genre: Resume</h1>
                      </header>
                      <section class="docs">
                        <?php
                        $genre='resume';
                        include('./php/docs.php')
                        ?>
                      </section>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_resume.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3></h3>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </body>
</html>
