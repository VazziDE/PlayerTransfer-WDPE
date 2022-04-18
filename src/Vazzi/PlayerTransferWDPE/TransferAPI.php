<?php


namespace Vazzi\PlayerTransferWDPE;

use pocketmine\player\Player;

class TransferAPI
{

	public static function transferPlayer(Player $player, String $server){

	    $player->getNetworkSession()->transfer($server, 19132);

	}

}