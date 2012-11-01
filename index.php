<!DOCTYPE html>
<?php
define('IMAGES_PATH', realpath(dirname(__FILE__) . '/images') . DIRECTORY_SEPARATOR);
define('BACKGROUND_PATH', realpath(IMAGES_PATH . 'background/300') . DIRECTORY_SEPARATOR);
define('BENJ_PATH', IMAGES_PATH . 'benj' . DIRECTORY_SEPARATOR);

$backgrounds  = scandir(BACKGROUND_PATH);
$random_bgd   = mt_rand(0, count($backgrounds) - 3);
$filename_bgd = $backgrounds[$random_bgd];
$color_bgd    = substr($backgrounds[$random_bgd], -5, 1); // Black or White?

$benjs        = scandir(BENJ_PATH);
$random_bnj   = mt_rand(1, (count($benjs) - 2) / 6); // How many different logotypes?
?>
<!--[if lt IE 7 ]> <html lang="fr-FR" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7 ]>    <html lang="fr-FR" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="fr-FR" class=" lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr-FR" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Benjamin Menant, chef de projet Web et multimédia</title>

  <meta name="description" content="Benjamin Menant, Chef de projet Web et Multimédia : conception, production, écriture audiovisuelle interactive, Web et multimédia. CV, blog, contact, twitter…" />
  <meta name="description" lang="en" content="Benjamin Menant is a Web & Multimedia Project Manager : design & production, audiovisual & interactive writting, Web & multimedia. Résumé, blog, contact, twitter…" />
  <meta name="keywords" content="Benjamin Menant, Chef de projet, Web, Multimédia" />
  <meta name="keywords" lang="en" content="Benjamin Menant, Project Manager, Web, Multimedia" />
  <meta name="author" content="Benjamin Menant" />

  <meta name="viewport" content="width=device-width">

  <link rel="openid.server" href="http://www.myopenid.com/server" />
  <link rel="openid.delegate" href="http://bmenant.myopenid.com/" />

  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<body class="couleur-fond-<?php echo $color_bgd; ?>">

  <!--[if lt IE 7]>
      <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <div id="container">
    <h1 class=""><span class="visuallyhidden">Benj’</span></h1>

    <section id="main" class="font">
      <ul class="clearfix">

        <li><a class="mail" href="mailto:contact@menant-benjamin.fr" title="contact@menant-benjamin.fr"><span>Courriel</span></a></li>
        <li><a href="http://blog.menant-benjamin.fr/"><span>Blog</span></a></li>
        <li><a href="http://twitter.com/bmenant" title="@bmenant"><span>Twitter</span></a></li>
        <li><a href="https://remixjobs.com/cv/Benjamin-MENANT/3550" title="Curriculum Vitæ sur RemixJobs"><span>CV</span></a></li>
        <li><a href="http://fr.viadeo.com/fr/profile/benjamin.menant"><span>Viadeo</span></a></li>
        <li><a href="http://fr.linkedin.com/in/bmenant"><span>LinkedIn</span></a></li>
        <!--<li><a href="http://www.diigo.com/user/bmenant" title="Plein d’autres liens"><span>Diigo</span></a></li>-->

      </ul>
    </section>

    <footer>
      <ul>
        <li>Toutes les images et photographies de ce site sont les créations de Benjamin Menant et sont publiées sous licence
          <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><span>Creative Commons by-sa-nc</span></a><span class="ponctuation-haute">;</span></li>
        <li>La fonte <cite class="font">Bizmeud</cite> est la création de
          <a title="Bizmeud, chez Velvetyne Type Foundry" href="http://www.velvetyne.fr#bizmeud"><span>Quentin Bodin et Jil Dodin</span></a><span class="ponctuation-haute">;</span></li>
        <li>Cette page est hébergée par <a href="http://www.sivit.fr/fr/contacts.php" title="Contacter l’hébergeur."><span>Sivit</span></a>.
          Peut présenter des traces d’arachides et des exuvies d’acquarien.</li>
      </ul>
    </footer>
  </div> <!--! end of #container -->
</body>
</html>
