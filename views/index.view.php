<?php require ('views/partials/head.php'); ?>

    <h1 id="hello" >Hello, Daniel</h1>

    <?php require('views/partials/nav.php'); ?>

    <h2 id="topic" ><strong>TODOS</strong></h2>


        <ul>
            <?php foreach ($results as $task) : ?>
                <li>

                    <?php if($task -> Status) : ?>
                        <?= $task ->Description; ?>
                        &#9989
                    <?php else: ?>
                        <?= $task ->Description;  ?>
                    <?php endif; ?>

                </li>

            <?php endforeach; ?>
        </ul>


<?php require ('views/partials/footer.php'); ?>