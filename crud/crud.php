<?php
    class crud{
        public function agregar($datos){
                $conexion=conexion();
                $sql="INSERT INTO tab_empr (Cod_Empr,Nom_Empr,Fec_Cons,Tel_Empr,Dir_Empr,Ema_Empr)
                                values('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]') ";
                
                return mysqli_query($conexion,$sql);
        }

        public function agregarUsuarios($datosUsuarios){
            $conexion=conexion();
            $sqlAgregarUsu="INSERT INTO tab_usua (Cod_Usua,Cod_Empr,Cod_Turn,Tip_Usua,Nom_Usua,Ape_Usua,Dir_Usua,Ema_Usua,Tel_Usua,Use_Name,Con_Usua)
                                        values('$datosUsuarios[0]','$datosUsuarios[1]','$datosUsuarios[2]','$datosUsuarios[3]','$datosUsuarios[4]','$datosUsuarios[5]','$datosUsuarios[6]',
                                        '$datosUsuarios[7]','$datosUsuarios[8]','$datosUsuarios[9]','$datosUsuarios[10]')";
             return mysqli_query($conexion,$sqlAgregarUsu);                           
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

        public function obtenDatosConfig($Cod_Turn){
            $conexion=conexion();
            $sql="SELECT Cod_Turn,Des_Turn,Hor_Entr,Hor_Sali,Lim_Tiem FROM tab_turn WHERE Cod_Turn='$Cod_Turn'";
            $result=mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_row($result);

            $datos=array(
                'Cod_Turn'=>$ver[0],
                'Des_Turn'=>$ver[1],
                'Hor_Entr'=>$ver[2],
                'Hor_Sali'=>$ver[3],
                'Lim_Tiem'=>$ver[4]
            );
            return $datos;

        }
        public function obtenDatosUsuarios($Cod_Usua){
            $conexion=conexion();

            $sql="SELECT Cod_Usua,tab_empr.Nom_Empr,tab_turn.Des_Turn,Tip_Usua,Nom_Usua,Ape_Usua,Dir_Usua,Ema_Usua,Tel_Usua
            FROM tab_usua
            INNER JOIN tab_empr ON tab_usua.Cod_Empr = tab_empr.Cod_Empr
            INNER JOIN tab_turn ON tab_usua.Cod_Turn = tab_turn.Cod_Turn 
            WHERE Cod_Usua='$Cod_Usua'";

            $result=mysqli_query($conexion,$sql);
            $ver=mysqli_fetch_row($result);

            $datos=array(
                'Cod_Usua'=>$ver[0],
                'Cod_Empr'=>$ver[1],
                'Cod_Turn'=>$ver[2],
                'Tip_Usua'=>$ver[3],
                'Nom_Usua'=>$ver[4],
                'Ape_Usua'=>$ver[5],
                'Dir_Usua'=>$ver[6],
                'Ema_Usua'=>$ver[7],
                'Tel_Usua'=>$ver[8]
            );
            return $datos;
        }


        public function actualizar($datos){
            $conexion=conexion();
            $sql="UPDATE tab_empr SET Nom_Empr='$datos[1]',Fec_Cons='$datos[2]',Dir_Empr='$datos[3]',Ema_Empr='$datos[4]',Tel_Empr='$datos[5]' WHERE Cod_Empr='$datos[0]'";     

            return mysqli_query($conexion,$sql);
            
        }
        public function actualizarConfiguracion($datos){
            $conexion=conexion();
            $sql="UPDATE tab_turn SET Des_Turn='$datos[1]',Hor_Entr='$datos[2]',Hor_Sali='$datos[3]',Lim_Tiem='$datos[4]' WHERE Cod_Turn='$datos[0]'";     

            return mysqli_query($conexion,$sql);
        }
        public function actualizarUsuarios($datosEdiUsua){
            $conexion=conexion();
            $sql="UPDATE tab_usua SET Cod_Empr='$datosEdiUsua[1]',Cod_Turn='$datosEdiUsua[2]',Tip_Usua='$datosEdiUsua[3]',Nom_Usua='$datosEdiUsua[4]',Ape_Usua='$datosEdiUsua[5]',Dir_Usua='$datosEdiUsua[6]',Ema_Usua='$datosEdiUsua[7]',Tel_Usua='$datosEdiUsua[8]' WHERE Cod_Usua='$datosEdiUsua[0]'";
            return mysqli_query($conexion,$sql);
        }

        public function eliminar($Cod_Empr){
			
			$conexion=conexion();

			$sql="DELETE from tab_empr where Cod_Empr='$Cod_Empr'";
			return mysqli_query($conexion,$sql);
        }
        
        public function eliminarUsuarios($Cod_Usua){
            $conexion=conexion();
            $sql="DELETE from tab_usua where Cod_Usua='$Cod_Usua'";
            return mysqli_query($conexion,$sql);
        }
    }
    ?>