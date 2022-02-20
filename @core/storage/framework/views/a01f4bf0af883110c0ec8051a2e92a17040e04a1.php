<?php
if ($home_page_variant == '07' || $home_page_variant == '09' || Route::currentRouteName() == 'frontend.course.lesson') {
    return;
} ?>
<?php if(!empty(get_static_option('home_page_support_bar_section_status'))): ?>
    <div class="top-bar-area header-variant-<?php echo e(get_static_option('home_page_variant')); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-bar-inner pt-2 pb-2">
                        <div class="left-content">
                            <ul class="social-icons">
                                <?php $__currentLoopData = $all_social_item; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e($data->url); ?>" rel="canonical"><i
                                                class="<?php echo e($data->icon); ?>"></i></a></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <div class="right-content">
                            <ul>
                                <li>
                                    <a href="">mail@contact.fr</a>
                                </li>
                                <li>
                                    <a href="">mail@contact.fr</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH X:\laragon\www\synergy-packaging\@core\resources\views/frontend/partials/supportbar.blade.php ENDPATH**/ ?>