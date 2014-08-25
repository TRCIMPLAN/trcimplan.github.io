<?php
/*
 * SMIbeta - Contacto Página Inicial
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
namespace Contacto;

/**
 * Clase PaginaInicial
 */
class PaginaInicial extends \Base\Plantilla {

    // public $sitio_titulo;
    // public $sitio_url;
    // public $rss;
    // public $favicon;
    // public $propio_css;
    // public $en_raiz;
    // public $para_compartir;
    // public $autor;
    // public $mensaje_oculto;
    // public $pie;
    // public $titulo;
    // public $descripcion;
    // public $claves;
    // public $directorio;
    // public $ruta;
    // public $imagen_previa;
    // public $navegacion;
    // public $contenido;
    // public $mapa_inferior;
    // public $javascript;

    /**
     * Constructor
     */
    public function __construct() {
        $this->titulo        = 'Contacto';
        $this->descripcion   = 'Redes sociales, correos electrónicos y teléfonos del IMPLAN Torreón.';
        $this->claves        = 'IMPLAN, Torreon, Contacto, email, Redes Sociales, Teléfono';
        $this->directorio    = 'contacto';
        $this->ruta          = "contacto/index.html";
        $this->contenido     = <<<FINAL
<h4>Redes sociales</h4>

<ul>
    <li>Twitter <a href="http://www.twitter.com/trcimplan" target="_blank">@trcimplan</a></li>
    <li>Facebook <a href="https://facebook.com/trcimplan" target="_blank">/trcimplan</a></li>
</ul>

<h4>Correos electrónicos</h4>

<ul>
    <li>Información general:<br />
      <a href="mailto:info@trcimplan.mx">info@trcimplan.mx</a></li>
    <li>Eduardo Holguín, Director General:<br />
      <a href="mailto:eholguin@trcimplan.mx">eholguin@trcimplan.mx</a></li>
    <li>Luis Campos, Director de Planeacíon Urbana:<br />
      <a href="mailto:lcampos@trcimplan.mx">lcampos@trcimplan.mx</a></li>
    <li>Rodrigo González, Director de Investigación Estratégica:<br />
      <a href="mailto:rgonzalez@trcimplan.mx">rgonzalez@trcimplan.mx</a></li>
</ul>

<h4>Teléfono</h4>

<ul>
    <li>(871) 500 7078</li>
</ul>

FINAL;
    } // constructor

    /**
     * HTML
     *
     * @return string Código HTML
     */
    public function html() {
        // Navegacion
        $this->navegacion                = new \Base\Navegacion();
        $this->navegacion->opcion_activa = 'Contacto';
        // Acumularemos en este arreglo
        $a = array();
        // Acumular
        $a[] = '<article>';
        $a[] = '  <header>';
        $a[] = "    <h1>{$this->titulo}</h1>";
        $a[] = '  </header>';
        $a[] = $this->contenido;
        $a[] = '</article>';
        // Redefinir contenido
        $this->contenido = implode("\n", $a);
        // Mapa Inferior
        $this->mapa_inferior = new \Base\MapaInferior();
        // Entregar resultado del padre
        return parent::html();
    } // html

} // Clase PaginaInicial

?>
