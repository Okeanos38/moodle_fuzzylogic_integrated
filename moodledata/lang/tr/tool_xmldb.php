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
 * Strings for component 'tool_xmldb', language 'tr', version '3.10'.
 *
 * @package     tool_xmldb
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actual'] = 'Gerçek';
$string['aftertable'] = 'Tablodan Sonra:';
$string['back'] = 'Geri';
$string['backtomainview'] = 'Ana Menü';
$string['cannotuseidfield'] = '"id" alanı eklenemedi. Bu otomatik-artan bir sütündur';
$string['change'] = 'Değiştir';
$string['charincorrectlength'] = 'Char alanı için geçersiz uzunluk';
$string['check_bigints'] = 'Hatalı DB sayılarını ara';
$string['check_defaults'] = 'Tutarsız varsayılan değerleri ara';
$string['check_foreign_keys'] = 'Tutarsız ilişkili anahtarı ara';
$string['check_indexes'] = 'Hatalı DB indekslerini ara';
$string['check_oracle_semantics'] = 'Yanlış uzunluk semantiği arayın';
$string['checkbigints'] = 'Büyük sayıları denetle';
$string['checkdefaults'] = 'Varsayılanları denetle';
$string['checkforeignkeys'] = 'İlişkili anahtarı denetle';
$string['checkindexes'] = 'İndeksleri denetle';
$string['checkoraclesemantics'] = 'Semantiği kontrol et';
$string['completelogbelow'] = 'aşağıdaki aramanın tam kaydına bakın.';
$string['confirmcheckbigints'] = 'Bu işlevsellik, <a href="http://tracker.moodle.org/browse/MDL-11038">potansiyel olarak yanlış tam sayı alanlarını</a> Moodle sunucunuzda arayacak, bu da gerekli SQL ifadelerini doğru tanımlanan DB\'nizde otomatik üretir (ama uygulamaz!).<br /><br /> Üretildikten sonra bu tür ifadeleri kopyalayabilir ve sık kullanılan SQL arayüzünüzle güvenli bir şekilde uygulayabilirsiniz (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).<br /><br /> Yanlış tam sayı aramasını yapmadan önce Moodle yayımınızın (1.8,1.9,2.x...) mevcut en son (+sürümünü) çalıştırmanız önerilir.<br /><br /> Bu işlevsellik DB\'ye karşı herhangi bir eylemde bulunmayacağından (yalnızca okur) her an güvenle uygulanabilir.';
$string['confirmcheckdefaults'] = 'Bu işlevsellik Moodle sunumunda tutarsız varsayılan değerleri arayacak, tüm varsayılan değerleri düzgün tanımlayacak gerekli SQL ifadelerini üretecek (ama uygulamayacaktır!)<br /><br />  Üretildikten sonra bu tür ifadeleri kopyalayabilir ve sık kullanılan SQL arayüzünüzle güvenli bir şekilde uygulayabilirsiniz (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).<br /><br /> Yanlış tam sayı aramasını yapmadan önce Moodle yayımınızın (1.8,1.9,2.x...)mevcut en son (+sürümünü)çalıştırmanız önerilir.<br /><br /> Bu işlevsellik DB\'ye karşı herhangi bir eylemde bulunmayacağından (ondan yalnızca okur) her an güvenle uygulanabilir.';
$string['confirmcheckforeignkeys'] = 'Bu işlevsellik, install.xml tanımlarında tanımlanan yabancı anahtarların olası ihlallerini arayacaktır. (Moodle şu anda veritabanında gerçek yabancı anahtar kısıtlamaları üretmiyor, bu nedenle geçersiz veriler mevcut olabilir.)

Kayıp indekslerin araştırılmasını yürütmeden önce Moodle sürümünüzün en yeni sürümünü (+ sürümü) çalıştırmanız şiddetle tavsiye edilir.

