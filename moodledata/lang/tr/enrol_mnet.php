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
 * Strings for component 'enrol_mnet', language 'tr', version '3.10'.
 *
 * @package     enrol_mnet
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['error_multiplehost'] = 'Bu konak için MNet kayıt eklentisinin bir örneği zaten var. Ev sahibi başına yalnızca bir örnek ve / veya \'Tüm ev sahipliği yapan kişiler için\' bir örneğe izin verilir.';
$string['instancename'] = 'Kayıt yöntemi adı';
$string['instancename_help'] = 'İsteğe bağlı olarak MNet kayıt yönteminin bu örneğini yeniden adlandırabilirsiniz. Bu alanı boş bırakırsanız, uzak ana bilgisayarın adını ve kullanıcıları için atanan rolü içeren varsayılan örnek adı kullanılacaktır.';
$string['mnet:config'] = 'MNet kayıt örneklerini yapılandırma';
$string['mnet_enrol_description'] = '{$a} sitesi yöneticilerine kendi öğrencilerini sunucunuzda oluşturulan derslere kaydedebilmesine izin vermek için bu servisi duyur.<br /><ul><li><em>Bağımlılık</em>: {$a} sitesine SSO (Servis Sağlayıcı) servisini ayrıca <strong>duyurmalısınız</strong>.</li><li><em>Bağımlılık</em>: {$a} sitesindeki SSO (Kimlik Sağlayıcı) servisine ayrıca <strong>abone olmalısınız</strong>.</li></ul><br />{$a} sitesindeki derslere öğrencilerinizi kaydedebilmek için bu servise abone olun.<br /><ul><li><em>Bağımlılık</em>: {$a} sitesindeki SSO (Servis Sağlayıcı) servisine ayrıca <strong>abone olmalısınız</strong>.</li><li><em>Bağımlılık</em>: {$a} sitesine SSO (Kimlik Sağlayıcı) servisini ayrıca <strong>duyurmalısınız</strong>.</li></ul><br />';
$string['mnet_enrol_name'] = 'Moodle Ağı Ders Kaydı';
$string['pluginname'] = 'MNet uzaktan kayıtlar';
$string['pluginname_desc'] = 'Uzak MNet sunucusunun kullanıcılarını derslerimize kaydetmesine izin verir.';
$string['remotesubscriber'] = 'Uzak barındırıcı';
$string['remotesubscriber_help'] = 'Uzaktan kayıt hizmeti sunduğumuz tüm MNet akranları için bu dersi açmak için \'Tüm barındırıcılar\'ı seçin. Veya bu dersi yalnızca kullanıcıları için kullanılabilir hale getirmek için tek bir barındırıcı seçin.';
$string['remotesubscribersall'] = 'Tüm sağlayıcılar';
$string['roleforremoteusers'] = 'Kullanıcıları için rol';
$string['roleforremoteusers_help'] = 'Seçilen bilgisayarın uzak kullanıcıları hangi rolü alırlar.';
