<!doctype html>
<?php
define('IMAGES_PATH', realpath(dirname(__FILE__) . '/images') . DIRECTORY_SEPARATOR);
define('BACKGROUND_PATH', realpath(IMAGES_PATH . 'background/300') . DIRECTORY_SEPARATOR);
define('P404_PATH', IMAGES_PATH . '404' . DIRECTORY_SEPARATOR);

$backgrounds  = scandir(BACKGROUND_PATH);
array_splice($backgrounds, 0, 2); // Ignore '.' and '..' entries.
$random_bgd   = mt_rand(0, count($backgrounds) - 1);
$filename_bgd = $backgrounds[$random_bgd];
$color_bgd    = substr($backgrounds[$random_bgd], -5, 1); // Black or White?

$benjs        = scandir(P404_PATH);
array_splice($benjs, 0, 2); // Ignore '.' and '..' entries.
$random_bnj   = mt_rand(1, count($benjs) / 6); // How many different logotypes?
$color_bnj    = $color_bgd === 'n' ? 'b' : 'n';
$filepath_bnj = "images/404/404-$random_bnj-10-$color_bnj.png";
?>
<!--[if lt IE 7 ]> <html lang="fr-FR" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="fr-FR" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="fr-FR" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="fr-FR" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="fr-FR" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <title>Rien à cette adresse (404) – Benjamin MENANT</title>
  <meta name="description" content="Page d’erreur 404 : il n’y a rien à cette adresse." />
  <meta name="author" content="Benjamin MENANT" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="apple-touch-icon" href="apple-touch-icon.png" />

  <link rel="stylesheet" href="css/style.css" />
  <style media="(min-width: 200px) and (max-width: 400px)">
    body { background-image: url('images/background/300/<?php echo $filename_bgd; ?>'); }
  </style><style media="(min-width: 401px) and (max-width: 800px)">
    body { background-image: url('images/background/600/<?php echo $filename_bgd; ?>'); }
  </style><style media="(min-width: 801px) and (max-width: 1200px)">
    body { background-image: url('images/background/1000/<?php echo $filename_bgd; ?>'); }
  </style><style media="(min-width: 1201px)">
    body { background-image: url('images/background/1400/<?php echo $filename_bgd; ?>'); }
  </style>

  <script src="js/libs/modernizr-1.6.min.js"></script>
</head>
<body class="couleur-fond-<?php echo $color_bgd; ?>">
  <div id="container">
    <hgroup>
      <h1>
        <script id="logotype-hook">
        (function(){
          var $this       = document.getElementById('logotype-hook'),
              $image      = document.createElement('img'),
              thirdsWidth = document.body.offsetWidth / 3 * 2,
              imageScale  = (thirdsWidth > 812) && '58' || (thirdsWidth > 406) && '29' || '10';

          $image.alt        = 'Erreur 404';
          $image.id         = 'logotype';
          $image.src        = 'images/404/404-<?php echo $random_bnj; ?>-'
                            + imageScale
                            + '-<?php echo $color_bnj; ?>.png';

          document.body.className += ' taille-' + imageScale;
          $this.parentNode.insertBefore($image, $this);
        })();
        </script>
        <noscript>
          <img id="logotype" alt="Erreur 404" src="<?php echo $filepath_bnj; ?>" />
        </noscript>
      </h1>
        <h2 class="visuallyhidden">Rien à cette adresse</h2>
    </hgroup>

    <div id="main" class="font">
      <ul class="clearfix">
        <li><a href="./" title="Retourner en page d’accueil"><span>Benjamin MENANT</span></a></li>
      </ul>
    </div>

    <footer>
      <ul>
        <li>Toutes les images et photographies de ce site sont la création de son auteur, et sont concernées par une licence
          <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><span>Creative Commons by-sa-nc</span></a><span class="ponctuation-haute">;</span></li>
        <li>La fonte <cite class="font">Pincoyablack</cite>, utilisée pour cette page, est distribuée par
          <a title="Pincoyablack, sur Font Squirrel" href="http://www.fontsquirrel.com/fonts/Pincoyablack"><span>Font Squirrel</span></a><span class="ponctuation-haute">;</span></li>
        <li>Ce site est hébergé par <a href="http://www.sivit.fr/fr/contacts.php" title="Contacter l’hébergeur."><span>Sivit</span></a>.
          Peut présenter des traces d’arachides et des exuvies d’acquarien.</li>
      </ul>
    </footer>
  </div> <!--! end of #container -->

  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('#logotype'); </script>
  <![endif]-->
</body>
</html>
