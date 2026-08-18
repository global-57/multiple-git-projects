<?php ob_start(); ?>

<!-- NOTIF LANG LOGIN -->
<?php
define('LANG_LOST_PASSWORD', "Lupa Password");	
define('LANG_SIGNUP', "Buat akun baru");	
define('LANG_LOGIN', "Login Member");	
define('LANG_NOTIF_BLOCKED_STATUS', "Akses member area anda (username: {user}) diblokir! Cek email anda {email} untuk membuka blokir dan mendapatkan akses member area anda kembali. Kode blokir: {kode}.	");	
define('LANG_NOTIF_USER_NOT_FOUND', "<strong>Username {user} tidak ditemukan</strong>, Masukan username yang benar!");	
define('LANG_NOTIF_USER_NOT_ACTIVE', "Username {user} tidak aktif, silahkan hubungi administrator!");	
define('LANG_NOTIF_WRONG_PASSWORD', "<strong>Password Salah!</strong> Masukan password yang benar.");	
define('LANG_NOTIF_WRONG_CAPTCHA', "<strong>Captcha salah!</strong> Masukan kode captcha yang benar.");	
define('LANG_NOTIF_WRONG_SESSION', "Sesi Login anda telah kadaluarsa, silahkan ulang login kembali.");	
define('LANG_NOTIF_SUCCESS_UPDATE_PASSWORD', "<strong>Password berhasi di ubah!</strong> Gunakan password yang baru untuk login selanjutnya, untuk keamanan ubahlah password anda secara berkala. Password baru: ");		

define('LANG_NOTIF_SUCCESS_UNBLOCK', "<strong>Blokir berhasil dibuka!</strong> Gunakan password yang baru untuk login selanjutnya, untuk keamanan ubahlah password anda secara berkala. Password baru: ");


define('LANG_NOTIF_ALERT_CONFIRM_REG', "Terima kasih {nama}, Pendaftaran anda telah di konfirmasi.");	
define('LANG_NOTIF_ALERT_NOTVALID_SMS', "<h4 class='alert-heading'><strong>Konfirmasi SMS</strong></h4><p>Kami telah mengirimkan konfirmasi kode melalui sms ke nomor hp {hp}, Silahkan cek hp anda. Jika anda merasa tidak mendapatkan sms, silahkan kirim ulang sms.</p><p><a class='btn blue' href='./validation.php?do=sms&user={user}'>Kirim Ulang</a></p>");

define('LANG_NOTIF_ALERT_NOTVALID_EMAIL', "<h4 class='alert-heading'><strong>Konfirmasi Email</strong></h4><p>Kami telah mengirimkan link konfirmasi pendaftaran ke email anda {email}, Silahkan cek email anda. Jika anda merasa tidak mendapatkan email tersebut, silahkan kirim ulang.</p><p><a class='btn blue' href='./validation.php?do=mail&user={user}'>Kirim Ulang</a></p>");

define('LANG_NOTIF_RESET_PASS_CEK', "Anda telah meminta reset password sebelumnya, kami telah mengirim kembali konfirmasi reset password ke email anda {email}, silahkan cek email anda.");

define('LANG_NOTIF_SEND_EMAILLINK_AGAIN', "Anda telah mengirimkan ulang link konfirmasi email, mohon tunggu {waktu} untuk dapat mengirim ulang kembali.");
define('LANG_NOTIF_SEND_SMSCODE_AGAIN', "Anda telah mengirimkan ulang sms kode konfirmasi pendaftaran, mohon tunggu {waktu} untuk dapat mengirim ulang kembali.");

define('LANG_NOTIF_SEND_SMSCODE', "Kode konfirmasi pendaftaran telah dikirim ke nomor HP anda {hp}, Silahkan cek HP anda dan konfirmasikan pendaftaran anda.");
define('LANG_NOTIF_SEND_EMAILLINK', "Link konfirmasi pendaftaran telah dikirim ke email anda {email}, Silahkan cek email anda dan konfirmasikan pendaftaran anda.");

define('LANG_NOTIF_NOACTIVE_ALL', "Kami telah mengirimkan link konfirmasi pendaftaran ke email anda dan juga kode konfirmasi pendaftaran ke nomor HP anda. silahkan cek dan konfirmasikan pendaftaran anda");

define('LANG_NOTIF_NOACTIVE_ALL', "Kami telah mengirimkan link konfirmasi pendaftaran ke email anda dan juga kode konfirmasi pendaftaran ke nomor HP anda. silahkan cek dan konfirmasikan pendaftaran anda");


define('LANG_ALERT_BLOCK_LOGIN', "Akses Terbatas!\nKeanggotaan anda sedang di blokir!");
define('LANG_LOGIN_RESET_PASS', "klik <a href='./forgotpass.php'>disini</a> untuk reset password");
define('LANG_LOGIN_REGISTER_NEW', "Belum memiliki akun disini? <a href='./register.php' id='register-btn'>Daftar disini</a>");

define('LANG_NOTIF_ALERT_BLOCK', "Anda telah {batas} kali salah password menggunakan user {user}! Hati-hati, {batase} kali anda salah password, username anda akan diblokir! Jika anda lupa password, silahkan gunakan opsi lupa password!");
?>
<!-- NOTIF LANG REGISTER -->
<?php
define('LANG_REG_TITLE_DATA', "Masukan data diri anda disini:");
define('LANG_REG_TITLE_LOGIN', "Masukan detail login anda disini: ");


