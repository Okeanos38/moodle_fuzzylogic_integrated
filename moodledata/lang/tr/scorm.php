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
 * Strings for component 'scorm', language 'tr', version '3.10'.
 *
 * @package     scorm
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activation'] = 'Etkinleştirme';
$string['activityloading'] = 'Otomatik olarak etkinliğe yönlendiriliyorsunuz';
$string['activityoverview'] = 'Dikkate alınması gereken SCORM paketleri var';
$string['activitypleasewait'] = 'Etkinlik yükleniyor, lütfen bekleyin ...';
$string['adminsettings'] = 'Yönetici ayarları';
$string['advanced'] = 'Parametreler';
$string['aicchacpkeepsessiondata'] = 'AICC HACP oturum verileri';
$string['aicchacpkeepsessiondata_desc'] = 'Harici AICC HACP oturum verilerini tutmak için geçen süre (yüksek bir ayar, tabloyu eski verilerle doldurur, ancak hata ayıklarken yararlı olabilir)';
$string['aicchacptimeout'] = 'AICC HACP zamanaşımı';
$string['aicchacptimeout_desc'] = 'Harici bir AICC HACP oturumunun açık kalabileceği dakika cinsinden süre';
$string['aiccuserid'] = 'AICC sayısal kullanıcı kimliği geç';
$string['aiccuserid_desc'] = 'Kullanıcı adları için AICC standardı, Moodle ile karşılaştırıldığında çok kısıtlayıcıdır ve yalnızca alfasayısal karakterler, çizgi ve alt çizgiye izin verir. Dönemler, boşluklar ve @ sembolüne izin verilmiyor. Etkinleştirilirse, kullanıcı kimliği numaraları kullanıcı adları yerine AICC paketine geçirilir.';
$string['aliasonly'] = 'Depodan bir imsmanifest.xml dosyası seçerken, bu dosya için bir takma ad / kısayol kullanmanız gerekir.';
$string['allowapidebug'] = 'API hata ayıklama ve izlemeyi etkinleştir (apidebugmask ile yakalama maskesini ayarlayın)';
$string['allowtypeaicchacp'] = 'Harici AICC HACP\'yi etkinleştir';
$string['allowtypeaicchacp_desc'] = 'Etkinleştirilirse, bu, harici AICC paketinden gelen yayın istekleri için kullanıcı girişi gerektirmeden AICC HACP dış iletişimi sağlar';
$string['allowtypeexternal'] = 'Harici paket tipini etkinleştir';
$string['allowtypeexternalaicc'] = 'Doğrudan AICC URL\'sini etkinleştir';
$string['allowtypeexternalaicc_desc'] = 'Etkinleştirildiğinde, bu, basit bir AICC paketine doğrudan bir url sağlar';
$string['allowtypelocalsync'] = 'İndirilmiş paket tipini etkinleştir';
$string['apidebugmask'] = 'API hata ayıklama yakalama maskesi (örnek düzenli ifade &lt;username&gt;:&lt;activityname&gt;)';
$string['areacontent'] = 'İçerik dosyaları';
$string['areapackage'] = 'Paket tipi';
$string['asset'] = 'Öge';
$string['assetlaunched'] = 'Öge - Bakıldı';
$string['attempt'] = 'Uygulama';
$string['attempt1'] = '1 uygulama';
$string['attempts'] = 'Uygulama (lar)';
$string['attemptsmanagement'] = 'Denemeler Yönetimi';
$string['attemptstatusall'] = 'Kontrol paneli ve giriş sayfası';
$string['attemptstatusentry'] = 'Yalnızca giriş sayfası';
$string['attemptstatusmy'] = 'Yalnızca kontrol paneli';
$string['attemptsx'] = '{$a} uygulama';
$string['attr_error'] = '{$a->tag} etiketinde ({$a->attr}) özelliği için hatalı değer.';
$string['autocommit'] = 'Otomatik tamamlama';
$string['autocommit_help'] = 'Etkinleştirilirse, SCORM verileri otomatik olarak veritabanına kaydedilir. Verilerini düzenli olarak kaydetmeyen SCORM nesneleri için kullanışlıdır.';
$string['autocommitdesc'] = 'SCORM paketi kaydetmezse otomatik olarak SCORM verilerini kaydedin.';
$string['autocontinue'] = 'Otomatik devam et';
$string['autocontinue_help'] = 'Etkinleştirilirse, sonraki öğrenme nesneleri otomatik olarak başlatılır, aksi takdirde Devam düğmesi kullanılmalıdır.';
$string['autocontinuedesc'] = 'Bu seçenek, etkinlik için varsayılan otomatik devam etmeyi ayarlar.';
$string['averageattempt'] = 'Uygulama ortalaması';
$string['badarchive'] = 'Geçerli bir zip dosyası sağlamalısınız';
$string['badimsmanifestlocation'] = 'Bir imsmanifest.xml dosyası bulundu, ancak zip dosyanızın kök dizininde değil, lütfen SCORM\'unuzu yeniden paketleyin';
$string['badmanifest'] = 'Manifest hatası: hata kayıtlarına bakın';
$string['browse'] = 'Önizleme';
$string['browsed'] = 'Gözatıldı';
$string['browsemode'] = 'Önizleme Modu';
$string['browserepository'] = 'Depoya gözat';
$string['calculatedweight'] = 'Hesaplanan ağırlık';
$string['cannotaccess'] = 'Bu betiği bu şekilde arayamazsın';
$string['cannotfindsco'] = 'SCO bulunamadı';
$string['chooseapacket'] = 'Seç veya bir paketi güncelle';
$string['closebeforeopen'] = 'Açılış tarihinden önce bir yakın tarih belirlediniz.';
$string['collapsetocwinsize'] = 'Pencere boyutu aşağıda olduğunda TOC\'yi daralt';
$string['collapsetocwinsizedesc'] = 'Bu ayar, TOC\'nin otomatik olarak çökmesine neden olacağı pencere boyutunu belirtmenizi sağlar.';
$string['compatibilitysettings'] = 'Uyumluluk ayarları';
$string['completed'] = 'Tamamlandı';
$string['completionscorerequired'] = 'Minimum puan isteyin';
$string['completionscorerequired_help'] = 'Bu ayarın etkinleştirilmesi, kullanıcının bu SCORM etkinliğinde ve diğer Etkinlik Tamamlama gereksinimlerinde eksiksiz olarak işaretlenmiş en azından minimum puanı girmesini gerektirir.';
$string['completionstatus_completed'] = 'Tamamlandı';
$string['completionstatus_passed'] = 'Geçti';
$string['completionstatusallscos'] = 'Tüm öğrencilerin tamamlanma durumunu geri vermelerini isteyin';
$string['completionstatusallscos_help'] = 'Bazı SCORM paketleri birden fazla bileşen veya "sco" içerir - bu etkinleştirildiğinde paket içindeki tüm sco\'ların bu aktivitenin tamamlanması için işaretlenmiş olan lesson_status döndürmesi gerekir.';
$string['completionstatusrequired'] = 'Durumu gerekli kıl';
$string['completionstatusrequired_help'] = 'Bir veya daha fazla statüyü kontrol etmek, bu SCORM etkinliğinde ve diğer Etkinlik Tamamlama gereksinimlerinde eksiksiz olarak işaretlenebilmek için kullanıcının bir kontrol durumundan en az birini elde etmesini gerektirir.';
$string['confirmloosetracks'] = 'UYARI: Paket değiştirilmiş veya güncellenmiş görünüyor. Paket yapısı değiştirildiyse bazı kullanıcı izlemeleri güncelleme sırasında kaybolabilir.';
$string['contents'] = 'İçerik';
$string['coursepacket'] = 'Ders paketi';
$string['coursestruct'] = 'Ders yapısı';
$string['currentwindow'] = 'Geçerli pencere';
$string['datadir'] = 'Dosya sistemi hatası: Ders veri klasörü oluşturulamadı.';
$string['defaultdisplaysettings'] = 'Varsayılan ekran ayarları';
$string['defaultgradesettings'] = 'Varsayılan not ayarları';
$string['defaultothersettings'] = 'Diğer varsayılan ayarlar';
$string['deleteallattempts'] = 'Tüm SCORM uygulamalarını sil';
$string['deleteattemptcheck'] = 'Bu girişimleri tamamen silmek istediğinizden emin misiniz?';
$string['deleteselected'] = 'Seçili uygulamaları sil';
$string['deleteuserattemptcheck'] = 'Tüm girişimleri tamamen silmek istediğinizden emin misiniz?';
$string['details'] = 'İzleme ayrıntıları';
$string['directories'] = 'Dizin bağlantılarını göster';
$string['disabled'] = 'Devre dışı bırakıldı';
$string['display'] = 'Paketi göster';
$string['displayactivityname'] = 'Etkinlik ismini görüntüle';
$string['displayactivityname_help'] = 'Etkinlik adını SCORM oynatıcının üstünde görüntüleyip görüntülememek.';
$string['displayattemptstatus'] = 'Uygulama durumunu göster';
$string['displayattemptstatus_help'] = 'Bu tercih, kullanıcıların Gösterge Tablosunda ve / veya SCORM giriş sayfasındaki ders genel bakış blokunda göstermeye çalıştıkları girişimleri özetlenmesine olanak tanır.';
$string['displayattemptstatusdesc'] = 'Bu seçenek, uygulama durum görünümü için varsayılan değeri ayarlar';
$string['displaycoursestructure'] = 'Ders yapısını göster';
$string['displaycoursestructure_help'] = 'Etkinleştirilirse, içindekiler SCORM anahat sayfasında görüntülenir.';
$string['displaycoursestructuredesc'] = 'Bu seçenek, ders yapısı görünümü için varsayılan değeri ayarlar';
$string['displaydesc'] = 'SCORM paketini yeni bir pencerede görüntüleyip görüntülememek.';
$string['displaysettings'] = 'Görüntü ayarları';
$string['dnduploadscorm'] = 'Bir SCORM paketi ekleyin';
$string['domxml'] = 'DOMXML harici kütüphanesi';
$string['duedate'] = 'Bitiş tarihi';
$string['element'] = 'Öge';
$string['enter'] = 'Giriş';
$string['entercourse'] = 'Derse gir';
$string['errorlogs'] = 'Hata kayıtları';
$string['eventattemptdeleted'] = 'Silinmeye çalışıldı';
$string['eventinteractionsviewed'] = 'Görüntülenen etkileşimler';
$string['eventreportviewed'] = 'Görüntülenen rapor';
$string['eventscolaunched'] = 'Sco başlatıldı';
$string['eventscorerawsubmitted'] = 'SCORM ham skoru gönderildi';
$string['eventstatussubmitted'] = 'Gönderilen SCORM durumu';
$string['eventtracksviewed'] = 'İzlemeler Görüntülendi';
$string['eventuserreportviewed'] = 'Görüntülenen kullanıcı raporu';
$string['everyday'] = 'Her gün';
$string['everytime'] = 'Kullandığı her zaman';
$string['exceededmaxattempts'] = 'En fazla uygulama sayısına ulaştınız.';
$string['exit'] = 'Dersten çık';
$string['exitactivity'] = 'Etkinlikten çık';
$string['expired'] = 'Üzgünüz, bu etkinlik {$a} tarihinde kapatılmış ve artık erişilemez';
$string['external'] = 'Harici paket zamanlamasını güncelle';
$string['failed'] = 'Hata oluştu';
$string['finishscorm'] = 'Bu kaynağı görüntülemeyi bitirdiyseniz, {$a}';
$string['finishscormlinkname'] = 'Ders sayfasına geri dönmek için buraya tıklayın';
$string['firstaccess'] = 'İlk erişim';
$string['firstattempt'] = 'İlk uygulama';
$string['floating'] = 'Gezinme';
$string['forcecompleted'] = 'Tamamlamaya zorla';
$string['forcecompleted_help'] = 'Etkinleştirilirse, mevcut girişimin durumu "tamamlandı" zorlanır. (Sadece SCORM 1.2 paketleri için geçerlidir.)';
$string['forcecompleteddesc'] = 'Bu seçenek, tamamlamaya zorla ayarı için varsayılan değeri ayarlar';
$string['forcejavascript'] = 'Kullanıcıları JavaScript\'i etkinleştirmeye zorla';
$string['forcejavascript_desc'] = 'Etkinleştirildiğinde (önerilen), JavaScript bir kullanıcı tarayıcısında desteklenmediğinde / etkinleştirilmediğinde SCORM nesnelerine erişimi engeller. Devre dışı bırakıldığında kullanıcı SCORM\'u görüntüleyebilir ancak API iletişimi başarısız olur ve sınıf bilgisi kaydedilmez.';
$string['forcejavascriptmessage'] = 'Bu nesneyi görmek için JavaScript gereklidir, lütfen tarayıcınızda JavaScript\'i etkinleştirip tekrar deneyin.';
$string['forcenewattempts'] = 'Yeni uygulamaya zorla';
$string['found'] = 'Manifest bulundu';
$string['frameheight'] = 'Bu seçenek sahnenin veya ekranın varsayılan yüksekliğini ayarlar';
$string['framewidth'] = 'Bu seçenek sahnenin veya ekranın varsayılan genişliğini ayarlar';
$string['fromleft'] = 'Soldan';
$string['fromtop'] = 'Üstten';
$string['fullscreen'] = 'Ekranı kapla';
$string['general'] = 'Genel veri';
$string['gradeaverage'] = 'Ortalama not';
$string['gradeforattempt'] = 'Uygulama notu';
$string['gradehighest'] = 'En yüksek not';
$string['grademethod'] = 'Not verme yöntemi';
$string['grademethod_help'] = 'Derecelendirme yöntemi, aktivitenin tek bir girişimi için derecenin nasıl belirlendiğini tanımlar.

