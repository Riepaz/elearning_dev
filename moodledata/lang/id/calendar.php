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
 * Strings for component 'calendar', language 'id', version '3.11'.
 *
 * @package     calendar
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityevent'] = 'Aktivitas Acara';
$string['addevent'] = 'Tambah Acara';
$string['advancedoptions'] = 'Pilihan lanjutan';
$string['allday'] = 'Sepanjang hari';
$string['annually'] = 'Setiap tahun';
$string['calendar'] = 'Kalender';
$string['calendarheading'] = '{$a} Kalender';
$string['calendarpreferences'] = 'Preferensi Kalender';
$string['calendartypes'] = 'Tipe kalneder';
$string['calendarurl'] = 'URL Kalender : {$a}';
$string['category'] = 'Kategori';
$string['categoryevent'] = 'Kategori Acara';
$string['categoryevents'] = 'Kategori Acara Acara';
$string['clickhide'] = 'Klik untuk sembunyikan';
$string['clickshow'] = 'Klik untuk menamplkan';
$string['colactions'] = 'Tindakan';
$string['colcalendar'] = 'Kalender';
$string['collastupdated'] = 'Pembaruan Terakhir';
$string['colpoll'] = 'Memperbarui';
$string['commontasks'] = 'Pilihan';
$string['confirmeventdelete'] = 'Anda yakin untuk menghapus acara "{$a}"';
$string['confirmeventseriesdelete'] = '"{$a->name}" acara adalah bagian dari rangkaian. Apakah anda akan menghapus acara ini, atau semua {$a->count} acara dalam rangkaian?';
$string['course'] = 'Kursus';
$string['courseevent'] = 'Acara Kursus';
$string['courseevents'] = 'Acara Kursus';
$string['courses'] = 'Kursus';
$string['customexport'] = 'Rentang khusus ({$a->timestart} - {$a->timeend})';
$string['daily'] = 'Harian';
$string['daynext'] = 'Hari selanjutnya';
$string['dayprev'] = 'Hari sebelumnya';
$string['dayviewfor'] = 'Hari dilihat untuk:';
$string['dayviewtitle'] = 'Tampilan hari: {$a}';
$string['daywithnoevents'] = 'Tidak ada acara hari ini';
$string['default'] = 'Default';
$string['deleteallevents'] = 'Hapus semua acara';
$string['deleteevent'] = 'Hapus Acara';
$string['deleteevents'] = 'Hapus Acara';
$string['deleteoneevent'] = 'Hapus acara ini';
$string['detailedmonthviewfor'] = 'Bulan detail dilihat untuk:';
$string['detailedmonthviewtitle'] = 'Tampilan detil bulan: {$a}';
$string['durationminutes'] = 'Durasi dalam Menit';
$string['durationnone'] = 'Tanpa durasi';
$string['durationuntil'] = 'Sampai';
$string['editevent'] = 'Mengedit acara';
$string['erroraddingevent'] = 'Gagal menambah acara';
$string['errorbadsubscription'] = 'Langganan Kalender tidak ditemukan.';
$string['errorbeforecoursestart'] = 'Tidak dapat mengatur acara sebelum tanggal mulai kursus';
$string['errorcannotimport'] = 'Anda tidak dapat mengatur langganan kalender saat ini';
$string['errorhasuntilandcount'] = 'Apakah SAMPAI atau HITUNG dapat muncul dalam peraturan pengulangan, tetapi SAMPAI dan HITUNG TIDAK BOLEH muncul dalam peraturan pengulangan yang sama';
$string['errorinvalidbydayprefix'] = 'Nilai integer mendahului peraturan BYDAY dapat dilakukan untuk BULAN atau TAHUN  peraturan pengulangan';
$string['errorinvalidbydaysuffix'] = 'Nilai valid untuk hari dalam satuan minggu dari peraturan BYDAY adalah: MO, TU, WE, TH, FR, SA dan SU';
$string['errorinvalidbyhour'] = 'Nilai valid untuk peraturan BYHOUR adalah 0 sampai 23';
$string['errorinvalidbyminute'] = 'Nilai valid untuk peraturan BYMINUTE adalah 0 sampai 59';
$string['errorinvalidbymonth'] = 'Nilai valid untuk peraturan BYMONTH adalah 1 sampai 12';
$string['errorinvalidbymonthday'] = 'Nilai valid untuk peraturan BYMONTHDAY adalah 1 sampai 31 atau -31 sampai -1';
$string['errorinvalidbysecond'] = 'Nilai valid untuk peraturan BYSECOND adalah 0 sampai 59';
$string['errorinvalidbysetpos'] = 'Nilai valid untuk peraturan BYSETPOS adalah 1 sampai 366 atau -366 sampai -1';
$string['errorinvalidbyweekno'] = 'Nilai valid untuk peraturan BYWEEKNO adalah 1 sampai 53 atau -53 sampai -1';
$string['errorinvalidbyyearday'] = 'Nilai valid untuk peraturan BYYEARDAY adalah 1 sampai 366 atau -366 sampai -1';
$string['errorinvaliddate'] = 'Tanggal tidak valid';
$string['errorinvalidicalurl'] = 'URL iCal yang diberikan tidak valid.';
$string['errorinvalidinterval'] = 'Nilai dari peraturan INTERVAL harus integer positif';
$string['errorinvalidminutes'] = 'Tentukan durasi dalam menit dengan memberikan angka antara 1 dan 999';
$string['errorinvalidrepeats'] = 'Tentukan jumlah acara dengan memberikan angka antara 1 dan 99.';
$string['errormustbeusedwithotherbyrule'] = 'Peraturan BYSETPOS harus digunakan bersama dengan peraturan BYxxx lainnya';
$string['errornodescription'] = 'Keterangan diperlukan';
$string['errornoeventname'] = 'Nama diperlukan';
$string['errornonyearlyfreqwithbyweekno'] = 'Peraturan BYWEEKNO hanya valid untuk peraturan YEARLY';
$string['errorrequiredurlorfile'] = 'URL atau File digunakan untuk memasukkan kalendar';
$string['errorrrule'] = 'Peraturan pengulangan lalu tidak benar';
$string['eventcalendareventdeleted'] = 'Acara kalender yang telah dihapus';
$string['eventdate'] = 'Tanggal';
$string['eventdescription'] = 'Deskripsi';
$string['eventduration'] = 'Durasi';
$string['eventendtime'] = 'Waktu selesai';
$string['eventinstanttime'] = 'Waktu';
$string['eventkind'] = 'Jenis acara';
$string['eventname'] = 'Judul acara';
$string['eventnone'] = 'Tidak ada acara';
$string['eventrepeat'] = 'Mengulang';
$string['eventsall'] = 'Semua peristiwa';
$string['eventsdeleted'] = 'Acara dihapus';
$string['eventsfor'] = '{$a} acara';
$string['eventsimported'] = 'Acara diimpor: {$a}';
$string['eventskey'] = 'Peristiwa penting';
$string['eventsrelatedtocourses'] = 'Acara yang terkait dengan kursus';
$string['eventstarttime'] = 'Waktu mulai';
$string['eventsupdated'] = 'Acara diperbarui: {$a}';
$string['eventtime'] = 'Waktu';
$string['eventtype'] = 'Tipe acara';
$string['eventview'] = 'Detail acara';
$string['expired'] = 'Expired';
$string['export'] = 'Ekspor';
$string['exportbutton'] = 'Ekspor';
$string['exportcalendar'] = 'Ekspor kalender';
$string['fri'] = 'Jum';
$string['friday'] = 'Jum\'at';
$string['generateurlbutton'] = 'Dapatkan URL kalender';
$string['gotoactivity'] = 'Pergi ke aktivitas';
$string['gotocalendar'] = 'Pergi ke kalender';
$string['group'] = 'Grup';
$string['groupevent'] = 'Acara grup';
$string['groupevents'] = 'Acara grup';
$string['hourly'] = 'Per jam';
$string['importcalendar'] = 'Impor kalender';
$string['importcalendarfrom'] = 'Impor dari';
$string['importcalendarheading'] = 'Impor kalender ...';
$string['importfromfile'] = 'Kalender file (. Ics)';
$string['importfromurl'] = 'URL Kalender';
$string['invalidtimedurationminutes'] = 'Durasi dalam menit yang Anda masukkan tidak valid. Silakan masukkan durasi dalam menit lebih besar dari 0 atau pilih tidak ada durasi.';
$string['invalidtimedurationuntil'] = 'Tanggal dan waktu yang Anda pilih untuk durasi hingga sebelum waktu mulai acara. Harap perbaiki ini sebelum melanjutkan.';
$string['iwanttoexport'] = 'Ekspor';
$string['managesubscriptions'] = 'Kelola langganan';
$string['mon'] = 'Sen';
$string['monday'] = 'Senin';
$string['monthly'] = 'Bulanan';
$string['monthlyview'] = 'Tampilan bulanan';
$string['monthnext'] = 'Bulan depan';
$string['monththis'] = 'Bulan ini';
$string['never'] = 'Tidak pernah';
$string['newevent'] = 'Acara baru';
$string['nocalendarsubscriptions'] = 'Anda tidak memiliki langganan kalender.';
$string['notitle'] = 'tidak ada judul';
$string['noupcomingevents'] = 'Tidak ada agenda mendatang';
$string['oneevent'] = '1 acara';
$string['pollinterval'] = 'Perbarui interval';
$string['pollinterval_help'] = 'Seberapa sering Anda ingin kalender untuk diperbarui dengan agenda baru.';
$string['pref_maxevents'] = 'Maksimum agenda mendatang';
$string['pref_persistflt'] = 'Ingat pengaturan penyaring';
$string['pref_startwday'] = 'Hari pertama dari 1 minggu';
$string['preferences'] = 'Preferensi';
$string['repeatedevents'] = 'Acara yang berulang';
$string['repeateditall'] = 'Juga terapkan perubahan pada {$ a} acara lainnya dalam seri berulang ini';
$string['repeateditthis'] = 'Terapkan perubahan pada acara ini saja';
$string['repeatevent'] = 'Ulangi acara ini';
$string['repeatnone'] = 'Tidak mengulangi';
$string['repeatweeksl'] = 'Ulangi setiap minggu, buat semuanya sekaligus';
$string['sat'] = 'Sab';
$string['saturday'] = 'Sabtu';
$string['shown'] = 'ditampilkan';
$string['site'] = 'Situs';
$string['siteevents'] = 'Tempat acara';
$string['subscriptions'] = 'Langganan';
$string['sun'] = 'Ming';
$string['sunday'] = 'Minggu';
$string['thu'] = 'Kam';
$string['thursday'] = 'Kamis';
$string['timeformat_12'] = '12-jam (am/pm)';
$string['timeformat_24'] = '24-jam';
$string['today'] = 'Hari ini';
$string['tomorrow'] = 'Besok';
$string['tt_deleteevent'] = 'Hapus peristiwa';
$string['tt_editevent'] = 'Edit peristiwa';
$string['tue'] = 'Sel';
$string['tuesday'] = 'Selasa';
$string['typecategory'] = 'Kategori acara';
$string['typeclose'] = 'Tutup acara';
$string['typecourse'] = 'Agenda kursus';
$string['typedue'] = 'Batas waktu acara';
$string['typegradingdue'] = 'Batas acara penilaian';
$string['typegroup'] = 'Agenda grup';
$string['typeopen'] = 'Acara terbuka';
$string['typesite'] = 'Agenda situs';
$string['typeuser'] = 'Agenda pengguna';
$string['upcomingevents'] = 'Agenda mendatang';
$string['upcomingeventsfor'] = 'Agenda mendatang';
$string['user'] = 'Pengguna';
$string['userevent'] = 'Agenda pengguna';
$string['userevents'] = 'Agenda pengguna';
$string['wed'] = 'Rab';
$string['wednesday'] = 'Rabu';
$string['weekly'] = 'Mingguan';
$string['weeknext'] = 'Minggu depan';
$string['weekthis'] = 'Minggu ini';
$string['when'] = 'Kapan';
$string['yesterday'] = 'Kemarin';
