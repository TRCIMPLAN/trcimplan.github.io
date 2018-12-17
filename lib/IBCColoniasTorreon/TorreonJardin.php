<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon TorreonJardin
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
 * Clase TorreonJardin
 */
class TorreonJardin extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Torreón Jardín';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'torreon-jardin';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Torreón Jardín en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Torreón Jardín';
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
                    'Población total' => 6784,
                    'Porcentaje de población masculina' => 46.57,
                    'Porcentaje de población femenina' => 53.43,
                    'Porcentaje de población de 0 a 14 años' => 11.93,
                    'Porcentaje de población de 15 a 64 años' => 65.49,
                    'Porcentaje de población de 65 y más años' => 15.79,
                    'Porcentaje de población no especificada' => 6.79,
                    'Fecundidad promedio' => 1.97,
                    'Porcentaje de población con discapacidad' => 4.91
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 53.60,
                    'Población Económicamente Activa masculina' => 58.18,
                    'Población Económicamente Activa femenina' => 41.82,
                    'Población Ocupada' => 95.15,
                    'Población Ocupada masculina' => 58.09,
                    'Población Ocupada femenina' => 41.91,
                    'Población Desocupada' => 4.85,
                    'Derechohabiencia' => 76.56
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 1988,
                    'Ocupación por Vivienda' => 3.41,
                    'Viviendas con Electricidad' => 99.58,
                    'Viviendas con Agua' => 99.43,
                    'Viviendas con Drenaje' => 99.27,
                    'Viviendas con Televisión' => 98.81,
                    'Viviendas con Automóvil' => 92.54,
                    'Viviendas con Computadora' => 82.53
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 202,
                    'Primer actividad nombre' => 'Salud',
                    'Primer actividad porcentaje' => 27.23,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 15.35,
                    'Tercera actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Tercera actividad porcentaje' => 11.39,
                    'Cuarta actividad nombre' => 'Educativos',
                    'Cuarta actividad porcentaje' => 10.89,
                    'Quinta actividad nombre' => 'Preparación de Alimentos y Bebidas',
                    'Quinta actividad porcentaje' => 10.89
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
            'Centro latitud'  => 25.5290584667749,
            'Centro longitud' => -103.423117775067
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
<center>![TORREÓN JARDÍN](torreon-jardin/foto1.jpg)</center>

###TORREÓN JARDÍN

##Breve Historia
La Sociedad Cooperativa se creó el 15 de Septiembre de 1977 con la finalidad de manejar su propio sistema de agua potable y alcantarillado, lo que hoy en día es un modelo a seguir debido al reconocimiento por parte de otros sistemas operadores de agua. Este sería el primer paso para hacerse cargo también de la total rehabilitación de este centro habitacional llamado colonia Torreón Jardín.</br>
Fuente
* [Historia de Colonia Torreón Jardín](http://torreonjardin.com/main.php)

##Galería de Fotos
<table>
 <tr>
 <td><center><img src="torreon-jardin/foto1.jpg"/></center></td>
 <td><center><img src="torreon-jardin/foto2.jpg"/></center></td>
 <td><center><img src="torreon-jardin/foto3.jpg"/></center></td>
 </tr>
 <tr>
 <td>Jardines</td>
 <td>Avenida Central</td>
 <td>Fuente Principal</td>
 </tr>
</table>
##Valor Catastral
<table>
 <tr>
 <th><center><b>UBICACIÓN</b></center></th>
 <th><center><b>AÑO 2016</b></center></th>
 <th><center><b>AÑO 2017</b></center></th>
 <th><center><b>AÑO 2018</b></center></th>
 </tr> 
 
 <tr>
 <td><left>TORREÓN JARDÍN (ZONA COLECTOR - C. DEL ÁNGEL A CÁRCAMO)</left>
 <td><center>$434.66</center></br>
 <td><center>$450.23</center></td>
 <td><center>$477.24</center></td>
 </tr> 
 <tr>
 <td><left>TORREON JARDIN (ZONA 1 -BLVD. REVOLUCIÓN.-LAGUNA SUR A C. SICOMOROS.-LUCIO BLANCO.)</left>
 <td><center>$1,940.08</center></br>
 <td><center>$2,007.90</center></td>
 <td><center>$2,128.37</center></td>
 </tr> 
 <tr>
 <td><left>TORREON JARDIN (ZONA 2-BLVD. REVOLUCIÓN-CENTRAL A C. SICOMOROS.-CAMPESTRE LA ROSITA).</left>
 <td><center>$1,585.75</center></br>
 <td><center>$1,641.51</center></td>
 <td><center>$1,740.00</center></td>
 </tr> 
 <tr>
 <td><left>TORREON JARDIN (ZONA 3-LAGUNA SUR - C. CIPRESES A LUCIO BLANCO.-CAMPESTRE LA ROSITA).</left>
 <td><center>$1,268.50</center></br>
 <td><center>$1,313.42</center></td>
 <td><center>$1,392.22</center></td>
 </tr> 
</table>

##Mobiliario Urbano

<table>
 <tr>
 <td><center><img src="torreon-jardin/foto1.jpg"/></center></td>
 <td><center><img src="torreon-jardin/foto2.jpg"/></center></td>
 <td><center><img src="torreon-jardin/foto3.jpg"/></center></td>
 </tr>
 <tr>
 <td>Jardines</br>
 Fuente: http://torreonjardin.com/main.php</td>
 <td>Avenida Central</td>
 <td>Fuente Principal</td>
 </tr>
</table>


##Anécdotas de la Colonia
<table>
 <td> Aquí colocamos un texto completo, referente a las Anécdotas de la presente colonia, destacando todo aquello que nos cuenta la gente... </td>
</table>
</br>
FINAL;
    } // resena

} // Clase TorreonJardin

?>
