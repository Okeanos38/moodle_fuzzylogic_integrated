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
 * Strings for component 'plugin', language 'tr', version '3.10'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Eylemler';
$string['availability'] = 'Uygunluk';
$string['cancelinstallall'] = 'Yeni kurulumları iptal et ({$a})';
$string['cancelinstallhead'] = 'Eklentilerin kurulumunu iptal etme';
$string['cancelinstallinfo'] = 'Aşağıdaki eklentiler henüz tam olarak yüklenmediğinden yükleme işlemi iptal edilmiş olabilir. Bunu yapmak için eklenti klasörü şimdi sunucudan kaldırılmalıdır. Bunun yanlışlıkla veri kaybını önlemek istediğiniz şeyden (kendi kod değişiklikleriniz gibi) emin olun.';
$string['cancelinstallinfodir'] = 'Silinecek klasör: {$a}';
$string['cancelinstallone'] = 'Bu yüklemeyi iptal et';
$string['cancelupgradeall'] = 'Yeni sürüme yükseltmeyi iptal et ({$a})';
$string['cancelupgradehead'] = 'Eklentilerin önceki sürümünü geri yükleme';
$string['cancelupgradeone'] = 'Bu güncellemeyi iptal et';
$string['checkforupdates'] = 'Güncellemeleri kontrol et';
$string['checkforupdateslast'] = 'Son kontrol yapıldı {$a}';
$string['dependencyavailable'] = 'Mevcut';
$string['dependencyfails'] = 'Başarısız';
$string['dependencyinstall'] = 'Kur';
$string['dependencyinstallhead'] = 'Eksik bağımlılıkları yükleme';
$string['dependencyinstallmissing'] = 'Eksik bağımlılıkları yükleyin ({$a})';
$string['dependencymissing'] = 'Eksik';
$string['dependencyunavailable'] = 'Mevcut değil';
$string['dependencyupload'] = 'Yükle';
$string['dependencyuploadmissing'] = 'ZIP dosyalarını yükle';
$string['detectedmisplacedplugin'] = 'Eklenti "{$a->component}" yanlış yere yüklendi "{$a->current}", yüklenmesi gereken yer "{$a->expected}"';
$string['displayname'] = 'Eklenti adı';
$string['err_response_curl'] = 'Uygun güncelleme verisi açılamıyor - beklenmeyen cURL hatası.';
$string['err_response_format_version'] = 'Beklenmeyen yanıt. Lütfen uygun güncellemeleri yeniden kontrol edin.';
$string['err_response_http_code'] = 'Uygun güncelleme verisi açılamıyor - beklenmeyen HTTP yanıt kodu.';
$string['filterall'] = 'Tümünü göster';
$string['filtercontribonly'] = 'Sadece eklentileri göster';
$string['filterupdatesonly'] = 'Sadece güncellenenleri göster';
$string['misdepinfoplugin'] = 'Eklenti bilgisi';
$string['misdepinfoversion'] = 'Sürüm bilgisi';
$string['misdepsavail'] = 'Mevcut olan eksik bağımlılıklar';
$string['misdepsunavail'] = 'Mevcut olmayan eksik bağımlılıklar';
$string['misdepsunavaillist'] = 'Bağımlılık gereksinimlerini karşılayan herhangi bir sürüm bulunamadı: {$a}.';
$string['misdepsunknownlist'] = 'Eklentiler dizininde değil: <strong>{$a}</ strong>.';
$string['moodleversion'] = 'Moddle {$a}';
$string['noneinstalled'] = 'Bu tip bir eklenti yüklenmedi';
$string['notdownloadable'] = 'Paket indirilemiyor';
$string['notdownloadable_help'] = 'Güncellemeden sonra ZIP dosyaları otomatik olarak indirilemiyor. Daha fazla yardım için lütfen destek sayfasına başvurun.';
$string['notes'] = 'Notlar';
$string['notwritable'] = 'Eklenti dosyaları yazılabilir değil';
$string['notwritable_help'] = 'Otomatik güncellemeleri etkinleştiriniz ve suan bu eklenti için bir güncelleme mevcut. Ancak web sunucunuzdaki eklenti dosyalarının üzerine yazılamıyor. Bu yüzden otomatik güncelleme yapılamıyor.

