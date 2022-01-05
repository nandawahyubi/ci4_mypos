<?= $this->extend('layout/default') ?>

<?= $this->section('title'); ?>
<title>Update Gawe &mdash; yukNikah</title>
<?= $this->endSection(); ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('gawe'); ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Update Gawe</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Edit Gawe / Acara</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('gawe/' . $gawe->id_gawe); ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                        <label for="">Nama Gawe / Acara *</label>
                        <input type="text" name="name_gawe" id="" value="<?= $gawe->name_gawe; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Acara *</label>
                        <input type="date" name="date_gawe" id="" value="<?= $gawe->date_gawe; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Info *</label>
                        <textarea name="info_gawe" class="form-control" id="" cols="30" rows="10"><?= $gawe->info_gawe; ?></textarea>
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