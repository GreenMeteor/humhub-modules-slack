<?php

namespace humhub\modules\slack;

return [
    'id' => 'slack',
    'class' => 'humhub\modules\slack\Module',
    'namespace' => 'humhub\modules\slack',
    'events' => [
        [
            'class' => \humhub\modules\dashboard\widgets\Sidebar::class,
            'event' => \humhub\modules\dashboard\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\slack\Events',
                'addSlackFrame'
            ]
        ],
        [
            'class' => \humhub\modules\space\widgets\Sidebar::class,
            'event' => \humhub\modules\space\widgets\Sidebar::EVENT_INIT,
            'callback' => [
                'humhub\modules\slack\Events',
                'addSlackFrame'
            ]
        ],
        [
            'class' => \humhub\modules\admin\widgets\AdminMenu::class,
            'event' => \humhub\modules\admin\widgets\AdminMenu::EVENT_INIT,
            'callback' => [
                'humhub\modules\slack\Events',
                'onAdminMenuInit'
            ]
        ]
    ]
];
?>
