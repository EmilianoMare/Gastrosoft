<?php
/**
 * Sistema de Gestión Gastrosoft
 *
 * Un sistema de gestión completo para restaurantes desarrollado en PHP
 *
 * Este contenido está protegido por derechos de autor
 *
 * Copyright (c) 2024, KOSARI
 *
 * Se otorga permiso, de forma gratuita, a cualquier persona que obtenga una copia
 * de este software y archivos de documentación asociados (el "Software"), para tratar
 * el Software sin restricciones, incluyendo sin limitación los derechos
 * de uso, copia, modificación, fusión, publicación, distribución, sublicencia y/o venta
 * de copias del Software, y para permitir a las personas a las que se les proporcione
 * el Software hacerlo, sujeto a las siguientes condiciones:
 *
 * El aviso de derechos de autor anterior y este aviso de permiso se incluirán en
 * todas las copias o partes sustanciales del Software.
 *
 * EL SOFTWARE SE PROPORCIONA "TAL COMO ESTÁ", SIN GARANTÍA DE NINGÚN TIPO, EXPRESA O
 * IMPLÍCITA, INCLUYENDO PERO NO LIMITADO A LAS GARANTÍAS DE COMERCIABILIDAD,
 * IDONEIDAD PARA UN PROPÓSITO PARTICULAR Y NO INFRACCIÓN. EN NINGÚN CASO LOS
 * AUTORES O TITULARES DE DERECHOS DE AUTOR SERÁN RESPONSABLES DE CUALQUIER RECLAMACIÓN, DAÑOS U OTROS
 * RESPONSABILIDAD, YA SEA EN UNA ACCIÓN DE CONTRATO, AGRAVIO O DE OTRA MANERA, DERIVADA DE,
 * FUERA DE O EN CONEXIÓN CON EL SOFTWARE O EL USO U OTROS NEGOCIOS EN
 * EL SOFTWARE.
 *
 * @package	Gastrosoft
 * @author	KOSARI
 * @copyright	Copyright (c) 2024, KOSARI
 * @license	Derechos Reservados
 * @link	https://kosari.net
 * @since	Versión 7.6
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['form_validation_required']		= 'El campo {field} es obligatorio.';
$lang['form_validation_isset']			= 'El campo {field} debe tener un valor.';
$lang['form_validation_valid_email']		= 'El campo {field} debe contener una dirección de correo electrónico válida.';
$lang['form_validation_valid_emails']		= 'El campo {field} debe contener todas las direcciones de correo electrónico válidas.';
$lang['form_validation_valid_url']		= 'El campo {field} debe contener una URL válida.';
$lang['form_validation_valid_ip']		= 'El campo {field} debe contener una IP válida.';
$lang['form_validation_min_length']		= 'El campo {field} debe tener al menos {param} caracteres de longitud.';
$lang['form_validation_max_length']		= 'El campo {field} no puede exceder {param} caracteres de longitud.';
$lang['form_validation_exact_length']		= 'El campo {field} debe tener exactamente {param} caracteres de longitud.';
$lang['form_validation_alpha']			= 'El campo {field} solo puede contener caracteres alfabéticos.';
$lang['form_validation_alpha_numeric']		= 'El campo {field} solo puede contener caracteres alfanuméricos.';
$lang['form_validation_alpha_numeric_spaces']	= 'El campo {field} solo puede contener caracteres alfanuméricos y espacios.';
$lang['form_validation_alpha_dash']		= 'El campo {field} solo puede contener caracteres alfanuméricos, guiones bajos y guiones..';
$lang['form_validation_numeric']		= 'El campo {field} debe contener solo números.';
$lang['form_validation_is_numeric']		= 'El campo {field} debe contener solo caracteres numéricos.';
$lang['form_validation_integer']		= 'El campo {field} debe contener un número entero.';
$lang['form_validation_regex_match']		= 'El campo {field} no tiene el formato correcto.';
$lang['form_validation_matches']		= 'El campo {field} no coincide con el campo {param}.';
$lang['form_validation_differs']		= 'El campo {field} debe ser diferente del campo {param}.';
$lang['form_validation_is_unique'] 		= 'El campo {field} debe contener un valor único.';
$lang['form_validation_is_natural']		= 'El campo {field} solo debe contener dígitos.';
$lang['form_validation_is_natural_no_zero']	= 'El campo {field} solo debe contener dígitos y debe ser mayor que cero.';
$lang['form_validation_decimal']		= 'El campo {field} debe contener un número decimal.';
$lang['form_validation_less_than']		= 'El campo {field} debe contener un número menor que {param}.';
$lang['form_validation_less_than_equal_to']	= 'El campo {field} debe contener un número menor o igual que {param}.';
$lang['form_validation_greater_than']		= 'El campo {field} debe contener un número mayor que {param}.';
$lang['form_validation_greater_than_equal_to']	= 'El campo {field} debe contener un número mayor o igual que {param}.';
$lang['form_validation_error_message_not_set']	= 'No se puede acceder a un mensaje de error correspondiente a su nombre de campo {field}.';
$lang['form_validation_in_list']		= 'El campo {field} debe ser uno de: {param}.';

