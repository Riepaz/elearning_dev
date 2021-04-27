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
 * Strings for component 'plugin', language 'id', version '3.11'.
 *
 * @package     plugin
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['actions'] = 'Aksi';
$string['availability'] = 'Ketersediaan';
$string['cancelinstallall'] = 'Batalkan penginstalan baru';
$string['cancelinstallhead'] = 'Membatalkan penginstalan plugin';
$string['cancelinstallinfo'] = 'Plugin berikut ini belum terinstal secara utuh, maka penginstalannya dapat dibatalkan. Folder plugin harus dihilangkan dari server untuk membatalkan penginstalan plugin. Pastikan bahwa ini adalah yang anda inginkan untuk menghindari kehilangan data (seperti modifikasi kode anda sendiri)';
$string['cancelinstallinfodir'] = 'Folder dihapus: {$a}';
$string['cancelinstallone'] = 'Batalkan penginstalan ini';
$string['cancelupgradeall'] = 'Batalkan pembaruan ({$a})';
$string['cancelupgradehead'] = 'Mengembalikan plugin versi sebelumnya';
$string['cancelupgradeone'] = 'Batalkan upgrade ini';
$string['checkforupdates'] = 'Periksa untuk update yang tersedia';
$string['checkforupdateslast'] = 'Pengecekan terakhir dilakukan pada {$a}';
$string['dependencyavailable'] = 'Tersedia';
$string['dependencyfails'] = 'Gagal';
$string['dependencyinstall'] = 'Install';
$string['dependencyinstallhead'] = 'Menginstal dependensi yang hilang';
$string['dependencyinstallmissing'] = 'Menginstall dependensi yang hilang ({$a})';
$string['dependencymissing'] = 'Hilang';
$string['dependencyunavailable'] = 'Tidak tersedia';
$string['dependencyupload'] = 'Unggah';
$string['dependencyuploadmissing'] = 'Unggah berkas ZIP';
$string['detectedmisplacedplugin'] = 'Plugin "{$a->component}" terinstal pada lokasi yang salah "{$a->current}", lokasi yang benar adalah "{$a->expected}"';
$string['displayname'] = 'Nama plugin';
$string['err_response_curl'] = 'Tidak dapat mengambil data pembaruan yang tersedia - Kesalahan cURL tak terduga.';
$string['err_response_format_version'] = 'Terdapat versi yang tidak diharapkan dari format respon. Harap coba periksa kembali update yang tersedia.';
$string['err_response_http_code'] = 'Tidak dapat mengambil data pembaruan yang tersedia - kode respon HTTP tak terduga';
$string['filterall'] = 'Tampilkan semua';
$string['filtercontribonly'] = 'Tampilkan plugin tambahan saja';
$string['filterupdatesonly'] = 'Tampilkan yang dapat diperbarui saja';
$string['misdepinfoplugin'] = 'Info plugin';
$string['misdepinfoversion'] = 'Info versi';
$string['misdepsavail'] = 'Dependensi hilang yang tersedia';
$string['misdepsunavail'] = 'Dependensi hilang yang tidak tersedia';
$string['misdepsunavaillist'] = 'Tidak ada versi yang ditemukan untuk memenuhi permintaan dependensi: {$a}.';
$string['misdepsunknownlist'] = 'Tidak terdapat pada direktori plugin: {$a}.';
$string['moodleversion'] = 'Moodle {$a}';
$string['noneinstalled'] = 'Tidak ada tipe plugin seperti ini yang terinstall';
$string['notdownloadable'] = 'Tidak dapat mengunduh paket';
$string['notdownloadable_help'] = 'Paket ZIP dengan pembaruannya tidak dapat diunduh secara otomatis. Silahkan baca halaman dokumentasi untuk bantuan lebih lanjut.';
$string['notdownloadable_link'] = 'admin/mdeploy/notdownloadable';
$string['notes'] = 'Catatan';
$string['notwritable'] = 'Berkas plugin tidak dapat ditulis';
$string['notwritable_help'] = 'Berkas plugin tidak dapat ditulis oleh server web. Proses server web harus memiliki akses untuk menulis di folder plugin dan seluruh kontennya. Akses menulis ke folder akar dari tipe plugin tersebut juga mungkin dibutuhkan.';
$string['otherplugin'] = '{$a->component}';
$string['otherpluginversion'] = '{$a->component} ({$a->version})';
$string['overviewall'] = 'Semua plugin';
$string['overviewext'] = 'Plugin tambahan';
$string['overviewupdatable'] = 'Update yang tersedia';
$string['packagesdebug'] = 'Keluaran pengawakutuan diaktifkan';
$string['packagesdownloading'] = 'Mengunduh {$a}';
$string['packagesextracting'] = 'Mengekstrak {$a}';
$string['packagesvalidating'] = 'Memvalidasi {$a}';
$string['packagesvalidatingfailed'] = 'Penginstalan dibatalkan karena kegagalan validasi';
$string['packagesvalidatingok'] = 'Validasi sukses, penginstalan dapat dilanjutkan';
$string['plugincheckall'] = 'Semua plugin';
$string['plugincheckattention'] = 'Plugin perlu diperhatikan';
$string['pluginchecknone'] = 'Tidak ada plugin yang perlu diperhatikan sekarang';
$string['pluginchecknotice'] = 'Halaman ini menampilkan plugin yang mungkin perlu diperhatikan pada saat pembaruan, seperti plugin baru yang akan diinstal, plugin yang akan diperbarui, plugin yang hilang, dll. Plugin tambahan akan ditampilkan apabila ada pembaruan yang tersedia untuk plugin tersebut. Anda disarankan untuk memeriksa apakah versi plugin terbaru tersedia dan pembaruan kode sumber sebelum melanjutkan dengan pembaruan Moodle.';
$string['plugindisable'] = 'Nonaktifkan';
$string['plugindisabled'] = 'Dinonaktifkan';
$string['pluginenable'] = 'Aktifkan';
$string['pluginenabled'] = 'Diaktifkan';
$string['release'] = 'Lepaskan';
$string['requiredby'] = 'Diminta oleh: {$a}';
$string['requires'] = 'Memerlukan';
$string['rootdir'] = 'Direktori';
$string['settings'] = 'Pengaturan';
$string['source'] = 'Sumber';
$string['sourceext'] = 'Tambahan';
$string['sourcestd'] = 'Standar';
$string['status'] = 'Status';
$string['status_delete'] = 'Akan dihapus';
$string['status_downgrade'] = 'Versi yang lebih mutakhir telah terinstal';
$string['status_missing'] = 'Hilang dari cakram!';
$string['status_new'] = 'Akan diinstal';
$string['status_nodb'] = 'Tidak ada basis data';
$string['status_upgrade'] = 'Akan diperbarui';
$string['status_uptodate'] = 'Telah diinstal';
$string['supportedmoodleversions'] = 'Versi Moodle yang didukung';
$string['systemname'] = 'Pengidentifikasi';
$string['type_antivirus'] = 'Plugin antivirus';
$string['type_antivirus_plural'] = 'Plugin-plugin antivirus';
$string['type_auth'] = 'Metode otentikasi';
$string['type_auth_plural'] = 'Metode-metode otentikasi';
$string['type_availability'] = 'Pembatasan ketersediaan';
$string['type_availability_plural'] = 'Pembatasan-pembatasan ketersediaan';
$string['type_block'] = 'Blokir';
$string['type_block_plural'] = 'Blokiran-blokiran';
$string['type_cachelock'] = 'Cache lock handler';
$string['type_cachelock_plural'] = 'Cache lock handlers';
$string['type_cachestore'] = 'Cache store';
$string['type_cachestore_plural'] = 'Cache stores';
$string['type_calendartype'] = 'Tipe kalender';
$string['type_calendartype_plural'] = 'Tipe-tipe kalender';
$string['type_coursereport'] = 'Laporan kursus';
$string['type_coursereport_plural'] = 'Laporan-laporan kursus';
$string['type_dataformat'] = 'Format data';
$string['type_dataformat_plural'] = 'Format-format data';
$string['type_editor'] = 'Editor';
$string['type_editor_plural'] = 'Para editor';
$string['type_enrol'] = 'Metode pendaftaran';
$string['type_enrol_plural'] = 'Metode-metode pendaftaran';
$string['type_filter'] = 'Penyaring teks';
$string['type_filter_plural'] = 'Penyaring-penyaring teks';
$string['type_format'] = 'Format kursus';
$string['type_format_plural'] = 'Format-format kursus';
$string['type_gradeexport'] = 'Metode ekspor nilai';
$string['type_gradeexport_plural'] = 'Metode-metode ekspor nilai';
$string['type_gradeimport'] = 'Metode impor nilai';
$string['type_gradeimport_plural'] = 'Metode-metode impor nilai';
$string['type_gradereport'] = 'Laporan buku nilai';
$string['type_gradereport_plural'] = 'Laporan-laporan buku nilai';
$string['type_gradingform'] = 'Metode gradasi lanjutan';
$string['type_gradingform_plural'] = 'Metode-metode gradasi lanjutan';
$string['type_local'] = 'Plugin lokal';
$string['type_local_plural'] = 'Plugin-plugin lokal';
$string['type_message'] = 'Keluaran pesan';
$string['type_message_plural'] = 'Keluaran-keluaran pesan';
$string['type_mnetservice'] = 'Layanan MNet';
$string['type_mnetservice_plural'] = 'Layanan-layanan MNet';
$string['type_mod'] = 'Modul aktifitas';
$string['type_mod_plural'] = 'Modul aktivitas';
$string['type_plagiarism'] = 'Plugin plagiarisme';
$string['type_plagiarism_plural'] = 'Plugin-plugin plagiarisme';
$string['type_portfolio'] = 'Portofolio';
$string['type_portfolio_plural'] = 'Portofolio-portofolio';
$string['type_profilefield'] = 'Tipe ruas profil';
$string['type_profilefield_plural'] = 'Tipe-tipe ruas profil';
$string['type_qbehaviour'] = 'Sikap soal';
$string['type_qbehaviour_plural'] = 'Sikap-sikap soal';
$string['type_qformat'] = 'Format ekspor/impor soal';
$string['type_qformat_plural'] = 'Format-format ekspor/impor soal';
$string['type_qtype'] = 'Tipe soal';
$string['type_qtype_plural'] = 'Tipe-tipe soal';
$string['type_report'] = 'Laporan situs';
$string['type_report_plural'] = 'Laporan-laporan';
$string['type_repository'] = 'Repositori';
$string['type_repository_plural'] = 'Repositori-repositori';
$string['type_search'] = 'Mesin pencari';
$string['type_search_plural'] = 'Mesin-mesin pencari';
$string['type_theme'] = 'Tema';
$string['type_theme_plural'] = 'Tema-tema';
$string['type_tool'] = 'Alat administrator';
$string['type_tool_plural'] = 'Alat-alat administrator';
$string['type_webservice'] = 'Protokol layanan web';
$string['type_webservice_plural'] = 'Protokol-protokol layanan web';
$string['uninstall'] = 'Uninstal';
$string['uninstallconfirm'] = 'You are about to uninstall the plugin <em>{$a->name}</em>. This will completely delete everything in the database associated with this plugin, including its configuration, log records, user files managed by the plugin etc. There is no way back and Moodle itself does not create any recovery backup. Are you SURE you want to continue?';
$string['uninstalldelete'] = 'All data associated with the plugin <em>{$a->name}</em> has been deleted from the database. To prevent the plugin re-installing itself, its folder <em>{$a->rootdir}</em> must be manually removed from your server now. Moodle itself cannot remove the folder due to write permissions.';
$string['uninstalldeleteconfirm'] = 'All data associated with the plugin <em>{$a->name}</em> has been deleted from the database. To prevent the plugin re-installing itself, its folder <em>{$a->rootdir}</em> must be removed from your server. Do you want to remove the plugin folder now?';
$string['uninstalldeleteconfirmexternal'] = 'It appears that the current version of the plugin has been obtained via source code management system ({$a}) checkout. If you remove the plugin folder, you may lose important local modifications of the code. Please ensure that you definitely want to remove the plugin folder before continuing.';
$string['uninstallextraconfirmblock'] = 'Ada {$a->instances}Â umpama pada blok ini.';
$string['uninstallextraconfirmenrol'] = 'Ada {$a->enrolments} keanggotaan pengguna.';
$string['uninstallextraconfirmmod'] = 'Ada {$a->instances}Â umpama modul ini dalam {$a->courses} kursus.';
$string['uninstalling'] = 'menguninstal {$a->name}';
$string['updateavailable'] = 'Versi baru {$a} tersedia!';
$string['updateavailable_moreinfo'] = 'Informasi lebih lanjut';
$string['updateavailable_release'] = 'Lepas {$a}';
$string['updatepluginconfirm'] = 'Konfirmasi pembaruan plugin';
$string['updatepluginconfirmexternal'] = 'Tampaknya versi plugin anda diperoleh dari kode sumber sistem manejemen ({$a}). Bila anda menginstal pembaruan ini, anda tidak dapat lagi memperoleh pembaruan plugin dari sistem pengelolaan kode sumber. Tolong pastikan bahwa anda benar-benar ingin memperbarui plugin sebelum melanjutkan.';
$string['updatepluginconfirminfo'] = 'Anda akan menginstal versi plugin baru {$a->name}. Paket ZIP plugin versi {$a->version} akan diunduh dari {$a->url} dan diekstrak ke penginstalan Moodle supaya penginstalan anda dapat diupgrade.';
$string['updatepluginconfirmwarning'] = 'Perhatikan bahwa Moodle tidak akan membuat cadangan basis data anda sebelum pembaruan. Kami menyarankan anda untuk membuat snapshot cadangan sekarang untuk mengantisipasi kasus langka, dimana kode baru memiliki kekutu yang membuat situs anda tidak tersedia atau bahkan membuat basis data anda menjadi corrupt. Lanjutkan dengan risiko ditanggung sendiri.';
$string['validationmsg_componentmatch'] = 'Nama lengkap komponen';
$string['validationmsg_componentmismatchname'] = 'Nama plugin tidak cocok';
$string['validationmsg_componentmismatchname_help'] = 'Dalam beberapa paket ZIP, seperti yang disediakan oleh Github, mungkin terdapat nama direktori akar yang tidak benar. Anda perlu memperbaiki nama direktori akarnya supaya cocok dengan nama plugin yang tercantum.';
$string['validationmsg_componentmismatchname_info'] = 'Plugin anda menunjukkan bahwa namanya adalah \'{$a}\' namun tidak cocok dengan nama direktori akarnya.';
$string['validationmsg_componentmismatchtype'] = 'Tipe plugin tidak cocok';
$string['validationmsg_componentmismatchtype_info'] = 'Tipe yang diminta adalah \'{$a->expected}\' , namun plugin menunjukkan tipe \'{$a->found}\'.';
$string['validationmsg_filenotexists'] = 'Berkas yang diekstrak tidak ditemukan';
$string['validationmsg_filesnumber'] = 'Berkas dalam paket tidak cukup';
$string['validationmsg_filestatus'] = 'Tidak dapat mengekstrak seluruh berkas';
$string['validationmsg_filestatus_info'] = 'Terjadi galat \'{$a->status}\' pada percobaan pengekstrakan berkas {$a->file}.';
$string['validationmsg_foundlangfile'] = 'Berkas bahasa ditemukan';
$string['validationmsg_maturity'] = 'Tingkatan kematangan yang dilaporkan';
$string['validationmsg_maturity_help'] = 'Plugin dapat melaporkan tingkat kematangannya. Apabila pengelola menganggap bahwa plugin stabil, tingkat kematangan yang dilaporkan akan ditampilkan sebagai MATURITY_STABLE. Tingkatan kematangan lainnya (seperti alpha atau beta) akan dianggap sebagai tidak stabil dan peringatan akan diberikan.';
$string['validationmsg_missingcomponent'] = 'Plugin tidak menunjukkan nama komponennya';
$string['validationmsg_missingcomponent_help'] = 'Semua plugin harus menunjukkan nama komponennya dengan lengkap melalui deklarasi `$plugin->component` pada berkas version.php';
$string['validationmsg_missingcomponent_link'] = 'Development:version.php';
$string['validationmsg_missingexpectedlangenfile'] = 'Nama berkas berbahasa Inggris tidak cocok';
$string['validationmsg_missingexpectedlangenfile_info'] = 'Plugin ini membutuhkan berkas berbahasa Inggris {$a}.';
$string['validationmsg_missinglangenfile'] = 'Tidak ada berkas berbahasa Inggris ditemukan';
$string['validationmsg_missinglangenfolder'] = 'Folder berbahasa Inggris hilang';
$string['validationmsg_missingversion'] = 'Plugin tidak menunjukkan versinya';
$string['validationmsg_missingversionphp'] = 'berkas version.php tidak ditemukan';
$string['validationmsg_multiplelangenfiles'] = 'Beberapa berkas berbahasa Inggris ditemukan';
$string['validationmsg_onedir'] = 'Struktur paket ZIP tidak benar.';
$string['validationmsg_onedir_help'] = 'Paket ZIP anda hanya diperkenankan memiliki satu direktori akar yang memiliki kode plugin. Nama dari direktori akar tersebut harus cocok dengan nama plugin.';
$string['validationmsg_pathwritable'] = 'Pemeriksaan akses penulisan';
$string['validationmsg_pluginversion'] = 'Versi plugin';
$string['validationmsg_release'] = 'Lepas plugin';
$string['validationmsg_requiresmoodle'] = 'Versi Moodle yang diminta';
$string['validationmsg_rootdir'] = 'Nama plugin yang akan diinstal';
$string['validationmsg_rootdir_help'] = 'Nama direktori akar pada paket ZIP membentuk nama plugin yang akan diinstal. Apabila namanya tidak benar, anda dapat mengganti nama direktori akar pada ZIP sebelum menginstal plugin.';
$string['validationmsg_rootdirinvalid'] = 'Nama plugin salah';
$string['validationmsg_rootdirinvalid_help'] = 'Nama direktori akar pada paket ZIP melanggar permintaan syntax formal. Dalam beberapa paket ZIP, seperti yang disediakan oleh Github, mungkin terdapat nama direktori akar yang tidak benar. Anda perlu memperbaiki nama direktori akarnya supaya cocok dengan nama plugin.';
$string['validationmsg_targetexists'] = 'Lokasi target telah tersedia dan akan dihapus';
$string['validationmsg_targetexists_help'] = 'Direktori plugin sudah ada dan akan digantikan dengan paket konten plugin.';
$string['validationmsg_targetnotdir'] = 'Lokasi target telah ditempati oleh berkas lain';
$string['validationmsg_unknowntype'] = 'Tipe plugin tidak diketahui';
$string['validationmsg_versionphpsyntax'] = 'Syntax yang tidak didukung ditemukan pada berkas version.php';
$string['validationmsglevel_debug'] = 'Awakutu';
$string['validationmsglevel_error'] = 'Galat';
$string['validationmsglevel_info'] = 'OK';
$string['validationmsglevel_warning'] = 'Peringatan';
$string['version'] = 'Versi';
$string['versiondb'] = 'Versi saat ini';
$string['versiondisk'] = 'Versi baru';
