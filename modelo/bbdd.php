<?php
class Bbdd{
    public $host = "localhost";  //no deberían ser públicas, sino privadas
    public $usuario = "root";
    public $contrasinal = "";
    public $bbdd = "clientes";

    public $conexion;   //elevamos la variable a atributo, para poder usarla de modo global

    public function __construct(){ //función constructor abre canal de comunicación con la bbdd
       $this->conexion = new mysqli(
           $this->host, $this->usuario, $this->contrasinal, $this->clientes); // $this-> para que se refiera a la propiedad de la clase señalada
    }

    public function seleccionClientes(){
        $consulta = "SELECT * FROM tablaclientes";
        $solicitud = $this->conexion->query($consulta); // al usar $this-> hay que quitar el $ a la variable

        while($cliente = mysqli_fetch_object($solicitud)){  //este bucle nos muestra los productos. Cada paso dentro del bucle es uno de los productos. La información llega como un objeto (object(stdClass)-standard class-). _fetch_ASSOC nos lo devuelve como un array, etc
            
            echo "<div style=\"border:4px solid green; margin: 10px; padding: 10px; background-color: rgba(".random_int(0,225).", ".random_int(0,255).",".random_int(0,255).",".rand().");\">";//intervalo aleatorio de color del rojo, verde y azul y opacidad (alpha), al que se refiere rand(), que genera una opacidad aleatoria
            echo "<h1>".utf8_encode($cliente->nombre)."</h1>"; //aquí no hay que poner $this->producto porque es variable local
            echo "<p>".$cliente->apellido."</p>";
            echo "<p>".$cliente->direccion."</p>";
            echo "<p>".$cliente->poblacion."</p>"; //utf8_encode para que nos aparezcan las tildes en el texto
            echo "<p>".$cliente->codigoPostal."</p>";
            echo "<p>".$cliente->telefono."</p>";
            echo "<p>".$cliente->email."</p>";
            echo "</div>";
            
        }
    }
    public function insertarCliente(){
        $nombre = ;  //habría que crear un formulario en html para rellenar, pero vamos a introducir directamente los datos para ver cómo funciona
        $apellido = ;
        $direccion = ;
        $poblacion = ;
        $codigoPostal = ;
        $telefono = ;
        $email = ;  //aunque sea un valor numérico le ponemos comillas para evitar problemas de interferencias en los lenguajes
        

        $consulta = "INSERT INTO tablaclientes VALUES (\"$nombre\", \"$apellido\", \"$direccion\", \"$poblacion\", \"$codigoPostal\", \"$telefono\", \"$email\")";

        $resultado = $this->conexion->query($consulta);  //lanzamos la consulta

        if(!$resultado){    // si $resultado es falso (!) le pedimos que nos muestre el error
            echo $this->conexion->error;
        }

    }
}

?>