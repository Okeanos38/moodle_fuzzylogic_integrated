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
 * Strings for component 'adaptivequiz', language 'tr', version '3.10'.
 *
 * @package     adaptivequiz
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityreports'] = 'Deneme raporu';
$string['adaptivequiz:addinstance'] = 'Yeni bir uyarlamalı test ekle';
$string['adaptivequiz:attempt'] = 'Deneme sınavı çalışması';
$string['adaptivequiz:reviewattempts'] = 'Deneme sınavı gönderilerini inceleyin';
$string['adaptivequiz:viewreport'] = 'Deneme sınavı raporlarını görüntüle';
$string['adaptivequizname'] = 'İsim';
$string['adaptivequizname_help'] = 'Deneme Sınavı örneğinin adını girin';
$string['all_attempts_deleted'] = 'Tüm Deneme sınavları silindir';
$string['all_grades_removed'] = 'Tüm Deneme Sınavı notları kaldırıldı';
$string['answer'] = 'Cevap';
$string['answerdistgraph_numrightwrong'] = 'Yanlış sayısı (-) / Doğru sayısı (+)';
$string['answerdistgraph_questiondifficulty'] = 'Soru Seviyesi';
$string['answerdistgraph_title'] = '{$a->firstname} {$a->lastname} için yanıt dağılımı';
$string['answers_display_name'] = 'Yanıtlar';
$string['attempt_questiondetails'] = 'Soru Detayları';
$string['attempt_state'] = 'Deneme durumu';
$string['attempt_summary'] = 'Deneme Özeti';
$string['attempt_user'] = 'Kullanıcı';
$string['attemptclosed'] = 'Deneme sınavları manuel kapatıldı.';
$string['attemptclosedstatus'] = '{$a-> Şimdi} üzerinde {$ a->current_user_name} (kullanıcı kimliği: {$ a->current_user_id}) ile manuel olarak kapatıldı.';
$string['attemptdeleted'] = '{$a->timecompleted} tarihinde gönderilen {$a-> name} için deneme silindi';
$string['attemptfeedback'] = 'Deneme Geribildirimi';
$string['attemptfeedback_help'] = 'Deneme bittikten sonra deneme geri bildirimi kullanıcıya gösterilir';
$string['attemptfinishedtimestamp'] = 'Deneme Bitiş Zamanı';
$string['attemptfirst'] = 'İlk Deneme';
$string['attemptlast'] = 'Son Deneme';
$string['attemptquestion_ability'] = 'Yetenek Ölçüsü';
$string['attemptquestion_abilitylogits'] = 'Ölçülen Yetenek (logits)';
$string['attemptquestion_difficulty'] = 'Soruların Zorluğu (logits)';
$string['attemptquestion_diffsum'] = 'Zorluk Toplamı';
$string['attemptquestion_error'] = 'Standart Hata (&plusmn;&nbsp;x%)';
$string['attemptquestion_level'] = 'Soru Seviyesi';
$string['attemptquestion_num'] = '#';
$string['attemptquestion_rightwrong'] = 'Doğru/Yanlış';
$string['attemptquestion_stderr'] = 'Standart Hata (&plusmn;&nbsp;logits)';
$string['attemptsallowed'] = 'Denemelere İzin Verildi';
$string['attemptsallowed_help'] = 'Öğrencinin bu etkinliği deneme sayısı';
$string['attemptstarttime'] = 'Deneme Başlangıç Zamanı';
$string['attemptstate'] = 'Denemenin durumu';
$string['attemptstopcriteria'] = 'Denemenin Durdurulma Nedeni';
$string['attempttotaltime'] = 'Toplam Zaman (hh:mm:ss)';
$string['back_to_all_questions'] = '&laquo; Tüm Sorulara Geri Dön';
$string['backtomainreport'] = 'Ana Raporlara Geri Dön';
$string['backtoviewattemptreport'] = 'Deneme Raporu Görüntülemeye Geri Dön';
$string['backtoviewreport'] = 'Ana Raporlara Geri Dön';
$string['bestscore'] = 'En İyi Skor';
$string['bestscorestderror'] = 'Standart Hata';
$string['browsersecurity'] = 'Tarayıcı Güvenliği';
$string['browsersecurity_help'] = '"Bazı JavaScript güvenlikli tam ekran açılır penceresi" seçilirse, sınav yalnızca öğrencinin JavaScript etkin bir web tarayıcısı varsa başlar, kısa sınav diğer tüm pencereleri kapsayan ve hiçbir navigasyonu olmayan bir tam ekran açılır penceresinde görünür kontroller ve öğrencilerin kopyala ve yapıştır gibi olanaklardan mümkün olduğunca kaçınmaları';
$string['calcerrorwithinlimits'] = '{$a-> calerror} adlı hesaplanan standart hata, {$a-> definitionerror} etkinliği tarafından belirtilen sınırlar dahilinde';
$string['closeattempt'] = 'Denemeyi Kapat';
$string['completeattempterror'] = 'Deneme kaydını tamamlamaya çalışırken hata oluştu';
$string['confirmcloseattempt'] = 'Bu {$a-> name} girişimini kapatmak ve sonlandırmak istediğinizden emin misiniz?';
$string['confirmcloseattemptscore'] = '{$ a->num_questions} soruya cevap verildi ve şu ana kadar puan {$ a->measure} {$ a-> standarderror}.';
$string['confirmcloseattemptstats'] = 'Bu girişim {$a-> başladı} tarihinde başlatıldı ve son olarak {$a-> değiştirildi} tarihinde güncellendi.';
$string['confirmdeleteattempt'] = '{$ a->timecompleted} adresinde gönderilen {$a-> name} denemenin silinmesinin onaylanması';
$string['deleteattemp'] = 'Deneme sınavını sil';
$string['discrimination_display_name'] = 'Ayıt etme';
$string['downloadcsv'] = 'CSV\'yi indirin';
$string['enterrequiredpassword'] = 'Gerekli şifreyi girin';
$string['errorattemptstate'] = 'Deneme durumunu belirlerken bir hata oluştu';
$string['errorclosingattempt'] = 'Deneme kaydı bulunamadı';
$string['errorclosingattempt_alreadycomplete'] = 'Bu deneme zaten tamamlandı, manuel olarak kapatılamaz.';
$string['errordeletingattempt'] = 'Deneme kaydı bulunamadı';
$string['errorfetchingquest'] = '{$a-> level}. seviye için sorular getirilemiyor';
$string['errorlastattpquest'] = 'Son denenen soru için yanıt değeri kontrol edilirken hata oluştu';
$string['errornumattpzero'] = 'Denenen soru sayısıyla ilgili hata sıfıra eşit, ancak kullanıcı önceki soruya bir cevap gönderdi';
$string['errorsumrightwrong'] = 'Doğru ve yanlış cevapların toplamı, denenen toplam soru sayısına eşit değil';
$string['formelementdecimal'] = 'Ondalık bir sayı girin. Ondalık noktasının sağında maksimum 10 basamak uzunluğunda ve maksimum 5 basamak';
$string['formelementempty'] = '1 ile 999 arasında pozitif bir sayı girin';
$string['formelementnegative'] = '1 ile 999 arasında pozitif bir sayı girin';
$string['formelementnumeric'] = '1 ile 999 arasında bir sayısal değer girin';
$string['formlowlevelgreaterthan'] = 'En düşük seviye en yüksek seviyeden az olmalıdır';
$string['formminquestgreaterthan'] = 'Minimum soru sayısı maksimum soru sayısından az olmalıdır';
$string['formquestionpool'] = 'En az bir soru kategorisi seçin';
$string['formstartleveloutofbounds'] = 'Başlangıç seviyesi, en düşük ve en yüksek seviye arasındaki bir sayı olmalıdır';
$string['formstderror'] = '50\'den küçük ve 0\'a eşit veya 0\'dan büyük bir yüzde girilmelidir';
$string['functiondisabledbysecuremode'] = 'Bu işlev şu anda devre dışı';
$string['gradehighest'] = 'En Yüksek Puan';
$string['grademethod'] = 'Puanlama Yöntemi';
$string['grademethod_help'] = 'Birden fazla denemeye izin verildiğinde, son sınav notunu hesaplamak için aşağıdaki yöntemler kullanılabilir:

