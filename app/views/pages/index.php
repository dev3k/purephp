<?php view('partials/header', ['pageTitle' => 'Pages']); ?>
<div class="container">
    <div class="page-header">
        <h1>Pages</h1>
    </div>
    <table class="table table-condensed">
        <thead>
        <tr>
            <th>#</th>
            <th>Page</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($pages as $page): ?>
            <tr>
                <th scope="row">
                    <?= $page['id']; ?>
                </th>
                <td><?= $page['title']; ?></td>
                <td>
                    <a href="/pages/view?id=<?= $page['id'] ?>">View</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php if (count($pages) === 0): ?>
            <tr>
                <td class="text-center text-muted text-sm" colspan="3"><small>No Records Found.</small></td>
            </tr>
        <?php endif ?>
        </tbody>
    </table>
</div>
<?php view('partials/footer'); ?>
