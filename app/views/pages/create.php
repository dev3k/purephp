<?php view('partials/header', ['pageTitle' => 'Create Page']); ?>
<div class="container">
    <div class="page-header">
        <h1>Create Page</h1>
    </div>
    <form method="POST" action="/pages/create">
        <div class="form-group <?= isset($errors['title']) ? 'has-error' : '' ?>">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="<?= $_POST['title'] ?? '' ?>">
            <?php if (isset($errors['title'])): ?>
                <span id="helpBlock2" class="help-block">
                   <?= $errors['title']; ?>
                </span>
            <?php endif; ?>
        </div>
        <div class="form-group <?= isset($errors['content']) ? 'has-error' : '' ?>">
            <label for="content">Content</label>
            <textarea class="form-control" name="content" id="content" placeholder="Content" rows="3"><?= $_POST['content'] ?? '' ?></textarea>
            <?php if (isset($errors['content'])): ?>
                <span id="helpBlock2" class="help-block">
                   <?= $errors['content']; ?>
                </span>
            <?php endif; ?>
        </div>
        <div class="btn-group">
            <a href="/pages" type="button" class="btn btn-default">Cancel</a>

            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</div>
<?php view('partials/footer'); ?>
