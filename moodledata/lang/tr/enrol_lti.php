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
 * Strings for component 'enrol_lti', language 'tr', version '3.10'.
 *
 * @package     enrol_lti
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowframeembedding'] = 'Not: Araçlar, yeni bir pencere yerine bir çerçeve içinde görüntülenmesi için site yönetim ayarının \'Çerçeve yerleştirmeye izin ver\' ayarının etkinleştirilmesi önerilir.';
$string['authltimustbeenabled'] = 'Not: Bu eklenti, LTI kimlik doğrulama eklentisinin de etkinleştirilmesini gerektirir.';
$string['cartridgeurl'] = 'Zarf URL\'si';
$string['couldnotestablishproxy'] = 'Alıcı ile proxy kurulamadı.';
$string['enrolenddate'] = 'Bitiş tarihi';
$string['enrolenddate_help'] = 'Etkinleştirilirse kullanıcılar yalnızca bu tarihe kadar erişebilir.';
$string['enrolenddateerror'] = 'Kayıt bitiş tarihi başlangıç tarihinden önce olamaz';
$string['enrolisdisabled'] = '\'LTI aracı olarak yayın aracı\' eklentisi devre dışı.';
$string['enrolmentfinished'] = 'Kayıt bitti.';
$string['enrolmentnotstarted'] = 'Kayıt başlamadı.';
$string['enrolperiod'] = 'Kayıt süresi';
$string['enrolperiod_help'] = 'Kaydın geçerli olduğu süre, kullanıcı uzaktaki sistemden kendisini kayıt yaptırdığı andan itibaren. Devre dışı bırakılırsa, kayıt süresi sınırsız olur.';
$string['enrolstartdate'] = 'Başlangıç tarihi';
$string['enrolstartdate_help'] = 'Etkinleştirilirse kullanıcılar bu tarihten itibaren yalnızca erişebilir.';
$string['failedrequest'] = 'Başarısız talep. Sebebi ile: {$a->reason}';
$string['frameembeddingnotenabled'] = 'Araca erişmek için lütfen aşağıdaki bağlantıyı takip edin.';
$string['gradesync'] = 'Not senkronizasyonu';
$string['gradesync_help'] = 'Araçtan alınan notlar uzaktaki sisteme (LTI alıcı) gönderilip gönderilmediğine bakılmaksızın.';
$string['incorrecttoken'] = 'Belirteci yanlıştı. Lütfen URL\'yi kontrol edin ve tekrar deneyin veya bu aracın yöneticisiyle iletişime geçin.';
$string['invalidrequest'] = 'Geçersiz istek';
$string['invalidtoolconsumer'] = 'Geçersiz alıcı aracı.';
$string['launchdetails'] = 'Başlama ayrıntıları';
$string['launchdetails_help'] = 'Aracı yapılandırmak için bir kartuş URL\'si (yapılandırma URL\'si de denir) gerekir.';
$string['lti:config'] = '\'LTI aracı olarak yayınlama\' örneklerini yapılandır';
$string['lti:unenrol'] = 'Kullanıcıları dersten kaydettirin';
$string['maxenrolled'] = 'Maksimum kayıtlı kullanıcılar';
$string['maxenrolled_help'] = 'Araca erişebilen maksimum uzak kullanıcı sayısı. Sıfır olarak ayarlanırsa, kayıtlı kullanıcılar sınırsızdır.';
$string['maxenrolledreached'] = 'Araca erişmesine izin verilen maksimum uzak kullanıcı sayısı ulaşılmıştır.';
$string['membersync'] = 'Kullanıcı senkronizasyonu';
$string['membersync_help'] = 'Zamanlanmış bir görev uzak sistemdeki kayıtlı kullanıcıları bu ders kayıtlarıyla senkronize edip etmediğini, her uzak kullanıcı için gerektiğinde bir hesap oluşturup bulunmadığını ve bunları gerektiği gibi kaydettirir veya kayıtlarını iptal ettirir.

Hayır olarak ayarlanırsa, uzak bir kullanıcının aracı kullandığı andan itibaren onlar için bir hesap oluşturulur ve bunlar otomatik olarak kaydedilir.';
$string['membersyncmode'] = 'Kullanıcı senkronizasyonu modu';
$string['membersyncmode_help'] = 'Uzaktan kullanıcıların bu dersten kayıt olması ve / veya kaydının iptal edilmesi gerekip gerekmediğidir.';
$string['membersyncmodeenrolandunenrol'] = 'Yeni üye girişi yapın ve kayıp kullanıcıları kaldırın';
$string['membersyncmodeenrolnew'] = 'Yeni kullanıcılar kaydet';
$string['membersyncmodeunenrolmissing'] = 'Kayıp kullanıcıların kaydını silme';
$string['notoolsprovided'] = 'Sağlanan araç yok';
$string['opentool'] = 'Aracı açın';
$string['pluginname'] = 'LTI aracı olarak yayınla';
$string['pluginname_desc'] = '\'LTI aracı olarak yayın aracı\' eklentisi, LTI kimlik doğrulama eklentisi ile birlikte uzak kullanıcıların seçilen kurslara ve etkinliklere erişmelerini sağlar. Diğer bir deyişle, Moodle bir LTI araç sağlayıcısı olarak işlev görür.';
$string['registration'] = 'Yayınlanmış araç kaydı';
$string['registrationurl'] = 'Kayıt URL\'si';
$string['registrationurl_help'] = 'Bir kayıt URL\'si (proxy URL olarak da bilinir) kullanılıyorsa, araç otomatik olarak yapılandırılır.';
$string['remotesystem'] = 'Uzak sistem';
$string['requirecompletion'] = 'Not senkronizasyonu öncesinde ders veya etkinlik tamamlamayı gerektir';
$string['returnurlnotset'] = 'Dönüş URL\'si ayarlanmadı.';
$string['roleinstructor'] = 'Öğretmenin Rolü';
$string['roleinstructor_help'] = 'Araçta uzak öğretmen için atanan rol.';
$string['rolelearner'] = 'Öğrenci rolü';
$string['rolelearner_help'] = 'Araçta uzak öğrenciye verilen rol.';
$string['secret'] = 'Gizlilik';
$string['secret_help'] = 'Araca erişim sağlamak için uzaktaki sistemle (LTI alıcı) paylaşılan bir dizi karakter.';
$string['sharedexternaltools'] = 'LTI araçları olarak yayınlandı';
$string['successfulregistration'] = 'Başarılı kayıt';
$string['tasksyncgrades'] = 'LTI araç sınıfını senkronize olarak yayınla';
$string['tasksyncmembers'] = 'LTI aracı kullanıcılarını senkronize olarak yayınla';
$string['toolsprovided'] = 'Yayınlanan araçlar';
$string['toolsprovided_help'] = 'Bu, bu araçları eklemek için herhangi bir sisteme yapıştırmanız gereken bilgidir. Diğer sistemlerde, Araç URL\'sine bir yapılandırma URL\'si veya bir web bağlantısı adı verilebilir.';
$string['tooltobeprovided'] = 'Yayınlanacak araç';
$string['toolurl'] = 'Araç URL\'si';
$string['userdefaultvalues'] = 'Kullanıcı varsayılan değerleri';
