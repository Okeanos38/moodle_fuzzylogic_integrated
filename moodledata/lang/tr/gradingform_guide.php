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
 * Strings for component 'gradingform_guide', language 'tr', version '3.10'.
 *
 * @package     gradingform_guide
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcomment'] = 'Sık kullanılan yorum ekle';
$string['addcriterion'] = 'Ölçüt ekle';
$string['alwaysshowdefinition'] = 'Rehber tanımını öğrencilere gösterin';
$string['backtoediting'] = 'Düzenlemeye geri dön';
$string['clicktocopy'] = 'Bu metni ölçütlerin geri bildirimine kopyalamak için tıklayın';
$string['clicktoedit'] = 'Düzenlemek için tıkla';
$string['clicktoeditname'] = 'Ölçüt adını düzenlemek için tıklayın';
$string['comment'] = 'Yorum';
$string['comments'] = 'Sık kullanılan yorumlar';
$string['commentsdelete'] = 'Yorumu sil';
$string['commentsempty'] = 'Yorumu düzenlemek için tıkla';
$string['commentsmovedown'] = 'Aşağı taşı';
$string['commentsmoveup'] = 'Yukarı taşı';
$string['confirmdeletecriterion'] = 'Bu öğeyi silmek istediğinizden emin misiniz?';
$string['confirmdeletelevel'] = 'Bu seviyeyi silmek istediğinizden emin misiniz?';
$string['criterion'] = 'Ölçüt adı';
$string['criteriondelete'] = 'Ölçütü sil';
$string['criterionempty'] = 'Ölçütü düzenlemek için tıklayın';
$string['criterionmovedown'] = 'Aşağı taşı';
$string['criterionmoveup'] = 'Yukarı taşı';
$string['criterionname'] = 'Ölçüt adı';
$string['criterionremark'] = '{$a} ölçütünün yeniden işaretlenmesi';
$string['definemarkingguide'] = 'İşaretleme kılavuzunu tanımlayın';
$string['description'] = 'Açıklama';
$string['descriptionmarkers'] = 'İşaretleyici için açıklama';
$string['descriptionstudents'] = 'Öğrenciler için açıklama';
$string['err_maxscoreisnegative'] = 'Maksimum puan geçerli değil, negatif değerlere izin verilmiyor';
$string['err_maxscorenotnumeric'] = 'Ölçüt maksimum skoru sayısal olmalıdır';
$string['err_nocomment'] = 'Yorum boş olamaz';
$string['err_nodescription'] = 'Öğrenci açıklaması boş olamaz';
$string['err_nodescriptionmarkers'] = 'İşaretleyici açıklaması boş olamaz';
$string['err_nomaxscore'] = 'Ölçüt maksimum skoru boş olamaz';
$string['err_noshortname'] = 'Ölçüt adı boş olamaz';
$string['err_scoreinvalid'] = '\'{$a->criterianame}\' e verilen puan geçerli değil, maksimum puan: {$a->maxscore}';
$string['err_scoreisnegative'] = '\'{$a->criterianame}\' e verilen puan geçerli değil, negatif değerler izin verilmez';
$string['err_shortnametoolong'] = 'Ölçüt adı 256 karakterden az olmalı';
$string['gradingof'] = '{$a} notlandırma';
$string['guide'] = 'İşaretleme rehberi';
$string['guidemappingexplained'] = 'UYARI: İşaretleme rehberinizin azami bir notu <b> {$a->maxscore} puanı var </ b> ancak etkinliğinizde belirlenen en yüksek not {$a->modulegrade} işaretleme rehberinizde belirlenen en yüksek not olacaktır <br /> Modülde en üst seviyede notlandırılabilir. <br />
     Orta dereceli puanlar sırasıyla dönüştürülerek en yakın mevcut nota yuvarlanır.';
$string['guidenotcompleted'] = 'Lütfen her ölçüt için geçerli bir not verin';
$string['guideoptions'] = 'İşaretleme kılavuzu seçenekleri';
$string['guidestatus'] = 'Mevcut işaretleme kılavuzu durumu';
$string['hidemarkerdesc'] = 'İşaretleyici ölçüt açıklamalarını gizle';
$string['hidestudentdesc'] = 'Öğrenci ölçüt açıklamalarını gizle';
$string['insertcomment'] = 'Sık kullanılan yorumu ekleyin';
$string['maxscore'] = 'Maksimum puan';
$string['name'] = 'Adı';
$string['needregrademessage'] = 'Bu öğrenci notlandırıldıktan sonra işaretleme rehberi tanımı değiştirildi. Öğrenci işaretleme kılavuzunu kontrol edip notu güncelleyene kadar bu işaretleme kılavuzunu göremez.';
$string['pluginname'] = 'İşaretleme rehberi';
$string['previewmarkingguide'] = 'İşaretleme rehberini önizle';
$string['regrademessage1'] = 'Şimdiye kadar not vermede kullanılan bir işaretleme rehberindeki değişiklikleri kaydetmek üzeresiniz. Mevcut notların gözden geçirilmesi gerekip gerekmediğini lütfen belirtiniz. Bunu ayarlarsanız, işaretleme rehberi öğeleri yeniden düzenlenene kadar öğrencilerden gizlenecektir.';
$string['regrademessage5'] = 'Önceden not vermede kullanılmış bir işaretleme rehberinde önemli değişiklikler kaydetmek üzeresiniz. Not defteri değeri değişmeyecek, ancak işaretleme rehberi öğeleri yeniden düzenlenene kadar öğrencilerden gizlenecek.';
$string['regradeoption0'] = 'Yeniden not verme için işaret yok';
$string['regradeoption1'] = 'Notların işaretleri';
$string['restoredfromdraft'] = 'NOT: Bu kişiye not vermeye yönelik son girişim uygun şekilde kaydedilmedi, böylece taslak notları geri yüklendi. Bu değişiklikleri iptal etmek istiyorsanız aşağıdaki \'İptal\'i kullanın.';
$string['save'] = 'Kaydet';
$string['saveguide'] = 'İşaretleme kılavuzunu kaydedin ve hazır hale getirin';
$string['saveguidedraft'] = 'Taslak olarak kaydet';
$string['score'] = 'skor';
$string['showmarkerdesc'] = 'İşaretleyici ölçüt açıklamalarını göster';
$string['showmarkspercriterionstudents'] = 'Ölçüt bazında işaretleri öğrencilere gösterin';
$string['showstudentdesc'] = 'Öğrenci ölçüt açıklamalarını göster';