define('LANG_NAME', "Nama Lengkap");	
define('LANG_EMAIL', "Alamat Email");	
define('LANG_MOBILE', "Nomor HP");	
define('LANG_CITY', "Kota");	
define('LANG_SEL_COUNTRY', "Pilih Negara");	
define('LANG_RE-PASS', "Ulang Password");	
define('LANG_REG_SUBMIT', "Daftar");	
define('LANG_BACK', "Kembali");	

define('LANG_REGISTER_SUCCESS', "<h4 class='alert-heading'><strong>Pendaftaran sukses</strong></h4><p>Terima kasih {nama}, pendaftaran anda telah disimpan dalam database kami. Silahkan login member area dan lakukan pembayaran sesuai nilai paket yang anda pilih.</p>");
define('LANG_REGISTER_NO_REFF', "Refferal tidak ditemukan! Refresh halaman ini atau akses website ini melalui link refferal anda.");
define('LANG_REGISTER_USER_ON', "Username sudah digunakan! Silahkan gunakan username yang lain.");

define('LANG_REGISTER_MAX_EMAIL', "Email {email} sudah terdaftar {p} kali. Silahkan gunakan alamat email lain, 1 email hanya untuk {batas} kali pendaftaran.");
define('LANG_REGISTER_MAX_HP', "Nomor HP {hp} sudah terdaftar {p} kali. Silahkan gunakan nomor HP yang lain, 1 nomor HP hanya untuk {batas} kali pendaftaran.");

define('LANG_LOST_PIN', "Lupa PIN");

define('LANG_FORGOT_NO_PIN', "PIN tidak ditemukan!");	
define('LANG_FORGOT_WRONG_PIN', "PIN yang anda masukan salah!");
define('LANG_FORGOT_BLOCK_PIN', "PIN anda sedang diblokir! Silahkan hubungi administrator.");
define('LANG_FORGOT_OFF_PIN', "PIN anda tidak aktif! Silahkan aktifkan PIN anda di member area.");

define('LANG_FORGOT_ALREADY_SENT', "Anda telah mengirimkan reset password sebanyak 3 kali, silahkan proses dahulu reset password sebelumnya untuk dapat mengirimkan reset password kembali.");

define('LANG_FORGOT_SENT_REFRESH', "Link reset password telah dikirim sebelumnya, silahkan cek email anda");
define('LANG_FORGOT_SENT_GO', "Link reset password telah dikirim sebelumnya, silahkan cek email anda");

define('LANG_SEND_BUTTON', "Kirim");	
define('LANG_LOGIN_BUTTON', "Masuk");	
define('LANG_RESET_PASSWORD', "Update Password");	
define('LANG_RESET_PASSWORD_NEW', "Password Baru");
define('LANG_RESET_PASSWORD_NEW2', "Konfirmasi Password Baru");



define('LANG_REGISTER_SUCCESS_MEMBER', "<h4 class='alert-heading'><strong>Pendaftaran sukses</strong></h4><p>Terima kasih {nama}, Anda telah berhasil mendaftarkan member baru. Arahkan member baru anda untuk login member area dan lakukan pembayaran sesuai nilai paket yang anda pilih.</p>");

?>

