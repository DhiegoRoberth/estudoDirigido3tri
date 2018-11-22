<?php

include('funcionario.php');

try{
	$data = new Data(30,10,2008);

} catch(Exception $e){

	echo $e->getMessage();
	exit();
}

$funcionario=new Funcionario();
$funcionario->nome='Mateus';
$funcionario->departamento='Contabilidade';
$funcionario->salario=2500;

$funcionario->informarData($data);

$funcionario->CPF='129.666.157-69';
$calculoGanhoAnual=$funcionario->calculoGanhoAnual();

$funcionario2=new Funcionario();
$funcionario2->nome='Marcos';
$funcionario2->departamento='Administrção';
$funcionario2->salario=2800;

$funcionario2->informarData(new Data(20,05,2000));

$funcionario2->CPF='530.785.123-78';
$calculoGanhoAnual2=$funcionario2->calculoGanhoAnual();



echo"<pre>";
echo"Testando funcionario1 \n";

$funcionario->mostra();


echo"\n Testando funcionario2 \n";
$funcionario2->mostra();