<?php
require_once "script.php";
$data = readPost($_GET['slug']);
$categories = getCategories();
// var_dump($data);
// die;
?>
<?php include "header.php"; ?>
<div class="container mt-3">
    <div class="row">
        <div class="col-12 mb-3">
            <a href="index.php" class="btn btn-warning float-right ml-1">Back</a>
            <button type="button" class="btn btn-success float-right ml-1" data-toggle="modal" data-target="#editPost">Edit</button>
            <button type="button" onclick="deletePost()" class="btn btn-danger float-right ml-1">Delete</button>
        </div>
        <?php foreach ($data['response'] as $d) : ?>
            <div class="col-12">
                <img class="img-fluid" src="https://images.unsplash.com/photo-1587226516191-47ad119ba2fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
                <div class="card-body">
                    <span class="d-none" id="postId"><?= $d['id']; ?></span>
                    <h2><?= $d['title']; ?></h2>
                    <span class="badge badge-info"><?= $d['name']; ?></span>
                    <?php
                    $body = htmlspecialchars_decode($d['body']);
                    ?>
                    <p><?= $body; ?></p>
                </div>
            </div>
            <div class="d-none">
                <form action="post_handle.php" method="post">
                    <input type="hidden" name="id" value="<?= $d['id']; ?>">
                    <button type="submit" name="deletePost" id="deletePost"></button>
                </form>
            </div>
        <?php endforeach ?>
    </div>
</div>


<?php include "modal.php"; ?>
<?php include "footer.php"; ?>