<?php
$LANG["register"] = "Pendaftaran";
$LANG["firstn"] = "Nama Depan";
$LANG["lastn"] = "Nama Belakang";
$LANG["address"] = "Alamat";
$LANG["country"] = "Negara";
$LANG["province"] = "Propinsi";
$LANG["name"] = "Nama";
$LANG["city"] = "Kota";
$LANG["zipcode"] = "Kodepos";
$LANG["cellphone"] = "Handphone";
$LANG["email"] = "Alamat Email";
$LANG["username"] = "Username";
$LANG["password"] = "Password";
$LANG["pin"] = "Kode PIN";
$LANG["bank"] = "Nama Bank";
$LANG["ben_country"] = "Negara";
$LANG["bank_acc"] = "Nomor Rekening";
$LANG["ben_name"] = "Nama Pemilik";
$LANG["swift_code"] = "Swift Code";
$LANG["iban"] = "IBAN";
$LANG["captcha"] = "Kode Keamanan";
$LANG["submit"] = "Lanjutkan";
$LANG["reset"] = "Ulang";
$LANG["news"] = "Berita";
$LANG["ticket"] = "Tiket";
$LANG["dtnews"] = "Detail Berita";
$LANG["statistic"] = "Statistik";
$LANG["investor"] = "Investor";
$LANG["investtoday"] = "Investor Hari Ini";
$LANG["investonline"] = "Investor Online";
$LANG["visittoday"] = "Pengunjung Hari Ini";
$LANG["totvisit"] = "Total Pengunjung";
$LANG["visitonline"] = "Pengunjung Online";
$LANG["totalprofits"] = "Total Profit";
$LANG["latestnews"] = "Berita Terbaru";
$LANG["readmorenews"] = "Klik untuk baca selengkapnya";
$LANG["nonews"] = "Belum ada berita";
$LANG["enlargepic"] = "Klik untuk perbesar gambar";
$LANG["postby"] = "Di posting oleh";
$LANG["next"] = "Selanjutnya";
$LANG["prev"] = "Sebelumnya";
$LANG["readmore"] = "Baca";
$LANG["testimonials"] = "Testimonial";
$LANG["sentby"] = "Dikirim oleh";
$LANG["date"] = "Tanggal";
$LANG["subject"] = "Judul";
$LANG["notesti"] = "Belum ada testimonial";
$LANG["clickdetailtesti"] = "Klik untuk melihat detail testimonial";
$LANG["verification"] = "Verifikasi";
$LANG["fotogallery"] = "Gallery Foto";
$LANG["videogallery"] = "Gallery Video";
$LANG["loginmember"] = "Member Login";
$LANG["thankyou"] = "Terima Kasih";
$LANG["regconfirm"] = "pendaftaran Anda telah dikonfirmasi";
$LANG["regactive"] = "Keanggotaan Anda telah diaktifkan. Anda bisa login di Area Anggota Anda menggunakan form login di bawah ini";
$LANG["attention"] = "Perhatian";
$LANG["attentionblock"] = "Anda sudah {batas} kali melakukan kesalahan password, {sisane} kali kesalahan lagi akses member area anda akan diblokir. Gunakan opsi lupa password jika anda lupa password anda.";
$LANG["attentionlogin"] = "Anda belum menyelesaikan langkah-langkah validasi dan konfirmasi alamat email Anda.
Silahkan konfirmasi dan memvalidasi alamat email Anda, tautan validasi Anda telah dikirim ke email Anda pada saat pendaftaran.
Jika Anda tidak menerima email, silahkan kirim ulang link validasi dengan klik link berikut.";
$LANG["blockmember"] = "Member area anda terblokir! System telah mengirimkan petunjuk untuk membuka blokir ke email anda, silahkan cek email anda! Username : {userco} | Kode Blokir : {kode} | Email : {email}";
$LANG["resend"] = "Kirim Ulang";
$LANG["wrongcaptcha"] = "Kode Captcha Salah";
$LANG["wronguser"] = "Username Salah";
$LANG["uaernotfound"] = "Username tidak ditemukan";
$LANG["wrongpass"] = "Password Salah";
$LANG["wrongmail"] = "Email Salah";
$LANG["resetpass"] = "Ubah Password";
$LANG["fotgotpass"] = "Lupa Password";
$LANG["inactive"] = "Status keanggotaan anda tidak aktif, silahkan hubungi pengelola.";
$LANG["sendvalidation"] = "Link validasi sudah dikirim ke email anda, silahkan cek email anda.";
$LANG["noactiveall"] = "Kami telah mengirimkan link aktivasi ke email dan kode aktifasi ke handphone anda. Cek dan lakukan validasi.";
$LANG["sendactmail"] = "Link validasi sudah dikirim ke email and, silahkan cek inbok anda.";
$LANG["alreadysentmail"] = "Anda baru saja mengirimkan ulang link verifikasi ke email, tunggu beberapa saat lagi untuk mengiri ulang.";
$LANG["alreadysentsms"] = "Anda baru saja mengirimkan kode verifikasi ke nomor handphone anda, tunggu beberapa saat lagi untuk mengiri ulang.";
$LANG["sendsms"] = "Kode Verifikasi telah dikirimkan ke nomor handphone anda, silahkan cek inbox";
$LANG["resentsms"] = "Jika anda tidak menerima sms silahkan kirim ulang disini";
$LANG["resentmail"] = "Jika anda tidak menerima email silahkan kirim ulang disini";
$LANG["resetpass1"] = "Konfirmasi ubah password sudah dikirim ke email anda, silahkan cek inbox.";
$LANG["resetpass2"] = "Anda telah mengirimkan request untuk ubah password, saat ini kami telah mengirimkan kembali link konfirmasi ke email anda, silahkan cek email anda.";
$LANG["wronglink"] = "Link verifikasi salah.";
$LANG["wrongsmscode"] = "SMS verifikasi kode salah.";
$LANG["passtreetimes"] = "Anda telah melakukan request ubah password sebanyak 3 kali, silahkan cek email anda dan proses terlebih dahulu sebelum anda dapat merubah password kembali.";
$LANG["send"] = "Kirim";
$LANG["cancel"] = "Batal";
$LANG["openblock"] = "Buka Blokir";
$LANG["blockode"] = "Kode Blokir";
$LANG["newpass"] = "Password Baru";
$LANG["newpassconfirm"] = "Ulangi";
$LANG["newpassconfirm2"] = "Konfirmasi Salah";
$LANG["resetpassexp"] = "Session ubah password telah berakhir, Silahkan reset password anda lagi.";
$LANG["resetpasstop"] = "Password sudah berhasil diubah, gunakan password baru anda untuk login selanjutnya.";
$LANG["wrongblkode"] = "Kode Blokir Salah";
$LANG["accessdenied"] = "Anda tidak memiliki akses untuk halaman ini";
$LANG["unblocked"] = "Blokir berhasil dibuka, silahkan login menggunakan password berikut";
$LANG["unblockwrongkode"] = "Hati-hati, kesalahan memasukan kode blokir berturut-turut akan menyebabkan IP anda terblokir.";
$LANG["blocklogin"] = "Status keanggotaan Anda sedang di blokir";
$LANG["lastdeporunning"] = "Deposit terakhir anda sedang berjalan {intervals} hari, minimal untuk {ph} jika deposit anda telah berjalan {bataswds} hari.";
$LANG["pendingph"] = "Masih ada {gh} anda sebelumnya yang ber status pending, silahkan proses dahulu sebelum anda dapat melakukan {gh} kembali, cek cash flow transaction.";
$LANG["cashflowtransaction"] = "Cash Flow";
$LANG["cashflowhistory"] = "Riwayat Cash Flow";
$LANG["registermember"] = "Pendaftaran Member";
$LANG["registerhistory"] = "Riwayat Pendaftaran";
$LANG["upgrademanager"] = "Upgrade ke Manager";
$LANG["ticketreg"] = "Tiket Pendaftaran";
$LANG["transtickethistory"] = "Riwayat Transfer Ticket";
$LANG["memo"] = "Pesan";
$LANG["inbox"] = "Kotak Masuk";
$LANG["outbox"] = "Kotak Keluar";
$LANG["confirmmemodata"] = "Pesan Konfirmasi";
$LANG["blacklist"] = "Blacklist";
$LANG["blacklistreport"] = "Laporan Blacklist";
$LANG["addblacklist"] = "Tambahkan Blacklist";
$LANG["onlyformanager"] = "Fasilitas ini hanya untuk manager.";
$LANG["statloginuser"] = "User Login:";
$LANG["role"] = "Peran:";
$LANG["logout"] = "Keluar";
$LANG["uploadfoto"] = "Unggah Foto";
$LANG["blacklistinfo"] = "Anda telah di blacklist oleh member lain, Anda dapat meninjau blacklist pada menu blacklist. Silakan selesaikan permasalahan anda sehingga member tersebut dapat membatalkan blacklist.";
$LANG["thanksgh"] = "berhasil disimpan. Silahkan tunggu beberapa saat, sistem kami otomatis akan mencari pasangan untuk anda dan mengirimkan instruksi transfer untuk Anda.";
$LANG["thanksph"] = "berhasil disimpan. Silakan tunggu beberapa saat, sistem kami otomatis akan mencari member untuk memberikan bantuan untuk Anda.";
$LANG["confirmsuccess"] = "Terima kasih, konfirmasi anda telah berhasil dikirim. silahkan tunggu beberapa saat sampai konfirmasi anda disetujui oleh member yang bersangkutan.";
$LANG["accconfirm"] = "Terima kasih, Anda telah mengkonfirmasi pembayaran dari member yang memberikan bantuan kepada anda.";
$LANG["closebutton"] = "Tutup";
$LANG["historybutton"] = "Riwayat";
$LANG["detailbutton"] = "Detil";
$LANG["checkactivemember"] = "Keanggotaan anda tidak aktif atau sedang di blokir! Anda tidak memiliki akses untuk halaman ini!";
$LANG["cancelgh"] = "telah berhasil dibatalkan";
$LANG["error2"] = "Transaksi ini sudah di proses.";
$LANG["error3"] = "Tiket yang anda gunakan tidak benar.";
$LANG["error4"] = "Ada status {gh} sebelumnya yang masih pending, silahkan proses {gh} tersebut sebelum anda dapat melakukan {gh} lagi.";
$LANG["pinnone"] = "Anda tidak memiliki PIN, Silahkan buat PIN di menu PIN.";
$LANG["pinblock"] = "PIN Anda di blokir! Silahkan hubungi pengelola.";
$LANG["pinnonactive"] = "PIN Anda tidak aktif! Silahkan aktifkan PIN Anda di PIN menu.";
$LANG["pinwrong"] = "PIN Salah.";
$LANG["amount"] = "Nilai";
$LANG["selectamount"] = "Pilih Nilai";
$LANG["disable"] = "Terkunci";
$LANG["payment"] = "Pembayaran";
$LANG["selectpayment"] = "Pilih Pembayaran";
$LANG["enterpincode"] = "Masukan PIN Anda";
$LANG["errorselectamount"] = "Pilih Nilai";
$LANG["errorselectticket"] = "Pilih Tiket";
$LANG["errorcontributecode"] = "Kode transaksi tidak ditemukan! Silahkan ulang dari awal!";
$LANG["errorentercaptcha"] = "Masukan Captcha";
$LANG["cancelgivehelp"] = "Klik disini untuk cancel";
$LANG["movetoarchive"] = "Sembunyikan dan arsipkan, Anda dapat temukan lagi di cash flow history";
$LANG["movetocashflow"] = "Pindahkan ke cash flow";
$LANG["balance"] = "Saldo";
$LANG["smscodeinput"] = "Masukan kode verifikasi yang di kirim ke nomor handphone anda.";
$LANG["smscodeinput2"] = "Kode Verifikasi SMS";
$LANG["verify"] = "Verifikasi";
$LANG["clickdetails"] = "Klik disini untuk detail";
$LANG["btupd2_1"] = "Transaksi tidak selesai atau di batalkan.";
$LANG["btupd_1"] = "Konfirmasi jika anda sudah melakukan pembayaran";
$LANG["btupd2_2"] = "Transaksi ini sudah diproses. Silahkan kirim";
$LANG["btupd2_2b"] = "anda sebelum expired.";
$LANG["btupd2_3"] = "Transaksi ini sudah selesai.";
$LANG["clicksendmessage"] = "Klik disini untuk mengirim pesan.";
$LANG["approvetrans"] = "Anda telah menyetujui konfirmasi.<br>Klik disini untuk detail.";
$LANG["sendconfirm1"] = "Anda telah mengirimkan konfirmasi kepada";
$LANG["sendconfirm2"] = "Mohon tunggu user bersangkutan menyetujui konfirmasi anda<br>Klik disini untuk detail.";
$LANG["receiveandapp"] = "Konfirmasi anda telah diterima dan di setujui.<br>Klik disini untuk detail.";
$LANG["receiveandapp2"] = "Anda telah menyetujui konfirmasi.<br>Klik disini untuk detail.";
$LANG["pleasewaits"] = "Mohon tunggu...<br>tombol konfirmasi akan muncul<br>jika user";
$LANG["pleasewaits2"] = "telah melakukan konfirmasi";
$LANG["createdate"] = "TANGGAL DIBUAT";
$LANG["plswaite"] = "Mohon tunggu user";
$LANG["plswaite2"] = "menyetujui konfirmasi anda<br>Klik disini untuk detail.";
$LANG["confrsends"] = "KONFIRMASI ANDA TELAH TERKIRIM";
$LANG["confrsends2"] = "EXPIRED";
$LANG["confrsends3"] = "JAM";
$LANG["confrsend"] = "EXPIRED";
$LANG["confrsend2"] = "JAM --";
$LANG["confrsend3"] = "EXPIRED";
$LANG["confrsend3b"] = "JAM";
$LANG["btupd2x"] = "Transaksi ini sudah di proses.<br>Silahkan tunggu konfirmasi dari user";
$LANG["confrmallpay"] = "Konfirmasi jika anda telah menerima transfer bantuan sesuai";
$LANG["reffuser"] = "Username Refferal";
$LANG["reffname"] = "Nama Refferal";
$LANG["accsetting"] = "Ubah Profil";
$LANG["accdetails"] = "Profil Anda";
$LANG["linkreff"] = "Link Refferal";
$LANG["fullname"] = "Nama Lengkap";
$LANG["placemnt"] = "Posisi";
$LANG["swiftinfo"] = "Swift code adalah kode bank yang berguna untuk transaksi secara internasional. Jika anda ingin mengirim atau menerima uang dari luar negeri baik melalui transfer bank maupun kartu kredit maka anda memerlukan kode ini untuk memverfikasinya.";
$LANG["disablepayment"] = "Field dikunci! Untuk update field ini anda harus memverifikasi akun Anda, silakan klik tombol unlock.";
$LANG["fotopro"] = "Foto Profil";
$LANG["fotoproinfo"] = "Halaman ini memungkinkan Anda untuk meng-upload foto pribadi Anda untuk profile anda.";
$LANG["fotoproinfo2"] = "Ketentuan Foto";
$LANG["fotoproinfo2a"] = "Format foto yang di ijinkan hanya: jpg, jpeg, png and gif.";
$LANG["fotoproinfo2b"] = "Ukuran foto akan di re-size menjadi maksimal lebar 1024 piksel.";
$LANG["fotoproinfo2c"] = "Ukuran file foto tidak boleh lebih dari 1 MB";
$LANG["fotoproinfo2d"] = "tidak di ijinkan, silahkan upload hanya file image";
$LANG["maxghne"] = "Batas maksimal {ph} adalah {rpwd} perminggu, silahkan tunggu proses {ph} anda sebelumnya selesai.";
$LANG["insufficient2"] = "Balance anda tidak cukup";
$LANG["insufficient"] = "Balance anda tidak cukup atau masih ada permintaan sebelumnya masih pending.";
$LANG["codehis"] = "Kode";
$LANG["type"] = "Jenis";
$LANG["from"] = "Dari";
$LANG["to"] = "Untuk";
$LANG["datesend"] = "Tanggal kirim";
$LANG["nohistory"] = "Tidak Ada Riwayat";
$LANG["incorectcode"] = "Kode verifikasi SMS salah";
$LANG["unlockfield"] = "BUKA KUNCI FIELD";
$LANG["status0"]="Keanggotaan anda tidak aktif atau sedang di blokir.";
$LANG["mbph_num"]="Nomor";
$LANG["mbph_dtstart"]="Tgl";
$LANG["mbph_dtexp"]="Expired";
$LANG["mbph_status"]="Status";
$LANG["mbph_dtpaid"]="Terbayar";
$LANG["add"]="Tambahkan";


