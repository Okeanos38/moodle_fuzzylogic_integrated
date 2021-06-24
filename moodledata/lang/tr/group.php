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
 * Strings for component 'group', language 'tr', version '3.10'.
 *
 * @package     group
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addedby'] = '{$a} tarafından eklendi';
$string['addgroup'] = 'Kullanıcıyı gruba ekle';
$string['addgroupstogrouping'] = 'Grubu gruplamaya ekle';
$string['addgroupstogroupings'] = 'Grup ekle/sil';
$string['adduserstogroup'] = 'Kullanıcı ekle/sil';
$string['allocateby'] = 'Üyeleri yerleştir';
$string['anygrouping'] = '[Herhangi gruplama]';
$string['autocreategroups'] = 'Grupları otomatik oluştur';
$string['backtogroupings'] = 'Gruplamalara geri dön';
$string['backtogroups'] = 'Gruplara geri dön';
$string['badnamingscheme'] = 'Sadece bir \'@\' işareti veya bir \'#\' işareti içermeli';
$string['byfirstname'] = 'İsme, soyisme göre';
$string['byidnumber'] = 'ID numarasına göre';
$string['bylastname'] = 'Soyisme, isme göre';
$string['createautomaticgrouping'] = 'Otomatik gruplama oluştur';
$string['creategroup'] = 'Grup oluştur';
$string['creategrouping'] = 'Gruplama oluştur';
$string['creategroupinselectedgrouping'] = 'Gruplamada grup oluştur';
$string['createingrouping'] = 'Kendlliğinden oluşturulmuş grupların gruplaması';
$string['createorphangroup'] = 'Sahipsiz grup oluştur';
$string['databaseupgradegroups'] = 'Grup sürümü şu anda {$a}';
$string['defaultgrouping'] = 'Varsayılan gruplama';
$string['defaultgroupingname'] = 'Gruplama';
$string['defaultgroupname'] = 'Grup';
$string['deleteallgroupings'] = 'Tüm gruplamaları sil';
$string['deleteallgroups'] = 'Tüm grupları sil';
$string['deletegroupconfirm'] = '\'{$a}\' grubunu silmek istediğinizden emin misiniz?';
$string['deletegrouping'] = 'Gruplamayı sil';
$string['deletegroupingconfirm'] = '\'{$a}\' gruplamasını silmek istediğinizden emin misiniz? (Gruplama içindeki gruplar silinmez.)';
$string['deletegroupsconfirm'] = 'Aşağıdaki grupları silmek istediğinizden emin misiniz?';
$string['deleteselectedgroup'] = 'Seçili grubu sil';
$string['editgroupingsettings'] = 'Gruplama ayarlarını düzenle';
$string['editgroupsettings'] = 'Grup ayarlarını düzenle';
$string['editusersgroupsa'] = '"{$a}" için grupları düzenle';
$string['enrolmentkey'] = 'Kayıt anahtarı';
$string['enrolmentkey_help'] = 'Bir kayıt anahtarı, kursa yalnızca anahtarı bilen kişilerle sınırlandırılmasını sağlar. Bir grup kayıt anahtarı belirtilirse, yalnızca bu anahtara girmek kullanıcıyı kursa bırakmaz aynı zamanda otomatik olarak bu grubun bir üyesi haline gelecektir.

