<?php
/*
 * SMIbeta - Base Menu Principal
 *
 * Copyright (C) 2014 IMPLAN Torreón
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
 * Clase MenuPrincipal
 */
class MenuPrincipal extends \Configuracion\MenuPrincipalConfig {

    // public $sitio_titulo;
    // public $logotipo;
    // public $opciones;
    public $en_raiz = false; // Si es verdadero los vínculos serán para un archivo en la raíz del sitio

    /**
     * Opción
     *
     * @return string Código HTML
     */
    protected function opcion($etiqueta, $url) {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '      <li>';
        // Si el URL es absoluto
        if ((strpos($url, 'http://') === 0) || (strpos($url, 'https://') === 0) || (strpos($url, '/') === 0)) {
            $a[] = "        <a href=\"$url\">$etiqueta</a>";
        } elseif ($this->en_raiz) {
            $a[] = "        <a href=\"$url\">$etiqueta</a>";
        } else {
            $a[] = "        <a href=\"../$url\">$etiqueta</a>";
        }
        $a[] = '      </li>';
        // Entregar
        return implode("\n", $a);
    } // opcion

    /**
     * Opción con despliegue
     *
     * @return string Código HTML
     */
    protected function opcion_despliegue($etiqueta, $opciones) {
        // Acumularemos la entrega en este arreglo
        $a = array();
        // Acumular
        $a[] = '      <li class="dropdown">';
        $a[] = '        <a class="dropdown-toggle" data-toggle="dropdown" href="#">';
        $a[] = "          $etiqueta <i class=\"fa fa-caret-down\"></i>";
        $a[] = '        </a>';
        $a[] = '        <ul class="dropdown-menu dropdown-user">';
        foreach ($opciones as $eti => $url) {
            if ((strpos($url, 'http://') === 0) || (strpos($url, 'https://') === 0) || (strpos($url, '/') === 0)) {
                $a[] = "          <li><a href=\"$url\">$eti</a></li>";
            } elseif ($this->en_raiz) {
                $a[] = "          <li><a href=\"$url\">$eti</a></li>";
            } else {
                $a[] = "          <li><a href=\"../$url\">$eti</a></li>";
            }
        }
        $a[] = '        </ul>';
        $a[] = '      </li>';
        // Entregar
        return implode("\n", $a);
    } // opcion_despliegue

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
        // Navbar
        $a[] = '    <ul class="nav navbar-top-links">';
        foreach ($this->opciones as $etiqueta => $parametros) {
            if (is_array($parametros)) {
                $a[] = $this->opcion_despliegue($etiqueta, $parametros);
            } else {
                $a[] = $this->opcion($etiqueta, $parametros);
            }
        }
        $a[] = '    </ul>';
        // Navbar-Right
    //  $a[] = '    <ul class="nav navbar-top-links navbar-right">';
    //  $a[] = '      <li><a href="rss.xml">RSS</a></li>';
    //  $a[] = '    </ul>';
        // Entregar
        return implode("\n", $a);
    } // html

} // Clase MenuPrincipal

?>
