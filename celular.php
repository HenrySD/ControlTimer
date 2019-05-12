<?php
require("partials/cabeza.php");
?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">

<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>


<div class="container">
<div class=" col-sm-5">
<input type="text" id="hola" name="hola" class="form-control">
</div>
</div>
<script>
$('#hola').timepicker({
    timeFormat: 'hh:mm:ss',
    interval: 60,
    minTime: '00:00',
    maxTime: '23:00',
    dynamic: true,
    dropdown: true,
    scrollbar: true
});
</script>

<?php
require("partials/pies.php");
?>