<?php
return array(
	//'配置项'=>'配置值'
    'LAYOUT_ON' => true,
    'LAYOUT_NAME' => 'layout',

    //路由规则
    'URL_ROUTE_RULES' => array(
        '/^index$/' => 'Index/index',
        '/^detail\/aid\/(\d{1,5})$/' => 'Index/detail?aid=:1',
    )
);