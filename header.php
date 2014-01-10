<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="css/reset.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>◭ PeakCSS - Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
            <script type='text/javascript'>
                // On attend que la page soit chargée 
                $(document).ready(function(){
                   // On cache la zone de texte
                   $('#toggle').hide();
                   // toggle() lorsque le lien avec l'ID #toggler est cliqué
                   $('a#toggler').click(function()
                  {
                      $('#toggle').toggle(400);
                      return false;
                   });
                });
                
        </script>
    </head>
    <body>
        <header>
            <div class="content">
                <h1>
                    <a href="#">Peak<span>CSS</span></a>
                </h1>
                <nav>
                    <ul>
                        <li><a href="">Home</a></li> 
                        <li><a href="">Customize</a></li>
                        <li class="active"><a href="">Explore</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>