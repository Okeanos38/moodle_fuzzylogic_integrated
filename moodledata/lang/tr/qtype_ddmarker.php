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
 * Strings for component 'qtype_ddmarker', language 'tr', version '3.10'.
 *
 * @package     qtype_ddmarker
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = '{no} daha fazla işaretleyici için boşluk bırakır';
$string['alttext'] = 'Alternatif metin';
$string['answer'] = 'Cevap';
$string['bgimage'] = 'Arka plan resmi';
$string['clearwrongparts'] = 'Yanlış yerleştirilen işaretleyicileri, resmin altındaki varsayılan başlangıç konumuna geri taşı';
$string['coords'] = 'Koordinatlar';
$string['correctansweris'] = 'Doğru cevap: {$a}';
$string['draggableimage'] = 'Sürüklenebilir resim';
$string['draggableitem'] = 'Sürüklenebilir öğe';
$string['draggableitemheader'] = 'Sürüklenebilir öğe {$a}';
$string['draggableitemtype'] = 'Tür';
$string['draggableword'] = 'Sürüklenebilir metin';
$string['dropbackground'] = 'İşaretleyicileri üzerine sürüklemek için arka plan resmi';
$string['dropzone'] = 'Bırakma bölgesi {$a}';
$string['dropzoneheader'] = 'Bırakma bölgeleri';
$string['dropzones'] = 'Bırakma bölgeleri';
$string['dropzones_help'] = 'Bırakma bölgeleri, yazım koordinatları ile tanımlanır. Yazarken, yukarıdaki önizleme anında güncellenir, böylece deneme ve geliştirme aşamasında bir şeyler yerleştirebilirsiniz.

