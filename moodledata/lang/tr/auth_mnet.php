<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'auth_mnet', language 'tr', version '3.10'.
 *
 * @package     auth_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_mnet_auto_add_remote_users'] = 'Evet konumundayken, uzak bir kullanıcı ilk kez giriş yaptığında otomatik olarak yerel kullanıcı kaydı oluşturulur.';
$string['auth_mnet_roamin'] = 'Bu ana bilgisayar kullanıcıları sitenizde gezinebilir';
$string['auth_mnet_roamout'] = 'Kullanıcılarınız bu ana bilgisayarlar dışında gezinebilir';
$string['auth_mnet_rpc_negotiation_timeout'] = 'XMLRPC taşıması üzerinde kimlik denetimi için zaman aşımının saniye biçiminden süresi';
$string['auth_mnetdescription'] = 'Kullanıcıların kimlik denetimi Moodle Ağ ayarlarınızda tanımlı güvenirlik ağına göre yapılır.';
$string['auto_add_remote_users'] = 'Uzak kullanıcıları otomatik ekle';
$string['pluginname'] = 'Moodle ağı kimlik denetimi';
$string['rpc_negotiation_timeout'] = 'RPC anlaşma zaman aşımı';
$string['sso_idp_description'] = 'Kullanıcılarınızın {$a} Moodle sitesinde yeniden giriş yapmaksızın gezinebilmesi için bu servisi duyur.<ul><li><em>Bağımlılık</em>: {$a} sitesindeki SSO (Servis Sağlayıcı) servisine ayrıca <strong>abone olmalısınız</strong>.</li></ul><br />{$a} sitesinden yetkilendirilmiş kullanıcıların sitenize yeniden giriş yapmaksızın erişebilmesi için bu servise abone ol.<ul><li><em>Bağımlılık</em>: SSO (Servis Sağlayıcı) servisini ayrıca {$a} sitesine <strong>duyurmalısınız.</strong></li></ul><br />';
$string['sso_idp_name'] = 'SSO (Kimlik Sağlayıcı)';
$string['sso_mnet_login_refused'] = '{$a}[0] kullanıcısı, {$a}[1] sitesinden giriş yapmaya yetkili değil.';
$string['sso_sp_description'] = '{$a} sitesinden yetkilendirilmiş kullanıcıların sitenize yeniden giriş yapmaksızın erişebilmesi için bu servisi duyur.<ul><li><em>Bağımlılık</em>: {$a} sitesindeki SSO (Kimlik Sağlayıcı) servisine ayrıca <strong>abone olmalısınız</strong>.</li></ul><br />Kullanıcılarınızın {$a} Moodle sitesinde yeniden giriş yapmaksızın gezinebilmesi için bu servise abone ol.<ul><li><em>Bağımlılık</em>: SSO (Kimlik Sağlayıcı) servisini ayrıca {$a} sitesine <strong>duyurmalısınız.</strong></li></ul><br />';
$string['sso_sp_name'] = 'SSO (Servis Sağlayıcı)';
