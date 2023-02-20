<?php

use Rezident\WiseTelegramBot\Bot;

require_once __DIR__ . '/vendor/autoload.php';

function getBotInstance()
{
    return (new Bot('Put the token of your bot here'))
//        ->acceptOnly(0) // Put your id here so the bot will only process your updates
        ->setDefaultCommand(\BotApp\commands\default\DefaultCommand::class)
        ->readCommands(__DIR__ . '/src/commands');
}
