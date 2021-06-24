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
 * Strings for component 'completion', language 'tr', version '3.10'.
 *
 * @package     completion
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievinggrade'] = 'Not kazanma';
$string['activities'] = 'Etkinlikler';
$string['activitiescompleted'] = 'Aktivite tamamlama';
$string['activitiescompletednote'] = 'Dikkat: Aktivitenin yukarıdaki listede çıkması için aktivite tamamlamanın seçilmesi gerekmektedir.';
$string['activitieslabel'] = 'Etkinlikler / kaynaklar';
$string['activityaggregation'] = 'Şart gereksinimi';
$string['activityaggregation_all'] = 'TÜM seçilen aktiviteler tamamlanmalıdır';
$string['activityaggregation_any'] = 'Seçilen aktivitelerden HERHANGİ BİRİ tamamlanmalıdır';
$string['activitycompletion'] = 'Etkinlik tamamlama';
$string['activitycompletionupdated'] = 'Değişiklikler kaydedildi';
$string['affectedactivities'] = 'Değişiklikler şu  <b>{$a}</b> etkinlik ya da kaynağı etkileyecek;';
$string['aggregationmethod'] = 'Toplama yöntemi';
$string['all'] = 'Tüm';
$string['any'] = 'Herhangi';
$string['approval'] = 'Onay';
$string['badautocompletion'] = 'Otomatik tamamlamayı seçtiğinizde aşağıdan en az bir şartı etkinleştirmelisiniz';
$string['bulkactivitycompletion'] = 'Etkinlik tamamlamayı toptan düzenle';
$string['bulkactivitydetail'] = 'Toptan düzenlemek istediğiniz etkinlikleri seçin.';
$string['bulkcompletiontracking'] = 'Tamamlama izleme';
$string['bulkcompletiontracking_help'] = '<strong>Yok:</strong> Etkinlik tamamlamayı izleme

<strong>Elle:</strong> Öğrenciler etkinlikleri kendileri tamamlanmış olarak işaretleyebilir

<strong>Koşul(lar)la:</strong> Koşullar karşılandığında etkinliği tamamlanmış olarak göster';
$string['completed'] = 'Tamamlandı';
$string['completedunlocked'] = 'Tamamlama seçeneklerinin kilidi açıldı';
$string['completedunlockedtext'] = 'Değişiklikleri kaydettiğinizde tüm kullanıcılar için tamamlama durumu silinir. Fikrinizi değiştirdiyseniz formu kaydetmeyin.';
$string['completedwarning'] = 'Tamamlama seçenekleri kilitlendi';
$string['completedwarningtext'] = 'Bir ya da daha fazla kullanıcı ({$a}) bu etkinliği tamamlandı olarak işaretledi. Tamamlama seçeneklerini değiştirmek tamamlama durumunu sileceğinden  karışıklığa sebep olabilir. Seçenekler kilitlenmiştir ve kesin olarak gerekmedikçe seçeneklerin kilidini açmamanızı öneririz.';
$string['completion'] = 'Tamamlama izleme';
$string['completion-alt-auto-enabled'] = 'Sistem koşullara göre bu ögeyi tamamlanmış olarak işaretliyor';
$string['completion-alt-auto-fail'] = 'Tamamlandı: {$a} (geçer not almayı başaramadı)';
$string['completion-alt-auto-n'] = 'Tamamlanmadı: {$a}';
$string['completion-alt-auto-n-override'] = 'Tamamlanmadı: {$a->modname} ({$a->overrideuser} tarafından ayarlandı)';
$string['completion-alt-auto-pass'] = 'Tamamlandı: {$a} (geçer not almayı başardı)';
$string['completion-alt-auto-y'] = 'Tamamlandı: {$a}';
$string['completion-alt-auto-y-override'] = 'Tamamlandı: {$a->modname} ({$a->overrideuser} tarafından ayarlandı)';
$string['completion-alt-manual-enabled'] = 'Kullanıcılar bu ögeyi el ile tamamlandı olarak işaretleyebilir';
$string['completion-alt-manual-n'] = 'Tamamlanmadı: {$a}. Tamamlandı olarak işaretlemek için seçin';
$string['completion-alt-manual-n-override'] = 'Tamamlanmadı: {$a->modname} ({$a->overrideuser} tarafından ayarlandı). Tamamlandı olarak işaretlemek için seçin.';
$string['completion-alt-manual-y'] = 'Tamamlandı: {$a} Tamamlanmadı olarak işaretlemek için seçin';
$string['completion-alt-manual-y-override'] = 'Tamamlandı: {$a->modname} ({$a->overrideuser} tarafından ayarlandı). Tamamlanmadı olarak işaretlemek için seçin.';
$string['completion-fail'] = 'Tamamlandı (geçme notu alınamadı)';
$string['completion-n'] = 'Tamamlanmadı';
$string['completion-pass'] = 'Tamamlandı (geçme notunu kazandı)';
$string['completion-y'] = 'Tamamlandı';
$string['completion_automatic'] = 'Şartlar sağlanırsa etkinliği tamamlandı olarak göster';
$string['completion_help'] = 'Etkinleştirilirse, etkinliğin tamamlanması belirli koşullara dayalı olarak el ile veya otomatik olarak izlenir. İsterseniz çoklu koşullar ayarlanabilir. Eğer öyleyse, TÜM koşullar karşılandığında etkinlik yalnızca eksiksiz olarak değerlendirilecektir.

