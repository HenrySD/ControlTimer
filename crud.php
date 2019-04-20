<?php
    class crud{
        public function agregar($datos){
                $conexion=conexion();
                $sql="INSERT INTO tab_empr (Cod_Empr,Nom_Empr,Fec_Cons,Tel_Empr,Dir_Empr,Ema_Empr)
                                values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]') ";
                
                return mysqli_query($conexion,$sql);
        }


        public function obtenDatos($Cod_Empr){
            $conexion=conexion();

            $sql="SELECT Cod_Empr,Nom_Empr,Fec_Cons,Dir_Empr,Ema_Empr,Tel_Empr FROM tab_empr
                            WHERE Cod_Empr='$Cod_Empr'";

            $result=mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_row($result);

            $datos=array(
                'Cod_Empr'=>$ver[0],
                'Nom_Empr'=>$ver[1],
                'Fec_Cons'=>$ver[2],
                'Dir_Empr'=>$ver[3],
                'Ema_Empr'=>$ver[4],
                'Tel_Empr'=>$ver[5]
            );
            return $datos;
        }


        public function actualizar($datos){
            $conexion=conexion();
            $sql="UPDATE tab_empr SET Nom_Empr='$datos[1]',Fec_Cons='$datos[2]',Dir_Empr='$datos[3]',Ema_Empr='$datos[4]',Tel_Empr='$datos[5]' WHERE Cod_Empr='$datos[0]'";     

            return mysqli_query($conexion,$sql);
            
        }

        public function eliminar($Cod_Empr){
			
			$conexion=conexion();

			$sql="DELETE from tad_empr where Cod_Empr='$Cod_Empr'";
			return mysqli_query($conexion,$sql);
		}
    }
    ?>