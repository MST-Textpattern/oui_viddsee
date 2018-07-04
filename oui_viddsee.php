<?php

/*
 * This file is part of oui_viddsee,
 * a oui_player v2+ extension to easily embed
 * Viddsee customizable video players in Textpattern CMS.
 *
 * https://github.com/NicolasGraph/oui_viddsee
 *
 * Copyright (C) 2018 Nicolas Morand
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA..
 */

/**
 * Viddsee
 *
 * @package Oui\Player
 */

namespace Oui {

    if (class_exists('Oui\Provider')) {

        class Viddsee extends Provider
        {
            protected static $patterns = array(
                'video' => array(
                    'scheme' => '#^(http|https)://(www\.)?(viddsee\.com/(video|player)/)(\S+/)?([^&?/]+)$#i',
                    'id'     => '6',
                ),
            );
            protected static $src = '//www.viddsee.com/';
            protected static $glue = array('player/', '?', '&amp;');
            protected static $dims = array(
                'width'     => array(
                    'default' => '560',
                ),
                'height'    => array(
                    'default' => '315',
                ),
                'ratio'     => array(
                    'default' => '',
                ),
            );
        }
    }
}
