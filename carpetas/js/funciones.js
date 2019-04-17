
function agregarDatos(cod_Empr,nom_Empr,fec_Cons,dir_Empr,tel_Empr){
    cadena="cod_Empr="+cod_Empr+
            "&nom_Empr="+nom_Empr+
            "&fec_Cons="+fec_Cons+
            "&dir_Empr="+dir_Empr+
            "&tel_Empr="+tel_Empr;
    $.ajax({
        type:"POST",
        url:"partials/agregarDatos.php",
        data:cadena,
        success:function(r){
            if(r==1){
                
                alertify.success("agregado con exito");
            }
            else{
                
                alertify.error("No se Guardo");
            }
        }


    });
}