<div class="row">
    <div class="col-sm-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="left">
                    <h3 class="box-title"><?= trans("add_page"); ?></h3>
                </div>
                <div class="right">
                    <a href="<?= adminUrl("pages"); ?>" class="btn btn-success btn-add-new"><i class="fa fa-bars"></i><?= trans("pages"); ?></a>
                </div>
            </div>
            <form action="<?= base_url("Admin/addPagePost"); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="box-body">
                    <div class="form-group">
                        <label class="control-label"><?= trans("title"); ?></label>
                        <input type="text" class="form-control" name="title" placeholder="<?= trans("title"); ?>" value="<?= old("title"); ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label"><?= trans("slug"); ?>
                            <small>(<?= trans("slug_exp"); ?>)</small>
                        </label>
                        <input type="text" class="form-control" name="slug" placeholder="<?= trans("slug"); ?>" value="<?= old("slug"); ?>">
                    </div>

                    <input type="hidden" name="lang_id" value="<?= $activeLang->id; ?>">
                    <input type="hidden" name="parent_id" value="0">
                    <input type="hidden" name="page_order" value="1">
                    <input type="hidden" name="location" value="none">
                    <input type="hidden" name="visibility" value="1">
                    <input type="hidden" name="need_auth" value="0">
                    <input type="hidden" name="title_active" value="1">
                    <input type="hidden" name="breadcrumb_active" value="1">
                    <input type="hidden" name="right_column_active" value="0">
                    <input type="hidden" name="description" value="">
                    <input type="hidden" name="keywords" value="">
                    <input type="hidden" name="page_content" value="">
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right"><?= trans("add_page"); ?></button>
                </div>
            </form>
        </div>
    </div>
</div>
