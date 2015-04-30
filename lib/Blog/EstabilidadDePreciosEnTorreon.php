<?php
/*
 * SMIbeta - Estabilidad de Precios en Torreón
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
 * Clase EstabilidadDePreciosEnTorreon
 */
class EstabilidadDePreciosEnTorreon extends \Base\Publicacion {

    /**
     * Constructor
     */
    public function __construct() {
        // Título, autor y fecha
        $this->nombre           = 'Estabilidad de Precios en Torreón';
        $this->autor            = 'Lic. Alicia Valdez Ibarra';
        $this->fecha            = '2014-04-25T08:05';
        // El nombre del archivo a crear (obligatorio) y rutas relativas a las imágenes. Use minúsculas, números y/o guiones medios.
        $this->archivo          = 'estabilidad-de-precios-en-torreon';
        $this->imagen           = 'estabilidad-de-precios-en-torreon/imagen.jpg';
        $this->imagen_previa    = 'estabilidad-de-precios-en-torreon/imagen-previa.jpg';
        // La descripción y claves dan información a los buscadores y redes sociales. Las categorías son de uso interno.
        $this->descripcion      = 'En términos generales la inflación de Torreón se encuentra estable, lo cual genera certidumbre tanto a planta productiva local como extranjera.';
        $this->claves           = 'IMPLAN, Torreon, Inflación, Productividad, Laboral';
        $this->categorias       = array('Macroeconomía', 'Mercados');
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

<p>Durante el primer trimestre del 2014 el municipio de Torreón, Coahuila registró una variación porcentual de 1.66 en el Índice Nacional de Precios al Consumidor (INPC), mientras que la variación nacional fue de 1.43%. La inflación registrada en Torreón con respecto al primer trimestre del año pasado es de 3.78%, muy similar a la inflación nacional de 3.76% (INEGI, 2014). Una inflación mesurada como ésta incentiva la producción y disminuye el desempleo. Sin embargo, hay otros factores que deben tomarse en cuenta, como el nivel de ingresos, las tasas de interés y las causas de la inflación. </p>

<p>La relación inflación-ingreso es relevante, ya que si la primera incrementa y el segundo se mantiene constante o disminuye, el poder adquisitivo de la población se reduce afectando la planta productiva. Algo similar ocurre con las tasas de interés, pues si éstas no se indexan se desincentiva el ahorro.</p>

<p>Una inflación mal controlada, disminuye la competitividad de una región al generar factores de incertidumbre. De ahí la importancia de contener la inflación a nivel de las ciudades más competitivas. En la siguiente tabla se muestran los aumentos en el INPC de marzo de 2013 a marzo de 2014 para Torreón y algunas otras ciudades que integran el cálculo del INPC:</p>

<table class="table table-hover table-bordered">
<tr>
<th>Ciudad</th>
<th>Inflación 2013-2014</th>
</tr>
<tr>
<td>Puebla</td>
<td>2.53</td>
</tr>
<tr>
<td>Hermosillo</td>
<td>2.93</td>
</tr>
<tr>
<td>Guadalajara</td>
<td>3.09</td>
</tr>
<tr>
<td>Morelia</td>
<td>3.27</td>
</tr>
<tr>
<td>Chihuahua</td>
<td>3.41</td>
</tr>
<tr>
<td>Durango</td>
<td>3.52</td>
</tr>
<tr>
<td>Monterrey</td>
<td>3.61</td>
</tr>
<tr>
<td>Nacional</td>
<td>3.76</td>
</tr>
<tr>
<td>Torreón</td>
<td>3.78</td>
</tr>
<tr>
<td>Cd. Juárez</td>
<td>3.91</td>
</tr>
<tr>
<td>Cd. de México</td>
<td>4.18</td>
</tr>
<tr>
<td>León</td>
<td>4.28</td>
</tr>
<tr>
<td>Acuña</td>
<td>4.68</td>
</tr>
</table>

<h3>¿Cuáles productos y servicios han aumentado sus precios en Torreón?</h3>

<p>Según datos de INEGI aunque los precios en el municipio tienden a subir en el largo plazo, ciertos  productos y servicios han disminuido en los últimos dos años. En la gráfica inferior se observan los cambios porcentuales de algunos productos y servicios en el periodo señalado: </p>

<p><img class="img-responsive contenido-imagen" src="estabilidad-de-precios-en-torreon/cambios-en-los-precios-por-objeto-del-gasto.png" alt="Cambios en los Precios"></p>

<p>Como se muestra en el cuadro las tasas inflacionarias fueron considerablemente menores a las del año pasado, a excepción de las tasas de electricidad y combustibles en donde los precios se dispararon 85.14% después de haber disminuido 1.28%. </p>

<p>Podemos concluir que la inflación de Torreón no está dañando el poder adquisitivo de los consumidores. En términos generales la inflación de Torreón se encuentra estable, lo cual genera certidumbre tanto a planta productiva local como extranjera.</p>

FINAL;
        // El contenido es una instancia de SchemaBlogPosting
        $this->contenido        = $schema;
        // Sin JavaScript
        $this->javascript       = '';
        // Para redifusión, como es un artículo del blog se pone la imagen y después el contenido
        if ($this->imagen != '') {
            $this->redifusion   = "<img src=\"{$this->imagen}\">\n\n{$schema->articleBody}";
        } else {
            $this->redifusion   = $schema->articleBody;
        }
    } // constructor

} // Clase EstabilidadDePreciosEnTorreon

?>
