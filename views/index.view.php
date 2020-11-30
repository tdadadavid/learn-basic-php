<?php require ('views/partials/head.php'); ?>

<?php require ('views/partials/nav.php'); ?>


    <h1>Fill in the information</h1>

    <form method="POST" action="/mypractice/name" >
<!--        <input name="id"  placeholder="ID" ><br>-->
        <input name="description" placeholder="Description" ><br>
        <input name = "status" placeholder="Status"><br>
        <button type="submit" name="submit">SUBMIT</button>
    </form>

<?php require ('views/partials/footer.php'); ?>