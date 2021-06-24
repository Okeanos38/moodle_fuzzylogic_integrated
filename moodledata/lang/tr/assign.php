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
 * Strings for component 'assign', language 'tr', version '3.10'.
 *
 * @package     assign
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'İlgilenmeniz gereken ödev(ler)iniz var';
$string['addattempt'] = 'Yeniden denemeye izin ver';
$string['addnewattempt'] = 'Yeni bir deneme ekle';
$string['addnewattempt_help'] = 'Bu, üzerinde çalışabileceğiniz boş bir gönderim oluşturacaktır.';
$string['addnewattemptfromprevious'] = 'Önceki gönderim üzerinden yeni bir denemeye izin ver';
$string['addnewattemptfromprevious_help'] = 'Bu, önceki gönderiminizin içeriğini üzerinde çalışmanız için yeni bir başvuruya kopyalar.';
$string['addnewgroupoverride'] = 'Grup geçersiz kılma ekle';
$string['addnewuseroverride'] = 'Kullanıcı geçersiz kılma ekle';
$string['addsubmission'] = 'Gönderim ekle';
$string['addsubmission_help'] = 'Henüz bir gönderimde bulunmadınız.';
$string['allocatedmarker'] = 'Ayrılmış İşaretçi';
$string['allocatedmarker_help'] = 'İşaretçi bu gönderime atandı.';
$string['allowsubmissions'] = 'Kullanıcıların bu ödev için gönderim yapmaya devam edebilmesine izin ver.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Ödev ayrıntıları ve başvuru formu <strong>{$a}</strong> adresinde ulaşılabilir olacak.';
$string['allowsubmissionsfromdate'] = 'Başvuru izni başlangıcı';
$string['allowsubmissionsfromdate_help'] = 'Eğer etkinse öğrenciler bu tarihten önce başvuramayacak. Eğer etkin değilse öğrenciler hemen başvurduktan sonra başlayabilecek.';
$string['allowsubmissionsfromdatesummary'] = 'Ödev başvuruları <strong>{$a}</strong> adresinden kabul edilecek.';
$string['allowsubmissionsshort'] = 'Gönderim değişikliklerine izin ver';
$string['alwaysshowdescription'] = 'Her zaman tanım göster';
$string['alwaysshowdescription_help'] = 'Devre dışı bırakılırsa, yukarıdaki ödev açıklaması yalnızca "Şu tarihten itibaren gönderimlere izin ver" tarihinde öğrenciler tarafından görülebilir.';
$string['applytoteam'] = 'Notları onayla ve tüm gruba geri bildirimde bulun';
$string['assign:addinstance'] = 'Yeni ödev ekle';
$string['assign:editothersubmission'] = 'Başka bir öğrencinin gönderimini düzenle';
$string['assign:exportownsubmission'] = 'Kendi gönderimlerini dışa aktar';
$string['assign:grade'] = 'Ödevi notlandır';
$string['assign:grantextension'] = 'Ek süre tanı';
$string['assign:manageallocations'] = 'Başvurulara ayrılmış işaretçileri düzenle';
$string['assign:managegrades'] = 'Notları incele ve yayımla';
$string['assign:manageoverrides'] = 'Ödev geçersiz kılmalarını yönet';
$string['assign:receivegradernotifications'] = 'Grader gönderme bildirimlerini al';
$string['assign:releasegrades'] = 'Notları dağıt';
$string['assign:revealidentities'] = 'Öğrenci kimliklerini açığa çıkar';
$string['assign:reviewgrades'] = 'Notları gözden geçir';
$string['assign:showhiddengrader'] = 'Gizli bir noterin kimliğini görün';
$string['assign:submit'] = 'Ödevi gönder';
$string['assign:view'] = 'Ödeve bak';
$string['assign:viewblinddetails'] = 'Gizli işaretleme etkinleştirildiğinde öğrenci kimliklerini görüntüleyin';
$string['assign:viewgrades'] = 'Notlara bak';
$string['assignfeedback'] = 'Geri bildirim eklentisi';
$string['assignfeedbackpluginname'] = 'Geri bildirim eklentisi';
$string['assignmentisdue'] = 'Ödevin teslim süresi dolmuş';
$string['assignmentmail'] = '{$a->grader} sizinle ilgili bazı geri bildirimler yayınladı.
\'{$a->assignment}\' için ödev gönderimi

Ödev gönderiminize eklendiğini görebilirsiniz:

     {$a->url}';
$string['assignmentmailhtml'] = '<p> {$a->grader} sizinle ilgili bazı geri bildirimler yayınladı.
<i> {$a->assignment} </ i> \'için ödev gönderimi. </ p>
<p> <a href="{$a->url} "> atama başvurunuza eklendiğini görebilirsiniz. </ p>';
$string['assignmentmailsmall'] = '{$a->grader} sizinle ilgili bazı geri bildirimler yayınladı.
\'{$a->assignment}\' için ödev gönderimi Gönderinize eklendiğini görebilirsiniz';
$string['assignmentname'] = 'Ödev adı';
$string['assignmentplugins'] = 'Atama eklentileri';
$string['assignmentsperpage'] = 'Sayfa başı ödev sayısı';
$string['assignsubmission'] = 'Gönderim eklentisi';
$string['assignsubmissionpluginname'] = 'Gönderim eklentisi';
$string['attemptheading'] = 'Deneme {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Önceki denemeler';
$string['attemptnumber'] = 'Deneme numarası';
$string['attemptreopenmethod'] = 'Denemeler tekrar açıldı';
$string['attemptreopenmethod_help'] = 'Öğrenci gönderme denemelerinin nasıl yeniden açılacağını belirler. Mevcut seçenekler şunlardır:

