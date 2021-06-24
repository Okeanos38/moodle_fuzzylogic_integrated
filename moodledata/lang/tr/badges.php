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
 * Strings for component 'badges', language 'tr', version '3.10'.
 *
 * @package     badges
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Eylemler';
$string['activate'] = 'Erişimi etkin kıl';
$string['activatesuccess'] = 'Nişanlara erişin başarıyla etkinlerildi.';
$string['addbadgecriteria'] = 'Nişan ölçütü ekle';
$string['addcourse'] = 'Ders(leri) ekle';
$string['addcourse_help'] = 'Bu rozet gereksinimine eklenmesi gereken tüm dersleri seçin. Birden fazla öğe seçmek için CTRL tuşunu basılı tutun.';
$string['addcriteria'] = 'Ölçütü ekle';
$string['addcriteriatext'] = 'Ölçütleri eklemeye başlamak için açılır menüdeki seçeneklerden birini seçiniz';
$string['addtobackpack'] = 'Sırtçantasına ekle';
$string['adminonly'] = 'Bu sayfa sadece site yöneticileri ile kısıtlanmıştır.';
$string['after'] = 'yayın tarihinden sonra';
$string['aggregationmethod'] = 'Toplama yöntemi';
$string['alignment'] = 'Hizalanma';
$string['all'] = 'Tüm';
$string['allmethod'] = 'Seçilen tüm koşullar sağlanıyor';
$string['allmethodactivity'] = 'Seçilen tüm etkinlikler tamanlanmış';
$string['allmethodcourseset'] = 'Seçilen tüm dersler tamamlanmış';
$string['allmethodmanual'] = 'Seçilen tüm roller rozeti ödüllendiriyor';
$string['allmethodprofile'] = 'Seçilen profil alanlarının hepsi tamamlandı';
$string['allowcoursebadges'] = 'Kurs rozetlerini etkinleştir';
$string['allowcoursebadges_desc'] = 'Kurs içinde rozet yaratmaya ve vermeye izin ver';
$string['allowexternalbackpack'] = 'Harici backpack bağlantıyı etkinleştir';
$string['allowexternalbackpack_desc'] = 'Kullanıcıların harici backpack sağlayıcılarından bağlantı kurmalarını ve rozetleri görüntülemelerine izin verin.

Not: Web sitesine İnternet\'ten erişilemiyorsa (örneğin güvenlik duvarı yüzünden) bu seçeneği devre dışı bırakmanız önerilir.';
$string['any'] = 'Herhangi';
$string['anymethod'] = 'Seçilen koşulların herhangi biri (ya da birden fazlası) sağlanıyor';
$string['anymethodactivity'] = 'Seçilen etkinlerin herhangi biri (ya da fazlası) tamamlandı';
$string['anymethodcourseset'] = 'Seçilen kurslardan bir veya daha fazlası tamamlanmış';
$string['anymethodmanual'] = 'Seçilen rollerden herhangi biri rozeti ödüllendirir';
$string['anymethodprofile'] = 'Seçilen profil alanlarından herhangi biri tamamlandı';
$string['archivebadge'] = '\'{$a}\' adlı rozeti silmek, ancak varolan rozetleri silecek silmek ister misiniz?';
$string['archiveconfirm'] = 'Mevcut rozetleri sil ve saklamaya devam et';
$string['archivehelp'] = '<p>Bu seçenek, rozetin "uzakta" olarak işaretleneceği ve artık rozet listesinde görünmeyeceği anlamına gelir. Kullanıcılar artık bu rozeti kazanamayacaklar, ancak mevcut rozet alıcıları bu rozeti profil sayfalarında görüntüleyebilecek ve harici sırt çantalarına taşıyabilecek durumda.</p>
<p>Kullanıcılarınızın kazanılan rozetleri kullanmasına izin vermek isterseniz rozetlerin tümünü silmek yerine bu seçeneği seçmeniz önemlidir.</p>';
$string['attachment'] = 'Rozete mesaj ekle';
$string['attachment_help'] = 'Etkinleştirilirse, indirilen bir rozet dosyası alıcının e-postasına eklenir. (Ekler, Site yönetimi> Eklentiler> İleti çıktıları> Bu seçeneği kullanmak için E-posta adresinde etkinleştirilmelidir.)';
$string['award'] = 'Rozet ver';
$string['awardedtoyou'] = 'Bana atanan';
$string['awardoncron'] = 'Rozetlere erişim başarıyla etkinleştirildi. Çok fazla kullanıcı bu rozeti anında kazanabilir. Site performansını sağlamak için, bu işlemin işlenmesi biraz zaman alacaktır.';
$string['awards'] = 'Alıcılar';
$string['backpackavailability'] = 'Harici nişan doğrulama';
$string['backpackavailability_help'] = 'Rozet alıcılarının rozetlerini kendilerinden edindiklerini ispat edebilmesi için harici bir backpack hizmeti sitenize erişebilir ve buradan çıkan rozetleri doğrulayabilir. Siteniz şu anda erişilebilir gibi görünmüyor; bu, daha önce yayınladığınız veya gelecekte yayınlayacağınız rozetlerin doğrulanamayacağı anlamına geliyor.

