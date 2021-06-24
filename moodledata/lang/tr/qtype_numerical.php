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
 * Strings for component 'qtype_numerical', language 'tr', version '3.10'.
 *
 * @package     qtype_numerical
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['acceptederror'] = 'Kabul edilen hata';
$string['addmoreanswerblanks'] = '{no} seçenek daha ekle';
$string['addmoreunitblanks'] = '{no} birim daha ekle';
$string['answercolon'] = 'Yanıt:';
$string['answererror'] = 'Hata';
$string['answermustbenumberorstar'] = 'Cevap sayı veya \'*\' olmalı.';
$string['answerno'] = '{$a}. cevap';
$string['decfractionofquestiongrade'] = 'Soru notunun bir basamağı (0-1) olarak';
$string['decfractionofresponsegrade'] = 'Yanıt notunun bir basamağı (0-1) olarak';
$string['decimalformat'] = 'ondalık';
$string['editableunittext'] = 'Giriş metni elemanı';
$string['errornomultiplier'] = 'Bu birim için bir çarpan belirtmelisiniz.';
$string['errorrepeatedunit'] = 'Aynı isimle iki birim olamaz.';
$string['geometric'] = 'Geometrik';
$string['invalidnumber'] = 'En az bir geçerli sayı girmelisiniz.';
$string['invalidnumbernounit'] = 'Geçerli bir numara girmelisiniz. Yanıtınıza bir birim eklemeyin.';
$string['invalidnumericanswer'] = 'Girdiğiniz yanıtlardan biri geçerli bir numara değildir.';
$string['invalidnumerictolerance'] = 'Girdiğiniz toleranslardan biri geçerli bir numara değildir.';
$string['leftexample'] = 'para birimi solda örneğin $1.00 or £1.00';
$string['manynumerical'] = 'Birimler isteğe bağlıdır. Bir birim girilirse, notlandırmadan önce yanıtı Birim 1\'e dönüştürmek için kullanılır.';
$string['multiplier'] = 'Çarpan';
$string['nominal'] = 'İtibari değer';
$string['nonvalidcharactersinnumber'] = 'Sayı olarak geçerli olmayan karakterler';
$string['notenoughanswers'] = 'En az bir cevap girmelisiniz.';
$string['numericalmultiplier'] = 'Çarpan';
$string['numericalmultiplier_help'] = 'Çarpan, doğru sayısal yanıtın çarpılacağı faktördür.

İlk birim (Birim 1) varsayılan 1 çarpanı değerine sahiptir. Doğru sayısal yanıt 5500 ise ve 1 numaralı varsayılan çarpan olarak Birim 1\'de birim W olarak ayarlarsanız, doğru yanıt 5500 W\'dır.

Birimi 0.00 W çarpanı ile eklerseniz, bu, 5.5 kW\'lık doğru tepki verecektir. Bu, 5500W veya 5.5kW yanıtlarının doğru olarak işaretleneceği anlamına gelir.

Kabul edilen hatanın da çarpıldığına dikkat edin, izin verilen 100 W\'lık bir hata 0.1 kW\'lık bir hata olur.';
$string['oneunitshown'] = 'Birim 1 otomatik olarak cevap kutusunun yanında görüntülenir.';
$string['onlynumerical'] = 'Birimler hiç kullanılmıyor. Sadece sayısal değer notlandırılır.';
$string['pleaseenterananswer'] = 'Lütfen bir cevap girin.';
$string['pleaseenteranswerwithoutthousandssep'] = 'Lütfen cevabınızı bin ayırıcıyı ({$a}) kullanmadan girin.';
$string['pluginname'] = 'Sayısal';
$string['pluginname_help'] = 'Öğrenci perspektifinden sayısal bir soru, kısa cevaplı bir soru gibi görünüyor. Aradaki fark sayısal cevapların kabul edilmiş bir hataya sahip olmasıdır. Bu, sabit bir cevap aralığının tek bir cevap olarak değerlendirilmesini sağlar. Örneğin, cevap 2 kabul edilmiş bir hata ile 10 ise, 8 ile 12 arasındaki herhangi bir sayı doğru kabul edilir.';
$string['pluginnameadding'] = 'Sayısal soru ekleniyor';
$string['pluginnameediting'] = 'Sayısal soru düzenleniyor';
$string['pluginnamesummary'] = 'Muhtemelen birimlerle birlikte, muhtemel toleranslarla birlikte olan, çeşitli model cevaplarına kıyasla notlandırılan, sayısal bir cevap vermeye imkan verir.';
$string['relative'] = 'Görece';
$string['rightexample'] = 'Uzunluk ölçüsü, örneğin 1.00cm veya 1.00km';
$string['selectunit'] = 'Bir birim seç';
$string['selectunits'] = 'Birimleri seç';
$string['studentunitanswer'] = 'Girişte birimler kullanılır';
$string['tolerancetype'] = 'Tolerans türü';
$string['unit'] = 'Birim';
$string['unitappliedpenalty'] = 'Bu işaretler, kötü birim için {$a} ceza puanı içerir.';
$string['unitchoice'] = 'Çoktan seçmeli bir seçme';
$string['unitedit'] = 'Birimi düzenli';
$string['unitgraded'] = 'Birim verilmeli ve notlandırılmalıdır.';
$string['unithandling'] = 'Birim taşıma';
$string['unitincorrect'] = 'Doğru birimi vermedin.';
$string['unitmandatory'] = 'Zorunlu';
$string['unitmandatory_help'] = '* Cevap, yazılı birim kullanılarak derecelendirilecektir.

* Birim alan boşsa, birim cezası uygulanır';
$string['unitnotselected'] = 'Birim seçmelisiniz.';
$string['unitonerequired'] = 'En az bir birim girmelisiniz';
$string['unitoptional'] = 'İsteğe bağlı birim';
$string['unitoptional_help'] = '* Birim alanı boş değilse, yanıt bu birim kullanılarak derecelendirilecektir.

* Birim kötü yazılmışsa veya bilinmiyorsa, cevap geçersiz sayılır.';
$string['unitpenalty'] = 'Birim cezası';
$string['unitpenalty_help'] = 'Ceza şu durumlarda uygulanır:

* Birim girişine yanlış birim adı girilmiş veya
* Değer girişi kutusuna bir birim girilir';
$string['unitposition'] = 'Birimlere git';
$string['units'] = 'Birimler';
$string['unitselect'] = 'Açılır menü';
$string['unitx'] = 'Birim {no}';
$string['validnumberformats'] = 'Geçerli sayı biçimleri';
$string['validnumberformats_help'] = '* Normal sayı 13500.67, 13 500.67, 13500, 67 veya 13 500, 67

* Eğer Dil paket ayarlarınız (langconfig.php dosyası) bin ayırıcı olarak bir virgül (,) kullanıyorsa * her zaman * ondalık noktası (.) 13, 500.67: 13, 500 gibi koyun.

* Üslü form için 1.350067 * 10 <sup>4</ sup> deyin, 1.350067 E4 kullanın: 1.350067 E04';
$string['xmustbenumeric'] = '{$a} bir numara olmalıdır.';
$string['xmustnotbenumeric'] = '{$a} bir numara olamaz.';
$string['youmustenteramultiplierhere'] = 'Buraya bir çarpan girmelisiniz.';
