<?php
include('validations.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php
include('templates/header.php');
?>

<section class="container grey-text">

    <h4 class="center">Add a Pizza</h4>

    <form action="add.php" class="white" method="post">
        <!-- html default validation -->
        <!-- <label>Your Email:</label>
        <input type="text" name="email" required>
        <label>Pizza Title:</label>
        <input type="text" name="title" required>
        <label>Ingredients:</label>
        <input type="text" name="ingredients" required>
        <div class="center">
            <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div> -->
        <!-- custom validation -->
        <label>Your Email:</label>
        <input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>">
        <div class="red-text"><?php echo $errors['email'] ?></div>
        <label>Pizza Title:</label>
        <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>">
        <div class="red-text"><?php echo $errors['title'] ?></div>
        <label>Ingredients:</label>
        <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>">
        <div class="red-text"><?php echo $errors['ingredients'] ?></div>
        <div class="center">
            <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div>

    </form>

</section>

<?php
include('templates/footer.php');
?>

</html>