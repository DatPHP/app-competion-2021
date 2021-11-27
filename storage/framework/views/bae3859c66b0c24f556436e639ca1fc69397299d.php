<div class="container mt-5 text-center">
    <button type="button" wire:click="clickEvt" class="btn btn-primary">Click Here</button>

    <button type="button" wire:click="trackClickEvt(<?php echo e($studentId); ?>)" class="btn btn-success">Click Here</button>

    <p class="mt-4"><?php echo e($msg); ?></p>
</div><?php /**PATH /var/www/html/myshop/resources/views/livewire/click.blade.php ENDPATH**/ ?>