<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; // Add new user
$_id = NULL;
$errors = [];

if (!empty($_GET['id'])) {
}

if (!empty($_POST['submit'])) {
    // Validate name
    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    } elseif (!preg_match('/^[A-Za-z0-9]{5,15}$/', $_POST['name'])) {
        $errors[] = "Tên phải dài từ 5 đến 15 ký tự và chỉ chứa chữ cái và số.";
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors[] = "Mật khẩu là bắt buộc.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()])[A-Za-z\d~!@#$%^&*()]{5,10}$/', $_POST['password'])) {
        $errors[] = "Mật khẩu phải dài từ 5 đến 10 ký tự và bao gồm ít nhất một chữ thường, một chữ hoa, một số và một ký tự đặc biệt.";;
    }

    // Check for errors
    if (empty($errors)) {
        if (!empty($_id)) {
            $_POST['id'] = $_id; // Sử dụng ID đã giải mã
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if (!empty($errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php foreach ($errors as $error) {
                    echo $error . "<br>";
                } ?>
            </div>
        <?php } ?>

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>
            <form method="POST">
                <input type="hidden" name="id" value="<?php echo !empty($_GET['id']) ? $_GET['id'] : ''; ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name']; ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>
</html>
