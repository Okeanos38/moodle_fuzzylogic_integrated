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
 * Strings for component 'url', language 'tr', version '3.10'.
 *
 * @package     url
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['chooseavariable'] = 'Bir değişken seçin...';
$string['clicktoopen'] = 'Adresi açmak için {$a} bağlantısını tıklayın.';
$string['configdisplayoptions'] = 'Mevcut olması gereken tüm seçenekleri seçin, mevcut ayarlar değiştirilmemiştir. Birden fazla alanı seçmek için CTRL tuşunu basılı tutun.';
$string['configframesize'] = 'Bir çerçeve içerisinde bir web sayfası veya yüklenen bir dosya görüntülendiğinde, bu değer, üst çerçevenin (gezinmeyi içerir) yüksekliğidir (piksel cinsinden).';
$string['configrolesinparams'] = 'Kullanılabilir parametre değişkenleri listesinde yerelleştirilmiş rol isimleri eklemek isterseniz etkinleştirin.';
$string['configsecretphrase'] = 'Bu gizli cümle, bazı sunuculara parametre olarak gönderilebilen şifrelenmiş kod değeri üretmek için kullanılır. Şifreli kod, gizli ifadenizle birleştirilen geçerli kullanıcı IP adresinin bir md5 değeri tarafından üretilir. Yani kod = md5 (IP.secretphrase). IP adresinin değişebileceği ve genellikle farklı bilgisayarlar tarafından paylaşıldığından bunun güvenilir olmadığını unutmayın.';
$string['contentheader'] = 'İçerik';
$string['createurl'] = 'Bir URL oluştur';
$string['displayoptions'] = 'Erişilebilir görünüm seçenekleri';
$string['displayselect'] = 'Göster';
$string['displayselect_help'] = 'Bu ayar, URL dosya türüne ve tarayıcının gömülmesine izin verip vermeyeceğine göre URL\'nin görüntülenme şeklini belirler. Seçenekler arasında şunlar olabilir:

* Otomatik - URL için en iyi ekran seçeneği otomatik olarak seçilir
* Göm - URL, gezinme çubuğunun altındaki sayfada URL açıklaması ve tüm bloklarla birlikte görüntülenir
* Aç - Tarayıcı penceresinde yalnızca URL görüntülenir
* Açılır pencerede - URL, menüler veya adres çubuğu olmadan yeni bir tarayıcı penceresinde görüntülenir
* Çerçevede - URL, gezinme çubuğunun ve URL açıklamasının altındaki bir çerçeve içerisinde görüntülenir
* Yeni pencere - URL, menüler ve adres çubuğu bulunan yeni bir tarayıcı penceresinde görüntülenir';
$string['displayselectexplain'] = 'Görünüm tipini seçin. Maalesef tüm tipler tüm URL\'ler için uygun değildir.';
$string['externalurl'] = 'Harici URL';
$string['framesize'] = 'Frame yüksekliği';
$string['invalidstoredurl'] = 'Bu kaynağı görüntüleyemiyor, URL geçersiz.';
$string['invalidurl'] = 'Girilen URL geçersiz';
$string['modulename'] = 'URL';
$string['modulename_help'] = 'URL modülü, bir öğretmenin bir ders kaynağı olarak bir web bağlantısı sağlamasına olanak tanır. Dokümanlar veya resimler gibi çevrimiçi olarak serbestçe bulunabilen herhangi bir şeyle bağlantılı olabilir; URL\'nin bir web sitesinin ana sayfası olması gerekmez. Belirli bir web sayfasının URL\'si kopyalanıp yapıştırılabilir veya bir öğretmen dosya seçiciyi kullanabilir ve Flickr, YouTube veya Wikimedia gibi bir depodan bir bağlantı seçebilir (site için hangi havuzların etkinleştirilmesine bağlı olarak).

Gömülü veya yeni bir pencerede açma gibi bir dizi görüntü seçenekleri ve öğrencinin adı gibi bilgileri URL\'ye aktarmak için gelişmiş seçenekler vardır.

URL\'lerin, metin editörü aracılığıyla herhangi bir başka kaynağa veya etkinlik türüne eklenebileceğini unutmayın.';
$string['modulenameplural'] = 'Adresler';
$string['page-mod-url-x'] = 'Herhangi bir URL modülü sayfası';
$string['parameterinfo'] = 'parametre=değişken';
$string['parametersheader'] = 'Parametreler';
$string['parametersheader_help'] = 'Bazı dahili Moodle değişkenleri otomatik olarak URL\'ye eklenebilir. Her metin kutusuna parametre adınızı yazın ve ardından gerekli eşleme değişkenini seçin.';
$string['pluginadministration'] = 'URL modülü yönetimi';
$string['pluginname'] = 'URL';
$string['popupheight'] = 'Açılır pencere yüksekliği (piksel)';
$string['popupheightexplain'] = 'Varsayılan açılır pencere yüksekliğini belirtir.';
$string['popupwidth'] = 'Açılır pencere genişliği (piksel)';
$string['popupwidthexplain'] = 'Varsayılan açılır pencere genişliğini belirtir.';
$string['printintro'] = 'URL açıklamasını göster';
$string['printintroexplain'] = 'URL açıklaması içeriğin üzerinde gösterilsin mi? Bazı görünüm tipleri etkinleştirilmesine rağmen URL açıklaması gösterilmeyebilir.';
$string['rolesinparams'] = 'Rol adlarını parametrelere dahil et';
$string['search:activity'] = 'URL';
$string['serverurl'] = 'Sunucu URL\'si';
$string['url:addinstance'] = 'Yeni bir URL kaynağı ekleyin';
$string['url:view'] = 'URL görünümü';