* Tüm denemelerin en yüksek derecesi
* İlk deneme (diğer tüm girişimler yok sayılır)
* Son deneme (diğer tüm girişimler yok sayılır)';
$string['graphlegend_error'] = 'Standart hata';
$string['graphlegend_target'] = 'Hedef Seviye';
$string['highestlevel'] = 'En Yüksek Zorluk Seviyesi';
$string['highestlevel_help'] = 'Değerlendirmenin soruları seçebileceği en yüksek veya en zor düzey. Bir deneme sınavı sırasında etkinlik bu zorluk seviyesinin ötesine geçmeyecek';
$string['highlevelusers'] = 'Soru seviyesinin üstündeki kullanıcılar';
$string['id'] = 'Kimlik';
$string['indvuserreport'] = '{$a} için bireysel kullanıcı girişimi raporu';
$string['leveloutofbounds'] = 'Deneme için istenen {$a->level} seviye sınırı dışında';
$string['lowestlevel'] = 'En düşük zorluk seviyesi';
$string['lowestlevel_help'] = 'Değerlendirmenin soruları seçebileceği en düşük veya en az zor düzey. Bir girişim sırasında etkinlik bu zorluk seviyesinin ötesine geçmeyecek';
$string['lowlevelusers'] = 'Soru seviyesinin altındaki kullanıcılar';
$string['maximumquestions'] = 'Maksimum soru sayısı';
$string['maximumquestions_help'] = 'Öğrencinin denemedeki maksimum soru sayısı';
$string['maxquestattempted'] = 'Denemedeki maksimum soru sayısı';
$string['midlevelusers'] = 'Soru düzeyine yakın kullanıcılar';
$string['minimumquestions'] = 'Minimum soru sayısı';
$string['minimumquestions_help'] = 'Öğrencinin denemesi gereken minimum soru sayısı';
$string['missingtagprefix'] = 'Eksik etiket öneki';
$string['modulename'] = 'Deneme Sınavı';
$string['modulename_help'] = 'Deneme sınavı aktivitesi bir öğretmenin katılımcıların yeteneklerini etkili bir şekilde ölçen sınavlar oluşturmasını sağlar. Uyarlamalı sınavlar, soru bankasından seçilen ve zorluk dereceleriyle etiketlenmiş sorulardan oluşur. Sorular, mevcut sınava giren kişinin tahmini yetenek düzeyine uyacak şekilde seçilir. Sınava giren kişi bir soruda başarılı olursa, daha zorlayıcı bir soru daha sonra sunulur. Sınava giren kişi bir soruyu yanlış yanıtlarsa, daha sonra daha az zorlayıcı bir soru sunulur. Bu teknik, sınava giren kişinin etkili yetenek düzeyine yaklaşan bir dizi soruya dönüşecektir. Sınav, sınava giren kişinin yeteneği gereken doğruluğa göre belirlendiğinde durur.

