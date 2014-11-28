<?php
/*
 * SMIbeta - Independencia de las Finanzas Públicas
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
namespace Blog;

/**
 * Clase IndependenciaFinanzasPublicas
 */
class IndependenciaFinanzasPublicas extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        $this->fecha         = '2014-06-19';
        $this->autor         = 'Lic. Alicia Valdez Ibarra';
        $this->nombre        = 'Independencia de las Finanzas Públicas';
        $this->nombre_menu   = 'Análisis Publicados';
        $this->directorio    = 'blog';
        $this->archivo       = 'independencia-finanzas-publicas';
        $this->descripcion   = 'Análisis de la relación de ingresos propios y totales y la capacidad financiera de los municipios de la Zona Metropolitana de la Laguna.';
        $this->claves        = 'IMPLAN, Torreon';
        $this->imagen_previa = 'independencia-finanzas-publicas/imagen-previa.jpg';
        $this->categorias    = array('Finanzas Públicas', 'Gobierno');
     // $this->encabezado    = '<img class="img-responsive encabezado-imagen" src="directorio/encabezado.jpg">';
        $this->contenido     = <<<FINAL
<span class="contenido-imagen-previa"><img src="independencia-finanzas-publicas/imagen.jpg"></span>

<p>Torreón, Coahuila se encuentra entre los municipios con mayor independencia económica del país. Los resultados se obtuvieron con el cálculo y comparación de dos indicadores explicados enseguida: 1) relación de ingresos propios y totales y 2) capacidad financiera.</p>

<h3>Relación de ingresos propios y totales</h3>

<p>En 2012, los ingresos propios de Torreón representaron el 43% de sus ingresos totales, mientras el promedio nacional de los municipios fue de 20.91%. Dichos ingresos propios son obtenidos por los impuestos, aprovechamientos, productos y derechos municipales como el impuesto al predial, licencias y permisos, devoluciones y venta de bienes, por nombrar algunos.</p>

<p>En el mismo año los ingresos propios de la Zona Metropolitana de La Laguna equivalen al 39.97% de sus ingresos totales, encontrándose también en niveles superiores a la media nacional. En la gráfica inferior se presentan los resultados de éste indicador para cada municipio de nuestra metrópoli:</p>

<img class="img-responsive contenido-imagen" src="independencia-finanzas-publicas/ingresos-propios.jpg" alt="Ingresos Propios">

<p>Son los municipios de Torreón y Gómez Palacio quienes suben el promedio de La Laguna, pues tanto Matamoros como Lerdo se posicionan por debajo de la media nacional. Notemos en la gráfica el resultado del indicador en el 2013, el cual es 2% más alto al de 2012.</p>

<p>Entre las ciudades de la república con mayor proporción de ingresos propios se encuentran Los Cabos y San Pedro Garza García con 52.16% y 47.73% respectivamente.</p>

<h3>Capacidad financiera</h3>

<p>Este indicador se refiere al porcentaje del gasto corriente que un municipio es capaz de cubrir utilizando sus ingresos propios. Un mayor porcentaje significa menor dependencia de los apoyos federales y estatales.</p>

<p>Torreón se encuentra por arriba de la media nacional en el indicador, cubriendo el 74.10% de sus gastos corrientes en 2012 y 74.22% en 2013. El promedio nacional en 2012 fue de 39.41%, el cual en los últimos 6 años se ha mantenido alrededor del 40%, mientras el promedio de la Zona Metropolitana de La Laguna ha tenido más cambios, alcanzando su punto más alto en 2009 cuando cubrió el 69.20% de su gasto corriente. En 2012 el promedio de la zona fue de 66.50%.</p>

<img class="img-responsive contenido-imagen" src="independencia-finanzas-publicas/capacidad-financiera-01.jpg" alt="Capacidad Financiera 1">

<p>Torreón y Gómez Palacio levantan el promedio de la zona, pues sus ingresos propios representan el 74% de su gasto corriente:</p>

<img class="img-responsive contenido-imagen" src="independencia-finanzas-publicas/capacidad-financiera-02.jpg" alt="Capacidad Financiera 2">

<p>Al ordenar los municipios conforme a su capacidad financiera, siendo el número uno aquel con mayor porcentaje, Gómez Palacio y Torreón ocuparían los lugares 60 y 65 respectivamente, de los más de 2,000 municipios de la república. El resultado es satisfactorio más no ideal ya que aun dependemos 25% de los gobiernos federal y estatal para la operación del municipio.</p>

<p>Ejemplos como San Luis Potosí, Juárez y Ramos Arizpe cuyos ingresos propios comprenden el 94.68%, 80.15% y 103.11% de su gasto corriente demuestran lo que podemos lograr tomando medidas adecuadas de disminución de gasto corriente o bien el aumento de ingreso propios.</p>
FINAL;
        $this->javascript    = <<<FINAL
FINAL;
    } // constructor

} // Clase IndependenciaFinanzasPublicas

?>
