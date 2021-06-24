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
 * Strings for component 'tool_task', language 'tr', version '3.10'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'ASAP';
$string['blocking'] = 'Engelleme';
$string['component'] = 'Bileşen';
$string['corecomponent'] = 'Çekirdek';
$string['default'] = 'Varsayılan';
$string['disabled'] = 'Devre dışı';
$string['disabled_help'] = 'Devre dışı bırakılmış zamanlanmış görevler cron\'dan yürütülmez, ancak yine de CLI aracı ile manuel olarak yürütülebilir.';
$string['edittaskschedule'] = 'Görev zamanlamasını düzenle: {$a}';
$string['faildelay'] = 'Gecikme başarısız';
$string['lastruntime'] = 'Son çalıştırma';
$string['nextruntime'] = 'Sonraki çalıştırma';
$string['plugindisabled'] = 'Eklenti devre dışı';
$string['pluginname'] = 'Zamanlanmış görev yapılandırması';
$string['resettasktodefaults'] = 'Görev zamanlamasını varsayılanlara sıfırlama';
$string['resettasktodefaults_help'] = 'Bu, tüm yerel değişiklikleri atar ve bu görevi zamanlamasının kendi orijinal ayarlarına geri döndürür.';
$string['scheduledtaskchangesdisabled'] = 'Moodle yapılandırmasında zamanlanmış görevler listesindeki değişiklikler engellendi';
$string['scheduledtasks'] = 'Zamanlanmış görevler';
$string['taskdisabled'] = 'Görev devre dışı';
$string['taskscheduleday'] = 'Gün';
$string['taskscheduleday_help'] = 'Görev takvimi için ayın günü alanı. Alan, unix cron ile aynı biçimi kullanır. Bazı örnekler şunlardır: <br/> <ul> <li> <strong> * </ strong> Her gün </ li> <li> <strong> * / 2 </ strong> Her 2 günde bir </ li> <li > <Strong> 1 </ strong> Her ayın ilk günü </ li> <li> <strong> 1, 15 </ strong> Her ayın ilk ve on beşinci günü </ li> </ ul>';
$string['taskscheduledayofweek'] = 'Haftanın günü';
$string['taskscheduledayofweek_help'] = 'Görev zamanlaması için haftanın günü alanı. Alan, unix cron ile aynı biçimi kullanır. Bazı örnekler şunlardır: <br/> <ul> <li> <strong> * </ strong> Her gün </ li> <li> <strong> 0 </ strong> Her Pazar </ li> <li> <strong > 6 </ strong> Her Cumartesi </ li> <li> <strong> 1, 5 </ strong> Her Pazartesi ve Cuma </ li> </ ul>';
$string['taskschedulehour'] = 'Saat';
$string['taskschedulehour_help'] = 'Görev takvimi için Saat alanı. Alan, unix cron ile aynı biçimi kullanır. Bazı örnekler şunlardır: <br/> </ ul> <li> <strong> * </ strong> Her saat </ li> <li> <strong> * / 2 </ strong> Her 2 saatte bir </ li> <li </ li> <li> <strong> 2, 6, 9 </ strong> saat 02.00, akşam 6:00 ve öğleden sonra </ li> <strong> 2-10 </ strong> </ ul>';
$string['taskscheduleminute'] = 'Dakika';
$string['taskscheduleminute_help'] = 'Görev takvimi için Dakika alanı. Alan, unix cron ile aynı biçimi kullanır. Bazı örnekler şunlardır: <br/> <ul> <li> <strong> * </ strong> Her dakika </ li> <li> <strong> * / 5 </ strong> Her 5 dakikada bir </ li> <li > <strong> 2-10 </ strong> Saatte 2 ila 10 arası her dakika (her biri dahil) </ li> <li> <strong> 2, 6, 9 </ strong> 2 6 ve 9 dakika geçmiş Saat </ li> </ ul>';
$string['taskschedulemonth'] = 'Ay';
$string['taskschedulemonth_help'] = 'Görev zamanlaması için Ay alanı. Alan, unix cron ile aynı biçimi kullanır. Bazı örnekler şunlardır: <br/> <ul> <li> <strong> * </ strong> Her ay </ li> <li> <strong> * / 2 </ strong> Her ikinci ayda </ li> <li > <strong> 1 </ strong> Her Ocak ayında </ li> <li> <strong> 1, 5 </ strong> Her Ocak ve Mayıs aylarında </ li> </ ul>';
