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
 * Strings for component 'auth_ldap', language 'tr', version '3.10'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Active Directory\'de yeni hesap oluşturulamıyor. Bunun çalışması için tüm gerekenleri yerine getirdiğinizden emin olun (LDAPS bağlantısı, kullanıcıyı uygun haklarla ağlama vs.)';
$string['auth_ldap_attrcreators'] = 'Üyeleri öznitelik oluşturmaya izinli olan gruplar ya da bağlamlar listesi. Çoklu grupları \';\' ile ayırın. Genellikle şu şekilde \'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_attrcreators_key'] = 'Öznitelik oluşturanlar';
$string['auth_ldap_auth_user_create_key'] = 'Kullanıcıları dışarıdan oluştur';
$string['auth_ldap_bind_dn'] = 'Kullanıcıları aramak için yetkili-kullanıcı kullanmak istiyorsanız burada belirtin. Örnek: \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Seçili Ad';
$string['auth_ldap_bind_pw'] = 'Yetkili kullanıcı için şifre';
$string['auth_ldap_bind_pw_key'] = 'Şifre';
$string['auth_ldap_bind_settings'] = 'Yetki ayarları';
$string['auth_ldap_changepasswordurl_key'] = 'Şifre değişim URL';
$string['auth_ldap_contexts'] = 'Kullanıcıların konumlandırılacağı bağlam listesi. Farklı bağlamları \';\' ile ayarın. Örnek: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Bağlamlar';
$string['auth_ldap_create_context'] = 'E-posta onayı ile kullanıcı oluşturmayı etkinleştirdiyseniz, oluşturulacak kullanıcı bağlamını belirtin. Bu bağlam, güvenlikle ilgili sorunları engellemek için diğer kullanıcılardan farklı olmalıdır. Bu bağlamı, ldap_context değişkenine eklemenize gerek yok; Moodle otomatik olarak bu bağlamdan kullanıcıları arayacaktır.<br /><b>Dikkat!</b> Kullanıcı oluşturmanın çalışması için auth/ldap/lib.php dosyasındaki auth_user_create() işlevini düzeltmek zorundasınız.';
$string['auth_ldap_create_context_key'] = 'Yeni kullanıcılar için bağlam';
$string['auth_ldap_create_error'] = 'LDAP\'ta kullanıcı oluşturmada hata.';
$string['auth_ldap_expiration_desc'] = 'Süresi dolmuş şifrelerin kontrol edilmesini iptal etmek için Hayır\'ı veya passwordexpiration zaman değerinin direkt LDAP sunucudan okunmasını istiyorsanız LDAP\'ı seçin.';
$string['auth_ldap_expiration_key'] = 'Zaman aşımı';
$string['auth_ldap_expiration_warning_desc'] = 'Şifre zaman aşımı uyarı bildirimi kaç gün öncesinden yapılacak?';
$string['auth_ldap_expiration_warning_key'] = 'Zaman aşımı uyarısı';
$string['auth_ldap_expireattr_desc'] = 'İsteğe bağlı: Şifre zaman aşımının saklandığı ldap-niteliğini (passwordExpirationTime) geçersiz kılar.';
$string['auth_ldap_expireattr_key'] = 'Son kullanma özniteliği';
$string['auth_ldap_graceattr_desc'] = 'İsteğe bağlı: gracelogin niteliğini geçersiz kılar';
$string['auth_ldap_gracelogin_key'] = 'Oturum açma özel izin özniteliği';
$string['auth_ldap_gracelogins_desc'] = 'LDAP gracelogin desteğini etkinleştir. Şifrenin süresi dolduktan sonra kullanıcı, gracelogin sayısı 0 olasıya kadar giriş yapabilir. Bu ayarın etkinleştirilmesiyle süresi dolan şifreler için gracelogin mesajı gösterilecektir.';
$string['auth_ldap_gracelogins_key'] = 'Özel izinle oturum açmalar';
$string['auth_ldap_groupecreators'] = 'Üyeleri grup oluşturmaya izinli grup ve bağlamların listesi. Çoklu grupları \';\' ile ayırın. Genellikle \'cn=teachers,ou=staff,o=myorg\' gibi.';
$string['auth_ldap_groupecreators_key'] = 'Grup oluşturucular';
$string['auth_ldap_host_url'] = 'LDAP alan adlarını URL biçiminde belirtin. Örnek: \'ldap://ldap.myorg.com/\' veya \'ldaps://ldap.myorg.com/\'. Birden fazla sunucu belirtmek için \';\' ile ayırın. Bu durumda birisi başarısızlığa uğradığında diğeri kullanılabilecektir.';
$string['auth_ldap_host_url_key'] = 'Host URL';
$string['auth_ldap_ldap_encoding'] = 'LDAP sunucu tarafından kullanılan kodlamayı belirtin. Muhtemelen utf-8\'dir. MS AD v2; cp1252, cp1250 gibi varsayılan platform kodlamasını kullanır.';
$string['auth_ldap_ldap_encoding_key'] = 'LDAP kodlaması';
$string['auth_ldap_login_settings'] = 'Giriş ayarları';
$string['auth_ldap_memberattribute'] = 'İsteğe bağlı: Kullanıcı bir gruba üyeyse üye niteliğini geçersiz kılar. Genellikle \'member\'';
$string['auth_ldap_memberattribute_isdn'] = 'İsteğe bağlı: 0 ya da 1 olan üye öznitelik değerlerinin işlemesini geçersiz kılar';
$string['auth_ldap_memberattribute_isdn_key'] = 'Üye özniteliği dn kullanır';
$string['auth_ldap_memberattribute_key'] = 'Üye niteliği';
$string['auth_ldap_no_mbstring'] = 'Active Directory\'de kullanıcılar oluşturmak için mbstring uzantısı gerekir.';
$string['auth_ldap_noconnect'] = 'LDAP modülü sunucuya bağlanamadı: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-modülü hiçbir sunucuya bağlanamadı: {$a}';
$string['auth_ldap_noextension'] = 'Uyarı: PHP LDAP modülü yok gibi görünüyor. Kurulduğundan ve etkinleştirildiğinden emin olun.';
$string['auth_ldap_objectclass'] = 'İsteğe bağlı: ldap_user_type için kullanıcı ararken kullanılan objectClass\'ı geçersiz kılar. Genellikle bunu değiştirmenize gerek yok.';
$string['auth_ldap_objectclass_key'] = 'Nesne sınıfı';
$string['auth_ldap_opt_deref'] = 'Takma adların arama süresince nasıl ele alınacağını belirler. Aşağıdaki alanlardan birini seçin: Hayır ((LDAP_DEREF_NEVER) veya Evet (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Takma adları ele alış';
$string['auth_ldap_passtype'] = 'LDAP sunucusundaki yeni ya da değiştirilmiş şifrelerin biçimini belirtin.';
$string['auth_ldap_passtype_key'] = 'Şifre biçimi';
$string['auth_ldap_passwdexpire_settings'] = 'LDAP şifre zamanaşımı ayarları';
$string['auth_ldap_preventpassindb'] = 'Şifrelerin Moodle veritabanı içinde saklanmasını önlemek için Evet\'i seçin.';
$string['auth_ldap_preventpassindb_key'] = 'Parola önbelleğe almayı önleyin';
$string['auth_ldap_rolecontext'] = '{$a->localname} bağlamı';
$string['auth_ldap_search_sub'] = 'Kullanıcıları alt bağlamlarda ara';
$string['auth_ldap_search_sub_key'] = 'Alt bağlamları ara';
$string['auth_ldap_server_settings'] = 'LDAP sunucu ayarları';
$string['auth_ldap_suspended_attribute'] = 'İsteğe bağlı: Verildiğinde, bu özellik yerel olarak oluşturulan kullanıcı hesabını etkinleştirmek / askıya almak için kullanılacaktır.';
$string['auth_ldap_suspended_attribute_key'] = 'Askıdaki öznitelik';
$string['auth_ldap_unsupportedusertype'] = 'auth: ldap user_create() seçili kullanıcı tipini desteklemez: {$a} (..henüz)';
$string['auth_ldap_update_userinfo'] = 'LDAP sunucudan gelen kullanıcı bilgilerini (ad, soyad, adres ...) Moodle\'a aktar. "Veri ilişkilendirmesi" ayarlarını da belirtmeniz gerekir.';
$string['auth_ldap_user_attribute'] = 'İsteğe bağlı: Kullanıcı arama için kullanılan ismi geçersiz kılar. Genellikle \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Kullanıcı niteliği';
$string['auth_ldap_user_exists'] = 'LDAP kullanıcı adı zaten var.';
$string['auth_ldap_user_settings'] = 'Kullanıcı bulma ayarları';
$string['auth_ldap_user_type'] = 'Kullanıcıların LDAP sunucuda nasıl saklanacağını seçin. Bu ayar aynı zamanda giriş ayarlarını ve kullanıcı oluşturmayla ilgili ayarları belirtir.';
$string['auth_ldap_user_type_key'] = 'Kullanıcı tipi';
$string['auth_ldap_usertypeundefined'] = 'config.user_type tanımlanmamış ya da işlev ldap_expirationtime2unix seçili tipi desteklemiyor!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type tanımlanmamış ya da işlev ldap_unixi2expirationtime seçili tipi desteklemiyor!';
$string['auth_ldap_version'] = 'Sunucunuzun kullandığı LDAP protokol sürümü';
$string['auth_ldap_version_key'] = 'Sürüm';
$string['auth_ldapdescription'] = 'Bu yöntem, kimlik denetiminin harici bir LDAP sunucu tarafından yapılmasını sağlar. Sağlanan kullanıcı adı ve şifre doğruysa, Moodle kendi veritabanı içinde yeni bir kullanıcı kaydı oluşturur. Bu yöntem, kullanıcı niteliklerini okuyabilir ve Moodle\'da istenen alanları önceden bu niteliklerle doldurabilir. Daha sonraki girişlerde de sadece kullanıcı adı ve şifre kontrol edilir.';
$string['auth_ldapextrafields'] = 'Bu alanlar isteğe bağlıdır. Burada belirttiğiniz <b>LDAP alanlarından</b> bilgilerle Moodle kullanıcı alanları önceden doldurulacaktır. <p>Alanları boş bırakırsanız LDAP\'tan hiçbir şey aktarılmaz ve bunun yerine Moodle varsayılanları kullanılır.</p><p>Bu durumda kullanıcı giriş yaptıktan sonra bu alanların hepsini düzenleyebilecektir.</p>';
$string['auth_ldapnotinstalled'] = 'LDAP kimlik denetimi kullanılamıyor. PHP LDAP modülü kurulmamış.';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'NTLM alan adı ile Single Sign On girişi yapmak için \'evet\' olarak ayarlayın. <strong>Not:</strong> Bunun çalışması için web sunucusunda ek ayar yapmanız gerekiyor. Bakınız: <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Etkinleştir';
$string['auth_ntlmsso_ie_fastpath'] = 'NTLM SSO hızlı yolunu etkin kılmak için evet\'e ayarlayın (belli adımları atlar ve yalnızca istemcinin tarayıcısı MS Internet Explorer ise çalışır)';
$string['auth_ntlmsso_ie_fastpath_attempt'] = 'Tüm tarayıcılarda NTLM protokolünü dene';
$string['auth_ntlmsso_ie_fastpath_key'] = 'MS IE hızlı yol mu?';
$string['auth_ntlmsso_ie_fastpath_yesattempt'] = 'Evet, NTLM\'ye diğer tarayıcıları deneme';
$string['auth_ntlmsso_ie_fastpath_yesform'] = 'Evet, tüm diğer tarayıcılar standar giriş formunu kullanır';
$string['auth_ntlmsso_maybeinvalidformat'] = 'REMOTE_USER üstbilgiden kullanıcı adı çıkarılamıyor. Yapılandırılmış format doğru mudur?';
$string['auth_ntlmsso_missing_username'] = '';
$string['auth_ntlmsso_remoteuserformat'] = '\'Kimlik doğrulama türü\' içinde \'NTLM\' seçtiyseniz, burada uzak kullanıcı adı biçimini belirtebilirsiniz. Bunu boş bırakırsanız, varsayılan DOMAINusername biçimi kullanılacaktır. Alan adının nerede göründüğünü belirtmek için isteğe bağlı <b>%domain% </ b> yer tutucu ve kullanıcı adının nerede olduğunu belirten zorunlu <b>%username%</ b> yer tutucusunu kullanabilirsiniz. <br /><br /> Bazı yaygın olarak kullanılan biçimler <tt>%domain%%username%</ tt> (MS Windows varsayılanı), <tt>%domain%/%username%</ tt>, <tt>%domain%+%username%</ tt> ve yalnızca <tt>%username%</ tt> (alan bölümü yoksa).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Uzak kullanıcı adı biçimi';
$string['auth_ntlmsso_subnet'] = 'Ayarlanırsa, yalnızca bu alt ağdaki istemcilerle SSO girişiminde bulunacaktır. Biçim: xxx.xxx.xxx.xxx/bitmask';
$string['auth_ntlmsso_subnet_key'] = 'Alt ağ';
$string['auth_ntlmsso_type'] = 'Web sunucusunda kullanıcıların kimliğini doğrulamak için yapılandırılan kimlik doğrulama yöntemi (şüphe varsa, NTLM\'yi seçin)';
$string['auth_ntlmsso_type_key'] = 'Kimlik Doğrulama Türü';
$string['connectingldap'] = 'LDAP sunucusuna bağlanılıyor ...';
$string['creatingtemptable'] = 'Geçici tablo oluşturma {$a}';
$string['diag_emptycontext'] = 'Boş içerik bulundu.';
$string['didntfindexpiretime'] = 'password_expire () zaman aşımı süresi bulamadık.';
$string['didntgetusersfromldap'] = 'LDAP\'den herhangi bir kullanıcı almadınız mı--hata? - -çıkarken';
$string['gotcountrecordsfromldap'] = 'LDAP\'den {$a} kayıt var';
$string['morethanoneuser'] = 'Garip! ldap\'ta birden fazla kullanıcı kaydı bulundu. Sadece ilkini kullanılabilir.';
$string['needbcmath'] = 'Active Directory ile zarif oturum açmalarını kullanmak için BCMath uzantısına ihtiyacınız vardır.';
$string['needmbstring'] = 'Active Directory\'de parolaları değiştirmek için mbstring uzantısına ihtiyacınız var.';
$string['nodnforusername'] = 'User_update_password () hatası. Için DN yok: {$a->username}';
$string['noemail'] = 'Size e-posta göndermeye çalıştı ama başarısız oldu!';
$string['notcalledfromserver'] = 'Web sunucusundan çağrılmamalı!';
$string['noupdatestobedone'] = 'Yapılacak güncelleme yok';
$string['nouserentriestoremove'] = 'Kaldırılacak kullanıcı girdileri yok';
$string['nouserentriestorevive'] = 'Canlandırılacak kullanıcı girdileri yok';
$string['nouserstobeadded'] = 'Eklenecek kullanıcı girdileri yok';
$string['ntlmsso_attempting'] = 'NTLM yolu ile SSO girişi yapılıyor';
$string['ntlmsso_failed'] = 'Otomatik-giriş yapılamadı. Normal giriş sayfasını deneyin...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO etkin değil.';
$string['ntlmsso_unknowntype'] = 'Bilinmeyen ntlmsso tipi!';
$string['pagedresultsnotsupp'] = 'LDAP çağrı sonuçları desteklenmiyor (PHP sürümünüz desteklenmiyor veya Moodle\'ı LDAP protokol sürüm 2\'yi kullanacak şekilde yapılandırdınız)';
$string['pagesize'] = 'Bu değerin LDAP sunucusu sonuç kümesi boyut sınırınızdan (tek bir sorguda döndürülebilecek maksimum giriş sayısı) daha küçük olduğundan emin olun.';
$string['pagesize_key'] = 'Sayfa boyutu';
$string['pluginname'] = 'LDAP sunucu';
$string['pluginnotenabled'] = 'Eklenti etkinleştirilmedi!';
$string['renamingnotallowed'] = 'LDAP\'de kullanıcı yeniden adlandırma izinli değil';
$string['rootdseerror'] = 'Active Directory için rootDSE sorgulanıyorken hata oluştu';
$string['start_tls'] = 'TLS şifrelemesi ile düzenli LDAP hizmeti (bağlantı noktası 389) kullanın';
$string['start_tls_key'] = 'TLS kullan';
$string['synctask'] = 'LDAP kullanıcılarının işini senkronize et';
$string['updatepasserror'] = 'User_update_password () hatası. Hata kodu: {$a->errno}; Hata dizgesi: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Şifre sona erdirme süresini okurken user_update_password () hatası. Hata kodu: {$a->errno}; Hata dizgesi: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Son kullanma süresini ve / veya graceloginleri değiştirirken user_update_password () hatası. Hata kodu: {$a->errno}; Hata dizgesi: {$a->errstring}';
$string['updateremfail'] = 'LDAP kaydı güncellenirken hata oluştu. Hata kodu: {$a->errno}; Hata dizesi: {$a->errstring} <br/>Anahtar({$ a->key}) - eski moodle değeri: \'{$a->ouvalue}\' yeni değer: \'{$a->nuvue}\'';
$string['updateremfailamb'] = 'LDAP, belirsiz alan {$a->key} ile güncellenemedi; Eski moodle değeri: \'{$a->ouvalue}\', yeni değer: \'{$a->nuvalue}\'';
$string['updateusernotfound'] = 'Harici olarak güncellenirken kullanıcı bulunamadı. Ayrıntılar takip: arama tabanı: \'{$a->userdn}\'; Arama filtresi: \'(objectClass = *)\'; Arama öznitelikleri: {$a->attribs}';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() seçilen kullanıcı türünü desteklemez: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() seçilen kullanıcı türünü desteklemez: {$a}';
$string['useracctctrlerror'] = '{$a} için userAccountControl alma hatası';
$string['userentriestoadd'] = 'Eklenecek kullanıcı girdileri: {$a}';
$string['userentriestoremove'] = 'Kaldırılacak kullanıcı girdileri: {$a}';
$string['userentriestorevive'] = 'Canlandırılacak kullanıcı girdileri: {$ a}';
$string['userentriestoupdate'] = 'Güncellenecek kullanıcı girdileri: {$a}';
$string['usernotfound'] = 'Kullanıcı LDAP\'de bulunamadı';