* Daire: centre_x, centre_y; yarıçap<br>örneğin:<code>80, 100; 50</code>
* Çokgen: x1, y1; X2, y2; ...; xn, yn<br>örneğin:<code> 20, 60; 100, 60; 20, 100</code>
* Dikdörtgen: sol, üst, genişlik, yükseklik<br>örneğin:<code> 20, 60; 80, 40</code>';
$string['followingarewrong'] = 'Aşağıdaki işaretleyiciler yanlış alana yerleştirildi: {$a}.';
$string['followingarewrongandhighlighted'] = 'Aşağıdaki işaretleyiciler yanlış yerleştirildi: {$a}. Vurgulanan işaretleyici (ler) şimdi doğru yerleşim (ler) ile gösterilir. <br /> İzin verilen alanı vurgulamak için işaretleyiciye tıklayın.';
$string['formerror_nobgimage'] = 'Sürükle ve bırak alanında arka plan olarak kullanılacak bir resim seçmeniz gerekiyor.';
$string['formerror_noitemselected'] = 'Bir bırakma bölgesi belirttiniz, ancak bölgeye sürüklenmesi gereken bir işaretçi seçmediniz.';
$string['formerror_nosemicolons'] = 'Koordinatlar dizesinde hiçbir noktalı virgül yok. Bir {$a->shape} için koordinatlarınız - {$a->coordsstring} olarak ifade edilmelidir.';
$string['formerror_onlysometagsallowed'] = 'Etikette bir işaretleyici için yalnızca "{$a}" etiketine izin verilir.';
$string['formerror_onlyusewholepositivenumbers'] = 'X, Y  koordinatlarını ve / veya şekillerin genişliğini ve yüksekliğini belirtmek için lütfen yalnızca pozitif sayılar kullanın. Bir {$a->shape} için koordinatlarınız - {$a->coordsstring} olarak ifade edilmelidir.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Çokgen şekli için en az 3 nokta belirtmeniz gerekir. Bir {$a->shape} için koordinatlarınız - {$a->coordsstring} olarak ifade edilmelidir.';
$string['formerror_repeatedpoint'] = 'Aynı koordinatları iki kez girdiniz. Her nokta benzersiz olmalı. Bir {$a->shape} için koordinatlarınız - {$a->coordsstring} olarak ifade edilmelidir.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'Tanımladığınız şekil arka plan görüntüsünün sınırlarının dışına çıkıyor.';
$string['formerror_toomanysemicolons'] = 'Belirttiğiniz koordinatlarda noktalı virgülle ayrılmış çok fazla parça var. Bir {$a->shape} için koordinatlarınız - {$a->coordsstring} olarak ifade edilmelidir.';
$string['formerror_unrecognisedwidthheightpart'] = 'Belirttiğiniz genişlik ve yükseklik tanınmıyor. Bir {$a->shape} için koordinatlarınız - {$a->coordsstring} olarak ifade edilmelidir.';
$string['formerror_unrecognisedxypart'] = 'Belirttiğiniz X, Y koordinatları tanınmıyor. Bir {$a->shape} için koordinatlarınız - {$a->coordsstring} olarak ifade edilmelidir.';
$string['infinite'] = 'Sınırsız';
$string['marker'] = 'İşaretleyici';
$string['marker_n'] = 'İşaretleyici {no}';
$string['markers'] = 'İşaretleyiciler';
$string['nolabel'] = 'Etiket metni yok';
$string['noofdrags'] = 'Sayı';
$string['pleasedragatleastonemarker'] = 'Cevabınız tam değil; Görüntüye en az bir işaretçiyi yerleştirmeniz gerekir.';
$string['pluginname'] = 'İşaretleyicileri sürükle ve bırak';
$string['pluginname_help'] = 'Sürükle ve bırak işaretleyicileri, yanıtlayan kişinin metin etiketlerini sürükleyip bir arka plan görüntüsündeki tanımlanan bırakma bölgelerine bırakmasını gerektirir.';
$string['pluginnameadding'] = 'Sürükle ve bırak işaretleyicilerini ekleme';
$string['pluginnameediting'] = 'Sürükle ve bırak işaretleyicilerini düzenleme';
$string['pluginnamesummary'] = 'İşaretleyiciler sürüklenip arka plan görüntüsüne bırakılır.';
$string['previewareaheader'] = 'Önizleme';
$string['previewareamessage'] = 'Bir arka plan görüntüsü dosyası seçin, işaretleyiciler için metin etiketleri girin ve sürüklenmeleri gereken arka plan resmindeki bırakma bölgelerini tanımlayın.';
$string['refresh'] = 'Önizlemeyi yenile';
$string['shape'] = 'Şekil';
$string['shape_circle'] = 'Daire';
$string['shape_circle_coords'] = 'x, y; r (x, y dairenin merkezinin koordinatları ve r yarıçaptır)';
$string['shape_circle_lowercase'] = 'daire';
$string['shape_polygon'] = 'Çokgen';
$string['shape_polygon_coords'] = 'x1, y1; x2, y2; x3, y3; x4, y4... (x1, y1 ilk vertexin koordinatlarıdır, x2, y2 ikinci sanaldoku koordinatlarıdır. Çokgeni kapatmak için ilk köşenin koordinatlarını tekrar etmek.)';
$string['shape_polygon_lowercase'] = 'çokgen';
$string['shape_rectangle'] = 'Dörtgen';
$string['shape_rectangle_coords'] = 'x, y; w, h (burada x, y, dikdörtgenin sol üst köşesinin koordinatları ve w ve h dikdörtgenin genişliği ve yüksekliği)';
$string['shape_rectangle_lowercase'] = 'dörtgen';
$string['showmisplaced'] = 'Bırakma bölgeleri vurgulayın Onlardan doğru işaretleyici bırakılmamış olanlar';
$string['shuffleimages'] = 'Her soru sorulduğunda sürükleme öğelerini karıştır';
$string['stateincorrectlyplaced'] = 'İşaretleyicilerin yanlış yerleştirildiği durum';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Bırakma bölgesi {$a}';
$string['ytop'] = 'Üst';
