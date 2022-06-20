<?php
declare(strict_types=1);

namespace BlusyGG\TokoKunciUI;

use pocketmine\Server;
use pocketmine\player\Player;

use pocketmine\plugin\PluginBase;

use pocketmine\command\Command; 
use pocketmine\command\CommandSender;
use pocketmine\console\ConsoleCommandSender;
use pocketmine\event\Listener;
use pocketmine\utils\Config;

use BlusyGG\TokoKunciUI\Form\SimpleForm;

use onebone\economyapi\EconomyAPI;

class Main extends PluginBase implements Listener {
    public function onEnable() : void {
      $this->getServer()->getPluginManager()->registerEvents($this, $this);
      $this->saveResource("config.yml");
      $this->config = new Config($this->getDataFolder() . "config.yml", Config::YAML, array());
    }
  
    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool {
    
      if($cmd->getName() == "TokoKunciUI"){
          $this->TokoKunciUIMenu($sender);
      }
    
      return true;
    }
  
    public function TokoKunciUIMenu($player){
      $form = new SimpleForm(function(Player $player, int $data = null){
        if($data === null){
          return true;
        }
    
        $money = EconomyAPI::getInstance()->myMoney($player);
        switch ($data){
          case 0:
            if($money >= $this->config->get("0")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("0")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("0")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 1:
            if($money >= $this->config->get("1")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("1")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("1")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 2:
            if($money >= $this->config->get("2")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("2")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("2")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 3:
            if($money >= $this->config->get("3")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("3")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("3")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 4:
            if($money >= $this->config->get("4")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("4")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("4")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 5:
            if($money >= $this->config->get("5")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("5")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("5")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 6:
            if($money >= $this->config->get("6")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("6")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("6")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 7:
            if($money >= $this->config->get("7")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("7")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("7")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 8:
            if($money >= $this->config->get("8")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("8")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("8")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        
          case 9:
            if($money >= $this->config->get("9")["Key"]["Price"]){
              EconomyAPI::getInstance()->reduceMoney($player, $this->config->get("9")["Key"]["Price"]);
              $this->getServer()->getCommandMap()->dispatch(new ConsoleCommandsender($this->getServer(), $this->getServer()->getLanguage()), "key " . $this->config->get("9")["Key"]["Name"] . " 1 " . $player->getName());
              $player->sendMessage("§aBerhasil membeli kunci");
            } else {
              $player->sendMessage("§cGagal membeli kunci");
            }
          break;
        }
      });
      $form->setTitle("§lTokoKunciUI");
      for($i = 0;$i <= 9;$i++){
          if($this->config->exists($i)){
              $form->addButton($this->config->get($i)["Button"]["Name"] . "\n§r" . $this->config->get($i)["Button"]["Sub-Name"]);
          }
      }
      $form->sendToPlayer($player);
      return $form;
    
    }
  
}