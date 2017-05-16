<?php

	class gasolineria
	{
		private $TipoDeGasolina;
		private $Litros;
		private $TotalApagar;
		private $Efectivo;
		private $Cambio;

		function __construct($TipoDeGasolina,$Litros)
		{
	   	 $this->TipoDeGasolina=$TipoDeGasolina;
	   	 $this->Litros=$Litros;
		} 

		function Total()
		{
			if($this->TipoDeGasolina=="Magna")
			{
				$this->TotalApagar = 16.42 * $this->Litros;
				echo "Total de litros vendidos: ".$this->Litros."<br>";
				echo "Su Total a pagar es de: ".$this->TotalApagar."<br>";
			}

			if($this->TipoDeGasolina=="Premium")
			{
				$this->TotalApagar = 16.97 * $this->Litros;
				echo "Total de litros vendidos: ".$this->Litros."<br>";
				echo "Su Total a pagar es de: ".$this->TotalApagar."<br>";
			}	
		}		

		function Pago_Tarjeta()
		{
			echo("Forma de pago: Tarjeta <br>");
			echo "Pago realizado por terminal, fin de la compra";
			$this->Cambio=0;
		}

		function Pago_Efectivo($Efectivo)
		{
			echo("Forma de pago: Efectivo <br>");
			$this->Efectivo=$Efectivo;
			echo("Efectivo recibido: $".$this->Efectivo."<br>");
			$this->Cambio=($this->Efectivo)-($this->TotalApagar);
			
			if($this->Cambio<0)
			{
				echo"El efectivo recibido no es suficiente le faltan: $".($this->Cambio)*-1;	
			}
			if($this->Cambio>=0)
			echo"Su cambio es de: $".$this->Cambio;
		}
	}


echo "Cliente 1 <br>";
$cliente1 = new gasolineria("Magna",10);
$cliente1-> Total();
$cliente1-> Pago_Tarjeta();
echo"<br><br><br>";

echo "Cliente 2 <br>";
$cliente2=new gasolineria("Magna",11);
$cliente2-> Total();
$cliente2-> Pago_Efectivo(500);

echo"<br><br><br>";
echo "Cliente 3 <br>";
$cliente3=new gasolineria("Magna",9);
$cliente3-> Total();
$cliente3-> Pago_Efectivo(100);


?>