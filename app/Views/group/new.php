<?= $this->extend('layout/default') ?>

<?= $this->section('title'); ?>
<title>Create Group &mdash; yukNikah</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('groups'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Gawe</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buat Group</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('groups'); ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="group">Nama Group *</label>
                        <input type="text" name="name_group" id="group" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="info">Info Group *</label>
                        <textarea name="info_group" class="form-control" id="info" style="resize: none; height: 65px;"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"> Save</i></button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>