4 dereceleme yöntemi vardır:

* Öğrenme nesneleri - Tamamlanan / geçilen öğrenme nesnelerinin sayısı
* En yüksek not - Kabul edilen tüm öğrenme nesnelerinde elde edilen en yüksek puanı
* Ortalama not - Tüm puanlar ortalamaları
* Toplam not - Tüm puanlar toplamı';
$string['grademethoddesc'] = 'Bu seçenek, bir etkinlik için varsayılan not verme değerini ayarlar';
$string['gradereported'] = 'Not verme raporu';
$string['gradescoes'] = 'Öğrenme Nesneleri';
$string['gradesettings'] = 'Derece ayarları';
$string['gradesum'] = 'Notları topla';
$string['height'] = 'Yükseklik';
$string['hidden'] = 'Gizli';
$string['hidebrowse'] = 'Önizleme modunu kapat';
$string['hidebrowse_help'] = 'Ön izleme modu, bir öğrencinin denemeden önce bir etkinliğe göz atmasına izin verir. Önizleme modu devre dışı bırakılırsa önizleme düğmesi gizlenir.';
$string['hidebrowsedesc'] = 'Bu seçenek, önizleme modunun etkin olup olmayacağını ayarlar';
$string['hideexit'] = 'Çıkış bağlantısını gizle';
$string['hidereview'] = 'Önizleme düğmesini gizle';
$string['hidetoc'] = 'Ders yapısı görünümü (İçindekiler)';
$string['hidetoc_help'] = 'SCORM oynatıcıda içindekiler tablosu nasıl görüntülenir?';
$string['hidetocdesc'] = 'Bu seçenek, ders yapısı görünümünün (İçindekiler) gösterilip gösterilmeyeceğini ayarlar';
$string['highestattempt'] = 'En yüksek uygulama';
$string['identifier'] = 'Soru Tanımlayıcısı';
$string['incomplete'] = 'Tamamlanmadı';
$string['info'] = 'Bilgi';
$string['interactions'] = 'Etkileşimler';
$string['invalidactivity'] = 'Scorm etkinliği hatalı';
$string['invalidhacpsession'] = 'Geçersiz HACP oturumu';
$string['invalidmanifestname'] = 'Only imsmanifest.xml or .zip files may be selected';
$string['invalidmanifestresource'] = 'UYARI: Aşağıdaki kaynaklar bildiriminizde referans alınmış ancak bulunamadı:';
$string['invalidurl'] = 'Geçersiz URL belirtildi';
$string['invalidurlhttpcheck'] = 'Geçersiz URL belirtildi. Hata ayıklama iletisi:<pre>{$a->cmsg}</pre>';
$string['last'] = 'Son erişim tarihi';
$string['lastaccess'] = 'Son erişim';
$string['lastattempt'] = 'Son uygulama';
$string['lastattemptlock'] = 'Son uygulamadan sonra kilitle';
$string['lastattemptlock_help'] = 'Etkinleştirilirse, bir öğrencinin tahsis edilen tüm denemelerini kullandıktan sonra SCORM oynatıcıyı başlatması engellenir.';
$string['lastattemptlockdesc'] = 'Bu seçenek, son uygulamadan sonra kilit ayarının varsayılan değerini ayarlar';
$string['location'] = 'Adres çubuğunu göster';
$string['masteryoverride'] = 'Mastery skor durumu geçersiz kılar.';
$string['masteryoverride_help'] = 'Etkinleştirildiğinde ve hakimlik skoru sağlandığı zaman, LMSFinish çağrıldığında ve ham skor ayarlandıysa, durum ham skor ve mastery skoru kullanılarak yeniden hesaplanacak ve SCORM tarafından sağlanan herhangi bir durum ("eksik" de dahil olmak üzere) geçersiz kılınacaktır.';
$string['masteryoverridedesc'] = 'Bu tercih, mastery score geçersiz kılma ayarı için varsayılanı ayarlar';
$string['max'] = 'Max puan';
$string['maximumattempts'] = 'Uygulama sayısı';
$string['maximumattempts_help'] = 'Bu ayar, denenme sayısının kısıtlanmasını sağlar. Yalnızca SCORM 1.2 ve AICC paketleri için geçerlidir.';
$string['maximumattemptsdesc'] = 'Bu seçenek, bir etkinlik için en fazla uygulama sayısını ayarlar';
$string['maximumgradedesc'] = 'Bu seçenek, bir etkinlik için verilebilecek en fazla notu ayarlar';
$string['menubar'] = 'Menü çubuğunu göster';
$string['min'] = 'Min puan';
$string['missing_attribute'] = '{$a->tag} etiketi içinde hatalı {$a->attr} özelliği';
$string['missing_tag'] = 'Hatalı tag {$a->tag}';
$string['missingparam'] = 'Gerekli bir alan eksik veya hatalı';
$string['mode'] = 'Mod';
$string['modulename'] = 'SCORM/AICC';
$string['modulename_help'] = 'Bir SCORM paketi, nesneleri öğrenmek için üzerinde anlaşmaya varılan bir standarda göre paketlenmiş dosyalardır. SCORM etkinlik modülü, SCORM veya AICC paketlerinin bir zip dosyası olarak yüklenmesini ve bir kursa eklenmesini sağlar.

