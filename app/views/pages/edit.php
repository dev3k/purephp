<?php view('partials/header', ['pageTitle' => 'Update Page']); ?>
<div class="container">
    <div class="page-header">
        <h1>Update Page: <?= $page['title']; ?></h1>
    </div>
    <form method="POST" action="/pages/update?id=<?= $page['id'] ?>">
        <div class="form-group <?= isset($errors['title']) ? 'has-error' : '' ?>">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?= $page['title'] ?? '' ?>">
            <?php if (isset($errors['title'])): ?>
                <span id="helpBlock2" class="help-block">
                   <?= $errors['title']; ?>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-group <?= isset($errors['content']) ? 'has-error' : '' ?>">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" placeholder="Content" rows="3"><?= $page['content'] ?? '' ?></textarea>
            <?php if (isset($errors['content'])): ?>
                <span id="helpBlock2" class="help-block">
                   <?= $errors['content']; ?>
                </span>
            <?php endif; ?>
        </div>
        <div class="btn-group">
            <a href="/pages" type="button" class="btn btn-default">Cancel</a>

            <button type="submit" class="btn btn-primary">Update</button>
        </div>
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="<?= $page['id']; ?>">
    </form>
</div>
<?php view('partials/footer'); ?>