* Asla - Gönderim yeniden açılamaz.
* Manuel - Gönderi bir öğretmen tarafından yeniden açılabilir.
* Başarılı oluncaya kadar otomatik olarak - Öğrenci bu ödev için not defterinde belirlenen notu geçene kadar gönderim otomatik olarak yeniden açılır.';
$string['attemptreopenmethod_manual'] = 'El ile';
$string['attemptreopenmethod_none'] = 'Asla';
$string['attemptreopenmethod_untilpass'] = 'Geçene kadar otomatik';
$string['attemptsettings'] = 'Deneme ayarları';
$string['availability'] = 'Uygunluk';
$string['backtoassignment'] = 'Ödeve dön';
$string['batchoperationconfirmaddattempt'] = 'Seçilen gönderim için yeni deneme yapılabilsin mi ?';
$string['batchoperationconfirmdownloadselected'] = 'Seçilen gönderimler indirilsin mi?';
$string['batchoperationconfirmgrantextension'] = 'Seçilmiş tüm gönderimler için ek süre tanınsın mı ?';
$string['batchoperationconfirmlock'] = 'Tüm seçilmiş gönderimler kilitlensin mi?';
$string['batchoperationconfirmremovesubmission'] = 'Seçilen gönderimler kaldırılsın mı?';
$string['batchoperationconfirmreverttodraft'] = 'Seçilen gönderimler taslağa döndürülsün mü ?';
$string['batchoperationconfirmsetmarkingallocation'] = 'Seçilen tüm gönderimler için işaretleme tahsisi ayarlayın?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = 'Seçilen tüm gönderimler için iş akışı durumunu işaretleyin?';
$string['batchoperationconfirmunlock'] = 'Seçilen tüm gönderimlerin kilidini açabilir misiniz?';
$string['batchoperationlock'] = 'gönderimleri kilitle';
$string['batchoperationreverttodraft'] = 'Gönderimleri taslağa döndür';
$string['batchoperationsdescription'] = 'Seçilenlerle ...';
$string['batchoperationunlock'] = 'gönderimlerin kilidini kaldır';
$string['batchsetallocatedmarker'] = 'Seçilen {$a} kullanıcı için tahsis edilen işaretçiyi ayarlayın.';
$string['batchsetmarkingworkflowstateforusers'] = 'Seçilen {$a} kullanıcı için işaretleme iş akışı durumunu ayarlayın.';
$string['blindmarking'] = 'Gizli işaretleme';
$string['blindmarking_help'] = 'Gizli işaretleme öğrencilerin kimliğini belirteçlerden gizler. Kör işaretleme ayarları, bu ödevle ilişkili olarak bir başvuru veya not verildiğinde kilitlenecektir.';
$string['blindmarkingenabledwarning'] = 'Bu etkinlik için kapalı belirtme etkinleştirildi.';
$string['calendardue'] = '{$a} süresi doluyor';
$string['calendargradingdue'] = '{$a} notlandırılacak';
$string['changefilters'] = 'Filtreleri değiştir';
$string['changeuser'] = 'Kullanıcı değiştir';
$string['choosegradingaction'] = 'Notlandırma eylemi';
$string['choosemarker'] = 'Seçiniz...';
$string['chooseoperation'] = 'İşlemi seçin';
$string['clickexpandreviewpanel'] = 'İnceleme panelini genişletmek için tıklayın';
$string['collapsegradepanel'] = 'Not panelini daralt';
$string['collapsereviewpanel'] = 'İnceleme panelini daralt';
$string['comment'] = 'Yorum';
$string['completionsubmit'] = 'Bu aktivitenin tamamlanabilmesi için gönderilmelidir.';
$string['configshowrecentsubmissions'] = 'Herkes, şu anki etkinlik raporlarındaki gönderimlerin uyarılarını görebilir.';
$string['confirmbatchgradingoperation'] = '{$a->count} öğrenci için {$a->operation} yapmak istediğinizden emin misiniz?';
$string['confirmsubmission'] = 'Çalışmanızı notlandırılması için göndermek istediğinize emin misiniz? Bundan sonra değişiklik yapamayacaksınız.';
$string['confirmsubmissionheading'] = 'Gönderiyi onayla';
$string['conversionexception'] = 'Ödevi çevirilemedi. İstisna: {$a}.';
$string['couldnotconvertgrade'] = '{$a} kullanıcısı için ödev notu çevrilemedi.';
$string['couldnotconvertsubmission'] = '{$a} kullanıcısı için ödev gönderimi çevrilemedi.';
$string['couldnotcreatecoursemodule'] = 'Ders modülü oluşturulamadı';
$string['couldnotcreatenewassignmentinstance'] = 'Yeni ödev örneği oluşturulamadı.';
$string['couldnotfindassignmenttoupgrade'] = 'Güncellenebilecek geçmiş ödev örneği bulunamadı.';
$string['crontask'] = 'Atama modülü için arka plan işleme';
$string['currentassigngrade'] = 'Ödevdeki mevcut not';
$string['currentattempt'] = '{$a}. deneme';
$string['currentattemptof'] = 'Bu, {$a->attemptnumber} ({$a->maxattempts} deneme izinli) denemesi.';
$string['currentgrade'] = 'Notdefterindeki şuanki notu';
$string['cutoffdate'] = 'Kesilme tarihi';
$string['cutoffdate_help'] = 'Eğer ayarlanırsa, ödev, bu tarihten sonra bir uzantı olmadan gönderimleri kabul etmez.';
$string['cutoffdatecolon'] = 'Kesilme tarihi: {$a}';
$string['cutoffdatefromdatevalidation'] = 'Kapanma tarihi, izin verilen tarihten önce olamaz.';
$string['cutoffdatevalidation'] = 'Kesilme tarihi vade tarihinden önce olamaz.';
$string['defaultlayout'] = 'Varsayılan düzeni geri yükle';
$string['defaultsettings'] = 'Öntanımlı ödev ayarları';
$string['defaultsettings_help'] = 'Bu ayar tüm yeni ödevler için öntanımlı değerleri tanımlar';
$string['defaultteam'] = 'Varsayılan grup';
$string['deleteallsubmissions'] = 'Tüm gönderimleri sil';
$string['description'] = 'Açıklama';
$string['disabled'] = 'Devre dışı bırakıldı';
$string['downloadall'] = 'Bütün gönderimleri indir';
$string['downloadasfolders'] = 'Gönderimleri klasörlere indirin';
$string['downloadasfolders_help'] = 'Ödev gönderimi tek bir dosyadan fazla ise, gönderimler klasörlere indirilebilir. Her gönderim, ayrı bir klasöre konur; klasör yapısı herhangi bir alt klasör için saklanır ve dosyalar yeniden adlandırılmaz.';
$string['downloadselectedsubmissions'] = 'Seçili başvuruları indir';
$string['duedate'] = 'Son teslim tarihi';
$string['duedate_help'] = 'Ödevin tamamlanarak gönderilmesi beklenen, teslim tarihidir. Bu tarihten sonra da gönderim yapılmasına izin verilir ancak, gönderilen ödevler gecikmiş olarak işaretlerinir. Eğer belli bir tarihten sonra ödev gönderimine izin verilmemesini istiyorsanız, son teslim tarihi atayınız.';
$string['duedatecolon'] = 'Son teslim tarihi: {$a}';
$string['duedateno'] = 'Süresiz';
$string['duedatereached'] = 'Bu ödevin teslim tarihi geçmiş';
$string['duedatevalidation'] = 'Teslim tarihi, gönderimlere izin verilen tarihten sonra olmalıdır.';
$string['duplicateoverride'] = 'Geçersiz kılmaları çoğalt';
$string['editaction'] = 'Eylemler...';
$string['editattemptfeedback'] = '{$a} numaralı deneme için notu ve geribildirimi düzenleyin.';
$string['editingpreviousfeedbackwarning'] = 'Daha önceki bir deneme için geri bildirimi düzenliyorsunuz. Bu, {$a->totalattempts} içinde {$a->attemptnumber} olan girişimdir.';
$string['editingstatus'] = 'Durumu düzenleme';
$string['editonline'] = 'Çevrimiçi düzenleme';
$string['editoverride'] = 'Geçersiz kılmayı düzenle';
$string['editsubmission'] = 'Gönderimi düzenle';
$string['editsubmission_help'] = 'Yine de gönderiminizde değişiklik yapabilirsiniz.';
$string['editsubmissionother'] = '{$a} için gönderimi düzenle';
$string['enabled'] = 'Etkin';
$string['errornosubmissions'] = 'İndirilebilecek hiç gönderim bulunmuyor';
$string['errorquickgradingvsadvancedgrading'] = 'Bu ödev şu anda gelişmiş not vermeyi kullandığı için notlar kaydedilmedi';
$string['errorrecordmodified'] = 'Birisi, sayfayı yüklediğinizden daha yakın bir veya daha fazla kaydı değiştirdiği için notlar kaydedilmedi.';
$string['eventallsubmissionsdownloaded'] = 'Tüm gönderimler indiriliyor.';
$string['eventassessablesubmitted'] = 'Bir gönderimde bulunuldu.';
$string['eventbatchsetmarkerallocationviewed'] = 'Gösterilen toplu işaretçi dağıtımı görünümü';
$string['eventbatchsetworkflowstateviewed'] = 'Toplu iş akışı durumu görüntüleneni ayarlayın.';
$string['eventextensiongranted'] = 'Ek süre tanındı';
$string['eventfeedbackupdated'] = 'Geribildirim güncellendi';
$string['eventfeedbackviewed'] = 'Görüş geribildirimi';
$string['eventgradingformviewed'] = 'Sınıflandırma formu görüntülendi.';
$string['eventgradingtableviewed'] = 'Sınıflandırma tablosu görüntülendi.';
$string['eventidentitiesrevealed'] = 'Kimlikler açığa çıkarıldı.';
$string['eventmarkerupdated'] = 'Ayrılan işaretleyici güncellendi.';
$string['eventoverridecreated'] = 'Ödev geçersiz kılma oluşturuldu';
$string['eventoverridedeleted'] = 'Ödev geçersiz kılma silindi';
$string['eventoverrideupdated'] = 'Ödev geçersiz kılma güncellendi';
$string['eventremovesubmissionformviewed'] = 'Görüntülenen gönderim onayını kaldırın.';
$string['eventrevealidentitiesconfirmationpageviewed'] = 'Görüntülenen kimlik doğrulama sayfası açığa çıkıyor.';
$string['eventstatementaccepted'] = 'Kullanıcı gönderim beyanını kabul etmiştir.';
$string['eventsubmissionconfirmationformviewed'] = 'Gönderme onay formu görüntülendi.';
$string['eventsubmissioncreated'] = 'Gönderme oluşturuldu.';
$string['eventsubmissionduplicated'] = 'Kullanıcı gönderisini kopyaladı.';
$string['eventsubmissionformviewed'] = 'Gönderme formu görüntülendi.';
$string['eventsubmissiongraded'] = 'Gönderime';
$string['eventsubmissionlocked'] = 'Gönderimler bir kullanıcı için kilitlendi.';
$string['eventsubmissionstatusupdated'] = 'Gönderimin durumu güncellendi.';
$string['eventsubmissionstatusviewed'] = 'Gönderim durumuna bakıldı.';
$string['eventsubmissionunlocked'] = 'Gönderimlerin bir kullanıcı için kilidi açık.';
$string['eventsubmissionupdated'] = 'Gönderme güncellendi.';
$string['eventsubmissionviewed'] = 'Gönderme görüntülendi.';
$string['eventworkflowstateupdated'] = 'İş akışı durumu güncellendi.';
$string['expandreviewpanel'] = 'İnceleme paneli genişletin';
$string['extensionduedate'] = 'Ek sürenin bitiş tarihi';
$string['extensionnotafterduedate'] = 'Ek sürenin bitiş tarihi, ödevin ilk bitiş tarihinden sonra olmalıdır';
$string['extensionnotafterfromdate'] = 'Uzatma tarihi, tarihinden itibaren izin verilen gönderimlerin sonrasında olmalıdır';
$string['feedback'] = 'Geribildirim';
$string['feedbackavailableanonhtml'] = 'Hakkında yeni geri bildiriminiz var.
\'<i>{$a->assignment} </i>\' için atama sunumu <br /> <br />
<a href="{$a->url} "> Ödev tesliminize </a> eklendiğini görebilirsiniz.';
$string['feedbackavailableanonsmall'] = '{$a->assignment} ödevi için yeni geri bildirim';
$string['feedbackavailableanontext'] = 'Hakkında yeni geri bildiriminiz var.
\'{$a->assignment}\' için atama sunumu

