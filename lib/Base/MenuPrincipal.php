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
class MenuPrincipal extends \Configuracion\MenuPrincipalConfig {

    // public $sitio_titulo;
    // public $menu_principal_logo;
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
        // Navbar-Toggle
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
        // Navbar
        $a[] = '    <ul class="nav navbar-top-links">';
        $a[] = '      <li class="dropdown">';
        $a[] = '        <a class="dropdown-toggle" data-toggle="dropdown" href="#">';
        $a[] = '          Institucional <i class="fa fa-caret-down"></i>';
        $a[] = '        </a>';
        $a[] = '        <ul class="dropdown-menu dropdown-user">';
        $a[] = '          <li><a href="#">Visión / Misión</a></li>';
        $a[] = '          <li><a href="#">Mensaje del Director</a></li>';
        $a[] = '          <li><a href="#">Quienes Somos</a></li>';
        $a[] = '          <li><a href="#">Estructura Orgánica</a></li>';
        $a[] = '          <li><a href="#">Reglamentos</a></li>';
        $a[] = '          <li><a href="#">Información Finaciera</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </li>';
        $a[] = '    </ul>';
        // Navbar-Right
     // $a[] = '    <ul class="nav navbar-top-links navbar-right">';
     // $a[] = '      <li><a href="rss.xml">RSS</a></li>';
     // $a[] = '    </ul>';
        // Entregar
        return implode("\n", $a);
    } // html

/*
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
 */

} // Clase MenuPrincipal

?>
