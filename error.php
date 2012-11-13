<!DOCTYPE html>
<?php
define('BASE_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('CSS_PATH', realpath(BASE_PATH . 'css') . DIRECTORY_SEPARATOR);
define('BACKGROUND_PATH', realpath(BASE_PATH . 'images/background') . DIRECTORY_SEPARATOR);

if($_SERVER['REDIRECT_STATUS'] == 200) {
  // This page has never existed!
  header('HTTP/1.1 404 Not Found');
  $error = 404;
}
elseif($_SERVER['REDIRECT_STATUS'] == 404
    || $_SERVER['REDIRECT_STATUS'] == 403
    || $_SERVER['REDIRECT_STATUS'] == 500) {
  $error = $_SERVER['REDIRECT_STATUS'];
}
else{
  header('HTTP/1.1 500 Server Error');
  $error = 500;
}
$css   = file_get_contents(sprintf(CSS_PATH . 'error-%d.css', $error));
switch($error) {
  case 404:
    $title   = 'Ressource introuvable';
    $desc_fr = 'Page d’erreur 404 : il n’y a rien à cette adresse.';
    $desc_en = '404 error: resource not found.';
    break;
  case 403:
    $title   = 'Accès refusé';
    $desc_fr = 'Page d’erreur 403 : il est interdit d’accéder à cette ressource.';
    $desc_en = '403 error: access forbidden.';
    break;
  case 500:
    $title   = 'Erreur serveur';
    $desc_fr = 'Page d’erreur 500 : problème interne du serveur.';
    $desc_en = '500 error: internal server error.';
    break;
}
$backgrounds = scandir(BACKGROUND_PATH);
$random_bgd  = mt_rand(2, count($backgrounds) - 1);
$color_bgd   = substr($backgrounds[$random_bgd], -5, 1); // Black or White?
$b64_bgd     = base64_encode(file_get_contents(BACKGROUND_PATH . $backgrounds[$random_bgd]));
?>
<!--[if lt IE 7 ]> <html lang="fr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7 ]>    <html lang="fr" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="fr" class=" lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title><?php echo $title; ?> – Benjamin MENANT</title>
  <meta name="description" content="<?php echo $desc_fr; ?>" />
  <meta name="description" lang="en" content="<?php echo $desc_en; ?>" />
  <meta name="author" content="Benjamin Menant" />

  <meta name="viewport" content="width=device-width" />

  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />

  <link rel="stylesheet" href="/css/style.css" />
  <style><?php echo $css; ?></style>

  <script src="/js/vendor/modernizr.js"></script>
</head>
<body class="couleur-fond-<?php echo $color_bgd; ?>">

  <!--[if lt IE 7]>
      <p lang="en" class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
      <p class="chromeframe">Vous utilisez un navigateur ancien. <a href="http://browsehappy.com/">Mettez-le à jour</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">utilisez Google Chrome Frame</a> pour bénéficier d’une navigation plus agréable et plus sûre.</p>
  <![endif]-->

  <div class="background" style="background-image: url('data:image/jpg;base64,<?php echo $b64_bgd; ?>');">&nbsp;</div>

  <div class="container">
    <h1 class="ir error-1"><?php echo $title; ?></h1>
    <section class="main">
      <h2><a href="/">Benjamin Menant, chef de projet multimédia</a></h2>
      <ul class="clearfix">

        <li><a class="mail" href="mailto:contact@menant-benjamin.fr" title="contact@menant-benjamin.fr">Courriel</a></li>
        <li><a href="http://blog.menant-benjamin.fr/">Blog</a></li>
        <li><a href="http://twitter.com/bmenant" title="@bmenant">Twitter</a></li>
        <li><a href="/bmenant-cv.pdf" title="Curriculum Vitæ sur RemixJobs">CV</a></li>
        <li><a href="http://fr.viadeo.com/fr/profile/benjamin.menant">Viadeo</a></li>
        <li><a href="http://fr.linkedin.com/in/bmenant">LinkedIn</a></li>
        <!--<li><a href="http://www.diigo.com/user/bmenant" title="Plein d’autres liens"><span>Diigo</span></a></li>-->

      </ul>
    </section>

    <footer>
      <ul>
        <li>Toutes les images et photographies de ce site sont les créations de Benjamin Menant et sont publiées sous licence
          <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons by-sa-nc</a><span class="ponctuation-haute">;</span></li>
        <li>La fonte <cite class="font">Bizmeud</cite> est la création de
          <a title="Bizmeud, chez Velvetyne Type Foundry" href="http://www.velvetyne.fr#bizmeud">Quentin Bodin et Jil Dodin</a><span class="ponctuation-haute">;</span></li>
        <li>Cette page est hébergée par <a href="http://www.sivit.fr/fr/contacts.php" title="Contacter l’hébergeur.">Sivit</a>.
          Peut présenter des traces d’arachides et des exuvies d’acquarien.</li>
      </ul>
    </footer>
  </div> <!--! end of #container -->
</body>
</html>
