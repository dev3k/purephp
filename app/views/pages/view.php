<?php view('partials/header', ['pageTitle' => 'Page: ' . $page['title']]); ?>
<div class="container">
    <div class="page-header">
        <h1><?= htmlspecialchars($page['title']) ?></h1>
    </div>
    <div class="page-body">
        <?= htmlspecialchars($page['content']) ?>
    </div>
    <hr/>
    <div class="panel panel-default">
        <div class="panel-body">
            <ul class="list-unstyled list-inline">
                <li>
                    <a href="/pages" type="button" class="btn btn-default block">Back</a>
                </li>
                <li>
                    <form action="/pages/delete" method="post" class="mt-4">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="id" value="<?= $page['id'] ?>">
                        <button type="submit" class="btn btn-default btn-danger block">Delete</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>

<?php view('partials/footer'); ?>
