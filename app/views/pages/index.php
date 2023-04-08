<?php view('partials/header', ['pageTitle' => 'Pages']); ?>
<div class="container">
    <div class="page-header">
        <h1>Pages</h1>
    </div>
    <a href="/pages/create" type="button" class="btn btn-primary">Create a Page</a>
    <hr/>
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
                    <ul class="list-unstyled list-inline">
                        <li>
                            <a class="btn btn-default btn-sm" href="/pages/view?id=<?= $page['id'] ?>">View</a>
                        </li>
                        <li>
                            <form action="/pages/delete" method="post" class="mt-4">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $page['id'] ?>">
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </li>
                    </ul>
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
