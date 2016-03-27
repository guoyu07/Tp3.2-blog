<?php
return array(
    'LAYOUT_ON' => true,
    'LAYOUT_NAME' => 'layout',

    'URL_MODEL' => 2,

    //'TMPL_ACTION_SUCCESS'=>'Layout:dispatch_jump',
    //'TMPL_ACTION_ERROR'=>'Layout:dispatch_jump',

    //路由规则
    'URL_ROUTE_RULES' => array(
        '/^edit\/aid\/(\d{1,5})$/' => 'Post/edit?aid=:1',
        '/^reply\/mid\/(\d{1,5})$/' => 'Message/reply?mid=:1'
    )
);