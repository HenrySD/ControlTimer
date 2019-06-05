<?php
require("partials/cabeza.php");
?>
 <!-- este es el modal de ayuda-->
 <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item"
                src="https://www.youtube.com/embed/xuguXfAITe4?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div class="container ">
    <div class="row">
        <div class="col-sm-11">
            <h3 class="text-center">Listado de asistencia</h3>
        </div>
        <div class="col-sm-1">
            <a><i class="ti-help-alt" style="font-size:25px; margin-left:30px;" data-toggle="modal"
                    data-target=".bd-example-modal-lg"></i></a>
        </div>
    </div>
    <div class="" id="box">

    </div>
</div>
<!-- este es el modal de ayuda-->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="embed-responsive embed-responsive-4by3">
                <iframe class="embed-responsive-item"
                    src="https://www.youtube.com/embed/LIR5Sli8cmc?autoplay=1&fs=1&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=1&start=0&end=0&vq=hd720&origin=https://youtubeembedcode.com"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    $('#box').load('tablas/tablaAsistencia.php');
});
</script>
<?php
require("partials/pies.php");
?>