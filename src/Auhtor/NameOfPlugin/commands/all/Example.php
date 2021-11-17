<?php

namespace Author\NameOfPlugin\commands\all;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Example extends Command {

    public function __construct(string $name, string $description = "", string $usageMessage = null, array $aliases = [])
    {
        parent::__construct($name, $description, $usageMessage, $aliases);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        $sender->sendMessage("This is an example.");
    }

}