<?php
Function Allum()
{
	$line = readline("$ ./ allum1 :");
	$Allumette = $line;

	$allum = $Allumette;
	while ( $allum > 0) 
	{
		echo "|";
		$allum --;


	}
	echo"\n";
	echo"Your turn :";
	echo "\n";
	$suprimer = readline("Matches : ");
	echo "Player removed " . $suprimer . " match(es) ";
	echo "\n";

	$Allumette = $Allumette - $suprimer; 


	while ( $Allumette > 0) 
	{
		$allum = $Allumette;


		while ( $allum > 0) {
			echo "|";
			$allum --;

		}
		echo "\n";
		echo "AI's turn...";
		echo "\n";

		if ($Allumette > 0) 
		{
			$allum = $Allumette;
			$nbr = $Allumette % 4;
			switch ($nbr) {
				case 3:
				$Allumette = $Allumette -2;

				echo "AI removed 2 match(es) \n";
				break;
				case 2:
				$Allumette = $Allumette -1;
				echo "AI removed 1 match(es) \n";
				break;
				case 1:
				$Allumette = $Allumette -1;
				echo "AI removed 1 match(es) \n";
				break;
				case 0:
				$Allumette = $Allumette -3;
				echo "AI removed 3 match(es) \n";
				break;
			}

			$allum = $Allumette;
			while ( $allum > 0) 
			{

				echo "|";

				$allum --;

			}
			echo "\n";
		}
		else
		{
			($allum == 1) ? "gagné" : "perdu";
		}

		
		$suprimer = readline("Your turn : Matches : ");
		$Allumette = $Allumette - $suprimer;
		echo "Player removed " . $suprimer . " match(es) ";
		echo "\n";

		
	}


}
Allum();
?>