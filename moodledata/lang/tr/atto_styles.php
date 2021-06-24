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
 * Strings for component 'atto_styles', language 'tr', version '3.10'.
 *
 * @package     atto_styles
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['config'] = 'Sitilleri yapılandırma';
$string['config_desc'] = 'JSON formatında Atto stilleri widget\'ı için yapılandırma.
<hr />
Örnek olarak:<br />
{<br />
    "title": "Blue box",<br />
    "type": "block",<br />
    "classes": "box blue"<br />
},{<br />
    "title": "Red text",<br />
    "type": "inline",<br />
    "classes": "red"<br />
}<br />
<hr />
The <em>başlık</em>Öznitelik, Atto stilleri widget\'inde stilin adını tanımlar.<br />
<br />
Bir başlık da Moodle multilang filtresini (etkinleştirilmişse) destekleyebilir, ancak ek çift tırnak işaretleri ters eğik çizgi ile öne çıkartılmalıdır.<br />
Lütfen bir örnek için eklentinin README dosyasına bir göz atın.<br />
<hr />
The <em>tür</em> Özniteliği iki değerden birini içerebilir: "block" veya "inline".<br />
<br />
"block"
Verilen sınıf (lar) ile bir div etiketi oluşturur ve standart bir blok seviyesi unsuru olarak işlev görür. Bu, geçerli blok seviyesi unsurunu ele alacak ve yalnızca o anda seçilen metinden daha fazlasını uygulayabilecektir.<br />
<br />
"inline"
Verilen sınıf (lar) ile bir span etiketi oluşturur ve standart satır içi eleman olarak davranır. Bu, yalnızca seçili olan metin için geçerlidir.
<hr />
The <em>sınıflar</em>
Özniteliği, blok/satır içi metne uygulanacak CSS sınıf adını alır.<br />
<br />

Her bir öğe için birden fazla sınıf, bir boşlukla ayrılmış olarak tanımlanabilir. Bunların hepsi blok/satır içi metne uygulanacaktır.<br />
<br />
Bu eklenti içinde CSS sınıf tanımları yapılamaz. CSS sınıf tanımlarınızı temanıza veya Moodle ek HTML ayarlarına eklemek zorunda kalacaksınız.
<hr />
Bootstrap-based temalar içeren Moodle kurulumlarında(especially <em>Arttırım</em>, <em>Daha fazlası</em> and <em>Temizle</em>, Kendi sınıflarınızı tanımlamak yerine bootstrap CSS sınıflarıyla stiller oluşturabilirsiniz.
<br /><br />
Örnek olarak:<br />
{<br />
    "title": "Success alert",<br />
    "type": "block",<br />
    "classes": "alert alert-success"<br />
},{<br />
    "title": "Info badge",<br />
    "type": "inline",<br />
    "classes": "badge badge-info"<br />
},{<br />
    "title": "Warning badge",<br />
    "type": "inline",<br />
    "classes": "badge badge-warning"<br />
}<br /><br />
Önyükleme sınıfları hakkında daha fazla bilgi için lütfen Bootstrap 2.3 belgesindeki aşağıdaki bağlantıları ziyaret edin.(for <em>Temizle</em> and <em>Daha fazlası</em>):
<ul>
<li><a href="http://getbootstrap.com/2.3.2/components.html#labels-badges">Bootstrap etiketleri ve işarıtleri</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#alerts">Bootstrap uyarıları</a></li>
<li><a href="http://getbootstrap.com/2.3.2/components.html#misc">Bootstrap Yardımcı sınıfları</a></li>
</ul>
Veya Bootstrap 4 belgelerinde (for <em>Boost</em>):
<ul>
<li><a href="http://v4-alpha.getbootstrap.com/components/badge/">Bootstrap işaretleri</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/components/alerts/">Bootstrap uyarıları</a></li>
<li><a href="http://v4-alpha.getbootstrap.com/utilities/">Bootstrap yararlılıkları</a></li>
</ul>';
$string['nostyle'] = 'Sitil yok';
$string['pluginname'] = 'Sitiller';
$string['settings'] = 'Sitil ayarları';
