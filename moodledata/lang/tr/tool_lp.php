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
 * Strings for component 'tool_lp', language 'tr', version '3.10'.
 *
 * @package     tool_lp
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Eylemler';
$string['activities'] = 'Etkinlikler';
$string['addcohorts'] = 'Topluluk ekle';
$string['addcohortstosync'] = 'Topluluk uyumluluğu ekle';
$string['addcompetency'] = 'Yetkinlik ekle';
$string['addcoursecompetencies'] = 'Derse yetkinlikler ekle';
$string['addcrossreferencedcompetency'] = 'Çapraz referanslı yetkinlik ekle';
$string['addingcompetencywillresetparentrule'] = 'Yeni bir yetkinlik eklemek, \'{$a}\' da belirlenmiş kuralları kaldıracaktır. Devam etmek istiyor musun?';
$string['addnewcompetency'] = 'Yeni bir yetkinlik ekle';
$string['addnewcompetencyframework'] = 'Yeni bir yetkinlik çerçevesi ekle';
$string['addnewplan'] = 'Yeni bir öğrenme planı ekle';
$string['addnewtemplate'] = 'Yeni bir öğrenme planı şablonu ekle';
$string['addnewuserevidence'] = 'Yeni bir öğrenme kanıtı ekle';
$string['addtemplatecompetencies'] = 'Öğrenme planı şablonuna yetkinlik ekle';
$string['aisrequired'] = '\'{$a}\' gereklidir';
$string['aplanswerecreated'] = '{$a} Öğrenme planları oluşturuldu.';
$string['aplanswerecreatedmoremayrequiresync'] = 'Öğrenme planları oluşturuldu; Bir sonraki uyumluluk sırasında daha fazlası oluşturulur.';
$string['assigncohorts'] = 'Toplulukları ata';
$string['averageproficiencyrate'] = 'Bu şablonu temel alan tamamlanmış öğrenme planları için ortalama yeterlik oranı: {$a} %';
$string['cancelreviewrequest'] = 'Inceleme isteğini iptal et';
$string['cannotaddrules'] = 'Bu yetkinlik yapılandırılamaz.';
$string['cannotcreateuserplanswhentemplateduedateispassed'] = 'Yeni öğrenme planları oluşturulamaz. Şablonun son teslim tarihi doldu veya süresi dolmak üzere.';
$string['cannotcreateuserplanswhentemplatehidden'] = 'Bu şablon gizlenirken yeni öğrenme planları oluşturulamaz.';
$string['category'] = 'Kategori';
$string['chooserating'] = 'Bir dercelendirme seçin ...';
$string['cohortssyncedtotemplate'] = 'Bu öğrenme planı şablonu ile senkronize edilen topluluklar';
$string['competenciesforframework'] = 'Yetkinlikleri için {$a}';
$string['competenciesmostoftennotproficient'] = 'Tamamlanmış öğrenme planlarında yeterlilikleri olmayan yetkinlikler';
$string['competenciesmostoftennotproficientincourse'] = 'Bu dersi alan  en çok yeterli olmayan yetkinlikler';
$string['competencycannotbedeleted'] = '\'{$a}\' yetkinlik silinemiyor';
$string['competencycreated'] = 'Yetkinlik oluştur';
$string['competencycrossreferencedcompetencies'] = '{$a} çapraz referanslı yetkinlikler';
$string['competencyframework'] = 'Yetkinlik çevrçevesi';
$string['competencyframeworkcreated'] = 'Yetkinlik çerçevesi oluştur';
$string['competencyframeworkname'] = 'Adı';
$string['competencyframeworkroot'] = 'Üst seviye yok (üst düzey yetkinlik)';
$string['competencyframeworks'] = 'Yetkinlik çevrçeveleri';
$string['competencyframeworksrepository'] = 'Yetkinlik çerçeveleri deposu';
$string['competencyframeworkupdated'] = 'Yetkinlik çerçevesi güncellendi.';
$string['competencyoutcome_complete'] = 'İşaretleme tamam';
$string['competencyoutcome_evidence'] = 'Kanıt ekle';
$string['competencyoutcome_none'] = 'Yok';
$string['competencyoutcome_recommend'] = 'Yetkinlik önerisi';
$string['competencypicker'] = 'Yetkinlik toplayıcı';
$string['competencyrule'] = 'Yetkinlik kuralı';
$string['competencyupdated'] = 'Yetkinlik güncellendi';
$string['completeplan'] = 'Bu öğrenme planını tamamla';
$string['completeplanconfirm'] = '\'{$a}\' öğrenme planını tamamlandı mı? Eğer öyleyse, tüm kullanıcıların yetkinliklerinin mevcut durumu kaydedilecek ve plan salt okunur hale gelecektir.';
$string['configurecoursecompetencysettings'] = 'Dersin yetkinkinliklerini yapılandırın';
$string['configurescale'] = 'Ölçekleri yapılandır';
$string['coursecompetencies'] = 'Ders yetkinlikleri';
$string['coursecompetencyratingsarenotpushedtouserplans'] = 'Bu dersin yetkinlik dereceleri öğrenme planlarını etkilemez.';
$string['coursecompetencyratingsarepushedtouserplans'] = 'Bu dersin yetkinlik dereceleri öğrenme planlarında anında güncellenir.';
$string['coursecompetencyratingsquestion'] = 'Bir kurs yetkinliği derecelendirildiğinde, derecelendirme öğrenme planlarındaki yetkinliği günceller mi yoksa sadece derse mi uygulanır?';
$string['coursesusingthiscompetency'] = 'Bu yetkinliğe bağlı kurslar';
$string['coveragesummary'] = '{$a->competenciescoveredcount} ait {$a->competenciescount} Yetkinlikleri kapsar ( {$a->coveragepercentage} % )';
$string['createlearningplans'] = 'Öğrenme planları oluştur';
$string['createplans'] = 'Öğrenme planları oluştur';
$string['crossreferencedcompetencies'] = 'Çapraz referanslı yetkinlikler';
$string['default'] = 'Varsayılan';
$string['deletecompetency'] = 'yetkinlik silinsin mi \'{$a}\'?';
$string['deletecompetencyframework'] = 'Yetkinlik çerçevesi silinsin mi \'{$a}\'?';
$string['deletecompetencyparenthasrule'] = 'Yetkinlik silinsin mi \'{$a}\'? Bu aynı zamanda üst seviye için bulunan kural kümesini kaldırır.';
$string['deleteplan'] = 'Öğrenme planı silinsin mi \'{$a}\'?';
$string['deleteplans'] = 'Bu öğrenme planlarını sil';
$string['deletetemplate'] = 'Öğrene planı şablonu silinsin mi \'{$a}\'?';
$string['deletetemplatewithplans'] = 'Bu şablonun öğrenme planları vardır. Bu planların nasıl işleneceğini belirtmeniz gerekiyor.';
$string['deletethisplan'] = 'Bu öğrenme planı şablonunu sil';
$string['deletethisuserevidence'] = 'Bu öğrenme kanıtını sil';
$string['deleteuserevidence'] = 'Daha önce öğrenilenlerin kanıtları silinsin mi  \'{$a}\'?';
$string['description'] = 'Açıklama';
$string['duedate'] = 'Bitiş tarihi';
$string['duedate_help'] = 'Öğrenme planının tamamlanması gereken tarih.';
$string['editcompetency'] = 'Yetkinliği düzenle';
$string['editcompetencyframework'] = 'Yetkinlik çerçevesini düzenle';
$string['editplan'] = 'Öğrenme planını düzenle';
$string['editrating'] = 'Derecelendirmeyi düzenle';
$string['edittemplate'] = 'Öğrenme planı şablonunu düzenle';
$string['editthisplan'] = 'Bu öğrenme planını düzenle';
$string['editthisuserevidence'] = 'Bu öğrenme kanıtını düzenle';
$string['edituserevidence'] = 'Öğrenme kanıtını düzenle';
$string['evidence'] = 'Öğrenme kanıtı';
$string['findcourses'] = 'Dersler bulundu';
$string['frameworkcannotbedeleted'] = '\'{$a}\' adlı yetkinlik çerçevesi silinemiyor';
$string['hidden'] = 'Gizli';
$string['hiddenhint'] = '(gizli)';
$string['idnumber'] = 'Kimlik numarası';
$string['inheritfromframework'] = 'Yetkinlik çerçevesinden miras al (varsayılan)';
$string['itemstoadd'] = 'Eklenecek öğeler';
$string['jumptocompetency'] = 'Yetkinliğe geç';
$string['jumptouser'] = 'Kullanıcıya geç';
$string['learningplancompetencies'] = 'Öğrenme planı yetkinlikleri';
$string['learningplans'] = 'Öğrenme planları';
$string['levela'] = 'Seviye  {$a}';
$string['linkcompetencies'] = 'Yetkinlikler bağlantısı';
$string['linkcompetency'] = 'Yetkinlik bağlantısı';
$string['linkedcompetencies'] = 'Yetkinliklere bağlanıldı';
$string['linkedcourses'] = 'Derslere bağlanıldı';
$string['linkedcourseslist'] = 'Derslere bağlanıldı:';
$string['listcompetencyframeworkscaption'] = 'Yetkinlik çervrçevelerinin listesi';
$string['listofevidence'] = 'Öğrenme kanıtı listesi';
$string['listplanscaption'] = 'Öğrenme planları listesi';
$string['listtemplatescaption'] = 'Öğrenme planı şablonları listesi';
$string['loading'] = 'Yükleniyor';
$string['locatecompetency'] = 'Yetkinlik yerleşimi';
$string['managecompetenciesandframeworks'] = 'Yetkinlikleri ve çerçeveleri yönet';
$string['modcompetencies'] = 'Ders yetkinlikleri';
$string['modcompetencies_help'] = 'Bu etkinliğe bağlanan ders yetkinlikleri.';
$string['move'] = 'Taşı';
$string['movecompetency'] = 'Yetkinliği taşı';
$string['movecompetencyafter'] = 'Sonraki yetkinliği taşı \'{$a}\'';
$string['movecompetencyframework'] = 'Yetkinlik çerçevesini taşı';
$string['movecompetencytochildofselfwillresetrules'] = 'Yetkinlik taşınması, kendi kuralını ve üst seviyesini ve varış yeri için belirlenmiş kuralları kaldıracaktır. Devam etmek istiyor musun?';
$string['movecompetencywillresetrules'] = 'Yetkinlik taşınması, üst seviyesini ve varış yeri için belirlenmiş kuralları kaldıracaktır. Devam etmek istiyor musun?';
$string['moveframeworkafter'] = 'Sonraki yetkinlik çerçevesini taşı \'{$a}\'';
$string['movetonewparent'] = 'Yerleşimi değiştir';
$string['myplans'] = 'Benim öğrenme planlarım';
$string['nfiles'] = '{$a} dosya(lar)';
$string['noactivities'] = 'Etkinlikler yok';
$string['nocompetencies'] = 'Bu çerçevede hiçbir yetkinlik oluşturulmamıştır.';
$string['nocompetenciesincourse'] = 'Bu derse hiçbir yetkinlik bağlantı kurmamıştır.';
$string['nocompetenciesinevidence'] = 'Bu öğrenme kanıtıyla hiçbir yetkinlik bağlantılı değildir.';
$string['nocompetenciesinlearningplan'] = 'Bu öğrenme planına hiçbir yetkinlik bağlantı kurmamıştır.';
$string['nocompetenciesintemplate'] = 'Bu öğrenme planı şablonu ile bağlantılı hiçbir yetkinlik yok.';
$string['nocompetencyframeworks'] = 'Yetkinlik çerçeveleri henüz oluşturulmamıştır.';
$string['nocompetencyselected'] = 'Herhangi bir yetkinlik seçilmedi';
$string['nocrossreferencedcompetencies'] = 'Bu yetkinliğe çapraz referanslı başka yetkinlik bulunmamaktadır.';
$string['noevidence'] = 'Öğrenme kanıtı yok';
$string['nofiles'] = 'Herhangi bir dosya yok';
$string['nolinkedcourses'] = 'Bu yetkinliğe bağlı hiçbir ders bulunmamaktadır';
$string['noparticipants'] = 'Hiçbir katılımcı bulunamadı.';
$string['noplanswerecreated'] = 'Hiçbir öğrenme planı oluşturulmadı.';
$string['notemplates'] = 'Henüz hiçbir öğrenme planı şablonu oluşturulmadı.';
$string['nourl'] = 'URL yok';
$string['nouserevidence'] = 'Daha önce bir önceki öğrenmeye dair herhangi bir kanıt eklenmedi.';
$string['nouserplans'] = 'Henüz hiçbir öğrenme planı oluşturulmadı.';
$string['oneplanwascreated'] = 'Bir öğrenme planı oluşturuldu';
$string['outcome'] = 'Sonuç';
$string['parentcompetency'] = 'Üst seviye';
$string['parentcompetency_edit'] = 'Üst seviyeyi düzenle';
$string['parentcompetency_help'] = 'Yetkinlik eklenecek üst seviyeyi tanımlayın. Aynı çerçevede başka bir yetkinlik olabilir veya üst düzey bir yetkinlik için yetkinlik çerçevesinin kökü olabilir.';
$string['path'] = 'Yol:';
$string['planapprove'] = 'Aktif hale getir';
$string['plancompleted'] = 'Öğrenme planı tamamlandı';
$string['plancreated'] = 'Öğrenme planı oluşturuldu';
$string['plandescription'] = 'Açıklama';
$string['planname'] = 'Adı';
$string['plantemplate'] = 'Öğrenme planı şablonu seç';
$string['plantemplate_help'] = 'Bir şablondan oluşturulan bir öğrenme planı, şablonla eşleşen yetkinliklerin bir listesini içerir. Şablondaki güncellemeler bu şablondan oluşturulan planlara yansıtılacaktır.';
$string['planunapprove'] = 'Taslağa geri gönder';
$string['planupdated'] = 'Öğrenme planı güncellendi';
$string['pluginname'] = 'Öğrenme planları';
$string['points'] = 'Puanlar';
$string['pointsgivenfor'] = 'İçin verilen puanlar \'{$a}\'';
$string['proficient'] = 'Yeterli';
$string['progress'] = 'İlerleme';
$string['rate'] = 'Derece';
$string['ratecomment'] = 'Öğrenme kanıtı açıklamaları';
$string['rating'] = 'Derecelendirme';
$string['ratingaffectsonlycourse'] = 'Bir yetkinlik derecelendirmesi, yalnızca bu dersteki yetkinliği günceller';
$string['ratingaffectsuserplans'] = 'Bir yetkinlik derecesinin değerlendirilmesi, tüm öğrenme planlarındaki yetkinliği de günceller';
$string['reopenplan'] = 'Bu öğrenme planını tekrar aç';
$string['reopenplanconfirm'] = '\'{$a}\' öğrenme planını tekrar açsın mı? Eğer öyleyse, planın daha önce tamamlandığı zaman kaydedilen kullanıcı yetkinliklerinin durumu silinecek ve plan tekrar aktif hale gelecektir.';
$string['requestreview'] = 'İnceleme isteğinde bulun';
$string['reviewer'] = 'İnceleyen';
$string['reviewstatus'] = 'İnceleme durumu';
$string['savechanges'] = 'Değişiklikleri kaydet';
$string['scale'] = 'Ölçek';
$string['scale_help'] = 'Bir ölçek, bir yetkinlikte yeterlilik ölçüsünü belirler. Bir ölçek seçtikten sonra yapılandırılmalıdır.

