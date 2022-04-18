<?php


namespace Vazzi\PlayerTransferWDPE;


use pocketmine\player\Player;
use pocketmine\plugin\Plugin;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginOwned;

class TransferCommand extends Command implements PluginOwned
{
	private Main $plugin;

	public function __construct(Main $main)
	{
		parent::__construct('wtransfer');
		$this->description = "Transfer Player to a Downstream Server";
		$this->setUsage("§cUse /wtransfer ServerName or /wtransfer Player ServerName");
		$this->setPermission("wtransfer.use");
		$this->plugin = $main;
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args)
	{
		if(!$sender->hasPermission("wtransfer.use")){
			return true;
		}

		if(count($args) < 1)
		{
			$sender->sendMessage($this->usageMessage);
			return true;
		}

		if(!isset($args[1]))
		{
			if(!$sender instanceof Player)
			{
				return true;
			}

			$server = $args[0];

			$sender->sendMessage("§aYou have been connected to $server Server.");
			TransferAPI::transferPlayer($sender, $server);

			return true;
		}

		if(!$this->getOwningPlugin()->getServer()->getPlayerByPrefix($args[0]) instanceof Player) {
			return true;
		}

		$target = $this->getOwningPlugin()->getServer()->getPlayerByPrefix($args[0]);
		$server = $args[1];

		$sender->sendMessage("§aPlayer {$target->getName()} have have been connected to $server Server.");
		TransferAPI::transferPlayer($target, $server);

		return true;

	}

    public function getOwningPlugin(): Plugin
    {
        return $this->plugin;
    }
}