**Neden bu mesajı görüyorum?**

Güvenlik duvarınız, ağınız dışından gelen kullanıcıların erişimini engeller, siteniz şifre korumalıdır veya siteyi İnternet\'ten olmayan bir bilgisayarda (yerel bir geliştirme makinesi gibi) çalıştırıyorsunuz olabilir.

**Bu bir sorun mu?**

Bu sorunu rozet vermeyi planladığınız herhangi bir üretim sitesinde düzeltmelisiniz, aksi takdirde alıcılar rozetlerini kendilerinden edindiklerini ispatlayamayacaktır. Siteniz henüz canlı değilse, canlı olarak gitmeden siteye erişebildiğiniz sürece test rozetleri oluşturup yayınlayabilirsiniz.

**Sitemin herkese açık olarak erişilebilir olmasını sağlayamazsam ne olur?**

Doğrulama için gereken tek URL, [yoru-site-url] /badges / assertion.php\'dir, güvenlik duvarınızı bu dosyaya harici olarak erişime izin verecek şekilde değiştirebiliyorsanız, rozet doğrulama işlemi yine de geçerli olacaktır.';
$string['backpackcannotsendverification'] = 'Doğrulama için e-posta gönderilemiyor';
$string['backpackconnection'] = 'Backpack bağlantısı';
$string['backpackconnection_help'] = 'Bu sayfa harici bir backpack sağlayıcısına bağlantı kurmanızı sağlar. Bir backpack\'e bağlanmanız, bu sitedeki harici rozetleri görüntülemenize ve buraya sırt çantanıza kazandırdığınız rozetleri itmesine izin verir.

Şu anda yalnızca <a href="http://backpack.openbadges.org">Mozilla OpenBadges Backpack</a> destekleniyor. Bu sayfada backpack bağlantısı kurmaya başlamadan önce bir backpack servisine kaydolmanız gerekir.';
$string['backpackconnectioncancelattempt'] = 'Farklı bir e-posta adresi kullanarak bağlan';
$string['backpackconnectionconnect'] = 'Backpack adresine bağlan';
$string['backpackconnectionresendemail'] = 'Doğrulama için yeniden e-posta gönder';
$string['backpackconnectionunexpectedresult'] = 'Backpack ile bağlantı kurulamadı. Yeniden deneyin.<br><br>Sorun devam ederse yöneticiyle iletişime geçin.';
$string['backpackdetails'] = 'Sır çantası ayarları';
$string['backpackemail'] = 'Email adresi';
$string['backpackemail_help'] = 'Backpack\'inizle ilişkili e-posta adresi. Bağlandıkça, bu sitede kazanılan rozetler bu e-posta adresiyle ilişkilendirilir.';
$string['backpackemailverificationpending'] = 'Doğrulama bekleniyor';
$string['backpackemailverifyemailbody'] = 'Merhaba,

E-posta adresiniz kullanılarak \'{$a->sitename}\' sitesinden size ait OpenBadges backpack ile bağlantı talebi iletildi.

Backpack ile bağlantıyı onaylayıp etkinleştirmek için bu adrese gidin;

{$a->link}

Bir çok e-posta programında bu bağlantı tıklanabilir mavi bir bağlantı olarak görünür. Tıklayınca çalışmıyorsa adresi kopyalayıp internet tarayıcınızın yukarısında yer alan adres çubuğuna yapıştırın.

Yardım gerekiyorsa site yönetimiyle iletişime geçin,
{$a->admin}';
$string['backpackemailverifyemailsubject'] = '{$a}: OpenBadges Backpack e-posta doğrulama';
$string['backpackemailverifypending'] = '<strong>{$a}</strong> adresine bir doğrulama iletimi gönderildi. İletideki doğrulama bağlantısını tıklayarak Backpack bağlantınızı etkinleştirin.';
$string['backpackemailverifysuccess'] = 'E-posta adresinizi etkinleştirdiğiniz için teşekkür ederiz. Size ait backpack ile bağlantınız kuruldu.';
$string['backpackemailverifytokenmismatch'] = 'Tıkladığınız bağlantıdaki anahtar ile depolanan anahtar uyuşmuyor. Size gönderilen en son iletideki bağlantıyı tıkladığınızdan emin olun.';
$string['backpackexporterror'] = 'Rozeti sırt çantasına aktaramıyorum';
$string['backpackimport'] = 'Nişan içe aktarım ayarları';
$string['backpackimport_help'] = 'Backpack bağlantısı başarıyla kurulduktan sonra, backpack\'inizdeki rozetler rozetler sayfanızda ve profil sayfanızda görüntülenebilir.

Bu alanda, backpack\'inizden profilinizde görüntülemek istediğiniz rozetleri koleksiyonlarını seçebilirsiniz.';
$string['backpackneedsupdate'] = 'Bu profile bağlanan sırt çantası sitenin sırt çantasıyla eşleşmiyor. Sırt çantasının bağlantısını kesmeniz ve yeniden bağlamanız gerekir.';
$string['backpacksettings'] = 'Sırt çantası ayarları';
$string['backpackweburl'] = 'Sırt çantası URL\'si';
$string['badgedetails'] = 'Nişan ayrıntıları';
$string['badgeimage'] = 'Resim';
$string['badgeimage_help'] = 'Bu resim, bu rozet verildiğinde kullanılacak bir resim.

