<html>
<head>
	<title>soal ketiga</title>
</head>
<body>
	<form method="post">
		<input type="text" min="1" max="1000" name="angka" placeholder="Masukkan angka ..." required>
	</form>

<?php
$a = "";
// pemeriksaan menggunakan fungsi isset()
$a = isset($_POST['angka']) ? $_POST['angka'] : '';

for($i=1; $i<=$a;$i++ )
{

cek($i);
}
function cek($nilai){
 $flag=1;
if ($nilai%3==0)
{
echo "x";
  $flag =0;
}
if ($nilai%5==0)
{
echo "y";
  $flag =0;
}
if ($nilai%7==0)
{
echo "z";
  $flag =0;
}
  if($flag==1)
    {
      echo $nilai;
    }
  echo"&nbsp;&nbsp;&nbsp;";

}
?>
</body>
</html>