$LANG["imgupld"] = "Gambar berhasil di upload";
$LANG["docupd"] = "Upload Scan Dokumen";
$LANG["diskripsifoto"] = "Diskripsi photo";
$LANG["docupdinfo"] = "Dalam rangka untuk keamanan dan kenyamanan, Anda harus memverifikasi akun Anda. Selama 72 jam kerja dokumen upload akan diperiksa, apabila dibutuhkan, dokumen tambahan akan diperlukan dari Anda untuk verifikasi akun.";
$LANG["docupdinfob"] = "Please upload the scan of your passport or any other identity document in the form below.";
$LANG["docupdlimit"] = "Sorry, Limit Maximum Upload Photos Only 5 Photos, Please contact administrator.";

$LANG["mbdepo_num"]="Nomor";
$LANG["mbdepo_code"]="Kode";
$LANG["mbdepo_depodate"]="Tgl Deposit";
$LANG["mbdepo_expireday"]="Tgl Expired";
$LANG["mbdepo_activeday"]="Aktif";
$LANG["mbdepo_status"]="Status";
$LANG["depo"]="Deposit";
$LANG["mbdepo_hist"]="Riwayat Deposit";
$LANG["mbdepo_active"]="Aktif";
$LANG["mbdepo_nactive"]="Tidak Aktif";
$LANG["mbdepo_stop"]="Berhenti";


