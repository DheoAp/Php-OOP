<!-- 
static keyword, kita bisa mengakses Property dan Method dalam konteks Class 
tanpa harus membuat object atau intensiasi
-->
<?php 
class ContohStatic{
  public static $angka = 1;

  public static function hallo()
  {
    return "Hallo Kamu. " .self::$angka++." Kali";// untuk mengambil property angka 
  }
}

class ContohStatic2{
  public static $angk =1;

  public static function angka()
  {
    return "Angak Ke - ". self::$angk++;
  }
}


echo ContohStatic::$angka; // :: untuk mengakses property atau method yang punya keyword static
echo "<br>";
echo ContohStatic::hallo();
echo "<hr>";
echo ContohStatic::hallo();

echo "<hr>";
// =========================================
echo "Angak berurut";
echo "<br>";
$urutan = new ContohStatic2();
echo $urutan->angka();
echo "<br>";
echo $urutan->angka();
echo "<br>";
echo $urutan->angka();

echo "<hr>";

$urutan2 = new ContohStatic2();
echo $urutan->angka();
echo "<br>";
echo $urutan->angka();
echo "<br>";
echo $urutan->angka();
echo "<hr>";


?>
