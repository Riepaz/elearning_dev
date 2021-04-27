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
 * Strings for component 'auth_ldap', language 'id', version '3.11'.
 *
 * @package     auth_ldap
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_bind_dn'] = 'Jika Anda ingin menggunakan bind-user untuk mencari pengguna, tentukanlah di sini. Misalnya \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_pw'] = 'Password untuk bind-user.';
$string['auth_ldap_contexts'] = 'Daftar dari konteks dimana pengguna dilokasikan. Pisahkan konteks lainnya dengan \';\'. Sebagai contoh: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_create_context'] = 'Jika Anda mengaktifkan pembuatan pengguna dengan konfirmasi email, tentukan keadaan bagaimana pengguna akan dibuat. Keadaan ini harus berbeda dengan pengguna lainnya untuk menanggulangi bahaya keamanan. Anda tidak perlu menambahkan keadaan ini pada pemakaian variabel ldap_context, Moodle akan mencari pengguna secara otomatis dari keadaan ini.';
$string['auth_ldap_host_url'] = 'Tentukan host LDAP pada form-URL  seperti \'ldap://ldap.myorg.com/\' or \'ldaps://ldap.myorg.com/\'';
$string['auth_ldap_memberattribute'] = 'Tentukan atribut keanggotaan anggota, jika pengguna adalah anggota grup. Biasanya \'anggota\'';
$string['auth_ldap_search_sub'] = 'Masukkan nilai &lt;&gt; 0 jika Anda ingin untuk mencari pengguna dari sub-konteks.';
$string['auth_ldap_update_userinfo'] = 'Perbaharui informasi pengguna (nama depan, namaakhir, alamat..) dari LDAP ke Moodle. Lihat pada /auth/ldap/attr_mappings.php untuk informasi pemetaannya';
$string['auth_ldap_user_attribute'] = 'Attribut yang dugunakan untuk nama/cari pengguna. Biasanya \'cn\'.';
$string['auth_ldapdescription'] = 'Metode ini melakukan otentikasi melalui server LDAP eksternal.
                                  Jika nama pengguna dan password yang dimasukkan adalah sah, Moodle akan membuat pengguna baru
                                  dimasukkan pada databasenya. Modul ini dapat membaca atribut pengguna dari LDAP dan memasukkan lebih dulu
                                  field-field yang dibutuhkan pada Moodle.  Untuk login selanjutnya hanya nama pengguna dan
                                  password yang diperiksa.';
$string['auth_ldapextrafields'] = 'Bidang-bidang ini opsional. Anda dapat memilih untuk mengisi beberapa bidang pengguna Moodle sebelumnya dengan informasi dari <b> bidang LDAP </b> yang Anda tentukan di sini. <p> Jika Anda membiarkan bidang ini kosong, maka tidak ada yang akan ditransfer dari LDAP dan standar Moodle akan digunakan sebagai gantinya. </p> <p> Dalam kedua kasus tersebut, pengguna akan dapat mengedit semua bidang ini setelah mereka masuk. </p>';
$string['pluginname'] = 'Gunakan server LDAP';
