<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Elige tu plan</title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- twnty -->
        <link href="<?= base_url() ?>Assets/css/foundation.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url() ?>Assets/css/twentytwenty.css" rel="stylesheet" type="text/css" />
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>Assets/css/Aspecto2.css">
    </head>
    <body>
        <br>
        <div class="row">
            <div class="col-lg-12"> 
                <center>
                    <img src="<?= base_url() ?>Assets/logo.png" alt="" class="img-responsive" class="img-thumbnail"><br>

                    <FONT size="+4" color="white" face="Arial" > ¿QUÉ ES IPLEX? </FONT><br><br><br>
                    <font size="+2" color="white">IPLEX sera tu videoclub particular, tu elijes que ver cuando quieras, 
                    sin limites, sin cortes, sin líos.</font><br>
                    <br>                 
                </center>
            </div>
        </div>    
        <br><!-- formulario d entrada y login -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <video autoplay="" loop="" width="350px" height="100%" muted="muted">
                    <source src="http://www.qooqee.com/templates/sublime/sublime2.webm"></source>	                
                </video>
            </div>
        </div>    
        <div class="row">
            <div class="col-lg-12">
                <center>
                    <FONT size="+4" color="white" face="Arial" > EL MAYOR CATALOGO DE CONTENIDOS </FONT><br><br>
                    <font size="+2" color="white">Con IPLEX puede tener la seguridad de tener el mayor catalogo de contenidos que existe en internet, miles de películas, series, documentales, programas de TV ... todo lo que desee ver lo tendrá, compruébelo usted mismo sin compromiso, puede darse de baja pulsando un simple botón.</font><br>
                    <br>                 
                </center>
            </div>
        </div>
        <div class="row" style="margin-top: 2em;">
            <div class="col-lg-12 col-md-12">
                <div class="twentytwenty-container">
                    <img src="<?= base_url() ?>Assets/catalogo.png" />
                    <img src="<?= base_url() ?>Assets/Catalogo2.png" />
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12"> 
                <center>
                    <FONT size="+4" color="white" face="Arial" > DISFRUTE EN FAMILIA </FONT><br><br>
                    <font size="+2" color="white">Disfrutar de una película en casa con la familia es un plan ideal, en invierno hace frió y en verano se esta fresquito en casa, con IPLEX siempre tiene algo para compartir en familia.</font><br>
                    <br>  </center>                        
            </div>
        </div> <br>
        <div class="row">
            <div class="col-lg-12"> 
                <img src="<?= base_url() ?>Assets/sonri.jpg" alt="" class="img-responsive" class="img-thumbnail"><br>
            </div>
        </div>   
       <div class="row">
            <div class="col-lg-12"> 
                <center>
                    <FONT size="+4" color="white" face="Arial" > IPLEX EN TODAS PARTES </FONT><br><br><br>
                    <font size="+2" color="white">Conecta IPLEX a todos sus dispositivos, compatible con una amplia variedad de productos y sistemas, ¿Un viaje? Perfecto, llévese IPLEX con usted a cualquier parte del mundo que vaya en sus smartphone, tablet o cualquier dispositivo que tenga.</font><br>
                    <br>  </center>                        
            </div>
        </div> <br> <br> 
        <div class="row">
            <div class="col-lg-12"> 
                <img src="<?= base_url() ?>Assets/iconos.png" alt="" class="img-responsive" class="img-thumbnail"><br>
            </div>
        </div>  
        <div class="row">
            <div class="col-lg-12"> 
                <img src="<?= base_url() ?>Assets/fondo.png" alt="" class="img-responsive" class="img-thumbnail"><br>
            </div>
        </div>  
        <div class="row">
            <div class="col-lg-12"> 
                <img src="<?= base_url() ?>Assets/planes.png" alt="" class="img-responsive" class="img-thumbnail"><br>
            </div>
        </div>  

        <script src="<?= base_url() ?>Assets/js/jquery2.min.js"></script>
        <!-- jquery para twnty-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="<?= base_url() ?>Assets/js/jquery.event.move.js"></script>
        <script src="<?= base_url() ?>Assets/js/jquery.twentytwenty.js"></script>
        <script>
            $(window).load(function () {
                $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.7});
                $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.3, orientation: 'vertical'});
            });
        </script>
        <script type="text/javascript">

            $(function () {

                $("#bot").mouseenter(function ()
                {
                    $("#bot").css("background-color", "red");

                });
                $("#bot").mouseleave(function ()
                {
                    $("#bot").css("background-color", "#FF5E65");
                });

            });
        </script>
    </body>
</html>
