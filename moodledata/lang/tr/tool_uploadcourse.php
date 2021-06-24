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
 * Strings for component 'tool_uploadcourse', language 'tr', version '3.10'.
 *
 * @package     tool_uploadcourse
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowdeletes'] = 'Silmelere izin ver';
$string['allowdeletes_help'] = 'Silme alanının kabul edilip edilmediği.';
$string['allowrenames'] = 'Yeniden isimlendirmeye izin ver';
$string['allowrenames_help'] = 'Yeniden adlandırma alanının kabul edilip edilmediği.';
$string['allowresets'] = 'Sıfırlamaya izin ver';
$string['allowresets_help'] = 'Sıfırlama alanının kabul edilip edilmediği.';
$string['cachedef_helper'] = 'Önbelleğe alma Yardımcısı';
$string['cannotdeletecoursenotexist'] = 'Ders mevcut olmadığı için silinemiyor';
$string['cannotgenerateshortnameupdatemode'] = 'Güncellemelere izin verildiğinde kısa ad üretilemiyor';
$string['cannotreadbackupfile'] = 'Yedekleme dosyası okunamıyor';
$string['cannotrenamecoursenotexist'] = 'Ders mevcut olmadığı için yeniden adlandırılamıyor';
$string['cannotrenameidnumberconflict'] = 'Kursa yeniden adlandırılamıyor, Aynı kimlik numarasına sahip başka bir kurs var';
$string['cannotrenameshortnamealreadyinuse'] = 'Kursa yeniden adlandırılamıyor, Bu kısa isim başka bir kurs için kullanılıyor';
$string['cannotupdatefrontpage'] = 'Ön sayfayı değiştirmek yasaktır';
$string['canonlyrenameinupdatemode'] = 'Sadece güncelleme için izin verilen kursu yeniden adlandırabilirsiniz.';
$string['canonlyresetcourseinupdatemode'] = 'Sadece güncelleme modunda bir ders sıfırlayabilirsiniz';
$string['couldnotresolvecatgorybyid'] = 'Kategori Kimliği çözümlenemedi';
$string['couldnotresolvecatgorybyidnumber'] = 'Kategori kimlik numarasına göre çözülemedi';
$string['couldnotresolvecatgorybypath'] = 'Kategori yola göre çözümlenemedi';
$string['coursecreated'] = 'Kurs eklendi';
$string['coursedeleted'] = 'Kurs silindi';
$string['coursedeletionnotallowed'] = 'Kurs silmeye izin verilimiyor';
$string['coursedoesnotexistandcreatenotallowed'] = 'Kurs mevcut değil ve yeni kurs eklemeye izin verilmiyor';
$string['courseexistsanduploadnotallowed'] = 'Kurs mevcut fakat güncellemeye izin verilmiyor';
$string['coursefile'] = 'Dosya';
$string['coursefile_help'] = 'Dosya CSV biçiminde olmalı';
$string['courseidnumberincremented'] = 'Artan ders kimliği numarası {$a->from} -> {$a->to}';
$string['courseprocess'] = 'Ders süreci';
$string['courserenamed'] = 'Kurs yeniden adlandırıldı';
$string['courserenamingnotallowed'] = 'Kursun yeniden adlandırılmasına izin verilmiyor';
$string['coursereset'] = 'Kurs sıfırlama';
$string['courseresetnotallowed'] = 'Kurs sıfırlamaya izin verilmiyor';
$string['courserestored'] = 'Kurs geri yüklendi';
$string['coursescreated'] = 'Kurs eklendi: {$a}';
$string['coursesdeleted'] = 'Kurs silindi: {$a}';
$string['courseserrors'] = 'Ders hataları:';
$string['courseshortnamegenerated'] = 'Dersin kısa adı oluşturuldu: {$a}';
$string['courseshortnameincremented'] = 'Artan ders kısa adı  {$a->from} -> {$a->to}';
$string['coursestotal'] = 'Toplam ders sayısı:  {$a}';
$string['coursesupdated'] = 'Dersler güncellendi: {$a}';
$string['coursetemplatename'] = 'Yükledikten sonra bu dersden geri yükleyin';
$string['coursetemplatename_help'] = 'Tüm derslerin oluşturulması için şablon olarak kullanılacak mevcut bir ders kısa adını girin.';
$string['coursetorestorefromdoesnotexist'] = 'Geri yüklenecek edilecek ders mevcut değil';
$string['courseupdated'] = 'Kurs güncellendi';
$string['createall'] = 'Tümünü oluştur, gerekirse kısa adını arttır';
$string['createnew'] = 'Yalnızca yeni dersler oluşturun, mevcut dersleri atlayın';
$string['createorupdate'] = 'Yeni dersler oluşturma veya mevcut dersleri güncelleme';
$string['csvdelimiter'] = 'CSV sınırlayıcı';
$string['csvdelimiter_help'] = 'CSV dosyasının CSV sınırlayıcısı.';
$string['csvfileerror'] = 'CSV dosyasının biçimi ile ilgili bir sorun var. Lütfen eşleşen başlık ve sütun sayısını ve sınırlayıcı ile dosya kodlamasının doğru olduğunu kontrol edin: {$a}';
$string['csvline'] = 'Satır';
$string['defaultvalues'] = 'Varsayılan ders değerleri';
$string['encoding'] = 'Şifreleme';
$string['encoding_help'] = 'CSV dosyasının şifrelemesi.';
$string['errorwhiledeletingcourse'] = 'Ders silinirken hata oluştu';
$string['errorwhilerestoringcourse'] = 'Ders geri yüklenirken hata oluştu';
$string['generatedshortnamealreadyinuse'] = 'Oluşturulan kısa ad zaten kullanımdadır';
$string['generatedshortnameinvalid'] = 'Oluşturulan kısa ad geçersiz';
$string['id'] = 'Kimlik';
$string['idnumberalreadyinuse'] = 'Bir ders tarafından halihazırda kullanılan kimlik numarası';
$string['importoptions'] = 'İçe aktarma seçenekleri';
$string['invalidbackupfile'] = 'Geçersiz yedek dosyası';
$string['invalidcourseformat'] = 'Geçersiz ders formatı';
$string['invalidcsvfile'] = 'Geçersiz giriş CSV dosyası';
$string['invalidencoding'] = 'Geçersiz şifreleme';
$string['invalideupdatemode'] = 'Geçersiz güncelleme modu seçildi';
$string['invalidmode'] = 'Geçersiz mod seçildi';
$string['invalidroles'] = 'Geçersiz rol adları: {$a}';
$string['invalidshortname'] = 'Geçersiz kısa ad';
$string['missingmandatoryfields'] = 'Zorunlu alanlar için eksik değer: {$a}';
$string['missingshortnamenotemplate'] = 'Eksik kısa ad ve kısa ad şablonu ayarlanmadı';
$string['mode'] = 'Yükleme modu';
$string['mode_help'] = 'Bu, kursların oluşturulup oluşturulamayacağını ve/veya güncelleneceğini belirtmenizi sağlar.';
$string['nochanges'] = 'Değişiklik yok';
$string['pluginname'] = 'Dersi yükle';
$string['preview'] = 'Önizleme';
$string['reset'] = 'Yükledikten sonra dersi sıfırlayın';
$string['reset_help'] = 'Dersi oluşturduktan/güncelleştirdikten sonra kuralı sıfırlamalı mı';
$string['restoreafterimport'] = 'İçe aktarmadan sonra geri yükle';
$string['result'] = 'Sonuç';
$string['rowpreviewnum'] = 'Satırları önizleme';
$string['rowpreviewnum_help'] = 'Bir sonraki sayfada önizlenecek olan CSV dosyasındaki satır sayısı.
Bu seçenek,
Sonraki sayfa boyutunu sınırlamak için düzenleyin.';
$string['shortnametemplate'] = 'Kısa isim oluşturmak için şablon';
$string['shortnametemplate_help'] = 'Dersin kısa adı navigasyonda gösterilir. Şablon sözdizimini burada (%f = fullname,%i = idnumber) kullanabilir veya artırılan bir başlangıç değeri girebilirsiniz.';
$string['templatefile'] = 'Yükledikten sonra bu dosyadan geri yükle';
$string['templatefile_help'] = 'Tüm derslerin oluşturulması için bir şablon olarak kullanılacak bir dosya seçin.';
$string['unknownimportmode'] = 'Bilinmeyen içe aktarma modu';
$string['updatemissing'] = 'CSV verilerinden eksik öğeleri ve varsayılanları doldurun';
$string['updatemode'] = 'Güncelleme modu';
$string['updatemode_help'] = 'Derslerin güncellenmesine izin verirseniz, aracı aradığı dersleri ne güncelleyeceğini de söylemelisiniz.';
$string['updatemodedoessettonothing'] = 'Güncelleme modu hiçbir şeyin güncellenmesine izin vermiyor';
$string['updateonly'] = 'Sadece mevcut kursları güncelle';
$string['updatewithdataonly'] = 'Sadece CVS verilerini güncelle';
$string['updatewithdataordefaults'] = 'CVS verilerini ve varsayılanları güncelle';
$string['uploadcourses'] = 'Kursu yükle';
$string['uploadcourses_help'] = 'Kurslar metin dosyası üzerinden yüklenebilir. Dosyanın biçimi aşağıdaki gibi olmalıdır:

* Dosyanın her satırı tek bir kayıt içerir
* Her kayıt, virgüller (veya diğer sınırlayıcılar) ile ayrılmış bir dizi veri olup,
* İlk kayıt, dosyanın geri kalan bölümünü tanımlayan alan adlarının bir listesini içerir
* Gerekli alan adları kısa adı, tam adı ve kategoridir.';
$string['uploadcoursespreview'] = 'Yüklenen kurs önizlemesi';
$string['uploadcoursesresult'] = 'Kurs yükeame sonuçları';
