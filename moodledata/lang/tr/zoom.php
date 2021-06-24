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
 * Strings for component 'zoom', language 'tr', version '3.10'.
 *
 * @package     zoom
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Eylemler';
$string['addtocalendar'] = 'Takvime ekle';
$string['allmeetings'] = 'Tüm görüşmeler';
$string['alternative_hosts'] = 'Alternatif Barındırıcılar';
$string['alternative_hosts_help'] = 'Alternatif toplantı sahibi seçeneği, toplantıları planlamanıza ve yapamıyorsanız, toplantıyı veya web seminerini başlatmak için aynı hesapta başka bir Pro kullanıcı atamanıza olanak tanır. Bu kullanıcı, toplantıyı başlatmak için bir bağlantıyla birlikte alternatif bir toplantı sahibi olarak eklendiklerini bildiren bir e-posta alacak. Birden çok e-postayı virgülle ayırın (boşluksuz).';
$string['apikey'] = 'Zoom API anahtarı';
$string['apisecret'] = 'Gizli Zoom API';
$string['apiurl'] = 'Zoom API bağlantısı';
$string['audio_both'] = 'VoIP ve Telefon';
$string['audio_telephony'] = 'Yalnızca telefon';
$string['audio_voip'] = 'Yalnızca VoIP';
$string['cachedef_sessions'] = 'Zoom\'dan gelen bilgi, kullanıcı rapor isteğinde bulunsun';
$string['cachedef_zoomid'] = 'Kullanıcının zoom kullanıcı kimliği';
$string['calendardescriptionURL'] = 'Toplantıya katılma bağlantısı: {$a}.';
$string['calendardescriptionintro'] = '\\nAçıklama:\\n{\\$a}';
$string['calendariconalt'] = 'Takvim simgesi';
$string['changehost'] = 'Barındırıcıyı değiştir';
$string['clickjoin'] = 'Toplantıya katılma butonuna tıklandı';
$string['connectionfailed'] = 'Bağlantı başarısız oldu:';
$string['connectionok'] = 'Bağlantı çalışıyor.';
$string['connectionstatus'] = 'Bağlantı durumu';
$string['defaultsettings'] = 'Varsayılan Zoom ayarları';
$string['defaultsettings_help'] = 'Bu ayarlar, tüm yeni Zoom toplantıları ve web seminerleri için varsayılanları tanımlar.';
$string['downloadical'] = 'iCal indir';
$string['duration'] = 'Süre (dakika)';
$string['endtime'] = 'Bitiş zamanı';
$string['err_duration_nonpositive'] = 'Süre olumlu olmalı.';
$string['err_duration_too_long'] = 'Süre 150 saati aşamaz.';
$string['err_invalid_password'] = 'Parola geçersiz karakterler içeriyor.';
$string['err_long_timeframe'] = 'İstenen zaman aralığı çok uzun, son ayın sonuçlarını gösteriyor.';
$string['err_password'] = 'Parola yalnızca aşağıdaki karakterleri içerebilir: [a-z A-Z 0-9 @ - _ *]. Maksimum 10 karakter.';
$string['err_password_required'] = 'Parola gerekli.';
$string['err_start_time_past'] = 'Başlangıç tarihi geçmiş bir tarih olamaz.';
$string['errorwebservice'] = 'Zoom web servisi hatası: {$a}.';
$string['errorwebservice_badrequest'] = 'Zoom hatalı bir istek aldı: {$a}';
$string['errorwebservice_notfound'] = 'Kaynak mevcut değil: {$a}';
$string['export'] = 'Dışa aktar';
$string['firstjoin'] = 'İlk katılabilir';
$string['firstjoin_desc'] = 'Bir kullanıcı planlanmış bir toplantıya erkenden katılabilir (başlamadan dakikalar önce).';
$string['getmeetingreports'] = 'Zoom\'dan toplantı raporu alın';
$string['host'] = 'Barındırıcı';
$string['invalid_status'] = 'Durum geçersiz, veritabanını kontrol edin.';
$string['invalidscheduleuser'] = 'Belirtilen kullanıcı için program yapamazsınız.';
$string['join'] = 'Katıl';
$string['join_meeting'] = 'Toplantıya Katıl';
$string['joinbeforehost'] = 'Barındırıcıdan önce toplantıya katıl';
$string['jointime'] = 'Katılma zamanı';
$string['leavetime'] = 'Ayrılma zamanı';
$string['licenseonjoin'] = 'Toplantı sahibinin toplantıyı başlatırken ve oluştururken bir lisans almasını istiyorsanız bu seçeneği seçin.';
$string['licensesnumber'] = 'Lisans numarası';
$string['lowlicenses'] = 'Lisanslarınızın sayısı sınırı aşarsa, kullanıcı tarafından her yeni etkinlik oluşturduğunuzda, başka bir kullanıcının durumunu düşürerek ona bir PRO lisansı atanacaktır. Seçenek, aktif PRO lisanslarının sayısı 5\'ten fazla olduğunda etkilidir.';
$string['maskparticipantdata'] = 'Katılımcı verilerini maskeleyin';
$string['maskparticipantdata_help'] = 'Katılımcı verilerinin raporlarda görünmesini engeller (katılımcı verilerini maskeleyen siteler için kullanışlıdır, örneğin HIPAA için).';
$string['meeting_finished'] = 'Bitti';
$string['meeting_nonexistent_on_zoom'] = 'Zoom\'da yok';
$string['meeting_not_started'] = 'Başlamadı';
$string['meeting_started'] = 'Devam etmekte';
$string['meeting_time'] = 'Başlama zamanı';
$string['meetingoptions'] = 'Toplantı seçenekleri';
$string['meetingoptions_help'] = '*Toplantı sahibinden önce katıl*, katılımcıların toplantı sahibi katılmadan önce veya toplantı sahibi katılamadığında toplantıya katılmasına olanak tanır.\\n\\n *Bekleme odası*, toplantı sahibinin bir katılımcının ne zaman katılacağını kontrol etmesine olanak tanır.\\n\\nBu iki seçenek birbirini dışlar, bu nedenle birini seçmek diğerinin seçimini kaldırır. İkisinin de seçimini kaldırmak da mümkündür.\\n\\n*Kimliği doğrulanmış kullanıcılar*, tüm katılımcıların katılabilmek için yetkili zoom hesaplarıyla oturum açmasını gerektirir.';
$string['modulename'] = 'Zoom toplantısı';
$string['modulename_help'] = 'Zoom, yetkili kullanıcılara çevrimiçi toplantılar yapma olanağı veren bir video ve web konferans platformudur.';
$string['modulenameplural'] = 'Zoom Toplantıları';
$string['newmeetings'] = 'Yeni Toplantılar';
$string['nomeetinginstances'] = 'Bu toplantı için hiçbir oturum bulunamadı.';
$string['noparticipants'] = 'Şu anda bu oturum için hiçbir katılımcı bulunamadı.';
$string['nosessions'] = 'Belirtilen aralık için oturum bulunamadı.';
$string['nozooms'] = 'Toplantı yok';
$string['off'] = 'Kapalı';
$string['oldmeetings'] = 'Sonuçlanan Toplantılar';
$string['on'] = 'Açık';
$string['option_audio'] = 'Ses seçenekleri';
$string['option_authenticated_users'] = 'Yalnızca kimliği doğrulanmış kullanıcılar';
$string['option_host_video'] = 'Barındırıcı videosu';
$string['option_jbh'] = 'Toplantı sahibinden önce katılmayı etkinleştir';
$string['option_mute_upon_entry'] = 'Girişi sessiz al';
$string['option_mute_upon_entry_help'] = 'Toplantıya katıldıklarında tüm katılımcıları otomatik olarak sessize alın. Toplantı sahibi, katılımcıların kendi seslerini açıp açamayacağını kontrol eder.';
$string['option_participants_video'] = 'Katılımcılar videosu';
$string['option_proxyhost_desc'] = 'Burada ayarlanan proxy, \'<code>&lt;hostname&gt;:&lt;port&gt;</code>\'  yalnızca Zoom ile iletişim kurmak için kullanılır. Moodle varsayılan proxy ayarlarını kullanmak için boş bırakın. Bunu yalnızca Moodle\'da global bir proxy ayarlamak istemiyorsanız ayarlamanız gerekir.';
$string['option_waiting_room'] = 'Bekleme odasını etkinleştir';
$string['participantdatanotavailable'] = 'Ayrıntılar mevcut değil';
$string['participantdatanotavailable_help'] = 'Katılımcı verileri bu Zoom oturumu için mevcut değil (örn. HIPAA uyumluluğu nedeniyle).';
$string['participants'] = 'Katılımcılar';
$string['password'] = 'Parola';
$string['passwordprotected'] = 'Parola Korumalı';
$string['pluginadministration'] = 'Zoom toplantısını yönet';
$string['pluginname'] = 'Zoom toplantısı';
$string['privacy:metadata:zoom_meeting_details'] = 'Her toplantı örneği hakkındaki bilgileri depolayan veritabanı tablosu.';
$string['privacy:metadata:zoom_meeting_details:topic'] = 'Kullanıcının katıldığı toplantının adı.';
$string['privacy:metadata:zoom_meeting_participants'] = 'Toplantı katılımcıları hakkındaki bilgileri depolayan veritabanı tablosu.';
$string['privacy:metadata:zoom_meeting_participants:duration'] = 'Katılımcının toplantıda ne kadar kaldığı';
$string['privacy:metadata:zoom_meeting_participants:join_time'] = 'Katılımcının toplantıya katılma zamanı';
$string['privacy:metadata:zoom_meeting_participants:leave_time'] = 'Katılımcının toplantıdan ayrıldığı saat';
$string['privacy:metadata:zoom_meeting_participants:name'] = 'Katılımcının adı';
$string['privacy:metadata:zoom_meeting_participants:user_email'] = 'Katılımcının e-postası';
$string['recurringmeeting'] = 'Tekrarlayan';
$string['recurringmeeting_help'] = 'Bitiş tarihi yok';
$string['recurringmeetinglong'] = 'Devam eden toplantı (bitiş tarihi veya saati olmayan toplantı)';
$string['recycleonjoin'] = 'Katıldıktan sonra lisansı geri dönüştürün';
$string['redefinelicenses'] = 'Lisansları yeniden tanımlayın';
$string['report'] = 'Raporlar';
$string['reportapicalls'] = 'Bitmiş API aramaları raporu';
$string['resetapicalls'] = 'Mevcut API çağrılarının sayısını sıfırlayın';
$string['schedulefor'] = 'Toplantı planla';
$string['scheduleforself'] = 'Kendiniz için program yapın';
$string['search:activity'] = 'Zoom - aktivite bilgileri';
$string['sessions'] = 'Oturum';
$string['start'] = 'Başlat';
$string['start_meeting'] = 'Toplantıyı Başlat';
$string['start_time'] = 'Ne zaman';
$string['starthostjoins'] = 'Barındırıcı katıldığında videoyu başlat';
$string['startpartjoins'] = 'Katılımcı katıldığında video başlat';
$string['starttime'] = 'Başlama zamanı';
$string['status'] = 'Durum';
$string['title'] = 'Başlık';
$string['topic'] = 'Konu';
$string['unavailable'] = 'Şu anda katılamıyor';
$string['updatemeetings'] = 'Zoom\'dan toplantı ayarlarını güncelleyin';
$string['usepersonalmeeting'] = 'Kişisel toplantı kimliğini kullanın {$a}';
$string['waitingroom'] = 'Bekleme odası etkinleştirildi';
$string['webinar'] = 'Webinar';
$string['webinar_already_false'] = '<p><b>Bu modül, web semineri değil, zaten bir toplantı olarak ayarlandı. Toplantıyı oluşturduktan sonra bu ayarı değiştiremezsiniz.</b></p>';
$string['webinar_already_true'] = '<p><b>Bu modül zaten bir web semineri olarak ayarlanmıştı, toplantı değil. Web seminerini oluşturduktan sonra bu ayarı değiştiremezsiniz.</b></p>';
$string['webinar_help'] = 'Bu seçenek yalnızca önceden yetkilendirilmiş Zoom hesapları için kullanılabilir.';
$string['zoom:addinstance'] = 'Yeni bir Zoom toplantısı ekle';
$string['zoom:view'] = 'Zoom toplantılarını görüntüleyin';
$string['zoomerr'] = 'Zoom ile ilgili bir hata oluştu.';
$string['zoomerr_apikey_missing'] = 'Zoom API anahtarı bulunamadı';
$string['zoomerr_apisecret_missing'] = 'Gizli Zoom API\'si bulunamadı';
$string['zoomerr_id_missing'] = 'Bir course_module kimliği veya bir örnek kimliği belirtmelisiniz';
$string['zoomerr_licensesnumber_missing'] = 'Zoom ayarı bulundu, ancak lisans numarası ayarı bulunamadı';
$string['zoomerr_maxretries'] = 'Çağrıyı yapmak için {$a->maxretries} kez yeniden denedi, ancak başarısız oldu: {$a->response}';
$string['zoomerr_meetingnotfound'] = 'Bu toplantı Zoom\'da bulunamıyor. <a href="{$a->recreate}">burada yeniden oluşturabilir</a> veya <a href="{$a->delete}">tamamen silebilirsiniz</a>.';
$string['zoomerr_meetingnotfound_info'] = 'Bu toplantı Zoom\'da bulunamıyor. Sorularınız varsa lütfen toplantı sahibiyle iletişime geçin.';
$string['zoomerr_usernotfound'] = 'Zoom\'u ilk defa kullanıyorsunuz, bu nedenle, oturum açma kimlik bilgilerinizle <a href="{$a}" target="{blank"> {$a} </a> oturum açarak Zoom hesabınızı etkinleştirmeniz gerekir. Zoom hesabınızı etkinleştirdikten sonra, bu sayfayı yeniden yükleyin ve toplantı ayarlarınızı yapmaya devam edin.';
$string['zoomurl'] = 'Zoom ana sayfa bağlantısı';
