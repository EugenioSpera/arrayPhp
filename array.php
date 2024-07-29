<?php   

//criacao de array

//pode se criar array dessas duas formas a seguir:
$numero = array(1,2,3,4);
$datas=[5,6,7,8];

for ($i=0; $i <count($numero);$i++) {
    echo $numero[$i];
}
/*----------------------------------------------------------------------------------*/
echo "<br>";
array_push($numero,10,11); //array_push serve para inserir dados no final do array

for ($i=0; $i <count($numero);$i++) {
    echo $numero[$i]."<br>";
}

/*----------------------------------------------------------------------------------*/

//arra_pop serve para excluir a última informação no final do array
echo"<br>";
$array2 = array_pop($numero);
for($i=0;$i<count($numero);$i++){
    echo $numero[$i]."<br>";
}

/*-----------------------------------------------------------------------------------*/

// array_unshift insere uma informação nova no inicio do array
echo"<br>";
array_unshift($numero,0);
for($i=0;$i<count($numero);$i++){
    echo $numero[$i]."<br>";
}

/*----------------------------------------------------------------------------------*/
//array_shift deleta a primeira informção do array
echo"<br>";
$array2 = array_shift($numero,);
for($i=0;$i<count($numero);$i++){
    echo $numero[$i]."<br>";
}

/*---------------------------------------------------------------------------------*/

//apaga a informação no campo que foi escolhido, nesse caso campo [2] até o final do array
echo"<br>";
unset($datas[2]);
echo $datas ."<br>";

/*---------------------------------------------------------------------------------*/

//juntando dois arrays
$array1=[10,20,30];
$array2=[11,21,31];
$result= array_merge($array1,$array2);
for ($i=0;$i<count($result);$i++){
    echo $result[$i]."<br>"; 
}


/*----------------------------------------------------------------------------------*/

//Deletando as informações de um array a partir de um campo estipulado pelo usuario, nesse caso no campo 3
echo"<br>";
$array1=[10,20,30];
$array2=[11,21,31];
$retirada = array_slice($result,3,3);
for($i=0;$i<count($retirada);$i++){ 
echo $retirada[$i]."<br>";
}

/*------------------------------------------------------------------------------------*/

//substituição de dados em um arrey em posição escolhida, nesse caso posição 0,1.
echo"<br>";
$cores=["Vermelho - ","Verde -","Azul -"];
array_splice($cores,0,1,["Roxo -","Laranja -"]);
for($i=0;$i<count($cores);$i++){ 
echo $cores[$i];
}

/*-------------------------------------------------------------------------------------*/

//coçlocando os dados inserido em forma crescente.
echo"<br>";
echo"<br>";
$valores=[6,5,8,1,7,9,2];
sort($valores);
for($i=0;$i<count($valores);$i++){ 
echo $valores[$i];
}


/*-------------------------------------------------------------------------------------*/

//coçlocando os dados inserido em forma decrescente.
echo"<br>";
echo"<br>";
$valores=[6,5,8,1,7,9,2];
rsort($valores);
for($i=0;$i<count($valores);$i++){ 
echo $valores[$i];
}

//Mostrando apenas o que não se repete nos dois arrays.
echo"<br>";
echo"<br>";
$valores=[6,5,8,1,7,9,2];
$valores2=[8,6,4,3,8,9,5];
$diferenca = array_diff($valores,$valores2);
foreach($diferenca as $valor){ 
echo $valor;
}






?>