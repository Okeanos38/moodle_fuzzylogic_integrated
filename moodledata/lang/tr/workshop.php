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
 * Strings for component 'workshop', language 'tr', version '3.10'.
 *
 * @package     workshop
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregategrades'] = 'Notları yeniden hesapla';
$string['aggregation'] = 'Notları birleştirme';
$string['allocate'] = 'Gönderimleri ata';
$string['allocatedetails'] = 'beklenen: {$a->expected}<br />gonderilen: {$a->submitted}<br />atanan: {$a->allocate}';
$string['allocation'] = 'Gönderimleri atama';
$string['allocationconfigured'] = 'Atama işlemi yapılandırıldı';
$string['allocationdone'] = 'Atama tamamlandı';
$string['allocationerror'] = 'Atama hatası';
$string['allowedfiletypesforoverallfeedback'] = 'Geri bildirim için izin verilen dosya türleri';
$string['allowedfiletypesforoverallfeedback_help'] = 'Geri bildirim için izin verilen dosya türleri, virgülle ayrılmış dosya uzantı listesi (örneğin, \'mp4, mp3, png, jpg\') girilerek kısıtlanabilir. Alan boş bırakılırsa, tüm dosya türlerine izin verilir.';
$string['allowedfiletypesforsubmission'] = 'Gönderim ekine izin verilen dosya türleri';
$string['allowedfiletypesforsubmission_help'] = 'Gönderim ekine izin verilen dosya türleri, virgülle ayrılmış dosya uzantıları listesi (örneğin \'mp4, mp3, png, jpg\') girilerek kısıtlanabilir. Alan boş bırakılırsa, tüm dosya türlerine izin verilir.';
$string['allsubmissions'] = 'Bütün gönderimler ({$a})';
$string['alreadygraded'] = 'Önceden notlandırılmış';
$string['areaconclusion'] = 'Sonuç metni';
$string['areainstructauthors'] = 'Gönderim yönergesi';
$string['areainstructreviewers'] = 'Değerlendirme yönergesi';
$string['areaoverallfeedbackattachment'] = 'Genel geribildirim ekleri';
$string['areaoverallfeedbackcontent'] = 'Genel geribildirim metinleri';
$string['areasubmissionattachment'] = 'Gönderim ekleri';
$string['areasubmissioncontent'] = 'Gönderim metinleri';
$string['assess'] = 'Değerlendir';
$string['assessedexample'] = 'Değerlendirilmiş örnek gönderim';
$string['assessedsubmission'] = 'Değerlendirilmiş gönderim';
$string['assessingexample'] = 'Örnek gönderim değerlendirilmesi';
$string['assessingsubmission'] = 'Gönderim değerlendirmesi';
$string['assessment'] = 'Değerlendirme';
$string['assessmentby'] = '<a href="{$a->url}">{$a->name}</a> nın';
$string['assessmentbyfullname'] = '{$a} \'ın değerlendirmesi';
$string['assessmentbyyourself'] = 'Sizin değerlendirmeniz';
$string['assessmentdeleted'] = 'Paylaştırılmış değerlendirme';
$string['assessmentend'] = 'Değerlendirme bitiş tarihi';
$string['assessmentendbeforestart'] = 'Değerlendirme bitiş tarihi, değerlendirme başlangıç tarihinden önce olamaz';
$string['assessmentenddatetime'] = 'Değerlendirme için son teslim tarihi:{$a->daydatetime} ({$a->distanceday})';
$string['assessmentendevent'] = '{$a} (değerlendirme için son teslim tarihi)';
$string['assessmentform'] = 'Değerlendirme formu';
$string['assessmentofsubmission'] = '<a href="{$a->assessmenturl}">Değerlendirme</a> of <a href="{$a->submissionurl}">{$a->submissiontitle}</a>';
$string['assessmentreference'] = 'Örnek değerlendirme';
$string['assessmentreferenceconflict'] = 'Referans değerlendirmesi yaptığınız örnek gönderimin değerlendirilmesi mümkün değildir.';
$string['assessmentreferenceneeded'] = 'Referans değerlendirmesi için bu örnek gönderimi değerlendirmeniz gerekir. Gönderimi değerlendirmek için \'Devam et\' düğmesine tıklayın.';
$string['assessments'] = 'Değerlendirme';
$string['assessmentsettings'] = 'Değerlendirme ayarları';
$string['assessmentstart'] = 'Değerlendirme başlangıç tarihi';
$string['assessmentstartdatetime'] = 'Değerlendirme  {$a->daydatetime} ile ({$a->distanceday}) tarihleri arasındadır';
$string['assessmentstartevent'] = '{$a} değerlendirme için açıldı';
$string['assessmentweight'] = 'Değerlendirme ağırlığı';
$string['assignedassessments'] = 'Erişilen ve değerlendirilmiş gönderimler';
$string['assignedassessmentsnone'] = 'Değerlendirmeniz için atanmış herhangi bir başvurunuz yok';
$string['backtoeditform'] = 'Düzenleme formuna geri dön';
$string['byfullname'] = '<a href="{$a->url}">{$a->name}</a>\'nın';
$string['byfullnamewithoutlink'] = '{$a}\'nın';
$string['calculategradinggrades'] = 'Değerlendirme puanlarını hesapla';
$string['calculategradinggradesdetails'] = 'beklenen: {$a->expected}<br />hesaplanan: {$a->calculated}';
$string['calculatesubmissiongrades'] = 'Gönderim notlarını hesapla';
$string['calculatesubmissiongradesdetails'] = 'beklenen: {$a->expected}<br />hesaplanan: {$a->calculated}';
$string['chooseuser'] = 'Kullanıcı seç.....';
$string['clearaggregatedgrades'] = 'Birleştirilmiş notların tümünü temizle';
$string['clearaggregatedgrades_help'] = 'Gönderim notları ve değerlendirme notları sıfırlanacaktır. Değerlendirme aşamasında notları yeniden hesaplayabilirsiniz.';
$string['clearaggregatedgradesconfirm'] = 'Hesaplanan gönderim notlarını ve değerlendirme notlarını silmek istediğinizden emin misiniz?';
$string['clearassessments'] = 'Değerlendirmeleri sil';
$string['clearassessments_help'] = 'Gönderimler için hesaplanan notlar ve değerlendirme notları sıfırlanacaktır. Değerlendirme formlarının nasıl doldurulacağına ilişkin bilgi muhafaza edilecektir fakat notlandırıcılar değerlendirme formunu tekrar açmak ve verilen notların tekrar hesaplanması için yeniden kaydetmek zorunda kalacaklardır.';
$string['clearassessmentsconfirm'] = 'Tüm değerlendirme notlarını silmek istediğinizden emin misiniz?  Eğer silerseniz, şu anda sahip olduğunuz bilgilere yeniden tek başınıza erişmeniz mümkün olmayacaktır. Notlandırıcılar gönderimleri yeniden notlandırmak zorunda kalacaklardır.';
$string['conclusion'] = 'Sonuç';
$string['conclusion_help'] = 'Sonuç metni etkinliğin sonunda katılımcılara gösterilir.';
$string['configexamplesmode'] = 'Çalıştayda varsayılan örnekleme modu değerlendirmesi';
$string['configgrade'] = 'Çalıştay gönderimleri için varsayılan en yüksek not';
$string['configgradedecimals'] = 'Notları görüntülerken ondalık noktadan sonra gösterilmesi gereken varsayılan basamak sayısı.';
$string['configgradinggrade'] = 'Çalıştay değerlendirmeleri için varsayılan en yüksek not';
$string['configmaxbytes'] = 'Sitedeki tüm çalıştaylar için varsayılan maksimum gönderim dosyası boyutu (ders limitlerine ve diğer yerel ayarlara bağlı olarak)';
$string['configstrategy'] = 'Çalıştay etkinlikleri için varsayılan puanlama stratejisi';
$string['createsubmission'] = 'Gönderiminizi hazırlamaya başlayın';
$string['daysago'] = '{$a} gün önce';
$string['daysleft'] = '{$a} gün kaldı';
$string['daystoday'] = 'bugün';
$string['daystomorrow'] = 'yarın';
$string['daysyesterday'] = 'dün';
$string['deadlinesignored'] = 'Zaman kısıtlamaları sizin için geçerli değildir';
$string['deletesubmission'] = 'Gönderimi sil';
$string['editassessmentform'] = 'Değerlendirme formunu düzenle';
$string['editassessmentformstrategy'] = 'Değerlendirme formu ({$a})\'yı düzenle';
$string['editingassessmentform'] = 'Değerlendirme formunu düzenleme';
$string['editingsubmission'] = 'Gönderimi düzenleme';
$string['editsubmission'] = 'Gönderimi düzenle';
$string['err_multiplesubmissions'] = 'Bu formu düzenlerken gönderimin başka bir sürümü kaydedildi. Kullanıcı başına birden çok gönderime izin verilmez.';
$string['err_removegrademappings'] = 'Kullanılmayan not eşlemeleri kaldırılamıyor';
$string['evaluategradeswait'] = 'Lütfen değerlendirmelerin notlandırılmasına ve toplam puanların  hesaplanmasına kadar bekleyin';
$string['evaluation'] = 'Değerlendirmenin notlandırılması';
$string['evaluationmethod'] = 'Değerlendirme yönteminin notlandırılması';
$string['evaluationmethod_help'] = 'Değerlendirilmenin notlandırılması yöntemi değerlendirme notunun nasıl hesaplanacağını belirler. Sonuçtan memnun olmadığınız durumlarda notların farklı ayarlarla yeniden hesaplanmasını sağlayabilirsiniz.';
$string['evaluationsettings'] = 'Değerlendirmenin notlandırılması ayarları';
$string['eventassessableuploaded'] = 'Bir gönderim yüklendi';
$string['eventassessmentevaluated'] = 'Değerlendirme notlandırıldı';
$string['eventassessmentevaluationsreset'] = 'Değerlendirme notlandırmaları sıfırlandı';
$string['eventassessmentreevaluated'] = 'Değerlendirme yeniden notlandırıldı';
$string['eventphaseswitched'] = 'Aşama değiştirildi';
$string['eventsubmissionassessed'] = 'Gönderim değerlendirildi';
$string['eventsubmissionassessmentsreset'] = 'Gönderim değerlendirmeleri silindi';
$string['eventsubmissioncreated'] = 'Gönderim oluşturuldu';
$string['eventsubmissiondeleted'] = 'Gönderim silindi';
$string['eventsubmissionreassessed'] = 'Gönderim yeniden değerlendirildi';
$string['eventsubmissionupdated'] = 'Gönderim güncellendi';
$string['eventsubmissionviewed'] = 'Genderim görüntülendi';
$string['example'] = 'Örnek gönderim';
$string['exampleadd'] = 'Örnek gönderim ekle';
$string['exampleassess'] = 'Örnek gönderimi değerlendir';
$string['exampleassessments'] = 'Değerlendirilecek örnek gönderimler';
$string['exampleassesstask'] = 'Değerlendirme örnekleri';
$string['exampleassesstaskdetails'] = 'beklenen: {$a->expected}<br />assessed: {$a->assessed}';
$string['examplecomparing'] = 'Örnek gönderim değerlendirmelerinin karşılaştırılması';
$string['exampledelete'] = 'Örneği sil';
$string['exampledeleteconfirm'] = 'Aşağıdaki örnek gönderimi silmek istediğinizden emin misiniz? Gönderimi silmek için \'Devam et\' düğmesine tıklayın.';
$string['exampleedit'] = 'Örneği düzenle';
$string['exampleediting'] = 'Örneği düzenleme';
$string['exampleneedassessed'] = 'Önce tüm örnek gönderimleri değerlendirmeniz gerekir.';
$string['exampleneedsubmission'] = 'Çalışmanızı göndermek ve tüm örnek sunuları önce değerlendirmek zorundasınız.';
$string['examplesbeforeassessment'] = 'Örnekler, Kendi gönderim ve akran değerlendirmesinden önce değerlendirilmesi gerekir';
$string['examplesbeforesubmission'] = 'Örnekler kendi gönderimlerinden önce değerlendirilmesi gerekir';
$string['examplesmode'] = 'Örnek değerlendirme modeli';
$string['examplesubmissions'] = 'Örnek gönderimler';
$string['examplesvoluntary'] = 'Örnek gönderimin değerlendirilmesi istemlidir';
$string['exportsubmission'] = 'Bu sayfayı dışa aktar';
$string['feedbackauthor'] = 'Yazar için geri bildirim';
$string['feedbackauthorattachment'] = 'Ek dosya';
$string['feedbackby'] = '{$a} tarafından geri bildirim';
$string['feedbackreviewer'] = 'incelemeci için geri bildirim';
$string['feedbacksettings'] = 'Geribildirim';
$string['formataggregatedgrade'] = '{$a->grade}';
$string['formataggregatedgradeover'] = '<del>{$a->grade}</del><br /><ins>{$a->over}</ins>';
$string['formatpeergrade'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span>';
$string['formatpeergradeover'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span>';
$string['formatpeergradeoverweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">(<del>{$a->gradinggrade}</del> / <ins>{$a->gradinggradeover}</ins>)</span> @ <span class="weight">{$a->weight}</span>';
$string['formatpeergradeweighted'] = '<span class="grade">{$a->grade}</span> <span class="gradinggrade">({$a->gradinggrade})</span> @ <span class="weight">{$a->weight}</span>';
$string['givengrades'] = 'Verilen notlar';
$string['gradecalculated'] = 'Gönderim için hesaplanan not';
$string['gradedecimals'] = 'Notların ondalık basamakları';
$string['gradegivento'] = '&gt;';
$string['gradeinfo'] = 'Not: {$a->received} / {$a->max}';
$string['gradeitemassessment'] = '{$a->workshopname} (değerlendirme)';
$string['gradeitemsubmission'] = '{$a->workshopname} (gönderim)';
$string['gradeover'] = 'Gönderim için notu iptal et';
$string['gradereceivedfrom'] = '&lt;';
$string['gradesreport'] = 'Çalıştay notları raporu';
$string['gradetopassgrading'] = 'Geçmek için değerlendirme notu';
$string['gradetopasssubmission'] = 'Geçmek için gönderim notu';
$string['gradinggrade'] = 'Notlandırmayı  değerlendirme';
$string['gradinggrade_help'] = 'Bu ayar, başvuru değerlendirmesi için elde edilebilecek maksimum notu belirtir.';
$string['gradinggradecalculated'] = 'Değerlendirme için hesaplanan not';
$string['gradinggradeof'] = 'Değerlendirme için  ({$a}) notu';
$string['gradinggradeover'] = 'Değerlendirme için notu iptal et';
$string['gradingsettings'] = 'Başarı notu ayarları';
$string['groupnoallowed'] = 'Bu çalıştayda herhangi bir gruba erişmenize izin verilmiyor';
$string['iamsure'] = 'Evet, eminim';
$string['info'] = 'Bilgi';
$string['instructauthors'] = 'Gönderim talimatları';
$string['instructreviewers'] = 'Değerlendirme yönergeleri';
$string['introduction'] = 'Açıklama';
$string['latesubmissions'] = 'Geç kalan gönderiler';
$string['latesubmissions_desc'] = 'Son gönderimden sonra gönderilere izin ver';
$string['latesubmissions_help'] = 'Etkinleştirilirse, bir yazar tekliflerini son teslim tarihinden sonra veya değerlendirme aşamasında sunabilir. Geç gönderimler yine de düzenlenemez.';
$string['latesubmissionsallowed'] = 'Geç gönderimlere izin verilir';
$string['maxbytes'] = 'Maksimum gönderim eki boyutu';
$string['modulename'] = 'Çalıştay';
$string['modulename_help'] = 'Çalıştay etkinlik modülü öğrencilerin çalışmalarının toplanmasını, gözden geçirilmesini ve akran değerlendirmesini sağlar.

Öğrenciler, kelime işlemeli belgeler veya elektronik tablolar gibi herhangi bir dijital içeriği (dosyaları) gönderebilir ve metin düzenleyiciyi kullanarak bir alana doğrudan metin yazabilir.

Gönderimler, öğretmen tarafından tanımlanan çok ölçütlü bir değerlendirme formu kullanılarak değerlendirilir. Akran değerlendirmesi ve değerlendirme formunu anlama süreci, bir referans değerlendirmesi ile birlikte öğretmen tarafından verilen örnek gönderimlerle önceden uygulanabilir. Öğrencilere akranlarının gönderimlerinden bir veya daha fazlasını değerlendirme fırsatı verilir. Gerekirse, gönderimler ve yorumcular anonim olabilir.

Öğrenciler bir çalıştay etkinliğinde iki not elde eder - gönderimleri için bir not ve akranlarının gönderimlerini değerlendirmeleri için bir not. Her iki not da not defterine kaydedilir.';
$string['modulenameplural'] = 'Çalıştaylar';
$string['mysubmission'] = 'Gönderimim';
$string['nattachments'] = 'Maksimum gönderim ekinin sayısı';
$string['noexamples'] = 'Bu çalıştayda henüz bir örnek yok';
$string['noexamplesformready'] = 'Örnek gönderimler yapmadan önce değerlendirme formunu tanımlamalısınız.';
$string['nogradeyet'] = 'Henüz bir not yok';
$string['nosubmissionfound'] = 'Bu kullanıcı için bir gönderim bulunamadı';
$string['nosubmissions'] = 'Bu çalıştayda henüz bir gönderim yok';
$string['notassessed'] = 'Henüz değerlendirilmedi';
$string['nothingfound'] = 'Görüntülenecek hiçbir şey yok';
$string['nothingtoreview'] = 'İncelenecek bir şey yok';
$string['notoverridden'] = 'Geçersiz kılınmadı';
$string['noworkshops'] = 'Bu derste çalıştay bulunmamaktadır.';
$string['noyoursubmission'] = 'İşinizi henüz göndermediniz';
$string['nullgrade'] = '-';
$string['overallfeedback'] = 'Genel geribildirim';
$string['overallfeedbackfiles'] = 'Toplam geri bildirim ekinin maksimum sayısı';
$string['overallfeedbackmaxbytes'] = 'Maksimum genel geribildirim ek boyutu';
$string['overallfeedbackmode'] = 'Genel geri bildirim modu';
$string['overallfeedbackmode_0'] = 'Devre dışı bırakıldı';
$string['overallfeedbackmode_1'] = 'Etkin ve isteğe bağlı';
$string['overallfeedbackmode_2'] = 'Etkin ve gerekli';
$string['overallfeedbackmode_help'] = 'Etkinleştirilirse, değerlendirme formu alt kısmında bir metin alanı görüntülenir. İncelemeler, sunuşun genel değerlendirmesini oraya koyabilir veya değerlendirmelerine ilişkin ilave açıklama sağlayabilir.';
$string['page-mod-workshop-x'] = 'Herhangi bir çalıştay modülü sayfası';
$string['participant'] = 'Katılımcı';
$string['participantrevierof'] = 'Katılımcının gözden geçirmesi';
$string['participantreviewedby'] = 'Katılımcı tarafından tarafından incelenmiştir.';
$string['phaseassessment'] = 'Değerlendirme aşaması';
$string['phaseclosed'] = 'Kapandı';
$string['phaseevaluation'] = 'Değerlendirme derecelendirme aşaması';
$string['phasesetup'] = 'Kurulum aşaması';
$string['phasesoverlap'] = 'Gönderim aşaması ve değerlendirme aşaması çakışamaz';
$string['phasesubmission'] = 'Gönderim aşaması';
$string['pluginadministration'] = 'Çalıştay yönetimi';
$string['pluginname'] = 'Çalıştay';
$string['prepareexamples'] = 'Örnek gönderimleri hazırla';
$string['previewassessmentform'] = 'Önizleme';
$string['privacy:metadata:submissiontitle'] = 'Gönderinin başlığı';
$string['publishedsubmissions'] = 'Yayınlanan gönderimler';
$string['publishsubmission'] = 'Yayınlanan gönderim';
$string['publishsubmission_help'] = 'Yayınlanan gönderimler, çalıştay kapatıldığında diğerleri tarafından kullanılabilir.';
$string['reassess'] = 'Yeniden değerlendir';
$string['receivedgrades'] = 'Alınan notlar';
$string['recentassessments'] = 'Çalıştay değerlendirmeleri:';
$string['recentsubmissions'] = 'Çalıştay gönderimleri:';
$string['resetassessments'] = 'Tüm gönderileri sil';
$string['resetassessments_help'] = 'Gönderimleri etkilemeden sadece paylaştırılan değerlendirmeleri silmeyi seçebilirsiniz. Gönderimler silinirse, değerlendirmeleri dolaylı olarak silinir ve bu seçenek dikkate alınmaz. Bunun örnek gönderimlerin değerlendirmelerini de içerdiğini unutmayın.';
$string['resetphase'] = 'Kurulum aşamasına geç';
$string['resetphase_help'] = 'Etkinleştirilirse, tüm çalıştaylar ilk kurulum aşamasına geçirilir.';
$string['resetsubmissions'] = 'Tüm gönderimleri sil';
$string['resetsubmissions_help'] = 'Tüm gönderimler ve değerlendirmeleri silinecek. Bu, örnek gönderimleri etkilemez.';
$string['saveandclose'] = 'Kaydet ve kapat';
$string['saveandcontinue'] = 'Kaydet ve düzenlemeye devam et';
$string['saveandpreview'] = 'Kaydet ve önizleme yap';
$string['saveandshownext'] = 'Kaydet ve sonrakini göster';
$string['search:activity'] = 'Çalıştay - etkinlik bilgileri';
$string['selfassessmentdisabled'] = 'Öz değerlendirme devre dışı';
$string['showingperpage'] = 'Sayfada {$a} öğe gösteriliyor';
$string['showingperpagechange'] = 'Değiştir ...';
$string['someuserswosubmission'] = 'Henüz işlerini göndermeyen en az bir yazar var';
$string['sortasc'] = 'Artan sıralama';
$string['sortdesc'] = 'Azalan sıralama';
$string['strategy'] = 'Not verme stratejisi';
$string['strategy_help'] = 'Not verme stratejisi, kullanılan değerlendirme formunu ve gönderimlere not vermenin yöntemini belirler. 4 seçenek var:

* Genel Ortalama - Belirtilen yönler hakkında yorumlar ve not verilir
* Yorumlama - Belirtilen yönler hakkında yorumlar yapılır ancak not verilemez
* Hata sayısı - Belirtilen iddialarla ilgili yorumlar ve evet/hayır değerlendirmesi yapılmaktadır.
* Ölçek - Belirtilen kriterlere ilişkin seviye değerlendirmesi yapılır';
$string['strategyhaschanged'] = 'çalıştay not verme stratejisi, form düzenleme için açıldığından beri değişti.';
$string['submission'] = 'Gönderim';
$string['submissionattachment'] = 'Ek dosya';
$string['submissionby'] = '{$a} tarafından gönderim';
$string['submissioncontent'] = 'Gönderim içeriği';
$string['submissiondeleteconfirm'] = 'Aşağıdaki gönderimi silmek istediğinizden emin misiniz?';
$string['submissiondeleteconfirmassess'] = 'Aşağıdaki gönderimi silmek istediğinizden emin misiniz? Ayrıca, bu gönderimle ilişkili {$a->count} değerlendirmeleri de silecektir ve bu da gözden geçirenlerin notlarını etkileyebilir.';
$string['submissionend'] = 'Gönderim son teslim tarihi';
$string['submissionendbeforestart'] = 'Gönderimler için son tarih, açık başvuru tarihinden önce belirtilemez';
$string['submissionenddatetime'] = 'Son başvuru tarihi: {$a->daydatetime} ({$a->distanceday})';
$string['submissionendevent'] = '{$a} (gönderimlerin son teslim tarihi)';
$string['submissionendswitch'] = 'Son teslim tarihinden sonra bir sonraki aşamaya geçin.';
$string['submissionendswitch_help'] = 'Son gönderim tarihini belirlediyseniz ve bu kutuyu işaretlerseniz, Çalıştay gönderimleri son gönderim tarihini takiben otomatik olarak değerlendirme aşamasına geçecektir.

Bu özelliği etkinleştirirseniz, zamanlanmış ayırma yöntemini de ayarlamanız önerilir. Gönderimler tahsis edilmezse, atölyenin kendisi değerlendirme aşamasında olsalar bile herhangi bir değerlendirme yapılamaz.';
$string['submissiongrade'] = 'Gönderim için not';
$string['submissiongrade_help'] = 'Bu ayar, gönderilen iş için elde edilebilecek maksimum notu belirtir.';
$string['submissiongradeof'] = 'Gönderim için not ({$a} \'nın)';
$string['submissionlastmodified'] = 'Son düzenleme';
$string['submissionrequiredcontent'] = 'Bir miktar metin girmeniz veya dosya eklemeniz gerekiyor';
$string['submissionrequiredfile'] = 'Bir dosya eklemeniz ve bir miktar metin girmeniz gerekiyor';
$string['submissionsettings'] = 'Gönderim ayarları';
$string['submissionsreport'] = 'Çalıştay başvuruları raporu';
$string['submissionstart'] = 'Gönderimlerin başlangıcı';
$string['submissionstartdatetime'] = 'Gönderim Başlangıcı {$a->daydatetime} ({$a->distanceday})';
$string['submissionstartevent'] = '{$a} (gönderimler için açılır)';
$string['submissiontitle'] = 'Başlık';
$string['submittednotsubmitted'] = 'Gönderildi ({$a->submitted}) / gönderilmedi ({$a->notsubmitted})';
$string['subplugintype_workshopallocation'] = 'Gönderim paylaştırma yöntemi';
$string['subplugintype_workshopallocation_plural'] = 'Gönderim paylaştırma yöntemleri';
$string['subplugintype_workshopeval'] = 'Not verme ölçümlendirme yöntemi';
$string['subplugintype_workshopeval_plural'] = 'Not verme ölçümlendirme yöntemleri';
$string['subplugintype_workshopform'] = 'Not verme stratejisi';
$string['subplugintype_workshopform_plural'] = 'Puanlama stratejileri';
$string['switchingphase'] = 'Değişim aşaması';
$string['switchphase'] = 'Değişim aşaması';
$string['switchphase10'] = 'Kurulum aşamasına geç';
$string['switchphase10info'] = 'Çalıştayı <strong> Kurulum aşamasına </ strong> geçirmek üzeresiniz. Bu aşamada, kullanıcılar gönderimlerinde veya değerlendirmelerinde değişiklik yapamazlar. Öğretmenler, bu aşamayı çalıştay ayarlarını değiştirmek, puanlama stratejisini değiştirmek veya değerlendirme formlarını değiştirmek için kullanabilirler.';
$string['switchphase20'] = 'Gönderim aşamasına geç';
$string['switchphase20info'] = 'Çalıştay <strong> Gönderi Aşamasına </ strong> geçirmek üzeresiniz. Öğrenciler, bu aşamada çalışmalarını gönderebilirler (belirlenirse, gönderim erişim kontrol tarihleri dahilinde). Öğretmenler, akran değerlendirmesi için başvuruları tahsis edebilir.';
$string['switchphase30'] = 'Notlandırma aşamasına geç';
$string['switchphase30auto'] = 'Çalıştay, daha sonra değerlendirme aşamasına otomatik olarak geçecektir.';
$string['switchphase30info'] = 'Çalıştay <strong> Değerlendirme aşamasına </ strong> geçirmek üzeresiniz. Bu aşamada, gözden geçirenler tahsis ettikleri bildirimleri değerlendirebilir (eğer varsa, değerlendirme erişim kontrol tarihleri dahilinde).';
$string['switchphase40'] = 'Değerlendirme aşamasına geç';
$string['switchphase40info'] = 'Çalıştay <strong> Derecelendirme değerlendirme aşamasına </ strong> geçirmek üzeresiniz. Bu aşamada, kullanıcılar gönderimlerinde veya değerlendirmelerinde değişiklik yapamazlar. Öğretmenler not vermeyi değerlendirme araçlarını kullanarak final notlarını hesaplayabilir ve gözden geçirenlere geribildirim sağlayabilir.';
$string['switchphase50'] = 'Çalıştayı bitir';
$string['switchphase50info'] = 'Çalıştayı kapatmak üzeresin. Bu, not defterinde hesaplanan notların görünmesine neden olacaktır. Öğrenciler, gönderimlerini ve gönderim değerlendirmelerini görebilir';
$string['switchphaseauto'] = 'Aşama planlandı';
$string['switchphasenext'] = 'Bir sonraki aşamaya geç';
$string['taskassesspeers'] = 'Akranları değerlendir';
$string['taskassesspeersdetails'] = 'toplam: {$a->total}<br />beklemede: {$a->todo}';
$string['taskassessself'] = 'Kendinizi değerlendirin';
$string['taskconclusion'] = 'Etkinliğin sonucunu sağlayın';
$string['taskdone'] = 'Görev bitti';
$string['taskfail'] = 'Görev başarısız';
$string['taskinfo'] = 'Görev bilgisi';
$string['taskinstructauthors'] = 'Gönderimler için yönergeleri belirleyin';
$string['taskinstructreviewers'] = 'Değerlendirme için yönergelerinizi belirleyin';
$string['taskintro'] = 'Çalıştay açıklamasını ayarlayın';
$string['tasksubmit'] = 'Çalışmanızı gönderin';
$string['tasktodo'] = 'Yapılması gereken görev';
$string['toolbox'] = 'Çalıştay araç kutusu';
$string['undersetup'] = 'Çalıştay şu anda kuruluyor. Lütfen bir sonraki aşamaya geçene kadar bekleyin.';
$string['useexamples'] = 'Örnekleri kullan';
$string['useexamples_desc'] = 'Örnek gönderimleri, değerlendirmede uygulama için sağlanmıştır.';
$string['useexamples_help'] = 'Etkinleştirilirse, kullanıcılar bir veya daha fazla örnek gönderimi değerlendirmeyi deneyebilir ve değerlendirmelerini bir referans değerlendirmesi ile karşılaştırabilirler. Not, değerlendirme notundan sayılmaz.';
$string['usepeerassessment'] = 'Akran değerlendirmesi kullanın';
$string['usepeerassessment_desc'] = 'Öğrenciler başkalarının çalışmalarını değerlendirebilir';
$string['usepeerassessment_help'] = 'Etkinleştirilirse, bir kullanıcı değerlendirme yapmak için diğer kullanıcılardan gönderimler tahsis edilebilir ve değerlendirme için bir not alacak ve kendi sunacakları notu alacaktır.';
$string['userdatecreated'] = '<span>{$a}</span> gönderildi';
$string['userdatemodified'] = '<span>{$a}</span> değiştirildi';
$string['userplan'] = 'Çalıştay plancısı';
$string['userplan_help'] = 'Çalıştay planlayıcısı, etkinliğin tüm aşamalarını görüntüler ve her aşama için görevleri listeler. Geçerli aşama vurgulanır ve görev tamamlama işareti bir işaret ile gösterilir.';
$string['userplanaccessibilityskip'] = 'Geçerli görevlere atla';
$string['userplanaccessibilitytitle'] = '{$a} çalıştay zaman çizelgesi aşaması';
$string['userplancurrentphase'] = 'Geçerli aşama';
$string['useselfassessment'] = 'Öz değerlendirme kullanın';
$string['useselfassessment_desc'] = 'Öğrenciler kendi çalışmalarını değerlendirebilir';
$string['useselfassessment_help'] = 'Etkinleştirilirse, bir kullanıcı değerlendirmek için kendi gönderimler tahsis edilebilir ve değerlendirme için bir not alacak ve sonuçların gönderimi için bir not alacaktır.';
$string['viewworkshopsummary'] = 'Çalıştay Özetini Görüntüle';
$string['weightinfo'] = 'Ağırlık :{$a}';
$string['withoutsubmission'] = 'Onaylayan, kendi gönderimi olmaksızın';
$string['workshop:addinstance'] = 'Yeni çalıştay ekle';
$string['workshop:allocate'] = 'Gönderimi İncelemecilere ata';
$string['workshop:deletesubmissions'] = 'Gönderimleri sil';
$string['workshop:editdimensions'] = 'Değerlendirme formlarını düzenleme';
$string['workshop:exportsubmissions'] = 'Gönderimleri dışa aktar';
$string['workshop:ignoredeadlines'] = 'Zaman kısıtlamalarını yoksay';
$string['workshop:manageexamples'] = 'Örnek gönderileri yönetin';
$string['workshop:overridegrades'] = 'Hesaplanan notları geçersiz kıl';
$string['workshop:peerassess'] = 'Bilirkişi değerlendirmesi';
$string['workshop:publishsubmissions'] = 'Gönderimleri yayınla';
$string['workshop:submit'] = 'Gönder';
$string['workshop:switchphase'] = 'anahtar aşaması';
$string['workshop:view'] = 'Çalıştay görüntüle';
$string['workshop:viewallassessments'] = 'Tüm değerlendirmeleri görüntüle';
$string['workshop:viewallsubmissions'] = 'Tüm göderimleri görüntüle';
$string['workshop:viewauthornames'] = 'Yazar isimlerini görüntüle';
$string['workshop:viewauthorpublished'] = 'Yayınlanan gönderimlerin yazarlarını görüntüle';
$string['workshop:viewpublishedsubmissions'] = 'Yayınlanan gönderimleri görüntüle';
$string['workshop:viewreviewernames'] = 'İncelemeci isimlerini görüntüle';
$string['workshopname'] = 'Çalıştay adı';
$string['yourassessmentfor'] = '{$a} için değerlendirmeniz';
$string['yourgrades'] = 'Sizin Notunuz';
$string['yoursubmission'] = 'Gönderimleriniz';
