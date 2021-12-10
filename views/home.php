<?php
/**
 * Se recorre el archivo de configuración para crear las cards
 */
foreach($items as $valor){
    if(isset($valor["image"])){
?>
<div class="card" style="width: 18rem;">
    <img src="https://www.fillmurray.com/640/640" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $valor["title"] ?></h5>
        <p class="card-text"><?php echo $valor["description"]?></p>
        <a href="<?php echo $path.$valor["url"] ?>" class="btn btn-primary">ir a verlo</a>
    </div>
</div>
<?php
    };
};
?>