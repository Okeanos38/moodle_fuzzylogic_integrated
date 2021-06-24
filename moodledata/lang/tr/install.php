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
 * Strings for component 'install', language 'tr', version '3.10'.
 *
 * @package     install
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['admindirerror'] = 'Belirtilen yönetici dizini hatalı';
$string['admindirname'] = 'Yönetici dizini';
$string['admindirsetting'] = 'Bazı web hostingler, kontrol paneline erişmek için /admin olarak belirtilmiş bir URL kullanır. Maalesef, bu Moodle yönetici sayfalarıyla karışıklığa sebep olmaktadır. Yönetici dizininin ismini kurulum sırasında değiştirerek bu sorunu ortadan kaldırabilirsiniz. Örnek: <br /><br /><b>moodleadmin</b><br /> <br />Bu Moodle içinde yönetici linklerini düzeltecektir.';
$string['admindirsettinghead'] = 'Yönetici dizini ayarlanıyor...';
$string['admindirsettingsub'] = 'Bazı web hostingler, kontrol paneline erişmek için /admin olarak belirtilmiş bir URL kullanır. Maalesef, bu Moodle yönetici sayfalarıyla karışıklığa sebep olmaktadır. Yönetici dizininin ismini kurulum sırasında değiştirerek bu sorunu ortadan kaldırabilirsiniz. Örnek: <br /><br /><b>moodleadmin</b><br /> <br />Bu Moodle içinde yönetici linklerini düzeltecektir.';
$string['availablelangs'] = 'Kullanılabilir dil paketleri';
$string['caution'] = 'Uyarı';
$string['chooselanguage'] = 'Dil seçin';
$string['chooselanguagehead'] = 'Dil seçin';
$string['chooselanguagesub'] = 'Lütfen, SADECE kurulum için bir dil seçin. Site ve kullanıcı dillerini sonraki ekranda seçebilirsiniz.';
$string['cliadminemail'] = 'Yeni yönetici kullanıcısı e-posta adresi';
$string['cliadminpassword'] = 'Yeni yönetici şifresi';
$string['cliadminusername'] = 'Yönetici hesabı kullanıcı adı';
$string['clialreadyconfigured'] = 'config.php halihazırda mevcut, lütfen eğer bu siteyi yüklemek istiyorsanız şu dizini kullanın: admin/cli/install_database.php';
$string['clialreadyinstalled'] = 'Config.php zaten var. Sitenizi güncellemek istiyorsanız bu adresi kullanın: admin/cli/install_database.php';
$string['cliinstallfinished'] = 'Yükleme başarıyla tamamlandı.';
$string['cliinstallheader'] = 'Moodle {$a} komut satırı kurulum programı';
$string['climustagreelicense'] = 'İnteraktif modda --agree-license seçeneğiyle lisansı kabul etmelisiniz';
$string['cliskipdatabase'] = 'Veritabanı yüklemesi atlanıyor.';
$string['clitablesexist'] = 'Veritabanı tabloları zaten var. CLI kurulumu devam edemez.';
$string['compatibilitysettings'] = 'PHP ayarlarınız kontrol ediliyor';
$string['compatibilitysettingshead'] = 'PHP ayarlarınız kontrol ediliyor';
$string['compatibilitysettingssub'] = 'Moodle\'ın düzgün bir şekilde çalışabilmesi için sunucunuzun şu testleri geçmesi gerekmektedir';
$string['configfilenotwritten'] = 'Kurulum programı, Moodle dizini yazılabilir olmadığından dolayı seçtiğiniz ayarları içeren bir config.php dosyası oluşturamıyor. Aşağıdaki kodu kopyalayıp bu kodu config.php dosyası içine yapıştırıp Moodle kök dizinine oluşturduğunuz dosyayı yükleyebilirsiniz.';
$string['configfilewritten'] = 'config.php başarıyla oluşturuldu';
$string['configurationcomplete'] = 'Yapılandırma tamamlandı';
$string['configurationcompletehead'] = 'Yapılandırma tamamlandı';
$string['configurationcompletesub'] = 'Ana moodle dizine yapılandırma dosyasının kaydedilmesi için girişimde bulunuldu.';
$string['database'] = 'Veritabanı';
$string['databasehead'] = 'Veritabanı ayarları';
$string['databasehost'] = 'Veritabanı sunucusu';
$string['databasename'] = 'Veritabanı adı';
$string['databasepass'] = 'Veritabanı parolası';
$string['databaseport'] = 'Veritabanı portu';
$string['databasesocket'] = 'Unix soketi';
$string['databasetypehead'] = 'Veritabanı sürücüsü seçin';
$string['databasetypesub'] = 'Moodle bazı veritabanı sunucularını destekler. Hangisini kullanacağınızı bilmiyorsanız sunucu yöneticiyle iletişim kurunuz.';
$string['databaseuser'] = 'Veritabanı kullanıcısı';
$string['dataroot'] = 'Veritabanı dizini';
$string['datarooterror'] = 'Belirtilen \'Veri Dizini\' bulunamadı veya oluşturulamadı. Dizin yolunu düzenleyin veya bu dizini kendiniz oluşturun.';
$string['datarootpermission'] = 'Veritabanı dizin izinleri';
$string['datarootpublicerror'] = 'Belirttiğiniz \'Veri Dizini\' web üzerinden doğrudan erişilebilir, farklı dizin kullanmalısınız.';
$string['dbconnectionerror'] = 'Belirtiğiniz veritabanına bağlantı kuramadık. Lütfen veritabanı ayarlarını kontrol edin.';
$string['dbcreationerror'] = 'Veritabanı oluşturma hatası. Belirtilen ayarlardan sağlanan isimle bir veritabanı oluşturulamadı.';
$string['dbhost'] = 'Veritabanı sunucusu';
$string['dbpass'] = 'Şifre';
$string['dbport'] = 'Port';
$string['dbprefix'] = 'Tablo öneki';
$string['dbtype'] = 'Tip';
$string['directorysettings'] = '<p>Lütfen, Bu Moodle kurulumu için yolları onaylayın.</p>

