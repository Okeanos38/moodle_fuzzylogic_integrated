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
 * Strings for component 'tool_mfa', language 'tr', version '3.10'.
 *
 * @package     tool_mfa
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['combination'] = 'Kombinasyon';
$string['connector'] = 'VE';
$string['created'] = 'Oluşturulan';
$string['createdfromip'] = 'IP\'den oluşturuldu';
$string['debugmode:currentweight'] = 'Şu anki ağırlık: {$a}';
$string['debugmode:heading'] = 'Hata ayıklama modu';
$string['devicename'] = 'Cihaz';
$string['email:subject'] = '{$a} hesabına giriş yapılamıyor';
$string['enablefactor'] = 'Faktörü etkinleştir';
$string['error:actionnotfound'] = '\'{$a}\' işlemi desteklenmiyor';
$string['error:directaccess'] = 'Bu sayfaya doğrudan erişilmez';
$string['error:factornotenabled'] = 'MFA Faktörü \'{$a}\' etkin değil';
$string['error:factornotfound'] = 'MFA Faktörü \'{$a}\' bulunamadı';
$string['error:home'] = 'Ana sayfaya dönmek için buraya tıklayın.';
$string['error:notenoughfactors'] = 'Kimlik doğrulaması yapılamıyor';
$string['error:reauth'] = 'Bu sitelerin kimlik doğrulama güvenlik politikasını karşılayacak kimliğinizi yeterince doğrulayamadık. Herhangi bir faktörü atladıysanız tekrar deneyebilirsiniz veya lütfen site yöneticinize başvurun.';
$string['error:revoke'] = 'Faktörü iptal edemez';
$string['error:setupfactor'] = 'Faktör kurulamıyor';
$string['error:support'] = 'Hala giriş yapamıyorsanız veya bunu yanlışlıkla gördüğünüzü düşünüyorsanız,lütfen destek için aşağıdaki adrese bir e-posta gönderin:';
$string['error:supportpage'] = 'Genel destek sayfasına gitmek için burayı tıklayın.';
$string['error:wrongfactorid'] = '\'{$a}\' faktör kimliği yanlış';
$string['event:userpassedmfa'] = 'Doğrulama geçti';
$string['event:userrevokedfactor'] = 'Faktör iptali';
$string['event:usersetupfactor'] = 'Faktör kurulumu';
$string['factor'] = 'Faktör';
$string['factorreport'] = 'Tüm faktör raporu';
$string['factorrevoked'] = '\'{$a}\' faktörü başarıyla iptal edildi.';
$string['factorsetup'] = '\'{$a}\' faktörü başarıyla kuruldu.';
$string['fallback'] = 'Yedek faktör';
$string['gotourl'] = 'Orijinal URL\'nize gidin:';
$string['inputrequired'] = 'Kullanıcı girişi';
$string['lastverified'] = 'Son doğrulama tarihi';
$string['lockoutnotification'] = '{$a} doğrulama denemeniz kaldı.';
$string['mfa'] = 'Çok Faktörlü Kimlik Doğrulama';
$string['mfa:mfaaccess'] = 'Çok Faktörlü Kimlik Doğrulama etkileşir';
$string['mfareports'] = 'Çok Faktörlü Kimlik Doğrulama raporu';
$string['mfasettings'] = 'Çok Faktörlü Kimlik Doğrulama Yönet';
$string['na'] = 'yok';
$string['overall'] = 'Tüm';
$string['pending'] = 'Bekliyor';
$string['pluginname'] = 'Çok faktörlü kimlik doğrulama';
$string['preferences:activefactors'] = 'Aktif faktörler';
$string['preferences:availablefactors'] = 'Mevcut faktörler';
$string['preferences:header'] = 'Çok faktörlü kimlik doğrulama seçenekleri';
$string['privacy:metadata:tool_mfa'] = '';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'Faktörün kurulduğu IP';
$string['privacy:metadata:tool_mfa:factor'] = 'Faktör tipi';
$string['privacy:metadata:tool_mfa:id'] = 'Kayıtlı ID';
$string['privacy:metadata:tool_mfa:label'] = 'faktör etiketi, örneğin cihaz veya e-posta';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Kullanıcının bu faktörle en son doğrulandığı zaman';
$string['privacy:metadata:tool_mfa:secret'] = 'Faktör için gizli veriler';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Faktör örneğinin ayarlandığı zaman';
$string['setupfactor'] = 'Faktör ayarları';
$string['setuprequired'] = 'Kullanıcı ayarları';
$string['state:fail'] = 'Başarısız';
$string['state:neutral'] = 'Nötr';
$string['state:pass'] = 'Geçiş';
$string['state:unknown'] = 'Bilinmeyen';
