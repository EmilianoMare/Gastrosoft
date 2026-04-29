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

$lang['form_validation_required']		= 'الحقل {field} مطلوب';
$lang['form_validation_isset']			= 'يجب أن يحتوي الحقل {field} على قيمة';
$lang['form_validation_valid_email']		= 'يجب أن يحتوي الحقل {field} على عنوان بريد إلكتروني صالح';
$lang['form_validation_valid_emails']		= 'يجب أن يحتوي الحقل {field} على جميع عناوين البريد الإلكتروني الصالحة';
$lang['form_validation_valid_url']		= 'يجب أن يحتوي الحقل {field} على عنوان URL صالح';
$lang['form_validation_valid_ip']		= 'يجب أن يحتوي الحقل {field} على عنوان IP صالح';
$lang['form_validation_min_length']		= 'يجب ألا يقل طول الحقل {field} عن {param} من الأحرف';
$lang['form_validation_max_length']		= 'لا يمكن أن يتجاوز طول الحقل {field} {param} من الأحرف';
$lang['form_validation_exact_length']		= 'يجب أن يتألف الحقل {field} من {param} حرفًا بالضبط';
$lang['form_validation_alpha']			= 'يمكن أن يحتوي الحقل {field} على أحرف أبجدية فقط';
$lang['form_validation_alpha_numeric']		= 'يمكن أن يحتوي الحقل {field} على أحرف أبجدية رقمية فقط';
$lang['form_validation_alpha_numeric_spaces']	= 'يمكن أن يحتوي الحقل {field} على أحرف أبجدية رقمية ومسافات فقط';
$lang['form_validation_alpha_dash']		= 'قد يحتوي الحقل {field} على أحرف أبجدية رقمية وشرطات سفلية وشرطات فقط';
$lang['form_validation_numeric']		= 'يجب أن يحتوي الحقل {field} على أرقام فقط';
$lang['form_validation_is_numeric']		= 'يجب أن يحتوي الحقل {field} على أحرف رقمية فقط';
$lang['form_validation_integer']		= 'يجب أن يحتوي الحقل {field} على عدد صحيح';
$lang['form_validation_regex_match']		= 'الحقل {field} ليس بالتنسيق الصحيح';
$lang['form_validation_matches']		= 'لا يتطابق الحقل {field} مع الحقل {param}';
$lang['form_validation_differs']		= 'يجب أن يختلف الحقل {field} عن الحقل {param}';
$lang['form_validation_is_unique'] 		= 'يجب أن يحتوي الحقل {field} على قيمة فريدة';
$lang['form_validation_is_natural']		= 'يجب أن يحتوي الحقل {field} على أرقام فقط';
$lang['form_validation_is_natural_no_zero']	= 'يجب أن يحتوي الحقل {field} على أرقام فقط ويجب أن يكون أكبر من صفر';
$lang['form_validation_decimal']		= 'يجب أن يحتوي الحقل {field} على رقم عشري';
$lang['form_validation_less_than']		= 'يجب أن يحتوي الحقل {field} على رقم أقل من {param}';
$lang['form_validation_less_than_equal_to']	= 'يجب أن يحتوي الحقل {field} على رقم أصغر من أو يساوي {param}';
$lang['form_validation_greater_than']		= 'يجب أن يحتوي الحقل {field} على رقم أكبر من {param}';
$lang['form_validation_greater_than_equal_to']	= 'يجب أن يحتوي الحقل {field} على رقم أكبر من أو يساوي {param}';
$lang['form_validation_error_message_not_set']	= 'تعذر الوصول إلى رسالة خطأ مطابقة لاسم مجالك {field}';
$lang['form_validation_in_list']		= 'يجب أن يكون الحقل {field} واحدًا مما يلي: {param}';

