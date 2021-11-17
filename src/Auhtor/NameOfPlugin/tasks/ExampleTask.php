<?php

namespace Author\NameOfPlugin\tasks;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class ExampleTask extends Task {

    public function onRun(int $currentTick)
    {
        Server::getInstance()->broadcastMessage("This task sends a message every second.");
    }

}