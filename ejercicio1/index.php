<?php 
/**
 * 1.- Crear y rellenar un array de 100 elementos 
 * con valores aleatorios.
 *  Una vez relleno se debe mostrar el array. 
 * Después debes pasarlo por una función que
 *  ordene los valores y vuelva a mostrar el 
 * resultado del array ordenado.
 *  Para ordenar el array vamos a utilizar 
 * el algoritmo de ordenación QuickSort 
 * del que os pongo un par de enlaces: 
 */

$aleatorios = [];

for ($i=0; $i < 100; $i++) { 
    # code...
    $aleatorios[] = rand(0, 2000);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Números generados:</h2>
<ul>
<?php 
foreach ($aleatorios as $numero) {
    # code...
    echo "<li>$numero</li>";
}
?>


</ul>

    
</body>
</html>