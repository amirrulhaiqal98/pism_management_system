<?= $this->extend("layouts/default"); ?>

<?= $this->section("title"); ?>Home<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

    <h1>welcome_message</h1>

<a href="<?= site_url('/signup/new') ?>">Sign up</a>

<?= $this->endSection(); ?>