Yeni bir resim eklemek için bir görüntüye (JPG veya PNG formatında) göz atın ve seçin ve ardından "Değişiklikleri kaydet" i tıklayın. Resim bir kare kırpılacak ve rozet görüntü gereksinimlerine uyacak şekilde yeniden boyutlandırılacaktır.';
$string['badgeprivacysetting'] = 'Nişan gizlilik ayarları';
$string['badgeprivacysetting_help'] = 'Kazandığınız rozetler hesap profil sayfanızda görüntülenebilir. Bu ayar, yeni kazanılan rozetlerin görünürlüğünü otomatik olarak ayarlamanıza izin verir.

Kişisel rozet gizlilik ayarlarınızı, rozetler sayfanızda da kontrol edebilirsiniz.';
$string['badgeprivacysetting_str'] = 'Kazandığım nişanları otomatik olarak profil sayfamda göster';
$string['badges'] = 'Nişanlar';
$string['badgesalt'] = 'Alıcının e-posta adresini çırpmak için salt değeri';
$string['badgesalt_desc'] = 'Bir çırpı yöntemi kullanmak, backpac khizmetlerinin, rozet sahibinin e-posta adresini göstermek zorunda kalmadan onaylamasına olanak tanır. Bu ayar yalnızca sayı ve harf kullanmalıdır.

