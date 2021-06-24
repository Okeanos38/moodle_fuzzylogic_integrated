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
 * Strings for component 'assignfeedback_offline', language 'tr', version '3.10'.
 *
 * @package     assignfeedback_offline
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['confirmimport'] = 'Not eklemeyi onayla';
$string['default'] = 'Varsayılan olarak etkinleştir';
$string['default_help'] = 'Eğer ayarlıysa, ödevleri çevrimdışı olarak notlama varsayılan olarak etkin olacaktır.';
$string['downloadgrades'] = 'Derecelendirme ödevini indir';
$string['enabled'] = 'Çevrimdışı derecelendirme ödevi';
$string['enabled_help'] = 'Eğer etkinse, öğretmenler ödevleri öğrencilerin notlarıyla beraber indirebilir veya yükleyebilir olacaklardır.';
$string['feedbackupdate'] = '"{$a->field}" boşluğunu "{$a->student}" öğrencisi için şuna "{$a->text}"';
$string['gradelockedingradebook'] = '{$a} için not defterindeki not kilitli';
$string['graderecentlymodified'] = 'Not Moodle içerisinde derecelendirme ödevine göre daha yeni tarihle değiştirimiştir';
$string['gradesfile'] = 'Derecelendirme ödevi (csv formatında)';
$string['gradesfile_help'] = 'Değiştirilmiş notlarla çalışma sayfasına not verme. Bu dosya, ödevden indirilmiş, öğrenci notu ve tanımlayıcı sütunları olan UTF-8 kodlamalı bir CSV dosyası olmalıdır.';
$string['gradeupdate'] = '{$a->student} öğrenci için {$a->grade} notunu gir';
$string['ignoremodified'] = 'Yakın zamanlarda Moodle içinde elektronik tablodaki değiştirilen kayıtları güncelleştirme izin verin';
$string['ignoremodified_help'] = 'Moodle\'dan indirilmiş ödevi değerlendirirken, ödev notlar için son değişiklik zamanını içermeli. Eğer herhangi bir not, ödev Moodle\'dan indirildikten sonra güncellenmiş ise varsayılan olarak Moodle bu güncellenmiş bilginin üzerine yazmayı red edecektir';
$string['importgrades'] = 'Derecelendirme ödevindeki değişikleri onayla';
$string['invalidgradeimport'] = 'Moodle yüklenen ödevi okuyamadı. Ödevin virgülle ayırılmış değerler ile (.csv formatında) kaydedildiğine emin olun ve tekrar deneyin.';
$string['nochanges'] = 'Yüklenen derecelendirme ödevinde değiştirilmiş not bulunmadı';
$string['offlinegradingworksheet'] = 'Notlar';
$string['pluginname'] = 'Çevrimdışı derecelendirme ödevi';
$string['privacy:nullproviderreason'] = 'Bu eklentinin kullanıcı bilgilerini depolayacak bir veritabanı yok. Notlandırma arayüzünün görüntülenmesine yardımcı olmak için sadece mod_assign içindeki API\'leri kullanır.';
$string['processgrades'] = 'Notları içeri aktar';
$string['skiprecord'] = 'Kayıtı atla';
$string['updatedgrades'] = 'Güncellenmiş {$a} notlar ve geribildirim';
$string['updaterecord'] = 'Kayıtı güncelle';
$string['uploadgrades'] = 'Derecelendirme ödevi yükle';
