<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Demo YDKJ</title>
<link href="css/ydkj.css" rel="stylesheet"/>
<script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
<script src="js/YDKJ.js?ver=10" type="text/javascript"></script>

<script type="text/javascript">

jQuery(document).ready(function() {
  var screen = jQuery('#screen');
  var game = new YDKJ(screen);
  jQuery('#fullscreen').click(function() {
    jQuery('#headerbuttons').hide();
    game.fullscreen(function() {
      jQuery('#headerbuttons').show();
    });
    return false;
  });
  game.demo();
});

</script>
</head>

<body style="background-color:#000;margin:0;padding:0;border:0">
  <div style="text-align:center;font-size:20px;margin:5px;font-family:JackCondensed, sans-serif" id="headerbuttons"><a href="#" id="fullscreen" style="color:#666">Plein écran</a> &nbsp; &nbsp; &nbsp; <a href="./" style="color:#666">Retour à l'accueil</a></div>
  <div id="screen" style="margin-left:auto;margin-right:auto">
    <img src="ajax-loader.gif" style="position:absolute;left:293px;top:212px" class="markedAsRemoved"/>
  </div> <!-- Couleur #EEE pour l'intro -->
<?php require 'analytics.php'; ?>
</body>
</html>