<p><b>Web Adresi:</b>
Moodle\'a erişilecek olan tam web adresini belirtin. Web siteniz bir çok URL\'den erişilebiliyorsa, öğrencilerinizin
en sık kullanacağı bir tanesini seçin.
Sonuna / (slash) ekleMEyin.</p>

<p><b>Moodle Dizini:</b>
Bu kurulama ait tam fiziksel klasör yolunu belirtin. BÜYÜK/küçük harflerin doğru olduğundan emin olun.</p>

<p><b>Veri Dizini:</b>
Siteye yüklenen dosyaların nereye kaydedileceğini belirtin. Bu dizin sunucu kullanıcısı tarafından okunabilir ve YAZILABİLİR olmalı. (genellikle \'nobody\',\'apache\',\'www\' olur)
Ancak, bu dizine direkt olarak webden erişim olMAMAlı.</p>';
$string['directorysettingshead'] = 'Lütfen, Bu Moodle kurulumu için yolları onaylayın';
$string['directorysettingssub'] = '<b>Web Adresi:</b>
Moodle\'a erişilecek olan tam web adresini belirtin. Web siteniz bir çok URL\'den erişilebiliyorsa, öğrencilerinizin
en sık kullanacağı bir tanesini seçin.
Sonuna / (slash) ekleMEyin.
<br />
<br />
<b>Moodle Dizini:</b>
Bu kurulama ait tam fiziksel klasör yolunu belirtin. BÜYÜK/küçük harflerin doğru olduğundan emin olun.
<br />
<br />
<b>Veri Dizini:</b>
Siteye yüklenen dosyaların nereye kaydedileceğini belirtin. Bu dizin sunucu kullanıcısı tarafından okunabilir ve YAZILABİLİR olmalı. (genellikle \'nobody\',\'apache\',\'www\' olur)
Ancak, bu dizine direkt olarak webden erişim olMAMAlı.';
$string['dirroot'] = 'Moodle dizini';
$string['dirrooterror'] = '\'Moodle Dizini\' ayarları hatalı görünüyor - Burada bir Moodle kurulumu bulunamadı. Aşağıdaki değer yeniden ayarlandı.';
$string['download'] = 'İndir';
$string['downloadlanguagebutton'] = '{$a} dil paketini indir';
$string['downloadlanguagehead'] = 'Dil paketini indir';
$string['downloadlanguagenotneeded'] = 'Varsayılan dil paketini "{$a}" kullanarak kurulum işlemine devam edebilirsiniz.';
$string['downloadlanguagesub'] = 'Şu anda bir dil paketi indirme ve bu dilde kuruluma devam etme seçeneğiniz var.<br /><br />Dil paketini indiremezseniz kurulum işlemi İngilizce ile devam edecektir. (Kurulum işlemi bittiğinde ek dil paketlerini indirme ve kurma imkanınız vardır.)';
$string['doyouagree'] = 'Onaylıyor musunuz ? (yes/no)';
$string['environmenthead'] = 'Ortam kontrol ediliyor ...';
$string['environmentsub'] = 'Çeşitli bileşenlerin sisteminizle uyum içinde olup olmadığı kontrol ediliyor';
$string['environmentsub2'] = 'Her Moodle dağıtımı, bazı PHP versiyon gereksinimi ve bir takım PHP uzantılarının yüklü olmalı zorunluluğuna sahiptir. Tüm ortam denetimi her yükleme ve güncellemeden önce yapılmalıdır. Eğer PHP \'nin yeni versiyonunu veya PHP uzantılarını nasıl yükleyeceğinizi bilmiyorsanız lütfen sunucu yöneticiniz ile iletişime geçiniz.';
$string['errorsinenvironment'] = 'Ortam kontrolu başarısız oldu!';
$string['fail'] = 'Başarısız';
$string['fileuploads'] = 'Dosya yüklemeleri';
$string['fileuploadserror'] = 'Bu açık olmalı';
$string['fileuploadshelp'] = '<p>Bu sunucuda, Dosya yüklemesi etkinleştirilmemiş görünüyor.</p>

<p>Moodle hala kurulabilir, fakat bu özellik olmadan, yeni kullanıcı resimleri ve kurslara dosya gönderilemez.</p>

<p>Dosya yüklemesini etkinleştirmeniz için (veya sistem yöneticiniz) sisteminizin php.ini dosyasınındaki <b>file_uploads</b> ayarı \'1\'
olarak değiştirilmeli.</p>';
$string['inputdatadirectory'] = 'Data dizini:';
$string['inputwebadress'] = 'Web adresi:';
$string['inputwebdirectory'] = 'Moodle dizini:';
$string['installation'] = 'Kurulum';
$string['invaliddbprefix'] = 'Geçersiz önek. Önek yalnızca küçük harfler ve alt çizgi içerebilir.';
$string['langdownloaderror'] = 'Maalesef "{$a}" dil paketi kurulamadı. Kuruluma İngilizce olarak devam edilecek.';
$string['langdownloadok'] = 'Dil paketi "{$a}" başarıyla kuruldu. Kurulum bu dilde devam edecek.';
$string['memorylimit'] = 'Bellek limiti';
$string['memorylimiterror'] = 'PHP bellek limiti ayarı çok düşük... Daha sonra bu ayardan dolayı bazı sorunlar oluşabilir.';
$string['memorylimithelp'] = '<p>Sunucunuz için PHP bellek limiti şu anda {$a} olarak ayarlanmış durumda.</p>

<p>Özellikle bir çok modülü etkinleştirilmiş ve/veya çok fazla kullanıcınız
varsa bu durum daha sonra bazı bellek sorunlarına sebep olabilir.</p>

<p>Mümkünse size PHP\'e daha yüksek limitli bir bellek ayarı yapmanızı,
örneğin, 40M, öneriyoruz. İşte bunu yapabilmeniz için size bir kaç yol:</p>

<ol>
<li>Bunu yapmaya yetkiliyseniz, PHP\'yi <i>--enable-memory-limit</i> ile yeniden derleyin.
Bu, Moodle\'nın kendi kendine bellek limitini ayarlasına izin verecek.</li>

<li>php.ini dosyasına erişim hakkınız varsa, <b>memory_limit</b> ayarını 40M gibi
bir ayarla değiştirin. Erişim hakkınız yoksa, bunu sistem yöneticinizden sizin
için yapmasını isteyin.</li>

<li>Bazı PHP sunucularında Moodle klasörü içinde şu ayarı içeren bir
.htaccess dosyası oluşturabilirsiniz:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Ancak, bazı sunucularda bu durum çalışan <b>bütün</b> PHP sayfalarını engelleyecektir.
(sayfanız altına baktığınızda bazı hatalar göreceksiniz)
Böyle bir durumda .htaccess dosyasını silmeniz gerekiyor.</p></li>
</ol>';
$string['mysqliextensionisnotpresentinphp'] = 'PHP, MySQLi ile iletişim kurabilmek için mysqli uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['nativemariadb'] = 'MariaDB (native/mariadb)';
$string['nativemariadbhelp'] = '<p>Şu an Moodle verilerinin saklanacağı veritabanını yapılandırmalısınız.</p> <p>Eğer veritabanı kullanıcısı gerekli izinlere sahipse, veritabanı oluşturulmuş olabilir, kullanıcı adı ve şifre halen var olmalı. Tablo önadı isteğe bağlıdır.</>
<p>Bu sürücü eski MyISAM engine(veritabanı motoru) ile uyumlu değildir.</p>';
$string['nativemysqli'] = 'Geliştirilmiş MySQL (native/mysqli)';
$string['nativemysqlihelp'] = '<p>Şu an Moodle verilerinin saklanacağı veritabanını yapılandırmalısınız.</p> <p>Eğer veritabanı kullanıcısı gerekli izinlere sahipse, veritabanı oluşturulmuş olabilir, kullanıcı adı ve şifre halen var olmalı. Tablo önadı isteğe bağlıdır.</>
<p>Bu sürücü eski MyISAM engine(veritabanı motoru) ile uyumlu değildir.</p>';
$string['nativeoci'] = 'Oracle (native/oci)';
$string['nativeocihelp'] = 'Şimdi Moodle verilerinin çoğunluğunun saklanacağı veritabanını yapılandırmalısınız.
Bu veritabanı halihazırda oluşturulmuş, kullanıcı adı ve şifre ile erişilebilir durumda olmalıdır. Tablo öneki zorunludur.';
$string['nativepgsql'] = 'PostgreSQL (native/pgsql)';
$string['nativepgsqlhelp'] = '<p>Şimdi Moodle verilerinin çoğunluğunun saklanacağı veritabanını yapılandırmalısınız.</p>
<p>Bu veritabanı halihazırda oluşturulmuş, kullanıcı adı ve şifre ile erişilebilir durumda olmalıdır. Tablo öneki zorunludur.</p><p> Veritabanı olması olumludur ve kullanıcılar hem yazma hemde okuma hakkına sahip olmalıdır.</p>';
$string['nativesqlsrv'] = 'SQL*Server Microsoft (native/sqlsrv)';
$string['nativesqlsrvhelp'] = 'Şimdi Moodle verilerinin çoğunluğunun saklanacağı veritabanını yapılandırmalısınız.
Bu veritabanı halihazırda oluşturulmuş, kullanıcı adı ve şifre ile erişilebilir durumda olmalıdır. Tablo öneki zorunludur.';
$string['nativesqlsrvnodriver'] = 'PHP SQL sunucusu için Micrsofot Sürücüleri kurulu değil ya da doğru yapılandırılmamış.';
$string['ociextensionisnotpresentinphp'] = 'PHP, Oracle ile iletişim kurabilmek için oci8 uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['pass'] = 'Geçti';
$string['paths'] = 'Dizin yolları';
$string['pathserrcreatedataroot'] = 'Veri Klasörü ({$a->dataroot}) kurulum tarafından oluşturulamıyor.';
$string['pathshead'] = 'Dizin yollarını onayla';
$string['pathsrodataroot'] = 'Veritabanı kök dizini yazılabilir değil.';
$string['pathsroparentdataroot'] = 'Ana klasör ({$a->parent}) yazılabilir değil. Veri Klasörü ({$a->dataroot}) kurulum tarafından oluşturulamıyor.';
$string['pathssubadmindir'] = 'Pek az web sunucusu /admin adresini kontrol paneline yada benzeri birşeye erişmek için kullanır. Ne yazık ki bu Moodle admin sayfalarının standart konumuyla bir karışıklık yaratır. Bu durumu düzeltmek için kurulumunuzdaki admin dizinini yeniden isimlendirip buraya yeni ismi yazınız. Örneğin: <em>moodleadmin</em>. Bu Moodle\'daki admin bağlantısını düzeltecektir.';
$string['pathssubdataroot'] = '<p>Moodle\'ın yüklenen dosyaları kayıt etmesi için bir yere ihtiyacınız var. </p>
 <p>Bu dizin/klasör web sunucusunun kullanıcı hesabı tarafından (genellikle \' \'www-data\', \'nobody\', ya da \'apache\') okunabilir ve yazılabilir olmalıdır. </p>
 <p>Bu okuma, yazma izinlerini klasöre vermelisiniz. </p>
<p>Fakat bu klasör aynı zamanda web üzerinden direk erişilebilir olmamalıdır. </p>
<p>Yükleyici eğer klasör yok ise oluşturmayı deneyecektir.</p>';
$string['pathssubdirroot'] = '<p>Moodle kurulumu için tam klasör yolu.</p >';
$string['pathssubwwwroot'] = '<p>Moodle\'a erişilecek tam web adresi. Moodle\'ın birden çok adres kullanması mümkün değildir. </p>
<p>Eğer siteniz birden fazla adrese sahip ise bu adres harici diğerlerinin yönlendirme ayarlarını yapılandırın.</p>
<p>Eğer siteniz Intranet ve İnternet üzerinden erişilebilirse burada genel bir adres kullanın ve DNS\'iniz ayarlayın. Bu şekilde Intranet kullanıcıları da genel adresi kullanabilirler.</p>
<p>IEğer adres doğru değilse lütfen kurulumu tekrar başlatmak için tarayıcınızdaki URL\'i değiştirin.</p>';
$string['pathsunsecuredataroot'] = 'Veri yolu güvenli değil';
$string['pathswrongadmindir'] = 'Yönetici klasörü yok';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP, PostgreSQL ile iletişim kurabilmek için pgsql uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['phpextension'] = '{$a} PHP eklentisi';
$string['phpversion'] = 'PHP sürümü';
$string['phpversionhelp'] = '<p>Moodle, PHP sürümünün en az 4.3.0 veya 5.1.0 olmasını gerektirir (5.0.x sürümünde çok fazla hata var).</p>
<p>Şu anda çalışan sürüm: {$a}</p>
<p>PHP\'yi güncellemeli veya PHP\'nin yeni sürümünü kullananan bir hostinge taşınmalısınız!</p>';
$string['releasenoteslink'] = 'Moodle\'ın bu sürümü hakkında daha fazla bilgi için lütfen bu adresteki Sürüm Notlarına bakın: {$a}';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle, safe mode\'ın açık olması durumunda bazı sorunlar çıkartabilir';
$string['safemodehelp'] = '<p>Moodle, safe mode\'un açık olması durumunda bazı sorunlar çıkartabilir. Moodle tarafından en azından bazı dosyaların oluşturulması gerekiyor, ama bu mod yeni dosyaların oluşturulmasına izin vermiyor.</p>
<p>Safe mode sadece paranoyak web hostinglerince kullanılmaktadır. Bu durumda Moodle için başka bir web hosting firması bulmanız gerekiyor.</p>
<p>İsterseniz devam edebilirsiniz, ama daha sonra çok fazla sorunla karşılaşırsınız.</p>';
$string['sessionautostart'] = 'Otomatik oturum başlatma';
$string['sessionautostarterror'] = 'Bu kapalı olmalı';
$string['sessionautostarthelp'] = '<p>Moodle, oturum desteği gerektirir ve bu olmadan işlevsel çalışamaz.</p>

<p>Oturum desteği php.ini dosyasından ayarlanabilir ... session.auto_start parametresine bakın.</p>';
$string['sqliteextensionisnotpresentinphp'] = 'PHP SQLite uzantısı düzgün bir şekilde yapılandırılmamış. Lütfen php.ini dosyasını kontrol edin veya PHP\'yi tekrar derleyin.';
$string['upgradingqtypeplugin'] = 'Soru tipi eklentisi güncelleniyor';
$string['welcomep10'] = '{$a->installername} ({$a->installerversion})';
$string['welcomep20'] = 'Bilgisayarınıza <strong>{$a->packname} {$a->packversion}</strong> paketini başarıyla kurdunuz. Tebrikler!';
$string['welcomep30'] = '<strong>{$a->installername}</strong>\'nin bu sürümü <strong>Moodle</strong>\'da bir ortam oluşturmak için uygulamaları içerir:';
$string['welcomep40'] = 'Bu paket <strong>Moodle {$a->moodlerelease} ({$a->moodleversion})</strong> sürümünü de içerir.';
$string['welcomep50'] = 'Bu paketteki tüm uygulamaların kullanımı her biri kendine ait olan lisanslar tarafından yönetilir. <strong>{$a->installername}</strong> paketinin tamamı <a href="http://www.opensource.org/docs/definition_plain.html">açık kaynak</a> kodludur ve <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a> lisansı altında dağıtılır.';
$string['welcomep60'] = 'Aşağıdaki sayfalar <strong>Moodle</strong>ın kurulumu ve yapılandırılması için size basitçe yol gösterecektir. Varsayılan ayarları kabul edebilir veya ihtiyaçlarınıza göre bunları değiştirebilirsiniz.';
$string['welcomep70'] = '<strong>Moodle</strong> kurulumu için aşağıdaki "İleri" tuşuna basın.';
$string['wwwroot'] = 'Web adresi';
$string['wwwrooterror'] = 'Web adresi doğru ayarlanmış görünmüyor. Moodle kurulumu belirtilen yerde görünmüyor.';