$LANG["mbph_dt"]="Tanggal";
$LANG["mbph_to"]="Penerima";
$LANG["mbph_from"]="Dari";
$LANG["mbph_type"]="Jenis Bonus";
$LANG["bonus"]="Bonus";
$LANG["getbonus"]="Ambil Bonus";
$LANG["bonus_hist"]="Riwayat Bonus";
$LANG["gtbonus"]="Ambil Bonus Anda";

$LANG["reff_dt"]="Tanggal";
$LANG["reff_sendsts"]="Status";
$LANG["reff_sendtgl"]="Tanggal";
$LANG["reff_receivests"]="Status Diterima";
$LANG["reff_receivetgl"]="Tanggal Diterima";

$LANG["profit"]="Profit";			
$LANG["prof_date"]="Tanggal";
$LANG["prof_code"]="Kode Deposit";
$LANG["prof_type"]="Jenis";
$LANG["prof_hist"]="Riwayat Profits";

$LANG["xrequest"]="kirim";
$LANG["xconfirm"]="konfirmasi";
$LANG["xfinish"]="selesai";
$LANG["xexpire"]="expired";
$LANG["funds"]="Dana";
$LANG["fundshist"]="Riwayat Dana";



$LANG["changepassok"] = "Password berhasil diubah! Gunakan password baru untuk login selanjutnya.";
$LANG["wrongnew"] = "Password baru salah.";
$LANG["wrongold"] = "Password lama salah.";
$LANG["changepass"] = "Ganti Password";
$LANG["pinnone2"] = "PIN Tidak Ditemukan";
$LANG["pinblock2"] = "PIN Diblokir";

