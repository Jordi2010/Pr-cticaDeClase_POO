<!--Práctica de clase (aplicación de clase abstracta, herencia y polimorfismo con PHP).
    Asignatura: Programación orientada a objetos I.
    Estudiante: Jordi Haziel Amaya Martínez.-->

<?php
class Animal{
    public function roar(){
        echo "El ";
    }
}

class Gato extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre." miaguea, MIAU!!";
    }
}

class Perro extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre." ladra, wau!";
    }
}

class Vaca extends Animal{
    public $nombre;
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar(){
        echo $this->nombre." le hace MU!!";
    }
}

class Abecedario extends Animal{
    public $letra;
    public function __construct($letra)
    {
        $this->letra=$letra;
    }
    public function roar(){
        echo $this->letra."contiene A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z";
    }
}

function roarAnimal(Animal $animal)
{
    $animal->roar();
}

$gato=new Gato("gato");
$perro=new Perro("perro");
$vaca=new Vaca("vaca");
$abecedario=new Abecedario("abecedario");

//roarAnimal($gato);

if (isset($_POST['gato'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($gato) ?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['perro'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($perro) ?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['vaca'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($vaca) ?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}
else if (isset($_POST['abecedario'])){
    ?>
    <script>
    var msg = new SpeechSynthesisUtterance("<?php roarAnimal($abecedario) ?>");
    window.speechSynthesis.speak(msg);
</script>
<?php
}

?>