Kurs sayfasındaki etkinlik adının yanındaki bir işaret, etkinliğin ne zaman tamamlandığını gösterir.';
$string['completion_manual'] = 'Kullanıcılar, etkinliği elle tamamlandı olarak işaretleyebilir';
$string['completion_none'] = 'Etkinliğin tamamlandığını göstermiyor';
$string['completionactivitydefault'] = 'Varsayılan aktiviteyi kullan';
$string['completiondefault'] = 'Geçerli tamamlamayı izieği';
$string['completiondisabled'] = 'Geçersiz kılındı, etkinlik ayarlarında gösterilmez';
$string['completionduration'] = 'Kayıtlanma';
$string['completionenabled'] = 'Etkinleştirildi, tamamlama ve aktivite ayarları üzerinden kontrol';
$string['completionexpected'] = 'Bitirmesini bekle';
$string['completionexpected_help'] = 'Bu ayar etkinliğin bitmesi beklenen zamanı belirtir. Belirtilen zaman öğrencilere gösterilmez sadece etkinlik tamamlama raporunda görüntülenir.';
$string['completionexpecteddesc'] = 'Tamamlamanın beklendiği tarih {$a}';
$string['completionexpectedfor'] = '{$a->instancename} tamamlanmalı';
$string['completionicons'] = 'ilerleme simgeleri';
$string['completionicons_help'] = 'Etkinliğin ne zaman tamamlandığını belirtmek için bir etkinlik adının yanındaki işaret işareti kullanılabilir.

Noktalı kenarlı bir kutu gösterilirse, öğretmenin belirlediği koşullara göre aktiviteyi tamamladığınızda otomatik olarak bir işaret belirir.

