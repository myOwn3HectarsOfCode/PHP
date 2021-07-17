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
	   public $name;
		public  $wiek=3;
	 public  $imiona=array("ziuta", "misiek", "waldemar", "szynkiewicz");
	 public function maszynka()
	{   // it's drawning a integer number  from 0 to 3, because we need randomly name from array $imiona
		$losowanie=rand(0,3);
		 $this->zmienna=$losowanie;
		 return  $this->name=$this->imiona[$losowanie];
		
	 }   //here rand() for 2 values: "dziewczyna"(girl) and "chłopak (boy)
		  public function wybierz_plec()
		  { $r=rand(0,1);
		  if ($r==0){$this->plec="dziewczyna";}
		  else $this->plec="chlopak";
		  }
		
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
	  // class CzarnyKot that inherits from its parent 
	  class CzarnyKot extends Zwierz
	  {
		  public const  KOLOR="czarny";
		public $glaskanie;
		
		  public function mial(){
			  $glaskanie_ =rand(0,1);
			  $this->glaskanie=$glaskanie_;
		  {if ($this->glaskanie==true){echo "Miauczenie ";}
		  else echo"milczenie bo nie głaszczesz";
			  
		  }}
		  
		  //with this part of code bellow, in comments, the __construct() makes the object of type CzarnyKot 
		  //without this blocks of code it makes the object of type Zwierz 
		
		/* function __construct()
		  {
			//$this->kolor = $kolor
			$glaskanie=rand(0,1);
			$this->glaskanie = $glaskanie;
			$this->maszynka();
			echo "</br> Jestem CzarnyKot, wynik metody ";
			echo 'mial($glaskanie)'; 
			echo " w moim przypadku to: </br>";
			echo $this->mial($glaskanie);
			$glaskanie;
			$this->wybierz_plec();
		  }*/
	  }
	  
	  //first object CzarnyKot
	  $cat = new CzarnyKot();
	echo " Lubię ";
	
	echo $cat->mial($cat->glaskanie);
	echo"; zawsze ja i moi bracia mamy kolor: ".CzarnyKot::KOLOR;
	echo"  </br>Płeć: ".$cat->plec." Imie: ".$cat->name." Wiek: ".$cat->wiek."</td></tr>";
	//	second  
	echo " <tr><td>";
		  $cat2 = new CzarnyKot();
	
	echo "Lubię  ";
	echo $cat2->mial($cat2->glaskanie);
	echo"; zawsze ja i moi bracia mamy kolor ".CzarnyKot::KOLOR;
	echo"  </br>Płeć: ".$cat2->plec." Imie: ".$cat2->name." Wiek: ".$cat2->wiek."</br>";
	
	  echo "</td></tr><tr><td>";
	  echo var_dump($cat)."</tr></td>";
	  	  ?>
   </td>
</table>
</body>
</html>

