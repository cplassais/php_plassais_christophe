<?php
if (count($aArticle) >= 1):
    ?>
    <table class="table table-striped text-center">
        <thead>
        <tr>
            <th scope="col"> 'INDEX'</th>
            <th scope="col"> 'NOM'</th>
            <th scope="col"> 'DESCRIPTION'</th>
            <th scope="col"> 'IMAGE'</th>
            <th scope="col"> 'PRIX'</th>
            <th scope="col"> 'DESIGNER'</th>
            <th scope="col"> 'MAIL'</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($aArticle as $index => $article): ?>
            <tr>
                <td> <?php echo $index; ?> </td>
                <td> <?php echo $article->getName(); ?> </td>
                <td> <?php echo $article->getDescription(); ?> </td>
                <td> <?php echo $article->getImage(); ?> </td>
                <td> <?php echo $article->getPrix(); ?> </td>
                <td> <?php echo $article->getNamedesigner(); ?> </td>
                <td> <?php echo $article->getMail(); ?> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php
endif;
?>
