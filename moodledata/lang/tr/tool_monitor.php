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
 * Strings for component 'tool_monitor', language 'tr', version '3.10'.
 *
 * @package     tool_monitor
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addrule'] = 'Yeni bir kural ekle';
$string['allevents'] = 'Tüm Etkinlikler';
$string['allmodules'] = 'Tüm örnekler';
$string['area'] = 'Alan';
$string['areatomonitor'] = 'İzlenecek alan';
$string['cachedef_eventsubscriptions'] = 'Bu, bireysel dersler için etkinlik abonelikleri listesini depolar';
$string['contactadmin'] = 'Etkinleştirmek için yöneticinize başvurun.';
$string['core'] = 'Çekirdek';
$string['currentsubscriptions'] = 'Geçerli abonelikleriniz';
$string['defaultmessagetemplate'] = 'Kural adı: {rulename} <br /> Açıklama: {description} <br /> Etkinlik adı: {eventname}';
$string['deleterule'] = 'Kuralı sil';
$string['deletesubscription'] = 'Aboneliği sil';
$string['description'] = 'Açıklamalar:';
$string['disablefieldswarning'] = 'Bu kuralın abonelikleri zaten olduğundan bazı alanlar düzenlenemez.';
$string['duplicaterule'] = 'Kuralı çoğalt';
$string['editrule'] = 'Kuralı düzenle';
$string['enablehelp'] = 'Etkinliği izleme etkinleştir/devre dışı bırak';
$string['enablehelp_help'] = 'Kuralları oluşturup bunlara abone olabilmeniz için olay izlemesi etkinleştirilmelidir. Etkinlik izlemeyi etkinleştirmenin sitenizin performansını etkileyebileceğini unutmayın.';
$string['errorincorrectevent'] = 'Lütfen seçilen eklentiyle ilgili bir etkinlik seçin';
$string['event'] = 'Etkinlik';
$string['eventnotfound'] = 'Etkinlik bulunamadı';
$string['eventrulecreated'] = 'Kural oluşturuldu';
$string['eventruledeleted'] = 'Kural silindi';
$string['eventruleupdated'] = 'Kural güncellendi';
$string['eventsubcreated'] = 'Abonelik oluşturuldu';
$string['eventsubcriteriamet'] = 'Abonelik ölçütleri karkşılandı';
$string['eventsubdeleted'] = 'Abonelik silindi';
$string['freqdesc'] = '{$a->freq} time(s) içinde {$a->mins} dakika(lar)';
$string['frequency'] = 'Bildirim eşiği';
$string['frequency_help'] = 'Belirli bir süre içindeki bir etkinlik sayısı, bir bildirim iletisinin gönderilmesi için gereklidir.';
$string['inminutes'] = 'dakikalar içinde';
$string['invalidmodule'] = 'Geçersiz modül';
$string['manage'] = 'Yönet';
$string['managerules'] = 'Etkinlik izleme kuralları';
$string['manageruleslink'] = 'Kuralları {$a} sayfasından yönetebilirsiniz.';
$string['managesubscriptions'] = 'Etkinlik izleme';
$string['managesubscriptionslink'] = '{$a} sayfasından kurallara abone olabilirsiniz.';
$string['messageprovider:notification'] = 'Kural aboneliklerinin bildirimleri';
$string['messagetemplate'] = 'Bildirim iletisi';
$string['messagetemplate_help'] = 'Bildirim eşiğine ulaşıldıktan sonra bir bildirim mesajı abonelere gönderilir. Aşağıdaki yer tutucuların herhangi birini veya tümünü içerebilir:
<br /> <br />
* Etkinliğin bulunduğu yere bağlantı {link} <br />
* İzlenen alana bağlantı {modulelink} <br />
* Kural adı {rulename} <br />
* Açıklama {description} <br />
* Etkinlik {eventname}';
$string['moduleinstance'] = 'Örnek';
$string['monitor:managerules'] = 'Etkinlik izleme kurallarını yönetme';
$string['monitor:managetool'] = 'Etkinliği izleme etkinleştir/devre dışı bırak';
$string['monitor:subscribe'] = 'Etkinlik izleyicisi kurallarına abone olun';
$string['monitordisabled'] = 'Etkinlik izleme şu anda devre dışı.';
$string['monitorenabled'] = 'Etkinlik izleme şu anda etkin.';
$string['norules'] = 'Hiçbir etkinlik izleme kuralları yoktur.';
$string['pluginname'] = 'Etkinlik izleme';
$string['processevents'] = 'Etkinlikleri işleme';
$string['ruleareyousure'] = '"{$a}" kuralını silmek istediğinizden emin misiniz?';
$string['ruleareyousureextra'] = 'Bu kurala, aynı zamanda silinecek {$a} abonelik (ler) var.';
$string['rulecopysuccess'] = 'Kural başarıyla çoğaltıldı';
$string['ruledeletesuccess'] = 'Kural başarıyla silindi';
$string['rulehelp'] = 'Kural ayrıntıları';
$string['rulehelp_help'] = 'Bu kural, {$a->minutes} dakika içinde {$a->eventcomponent} \'te {$a->frequency} saat (ler) i tetiklediğinde\' {$a->eventname} \'olayının ne zaman tetiklendiğini dinliyor.';
$string['rulename'] = 'Kural adı';
$string['rulenopermission'] = 'Herhangi bir etkinliğe abone olma izniniz yok.';
$string['rulenopermissions'] = '"{$a} bir kural" için izinleriniz yok "';
$string['rulescansubscribe'] = 'Abone olabileceğiniz kurallar';
$string['selectacourse'] = 'Bir ders seçiniz';
$string['selectcourse'] = 'Olası modüllerin listesini almak için bu raporu kurs düzeyinde ziyaret edin';
$string['subareyousure'] = '"{$a}" kuralı aboneliğini silmek istediğinizden emin misiniz?';
$string['subcreatesuccess'] = 'Abone başarıyla oluşturuldu';
$string['subdeletesuccess'] = 'Abone başarıyla kaldırıldı';
$string['subhelp'] = 'Abonelik ayrıntıları';
$string['subhelp_help'] = 'Bu abonelik, {$a->minutes} dakika içinde {$a->moduleinstance} \'{$a->frequency} saatte\' {$a->eventname} \'etkinliği tetiklendiğinde dinliyor.';
$string['subscribeto'] = '"{$a}" kuralına abone olun';
$string['taskchecksubscriptions'] = 'Geçersiz kural aboneliklerini etkinleştirme/devre dışı bırakma';
$string['taskcleanevents'] = 'Etkinlik izleme olaylarını temizleme';
$string['unsubscribe'] = 'Abonelikten çık';
