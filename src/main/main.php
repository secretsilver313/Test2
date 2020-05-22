<?php

namespace main;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Main extends PluginBase{
  
  
    public function onEnable() {
  }

    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool
    {
            if($cmd->getName()
