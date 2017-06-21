<?php
/**
 * TrcIMPLAN SMIBase - PublicacionWeb
 *
 * Copyright (C) 2017 Guillermo Valdés Lozano <guivaloz@movimientolibre.com>
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

namespace SMIBase;

/**
 * Clase abstracta PublicacionWeb
 */
abstract class PublicacionWeb extends \Base\Publicacion implements SalidaWeb {

    protected $lenguetas;
    protected $datos_tabla;

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        //~ parent::__construct();
        // Opción de navegación a poner como activa
        $this->nombre_menu               = 'Indicadores';
        // Banderas
        $this->poner_imagen_en_contenido = FALSE;
        $this->para_compartir            = TRUE;
        // El estado puede ser 'publicar', 'revisar' o 'ignorar'
        $this->estado                    = 'publicar';
        // Inicializar las lengüetas
        $this->lenguetas                 = new \Base\Lenguetas('smi-indicador');
        // Inicializar la tabla con los datos
        $this->datos_tabla               = new TablaWeb('smi-indicador-datos-tabla');
    } // constructor

    /**
     * Validar
     *
     * Puede causar excepción si falta una propiedad obligatoria. También busca definir las opcionales.
     */
    public function validar() {
        // Si ya fue validado, no se hace nada
        if ($this->validado) {
            return;
        }
        // Ejecutar método en el padre
        parent::validar();
        // Por defecto
        if (($this->imagen == '') || ($this->imagen_previa == '')) {
            $this->imagen        = '../smi/introduccion/imagen.jpg';
            $this->imagen_previa = '../smi/introduccion/imagen-previa.jpg';
        }
        // El contenido es estructurado en un esquema SchemaArticle
        $this->contenido                = new \Base\SchemaArticle();
        $this->contenido->name          = $this->nombre;
        $this->contenido->description   = $this->descripcion;
        $this->contenido->author        = $this->autor;
        $this->contenido->datePublished = $this->fecha;
        $this->contenido->image         = $this->imagen;
        $this->contenido->image_show    = $this->poner_imagen_en_contenido;
    //  $this->contenido->articleBody   = ; // En el método html de será procesado
    } // validar

} // Clase abstracta PublicacionWeb

?>
