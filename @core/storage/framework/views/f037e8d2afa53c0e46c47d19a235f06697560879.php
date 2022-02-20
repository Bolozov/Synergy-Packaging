<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH X:\laragon\www\synergy-packaging\@core\resources\views/components/flash-msg.blade.php ENDPATH**/ ?>