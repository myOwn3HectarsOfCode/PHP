<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<style>
	tr,td { border: 2px solid black; }
	</style>
	
<table>
   <tr>
      <td><?php
	  class Zwierz
	  {public $plec;
	  public $zmienna;
	  public $losowanie;
	 public  $imiona=array("ziuta", "misiek", "waldemar", "szynkiewicz");
	 public function maszynka()
	{
		$losowanie=rand(0,3);
		 $this->zmienna=$losowanie;
		 $this->name=$this->imiona[$losowanie];
	 }
		  public function wybierz_plec()
		  { $r=rand(0,1);
		  if ($r==0){$this->plec="dziewczyna";}
		  else $this->plec="chlopak";}
		 public $name;
		public  $wiek=3;
		  public function przywitaj()
		  {
			  echo "</br>Hi!!!</br>";
		  }
		  public function __construct()
		  {
			  echo "</br> stworzono zwierzątko</br>";
			  $this->wybierz_plec();
			  
			  $this->maszynka();
			
		  }
	  }
	  class CzarnyKot extends Zwierz
	  {
		  public const  KOLOR="czarny";
		public $glaskanie;
		  public function mial($glaskanie){
		  {if ($glaskanie==true){echo "Miauczenie   ";}
		  else echo"milczenie bo nie głaszczesz";
			  
		  }}
		 /*function __construct($name)
		  {
			//$this->kolor = $kolor
			$glaskanie=rand(0,1);
			$this->glaskanie = $glaskanie;
			$this->name = $name;
			echo "</br> Jestem CzarnyKot, wynik metody ";
			echo 'mial($glaskanie)'; 
			echo " w moim przypadku to: </br>";
			//$this->mial($glaskanie);
			echo $this->mial($glaskanie);
			$glaskanie;
			$this->wybierz_plec();
		  }*/
	  }
	  $cat = new CzarnyKot();
	echo " Lubię  ";
	
	echo $cat->mial($cat->glaskanie);
	echo"; zawsze ja i moi bracia mamy kolor ".CzarnyKot::KOLOR;
	echo"  </br>Płeć: ".$cat->plec." Imie: ".$cat->name." Wiek: ".$cat->wiek."</br>";
		  $cat2 = new CzarnyKot();
	echo " Lubię  ";
	
	echo $cat2->mial($cat2->glaskanie);
	echo"; zawsze ja i moi bracia mamy kolor ".CzarnyKot::KOLOR;
	echo"  </br>Płeć: ".$cat2->plec." Imie: ".$cat2->name." Wiek: ".$cat2->wiek."</br>";
	
	  	  ?>
	  <?php phpinfo(); ?>
	  </td> 
   </tr>
</table>
</body>
</html>
