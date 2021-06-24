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
 * Strings for component 'webservice', language 'tr', version '3.10'.
 *
 * @package     webservice
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accessexception'] = 'Erişim kontrolü istisnası';
$string['actwebserviceshhdr'] = 'Etkin web servis protokolleri';
$string['addaservice'] = 'Servis ekle';
$string['addcapabilitytousers'] = 'Kullanıcıların yetkisini kontrol et';
$string['addcapabilitytousersdescription'] = 'Kullanıcıların iki yeteneği olmalıdır - webservice:createtoken ve kullanılan protokollere uyan bir yetenek, örneğin webservice/rest:use, webservice/soap: use. Bunu başarmak için, izin verilen uygun yeteneklere sahip bir web hizmetleri rolü oluşturun ve bir sistem rolü olarak web hizmetleri kullanıcılarına atayın.';
$string['addfunction'] = 'İşlev ekle';
$string['addfunctionhelp'] = 'Servise eklenecek işlevi seçin.';
$string['addfunctions'] = 'İşlevleri ekle';
$string['addfunctionsdescription'] = 'Yeni oluşturulmuş servis için gerekli işlevleri seç';
$string['addrequiredcapability'] = 'Gerekli yetkinliği ata/atama';
$string['addservice'] = 'Yeni servis ekle: {$a->name} (id: {$a->id})';
$string['addservicefunction'] = 'Şu servise işlev ekleyin " {$a}"';
$string['allusers'] = 'Tüm kullanıcılar';
$string['apiexplorer'] = 'API gezgini';
$string['apiexplorernotavalaible'] = 'API gezgini henüz ulaşılabilir değil';
$string['arguments'] = 'Argümanlar';
$string['authmethod'] = 'Kimlik doğrulama yöntemi';
$string['callablefromajax'] = 'AJAX\'den çağrı yapılabilir';
$string['cannotcreatetoken'] = '{$a} hizmeti için web hizmeti simgesi oluşturmak için izniniz yok.';
$string['cannotgetcoursecontents'] = 'Ders içeriği alınamadı';
$string['checkusercapability'] = 'Kullanıcı yetkisini kontrol et';
$string['checkusercapabilitydescription'] = 'Kullanıcı, kullanılan protokollere göre uygun yeteneklere sahip olmalıdır, örneğin webservice/soap:use, webservice/soap: use. Bunu başarmak için, izin verilen protokol özelliklerine sahip bir web hizmetleri rolü oluşturun ve bir sistem rolü olarak web hizmetleri kullanıcılarına atayın.';
$string['configwebserviceplugins'] = 'Güvenlik önlemi olarak sadece kullandığınız protokolleri etkinleştirin.';
$string['context'] = 'Bağlam';
$string['createservicedescription'] = 'Bir hizmet, bir dizi web hizmeti işlevidir. Kullanıcının yeni bir servise girmesine izin vereceksin. <strong> Hizmet ekle </ strong> sayfasında \'Etkinleştir\' ve \'Yetkili kullanıcıların\' seçeneklerini kontrol edin. \'Gerekli yetenek yok\' seçeneğini belirleyin.';
$string['createserviceforusersdescription'] = 'Bir hizmet, bir dizi web hizmeti işlevidir. Kullanıcıların yeni bir servise girmesine izin vereceksin. <strong> Hizmet ekle </ strong> sayfasında \'Etkinleştir\'i kontrol edin ve\' Yetkili kullanıcıların \'seçeneklerinin işaretini kaldırın. \'Gerekli yetenek yok\' seçeneğini belirleyin.';
$string['createtoken'] = 'Dizgecik oluştur';
$string['createtokenforuser'] = 'Bir kullanıcı için dizgecik oluştur';
$string['createtokenforuserdescription'] = 'Web servis kullanıcısı için dizgecik oluştur.';
$string['createuser'] = 'Özel bir kullanıcı oluştur';
$string['createuserdescription'] = 'Bir web hizmetleri kullanıcısının Moodle\'ı kontrol eden sistemi temsil etmesi gereklidir.';
$string['criteriaerror'] = 'Bir kriter üzerinde arama yapma izniniz yok.';
$string['default'] = 'Varsayılan değer "{$a}"';
$string['deleteaservice'] = 'Servisi sil';
$string['deleteservice'] = 'Servisi sil: {$a->name} (id: {$a->id})';
$string['deleteserviceconfirm'] = 'Harici "{$a}" servisini gerçekten silmek istediğinizden emin misiniz?';
$string['deletetokenconfirm'] = '<strong> {$ a-> service} </ strong> hizmetinde <strong> {$a->user} </ strong> için bu web hizmeti simgesini gerçekten silmek istiyor musunuz?';
$string['disabledwarning'] = 'Tüm web servis protokolleri kapalı. "Web Servislerini Etkinleştir" ayarı gelişmiş özellikler bölümündedir.';
$string['doc'] = 'Dokümantasyon';
$string['docaccessrefused'] = 'Bu dizgecik dokümanını görme izniniz yok';
$string['documentation'] = 'web servis dokümantasyonu';
$string['downloadfiles'] = 'Dosya indirebilir';
$string['downloadfiles_help'] = 'Etkinleştirilirse, her kullanıcı güvenlik anahtarları ile dosya indirebilir. Tabi ki indirmekle izinli oldukları dosyalar ile sınırlıdırlar.';
$string['editaservice'] = 'Servisi düzenle';
$string['editservice'] = 'Servisi düzenle: {$a->name} (id: {$a->id})';
$string['enabled'] = 'Etkin';
$string['enabledocumentation'] = 'Geliştirici dokümantasyonunu etkinleştir';
$string['enabledocumentationdescription'] = 'Ayrıntılı web servis dokümantasyonu etkin protokoller için kullanılabilir durumda.';
$string['enableprotocols'] = 'Protokolleri etkinleştir';
$string['enableprotocolsdescription'] = 'En az bir protokol etkinleştirilmelidir. Güvenlik nedenleriyle, yalnızca kullanılacak protokollerin etkinleştirilmesi gerekir.';
$string['enablews'] = 'Web servislerini etkinleştir';
$string['enablewsdescription'] = 'Web hizmetleri, Gelişmiş özellikler\'de etkinleştirilmelidir.';
$string['entertoken'] = 'Bir güvenlik anahtarı/dizgeciği girin:';
$string['error'] = 'Hata: {$a}';
$string['errorcatcontextnotvalid'] = 'Kategorideki bağlamlarda işlevler yürütemezsiniz (kategori kimliği: {$a->catid}). Bağlam hata iletisi: {$a->message}';
$string['errorcodes'] = 'Hata mesajı';
$string['errorcoursecontextnotvalid'] = 'Fonksiyonları ders içeriğinde yürütemezsiniz (ders kimliği: {$a->courseid}). Bağlam hata iletisi: {$a->message}';
$string['errorinvalidparam'] = '"{$a}" parametresi geçersiz.';
$string['errornotemptydefaultparamarray'] = '\'{$a}\' adlı web hizmeti tanımı parametresi tek veya çoklu bir yapıdır. Varsayılan değer yalnızca boş dizide olabilir. Web hizmeti açıklamasını kontrol edin.';
$string['erroroptionalparamarray'] = '\'{$a}\' adlı web hizmeti tanımı parametresi tek veya çoklu bir yapıdır. VALUE_OPTIONAL olarak ayarlanamaz. Web hizmeti açıklamasını kontrol edin.';
$string['eventwebservicefunctioncalled'] = 'Web servis işlevi çağrıldı';
$string['eventwebserviceloginfailed'] = 'Web servis oturum açma başarısız';
$string['eventwebserviceservicecreated'] = 'Web servisi oluşturuldu';
$string['eventwebserviceservicedeleted'] = 'Web hizmeti hizmeti silindi';
$string['eventwebserviceserviceupdated'] = 'Web servisi güncellendi';
$string['eventwebserviceserviceuseradded'] = 'Web servis kullanıcısı eklendi';
$string['eventwebserviceserviceuserremoved'] = 'Web servis kullanıcısı kaldırıldı';
$string['eventwebservicetokencreated'] = 'Web servis dizgeciği oluşturuldu';
$string['eventwebservicetokensent'] = 'Web servis dizgeciği gönderildi';
$string['execute'] = 'Çalıştır';
$string['executewarnign'] = 'UYARI: Çalıştır\'a basarsanız veritabanınızda değişiklikler yapılır ve yapılan değişiklikler geri alınamaz!';
$string['externalservice'] = 'Harici servis';
$string['externalservicefunctions'] = 'Harici servis işlevleri';
$string['externalservices'] = 'Harici servisler';
$string['externalserviceusers'] = 'Harici servis kullanıcıları';
$string['failedtolog'] = 'Oturum açılamadı';
$string['filenameexist'] = 'Dosya adı zaten var: {$a}';
$string['forbiddenwsuser'] = 'Doğrulanmamış, silinmiş, askıya alınmış veya konuk kullanıcı için simge oluşturulamıyor.';
$string['function'] = 'İşlev';
$string['functions'] = 'İşlevler';
$string['generalstructure'] = 'Genel yapı';
$string['information'] = 'Bilgi';
$string['installexistingserviceshortnameerror'] = 'Kısa adı "{$a}" olan bir web servisi zaten var. Bu kısa adla farklı bir web hizmetini kuramaz/güncelleştiremeyiz.';
$string['installserviceshortnameerror'] = 'Kod çözme hatası: "{$a}" servis kısayolu yalnızca sayı, harf ve _- .. içermelidir.';
$string['invalidextparam'] = 'Geçersiz harici api parametresi: {$a}';
$string['invalidextresponse'] = 'Geçersiz harici api yanıtı: {$a}';
$string['invalidiptoken'] = 'Geçersiz dizgecik - IP\'niz desteklenmiyor';
$string['invalidtimedtoken'] = 'Geçersiz dizgecik - dizgecik zaman aşımına uğradı';
$string['invalidtoken'] = 'Geçersiz dizgecik - dizgecik bulunamadı';
$string['iprestriction'] = 'IP sınırlaması';
$string['iprestriction_help'] = 'Kullanıcı listelenen IP\'lerden (virgülle ayrılmış olarak) web hizmetini aramalıdır.';
$string['key'] = 'Anahtar';
$string['keyshelp'] = 'Anahtarla harici uygulamalardan Moodle hesabınıza ulaşmanızı sağlar.';
$string['loginrequired'] = 'Oturum açan kullanıcılarla sınırlandı';
$string['manageprotocols'] = 'Protokolleri yönet';
$string['managetokens'] = 'Dizgecikleri yönet';
$string['missingcaps'] = 'Eksik yetenekler';
$string['missingcaps_help'] = 'Seçilen kullanıcının sahip olmadığı hizmet için gerekli olan yeteneklerin listesi. Hizmeti kullanmak için eksik yetenekler kullanıcının rolüne eklenmelidir.';
$string['missingpassword'] = 'Kayıp şifre';
$string['missingrequiredcapability'] = '{$a} yeteneği gerekiyor.';
$string['missingusername'] = 'Kayıp kulllanıcı adı';
$string['missingversionfile'] = 'Kod çözme hatası: {$a} bileşeni için version.php dosyası eksik';
$string['nameexists'] = 'Bu ad başka bir hizmet tarafından zaten kullanılıyor';
$string['nocapabilitytouseparameter'] = 'Kullanıcının {$a} parametresini kullanma yeteneği yok.';
$string['nofunctions'] = 'Servisin fonksiyonu yok.';
$string['norequiredcapability'] = 'Gerekli yetki yok';
$string['notoken'] = 'Dizgecik listesi boş.';
$string['onesystemcontrolling'] = 'Moodle\'ı kontrol etmek için harici bir sisteme izin ver';
$string['onesystemcontrollingdescription'] = 'Aşağıdaki adımlar, harici bir sistemin Moodle ile etkileşime girmesine izin vermek için Moodle web servislerini kurmanıza yardımcı olur. Buna bir simge (güvenlik anahtarı) kimlik doğrulama yöntemi kurma dahildir.';
$string['operation'] = 'İşlem';
$string['optional'] = 'İsteğe bağlı';
$string['passwordisexpired'] = 'Şifre süresi doldu';
$string['phpparam'] = 'XML-RPC (PHP yapısı)';
$string['phpresponse'] = 'XML-RPC (PHP yapısı)';
$string['postrestparam'] = 'REST için PHP kodu (POST isteği)';
$string['potusers'] = 'Yetkilendirilmiş kullanıcılar yok';
$string['potusersmatching'] = 'Eşleşen yetkilendirilmiş kullanıcılar yok';
$string['print'] = 'Tümünü Yazdır';
$string['privacy:metadata:serviceusers:iprestriction'] = 'Hizmeti kullanmak için sınırlı IP';
$string['privacy:metadata:serviceusers:timecreated'] = 'Kaydın oluşturulduğu tarih';
$string['privacy:metadata:serviceusers:userid'] = 'Kullanıcının kimliği';
$string['privacy:metadata:tokens'] = 'Web hizmetleri veya Mobil uygulamalar aracılığıyla Moodle ile etkileşim için belirteçlerin bir kaydı.';
$string['privacy:metadata:tokens:creatorid'] = 'Jetonu oluşturan kullanıcının kimliği';
$string['privacy:metadata:tokens:iprestriction'] = 'IP, bu belirteci kullanmak için kısıtlandı';
$string['privacy:metadata:tokens:lastaccess'] = 'Jetonun en son kullanıldığı tarih';
$string['privacy:metadata:tokens:privatetoken'] = 'SSO gibi belirli işlemleri doğrulamak için ara sıra kullanılan daha özel bir jeton';
$string['privacy:metadata:tokens:timecreated'] = 'Jetonun oluşturulduğu tarih';
$string['privacy:metadata:tokens:token'] = 'Kullanıcının jetonu';
$string['privacy:metadata:tokens:tokentype'] = 'Jeton türü';
$string['privacy:metadata:tokens:userid'] = 'Jetonu olan kullanıcının kimliği';
$string['privacy:metadata:tokens:validuntil'] = 'Jetonun geçerli olduğu tarih';
$string['privacy:request:notexportedsecurity'] = 'Güvenlik nedeniyle ihraç edilmedi';
$string['protocol'] = 'Protokol';
$string['removefunction'] = 'Sil';
$string['removefunctionconfirm'] = '"{$a->service}" servisinden "{$a->function}" işlevini gerçekten silmek istediğinizden emin misiniz?';
$string['requireauthentication'] = 'Bu işlev, xxx izni için yetki gerektirir.';
$string['required'] = 'Gerekli';
$string['requiredcapability'] = 'Gerekli yetki';
$string['requiredcapability_help'] = 'Ayarlanırsa, yalnızca gerekli yetkiye sahip kullanıcılar servise erişebilir.';
$string['requiredcaps'] = 'Gerekli yetkiler';
$string['resettokenconfirm'] = '<strong> {$a->service} </ strong> hizmetinde <strong> {$a->user} </ strong> için bu web hizmeti anahtarını gerçekten sıfırlamak istiyor musunuz?';
$string['resettokenconfirmsimple'] = 'Bu anahtarı sıfırlamak gerçekten istiyor musun? Eski anahtarı içeren kayıtlı bağlantılar artık çalışmayacaktır.';
$string['response'] = 'Yanıt';
$string['restcode'] = 'REST';
$string['restexception'] = 'REST';
$string['restoredaccountresetpassword'] = 'Geri yüklenen hesap, bir simge almadan önce şifreyi sıfırlamanız gerekir.';
$string['restparam'] = 'REST (POST parametreleri)';
$string['restrictedusers'] = 'Sadece yetkilendirilmiş kullanıcılar';
$string['restrictedusers_help'] = 'Bu ayar, web hizmetleri belirteci oluşturma iznine sahip tüm kullanıcıların güvenlik anahtarları sayfası aracılığıyla bu hizmet için bir simge oluşturup oluşturamayacağını veya yalnızca yetkili kullanıcıların bunu yapabileceklerini belirler.';
$string['securitykey'] = 'Güvenlik anahtarı (dizgecik)';
$string['securitykeys'] = 'Güvenlik anahtarları';
$string['selectauthorisedusers'] = 'Yetkili kullanıcıları seçin';
$string['selectedcapability'] = 'Seçili';
$string['selectedcapabilitydoesntexit'] = 'Şu anda ayarlanmış olan gerekli özellik ({$a}) artık mevcut değil. Lütfen değiştirin ve değişiklikleri kaydedin.';
$string['selectservice'] = 'Servis seç';
$string['selectspecificuser'] = 'Özel bir kullanıcı seç';
$string['selectspecificuserdescription'] = 'Web servislerini yetkili kullanıcı olarak ekleyin.';
$string['service'] = 'Servis';
$string['servicehelpexplanation'] = 'Bir servis fonksiyonların birleşimidir. Bir servise bütün kullanıcılar tarafından ya da yalnızca özel kullanıcılar tarafından erişilebilir.';
$string['servicename'] = 'Servis adı';
$string['servicenotavailable'] = 'Web servisi mevcut değil. (Mevcut değil veya devre dışı bırakılmış olabilir.)';
$string['servicerequireslogin'] = 'Web servisi mevcut değil. (Oturum kapatıldı veya süresi doldu.)';
$string['servicesbuiltin'] = 'Yerleşik servisler';
$string['servicescustom'] = 'Özel servisler';
$string['serviceusers'] = 'Yetkili kullanıcılar';
$string['serviceusersettings'] = 'Kullanıcı ayarları';
$string['serviceusersmatching'] = 'Eşleşen yetkili kullanıcılar';
$string['serviceuserssettings'] = 'Yetkili kullanıcılar için ayarları değiştir';
$string['shortnametaken'] = 'Kısa adı başka bir hizmet için zaten kullanılmış ({$a})';
$string['simpleauthlog'] = 'Basit kimlik doğrulama girişi';
$string['step'] = 'Adım';
$string['supplyinfo'] = 'Daha fazla detay';
$string['testauserwithtestclientdescription'] = 'Web hizmeti test istemcisini kullanarak servise harici erişimi simüle edin. Bunu yapmadan önce, moodle/webservice:createtoken özelliği ile bir kullanıcı olarak oturum açın ve kullanıcının tercih sayfasından güvenlik anahtarı (belirteç) edinin. Bu belirteci test istemcisinde kullanacaksınız. Test istemcisinde, belirteç kimliği ile etkinleştirilmiş bir protokol de seçin. <strong> UYARİ: Test ettiğiniz işlevler bu kullanıcı için DEVAM EDECEK, bu nedenle test etmeyi seçtiğinize dikkat edin! </ strong>';
$string['testclient'] = 'Web servisi test istemcisi';
$string['testclientdescription'] = '* Web hizmeti test istemcisi, <strong>REAL</ strong> için işlevleri <strong> çalıştırır </ strong>. Bilmediğiniz fonksiyonları test etmeyin. <br/> * Mevcut tüm web hizmeti işlevleri henüz test istemcisine uygulanmıyor. <br/> * Bir kullanıcının bazı işlevlere erişemediğini kontrol etmek için izin vermediğiniz bazı işlevleri test edebilirsiniz. <br/> * Daha net hata iletilerini görmek için hata ayıklamasını <strong> {$a- >mode} </ strong> \'u {$a->atag} içine ekleyin.';
$string['testwithtestclient'] = 'Servisi test et';
$string['testwithtestclientdescription'] = 'Web hizmeti test istemcisini kullanarak servise harici erişimi simüle edin. Belirgin kimlik doğrulaması ile etkinleştirilmiş bir protokol kullanın. <strong> UYARI: Test ettiğiniz işlevler DEVAM EDECEĞİNİZ, bu nedenle test etmeyi seçtiğinize dikkat edin! </ strong>';
$string['token'] = 'Dizgecik';
$string['tokenauthlog'] = 'Dizgecik doğrulama';
$string['tokencreatedbyadmin'] = 'Yalnızca yönetici tarafından sıfırlanabilir';
$string['tokencreator'] = 'Oluşturan';
$string['unknownoptionkey'] = 'Bilinmeyen seçenek anahtarı ({$a})';
$string['unnamedstringparam'] = 'Bir dizgi parametresi isimsiz.';
$string['updateusersettings'] = 'Güncelle';
$string['uploadfiles'] = 'Dosya yükleyebilir';
$string['uploadfiles_help'] = 'Etkinleştirilirse, herhangi bir kullanıcı güvenlik anahtarlarıyla dosyalarınızı kendi özel dosyalar alanına veya bir taslak dosya alanına yükleyebilir. Herhangi bir kullanıcı dosya kotası geçerlidir.';
$string['userasclients'] = 'Dizgecikli istemci kullanıcıları';
$string['userasclientsdescription'] = 'Aşağıdaki adımlar, kullanıcılar için Moodle web hizmetini istemciler olarak ayarlamanıza yardımcı olur. Bu adımlar, önerilen belirteci (güvenlik anahtarları) kimlik doğrulama yöntemini ayarlamanıza da yardımcı olur. Bu kullanım durumunda kullanıcı, kendi tercihleri sayfası aracılığıyla güvenlik anahtarları sayfasından kendi simgesini oluşturacaktır.';
$string['usermissingcaps'] = 'Eksik yetenekler: {$a}';
$string['usernameorid'] = 'Kullanıcı adı/ Kullanıcı id\'si';
$string['usernameorid_help'] = 'Bir kullanıcı adı ya da id\'si girin.';
$string['usernameoridnousererror'] = 'Bu kullanıcı adı/id\'si ile bir kullanıcı bulunamadı.';
$string['usernameoridoccurenceerror'] = 'Bu kullanıcı adıyla birden fazla kullanıcı bulundu. Lütfen kullanıcı kimliğini girin.';
$string['usernotallowed'] = 'Bu hizmet için kullanıcıya izin verilmiyor. Önce, {$a} \'ya izin verilen kullanıcılar yönetimi sayfasına bu kullanıcıya izin vermeniz gerekiyor.';
$string['userservices'] = 'Kullanıcı hizmetleri: {$a}';
$string['usersettingssaved'] = 'Kullanıcı ayarları kaydedildi';
$string['validuntil'] = 'Geçerlilik';
$string['validuntil_help'] = 'Ayarlanırsa, servis bu kullanıcı için bu tarihten sonra inaktif olacaktır.';
$string['webservice'] = 'Web servisi';
$string['webservices'] = 'Web servisleri';
$string['webservicesoverview'] = 'Genel bakış';
$string['webservicetokens'] = 'Web servis dizgecikleri';
$string['wrongusernamepassword'] = 'Yanlış kullanıcı adı ya da şifre';
$string['wsaccessuserdeleted'] = 'Silinmiş kullanıcı adı dolayısıyla web servis girişi reddedildi: {$a}';
$string['wsaccessuserexpired'] = 'Şifre süresi dolmuş dolayısıyla web servis girişi reddedildi: {$a}';
$string['wsaccessusernologin'] = 'Nologin kimlik doğrulaması için reddedilen web hizmeti erişimi kullanıcı adı: {$a}';
$string['wsaccessusersuspended'] = 'Askıya alınan kullanıcı adı için web hizmeti erişimi reddedildi: {$a}';
$string['wsaccessuserunconfirmed'] = 'Doğrulanmamış kullanıcı adı nedeniyle reddedilen web servis erişim isteği: {$a}';
$string['wsclientdoc'] = 'Moodle web servis istemci dokümantasyonu';
$string['wsdocapi'] = 'API Dokümantasyonu';
$string['wsdocumentation'] = 'Web servisi belgesi';
$string['wsdocumentationdisable'] = 'Web servisi belgelendirmesi etkin değil';
$string['wsdocumentationintro'] = 'Bir müşteri oluşturmak için, {$a->doclink} bölümünü okumanızı tavsiye ederiz.';
$string['wsdocumentationlogin'] = 'veya web hizmeti kullanıcı adınızı ve şifrenizi girin:';
$string['wspassword'] = 'Web servisi şifresi';
$string['wsusername'] = 'Web servisi kullanıcı adı';
