<?php


namespace Vazzi\PlayerTransferWDPE;


use pocketmine\network\mcpe\protocol\TransferPacket;
use pocketmine\Player;

class TransferAPI
{

	public static function transferPlayer(Player $player, String $server){

		$transferpk = new TransferPacket();
		$transferpk->address = $server;

		$player->sendDataPacket($transferpk);

	}

}