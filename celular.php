<?php
require("partials/cabeza.php");
?>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


<input id="timepicker" readonly="" width="270" />
    <script>
        $('#timepicker').timepicker({
            uiLibrary: 'bootstrap'
        });
    </script>
<?php
require("partials/pies.php");
?>