Not: Alıcı doğrulaması amacıyla, lütfen rozet vermeye başladığınızda bu ayarı değiştirmeyi düşünmeyin.';
$string['badgesdisabled'] = 'Rozetler bu sitede etkin değil.';
$string['badgesearned'] = 'Kazanılan rozet sayısı: {$a}';
$string['badgesettings'] = 'Rozet ayarları';
$string['badgestatus_0'] = 'Kullanıcılar tarafından kullanılamaz';
$string['badgestatus_1'] = 'Kullanıcılar tarafından kullanılabilir';
$string['badgestatus_2'] = 'Kullanıcılar tarafından kullanılamaz';
$string['badgestatus_3'] = 'Kullanıcılar tarafından kullanılabilir';
$string['badgestatus_4'] = 'Arşivlenmiş';
$string['badgestoearn'] = 'Kullanılabilir rozet sayısı: {$a}';
$string['badgesview'] = 'Ders rozetleri';
$string['badgeurl'] = 'Çıkarılan rozet bağlantısı';
$string['balignment'] = 'Hizalamalar ({$a})';
$string['bawards'] = 'Alıcılar ({$a})';
$string['bcriteria'] = 'Ölçüt';
$string['bdetails'] = 'Ayrıntıları düzenle';
$string['bendorsement'] = 'Onay';
$string['bmessage'] = 'Mesaj';
$string['boverview'] = 'Gözden geçirme';
$string['brelated'] = 'İlgili rozetler ({$a})';
$string['bydate'] = 'tarafından tamamlandı :';
$string['claim'] = 'Kazanılan';
$string['claimcomment'] = 'Onay yorumu';
$string['claimid'] = 'URL talep et';
$string['clearsettings'] = 'Ayarları temizle';
$string['completioninfo'] = 'Bu rozet, tamamlanması için verildi:';
$string['completionnotenabled'] = 'Bu derste ders tamamlama etkin değildir, dolayısıyla rozet ölçütlerine dahil edilemez. Kursun tamamlanması, kurs ayarlarında etkinleştirilebilir.';
$string['configenablebadges'] = 'Etkinleştirilirse, bu özellik rozetler oluşturmanıza ve bunları site kullanıcılarına vermenize olanak tanır.';
$string['configuremessage'] = 'Rozet mesajı';
$string['connect'] = 'Bağlan';
$string['connected'] = 'Bağlı';
$string['connecting'] = 'Bağlanıyor...';
$string['contact'] = 'İletişim';
$string['contact_help'] = 'Rozet göndereniyle ilişkili bir e-posta adresi.';
$string['copyof'] = '{$a} kopyası';
$string['coursebadges'] = 'Nişanlar';
$string['coursebadgesdisabled'] = 'Bu sitede rota rozetleri etkin değil.';
$string['coursecompletion'] = 'Kullanıcılar bu dersi tamamlamalıdır';
$string['create'] = 'Yeni nişan';
$string['createbutton'] = 'Nişan oluştur';
$string['creatorbody'] = '<p>{$a->user}, tüm rozet gereksinimlerini tamamladı ve rozet kazandı. Verilen rozeti {$a->link} adresinde görüntüle</p>';
$string['creatorsubject'] = '\'{$a}\' ödüllendirildi!';
$string['criteria_0'] = 'Bu rozet ne zaman ödüllendirildi...';
$string['criteria_1'] = 'Eylemin tamamlanması';
$string['criteria_1_help'] = 'Bir kurstaki bir dizi etkinlik tamamlanarak kullanıcılara bir rozet verilmesine izin verir.';
$string['criteria_2'] = 'Kullanıcı rolüne bağlı olarak el ile açılan konu';
$string['criteria_2_help'] = 'Site veya ders içinde belirli bir role sahip kullanıcılar tarafından rozetlerin elle verilmesine izin verir.';
$string['criteria_3'] = 'Sosyal katılım';
$string['criteria_3_help'] = 'Sosyal';
$string['criteria_4'] = 'Kursun tamamlanması';
$string['criteria_4_help'] = 'Kursu tamamlayan kullanıcılara bir rozet verilmesine izin verir. Bu kriter, minimum not ve ders bitim tarihi gibi ek parametrelere sahip olabilir.';
$string['criteria_5'] = 'Bir dizi dersi tamamlamak';
$string['criteria_5_help'] = 'Bir dizi dersi tamamlayan kullanıcılara bir rozet verilmesine izin verir. Her ders, minimum not ve ders tamamlama tarihi gibi ek parametrelere sahip olabilir.';
$string['criteria_6'] = 'Profil tamamlama';
$string['criteria_6_help'] = 'Profilindeki belirli alanları tamamladığı için kullanıcılara bir rozet verilmesine izin verir. Kullanıcılar tarafından kullanılabilen varsayılan ve özel profil alanlarından seçim yapabilirsiniz.';
$string['criteria_7'] = 'Ödüllü rozetler';
$string['criteria_7_help'] = 'Kullanıcılara, kazandıkları diğer rozetlere göre bir rozet verilmesine izin verir.';
$string['criteria_8'] = 'Kohort üyeliği';
$string['criteria_8_help'] = 'Grup üyeliğine göre kullanıcılara rozet verilmesine izin verir.';
$string['criteria_9'] = 'Yeterlilikleri';
$string['criteria_descr'] = 'Kullanıcılar, aşağıdaki gereksinimi tamamladıklarında bu rozet kazanırlar:';
$string['criteria_descr_0'] = 'Kullanıcılara, listelenen gereksinimlerden <strong>{$a}</strong> sonra bu rozet verilir.';
$string['criteria_descr_1'] = 'Aşağıdaki etkinliklerin <strong>{$a}</strong> kadarı tamamlandı:';
$string['criteria_descr_2'] = 'Bu rozet, aşağıdaki rollerden biri olan <strong>{$a}</strong> kullanıcısıyla ödüllendirilmelidir:';
$string['criteria_descr_4'] = 'Kullanıcılar bu dersi tamamlamalıdır';
$string['criteria_descr_5'] = '<strong>{$a}</strong>\'nın aşağıdaki derslerinin tamamlanması gerekmektedir:';
$string['criteria_descr_6'] = 'Aşağıdaki kullanıcı profili alanlarının <strong>{$a}</strong> tamamlanması gerekiyor:';
$string['criteria_descr_bydate'] = 'tarafından <em>{$a}</em>';
$string['criteria_descr_grade'] = 'asgari notu <em>{$a}</em> ile';
$string['criteria_descr_short0'] = '<strong>{$a}</strong>\'nı tamamlayın:';
$string['criteria_descr_short1'] = '<strong>{$a}</strong>\'nı tamamlayın:';
$string['criteria_descr_short2'] = '<strong> {$a} </ strong> tarafından ödüllendirildi:';
$string['criteria_descr_short4'] = 'Dersi tamamla';
$string['criteria_descr_short5'] = '<strong>{$a}</strong>\'nı tamamlayın:';
$string['criteria_descr_short6'] = '<strong>{$a}</strong>\'nı tamamlayın:';
$string['criteria_descr_single_1'] = 'Aşağıdaki etkinlik tamamlanmalıdır:';
$string['criteria_descr_single_2'] = 'Bu rozet, şu rolü taşıyan bir kullanıcı tarafından ödüllendirilmelidir:';
$string['criteria_descr_single_4'] = 'Kullanıcılar dersi tamamlamalıdır';
$string['criteria_descr_single_5'] = 'Aşağıdaki ders tamamlanmalıdır:';
$string['criteria_descr_single_6'] = 'Aşağıdaki kullanıcı profili alanının doldurulması gerekiyor:';
$string['criteria_descr_single_short1'] = 'Tamamlayınız:';
$string['criteria_descr_single_short2'] = 'Şu tarafından ödüllendirildi:';
$string['criteria_descr_single_short4'] = 'Dersi tamamlayın';
$string['criteria_descr_single_short5'] = 'Tamamlayınız:';
$string['criteria_descr_single_short6'] = 'Tamamlayınız:';
$string['criteriacreated'] = 'Nişan ölçütü başarıyla oluşturuldu';
$string['criteriadeleted'] = 'Nişan ölçütü başarıyla kaldırıldı';
$string['criteriasummary'] = 'Ölçüt özeti';
$string['criteriaupdated'] = 'Rozet ölçütleri başarıyla güncellendi';
$string['criterror'] = 'Geçerli parametre sorunları';
$string['criterror_help'] = 'Bu alan kümesi, başlangıçta bu rozet gereksinimine eklenen ancak artık mevcut olmayan tüm parametreleri gösterir. Kullanıcıların gelecekte bu rozeti kazanabileceğinden emin olmak için bu parametrelerin işaretini kaldırmanız önerilir.';
$string['currentimage'] = 'Geçerli resim';
$string['currentstatus'] = 'Mevcut durum';
$string['dateawarded'] = 'Verilen tarih';
$string['dateearned'] = 'Tarih: {$a}';
$string['day'] = 'Gün';
$string['deactivate'] = 'Erişimi devre dışı bırak';
$string['deactivatesuccess'] = 'Nişanlara erişim devre dışı bırakıldı';
$string['defaultissuercontact'] = 'Varsayılan rozet göndericisinin iletişim detayları';
$string['defaultissuercontact_desc'] = 'Rozet verenle ilişkili bir e-posta adresi.';
$string['defaultissuername'] = 'Varsayılan rozet veren kuruluş adı';
$string['defaultissuername_desc'] = 'Veren acente veya makamın adı.';
$string['delbadge'] = '\'{$a}\' adlı rozeti silmek ve mevcut tüm rozeti kaldırmak ister misiniz?';
$string['delconfirm'] = 'Var olan rozetleri sil ve kaldır';
$string['delcritconfirm'] = 'Bu ölçütü kaldırmak istediğinize emin misiniz?';
$string['deletehelp'] = '<p>Bir rozetin tamamen silinmesi, tüm bilgi ve kriter kayıtlarının kalıcı olarak kaldırılacağı anlamına gelir. Bu rozeti kazanmış olan kullanıcılar artık ona erişip profil sayfalarında görüntüleyemez.</p>
<p>Not: Bu rozetini kazanmış olan kullanıcıların harici backpack\'a ait olan kullanıcılar, harici backpack bu rozeti hâlâ kullanacaktır. Bununla birlikte, bu web sitesine bağlantı veren kriterlere ve kanıt sayfalarına erişemeyeceklerdir.</p>';
$string['delparamconfirm'] = 'Bu parametreyi silmek istediğinize emin misiniz?';
$string['description'] = 'Açıklama';
$string['disconnect'] = 'Bağlantıyı kes';
$string['donotaward'] = 'Şu anda, bu rozet etkin değil, bu nedenle kullanıcılara verilemiyor. Bu rozeti ödüllendirmek isterseniz, lütfen durumunu etkin olarak ayarlayın.';
$string['editsettings'] = 'Ayarları düzenle';
$string['enablebadges'] = 'Nişanlara izin ver';
$string['error:backpackdatainvalid'] = 'Backpack\'ten gelen veri geçersizdi.';
$string['error:backpackemailnotfound'] = '\'{$a}\' e-postası bir backpack\'la ilişkili değil. Bu hesap için <a href="http://backpack.openbadges.org">bir backpack oluşturmanız</a> veya başka bir e-posta adresiyle oturum açmanız gerekir.';
$string['error:backpacknotavailable'] = 'Sitenize İnternetten erişilemediğinden, bu siteden çıkarılan rozetler harici backpack hizmetleri tarafından doğrulanamıyor.';
$string['error:backpackproblem'] = 'Backpack servis sağlayıcınıza bağlanırken bir sorun oluştu. Lütfen daha sonra tekrar deneyiniz.';
$string['error:badgeawardnotfound'] = 'Bu ödül alınan rozeti doğrulayamıyorum. Bu rozet iptal edilmiş olabilir.';
$string['error:badgenotfound'] = 'Rozet bulunamadı';
$string['error:cannotact'] = 'Nişan etkinleştirilemiyor';
$string['error:cannotawardbadge'] = 'Bir kullanıcıya rozet veremezsiniz.';
$string['error:cannotdeletecriterion'] = 'Bu kriter silinemez.';
$string['error:cannotrevokebadge'] = 'Rozeti bir kullanıcıdan iptal edemezsiniz.';
$string['error:clone'] = 'Nişan kopyalanamıyor';
$string['error:connectionunknownreason'] = 'Bağlantı başarısız oldu, ancak neden verilmedi.';
$string['error:duplicatename'] = 'Sistemde zaten bu isme sahip bir nişan bulunuyor.';
$string['error:externalbadgedoesntexist'] = 'Nişan bulunamadı';
$string['error:guestuseraccess'] = 'Şu anda konuk erişimini kullanıyorsunuz. Rozetleri görmek için kullanıcı hesabınızla giriş yapmanız gerekmektedir.';
$string['error:invalidcriteriatype'] = 'Geçersiz ölçüt türü';
$string['error:invalidexpiredate'] = 'Son kullanma tarihi gelecekte olmalıdır.';
$string['error:invalidexpireperiod'] = 'Vade sonu negatif veya eşit olamaz 0.';
$string['error:noactivities'] = 'Bu derste tamamlama kriterleri etkin olan bir etkinlik yoktur.';
$string['error:nocourses'] = 'Ders tamamlama bu sitedeki herhangi bir ders için etkinleştirilmediğinden hiçbiri görüntülenemez. Kursun tamamlanması, kurs ayarlarında etkinleştirilebilir.';
$string['error:nopermissiontoview'] = 'Nişan sahiplerini görüntüleme izniniz yok';
$string['error:nosuchbadge'] = '{$a} id ye sahip bir nişan mevcut değil';
$string['error:nosuchcourse'] = 'Uyarı : Bu ders artık mevcut değil';
$string['error:nosuchfield'] = 'Uyarı: Bu kullanıcı profili alanı artık mevcut değil.';
$string['error:nosuchmod'] = 'Uyarı : Bu etkinlik artık mevcut değil';
$string['error:nosuchrole'] = 'Uyarı: Bu rol artık kullanılamıyor.';
$string['error:nosuchuser'] = 'Bu e-posta adresine sahip olan kullanıcının mevcut sırt çantası sağlayıcısı ile bir hesabı yok.';
$string['error:notifycoursedate'] = 'Uyarı: Kursun ve etkinlik tamamlanmasına ilişkin rozetler, kurs başlangıcına kadar verilmez.';
$string['error:parameter'] = 'Uyarı: Doğru rozet iş akışı sağlamak için en az bir parametre seçilmelidir.';
$string['error:requesterror'] = 'Bağlantı isteği başarısız oldu ({$a} hata kodu).';
$string['error:requesttimeout'] = 'Bağlantı isteği tamamlanmadan zaman aşımına uğradı.';
$string['error:save'] = 'Nişan kaydedilemiyor.';
$string['error:userdeleted'] = '{$a->user} (Bu kullanıcı {$a->site} sitesinde artık mevcut değil)';
$string['eventbadgearchived'] = 'Rozet arşivlendi';
$string['eventbadgeawarded'] = 'Rozet verildi';
$string['eventbadgecreated'] = 'Rozet oluşturuldu';
$string['eventbadgecriteriacreated'] = 'Rozet ölçütleri oluşturuldu';
$string['eventbadgecriteriadeleted'] = 'Rozet ölçütleri silindi';
$string['eventbadgecriteriaupdated'] = 'Rozet ölçütleri güncellendi';
$string['eventbadgedeleted'] = 'Rozet silindi';
$string['eventbadgedisabled'] = 'Rozet devre dışı bırakıldı';
$string['eventbadgeduplicated'] = 'Rozet kopyalandı';
$string['eventbadgeenabled'] = 'Rozet etkin';
$string['eventbadgelistingviewed'] = 'Rozet listesi görüntülendi';
$string['eventbadgerevoked'] = 'Rozet iptal edildi';
$string['eventbadgeupdated'] = 'Rozet güncellendi';
$string['eventbadgeviewed'] = 'Rozet izlendi';
$string['evidence'] = 'Kanıt';
$string['existingrecipients'] = 'Mevcut rozet alıcıları';
$string['expired'] = 'Süresi dolmuş';
$string['expiredate'] = 'Bu rozet {$a} tarihinde doluyor.';
$string['expireddate'] = 'Bu rozet {$a} tarihinde doldu.';
$string['expireperiod'] = 'Bu rozet yayınlandıktan sonra {$a} gün geçti.';
$string['expireperiodh'] = 'Bu rozet, yayınlanmasından sonra {$a} saat geçti.';
$string['expireperiodm'] = 'Bu rozet, yayınlanmaya başlandıktan sonra {$a} dakika geçti.';
$string['expireperiods'] = 'Bu rozet yayınlandıktan sonra {$a} saniye geçti.';
$string['expirydate'] = 'Bitiş Tarihi';
$string['expirydate_help'] = 'İsteğe bağlı olarak, rozetler belirli bir tarihe göre dolabilir veya tarih, rozetin bir kullanıcıya verildiği tarihe göre hesaplanabilir.';
$string['externalbadges'] = 'Diğer web sitelerindeki nişanlarım';
$string['externalbadges_help'] = 'Bu alan, dış backpack\'nızdaki rozetleri görüntüler.';
$string['externalbadgesp'] = 'Diğer web sitelerindeki nişanlar';
$string['externalconnectto'] = 'Harici rozetleri görüntülemek için <a href="{$a}">bir backpack\'a bağlanmanız</a> gerekir.';
$string['fixed'] = 'Sabit tarih';
$string['hidden'] = 'Saklı';
$string['hiddenbadge'] = 'Maalesef, rozet sahibi bu bilgiyi ulaşmamıştır.';
$string['imageauthoremail'] = 'Resim yazarının e-postası';
$string['imageauthorname'] = 'Resim yazarının adı';
$string['imageauthorurl'] = 'Resim yazarının URL\'si';
$string['imagecaption'] = 'Resim yazısı';
$string['issuancedetails'] = 'Rozet sona erme';
$string['issuedbadge'] = 'Çıkarılan rozet bilgisi';
$string['issuerdetails'] = 'çıkaran ayrıntıları';
$string['issueremail'] = 'E-posta';
$string['issuername'] = 'Çıkaranın adı';
$string['issuername_help'] = 'Veren acente veya makamın adı.';
$string['issuerurl'] = 'Çıkaran URL';
$string['language'] = 'Dil';
$string['localbadges'] = '{$a} web sitesindeki nişanlarım';
$string['localbadgesh'] = 'Bu web sitesindeki nişanlarım';
$string['localbadgesh_help'] = 'Dersleri, ders etkinliklerini ve diğer şartları tamamlayarak bu web sitesinde kazanılan tüm rozetler.