Bu işlevsellik DB\'ye karşı herhangi bir işlem yapmaz (sadece ondan okur), bu yüzden her an güvenle yürütülebilir.';
$string['confirmcheckindexes'] = 'Bu işlevsellik Moodle sunucunuzda potansiyel eksik indeksleri arayacak, bu da herşeyi güncel tutabilmek için gerekli SQL ifadelerini otomatik üretecek (ama uygulamayacaktır!)<br /><br /> Üretildikten sonra bu tür ifadeleri kopyalayabilir ve sık kullanılan SQL arayüzünüzle güvenli bir şekilde uygulayabilirsiniz (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).<br /><br /> Yanlış tam sayı aramasını yapmadan önce Moodle yayımınızın (1.8,1.9,2.x...)mevcut en son (+sürümünü)çalıştırmanız önerilir.<br /><br /> Bu işlevsellik DB\'ye karşı herhangi bir eylemde bulunmayacağından (ondan yalnızca okur) her an güvenle uygulanabilir.';
$string['confirmcheckoraclesemantics'] = 'Bu işlevsellik Moodle sunucunuzda <a href="http://tracker.moodle.org/browse/MDL-29322"> Oracle varchar2 sütunlarını </a> arar ve otomatik olarak (ancak yürütmüyor!) Üretir. Bunun yerine, tüm sütunların CHAR anlambilimini kullanmak üzere dönüştürülmesi için gereken SQL ifadeleri (çapraz db uyumluluğu ve artan içerik maks. Uzunluğu için daha iyi).

Bir kere üretildiğinde, bu tür ifadeleri kopyalayabilir ve bunları en sevdiğiniz SQL arabirimi ile güvenle yürütebilirsiniz (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).

BYTE semantiği aramasını yapmadan önce Moodle sürümünüzün en son sürümünü (+ sürümü) çalıştırmanız şiddetle önerilir.

