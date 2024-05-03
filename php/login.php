<?Php
include "../view/login.html";

if ($_POST) {
    include 'config.php';
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sUser = mysqli_real_escape_string($conn, $name);
    $sPass = mysqli_real_escape_string($conn, $password);
    
    $query = "SELECT id FROM users WHERE name='$sUser' AND password='$sPass'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['id']; 
        var_dump($_SESSION['user_id']);
        header('location:../view/home.html');
    }
}

?>