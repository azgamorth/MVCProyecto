    <?php

//Se definen los parametros para la conexion a la base de datos
    class Conectar{

            public static function conecta(){

                //$conecta = new mysqli("localhost","root","","trabajo");
                $conecta = new mysqli("remotemysql.com:3306","BF4IQRZekH","awSAcHK5Y6","BF4IQRZekH");
                $conecta ->query("SET NAMES 'utf-8'");
                return $conecta;    
            }

    }

?>