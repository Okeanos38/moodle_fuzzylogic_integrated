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
 * Strings for component 'cachestore_file', language 'tr', version '3.10'.
 *
 * @package     cachestore_file
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Otomatik dizin oluştur';
$string['autocreate_help'] = 'Etkinleştirilirse, yolunda belirtilen dizin, önceden yoksa otomatik olarak oluşturulur.';
$string['path'] = 'Önbellek yolu';
$string['path_help'] = 'Bu önbellek deposu için dosyaları depolamada kullanılabilecek dizin. Boş bırakılırsa (varsayılan) moodledata dizininde otomatik olarak bir dizin oluşturulur. Bu, bir dosya deposunu daha iyi performans gösteren bir sürücüdeki (bellekte olduğu gibi) bir dizine yönlendirmek için kullanılabilir.';
$string['pluginname'] = 'Dosya önbelleği';
$string['prescan'] = 'Ön tarama dizini';
$string['prescan_help'] = 'Etkinleştirildiğinde, önbellek ilk kullanıldığında dizin taranır ve dosyalar için istekler tarama verilerine karşı önce kontrol edilir. Yavaş bir dosya sisteminiz varsa ve dosya işlemlerinin bir tıkanıklığa neden olduğu bulgusuna sahipseniz bu size yardımcı olabilir.';
$string['singledirectory'] = 'Tek dizin deposu';
$string['singledirectory_help'] = 'Etkinleştirilmiş dosyalar (ön belleğe alınan öğeler), birden çok dizine ayrılmak yerine, tek bir dizinde depolanır. <br />
Bunu etkinleştirmek dosya etkileşimlerini hızlandıracak, ancak dosya sistemi sınırlamalarına maruz kalma riskini arttırıyor. <br />
Aşağıdaki hususlar doğruysa, yalnızca bunu açmak önerilir: <br />
   - Önbellekteki öğelerin sayısının, çalıştırdığınız dosya sisteminde sorunlara neden olmayacak kadar küçük olacağını biliyorsanız <br />
 - Önbellekte saklanan veriler üretmek pahalıya mal olabilir. Varsayılan değerle yapıştırmak, sorunların ortaya çıkma ihtimalini düşürdüğü için hala daha iyi seçenek olabilir.';
