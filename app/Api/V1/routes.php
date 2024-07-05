<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'checkUserId'], function () use ($router) {
    $router->post('/subscribe', 'SubscriptionController@subscribe');
    $router->post('/subscribe/channel', 'SubscriptionController@subscribeChannel');
    $router->post('/send', 'MessageController@sendMessage');
    $router->post('/webhook', 'WebhookController@webhook');
});
