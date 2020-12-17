<?php  Themes::getThemeHeader(); ?>
<div class="container mt-5 py-5 justify-content-center" >
    
        <div class="card">
            <div class="card-header">Publicar un grupo</div>
            <div class="card-body">
                <form name="publicar-form" method="post">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" name="nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Descripción</label>
                        <textarea name="descripcion" class="form-control" rows="5"></textarea>
                        <span>Maximo 255 caracteres</span>
                    </div>
                    <div class="form-group">
                        <label>Enlace</label>
                        <input type="text" name="link" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Plataforma</label>
                        <select class="form-control" name="plataforma" id="">
                            <?php foreach($plataformas as $row){
                                    echo "<option value='".$row['id_plataforma']."'>".$row['nombre']."</option>";
                                }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Categoria</label>
                        <select class="form-control" name="categoria" id="">
                            <?php foreach($categorias as $row){
                                    echo "<option value='".$row['id_cat']."'>".$row['nombre']."</option>";
                                }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="adult" id="">
                        Contenido para adultos?
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Publicar" >
                    </div>
                    
                </form>
            </div>
            <div class="card-footer">
            </div>
        </div>
    
</div>
<?php Themes::getThemeFooter(); ?>