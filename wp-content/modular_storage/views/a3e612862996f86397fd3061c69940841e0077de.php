<?php $__env->startSection('content'); ?>
    <h2><?php echo esc_attr__('Manual Mode', 'modular-connector'); ?></h2>

    <ol class="ds-styled-list">
        <li><?php echo sprintf(esc_attr__('Log in to your %s account.', 'modular-connector'), '<a target="_blank" href="https://app.modulards.com">Modular DS</a>'); ?></li>
        <li><?php echo esc_attr__('Click on the "New Website" button.', 'modular-connector'); ?></li>
        <li><?php echo esc_attr__('Enter the name and URL of this website.', 'modular-connector'); ?></li>
        <li><?php echo esc_attr__('Copy the public key and secret key and return to this page.', 'modular-connector'); ?></li>
        <li><?php echo esc_attr__('Paste the connection keys in the form below and save.', 'modular-connector'); ?></li>
        <li><?php echo esc_attr__('Go back to Modular DS and click "Connect".', 'modular-connector'); ?></li>
    </ol>

    <h2><?php echo \Modular\ConnectorDependencies\e(esc_attr__('Automatic Mode', 'modular-connector')); ?></h2>
    <ol class="ds-styled-list">
        <li><?php echo sprintf(esc_attr__('Log in to your %s account.', 'modular-connector'), '<a target="_blank" href="https://app.modulards.com">Modular DS</a>'); ?></li>
        <li><?php echo esc_attr__('Click on the "New Website" button.', 'modular-connector'); ?></li>
        <li><?php echo esc_attr__('Enter the URL, administrator\'s username and password of this website.', 'modular-connector'); ?></li>
        <li><?php echo esc_attr__('The system will take care of everything.', 'modular-connector'); ?></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('settings.layout', \Modular\ConnectorDependencies\Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/academia.neuronacomercial.com/academia.neuronacomercial.com.ar/wp-content/plugins/modular-connector/src/resources/views/settings/disconnected.blade.php ENDPATH**/ ?>