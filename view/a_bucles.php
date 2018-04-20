<?php
define('TITULO1',"BUCLE FOR");

$a=2;
$a++;
echo $a;

echo "<br><b>".TITULO1."</b>";

for ($i=1; $i <10 ; $i++) { 
	echo "<br>";
	echo $i;
}

$i=1;
$f=20;
echo '<b><br>BUCLE WHILE<br></b>';
while ($i <= $f) {
	echo '<b>'.$i.'</b>';
	echo '<br>';
	$i++;
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table style="border: 1px solid #000">
		<tbody>
		<?php
		echo '<b><br>Bucle FOR en Tabla<br><br>';
		for($z=1; $z<=10; $z++){
			echo ('<tr>');
			echo ('<td style="border:1px solid black">'.$z.'<td>');
			echo ('<td style="border:1px solid black">'.$z.'<td>');
			echo ('<td style="border:1px solid black">'.$z.'<td>');
			echo ('<td style="border:1px solid black">'.$z.'<td>');
			echo ('</tr>');
		}	
		?>
		</tbody>
		
	</table>
</body>
</html>

