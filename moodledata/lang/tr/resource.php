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
 * Strings for component 'resource', language 'tr', version '3.10'.
 *
 * @package     resource
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clicktodownload'] = 'Dosyayı indirmek için {$a} tıklayın';
$string['clicktoopen2'] = 'Dosyayı görmek için {$a} tıklayın';
$string['configdisplayoptions'] = 'Mevcut olması gereken tüm seçenekleri seçin, mevcut ayarlar değiştirilmemiştir. Birden fazla alanı seçmek için CTRL tuşunu basılı tutun.';
$string['configframesize'] = 'Bir web sayfası veya yüklenmiş dosya bir çerçeve içinde gösterildiğinde bu değer, gezinmeyi içeren üst çerçevenin pixel olarak boyutunu ayarlar.';
$string['configparametersettings'] = 'Bazı yeni kaynaklar eklerken formdaki Parametre ayarları paneli için varsayılan değeri ayarlar. İlk seferden sonra, bu bireysel kullanıcı tercihi haline gelir.';
$string['configpopup'] = 'Yeni kaynak eklenirken bu kaynak
açılır  bir pencerede gösterilebilir. Bu seçenek varsayılan olarak etkinleştirilsin mi?';
$string['configpopupdirectories'] = 'Açılır pencereler dizin bağlantılarını gösterecek mi?';
$string['configpopupheight'] = 'Yeni açılır pencereler için varsayılan yükseklik ne olsun?';
$string['configpopuplocation'] = 'Açılır pencereler adres çubuğunu gösterecek mi?';
$string['configpopupmenubar'] = 'Açılır pencereler menü çubuğunu gösterecek mi?';
$string['configpopupresizable'] = 'Açılır pencereler varsayılan olarak boyutlandırılabilir olmalı mı?';
$string['configpopupscrollbars'] = 'Açılır pencereler varsayılan olarak kaydırılabilir olmalı mı?';
$string['configpopupstatus'] = 'Açılır pencereler durum çubuğunu göstermeli mi?';
$string['configpopuptoolbar'] = 'Açılır pencereler araç çubuğunu göstermeli mi?';
$string['configpopupwidth'] = 'Yeni açılır pencereler için varsayılan genişlik ne olsun?';
$string['contentheader'] = 'İçerik';
$string['displayoptions'] = 'Görünüm seçenekleri';
$string['displayselect'] = 'Göster';
$string['displayselect_help'] = 'Bu ayar, dosya türüne ve tarayıcının gömülmeye izin verip vermeyeceğine bakılmaksızın, dosyanın nasıl görüntüleneceğini belirler. Seçenekler arasında şunlar olabilir:

* Otomatik - Dosya türü için en iyi ekran seçeneği otomatik olarak seçilir
* Göm - Dosya, gezinme çubuğunun altındaki sayfada dosya açıklaması ve herhangi bir blokla birlikte görüntülenir
* Force download - Kullanıcıdan dosyayı indirmesi istenir
* Aç - Tarayıcı penceresinde yalnızca dosya görüntülenir
* Açılır pencerede - Dosya, menüler veya adres çubuğu olmadan yeni bir tarayıcı penceresinde görüntülenir
* Kare içi - Dosya, gezinme çubuğunun ve dosya açıklamasının altında bir çerçeve içerisinde görüntülenir
* Yeni pencere - Dosya, menüler ve adres çubuğu bulunan yeni bir tarayıcı penceresinde görüntülenir';
$string['displayselectexplain'] = 'Bir gösterme tipi seçiniz, maalesef tüm tipler tüm dosyalar için uygun değildir.';
$string['dnduploadresource'] = 'Dosya kaynağı oluştur';
$string['encryptedcode'] = 'Şifrelenmiş kod';
$string['filenotfound'] = 'Dosya yok, üzgünüz.';
$string['filterfiles'] = 'Dosya içeriğinde filtre kullan';
$string['filterfilesexplain'] = 'Dosya içeriği filtreleme türünü seçin; bunun, bazı Flash ve Java uygulamaları için sorunlara neden olabileceğini lütfen unutmayın. Lütfen tüm metin dosyalarının UTF-8 kodlamalı olduğundan emin olun.';
$string['filtername'] = 'Kaynak Adları Otomatik-Linkleme';
$string['forcedownload'] = 'İndirmeye zorla';
$string['framesize'] = 'Çerçeve boyutu';
$string['legacyfiles'] = 'Eski ders dosyalarını taşı';
$string['legacyfilesactive'] = 'Etkin';
$string['legacyfilesdone'] = 'Bitti';
$string['modifieddate'] = 'Değiştirilmiş {$a}';
$string['modulename'] = 'Kaynak';
$string['modulename_help'] = 'Dosya modülü, bir öğretmenin bir ders kaynağı olarak bir dosya sağlamasına olanak tanır. Mümkün olduğunda, dosya ders arabirimi içerisinde görüntülenir; Aksi takdirde öğrencilerden indirmeleri istenecektir. Dosya, destekleyici dosyaları içerebilir, örneğin bir HTML sayfasında gömülü resimler veya Flash nesneleri olabilir.

