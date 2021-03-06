<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Livewire Click Event Demo</title>
    <?php echo \Livewire\Livewire::styles(); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('click')->html();
} elseif ($_instance->childHasBeenRendered('LRquvMY')) {
    $componentId = $_instance->getRenderedChildComponentId('LRquvMY');
    $componentTag = $_instance->getRenderedChildComponentTagName('LRquvMY');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LRquvMY');
} else {
    $response = \Livewire\Livewire::mount('click');
    $html = $response->html();
    $_instance->logRenderedChild('LRquvMY', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </div>

</body>

<?php echo \Livewire\Livewire::scripts(); ?>


</html><?php /**PATH /var/www/html/myshop/resources/views/app.blade.php ENDPATH**/ ?>