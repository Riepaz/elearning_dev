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
 * Strings for component 'auth', language 'id', version '3.11'.
 *
 * @package     auth
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actauthhdr'] = 'Plugin otentikasi yang tersedia';
$string['allowaccountssameemail'] = 'Izinkan akun dengan email sama';
$string['allowaccountssameemail_desc'] = 'Jika diizinkan, lebih dari satu akun pengguna dapat berbagi alamat email yang sama. Ini akan bisa berakibat masalah keamanan atau privasi, sebagai contoh tentang email konfirmasi perubahan sandi.';
$string['alternatelogin'] = 'Jika Anda memasukan URL di sini, akan digunakan sebagai halaman login web ini. Halaman harus berisi formulir dengan data <strong>\'{$a}\'</strong> dan akan mengembalikan nilai  <strong>username</strong> dan <strong>password</strong>.<br />Hati-hati jika Anda memasukan URL yang salah dapat mengakibatkan web menjadi terkunci.<br />Kosongkan seting ini jika Anda akan menggunakan halaman login standar.';
$string['alternateloginurl'] = 'Login URL alternatif';
$string['auth_changepasswordhelp'] = 'Mengubah bantuan sandi';
$string['auth_changepasswordurl'] = 'Mengubah URL sandi';
$string['auth_common_settings'] = 'Pengaturan umum';
$string['auth_data_mapping'] = 'Pemetaan data';
$string['auth_fieldlock'] = 'Kunci nilai';
$string['auth_fieldlockfield'] = 'Kunci nilai ({$a})';
$string['auth_fieldlocks_help'] = '<p>Anda bisa mengunci field data pengguna. Ini berguna untuk situs di mana data pengguna sedang dikelola secara manual oleh Administrator dengan cara mengedit data pengguna atau dengan fasilitas \'Unggah Pengguna". Jika Anda mengunci field yang disyaratkan oleh Moodle, pastikan Anda mencantumkan data tersebut saat membuat akun pengguna, atau akun tersebut menjadi tidak berfungsi.</p><p>Pertimbangkan menset kode kunci ke \'Unlocked if empty\' (Unlock bila kosong) untuk menghindari masalah ini.</p>';
$string['auth_fieldmapping'] = 'Pemetaan data  ({$a})';
$string['auth_notconfigured'] = 'Metoda otentikasi {$a} tidak dikonfigurasi.';
$string['auth_passwordisexpired'] = 'Kata sandi anda kadaluarsa. Apakah anda ingin mengubah kata sandi anda sekarang?';
$string['auth_passwordwillexpire'] = 'Kata sandi anda akan kadaluarsa dalam {$a} hari. Apakah anda ingin mengubah kata sandi anda sekarang?';
$string['auth_remove_user_key'] = 'Buang pengguna eksternal';
$string['auth_sync_script'] = 'Singkronisasi akun pengguna';
$string['auth_updatelocal'] = 'Perbarui lokal';
$string['auth_updateremote'] = 'Perbarui eksternal';
$string['auth_usernameexists'] = 'Nama pengguna yang anda pilih sudah digunakan. Silahkan pilih yang lain.';
$string['authenticationoptions'] = 'Pilihan otentikasi';
$string['authloginviaemail'] = 'Izinkan masuk melalui surel';
$string['authloginviaemail_desc'] = 'Izinkan pengguna mengunakan nama pengguna dan alamat surel (jika unik) untuk masuk log ke situs.';
$string['auto_add_remote_users'] = 'Otomatis menambahkan user jarak jauh';
$string['changepassword'] = 'Ubah URL password';
$string['chooseauthmethod'] = 'Pilihan sebuah metode otentikasi';
$string['chooseauthmethod_help'] = 'Pengaturan ini menentukan metode otentikasi yang digunakan ketika pengguna login. Hanya diaktifkan plugin otentikasi yang harus dipilih, jika tidak pengguna tidak akan bisa login. Untuk memblokir user saat login, pilih "No login".';
$string['createpassword'] = 'Buatkan password dan beritahu pengguna';
$string['createpasswordifneeded'] = 'Buat kata sandi jika dibutuhkan';
$string['emailchangecancel'] = 'Batalkan perubahan email';
$string['emailupdate'] = 'Alamat email pembaruan';
$string['emailupdatemessage'] = 'Dear {$a->fullname},

Anda sudah memohon untuk mengubah email address anda untuk akun pengguna anda di {$a->site}. Mohon buka URL berikut di broser anda untuk mengonfirmasi perubahan ini.

