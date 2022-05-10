<?php

namespace oyunomin\worldgenerator; 

use pocketmine\Server;
use pocketmine\plugin\PluginBase; 
use pocketmine\world\generator\GeneratorManager;
use oyunomin\worldgenerator\generator\WorldGenerator;

class Loader extends PluginBase {
    protected function onLoad():void{ 
        GeneratorManager::getinstance()->addGenerator(WorldGenerator::class, "world_generator", fn() => null);
    }
}
