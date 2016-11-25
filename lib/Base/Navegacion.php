<?php
/**
 * Plataforma de Conocimiento - Navegación
 *
 * Copyright (C) 2016 Guillermo Valdés Lozano
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
 * @package PlataformaDeConocimiento
 */

namespace Base;

/**
 * Clase Navegacion
 */
class Navegacion extends \Configuracion\NavegacionConfig {

    // protected $sitio_titulo;
    // protected $logotipo;
    // protected $opciones;
    // static public $iconos;
    // protected $buscador_html;
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
     * Formatear etiqueta
     *
     * Como cada clave debe ser única, debe de usarse 'Opcion > Subopción' en NavegacionConfig
     *
     * @param  string
     * @return string
     */
    protected function formatear_etiqueta($in_etiqueta) {
        // Si la etiqueta tiene "mayor que" se retira lo que está a la izquierda de éste
        $posicion = strrpos($in_etiqueta, '>'); // Busca la última aparición
        if ($posicion === false) {
            return trim($in_etiqueta);
        } else {
            return trim(substr($in_etiqueta, $posicion + 1));
        }
    } // formatear_etiqueta

    /**
     * Vinculo
     *
     * De acuerdo a cómo empieza el URL y a la bandera en_raiz, crea el vínculo correcto
     *
     * @param  string Etiqueta
     * @param  string URL
     * @return string Código HTML
     */
    protected function vinculo($in_etiqueta, $url) {
        // Si la etiqueta tiene "mayor que" se retira lo que está a la izquierda de éste
        $etiqueta = $this->formatear_etiqueta($in_etiqueta);
        // Icono
        if (array_key_exists($etiqueta, self::$iconos)) {
            $icono = sprintf('<span class="navegacion-icono"><i class="%s"></i></span>', self::$iconos[$etiqueta]);
        } else {
            $icono = '<span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span>';
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
        // Buscador
        $a[] = '        <li class="sidebar-search">';
        if ($this->buscador_html != '') {
            $a[] = $this->buscador_html;
        } else {
            $a[] = '          <div class="input-group custom-search-form">';
            $a[] = '            <input type="text" class="form-control" placeholder="Buscar...">';
            $a[] = '              <span class="input-group-btn">';
            $a[] = '                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>';
            $a[] = '              </span>';
            $a[] = '          </div>';
        }
        $a[] = '        </li>';
        // Bucle por las opciones
        foreach ($this->opciones as $etiqueta => $parametros) {
            if (is_array($parametros)) {
                // Segundo nivel
                $e = $this->formatear_etiqueta($etiqueta);
                if (array_key_exists($e, self::$iconos)) {
                    $icono = sprintf('<span class="navegacion-icono"><i class="%s"></i></span>', self::$iconos[$e]);
                } else {
                    $icono = '<span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span>';
                }
                // Buscar si la opción activa es del tercer nivel
                $es_opcion_activa = false;
                foreach ($parametros as $eti=> $param) {
                    if (is_array($param) && array_key_exists($this->opcion_activa, $param)) {
                        $es_opcion_activa = true;
                    }
                }
                // Si la opción activa es de tercer nivel, entonces también esta es activa
                if (($etiqueta == $this->opcion_activa) || array_key_exists($this->opcion_activa, $parametros) || $es_opcion_activa) {
                    $a[] = '        <li class="active">';
                } else {
                    $a[] = '        <li>';
                }
                $a[] = "          <a href=\"#\">$icono $e<span class=\"fa arrow\"></span></a>";
                $a[] = '          <ul class="nav nav-second-level">';
                foreach ($parametros as $eti=> $param) {
                    if (is_array($param)) {
                        // Tercer nivel
                        $e = $this->formatear_etiqueta($eti);
                        if (array_key_exists($e, self::$iconos)) {
                            $icono = sprintf('<span class="navegacion-icono"><i class="%s"></i></span>', self::$iconos[$e]);
                        } else {
                            $icono = '<span class="navegacion-icono"><i class="fa fa-file-text-o"></i></span>';
                        }
                        if (array_key_exists($this->opcion_activa, $param)) {
                            $a[] = '            <li class="active">';
                        } else {
                            $a[] = '            <li>';
                        }
                        $a[] = "              <a href=\"#\">$icono $e<span class=\"fa arrow\"></span></a>";
                        $a[] = '              <ul class="nav nav-third-level">';
                        foreach ($param as $e => $u) {
                            if ($this->opcion_activa == $e) {
                                $a[] = '                <li class="active">'.$this->vinculo($e, $u).'</li>';
                            } else {
                                $a[] = '                <li>'.$this->vinculo($e, $u).'</li>';
                            }
                        }
                        $a[] = '              </ul>';
                        $a[] = '            </li>';
                    } else {
                        // Hasta segundo nivel
                        if ($this->opcion_activa == $eti) {
                            $a[] = '            <li class="active">'.$this->vinculo($eti, $param).'</li>';
                        } else {
                            $a[] = '            <li>'.$this->vinculo($eti, $param).'</li>';
                        }
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
    //  $a[] = $this->menu_superior();
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
        // Sólo por parte del buscador puede haber Javascript
        if ($this->buscador_js != '') {
            return $this->buscador_js;
        } else {
            return '';
        }
    } // javascript

} // Clase Navegacion

?>