Bu işlevsellik DB\'ye karşı herhangi bir işlem yapmaz (sadece ondan okur), bu yüzden her an güvenle yürütülebilir.';
$string['confirmdeletefield'] = 'Alanı tamamen silmek istediğinizden emin misiniz:';
$string['confirmdeleteindex'] = 'İndeksi tamamen silmek istediğinizden emin misiniz:';
$string['confirmdeletekey'] = 'Anahtarı tamamen silmek istediğinizden emin misiniz:';
$string['confirmdeletetable'] = 'Tabloyu tamamen silmek istediğinizden emin misiniz:';
$string['confirmdeletexmlfile'] = 'Dosyayı tamamen silmek istediğinizden emin misiniz:';
$string['confirmrevertchanges'] = 'Daha önceden yapılan değişiklikleri geri almak istediğinizden emin misiniz:';
$string['create'] = 'Oluştur';
$string['createtable'] = 'Tablo Oluştur';
$string['defaultincorrect'] = 'Geçersiz varsayılan';
$string['delete'] = 'Sil';
$string['delete_field'] = 'Alanı Sil';
$string['delete_index'] = 'İndeksi Sil';
$string['delete_key'] = 'Anahtarı Sil';
$string['delete_table'] = 'Tabloyu Sil';
$string['delete_xml_file'] = 'XML Dosyayı Sil';
$string['doc'] = 'Belge';
$string['docindex'] = 'Belge İndeksi';
$string['documentationintro'] = 'Belgeleme XMLDB veritabanı tanımlamasından otomatik olarak oluşturulacaktır. Sadece İngilizce olarak ulaşılabilir.';
$string['down'] = 'Aşağı';
$string['duplicate'] = 'Kopyala';
$string['duplicatefieldname'] = 'Bu isimde başka bir alan var';
$string['duplicatefieldsused'] = 'Duplicate fields used';
$string['duplicateindexname'] = 'Dizin adını çoğalt';
$string['duplicatekeyname'] = 'Bu isimde başka bir anahtar var';
$string['duplicatetablename'] = 'Bu ismi taşıyan başka bir tablo var';
$string['edit'] = 'Düzenle';
$string['edit_field'] = 'Alanı Düzenle';
$string['edit_field_save'] = 'Alanı Kaydet';
$string['edit_index'] = 'İndeksi Düzenle';
$string['edit_index_save'] = 'İndeksi Kaydet';
$string['edit_key'] = 'Anahtarı Düzenle';
$string['edit_key_save'] = 'Anahtarı Kaydet';
$string['edit_table'] = 'Tabloyu Düzenle';
$string['edit_table_save'] = 'Tabloyu Kaydet';
$string['edit_xml_file'] = 'XML Dosyayı Düzenle';
$string['enumvaluesincorrect'] = 'Enum alanı için geçersiz değerler';
$string['expected'] = 'Beklenen';
$string['extensionrequired'] = 'Maalesef - bu eylem için \'{$a}\' PHP uzantısı gerekiyor. Bu özelliği kullanmak istiyorsanız lütfen uzantıyı yükleyin.';
$string['field'] = 'Alan';
$string['fieldnameempty'] = 'İsim alanı boş';
$string['fields'] = 'Alanlar';
$string['fieldsnotintable'] = 'Alan, tabloda yok';
$string['fieldsusedinindex'] = 'Bu alan dizin olarak kullanılır';
$string['fieldsusedinkey'] = 'Bu alan, anahtar olarak kullanılıyor.';
$string['filemodifiedoutfromeditor'] = 'Uyarı: XMLDB Düzenleyicisi kullanılırken dosya yerel olarak değiştirildi. Kaydetmek, yerel değişikliklerin üzerine yazacaktır.';
$string['filenotwriteable'] = 'Dosya yazılabilir değil';
$string['fkunknownfield'] = '{$a->tablename} tablosundaki {$a->keyname} yabancı anahtar {$a->reftable} referanslı tabloda {$a->reffield} varolmayan bir alana işaret ediyor.';
$string['fkunknowntable'] = '{$a->tablename} tablosundaki {$a->keyname} yabancı anahtar {$a->reftable} olmayan bir tabloya işaret ediyor.';
$string['fkviolationdetails'] = '{$a->tablename} tablosundaki {$a->keyname} ilişkili anahtarı, {$a->numrows} kayıttan {$a->numviolations} kaydın tutarsız olduğunu algıladı.';
$string['float2numbernote'] = 'Not: "Ondalıklı sayılar (float)" XMLDB tarafından tam olarak desteklenmesine rağmen, "sayı (number)" alanına çevirmeniz tavsiye edilir.';
$string['floatincorrectdecimals'] = 'Float alanı için hatalı ondalık sayı';
$string['floatincorrectlength'] = 'Float alanı için hatalı uzunluk';
$string['generate_all_documentation'] = 'Tüm Belgelendirme';
$string['generate_documentation'] = 'Belgelendirme';
$string['gotolastused'] = 'Son kullanılan dosyaya git';
$string['incorrectfieldname'] = 'Geçersiz ad';
$string['incorrectindexname'] = 'Yanlış dizin adı';
$string['incorrectkeyname'] = 'Yanlış anahtar adı';
$string['incorrecttablename'] = 'Yanlış tablo adı';
$string['index'] = 'Dizin';
$string['indexes'] = 'Dizinler';
$string['indexnameempty'] = 'Dizin adı boş';
$string['integerincorrectlength'] = 'Sayı alanı için geçersiz uzunluk';
$string['key'] = 'Anahtar';
$string['keynameempty'] = 'Anahtar adı boş olamaz';
$string['keys'] = 'Anahtarlar';
$string['listreservedwords'] = 'Rezerve Edilmiş Sözcükler<br />(Güncellemeler için <a href="http://docs.moodle.org/en/XMLDB_reserved_words" target="_blank">XMLDB_reserved_words</a>)';
$string['load'] = 'Yükle';
$string['main_view'] = 'Ana Görünüm';
$string['masterprimaryuniqueordernomatch'] = 'Dış anahtarınızdaki alanlar, başvurulan tablodaki UNIQUE KEY\'de listelendiği gibi aynı sırada listelenmelidir.';
$string['missing'] = 'Eksik';
$string['missingindexes'] = 'Eksik İndeksler Bulundu';
$string['mustselectonefield'] = 'Alan ilişkili eylemleri görmek için bir alan seçmelisiniz!';
$string['mustselectoneindex'] = 'Index ilişkili eylemleri görmek için bir index seçmelisiniz!';
$string['mustselectonekey'] = 'Anahtar ilişkili eylemleri görmek için bir anahtar seçmelisiniz!';
$string['new_table_from_mysql'] = 'MySQL\'den Yeni Tablo';
$string['newfield'] = 'Yeni Alan';
$string['newindex'] = 'Yeni İndeks';
$string['newkey'] = 'Yeni Anahtar';
$string['newtable'] = 'Yeni Tablo';
$string['newtablefrommysql'] = 'MySQL\'den Yeni Tablo';
$string['nofieldsspecified'] = 'Belirtilen alanlar yok';
$string['nomasterprimaryuniquefound'] = 'Yabancı anahtarın başvurduğu sütun (lar), başvurulan tablodaki birincil veya benzersiz bir ANAHTAR\'e eklenmelidir. Unutmayın, sütun BENZERSİZ DİZİN\'de olması yeterince iyi değildir.';
$string['noreffieldsspecified'] = 'Belirtilen referans alanı yok';
$string['noreftablespecified'] = 'Belirtilen referans tablosu bulunamadı';
$string['noviolatedforeignkeysfound'] = 'Tüm ilişkili anahtarlar tutarlı';
$string['nowrongdefaultsfound'] = 'Hiçbir varsayılan tutarsız değer bulunmadı, DB\'nizin başka bir eyleme gereksinimi yoktur.';
$string['nowrongintsfound'] = 'Hiçbir yanlış tam sayı bulunmadı, DB\'nizin başka bir eyleme gereksinimi yoktur.';
$string['nowrongoraclesemanticsfound'] = 'BYTE semantiği kullanan Oracle sütunları bulunamadı, DB\'nizde başka işlem yapılmasına gerek yok.';
$string['numberincorrectdecimals'] = 'Sayı alanı için geçersiz ondalık basamak sayısı';
$string['numberincorrectlength'] = 'Sayı alanı için geçersiz uzunluk';
$string['pendingchanges'] = 'Not: Bu dosyada değişiklikler yaptınız. İstediğiniz zaman kaydedilebilir.';
$string['pendingchangescannotbesaved'] = 'Bu dosyada değişiklikler yapıldı fakat kaydedilemedi! Lütfen hem klasörün hem de "install.xml" dosyasının web sunucusu tarafından yazma izinlerinin verildiğinden emin olun.';
$string['pendingchangescannotbesavedreload'] = 'Bu dosyada değişiklikler yapıldı fakat kaydedilemedi! Lütfen hem klasörün hem de "install.xml" dosyasının web sunucusu tarafından yazma izinlerinin verildiğinden emin olun. Daha sonra bu sayfayı tekrar yükleyin. Değişiklikleri kaydedebiliyor olmanız gerekir.';
$string['pluginname'] = 'XMLDB düzenleyicisi';
$string['primarykeyonlyallownotnullfields'] = 'Birincil anahtarlar boş olamaz';
$string['reserved'] = 'Rezerve edilmiş';
$string['reservedwords'] = 'Rezerve Edilmiş Sözcükler';
$string['revert'] = 'Geri Al';
$string['revert_changes'] = 'Değişiklikleri Geri Al';
$string['save'] = 'Kaydet';
$string['searchresults'] = 'Arama Sonuçları';
$string['selectaction'] = 'Eylem Seç:';
$string['selectdb'] = 'Veritabanı Seç:';
$string['selectfieldkeyindex'] = 'Alan/Anahtar/İndex Seç:';
$string['selectonecommand'] = 'PHP kodunu görmek için, lütfen listeden bir eylem seçin.';
$string['selectonefieldkeyindex'] = 'PHP kodunu görmek için, lütfen listeden bir Alan/Anahtar/İndex seçin.';
$string['selecttable'] = 'Tablo Seç:';
$string['table'] = 'Tablo';
$string['tablenameempty'] = 'Tablo adı boş olamaz';
$string['tables'] = 'Tablolar';
$string['unknownfield'] = 'Bilinmeyen bir alana atıfta bulunur.';
$string['unknowntable'] = 'bilinmeyen bir tabloya atıfta bulunur';
$string['unload'] = 'Yükleme';
$string['up'] = 'Yukarı';
$string['view'] = 'Bak';
$string['view_reserved_words'] = 'Rezerve Edilmiş Sözcüklere Bak';
$string['view_structure_php'] = 'PHP Yapısına Bak';
$string['view_structure_sql'] = 'SQL Yapısına Bak';
$string['view_table_php'] = 'PHP Tablosuna Bak';
$string['view_table_sql'] = 'SQL Tablosuna Bak';
$string['viewedited'] = 'Düzeltilmişe Bak';
$string['vieworiginal'] = 'Orijinaline Bak';
$string['viewphpcode'] = 'PHP Koduna Bak';
$string['viewsqlcode'] = 'SQL Koduna Bak';
$string['viewxml'] = 'XML';
$string['violatedforeignkeys'] = 'Bozuk ilişikili anahtarlar';
$string['violatedforeignkeysfound'] = 'Bozuk ilişkili anahtarlar bulundu';
$string['violations'] = 'Tutarsızlıklar';
$string['wrong'] = 'Hatalı';
$string['wrongdefaults'] = 'Yanlış varsayılanlar bulundu';
$string['wrongints'] = 'Hatalı Sayılar Bulundu';
$string['wronglengthforenum'] = 'Enum alanı için geçersiz uzunluk';
$string['wrongnumberofreffields'] = 'Yanlış sayıda başvuru alanı';
$string['wrongoraclesemantics'] = 'Yanlış Oracle BYTE semantiği bulundu';
$string['wrongreservedwords'] = 'Rezerve Edilmiş Sözcükler<br />$CFG->prefix kullanılıyorsa tablo isimleri önemli değildir.';
$string['yesmissingindexesfound'] = 'DB\'nizde bazı eksik indeksler bulundu. Bunların ayrıntıları ve tümünü oluşturmak için sık kullanılan SQL arayüzünüzle çalıştırılacak gerekli SQL ifadeleri buradadır. (bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).<br /><br />Bunu yaptıktan sonra, başka eksik indekslerin bulunmadığını tekrar denetlemek için bu işlevi yürütmek ısrarla önerilir.';
$string['yeswrongdefaultsfound'] = 'DB\'nizde bazı tutarsız varsayılanlar bulundu. Bunların ayrıntıları ve tamamını düzeltmek için sık kullanılan SQL arayüzünüzle çalıştırılacak gerekli SQL ifadeleri buradadır.(bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).<br /><br />Bunu yaptıktan sonra, başka tutarsız varsayılanların bulunmadığını tekrar denetlemek için bu işlevi yürütmek ısrarla önerilir.';
$string['yeswrongintsfound'] = 'DB\'nizde bası yanlış tam sayılar bulundu. Bunların ayrıntıları ve tamamını oluşturmak için sık kullanılan SQL arayüzünüzle çalıştırılacak gerekli SQL ifadeleri buradadır.(bunu yapmadan önce verilerinizi yedeklemeyi unutmayın).<br /><br />Bunu yaptıktan sonra, başka yanlış tam sayıların bulunmadığını tekrar denetlemek için bu işlevi yürütmek ısrarla önerilir.';
$string['yeswrongoraclesemanticsfound'] = '<p> BYTE semantiği kullanan bazı Oracle sütunları DB\'nizde bulundu. Bunların ayrıntıları ve hepsi oluşturmak için en sevdiğiniz SQL arabirimi ile yürütülecek gerekli SQL ifadeleri. İlk önce verilerinizi yedeklemeyi unutmayın! </ p>
<p> Bunu yaptıktan sonra, daha fazla yanlış semantik bulunmadığını kontrol etmek için bu programı tekrar çalıştırmanız şiddetle tavsiye edilir. </ p>';
