<?php  Themes::getThemeHeader(); ?>
<div class="container mt-4 pt-4">
    
    <div class="row p-5">
            <div class="col-lg-8">
                <h1 class="text-center p-5">Ultimos grupos de Whatsapp</h1>
                
                <?php
                    foreach($grupos as $row){
                        echo "
                            <div class='card mb-4'>
                                <div class='card-body'>
                                    <h5 class='card-title'>".$row['nombre']."</h5>
                                    <p class='card-text'>".$row['descripcion']."</p>
                                </div>
                                <div class='card-footer'>
                                    <a href='".$row['enlace']."' class='card-link' target='_blank'>Acceder</a>
                                </div>
                            </div>
                        ";
                    }

                ?>
                
            </div>
            <div class="col-lg-4 pt-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center">Categorias</h4>
                        <ul class="list-group mt-4">
                            <?php 
                                foreach ($categorias as $row) {
                                    echo "<li class='list-group-item list-group-item-action'>".$row['nombre']."</li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>
                

            </div>
        </div>
</div>
<?php Themes::getThemeFooter(); ?>