$LANG["pinnonactive2"] = "PIN Tidak Aktif";
$LANG["oldpass"] = "Password Lama";
$LANG["confirmnewpass"] = "Konfirmasi Password";


$LANG["profilesuccess"] = "Profil berhasil di update";


$LANG["disablepaymentx"] = "Field Dikunci! Data ini permanen, tidak dapat diubah.";

$LANG["updd_no"]="No";
$LANG["updd_date"]="Tanggal";
$LANG["updd_info"]="Informasi";
$LANG["updd_view"]="Lihat";
$LANG["updd_dn"]="Download";
$LANG["updd_sts"]="Status";
$LANG["updd_dell"]="Hapus";
$LANG["updd_infodell"]="Anda yakin akan menghapus data ini?";
$LANG["updd_scdell"]="Gambar berhasil dihapus.";
$LANG["updd_nodell"]="Gambar tidak dapat dihapus karena belum dikonfirmasi oleh administrator.";
$LANG["updd_infodw"]="Data Anda adalah rahasia, hanya sebagai Arsip, tidak untuk di publikasikan.";


$LANG["pin_act"]="Aktifasi PIN";
$LANG["actv"]="Aktifkan";
$LANG["actvpin"]="PIN Anda telah aktif";
$LANG["stillactvpin"]="PIN Anda sudah aktif";
$LANG["haveactvpin"]="Anda telah membuat PIN sebelumnya";
$LANG["chgepin"]="Ubah PIN";
$LANG["sschgepin"]="PIN berhasil di ubah! Gunakan PIN baru untuk selanjutnya.";
$LANG["oldpinwr"]="PIN lama salah";
$LANG["oldpine"]="PIN lama";
$LANG["newpine"]="PIN Baru";
$LANG["testi"]="Testimonial";
$LANG["edittesti"]="Ubah Testimonial";


$LANG["testinfo1"]="Hapus Testimonial ini?";
$LANG["mxtesti"]="Maksimal posting testimonial adalah";
$LANG["updtesti"]="Testimonial berhasil di update";

$LANG["sbmtdtesti"]="Testimonial berhasil dibuat. Kami akan meninjau dahulu sebelum ditampilkan";
$LANG["addtesti"]="Tambahkan Testimonial";
$LANG["dtsp_joindate"]="Tanggal Join";
$LANG["levgen"]="Level Generasi";

$LANG["manonly"]="Halaman ini hanya untuk manager, silahkan upgrade keanggotaan anda menjadi manager.";


$LANG["walletbalance"]="Saldo";
$LANG["logof"]="Keluar";
$LANG["hist"]="Riwayat";
$LANG["respass"]="Lupa Password";
$LANG["sendto"]="Kirim ke";
$LANG["wltpassrest"]="Password ewallet telah berhasil di reset, cek inbox email atau hp anda sesuai pilihan pengiriman.";
$LANG["wltnewset"]="Anda tidak memiliki akun E-Walet, silakan membuat akun e-Wallet dengan mengisi form berikut.";
$LANG["wltusernf"]="Username yang anda masukan tidak ditemukan.";
$LANG["wltinvsd"]="Saldo Anda tidak mencukupi";
$LANG["wltinvsdx"]="Saldo Anda tidak mencukupi atau ada transaksi lain yang masih berstatus pending";
$LANG["wlttjtr"]="Akun Tujuan Transfer";
$LANG["wlttjml"]="Jumlah Transfer";
$LANG["wltnt"]="Keterangan";
$LANG["wltntinfo"]="Masukan user id ewallet penerima dana yang akan anda transfer";
$LANG["wltntinfo3"]="Anda tidak dapat transfer dari dan ke akun ewallet yang sama";
$LANG["wltntrscs"]="Dana sudah di transfer";
$LANG["wltrcpn"]="Nomor Kwitansi";