Bu aktivite, tek boyutlu bir ölçekte bir yetenek ölçüsü belirlemeye en uygun olanıdır. Ölçek çok geniş olsa da, soruların hepsi aynı ölçekte bir yetenek veya yetenek ölçüsü sağlamalıdır. Örneğin bir yerleştirme testinde, acemilerin doğru cevaplayabileceği ölçekte düşük sorular uzmanlar tarafından da cevaplanırken, ölçekte daha yüksek sorular sadece uzmanlar veya şanslı bir tahmin tarafından cevaplanmalıdır. Farklı yeteneklere sahip olanlar arasında ayrım yapmayan sorular testi etkisiz hale getirecek ve sonuçsuz kalmaktadır.

Deneme sınavında kullanılan sorular

 * otomatik olarak doğru / yanlış olarak puanlanacaktır
 * \'adpq_\' kullanarak zorluklarla etiketlenir ve ardından sınav aralığı içindeki pozitif bir tamsayı gelir

Deneme sınavı şu şekilde yapılandırılabilir:

 * ölçülecek soru zorlukları / kullanıcı yetenekleri aralığını tanımlamak. 1-10, 1-16 ve 1-100 geçerli aralıklara örnektir.
 * sınav durdurulmadan önce gereken hassasiyeti tanımlayın. Genellikle yetenek ölçüsünde% 5\'lik bir hata uygun bir durdurma kuralıdır
 * en az sayıda sorunun cevaplanmasını gerektirir
 * cevaplanabilecek maksimum sayıda soru gerektirir

Bu açıklama ve bu aktivitedeki test süreci, John Michael\'ın <a href="http://www.rasch.org/memo69.pdf"> Bilgisayara Uyarlanabilir Test: Zamanı Gelen Bir Metodolojiye </a> dayanmaktadır. Linacre, Ph.D. MESA Psikometrik Laboratuvarı - Chicago Üniversitesi. MESA Memorandum No.69.';
$string['modulenameplural'] = 'Deneme Sınavı';
$string['na'] = 'tanımsız';
$string['name'] = 'Ad';
$string['noattemptrecords'] = 'Bu öğrenci için giriş kaydı yok';
$string['noattemptsallowed'] = 'Bu etkinlikte başka girişe izin verilmiyor';
$string['nonewmodules'] = 'Deneme sınavı örneği bulunamadı';
$string['nopermission'] = 'Bu kaynağı görüntüleme izniniz yoktur.';
$string['notinprogress'] = 'Bu girişim devam etmiyor.';
$string['notyourattempt'] = 'Bu, faaliyetteki girişiminiz değil';
$string['numofattemptshdr'] = 'Giriş miktarı';
$string['numright'] = 'Doğru sayısı';
$string['numwrong'] = 'Yanlış sayısı';
$string['percent_correct_display_name'] = 'Doğru %';
$string['pluginadministration'] = 'Deneme Sınavı';
$string['pluginname'] = 'Deneme Sınavı';
$string['question_report'] = 'Soru analizi';
$string['questionanalysisbtn'] = 'Soru Analizi';
$string['questionnumber'] = 'Soru #';
$string['questionpool'] = 'Soru havuzu';
$string['questionpool_help'] = 'Bir deneme sırasında etkinliğin soruları çekeceği soru kategorisini / kategorilerini seçin.';
$string['questions_report'] = 'Soru Raporu';
$string['questionsattempted'] = 'Denenen soruların toplamı';
$string['recentactquestionsattempted'] = 'Denenen sorular: {$a}';
$string['recentattemptstate'] = 'Deneme durumu:';
$string['recentcomplete'] = 'Tamamlandı';
$string['recentinprogress'] = 'Devam etmekte';
$string['requirepassword'] = 'Gerekli şifre';
$string['requirepassword_help'] = 'Öğrenciler denemelerine başlamadan önce bir şifre girmelidirler';
$string['requirepasswordmessage'] = 'Bu deneme sınavı için sınav şifresini bilmeniz gerekir';
$string['result'] = 'Sonuç';
$string['score'] = 'Puan';
