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
 * Strings for component 'debug', language 'tr', version '3.10'.
 *
 * @package     debug
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['authpluginnotfound'] = 'Kimlik denetimi eklentisi ({$a}) bulunamadı.';
$string['blocknotexist'] = '{$a} bloğu yok.';
$string['cannotbenull'] = '{$a}, boş olamaz.';
$string['cannotdowngrade'] = '{$a->plugin} eklentisi, {$a->oldversion} sürümünden {$a->newversion} sürümüne indirgenemez.';
$string['cannotfindadmin'] = 'Yönetici kullanıcısı bulunamadı!';
$string['cannotinitpage'] = 'Sayfa tam anlamıyla başlatılamıyor: hatalı {$a->name} id {$a->id}';
$string['cannotsetuptable'] = '{$a} tablolaları başarıyla AYARLANAMADI!';
$string['codingerror'] = 'Kodlama hatası algılandı, bir programcı tarafından düzeltilmeli: {$a}';
$string['configmoodle'] = 'Moodle, henüz yapılandırılmamış. Öncelikle config.php dosyasını düzenlemeniz gerekiyor.';
$string['erroroccur'] = 'İşlem sırasında hata oluştu';
$string['invalidarraysize'] = '{$a} parametrelerinde hatalı boyutta diziler';
$string['invalideventdata'] = 'Yanlış olay verileri gönderildi: {$a}';
$string['invalidparameter'] = 'Geçersiz parametre değeri algılandı';
$string['invalidresponse'] = 'Geçersiz yanıt değeri tespit edildi';
$string['missingconfigversion'] = 'Yapılandırma tablosu sürümü içermediğinden devam edilemiyor, özür dileriz.';
$string['modulenotexist'] = '{$a} eklentisi yok';
$string['morethanonerecordinfetch'] = 'Fetch() işlevinde birden fazla kayıt bulundu!';
$string['mustbeoveride'] = 'Soyut {$a} metodu geçersiz kılınmış olmalı.';
$string['noadminrole'] = 'Hiçbir yönetici rolü bulunamadı';
$string['noblocks'] = 'Bloklar kurulmadı!';
$string['nocate'] = 'Kategori yok!';
$string['nomodules'] = 'Eklentiler bulunamadı!';
$string['nopageclass'] = '{$a} içe alındı ama sayfa dersi bulunamadı';
$string['noreports'] = 'Erişilebilecek rapor yok';
$string['notables'] = 'Tablo yok!';
$string['phpvaroff'] = 'PHP değişkeni \'{$a->name}\' Kapalı olmalı - {$a->link}';
$string['phpvaron'] = 'PHP değişkeni \'{$a->name}\' Açık olmalı - {$a->link}';
$string['sessionmissing'] = '{$a} nesnesi oturumda yok';
$string['sqlrelyonobsoletetable'] = 'Bu SQL kullanılmayan tablo(lar) üzerinde sorgu çalıştırıyor: {$a}! Kodunuz bir programcı tarafından düzeltilmeli.';
$string['withoutversion'] = 'Ana version.php dosyası okunabilir değil veya bozuk';
$string['xmlizeunavailable'] = 'xmlize fonksiyonları kullanılamıyor';
