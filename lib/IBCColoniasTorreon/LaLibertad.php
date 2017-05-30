<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon LaLibertad
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
 * @package TrcIMPLANSitioWeb
 */

namespace IBCColoniasTorreon;

/**
 * Clase LaLibertad
 */
class LaLibertad extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'La Libertad';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T20:57:03';
        // El nombre del archivo a crear
        $this->archivo                    = 'la-libertad';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia La Libertad en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, La Libertad';
        // Opción del menú Navegación a poner como activa cuando vea esta publicación
        $this->nombre_menu                = 'Indicadores Básicos de Colonias > Colonias de Torreón';
        // Banderas
        $this->poner_imagen_en_contenido  = FALSE;
        $this->para_compartir             = FALSE;
    } // constructor

    /**
     * Datos
     *
     * @return array Arreglo asociativo
     */
    public function datos() {
        return array(
            'Demografía' => array(
                '2010' => array(
                    'Población total' => 427,
                    'Porcentaje de población masculina' => 50.58,
                    'Porcentaje de población femenina' => 49.42,
                    'Porcentaje de población de 0 a 14 años' => 30.08,
                    'Porcentaje de población de 15 a 64 años' => 62.18,
                    'Porcentaje de población de 65 y más años' => 7.74,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.63,
                    'Porcentaje de población con discapacidad' => 14.80
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.77,
                    'Población Económicamente Activa masculina' => 72.44,
                    'Población Económicamente Activa femenina' => 27.56,
                    'Población Ocupada' => 84.78,
                    'Población Ocupada masculina' => 72.69,
                    'Población Ocupada femenina' => 27.31,
                    'Población Desocupada' => 15.22,
                    'Derechohabiencia' => 47.58
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 105,
                    'Ocupación por Vivienda' => 4.07,
                    'Viviendas con Electricidad' => 98.58,
                    'Viviendas con Agua' => 91.91,
                    'Viviendas con Drenaje' => 90.96,
                    'Viviendas con Televisión' => 97.62,
                    'Viviendas con Automóvil' => 16.95,
                    'Viviendas con Computadora' => 12.19
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 100.00
                )
            )
        );
    } // datos

    /**
     * Mapas
     *
     * @return string
     */
    public function mapas() {
        return array(
            'Límites'         => \Configuracion\IBCTorreonConfig::LIMITES,
            'Centro latitud'  => 25.5345764438606,
            'Centro longitud' => -103.478050124827
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
De acuerdo al testimonio del Señor Daniel Muñoz habitante de la colonia Vencedora pero nacido en la Colonia Libertad, para 1937 este sector poblacional ya existía con ese mismo nombre y como algo característico menciona la existencia de dos petroleras El Águila y La Azteca, una abastecía a los ejidatarios y la otra al público en general.

### Fuente

* Testimonio de los primeros habitantes de la colonia
FINAL;
    } // resena

} // Clase LaLibertad

?>
