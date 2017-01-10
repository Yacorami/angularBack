<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title></title>
</head>
<body>
<?php
$tab=array();
for($i=0;$i<10;$i++)
{
$tab[]=array("id"=>$i,"firstname"=>"firstname".$i,"lastname"=>"lastname".$i,"email"=>"mail@mail".$i."da".".com","age"=>30-$i);
}


$data = json_encode($tab);
echo $data;
return $data; ?>
</body>
</html>
