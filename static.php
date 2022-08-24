 <?php
 	$ano = 2022;

 	function exibir($ano = 2022){
 		;
		STATIC $ano; //definindo variável estática
		$ano++;
		echo "<br/>".$ano;
	}
echo exibir();
echo exibir();
echo exibir();
echo "<br/>".$ano;

  ?>