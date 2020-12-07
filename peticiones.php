<?php
    /** 
    *    Maestro: Octavio Aguirre Lozano
    *    Materia: Computación en el Servidor Web
    *    Tarea: Desarrollo web avanzado
    *    Creado por: Leonardo Jovanny Razón Rios
    *    Fecha de creación: 05/dic/2020
    *    Ultima Modificación: 06/dic/2020
    *    Última modificación por: Leonardo Jovanny Razón Rios
    */

    // La variable $peticion contiene la opción del ejemplo que se mostrará, en caso de no existir o estar vaciá, está se igualara a 0
    $peticion = (isset($_POST['peticion']) && !empty($_POST['peticion']))? $_POST['peticion']: 0;
    
    // La variable $respuesta contendrá el resultado que se devolverá a la petición hecha
    $respuesta = '';

    /**
     * Estructura de control Switch que controla que se mostrará para el ejemplo seleccionado y que función se realizará para su uso
     * Funciona evaluando la variable $peticion y según el caso, ingresando en la variable $resultado la respuesta a la petición
     * En los casos numéricos, lo que da como resultado es el template que se usará para mostrar al usuario
     * En los casos alfanuméricos, lo que hace es ejecutar las funcionalidades que se tienen para cada uno de ellos
     * El default, ingresará a la variable $resultado un H3 que mostrará un texto al usuario
    */
    switch ($peticion) {
        case 1:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo If-Else.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label for=\"numeroIf\">Ingrese un número (entre 1 y 100) <br>y presione el botón \"Revisar\" para saber si es par o impar:</label><br>
                <input type=\"text\" id=\"numeroIf\" class=\"otrasVariables\" maxlength=\"3\"><br>
                <input type=\"hidden\" id=\"peticionIf\" value=\"funcionIfElse\"><br>
                <input type=\"button\" class=\"verEjemplo\"  onclick=\"verEjemplo('peticionIf')\" value=\"Revisar\">
                <h3 id=\"respuesta\">¿Es número par?</h3>
            </div>
            ";
            break;
        case 2:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo Switch.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label for=\"numeroIf\">Ingrese dos número (entre 1 y 100), seleccione una operacion<br>y presione el botón \"Revisar\" para saber si es par o impar:</label><br>
                <select id=\"operacion\" class=\"otrasVariables\" onchange=\"cambiarSignoSwitch()\">
                    <option value=\"0\">Operaciones</option>
                    <option value=\"1\">Sumar</option>
                    <option value=\"2\">Restar</option>
                    <option value=\"3\">Multiplicar</option>
                    <option value=\"4\">Dividir</option>
                </select>
                <input type=\"text\" id=\"numeroSwitch1\" class=\"otrasVariables\" maxlength=\"3\"><span id=\"signoSwitch\"> ?</span>
                <input type=\"text\" id=\"numeroSwitch2\" class=\"otrasVariables\" maxlength=\"3\"><br>
                <input type=\"hidden\" id=\"peticionSwitch\" value=\"funcionSwitch\"><br>
                <input type=\"button\" class=\"verEjemplo\"  onclick=\"verEjemplo('peticionSwitch')\" value=\"Revisar\">
                <h3 id=\"respuesta\">¿Es número par?</h3>
            </div>
            ";
            break;
        case 3:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo While.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label for=\"numeroIf\">Ingrese un número (entre 0 y 10)<br>y presione el botón \"Dibujar\" para mostrar los diamantes:</label><br>
                <input type=\"text\" id=\"numeroWhile\" class=\"otrasVariables\" maxlength=\"2\"><br>
                <input type=\"hidden\" id=\"peticionWhile\" value=\"funcionWhile\"><br>
                <input type=\"button\" class=\"verEjemplo\"  onclick=\"verEjemplo('peticionWhile')\" value=\"Dibujar\">
                <h3 id=\"respuesta\">Diamantes = </h3>
            </div>
            ";
            break;
        case 4:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo Do-While.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label for=\"numeroIf\">Ingrese un número (entre 0 y 10) y presione el botón \"Dibujar\" para mostrar los diamantes <br> 
                (Al ser do-while mostrará 1 diamante aunque se ingrese 0):</label><br>
                <input type=\"text\" id=\"numeroDoWhile\" class=\"otrasVariables\" maxlength=\"2\"><br>
                <input type=\"hidden\" id=\"peticionDoWhile\" value=\"funcionDoWhile\"><br>
                <input type=\"button\" class=\"verEjemplo\"  onclick=\"verEjemplo('peticionDoWhile')\" value=\"Dibujar\">
                <h3 id=\"respuesta\">Diamantes = </h3>
            </div>
            ";
            break;
        case 5:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo For.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label for=\"numeroIf\">Ingrese un número (entre 1 y 10) y presione el botón \"Obtener Secuencia\"<br> para mostrar la secuencia de incremento duplicado:</label><br>
                <input type=\"text\" id=\"numeroFor\" class=\"otrasVariables\" maxlength=\"2\"><br>
                <input type=\"hidden\" id=\"peticionFor\" value=\"funcionFor\"><br>
                <input type=\"button\" class=\"verEjemplo\"  onclick=\"verEjemplo('peticionFor')\" value=\"Obtener Secuencia\">
                <h3 id=\"respuesta\">Secuencia = </h3>
            </div>
            ";
            break;
        case 6:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo For-Each.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label>Presione el botón \"Obtener Datos\" para mostrar los índices del arreglo:<br>
                ['Manzana','Pera','Fresa','Mango']</label><br>
                <input type=\"hidden\" id=\"peticionForEach\" value=\"funcionForEach\"><br>
                <input type=\"button\" class=\"verEjemplo\"  onclick=\"verEjemplo('peticionForEach')\" value=\"Obtener Datos\">
                <h3 id=\"respuesta\">Resultado = </h3>
            </div>
            ";
            break;
        case 7:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo de Función.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label>Presione el botón \"Obtener número de caracteres\" para mostrar la cantidad de caracteres:</label><br>
                <textarea id=\"textoFuncion\" class=\"otrasVariables\" rows=\"2\" cols=\"75\" placeHolder=\"Ingrese algún texto\"></textarea><br>
                <input type=\"hidden\" id=\"peticionFuncion\" value=\"funcion\"><br>
                <input type=\"button\" class=\"verEjemplo\"  onclick=\"verEjemplo('peticionFuncion')\" value=\"Obtener número de caracteres\">
                <h3 id=\"respuesta\">Número de caracteres = ?</h3>
            </div>
            ";
            break;
        case 8:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo de Array.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label>Seleccione elementos y presione el botón \"Ver Array\" para mostrar<br> como seria la estructura simple del array en el código:</label><br>
                <input type=\"checkbox\" id=\"lenguaje1\" class=\"otrasVariables\" value=\"Php\">
                <label for=\"lenguaje1\"> Php</label>
                <input type=\"checkbox\" id=\"lenguaje2\" class=\"otrasVariables\" value=\"Javascript\">
                <label for=\"lenguaje2\"> Javascript</label>
                <input type=\"checkbox\" id=\"lenguaje3\" class=\"otrasVariables\" value=\"Python\">
                <label for=\"lenguaje3\"> Python</label>
                <input type=\"hidden\" id=\"peticionArray\" value=\"funcionArray\"><br>
                <input type=\"button\" class=\"verEjemplo\"  onclick=\"verEjemplo('peticionArray')\" value=\"Ver Array\">
                <h3 id=\"respuesta\">Estructura del array = ?</h3>
            </div>
            ";
            break;
        case 9:
            // Se añade a la variable respuesta el template del ejemplo elegido según el case
            $respuesta = "
            <h2 class=\"subtitulo\">Ejemplo de cadena.</h2>
            <div style=\"text-align: center;font-size: 18px;\">
                <label>Ingrese algún texto, seleccione una funcion y presione el botón \"Ver resultado\" para mostrar<br> el resultado de la funcion del texto ingresado:</label><br>
                <select id=\"funcionSelect\" class=\"otrasVariables\" onchange=\"explicar()\">
                    <option value=\"0\">Funciones</option>
                    <option value=\"1\">str_repeat</option>
                    <option value=\"2\">str_replace</option>
                    <option value=\"3\">strtolower</option>
                    <option value=\"4\">strtoupper</option>
                    <option value=\"5\">ucfirst</option>
                    <option value=\"6\">ucwords</option>
                </select>
                <input type=\"text\" id=\"textoCadena\" class=\"otrasVariables\" maxlength=\"40\" style=\"width: 560px;\"><br>
                <input type=\"hidden\" id=\"peticionCadena\" value=\"funcionCadena\"><br>
                <span id=\"explicacion\">Explicación breve del resultado según los parámetros predefinidos.</span>
                <input type=\"button\" class=\"verEjemplo\" onclick=\"verEjemplo('peticionCadena')\" value=\"Ver resultado\">
                <h3 id=\"respuesta\">Resultado = ?</h3>
            </div>
            ";
            break;
        case 'funcionIfElse':
            // La variable $numero, contiene el valor ingresado por el usuario y se definirá como 'Sin Numero' en caso de no existir o estar vacía
            $numero = (isset($_POST['numeroIf']) && !empty($_POST['numeroIf']))? $_POST['numeroIf']: 'Sin Numero';
            // Estructura de control If, que evaluará las condiciones de la variable $numero
            if($numero != "Sin Numero" && is_numeric($numero) && $numero > 0 && $numero < 101){
                // Estructura de control If, que calcula el modulo del valor en la variable $numero y verifica si el resultado es igual a 0
                if($numero % 2 == 0){
                    $respuesta = "<h3 id=\"respuesta\">El numero ingresado es Par.</h3>";
                }else{
                    $respuesta = "<h3 id=\"respuesta\">El numero ingresado es Impar.</h3>";
                }
            }else{
                $respuesta = "<h3 id=\"respuesta\">No se ha ingresado un número válido.</h3>";
            }
            break;
        case 'funcionSwitch':
            /* Las variables $operacion, $numeroSwitch1 y $numeroSwitch2
            contienen valores ingresados por el usuario y se definirá como 0 ó 'Sin Numero' según sea el caso, de no existir o estar vacías */
            $operacion = (isset($_POST['operacion']) && !empty($_POST['operacion']))? $_POST['operacion']: 0;
            $numeroSwitch1 = (isset($_POST['numeroSwitch1']) && !empty($_POST['numeroSwitch1']))? $_POST['numeroSwitch1']: 'Sin Numero';
            $numeroSwitch2 = (isset($_POST['numeroSwitch2']) && !empty($_POST['numeroSwitch2']))? $_POST['numeroSwitch2']: 'Sin Numero';
            // Estructura de control If, que evalúa las condiciones de las variables $numeroSwitch1 y $numeroSwitch2
            if($numeroSwitch1 != "Sin Numero" && is_numeric($numeroSwitch1) && $numeroSwitch1 > 0 && $numeroSwitch1 < 101 && 
                $numeroSwitch2 != "Sin Numero" && is_numeric($numeroSwitch2) && $numeroSwitch2 > 0 && $numeroSwitch2 < 101){
                /* Estructura de control Switch, que evalúa la variable $operacion y, según sea el caso, se realiza la operacion pertinente
                y se agrega a la variable $respuesta */
                switch ($operacion) {
                    case 1:
                        $resultado = $numeroSwitch1 + $numeroSwitch2;
                        $respuesta = "<h3 id=\"respuesta\">El resultado de sumar $numeroSwitch1 y $numeroSwitch2 es: <span>$resultado</span></h3>";
                        break;
                    case 2:
                        $resultado = $numeroSwitch1 - $numeroSwitch2;
                        $respuesta = "<h3 id=\"respuesta\">El resultado de restar $numeroSwitch1 y $numeroSwitch2 es: <span>$resultado</span></h3>";
                        break;
                    case 3:
                        $resultado = $numeroSwitch1 * $numeroSwitch2;
                        $respuesta = "<h3 id=\"respuesta\">El resultado de multiplicar $numeroSwitch1 y $numeroSwitch2 es: <span>$resultado</span></h3>";
                        break;
                    case 4:
                        $resultado = $numeroSwitch1 / $numeroSwitch2;
                        $respuesta = "<h3 id=\"respuesta\">El resultado de dividir $numeroSwitch1 y $numeroSwitch2 es: <span>$resultado</span></h3>";
                        break;
                    default:
                        $respuesta = "<h3 id=\"respuesta\">No se ha ingresado una operación.</h3>";
                        break;
                }
            }else{
                $respuesta = "<h3 id=\"respuesta\">No se ha ingresado un número válido.</h3>";
            }
            break;
        case 'funcionWhile':
            // La variable $numero, contiene el valor ingresado por el usuario y se definirá como 'Sin Numero' en caso de no existir o estar vacía
            $numero = (isset($_POST['numeroWhile']))? $_POST['numeroWhile']: 'Sin Numero';
            // Estructura de control If, que evaluará las condiciones de la variable $numero
            if($numero != "Sin Numero" && is_numeric($numero) && $numero >= 0 && $numero < 11){
                $respuesta = "<h3 id=\"respuesta\">Diamantes = <span>";
                /* Estructura de control While, que evalúa la variable $numero */
                while ($numero > 0) {
                    // Agrega a la variable $respuesta el símbolo de diamante el cual se le proporciona en código html -> &#9830; 
                    $respuesta .= "&#9830;";
                    // Una vez se entra al ciclo del while, se disminuye el valor de la variable $numero, para controlar el número de veces de ejecución del while
                    $numero--;
                }
                $respuesta .= "</span></h3>";
            }else{
                $respuesta = "<h3 id=\"respuesta\">No se ha ingresado un número válido.</h3>";
            }
            break;
        case 'funcionDoWhile':
            // La variable $numero, contiene el valor ingresado por el usuario y se definirá como 'Sin Numero' en caso de no existir o estar vacía
            $numero = (isset($_POST['numeroDoWhile']))? $_POST['numeroDoWhile']: 'Sin Numero';
            // Estructura de control If, que evaluará las condiciones de la variable $numero
            if($numero != "Sin Numero" && is_numeric($numero) && $numero >= 0 && $numero < 11){
                $respuesta = "<h3 id=\"respuesta\">Diamantes = ";
                /* Estructura de control Do While, que evalúa la variable $numero, empezando una vez que se termina de correr el primer ciclo */
                do {
                    $respuesta .= "&#9830;";
                    // Una vez se entra al ciclo del do while, se disminuye el valor de la variable $numero, para controlar el número de veces de ejecución del ciclo
                    $numero--;
                } while ($numero > 0);
                $respuesta .= "</h3>";
            }else{
                $respuesta = "<h3 id=\"respuesta\">No se ha ingresado un número válido.</h3>";
            }
            break;
        case 'funcionFor':
            // La variable $numero, contiene el valor ingresado por el usuario y se definirá como 'Sin Numero' en caso de no existir o estar vacía
            $numero = (isset($_POST['numeroFor']) && !empty($_POST['numeroFor']))? $_POST['numeroFor']: 'Sin Numero';
            // Estructura de control If, que evaluará las condiciones de la variable $numero
            if($numero != "Sin Numero" && is_numeric($numero) && $numero > 0 && $numero < 11){
                // Se agrega a la variable $respuesta el valor de la variable $numero, para que también se muestre el numero ingresado por el usuario
                $respuesta = "<h3 id=\"respuesta\">Secuencia = <span>" . $numero;
                /* Estructura de control For, que se ejecuta 10 veces, teniendo en cuentas que se inicia en 0 y termina en 8 debido al valor respectivo de 
                    la variable declarada como $i */
                for ($i=0; $i < 9 ; $i++) { 
                    // Multiplica el valor de la variable $numero por 2 para luego añadirlo a la variable $respuesta
                    $numero = $numero * 2;
                    $respuesta .= " - " . $numero;
                }
                $respuesta .= "</span></h3>";
            }else{
                $respuesta = "<h3 id=\"respuesta\">No se ha ingresado un número válido.</h3>";
            }
            break;
        case 'funcionForEach':
            // Se crea la variable $arreglo y se le inicia como un array con valores predefinidos
            $arreglo = ['Manzana','Pera','Fresa','Mango'];
            $respuesta = "<h3 id=\"respuesta\">Resultado = <span>";
            /* Estructura de control For Each, que se ejecuta tantas veces como elementos tenga el array $arreglo, 
                destacando que tendremos la llave y el valor de cada elemento que se itera. En cada recorrido que hace, agrega al contenido de la variable $respuesta, 
                la llave y el valor del elemento del array que en ese momento se tiene */
            foreach ($arreglo as $llave => $valor) {
                $respuesta .= "El índice de " . $valor . " es: " . $llave . " -";
            }
            $respuesta = trim($respuesta, " -");
            $respuesta .= "</span></h3>";
            break;
        case 'funcion':
            // La variable $texto, contiene el valor ingresado por el usuario y se definirá como vacía ('') en caso de no existir
            $texto = (isset($_POST['textoFuncion']))? $_POST['textoFuncion']: '';
            $respuesta = "<h3 id=\"respuesta\">Número de caracteres = <span>";
            /* Se declara la variable $cantidad y se le asigna como valor, el resultado de el llamado a la funcion
                obtenerNumeroDeCaracteres(), pasando como parametro a ésta, la variable $texto  */
            $cantidad = obtenerNumeroDeCaracteres($texto);
            // Se añade la variable $cantidad a la variable $respuesta
            $respuesta .= $cantidad . "</span></h3>";
            break;
        case 'funcionArray':
            // Las variables $lenguaje1, $lenguaje2 y $lenguaje3, son recibidas de parte del usuario y se establecen como vacías ('') en caso de no existir
            $lenguaje1 = (isset($_POST['lenguaje1']))? $_POST['lenguaje1']: '';
            $lenguaje2 = (isset($_POST['lenguaje2']))? $_POST['lenguaje2']: '';
            $lenguaje3 = (isset($_POST['lenguaje3']))? $_POST['lenguaje3']: '';
            // Se declara la variable $arreglo y se inicia como un arreglo vacío
            $arreglo = array();
            // Estructuras de control If, que evalúan si las variables $lenguaje1, $lenguaje2 y $lenguaje3, contienen algo y, de ser asi, agregan el valor al array $arreglo
            if($lenguaje1 != ''){
                array_push($arreglo,$lenguaje1);
            }
            if($lenguaje2 != ''){
                array_push($arreglo,$lenguaje2);
            }
            if($lenguaje3 != ''){
                array_push($arreglo,$lenguaje3);
            }
            $respuesta = "<h3 id=\"respuesta\">Estructura del array = <span>[";
            // Se utiliza la estructura de control ForEach, para acceder a cada elemento del array $arreglo, obteniendo su llave y su valor
            foreach ($arreglo as $llave => $valor) {
                // Estructura de control If, la cual evalúa la llave de el elemento y según sea el caso añade contenido a $respuesta junto con el valor del elemento
                if($llave == 0){
                    $respuesta .= "\"" . $valor . "\"";
                }else{
                    $respuesta .= ",\"" . $valor . "\"";
                }
            }
            $respuesta .= "]</span></h3>";
            break;
        case 'funcionCadena':
            // La variable $funcionSelect, contiene el valor para la funcion elegida por el usuario, en caso de no existir, le establece el valor de 0
            $funcionSelect = (isset($_POST['funcionSelect']))? $_POST['funcionSelect']: 0;
            // La variable $textoCadena, contiene el texto ingresado por el usuario, en caso de no existir, le establece como vacío ('')
            $textoCadena = (isset($_POST['textoCadena']))? $_POST['textoCadena']: '';
            // Estructura de control If, que evaluará las condiciones de las variables $funcionSelect y $textoCadena
            if($funcionSelect > 0 && !empty($textoCadena)){
                /* Se da como valor a la variable $resultado, el valor devuelto de hacer el llamado a la función 
                    funcionCadena(), pasando como parámetros las variables $funcionSelect y $textoCadena */
                $resultado = funcionCadena($funcionSelect, $textoCadena);
                $respuesta = "<h3 id=\"respuesta\">$resultado</h3>";
            }else{
                $respuesta = "<h3 id=\"respuesta\">No se ha ingresado una función válida o el texto esta vacío.</h3>";
            }
            break;
        default:
            $respuesta = "<h3>Aquí se cargarán los ejemplos.</h3>";
            break;
    }

    /**
     * Función para obtener el numero de caracteres en un texto
     *
     * @param [text] $texto
     * @return int
     */
    function obtenerNumeroDeCaracteres($texto){
        $numeroDeCaracteres = strlen($texto);
        return $numeroDeCaracteres;
    }

    /**
     * Función para ejecutar "funciones de cadena" 
     * evaluando en un switch la petición realizada
     *
     * @param [int] $funcion
     * @param [text] $texto
     * @return text
     */
    function funcionCadena($funcion, $texto){
        $resultado = '';
        switch ($funcion) {
            case 1:
                $resultado = str_repeat($texto, 2);
                break;
            case 2:
                $resultado = str_replace("a", "*", $texto);
                break;
            case 3:
                $resultado = strtolower($texto);
                break;
            case 4:
                $resultado = strtoupper($texto);
                break;
            case 5:
                $resultado = ucfirst($texto);
                break;
            case 6:
                $resultado = ucwords($texto);
                break;
        }
        return $resultado;
    }

    // Respuesta final para el usuario
    echo $respuesta;
?>