<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Task<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

    <h1>Task</h1>

    <a href="<?= site_url("/tasks")?>">&laquo; Back to Index</a>
    <dl>
            <dt>ID</dt>
            <dd><?= $task['id'] ?></dd>

            <dt>Description</dt>
            <dd><?= $task['description'] ?></dd>

            <dt>Created At</dt>
            <dd><?= $task['created_at'] ?></dd>

            <dt>Created By</dt>
            <dd><?= $task['updated_at'] ?></dd>
    </dl>

    <a href="<?= site_url('/tasks/edit/' .$task['id']) ?>">Edit</a>
<?= $this->endSection(); ?>