Not: Kendi kayıt ayarlarında grup kayıt tuşları etkinleştirilmelidir ve ders için bir kayıt anahtarı belirtilmelidir.';
$string['enrolmentkeyalreadyinuse'] = 'Bu kayıt anahtarı zaten başka bir grup için kullanılıyor.';
$string['erroraddremoveuser'] = '{$a} kullanıcısını gruba eklerken hata';
$string['erroreditgroup'] = '{$a} grubunu oluştururken/güncellerken hata';
$string['erroreditgrouping'] = '{$a} gruplamasını oluştururken/güncellerken hata';
$string['errorinvalidgroup'] = 'Hata, geçersiz grup {$a}';
$string['errorremovenotpermitted'] = 'Otomatik olarak eklenen grup üyesi {$a}\'yı kaldırma yetkiniz yok';
$string['errorselectone'] = 'Bu seçeneği seçmeden önce lütfen tek bir grup seçin';
$string['errorselectsome'] = 'Bu seçeneği seçmeden önce lütfen bir ya da daha fazla grup seçin';
$string['evenallocation'] = 'Not: Grup dağılımını eşit tutabilmek için, her bir grubun gerçek sayısı sizin belirttiğiniz sayıdan farklı olacaktır.';
$string['eventgroupcreated'] = 'Grup oluşturuldu';
$string['eventgroupdeleted'] = 'Grup silindi';
$string['eventgroupingcreated'] = 'Gruplama oluşturuldu';
$string['eventgroupingdeleted'] = 'Gruplama silindi';
$string['eventgroupinggroupassigned'] = 'Grup gruplandırmaya atandı';
$string['eventgroupinggroupunassigned'] = 'Grubun gruplandırmadan ataması iptal edildi';
$string['eventgroupingupdated'] = 'Gruplama güncellendi';
$string['eventgroupmemberadded'] = 'Grup üyesi eklendi';
$string['eventgroupmemberremoved'] = 'Grup üyesi kaldırıldı';
$string['eventgroupupdated'] = 'Grup güncellendi';
$string['existingmembers'] = 'Mevcut kullanıcı: {$a}';
$string['filtergroups'] = 'Grupları süz:';
$string['group'] = 'Grup';
$string['groupaddedsuccesfully'] = '{$a} grubu başarıyla eklendi';
$string['groupaddedtogroupingsuccesfully'] = '{$a->groupname} adlı grup {$a->groupingname} grubunu başarıyla gruplandırdı';
$string['groupby'] = 'Bunu temel alarak kendiliğinden oluştur -';
$string['groupdescription'] = 'Grup açıklaması';
$string['groupinfo'] = 'Seçili grup hakkında bilgi';
$string['groupinfomembers'] = 'Seçili üyeler hakkında bilgi';
$string['groupinfopeople'] = 'Seçili kişiler hakkında bilgi';
$string['grouping'] = 'Gruplama';
$string['grouping_help'] = 'Bir gruplama, bir ders içindeki grupların bir toplamıdır. Bir gruplandırma seçilirse, grup içindeki gruplara atanan öğrenciler birlikte çalışabilecektir.';
$string['groupingaddedsuccesfully'] = '{$a} gruplandırması başarıyla eklendi';
$string['groupingdescription'] = 'Gruplama açıklaması';
$string['groupingname'] = 'Gruplama adı';
$string['groupingnameexists'] = '\'{$a}\' gruplaması bu kursta zaten var. Lütfen başka bir isim seçin.';
$string['groupings'] = 'Gruplamalar';
$string['groupingsection'] = 'Gruplama erişimi';
$string['groupingsection_help'] = 'Bir gruplama, bir ders içindeki grupların bir toplamıdır. Burada bir gruplandırma seçilirse, yalnızca bu grup içerisindeki gruplara atanan öğrenciler bu bölüme erişebilir.';
$string['groupingsonly'] = 'Sadece gruplamalar';
$string['groupmember'] = 'Grup üyesi';
$string['groupmemberdesc'] = 'Bir grubun bir üyesi için standart rol';
$string['groupmembers'] = 'Grup üyeleri';
$string['groupmemberssee'] = 'Grup üyelerine bak';
$string['groupmembersselected'] = 'Seçili grubun üyeleri';
$string['groupmode'] = 'Grup modu';
$string['groupmode_help'] = 'Bu ayar için üç seçenek mevcut:

* Grup yok
* Ayrı gruplar - Her bir grup üyesi yalnızca kendi grubunu görebilir, diğerleri görünmez
* Görünür gruplar - Her bir grup üyesi kendi grubunda çalışır, ama diğer grupları görebilir

Kurs düzeyinde belirlenen grup türü kurs içindeki tüm ektinlikler için varsayılan türdür. Grupları destekleyen her bir etkinlik kendi grup türünü de belirleyebilir; ancak, eğer grup türü kurs düzeyinde zorunlu olarak belirlendiyse etkinlikler içinde belirlenen grup türü dikkate alınmaz.';
$string['groupmodeforce'] = 'Grup modu zorunluluğu';
$string['groupmodeforce_help'] = 'Grup modu zorlanırsa, kurstaki her etkinliğe ders grubu modu uygulanır. Daha sonra, her etkinlikteki grup modu ayarları yoksayılır.';
$string['groupmy'] = 'Grubum';
$string['groupname'] = 'Grup adı';
$string['groupnameexists'] = '\'{$a}\' grubu bu kursta zaten var. Lütfen başka bir isim seçin.';
$string['groupnotamember'] = 'Üzgünüz, bu grubun üyesi değilsiniz';
$string['groups'] = 'Gruplar';
$string['groupscount'] = 'Gruplar ({$a})';
$string['groupsettingsheader'] = 'Gruplar';
$string['groupsgroupings'] = 'Gruplar &amp; gruplamalar';
$string['groupsinselectedgrouping'] = 'Buradaki gruplar:';
$string['groupsnone'] = 'Grup yok';
$string['groupsonly'] = 'Sadece gruplar';
$string['groupspreview'] = 'Grup önizlemesi';
$string['groupsseparate'] = 'Ayrı gruplar';
$string['groupsvisible'] = 'Görünür gruplar';
$string['grouptemplate'] = 'Grup @';
$string['hidepicture'] = 'Resmi gizle';
$string['importgroups'] = 'Grupları al';
$string['importgroups_help'] = 'Gruplar, metin dosyası yoluyla içe aktarılabilir. Dosyanın biçimi aşağıdaki gibi olmalıdır:

