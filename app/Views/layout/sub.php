<!DOCTYPE html>
<html lang="ko">
<head>
    <?= view('inc/pageheader') ?>

    <!-- header start -->
    <?= view('inc/head') ?>
    <!-- header e n d -->
</head>
<body class="<?= empty($bodyCls) ? '' : $bodyCls ?>">
<!-- menu start -->
<?= view('inc/menu') ?>
<!-- menu e n d -->

<!-- left start -->
<?= empty($leftMenu) ? '' : view($leftMenu) ?>
<!-- left e n d -->

<?= view($contentBody) ?>

<!-- footer start -->
<?= view('inc/footer') ?>
<!-- footer e n d -->

<?php if (defined('MAIN')) { ?>
    </div>
<?php } ?>

</body>
</html>