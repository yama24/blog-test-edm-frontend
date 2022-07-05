<?php
require_once "script.php";

if (isset($_POST['addPost'])) {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $body = $_POST['body'];

    $data = [
        'token' => $token,
        'write_post' => true,
        'title' => $title,
        'category_id' => $category,
        'body' => $body
    ];
    $res = writePost($data);
    if ($res['status'] == true) {
        $_SESSION['notif'] = "Post added successfully!";
    } else {
        $_SESSION['notif'] = "Fail add post!";
    }
    header("location:index.php");
}

if (isset($_POST['editPost'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $body = $_POST['body'];

    $data = [
        'token' => $token,
        'write_post' => true,
        'id' => $id,
        'title' => $title,
        'category_id' => $category,
        'body' => $body
    ];
    $res = editPost($data);
    if ($res['status'] == true) {
        $_SESSION['notif'] = "Post updated successfully!";
    } else {
        $_SESSION['notif'] = "Fail edit post!";
    }
    header("location:index.php");
}

if (isset($_POST['deletePost'])) {
    $id = $_POST['id'];
    $data = [
        'token' => $token,
        'delete_post' => true,
        'id' => $id,
    ];
    $res = deletePost($data);
    if ($res['status'] == true) {
        $_SESSION['notif'] = "Post deleted successfully!";
    } else {
        $_SESSION['notif'] = "Fail delete post!";
    }
    header("location:index.php");
}