İçerik genellikle birkaç sayfa üzerinden görüntülenir ve sayfalar arasında gezinme yapılır. Bir pop-up pencerede içeriği görüntülemek için, içindekiler tablosu, gezinme düğmeleri vb. Ile çeşitli seçenekleri görüntüler. SCORM aktiviteleri genel olarak notları dereceli deftere kaydedilen sorular içerir.

SCORM faaliyetleri kullanılabilir

* Multimedya içeriği ve animasyonları sunmak için
* Bir değerlendirme aracı olarak';
$string['modulenameplural'] = 'SCORM/AICC';
$string['nav'] = 'Gezinmeyi Göster';
$string['nav_help'] = 'Bu ayar, gezinme düğmelerinin ve konumlarının gösterilip gösterilmeyeceğini veya gizleneceğini belirtir.

3 seçenek var:

* Hayır - Gezinme düğmeleri gösterilmiyor
* İçerik altında - Gezinme düğmeleri SCORM paket içeriğinin altında gösterilir
* Yüzen - Gezinme düğmeleri yüzen olarak gösterilir; üstten ve soldan pakete göre belirlenir.';
$string['navdesc'] = 'Bu ayar, gezinme düğmelerinin ve konumlarının gösterilip gösterilmeyeceğini veya gizlenip gizlenmeyeceğini belirtir.';
$string['navigation'] = 'Gezinme';
$string['navpositionleft'] = 'Gezinme düğmelerinin piksel cinsinden konumu.';
$string['navpositiontop'] = 'Gezinme düğmelerinin üstten piksel olarak konumlandırılması.';
$string['networkdropped'] = 'SCORM çalar internet bağlantınızın güvenilmez olduğunu veya kesintiye uğradığını belirlemiştir. Bu SCORM etkinliğine devam ederseniz ilerleme kaydedilemeyebilir. <br />
Şimdi etkinlikten çıkıp güvenilir bir İnternet bağlantınız olduğunda geri dönmelisiniz.';
$string['newattempt'] = 'Yeni bir uygulama başlat';
$string['next'] = 'Devam et';
$string['no_attributes'] = '{$a->tag} etiketinin özellikleri olmalı';
$string['no_children'] = '{$a->tag} etiketinin alt ögeleri olmalı';
$string['noactivity'] = 'Rapor edilecek bir şey yok';
$string['noattemptsallowed'] = 'İzin verilen uygulama sayısı';
$string['noattemptsmade'] = 'Yaptığınız uygulama sayısı';
$string['nolimit'] = 'Sınırsız uygulama';
$string['nomanifest'] = 'Manifest bulunamadı';
$string['noprerequisites'] = 'Üzgünüz, bu öğrenme nesnesine erişmek için gerekli ön şartları yerine getirmediniz.';
$string['noreports'] = 'Gösterilecek rapor yok';
$string['normal'] = 'Normal';
$string['noscriptnoscorm'] = 'Tarayıcınız javascripti desteklemiyor veya etkinleştirmediniz. Bu SCORM paketi gösterilmeyebilir veya veriler doğru bir şekilde kaydedilmeyebilir.';
$string['not_corr_type'] = '{$a->tag} etiketi için tip uyumsuzluğu';
$string['notattempted'] = 'Uygulanmadı';
$string['notopenyet'] = 'Üzgünüz, bu etkinliğe {$a} tarihine kadar erişemezsiniz.';
$string['objectives'] = 'Amaçlar';
$string['optallstudents'] = 'tüm kullanıcılar';
$string['optattemptsonly'] = 'yalnızca denemeleri olan kullanıcılar';
$string['options'] = 'Seçenekler';
$string['optionsadv'] = 'Seçenekler (Gelişmiş)';
$string['optionsadv_desc'] = 'İşaretlenirse, genişlik ve yükseklik gelişmiş ayarlar olarak listelenir.';
$string['optnoattemptsonly'] = 'Yalnızca girişiminde bulunmayan kullanıcılar';
$string['organization'] = 'Düzenleme';
$string['organizations'] = 'Düzenlemeler';
$string['othersettings'] = 'Ek ayarlar';
$string['package'] = 'Paket dosyası';
$string['package_help'] = 'Paket dosyası SCORM / AICC ders tanım dosyalarını içeren bir zip (veya pif) dosyasıdır.';
$string['packagedir'] = 'Dosya sistemi hatası: Klasör oluşturulamıyor';
$string['packagefile'] = 'Paket dosyası belirtilmedi';
$string['packagehdr'] = 'Paket';
$string['packageurl'] = 'URL';
$string['packageurl_help'] = 'Bu ayar, dosya seçici aracılığıyla bir dosya seçmek yerine, SCORM paketi için bir URL\'yi belirtmenizi sağlar.';
$string['page-mod-scorm-x'] = 'Herhangi bir SCORM modülü sayfası';
$string['pagesize'] = 'Sayfa boyutu';
$string['passed'] = 'Geçti';
$string['php5'] = 'PHP 5 (DOMXML doğal kütüphansesi)';
$string['pluginadministration'] = 'SCORM paket yönetimi';
$string['pluginname'] = 'SCORM paketi';
$string['popup'] = 'Yeni pencere';
$string['popuplaunched'] = 'Bu SCORM paketi bir açılır pencerede başlatılmıştır, bu kaynağı görüntülemeyi bitirdiyseniz, ders sayfasına dönmek için burayı tıklayın';
$string['popupmenu'] = 'Açılır menüde';
$string['popupopen'] = 'Paketi yeni bir pencerede aç';
$string['popupsblocked'] = 'Açılır pencerelerin engellendiği ve bu SCORM paketinin oynatılmasının durdurulduğu anlaşılıyor. Lütfen tekrar denemeden önce tarayıcı ayarlarınızı kontrol edin.';
$string['position_error'] = '{$a->tag} etiketi, {$a->parent} etiketinin alt ögesi olamaz.';
$string['preferencespage'] = 'Bu sayfa için tercihler';
$string['preferencesuser'] = 'Bu rapor için tercihler';
$string['prev'] = 'Önceki';
$string['protectpackagedownloads'] = 'Paket indirme işlemlerini koruma';
$string['protectpackagedownloads_desc'] = 'Etkinleştirilirse, SCORM paketleri yalnızca kullanıcının ders yöneticisi etkinlik yeteneği varsa indirilebilir. Devre dışı bırakılırsa, SCORM paketleri her zaman indirilebilir (mobil veya diğer yollarla).';
$string['raw'] = 'Ham puan';
$string['regular'] = 'Düzenli Manifest';
$string['report'] = 'Rapor';
$string['reportcountallattempts'] = 'Toplam {$a->nbresults} sonuçtan {$a->nbusers} kullanıcı için {$a->nbattempts} deneme';
$string['reportcountattempts'] = '{$a->nbresults} sonuç ({$a->nbusers} users)';
$string['reports'] = 'Raporlar';
$string['repositorynotsupported'] = 'Bu depo doğrudan imsmanifest.xml dosyasına bağlanmayı desteklemez.';
$string['response'] = 'Yanıt';
$string['result'] = 'Sonuç';
$string['results'] = 'Sonuç';
$string['review'] = 'Önizleme';
$string['reviewmode'] = 'Önizleme Modu';
$string['rightanswer'] = 'Doğru cevap';
$string['scoes'] = 'Öğrenme Nesneleri';
$string['score'] = 'Puan';
$string['scorm:addinstance'] = 'Yeni bir SCORM paketi ekleyin';
$string['scorm:deleteownresponses'] = 'Kendi girişimlerini sil';
$string['scorm:deleteresponses'] = 'Kullanıcı SCORM uygulamalarını sil';
$string['scorm:savetrack'] = 'İzlemeleri kaydet';
$string['scorm:skipview'] = 'Gözgeçirmeyi atla';
$string['scorm:viewreport'] = 'Raporlara bak';
$string['scorm:viewscores'] = 'Notlara bak';
$string['scormclose'] = 'Bitiş';
$string['scormcourse'] = 'Öğrenme Dersi';
$string['scormloggingoff'] = 'API kaydı kapalı';
$string['scormloggingon'] = 'API kaydı açık';
$string['scormopen'] = 'Açık';
$string['scormresponsedeleted'] = 'Kullanıcı uygulamaları silindi';
$string['scormtype'] = 'Tip';
$string['scormtype_help'] = 'Bu ayar, paketin derste nasıl dahil edileceğini belirler. 4 seçeneğe kadar var:

