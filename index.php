<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- hoja de estilos -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- título de página -->
    <title>Bar Mi Casa</title>
    <!-- ícono de pàgina -->
    <link rel="shortcut icon" href="./img/logo-micasa.png">
    <!-- fuentes -->
    <!-- javascript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>
<?php
 if (file_exists('xml/restaurante.xml')) {
    $menu = simplexml_load_file('xml/restaurante.xml');
} else {
    exit('Error abriendo restaurante.xml.');
}

?>

<?php

echo '<div class="column-3">'; 
$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo1'],$aux)){

        echo '<h1>'.$plato['tipo1'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo1']);
    }
    if($plato['tipo1']=='Para picar'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";

        if(isset($plato->extras->signo['pollito'])==(string)'pollo'){
            echo '<img src="img/pollo.svg" alt="">';

            echo "<br>";
            echo "<br>";
        
            
        }

        if(isset($plato->extras->signo['verdura'])==(string)'vegetal'){
            echo '<img src="img/vegetal.svg" alt="">';
            
            
            echo "<br>";
            echo "<br>";
        
            
        }

        if(isset($plato->extras->signo['panecito'])==(string)'pan'){
            echo '<img src="img/pan.svg" alt="">';
            
            
            echo "<br>";
            echo "<br>";
        
            
        }
        if(isset($plato->extras->signo['torreznos'])==(string)'bacon'){
            echo '<img src="img/bacon.svg" alt="">';

            echo "<br>";
            echo "<br>";
        
            
        }
        }
        
        
    }


    

echo '</div>'; 


echo '<div class="column-3">'; 
$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo2'],$aux)){

        echo '<h1>'.$plato['tipo2'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo2']);
    }
    if($plato['tipo2']=='Tapas'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
       
        if(isset($plato->extras->signo['gambita'])==(string)'gamba'){
            echo '<img src="img/gamba.svg" alt="">';
            
            
            echo "<br>";
            echo "<br>";
        
            
        }
        
         
        if(isset($plato->extras->signo['exclusivo'])==(string)'premium'){
            echo '<img src="img/premium.svg" alt="">';
            
            
            echo "<br>";
            echo "<br>";
        
            
        }
    }
     
}
echo '</div>'; 


echo '<div class="column-3">'; 
$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo3'],$aux)){

        echo '<h1>'.$plato['tipo3'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo3']);
    }
    if($plato['tipo3']=='Hamburguesas'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";

        if(isset($plato->extras->signo['pollito'])==(string)'pollo'){
            echo '<img src="img/pollo.svg" alt="">';

            echo "<br>";
            echo "<br>";
        
            
        }

        if(isset($plato->extras->signo['verdura'])==(string)'vegetal'){
            echo '<img src="img/vegetal.svg" alt="">';
            
            
            echo "<br>";
            echo "<br>";
        
            
        }
       
        if(isset($plato->extras->signo['gambita'])==(string)'gamba'){
            echo '<img src="img/gamba.svg" alt="">';
            
            
            echo "<br>";
            echo "<br>";
        
            
        }

        if(isset($plato->extras->signo['exclusivo'])==(string)'premium'){
            echo '<img src="img/premium.svg" alt="">';
            
            
            echo "<br>";
            echo "<br>";
        
            
        }

        if(isset($plato->extras->signo['hamburgesita'])==(string)'s'){
            echo '<img src="img/hamburguesa.svg" alt="">';
            
            
            echo "<br>";
            echo "<br>";
        
            
        }
    }
   
    
   
}
echo '</div>'; 




echo '<div class="column-3">'; 
$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo5'],$aux)){

        echo '<h1>'.$plato['tipo5'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo5']);
    }
    if($plato['tipo5']=='Para los peques de casa'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    
    }
    
    if(isset($plato->extras->signo['pollito'])==(string)'pollo'){
        echo '<img src="img/pollo.svg" alt="">';

        echo "<br>";
        echo "<br>";
    
        
    }
}
echo '</div>'; 

echo '<div class="column-3">'; 
$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo6'],$aux)){

        echo '<h1>'.$plato['tipo6'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo6']);
    }
    if($plato['tipo6']=='Brasa'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    
    }
    if(isset($plato->extras->signo['lagartito'])==(string)'lagarto'){
        echo '<img src="img/lagarto.svg" alt="">';

        echo "<br>";
        echo "<br>";
    
        
    }

    if(isset($plato->extras->signo['vaquita'])==(string)'vaca'){
        echo '<img src="img/vaca.svg" alt="">';

        echo "<br>";
        echo "<br>";
    
        
    }
    
}
echo '</div>'; 

echo '<div class="column-3">'; 
$aux=[];
foreach($menu->plato as $plato){
    if(!in_array((string)$plato['tipo7'],$aux)){

        echo '<h1>'.$plato['tipo7'].'</h2>'; 

    /*  if(isset($_GET['tipo']) && $_GET['tipo']==(string)$plato['tipo']){
            echo $plato['tipo'];
        } */
        array_push($aux,(string)$plato['tipo7']);
    }
    if($plato['tipo7']=='Postres'){
        echo $plato->title.'............................ '.$plato->precio;;
        echo "<br>";
        echo $plato->description;
        echo "<br>";
        echo $plato->calorias;
        echo "<br>";
        echo "<br>";
    
    }
    if(isset($plato->extras->signo['heladito'])==(string)'helado'){
        echo '<img src="img/helado.svg" alt="">';

        echo "<br>";
        echo "<br>";
    
        
    }
    if(isset($plato->extras->signo['quesito'])==(string)'queso'){
        echo '<img src="img/queso.svg" alt="">';

        echo "<br>";
        echo "<br>";
    
        
    }
}
echo '</div>'; 

?>
<h3>SIGNIFICADO DE LOS ICONOS</h3>
<div class="iconos">
    <img src="./img/bacon.svg" alt="bacon">
    <p>Bacon</p>

    <img src="./img/gamba.svg" alt="gamba">
    <p>Gamba</p>

    <img src="./img/hamburguesa.svg" alt="hamburguesa">
    <p>Hamburguesa</p>

    <img src="./img/helado.svg" alt="helado">
    <p>Helado</p>

    <img src="./img/lagarto.svg" alt="lagarto">
    <p>Lagarto</p>

    <img src="./img/pan.svg" alt="pan">
    <p>Pan</p>

    <img src="./img/pollo.svg" alt="pollo">
    <p>Pollo</p>

    <img src="./img/premium.svg" alt="premium">
    <p>Premium</p>

    <img src="./img/queso.svg" alt="queso">
    <p>Queso</p>

    <img src="./img/vaca.svg" alt="vaca">
    <p>Vaca</p>

    <img src="./img/vaca.svg" alt="vaca">
    <p>Vaca</p>

    <img src="./img/vegetal.svg" alt="vegetal">
    <p>Vegetal</p>


</div>
</body>
</html>
