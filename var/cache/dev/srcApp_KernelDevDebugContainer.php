<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerIhrPXrs\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerIhrPXrs/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerIhrPXrs.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerIhrPXrs\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerIhrPXrs\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'IhrPXrs',
    'container.build_id' => '04f3372c',
    'container.build_time' => 1564325608,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerIhrPXrs');
