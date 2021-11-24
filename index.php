<?php
	$niver = new DateTime('23.06.2004');
	$dataHoje = new DateTime(date('d.m.y'));
	$diferenca = $dataHoje->diff($niver);
	echo $diferenca->y." anos ".$diferenca->m." meses ".$diferenca->d." dias.";
	echo "<hr>";	
	
	// diferenças entre datas
	$data1 = new DateTime('2004-07-30');
	$data2 = new DateTime('2021-11-17');
	$intervalo = $data1->diff($data2);
	echo $intervalo->format('%R%a dias');
	
	echo "<hr>";	
	// função format()
	$data = new DateTime();
	echo $data->format('d-m-Y H:i:s');
	echo "<br>";
	$data = new DateTime('+1 month');
	echo $data->format('d-m-Y H:i:s');
	echo "<br>";	
	
	echo "<hr>";	
	// função DateTime
	$agora = new DateTime();
	print_r($agora)."<br>";
	echo "<br>";
	$especifica = new DateTime('2021/11/17');
	print_r($especifica)."<br>";
	echo "<br>";
	$proximoMes = new DateTime('+1 month');
	print_r($proximoMes);
	
	echo "<hr>";		
	// função mktime
	$data = mktime(14,30,00, 11, 17, 2021);	
	echo date('d/m/Y', $data)."<br>";
	echo date('d/m/Y h:i',$data)."<br>";
		
	echo "<hr>";
	// função time()
	echo "Hoje é ".date('d/m/Y')."<br>";
	$proximaSemana = time() + (7*24*60*60);
	echo "Próxima semana: ".date('d/m/Y',$proximaSemana)."<br>";
	echo "Próxima semana: ".date('d/m/Y', strtotime('+1 week'))."<br>";
	echo "Próxima semana: ".date('d/m/Y', strtotime('+2 week'))."<br>";
	echo "Próximo mês: ".date('d/m/Y', strtotime('+1 month'))."<br>";
	echo "Próximo mês: ".date('d/m/Y', strtotime('+1 year'))."<br>";
	
	echo "<hr>";
	// funçao date()
	echo date("d/m/Y");
?>