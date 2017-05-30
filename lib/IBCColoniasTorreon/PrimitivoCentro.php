<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon PrimitivoCentro
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
 * Clase PrimitivoCentro
 */
class PrimitivoCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Primitivo (Centro)';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T21:00:53';
        // El nombre del archivo a crear
        $this->archivo                    = 'primitivo-centro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Primitivo (Centro) en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Primitivo (Centro)';
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
                    'Población total' => 1527,
                    'Porcentaje de población masculina' => 45.32,
                    'Porcentaje de población femenina' => 54.68,
                    'Porcentaje de población de 0 a 14 años' => 18.76,
                    'Porcentaje de población de 15 a 64 años' => 60.71,
                    'Porcentaje de población de 65 y más años' => 15.41,
                    'Porcentaje de población no especificada' => 5.12,
                    'Fecundidad promedio' => 1.97,
                    'Porcentaje de población con discapacidad' => 8.83
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 58.44,
                    'Población Económicamente Activa masculina' => 55.47,
                    'Población Económicamente Activa femenina' => 44.53,
                    'Población Ocupada' => 93.40,
                    'Población Ocupada masculina' => 54.74,
                    'Población Ocupada femenina' => 45.26,
                    'Población Desocupada' => 6.60,
                    'Derechohabiencia' => 58.61
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 433,
                    'Ocupación por Vivienda' => 3.53,
                    'Viviendas con Electricidad' => 99.94,
                    'Viviendas con Agua' => 99.69,
                    'Viviendas con Drenaje' => 99.47,
                    'Viviendas con Televisión' => 98.45,
                    'Viviendas con Automóvil' => 40.56,
                    'Viviendas con Computadora' => 30.60
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 2442,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 50.29,
                    'Segunda actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Segunda actividad porcentaje' => 12.12,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.51,
                    'Cuarta actividad nombre' => 'Comercio Mayoreo',
                    'Cuarta actividad porcentaje' => 8.15,
                    'Quinta actividad nombre' => 'Profesionales, Científicos, Técnicos',
                    'Quinta actividad porcentaje' => 3.60
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
            'Centro latitud'  => 25.5385621285729,
            'Centro longitud' => -103.46284251116
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
![Primitivo Centro](primitivo-centro/primitivo-foto-antigua.jpg)

Foto Primitivo Centro. Fuente: Javier Olivares. Leyendas Laguna.

### Historia

En Noviembre de 1887, el Sr. Eppen le encomendó el trazado de unos cuadros de tierra al Ing. Federico Wulff, junto al lugar donde iba a cruzar el Ferrocarril Internacional con el Ferrocarril Central, con la posibilidad de formar un centro de población junto a la Estación del Ferrocarril.

Para 1896, se contaba con un terreno destinado a Plaza Pública, en el cual se plantaron fresnos del Valle de Allende en el estado de Chihuahua. Se inauguró en el año 1898 con el nombre **Plaza del 2 de Abril**, hoy conocida como **Plaza de Armas.**

### Fuentes

* [Historia de Torreón](http://www.torreonhistoria.galeon.com/aficiones1001256.html)
* [El Siglo](https://www.elsiglodedurango.com.mx/noticia/731894.moreleando-en-torreon.html)
FINAL;
    } // resena

} // Clase PrimitivoCentro

?>