Ödev tesliminize eklendiğini görebilirsiniz:

    {$a->url}';
$string['feedbackavailablehtml'] = '{$a->username} sizinle ilgili bazı geri bildirimler yayınladı.
<i> {$a->assignment} </ i> \'için atama başvurusu <br /> <br />
<a href="{$a->url} "> ödev gönderiminize eklendiğini görebilirsiniz </a>.';
$string['feedbackavailablesmall'] = '{$a->username}, {$a->assignment} ödevi için geri bildirim verdi';
$string['feedbackavailabletext'] = '{$a->username} sizinle ilgili bazı geri bildirimler yayınladı.
\'{$a->assignment}\' için ödev gönderimi

Ödev gönderiminize eklendiğini görebilirsiniz:

     {$a->url}';
$string['feedbackplugin'] = 'Geribildirim eklentisi';
$string['feedbackpluginforgradebook'] = 'Not defterlerine yorum gönderen geri bildirim eklentisi';
$string['feedbackpluginforgradebook_help'] = 'Sadece bir ödev geribildirimi eklentisi geribildirim not defterine itilebilir.';
$string['feedbackplugins'] = 'Geribildirim eklentisi';
$string['feedbacksettings'] = 'Geribildirim ayarları';
$string['feedbacktypes'] = 'Geribildirim türleri';
$string['filesubmissions'] = 'Dosya gönderimleri';
$string['filter'] = 'Filtre';
$string['filtergrantedextension'] = 'Verilen uzantı';
$string['filternone'] = 'Filtre yok';
$string['filternotsubmitted'] = 'Teslim edilmedi.';
$string['filterrequiregrading'] = 'Notlandırılması gerekiyor';
$string['filtersubmitted'] = 'Gönderilmiş';
$string['fixrescalednullgrades'] = 'Bu ödevde bazı hatalı notlar bulunmaktadır. <a href="{$a-> link}">bu notları otomatik olarak düzeltebilir</a>. Bu, kurs toplamlarını etkileyebilir.';
$string['fixrescalednullgradesconfirm'] = 'Hatalı notları düzeltmek istediğinizden emin misiniz? Etkilenen tüm notlar kaldırılacaktır. Bu, ders toplamlarını etkileyebilir.';
$string['fixrescalednullgradesdone'] = 'Notlar sabitlendi.';
$string['gradeabovemaximum'] = 'Verilen puan {$a} den küçük ya da eşit olmalıdır.';
$string['gradebelowzero'] = 'Notlar sıfıra (0) eşit ya da büyük olmalıdır';
$string['gradecanbechanged'] = 'Not değiştirilebilir';
$string['gradechangessaveddetail'] = 'Not ve geribildirim değişiklikleri kaydedildi';
$string['graded'] = 'Notlandırıldı';
$string['gradedby'] = 'Notu veren';
$string['gradedfollowupsubmit'] = 'Kademeli - takip gönderimi alındı';
$string['gradedon'] = 'Not verildi';
$string['gradeitem:submissions'] = 'Gönderimler';
$string['gradelocked'] = 'Bu not kilitli veya not defterinde geçersiz kılınmıştır.';
$string['gradeoutof'] = '{$a} Dışarıdan notu';
$string['gradeoutofhelp'] = 'Not';
$string['gradeoutofhelp_help'] = 'Öğrencinin gönderim notunu buraya girin. Ondalık sayıları ekleyebilirsiniz.';
$string['gradersubmissionupdatedhtml'] = '{$a->username}, <i>\'{$a->assignment}\'</i> isimli gönderimini güncelledi.<br /><br /><a href="{$a->url}">Web sitesinden</a> ulaşabilirsiniz.';
$string['gradersubmissionupdatedsmall'] = '{$a->username} Ödev gönderimleri güncellendi{$a->assignment}.';
$string['gradersubmissionupdatedtext'] = '{$a->username}, \'{$a->assignment}\' isimli gönderimini güncelledi.

