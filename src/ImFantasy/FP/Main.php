<?php namespace ImFantasy/FP

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    private static self $instance;

    public function onEnable() : void {
        $self::$instance = $this;
        $this->getServer()->getPluginManager()->registerEvents(new EventListener(), $this);
        $this->getLogger()->info("Plugin Enable!")
    }

    public static function getInstance() : self {
        return self::$instance;
    }

}