* \'Varsayılan\' olarak seçilen öğe, bir yetkinlik otomatik olarak tamamlandığında verilen puandır.
* \'Yeterli\' olarak seçilen öğe (ler), yeterlilikleri puanlandıklarında yetkinlikler olarak hangi değer (ler) i işaretleyeceklerini gösterir.';
$string['scalevalue'] = 'Ölçek değeri';
$string['search'] = 'Arama...';
$string['selectcohortstosync'] = 'Senkronize edilecek toplulukları seçin';
$string['selectcompetencymovetarget'] = 'Bu yetkinliği taşımak için bir konum seçin:';
$string['selectedcompetency'] = 'Yetkinlik seçildi';
$string['selectuserstocreateplansfor'] = 'öğrenme planları oluşturmak için kullanıcıları seçin';
$string['sendallcompetenciestoreview'] = 'Daha önce öğrenilenlerin öğrenme kanıtları için incelemedeki tüm yetkinlikleri gönderin \'{$a}\'';
$string['sendcompetenciestoreview'] = 'İnceleme için yetkinlikleri Gönder';
$string['shortname'] = 'Adı';
$string['sitedefault'] = '(Site varsayılan)';
$string['startreview'] = 'İncelemeyi başlat';
$string['state'] = 'Durum';
$string['status'] = 'Durumlar';
$string['stopreview'] = 'İncelemeyi bitir';
$string['stopsyncingcohort'] = 'Topluluk senkronizasyonunu durdur';
$string['taxonomies'] = 'Sınıflandırmalar';
$string['taxonomy_add_behaviour'] = 'Bir davranış ekle';
$string['taxonomy_add_competency'] = 'Bir Yetkinlik ekle';
$string['taxonomy_add_concept'] = 'Bir kavram ekle';
$string['taxonomy_add_domain'] = 'Alan adı ekle';
$string['taxonomy_add_indicator'] = 'Gösterge ekle';
$string['taxonomy_add_level'] = 'Seviye ekle';
$string['taxonomy_add_outcome'] = 'Sonuç ekle';
$string['taxonomy_add_practice'] = 'Uygulama ekle';
$string['taxonomy_add_proficiency'] = 'Yeterlilik ekle';
$string['taxonomy_add_skill'] = 'Beceri ekle';
$string['taxonomy_add_value'] = 'Değer ekle';
$string['taxonomy_edit_behaviour'] = 'Davranışı düzenle';
$string['taxonomy_edit_competency'] = 'Yetkinliği düzenle';
$string['taxonomy_edit_concept'] = 'Kavramı düzenle';
$string['taxonomy_edit_domain'] = 'Alan adını düzenle';
$string['taxonomy_edit_indicator'] = 'Göstergeyi düzenle';
$string['taxonomy_edit_level'] = 'Seviyeyi düzenle';
$string['taxonomy_edit_outcome'] = 'Sonucu düzenle';
$string['taxonomy_edit_practice'] = 'Uygulamayı düzenle';
$string['taxonomy_edit_proficiency'] = 'Yeterliliği düzenle';
$string['taxonomy_edit_skill'] = 'Beceriyi düzenle';
$string['taxonomy_edit_value'] = 'Değeri düzenle';
$string['taxonomy_parent_behaviour'] = 'Üst seviye davranış';
$string['taxonomy_parent_competency'] = 'Üst seviye yetkinlik';
$string['taxonomy_parent_concept'] = 'Üst kavram';
$string['taxonomy_parent_domain'] = 'Üst alan adı';
$string['taxonomy_parent_indicator'] = 'Üst gösterge';
$string['taxonomy_parent_level'] = 'Üst seviye';
$string['taxonomy_parent_outcome'] = 'Üst sonuç';
$string['taxonomy_parent_practice'] = 'Üst uygulama';
$string['taxonomy_parent_proficiency'] = 'Üst seviye yeterlilik';
$string['taxonomy_parent_skill'] = 'Üst beceri';
$string['taxonomy_parent_value'] = 'Üst değer';
$string['taxonomy_selected_behaviour'] = 'Davranışı seçildi';
$string['taxonomy_selected_competency'] = 'Yetkinliği seçildi';
$string['taxonomy_selected_concept'] = 'Kavramı seçildi';
$string['taxonomy_selected_domain'] = 'Alan adı seçildi';
$string['taxonomy_selected_indicator'] = 'Gösterge seçildi';
$string['taxonomy_selected_level'] = 'Seviye seçildi';
$string['taxonomy_selected_outcome'] = 'Sonuç seçildi';
$string['taxonomy_selected_practice'] = 'Uygulama seçildi';
$string['taxonomy_selected_proficiency'] = 'Yeterlilik seçildi';
$string['taxonomy_selected_skill'] = 'Beceri seçildi';
$string['taxonomy_selected_value'] = 'Değer seçildi';
$string['template'] = 'Öğrenme planı şablonu';
$string['templatebased'] = 'Şablon tabanlı';
$string['templatecohortnotsyncedwhileduedateispassed'] = 'Şablonun son tarihi geçerse topluluklar senkronize edilmez.';
$string['templatecohortnotsyncedwhilehidden'] = 'Bu şablon gizlenirken topluluklar senkronize edilmeyecektir.';
$string['templatecompetencies'] = 'Öğrenme planı şablonundaki yetkinlikler';
$string['templatecreated'] = 'Öğrenme planı şablonu oluşturuldu';
$string['templatename'] = 'Adı';
$string['templates'] = 'Öğrenme planı şablonları';
$string['templateupdated'] = 'Öğrenme planı şablonu güncellendi';
$string['totalrequiredtocomplete'] = 'Tamamlanması gereken toplam';
$string['unlinkcompetencycourse'] = '\'{$a}\' dersten yetkinlik bağlantısını çıkar?';
$string['unlinkcompetencyplan'] = '\'{$a}\' öğrenme planından yetkinlik bağlantısını çıkar?';
$string['unlinkcompetencytemplate'] = '\'{$a}\' öğrenme planı şablonundan yetkinlik bağlantısını çıkar?';
$string['unlinkplanstemplate'] = 'Onların şablonlarından öğrenme planları bağlantısını çıkar';
$string['unlinkplantemplate'] = 'Öğrenme planlarından bağlantıları çıkar';
$string['unlinkplantemplateconfirm'] = '\'{$a}\' öğrenim planını şablonundan kaldırın? Şablonda yapılan herhangi bir değişiklik artık plana uygulanmayacaktır. Bu eylem geri alınamaz.';
$string['uponcoursecompletion'] = 'Ders tamamlandığında:';
$string['uponcoursemodulecompletion'] = 'Etkinlik tamamlandığında:';
$string['usercompetencyfrozen'] = 'Bu kayıt artık donmuş durumda. Öğrenme planınız tamamlandı olarak işaretlendiğinde, kullanıcının yetkinliğinin durumunu yansıtır.';
$string['userevidence'] = 'Önceki öğrenmenin kanıtı';
$string['userevidencecreated'] = 'Önceki öğrenmenin kanıtı yaratıldı';
$string['userevidencedescription'] = 'Açıklama';
$string['userevidencefiles'] = 'Dosyalar';
$string['userevidencename'] = 'Adı';
$string['userevidencesummary'] = 'Özet';
$string['userevidenceupdated'] = 'Önceki öğrenmenin kanıtı güncellendi';
$string['userevidenceurl'] = 'URL';
$string['userevidenceurl_help'] = 'URL, \'http: //\' veya \'https: //\' ile başlamalıdır.';
$string['viewdetails'] = 'Detayları göset';
$string['visible'] = 'Görünür';
$string['visible_help'] = 'Bir yetkinlik çerçevesi kurulurken veya yeni bir sürüme güncellendiğinde gizlenebilir.';
$string['when'] = 'Ne zaman';
$string['xcompetencieslinkedoutofy'] = '{$a->y} yetkinliklerden {$a->x} dersle ilişkili';
$string['xcompetenciesproficientoutofy'] = '{$a->y} yetkinliğinden {$a->x} dışarıda yeterli';
$string['xcompetenciesproficientoutofyincourse'] = 'Bu derste {$a->y} yetkinliğin dışında {$a->x} yeterliliğe sahibisiniz.';
$string['xplanscompletedoutofy'] = 'Bu şablon için tamamlanan {$a->y} öğrenme planından {$a->x}';