Rozetlerinizi profil sayfanız için herkese açık veya gizli yaparak buradan yönetebilirsiniz.

Tüm rozetlerinizi veya her rozetinizi ayrı ayrı indirebilir ve bilgisayarınıza kaydedebilirsiniz. İndirilen rozetler, dış backpack servisinize eklenebilir.';
$string['localbadgesp'] = '{$a} numaralı rozetler:';
$string['localconnectto'] = 'Bu rozetleri bu web sitesinin dışında paylaşmak için <a href="{$a}"> bir backpack\'a bağlanmanız </a> gerekir.';
$string['makeprivate'] = 'Özelleştirmek';
$string['makepublic'] = 'Herkese görünür yap';
$string['managebadges'] = 'Nişanları yönet';
$string['message'] = 'Mesaj gövdesi';
$string['messagebody'] = '<p>"% badgename%" rozetini ödüllendirildi!</p>
<p>Bu rozet hakkında daha fazla bilgi  %badgelink%  rozeti bilgi sayfasında bulunabilir.</p>
<p>Rozeti {$a} sayfanızdan yönetebilir ve indirebilirsiniz.</p>';
$string['messagesubject'] = 'Tebrikler! Yeni bir nişan kazandınız!';
$string['method'] = 'Bu kriter tamamlandığında ...';
$string['mingrade'] = 'Minimum not gerekli';
$string['month'] = 'Ay';
$string['mybackpack'] = 'Sırt çantası ayarları';
$string['mybadges'] = 'Nişanlarım';
$string['never'] = 'Asla';
$string['newbadge'] = 'Yeni bir nişan ekle';
$string['newimage'] = 'Yeni resim';
$string['noalignment'] = 'Bu rozetin belirlenmiş herhangi bir dış yeteneği veya standardı yoktur.';
$string['noawards'] = 'Bu nişan henüz kazanılmamış.';
$string['nobackpack'] = 'Bu hesaba bağlı backpack servisi yok. <br/>';
$string['nobadges'] = 'Uygun nişan bulunmuyor.';
$string['nocriteria'] = 'Bu nişan için gereken ölçütler henüz ayarlanmamış';
$string['noexpiry'] = 'Bu rozetin son kullanma tarihi yoktur.';
$string['noparamstoadd'] = 'Bu rozet gereksinimine eklenebilecek ek parametreler yok.';
$string['norelated'] = 'Bu rozetin ilgili rozetleri yok.';
$string['notacceptedrole'] = 'Mevcut rol atamanız, bu rozetle manuel olarak çıkarabilecek roller arasında değil. <br/>
Bu rozeti kazanmış olan kullanıcıları görmek isterseniz {$a} sayfasını ziyaret edebilirsiniz.';
$string['notconnected'] = 'Bağlı değil';
$string['nothingtoadd'] = 'Eklenebilecek uygun ölçüt bulunmuyor.';
$string['notification'] = 'Rozet oluşturucusuna bildir';
$string['notification_help'] = 'Bu ayar, bir rozet oluşturana gönderilen bildirimleri, rozet verildiğini bildirmek için yönetir.

