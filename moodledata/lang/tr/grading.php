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
 * Strings for component 'grading', language 'tr', version '3.10'.
 *
 * @package     grading
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activemethodinfo'] = '\'{$a->area}\' alanı için aktif notlandırma yöntemi olarak \'{$ a-> method}\' seçildi';
$string['activemethodinfonone'] = '\'{$a->area}\' alanı için gelişmiş derecelendirme yöntemi seçilmedi. Basit doğrudan puanlama kullanılacaktır.';
$string['changeactivemethod'] = 'Aktif notlandırma yöntemini şuna değiştir';
$string['clicktoclose'] = 'kapatmak için tıklayın';
$string['exc_gradingformelement'] = 'Notlandırma öğesini bir örneği oluşturulamadı';
$string['formnotavailable'] = 'Gelişmiş notlandırma yöntemi kullanıldı ancak notlandırma formu henüz mevcut değil. Önce Yönetim bloğundaki bir bağlantı aracılığıyla tanımlamanız gerekebilir.';
$string['gradingformunavailable'] = 'Lütfen dikkat: gelişmiş notlandırma formu şu anda hazır değildir. Formun geçerli bir statüye gelene kadar basit notlandırma yöntemi kullanılacaktır.';
$string['gradingmanagement'] = 'Gelişmiş notlandırma';
$string['gradingmanagementtitle'] = 'Gelişmiş notlandırma: {$a->component} ({$a->area})';
$string['gradingmethod'] = 'Notlandırma metodu';
$string['gradingmethod_help'] = 'Verilen bağlamda notların hesaplanmasında kullanılması gereken gelişmiş notlandırma yöntemini seçin.

Gelişmiş notlandırmayı devre dışı bırakmak ve varsayılan notlandırma mekanizmasına geri dönmek için \'Basit doğrudan derecelendirmeyi\' seçin.';
$string['gradingmethodnone'] = 'Basit doğrudan notlandırma';
$string['gradingmethods'] = 'Notlandırma metodları';
$string['manageactionclone'] = 'Şablondan yeni notlandırma formu oluşturma';
$string['manageactiondelete'] = 'Şu anda tanımlanmış formu sil';
$string['manageactiondeleteconfirm'] = '\'{$a->formname}\' notlandırma formunu ve \'{$a->component}\' den ({$a->area}) tüm ilişkili bilgileri sileceksiniz. Lütfen aşağıdaki sonuçların anlaşıldığından emin olun:
* Bu işlemi geri almanın bir yolu yoktur.
* Bu formu silmeden \'Basit doğrudan notlandırmaya dahil olmak üzere başka bir notlandırma yöntemine geçebilirsiniz.
* Puanlama formlarının doldurulmasıyla ilgili tüm bilgiler kaybolacaktır.
* Not defterinde saklanan hesaplanan sonuç notları etkilenmeyecektir. Bununla birlikte, nasıl hesaplandıklarının açıklaması kullanılamayacak.
* Bu işlem, bu formun diğer etkinliklerde sonuçlandırılmış kopyalarını etkilemez.';
$string['manageactiondeletedone'] = 'Form başarıyla silindi';
$string['manageactionedit'] = 'Geçerli form tanımını düzenleme';
$string['manageactionnew'] = 'Yeni notlandırma formunu sıfırdan tanımlayın';
$string['manageactionshare'] = 'Formu yeni bir şablon olarak yayınla';
$string['manageactionshareconfirm'] = '\'{$a}\' notlandırma formunun bir kopyasını yeni bir genel şablon olarak kaydedersiniz. Sitenizdeki diğer kullanıcılar etkinliklerinde bu şablondan yeni notlandırma formları oluşturabilirler.';
$string['manageactionsharedone'] = 'Form şablon olarak başarıyla kaydedildi';
$string['noitemid'] = 'Not verme mümkün değildir. kademeli öğe yok.';
$string['nosharedformfound'] = 'Şablon bulunamadı';
$string['searchownforms'] = 'Kendi formlarımı ekle';
$string['searchtemplate'] = 'Not verme formlarını arama';
$string['searchtemplate_help'] = 'Bir notlandırma formunu arayabilir ve buradaki yeni nota formu için bir şablon olarak kullanabilirsiniz. Sadece form adında, açıklamasında veya formun kendisinde görünmesi gereken sözcükleri yazın. Bir cümle aramak için, sorguyu çift tırnak işareti içine alın.

Varsayılan olarak, yalnızca paylaşılan şablonlar olarak kaydedilen notlandırma formları arama sonuçlarına dahil edilir. Ayrıca, kendi notlandırma formlarınızın tümünü arama sonuçlarına ekleyebilirsiniz. Böylelikle, not verme formlarınızı paylaşmadan bunları yeniden kullanabilirsiniz. Yalnızca \'Kullanıma hazır\' olarak işaretlenmiş formlar bu şekilde yeniden kullanılabilir.';
$string['statusdraft'] = 'Taslak';
$string['statusready'] = 'Kullanıma hazır';
$string['templatedelete'] = 'Sil';
$string['templatedeleteconfirm'] = '\'{$a}\' paylaşılan şablonunu sileceksiniz. Şablonu silmek, oluşturulan mevcut formları etkilemez.';
$string['templateedit'] = 'Düzenle';
$string['templatepick'] = 'Bu şablonu kullan';
$string['templatepickconfirm'] = '\'{$a->component}\' de ({$a->area}) yeni notlandırma formu için \'{$a->formname}\' notlandırma formunu bir şablon olarak kullanmak istiyor musunuz?';
$string['templatepickownform'] = 'Bu formu şablon olarak kullan';
$string['templatesource'] = 'Bölge: {$a->component} ({$a->area})';
$string['templatetypeown'] = 'Kendi formunuz';
$string['templatetypeshared'] = 'Paylaşılan şablon';
