<?php
  $gifs = glob(dirname(__FILE__) . "/gifs/*.gif");
  $random_gif = $gifs[array_rand($gifs)];
  $random_gif = basename($random_gif);
  $should_contrast = strpos($random_gif,'black') !== false ? true : false;
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>polyclick</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
    <style>
      a, a:link, a:visited { text-decoration:none; color:white; }
      a:hover { text-decoration:line-through; }

      html, body {
        margin:0;
        padding:0;
        overflow:hidden;
        font-family: 'Oswald',
        sans-serif;
      }

      html {
        background:#000 url(gifs/<?= $random_gif ?>) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        font-smoothing: subpixel-antialiased;
        text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
        text-rendering: optimizeLegibility !important;
        -webkit-font-smoothing: antialiased !important;
      }

      .links {
        position:fixed;
        bottom:50px;
        right:50px;
        color:white;
        font-weight:300;
        font-size: 10px;
        text-transform: uppercase;
        letter-spacing: 4px;
        text-align:right;
      }

      .link {
        display: inline-block;
      }

      @media only screen and (max-width: 550px)
      {
        .links {
          bottom:25px;
          right:25px;
        }

        .link {
          display: block;
          line-height: 2;
        }

        .tail {
          display: none;
        }
      }
    </style>
  </head>
  <body>
    <!--[if lt IE 10]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div class="links">
      <div class="link"><a href="mailto:hello@polyclick.io">hello@polyclick.io</a><span class="tail"> x </span></div>
      <div class="link"><a href="https://instagram.com/polyclick/" target="_blank">instagram</a><span class="tail"> x </span></div>
      <div class="link"><a href="https://twitter.com/polyclickio" target="_blank">twitter</a><span class="tail"> x </span></div>
      <div class="link"><a href="https://github.com/polyclick" target="_blank">github</a></div>
    </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-62395110-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>