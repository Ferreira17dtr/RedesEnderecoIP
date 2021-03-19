<?php


$box1=$_GET['valor1'];
$box2=$_GET['valor2'];
$box3=$_GET['valor3'];
$box4=$_GET['valor4'];


	if($box1==127)

	{
		echo "Endereço reservado a loopback ou localhost";
		echo "<br>";
		echo "IP Reservado";
		exit;
	}

	elseif($box1>=1 && $box1<=126 && $box2<=255 && $box3<=255 && $box4<=254)
	{
		echo "Classe A";
	}
	elseif($box1>=128 && $box1<=191 && $box2<=255 && $box3<=255 && $box4<=254)
	{
		echo "Classe B";
	}
	elseif($box1>=192 && $box1<=223 && $box2<=255 && $box3<=255 && $box4<=254)
	{
		echo "Classe C";
	}
	elseif($box1>=224 && $box1<=239 && $box2<=255 && $box3<=255 && $box4<=254)
	{
		echo "Classe D";
	}
	elseif($box1>=240 && $box1<=254 && $box2<=255 && $box3<=255 && $box4<=254)
	{
		echo "Classe E";
	}
	else
	{
		echo "Indique um IP publico entre 0.0.0.0 e 255.255.255.255";		
	}

	echo "<br>";
	
	if($box1==10)
	{
		echo "IP Privado";
	}
	elseif($box1==172 && ($box2>=16 && $box2<=31))
	{
		echo "IP Privado";
	}
	elseif($box1==192 && $box2==168 && ($box3>0 && $box3<=255))
	{
		echo "IP Privado";
	}
	elseif($box1==0)
	{
		echo "IP Inválido";
	}
	elseif($box1==128 && $box2==0)
	{
		echo "IP Reservado";
	}
	elseif($box1==191 && $box2==255)
	{
		echo "IP Reservado";
	}
	elseif($box1==192 && $box2==0 && $box3==0)
	{
		echo "IP Reservado";
	}
	elseif($box1==223 && $box2==255 && $box3==255)
	{
		echo "IP Reservado";
	}
	elseif($box1>=224 && $box1<=239)
	{
		echo "IP Reservado";
	}
	elseif($box1>=240 && $box1<=255)
	{
		echo "IP Reservado";
	}
	elseif($box1==255)
	{
		echo "IP Inválido";
	}
	elseif($box2==0 && $box3==0 && $box4==0)
	{
		echo "IP Inválido";
	}
	elseif($box3==0 && $box4==0)
	{
		echo "IP Inválido";
	}
	elseif($box4==0 && $box4==255)
	{
		echo "IP Inválido";
	}
	else
	{
		echo "IP publico";
	}

?>