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
 * Strings for component 'auth_googleoauth2', language 'tr', version '3.10'.
 *
 * @package     auth_googleoauth2
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dropboxclientid'] = 'Uygulamanızın Anahtar / Gizililiği, <a href="https://www.dropbox.com/developers/apps" target="_blank"> Dropbox uygulama konsolunda </a> oluşturulur.
Bir uygulama oluştururken aşağıdaki ayarları girin (Dropbox yalnızca https url\'ini desteklediğine dikkat edin, böylece Moodle siteniz https\'yi desteklemelidir):
<br/>App website: {$a->siteurl}
<br/>Redirect URIs: {$a->callbackurl}';
$string['auth_dropboxclientid_key'] = 'Dropbox uygulama anahtarı';
$string['auth_dropboxclientsecret_key'] = 'Dropbox Uygulama gizliliği';
$string['auth_facebookclientid'] = 'Uygulama Kimliği / Gizliliği <a href="https://developers.facebook.com/apps/" target="_blank"> Facebook geliştirici sayfasında </a> oluşturulabilir:
<br/>Yeni bir uygulama ekleyin>Web sitesi> Uygulama adınız olarak site adınızı girin> Yeni facebook uygulaması kimliği oluşturun> Site URL\'sini girin - Mobil URL\'yi girmeniz gerekmez>
Onay sayfasında, "Davetiye Gösterge Tablosuna atlayın" bağlantısına bakın> uygulama gösterge tablosunda kimliği / sırrını bulmanız gerekir>Ayarlar> Gelişmiş>Geçerli OAuth yönlendirmeli URI\'lerini girin
<br/>Site URL\'si: {$a->siteurl}
<br/>Uygulama alanları: {$a->sitedomain}
<br/>Geçerli OAuth yönlendirme URI\'leri: {$a->callbackurl}
<br/><strong>UYARI: Facebook geçtiğimiz günlerde API\'yi değiştirdi. Yeni oluşturulan API anahtarı için çalışmıyor. Örneğin, bunun Facebook API 2.8\'den koptuğunu biliyoruz.
Ve Facebook API 2.2\'ye kadar çalışıyor. Facebook API 2.3, 2.4, 2.5, 2.6 ve 2.7\'yi test etmedik. Zaten bir eski Facebook API anahtarınız yoksa özetlemek için,
O zaman bu oturum açmada Facebook\'un çalışmayacağını garanti eder. Lütfen eklenti alternatiflerine bakın veya bir sonraki eklenti büyük güncellemesini bekleyin (henüz planlanmamıştır.)</ strong>';
$string['auth_facebookclientid_key'] = 'Facebook Uygulama Kimliği';
$string['auth_facebookclientsecret_key'] = 'Facebook Uygulama gizliliği';
$string['auth_githubclientid'] = 'İstemci kimliğiniz / Gizliliğiniz, <a href="https://github.com/settings/applications/new" target="_blank"> Github kayıt başvuru sayfasında </a> oluşturulabilir:
<br/>Ana Sayfa URL: {$a->siteurl}
<br/>Yetkilendirme geri arama URL\'si: {$a->callbackurl}';
$string['auth_githubclientid_key'] = 'Github istemci kimliği';
$string['auth_githubclientsecret_key'] = 'Github istemci gizliliği';
$string['auth_googleclientid'] = 'İstemci kimliğiniz / Gizliliğiniz, <a href="https://code.google.com/apis/console" target="_blank"> Google konsol API\'sında </a> oluşturulabilir:
<br/>
Proje> APIS & AUTH> Kimlik Bilgileri> Yeni İstemci Kimliği Yarat> Web uygulaması
<br/>
Yetkili Javascript kökeni: {$a->jsorigins}
<br/>
Yetkili Yönlendirme URI\'sı: {$a->redirecturls}
<br/>
Ayrıca, Project> APIS & AUTH> API\'lerinde <strong> "Google+ API" nı </ strong> etkinleştirmeniz gerekir';
$string['auth_googleclientid_key'] = 'Google İstemci kimliği';
$string['auth_googleclientsecret'] = 'Google İstemci gizliliği';
$string['auth_googleipinfodbkey'] = 'IPinfoDB, ziyaretçinin ülkesini ve şehrini öğrenmenize izin veren bir hizmettir.
Bu ayar isteğe bağlıdır. Ücretsiz bir anahtar almak için <a href="http://www.ipinfodb.com/register.php">IPinfoDB</a> \'ne abone olabilirsiniz. <br/>
Web sitesi: {$a->website}';
$string['auth_googleipinfodbkey_key'] = 'IPinfoDB Anahtarı';
$string['auth_googleoauth2description'] = 'Bir kullanıcının siteye harici bir kimlik doğrulama sağlayıcısı ile bağlanmasına izin verin: Google / Facebook / Windows Live.
Kullanıcı bir kimlik doğrulama sağlayıcısına ilk kez bağlandığında yeni bir hesap oluşturulur.
Kimlik doğrulama işlemi yapılırken hesap oluşturma işlemini (authpreventaccountcreation admin ayarı) engelleyin <b> gerekir </ b> ayarını kaldırın.';
$string['auth_googlesettings'] = 'Ayarlar';
$string['auth_linkedinclientid'] = 'API / Gizli anahtarlarınız <a href="https://www.linkedin.com/secure/developer" target="_blank"> Linkedin kayıt başvuru sayfasında </a> oluşturulabilir:
<br/> Web sitesi URL\'si: {$a->siteurl}
<br/> OAuth 2.0 Redirect URL\'sini kabul et: {$a->callbackurl}';
$string['auth_linkedinclientid_key'] = 'Linkedin API Anahtarı';
$string['auth_linkedinclientsecret_key'] = 'Linkedin Gizlilik anahtarı';
$string['auth_microsoftclientid'] = 'İstemci Kimliğiniz / Gizliliğiniz, <a href="https://apps.dev.microsoft.com/" target="_blank"> Microsoft Uygulama Kayıt Yeri Portalında </a> oluşturulabilir:
<br /> Yönlendirme URI\'sı: {$a->callbackurl}';
$string['auth_microsoftclientid_key'] = 'Microsoft v2 Uygulama Kimliği';
$string['auth_microsoftclientsecret_key'] = 'Microsoft v2 Uygulama gizliliği';
$string['auth_sign-in_with'] = '{$a->providername} ile oturum açın';
$string['couldnotauthenticate'] = 'Kimlik doğrulama başarısız oldu - Lütfen tekrar oturum açmayı deneyin.';
$string['couldnotauthenticateuserlogin'] = 'Kimlik doğrulama yöntemi hatası. <br/>
Lütfen kullanıcı adınız ve şifrenizle tekrar giriş yapmayı deneyin. <br/>
<br/>
<a href="{$a->loginpage}"> Tekrar deneyin </a>. <br/>
<a href="{$a->forgotpass}"> Şifrenizi mi unuttunuz? </a>';
$string['couldnotgetgoogleaccesstoken'] = 'Kimlik doğrulama sağlayıcısı bize bir iletişim hatası gönderdi. Lütfen tekrar oturum açmayı deneyin.';
$string['emailaddressmustbeverified'] = 'E-posta adresiniz, seçtiğiniz kimlik doğrulama yöntemi ile doğrulanmamıştır. Büyük olasılıkla bir "e-posta adresini doğrula" yı tıklamayı unuttun
Hizmetine aboneliğiniz sırasında Google veya Facebook\'un göndermiş olması gereken bağlantı.';
$string['faileduserdetails'] = 'Site seçilen sağlayıcıya bağlanmayı başarır, ancak kullanıcı bilgilerinizi alamaz. Google kullanıyorsanız, site yöneticinizin Google geliştirici konsolunda Google+ API\'sını etkinleştirdiğinden emin olun. Bu, bu hatanın en yaygın sebebidir.';
$string['microsoft_failure'] = 'Microsoft sunuculardan bir yetkilendirme kodu almadık.';
$string['moreproviderlink'] = 'Başka bir hizmetle oturum açın.';
$string['noaccountyet'] = 'Siteyi henüz kullanma izniniz yok. Lütfen yöneticinizle iletişime geçin ve onlardan hesabınızı etkinleştirmesini isteyin.';
$string['othermoodle'] = 'Diğer Moodle auth';
$string['signinwithanaccount'] = '{$a} ile giriş yapın';
$string['stattitle'] = 'Geçmişteki {$a->periodindays} gün içindeki giriş istatistikleri (eklenti yükleme / yükseltme zamanından başlamak üzere)';
$string['supportmaintenance'] = 'Bu eklentinin bakımını desteklemek için <a target="_blank" href="https://moodle.org/plugins/view/auth_googleoauth2"> Moodle.org eklentisi sayfasına </a> giriş yapın ve favorilerime \'Ekle\'yi tıklayın. \'. Teşekkürler!';
$string['unknownfirstname'] = 'Bilinmeyen İsim';
$string['unknownlastname'] = 'Bilinmeyen soyad';
