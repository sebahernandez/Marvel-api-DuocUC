<?php
require_once("../configuracion/const.php");


//LOGICA PARA LA BASE DE DATOS
//AQUI SE EJECUTA EL CODIGO MYSQL PROPIO DE LA BD
class ModeloBD {
    protected $db;
    
    //Al crear el objeto
    //abre la conexion a la BD
    public function __construct() {
        $this->db = new mysqli(SERVIDOR, USUARIO, CLAVE, BD);
        
        if ($this->db->connect_errno) {
            echo "Problemas al conectar a la BD mySQL: ".$this->db->connect_error;
            return;
        }
        
        $this->db->set_charset('utf-8');
        $this->db->query($sql);
        
    }
    
    //Al dejar de usarlo, auomaticamente
    //Cierra la conexion a la bd
    function __destruct() {
        $this->db->close();
    }
    
    //Seleccionar todos los registros (filas) con todas sus columnas de una tabla
    public function listarTodo($tabla) {
        $sql = 'SELECT * FROM '.$tabla;
        
        $resultado = $this->db->query($sql);
        
         $respuesta = array();
        
        //COMPRUEBA QUE TENGA AL MENOS 1 RESULTADO
        if ($resultado->num_rows > 0) {
            //RECORRO CADA FILA
            while($row = $resultado->fetch_assoc()) {
                //GUARDO LA FILA EN EL ARRAY DE RESPUESTA
                $respuesta[] = $row;
            }
        }
        //CODIFICAR EL ARRAY DE RESPUESTA A JSON
        return json_encode($respuesta);
    }
    
    //Selecciona una sola fila segun el valor de un indice
    public function seleccionarUnaFilaSegunId($tabla, $indice, $valor) {
        
        if(is_numeric($indice)) {
            $sql = 'SELECT * FROM '. $tabla .' WHERE '.$indice. ' = '.(int)$valor.';';
        } else {
            $sql = 'SELECT * FROM '. $tabla .' WHERE '.$indice. ' = "'.$valor.'";';
        }
        
        $resultado = $this->db->query($sql);
        
        $respuesta = array();

        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                $respuesta[] = $row;
            }
        }
        return json_encode($respuesta[0]);
    }
    
    //Borrar una fila segun un indice
    public function borrarUnaFilaSegunId($tabla, $indice, $valor) {
        
        if(is_numeric($indice)) {
            $sql = 'DELETE FROM '.$tabla.' WHERE '.$indice.' = '.(int)$valor;
        } else {
            $sql = 'DELETE FROM '.$tabla.' WHERE '.$indice.' = "'.$valor.'";';
        }

        $result = $this->db->query($sql);
		
        if ($result) {
            return $result;
        } else {
            $array = ['respuesta'=>$result, 'sql'=> $sql ,'error' => $this->db->error];
            return $array;
        }
    }
    
    //Agregar una fila, cuidando que el orden de tablas coincida con el orden de valores dentro de los array;
    public function agregarFila($tabla, $columnas, $valores) {

        //transformo los array en un string separado por ,
        $stringColumnas = implode(", ", $columnas);
        $stringValores = implode('", "', $valores);

        $sql = 'INSERT INTO '.$tabla.' ('.$stringColumnas.') VALUES ("'.$stringValores.'");';
            
        $result = $this->db->query($sql);
		
        //El resultado es unico, no es una array.
        if ($result) {
		    return $result;
	    } else { //Si es un error, es un array
		    $array = ['respuesta'=>$result, 'sql'=> $sql ,'error' => $this->db->error];
		    return $array;
        } 
    }
    
    //Actualizar una fila segun id dado
	public function actualizarSegunId($tabla, $columnas, $valoresColumna, $indice, $valorIndice) {
		
		$string = ''; //CREO UN STRING VACIO
        
        //RECORRO CADA UNO DE LOS VALORES DE COLUMNA RECIBIENDO EL INDICE (POSICION) Y VALOR DE COLUMNA (NOMBRE) EN CADA CICLO
		foreach ($columnas AS $i => $nombreColumna) {
			
            $string = $string.' '.$nombreColumna.' = "'.$valoresColumna[$i].'",';
		}
		$string = trim($string, ',');
        
        if(is_numeric($indice)) {
            $sql = 'UPDATE '.$tabla.' SET '.$string.' WHERE '.$indice.' = '.(int)$valorIndice.';';
        } else {
            $sql = 'UPDATE '.$tabla.' SET '.$string.' WHERE '.$indice.' = "'.$valorIndice.'";';
        }

		$result = $this->db->query($sql);
		
		if ($result) {
			return $result;
		} else {
			$array = ['respuesta'=>$result, 'sql'=> $sql ,'error' => $this->db->error];
			return $array;
		}
	}

    
    
    
}

?>