Buradan ulaşabilirsiniz:

{$a->url}';
$string['gradestudent'] = 'Öğrenci notu: (id={$a->id}, fullname={$a->fullname}).';
$string['gradeuser'] = 'Not {$a}';
$string['grading'] = 'Notlandırma';
$string['gradingchangessaved'] = 'Not değişiklikleri kaydedildi.';
$string['gradingduedate'] = 'Not vermeyi hatırlat';
$string['gradingduedate_help'] = 'Bildiri işaretlemesinin tamamlanması beklenen tarih. Bu tarih, öğretmenler için gösterge tablosu bildirimlerine öncelik vermek için kullanılır.';
$string['gradingdueduedatevalidation'] = 'Bana tarihe göre not vermemi, son tarihten önce olamaz.';
$string['gradingduefromdatevalidation'] = 'Tarihe göre notlandırmamı hatırlat, tarihten itibaren gönderime izin ver tarihinden önce olamaz.';
$string['gradingmethodpreview'] = 'Notlandırma Ölçütü';
$string['gradingoptions'] = 'Seçenekler';
$string['gradingstatus'] = 'Puan durumu';
$string['gradingstudent'] = 'Öğrenciye not verme';
$string['gradingsummary'] = 'Notlandırma özeti';
$string['grantextension'] = 'Ek süre tanı';
$string['grantextensionforusers'] = '{$a} öğrencilerine ek süre tanı';
$string['groupoverrides'] = 'Grup geçersiz kılmaları';
$string['groupoverridesdeleted'] = 'Grup geçersiz kılmaları silindi';
$string['groupsnone'] = 'Erişebileceğiniz grup yok.';
$string['groupsubmissionsettings'] = 'Grup gönderimleri ayarları';
$string['hiddenuser'] = 'Katılımcı';
$string['hidegrader'] = 'Sınıf öğrencisi kimliğini öğrencilerden gizle';
$string['hidegrader_help'] = 'Etkinleştirilirse, ödev teslimini derecelendiren herhangi bir kullanıcının kimliği gösterilmez, böylece öğrenciler çalışmalarını kimin işaretlediğini göremezler.

Bu ayarın notlandırma sayfasındaki yorumlar kutusu üzerinde bir etkisi olmadığını unutmayın.';
$string['hideshow'] = 'Gizle/Göster';
$string['inactiveoverridehelp'] = '* Bu geçersiz kılma etkin değildir çünkü kullanıcının etkinliğe erişimi kısıtlanmıştır. Bunun nedeni grup veya rol atamaları, diğer erişim kısıtlamaları veya gizlenen etkinlik olabilir.';
$string['indicator:cognitivedepth'] = 'Bilişsel ödev';
$string['indicator:cognitivedepth_help'] = 'Bu gösterge, bir ödev etkinliğinde öğrencinin ulaştığı bilişsel derinliğe dayanır.';
$string['indicator:cognitivedepthdef'] = 'Bilişsel ödev';
$string['indicator:cognitivedepthdef_help'] = 'Katılımcı, bu analiz aralığı boyunca Ödev faaliyetleri tarafından sunulan bilişsel katılım yüzdesine ulaştı (Düzeyler = Görünüm yok, Görüntüle, Gönder, Geri bildirimi görüntüle, Geri bildirim hakkında yorum, Geri bildirimi görüntüledikten sonra tekrar gönder)';
$string['indicator:socialbreadth'] = 'Sosyal görevlendirme';
$string['indicator:socialbreadth_help'] = 'Bu gösterge, bir ödev etkinliğinde öğrencinin ulaştığı sosyal genişliğe dayanır.';
$string['indicator:socialbreadthdef'] = 'Sosyal görevlendirme';
$string['indicator:socialbreadthdef_help'] = 'Katılımcı, bu analiz aralığı boyunca Ödev faaliyetlerinin sunduğu sosyal katılımın bu yüzdesine ulaştı (Düzeyler = Katılım yok, Yalnız katılımcı, Başkalarıyla katılımcı)';
$string['instructionfiles'] = 'Talimat dosyaları';
$string['introattachments'] = 'Ek dosyalar';
$string['introattachments_help'] = 'Yanıt şablonları gibi ödevde kullanılacak ek dosyalar eklenebilir. Dosyalar için indirme bağlantıları daha sonra açıklamanın altındaki ödev sayfasında görüntülenecektir.';
$string['invalidfloatforgrade'] = 'Sağlanan not anlaşılamadı: {$a}';
$string['invalidgradeforscale'] = 'Sağlanan seviye mevcut ölçek için geçerli değildi';
$string['invalidoverrideid'] = 'Geçersiz geçersiz kılma kimliği';
$string['lastmodifiedgrade'] = 'Son düzenleme (not)';
$string['lastmodifiedsubmission'] = 'Son düzenleme (gönderim)';
$string['latesubmissions'] = 'Gecikmiş gönderimler';
$string['latesubmissionsaccepted'] = '{$a} tarihine kadar izin verildi';
$string['loading'] = 'Yükleniyor...';
$string['locksubmissionforstudent'] = 'Öğrenci için daha fazla gönderme yapılmasını önle: (id={$a->id}, fullname={$a->fullname}).';
$string['locksubmissions'] = 'Gönderimleri kilitle';
$string['manageassignfeedbackplugins'] = 'Ödev geribildirim eklentilerini yönet';
$string['manageassignsubmissionplugins'] = 'Ödev gönderim eklentilerini yönet';
$string['marker'] = 'İşaretleyici';
$string['markerfilter'] = 'İşaretleyici flitresi';
$string['markerfilternomarker'] = 'İşaretleyici yok';
$string['markingallocation'] = 'İşaretleme dağıtımı kullanma';
$string['markingallocation_help'] = 'İş akışını işaretleme ile birlikte etkinleştirilirse, işaretleyiciler belirli öğrencilere tahsis edilebilir.';
$string['markingworkflow'] = 'İşaretleme iş akışını kullanın';
$string['markingworkflow_help'] = 'Etkinleştirilirse, işaretler öğrencilere bırakılmadan önce bir dizi iş akışı aşamasından geçecektir. Bu, çoklu işaretleme turlarına izin verir ve aynı anda tüm öğrencilere işaretlerin verilmesine izin verir.';
$string['markingworkflowstate'] = 'İş akış durumunu işaretleme';
$string['markingworkflowstate_help'] = 'Olası iş akışı durumları şunlar olabilir (izinlerinize bağlı olarak):

