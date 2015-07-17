<?php
/*
 * SMIbeta - Mercado de Factores Eficientes
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
 * Clase MercadoFactoresEficientes
 */
class MercadoFactoresEficientes extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Mercado de Factores Eficientes';
        $this->autor            = 'Lic. Rodrigo González Morales';
        $this->fecha            = '2014-06-17T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'mercado-factores-eficientes';
        $this->imagen           = 'mercado-factores-eficientes/imagen.jpg';
        $this->imagen_previa    = 'mercado-factores-eficientes/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'Análisis del mercado, las huelgas, el salario promedio mensual, productividad y demandas laborales en la Zona Metropolitana de la Laguna.';
        $this->claves           = 'IMPLAN, Torreon';
        $this->categorias       = array('Macroeconomía', 'Empleo', 'Empresas');
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

<p>A pesar de que las características del mercado laboral es de los subíndices mejor evaluado para la ZML, el análisis por municipio nos muestra dos realidades contrastantes, mientras Torreón por si solo ocuparía el lugar 7 y Gómez Palacio el 15 en cuanto a características de productividad y estabilidad de la fuerza de trabajo. Sin embargo Lerdo y Matamoros cuentan con las peores valoraciones en este tema.</p>

<p>El primer indicador de este subíndice corresponde a huelgas estalladas, sólo diez zonas metropolitanas presentaron huelgas, entre ellas La Laguna, sin embargo, el único municipio que registra datos es Gómez Palacio con 9.43 huelgas por cada mil emplazamientos, y el resto de municipios no presentan huelgas al igual que las 67 ciudades que lideran este indicador.</p>

<img class="img-responsive contenido-imagen" src="mercado-factores-eficientes/mercado-laboral.png" alt="Mercado Laboral">

<p>El salario promedio mensual, obtenido de los microdatos de la Encuesta Nacional de Ocupación Empleo (ENOE), que no tiene representatividad estadística municipal, pero es la única información disponible presenta, un gran contraste ya que si bien la ZML presenta un promedio de $4,672 mensuales, Torreón muestra $6,159, un poco superior a la media de las ciudades en estudio ($5,905) y cercano a Saltillo ($6,600), sin embargo Gómez Palacio se encuentra por debajo de la media ($5,281) y Lerdo ($3,777) y Matamoros ($3,472) en los últimos lugares registrados.</p>

<img class="img-responsive contenido-imagen" src="mercado-factores-eficientes/sueldo-promedio.png" alt="Sueldo Promedio">

<p>En cuanto a productividad laboral, la tendencia es similar, mientras la ZML ocupa el lugar 12 de 77 con $421,204.03 producidos por trabajador, Torreón con $530,143 ocuparía el lugar 4, solo por debajo de Monclova, Tampico y Monterrey, mientras Saltillo por ejemplo tiene una productividad de 437,047.33 por trabajador. Sin embargo Lerdo y Matamoros se encontrarían por si solos nuevamente en los últimos lugares.</p>

<img class="img-responsive contenido-imagen" src="mercado-factores-eficientes/indicadores.png" alt="Indicadores">

<p>El último indicador de este subíndice es el número de demandas laborales por cada mil PEA, donde la ZML registra 9.49, ubicándose en el lugar 60, sin embargo cabe destacar que las ciudades que presentan 0, son pequeñas y no cuentan en su mayoría con instancia que atienda conflictos laborales, como es el propio caso e Lerdo y Matamoros. A pesar de este indicador, este subíndice es una fortaleza importante para los municipios de Torreón y Gómez Palacio.</p>

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

} // Clase MercadoFactoresEficientes

?>
