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

$lang['form_validation_required']		= 'Le champ {field} est obligatoire';
$lang['form_validation_isset']			= 'Le champ {field} doit avoir une valeur';
$lang['form_validation_valid_email']		= 'Le champ {field} doit contenir une adresse e-mail valide';
$lang['form_validation_valid_emails']		= 'Le champ {field} doit contenir toutes les adresses e-mail valides';
$lang['form_validation_valid_url']		= 'Le champ {field} doit contenir une URL valide';
$lang['form_validation_valid_ip']		= 'Le champ {field} doit contenir une IP valide';
$lang['form_validation_min_length']		= 'Le champ {field} doit contenir au moins {param} caractères';
$lang['form_validation_max_length']		= 'Le champ {field} ne peut pas dépasser la longueur de {param} caractères';
$lang['form_validation_exact_length']		= 'Le champ {field} doit contenir exactement {param} caractères';
$lang['form_validation_alpha']			= 'Le champ {field} ne peut contenir que des caractères alphabétiques';
$lang['form_validation_alpha_numeric']		= 'Le champ {field} ne peut contenir que des caractères alphanumériques';
$lang['form_validation_alpha_numeric_spaces']	= 'Le champ {field} ne peut contenir que des caractères alphanumériques et des espaces';
$lang['form_validation_alpha_dash']		= 'Le champ {field} ne peut contenir que des caractères alphanumériques, des traits de soulignement et des tirets';
$lang['form_validation_numeric']		= 'Le champ {field} ne doit contenir que des chiffres';
$lang['form_validation_is_numeric']		= 'Le champ {field} ne doit contenir que des caractères numériques';
$lang['form_validation_integer']		= 'Le champ {field} doit contenir un entier';
$lang['form_validation_regex_match']		= 'Le champ {field} n\'est pas au bon format';
$lang['form_validation_matches']		= 'Le champ {field} ne correspond pas au champ {param}';
$lang['form_validation_differs']		= 'Le champ {field} doit être différent du champ {param}';
$lang['form_validation_is_unique'] 		= 'Le champ {field} doit contenir une valeur unique';
$lang['form_validation_is_natural']		= 'Le champ {field} ne doit contenir que des chiffres';
$lang['form_validation_is_natural_no_zero']	= 'Le champ {field} ne doit contenir que des chiffres et doit être supérieur à zéro';
$lang['form_validation_decimal']		= 'Le champ {field} doit contenir un nombre décimal';
$lang['form_validation_less_than']		= 'Le champ {field} doit contenir un nombre inférieur à {param}';
$lang['form_validation_less_than_equal_to']	= 'Le champ {field} doit contenir un nombre inférieur ou égal à {param}';
$lang['form_validation_greater_than']		= 'Le champ {field} doit contenir un nombre supérieur à {param}';
$lang['form_validation_greater_than_equal_to']	= 'Le champ {field} doit contenir un nombre supérieur ou égal à {param}';
$lang['form_validation_error_message_not_set']	= 'Impossible d\'accéder à un message d\'erreur correspondant à votre nom de champ {field}';
$lang['form_validation_in_list']		= 'Le champ {field} doit être l\'un des suivants : {param}';