* Dosyanın her satırı tek bir kayıt içerir
* Her kayıt, virgülle ayrılmış bir dizi veri
* İlk kayıt, dosyanın geri kalanının formatını tanımlayan alan adlarının bir listesini içerir
* Gerekli alan adı grup ismidir
* İsteğe bağlı alan adları açıklama, kayıt tuşu, resim, gizli resim';
$string['includeonlyactiveenrol'] = 'Sadece aktif kayıtları dahil et';
$string['includeonlyactiveenrol_help'] = 'Etkinleştirilirse, askıya alınan kullanıcılar gruplara dahil edilmez.';
$string['javascriptrequired'] = 'Bu sayfa, Javascriptin etkin olmasını gerektirir.';
$string['members'] = 'Her gruptaki üye';
$string['membersofselectedgroup'] = 'Üyelerin ait olduğu grup:';
$string['mygroups'] = 'Gruplarım';
$string['namingscheme'] = 'İsimlendirme şeması';
$string['namingscheme_help'] = 'At sembolü (@) harfleri içeren isimler içeren gruplar oluşturmak için kullanılabilir. Örneğin, Group @, Group A, Group B, Group C, ... gibi gruplar oluşturacaktır.

Karma simgesi (#), sayı içeren isimler içeren gruplar oluşturmak için kullanılabilir. Örneğin, Grup #, Grup 1, Grup 2, Grup 3, ... gibi gruplar oluşturacak';
$string['newgrouping'] = 'Yeni gruplama';
$string['newpicture'] = 'Yeni resim';
$string['newpicture_help'] = 'JPG veya PNG formatında bir resim seçin. Görüntü bir kareye kırpılacak ve 100x100 piksele yeniden boyutlandırılacaktır.';
$string['noallocation'] = 'Yerleştirme yok';
$string['nogroup'] = 'Grup yok';
$string['nogrouping'] = 'Gruplama yok';
$string['nogroups'] = 'Bu kursta ayarlanmış herhangi bir grup yok.';
$string['nogroupsassigned'] = 'Grup atanmadı';
$string['nopermissionforcreation'] = 'Gerekli izinleriniz olmadığından "{$a}" grubu oluşturulamıyor.';
$string['nosmallgroups'] = 'Son küçük grubu engelle';
$string['notingroup'] = 'Kullanıcıları gruplar halinde yoksay';
$string['notingrouping'] = '[Gruplama içinde değil]';
$string['notingrouplist'] = '[Bir grupta değil]';
$string['nousersinrole'] = 'Seçili role uygun kullanıcı yok';
$string['number'] = 'Grup/üye sayısı';
$string['numgroups'] = 'Grup sayısı';
$string['nummembers'] = 'Her gruptaki üye';
$string['othergroups'] = 'Diğer gruplar';
$string['overview'] = 'Önizle';
$string['potentialmembers'] = 'Olası üyeler: {$a}';
$string['potentialmembs'] = 'Olası üyeler';
$string['printerfriendly'] = 'Yazıcı-dostu görünüm';
$string['random'] = 'Rasgele';
$string['removefromgroup'] = '{$a} grubundan kullanıcıyı kaldır';
$string['removefromgroupconfirm'] = '"{$a->user}" kullanıcısını "{$a->group}" grubundan gerçekten kaldırmak istiyor musunuz?';
$string['removegroupfromselectedgrouping'] = 'Grubu gruplamadan sil';
$string['removegroupingsmembers'] = 'Tüm grupları gruplamadan sil';
$string['removegroupsmembers'] = 'Tüm grup üyelerini sil';
$string['removeselectedusers'] = 'Seçili kullanıcıları sil';
$string['selectfromgroup'] = 'Gruptan üyeler seç';
$string['selectfromgrouping'] = 'Gruplamadan üyeler seç';
$string['selectfromrole'] = 'Bu role sahip kullanıcıları seç -';
$string['showgroupsingrouping'] = 'Gruplamadaki grupları göster';
$string['showmembersforgroup'] = 'Grup için üyeleri göster';
$string['toomanygroups'] = 'Bu sayıda grubu doldurmak için yetersiz kullanıcı - seçili rolde yalnızca {$a} kullanıcı vardır.';
$string['usercount'] = 'Kullanıcı sayısı';
$string['usercounttotal'] = 'Kullanıcı sayısı ({$a})';
$string['usergroupmembership'] = 'Seçili kullanıcıların üyeliği:';
