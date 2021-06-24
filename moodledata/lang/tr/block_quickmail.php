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
 * Strings for component 'block_quickmail', language 'tr', version '3.10'.
 *
 * @package     block_quickmail
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Eylemler';
$string['add_all'] = 'Hepsini Ekle';
$string['add_button'] = 'Ekle';
$string['addionalemail'] = 'Harici e-posta adreslerine izin ver';
$string['addionalemail_desc'] = 'Bu seçenek etkinleştirilirse, QuickMail e-postaları harici e-posta formu içine girilen kullanıcı adreslerine de gönderilir.';
$string['additional_emails'] = 'Ek e-postalar';
$string['additional_emails_help'] = 'İletinin gönderilmesini istediğiniz diğer e-posta adresleri, virgül veya noktalı virgülle ayrılmış bir liste halinde. Örnek:

email1@example.com, email2@example.com';
$string['all_sections'] = 'Tüm Gruplar';
$string['allowstudents'] = 'Öğrencilerin Quickmail\'i kullanmasına izin ver';
$string['allowstudentsdesc'] = 'Öğrencilerin Quickmail\'i kullanmasına izin verin. "Asla" seçeneğini belirlerseniz, blok öğrencilerin ders düzeyinde erişmelerine izin verecek şekilde yapılandırılamaz.';
$string['allusers'] = 'Tüm Kullanıcılar';
$string['alternate'] = 'Alternatif e-postalar';
$string['alternate_body'] = '<p>
{$a->fullname} , {$a->course} için alternatif bir gönderme adresi olarak {$a->address} ekledi.
</p>

<p>
Bu e-postanın amacı, bu adresin bulunduğunu ve bu adresin sahibinin Moodle\'da uygun izinlere sahip olduğunu doğrulamaktı.
</p>

<p>
Doğrulama işlemini tamamlamak istiyorsanız, lütfen tarayıcınızı aşağıdaki url’ye yönlendirerek devam edin: {$a->url}.
</p>

<p>
Bu e-postanın açıklaması size bir şey ifade etmiyorsa, yanlışlıkla almış olabilirsiniz. Bu mesajı silmeniz yeterli.
</p>