* Işaretli değil - işaretleyici henüz başlamadı
* Işaretleme olarak - işaretleyici başladı ama henüz bitmiş değil
* Tamamlandı İşaretleme - işaretleyici bittikten ama / düzeltmeleri kontrol etmek için geri gitmek gerekebilir
* İncelemede - nitelik denetlenmesi için sorumlu öğretmenle birlikte işaretleniyor
* Serbest kalmaya hazır - sorumlu öğretmen işaretlemeden memnun ancak öğrencilere işaretlemeye erişmeden önce bekleyin
* Çıkış - öğrenci notlara/geri bildirime erişebilir';
$string['markingworkflowstateinmarking'] = 'İşaretlemede';
$string['markingworkflowstateinreview'] = 'İncelemede';
$string['markingworkflowstatenotmarked'] = 'İşaretli değil';
$string['markingworkflowstatereadyforrelease'] = 'Yayımlamak için hazır';
$string['markingworkflowstatereadyforreview'] = 'İşaretleme tamamlandı';
$string['markingworkflowstatereleased'] = 'Yayımlandı';
$string['maxattempts'] = 'Maksimum deneme';
$string['maxattempts_help'] = 'Bir öğrencinin yapabileceği maksimum başvuru sayısı. Bu denemeden sonra, öğrencinin başvurusu yeniden açılamaz.';
$string['maxgrade'] = 'Maksimum not';
$string['maxperpage'] = 'Sayfa başına maksimum ödev';
$string['maxperpage_help'] = 'Sınıflandırıcının atama notlandırma sayfasında gösterebileceği maksimum atama sayısı. Bu ayar, çok sayıda katılımcının bulunduğu kurslar için zaman aşımlarının önlenmesinde yararlıdır.';
$string['messageprovider:assign_notification'] = 'Ödev bildirimleri';
$string['modulename'] = 'Ödev';
$string['modulename_help'] = 'Ödev etkinliği modülü, bir öğretmenin görevleri iletmesini, işi toplamasını ve notlar ve geribildirim sağlamasına olanak tanır.

Öğrenciler, sözcük işlenmiş belgeler, e-tablolar, resimler veya ses ve video klipleri gibi dijital içerikleri (dosyalar) gönderebilir. Alternatif olarak veya ek olarak, ödev, öğrencilerin doğrudan metin düzenleyicisine metin yazmasını gerektirebilir. Ödev, öğrencilere, sanat eseri gibi çevrimdışı tamamlamaları gereken \'gerçek dünya\' ödevlerini hatırlatmak için de kullanılabilir; dolayısıyla herhangi bir dijital içerik gerektirmez. Öğrenciler tek başlarına veya bir gruba üye olarak çalışabilirler.

