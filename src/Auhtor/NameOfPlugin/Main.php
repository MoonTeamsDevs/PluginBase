<?php

namespace Author\NameOfPlugin;

use Author\NameOfPlugin\commands\all\Example;
use Author\NameOfPlugin\listeners\PlayerListener;
use Author\NameOfPlugin\tasks\ExampleTask;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public static self $instance;

    public static function getInstance(): self{
        return self::$instance;
    }

    public function onEnable()
    {
        // For Main::getInstance()
        self::$instance = $this;

        // Register your commands here
        $this->getServer()->getCommandMap()->registerAll("NameOfPlugin", [
            new Example("example", "Example command", "/example", ["ex"])
        ]);

        // Register your listeners
        $this->getServer()->getPluginManager()->registerEvents(new PlayerListener(), $this);

        // Setup your task
        $this->getScheduler()->scheduleRepeatingTask(new ExampleTask(), 20);
    }

}