Teşekkür ederim.';
$string['alternate_from'] = 'Moodle: Quickmail';
$string['alternate_new'] = 'Alternatif Adres Ekleyin';
$string['alternate_subject'] = 'Alternatif e-posta adresi doğrulama';
$string['approved'] = 'Onaylı';
$string['are_you_sure'] = '{$a->title} silmek istediğinize emin misiniz? Bu işlem geri alınamaz.';
$string['attachment'] = 'Ek (ler)';
$string['back_to_previous'] = 'Önceki sayfaya dön';
$string['backup_block_configuration'] = 'Quickmail Blok Seviyesi Yapılandırma Ayarlarını Yedekleme ([Öğrencilerin Quickmail\'i kullanmasına izin ver] gibi)';
$string['backup_history'] = 'Quickmail Geçmişini Dahil Et';
$string['body'] = 'Gövde';
$string['composenew'] = 'Yeni E-posta Oluştur';
$string['config'] = 'Yapılandırma';
$string['courselayout'] = '';
$string['courselayout_desc'] = '';
$string['default_flag'] = 'Varsayılan';
$string['delete_confirm'] = 'İletiyi aşağıdaki ayrıntılarla silmek istediğinize emin misiniz: {$a}';
$string['delete_failed'] = 'E-posta silinemedi';
$string['download_all'] = 'Hepsini İndir';
$string['download_auth_only'] = 'Sadece Yetkili Kullanıcılar';
$string['download_open'] = 'İndirmeleri Aç';
$string['downloads'] = 'Ekler için giriş yapmayı iste';
$string['downloads_desc'] = 'Bu ayar eklerin yalnızca oturum açmış Moodle kullanıcıları için uygun olup olmadığını belirler.';
$string['drafts'] = 'Taslakları Görüntüle';
$string['draftssuccess'] = 'Taslak';
$string['email'] = 'E-posta';
$string['email_error'] = 'E-posta gönderilemedi: {$a->firstname} {$a->lastname} ({$a->email})';
$string['email_error_field'] = 'Boş bırakılamaz: {$a}';
$string['entry_activated'] = '{$a->address} alternatif e-postası şimdi {$a->course} içinde kullanılabilir.';
$string['entry_failure'] = '{$a->address} adresine e-posta gönderilemedi. Lütfen {$a->address} adresinin bulunduğunu doğrulayın ve tekrar deneyin.';
$string['entry_key_not_valid'] = 'Etkinleştirme bağlantısı artık {$a->address} için geçerli değil. Aktivasyon bağlantısını tekrar göndermeye devam edin.';
$string['entry_saved'] = 'Alternatif adres {$a->address} kaydedildi.';
$string['entry_success'] = 'Adresin geçerli olduğunu doğrulayan bir e-posta {$a->address} adresine gönderildi. Adresin nasıl etkinleştirileceğiyle ilgili talimatlar içeriğinde bulunur.';
$string['eventalternateemailadded'] = 'Alternatif e-posta eklendi';
$string['failed_to_send_to'] = 'gönderilemedi';
$string['ferpa_desc'] = 'Sistemin, ders grubu modu ayarına göre davranmasına, grup modu ayarını görmezden gelmesine ancak grupları ayırmasına veya grupları tamamen görmemesine izin verir.';
$string['from'] = 'Kimden';
$string['history'] = 'Geçmişi Görüntüle';
$string['log'] = 'Geçmişi Görüntüle';
$string['logsuccess'] = 'tüm mesajlar başarıyla gönderildi';
$string['message'] = 'Mesaj';
$string['message_body_as_follows'] = 'mesaj gövdesi aşağıdaki gibidir';
$string['message_failure'] = 'bazı kullanıcılar mesaj alamadı';
$string['message_sent_to'] = 'Mesaj gönderildi';
$string['messageprovider:broadcast'] = 'Yönetici e-postasını kullanarak yayın mesajları gönderin.';
$string['moodle_attachments'] = 'Moodle Ekleri ({$a})';
$string['new'] = 'Yeni';
$string['no'] = 'Hayır';
$string['no_alternates'] = '{$a->fullname} için alternatif e-posta bulunamadı. Bir tane oluşturmak için devam et.';
$string['no_course'] = '{$a} kimliğine sahip geçersiz Ders';
$string['no_drafts'] = 'E-posta taslağınız yok.';
$string['no_email'] = '{$a->firstname} {$a->lastname} e-posta gönderilemedi.';
$string['no_email_address'] = '{$a} adresine e-posta gönderilemedi';
$string['no_filter'] = 'Filtre yok';
$string['no_log'] = 'Henüz bir e-posta geçmişiniz yok.';
$string['no_permission'] = 'Quickmail ile e-posta gönderme izniniz yok.';
$string['no_section'] = 'Grupta değil';
$string['no_selected'] = 'E-posta için bazı kullanıcıları seçmelisiniz.';
$string['no_subject'] = 'Bir konunuz olmalı';
$string['no_type'] = '{$a}, kabul edilebilir bir tür görüntüleyici değil. Lütfen uygulamayı doğru kullanın.';
$string['no_usergroups'] = 'Grubunuzda e-posta gönderilebilecek kullanıcı yok.';
$string['no_users'] = 'E-posta gönderebilecek hiçbir kullanıcı yok.';
$string['noreply'] = 'Cevap yok';
$string['not_valid'] = 'Bu, geçerli bir e-posta günlüğü görüntüleyici türü değil: {$a}';
$string['not_valid_action'] = 'Geçerli bir işlem yapmalısınız: {$a}';
$string['not_valid_typeid'] = '{$a} için geçerli bir e-posta sağlamalısınız';
$string['not_valid_user'] = 'Diğer e-posta geçmişini göremezsiniz.';
$string['overwrite_history'] = 'Quickmail Geçmişinin Üzerine Yaz';
$string['pluginname'] = 'Quickmail';
$string['potential_sections'] = 'Potansiyel Gruplar';
$string['potential_users'] = 'Potansiyel Alıcılar';
$string['prepend_class'] = 'Ders ismini başa ekle';
$string['prepend_class_desc'] = 'Kursun kısa ismini e-postanın konusunun başına ekleyin.';
$string['qm_contents'] = 'Dosya İçeriğini İndir';
$string['quickmail:addinstance'] = 'Ders sayfasına yeni bir Quickmail bloğu ekleyin';
$string['quickmail:allowalternate'] = 'Kullanıcıların dersler için alternatif bir e-posta eklemelerine izin verir.';
$string['quickmail:canconfig'] = 'Kullanıcıların Quickmail örneğini yapılandırmalarına izin verir.';
$string['quickmail:candelete'] = 'Kullanıcıların epostaları geçmişten silmelerine izin verir.';
$string['quickmail:canimpersonate'] = 'Kullanıcıların diğer kullanıcılar olarak oturum açmasına ve geçmişi görüntülemesine izin verir.';
$string['quickmail:cansend'] = 'Kullanıcıların Quickmail üzerinden e-posta göndermesine izin verir';
$string['quickmail:myaddinstance'] = 'Kontrol paneli sayfama yeni bir Quickmail bloğu ekle';
$string['receipt'] = 'Bir kopya al';
$string['receipt_help'] = 'Gönderilen e-postanın bir kopyasını alın';
$string['remove_all'] = 'Hepsini kaldır';
$string['remove_button'] = 'Kaldır';
$string['required'] = 'Lütfen zorunlu alanları doldurunuz.';
$string['reset'] = 'Sistem Varsayılanlarını Geri Yükle';
$string['restore_history'] = 'Quickmail Geçmişini Geri Yükle';
$string['role_filter'] = 'Rol Filtresi';
$string['save_draft'] = 'Taslağı Kaydet';
$string['seconds'] = 'saniye';
$string['select_groups'] = 'Bölümleri Seç ...';
$string['select_roles'] = 'Filtrelemek için roller';
$string['select_users'] = 'Kullanıcılar seç ...';
$string['selected'] = 'Seçilmiş Alıcılar';
$string['send_again'] = 'Tekrar gönderin';
$string['send_email'] = 'E-posta gönder';
$string['sendadmin'] = 'Yönetici E-postası Gönder';
$string['sent_success'] = 'tüm mesajlar başarıyla gönderildi';
$string['sent_successfully_to_the_following_users'] = 'aşağıdaki kullanıcılara başarıyla gönderildi:';
$string['sig'] = 'İmza';
$string['signature'] = 'İmzalar';
$string['something_broke'] = 'E-posta göndermeyi devre dışı bırakmışsınız veya işler çok bozuk.';
$string['status'] = 'durum';
$string['strictferpa'] = 'Her Zaman Ayrı Gruplar';
$string['subject'] = 'Konu';
$string['sure'] = '{$a->address} silmek istediğinize emin misiniz? Bu işlem geri alınamaz.';
$string['time_elapsed'] = 'Geçen süre:';
$string['title'] = 'Başlık';
$string['user'] = 'kullanıcı';
$string['users'] = 'kullanıcılar';
$string['valid'] = 'Aktivasyon durumu';
$string['waiting'] = 'Bekliyor';
$string['warnings'] = 'Uyarılar';