$LANG["tcktcd"]="Nomor Ticket";
$LANG["tcktfr"]="Dari";
$LANG["tckto"]="Untuk";
$LANG["tcktnw"]="Berita";
$LANG["tckt"]="Ticket";
$LANG["tckthist"]="Riwayat Transfer Ticket";
$LANG["tcktadd"]="Terima Kasih, Ticket sudah di tambahkan pada akun anda.";
$LANG["bnblnce"]="Saldo Bonus";
$LANG["tcktave"]="Jumlah Ticket";
$LANG["gticket"]="Ambil Ticket";
$LANG["numonly"]="Hanya Angka";
$LANG["transacc"]="Terima Kasih, Tiket telah berhasil di transfer";
$LANG["transsnt"]="Terima Kasih,Tiket telah berhasil di kirim";

$LANG["trnstct"]="Transfer Ticket antar member";
$LANG["senttct1"]="Kirim tiket ini ke email calon member";
$LANG["senttct2"]="Kirim tiket ini ke handphone calon member";
$LANG["mngronly"]="Fasilitas ini hanya untuk manager";
$LANG["mngupd"]="Upgrade ke Manager";
$LANG["tctnottrans"]="Tiket tidak bisa ditransfer karena sudah ditransfer sebelumnya";
$LANG["tctnottrans2"]="Tiket tidak bisa ditransfer karena sudah di gunakan";
$LANG["tctnotfnd"]="Ticket tidak di temukan";
$LANG["trnsto"]="Transfer ke User ID";
$LANG["trnsxx"]="TRANSFER TICKET";
$LANG["sendsxx"]="KIRIM TICKET";
$LANG["namercp"]="Nama Penerima";
$LANG["mailrcp"]="Email Penerima";
$LANG["hprcp"]="Nomor HP Penerima";
$LANG["send"]="Kirim";
$LANG["cancel"]="Batal";


$LANG["wldepo"]="Beli Saldo";
$LANG["rwldepo"]="Riwayat Beli Saldo";
$LANG["wlpschangesc"]="Password E-Wallet anda telah berhasil di ubah. Silahkan login dengan menggunakan password berikut";
$LANG["wlpschangesc2"]="Konfirmasi Password Salah";
$LANG["wlaccadd"]="Account E-Walet anda telah berhasil dibuat. Silahkan login dengan menggunakan username dan password berikut";


$LANG["wltransno"]="No. Transaksi";


$LANG["trnswalpend"]="Transaksi anda tidak dapat di proses karena transaksi anda yang sebelumnya masih pending";
$LANG["trnswalok"]="Order anda untuk penambahan saldo eWallet berhasil dikirim";
$LANG["trnswalok2"]="Silahkan lakukan pembayaran sesuai nilai penambahan yang anda minta";
$LANG["trnswalok3"]="Saldo E-Wallet anda akan segera di tambahkan";
$LANG["trnscde"]="Kode Transaksi";
$LANG["trnscnf"]="Konfirmasikan pembayaran Anda via SMS ke";
$LANG["trnscnf2"]="atau gunakan link konfirmasi berikut";


$LANG["passwltres"]="Reset Password E-Wallet";
$LANG["wpasswlt"]="Password E-Wallet Salah";
$LANG["crtewlt"]="Buat E-Wallet";


$LANG["memomsg"]="Pesan";
$LANG["memoin"]="Kotak Masuk";
$LANG["memoout"]="Kotak Keluar";
$LANG["memoadd"]="Kirim Pesan Baru";
$LANG["memodt"]="Detail Pesan";

$LANG["memodell"]="Hapus";

$LANG["memoinfo"]="Kirim pesan antar member";
$LANG["memohsdel"]="Pesan sudah dihapus";

$LANG["alrpross"]="Pesan ini sudah di proses";
$LANG["memsents"]="Pesan Anda sudah di kirim";
$LANG["memsents2"]="1 hari anda hanya di ijinkan mengirim 10 pesan";
$LANG["memsents3"]="Anda tidak dapat mengirim pesan ke diri anda sendiri";

$LANG["entpin"]="Masukan Kode PIN";
$LANG["dtsnd"]="Tanggal Kirim";
$LANG["mmreply"]="Balas";
$LANG["closee"]="Tutup";
$LANG["close"]="Tutup";
$LANG["edt"]="Ubah";

$LANG["memottladd"]="KIRIM PESAN";
$LANG["dtrg"]="Riwayat Pendaftaran";

$LANG["vwdetail"]="Lihat Detail";
$LANG["edtesti"]="Ubah Testimonial";

