<?php view('partials/header', ['pageTitle' => 'Page: ' . $page['title']]); ?>
<div class="container">
    <div class="page-header">
        <h1><?= htmlspecialchars($page['title']) ?></h1>
    </div>
    <div class="page-body">
        <?= htmlspecialchars($page['content']) ?>
    </div>
    <hr/>
    <ul class="nav nav-pills">
        <li>
            <a href="/pages" type="button" class="btn btn-default">Back</a>
        </li>
        <li>
            <form action="/pages/delete" method="post">
                <input type="hidden" name="id" value="<?= $page['id'] ?>">
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </li>
    </ul>
</div>

<?php view('partials/footer'); ?>
