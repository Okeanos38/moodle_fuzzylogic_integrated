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
 * Strings for component 'report_security', language 'tr', version '3.10'.
 *
 * @package     report_security
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['check_configrw_details'] = '<p>config.php dosya izinlerinin yüklemeden sonra değiştirilmesi önerilir böylece dosya web sunucusu tarafından değiştirilemez. Bu önlem sunucunun güvenliğini arttırmaz, ama genel saldırıları sınırlandırabilir veya yavaşlatabilir.</p>';
$string['check_configrw_name'] = 'Yazılabilir config.php';
$string['check_configrw_ok'] = 'config.php PHP betikleri tarafından değiştirilemez.';
$string['check_configrw_warning'] = 'PHP betikleri config.php\'yi değiştirebilir.';
$string['check_cookiesecure_details'] = '<p>https iletişimini etkin kılarsanız, güvenli çerezleri de etkin kılmanız önerilir. Ayrıca http\'den http\'ye kalıcı yeniden yönlendirmeyi eklemelisiniz.</p>';
$string['check_cookiesecure_error'] = 'Lütfen güvenli çerezleri etkin kılın';
$string['check_cookiesecure_name'] = 'Güvenli çerezler';
$string['check_cookiesecure_ok'] = 'Güvenli çerezler etkin kılındı.';
$string['check_crawlers_details'] = '<p>Google\'a açma ayarı arama motorlarının derslere konuk erişimi ile girmesini etkin kılar. Eğer konuk girişine izin verilmiyorsa, bu ayarı etkin kılmanın bir anlamı yoktur.</p>';
$string['check_crawlers_error'] = 'Arama motoru erişimine izin verilmiş ama konuk erişimi engellenmiştir.';
$string['check_crawlers_info'] = 'Arama motorları konuk olarak girebilir.';
$string['check_crawlers_name'] = 'Google\'a aç';
$string['check_crawlers_ok'] = 'Arama motoru erişimi etkin değildir.';
$string['check_defaultuserrole_details'] = '<p>Giriş yapan kullanıcıların tümüne varsayılan kullanıcı rolü yetenekleri verilmiştir. Lütfen bu rolde hiçbir riskli yeteneğe izin verilmediğinden emin olun.</p>
<p>Varsayılan kullanıcı rolü için desteklenen devralınan tek tip <em>Kimlik denetimi yapılmış kullanıcıdır</em>. Dersi görüntüleyebilme yetkisi etkin kılınmamalıdır.</p>';
$string['check_defaultuserrole_error'] = 'Varsayılan kullanıcı rolü "{$a}" yanlış tanımlandı!';
$string['check_defaultuserrole_name'] = 'Tüm kullanıcılar için varsayılan rol';
$string['check_defaultuserrole_notset'] = 'Varsayılan rol ayarlanmadı.';
$string['check_defaultuserrole_ok'] = 'Tüm kullanıcılar için varsayılan rol tanımı uygundur.';
$string['check_displayerrors_details'] = '<p>PHP ayarını <code>display_errors</code> etkin kılmak üretim sitelerinde önerilmez çünkü hata mesajları sunucunuzla ilgili hassas bilgileri açığa çıkarabilir.</p>';
$string['check_displayerrors_error'] = 'Hataları görüntülemek için PHP ayarı etkin kılındı. Bunun geçersiz kılınması önerilir.';
$string['check_displayerrors_name'] = 'PHP hatalarının görüntülenmesi';
$string['check_displayerrors_ok'] = 'PHP hatalarının görüntülenmesi geçersiz kılındı.';
$string['check_emailchangeconfirmation_details'] = '<p>Kullanıcılar profillerindeki e-posta adreslerini değiştirdiklerinde bir e-posta onay adımı önerilir. Eğer bu geçersiz kılınırsa, istenmeyen e-posta göndericileri sunucuyu istenmeyen e-posta göndermek için kötüye kullanabilir.</p>
<p>E-posta alanı kimlik denetimi eklentilerine kitlenebilir, bu olasılık burada göz önüne alınmamıştır.</p>';
$string['check_emailchangeconfirmation_error'] = 'Kullanıcılar herhangi bir eposta adresini girebilir.';
$string['check_emailchangeconfirmation_info'] = 'Kullanıcılar yalnızca izin verilmiş etki alanlarından alınan e-posta adreslerini girebilirler.';
$string['check_emailchangeconfirmation_name'] = 'E-posta değişikliği onayı';
$string['check_emailchangeconfirmation_ok'] = 'Kullanıcı profilindeki e-posta adresi değişikliğinin onayı';
$string['check_embed_details'] = '<p>Sınırsız nesne gömme çok tehlikelidir - herhangi bir kayıtlı kullanıcı diğer sunucu kullanıcılarına karşı XSS saldırısı başlatabilir. Bu ayar üretim sunucuları üzerinde geçersiz kılınmalıdır.</p>';
$string['check_embed_error'] = 'Sınırsız nesne gömülmesi etkindir - bu, çoğu sunucu için çok tehlikelidir.';
$string['check_embed_name'] = 'EMBED ve OBJECT etiketi izni';
$string['check_embed_ok'] = 'Sınırsız nesne gömülmesine izin verilmez.';
$string['check_frontpagerole_details'] = '<p>Varsayılan ana sayfa rolü ana sayfa etkinlikleri için tüm kayıtlı kullanıcılara verilir. Lütfen bu rol için hiçbir riskli yetkiye izin verilmediğinden emin olun.</p><p>Bu amaç için özel bir rolün oluşturularak devralınan rolün kullanılmaması önerilir.</p>';
$string['check_frontpagerole_error'] = 'Yanlış tanımlanmış ana sayfa rolü "{$a}" tespit edildi!';
$string['check_frontpagerole_name'] = 'Ana sayfa rolü';
$string['check_frontpagerole_notset'] = 'Ana sayfa rolü ayarlanmadı';
$string['check_frontpagerole_ok'] = 'Ana sayfa rol tanımı uygundur.';
$string['check_guestrole_details'] = '<p>Konuk rolü, giriş yapmayan konuklar ve geçici konuk dersi erişimi için değil, konuklar için kullanılır. Lütfen bu rolde riskli yeteneklere izin verilmediğinden emin olun.</p>
<p>Konuk rolü için tek desteklenen devralınan tip <em>Konuk</em>tur.</p>';
$string['check_guestrole_error'] = 'Konuk rolü "{$a}" yanlış tanımlanmıştır!';
$string['check_guestrole_name'] = 'Konuk rolü';
$string['check_guestrole_notset'] = 'Konuk rolü ayarlanmamıştır.';
$string['check_guestrole_ok'] = 'Konuk rolü tanımı uygundur.';
$string['check_mediafilterswf_details'] = '<p>Otomatik swf gömme çok tehlikelidir - herhangi kayıtlı bir kullanıcı başka sunucu kullanıcılarına XSS saldırısında bulunabilir. Lütfen bunu üretim sunucularında geçersiz kılın.</p>';
$string['check_mediafilterswf_error'] = 'Flash ortam filtresi etkindir - bu sunucuların çoğu için çok tehlikelidir.';
$string['check_mediafilterswf_name'] = 'SWF ortam filtresi etkindir';
$string['check_mediafilterswf_ok'] = 'Flash medya filtresi etkin değildir.';
$string['check_openprofiles_details'] = '<p>Açık kullanıcı profilleri istenmeyen e-posta göndericileri tarafından kötüye kullanılabilir. <code>Kullanıcıları profiller için giriş yapmaya zorla</code> ya da <code>Kullanıcıları giriş yapmaya zorla</code> yetkilerinden biri etkinleştirilmelidir.</p>';
$string['check_openprofiles_error'] = 'Herkes kullanıcı profillerini giriş yapmadan görüntüleyebilir.';
$string['check_openprofiles_name'] = 'Kullanıcı profillerini aç';
$string['check_openprofiles_ok'] = 'Kullanıcı profillerini izlemeden önce giriş yapmak gereklidir.';
$string['check_passwordpolicy_details'] = '<p>Parola ilkesinin ayarlanması önerilir, çünkü parola tahmin etmek yetkisiz erişim elde etmede en sık başvurulan yoldur. Yine de gereksinimleri çok sıkılaştırmayın, çünkü bunun sonucunda kullanıcılar parolalarını hatırlamayabilir, unutabilir ya da bir yere yazabilir.</p>';
$string['check_passwordpolicy_error'] = 'Parola ilkesi ayarlanmadı';
$string['check_passwordpolicy_name'] = 'Parola ilkesi';
$string['check_passwordpolicy_ok'] = 'Parola ilkesi etkindir.';
$string['check_riskadmin_detailsok'] = '<p>Lütfen aşağıdaki sistem yöneticileri listesini doğrulayın:</p>{$a}';
$string['check_riskadmin_detailswarning'] = '<p>Lütfen aşağıdaki sistem yöneticileri listesini doğrulayın:</p>{$a->admins}
<p>Yönetici rolünü yalnızca sistem bağlamında atamak önerilir. Aşağıdaki kullanıcılarda desteklenmeyen yönetici rolü atamaları vardır:</p>{$a->unsupported}';
$string['check_riskadmin_name'] = 'Yöneticiler';
$string['check_riskadmin_ok'] = '{$a} sunucu yöneticisi bulundu.';
$string['check_riskadmin_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) rol atamasını gözden geçir</a>';
$string['check_riskadmin_warning'] = '{$a->admincount} sunucu yöneticisi ve {$a->unsupcount} desteklenmeyen yönetici rolü ataması buldu.';
$string['check_riskbackup_details_overriddenroles'] = '<p> Bu etkin geçersiz kılmalar, kullanıcılara kullanıcı verilerini yedeklemelere ekleme olanağı verir. Lütfen bu iznin gerekli olduğundan emin olun. </ p> {$a}';
$string['check_riskbackup_details_systemroles'] = '<p> Şu sistem rolleri, kullanıcıların kullanıcı verilerini yedeklemelere dahil etmesine izin veriyor. Lütfen bu iznin gerekli olduğundan emin olun. </ p> {$a}';
$string['check_riskbackup_details_users'] = '<p> Yukarıdaki roller veya yerel geçersiz kılma nedeniyle, şu kullanıcı hesapları şu anda, derslerine kayıtlı herhangi bir kullanıcıdan gelen özel verileri içeren yedeklemeleri yapma iznine sahipler. (a) güvenilir ve (b) güçlü şifrelerle korunduklarından emin olun: </ p> {$a}';
$string['check_riskbackup_detailsok'] = 'Hiçbir rol açıkça kullanıcı verilerinin yedeklenmesine izin vermez. Bununla birlikte, "doanything" özelliğine sahip yöneticilerin hala bunu yapabilecek durumda olduklarına dikkat edin.';
$string['check_riskbackup_editoverride'] = '<a href="{$a->url}">{$a->name} içinde {$a->contextname}</a>';
$string['check_riskbackup_name'] = 'Kullanıcı verilerinin yedeklenmesi';
$string['check_riskbackup_ok'] = 'Hiçbir rol açıkça kullanıcı verilerinin yedeklenmesine izin vermez';
$string['check_riskbackup_unassign'] = '<a href="{$a->url}">{$a->fullname} ({$a->email}) içinde {$a->contextname}</a>';
$string['check_riskbackup_warning'] = '{$a->rolecount} rol, {$a->overridecount} geçersiz kılma ve {$a->usercount} kullanıcısı yedekleme olanağı buldular.';
$string['check_riskxss_details'] = '<p>RISK_XSS yalnızca güvenilir kullanıcıların kullanabileceği tehlikeli yetkileri gösterir.</p>
<p>Aşağıdaki kullanıcı listesini doğrulayın ve bu sunucuda bu kullanıcılara tamamen güvendiğinizden emin olun:</p><p>{$a}</p>';
$string['check_riskxss_name'] = 'XSS güvenilir kullanıcılar';
$string['check_riskxss_warning'] = 'RISK_XSS - güvenilmesi gereken {$a} kullanıcı buldu.';
$string['check_unsecuredataroot_details'] = '<p>Veriyolu klasörü web üzerinden erişilebilir olmamalıdır. Klasörün erişilebilir olmamasını sağlamanın en iyi yolu herkese açık web klasörü dışında bir klasör kullanmaktır.</p>
<p>Eğer klasörü taşıyacak olursanız, <code>config.php</code> içindeki <code>$CFG->dataroot</code> ayarını buna göre güncellemeniz gerekir.</p>';
$string['check_unsecuredataroot_error'] = 'Veriyolu klasörürünüz <code>{$a}</code> yanlış yerde ve internetten saldırılara açık durumda.';
$string['check_unsecuredataroot_name'] = 'Güvensiz veriyolu';
$string['check_unsecuredataroot_ok'] = 'Veriyolu klasörü web üzerinden erişilebilir olmamalı.';
$string['check_unsecuredataroot_warning'] = 'Veriyolu klasörünüz <code>{$a}</code> yanlış yerde ve internetten saldırılara maruz kalabilir.';
$string['check_webcron_details'] = '<p> Web tarayıcısından cron\'u çalıştırmak ayrıcalıklı bilgileri anonim kullanıcılara gösterebilir. Yalnızca komut satırından cron\'u çalıştırmanız veya uzaktan erişim için bir cron şifresi belirlemeniz önerilir. </ p>';
$string['check_webcron_ok'] = 'Adsız kullanıcılar cron\'a erişemez.';
$string['check_webcron_warning'] = 'Anonim kullanıcılar cron\'a erişebilir.';
$string['configuration'] = 'Yapılandırma';
$string['description'] = 'Açıklama';
$string['details'] = 'Ayrıntılar';
$string['issue'] = 'Sorun';
$string['pluginname'] = 'Güvenliği gözden geçir';
$string['security:view'] = 'Güvenlik raporunu görüntüle';
$string['timewarning'] = 'Veri işleme uzun sürebilir, lütfen sabırlı olun...';
