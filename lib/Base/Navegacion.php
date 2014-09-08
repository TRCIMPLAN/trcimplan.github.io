<?php
/*
 * SMIbeta - Navegación
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

// Namespace
namespace Base;

/**
 * Clase Navegacion
 */
class Navegacion extends \Configuracion\NavegacionConfig {

    // protected $sitio_titulo;
    // protected $logotipo;
    // protected $opciones;
    // protected $iconos;
    public $opcion_activa;   // Etiqueta de opciones en la que está
    public $en_raiz = false; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio

    /**
     * Navegación Encabezado
     *
     * @return string Código HTML
     */
    protected function navegacion_encabezado() {
        // En este arreglo acumularemos la entrega
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
        if ($this->logotipo != '') {
            if ($this->en_raiz) {
                $a[] = "      <a class=\"navbar-brand\" href=\"index.html\"><img class=\"navbar-brand-img\" src=\"{$this->logotipo}\" alt=\"{$this->sitio_titulo}\"></a>";
            } else {
                $a[] = "      <a class=\"navbar-brand\" href=\"../index.html\"><img class=\"navbar-brand-img\" src=\"../{$this->logotipo}\" alt=\"{$this->sitio_titulo}\"></a>";
            }
        } else {
            if ($this->en_raiz) {
                $a[] = "      <a class=\"navbar-brand\" href=\"index.html\">{$this->sitio_titulo}</a>";
            } else {
                $a[] = "      <a class=\"navbar-brand\" href=\"../index.html\">{$this->sitio_titulo}</a>";
            }
        }
        $a[] = '    </div>';
        // Entregar
        return implode("\n", $a);
    } // navegacion_encabezado

    /**
     * Menu Superior
     *
     * @return string Código HTML
     */
    protected function menu_superior() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '    <ul class="nav navbar-top-links navbar-right">';
        $a[] = '      <li class="dropdown">';
        $a[] = '        <a class="dropdown-toggle" data-toggle="dropdown" href="#">';
        $a[] = '          <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>';
        $a[] = '        </a>';
        $a[] = '        <ul class="dropdown-menu dropdown-user">';
        $a[] = '          <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a></li>';
        $a[] = '          <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a></li>';
        $a[] = '          <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>';
        $a[] = '        </ul>';
        $a[] = '      </li>';
        $a[] = '    </ul>';
        // Entregar
        return implode("\n", $a);
    } // menu_superior

    /**
     * Vinculo
     *
     * De acuerdo a cómo empieza el URL y a la bandera en_raiz, crea el vínculo correcto
     *
     * @param  string Etiqueta
     * @param  string URL
     * @return string Código HTML
     */
    protected function vinculo($etiqueta, $url) {
        // Icono
        if (array_key_exists($etiqueta, $this->iconos)) {
            $icono = "<i class=\"{$this->iconos[$etiqueta]}\"></i>";
        } else {
            $icono = "<i class=\"fa fa-file-text-o\"></i>";
        }
        // Si el URL es absoluto
        if ((strpos($url, 'http://') === 0) || (strpos($url, 'https://') === 0) || (strpos($url, '/') === 0)) {
            return "<a href=\"$url\" target=\"_blank\">$icono $etiqueta</a>";
        } elseif ($this->en_raiz) {
            return "<a href=\"$url\">$icono $etiqueta</a>";    // Relativo desde la raíz
        } else {
            return "<a href=\"../$url\">$icono $etiqueta</a>"; // Relativo desde otro directorio
        }
    } // vinculos

    /**
     * Menu Izquierdo
     *
     * @return string Código HTML
     */
    protected function menu_izquierdo() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '  <div class="navbar-default sidebar" role="navigation">';
        $a[] = '    <div class="sidebar-nav navbar-collapse">';
        $a[] = '      <ul class="nav" id="side-menu">';
        // Buscar
        $a[] = '        <li class="sidebar-search">';
        $a[] = '          <div class="input-group custom-search-form">';
        $a[] = '            <input type="text" class="form-control" placeholder="Buscar...">';
        $a[] = '              <span class="input-group-btn">';
        $a[] = '                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>';
        $a[] = '              </span>';
        $a[] = '          </div>';
        $a[] = '        </li>';
        // Bucle por las opciones
        foreach ($this->opciones as $etiqueta => $parametros) {
            if (is_array($parametros)) {
                // Icono
                if (array_key_exists($etiqueta, $this->iconos)) {
                    $icono = "<i class=\"{$this->iconos[$etiqueta]}\"></i>";
                } else {
                    $icono = "<i class=\"fa fa-file-text-o\"></i>";
                }
                // Dos niveles
                if (array_key_exists($this->opcion_activa, $parametros)) {
                    $a[] = '        <li class="active">';
                } else {
                    $a[] = '        <li>';
                }
                $a[] = "          <a href=\"#\">$icono $etiqueta<span class=\"fa arrow\"></span></a>";
                $a[] = '          <ul class="nav nav-second-level">';
                foreach ($parametros as $e => $u) {
                    if ($this->opcion_activa == $e) {
                        $a[] = '            <li class="active">'.$this->vinculo($e, $u).'</li>';
                    } else {
                        $a[] = '            <li>'.$this->vinculo($e, $u).'</li>';
                    }
                }
                $a[] = '          </ul>';
                $a[] = '        </li>';
            } else {
                // Un nivel
                if ($this->opcion_activa == $etiqueta) {
                    $a[] = '        <li class="active">'.$this->vinculo($etiqueta, $parametros).'</li>';
                } else {
                    $a[] = '        <li>'.$this->vinculo($etiqueta, $parametros).'</li>';
                }
            }
        }
        // Cerrar
        $a[] = '      </ul>'; // nav
        $a[] = '    </div>';  // sidebar-nav
        $a[] = '  </div>';    // sidebar
        // Entregar
        return implode("\n", $a);
    } // menu_izquierdo

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // En este arreglo acumularemos la entrega
        $a = array();
        // Acumular
        $a[] = '  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">';
        $a[] = $this->navegacion_encabezado();
    //~ $a[] = $this->menu_superior();
        $a[] = $this->menu_izquierdo();
        $a[] = '  </nav>';
        // Entregar
        return implode("\n", $a);
    } // html

    /**
     * Javascript
     *
     * @return string Código javascript
     */
    public function javascript() {
        return '';
    } // javascript

} // Clase Navegacion

?>
