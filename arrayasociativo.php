<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lista de usuarios</title>
        <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        
        <div class="container pt-3">
        
            <?php
            // Arreglos bidimensionales
            $usuarios = [
                ['codigo' => 10, 'nombre' => 'Juan', 'correo' => 'jperez@gmail.com', 'sueldo' => 2000.00, 'estado' => true], 
                ['codigo' => 20, 'nombre' => 'Miguel', 'correo' => 'mchavez@gmail.com', 'sueldo' => 3500.00, 'estado' => true], 
                ['codigo' => 30, 'nombre' => 'Lucía', 'correo' => 'llopez@gmail.com', 'sueldo' => 2650.00, 'estado' => false], 
                ['codigo' => 40, 'nombre' => 'Marco', 'correo' => 'msantander@gmail.com', 'sueldo' => 2790.00, 'estado' => true], 
            ];
            ?>

            <div class="card bg-light">
                <div class="card-body">
                    <?php var_dump($usuarios); ?>
                </div>
            </div>

            <table class="table">
                <caption>Empleados</caption>
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Sueldo</th>
                    </tr>
                </head>
                <tbody>
                <?php
                    foreach ($usuarios as $usuario) {
                        echo "<tr><td>$usuario[codigo]</td><td>$usuario[nombre]</td><td>$usuario[correo]</td><td>$usuario[sueldo]</td></tr>";
                    }
                ?>
                </tbody>
            </table>

            <!-- Buscar por Código -->
            <div class="card mb-3">
                <div class="card-header">Buscar por Código</div>
                <div class="card-body">
                    <?php
                        $codigo = 20;
                    ?>
                    <h5 class="card-title">Código a buscar: <?=$codigo?></h5>
                    <?php 
                        $usuario_encontrado = NULL;
                        
                        foreach ($usuarios as $usuario) {
                            if($usuario['codigo'] === $codigo){
                                $usuario_encontrado = $usuario;
                                break;
                            }
                        }
                        
                        if(!is_null($usuario_encontrado)){
                            var_dump($usuario_encontrado);
                        }else{
                            echo '<div class="alert alert-warning">Empleado no encontrado</div>';
                        }
                    ?>
                </div>
            </div>
            
            <!-- Buscar el empleado de sueldo mayor -->
            <div class="card mb-3">
                <div class="card-header">Buscar el empleado de sueldo mayor</div>
                <div class="card-body">
                    <?php 
                        $usuario_encontrado = NULL;
                        
                        $saldoMayor = -1; // Inicio por un número muy bajo
                        foreach ($usuarios as $indice => $usuario) {
                            if($usuario['sueldo'] > $saldoMayor){
                                $saldoMayor = $usuario['sueldo'];
                                $usuario_encontrado = $usuario;
                            }
                        }
                        
                        if(!is_null($usuario_encontrado)){
                            var_dump($usuario_encontrado);
                        }else{
                            echo '<div class="alert alert-warning">Empleado no encontrado</div>';
                        }
                    ?>
                </div>
            </div>
            
            <!-- Buscar empleados con sueldo mayor a 2500 -->
            <div class="card mb-3">
                <div class="card-header">Buscar empleados con sueldo mayor a 2500</div>
                <div class="card-body">
                    <?php 
                        $usuarios_filtrado = array();
                        foreach($usuarios as $usuario){
                            if($usuario['sueldo'] >= 2500){
                                $usuarios_filtrado[] = $usuario;
                            }
                        }
                        
                        if(!empty($usuarios_filtrado)){
                            var_dump($usuarios_filtrado);
                        }else{
                            echo '<div class="alert alert-warning">Sin resultados</div>';
                        }
                    ?>
                </div>
            </div>
            
            <!-- Listar empleados ordenados por sueldo (mayor a menor) -->
            <div class="card mb-3">
                <div class="card-header">Listar empleados ordenados por sueldo (mayor a menor)</div>
                <div class="card-body">
                    <?php 
                        $count = count($usuarios); 
                        // Algoritmo de la burbuja
                        for($i=0; $i<$count; $i++){
                            for($j=$count-1; $j>$i; $j--){ 
                                if ($usuarios[$j]['sueldo'] < $usuarios[$j-1]['sueldo']){ 
                                    $tmp = $usuarios[$j]; 
                                    $usuarios[$j] = $usuarios[$j-1]; 
                                    $usuarios[$j-1] = $tmp; 
                                } 
                            } 
                        }
                        
                        var_dump($usuarios);
                    ?>
                </div>
            </div>
            
        </div>
            
    </body>
</html>
