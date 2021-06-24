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
 * Strings for component 'portfolio_mahara', language 'tr', version '3.10'.
 *
 * @package     portfolio_mahara
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['enableleap2a'] = 'Leap2A portföy desteğini etkinleştir (Mahara 1.3 veya üstünü gerektirir)';
$string['err_invalidhost'] = 'Geçersiz MNet barındırıcısı';
$string['err_invalidhost_help'] = 'Bu eklenti, geçersiz (veya silinmiş) bir MNet ana bilgisayarını işaret edecek şekilde yanlış yapılandırılmıştır. Bu eklenti, SSO IDP yayınlanan, SSO_SP aboneli ve yayınlanan <b> ve </ b> abone portföyleri bulunan Moodle Ağları ile ilgilidir.';
$string['err_networkingoff'] = 'MNet kapalı';
$string['err_networkingoff_help'] = 'MNet tamamen kapalıdır. Lütfen bu eklentiyi yapılandırmaya çalışmadan önce etkinleştirin. Bu eklentinin herhangi bir örneği, düzeltilene kadar görünür olmayacak şekilde ayarlanmıştır - bunları yeniden el ile görünecek şekilde ayarlamanız gerekir. Bunlar gerçekleşene kadar kullanılamazlar.';
$string['err_nomnetauth'] = 'Bu servis için gerekli olan Mnet yetkilendirme eklentisi etkin değil';
$string['err_nomnetauth_help'] = 'MNet kimlik doğrulama eklentisi devre dışı bırakıldı, ancak bu hizmet için gereklidir';
$string['err_nomnethosts'] = 'MNet\'e güveniliyor';
$string['err_nomnethosts_help'] = 'Bu eklenti, SSO IDP yayınlanan MNet akranları, abone olunan SSO SP, abone olunan <b> ve </ b> portföy servislerinin yanı sıra MNet kimlik doğrulama eklentisine de bağımlıdır. Bu eklentinin herhangi bir örneği bu koşullar sağlanıncaya kadar gizlenmiştir. Daha sonra el ile tekrar görünür hale getirilmeleri için elle ayar yapmaları gerekir.';
$string['failedtojump'] = 'Uzak sunucuyla iletişim kurarken hata';
$string['failedtoping'] = 'Uzak sunucuyla iletişim kurarken hata: {$a}';
$string['mnet_nofile'] = 'Aktarım nesnesi bulunamadı - önemli hata';
$string['mnet_nofilecontents'] = 'Aktarım nesnesi bulundu ama içeriği alınamadı - önemli hata: {$a}';
$string['mnet_noid'] = 'Bu kimlik için eşleşen aktarım bulunamadı';
$string['mnet_notoken'] = 'Bu aktarım için eşleşen kimlik bulunamadı';
$string['mnet_wronghost'] = 'Uzak sunucu, bu kimlik için aktarım kaydıyla eşleşlemedi';
$string['mnethost'] = 'Moodle Ağı Sunucusu';
$string['pf_description'] = 'Kullanıcıların Moodle içeriğini bu ana bilgisayara itmesine izin ver <br /> Sitenizdeki kimliği doğrulanmış kullanıcıların {$a} <br /> <ul> <li adresine içerik yayınlamasına izin vermek için <b> ve </ b> bu hizmete abone olun > <em> Bağımlılık </ em>: {$a}. </ li> <li> <em> Bağımlılık </ em> için SSO (Sağlayıcı Tanımla) hizmetini de <strong> yayınla </ strong> {$a} </ li> <em> Bağımlılık </ em> \'da SSO (Hizmet Sağlayıcı) hizmetine de <strong> abone olmanız </ strong> gerekir: Ayrıca MNet kimlik doğrulama eklentisini de etkinleştirmeniz gerekir. </li> </ ul> <br />';
$string['pf_name'] = 'Portfolyo servisleri';
$string['pluginname'] = 'Mahara ePortfolyo';
$string['senddisallowed'] = 'Şimdilik dosyaları Mahara\'ya aktaramazsınız';
$string['url'] = 'URL';
