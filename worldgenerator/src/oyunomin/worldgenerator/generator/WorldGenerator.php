<?php

namespace oyunomin\worldgenerator\generator; 

use pocketmine\block\VanillaBlocks;
use pocketmine\world\ChunkManager;
use pocketmine\world\generator\Generator;

class WorldGenerator extends Generator {
    
    public function generateChunk(ChunkManager $world, int $chunkX, int $chunkZ): void {
        
        $chunk = $world->getChunk($chunkX, $chunkZ);
        for($x = 0; $x < 16; $x++) {
            for($z = 0; $z < 16; $z++) {
                for($y = 0; $y < 128; $y++) {
                    if($y == 0) {
                        $chunk->setFullBlock($x, $y, $z, VanillaBlocks::BEDROCK()->getFullId());
                    }
                    if($y > 0 && $y <2){
                        $chunk->setFullBlock($x, $y, $z, VanillaBlocks::DIRT()->getFullId());
                    }
                    if($y == 3){
                        $chunk->setFullBlock($x, $y, $z, VanillaBlocks::GRASS()->getFullId());
                    }
                }
            }
        }
    }

    public function populateChunk(ChunkManager $world, int $chunkX, int $chunkZ): void {
    }
}