Ödevleri incelerken, öğretmenler geribildirim yorumları gönderebilir ve işaretlenmiş öğrenci gönderimleri, yorumlar içeren belgeler veya sesli geribildirim gibi dosyaları yükleyebilir. Ödevler sayısal veya özel ölçeğe göre veya harfler gibi gelişmiş not verme yöntemiyle notlandırılabilir. Final notları not defterine kaydedilir.';
$string['modulenameplural'] = 'Ödevler';
$string['moreusers'] = '{$a} daha...';
$string['multipleteams'] = 'Birden fazla grubun üyesi';
$string['multipleteams_desc'] = 'Ödev, gruplar halinde sunulmayı gerektirir. Birden fazla grubun üyesisiniz. Gönderebilmeniz için yalnızca bir grubun üyesi olmanız gerekir. Grup üyeliğinizi değiştirmek için lütfen öğretmeninizle iletişime geçin.';
$string['multipleteamsgrader'] = 'Birden fazla grubun üyesi, bu nedenle gönderim yapamıyor.';
$string['mysubmission'] = 'Gönderimim :';
$string['newsubmissions'] = 'Gönderilmiş ödevler';
$string['noattempt'] = 'Deneme yok';
$string['noclose'] = 'Yakın tarih yok';
$string['nofiles'] = 'Dosya yok';
$string['nofilters'] = 'Filtre yok';
$string['nograde'] = 'Not yok.';
$string['nolatesubmissions'] = 'Geciken gönderimler kabul edilmez.';
$string['nomoresubmissionsaccepted'] = 'Yalnızca uzatma verilen katılımcılar için izin verilir';
$string['none'] = 'Yok';
$string['noonlinesubmissions'] = 'Bu ödev için online gönderimde bulunmanız gerekmiyor.';
$string['noopen'] = 'Açık tarih yok';
$string['nooverridedata'] = 'Ödev ayarlarından en az birini geçersiz kılmalısınız.';
$string['nosavebutnext'] = 'Sonraki';
$string['nosubmission'] = 'Bu ödev için gönderimde bulunulmamış.';
$string['nosubmissionsacceptedafter'] = 'Bu tarihten sonra gönderim kabul edilmez :';
$string['noteam'] = 'Herhangi bir grubun üyesi değil';
$string['noteam_desc'] = 'Bu ödev, gruplar halinde sunulmayı gerektirir. Herhangi bir grubun üyesi değilsiniz, bu nedenle gönderim oluşturamazsınız. Lütfen bir gruba eklenecek öğretmeninizle iletişime geçin.';
$string['noteamgrader'] = 'Herhangi bir grubun üyesi değil, bu nedenle gönderim yapamıyor.';
$string['notgraded'] = 'Puanlanmamış';
$string['notgradedyet'] = 'Henüz notlandırılmamış';
$string['notifications'] = 'Bildirimler';
$string['notsubmittedyet'] = 'Henüz gönderilmemiş';
$string['nousers'] = 'Kullanıcı yok';
$string['nousersselected'] = 'Hiçbir kullanıcı seçilmedi';
$string['numberofdraftsubmissions'] = 'Taslaklar';
$string['numberofparticipants'] = 'Katılımcılar';
$string['numberofsubmissionsneedgrading'] = 'Notlandırılması gereken';
$string['numberofsubmittedassignments'] = 'Gönderilen';
$string['numberofteams'] = 'Gruplar';
$string['offline'] = 'Online gönderim gerekli değil';
$string['open'] = 'Aç';
$string['outlinegrade'] = 'Not : {$a}';
$string['outof'] = '{$a->current} dışında {$a->total}';
$string['overdue'] = '<font color="red">Tarafından göderilen geç kalmış ödev{$a}</font>';
$string['override'] = 'Geçersiz kıl';
$string['overridedeletegroupsure'] = '{$a} grubu için geçersiz kılmayı silmek istediğinizden emin misiniz?';
$string['overridedeleteusersure'] = '{$a} kullanıcısı için geçersiz kılmayı silmek istediğinizden emin misiniz?';
$string['overridegroup'] = 'Grubu geçersiz kıl';
$string['overridegroupeventname'] = '{$a->assign} - {$a->group}';
$string['overrides'] = 'Geçersiz kılmalar';
$string['overrideuser'] = 'Kullanıcıyı geçersiz kıl';
$string['overrideusereventname'] = '{$a->assign} - Geçersiz kıl';
$string['page-mod-assign-view'] = 'Ödev modülü ana ve gönderim sayfası';
$string['page-mod-assign-x'] = 'Herhangi bir ödev modülü sayfası';
$string['paramtimeremaining'] = 'Kalan {$a}';
$string['participant'] = 'Katılımcı';
$string['pluginadministration'] = 'Ödev yönetimi';
$string['pluginname'] = 'Ödev';
$string['preventsubmissionnotingroup'] = 'Göndermek için grubun olmasını şart koş';
$string['preventsubmissionnotingroup_help'] = 'Etkinleştirilirse, bir gruba üye olmayan kullanıcılar gönderim yapamaz.';
$string['preventsubmissions'] = 'Kullanıcının bu ödev için başka herhangi bir gönderim yapmasını önleyin.';
$string['preventsubmissionsshort'] = 'Gönderim değişikliklerini önle';
$string['previous'] = 'Önceki';
$string['privacy:attemptpath'] = '{$a} girişimi';
$string['privacy:blindmarkingidentifier'] = 'Kör işaretleme için kullanılan tanımlayıcı';
$string['privacy:gradepath'] = 'sınıf';
$string['privacy:metadata:assigndownloadasfolders'] = 'Birden çok dosya gönderiminin klasörlere indirilip indirilmeyeceği konusunda kullanıcı tercihi';
$string['privacy:metadata:assignfeedbackpluginsummary'] = 'Ödev için geri bildirim verileri.';
$string['privacy:metadata:assignfilter'] = '\'Gönderildi\', \'Gönderilmedi\', \'Sınıflandırma gerektirir\' ve \'Verilen uzantı\' gibi filtre seçenekleri';
$string['privacy:metadata:assigngrades'] = 'Ödev için kullanıcı notlarını saklar';
$string['privacy:metadata:assignmarkerfilter'] = 'Atama özetini atanan işaretçiye göre filtreleyin.';
$string['privacy:metadata:assignmentid'] = 'Ödev Kimliği';
$string['privacy:metadata:assignmessageexplanation'] = 'Mesajlar mesajlaşma sistemi aracılığıyla öğrencilere gönderilir.';
$string['privacy:metadata:assignoverrides'] = 'Ödev için geçersiz kılma bilgilerini depolar';
$string['privacy:metadata:assignperpage'] = 'Sayfa başına gösterilen ödev sayısı.';
$string['privacy:metadata:assignquickgrading'] = 'Hızlı derecelendirmenin kullanılıp kullanılmayacağı tercihi.';
$string['privacy:metadata:assignsubmissiondetail'] = 'Kullanıcı gönderim bilgilerini saklar';
$string['privacy:metadata:assignsubmissionpluginsummary'] = 'Ödev için teslim verileri.';
$string['privacy:metadata:assignuserflags'] = 'Uzantı tarihleri gibi kullanıcı meta verilerini depolar';
$string['privacy:metadata:assignusermapping'] = 'Kör işaretleme için eşleme';
$string['privacy:metadata:assignworkflowfilter'] = 'Farklı iş akışı aşamalarına göre filtreleyin.';
$string['privacy:metadata:grade'] = 'Bu ödev teslimi için sayısal not. Ölçekler / ileri dereceli formlar vb. İle belirlenebilir, ancak her zaman bir kayan nokta numarasına dönüştürülür.';
$string['privacy:metadata:grader'] = 'Not veren kişinin kullanıcı kimliği.';
$string['privacy:metadata:groupid'] = 'Kullanıcının üyesi olduğu grup kimliği.';
$string['privacy:metadata:latest'] = 'Yalnızca en son deneme hakkında bilgi edinmek isteyen sorguları büyük ölçüde basitleştirir.';
$string['privacy:metadata:mailed'] = 'Bu kullanıcı henüz postalandı mı?';
$string['privacy:metadata:timecreated'] = 'Oluşturulan zaman';
$string['privacy:metadata:userid'] = 'Kullanıcının kimliği';
$string['privacy:studentpath'] = 'öğrencigönderimleri';
$string['privacy:submissionpath'] = 'gönderim';
$string['quickgrading'] = 'Hızlı notlandırma';
$string['quickgrading_help'] = 'Hızlı notlandırma, not verilen ödevlere doğrudan notlar (ve sonuçlar) göndermenizi sağlar. Hızlı notlandırma, gelişmiş notlandırmaya uyumlu değildir ve birden çok işaretleyici olduğunda önerilmez.';
$string['quickgradingchangessaved'] = 'Not değişiklikleri kaydedildi';
$string['quickgradingresult'] = 'Hızlı notlandırma';
$string['recordid'] = 'Tanımlayıcı';
$string['relativedatessubmissionduedateafter'] = 'Kurs başladıktan sonra {$a->datediffstr}';
$string['relativedatessubmissionduedatebefore'] = 'Kurs başlamadan önce {$a->datediffstr}';
$string['relativedatessubmissiontimeleft'] = 'Her öğrenci için hesaplanmıştır';
$string['removeallgroupoverrides'] = 'Tüm grup geçersiz kılmalarını sil';
$string['removealluseroverrides'] = 'Tüm kullanıcı geçersiz kılmalarını sil';
$string['removesubmission'] = 'Gönderimi kaldır';
$string['removesubmissionconfirm'] = 'Gönderim verilerini kaldırmak istediğinizden emin misiniz?';
$string['removesubmissionconfirmforstudent'] = '{$a} öğrencisi için gönderim verilerini kaldırmak istediğinizden emin misiniz?';
$string['removesubmissionforstudent'] = 'Öğrenci için gönderimi kaldırın: (id={$a->id}, tam adı={$a->fullname}).';
$string['reopenuntilpassincompatiblewithblindmarking'] = 'Geçiş seçeneği gizli işaretlemeyle uyuşmayana kadar yeniden açın, çünkü notlar not defterine öğrencinin kimlikleri açığa çıkana dek serbest bırakılmaz.';
$string['requireallteammemberssubmit'] = 'Tüm grup üyelerinin göndermeleri gerekiyor';
$string['requireallteammemberssubmit_help'] = 'Etkinleştirilirse, öğrenci grubunun tüm üyeleri, grup gönderimi gönderildiği kabul edilmeden önce bu ödev için gönderme düğmesini tıklatmalıdır. Devre dışı bırakılmışsa, öğrenci grubunun herhangi bir üyesi gönderme düğmesini tıklar tıklamaz grup gönderimi sunulmuş sayılır.';
$string['requiresubmissionstatement'] = 'Öğrencilerin gönderim bildirimini kabul etmelerini isteyin';
$string['requiresubmissionstatement_help'] = 'Öğrencilerin bu göreve gönderilen tüm gönderiler için gönderim beyanını kabul etmelerini isteyin.';
$string['revealidentities'] = 'Öğrenci bilgilerini göster';
$string['revealidentitiesconfirm'] = 'Bu ödev için öğrenci kimliklerini göstermek istediğinizden emin misiniz? Bu işlem geri alınamaz. Öğrenci kimlikleri ortaya çıkınca, notlar not defterine yazılacaktır.';
$string['reverttodefaults'] = 'Ödev varsayılanlarını geri al';
$string['reverttodraft'] = 'Gönderimi, taslak duruma döndür';
$string['reverttodraftforstudent'] = '(id={$a->id} nolu fullname={$a->fullname}) isimli öğrencinin gönderimini taslağa döndür';
$string['reverttodraftshort'] = 'Gönderimi, taslağa döndür';
$string['reviewed'] = 'İncelendi';
$string['save'] = 'Kaydet';
$string['saveallquickgradingchanges'] = 'Tüm hızlı notlandırma değişikliklerini kaydet';
$string['saveandcontinue'] = 'Kaydet ve devam et';
$string['savechanges'] = 'Değişiklikleri kaydet';
$string['savegradingresult'] = 'Not';
$string['savenext'] = 'Kaydet ve sonrakini göster';
$string['saveoverrideandstay'] = 'Kaydet ve diğer geçersiz kılmayı gir';
$string['savingchanges'] = 'Değişiklikleri kaydetme...';
$string['scale'] = 'Skala';
$string['search:activity'] = 'Ödev - etkinlik bilgisi';
$string['selectedusers'] = 'Seçilen kullanıcılar';
$string['selectlink'] = 'Seçiniz...';
$string['selectuser'] = '{$a} yı seç';
$string['sendlatenotifications'] = 'Eğitmenleri geç gönderimler için uyar';
$string['sendlatenotifications_help'] = 'Etkinleştirilirse, bir öğrenci ödevi geç teslim ettiğinde, not verenler (genellikle öğretmenler) bir mesaj alır. İleti yöntemleri yapılandırılabilir.';
$string['sendnotifications'] = 'Eğitmenleri gönderimler için uyar';
$string['sendnotifications_help'] = 'Etkinleştirilirse, öğrenciler her öğrenci bir ödevi erken, zamanında ve geç teslim ettiğinde, not verenler (genellikle öğretmenler) bir mesaj alır. İleti yöntemleri yapılandırılabilir.';
$string['sendstudentnotifications'] = 'Öğrencilere bildir';
$string['sendstudentnotifications_help'] = 'Etkinleştirilirse, öğrenciler güncellenen not veya geri bildirimle ilgili bir mesaj alır. Bu ödevde iş akışını işaretleme etkinleştirildiyse, not "Onaylanıncaya" kadar bildirimler gönderilmeyecektir.';
$string['sendstudentnotificationsdefault'] = '"Öğrencilere bildir" için varsayılan ayar';
$string['sendstudentnotificationsdefault_help'] = 'Not verme formundaki "Öğrencilere bildir" onay kutusunun varsayılan değerini ayarlayın.';
$string['sendsubmissionreceipts'] = 'Öğrencilere alındı mesajı gönderme';
$string['sendsubmissionreceipts_help'] = 'Bu anahtar, öğrenciler için teslim alındıların da etkinleştirir. Öğrenciler, başarılı bir şekilde her ödev gönderdiklerinde bir bildirim alırlar.';
$string['setmarkerallocationforlog'] = 'İşaretleme dağılımını ayarla:  (id={$a->id}, fullname={$a->fullname}, marker={$a->marker}).';
$string['setmarkingallocation'] = 'İşaretleme dağılımını ayarla';
$string['setmarkingworkflowstate'] = 'İşaretleme iş akışı durumunu ayarlama';
$string['setmarkingworkflowstateforlog'] = 'İş akışı durumunu işaretleme ayarını yapın: (id ={$a->id}, fullname ={$a->fullname}, state ={$a->state}).';
$string['settings'] = 'Ödev ayarları';
$string['showrecentsubmissions'] = 'Son gönderimleri göster';
$string['status'] = 'Durum';
$string['studentnotificationworkflowstateerror'] = 'İş akış durumunu işaretleme, öğrencileri bilgilendirmek için \'Yayınlandı\' olmalıdır.';
$string['submission'] = 'Gönderim';
$string['submissioncopiedhtml'] = '<p> Önceki kopyanızın bir kopyasını yaptınız
<i> {$a->assignment} </ i> \'için ödev gönderimi. </ p>
<p> <a href="{$a->url} "> ödev gönderiminizin durumunu görebilirsiniz. </a> </ p>';
$string['submissioncopiedsmall'] = '{$a->assignment} için önceki ödev gönderimini kopyaladınız.';
$string['submissioncopiedtext'] = 'Önceki dosyanızın bir kopyasını yaptınız
\'{$a->assignment}\' için ödev gönderimi

