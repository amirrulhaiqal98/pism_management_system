<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>New Task<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1>Edit Task </h1>

<!-- check jika ad error masa validation fields description -->
<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/tasks/update/" . $task['id']) ?>

    <div>
        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="<?= esc($task['description'])
         ?>">
    </div>

    <button>Save</button>
    <a href="<?= site_url("/tasks/show/" .$task['id']) ?>">Cancel</a>

</form>

<?= $this->endSection(); ?>