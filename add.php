<?php

// if (isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo "<br>";
//     echo $_GET['title'];
//     echo "<br>";
//     echo $_GET['ingredients'];
// }
if (isset($_POST['submit'])) {
    echo $_POST['email'];
    echo "<br>";
    echo $_POST['title'];
    echo "<br>";
    echo $_POST['ingredients'];
}

?>

<!DOCTYPE html>
<html lang="en">
<?php
include('templates/header.php');
?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>
    
    <form action="add.php" class="white" method="post">

        <label>Your Email:</label>
        <input type="text" name="email" required>
        <label>Pizza Title:</label>
        <input type="text" name="title" required>
        <label>Ingredients:</label>
        <input type="text" name="ingredients" required>
        <div class="center">
            <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div>

    </form>

</section>

<?php
include('templates/footer.php');
?>

</html>