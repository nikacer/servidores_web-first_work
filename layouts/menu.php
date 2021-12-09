<?php
include_once("./assets/const/menu.const.php");
include_once("./util/functions.php")
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php
                foreach ($items as $valor){
                    ?>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
                        href="<?php echo $path.$valor["url"] ?>"><?php echo $valor["name"] ?></a>
                </li>
                <?php
                }
                ?>

            </ul>
        </div>
    </div>
</nav>