$LANG["repp54"]="Tinjau laporan ini";
$LANG["reppdle"]="Hapus Laporan Anda";
$LANG["reppdle2"]="Anda yakin akan menghapus laporan anda?";
$LANG["repprew"]="Peninjauan";
$LANG["repdates"]="Tanggal Laporan";
$LANG["ssct"]="Tersangka";
$LANG["reppt"]="Laporan";
$LANG["reppusty"]="Jenis Laporan";
$LANG["reppusrs"]="Alasan Laporan";
$LANG["reppusad"]="Buat Laporan";
$LANG["reppus"]="Laporkan User";
$LANG["reppaddst"]="Laporkan member yang melakukan penipuan atau kecurangan";
$LANG["reppross"]="Laporan ini sudah di kirim";
$LANG["reppross4"]="User ini sudah di laporkan sebelumnya, Anda dapat meninjau laporan tersebut";
$LANG["reppross2"]="Report has been successfully sent";
$LANG["reppross3"]="Anda tidak dapat melaporkan diri anda sendiri";
$LANG["repprepp"]="Jika anda adalah user yang dilaporkan, silahkan hubungi user yang telah melaporkan anda, sehingga user tersebut dapat menghapus laporannya.";
$LANG["reppreppu"]="Silahkan hubungi dan selesaikan permasalah anda dengan user yang telah membuat laporan ini, sehingga user tersebut dapat menghapus laporannya.";
$LANG["reppccc"]="Kirim email ke pelapor";
$LANG["reppyyy"]="Email anda";
$LANG["msgrepto"]="Pesan anda tidak terkirim karena anda sudah menghubungi pelapor sebelumnya sebanyak 3 kali";
$LANG["msgreptocs"]="TINJAU LAPORAN | NO. KASUS:";
$LANG["gmsgreptocs"]="Beri Tanggapan";
$LANG["right"]="Kanan";
$LANG["left"]="Kiri";
$LANG["midle"]="Tengah";
$LANG["genealogy"]="Pohon Jaringan";
$LANG["netree"]="Data Jaringan";
$LANG["clickfulmage"]="Klik untuk perbesar gambar ini";
$LANG["regaddnw"]="Daftarkan member baru di posisi ini";
$LANG["midlerr"]="Posisi ini terkunci, untuk mengisi posisi ini silakan mengisi kiri dan kanan terlebih dahulu";
$LANG["tgldftr"]="Bergabung";
$LANG["waitt"]="Menunggu";
$LANG["viewgnlg"]="Lihat Pohon Jaringan";
$LANG["netwr"]="Jaringan";
$LANG["regisdftr"]="Pendaftaran";
$LANG["regisdftr1"]="Riwayat Pendaftaran";
$LANG["regisdftr2"]="Tambahkan Member";
$LANG["cnfrmhist"]="Riwayat Konfirmasi";
$LANG["tckthist2"]="Riwayat Transfer Ticket";

$LANG["regscsfl"]="Pendaftaran anda telah berhasil";
$LANG["regscsfl2"]="Anda telah mendaftarkan member baru";
$LANG["noactiveall2"] = "Kami telah mengirimkan link aktivasi ke email dan kode aktifasi ke handphone member yang anda daftarkan. Silahkan lakukan cek dan validasi.";
$LANG["sendvalidation2"] = "Link validasi sudah dikirim ke email member yang anda daftarkan, silahkan cek email dan lakukan validasi.";
$LANG["sendsm2s"] = "Kode Verifikasi telah dikirimkan ke nomor handphone member yang anda daftarkan, silahkan cek inbox dan lakukan verifikasi";


$LANG["contrbadd"]="yang anda buat telah berhasil disimpan. Silakan tunggu beberapa hari, sistem kami otomatis akan mencarikan pasangan untuk anda dan mengirim instruksi untuk transfer";
$LANG["tcetntfound"]="Tiket Anda kosong";
$LANG["tcetslct"]="Pilih Tiket";
$LANG["tcet3t"]="Anda tidak memiliki tiket untuk melakukan";
$LANG["tcet4st"]="Untuk mendapatkan tiket, silahkan kontak pengelola atau stockis atau lakukan pembelian tiket langsung";
$LANG["ordrpdk"]="Transaksi ini sudah pernah di proses";
$LANG["ordrp"]="Beli";
$LANG["ordrph"]="Harga";
$LANG["ordrpj"]="Jumlah";
$LANG["blitiket"]="Beli Tiket";


$LANG["phsts1"]="Investasi anda sedag berjalan";
$LANG["phsts2"]="Minimal";
$LANG["phsts3"]="Jika investasi anda sudah berjalan";
$LANG["day"]="hari";
                
       
$LANG["phsts4"]="Anda tidak memiliki deposit investasi";
$LANG["please"]="Silahkan";
$LANG["phsts5"]="untuk menambahkan deposit investasi, atau jika anda sudah melakukan";
$LANG["phsts6"]="silahkan proses";

$LANG["phsts7"]="Anda sebelumnya";
$LANG["phsts8"]="belum selesai di proses";
$LANG["phsts9"]="Anda dapat melakukan";
$LANG["phsts10"]="lagi setelah";
$LANG["phsts11"]="selesai di proses";
$LANG["blncempt"]="Saldo Anda tidak mencukupi! Maksimal nilai";
            
       
$LANG["minsm"]="Minimal Nilai";
$LANG["entermount"]="Masukan Nilai";   
$LANG["pendingphb"] = "Anda masih memiliki {gh} yang belum selesai di proses, Anda tidak dapat melakukan {ph} untuk saat ini.";
?>
<?php ob_flush(); ?>