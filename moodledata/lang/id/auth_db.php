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
 * Strings for component 'auth_db', language 'id', version '3.11'.
 *
 * @package     auth_db
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_dbdescription'] = 'Metode ini menggunakan tabel database eksternal untuk memeriksa apakah nama pengguna dan password yang dimasukkan adalah sah. Jika keanggotaan adalah keanggotaan baru, maka informasi dari field-field yang lain juga bisa dikopi ke Moodle.';
$string['auth_dbextrafields'] = 'Bidang-bidang ini opsional. Anda dapat memilih untuk mengisi beberapa bidang pengguna Moodle sebelumnya dengan informasi dari <b> bidang basis data eksternal </b> yang Anda tentukan di sini. <p> Jika Anda membiarkannya kosong, maka default akan digunakan. </p> <p> Dalam kedua kasus, pengguna akan dapat mengedit semua bidang ini setelah mereka masuk. </p>';
$string['auth_dbfieldpass'] = 'Nama dari field yang berisi password';
$string['auth_dbfielduser'] = 'Nama dari field yang berisi nama pengguna';
$string['auth_dbhost'] = 'Komputer yang meng-host server database.';
$string['auth_dbname'] = 'Nama database itu sendiri';
$string['auth_dbpass'] = 'Password sama dengan nama pengguna di atas';
$string['auth_dbpasstype'] = 'Tentukan format yang akan digunakan oleh field password. Enkripsi MD5 sangat berguna untuk berhubungan dengan aplikasi web lainnya seperti PostNuke';
$string['auth_dbtable'] = 'Nama dari tabel pada database';
$string['auth_dbtype'] = 'Jenis database (Lihat <a href="../lib/adodb/readme.htm#drivers">Dokumentasi ADOdb</a> untuk penjelasannya)';
$string['auth_dbuser'] = 'Nama pengguna yang mempunyai akses pembacaan ke database';
$string['pluginname'] = 'Gunakan database eksternal';
