<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $codigo = uniqid();
    $no = uniqid();
    $data = [
        'Codigo' => $codigo,
        'No' => $no,
        'Vehiculo' => $_POST['vehiculo'],
        'Marca' => $_POST['marca'],
        'Fecha' => $_POST['fecha'],
        'Salida' => $_POST['salida'],
        'Llegada' => $_POST['llegada'],
        'Partida' => $_POST['partida'],
        'Entrada' => $_POST['entrada'],
        'Universidad' => $_POST['universidad'],
        'Clima' => $_POST['clima'],
        'Resultado' => $_POST['resultado'],
        'Descripción' => $_POST['descripcion']
    ];

    $file = 'registros.txt';
    $line = implode("\t", $data) . PHP_EOL;

    file_put_contents($file, $line, FILE_APPEND | LOCK_EX);

    echo "Datos guardados exitosamente.";
} else {
    echo "Método no permitido.";
}
