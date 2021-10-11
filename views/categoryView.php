<?php
if (count($aCategory) >= 1):
    ?>
    <table class="table table-striped text-center">
        <thead>
        <tr>
            <th scope="col"> 'INDEX'</th>
            <th scope="col"> 'NOM'</th>
            <th scope="col"> 'DESCRIPTION'</th>
            <th scope="col"> 'ORDRE'</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($aCategory as $index => $category): ?>
            <tr>
                <td> <?php echo $index; ?> </td>
                <td> <?php echo $category->getName(); ?> </td>
                <td> <?php echo $category->getDescription(); ?> </td>
                <td> <?php echo $category->getOrder(); ?> </td>
                <td><a type="button"
                       class="btn btn-outline-danger"
                       href="/delcategory/<?php echo $index; ?>"
                       title="supprimer">supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a type="button"
       class="btn btn-outline-danger"
       href="/addcategory"
       title="ajouter">Ajouter une catégorie</a>
    <a type="button"
       class="btn btn-outline-danger"
       href="/sortcategory"
       title="trier">trier sur order</a>
<?php
endif;
?>