Dosyayı açmak için öğrencilerin bilgisayarlarında uygun yazılıma sahip olmaları gerektiğini unutmayın.

Bir dosya kullanılabilir

* Sınıfta verilen sunumları paylaşmak
* Ders kaynağı olarak mini bir web sitesi eklemek
* Bazı yazılım programlarının taslak dosyalarını (örn. Photoshop .psd) sağlamak, böylece öğrenciler bunları değerlendirme için düzenleyebilir ve gönderebilir';
$string['modulenameplural'] = 'Kaynaklar';
$string['notmigrated'] = 'Üzgünüz, eski kaynak tipi ({$a}) henüz taşınmadı.';
$string['optionsheader'] = 'Seçenekler';
$string['page-mod-resource-x'] = 'Herhangi bir dosya modülü sayfası';
$string['pluginadministration'] = 'Dosya modülü yönetimi';
$string['pluginname'] = 'Kaynak';
$string['popupheight'] = 'Açılır pencere yüksekliği';
$string['popupheightexplain'] = 'Varsayılan açılır pencere yüksekliğini piksel olarak belirtir';
$string['popupresource'] = 'Bu kaynak açılır pencere olarak görünsün.';
$string['popupresourcelink'] = 'Çalışmadıysa burayı tıkla: {$a}';
$string['popupwidth'] = 'Açılır pencere genişiği';
$string['popupwidthexplain'] = 'Varsayılan açılır pencere genişliğini piksel olarak belirtir';
$string['printintro'] = 'Kaynak açıklamasını göster';
$string['printintroexplain'] = 'Kaynak açıklaması içeriğin altında mı gösterilsin? Bazı ekran türleri açık olsa bile açıklama görüntüleyemez.';
$string['resource:addinstance'] = 'Yeni bir kaynak ekle';
$string['resource:exportresource'] = 'Kaynağı dışa ver';
$string['resource:view'] = 'Kaynağa bak';
$string['resourcecontent'] = 'Dosyalar ve alt klasörler';
$string['resourcedetails_sizedate'] = '{$a->size} {$a->date}';
$string['resourcedetails_sizetype'] = '{$a->size} {$a->type}';
$string['resourcedetails_sizetypedate'] = '{$a->size} {$a->type} {$a->date}';
$string['resourcedetails_typedate'] = '{$a->type} {$a->date}';
$string['search:activity'] = 'Kaynak';
$string['selectmainfile'] = 'Lütfen dosya adının yanındaki simgesini tıklayarak ana dosyayı seçin.';
$string['showdate'] = 'Yükleme / değiştirilme tarihini göster';
$string['showdate_desc'] = 'Ders sayfasında yükleme / değiştirilme tarihi görüntülenecek mi?';
$string['showdate_help'] = 'Dosyaya bağlantıların yanında yükle / değiştirilme tarihini görüntüler.

Bu kaynakta birden fazla dosya varsa, başlangıç dosyası yükleme / değiştirilme tarihi görüntülenir.';
$string['showsize'] = 'Boyutu göster';
$string['showsize_desc'] = 'Ders sayfasında dosya boyutunu gösterilsin mi?';
$string['showsize_help'] = 'Dosyaya bağlantıların yanında \'3.1 MB\' gibi dosya boyutunu görüntüler.

Bu kaynakta birden çok dosya varsa, tüm dosyaların toplam boyutu görüntülenir.';
$string['showtype'] = 'Türü göster';
$string['showtype_desc'] = 'Ders sayfasında dosya türünü (ör. \'Word dokümanı\') görüntüleyelim mi?';
$string['showtype_help'] = 'Dosyanın bağlantısının yanında, \'Word belgesi\' gibi dosyanın türünü görüntüler.

Bu kaynakta birden fazla dosya varsa, başlangıç dosya türü görüntülenir.

Dosya türünün sistem tarafından bilinmemesi halinde, görüntülenmez.';
$string['uploadeddate'] = '{$a} öğesine yüklendi';
