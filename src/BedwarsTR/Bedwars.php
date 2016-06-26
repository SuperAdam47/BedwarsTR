
<?php

namespace BedwarsTR;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\player\PlayerDamageEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\inventory\InventoryTransactionEvent;
use pocketmine\event\inventory\InventoryPickupItemEvent;
use pocketmine\event\inventory\InventoryCloseEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\inventory\BaseTransaction;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\plugin\Plugin;
use pocketmine\item\Item;
use pocketmine\Player;
use pocketmine\block\Block;
use pocketmine\tile\Tile;
use pocketmine\tile\Chest;
use pocketmine\inventory\ChestInventory;
use pocketmine\inventory\PlayerInventory;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\nbt\tag\IntTag; 
use pocketmine\nbt\tag\ShortTag;
use pocketmine\nbt\tag\StringTag;
use pocketmine\Server;
use pocketmine\entity\Entity;
use pocketmine\entity\Human;
use pocketmine\entity\Villager;
use pocketmine\block\Bed;
use pocketmine\level\Level;
use pocketmine\level\Position;
use pocketmine\math\Vector3;
use pocketmine\scheduler\CallbackTask;
use pocketmine\scheduler\PluginTask;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\level\sound\PopSound;
use pocketmine\level\sound\GenericSound;
use pocketmine\level\sound\FizzSound;
use pocketmine\level\particle\FloatingTextParticle;
use pocketmine\level\particle\SmokeParticle;
use pocketmine\level\particle\LargeExplodeParticle;
use pocketmine\utils\Config;
use pocketmine\utils\TextFormat as c;

class BedWars extends PluginBase implements Listener{
	
	public $prefix = "§8[§4Bed§fWars§8]";
	public $spawnermode = 0;
	public $bedmode=0;
	public $bm=0;
	public $smode = 0;
	public $irons=0;
	public $golds=0;
	public $bronzs=0;
	public $game = "";
	public $uc = 0;
	public $shop = 0;
	public $teams = array();
	public $spawners = "";

    public function onEnable(){
	  $this->getServer()->getPluginManager()->registerEvents($this, $this);
	  $this->getServer()->getLogger()->info("§8[==========================================]");
	  $this->getServer()->getLogger()->info("§8[§cBed§fWars§4TR§8]§a Plugin aktifleştirildi");
	  $this->getServer()->getLogger()->info("§8[§cBed§fWars§4TR§8]§e - plugin ");
	  $this->getServer()->getLogger()->info("§8[==========================================]");
          $this->saniye=0;
	  $this->mode=0;
	  $this->create=0;
	  @mkdir($this->getDataFolder());
          $this->config = new Config($this->getDataFolder() . "config.json", Config::JSON);
	  $this->maps = new Config($this->getDataFolder() . "maps.json", Config::JSON);
	  $this->config->save();
      $this->players=array();
    }
	

}
?>
