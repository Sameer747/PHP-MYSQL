<?php
/*
GET method output:
*/
// if (isset($_GET['submit'])) {
//     echo $_GET['email'];
//     echo "<br>";
//     echo $_GET['title'];
//     echo "<br>";
//     echo $_GET['ingredients'];
// }

/*
POST method output:
*/
// if (isset($_POST['submit'])) {

//     echo htmlspecialchars($_POST['email']);
//     echo "<br>";
//     echo htmlspecialchars($_POST['title']);
//     echo "<br>";
//     echo htmlspecialchars($_POST['ingredients']);
// }

// adding custom validation
// email
if (empty(htmlspecialchars($_POST['email']))) {
    echo "Email is empty." . "<br>";
} else {
    echo htmlspecialchars($_POST['email']) . "<br>";
}
// title
if (empty(htmlspecialchars($_POST['title']))) {
    echo "Title is empty." . "<br>";
} else {
    echo htmlspecialchars($_POST['title']) . "<br>";
}
// ingredeients
if (empty(htmlspecialchars($_POST['ingredients']))) {
    echo "Ingredients is empty." . "<br>";
} else {
    echo htmlspecialchars($_POST['ingredients']) . "<br>";
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
        <input type="text" name="email">
        <label>Pizza Title:</label>
        <input type="text" name="title">
        <label>Ingredients:</label>
        <input type="text" name="ingredients">
        <div class="center">
            <input type="submit" value="submit" name="submit" class="btn brand z-depth-0">
        </div>

    </form>

</section>

<?php
include('templates/footer.php');
?>

</html>