<?php 

require_once "Item.php";
require_once "Objeto.php";
require_once "Pasta.php";
require_once "Documento.php";
require_once "Gaveta.php";
require_once "Armario.php";
require_once "Escritorio.php";

$documento1 = new Documento("Ata de reunião", "Reunião do dia 12/02/2025", "12/02/2025");
$documento2 = new Documento("Falta de água", "Aviso sobre falta de água", "12/02/2025");

$pasta1 = new Pasta("Pasta de contratados", "Currículo de contratados entre 02/2025 e 08/2025", "RH");
$pasta2 = new Pasta("Pasta de demitidos", "Currículo de demitidos entre 02/2025 e 08/2025", "Gerencia");

$objeto1 = new Objeto("Grampeador", "Possui 20 grampos ainda", 0.8);
$objeto2 = new Objeto("Clips", "Um clips ainda não usado", 0.1);

$gaveta1 = new Gaveta([$documento1, $objeto1]);
$gaveta2 = new Gaveta([$pasta1, $objeto2]);
$gaveta3 = new Gaveta([$pasta2, $documento2]);

$armario1 = new Armario([$gaveta1, $gaveta2]);
$armario2 = new Armario([$gaveta3]);

$escritorio = new Escritorio([$armario1, $armario2]);

echo $gaveta1->listarItens();

echo $gaveta2->listarItens();

echo $gaveta3->listarItens();

echo $armario1->listarGavetas();

echo str_repeat("-", 20);

echo $escritorio->auditoria();