Ödev gönderiminizin durumunu görebilirsiniz:

     {$a->url}';
$string['submissiondrafts'] = 'Öğrencilerin gönder düğmesini tıklamasını zorunlu kılın';
$string['submissiondrafts_help'] = 'Etkinleştirilirse, öğrencilerin sunumlarının nihai olduğunu bildirmek için bir gönder düğmesine tıklamaları gerekecektir. Bu, öğrencilerin sunumun taslak bir sürümünü sistemde tutmalarına olanak tanır. Öğrenciler zaten gönderdikten sonra bu ayar "Hayır" dan "Evet" e değiştirilirse, bu gönderimler nihai olarak kabul edilecektir.';
$string['submissioneditable'] = 'Öğrenci bu gönderimi düzenleyebilir';
$string['submissionempty'] = 'Hiçbir şey gönderilmemiş';
$string['submissionlog'] = 'Öğrenci: {$a->fullname}, Durumları: {$a->status}';
$string['submissionmodified'] = 'Mevcut gönderim verileriniz var. Lütfen bu sayfayı bırakın ve tekrar deneyin.';
$string['submissionmodifiedgroup'] = 'Gönderim başka biri tarafından değiştirildi. Lütfen bu sayfayı bırakın ve tekrar deneyin.';
$string['submissionnotcopiedinvalidstatus'] = 'Gönderim kopyalanmadı, çünkü yeniden açıldığı andan itibaren düzenlendi.';
$string['submissionnoteditable'] = 'Öğrenci bu gönderimi düzenleneyemez';
$string['submissionnotready'] = 'Bu ödev gönderilmek için hazır değil :';
$string['submissionplugins'] = 'Gönderim eklentileri';
$string['submissionreceipthtml'] = '<p> \'<i>{$a->assignment}</i>\' için bir ödev gönderdiniz. </p>
<p> <a href="{$a->url}">ödev gönderiminizin</a> durumunu görebilirsiniz.</p>';
$string['submissionreceiptotherhtml'] = 'İçin ödev gönderiminiz
\'<i>{$a->assingment} </ i>\' gönderildi. <br /> <br />
<a href="{$a->url} "> Ödev gönderiminizin durumunu </a> görebilirsiniz.';
$string['submissionreceiptothersmall'] = '{$a->assignment} için ödev gönderiminiz gönderildi.';
$string['submissionreceiptothertext'] = 'İçin ödev gönderiniz
\'{$a->assignment}\' gönderildi.

Ödev gönderiminizin durumunu görebilirsiniz:

     {$a->url}';
$string['submissionreceipts'] = 'Gönderi alındılarını gönder.';
$string['submissionreceiptsmall'] = '{$a->assignment} için ödevinizi gönderdiniz';
$string['submissionreceipttext'] = '\'{$a->assignment}\'  ödevi için gönderimde bulundunuz.

Ödevinizin durumunu aşağıdaki bağlantıdan görebilirsiniz :

     {$a->url}';
