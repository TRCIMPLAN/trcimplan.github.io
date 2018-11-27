<?php
/**
 * TrcIMPLAN Sitio Web - IBCColoniasTorreon TorreonViejo
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
 * Clase TorreonViejo
 */
class TorreonViejo extends \IBCBase\PublicacionWeb {

    /**
     * Constructor
     */
    public function __construct() {
        // Ejecutar constructor en el padre
        parent::__construct();
        // Título, autor y fecha
        $this->nombre      = 'Torreón Viejo';
        $this->fecha       = '2017-05-29T20:31:44';
        // El nombre del archivo a crear
        $this->archivo     = 'torreon-viejo';
        // La descripción y claves dan información a los buscadores y redes sociales
        $this->descripcion = 'Colonia Torreón Viejo en Torreón, Coahuila de Zaragoza, México.';
        $this->claves      = 'IMPLAN, Torreon, Indicadores, Colonia, Torreón Viejo';
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
                    'Población total' => 476,
                    'Porcentaje de población masculina' => 47.35,
                    'Porcentaje de población femenina' => 52.65,
                    'Porcentaje de población de 0 a 14 años' => 32.01,
                    'Porcentaje de población de 15 a 64 años' => 59.60,
                    'Porcentaje de población de 65 y más años' => 8.39,
                    'Porcentaje de población no especificada' => 0.00,
                    'Fecundidad promedio' => 2.42,
                    'Porcentaje de población con discapacidad' => 11.45
                )
            ),
            'Características Económicas' => array(
                '2010' => array(
                    'Población Económicamente Activa' => 55.62,
                    'Población Económicamente Activa masculina' => 65.97,
                    'Población Económicamente Activa femenina' => 34.03,
                    'Población Ocupada' => 99.47,
                    'Población Ocupada masculina' => 65.79,
                    'Población Ocupada femenina' => 34.21,
                    'Población Desocupada' => 0.53,
                    'Derechohabiencia' => 45.31
                )
            ),
            'Viviendas' => array(
                '2010' => array(
                    'Hogares' => 124,
                    'Ocupación por Vivienda' => 3.84,
                    'Viviendas con Electricidad' => 98.07,
                    'Viviendas con Agua' => 98.06,
                    'Viviendas con Drenaje' => 98.89,
                    'Viviendas con Televisión' => 96.41,
                    'Viviendas con Automóvil' => 6.87,
                    'Viviendas con Computadora' => 8.23
                )
            ),
            'Unidades Económicas' => array(
                '2010' => array(
                    'Total Actividades Económicas' => 11,
                    'Primer actividad nombre' => 'Otros servicios, excepto Gobierno',
                    'Primer actividad porcentaje' => 45.45,
                    'Segunda actividad nombre' => 'Comercio Menudeo',
                    'Segunda actividad porcentaje' => 36.36,
                    'Tercera actividad nombre' => 'Inmobiliarios',
                    'Tercera actividad porcentaje' => 9.09,
                    'Cuarta actividad nombre' => 'Industria Manufacturera',
                    'Cuarta actividad porcentaje' => 9.09
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
            'Centro latitud'  => 25.5367176967301,
            'Centro longitud' => -103.469789470687
        );
    } // mapas

    /**
     * Reseña
     *
     * @return string
     */
    public function resena() {
        return <<<FINAL
###TORREÓN VIEJO
<table>
 <tr>
<td><center><img src="torreon-viejo/imagen1.jpg"/></center></td>
<td><center><img src="torreon-viejo/imagen2.jpg"/></center></td>
<td><center><img src="torreon-viejo/imagen3.jpg"/></center></td>
 </tr>
 <tr>
 <td>Está ubicada en una casa-habitación construida en 1904 por el arquitecto </br>
 e ingeniero Federico Wulff, quien junto con su familia la habitó por muchos años.</br>
 Por su estratégica ubicación, que ofrece una panorámica de toda la ciudad, fue </br>
utilizada como trinchera por el general Francisco Villa durante la toma de Torreón. </br>
En los años cincuenta el inmueble fue utilizado como cuartel militar y posteriormente </br>
albergó a una pequeña vecindad. Fue inaugurado como museo el 11 de febrero</br>
 de 1994, con el objetivo de difundir la historia de la ciudad.</br>
En 1999 el inmueble fue remodelado y equipado con fondos del gobierno municipal </br>
y del Consejo Nacional para la Cultura y las Artes (Conaculta), a través del Programa</br>
 de Apoyo a la Infraestructura Cultural de los Estados (Paice). En sus 10 salas</br>
 permanentes exhibe objetos que pertenecieron a la familia Wulff, pinturas de </br>
diversas técnicas, esculturas, fotografías en blanco y negro, muebles de madera, </br>
ropa y accesorios de la época; muñecas, juguetes y armas, entre otros objetos.
Fuente: http://sic.gob.mx/ficha.php?table=museo&table_id=959</td>
 <td>Torreón Viejo 2</td>
 <td>Torreón Viejo 3</td>
 </tr>
</table>
<table> 
<td> Aquí colocamos un texto completo, referente a la Historia de la presente colonia, destacando todo aquello que ... </td>
</table>
</br>
FINAL;
    } // resena

} // Clase TorreonViejo

?>
