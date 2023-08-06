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
$errors = array('email' => '', 'title' => '', 'ingredients' => '');
$email = $title = $ingredients = '';
// check email
if (empty($_POST['email'])) {
    $errors['email'] = "Email is empty." . "<br>";
} else {
    // echo htmlspecialchars($_POST['email']) . "<br>";
    // applying filter:
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Email must be valid. <br>";
    }
}
// check title
if (empty($_POST['title'])) {
    $errors['title'] = "Title is empty." . "<br>";
} else {
    $title = $_POST['title'];
    if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
        $errors['title'] = 'Title must be letters and spaces only' . "<br />";
    }
}
// check ingredeients
if (empty($_POST['ingredients'])) {
    $errors['ingredients'] = "Ingredients is empty." . "<br>";
} else {
    $ingredients = $_POST['ingredients'];
    if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
        $errors['ingredients'] = 'Ingredients must be a comma separated list' . "<br>";
    }
}
//check if there is any error in the form if not user is redirected
if (!array_filter($errors)) {
    header('Location: index.php');
}


?>
