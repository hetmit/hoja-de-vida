<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>hoja de vida PHP </title>
</head>
<body>
    <?php
    $nombre = "camilo noguera";
    $profesion="ingeniero de sistemas";
    $edad="10";
    $habilidades =[
        "html",
        "css",
        "java",
        "c#",
        "javascript",  
    ]
    ?>
    <h1><?php echo $nombre?></h1>
    <h2><?php echo $profesion?></h2>
    <p><?php echo " soy "  . $nombre  ." y soy " . $profesion?></p>
    <?php if($edad >=18):?>
    <p>disponible para trabajar </p>
    <?php else : ?>
        <p> menor de edad - no puede trabajar </p>
        <?php endif; ?>
</body>
</html>