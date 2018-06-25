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

namespace Oui\Player {

    if (class_exists('Oui\Player\Provider')) {

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
        }
    }
}

namespace {
    function oui_viddsee($atts) {
        return oui_player(array_merge(array('provider' => 'viddsee'), $atts));
    }

    function oui_if_viddsee($atts, $thing) {
        return oui_if_player(array_merge(array('provider' => 'viddsee'), $atts), $thing);
    }
}
