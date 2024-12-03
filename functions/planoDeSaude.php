<?php
class Plano{
	private $num_de_consultas;
	private $mensal;
	private $val_consulta;

	function set_consultas($num_de_consultas){
		$this->num_de_consultas = $num_de_consultas;
	}
	function get_consultas(){
		return $this->num_de_consultas;
	}
	function set_mensal($mensalidade){
		$this->mensal = $mensalidade;
	}
	function get_mensal(){
		return $this->mensal;
	}
	function set_valor_consulta($val_consulta){
		$this->val_consulta = $val_consulta;
	}
	function get_valor_consulta(){
		return $this->val_consulta;
	}
}
$num_consultas = new Plano();
$num_consultas->set_consultas(5);
$numConsultas = $num_consultas->get_consultas();

$val_consulta = new Plano();
$val_consulta->set_valor_consulta(20);
$valConsultas = $val_consulta->get_valor_consulta();

$mensalidade = new Plano();
$mensalidade->set_mensal(140);
$valMensalidade = $mensalidade->get_mensal();
$total = $valMensalidade + ($valConsultas*$numConsultas);

echo 'A MENSALIDADE DO PLANO DE SAÚDE É: <b>R$ '.number_format($valMensalidade, 2, ',', '.')."</b><br />";
echo 'O VALOR DAS CONSULTAS É: <b>R$ '.number_format($valConsultas, 2, ',', '.')."</b><br />";
echo 'NÚMERO DE CONSULTAS REQUISITADAS: <b>'.$numConsultas."</b><br />";
echo "<br />O TOTAL A PAGAR = <b>R$ ".number_format($total, 2, ',', '.')."</b>";

