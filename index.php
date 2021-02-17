
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords" content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="Niklausec">
    <title>CHECKER DE FULL</title>
    <link rel="apple-touch-icon" href="https://cdn.pixabay.com/photo/2016/11/11/14/49/minecraft-1816996_1280.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn.pixabay.com/photo/2016/11/11/14/49/minecraft-1816996_1280.png">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" style="background: #0f1321;" data-open="click" data-menu="vertical-menu" data-color="bg-chartbg" data-col="2-columns">


<div class="container mt-4" style="margin-bottom: 100px;">

<br>
<center><audio src="musica.mp3" autoplay controls></audio></center><br>
<br>

    <div class="text-center ">
        <h1 class="text-light"><b>CHK DE FULL</b> </h1>
        <div class="text-center ">
        <h0 class="text-light"><b></h0>
    </div>
        <h class="text-light"><b>BY <?php echo "<a href='discord.gg/171'>CENTRAL 171</a>"; ?></h>
        
          <fieldset class="form-group">
 <textarea type="text" maxlength="2100"
        class="form-control bg-dark text-light" style="resize: none;text-align: center;margin: auto;" rows="12" id="lista" placeholder="5448390340064868|05|26|444"></textarea>
    </fieldset>
</fieldset>


    <center>
        <div class="mb-3">
            <button type="button" class="btn btn-light btn-min-width mr-1 mb-1" id="testar" onclick="enviar()">INICIAR</button>
            <button type="button" class="btn btn-light btn-min-width mr-1 mb-1" id="parar" disabled="true">PARAR</button>
            <a href="../../" class="btn btn-primary btn-min-width mr-1 mb-1">VOLTAR</a>
        </div>
    </center>

    <center>
        <div class="badge badge-success badge-pill" style="padding: 10px 10px;margin: 5px;">
            <i class="la la-check"></i>
            <span style="font-size: 15px;"> Aprovados</span>
            <span style="font-size: 15px;" id="cLive">0</span>
        </div>

        <div class="badge badge-danger badge-pill" style="padding: 10px 10px;margin: 5px;">
            <i class="la la-close"></i>
            <span style="font-size: 15px;"> Reprovados</span>
            <span style="font-size: 15px;" id="cDie">0</span>
        </div>

        <div class="badge badge-info badge-pill" style="padding: 10px 10px;margin: 5px;">
            <i class="la la-cloud-upload"></i>
            <span style="font-size: 15px;"> Carregados</span>
            <span style="font-size: 15px;" id="carregadas">0</span>
        </div>
    </center>

    <center>
        <div class="text-center text-light mt-3">
            <h4 class="text-light" id="status_ccs">AGUARDANDO INICIO...</h4>
        </div>
    </center>

    <div class="col-md-12 mt-3 p-0">
        <div class="card bg-dark text-light">
            <div style="position: absolute;top: 0;right: 0;">
                <button id="mostra" class="btn btn-primary" style="padding: 2px 5px;"><i class="la la-external-link-square" style="font-size: 30px;"></i></button>
            </div>
            <div class="card-body">
                <h6 style="font-weight: bold;" class="card-title text-light">Aprovados - <span  id="cLive2" class="badge badge-success">0</span></h6>
                <div id="bode"><span id=".aprovadas" class="aprovadas"></span></div>
            </div>
        </div>
    </div>

    <div class="col-md-12 mt-3 p-0">
        <div class="card bg-dark text-light">
            <div style="position: absolute;top: 0;right: 0;">
                <button id="mostra2" class="btn btn-primary" style="padding: 2px 5px;"><i class="la la-external-link-square" style="font-size: 30px;"></i></button>
            </div>
            <div class="card-body">
                <h6 style="font-weight: bold;" class="card-title text-light">Reprovados - <span  id="cDie2" class="badge badge-danger">0</span></h6>
                <div id="bode2"><span id=".reprovadas" class="reprovadas"></span></div>
            </div>
        </div>
    </div>

    

</div>
    <!-- BEGIN VENDOR JS-->
    <script src="theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CHAMELEON  JS-->
    <script src="theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
    <script src="theme-assets/js/core/app-lite.js" type="text/javascript"></script>
    <!-- END CHAMELEON  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#bode").hide();
            $("#esconde").show();
            $('#mostra').click(function(){$("#bode").slideToggle();});
        });
        $(document).ready(function(){
            $("#bode2").hide();
            $("#esconde2").show();
            $('#mostra2').click(function(){$("#bode2").slideToggle();});
        });

        function enviar() {
            var linha = $("#lista").val();
            var linhaenviar = linha.split("\n");
            var total = linhaenviar.length;
            var ap = 0;
            var rp = 0;
            $('#testar').attr('disabled', 'disabled');
            $('#parar').attr('disabled', null);
            linhaenviar.forEach(function(value, index) {
                setTimeout(
                    function() {
                        var ajaxCall = $.ajax({
                            url: 'api.php?lista=' + value,
                            type: 'GET',
                            async: true,
                            success: function(resultado) {
                                if (resultado.match("#APROVADA")) {
                                    removelinha();
                                    ap++;
                                    aprovadas(resultado + " ai sim fdp");
                                    $('#status_ccs').html('#APROVADA');
                                }else {
                                    removelinha();
                                    rp++;
                                    reprovadas(resultado + " kkkkkkj foda");
                                    $('#status_ccs').html('#REPROVADA');
                                }
                                $('#carregadas').html(total);
                                var fila = parseInt(ap) + parseInt(rp);
                                $('#cLive').html(ap);
                                $('#cDie').html(rp);
                                $('#total').html(fila);
                                $('#cLive2').html(ap);
                                $('#cDie2').html(rp);

                                if (fila == total) {
                                   $('#testar').attr('disabled', null);
                                    $('#parar').attr('disabled', 'disabled');
                                    $('#lista').attr('disabled', null);
                                    // audio.play();
                                    document.getElementById("status_ccs").innerHTML = "FINALIZADO";
                                    setTimeout(function() {
                                        document.getElementById("status_ccs").innerHTML = "AGUARDANDO INICIO...";
                                    }, 2000);
                                }
                            }
                        });
                        $('#parar').click(function () {
                            ajaxCall.abort();
                            $('#testar').attr('disabled', null);
                            $('#parar').attr('disabled', 'disabled');
                            $('#lista').attr('disabled', null);
                             var st = 'PAUSADO';
                            $('#status_ccs').html(st);
                        });
                    }, 20 * index);

            });
        }
        function aprovadas(str) {
            $(".aprovadas").prepend(str + "<br>");
        }
        function reprovadas(str) {
            $(".reprovadas").prepend(str + "<br>");
        }
        function removelinha() {
            var lines = $("#lista").val().split('\n');
            lines.splice(0, 1);
            $("#lista").val(lines.join("\n"));
        }
    </script>
  </body>
</html>