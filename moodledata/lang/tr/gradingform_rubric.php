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
 * Strings for component 'gradingform_rubric', language 'tr', version '3.10'.
 *
 * @package     gradingform_rubric
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcriterion'] = 'Ölçüt ekle';
$string['alwaysshowdefinition'] = 'Kullanıcıların Değerlendirme formu önizlemesine izin verin (aksi halde notlandırmadan sonra görüntülenir)';
$string['backtoediting'] = 'Düzenlemeye geri dön';
$string['confirmdeletecriterion'] = 'Bu ölçütü silmek istediğinizden emin misiniz?';
$string['confirmdeletelevel'] = 'Bu seviyeyi silmek istediğinizden emin misiniz?';
$string['criterion'] = 'Ölçüt {$a}';
$string['criterionaddlevel'] = 'Seviye ekle';
$string['criteriondelete'] = 'Ölçütü sil';
$string['criterionduplicate'] = 'Ölçütü çoğalt';
$string['criterionempty'] = 'Ölçütü düzenlemek için tıkla';
$string['criterionmovedown'] = 'Aşağı taşı';
$string['criterionmoveup'] = 'Yukarı taşı';
$string['criterionremark'] = 'Ölçüt için yeni işaretleme {$a->description}: {$a->remark}';
$string['definerubric'] = 'Rubrik tanımla';
$string['description'] = 'Açıklama';
$string['enableremarks'] = 'Not verenin her ölçüt için yeni metin işaretleri eklemesine izin verin';
$string['err_mintwolevels'] = 'Her ölçüt en az iki seviyeye sahip olmalıdır';
$string['err_nocriteria'] = 'Rubrik, en az bir ölçüt içermelidir';
$string['err_nodefinition'] = 'Seviye tanımı boş olamaz';
$string['err_nodescription'] = 'Ölçüt açıklaması boş olamaz';
$string['err_novariations'] = 'Ölçüt seviyeleri aynı puana eşit sayılamaz';
$string['err_scoreformat'] = 'Her seviye için puan sayısı geçerli bir sayı olmalıdır';
$string['err_totalscore'] = 'Rubrik ile not verilirken mümkün olan azami puan sayısı sıfırdan fazla olmalı';
$string['gradingof'] = '{$a} notlandırma';
$string['level'] = 'Seviye {$a->definition}, {$a->score} puanları.';
$string['leveldefinition'] = '{$a} seviyesi tanımı';
$string['leveldelete'] = '{$a} seviyesini sil';
$string['levelempty'] = 'Seviyeyi düzenlemek için tıkla';
$string['levelsgroup'] = 'Seviye grubu';
$string['lockzeropoints'] = 'Puanı, rubriğin en az 0 puan olduğu duruma göre hesapla';
$string['lockzeropoints_help'] = 'Bu ayar yalnızca, her bir kriter için minimum puan sayısının toplamı 0\'dan büyükse geçerlidir. Varsa, Değerlendirme formu için ulaşılabilir minimum başarı notu 0\'dan büyük olacaktır. İşaretlenmezse, değerlendirme formu için mümkün olan en düşük puanla eşlenecektir Etkinlik için mevcut en düşük nota (bir ölçek kullanılmadığı sürece 0\'dır) getirin.';
$string['name'] = 'Adı';
$string['needregrademessage'] = 'Bu öğrenci notlandırıldıktan sonra değerlendirme formu tanımı değiştirildi. Öğrenci, senaryoyu kontrol edip notu güncelleyene kadar bu yazıyı göremez.';
$string['pluginname'] = 'Rubrik';
$string['previewrubric'] = 'Rubrik önizleme';
$string['privacy:metadata:levelid'] = 'Rubrikten elde edilen düzey.';
$string['regrademessage1'] = 'Şimdiye kadar notlandırmada kullanılan bir değerlendirme maddesindeki değişiklikleri kaydetmek üzeresiniz. Mevcut sınıfların gözden geçirilmesi gerekip gerekmediğini lütfen belirtiniz.
Bunu ayarlarsanız, öğe yeniden düzenleninceye kadar rubrik öğrencilerden gizlenecektir.';
$string['regrademessage5'] = 'Önceden notlandırmada kullanılan bir değerlendirme formunda önemli değişiklikleri kaydetmek üzeresiniz. Not defteri değeri değişmez, ancak değerlendirme formu yeniden düzenlenene kadar öğrencilerden gizlenecektir.';
$string['regradeoption0'] = 'Yeniden not verme için işaretleme yapma';
$string['regradeoption1'] = 'Yeniden not verme için işaret';
$string['restoredfromdraft'] = 'NOT: Bu kişiyi notlandırmaya yönelik son girişim uygun şekilde kaydedilmedi, böylece taslak notları geri yüklendi. Bu değişiklikleri iptal etmek istiyorsanız aşağıdaki \'İptal\'i kullanın.';
$string['rubric'] = 'Rubrik';
$string['rubricmapping'] = 'Puan eşleştirmesi haritalama kuralları';
$string['rubricmappingexplained'] = 'Bu rubrik için mümkün olan en düşük puan, <b> {$a->minscore}</ b> \'dır. Etkinlik için mevcut en düşük nota dönüştürülecektir (bir ölçek kullanılmadığı sürece 0\'dır). <b> {$a->maxscore} puan </ b> maksimun puanı maksimum nota dönüştürülecektir. Orta dereceli puanlar sırasıyla dönüştürülecektir.

Notlandırma için bir ölçek kullanılıyorsa, puan yuvarlanır ve art arda tamsayı gibi ölçek elemanlarına dönüştürülür.

Bu not hesaplama, formu düzenleyip \'Puan en az 0 olan bir dereceye göre hesapla\' kutusunu işaretleyerek değiştirilebilir.';
$string['rubricnotcompleted'] = 'Lütfen her ölçüt için bir şeyler seçin';
$string['rubricoptions'] = 'Rubrik seçenekleri';
$string['rubricstatus'] = 'Şu anki işaret durumu';
$string['save'] = 'Kaydet';
$string['saverubric'] = 'Rubriği kaydedin ve hazır hale getirin';
$string['saverubricdraft'] = 'Taslak olarak kaydet';
$string['scoreinputforlevel'] = '{$a} seviyesindeki puan girişi';
$string['scorepostfix'] = '{$a} puanlar';
$string['showdescriptionstudent'] = 'Notlandırma yapılacak kişilere rubriğin açıklamasını göster';
$string['showdescriptionteacher'] = 'Değerlendirme sırasında rubriğin açıklamasını göster';
$string['showremarksstudent'] = 'Değerlendirilmekte olanlar için yeniden işaretler gösterin';
$string['showscorestudent'] = 'Değerlendirilmek üzere her seviye için puanları gösterin';
$string['showscoreteacher'] = 'Değerlendirme sırasında her seviye için puanları göster';
$string['sortlevelsasc'] = 'Seviyeler için sıralama düzeni:';
$string['sortlevelsasc0'] = 'Puan sayısına göre azalan';
$string['sortlevelsasc1'] = 'Puan sayısına göre artan';
$string['zerolevelsabsent'] = 'Uyarı: Bu değerlendirme formu için mümkün olan en düşük puan 0 değil; Bu, etkinlik için beklenmedik notlara neden olabilir. Bunu önlemek için, her bir ölçüt 0 puanla bir seviyeye sahip olmalıdır. <br>
Notlandırma için bir ölçek kullanılıyorsa ve bu hesaplamadaki minimum düzeyler ölçeğin minimum değerine karşılık geliyorsa, bu uyarı göz ardı edilebilir.';
