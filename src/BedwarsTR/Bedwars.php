
<?php

namespace BedwarsTR;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class Bedwars extends PluginBase implements Listener{
    public function onEnable(){
      $this->getLogger()->info("§8[§cBed§4WarsTR§8]§a Plugin aktifleştirildi")
    }
    public funcrion odisable(){
        $this->getLogger()->inf("§8[§cBed§4Wars§8]§c Plugin Deaktifleştirildi")
    }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        switch($cmd->getName()){
            case "bw";
        }
    }

}
?>