Bu güncellemeyi otomatik olarak yapabilmeniz için eklenti klasörü ve tüm içeriğinin yazılabilir yapman gerekiyor.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Tüm eklentiler';
$string['overviewext'] = 'İlave eklentiler';
$string['overviewupdatable'] = 'Mevcut güncellemeler';
$string['packagesdebug'] = 'Hata ayıklama çıktısı etkin';
$string['packagesdownloading'] = '{$a} indiriliyor';
$string['packagesextracting'] = '{$a} ayıklanıyor';
$string['packagesvalidating'] = '{$a} doğrulanıyor';
$string['packagesvalidatingfailed'] = 'Doğrulama başarısızlığı nedeniyle yükleme işlemi iptal edildi';
$string['packagesvalidatingok'] = 'Doğrulama başarılı, kuruluma devam edilebilir';
$string['plugincheckall'] = 'Tüm eklentiler';
$string['plugincheckattention'] = 'Bakım gerektiren eklentiler';
$string['pluginchecknone'] = 'Şu anlık bakım gerektiren bir eklenti yok';
$string['pluginchecknotice'] = 'Bu sayfa yükseltme sırasında dikkaetmeniz gereken eklentileri görüntüler. Vurgulanan öğeler yüklenmesi halinde gerekli olacak yeni eklentileri, yükseltilmesi konusunda güncellenen eklentileri ve eksik eklentileri içerir. Onlar için kullanılabilir bir güncelleştirme olup olmadığını Ek eklentileri vurgulanır. Bu eklentileri daha yeni sürümleri olup olmadığını kontrol etmek ve bu Moodle yükseltme ile devam etmeden önce kendi kaynak kodunu güncellemeniz önerilir.';
$string['plugindisable'] = 'Devredışı bırak';
$string['plugindisabled'] = 'Devredışı';
$string['pluginenable'] = 'Etkinleştir';
$string['pluginenabled'] = 'Etkin';
$string['release'] = 'Sürüm';
$string['requiredby'] = 'Gerekli: {$a}';
$string['requires'] = 'Gerekenler';
$string['rootdir'] = 'Rehber';
$string['settings'] = 'Ayarlar';
$string['source'] = 'Kaynak';
$string['sourceext'] = 'Eklenti';
$string['sourcestd'] = 'Standart';
$string['status'] = 'Durum';
$string['status_delete'] = 'Silinecekler';
$string['status_downgrade'] = 'Yeni sürüm yüklendi!';
$string['status_missing'] = 'Dosya diskte yok';
$string['status_new'] = 'Yüklenecekler';
$string['status_nodb'] = 'Veritabanı yok';
$string['status_upgrade'] = 'İyileştirilecekler';
$string['status_uptodate'] = 'Yüklenmiş';
$string['supportedmoodleversions'] = 'Desteklenen Moodle sürümleri';
$string['systemname'] = 'Tanımlayıcı';
$string['type_antivirus'] = 'Antivirus eklentisi';
$string['type_antivirus_plural'] = 'Antivirüs eklentileri';
$string['type_auth'] = 'Kimlik denetimi eklentisi';
$string['type_auth_plural'] = 'Kimlik denetimi eklentileri';
$string['type_availability'] = 'Kullanılabilcek kısıtlama';
$string['type_availability_plural'] = 'Kullanılabilcek kısıtlamalar';
$string['type_block'] = 'Blok';
$string['type_block_plural'] = 'Bloklar';
$string['type_cachelock'] = 'Önbellek kilit işleyici';
$string['type_cachelock_plural'] = 'Önbellek kilitleri işleçleri';
$string['type_cachestore'] = 'Önbellek deposu';
$string['type_cachestore_plural'] = 'Önbellek depoları';
$string['type_calendartype'] = 'Takvim tipi';
$string['type_calendartype_plural'] = 'Takvim tipleri';
$string['type_coursereport'] = 'Ders raporu';
$string['type_coursereport_plural'] = 'Ders raporları';
$string['type_dataformat'] = 'Veri formatı';
$string['type_dataformat_plural'] = 'Veri formatları';
$string['type_editor'] = 'Editör';
$string['type_editor_plural'] = 'Editörler';
$string['type_enrol'] = 'Kayıt yöntemi';
$string['type_enrol_plural'] = 'Kayıt yöntemleri';
$string['type_filter'] = 'Filtre';
$string['type_filter_plural'] = 'Filtreler';
$string['type_format'] = 'Ders biçimi';
$string['type_format_plural'] = 'Ders biçimleri';
$string['type_gradeexport'] = 'Not dışa aktarma yöntemi';
$string['type_gradeexport_plural'] = 'Not dışa aktarma yöntemleri';
$string['type_gradeimport'] = 'Npt içe aktarma yöntemi';
$string['type_gradeimport_plural'] = 'Not içe aktarma yöntemleri';
$string['type_gradereport'] = 'Not kitabı raporu';
$string['type_gradereport_plural'] = 'Not kitabı raporları';
$string['type_gradingform'] = 'Gelişmiş notlandırma yöntemi';
$string['type_gradingform_plural'] = 'Gelişmiş notlandırma yöntemi';
$string['type_local'] = 'Yerel eklenti';
$string['type_local_plural'] = 'Yerel eklentiler';
$string['type_media'] = 'Medya oynatıcı';
$string['type_media_plural'] = 'Medya oynatıcılar';
$string['type_message'] = 'Mesajlaşma çıktısı';
$string['type_message_plural'] = 'Mesajlaşma çıktıları';
$string['type_mnetservice'] = 'MNet servisi';
$string['type_mnetservice_plural'] = 'MNet  servisleri';
$string['type_mod'] = 'Etkinlik eklentisi';
$string['type_mod_plural'] = 'Etkinlik eklentileri';
$string['type_plagiarism'] = 'Kopya önleme eklentisi';
$string['type_plagiarism_plural'] = 'Kopya önleme eklentileri';
$string['type_portfolio'] = 'Portfolyo';
$string['type_portfolio_plural'] = 'Portfolyolar';
$string['type_profilefield'] = 'Profil alan tipi';
$string['type_profilefield_plural'] = 'Profil alanı tipleri';
$string['type_qbehaviour'] = 'Soru tarzı';
$string['type_qbehaviour_plural'] = 'Soru tarzları';
$string['type_qformat'] = 'Soru içeri/dışarı aktarma biçimi';
$string['type_qformat_plural'] = 'Soru içeri/dışarı aktarma biçimleri';
$string['type_qtype'] = 'Soru tipi';
$string['type_qtype_plural'] = 'Soru tipleri';
$string['type_report'] = 'Sayfa raporu';
$string['type_report_plural'] = 'Raporlar';
$string['type_repository'] = 'Depo';
$string['type_repository_plural'] = 'Depolar';
$string['type_search'] = 'Arama motoru';
$string['type_search_plural'] = 'Arama motorları';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Temalar';
$string['type_tool'] = 'Yönetici aracı';
$string['type_tool_plural'] = 'Yönetici araçları';
$string['type_webservice'] = 'Web servisi protokolü';
$string['type_webservice_plural'] = 'Web servisi protokolleri';
$string['uninstall'] = 'Kaldır';
$string['uninstallconfirm'] = 'Eklentiyi <em>{$a->name}</em> kaldırmak üzeresiniz. Bu, eklenti vb. tarafından yönetilen yapılandırma, günlük kayıtları, kullanıcı dosyaları gibi bu eklentiyle ilişkili veritabanındaki her şeyi tamamen silecektir. Geri dönüş yolu yoktur ve Moodle kendisinin herhangi bir kurtarma yedeklemesi oluşturmaz. Devam etmek istediğine emin misin?';
$string['uninstalldelete'] = 'Eklenti <em>{$a->name}</em> ile ilişkili tüm veriler veritabanından silindi. Eklentinin kendiliğinden yeniden kurulmasını önlemek için <em>{$a->rootdir}</em> klasörünün şimdi sunucudan manuel olarak kaldırılması gerekir. Moodle kendisi, yazma izinleri nedeniyle klasörü kaldıramaz.';
$string['uninstalldeleteconfirm'] = 'Eklenti <em>{$a->name}</em> ile ilişkili tüm veriler veritabanından silindi. Eklentinin kendiliğinden yeniden yüklenmesini önlemek için <em>{$ a->rootdir}</em> klasörünün sunucudan kaldırılması gerekir. Eklenti klasörünü şimdi kaldırmak istiyor musunuz?';
$string['uninstalldeleteconfirmexternal'] = 'Eklentinin geçerli sürümünün kaynak kod yönetim sistemi ({$a}) üzerinden indirildiği anlaşılıyor. Eklenti klasörünü kaldırırsanız, kodun önemli yerel değişikliklerini kaybedebilirsiniz. Devam etmeden önce mutlaka eklenti klasörünü kaldırmak istediğinizden emin olun.';
$string['uninstallextraconfirmblock'] = 'Bu bloğun {$a->instances} örnekleri vardır.';
$string['uninstallextraconfirmenrol'] = '{$a->enrolments} kullanıcı kayıtları vardır.';
$string['uninstallextraconfirmmod'] = '{$a->courses} derslerinde bu modülün {$a->instances} örneği var.';
$string['uninstalling'] = 'Kaldırılıyor {$a->name}';
$string['updateavailable'] = 'Yeni bir sürüm mevcut {$a}.';
$string['updateavailable_moreinfo'] = 'Daha fazla bilgi...';
$string['updateavailable_release'] = 'Yayınla {$a}';
$string['updatepluginconfirm'] = 'Eklenti güncelleme onayı';
$string['updatepluginconfirmexternal'] = 'Eklentinin geçerli sürümünün kaynak kod yönetim sistemi ({$a}) üzerinden indirildiği anlaşılıyor. Bu güncelleştirmeyi yüklerseniz, artık kaynak kodu yönetim sisteminden eklenti güncelleştirmeleri edinebilirsiniz. Devam etmeden önce mutlaka eklentiyi güncellemek istediğinizden emin olun.';
$string['updatepluginconfirminfo'] = '<strong>{$a->name}</strong> eklentisinin yeni bir sürümünü yüklemek üzeresiniz. Eklentinin {$a->version} sürümüne sahip bir zip arşivi <a href="{$a->url}">{$a->url}</a> adresinden indirilecek ve Moodle kurulumunuza çıkarılacaktır Bu yüzden yüklemenizi yükseltebilir.';
$string['updatepluginconfirmwarning'] = 'Moodle\'ın, yükseltmeden önce otomatik olarak veritabanınızın yedeğini almayacağını lütfen unutmayın. Yeni kodun, sitenizi erişemeyen hatalara veya hatta veritabanınızı bozmasına neden olan nadir durumlarla baş etmek için, şimdi tam bir anlık yedekleme yapmanızı şiddetle öneririz. Kendi sorumluluğunuzdadır.';
$string['validationmsg_componentmatch'] = 'Bileşenin tam adı';
$string['validationmsg_componentmismatchname'] = 'Eklenti adı uyumsuzluğu';
$string['validationmsg_componentmismatchname_help'] = 'Github tarafından üretilenler gibi bazı ZIP arşivleri, yanlış bir kök dizin adı içerebilir. Bildirilen eklenti adıyla eşleştirmek için kök dizinin adını düzeltmeniz gerekir.';
$string['validationmsg_componentmismatchname_info'] = 'Eklenti, \'{$a}\' adını beyan eder, ancak bu kök dizininin adıyla uyuşmuyor.';
$string['validationmsg_componentmismatchtype'] = 'Eklenti türü uyumsuzluğu';
$string['validationmsg_componentmismatchtype_info'] = 'Beklenen \'{$a->expected}\' türü ancak eklenti \'{$ a-> found}\' türünü bildiriyor.';
$string['validationmsg_filenotexists'] = 'Çıkarılan dosya bulunamadı';
$string['validationmsg_filesnumber'] = 'Pakette yeterli dosya bulunamadı';
$string['validationmsg_filestatus'] = 'Dosyaların tümü çıkarılamıyor';
$string['validationmsg_filestatus_info'] = '{$a->file} dosyası çıkarılmaya çalışıldığında \'{$a->status}\' hatasıyla sonuçlandı.';
$string['validationmsg_foundlangfile'] = 'Dil dosyası bulundu';
$string['validationmsg_maturity'] = 'Beyan edilen olgunluk seviyesi';
$string['validationmsg_maturity_help'] = 'Eklenti, olgunluk seviyesini beyan edebilir. Yönetici eklentiyi kararlı olarak kabul ederse, ilan edilen olgunluk düzeyi MATURITY_STABLE değerini alacaktır. Diğer olgunluk düzeyleri (ör. Alfa veya beta) dengesiz olarak değerlendirilmeli ve uyarı yapılmalıdır.';
$string['validationmsg_missingcomponent'] = 'Eklenti, bileşen adını beyan etmiyor';
$string['validationmsg_missingcomponent_help'] = 'Tüm eklentiler, tam bileşen adını version.php dosyasındaki `$plugin-> component` bildirimi aracılığıyla sağlamalıdır.';
$string['validationmsg_missingexpectedlangenfile'] = 'İngilizce dil dosyası adı uyuşmazlığı';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Verilen eklenti türü, beklenen İngilizce dil dosyası {$a} eksik.';
$string['validationmsg_missinglangenfile'] = 'Herhangi bir İngilizce dil dosyası bulunamadı';
$string['validationmsg_missinglangenfolder'] = 'Eksik İngilizce dil klasörü';
$string['validationmsg_missingversion'] = 'Eklenti onun versiyonunu beyan etmiyor';
$string['validationmsg_missingversionphp'] = 'Dosya version.php bulunamadı';
$string['validationmsg_multiplelangenfiles'] = 'Birden çok İngilizce dil dosyası bulundu';
$string['validationmsg_onedir'] = 'Geçersiz ZIP arşivi yapısı';
$string['validationmsg_onedir_help'] = 'ZIP arşivi, eklenti kodunu barındıran yalnızca bir kök dizini içermelidir. Bu kök dizinin adı eklentinin adıyla eşleşmelidir.';
$string['validationmsg_pathwritable'] = 'Erişim kontrolü yaz';
$string['validationmsg_pluginversion'] = 'Eklenti sürümü';
$string['validationmsg_release'] = 'Eklenti çıkışı(yayını)';
$string['validationmsg_requiresmoodle'] = 'Gerekli Moodle sürümü';
$string['validationmsg_rootdir'] = 'Yüklenecek eklentinin adı';
$string['validationmsg_rootdir_help'] = 'ZIP arşivindeki kök dizinin adı, yüklenecek eklentinin adını oluşturur. Ad doğru değilse, eklentiyi yüklemeden önce ZIP\'deki kök dizini yeniden adlandırmak isteyebilirsiniz.';
$string['validationmsg_rootdirinvalid'] = 'Geçersiz eklenti adı';
$string['validationmsg_rootdirinvalid_help'] = 'ZIP arşivindeki kök dizinin adı, resmi sözdizimi gereksinimlerini ihlal ediyor. Github tarafından üretilenler gibi bazı ZIP paketleri, yanlış bir kök dizin adı içerebilir. Eklentinin adıyla eşleşecek şekilde kök dizinin adını düzeltmeniz gerekir.';
$string['validationmsg_targetexists'] = 'Hedef konumda zaten mevcut ve bu nedenle silinecek';
$string['validationmsg_targetexists_help'] = 'Eklenti dizini zaten var ve bu yüzden eklenti paketi içeriği ile değiştirilecek.';
$string['validationmsg_targetnotdir'] = 'Hedef konum bir dosya tarafından işgal edilmiş durumda';
$string['validationmsg_unknowntype'] = 'Bilinmeyen eklenti türü';
$string['validationmsg_versionphpsyntax'] = 'version.php dosyasında desteklenmeyen sözdizimi tespit edildi';
$string['validationmsglevel_debug'] = 'Hata ayıklama';
$string['validationmsglevel_error'] = 'Hata';
$string['validationmsglevel_info'] = 'Tamam';
$string['validationmsglevel_warning'] = 'Uyarı';
$string['version'] = 'Sürüm';
$string['versiondb'] = 'Şimdiki sürüm';
$string['versiondisk'] = 'Yeni sürüm';
