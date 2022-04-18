# PlayerTransfer-WDPE
<h3> PlayerTransferWDPE is a PocketMine-MP API 4 Plugin to transfer player via WaterDogPE Proxy. </h3>

<h1>API 4</h1>

You can use it in-game per command to transfer player or yourself with the following command:

<h4>Transfer Yourself</h4>

/wtransfer ServerName

<h4>Transfer Other Player</h4>

/wtransfer PlayerName ServerName

<h4> Simple API </h4>

If you want to use my API to transfer Player, you can add the following Line to your code:

```
$this->getServer()->getPluginManager()->getPlugin("PlayerTransferWDPE")->transferplayer($player, "yourservername");
```
