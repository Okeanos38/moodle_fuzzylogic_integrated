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
 * Strings for component 'workshopallocation_scheduled', language 'tr', version '3.10'.
 *
 * @package     workshopallocation_scheduled
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['crontask'] = 'Planlı tahsis için arka planda işleme';
$string['currentstatus'] = 'Şu anki durum';
$string['currentstatusexecution'] = 'Durum';
$string['currentstatusexecution1'] = '{$a->datetime} tarihinde yürütüldü';
$string['currentstatusexecution2'] = '{$a->datetime} tarihinde tekrar yürütülecek';
$string['currentstatusexecution3'] = '{$a->datetime} tarihinde yürütülecek';
$string['currentstatusexecution4'] = 'Uygulanma bekleniyor';
$string['currentstatusnext'] = 'Sonraki yürütme';
$string['currentstatusnext_help'] = 'Bazı durumlarda, tahsis, halihazırda yürütülmüş olsa bile otomatik olarak yeniden yürütülmek üzere planlanır. Örneğin, son gönderim tarihi uzatıldıysa bu olabilir.';
$string['currentstatusreset'] = 'Sıfırla';
$string['currentstatusreset_help'] = 'Formu bu onay kutusu işaretlenmiş olarak kaydetmek, mevcut durumun sıfırlanmasına neden olacaktır. Önceki yürütmeyle ilgili tüm bilgiler kaldırılacaktır, böylece atama yeniden yürütülebilir (yukarıda etkinleştirildiyse).';
$string['currentstatusresetinfo'] = 'Yürütme sonucunu sıfırlamak için kutuyu işaretleyin ve formu kaydedin';
$string['currentstatusresult'] = 'Son yürütme sonucu';
$string['enablescheduled'] = 'Planlı tahsisi etkinleştirin';
$string['enablescheduledinfo'] = 'Gönderim aşamasının sonunda gönderimleri otomatik olarak atayın';
$string['pluginname'] = 'Planlanmış tahsis';
$string['privacy:metadata'] = 'Zamanlanmış tahsis eklentisi herhangi bir kişisel veriyi saklamaz. Kimin kimi değerlendireceğine ilişkin gerçek kişisel veriler Atölye modülünün kendisi tarafından saklanır ve değerlendirme ayrıntılarının dışa aktarılması için temel oluşturur.';
$string['randomallocationsettings'] = 'Atama (tahsis) ayarları';
$string['randomallocationsettings_help'] = 'Rastgele tahsis yöntemi için parametreler burada tanımlanmıştır. Gönderilerin gerçek tahsisi için rastgele tahsis eklentisi tarafından kullanılacaktır.';
$string['resultdisabled'] = 'Planlanan tahsis devre dışı bırakıldı';
$string['resultenabled'] = 'Planlı tahsis etkinleştirildi';
$string['resultexecuted'] = 'Başarı';
$string['resultfailed'] = 'Gönderimler otomatik olarak tahsis edilemiyor';
$string['resultfailedconfig'] = 'Zamanlanmış tahsis yanlış yapılandırıldı';
$string['resultfaileddeadline'] = 'Çalıştay için belirlenen son teslim tarihi yok';
$string['resultfailedphase'] = 'Çalıştay teslim aşamasında değil';
$string['resultvoid'] = 'Gönderim tahsis edilmedi';
$string['resultvoiddeadline'] = 'Son gönderim tarihinden sonra henüz değil';
$string['resultvoidexecuted'] = 'Tahsis zaten gerçekleştirildi';
$string['scheduledallocationsettings'] = 'Planlanmış tahsis ayarları';
$string['scheduledallocationsettings_help'] = 'Etkinleştirilirse, planlanan tahsis yöntemi, gönderim aşamasının sonunda değerlendirme için gönderimleri otomatik olarak tahsis edecektir. Aşamanın sonu atölye ayarı \'Son teslim tarihi\' bölümünde tanımlanabilir.

Dahili olarak, rastgele tahsis yöntemi bu formda önceden tanımlanan parametrelerle yürütülür. Bu, planlı tahsisin, öğretmenin, aşağıdaki tahsis ayarlarını kullanarak gönderim aşamasının sonunda rastgele tahsisatı kendisi yapmış gibi çalıştığı anlamına gelir.

Atölyeyi son gönderim tarihinden önce manuel olarak değerlendirme aşamasına geçirirseniz, planlanan tahsisatın * yürütülmediğini * unutmayın. Bu durumda gönderimleri kendiniz tahsis etmelisiniz. Zamanlanmış tahsis yöntemi, otomatik faz değiştirme özelliği ile birlikte kullanıldığında özellikle yararlıdır.';
$string['setup'] = 'Planlı tahsis ayarlayın';
