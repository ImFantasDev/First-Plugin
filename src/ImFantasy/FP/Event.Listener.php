<?php namespace ImFantasy\FP;

use pocketmine\event\Listener;

class EventListener implements {

    public function onJoin(PlayerJoinEvent $event) : void {
        $player = $event->getPlayer();
        $event->setJoinMessage( joinMessage: "Welcome, " . $player->getName());
    }

    public function onChat(PlayerChatEvent $event) : void {
        $player = $event->getPlayer();
        $nsg = $event->getMessage();
        $event->setFormat( format: $player->getName().": " . TextFormat::GREEN . $nsg);
    }

}