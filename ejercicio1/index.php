<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */
 <?php

$num1 =2;
$num2 = 2;
echo "CON FOR";
echo "</br>";
for ($j=$num1; $j<=$num2; $j++){
	echo 'Tabla del '.$j.'<br/>';

	for ($i=1; $i<=10; $i++){
		echo $j.'*'.$i.'='.$j*$i.'<br/>';
	}
	echo '<br/>';	
}
?>

<?php
echo "CON WHILE";
$ciclo1=2;
while($ciclo1<=2)
{
echo "<table border=3>";
$ciclo2=1;
while($ciclo2<=10)
{
$mult=$ciclo1*$ciclo2;
echo "<tr align=center><td>".$ciclo1."</td><td> X </td><td>".$ciclo2."</td><td> = </td><td>".$mult."</td></tr>";
$ciclo2++;
}
echo "</table>";
$ciclo1++;
}
echo "</br>";
?>


<?php
echo "CON DO-WHILE";


?>
 
 
?>