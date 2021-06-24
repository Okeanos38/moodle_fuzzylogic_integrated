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
 * Strings for component 'tool_lpmigrate', language 'tr', version '3.10'.
 *
 * @package     tool_lpmigrate
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowedcourses'] = 'İzin verilen kurslar';
$string['allowedcourses_help'] = 'Yeni çerçeveye taşınacak dersleri seçin. Herhangi bir ders belirtilmemişse, tüm dersler geçirilecektir.';
$string['continuetoframeworks'] = 'Çerçevelere devam et';
$string['coursecompetencymigrations'] = 'Ders yetkinliği taşımaları';
$string['coursemodulecompetencymigrations'] = 'Ders etkinliği ve kaynak yetkinliği taşımaları';
$string['coursemodulesfound'] = 'Ders etkinlikleri veya kaynakları bulundu';
$string['coursesfound'] = 'Dersler bulundu';
$string['coursestartdate'] = 'Derslerin başlangıç tarihi';
$string['coursestartdate_help'] = 'Etkinleştirilirse, belirtilen tarihten önce başlangıç tarihli dersler taşınmaz.';
$string['disallowedcourses'] = 'İzin verilmeyen dersler';
$string['disallowedcourses_help'] = 'Yeni çerçeveye taşınması gereken herhangi bir ders seçin.';
$string['errorcannotmigratetosameframework'] = 'Aynı çerçevey taşınamıyor.';
$string['errorcouldnotmapcompetenciesinframework'] = 'Bu çerçevede herhangi bir yetkinlik eşleşmesi yapılamadı.';
$string['errors'] = 'Hatalar';
$string['errorwhilemigratingcoursecompetencywithexception'] = 'Ders yetkinliği taşınırken hata oluştu: {$a}';
$string['errorwhilemigratingmodulecompetencywithexception'] = 'Etkinliği veya kaynak yetkinliğini taşırken hata: {$a}';
$string['excludethese'] = 'Bunları hariç tut';
$string['explanation'] = 'Bu araç, bir yetkinlik çerçevesini daha yeni bir sürüme güncellemek için kullanılabilir. Eski çerçeveyi kullanarak derslerde ve etkinliklerde yetkinlikleri araştırır ve bağlantıları yeni çerçeveyi gösterecek şekilde günceller.

Eski yetkinlik setini doğrudan düzenlemek zorunludur, çünkü bu, kullanıcıların öğrenme planlarında zaten verilen yetkinlikleri değiştirecektir.

Genellikle bir çerçevenin yeni sürümünü içe aktarırsınız, eski çerçeveyi gizlersiniz, daha sonra yeni dersleri yeni çerçeveye taşımak için bu aracı kullanabilirsiniz.';
$string['findingcoursecompetencies'] = 'Kurs yetkinliklerini bulma';
$string['findingmodulecompetencies'] = 'Etkinlik ve Yetkinlik kaynaklarını bulma';
$string['frameworks'] = 'Çerçeveler';
$string['limittothese'] = 'Bunlara sınırla';
$string['lpmigrate:frameworksmigrate'] = 'Çerçeveleri taşı';
$string['migrateframeworks'] = 'Çerçeveleri taşı';
$string['migratefrom'] = 'Şuradan taşı;';
$string['migratefrom_help'] = 'Halen kullanılan daha eski çerçeveyi seçin.';
$string['migratemore'] = 'Daha fazlasını taşı';
$string['migrateto'] = 'Şuraya taşı;';
$string['migrateto_help'] = 'Çerçevenin daha yeni sürümünü seçin. Sadece gizli olmayan bir çerçeve seçmek mümkündür.';
$string['migratingcourses'] = 'Dersleri taşıma';
$string['missingmappings'] = 'Eksik eşlemeler';
$string['performmigration'] = 'Taşımayı gerçekleştir';
$string['pluginname'] = 'Yetkinlikler taşıma aracı';
$string['results'] = 'Sonuçlar';
$string['startdatefrom'] = 'Başlama tarihinden itibaren';
$string['unmappedin'] = 'Eşleştirilmemiş {$a}';
$string['warningcouldnotremovecoursecompetency'] = 'Ders yetkinliği kaldırılamadı.';
$string['warningcouldnotremovemodulecompetency'] = 'Etkinlik veya yetkinlik kaynağı kaldırılamadı.';
$string['warningdestinationcoursecompetencyalreadyexists'] = 'Hedef ders yetkinliği zaten var.';
$string['warningdestinationmodulecompetencyalreadyexists'] = 'Hedef etkinlik veya yetkinlik kaynağı zaten var.';
$string['warnings'] = 'Uyarılar';
