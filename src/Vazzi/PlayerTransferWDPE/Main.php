<?php

declare(strict_types=1);

namespace Vazzi\PlayerTransferWDPE;

use pocketmine\Player;
use Vazzi\PlayerTransferWDPE\TransferAPI;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	public function onEnable()
	{
		$this->getServer()->getCommandMap()->register('PlayerTransferWDPE', new TransferCommand($this));
	}

	//Some API for your Plugin

	public function transferPlayer(Player $targetplayer, String $servername){
		TransferAPI::transferPlayer($targetplayer, $servername);
	}

}
