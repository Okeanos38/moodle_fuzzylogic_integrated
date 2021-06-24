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
 * Strings for component 'auth', language 'tr', version '3.10'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Etkin kimlik doğrulama eklentileri';
$string['allowaccountssameemail'] = 'Aynı e-postayla hesaplara izin ver';
$string['allowaccountssameemail_desc'] = 'Etkinleştirilirse, birden fazla kullanıcı hesabı aynı e-posta adresini paylaşabilir. Bu, güvenlik veya gizlilik sorunlarıyla, örneğin şifre değişikliği onay e-postasıyla sonuçlanabilir.';
$string['alternatelogin'] = 'Buraya bir URL girerseniz, sitenin giriş adresi olarak bu sayfa kullanılacaktır. Bu sayfa, eylemin <strong>\'{$a}\'</strong> olarak ayarlandığı, kullanıcı adı(<strong>username</strong>) ve şifre(<strong>password</strong>) alanlarını döndüren bir formdan oluşmalıdır.<br />Yanlış adres girmeniz durumunda kendi kendinizi bile site dışı bir yere kilitleyebilirsiniz.<br />Varsayılan giriş sayfasını kullanmak için burayı boş bırakın.';
$string['alternateloginurl'] = 'Alternatif giriş URL\'si';
$string['auth_changepasswordhelp'] = 'Şifre değiştirme yardımı';
$string['auth_changepasswordhelp_expl'] = '{$a} şifresini kaybeden kullanıcılara kayıp şifre yardımı göster. Bu, <strong>Şifre Değiştirme Adresi</strong> veya Dahili Moodle şifre değiştirme yerine gösterilecektir.';
$string['auth_changepasswordurl'] = 'Şifre değiştirme adresi';
$string['auth_changepasswordurl_expl'] = '{$a} şifrelerini kaybeden kullanıcılara şifre gönderimini yapacak adresi burada belirtin. <strong>Şifre Değişim Sayfasını</strong> Hayır olarak ayarlayın.';
$string['auth_changingemailaddress'] = '{$a->oldemail}\'den {$a->newemail}\'a e-posta adres değişikliği istediniz. Güvenlik nedeniyle, yeni adresinize adresin size ait olduğunu teyit etmek için bir e-posta gönderiyoruz. Mesajın içinde size gönderilen URL\'yi açar açmaz e-posta adresiniz güncellenecektir.';
$string['auth_common_settings'] = 'Genel Ayarlar';
$string['auth_data_mapping'] = 'Veri İlişkilendirmesi';
$string['auth_fieldlock'] = 'Değeri kilitle';
$string['auth_fieldlock_expl'] = '<p><b>Değeri kilitle:</b> Etkinleştirilirse, bu alanın kullanıcılar ve yöneticiler tarafından düzenlenmesi engellenecektir. Harici yetkilendirme sistemlerinde bu alanı düzenliyorsanız bu seçeneği kullanabilirsiniz.</p>';
$string['auth_fieldlockfield'] = 'Değeri ({$a}) kilitle';
$string['auth_fieldlocks'] = 'Kullanıcı alanlarını kilitle';
$string['auth_fieldlocks_help'] = '<p>Kullanıcı verisi alanlarını kilitleyebilirsiniz. Bu, kullanıcı kayıtlarının yöneticiler tarafından elle düzelten veya güncellemek için \'Kullanıcı yükle\' özelliğini kullanan siteler için kullanışlıdır. Şayet Moodle tarafından gerekli olan alanları kilitliyorsanız, kullanıcı hesapları oluşturulurken bu alanı sağladığınızdan emin olun; aksi durumda bu hesaplar kullanılamaz.</p><p>Sorunlarla karşılaşmamak için kilit modunu \'Boşsa kilit yok\' ayarında olduğunu dikkate alın.</p>';
$string['auth_fieldmapping'] = 'Veri haritalama ({$a})';
$string['auth_invalidnewemailkey'] = 'Hata: E-posta adresinde bir değişikliği teyit etmeye çalışıyorsanız, size e-posta ile gönderdiğimiz URL\'yi kopyalamada hata yapmış olabilirsiniz. Lütfen adresi kopyalayıp tekrar deneyin.';
$string['auth_multiplehosts'] = 'Birden çok alan adları VEYA adresler belirtilebilir. (örnek host1.com;host2.com;host3.com veya xxx.xxx.xxx.xxx;xxx.xxx.xxx.xxx)';
$string['auth_notconfigured'] = '{$a} kimlik doğrulama yöntemi yapılandırılmadı.';
$string['auth_outofnewemailupdateattempts'] = 'E-posta adresinizi güncellemek için izin verilen deneme sayısını aştınız. Güncelleme talebiniz iptal edildi.';
$string['auth_passwordisexpired'] = 'Şifrenizin süresi dolmuş. Şifrenizi şimdi değiştirmek istiyor musunuz?';
$string['auth_passwordwillexpire'] = 'Şifrenizin süresi {$a} gün içinde dolacak. Şifrenizi şimdi değiştirmek istiyor musunuz?';
$string['auth_remove_delete'] = 'İçi tamamen sil';
$string['auth_remove_keep'] = 'İçi koru';
$string['auth_remove_suspend'] = 'İçi askıya al';
$string['auth_remove_user'] = 'Kullanıcı dış kaynaktan silindiğinde yığın eşzamanlaması sırasında iç kullanıcı hesabına ne yapılacağını belirtin. Yalnızca askıya alınmış kullanıcılar dış kaynakta yeniden ortaya çıkarlarsa otomatik olarak canlandırılacaklardır.';
$string['auth_remove_user_key'] = 'Silinmiş dış kullanıcı';
$string['auth_sync_script'] = 'Cron eşzamanlama betiği';
$string['auth_sync_suspended'] = 'Etkinleştirildiğinde, askıdaki özelliği yerel kullanıcı hesabı askıya alma durumunu güncellemek için kullanılacaktır.';
$string['auth_sync_suspended_key'] = 'Yerel kullanıcı askıya alma durumunu senkronize edin';
$string['auth_updatelocal'] = 'Yereli güncelle';
$string['auth_updatelocal_expl'] = '<p><b>Yereli güncelle:</b> Etkinleştirilirse, kullanıcı her giriş yaptığında veya kullanıcı eşzamanlaması olması durumunda harici yetkilendirme tarafından alan güncellenir. Yerel olarak güncellenecek alanların kilitlenmesi gerekir.</p>';
$string['auth_updatelocalfield'] = 'Yerel olarak ({$a}) güncelle';
$string['auth_updateremote'] = 'Harici olanı güncelle';
$string['auth_updateremote_expl'] = '<p><b>Harici olanı güncelle:</b> Etkinleştirilmesi durumunda kullanıcı kaydı güncellendiği anda harici yetki sistemi de güncellenir. Alanların düzenlenebilmesi için alanda kilit olmaması gerekir.</p>';
$string['auth_updateremote_ldap'] = '<p><b>Not:</b> Harici LDAP verisi güncellemesi, yetkilendirme için kullanılan binddn ve bindpw alanlarının kullanıcı alanlarını güncellemede düzenleme haklarının olmasını gerektirir. Bu, şu anda birden fazla değerli nitelikleri saklamaz ve güncellemede ek değerleri silecektir.</p>';
$string['auth_updateremotefield'] = 'Harici olarak ({$a}) güncelle';
$string['auth_user_create'] = 'Kullanıcı oluşturmayı etkinleştir';
$string['auth_user_creation'] = 'Yeni (anonim) kullanıcılar, harici yetkilendirme kaynağında veya e-postayla onay ile hesap açabilirler. Bunu etkinleştirirseniz aynı zamanda kullanıcı oluşturma için modüle-özel seçenekleri de yapılandırmayı unutmayın.';
$string['auth_usernameexists'] = 'Seçilen kullanıcı zaten var. Başka bir tane seçin.';
$string['auth_usernotexist'] = 'Varolmayan kullanıcı: {$a}\'yı güncelleyemiyor';
$string['authenticationoptions'] = 'Kimlik denetimi seçenekleri';
$string['authinstructions'] = 'Buraya kullanıcılarınız için yönergeleri yazabilirsiniz. Kullanıcılarınız böylece hangi kullanıcı adı ve şifreyi kullanmaları gerektiğini bileceklerdir. Buraya yazdığınız metin, giriş sayfasında gösterilecektir. Hiçbir şey yazmazsanız hiçbir yönerge ekranda gösterilmez.';
$string['authloginviaemail'] = 'Eposta yoluyla girişe izin ver';
$string['authloginviaemail_desc'] = 'Siteye giriş için e-posta ve kulanıcı adını birlikteç kullanın (eğer benzersizse)';
$string['auto_add_remote_users'] = 'Uzak kullanıcıları otomatik ekle';
$string['changepassword'] = 'Şifre değiştirme bağlantısı';
$string['changepasswordhelp'] = 'Kullanıcılar kullanıcıadı/şifrelerini unuttuklarında veya değiştirmek istediklerinde burada adresi belirtebilirsiniz. Bu, kullanıcılara giriş ve kullanıcı sayfalarında bir düğme gösterecek. Bunu boş bırakırsanız düğme gösterilmez.';
$string['chooseauthmethod'] = 'Bir kimlik denetimi metodu seçin';
$string['chooseauthmethod_help'] = 'Bu ayarlama kullanıcın giriş yaparken, kimlik doğrulama yöntemini kullanmasını belirler. Kimlik doğrulama eklentisinin seçili olduğu durumlarda etkin olmalı, aksi durumda kullanıcı giriş yapamaz. Kullanıcının giriş yapmasını engellemek için, "Giriş yok" seçeneğini seçin.';
$string['createpassword'] = 'Şifre oluştur ve kullanıcıya bildir';
$string['createpasswordifneeded'] = 'Gerekirse şifre oluştur';
$string['emailchangecancel'] = 'E-posta değişikliğini iptal et';
$string['emailchangepending'] = 'Değişiklik beklemede. {$a->preference_newemail}\'de size gönderilmiş olan bağlantıyı açın.';
$string['emailnowexists'] = 'İstekte bulunmanızdan sonra, profilinize atamaya çalıştığınız e-posta adresi başka birisine atandı. Bu nedenle e-posta adres değişikliği isteğiniz iptal oldu, ama farklı bir adresle tekrar deneyebilirsiniz.';
$string['emailupdate'] = 'E-posta adresi güncellemesi';
$string['emailupdatemessage'] = 'Merhaba {$a->fullname},

