<?php

namespace BotApp\commands\default;

use Rezident\SelfDocumentedTelegramBotSdk\types\GettingUpdates\Update;
use Rezident\WiseTelegramBot\command\CommandInterface;

class DefaultCommand implements CommandInterface
{
    public function handle(string $argument, Update $update): string|array|null
    {
        return 'I don\'t understand you.';
    }
}
