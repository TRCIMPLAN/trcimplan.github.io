<?php
/**
 * Movimiento Libre - Autor
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
 * @package MovimientoLibre
 */

namespace Base;

/**
 * Clase Autor
 */
class Autor {

    const ICONOS_DIR   = 'imagenes';    // Nombre del directorio donde están los subdirectorios 64, 128 y 256 con los iconos
    const PERFILES_DIR = 'lib/Autores'; // Ruta al directorio donde buscar archivos Markdown con perfiles
    public $apodo;           // Nickname
    public $titulo;          // Ing., Arq., Lic., etc.
    public $nombre_completo; // Nombres y apellidos
    public $icono;           // Nombre del archivo para el icono, sin extensión
    public $empresa;         // Empresa a la que sirve
    public $cargo;           // Cargo que ocupa
    public $semblanza;       // Texto que describa al autor
    public $email;           // Correo electrónico
    public $twitter;         // Cuenta de twitter
    public $perfil_archivo;  // Nombre del archivo con el perfil en Markdown, debe estar en /lib/Autores
    public $estatus = 'A';   // Caracter A es activo, B es baja
    public $en_raiz = false; // Verdadero para un URL que va a la raiz del sitio web
    public $en_otro = true;  // Verdadero para un URL a OTRO directorio distinto

    /**
     * Constructor
     *
     * @param string Apodo
     * @param string Título
     * @param string Nombre completo
     * @param string Nombre del archivo para el icono, sin extensión
     * @param string Empresa
     * @param string Cargo
     * @param string Semblanza
     * @param string e-mail
     * @param string Twitter
     * @param string Nombre del archivo con el perfil en Markdown
     * @param string Caracter A para activo, B para baja
     */
    public function __construct($apodo, $titulo, $nombre_completo, $icono='', $empresa='', $cargo='', $semblanza='', $email='', $twitter='', $perfil_archivo='', $estatus='A') {
        $this->apodo           = $apodo;
        $this->titulo          = $titulo;
        $this->nombre_completo = $nombre_completo;
        $this->icono           = $icono;
        $this->empresa         = $empresa;
        $this->cargo           = $cargo;
        $this->semblanza       = $semblanza;
        $this->email           = $email;
        $this->twitter         = $twitter;
        $this->perfil_archivo  = $perfil_archivo;
        $this->estatus         = $estatus;
    } // constructor

    /**
     * Título Nombre Completo
     *
     * Entrega un texto 'titulo nombre_completo', cuando el título es vacío sólo es 'nombre-completo'.
     *
     * @return string El título y nombre completo juntos
     */
    public function titulo_nombre_completo() {
        if ($this->nombre_completo == '') {
            throw new \Exception("Error en Autor: El nombre completo es incorrecto.");
        }
        if ($this->titulo != '') {
            return "{$this->titulo} {$this->nombre_completo}";
        } else {
            return $this->nombre_completo;
        }
    } // titulo_nombre_completo

    /**
     * URL
     *
     * @return string URL relativo para vincular a la página en autores
     */
    public function url() {
        // Si no hay apodo, el nombre del archivo es el nombre completo
        if ($this->apodo != '') {
            $pagina = sprintf('%s.html', Funciones::caracteres_para_web($this->apodo));
        } else {
            $pagina = sprintf('%s.html', Funciones::caracteres_para_web($this->nombre_completo));
        }
        // Entregar URL
        if ($this->en_raiz) {
            return sprintf('%s/%s', \Configuracion\AutoresConfig::DIRECTORIO, $pagina);
        } elseif ($this->en_otro) {
            return sprintf('../%s/%s', \Configuracion\AutoresConfig::DIRECTORIO, $pagina);
        } else {
            return $pagina;
        }
    } // url

    /**
     * Icono URL
     *
     * @param  integer Tamaño del icono, puede ser 64, 128 o 256, por defecto 128
     * @return string  URL relativo a la imagen icono
     */
    public function icono_url($tamano=64) {
        if (($tamano != 256) && ($tamano != 128) && ($tamano != 64)) {
            throw new \Exception("Error en Autor: Tamaño de icono incorrecto.");
        }
        if ($this->icono == '') {
            $this->icono = 'unknown';
        }
        if ($this->en_raiz) {
            return sprintf('%s/%s/%s.png', self::ICONOS_DIR, $tamano, $this->icono);
        } else {
            return sprintf('../%s/%s/%s.png', self::ICONOS_DIR, $tamano, $this->icono);
        }
    } // icono_url

} // Autor

?>
