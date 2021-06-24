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
 * Strings for component 'rating', language 'tr', version '3.10'.
 *
 * @package     rating
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['aggregateavg'] = 'Puan ortalaması';
$string['aggregatecount'] = 'Puan sayısı';
$string['aggregatemax'] = 'Maksimum puan';
$string['aggregatemin'] = 'Minimum puan';
$string['aggregatenone'] = 'Puan yok';
$string['aggregatesum'] = 'Puan toplamı';
$string['aggregatetype'] = 'Toplama türü';
$string['aggregatetype_help'] = 'Toplam tür, not defterinde  son notu oluşturmak için derecelerin nasıl birleştirildiğini tanımlar.

* Derecelendirmelerin ortalaması - Tüm derecelerin ortalaması
* Derecelendirmelerin sayısı - Puanlanan öğelerin sayısı son nota dönüşür. Toplamın etkinliğin maksimum notunu aşamayacağına dikkat edin.
* Maksimum - En yüksek derece son nota dönüşür
* Minimum - En küçük puan son nota dönüşür
* Toplam - Tüm derecelendirme birlikte eklenir. Toplamın etkinliğin maksimum notunu aşamayacağına dikkat edin.

"Derecelendirme yok" seçilirse, aktivite not defterinde görünmez.';
$string['allowratings'] = 'Öğelerin derecelendirilmesine izin verilsin mi?';
$string['allratingsforitem'] = 'Yapılan tüm derecelendirmeler';
$string['capabilitychecknotavailable'] = 'Kapasite kontrolü mevcut değil önce etkinlik kaydedilmiş olmalıdır';
$string['couldnotdeleteratings'] = 'Maalesef, bunlar daha önce derecelendirildiğinden silinemiyor';
$string['norate'] = 'Öğelerin derecelendirilmesine izin verilmiyor!';
$string['noratings'] = 'Derecelendirme yapılmadı';
$string['noviewanyrate'] = 'Üretilmiş etiketler için yalnızca sonuçlara bakabilirsiniz';
$string['noviewrate'] = 'Bu öğeyi derecelendirme yetkiniz yok';
$string['rate'] = 'Derecelendir';
$string['ratepermissiondenied'] = 'Bu öğeyi derecelendirme yetkiniz yok';
$string['rating'] = 'Puanlama';
$string['ratinginvalid'] = 'Derece geçersiz';
$string['ratings'] = 'Dereceler';
$string['ratingtime'] = 'Derecelendirilmiş öğeleri tarihleriyle bu aralıkta sınırla:';
$string['rolewarning'] = 'Derecelendirme izni olan roller';
$string['rolewarning_help'] = 'Derecelendirmeleri göndermek için kullanıcılar, moodle/rating: rate özelliği ve herhangi bir modüle özgü kapasitesi olması gerektirir. Aşağıdaki rollere sahip kullanıcılar öğeleri derecelendirmelidir. Rol listesi, yönetim bloğundaki izinler bağlantısıyla değiştirilebilir.';
$string['scaleselectionrequired'] = 'Bir derecelendirme toplama türünü seçerken, bir ölçek kullanmayı veya maksimum puan belirlemeyi de seçmelisiniz.';