* Yüklenen paket - Dosya seçici aracılığıyla bir SCORM paketinin seçilmesini sağlar
* Dış SCORM manifest - İmsmanifest.xml URL\'nin belirtilmesini sağlar. Not: URL\'nin sitenizden farklı bir etki alanı adı varsa, "İndirilen paketi" daha iyi bir seçenektir, aksi takdirde notlar kaydedilmediğinden.
* İndirilen paketi - Belirtilecek bir paket URL\'sini etkinleştirir. Paketi yerel olarak açılmış ve kaydedilmiş olacak ve dış SCORM paketi güncellendiğinde güncellenecektir.
* Harici AICC URL\'si - bu URL, tek bir AICC Etkinliği için başlatılan URL\'dir. Bunun etrafında bir psuedo paketi inşa edilecek.';
$string['scrollbars'] = 'Kaydırma çubuğuna izin ver';
$string['search:activity'] = 'SCORM paketi - etkinlik bilgileri';
$string['selectall'] = 'Tümünü seç';
$string['selectnone'] = 'Tüm seçimleri kaldır';
$string['show'] = 'Göster';
$string['sided'] = 'Sol tarafta';
$string['skipview'] = 'Öğrenci içerik yapısı atlaması sayfası';
$string['skipview_help'] = 'Bu ayar, içerik yapısı sayfasının hiç atlanıp atlanmayacağını (görüntülenmez) belirtir. Paket tek bir öğrenme nesnesi içeriyorsa, içerik yapısı sayfası her zaman atlanabilir.';
$string['skipviewdesc'] = 'Bu tercih, bir sayfa için içerik yapısını atlama zamanı için varsayılanı belirler';
$string['slashargs'] = 'UYARI: eğik çizgi bağımsız değişkenleri bu sitede devre dışı bırakılmıştır ve nesneler beklendiği gibi çalışmayabilir!';
$string['stagesize'] = 'Sahne boyutu';
$string['stagesize_help'] = 'Bu iki ayar, öğrenme nesneleri için çerçeve / pencere genişliği ve yüksekliğini belirtir.';
$string['started'] = 'Başlama tarihi';
$string['status'] = 'Durum';
$string['statusbar'] = 'Durum çubuğunu göster';
$string['student_response'] = 'Verilen yanıt';
$string['subplugintype_scormreport'] = 'Rapor';
$string['subplugintype_scormreport_plural'] = 'Raporlar';
$string['suspended'] = 'Durduruldu';
$string['syntax'] = 'Yazım hatası';
$string['tag_error'] = 'Bu içerikte bilinmeyen bir etiket ({$a->tag}) var: {$a->value}';
$string['time'] = 'Zaman';
$string['title'] = 'Başlık';
$string['toc'] = 'TOC';
$string['too_many_attributes'] = '{$a->tag} etiketinin çok fazla özelliği var';
$string['too_many_children'] = '{$a->tag} etiketinin çok fazla alt ögesi var';
$string['toolbar'] = 'Araç çubuğunu göster';
$string['totaltime'] = 'Zaman';
$string['trackcorrectcount'] = 'Doğru sayım';
$string['trackcorrectcount_help'] = 'Soru için doğru sonuç sayısı';
$string['trackid'] = 'Kimlik';
$string['trackid_help'] = 'Bu, SCORM paketiniz tarafından bu soru için belirlenen tanımlayıcıdır; SCORM belirtimi, tam soru metninin verilmesine izin vermez.';
$string['trackingloose'] = 'UYARI: Bu paketin izleme verisi kaybolacak!';
$string['tracklatency'] = 'Gecikme';
$string['tracklatency_help'] = 'Sorunun öğrenciye bir yanıt alınması zamanı ile ilk yanıtın zamanı arasında geçen süre.';
$string['trackpattern'] = 'Model';
$string['trackpattern_help'] = 'Bu sorunun cevabının doğru olması, öğrencilerin yanıtını göstermez.';
$string['trackresponse'] = 'Yanıt';
$string['trackresponse_help'] = 'Bu, öğrencinin bu soru için verdiği cevaptır';
$string['trackresult'] = 'Sonuç';
$string['trackresult_help'] = 'Öğrencinin doğru cevabı girip girmediğini gösterir.';
$string['trackscoremax'] = 'Maksimum puan';
$string['trackscoremax_help'] = 'Ham puana atanabilecek maksimum değer';
$string['trackscoremin'] = 'Minimum puan';
$string['trackscoremin_help'] = 'Ham puana atanabilecek minimum değer';
$string['trackscoreraw'] = 'Ham puan';
$string['trackscoreraw_help'] = 'Minimum ve max değerleriyle sınırlanan aralığa göre öğrenicinin performansını yansıtan sayı';
$string['tracksuspenddata'] = 'Veriyi askıya alma';
$string['tracksuspenddata_help'] = 'Öğrenci oturumları arasında veri depolamak ve almak için alan sağlar';
$string['tracktime'] = 'Süre';
$string['tracktime_help'] = 'Girişimin başladığı saat';
$string['tracktype'] = 'Tür';
$string['tracktype_help'] = 'Soru türü, örneğin "seçim" veya "kısacevapl".';
$string['trackweight'] = 'Ağırlık';
$string['trackweight_help'] = 'Puan hesaplanırken soruna atanan ağırlık.';
$string['type'] = 'Tip';
$string['typeaiccurl'] = 'Harici AICC URL\'si';
$string['typeexternal'] = 'Harici SCORM manifest';
$string['typelocal'] = 'Yüklenmiş paket';
$string['typelocalsync'] = 'İndirilmiş paket';
$string['undercontent'] = 'Içerik altında';
$string['unziperror'] = 'Paket açılırken hata oluştu';
$string['updatefreq'] = 'Otomatik-güncelleme sıklığı';
$string['updatefreq_error'] = 'Otomatik güncelleştirme sıklığı yalnızca paket dosyası dışarıdan barındırıldığında ayarlanabilir';
$string['updatefreq_help'] = 'Bu, dış paketin otomatik olarak indirilip güncellenmesini sağlar';
$string['updatefreqdesc'] = 'Bu tercih, bir etkinliğin varsayılan otomatik güncelleme sıklığını ayarlar';
$string['validateascorm'] = 'Bir paketi denetle';
$string['validation'] = 'Denetleme sonucu';
$string['validationtype'] = 'Bu seçenek SCORM paketindeki manifest dosyasınının geçerliliğini denetlemek için DOMXML kütüphanesinin kullanımını ayarlar. Ne yaptığınızı bilmiyorsanız seçili olanı bırakın.';
$string['value'] = 'Değer';
$string['versionwarning'] = 'Manifest sürümü 1.3\'den daha eski, {$a->tag} etiketinde uyarı';
$string['viewallreports'] = '{$a} uygulama raporuna bak';
$string['viewalluserreports'] = '{$a} uygulama raporuna bak';
$string['whatgrade'] = 'Uygulama notu';
$string['whatgrade_help'] = 'Birden çok girişime izin verilirse, bu ayar, en yüksek, ortalama (ortalama), ilk veya son tamamlanan girişimin not defterine kaydedilip kaydedilmeyeceğini belirtir. Son tamamlanan girişimi seçeneği, \'başarısız\' durumdaki girişimleri içermez.

