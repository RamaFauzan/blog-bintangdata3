<?php
// Custom per-slug content file: app/Views/themes/classic/pages/<slug>.php
$slugFile = APPPATH . "Views/" . getThemePath() . "/pages/" . $page->slug . ".php";
if (is_file($slugFile)):
    // Konten dari file slug, dibungkus section ber-padding agar tidak ketiban header fixed
    echo '<div class="page-slug-area" style="padding-top:150px;padding-bottom:80px;">';
    include $slugFile;
    echo '</div>';
else:
?>
<div id="wrapper">
    <div class="container">
        <div class="row">
            <?php if ($page->breadcrumb_active == 1): ?>
                <div class="col-sm-12 page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a>
                        </li>
                        <li class="breadcrumb-item active"><?= esc($page->title); ?></li>
                    </ol>
                </div>
            <?php else: ?>
                <div class="col-sm-12 page-breadcrumb"></div>
            <?php endif; ?>
            <div id="content" class="<?= $page->right_column_active == 1 ? "col-sm-8" : "col-sm-12"; ?>">
                <div class="row">
                    <?php if ($page->title_active == 1): ?>
                        <div class="col-sm-12">
                            <h1 class="page-title"><?= esc($page->title); ?></h1>
                        </div>
                    <?php endif; ?>
                    <div class="col-sm-12">
                        <div class="page-content font-text">
                            <?= $page->page_content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
