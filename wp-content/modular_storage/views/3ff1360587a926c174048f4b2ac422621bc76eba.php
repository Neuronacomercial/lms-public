<div class="ds-connections-list <?php echo \Modular\ConnectorDependencies\e($class ?? ''); ?>">
    <hr class="ds-separator">

    <div class="ds-connection-item">
        <div class="ds-connection-field">
            <span class="ds-connection-label"><?php echo \Modular\ConnectorDependencies\e(esc_attr__('Connected on', 'modular-connector')); ?></span>
            <span class="ds-connection-value">
                    <?php if($connectedAt = $connection->getConnectedAt()): ?>
                    <?php echo \Modular\ConnectorDependencies\e($connectedAt->format(get_option('date_format') . ' ' . get_option('time_format'))); ?>

                <?php else: ?>
                    <?php echo \Modular\ConnectorDependencies\e(esc_attr__('N/A', 'modular-connector')); ?>

                <?php endif; ?>
                </span>
        </div>

        <div class="ds-connection-field">
            <span class="ds-connection-label"><?php echo \Modular\ConnectorDependencies\e(esc_attr__('Last used', 'modular-connector')); ?></span>
            <span class="ds-connection-value">
                    <?php if($usedAt = $connection->getUsedAt()): ?>
                    <?php echo \Modular\ConnectorDependencies\e($usedAt->format(get_option('date_format') . ' ' . get_option('time_format'))); ?>

                <?php else: ?>
                    <?php echo \Modular\ConnectorDependencies\e(esc_attr__('N/A', 'modular-connector')); ?>

                <?php endif; ?>
                </span>
        </div>
    </div>
</div>
<?php /**PATH /home/academia.neuronacomercial.com/academia.neuronacomercial.com.ar/wp-content/plugins/modular-connector/src/resources/views/parts/connection_info.blade.php ENDPATH**/ ?>