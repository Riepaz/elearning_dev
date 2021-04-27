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
 * Strings for component 'enrol', language 'id', version '3.11'.
 *
 * @package     enrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actenrolshhdr'] = 'Plugin pendaftaran yang tersedia';
$string['addinstance'] = 'Tambahkan metode';
$string['addinstanceanother'] = 'Tambahkan metode dan buat yang baru';
$string['ajaxnext25'] = '25 selanjutnya ..';
$string['ajaxoneuserfound'] = '1 pengguna ditemukan';
$string['ajaxxusersfound'] = '{$a} pengguna ditemukan';
$string['assignnotpermitted'] = 'Anda tidak memilki izin atau tidak dapat memberikan peran pada kursus ini.';
$string['bulkuseroperation'] = 'Operasi pengguna jumlah besar';
$string['configenrolplugins'] = 'Pilihlah semua plugin yang dibutuhkan dan sesuaikan urutannya.';
$string['custominstancename'] = 'Nama instance khusus';
$string['defaultenrol'] = 'Tambahkan instance ke kursus baru';
$string['defaultenrol_desc'] = 'Dimungkinkan untuk menambah plugin ini kesemua kursus baru secara default.';
$string['deleteinstanceconfirm'] = 'Anda akan menghapus metode pendaftaran "{$a->name}". Semua {$a->users}  pengguna yang saat ini terdaftar menggunkan metode ini akan dihapus pendaftarannya dan semua data yang berkaitan dengan nilai pengguna, keanggotaan grup atau langganan forum akan dihapus.

