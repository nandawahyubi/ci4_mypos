<?= $this->extend('layout/default') ?>

<?= $this->section('title'); ?>
<title>Edit Group &mdash; yukNikah</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('groups'); ?>" class="btn btn-primary"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Edit Group</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Group</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('groups/update/' . $group->id_group); ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="">Nama Group *</label>
                        <input type="text" name="name_group" id="" value="<?= $group->name_group; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Info Group *</label>
                        <textarea name="info_group" class="form-control" id="" style="resize: none; height: 65px;"><?= $group->info_group; ?></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"> Save</i></button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>