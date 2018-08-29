namespace RumDaDuMCPE;

class Main extends \pocketmine\plugin\PluginBase implements \pocketmine\event\Listener {
    public function onEnable() {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onJoin(\pocketmine\event\player\PlayerJoinEvent $e) {
        $this->randomSpawn($e->getPlayer());
    }
    public function randomSpawn(\pocketmine\Player $p) {
        $x = $z = mt_rand(0, 1000);
        $y = $p->getLevel()->getHighestBlockAt(($p->getFloorX(), $p->getFloorZ()) + 1);
        $p->teleport($x, $y, $z);
    }
}