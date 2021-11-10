<?php

$ciudad = $_POST['ciudad'];
$empresa = $_POST['empresa'];
$rEmpresa = $_POST['rEmpresa'];
$dRepresentante = $_POST['dRepresentante'];
$empleado = $_POST['empleado'];
$dEmpleado = $_POST['dEmpleado'];

echo "<h1>Contrato lleno</h1>";
echo "<textarea name='texto' disabled='disabled' cols='100' rows='10'>
En la ciudad de [$ciudad], se acuerda entre la Empresa [$empresa] representada por el Sr. [$rEmpresa] en su carácter
de Apoderado, con domicilio en la calle [$dRepresentante] y el Sr. [$empleado], futuro empleado con domicilio en [$dEmpleado]],
celebrar el presente contrato a Plazo Fijo, de acuerdo a la normativa vigente de los artículos 90, 92, 93, 94,
95 y concordantes de la Ley de Contrato de Trabajo No. 20744.";
?>