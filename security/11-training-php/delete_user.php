<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

// Simulate the current user ID for testing (replace with actual session value in production)
$_SESSION['user_id'] = 2; // Assuming the current user ID is 1
$currentUserId = $_SESSION['user_id']; // ID của người dùng hiện tại
$id = NULL;

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // Kiểm tra quyền người dùng (chỉ cho phép xóa chính mình)
    if ($currentUserId != $id) {
        die("Bạn không có quyền xóa người dùng này.");
    }

    // Xóa người dùng
    $userModel->deleteUserById($id);
}

header('location: list_users.php');
?>