Aşağıdaki seçenekler mevcuttur:

* **HİÇBİR ZAMAN** - Bildirimler göndermeyin.

* **HER ZAMAN** - Bu rozet her ödül verildiğinde bir bildirim gönderin.

* **GÜNLÜK** - Günde bir kez bildirim gönderin.

* **HAFTALIK** - Haftada bir bildirim gönderin.

* **AYLIK** - Ayda bir kez bildirim gönderin.';
$string['notifydaily'] = 'Günlük';
$string['notifyevery'] = 'Her zaman';
$string['notifymonthly'] = 'Aylık';
$string['notifyweekly'] = 'Haftalık';
$string['numawards'] = 'Bu rozet, <a href="{$a->link}">{$a->count}</a> kullanıcıya verildi.';
$string['numawardstat'] = 'Bu rozet, {$a} kullanıcı (lar) tarafından verildi.';
$string['overallcrit'] = 'Seçilen ölçütlerin tamamlanması.';
$string['potentialrecipients'] = 'Potansiyel rozet alıcıları';
$string['preferences'] = 'Rozet tercihleri';
$string['recipientdetails'] = 'Alıcı bilgileri';
$string['recipientidentificationproblem'] = 'Mevcut kullanıcılardan bu rozet alıcısı bulunamıyor.';
$string['recipients'] = 'Rozet alıcıları';
$string['recipientvalidationproblem'] = 'Mevcut kullanıcı bu rozeti alıcısı olarak doğrulanamıyor.';
$string['relatedbages'] = 'İlgili rozetler';
$string['relative'] = 'Göreceli tarih';
$string['requiredcourse'] = 'Ders seti kriterine en az bir ders eklenmelidir.';
$string['reviewbadge'] = 'Rozet erişimindeki değişiklikler';
$string['reviewconfirm'] = '<p>Bu, rozetinizi kullanıcılara görünür kılacak ve kazanmalarına izin verecektir.</p>

