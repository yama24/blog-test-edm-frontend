<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jodit/3.18.9/jodit.min.js"></script>
<script>
    const editor = Jodit.make("#body", {
        "uploader": {
            "insertImageAsBase64URI": true
        },
        "language": "id",
        "toolbarSticky": false,
    });
    const editor2 = Jodit.make("#bodyEdit", {
        "uploader": {
            "insertImageAsBase64URI": true
        },
        "language": "id",
        "toolbarSticky": false,
    });

    function deletePost(){
        let id = $("#postId").text();
        if (confirm("Are you sure want to delete this post?")) {
            $("#deletePost").click();
        } else {
            return false;
        }
    }
</script>

<?php if ($_SESSION['notif']) : ?>
    <script>
        alert('<?= $_SESSION['notif']; ?>');
    </script>
<?php endif; ?>

</body>

</html>

<?php
session_destroy();
?>