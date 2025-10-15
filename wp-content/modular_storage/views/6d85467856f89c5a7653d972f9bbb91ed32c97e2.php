<?php $__env->startSection('content'); ?>
    <h2><?php echo esc_attr__('Just one more thing! We are almost done...', 'modular-connector'); ?></h2>

    <ol class="ds-styled-list">
        <li><?php echo sprintf(esc_attr__('Return to your %s account.', 'modular-connector'), '<a target="_blank" href="https://app.modulards.com">Modular DS</a>'); ?></li>
        <li><?php echo esc_attr__('Open the website you are connecting.', 'modular-connector'); ?></li>
        <li><?php echo esc_attr__('Click on "Connect".', 'modular-connector'); ?></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('settings.layout', \Modular\ConnectorDependencies\Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/academia.neuronacomercial.com/academia.neuronacomercial.com.ar/wp-content/plugins/modular-connector/src/resources/views/settings/pending.blade.php ENDPATH**/ ?>