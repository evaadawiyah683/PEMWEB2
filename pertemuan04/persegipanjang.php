<?php
class PersegiPanjang{
    public $panjang;
    public $lebar;
 
    public  function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function hitungluas(){
        return $this->panjang  * $this->lebar;
        }

        public function hitungkeliling(){
            return 2 * ($this->panjang + $this->lebar);
            }

}
$persegi = new PersegiPanjang(5, 6);
echo "Luas Persegi Panjang : " . $persegi->hitungluas() . "<br>";
echo "Keliling Persegi Panjang : " . $persegi->hitungkeliling();
?>
