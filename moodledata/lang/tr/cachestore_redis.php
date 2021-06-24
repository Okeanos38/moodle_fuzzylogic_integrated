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
 * Strings for component 'cachestore_redis', language 'tr', version '3.10'.
 *
 * @package     cachestore_redis
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Redis';
$string['prefix'] = 'Anahtar öneki';
$string['prefix_help'] = 'Bu önek, Redis sunucusundaki tüm anahtar adlar için kullanılır.
* Bu sunucuyu kullanarak yalnızca bir Moodle örneğiniz varsa, bu değeri varsayılan olarak bırakabilirsiniz.
* Anahtar uzunluğu kısıtlamaları nedeniyle, maksimum 5 karakterden izin verilir.';
$string['prefixinvalid'] = 'Geçersiz önek. Sadece a-z A-Z 0-9-_ kullanabilirsiniz.';
$string['server'] = 'Sunucu';
$string['server_help'] = 'Bu, kullanılacak Redis sunucusunun ana makine adını veya IP adresini ayarlar.';
$string['test_server'] = 'Sunucuyu test et';
$string['test_server_desc'] = 'Sınama için kullanılacak Redis sunucusu.';
