<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <h1>Array fill</h1> <?php 
   
    
//array fill cria um numero x de elementos com o mesmo valor
//array implode converte o array para string e define qual separador será utilizado
//array count retorna a quantidade de elementos que o array possui semelhante a função lenght do javascript
// array map permite que se utilize funções no array no primeiro arg o nome da função no segundo o array
// array pop remove o ultimo elemento do array
// array push adiciona um valor ao ultimo elemneto do array 
//array shift é uilizada para remover o primeiro elemento e o reoraganiza o array o elemneto 1 a partir da utilização do array shift passa a ser o elemento 0
//array unshift adiciona um elemento na posição incial e rearranja o array
//array splice remove o elemento da posição escolhida
    //Array fill
     $ex = array("PHP","Phython","c++","c#","java","javascript","react","bootstrap","C","MySQL");
    $exa = array_fill(0, 5, "Linguagens");
    print_r($ex) ;?><br> <h1>Array implode</h1>
    <?php
    //array implode
    $exe = implode("- ", $ex);
       print $exe; ?><br> <h1>Array count</h1>
     <?php
    //array count
    $cexe = count($ex);
       print $cexe; ?><br> <h1> Array map</h1>
         <?php
    //array map
    function addlang($lang){
        return $lang . " é uma linguagem";
    } 
   $langfull = array_map("addlang",$ex);
   print_r ($langfull);?><br> <h1> Array pop</h1>
    <!-- array pop -->
   <?php
     $uex = array_pop($ex);
     print_r($uex);;
    ?>
    <br>  <h1>Array push</h1>
    <?php
   //array push
   array_push($ex,"f#");
   print_r ($ex)
       ?><br> <h1>Array shift</h1>
         <?php
    //array shift
    $fex = array_shift($ex);
       print_r($ex); ?><br> <h1>Array unshift</h1>
         <?php
    //array unshift
   array_unshift($ex, "html");
       print_r ($ex) ?><br> <h1>Array splice</h1>
         <?php
    //array splice
    array_splice($ex,2,1);
       print_r ($ex); ?><br> <h1> All arrays at same time</h1>

       <?php 
         $exx = array("PHP","Phython","c++","c#","java","javascript","react","bootstrap","C","MySQL");
       $exxa = array_fill(0, 5, "Linguagens");
       $exxe = implode("- ", $exx);
       $cexe = count($exx);
       function addlanng($lanng){
        return $lanng . " é uma linguagem";
    } 
   $lanngfull = array_map("addlanng",$exx);
   array_push($exx,"f#");
   $fex = array_shift($exx);
   array_unshift($exx, "html");
   array_splice($exx,2,1);
   print_r($exx)

       ?>
      
   
   <br>
</body>
</html>