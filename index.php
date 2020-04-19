<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php - svelte</title>
	<link rel='stylesheet' href='public/build/bundle.css'>
	<script src='public/build/bundle.js'></script>
</head>
<body>
    <?php
        $datos = [
            ["id"=>1,"name"=>"Asignature 1"],
            ["id"=>2,"name"=>"Asignature 2"],
            ["id"=>3,"name"=>"Asignature 3"],
            ["id"=>4,"name"=>"Asignature 4"],
            ["id"=>5,"name"=>"Asignature 5"]
        ];
        
        $datos = json_encode($datos);
        
        echo '<h3>Content render with PHP</h3>';
        echo '<h3>Data before send</h3>';
        echo $datos; 
    ?>

    <app-asignature data='<?php echo $datos ?>'></app-asignature>
</body>
</html>