{$a->url}';
$string['emailupdatesuccess'] = 'Email address dari pengguna <em>{$a->fullname}</em> berhasil di update ke <em>{$a->email}</em>.';
$string['errorminpassworddigits'] = 'Passsword harus paling tidak {$a} digit.';
$string['errorminpasswordlength'] = 'Password harus paling tidak {$a} karakter.';
$string['errorminpasswordlower'] = 'Password harus paling tidak ada {$a} huruf kecil.';
$string['errorminpasswordnonalphanum'] = 'Password harus paling tidak ada {$a} karakter non-alphanumerik /  tanda baca.';
$string['errorminpasswordupper'] = 'Password harus paling tidak ada {$a} huruf besar.';
$string['errorpasswordreused'] = 'Kata sandi ini pernah digunakan sebelumnya, dan tidak diizinkan untuk digunakan ulang.';
$string['errorpasswordupdate'] = 'Kesalahan memperbarui password, password tidak berubah';
$string['eventuserloggedin'] = 'Penguna sudah login';
$string['eventuserloggedinas'] = 'Pengguna login sebagai pengguna lain';
$string['eventuserloginfailed'] = 'Login pengguna gagal';
$string['forcechangepassword'] = 'Paksa perubahan password';
$string['forcechangepassword_help'] = 'Paksa pengguna untuk mengubah password pada login berikutnya mereka ke Moodle.';
$string['forcechangepasswordfirst_help'] = 'Paksa pengguna untuk mengubah password pada login pertama mereka ke Moodle.';
$string['forgottenpasswordurl'] = 'URL Lupa sandi';
$string['guestloginbutton'] = 'Tombol login tamu';
$string['incorrectpleasetryagain'] = 'Salah. Silakan coba lagi.';
$string['infilefield'] = 'Field yang diperlukan dalam file';
$string['informminpassworddigits'] = 'setidaknya {$a} digit';
$string['informminpasswordlength'] = 'setidaknya {$a} karakter';
$string['informminpasswordlower'] = 'setidaknya {$a} huruf kecil';
$string['informminpasswordnonalphanum'] = 'setidaknya {$a} karakter non-alfanumerik';
$string['informminpasswordreuselimit'] = 'Kata sandi dapat digunakan ulang sesudah {$a} perubahan';
$string['informminpasswordupper'] = 'setidaknya {$a} huruf besar';
$string['informpasswordpolicy'] = 'Sandi harus memiliki {$a}';
$string['instructions'] = 'Instruksi';
$string['internal'] = 'Internal';
$string['limitconcurrentlogins'] = 'Batasi login paralel / bersamaan';
$string['locked'] = 'Terkunci';
$string['nopasswordchange'] = 'Sandi tidak dapat diubah';
$string['nopasswordchangeforced'] = 'Anda tidak dapat melanjutkan tanpa mengubah sandi Anda, namun tidak ada halaman yang tersedia untuk mengubahnya. Silahkan hubungi Administrator Moodle Anda.';
$string['noprofileedit'] = 'Profil tidak dapat diubah';
$string['ntlmsso_attempting'] = 'Berusaha untuk Single Sign On melalui NTLM ...';
$string['ntlmsso_failed'] = 'Auto-login gagal, coba halaman login yang normal ...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO tidak aktif.';
$string['passwordhandling'] = 'Penanganan kata sandi';
$string['plaintext'] = 'Teks biasa';
$string['pluginnotenabled'] = 'Plugin autentikasi \'{$a}\' tidak aktif.';
$string['pluginnotinstalled'] = 'Plugin otentikasi \'{$a}\' tidak dipasang.';
$string['potentialidps'] = 'Login menggunakan akun Anda pada:';
$string['recaptcha_help'] = 'CAPTCHA berguna untuk mencegah serangan program otomatis. Masukan kata-kata yang tertera di box.

Jika Anda tidak yakin kata-kata yang tertera, Anda bisa meminta CAPTCHA yang lain atau audio CAPTCHA.';
$string['security_question'] = 'Pertanyaan keamanan';
$string['selfregistration'] = 'Registrasi sendiri.';
$string['selfregistration_help'] = 'Jika pengaya autentikasi, seperti pendaftaran mandiri berdasarkan surel dipilih, maka akan memberikan peluang pada user untuk melakukan registrasi sendiri dan membuat akun. Ini membuka peluang spammer membuat akun yang memanfaatkan forum, blog, dan lain-lain sebagai sasaran spam. Untuk menghindari risiko ini, pendaftaran mandiri harus dimatikan atau dibatasi dengan setelan <em>domain surel yang diizinkan</em>.';
$string['showguestlogin'] = 'Anda dapat menyembunyikan atau menampilkan tombol login tamu pada halaman login.';
$string['stdchangepassword'] = 'Gunakan halaman standar untuk mengubah kata sandi';
$string['suspended'] = 'Suspended akun';
$string['suspended_help'] = 'Akun pengguna yang di-suspend tidak bisa login atau menggunakan layanan web, dan semua message yang dikirim akan dibuang.';
$string['unlocked'] = 'Unlocked';
$string['update_never'] = 'Tak pernah';
$string['update_oncreate'] = 'Pada penciptaan';
$string['update_onlogin'] = 'Pada setiap login';
$string['update_onupdate'] = 'Pada pembaruan';
