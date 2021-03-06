<?php

/**
 * 
 *
 * 
 * 
 *
 * 
 * 
 *
 *██████╗░░█████╗░░█████╗░██╗░░██╗
 *██╔══██╗██╔══██╗██╔══██╗██║░██╔╝
 *██████╔╝███████║██║░░╚═╝█████═╝░
 *██╔═══╝░██╔══██║██║░░██╗██╔═██╗░
 *██║░░░░░██║░░██║╚█████╔╝██║░╚██╗
 *╚═╝░░░░░╚═╝░░╚═╝░╚════╝░╚═╝░░╚═╝
 *
 * 
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

namespace arthur\CustomBow\manifest;

class Version
{
    /** @var int */
    private $first;

    /** @var int */
    private $second;

    /** @var int */
    private $third;

    /**
     * @param int $first
     * @param int $second
     * @param int $third
     */
    public function __construct(int $first, int $second, int $third)
    {
        $this->first = $first;
        $this->second = $second;
        $this->third = $third;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [$this->first, $this->second, $this->third];
    }
}
