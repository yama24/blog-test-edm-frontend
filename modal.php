<!-- Modal -->
<div class="modal fade" id="addPost" tabindex="-1" role="dialog" aria-labelledby="addPostLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPostLabel">Write a post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="post_handle.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" required>
                            </div>
                            <div class="form-group">
                                <label for="categories">Categories</label>
                                <select class="form-control" id="categories" name="category">
                                    <?php foreach ($categories['response'] as $c) : ?>
                                        <option value="<?= $c['id']; ?>"><?= $c['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" id="body" name="body" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="addPost" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="editPost" tabindex="-1" role="dialog" aria-labelledby="editPostLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPostLabel">Edit a post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="post_handle.php" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="hidden" name="id" value="<?= $data['response']['id']; ?>">
                                <input type="text" class="form-control" name="title" id="titleEdit" value="<?= $data['response'][0]['title']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="categories">Categories</label>
                                <select class="form-control" id="categoriesEdit" name="category">
                                    <?php foreach ($categories['response'] as $c) : ?>
                                        <option value="<?= $c['id']; ?>" <?= ($data['response'][0]['category_id'] == $c['id']) ? 'selected' : ''; ?>><?= $c['name']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea class="form-control" id="bodyEdit" name="body" rows="3"><?= htmlspecialchars_decode($data['response'][0]['body']); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="editPost" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>