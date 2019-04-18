
<?php
require("partials/cabeza.php");
?>


<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js" ></script>
<div class="container box">
<form action="" class="col-sm-8">
<div class="form-group">
  <input id="docs-demo" class="form-control">
</div>
<div class="form-group">
  <input id="tama" class="form-control">
</div>
<div class="form-group">
  <input id="t" class="form-control">
</div>
<div class="form-group">
  <input id="r" class="form-control">
</div>

</form>


</div>
    <script>
    bootstrapValidate('#docs-demo','email:Ingrese un Email valido'),
    bootstrapValidate('#tama', 'min:20:Minimo 20 Caracteres'),
    bootstrapValidate('#t', 'regex:^[a-z]+$:Solo Letras'),
    bootstrapValidate('#r', 'required:Rellene el campo')
    </script>
   


<?php
require("partials/pies.php");
?>