$string['submissionsclosed'] = 'Gönderimler kapatıldı';
$string['submissionsettings'] = 'Gönderim ayarları';
$string['submissionslocked'] = 'Bu ödev gönderim kabul etmemektedir';
$string['submissionslockedshort'] = 'Gönderim değişikliklerine izin verilmiyor';
$string['submissionsnotgraded'] = 'Puanlandırılmamış gönderimler: {$a}';
$string['submissionstatement'] = 'Gönderim durumu';
$string['submissionstatement_help'] = 'Çalışmalarını teslim etmek için her öğrencinin kabul etmesi gereken bildirim.';
$string['submissionstatementacceptedlog'] = 'Gönderim durumu {$a} tarafından onaylandı';
$string['submissionstatementdefault'] = 'Bu ödev, başkalarının eserlerinin kullanımını kabul ettiğim durumlar haricinde kendi eserimdir.';
$string['submissionstatementteamsubmission'] = 'Grup teslim bildirimi';
$string['submissionstatementteamsubmission_help'] = 'Her öğrencinin, kendi grubunun çalışmalarını sunabilmesi için kabul etmesi gerektiği ifadesi';
$string['submissionstatementteamsubmissionallsubmit'] = 'Tüm grup üyelerinin gönderdiği grup teslim bildirimi';
$string['submissionstatementteamsubmissionallsubmit_help'] = 'Her öğrencinin çalışmalarını grup üyesi olarak sunabilmesi için kabul etmesi gerektiğine dair beyan.';
$string['submissionstatementteamsubmissionallsubmitdefault'] = 'Bu teslim, diğer insanların çalışmalarının kullanımını kabul ettiğim durumlar dışında, grup üyesi olarak benim kendi işim.';
$string['submissionstatementteamsubmissiondefault'] = 'Bu teslim, diğer insanların eserlerinin kullanımını kabul ettiğimiz durumlar hariç, grubumun eseridir.';
$string['submissionstatus'] = 'Gönderim durumu';
$string['submissionstatus_'] = 'Gönderim yok';
$string['submissionstatus_draft'] = 'Taslak (gönderilmedi)';
$string['submissionstatus_marked'] = 'Notlandırıldı';
$string['submissionstatus_new'] = 'Gönderim yok';
$string['submissionstatus_reopened'] = 'Tekrar açıldı';
$string['submissionstatus_submitted'] = 'Notlandırılması için gönderildi';
$string['submissionstatusheading'] = 'Gönderim durumu';
$string['submissionsummary'] = '{$a->status}. En son şu zamanda düzenlenmiş {$a->timemodified}';
$string['submissionteam'] = 'Grup';
$string['submissiontypes'] = 'Gönderim türleri';
$string['submitaction'] = 'Gönder';
$string['submitassignment'] = 'Ödevi gönder';
$string['submitassignment_help'] = 'Ödevinizi gönderdiğinizde,  üzerinde değişiklik yapmanız mümkün olmayacak.';
$string['submitforgrading'] = 'Not verme için gönder';
$string['submitted'] = 'Gönderilmiş';
$string['submittedearly'] = 'Ödev {$a} erken teslim edildi';
$string['submittedlate'] = 'Ödev {$a} geç teslim edildi';
$string['submittedlateshort'] = '{$a} sonrası';
$string['subpagetitle'] = '{$a->contextname} - {$a->subpage}';
$string['subplugintype_assignfeedback'] = 'Eklenti geri bildirimi';
$string['subplugintype_assignfeedback_plural'] = 'Eklentiler geri bildirimi';
$string['subplugintype_assignsubmission'] = 'Genderim eklentisi';
$string['subplugintype_assignsubmission_plural'] = 'Gönderim eklentileri';
$string['teamname'] = 'Takım: {$a}';
$string['teamsubmission'] = 'Öğrenciler gruplar halinde gönderim yapar';
$string['teamsubmission_help'] = 'Etkinleştirildiyse, öğrenciler varsayılan gruplarına veya özel bir gruplamaya dayalı olarak gruplara ayrılırlar. Bir grup gönderimi, grup üyeleri arasında paylaşılacak ve grubun tüm üyeleri, diğerlerinin sunuşta değişiklikler görecektir';
$string['teamsubmissiongroupingid'] = 'Öğrenci gruplarını gruplandır';
$string['teamsubmissiongroupingid_help'] = 'Ödev, öğrenci grupları için gruplar bulmak için kullanacağı gruplandır. Ayarlanmazsa - varsayılan gruplar grubu kullanılır.';
$string['textinstructions'] = 'Ödev açıklaması';
$string['timemodified'] = 'Son düzenleme';
$string['timeremaining'] = 'Kalan süre';
$string['timeremainingcolon'] = 'Kalan süre: {$a}';
$string['togglezoom'] = 'Bölgeyi büyüt/küçült';
$string['ungroupedusers'] = '\'Gönderim yapmak için grup gerekli\' ayarı etkindir ve bazı kullanıcılar herhangi bir gruba üye değildir veya birden fazla gruba üye olduğundan, gönderim yapamazlar.';
$string['ungroupedusersoptional'] = '\'Öğrenciler gruplar halinde gönderiyor\' ayarı etkinleştirildi ve bazı kullanıcılar ya herhangi bir grubun üyesi değil ya da birden fazla grubun üyesi. Bu öğrencilerin \'Varsayılan grup\' üyesi olarak göndereceklerini lütfen unutmayın.';
$string['unlimitedattempts'] = 'Sınırsız';
$string['unlimitedattemptsallowed'] = 'Sınırsız deneme yapılabilir.';
$string['unlimitedpages'] = 'Sınırsız';
$string['unlocksubmissionforstudent'] = 'Öğrenci gönderimlerini kabul edin: (id={$a->id}, fullname={$a->fullname}).';
$string['unlocksubmissions'] = 'Gönderimlerin kilidini aç';
$string['unsavedchanges'] = 'Kaydedilmemiş değişiklikler';
$string['unsavedchangesquestion'] = 'Notlar veya geribildirim için kaydedilmemiş değişiklikler var. Değişiklikleri kaydetmek ve devam etmek istiyor musunuz?';
$string['updategrade'] = 'Notu yükselt';
$string['updatetable'] = 'Tabloyu kaydet ve günle';
$string['upgradenotimplemented'] = 'Eklentiye uygulanamadı ({$a->type} {$a->subtype})';
$string['userassignmentdefaults'] = 'Kullanıcı ataması varsayılanları';
$string['userextensiondate'] = 'Şu zamana kadar ek süre tanındı : {$a}';
$string['usergrade'] = 'Kullanıcı notu';
$string['useridlistnotcached'] = 'Hangi başvuruların bulunduğunu belirlemek mümkün olmadığından, not değişiklikleri kaydedilmedi.';
$string['useroverrides'] = 'Kullanıcı geçersiz kılma';
$string['useroverridesdeleted'] = 'Kullanıcı geçersiz kılmaları silindi';
$string['usersnone'] = 'Hiçbir öğrenci bu ödeve erişemez.';
$string['usersubmissioncannotberemoved'] = '{$a} gönderimi kaldırılamaz.';
$string['userswhoneedtosubmit'] = 'Gönderim yapması gereken kullanıcı: {$a}';
$string['validmarkingworkflowstates'] = 'Geçerli işaretleme iş akışı durumları';
$string['viewadifferentattempt'] = 'Farklı bir denemeyi görüntüle';
$string['viewbatchmarkingallocation'] = 'Toplu ayar işaretleme tahsis sayfasını görüntüleyin.';
$string['viewbatchsetmarkingworkflowstate'] = 'Toplu işaretleme iş akışı durumu sayfasını görüntüleyin.';
$string['viewfeedback'] = 'Geribildirime bak';
$string['viewfeedbackforuser'] = 'Kullanıcıya geri bildirimde bulun: {$a}';
$string['viewfull'] = 'Tümüne bak';
$string['viewfullgradingpage'] = 'Geribildirim sağlamak için tam notlandırma sayfasını açın';
$string['viewgradebook'] = 'Not defterine bak';
$string['viewgrading'] = 'Tüm gönderimleri görüntüleyin';
$string['viewgradingformforstudent'] = 'Öğrenci not verme sayfasını görüntüle: (id={$a->id}, fullname={$a->fullname}).';
$string['viewownsubmissionform'] = 'Kendi gönderim ödev sayfasını görüntüle.';
$string['viewownsubmissionstatus'] = 'Kendi gönderim durumu sayfasını görüntüle.';
$string['viewrevealidentitiesconfirm'] = 'Öğrenci kimlik doğrulama sayfası görüntüle.';
$string['viewsubmission'] = 'Gönderimi görüntüle';
$string['viewsubmissionforuser'] = 'Kullanıcı için gönderimi görüntüle: {$a}';
$string['viewsubmissiongradingtable'] = 'Gönderim notlandırma tablosunu göster.';
$string['viewsummary'] = 'Özete bak';
$string['workflowfilter'] = 'İş akışı filtresi';
$string['xofy'] = '{$a->x} nın {$a->y}';
