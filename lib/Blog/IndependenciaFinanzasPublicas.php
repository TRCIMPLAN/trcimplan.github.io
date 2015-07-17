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
        // Título, autor y fecha
        $this->nombre           = 'Independencia de las Finanzas Públicas';
        $this->autor            = 'Lic. Alicia Valdez Ibarra';
        $this->fecha            = '2014-06-19T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'independencia-finanzas-publicas';
        $this->imagen           = 'independencia-finanzas-publicas/imagen.jpg';
        $this->imagen_previa    = 'independencia-finanzas-publicas/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Análisis de la relación de ingresos propios y totales y la capacidad financiera de los municipios de la Zona Metropolitana de la Laguna.';
        $this->claves           = 'IMPLAN, Torreon, Ingresos, Capacidad Financiera';
        $this->categorias       = array('Finanzas Públicas', 'Gobierno');
        // NO CAMBIE el directorio y el nombre_menu. Están definidos para Análisis Publicados.
        $this->directorio       = 'blog';
        $this->nombre_menu      = 'Análisis Publicados';
        // El estado puede ser 'publicar' (crear HTML y agregarlo a índices/galerías), 'revisar' (sólo crear HTML y accesar por URL) o 'ignorar'
        $this->estado           = 'publicar';
        // Si para compartir es verdadero, aparecerán al final los botones de compartir en Twitter y Facebook
        $this->para_compartir   = true;
        // El contenido es estructurado en un esquema
        $schema                 = new \Base\SchemaBlogPosting();
        $schema->description    = $this->descripcion;
        $schema->image          = $this->imagen;
        $schema->name           = $this->nombre;
        $schema->author         = $this->autor;
        $schema->datePublished  = $this->fecha;
        $schema->articleBody    = <<<FINAL

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
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase IndependenciaFinanzasPublicas

?>