<p>Bazı kullanıcıların bu rozet ölçütlerini zaten karşılamaları mümkündür ve bu rozeti etkinleştirdikten hemen sonra yayınlanacaktır.</p>

<p>Bir rozet verildiğinde, <strong>kilitli</strong> olur - ölçütler ve son kullanım ayarları da dahil olmak üzere belirli ayarlar artık değiştirilemez.</p>

<p> \'{$a}\' isimli rozet\'e erişimi etkinleştirmek istediğinizden emin misiniz?</p>';
$string['revoke'] = 'Rozeti iptal et';
$string['save'] = 'Kaydet';
$string['searchname'] = 'İsme göre ara';
$string['selectaward'] = 'Lütfen bu rozet ödüllendirmek için kullanmak istediğiniz rolü seçin:';
$string['selectgroup_end'] = 'Daha fazla genel koleksiyon oluşturmak için yalnızca halka açık koleksiyonlar gösterilir, <a href="http://backpack.openbadges.org">çantanızı ziyaret edin</a>.';
$string['selectgroup_start'] = 'Bu sitede sergilenecek backpack\'tan koleksiyon seçin:';
$string['selecting'] = 'Seçilen rozetlerle...';
$string['setup'] = 'Bağlantı kurulumu';
$string['sitebadges'] = 'Site rozetleri';
$string['sitebadges_help'] = 'Site rozetleri yalnızca kullanıcılara site ile ilgili etkinlikler için verilebilir. Bunlara bir dizi dersi veya kullanıcı profillerini tamamlama dahildir. Site rozetleri bir kullanıcı tarafından başka birine manuel olarak da verilebilir.

