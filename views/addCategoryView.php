<div class="row text-center">
    <div class="row">
        <div class="col-6 mx-auto">
            <form action="addcategory" method="POST">
                <p>
                    <label for="name" class="form-label">Nom de la catégorie</label>
                    <input type="text" id="name" name="name" class="form-control" value=""/>
                </p>
                <p>
                    <label for="description" class="form-label">Description</label>
                    <input type="text" id="description" name="description" class="form-control" value=""/>
                </p>
                <p>
                    <label for="order" class="form-label">Ordre</label>
                    <input type="text" id="order" name="order" class="form-control" value=""/>
                </p>
                <input class="btn btn-dark" type="submit" value="Ajouter" name="validate"/>
            </form>

            <h3><?php if(isset($msg) and !empty($msg)):
                echo $msg;
                endif;
                ?></h3>
        </div>
    </div>
</div>