Birden fazla girişimi işleme hakkında notlar:

* Yeni bir deneme başlatma seçeneği, içerik yapısı sayfasındaki Giriş düğmesinin üzerindeki bir onay kutusu tarafından sağlanır; bu nedenle, birden fazla girişimde bulunmak istiyorsanız, o sayfaya erişim sağladığınızdan emin olun.
* Bazı SCORM paketleri yeni denemeler hakkında akılcıdır, pek çoğu değildir. Bunun anlamı, öğrenen mevcut bir girişimi tekrar girerse, SCORM içeriği önceki girişimlerin üzerine yazılmasını önlemek için iç mantığa sahip değilse, girişimi "tamamlandı" veya "geçti" olsa bile üzerine yazılabilir.
* "Zorla tamamlandı", "Yeni girişimi zorla" ve "Son girişimden sonra kilitle" ayarları da birden fazla denemenin daha fazla yönetimini sağlar.';
$string['whatgradedesc'] = 'Birden çok deneme yapılıyorsa, en yüksek, ortalama (ortalama), ilk veya en son tamamlanan girişimi dereceli kitapta kaydedilir.';
$string['width'] = 'Genişlik';
$string['window'] = 'Pencere';
$string['youmustselectastatus'] = 'İstemek için bir durum seçmelisiniz';