Kursla ilgili faaliyetler için rozetler kurs seviyesinde oluşturulmalıdır. Kurs rozetleri, Kurs Yönetimi> Rozetler altında bulunabilir.';
$string['status'] = 'Nişan Durumu';
$string['status_help'] = 'Bir rozet durumu, sistemdeki davranışını belirler:

* **MEVCUT** - Bu rozet kullanıcıların kazanabileceği anlamına gelir. Kullanıcılar için bir rozet bulunurken kriterleri değiştirilemez.

* **MEVCUT DEĞİL** - Bu rozet kullanıcılara açık değildir ve kazanılamaz veya manuel olarak verilemez. Bu tür bir rozet daha önce hiç yayınlanmadıysa, kriterleri değiştirilebilir.

En az bir kullanıcıya bir rozet verildiğinde otomatik olarak
 ** KİLİTLİ ** olur. Kilitli rozetler hâlâ kullanıcılar tarafından kazanılabilir ancak kriterleri artık değiştirilemez. Kilitli bir rozetin ayrıntılarını veya ölçütlerini değiştirmeniz gerekiyorsa, bu rozeti kopyalayabilir ve gerekli tüm değişiklikleri yapabilirsiniz.

*Rozetleri neden kilitlemelisiniz?*

Bir rozet kazanmak için tüm kullanıcıların aynı gereksinimleri tamamladığından emin olmak istiyoruz. Şu anda, rozetleri iptal etmek mümkün değildir. Rozet gereksinimlerinin her zaman değiştirilmesi için izin verilmiş olsaydı, büyük olasılıkla tamamen farklı gereksinimleri karşılamak için aynı rozet kullanan kullanıcılar olurdu.';
$string['statusmessage_0'] = 'Bu rozet şu anda kullanıcılar tarafından kullanılamıyor. Kullanıcıların bu rozeti kazanmalarını istiyorsanız, erişimi etkinleştirin.';
$string['statusmessage_1'] = 'Bu rozet şu anda kullanıcılara açık. Değişiklik yapmak için erişimi devre dışı bırakın.';
$string['statusmessage_2'] = 'Bu rozet şu anda kullanıcılar tarafından kullanılamıyor ve kriterleri kilitlidir. Kullanıcıların bu rozeti kazanmalarını istiyorsanız, erişimi etkinleştirin.';
$string['statusmessage_3'] = 'Bu rozet şu anda kullanıcılara sunuluyor ve kriterleri kilitlidir.';
$string['statusmessage_4'] = 'Bu rozet şu an arşivlidir.';
$string['subject'] = 'Mesaj konusu';
$string['variablesubstitution'] = 'Mesajlarda değişken yerine geçen';
$string['variablesubstitution_help'] = 'Bir rozet mesajında, mesaj gönderildiğinde gerçek değerlerle değiştirilecek belirli değişkenler bir mesajın konusuna ve / veya gövdesine eklenebilir. Değişkenler metne tam olarak aşağıda gösterildiği gibi eklenmelidir. Aşağıdaki değişkenler kullanılabilir:

%badgename%
: Bunun yerine rozetin tam adı geçecektir.

%username%
: Bu, alıcının tam adı ile değiştirilecektir.

%badgelink%
: Bu, yerini alacak olan rozet ile ilgili bilgilerin yer aldığı genel URL ile değiştirilecektir.';
$string['version'] = 'Sürüm';
$string['viewbadge'] = 'Çıkarılan rozeti görüntüle';
$string['visible'] = 'Görünür';
$string['warnexpired'] = '(Bu nişan zaman aşımına uğramış!)';
$string['year'] = 'Yıl';
