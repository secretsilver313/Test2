<?php

namespace main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\Player;

class Main extends PluginBase{
  
  
    public function onEnable() {
  }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
            if($cmd->getName() == "id") {
              if($player->hasPermission("id.use"); {
                $getid = $player->getInventory()->getItemInHand()->getId();
                $player->sendMessage(" The ID of this item is $getid  ");
              }
                 }else{
                   $sender->sendMessage("§4You Dont have permission to use this command");
                 }
                 }
                 