{$a->site} sitesindeki kullanıcı hesabınız için e-posta adresinizde değişiklik isteğinde bulundunuz. Lütfen bu değişikliği onaylamak için tarayıcınızda aşağıdaki URL\'yi açın.

Herhangi bir sorunuz varsa bu adres üzerinden destek isteyin: {$a->supportemail}

{$a->url}';
$string['emailupdatesuccess'] = '<em>{$a->fullname}</em> kullanıcısının e-posta adresi başarılı bir şekilde <em>{$a->email}</em> olarak güncellendi.';
$string['emailupdatetitle'] = '{$a->site}\'deki e-posta güncellemesinin teyidi';
$string['errormaxconsecutiveidentchars'] = 'Şifreler en fazla {$a} ardışık özdeş karakter içermelidir.';
$string['errorminpassworddigits'] = 'Şifreler en az {$a} rakam içermeli.';
$string['errorminpasswordlength'] = 'Şifreler en az {$a} karakter uzunluğunda olmalı.';
$string['errorminpasswordlower'] = 'Şifreler en az {$a} küçük karakter içermeli.';
$string['errorminpasswordnonalphanum'] = 'Şifreler en az {$a} harf veya *, -, ya da # gibi rakam olmayan karakter içermeli.';
$string['errorminpasswordupper'] = 'Şifreler en az {$a} büyük karakter içermeli.';
$string['errorpasswordreused'] = 'Bu şifre daha önce kullanılmış ve tekrar kullanılmasına izin verilmiyor';
$string['errorpasswordupdate'] = 'Şifreyi güncellerken hata, şifre değiştirilmedi.';
$string['eventuserloggedin'] = 'Kullanıcı oturum açtı';
$string['eventuserloggedinas'] = 'Kullanıcı, başka bir kullanıcı olarak oturum açtı';
$string['eventuserloginfailed'] = 'Kullanıcı girişi başarısız';
$string['forcechangepassword'] = 'Şifre değişimini zorunlu tut';
$string['forcechangepassword_help'] = 'Kullanıcıların sonraki girişinde şifre değişimini zorunlu tut.';
$string['forcechangepasswordfirst_help'] = 'Kullanıcılar ilk defa giriş yaptıklarında şifre değişimini zorunlu tut';
$string['forgottenpassword'] = 'Buraya bir şifre girerseniz, bu sitede kayıp şifre kurtarma sayfası olarak kullanılacaktır. Bu, şifrelerin tamamen Moodle dışında ele alındığı sitelerde kullanım içindir. Varsayılan şifre kurtarmayı kullanmak için bunu boş bırakın.';
$string['forgottenpasswordurl'] = 'Unutulmuş şifre URL';
$string['guestloginbutton'] = 'Ziyaretçi giriş düğmesi';
$string['incorrectpleasetryagain'] = 'Hatalı. Lütfen yeniden deneyin.';
$string['infilefield'] = 'Dosyada alan gerekli';
$string['informminpassworddigits'] = 'en az {$a} basamak';
$string['informminpasswordlength'] = 'en az {$a} karakter';
$string['informminpasswordlower'] = 'en az {$a} küçük harf';
$string['informminpasswordnonalphanum'] = 'en az {$a} *, -, ya # gibi alfanumerik olmayan karakter';
$string['informminpasswordreuselimit'] = '{$a} değişikliklerden sonra şifreler tekrar kullanılabilir';
$string['informminpasswordupper'] = 'en az {$a} büyük harf';
$string['informpasswordpolicy'] = 'Şifre {$a} içermeli';
$string['instructions'] = 'Yönergeler';
$string['internal'] = 'Dahili';
$string['limitconcurrentlogins'] = 'Eşzamanlı oturum açmayı sınırla';
$string['limitconcurrentlogins_desc'] = 'Etkinleştirildiğinde, her kullanıcı için eşzamanlı tarayıcı oturum açma sayısı sınırlanır. En eski oturum, sınıra ulaştıktan sonra sonlandırılır; kullanıcıların kaydedilmemiş tüm işleri kaybedebileceğini lütfen unutmayın. Bu ayar, tek oturum açma (SSO) kimlik doğrulama eklentileri ile uyumlu değildir.';
$string['locked'] = 'Kilitli';
$string['md5'] = 'MD5 değeri';
$string['nopasswordchange'] = 'Şifre değiştirilemez';
$string['nopasswordchangeforced'] = 'Şifrenizi değiştirmeden ilerleyemezsiniz, ancak şifrenizi değiştirmek için bir sayfa yok. Lütfen Moodle Yöneticinizle iletişime geçin.';
$string['noprofileedit'] = 'Profil düzenlenemez';
$string['ntlmsso_attempting'] = 'NTLM ile SSO girişi yapılıyor...';
$string['ntlmsso_failed'] = 'Otomatik-giriş başarısız oldu. Normal giriş sayfasını deneyin...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO devre dışı.';
$string['passwordhandling'] = 'Şifre alanı işleme';
$string['plaintext'] = 'Düz metin';
$string['pluginnotenabled'] = '\'{$a}\' kimlik denetimi eklentisi etkin değil.';
$string['pluginnotinstalled'] = '\'{$a}\' kimlik denetimi eklentisi kurulu değil.';
$string['potentialidps'] = 'Şu hesabınızla oturum açın:';
$string['recaptcha'] = 'Güvenlik kodu';
$string['recaptcha_help'] = 'CAPTCHA, otomatik programların kötüye kullanımını önlemek içindir. Gördüğünüz kelimeleri sırasıyla ve boşluk bırakarak kutuya girin.';
$string['security_question'] = 'Güvenlik sorusu';
$string['selfregistration'] = 'Kendi kendine kayıt';
$string['selfregistration_help'] = 'E-posta temelli kendi kendine kayıt gibi bir kimlik denetimi eklentisi seçilirse olası kullanıcıların yeni hesap oluşturarak kaydolmasına olanak sağlanmış olur. Bu aynı zamanda istenmeyen posta göndericilerinin de hesap oluşturmalarına, forumları, blogları vb kullanarak reklam yapmasına olanak sağlar. Bu riskten kaçınmak için kendi kendine kayıt kapatılmalı veya <em>İzin verilen e-posta alan adları</em> ayarı yapılarak sınırlandırılmalıdır.';
$string['settingmigrationmismatch'] = 'Eklenti ayar adları düzeltilirken değerlerde uyuşmazlık belirlendi! Kimlik doğrulama eklentisi \'{$a->plugin}\' için  \'{$a->setting}\' ayarı eski adda \'{$a->legacy}\' ve yeni adda \'{$a->current}\' olarak belirlenmiş. Bu ikinci değer geçerli değer olarak belirlense de kontrol edip beklendiği gibi çalıştığından emin olun.';
$string['sha1'] = 'SHA-1 şifrelemesi';
$string['showguestlogin'] = 'Ziyaretçi düğmesini giriş sayfasından gizleyebilir veya gösterebilirsiniz.';
$string['stdchangepassword'] = 'Şifre değiştirmek için standart sayfa kullan';
$string['stdchangepassword_expl'] = 'Harici yetkilendirme sistemi Moodle yoluyla şifre değişikliklerine izin veriyorsa bunu Evet olarak değiştirin. Bu ayar \'Şifre Değiştirme Sayfasını\' hükümsüz kılar.';
$string['stdchangepassword_explldap'] = 'DİKKAT: LDAP sunucuya uzaktan erişiliyorsa şifreli SSL bağlantısı (ldaps://) kullanmanız tavsiye edilir.';
$string['suspended'] = 'Askıya alınmış hesap';
$string['suspended_help'] = 'Askıya alınmış kullanıcı hesapları giriş yapamaz veya web hizmetlerini kullanamaz, gönderilmiş mesajlar göz ardı edilir.';
$string['testsettings'] = 'Test ayarları';
$string['testsettingsheading'] = 'Kimlik doğrulama ayarlarını test et - {$a}';
$string['unlocked'] = 'Kilit yok';
$string['unlockedifempty'] = 'Boşsa kilit yok';
$string['update_never'] = 'Asla';
$string['update_oncreate'] = 'Oluşturulduğunda';
$string['update_onlogin'] = 'Her giriş yapıldığında';
$string['update_onupdate'] = 'Güncellendiğinde';
$string['user_activatenotsupportusertype'] = 'auth: ldap user_activate() seçili kullanıcı tipini desteklemiyor: {$a}';
$string['user_disablenotsupportusertype'] = 'auth: ldap user_disable() seçili kullanıcı tipini desteklemiyor (..şimdilik)';
$string['username'] = 'Kullanıcı adı';
$string['username_help'] = 'Bazı kimlik doğrulama eklentilerinin kullanıcı adını değiştirmenize izin vermeyeceğini lütfen unutmayın.';
