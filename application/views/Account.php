<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tu cuenta</title>
     <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>Assets/css/Aspecto.css">

</head>
<body>
<br>
            <div class="row">
                <div class="panel panel-default">
     
                  <div class="panel-heading">DATOS DE SU CUENTA</div>
                  <div class="panel-body">
                    <p>...</p>
                  </div>
                 
                  <table class="table">
                    ...
                  </table>
                </div>
            </div>    
 <script type="text/javascript" src="<?=base_url()?>Assets/js/jquery2.min.js"></script>
<script type="text/javascript">

   $(function(){

        $("#cod").focus(function()
        {
            $("#bot").css("background-color", "red");
           
        });
        $("#dos").blur(function()
        {
            $("#dos").css("background-color", "white");
        });
     
    });
    </script>
</body>
</html>