Düz bir kenarlı bir kutu gösterilirse, etkinliği tamamladığınızı düşündüğünüzde kutuyu işaretlemek için kutuyu tıklayabilirsiniz. (Zihninizi değiştirirseniz tekrar tıklamak işareti kaldırır.) Kene isteğe bağlıdır ve yalnızca ilerleme rotanız üzerinden izlenebilmenin bir yoludur.';
$string['completionmenuitem'] = 'Tamamlama';
$string['completionnotenabled'] = 'Tamamlama etkin değil';
$string['completionnotenabledforcourse'] = 'Tamamlama bu kurs için etkin değil';
$string['completionnotenabledforsite'] = 'Tamamlama bu site için etkin değil';
$string['completionondate'] = 'Tarih';
$string['completionondatevalue'] = 'Kullanıcı kayıtlı kalma şartı şu tarihe kadar';
$string['completionsettingslocked'] = 'Tamamlama ayarları kilitli';
$string['completionupdated'] = '<b>{$a}</b> etkinliği için tamamlama güncellendi';
$string['completionusegrade'] = 'Not gerekir';
$string['completionusegrade_desc'] = 'Öğrenci bu aktiviteyi tamamlamak için bir not almalıdır';
$string['completionusegrade_help'] = 'Etkinleştirilirse, öğrenci derecesi aldığında etkinlik tamamlanmış sayılır. Etkinliğe geçiş notu ayarlandıysa geçiş ve başarısız simgeleri görüntülenebilir.';
$string['completionview'] = 'Görüntülemesi gerekir';
$string['completionview_desc'] = 'Öğrencinin bu aktiviteyi tamamlaması için görmesi gerekmektedir';
$string['configcompletiondefault'] = 'Yeni aktiviteler yaratırken tamamlama izleme için varsayılan ayar';
$string['configenablecompletion'] = 'Bu etkin kılındığında tamamlama izleme (ilerleme) özelliklerini ders düzeyinde açmanıza izin verir.';
$string['confirmselfcompletion'] = 'Kendi kendine tamamlamak için onayla';
$string['courseaggregation'] = 'Şart gereksinimi';
$string['courseaggregation_all'] = 'Seçilen tüm kursları tamamlanmalıdır';
$string['courseaggregation_any'] = 'Seçilen kurslardan HERHANGİ BİRİ tamamlanmalıdır';
$string['coursealreadycompleted'] = 'Bu dersi zaten tamamladınız';
$string['coursecomplete'] = 'Ders tamamlama';
$string['coursecompleted'] = 'Ders tamamlandı';
$string['coursecompletion'] = 'Kurs tamamlama';
$string['coursecompletioncondition'] = 'Koşul : {$a}';
$string['coursegrade'] = 'Ders notu';
$string['coursesavailable'] = 'Mevcut Dersler';
$string['coursesavailableexplaination'] = 'Not : Ders tamamlama şartları ders sayfasındaki liste altında görünecek şekilde ayarlanmalıdır.';
$string['criteria'] = 'Ölçüt';
$string['criteriagroup'] = 'Ölçüt Grubu';
$string['criteriarequiredall'] = 'Aşağıdaki ölçütlerin tümü gereklidir';
$string['criteriarequiredany'] = 'Aşağıdaki herhangi bir kriter gereklidir';
$string['csvdownload'] = 'Hesap tablosu (excel) formatında indir (UTF-8 .csv)';
$string['datepassed'] = 'Süre geçti';
$string['days'] = 'Gün';
$string['daysoftotal'] = '{$a->days} / {$a->total}';
$string['defaultcompletion'] = 'Varsayılan etkinlik tamamlama';
$string['defaultcompletionupdated'] = 'Değişiklikler kaydedildi';
$string['deletecompletiondata'] = 'Tamamlama verisini sil';
$string['dependencies'] = 'Bağımlılıklar';
$string['dependenciescompleted'] = 'Diğer derslerin tamamlanması';
$string['editcoursecompletionsettings'] = 'Ders tamamlama ayarlarını düzenle';
$string['enablecompletion'] = 'Tamamlama izlemeyi etkinleştir';
$string['enablecompletion_help'] = 'Etkinleştirilirse, etkinlik tamamlama koşulları etkinlik ayarlarında belirlenebilir ve / veya kursun tamamlanma koşulları ayarlanabilir.';
$string['enrolmentduration'] = 'Kaydolma süresi';
$string['enrolmentdurationlength'] = 'Kullanıcının kayıtlı kalma süresi';
$string['err_noactivities'] = 'Tamamlama bilgisi hiçbir etkinlik için etkin değildir, bu yüzden hiç bir şey gösterilmiyor. Etkinlik ayarlarını düzenleyerek tamamlama bilgisini etkinleştirebilirsiniz.';
$string['err_nocourses'] = 'Ders tamamlama diğer dersler için etkin değildir. Bu yüzden hiçbiri görüntülenemez. Ders tamamlamayı ders ayarlarından etkinleştirebilirsiniz.';
$string['err_nograde'] = 'Bu ders için geçme notu ayarlanmamış. Bu ölçütü aktif hale getirmek için bu kursa ait geçme notunu ayarlayın.';
$string['err_noroles'] = 'Bu derste moodle / course: markcomplete yeteneği ile herhangi bir rol yoktur.';
$string['err_nousers'] = 'Bu derste ya da grupta tamamlama bilgisinin görüntülendiği hiçbir kullanıcı yok. (Varsayılan olarak, tamamlama bilgisi yalnızca öğrenciler için görüntülenir, bu yüzden öğrenci olmayınca bu hatayı görürsünüz. Yöneticiler bu seçeneği yönetici ekranları üzerinden değiştirebilirler.)';
$string['err_settingslocked'] = 'Bir ya da daha çok öğrenci hali hazırda bir kriteri tamamladı. Bu yüzden ayarlar kilitlendi. Tamamlama kriteri ayarlarının kilidini açmak var olan kullanıcı verilerini siler ve karışıklığa neden olabilir.';
$string['err_system'] = 'Tamamlama sisteminde bir iç hata oluştu. (Sistem yöneticileri daha fazla ayrıntı görebilmek için hata ayıklama bilgisini etkinleştirebilir.)';
$string['eventcoursecompleted'] = 'Ders tamamlandı';
$string['eventcoursecompletionupdated'] = 'Kurs tamamlama yenilendi';
$string['eventcoursemodulecompletionupdated'] = 'Kurs modülü tamamlama yenilendi';
$string['eventdefaultcompletionupdated'] = 'Kurs etkinliği tamamlama varsayılan değerleri güncellendi';
$string['excelcsvdownload'] = 'Excel-uyumlu formatta indir (.csv)';
$string['fraction'] = 'Kesir';
$string['graderequired'] = 'Gerekli kurs notu';
$string['gradexrequired'] = '{$a} gerekli';
$string['hiddenrules'] = '<b>{$a}</b> için özel bazı ayarlar gizlendi. Görmek için diğer etkinlikler üzerindeki seçimi kaldırın';
$string['inprogress'] = 'Devam ediyor';
$string['manual'] = 'Elle';
$string['manualcompletionby'] = 'Diğerlerinin elle tamamlaması';
$string['manualcompletionbynote'] = 'Not: Bir rolü listede görünmesi için moodle / course: markcomplete yeteneğine izin verilmelidir.';
$string['manualselfcompletion'] = 'Kendi kendine elle tamamlama';
$string['manualselfcompletionnote'] = 'Not: Elle kendi kendine tamamlama etkinleştirilirse, kendi kendine tamamlama bloğu ders eklenmelidir.';
$string['markcomplete'] = 'Tamamlanmış olarak işaretle';
$string['markedcompleteby'] = '{$a} tarafından tamamlandı olarak işaretlendi';
$string['markingyourselfcomplete'] = 'Kendini tamamlamış olarak işaretle';
$string['modifybulkactions'] = 'Topluca düzenlemek istediğiniz eylemleri değiştirin';
$string['moredetails'] = 'Daha fazla ayrıntı';
$string['nocriteriaset'] = 'Bu ders için hiç bir tamamlama ölçütü ayarlanmamış';
$string['nogradeitem'] = '<b>{$a}</b> için not almayı gerektir koşulu devreye sokulamıyor çünkü etkinliğe not verilmiyor.';
$string['notcompleted'] = 'Tamamlanmadı';
$string['notenroled'] = 'Bu derse kayıtlı değilsiniz';
$string['nottracked'] = 'Bu kursta henüz tamamlamış olarak kaydedilmediniz';
$string['notyetstarted'] = 'Henüz başlamadı';
$string['overallaggregation'] = 'Tamamlama Gereklilikleri';
$string['overallaggregation_all'] = 'Ders tüm koşullar karşılandığında tamamlanır';
$string['overallaggregation_any'] = 'Ders koşullardan herhangi biri karşılandığında tamamlanır';
$string['pending'] = 'Bekliyor';
$string['periodpostenrolment'] = 'Kayıtlanma sonrası dönem';
$string['progress'] = 'Öğrenci ilerlemesi';
$string['progress-title'] = '{$a->user}, {$a->activity}: {$a->state} {$a->date}';
$string['progresstotal'] = 'İlerleme: {$a->complete} / {$a->total}';
$string['recognitionofpriorlearning'] = 'Önceki öğrenmenin tanınması';
$string['remainingenroledfortime'] = 'Kalan miktar belirli bir süre için kayıt yaptırdı';
$string['remainingenroleduntildate'] = 'Belli bir tarihe kadar kalan kayıtlar';
$string['reportpage'] = '{$a->total} kullanıcıdan {$a->from}-{$a->to} arası gösteriyor.';
$string['requiredcriteria'] = 'Gerekli Ölçüt';
$string['resetactivities'] = 'Seçili etkinlik ve kaynakların tamamını kaldır';
$string['restoringcompletiondata'] = 'Tamamlama verileri yazılıyor';
$string['roleaggregation'] = 'Şart gereksinimi';
$string['roleaggregation_all'] = 'Koşul seçildiğinde işaretlemek için TÜM seçilmiş roller';
$string['roleaggregation_any'] = 'Hükümet şartı yerine getirildiğinde işaretlenecek HERHANGİ BİR seçili rol';
$string['roleidnotfound'] = 'Rol Kimliği {$a} bulunamadı';
$string['saved'] = 'Kaydedildi';
$string['seedetails'] = 'Detaylara bakın';
$string['select'] = 'Seç';
$string['self'] = 'Kendi';
$string['selfcompletion'] = 'Kendi kendine tamamlama';
$string['showinguser'] = 'Gösterilen kullanıcı';
$string['unenrolingfromcourse'] = 'Dersten kayıt sildirme';
$string['unenrolment'] = 'Kayıt sildirme';
$string['unit'] = 'birim';
$string['unlockcompletion'] = 'Tamamlama seçeneklerinin kilidini aç';
$string['unlockcompletiondelete'] = 'Tamamlama seçeneklerini kaldırın ve kullanıcı tamamlama verilerini silin';
$string['updateactivities'] = 'Seçili etkinliklerin tamamlanma durumunu güncelle';
$string['usealternateselector'] = 'Alternatif ders seçiciyi kullanın';
$string['usernotenroled'] = 'Kullanıcı bu derse kayıtlı değil';
$string['viewcoursereport'] = 'Kurs raporunu görüntüle';
$string['viewingactivity'] = '{$a} görüntüleniyor';
$string['withconditions'] = 'Koşullarla';
$string['writingcompletiondata'] = 'Tamamlama verileri yazılıyor';
$string['xdays'] = '{$a} gün';
$string['yourprogress'] = 'İlerlemeniz';
