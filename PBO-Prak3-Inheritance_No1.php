<!--- Aini Azzah_21091397006 --->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="no1.css">
    <title>Praktikum 3 PBO Inheritance No. 1</title>
</head>
<body>
    <?php

class Tabungan{
    protected $saldo;
}

//Pengambilan Saldo
class PengambilanUang extends Tabungan{
    private $proteksi;

    public function __construct($saldo)
    {
        $this->saldo=$saldo;
        $this->proteksi = 1000;
    }

    public function getSaldo(){
        return "Uang yang ditabung : " . $this->saldo . "<br> Uang yang diproteksi : " . $this->proteksi;
    } 

    public function ambilUang($jumlah){
        if($jumlah == 4500){
            return "Uang yang akan diambil : " . $jumlah . " false <br> Saldo sekarang : " . $this->saldo;
        }else{
            return "Uang yang akan diambil : " . $jumlah . " true <br> Saldo sekarang : " . $this->saldo -= $jumlah;
        }       
    }
}

$tabungan = new PengambilanUang(5000);
echo $tabungan->getSaldo();
echo "<br> ----------------------------------------- <br>";
echo $tabungan->ambilUang(4500);
echo "<br> ----------------------------------------- <br>";
echo $tabungan->ambilUang(2500);
</body>
</html>