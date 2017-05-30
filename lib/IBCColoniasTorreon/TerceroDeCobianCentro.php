<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon TerceroDeCobianCentro
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
 * Clase TerceroDeCobianCentro
 */
class TerceroDeCobianCentro extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre                     = 'Tercero de Cobián (Centro)';
        $this->autor                      = 'Dirección de Investigación Estratégica';
        $this->fecha                      = '2017-05-29T21:01:43';
        // El nombre del archivo a crear
        $this->archivo                    = 'tercero-de-cobian-centro';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion                = 'Colonia Tercero de Cobián (Centro) en Torreón, Coahuila de Zaragoza, México.';
        $this->claves                     = 'IMPLAN, Torreon, Indicadores, Colonia, Tercero de Cobián (Centro)';
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
                    'Población total' => 9277,
                    'Porcentaje de población masculina' => 45.90,
                    'Porcentaje de población femenina' => 54.10,
                    'Porcentaje de población de 0 a 14 años' => 17.51,
                    'Porcentaje de población de 15 a 64 años' => 65.08,
                    'Porcentaje de población de 65 y más años' => 15.36,
                    'Porcentaje de población no especificada' => 2.05,
                    'Fecundidad promedio' => 2.19,
                    'Porcentaje de población con discapacidad' => 7.40
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 52.62,
                    'Población Económicamente Activa masculina' => 56.95,
                    'Población Económicamente Activa femenina' => 43.05,
                    'Población Ocupada' => 92.26,
                    'Población Ocupada masculina' => 56.38,
                    'Población Ocupada femenina' => 43.62,
                    'Población Desocupada' => 7.74,
                    'Derechohabiencia' => 68.92
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 2833,
                    'Ocupación por Vivienda' => 3.27,
                    'Viviendas con Electricidad' => 99.71,
                    'Viviendas con Agua' => 98.81,
                    'Viviendas con Drenaje' => 98.66,
                    'Viviendas con Televisión' => 97.60,
                    'Viviendas con Automóvil' => 53.08,
                    'Viviendas con Computadora' => 42.49
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1987,
                    'Primer actividad nombre' => 'Comercio Menudeo',
                    'Primer actividad porcentaje' => 25.57,
                    'Segunda actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Segunda actividad porcentaje' => 18.87,
                    'Tercera actividad nombre' => 'Salud',
                    'Tercera actividad porcentaje' => 12.23,
                    'Cuarta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Cuarta actividad porcentaje' => 10.62,
                    'Quinta actividad nombre' => 'Industria Manufacturera',
                    'Quinta actividad porcentaje' => 8.40
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
            'Centro latitud'  => 25.546123758825,
            'Centro longitud' => -103.432883091682
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
### Historia

El 10 de Marzo de 1898, la Hacienda fue adquirida por Don Feliciano Cobián, quien fue destinando nuevas extensiones de la Hacienda, trazadas al Oriente de Primitivo, para los fraccionamientos, primero, segundo, tercero, cuarto y quinto que llevan su nombre.

En el período de 1937 a 1941 sería presidente municipal de Torreón Francisco Rivera Morales y se construye el **Bosque Venustiano Carranza,** que inicialmente se iba a llamar Bosque de las Américas.

### Fuentes

* [Historia de Torreón](http://www.torreonhistoria.galeon.com/aficiones1001256.html)
* [Personajes Ilustres de Torreón](https://www.facebook.com/notes/juan-martinez/personajes-ilustres-de-torre%C3%B3n-23012015/10151385720440009)
FINAL;
    } // resena

} // Clase TerceroDeCobianCentro

?>
