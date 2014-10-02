<?php
/*
 * SMIbeta - DESCRIPCION
 *
 * Copyright (C) 2014 Guillermo Valdés Lozano Movimiento Libre
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
 * @package SMIbeta
 */

// Namespace
namespace PlanEstrategicoMetropolitano;

/**
 * Clase MovilidadTransporte
 */
class MovilidadTransporte extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha con el formato AAAA-MM-DD
        $this->nombre        = 'Movilidad y Transporte';
        $this->autor         = 'TrcIMPLAN';
        $this->fecha         = '2014-10-01';
        // El nombre del archivo a crear (obligatorio), la ruta a la imagen previa y el encabezado (opcionales). Use minúsculas, números y/o guiones medios.
        $this->archivo       = 'movilidad-transporte';
        $this->imagen_previa = 'movilidad-transporte/imagen.jpg';
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="movilidad-transporte/encabezado.jpg">';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion   = 'Descripción.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->categorias    = array('Blog');
        // NO CAMBIE el nombre_menu y el directorio. Están definidos para Análisis Publicados.
        $this->directorio    = 'plan-estrategico-metropolitano';
        $this->nombre_menu   = 'Movilidad y Transporte';
        // El estado ordena a Imprenta e Índice si debe 'publicar', 'revisar' o 'ignorar'
        $this->estado        = 'revisar';
        //
        // Definir lenguetas
        //
        $lenguetas = new \Base\Lenguetas();
        $lenguetas->agregar('generales',    'Datos Generales', $this->cargar_archivo_markdown('MovilidadTransporteGenerales.md'));
        $lenguetas->agregar('asistentes',   'Asistentes',      $this->cargar_archivo_markdown('MovilidadTransporteAsistentes.md'));
        $lenguetas->agregar('diagnostico',  'Diagnóstico',     $this->cargar_archivo_markdown('MovilidadTransporteDiagnostico.md'));
        $lenguetas->agregar('conclusiones', 'Conclusiones',    $this->cargar_archivo_markdown('MovilidadTransporteConclusiones.md'));
        //
        //
        // El contenido HTML y el JavaScript
        $this->contenido  = $lenguetas->html();
        $this->javascript = $lenguetas->javascript();
    } // constructor

    /**
     * Cargar archivo markdown
     *
     * @param string Ruta al archivo
     */
    protected function cargar_archivo_markdown($ruta) {
        $contenido = file_get_contents("lib/PlanEstrategicoMetropolitano/$ruta");
        if ($contenido === false) {
            throw new \Exception("Error en cargar_archivo: No se puede leer $ruta");
        }
        $html = \Michelf\Markdown::defaultTransform($contenido);
        return $html;
    } // cargar_archivo_markdown

} // MovilidadTransporte

?>
