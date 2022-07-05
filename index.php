<?php
require_once "script.php";
$data = readPost();
$categories = getCategories();
// var_dump($data);
// die;
?>
<?php include "header.php"; ?>

<div class="container mt-3">
    <div class="row">
        <div class="col-12 mb-3">
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addPost">Write a post</button>
        </div>
        <?php foreach ($data['response'] as $d) : ?>
            <div class="col-6 col-md-4">
                <div class="card mb-2" style="width: 18rem;">
                    <img class="card-img-top" src="https://images.unsplash.com/photo-1587226516191-47ad119ba2fa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?= $d['title']; ?></h5>
                        <?php
                        $body = htmlspecialchars_decode($d['body']);
                        ?>
                        <p class="card-text"><?= strlen($body) > 50 ? substr($body, 0, 50) . "..." : $body ?></p>
                        <a href="single.php?slug=<?= $d['slug']; ?>" class="btn btn-primary">Read Post</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<?php include "modal.php"; ?>
<?php include "footer.php"; ?>