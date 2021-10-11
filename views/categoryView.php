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
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php
endif;
?>
