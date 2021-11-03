<?php

/**
 *██████╗░░█████╗░░█████╗░██╗░░██╗
 *██╔══██╗██╔══██╗██╔══██╗██║░██╔╝
 *██████╔╝███████║██║░░╚═╝█████═╝░
 *██╔═══╝░██╔══██║██║░░██╗██╔═██╗░
 *██║░░░░░██║░░██║╚█████╔╝██║░╚██╗
 *╚═╝░░░░░╚═╝░░╚═╝░╚════╝░╚═╝░░╚═╝
 *
 * Pack is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Pack is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Pack. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace arthur\CustomBow;

use pocketmine\plugin\PluginBase;

use arthur\CustomBow\ResourcePack;
use arthur\CustomBow\manifest\Version;
use arthur\CustomBow\generator\SimpleResourcePack;

class Main extends PluginBase
{
    public function onEnable() : void
    {
        // Keep "resourcepack.zip"; the same way or it wont work :)
        $resourcePackPath = $this->getDataFolder() . "resourcepack.zip";
        // Generate the ResourcePack.
        $pack = new SimpleResourcePack($this, new Version(1, 0, 0));
        $pack->addFile("geometrys/gun.json", "models/entity/bow/gun.json");
        $pack->addFile("item_models/bow.json", "attachables/bow.json");
        $pack->addFile("item_models/bow-PMMP.json", "attachables/bow-PMMP.json");
        $pack->addFile("item_models/bow-PMMP2.json", "attachables/bow-PMMP2.json");
        $pack->addFile("geo_textures/gun.png", "textures/items/gun.png");
        $pack->addFile("ren_con/player.render_controllers.json", "render_controllers/player.render_controllers.json");
        $pack->addFile("lang/en_US.lang", "texts/en_US.lang");
        $pack->addFile("anim/bow_gun.animation.json", "animations/bow_gun.animation.json");
        $pack->addFile("anim_con/player.animation_controllers.json", "animation_controllers/player.animation_controllers.json");
        $pack->addFile("sound/random/deagle.ogg", "sounds/random/deagle.ogg");
        $pack->addFile("sound/sound_definitions.json", "sounds/sound_definitions.json");
        $pack->setPackIcon("packicon.png");
        $pack->generate($resourcePackPath);
        // Register the ResourcePack.
        ResourcePack::register($resourcePackPath);
    }

}
