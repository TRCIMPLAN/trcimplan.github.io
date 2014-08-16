<?php
/*
 * SMIbeta - Menu Principal
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

// NAMESPACE
namespace Base;

/**
 * Clase MenuPrincipal
 */
class MenuPrincipal {

    public $menu_principal_logo;
    public $en_raiz = false;

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '    <div class="navbar-header">';
        $a[] = '      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">';
        $a[] = '        <span class="sr-only">Toggle navigation</span>';
        $a[] = '        <span class="icon-bar"></span>';
        $a[] = '        <span class="icon-bar"></span>';
        $a[] = '        <span class="icon-bar"></span>';
        $a[] = '      </button>';
        if ($this->menu_principal_logo != '') {
            if ($this->en_raiz) {
                $a[] = "      <a class=\"navbar-brand\" href=\"index.html\"><img class=\"navbar-brand-img\" src=\"{$this->menu_principal_logo}\" alt=\"{$this->sitio_titulo}\"></a>";
            } else {
                $a[] = "      <a class=\"navbar-brand\" href=\"../index.html\"><img class=\"navbar-brand-img\" src=\"../{$this->menu_principal_logo}\" alt=\"{$this->sitio_titulo}\"></a>";
            }
        } else {
            if ($this->en_raiz) {
                $a[] = "      <a class=\"navbar-brand\" href=\"index.html\">{$this->sitio_titulo}</a>";
            } else {
                $a[] = "      <a class=\"navbar-brand\" href=\"../index.html\">{$this->sitio_titulo}</a>";
            }
        }
        $a[] = '    </div>';
        $a[] = '    <ul class="nav navbar-nav navbar-right">';
        $a[] = '      <li><a href="rss.xml">RSS</a></li>';
        $a[] = '    </ul>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase MenuPrincipal

?>
