
<?php

namespace BedwarsTR;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerDamageEvent;
use pocketmine\scheduler\CallbackTask;
use pocketmine\scheduler\PluginTask;
use pockrtmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\plugin;
use pocketmine\player;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\level\sound\ClickSound;
use pocketmine\level\sound\PopSound;
use pocketmine\level\sound\FizzSound;
use pocketmine\level\particle\DustParticle;
use pocketmine\level\particle\LargeExplodeParticle;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat;

class Bedwars extends PluginBase implements Listener{

private $kteam;
private $mteam;
private $steam;
private $yteam;

    public function onEnable(){
      $this->getLogger()->info("§8[§cBed§4WarsTR§8]§a Plugin aktifleştirildi")
    }
    public function OnDisable(){
        $this->getLogger()->inf("§8[§cBed§4Wars§8]§c Plugin Deaktifleştirildi")
    }
    public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
        switch($cmd->getName()){
            case "bw";
        }
    }


}
?>