Apakah Anda yakin untuk melanjutkan?';
$string['deleteinstanceconfirmself'] = 'Apakah Anda yakin untuk menghapus instance "{$a->name}"  yang memberikan Anda akses ke kursus ini? Dimungkin Andakan tidak akan bisa mengakses kursus ini jika dilanjutkan menghapus.';
$string['deleteinstancenousersconfirm'] = 'Anda akan menghapus metode pendaftaan "{$a->name}". Apakah Anda yakin untuk melanjutkan?';
$string['disableinstanceconfirmself'] = 'Aapakah Anda yakin untuk menonaktifkan  "{$a->name}" yang memberikan Anda akses ke kursus ini? Dimungkin Andakan tidak akan bisa mengakses kursus ini jika dilanjutkan menghapus.';
$string['durationdays'] = '{$a} hari';
$string['editenrolment'] = 'Edit pendaftaran';
$string['enrol'] = 'Daftarkan';
$string['enrolcandidates'] = 'Pengguna tidak terdaftar';
$string['enrolcandidatesmatching'] = 'Mencocokkan pengguna yang tidak terdaftar';
$string['enrolcohort'] = 'Daftarkan kelompok';
$string['enrolcohortusers'] = 'Daftarkan pengguna';
$string['enroldetails'] = 'Detail pendaftaran';
$string['enrollednewusers'] = 'Berhasil mendaftarkan {$a} pengguna baru';
$string['enrolledusers'] = 'Pengguna terdaftar';
$string['enrolledusersmatching'] = 'Pencocokan pengguna terdaftar';
$string['enrolme'] = 'Daftarkan saya dalam kursus ini';
$string['enrolmentinstances'] = 'Metode pendaftaran';
$string['enrolmentmethod'] = 'Metode Pendaftaran';
$string['enrolmentnew'] = 'Pendaftaran baru di {$a}';
$string['enrolmentnewuser'] = '{$a->pengguna} telah mendaftar di kursus "{$a->kursus}"';
$string['enrolmentoptions'] = 'Pilihan pendaftaran';
$string['enrolments'] = 'Pendaftaran';
$string['enrolnotpermitted'] = 'Anda tidak memiliki izin atau tidak diizinkan untuk mendaftar seseorang dalam kursus ini';
$string['enrolperiod'] = 'Durasi pendaftaran';
$string['enroltimecreated'] = 'Pendaftaran telah dibuat';
$string['enroltimeend'] = 'Pendaftaran berakhir';
$string['enroltimeendinvalid'] = 'Akhir tanggal pendaftaran haruslah setelah tanggal mulai pendaftaran';
$string['enroltimestart'] = 'Pendaftaran dimulai';
$string['enrolusage'] = 'Daftar instance/ pendaftaran';
$string['enrolusers'] = 'Daftarkan pengguna';
$string['enrolxusers'] = 'Daftarkan {$a} pengguna';
$string['errajaxfailedenrol'] = 'Gagal mendaftarkan pengguna';
$string['errajaxsearch'] = 'Kesalahan ketika mencari pengguna';
$string['erroreditenrolment'] = 'Terjadi kesalahan saat mencoba mengubah pendaftaran pengguna';
$string['errorenrolcohort'] = 'Eror saat membuat contoh pendaftaran sinkronisasi grup dalam kursus ini.';
$string['errorenrolcohortusers'] = 'Eror mendaftarkan anggota grup pada kursus ini.';
$string['errorthresholdlow'] = 'Batas pemberian notifikasi minimal 1 hari.';
$string['errorwithbulkoperation'] = 'Ditemukan eror saat memproses perubahan pendaftaran grup besar Anda.';
$string['eventenrolinstancecreated'] = 'Instance pendaftaran dibuat';
$string['eventenrolinstancedeleted'] = 'Instance pendaftaran dihapus';
$string['eventenrolinstanceupdated'] = 'Instance pendaftaran diperbaharui';
$string['eventuserenrolmentcreated'] = 'Pengguna terdfatar di kursus';
$string['eventuserenrolmentdeleted'] = 'Pengguna dihapus dari pendaftaran kursus';
$string['eventuserenrolmentupdated'] = 'Penghapusan pengguna dari pendaftaran diperbaharui';
$string['expirynotify'] = 'Berikan notifikasi sebelum masa pendaftaran berakhir';
$string['expirynotify_help'] = 'Pengaturan ini menentukan apakah pesan pemberitahuan berakhirnya pendaftaran    telah dikirim.';
$string['expirynotifyall'] = 'Pengguna pendaftar dan terdaftar';
$string['expirynotifyenroller'] = 'Hanya pendaftar';
$string['expirynotifyhour'] = 'Jam untuk mengirim pemberitahuan berakhirnya pendaftaran';
$string['expirythreshold'] = 'Batas notifikasi';
$string['expirythreshold_help'] = 'Berapa lama sebelum batas pendaftaran pengguna diberikan notifikasi?';
$string['extremovedaction'] = 'Aksi penghapusan pendaftaran eksternal';
$string['extremovedaction_help'] = 'Pilih aksi untuk dilanjutkan ketika pendfataran pengguna hilang dari sumber pendaftaran ekesternal. Harap diingat bahwa beberapa data pengguna dan pengaturan akan dihapus sepenuhnya dari kursus selama proses penghapusan pendaftaran.';
$string['extremovedkeep'] = 'Jaga pengguna yang terdaftar';
$string['extremovedsuspend'] = 'Nonaktifkan pendaftaran kursus';
$string['extremovedsuspendnoroles'] = 'Nonaktifkan pendaftaran kursus dan hapus peran';
$string['extremovedunenrol'] = 'Hapus pengguna dari kursus';
$string['finishenrollingusers'] = 'Selesai mendaftarkan pengguna';
$string['foundxcohorts'] = 'Ditemukan {$a} kelompok';
$string['instanceadded'] = 'Metode ditambahkan';
$string['instanceeditselfwarning'] = 'Peringatan:';
$string['instanceeditselfwarningtext'] = 'Anda terdaftar pada kursus ini melalui metode pendaftaran, perubahan dapat mempengaruhi akses Anda ke kursus ini.';
$string['invalidenrolinstance'] = 'Instance pendaftaran tidak valid';
$string['invalidrole'] = 'Peran tidak valid';
$string['manageenrols'] = 'Kelola plugin mendaftar';
$string['manageinstance'] = 'Kelola';
$string['migratetomanual'] = 'PIndah ke pendaftaran secara manual';
$string['nochange'] = 'Tidak ada perubahan';
$string['noexistingparticipants'] = 'Tidak ada peserta sebelumnya';
$string['nogroup'] = 'Tidak ada grup';
$string['noguestaccess'] = 'Tamu tidak dapat mengakses kursus ini. Silahkan login.';
$string['none'] = 'Tidak ada';
$string['notenrollable'] = 'Anda tidak dapat mendaftarkan diri dalam kursus ini.';
$string['notenrolledusers'] = 'Penguna lain';
$string['otheruserdesc'] = 'Para pengguna berikut ini tidak terdaftar dalam kursus ini tetapi memiliki peran, warisan atau ditugaskan di dalamnya.';
$string['participationactive'] = 'Aktif';
$string['participationstatus'] = 'Status';
$string['participationsuspended'] = 'Dibekukan';
$string['periodend'] = 'sampai {$a}';
$string['periodnone'] = 'terdaftar {$a}';
$string['periodstart'] = 'dari {$a}';
$string['periodstartend'] = 'dari {$a->mulai} sampai {$a->akhir}';
$string['proceedtocourse'] = 'Lanjutkan ke konten kursus';
$string['recovergrades'] = 'Pulihkan nilai lama pengguna jika mungkin';
$string['rolefromcategory'] = '{$a->peran} (Diwarisi dari kategori kursus)';
$string['rolefrommetacourse'] = '{$a->peran} (Diwarisi dari kursus utama)';
$string['rolefromsystem'] = '{$a->peran} (Ditetapkan pada level situs)';
$string['rolefromthiscourse'] = '{$a->peran} (Ditetapkan pada kursus ini)';
$string['sendfromcoursecontact'] = 'Dari kontak kursus';
$string['sendfromkeyholder'] = 'Dari pemegang kunci';
$string['sendfromnoreply'] = 'Dari alamat-alamat no-reply';
$string['startdatetoday'] = 'Hari ini';
$string['synced'] = 'Disinkronkan';
$string['testsettings'] = 'Uji pengaturan';
$string['testsettingsheading'] = 'Uji pengaturan pendaftaran - {$a}';
$string['totalenrolledusers'] = '{$a} pengguna terdaftar';
$string['totalotherusers'] = '{$a} pengguna lain';
$string['unassignnotpermitted'] = 'Anda tidak memiliki izin membatalkan penetapan peran dalam kursus ini';
$string['unenrol'] = 'Hapus Pendaftaran Kursus';
$string['unenrolconfirm'] = 'Apakah Anda yakin untuk menghapus pendaftaran pengguna "{$a->user}" dari kursus "{$a->kursus}"?';
$string['unenrolme'] = 'Hapus pendaftaran kursus saya dari {$a}';
$string['unenrolnotpermitted'] = 'Anda tidak memiliki izin atau tidak bisa unenrol pengguna ini dari kursus ini.';
$string['unenrolroleusers'] = 'Unenrol pengguna';
$string['uninstallmigrating'] = 'Migrasi "{$a}" pendaftaran';
$string['unknowajaxaction'] = 'Aksi tak dikenal diminta';
$string['unlimitedduration'] = 'Tak terbatas';
$string['usersearch'] = 'Cari';
$string['withselectedusers'] = 'Dengan pengguna yang dipilih';
