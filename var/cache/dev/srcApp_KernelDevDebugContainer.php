<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6tKd7Xw\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6tKd7Xw/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6tKd7Xw.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6tKd7Xw\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container6tKd7Xw\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '6tKd7Xw',
    'container.build_id' => '382b3740',
    'container.build_time' => 1563959241,
], __DIR__.\DIRECTORY_SEPARATOR.'Container6tKd7Xw');
