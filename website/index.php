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
                        <h2>Genre: Analysis Essay (FYW)</h1>
                      </header>
                      <!--<section class="docs">
                        <?php
                        $genre='essay';
                        include('./php/docs.php')
                        ?>
                      </section>-->
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
                    <p>This is a site for the display of de-identified student work growing out of my dissertation research. For an overview of the project and the approach to using markup in writing classes, take a look at this <a href="http://wwp.northeastern.edu/blog/classroom-markup/" target="_blank">blog post I wrote for the Women Writers Project</a> at Northeastern University. Check out <a href="https://github.com/smithkevin1/study_display">my GitHub</a> if you are interested in playing with the raw XML or looking at the schemas. You can view the accompanying doumentation
                      (element and attribute definitions) for <a href="https://docs.google.com/document/d/1BtBP2lXhl5EKoJmQFa9Ny0kGjURrpRHMNaB7dWzHL8c/edit?usp=sharing" target="_blank">FYW here</a> and for <a href="/php/crib_sheet.php">AWD here</a>. Notes: 1) All students displayed here consented to sharing their work as a part of this research. 2) This research is partially supported by a grant from the <a href="http://www.northeastern.edu/nulab/" target="_blank">NULab for Texts, Maps, and Networks</a>.</p>
                </aside>
                <article>
                      <header>
                        <h2>Genre: Movie Review (FYW)</h1>
                      </header>
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
                        <h2>Genre: Satirical Article (FYW)</h1>
                      </header>
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
                        <h2>Genre: Op-Ed (FYW)</h1>
                      </header>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_op-ed.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <article>
                      <header>
                        <h2>Genre: Resume (FYW)</h1>
                      </header>
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
                <article>
                      <header>
                        <h2>Genre: Annotated Bibliography (AWD)</h1>
                      </header>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_bib.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <article>
                      <header>
                        <h2>Genre: Science Blog (AWD)</h1>
                      </header>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_blog_post.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <article>
                      <header>
                        <h2>Genre: Feasibility Report (AWD)</h1>
                      </header>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_report.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <article>
                      <header>
                        <h2>Genre: Public Project Proposal (AWD)</h1>
                      </header>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_proposal.php')
                            ?>
                          </ul>
                        </p>
                  </section>
                </article>
                <article>
                      <header>
                        <h2>Genre: Cover Letter (AWD)</h1>
                      </header>
                      <section>
                        <p>
                          <ul class="students">
                            <?php
                            include('./php/list_students_cover_letter.php')
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
