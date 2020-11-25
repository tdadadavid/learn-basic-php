<!Doctype html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href="/mypractice/public/css/style.css" >
</head>


<body>

    <?php require('partials/nav.php'); ?>
    <h1>Hello, Daniel</h1>

    <h2 id="topic" ><strong>TODOS</strong></h2>



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



</body>
</html>

