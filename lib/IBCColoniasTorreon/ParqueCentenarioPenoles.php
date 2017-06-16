<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon ParqueCentenarioPenoles
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
 * Clase ParqueCentenarioPenoles
 */
class ParqueCentenarioPenoles extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Parque Centenario Peñoles';
        $this->fecha       = '2017-06-16T09:10:11';
        // El nombre del archivo a crear
        $this->archivo     = 'parque-centenario-penoles';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Parque Centenario Peñoles en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Parque Centenario Peñoles';
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
                    'Población total' => 5,
                    'Porcentaje de población masculina' => 60.00,
                    'Porcentaje de población femenina' => 40.00,
                    'Porcentaje de población de 0 a 14 años' => 0.00,
                    'Porcentaje de población de 15 a 64 años' => 60.00,
                    'Porcentaje de población de 65 y más años' => 40.00,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 4.50,
                    'Porcentaje de población con discapacidad' => 7.81
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 0.00,
                    'Derechohabiencia' => 60.00
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 3,
                    'Ocupación por Vivienda' => 1.67,
                    'Viviendas con Electricidad' => 99.50,
                    'Viviendas con Agua' => 99.34,
                    'Viviendas con Drenaje' => 99.17,
                    'Viviendas con Televisión' => 97.52,
                    'Viviendas con Automóvil' => 0.00,
                    'Viviendas con Computadora' => 0.00
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 1,
                    'Primer actividad nombre' => 'Industria Manufacturera',
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
            'Centro latitud'  => 25.5289273317233,
            'Centro longitud' => -103.448075395047
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

Anteriormente fue la colonia Luis Echeverría Sur.

### Parque Centenario Peñoles

Fue inaugurado en septiembre del 2000. Tiene una superficie de 18 hectáreas. Cuenta con un inventario vegetal de 6,591 ejemplares y 65 especies: 2,554 mezquites, 2,015 casuarinas, 545 acacias, 486 pingüicos y 204 huizaches, entre otras.

![Parque Centenario Peñoles 1](parque-centenario-penoles/parque-centenario-penoles-1.jpg)

![Parque Centenario Peñoles 2](parque-centenario-penoles/parque-centenario-penoles-2.jpg)

![Parque Centenario Peñoles 3](parque-centenario-penoles/parque-centenario-penoles-3.jpg)

![Parque Centenario Peñoles 4](parque-centenario-penoles/parque-centenario-penoles-4.jpg)

### Fuentes

* [Dirección General de Medio Ambiente de Torreón](http://www.torreon.gob.mx/medioambiente/)
FINAL;
    } // resena

} // Clase ParqueCentenarioPenoles

?>
