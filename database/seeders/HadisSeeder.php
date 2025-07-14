<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HadisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hadists')->insert([
            [
                'no_hadist'   => 1,
                'isi_hadist'  => 'Sesungguhnya amal itu tergantung pada niatnya, dan sesungguhnya setiap orang akan mendapatkan sesuai dengan niatnya.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 42,  // Umar bin Khattab
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2,
                'isi_hadist'  => 'Rasulullah bersabda: “Islam dibangun di atas lima perkara: syahadat, salat, zakat, puasa, dan haji.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5,
                'isi_hadist'  => 'Iman itu terdiri atas lebih dari enam puluh cabang. Yang paling utama adalah Laa ilaaha illallah, dan yang paling rendah adalah menyingkirkan duri dari jalan.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 14,
                'isi_hadist'  => 'Bersuci adalah sebagian dari iman. Alhamdulillah memenuhi timbangan, dan subhanallah walhamdulillah memenuhi apa yang ada antara langit dan bumi.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 12,  // Abu Malik Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 35,
                'isi_hadist'  => 'Rasulullah bersabda: “Salat yang paling berat bagi orang munafik adalah salat Isya dan Subuh.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 45,
                'isi_hadist'  => 'Saya bertanya kepada Nabi, “Amal apakah yang paling dicintai oleh Allah?” Beliau menjawab, “Salat tepat pada waktunya.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 60,
                'isi_hadist'  => 'Rasulullah bersabda: “Tidak ada hari di mana para hamba berada pada pagi hari melainkan ada dua malaikat yang turun…”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 65,
                'isi_hadist'  => 'Tangan yang di atas lebih baik daripada tangan yang di bawah. Mulailah dari orang yang menjadi tanggunganmu.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 14,  // Abu Musa al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 80,
                'isi_hadist'  => 'Rasulullah bersabda: “Setiap amal anak Adam dilipatgandakan, satu kebaikan menjadi sepuluh sampai tujuh ratus kali lipat.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 85,
                'isi_hadist'  => 'Siapa yang berpuasa satu hari di jalan Allah, maka Allah akan menjauhkan wajahnya dari neraka sejauh 70 tahun.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 16,  // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 100,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya haji mabrur itu tidak ada balasan baginya kecuali surga.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 105,
                'isi_hadist'  => 'Nabi bersabda: “Ambillah dariku tata cara pelaksanaan haji kalian.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 120,
                'isi_hadist'  => 'Rasulullah bersabda: “Seutama-utama jihad adalah berkata benar di hadapan penguasa yang zalim.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 125,
                'isi_hadist'  => 'Seseorang bertanya, “Ya Rasulullah, seseorang berperang karena keberanian, fanatisme, dan riya, manakah yang di jalan Allah?” Beliau menjawab, “Siapa yang berperang agar kalimat Allah tinggi, maka ia di jalan Allah.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 14,  // Abu Musa al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 140,
                'isi_hadist'  => 'Rasulullah bersabda: “Wahai para pemuda, siapa di antara kalian yang mampu menikah maka menikahlah, karena menikah itu lebih menundukkan pandangan dan lebih menjaga kemaluan.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
	    [
                'no_hadist'   => 145,
                'isi_hadist'  => 'Seorang wanita dinikahi karena empat perkara: hartanya, keturunannya, kecantikannya, dan agamanya. Pilihlah yang beragama, kamu akan beruntung.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 160,
                'isi_hadist'  => 'Rasulullah bersabda: “Penjual dan pembeli memiliki hak pilih selama mereka belum berpisah. Jika keduanya jujur, maka transaksi mereka diberkahi.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 24,  // Hakim bin Hizam
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 165,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa menipu kami, maka ia bukan dari golongan kami.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 180,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya Allah telah memberikan bagian warisan kepada setiap ahli waris, maka tidak ada wasiat bagi ahli waris.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 34,  // Sa’ad bin Abi Waqqash
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 185,
                'isi_hadist'  => 'Rasulullah bersabda: “Berikan wasiat tidak lebih dari sepertiga, dan sepertiga itu pun sudah banyak.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 200,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa yang beriman kepada Allah dan hari akhir, hendaklah ia berkata baik atau diam.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 205,
                'isi_hadist'  => 'Rasulullah bukanlah seorang yang suka berkata keji, tidak melaknat, dan tidak mencaci maki.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 220,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa menempuh jalan untuk mencari ilmu, maka Allah akan mudahkan baginya jalan menuju surga.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 9,   // Abu Darda’
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 225,
                'isi_hadist'  => 'Perumpamaan hidayah dan ilmu yang dibawa oleh Nabi seperti hujan yang turun di atas bumi.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 14,  // Abu Musa al-Asy\'ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 240,
                'isi_hadist'  => 'Rasulullah bersabda: “Doa seorang muslim tidak akan tertolak, selama tidak berdoa untuk dosa atau memutus silaturahmi.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 245,
                'isi_hadist'  => 'Sesungguhnya Tuhan kalian adalah Maha Hidup dan Maha Mulia, Dia malu jika hamba-Nya menengadahkan tangan lalu kembali kosong.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 37,  // Salman Al-Farisi
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 260,
                'isi_hadist'  => 'Rasulullah bersabda: “Dua kalimat yang ringan di lisan, berat dalam timbangan, dan dicintai Allah: Subhanallah wa bihamdihi, Subhanallahil ‘azhim.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 265,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya aku beristighfar kepada Allah seratus kali dalam sehari.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 280,
                'isi_hadist'  => 'Rasulullah bersabda: “Semua telah ditakdirkan, bahkan posisi duduk seseorang di surga atau neraka.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 2,   // Abdullah bin Amr bin al-As
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 285,
                'isi_hadist'  => 'Seandainya Allah menghukum seluruh penduduk langit dan bumi, maka Dia tidak zalim kepada mereka.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 20,  // Ali bin Abi Thalib
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
	        [
                'no_hadist'   => 300,
                'isi_hadist'  => 'Rasulullah bersabda: “Surga dikelilingi oleh hal-hal yang tidak disukai, dan neraka dikelilingi oleh syahwat.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 305,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang terakhir yang masuk surga adalah seseorang yang merangkak keluar dari neraka…”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 16,  // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 320,
                'isi_hadist'  => 'Tidak akan terjadi kiamat hingga waktu terasa semakin singkat, setahun seperti sebulan, sebulan seperti seminggu.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 325,
                'isi_hadist'  => 'Rasulullah bersabda: “Di antara tanda kiamat adalah orang-orang bodoh dijadikan pemimpin.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 340,
                'isi_hadist'  => 'Rasulullah bersabda: “Sebaik-baik manusia adalah generasiku, kemudian yang sesudah mereka, lalu yang sesudah mereka.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 345,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya perumpamaan petunjuk yang Allah berikan padaku dan apa yang kubawa adalah seperti hujan…”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 14,  // Abu Musa al-Asy\'ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 360,
                'isi_hadist'  => 'Rasulullah bersabda: “Amanah itu diturunkan dalam hati manusia, lalu mereka belajar dari Al-Qur\'an dan Sunnah.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 25,  // Hudzaifah bin Yaman
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 365,
                'isi_hadist'  => 'Rasulullah bersabda: “Tanda orang munafik ada tiga: apabila berbicara berdusta, apabila berjanji mengingkari, apabila dipercaya berkhianat.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 380,
                'isi_hadist'  => 'Rasulullah bersabda: “Aku diutus menjelang hari kiamat seperti dua jari ini (sambil menunjukkan jari telunjuk dan tengah).”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 385,
                'isi_hadist'  => 'Rasulullah bersabda: “Aku adalah penutup para nabi. Tidak ada nabi setelahku.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 400,
                'isi_hadist'  => 'Rasulullah bersabda: “Bertakwalah kepada Allah di manapun kamu berada. Ikutilah keburukan dengan kebaikan.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 405,
                'isi_hadist'  => 'Kekayaan bukanlah banyaknya harta, tetapi kekayaan adalah hati yang selalu merasa cukup.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 420,
                'isi_hadist'  => 'Tidak sempurna iman seseorang sampai ia mencintai saudaranya seperti ia mencintai dirinya sendiri.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 425,
                'isi_hadist'  => 'Janganlah kalian saling membenci, saling memutuskan, atau saling membelakangi. Jadilah hamba Allah yang bersaudara.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 440,
                'isi_hadist'  => 'Kejujuran membawa kepada kebaikan dan kebaikan membawa ke surga. Dan seseorang terus jujur hingga ditulis di sisi Allah sebagai orang jujur.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 445,
                'isi_hadist'  => 'Celakalah orang yang berbicara dengan satu ucapan untuk membuat orang tertawa, padahal itu adalah dusta.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 460,
                'isi_hadist'  => 'Jangan kamu meremehkan kebaikan sekecil apa pun, walaupun hanya bertemu saudaramu dengan wajah ceria.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 19,  // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 465,
                'isi_hadist'  => 'Setiap ruas tulang manusia wajib disedekahkan setiap harinya. Menyingkirkan gangguan dari jalan termasuk sedekah.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 480,
                'isi_hadist'  => 'Rasulullah bukanlah orang yang berkata kotor atau keji. Beliau bersabda: “Orang terbaik di antara kalian adalah yang paling baik akhlaknya.”',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 2,   // Abdullah bin Amr
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 485,
                'isi_hadist'  => 'Aku belum pernah menyentuh kain sutra sehalus telapak tangan Rasulullah, dan tidak ada akhlak yang lebih baik dari beliau.',
                'kitab_id'    => 1,   // Shahih Muslim
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 500,
                'isi_hadist'  => 'Aku adalah anak kecil di rumah Nabi. Tanganku menjalar ke segala arah, lalu Nabi bersabda: “Wahai anak, sebut nama Allah, makan dengan tangan kananmu, dan makan dari yang dekat denganmu.”',
                'kitab_id'    => 1,
                'perawi_id'   => 38,   // Umar bin Abu Salamah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 505,
                'isi_hadist'  => 'Rasulullah melarang bernafas dalam bejana saat minum.',
                'kitab_id'    => 1,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 520,
                'isi_hadist'  => 'Rasulullah jika hendak tidur membaca: “Bismika Allahumma ahya wa amuut.”',
                'kitab_id'    => 1,
                'perawi_id'   => 25,   // Hudzaifah bin Yaman
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 525,
                'isi_hadist'  => 'Rasulullah biasa tidur sebelum Isya dan bangun di akhir malam untuk salat.',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 540,
                'isi_hadist'  => 'Demi Allah, tidak beriman orang yang tetangganya tidak merasa aman dari gangguannya.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 545,
                'isi_hadist'  => 'Jibril terus-menerus mewasiatkan tentang tetangga kepadaku, sampai aku mengira ia akan mewariskannya.',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 560,
                'isi_hadist'  => 'Janganlah kalian saling iri, saling menipu, saling benci, saling membelakangi, dan jangan menjual di atas penjualan saudaranya.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 565,
                'isi_hadist'  => 'Rasulullah bersabda: “Jangan kalian saling membenci, karena itu akan memakan amal kalian seperti api membakar kayu.”',
                'kitab_id'    => 1,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 580,
                'isi_hadist'  => 'Tidaklah seorang muslim ditimpa kelelahan, penyakit, kegelisahan, kesedihan, gangguan, bahkan duri, melainkan Allah menghapus dosanya karenanya.',
                'kitab_id'    => 1,
                'perawi_id'   => 16,   // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 585,
                'isi_hadist'  => 'Aku tidak pernah melihat seseorang yang lebih sabar menghadapi rasa sakit daripada Rasulullah.',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 600,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya Allah membuka tangan-Nya pada malam hari untuk menerima taubat orang yang berbuat dosa di siang hari.”',
                'kitab_id'    => 1,
                'perawi_id'   => 14,   // Abu Musa al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 605,
                'isi_hadist'  => 'Allah lebih bergembira dengan taubat hamba-Nya daripada seseorang yang menemukan kembali untanya yang hilang di padang pasir.',
                'kitab_id'    => 1,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 620,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya Allah tidak melihat rupa kalian dan harta kalian, tetapi Dia melihat hati dan amal kalian.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 625,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang yang hijrah karena dunia yang ingin diperolehnya atau wanita yang ingin dinikahinya, maka hijrahnya itu sesuai dengan niatnya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 640,
                'isi_hadist'  => 'Rasulullah bersabda: “Ada tujuh golongan yang akan mendapat naungan Allah... di antaranya dua orang yang saling mencintai karena Allah.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 645,
                'isi_hadist'  => 'Aku mendengar Rasulullah bersabda: “Allah berfirman: Wajib bagi-Ku mencintai orang-orang yang saling mencintai karena Aku.”',
                'kitab_id'    => 1,
                'perawi_id'   => 31,   // Mu’adz bin Jabal
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 660,
                'isi_hadist'  => 'Siapa yang beriman kepada Allah dan hari akhir, hendaklah berkata yang baik atau diam.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 665,
                'isi_hadist'  => 'Aku berkata, “Wahai Rasulullah, apakah yang paling engkau khawatirkan dariku?” Beliau memegang lidahnya dan berkata, “Ini.”',
                'kitab_id'    => 1,
                'perawi_id'   => 36,   // Sufyan bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 680,
                'isi_hadist'  => 'Rasulullah bersabda: “Wahai Abu Dzar, engkau lemah, dan kepemimpinan adalah amanah...”',
                'kitab_id'    => 1,
                'perawi_id'   => 10,   // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 685,
                'isi_hadist'  => 'Rasulullah bersabda: “Setiap kalian adalah pemimpin, dan setiap pemimpin akan dimintai pertanggungjawaban atas kepemimpinannya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
	        [
                'no_hadist'   => 700,
                'isi_hadist'  => 'Rasulullah bersabda: “Maukah kalian aku beritahu dosa yang paling besar? Syirik kepada Allah dan durhaka kepada orang tua, dan bersaksi palsu.”',
                'kitab_id'    => 1,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 705,
                'isi_hadist'  => 'Tidak ada dosa yang lebih cepat mendatangkan hukuman di dunia selain kezaliman dan memutuskan silaturahmi.',
                'kitab_id'    => 1,
                'perawi_id'   => 8,    // Abu Bakrah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 720,
                'isi_hadist'  => 'Silaturahmi mempercepat datangnya rezeki dan memanjangkan umur.',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 725,
                'isi_hadist'  => 'Jangan memutus silaturahmi, karena yang memutuskannya tidak akan masuk surga.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 740,
                'isi_hadist'  => 'Tahukah kalian apa itu ghibah? Mereka menjawab, “Allah dan Rasul-Nya yang lebih tahu.” Beliau bersabda: “Engkau menyebutkan tentang saudaramu sesuatu yang ia benci.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 745,
                'isi_hadist'  => 'Kami pernah duduk bersama Nabi, lalu ada orang lewat. Salah satu dari kami berkata buruk tentangnya. Nabi bersabda: “Kamu telah memakan dagingnya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 760,
                'isi_hadist'  => 'Hak muslim atas muslim lainnya ada enam: jika bertemu, ucapkan salam; jika diundang, penuhi; jika minta nasihat, nasihati; jika bersin dan memuji Allah, doakan; jika sakit, jenguk; jika meninggal, iringi jenazahnya.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 765,
                'isi_hadist'  => 'Perumpamaan orang mukmin dalam cinta dan kasih sayang ibarat satu tubuh. Jika satu anggota sakit, seluruh tubuh ikut merasakannya.',
                'kitab_id'    => 1,
                'perawi_id'   => 14,   // Abu Musa al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 780,
                'isi_hadist'  => 'Akan datang masa fitnah seperti potongan malam gelap gulita. Seseorang di pagi hari beriman, lalu sore harinya menjadi kafir.',
                'kitab_id'    => 1,
                'perawi_id'   => 25,   // Hudzaifah bin Yaman
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 785,
                'isi_hadist'  => 'Akan datang kepada manusia suatu zaman, di mana orang yang berpegang pada agamanya seperti menggenggam bara api.',
                'kitab_id'    => 1,
                'perawi_id'   => 2,    // Abdullah bin Amr
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 800,
                'isi_hadist'  => 'Rasulullah bersabda: “Wahai manusia, sebarkan salam, berilah makan, sambung silaturahmi, dan salatlah di malam hari ketika orang lain tidur, niscaya kalian masuk surga dengan selamat.”',
                'kitab_id'    => 1,
                'perawi_id'   => 5,    // Abdullah bin Salam
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 805,
                'isi_hadist'  => 'Rasulullah bangun malam hingga kakinya bengkak. Aku bertanya, “Mengapa engkau lakukan ini padahal dosamu telah diampuni?” Beliau menjawab, “Tidak bolehkah aku menjadi hamba yang bersyukur?”',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 820,
                'isi_hadist'  => 'Rasulullah tidak pernah diminta sesuatu lalu beliau berkata “tidak”.',
                'kitab_id'    => 1,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 825,
                'isi_hadist'  => 'Tangan di atas lebih baik daripada tangan di bawah. Mulailah dari orang yang menjadi tanggunganmu.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 840,
                'isi_hadist'  => 'Rasulullah bersabda menjelang wafatnya: “Salat, salat, dan orang-orang yang menjadi tanggungan kalian.”',
                'kitab_id'    => 1,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 845,
                'isi_hadist'  => 'Ketika Rasulullah wafat, kepalanya berada di antara dada dan leherku.',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 860,
                'isi_hadist'  => 'Rasulullah bersabda: “Bacalah Al-Qur\'an, karena ia akan datang pada hari kiamat sebagai pemberi syafaat bagi para pembacanya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 17,   // Abu Umamah Al-Bahili
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 865,
                'isi_hadist'  => 'Rasulullah bersabda: “Perumpamaan orang mukmin yang membaca Al-Qur’an seperti buah utrujah; baunya harum dan rasanya enak.”',
                'kitab_id'    => 1,
                'perawi_id'   => 14,   // Abu Musa al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 880,
                'isi_hadist'  => 'Jauhilah tujuh dosa besar: syirik, sihir, membunuh, riba, memakan harta anak yatim, lari dari perang, dan menuduh wanita suci berzina.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 885,
                'isi_hadist'  => 'Siapa yang bertobat sebelum matahari terbit dari barat, maka Allah akan menerima taubatnya.',
                'kitab_id'    => 1,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 900,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa yang berwudhu seperti wudhuku ini, kemudian salat dua rakaat dengan khusyuk, maka diampuni dosanya yang telah lalu.”',
                'kitab_id'    => 1,
                'perawi_id'   => 43,   // Utsman bin Affan
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 905,
                'isi_hadist'  => 'Apabila seorang hamba muslim atau mukmin berwudhu dan membasuh wajahnya, maka keluarlah setiap dosa yang dilihat matanya bersama air...',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 920,
                'isi_hadist'  => 'Tidak akan masuk surga orang yang di dalam hatinya terdapat kesombongan walau sebesar biji sawi.',
                'kitab_id'    => 1,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 925,
                'isi_hadist'  => 'Allah tidak melihat kepada rupa dan harta kalian, tetapi melihat kepada hati dan amal kalian.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 940,
                'isi_hadist'  => 'Yang halal itu jelas, yang haram itu jelas, dan di antara keduanya ada yang syubhat. Barang siapa menjaga diri dari syubhat, maka ia telah menjaga agama dan kehormatannya.',
                'kitab_id'    => 1,
                'perawi_id'   => 33,   // Nu’man bin Basyir
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 945,
                'isi_hadist'  => 'Rasulullah bersabda: “Setiap daging yang tumbuh dari yang haram, maka neraka lebih berhak atasnya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 960,
                'isi_hadist'  => 'Sesungguhnya orang yang paling aku cintai dan paling dekat tempat duduknya dariku di hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 1,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 965,
                'isi_hadist'  => 'Rasulullah bersabda: “Seorang muslim adalah orang yang tidak mengganggu muslim lainnya dengan lisan dan tangannya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 980,
                'isi_hadist'  => 'Tanda orang munafik itu ada tiga: jika berbicara berdusta, jika berjanji mengingkari, jika dipercaya berkhianat.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 985,
                'isi_hadist'  => 'Rasulullah bersabda: “Empat perkara, siapa yang memilikinya maka ia adalah munafik sejati: jika berbicara berdusta, jika berjanji mengingkari, jika berjanji berkhianat, dan jika berselisih ia curang.”',
                'kitab_id'    => 1,
                'perawi_id'   => 2,    // Abdullah bin Amr
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
	        [
                'no_hadist'   => 1100,
                'isi_hadist'  => 'Rasulullah bersabda: “Wahai hamba-Ku, sesungguhnya Aku telah mengharamkan kezaliman atas diri-Ku dan atas kalian, maka janganlah kalian saling menzalimi.”',
                'kitab_id'    => 1,    // Shahih Muslim
                'perawi_id'   => 10,   // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1105,
                'isi_hadist'  => 'Takutlah kalian terhadap doa orang yang dizalimi, karena tidak ada hijab antara dia dan Allah.',
                'kitab_id'    => 1,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1120,
                'isi_hadist'  => 'Aku bertanya, “Amal apa yang paling dicintai Allah?” Nabi menjawab: “Salat tepat waktu.” Aku bertanya lagi, “Lalu apa?” Nabi menjawab: “Berbakti kepada orang tua.”',
                'kitab_id'    => 1,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1125,
                'isi_hadist'  => 'Celakalah, celakalah, celakalah! Lalu ditanya: “Siapa wahai Rasulullah?” Beliau menjawab: “Orang yang mendapati kedua orang tuanya dalam usia lanjut namun tidak membuatnya masuk surga.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1140,
                'isi_hadist'  => 'Aku dan orang yang menanggung anak yatim di surga seperti ini — beliau mengisyaratkan dengan jari telunjuk dan tengah, serta merenggangkan keduanya.',
                'kitab_id'    => 1,
                'perawi_id'   => 35,   // Sahl bin Sa’ad
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1145,
                'isi_hadist'  => 'Rasulullah bersabda: “Sebaik-baik rumah adalah rumah yang di dalamnya ada anak yatim yang dimuliakan.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1160,
                'isi_hadist'  => 'Janganlah kalian saling hasad, saling membenci, saling mendengki, dan jadilah hamba-hamba Allah yang bersaudara.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1165,
                'isi_hadist'  => 'Jangan kalian saling bersaing dalam dunia, niscaya kalian akan saling mencintai.',
                'kitab_id'    => 1,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1180,
                'isi_hadist'  => 'Ibadah di masa penuh fitnah seperti berhijrah kepadaku.',
                'kitab_id'    => 1,
                'perawi_id'   => 29,   // Ma’qil bin Yasar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1185,
                'isi_hadist'  => 'Segeralah beramal sebelum datang fitnah seperti potongan malam gelap.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1200,
                'isi_hadist'  => 'Orang yang adil akan berada di sisi Allah pada mimbar dari cahaya, yaitu mereka yang berlaku adil dalam hukum dan keluarga.',
                'kitab_id'    => 1,
                'perawi_id'   => 2,    // Abdullah bin Amr
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1205,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dibenci Allah adalah orang yang keras kepala dalam perdebatan.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1220,
                'isi_hadist'  => 'Sesungguhnya kamu tidak menafkahkan sesuatu karena mengharap ridha Allah kecuali akan diberi pahala, termasuk sesuap makanan ke mulut istrimu.',
                'kitab_id'    => 1,
                'perawi_id'   => 34,   // Sa’ad bin Abi Waqqash
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1225,
                'isi_hadist'  => 'Rasulullah bersabda: “Jika seorang memberi nafkah kepada keluarganya dengan niat karena Allah, maka itu adalah sedekah.”',
                'kitab_id'    => 1,
                'perawi_id'   => 13,   // Abu Mas’ud Al-Badri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1240,
                'isi_hadist'  => 'Bukan dari golongan kami siapa yang tidak menyayangi yang muda dan tidak menghormati yang tua.',
                'kitab_id'    => 1,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1245,
                'isi_hadist'  => 'Memuliakan orang beruban karena Islam adalah bagian dari memuliakan Allah.',
                'kitab_id'    => 1,
                'perawi_id'   => 14,   // Abu Musa al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1260,
                'isi_hadist'  => 'Janganlah salah satu dari kalian menahan bau masakannya dari tetangganya, atau mencela rezeki yang Allah berikan.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1265,
                'isi_hadist'  => 'Rasulullah bersabda: “Tetangga itu tiga: yang memiliki satu hak, dua hak, dan tiga hak…”',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1280,
                'isi_hadist'  => 'Barang siapa membaca Laa ilaaha illallah wahdahu laa syariikalah... 100x, maka akan mendapat pahala seperti memerdekakan 10 budak.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1285,
                'isi_hadist'  => 'Rasulullah bersabda: “Bacalah Qul Huwallahu Ahad, dan dua mu’awwidzatain tiga kali pagi dan petang, itu akan mencukupimu.”',
                'kitab_id'    => 1,
                'perawi_id'   => 7,    // Abdullah bin Khubaib
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1300,
                'isi_hadist'  => 'Rasulullah bersabda: “Tiada amal yang lebih menyelamatkan dari azab Allah selain dzikir kepada-Nya.”',
                'kitab_id'    => 1,    // Shahih Muslim
                'perawi_id'   => 31,   // Mu’adz bin Jabal
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1305,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang yang berdzikir kepada Allah dan yang tidak, ibarat orang hidup dan mati.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1320,
                'isi_hadist'  => 'Aku berkata, “Ya Rasulullah, ajarkan aku doa saat musibah.” Lalu beliau ajarkan: “Ya Allah, beri aku pahala dalam musibahku dan gantikan yang lebih baik.”',
                'kitab_id'    => 1,
                'perawi_id'   => 41,   // Ummu Salamah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1325,
                'isi_hadist'  => 'Seorang sahabat bertanya, “Siapakah orang yang paling berat cobaannya?” Rasulullah menjawab, “Para nabi, lalu yang serupa dengannya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 16,   // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1340,
                'isi_hadist'  => 'Rasulullah bersabda: “Aku tidak makan kenyang tiga hari berturut-turut hingga aku wafat.”',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1345,
                'isi_hadist'  => 'Lihatlah orang yang di bawah kalian, jangan yang di atas kalian, agar kalian tidak meremehkan nikmat Allah.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1360,
                'isi_hadist'  => 'Siapa yang melapangkan kesulitan seorang mukmin di dunia, Allah akan melapangkannya di akhirat.',
                'kitab_id'    => 1,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1365,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya; ia tidak menzhaliminya dan tidak menyerahkannya.',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1380,
                'isi_hadist'  => 'Ketahuilah bahwa dalam tubuh ada segumpal daging, jika baik maka baik seluruh tubuh, itulah hati.',
                'kitab_id'    => 1,
                'perawi_id'   => 33,   // Nu’man bin Basyir
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1385,
                'isi_hadist'  => 'Hati manusia berada di antara dua jari dari jari-jari Tuhan Yang Maha Pengasih.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1400,
                'isi_hadist'  => 'Apabila tiga orang keluar dalam perjalanan, hendaklah mereka menunjuk salah satunya sebagai pemimpin.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1405,
                'isi_hadist'  => 'Rasulullah bersabda: “Jika kalian bepergian bersama, maka jangan pulang tiba-tiba di malam hari agar tidak mengejutkan keluarga.”',
                'kitab_id'    => 1,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1420,
                'isi_hadist'  => 'Ada dua nikmat yang banyak manusia tertipu: kesehatan dan waktu luang.',
                'kitab_id'    => 1,
                'perawi_id'   => 1,    // Ibn Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1425,
                'isi_hadist'  => 'Rasulullah bersabda: “Gunakan lima perkara sebelum lima: masa muda, sehat, kaya, waktu luang, dan hidup sebelum mati.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1440,
                'isi_hadist'  => 'Rasulullah memuliakan Zaid sebagai penulis wahyu dan ahli ilmu, beliau pernah menyuruh sahabat belajar darinya.',
                'kitab_id'    => 1,
                'perawi_id'   => 45,   // Zaid bin Tsabit
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1445,
                'isi_hadist'  => 'Rasulullah bersabda: “Pelajarilah Al-Qur’an dari empat orang: Abdullah bin Mas’ud, Salim, Mu’adz, dan Ubay.”',
                'kitab_id'    => 1,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1460,
                'isi_hadist'  => 'Jangan engkau menghina seorang mukmin, karena tidak ada yang tahu akhir hidupnya.',
                'kitab_id'    => 1,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1465,
                'isi_hadist'  => 'Rasulullah bersabda: “Cukuplah seseorang berdosa bila ia meremehkan saudaranya sesama muslim.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1480,
                'isi_hadist'  => 'Orang yang berjalan untuk menuntut ilmu, maka Allah akan mudahkan jalannya menuju surga.',
                'kitab_id'    => 1,
                'perawi_id'   => 9,    // Abu Darda’
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1485,
                'isi_hadist'  => 'Seorang ulama lebih utama dari ahli ibadah seperti bulan purnama di tengah bintang.',
                'kitab_id'    => 1,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1500,
                'isi_hadist'  => 'Siapa yang menjaga salat sunnah 12 rakaat dalam sehari, akan dibangunkan rumah di surga.',
                'kitab_id'    => 1,
                'perawi_id'   => 40,   // Ummu Habibah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1505,
                'isi_hadist'  => 'Rasulullah tidak pernah meninggalkan dua rakaat sebelum Subuh, walau dalam perjalanan.',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1520,
                'isi_hadist'  => 'Ilmu akan diangkat, dan fitnah akan muncul, sehingga orang-orang bodoh dijadikan pemimpin dan ditanya soal agama.',
                'kitab_id'    => 1,
                'perawi_id'   => 14,   // Abu Musa al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1525,
                'isi_hadist'  => 'Akan datang suatu masa, orang bodoh berbicara tentang agama tanpa ilmu.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1540,
                'isi_hadist'  => 'Barang siapa mandi pada hari Jumat, lalu pergi dengan awal waktu, seakan ia berkurban seekor unta.',
                'kitab_id'    => 1,
                'perawi_id'   => 37,   // Salman Al-Farisi
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1545,
                'isi_hadist'  => 'Rasulullah menyebut hari Jumat sebagai hari terbaik di mana Adam diciptakan dan wafat.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1560,
                'isi_hadist'  => 'Jangan kalian duduk di tengah majlis dan jangan pisahkan dua orang tanpa izin mereka.',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Ibn Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1565,
                'isi_hadist'  => 'Rasulullah melarang seseorang menyingkirkan orang lain dari tempat duduknya lalu duduk di sana.',
                'kitab_id'    => 1,
                'perawi_id'   => 16,   // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1580,
                'isi_hadist'  => 'Pemimpin adalah pelayan bagi rakyatnya, dan ia bertanggung jawab atas mereka.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1585,
                'isi_hadist'  => 'Tidaklah seorang pemimpin menipu rakyatnya, kecuali ia diharamkan masuk surga.',
                'kitab_id'    => 1,
                'perawi_id'   => 2,    // Abdullah bin Amr
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
	        [
                'no_hadist'   => 1600,
                'isi_hadist'  => 'Orang kuat bukanlah yang menang dalam gulat, melainkan yang mampu menahan amarahnya.',
                'kitab_id'    => 1,    // Shahih Muslim
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1605,
                'isi_hadist'  => 'Rasulullah bersabda: “Maukah aku tunjukkan siapa yang diharamkan Allah dari neraka? Yaitu setiap orang yang lembut, santun, dan dekat dengan orang.”',
                'kitab_id'    => 1,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1620,
                'isi_hadist'  => 'Penjual dan pembeli memiliki hak memilih selama mereka belum berpisah, jika jujur diberkahi.',
                'kitab_id'    => 1,
                'perawi_id'   => 24,   // Hakim bin Hizam
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1625,
                'isi_hadist'  => 'Pedagang yang jujur dan amanah akan bersama para nabi, orang benar, dan para syuhada.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1640,
                'isi_hadist'  => 'Rasulullah bersabda: “Seorang muslim adalah yang tidak menyakiti muslim lainnya dengan lisan dan tangannya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 14,   // Abu Musa al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1645,
                'isi_hadist'  => 'Siapa yang menghilangkan gangguan dari jalan, maka Allah akan membangunkan rumah di surga untuknya.',
                'kitab_id'    => 1,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1660,
                'isi_hadist'  => 'Rasulullah bersabda: “Perbanyaklah mengingat pemutus segala kelezatan, yaitu kematian.”',
                'kitab_id'    => 1,
                'perawi_id'   => 22,   // Buraidah bin Al-Hushaib
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1665,
                'isi_hadist'  => 'Kubur adalah taman dari taman-taman surga atau lubang dari lubang-lubang neraka.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1680,
                'isi_hadist'  => 'Islam dibangun atas lima perkara, di antaranya menunaikan zakat.',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1685,
                'isi_hadist'  => 'Rasulullah bersabda: “Hartamu ada haknya selain zakat.”',
                'kitab_id'    => 1,
                'perawi_id'   => 10,   // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1700,
                'isi_hadist'  => 'Rasulullah melarang laki-laki memakai emas dan sutra.',
                'kitab_id'    => 1,
                'perawi_id'   => 1,    // Ibn Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1705,
                'isi_hadist'  => 'Allah tidak melihat kepada orang yang menyeret pakaiannya karena sombong.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1720,
                'isi_hadist'  => 'Iman memiliki lebih dari 70 cabang, dan yang tertinggi adalah Laa ilaaha illallah.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1725,
                'isi_hadist'  => 'Tidak sempurna iman seseorang sampai ia mencintai saudaranya sebagaimana ia mencintai dirinya.',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1740,
                'isi_hadist'  => 'Rasulullah mengajarkan: “Sebut nama Allah, makan dengan tangan kanan, dan makan dari yang terdekat.”',
                'kitab_id'    => 1,
                'perawi_id'   => 39,   // Umar bin Abi Salamah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1745,
                'isi_hadist'  => 'Rasulullah tidak pernah mencela makanan. Jika menyukainya dimakan, jika tidak ditinggalkan.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1760,
                'isi_hadist'  => 'Rasulullah bersabda: “Wahai pemuda, barang siapa mampu menikah, maka menikahlah.”',
                'kitab_id'    => 1,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1765,
                'isi_hadist'  => 'Rasulullah bersabda: “Menikah adalah sunahku, siapa yang membenci sunahku bukan dari golonganku.”',
                'kitab_id'    => 1,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1780,
                'isi_hadist'  => 'Tanda orang munafik adalah jika berjanji ia ingkari, dan jika dipercaya ia khianat.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1785,
                'isi_hadist'  => 'Rasulullah bersabda: “Penuhi janji, karena janji adalah tanggung jawab.”',
                'kitab_id'    => 1,
                'perawi_id'   => 2,    // Abdullah bin Amr
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1800,
                'isi_hadist'  => 'Janganlah seorang lelaki melihat aurat lelaki lain, dan perempuan melihat aurat perempuan lain.',
                'kitab_id'    => 1,
                'perawi_id'   => 32,   // Muhajir bin Qunfudz
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1805,
                'isi_hadist'  => 'Rasulullah melarang mandi bersama tanpa menutup aurat.',
                'kitab_id'    => 1,
                'perawi_id'   => 16,   // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1820,
                'isi_hadist'  => 'Sebarkan salam di antara kalian, karena itu bagian dari keimanan.',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1825,
                'isi_hadist'  => 'Rasulullah bersabda: “Yang lebih utama adalah yang memulai salam.”',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1840,
                'isi_hadist'  => 'Seorang wanita masuk neraka karena mengurung kucing tanpa memberinya makan.',
                'kitab_id'    => 1,
                'perawi_id'   => 19,   // Aisyah r.a.
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1845,
                'isi_hadist'  => 'Seorang diampuni dosanya karena memberi minum seekor anjing yang kehausan.',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1860,
                'isi_hadist'  => 'Demi Allah, aku beristighfar dan bertobat kepada Allah lebih dari 70 kali dalam sehari.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1865,
                'isi_hadist'  => 'Rasulullah mengajarkan: “Ya Allah, ampunilah aku, rahmatilah aku, cukupilah aku, dan berilah aku petunjuk.”',
                'kitab_id'    => 1,
                'perawi_id'   => 1,    // Ibn Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1880,
                'isi_hadist'  => 'Bersuci itu separuh dari iman, dan sabar itu cahaya.',
                'kitab_id'    => 1,
                'perawi_id'   => 12,   // Abu Malik Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1885,
                'isi_hadist'  => 'Orang beriman tidak mencela, tidak melaknat, tidak berkata keji, dan tidak kasar.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
 	        [
                'no_hadist'   => 1900,
                'isi_hadist'  => 'Rasulullah adalah manusia yang paling dermawan, dan lebih dermawan lagi di bulan Ramadan.',
                'kitab_id'    => 1,    // Shahih Muslim
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1905,
                'isi_hadist'  => 'Tangan di atas lebih baik dari tangan di bawah. Mulailah dari orang-orang yang menjadi tanggunganmu.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1920,
                'isi_hadist'  => 'Rasulullah bersabda: “Apakah manusia akan diseret ke neraka di wajahnya kecuali karena hasil lisannya?”',
                'kitab_id'    => 1,
                'perawi_id'   => 31,   // Mu’adz bin Jabal
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1925,
                'isi_hadist'  => 'Barang siapa beriman kepada Allah dan hari akhir, hendaklah berkata baik atau diam.',
                'kitab_id'    => 1,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1940,
                'isi_hadist'  => 'Kami mengadu kepada Rasulullah, lalu beliau bersabda: “Sesungguhnya orang-orang sebelum kalian… disiksa tapi tidak mundur dari agamanya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 27,   // Khabbab bin Al-Aratt
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1945,
                'isi_hadist'  => 'Rasulullah bersabda: “Sungguh mengagumkan urusan orang mukmin, segala urusannya adalah kebaikan...”',
                'kitab_id'    => 1,
                'perawi_id'   => 38,   // Suhaib Ar-Rumi
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1960,
                'isi_hadist'  => 'Rasulullah bersabda: “Allah merahmati seseorang yang toleran saat menjual, membeli, dan menagih hutang.”',
                'kitab_id'    => 1,
                'perawi_id'   => 15,   // Abu Qatadah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1965,
                'isi_hadist'  => 'Rasulullah melarang menipu dalam jual beli. Siapa yang menipu bukan dari golonganku.',
                'kitab_id'    => 1,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1980,
                'isi_hadist'  => 'Rasulullah bersabda: “Yang paling aku khawatirkan atas kalian adalah syirik kecil — yaitu riya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 30,   // Mahmud bin Labid
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1985,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya Allah tidak menerima amal kecuali yang ikhlas dan hanya mengharap wajah-Nya.”',
                'kitab_id'    => 1,
                'perawi_id'   => 16,   // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
	     [
                'no_hadist'   => 1,
                'isi_hadist'  => 'Apabila salah seorang dari kalian bangun dari tidurnya, maka janganlah mencelupkan tangannya ke dalam bejana sampai ia mencucinya tiga kali.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2,
                'isi_hadist'  => 'Nabi pernah diminta bagaimana cara berwudhu, maka beliau meminta air lalu berwudhu dan memperlihatkan cara berwudhu kepada mereka.',
                'kitab_id'    => 2,
                'perawi_id'   => 7,    // Abdullah bin Zaid
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 126,
                'isi_hadist'  => 'Jika iqamah telah dikumandangkan, maka janganlah kalian datang dengan tergesa-gesa.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 128,
                'isi_hadist'  => 'Sesungguhnya aku mulai shalat dan aku ingin memanjangkannya, lalu aku mendengar tangisan anak kecil, maka aku ringankan shalatku karena aku tahu kesedihan ibunya.',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 132,
                'isi_hadist'  => 'Rasulullah mengajarkan kami tasyahhud seperti mengajarkan surat dari Al-Qur\'an.',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1556,
                'isi_hadist'  => 'Tidak ada zakat pada kurang dari lima wasaq (hasil pertanian).',
                'kitab_id'    => 2,
                'perawi_id'   => 16,   // Abu Sa'id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1558,
                'isi_hadist'  => 'Tidak ada kewajiban zakat pada kurang dari lima ekor unta.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2316,
                'isi_hadist'  => 'Barang siapa yang tidak meninggalkan perkataan dusta dan perbuatan bodoh, maka Allah tidak butuh pada puasanya dari makan dan minum.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2320,
                'isi_hadist'  => 'Nabi mencium istrinya saat beliau sedang berpuasa.',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1815,
                'isi_hadist'  => 'Ambillah dariku manasik haji kalian.',
                'kitab_id'    => 2,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1820,
                'isi_hadist'  => 'Haji itu adalah Arafah, siapa yang mendapati malam Arafah sebelum fajar maka dia telah mendapatkan haji.',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2473,
                'isi_hadist'  => 'Seorang laki-laki bertanya: “Wahai Rasulullah, seseorang berperang karena keberanian, karena fanatisme, dan karena riya, manakah yang di jalan Allah?” Beliau menjawab: “Yang berperang untuk meninggikan kalimat Allah, itulah di jalan Allah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2486,
                'isi_hadist'  => 'Berjagalah kalian di perbatasan satu hari karena Allah, lebih baik dari dunia dan seisinya.',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2493,
                'isi_hadist'  => 'Barang siapa yang mempersiapkan perlengkapan bagi seorang mujahid, maka ia ikut mendapatkan pahala jihad.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2050,
                'isi_hadist'  => 'Wahai para pemuda, siapa di antara kalian yang mampu menikah maka menikahlah, karena dapat menundukkan pandangan dan menjaga kemaluan.',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2055,
                'isi_hadist'  => 'Nabi menikahiku saat aku berumur enam tahun dan mulai hidup bersamaku saat aku berumur sembilan tahun.',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2180,
                'isi_hadist'  => 'Engkau tidak berhak mendapatkan tempat tinggal dan nafkah. (ketika ia ditalak bain oleh suaminya)',
                'kitab_id'    => 2,
                'perawi_id'   => 23,   // Fatimah binti Qais
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2187,
                'isi_hadist'  => 'Umar berkata: “Talak tiga dalam satu waktu maka jatuh tiga talak.”',
                'kitab_id'    => 2,
                'perawi_id'   => 42,   // Umar bin Khattab
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4387,
                'isi_hadist'  => 'Tegakkanlah hukum had atas orang bangsawan maupun orang biasa.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4389,
                'isi_hadist'  => 'Hukum rajam bagi pezina yang telah menikah.',
                'kitab_id'    => 2,
                'perawi_id'   => 20,   // Ali bin Abi Thalib
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4510,
                'isi_hadist'  => 'Tidak boleh ada hukuman atas anak kecil, orang gila, dan orang tidur sampai ia sadar.',
                'kitab_id'    => 2,
                'perawi_id'   => 20,   // Ali bin Abi Thalib
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4515,
                'isi_hadist'  => 'Seorang wanita Quraisy mencuri, lalu Nabi memotong tangannya.',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4518,
                'isi_hadist'  => 'Siapa yang meminum khamar, maka deralah dia.',
                'kitab_id'    => 2,
                'perawi_id'   => 17,   // Abu Umamah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4520,
                'isi_hadist'  => 'Rasulullah melarang mengambil harta rampasan sebelum dibagikan.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4799,
                'isi_hadist'  => 'Yang terbaik di antara kalian adalah yang paling baik akhlaknya.',
                'kitab_id'    => 2,
                'perawi_id'   => 2,    // Abdullah bin Amr
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4801,
                'isi_hadist'  => 'Tidak termasuk dari kami orang yang tidak menyayangi yang muda dan menghormati yang tua.',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4803,
                'isi_hadist'  => 'Ucapan yang baik adalah sedekah.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4805,
                'isi_hadist'  => 'Sesungguhnya Allah itu lembut dan mencintai kelembutan dalam segala urusan.',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4808,
                'isi_hadist'  => 'Bukan termasuk dari kami orang yang tidak menghormati orang tua dan tidak menyayangi anak kecil.',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4810,
                'isi_hadist'  => 'Tersenyum kepada saudaramu adalah sedekah.',
                'kitab_id'    => 2,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4812,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa beriman kepada Allah dan hari akhir, maka hendaklah ia berkata yang baik atau diam.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4814,
                'isi_hadist'  => 'Rasulullah bersabda: “Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4815,
                'isi_hadist'  => 'Nabi tidak pernah memukul apapun dengan tangannya kecuali dalam jihad di jalan Allah.',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4816,
                'isi_hadist'  => 'Rasulullah bersabda: “Perumpamaan orang mukmin yang membaca Al-Qur’an adalah seperti buah utrujjah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4819,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya termasuk kebajikan seseorang adalah meninggalkan apa yang tidak berguna baginya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4821,
                'isi_hadist'  => 'Rasulullah bersabda: “Janganlah kamu meremehkan kebaikan sekecil apa pun, meskipun hanya dengan tersenyum.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4823,
                'isi_hadist'  => 'Rasulullah bersabda: “Tidak masuk surga orang yang di dalam hatinya ada kesombongan walau sebesar biji sawi.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas\'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4824,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa menutupi aib saudaranya, Allah akan menutupi aibnya di dunia dan akhirat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4825,
                'isi_hadist'  => 'Rasulullah bersabda: “Seorang mukmin terhadap mukmin lainnya seperti bangunan yang saling menguatkan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4826,
                'isi_hadist'  => 'Hak seorang Muslim atas Muslim lainnya ada enam... (menjawab salam, menjenguk saat sakit, dll).',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4828,
                'isi_hadist'  => 'Rasulullah bersabda: “Seorang Muslim adalah saudara bagi Muslim lainnya, ia tidak menzhalimi dan tidak membiarkannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4830,
                'isi_hadist'  => 'Nabi bersabda: “Tanda orang munafik ada tiga: apabila berbicara ia berdusta, apabila berjanji ia ingkari, dan apabila diberi amanah ia khianat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4831,
                'isi_hadist'  => 'Rasulullah bersabda: “Lihatlah orang yang lebih rendah darimu, jangan melihat kepada yang lebih tinggi agar kamu tidak meremehkan nikmat Allah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4833,
                'isi_hadist'  => 'Rasulullah bersabda: “Janganlah saling iri, saling membenci, dan jangan saling membelakangi. Jadilah kalian hamba-hamba Allah yang bersaudara.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4835,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya kejujuran membawa kepada kebaikan dan kebaikan membawa ke surga.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4837,
                'isi_hadist'  => 'Rasulullah bersabda: “Mudah-mudahan Allah merahmati orang yang bersikap lembut dalam urusan jual beli.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4839,
                'isi_hadist'  => 'Nabi bersabda: “Orang kuat bukan yang menang dalam bergulat, tetapi orang yang mampu mengendalikan diri ketika marah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4841,
                'isi_hadist'  => 'Rasulullah bersabda: “Allah mengharamkan surga atas orang yang membunuh orang mukmin dengan sengaja.”',
                'kitab_id'    => 2,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4843,
                'isi_hadist'  => 'Rasulullah bersabda: “Seorang Muslim tidak boleh menakut-nakuti saudaranya sesama Muslim.”',
                'kitab_id'    => 2,
                'perawi_id'   => 16,   // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4845,
                'isi_hadist'  => 'Nabi bersabda: “Janganlah kalian saling membenci dan saling mendengki, tetapi jadilah hamba Allah yang bersaudara.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4847,
                'isi_hadist'  => 'Rasulullah bersabda: “Janganlah kalian saling memutuskan hubungan, saling membelakangi, dan saling mendengki.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4849,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa menghilangkan kesulitan seorang Muslim, maka Allah akan menghilangkan satu kesulitannya di hari kiamat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4851,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang Muslim itu adalah saudara bagi Muslim lainnya, ia tidak menzalimi dan tidak menyerahkannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4853,
                'isi_hadist'  => 'Rasulullah bersabda: “Wahai Abu Dzar, apabila kamu memasak kuah, perbanyaklah airnya dan berilah tetanggamu.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4855,
                'isi_hadist'  => 'Rasulullah bersabda: “Tidak ada yang lebih berat dalam timbangan seorang mukmin pada hari kiamat selain akhlak yang baik.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4857,
                'isi_hadist'  => 'Rasulullah bersabda: “Kasihanilah siapa yang di bumi, maka Yang di langit akan mengasihimu.”',
                'kitab_id'    => 2,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4859,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang yang paling dicintai Allah adalah yang paling bermanfaat bagi orang lain.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4861,
                'isi_hadist'  => 'Rasulullah bersabda: “Tidak halal darah seorang Muslim kecuali karena tiga hal: zina setelah menikah, pembunuhan, dan murtad.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4863,
                'isi_hadist'  => 'Rasulullah bersabda: “Tidak akan masuk surga orang yang memutuskan silaturahmi.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4865,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya Allah tidak melihat rupa kalian dan harta kalian, tapi Dia melihat hati dan amal kalian.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4867,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya perumpamaan rumah yang di dalamnya dibaca Al-Qur’an dan yang tidak, seperti hidup dan mati.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4869,
                'isi_hadist'  => 'Rasulullah bersabda: “Seorang Muslim yang memelihara anak yatim akan bersamaku di surga seperti ini.” (sambil menunjukkan dua jari)',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4871,
                'isi_hadist'  => 'Senyummu kepada saudaramu adalah sedekah, dan setiap langkah menuju shalat juga sedekah.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4873,
                'isi_hadist'  => 'Rasulullah bersabda: “Tidaklah seseorang beriman hingga ia mencintai saudaranya sebagaimana ia mencintai dirinya sendiri.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4875,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang yang paling mulia di sisi Allah adalah orang yang paling bertakwa.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4877,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya Allah mencintai kelembutan dalam segala urusan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4879,
                'isi_hadist'  => 'Barang siapa memberi makanan berbuka untuk orang yang berpuasa, maka dia mendapat pahala seperti orang itu.',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4881,
                'isi_hadist'  => 'Rasulullah bersabda: “Jagalah Allah, niscaya Dia akan menjagamu.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4883,
                'isi_hadist'  => 'Orang yang menipu bukan termasuk golongan kami.',
                'kitab_id'    => 2,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4885,
                'isi_hadist'  => 'Rasulullah bersabda: “Tidak akan beriman seseorang hingga dia mencintai untuk tetangganya apa yang dia cintai untuk dirinya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
	    [
                'no_hadist'   => 4887,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang yang menunjukkan kebaikan sama dengan pelakunya.”',
                'kitab_id'    => 2,   // Sunan Abu Dawud
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4889,
                'isi_hadist'  => 'Nabi bersabda: “Sayangilah orang-orang yang ada di bumi, niscaya kalian akan disayangi oleh Yang di langit.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4891,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa melihat kemungkaran, maka hendaklah ia ubah dengan tangannya...”',
                'kitab_id'    => 2,
                'perawi_id'   => 16,  // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4893,
                'isi_hadist'  => 'Nabi bersabda: “Mudah-mudahan Allah merahmati seseorang yang memudahkan urusan orang lain.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4895,
                'isi_hadist'  => 'Rasulullah bersabda: “Cukuplah seseorang disebut pendusta jika ia menceritakan segala yang didengarnya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,  // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4897,
                'isi_hadist'  => 'Rasulullah bersabda: “Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4899,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya orang-orang yang paling keras siksaannya pada hari kiamat adalah para penguasa yang dzalim.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4901,
                'isi_hadist'  => 'Rasulullah bersabda: “Memaafkan itu tidak akan menambah seseorang kecuali kemuliaan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4903,
                'isi_hadist'  => 'Rasulullah bersabda: “Sebaik-baik bekal adalah takwa.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,  // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4905,
                'isi_hadist'  => 'Nabi bersabda: “Cukuplah seseorang disebut pendosa jika ia menelantarkan keluarganya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4907,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa yang berbuat baik kepada kalian, maka balaslah kebaikannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4909,
                'isi_hadist'  => 'Nabi bersabda: “Orang miskin itu bukan yang berkeliling meminta, tetapi yang tidak menampakkan dirinya dan tidak meminta.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4911,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya ridha Allah terletak pada ridha orang tua.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4913,
                'isi_hadist'  => 'Rasulullah bersabda: “Sungguh aku diutus untuk menyempurnakan akhlak yang mulia.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4915,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang yang banyak mengingat kematian, dialah orang paling bijak.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,  // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4917,
                'isi_hadist'  => 'Nabi bersabda: “Berbuat adillah kepada anak-anak kalian sebagaimana kalian suka diperlakukan adil.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4919,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya orang yang menyambung silaturahmi bukanlah yang membalas kunjungan, tetapi yang menyambung saat diputuskan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4921,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya di surga terdapat kamar yang tampak luar dan dalamnya...”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4923,
                'isi_hadist'  => 'Janganlah duduk di jalanan. Para sahabat berkata: “Kami tidak bisa meninggalkannya.” Lalu beliau bersabda: “Jika kalian tidak bisa, maka penuhilah hak jalan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 16,  // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4925,
                'isi_hadist'  => 'Nabi bersabda: “Janganlah seseorang memisahkan dua orang tanpa izin keduanya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4927,
                'isi_hadist'  => 'Nabi bersabda: “Orang kuat adalah yang bisa mengendalikan amarah saat marah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4929,
                'isi_hadist'  => 'Nabi bersabda: “Tidaklah seseorang menolong saudaranya kecuali Allah akan menolongnya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4931,
                'isi_hadist'  => 'Rasulullah bersabda: “Malu itu bagian dari iman.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4933,
                'isi_hadist'  => 'Nabi bersabda: “Sebaik-baik kalian adalah yang belajar Al-Qur\'an dan mengajarkannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,  // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4935,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya surga dipenuhi dengan hal-hal yang dibenci, dan neraka dipenuhi dengan syahwat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4937,
                'isi_hadist'  => 'Nabi bersabda: “Sungguh aku telah dilarang untuk membaca Al-Qur’an dalam rukuk dan sujud.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4939,
                'isi_hadist'  => 'Nabi bersabda: “Perumpamaan orang mukmin seperti pohon kurma.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,  // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4941,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya manusia yang paling dibenci oleh Allah adalah yang paling keras permusuhannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4943,
                'isi_hadist'  => 'Nabi bersabda: “Saling memberi hadiah, niscaya kalian saling mencintai.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4945,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa yang menyerupai suatu kaum, maka ia termasuk bagian dari mereka.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4947,
                'isi_hadist'  => 'Rasulullah bersabda: “Sebaik-baik shaf laki-laki adalah yang paling depan dan seburuk-buruknya adalah yang paling belakang.”',
                'kitab_id'    => 2,   // Sunan Abu Dawud
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4949,
                'isi_hadist'  => 'Nabi bersabda: “Tidaklah seseorang beriman hingga ia mencintai aku lebih dari dirinya sendiri.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4951,
                'isi_hadist'  => 'Nabi bersabda: “Lisan yang basah karena berdzikir kepada Allah adalah sebaik-baik amal.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,  // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4953,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya dusta membawa kepada kefasikan, dan kefasikan membawa ke neraka.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4955,
                'isi_hadist'  => 'Nabi bersabda: “Tidak ada iri hati kecuali kepada dua orang: orang yang diberi Al-Qur\'an lalu diamalkan, dan orang yang diberi harta lalu diinfakkan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4957,
                'isi_hadist'  => 'Nabi bersabda: “Lakukanlah amal sesuai kemampuan kalian, karena Allah tidak akan bosan sampai kalian bosan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4959,
                'isi_hadist'  => 'Nabi bersabda: “Jika seseorang meninggal, amalnya terputus kecuali tiga: sedekah jariyah, ilmu yang bermanfaat, dan anak saleh yang mendoakannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4961,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa berjalan untuk mencari ilmu, maka Allah akan memudahkan baginya jalan menuju surga.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4963,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya orang yang tidak menyayangi tidak akan disayangi.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4965,
                'isi_hadist'  => 'Nabi bersabda: “Orang beriman yang membaca Al-Qur\'an itu seperti buah jeruk yang harum dan manis rasanya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,  // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4967,
                'isi_hadist'  => 'Nabi bersabda: “Tidak akan masuk surga orang yang dalam hatinya terdapat kesombongan walaupun sebesar biji sawi.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4969,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa yang menghilangkan kesulitan orang mukmin, maka Allah akan menghilangkan kesulitan darinya di hari kiamat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4971,
                'isi_hadist'  => 'Nabi bersabda: “Hindarilah prasangka, karena prasangka adalah sedusta-dustanya perkataan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4973,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa yang berbuat suatu perbuatan yang tidak ada dasarnya dalam agama ini, maka itu tertolak.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4975,
                'isi_hadist'  => 'Rasulullah bersabda: “Doa antara adzan dan iqamah tidak akan ditolak.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4977,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya kejujuran membawa kepada kebaikan, dan kebaikan membawa ke surga.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4979,
                'isi_hadist'  => 'Nabi bersabda: “Siapa yang menolong orang yang kesusahan, maka Allah akan menolongnya di dunia dan akhirat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4981,
                'isi_hadist'  => 'Nabi bersabda: “Jangan engkau meremehkan kebaikan sekecil apapun.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,  // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4983,
                'isi_hadist'  => 'Rasulullah bersabda: “Siapa yang menutup aib saudaranya, maka Allah akan menutup aibnya di dunia dan akhirat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4985,
                'isi_hadist'  => 'Nabi bersabda: “Bukanlah kekayaan itu karena banyak harta, tapi kekayaan adalah kaya hati.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4987,
                'isi_hadist'  => 'Rasulullah bersabda: “Jangan marah.” Beliau mengulanginya berulang kali.',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4989,
                'isi_hadist'  => 'Nabi bersabda: “Hak seorang Muslim atas Muslim lainnya ada enam: jika bertemu, ucapkan salam...”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4991,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa yang memelihara dua anak perempuan sampai dewasa, maka aku dan dia akan bersama di surga.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4993,
                'isi_hadist'  => 'Nabi bersabda: “Jika engkau memasak makanan, perbanyaklah airnya dan berikan pada tetanggamu.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4995,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa memuliakan tamu, maka Allah akan memuliakannya di hari kiamat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4997,
                'isi_hadist'  => 'Rasulullah bersabda: “Setiap kebaikan adalah sedekah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4999,
                'isi_hadist'  => 'Nabi bersabda: “Jika salah seorang dari kalian mengantuk dalam shalat, hendaklah ia tidur sampai kantuknya hilang.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5001,
                'isi_hadist'  => 'Rasulullah bersabda: “Sebaik-baik kalian adalah yang paling baik terhadap keluarganya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5003,
                'isi_hadist'  => 'Nabi bersabda: “Janganlah seseorang membenci istrinya. Jika dia tidak menyukai salah satu sifatnya, bisa jadi dia menyukai yang lain.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5005,
                'isi_hadist'  => 'Nabi bersabda: “Setiap sendi dari tubuh manusia wajib disedekahkan setiap hari.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5007,
                'isi_hadist'  => 'Nabi bersabda: “Bersikap adillah kepada anak-anak kalian.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5009,
                'isi_hadist'  => 'Rasulullah bersabda: “Sungguh aku tahu rumah siapa saja yang membaca Al-Baqarah karena cahayanya tampak di langit.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5011,
                'isi_hadist'  => 'Nabi bersabda: “Jangan engkau menghina barang kecil yang diberikan oleh saudaramu meskipun hanya kaki kambing.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5013,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa menunjuki kepada kebaikan, maka baginya pahala seperti pelakunya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5015,
                'isi_hadist'  => 'Rasulullah bersabda: “Tiga hal yang siapa memilikinya, Allah akan memudahkan masuk surga: memaafkan orang yang menzalimimu…”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5017,
                'isi_hadist'  => 'Rasulullah bersabda: “Tidaklah seseorang meninggal dalam keadaan baik kecuali dia akan dibangkitkan dalam keadaan yang sama.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5019,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa membaca satu huruf dari Al-Qur’an, maka baginya satu kebaikan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5021,
                'isi_hadist'  => 'Rasulullah bersabda: “Perkara yang paling berat dalam timbangan pada hari kiamat adalah akhlak yang baik.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5023,
                'isi_hadist'  => 'Nabi bersabda: “Jagalah amanah, karena ia adalah tanda keimanan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5025,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya perumpamaan petunjuk dan ilmu yang Allah utus bersamaku seperti hujan yang jatuh di tanah...”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5027,
                'isi_hadist'  => 'Nabi bersabda: “Tidak termasuk dari kami orang yang tidak menyayangi anak kecil dan tidak menghormati orang tua.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5029,
                'isi_hadist'  => 'Nabi bersabda: “Jadilah kalian hamba Allah yang bersaudara.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5031,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya seseorang berkata dengan satu kata yang ia anggap remeh, ternyata menyeretnya ke neraka selama 70 tahun.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5033,
                'isi_hadist'  => 'Nabi bersabda: “Tidaklah seseorang mengendarai kendaraan kecuali ia didoakan oleh para malaikat selama ia tidak menyakiti siapa pun.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5035,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa menyerahkan urusan kaum Muslimin kepada orang yang tidak layak, maka ia telah berkhianat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5037,
                'isi_hadist'  => 'Nabi bersabda: “Jangan mencela waktu, karena Allah-lah yang menciptakan waktu.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5039,
                'isi_hadist'  => 'Nabi bersabda: “Tidaklah kebaikan diletakkan pada sesuatu kecuali akan menghiasinya, dan tidaklah dicabut darinya kecuali akan memperburuknya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5041,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya Allah itu Maha Baik dan mencintai kebaikan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5043,
                'isi_hadist'  => 'Nabi bersabda: “Berikanlah upah kepada pekerja sebelum kering keringatnya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5045,
                'isi_hadist'  => 'Nabi bersabda: “Orang yang paling mulia di sisi Allah adalah orang yang paling bertakwa.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5047,
                'isi_hadist'  => 'Nabi bersabda: “Setiap amal tergantung pada niatnya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5049,
                'isi_hadist'  => 'Nabi bersabda: “Jangan kalian berbuat seperti orang-orang sebelum kalian yang saling dengki dan membenci.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5051,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa menyakiti dhimmi, maka aku menjadi musuhnya pada hari kiamat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 16,   // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5053,
                'isi_hadist'  => 'Rasulullah bersabda: “Bantu saudaramu baik ia berbuat zalim atau dizalimi.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5055,
                'isi_hadist'  => 'Nabi bersabda: “Malu itu cabang dari iman.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5057,
                'isi_hadist'  => 'Rasulullah tidak pernah marah karena urusan pribadi, kecuali bila agama Allah dilanggar.',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5059,
                'isi_hadist'  => 'Nabi bersabda: “Janganlah kalian saling membenci dan saling memutuskan hubungan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5061,
                'isi_hadist'  => 'Nabi bersabda: “Setiap Muslim adalah haram darahnya, hartanya, dan kehormatannya atas Muslim lainnya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5063,
                'isi_hadist'  => 'Nabi bersabda: “Berikan hak jalan: tundukkan pandangan, hindari gangguan, dan jawab salam.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5065,
                'isi_hadist'  => 'Nabi bersabda: “Kekasihku (Rasulullah) mewasiatkan padaku agar aku tidak meminta pada siapa pun.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5067,
                'isi_hadist'  => 'Nabi bersabda: “Orang yang tidak mensyukuri yang sedikit, tidak akan mampu bersyukur atas yang banyak.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5069,
                'isi_hadist'  => 'Rasulullah bersabda: “Sesungguhnya aku diutus untuk menyempurnakan akhlak yang mulia.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5071,
                'isi_hadist'  => 'Nabi bersabda: “Jagalah amanah, sekalipun kepada orang yang mengkhianatimu.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5073,
                'isi_hadist'  => 'Nabi bersabda: “Sebaik-baik manusia adalah yang paling lama usianya dan paling baik amalnya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5075,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa yang dilunakkan hatinya oleh musibah, maka itu adalah tanda kasih sayang dari Allah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5077,
                'isi_hadist'  => 'Nabi bersabda: “Islam dibangun atas lima perkara: syahadat, shalat, zakat, puasa, dan haji.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5079,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya Allah mencintai orang yang apabila bekerja, ia menyempurnakannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5081,
                'isi_hadist'  => 'Rasulullah bersabda: “Orang yang paling banyak cobaan adalah para nabi, kemudian orang-orang shalih.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5083,
                'isi_hadist'  => 'Nabi bersabda: “Kekayaan bukanlah banyaknya harta, melainkan kekayaan hati.”',
                'kitab_id'    => 2,
                'perawi_id'   => 16,   // Abu Sa’id Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5085,
                'isi_hadist'  => 'Nabi bersabda: “Sebaik-baik kalian adalah yang paling bagus bacaannya dan paling takut kepada Allah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5087,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa beriman kepada Allah dan hari akhir, hendaklah ia memuliakan tamunya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5089,
                'isi_hadist'  => 'Nabi bersabda: “Perintahkan anak kalian shalat ketika berumur tujuh tahun.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5091,
                'isi_hadist'  => 'Nabi bersabda: “Manusia diciptakan dalam tingkat-tingkat kesabaran, maka bersabarlah kalian terhadap mereka.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5093,
                'isi_hadist'  => 'Nabi bersabda: “Harta yang paling baik adalah lisan yang berdzikir, hati yang bersyukur, dan istri mukminah yang menolong keimanan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5095,
                'isi_hadist'  => 'Nabi bersabda: “Tiga hal yang apabila ada pada diri seseorang maka ia akan merasakan manisnya iman: mencintai Allah dan Rasul-Nya…”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5097,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya Allah tidak melihat rupa kalian, melainkan melihat hati dan amal kalian.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5099,
                'isi_hadist'  => 'Nabi bersabda: “Mintalah pertolongan kepada Allah dan jangan lemah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5101,
                'isi_hadist'  => 'Rasulullah bersabda: “Siapa yang menutup aib saudaranya, Allah akan menutup aibnya di dunia dan akhirat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5103,
                'isi_hadist'  => 'Rasulullah bersabda: “Sifat pemaaf adalah perhiasan terbaik seorang mukmin.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5105,
                'isi_hadist'  => 'Nabi bersabda: “Tidak akan masuk surga orang yang memutuskan silaturahmi.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5107,
                'isi_hadist'  => 'Rasulullah bersabda: “Barang siapa memudahkan kesulitan orang lain, maka Allah akan memudahkannya di dunia dan akhirat.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5109,
                'isi_hadist'  => 'Nabi bersabda: “Seseorang tetap dalam kebaikan selama ia tidak menumpahkan darah yang haram.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5111,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya Allah Maha Lembut dan mencintai kelembutan dalam segala urusan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5113,
                'isi_hadist'  => 'Nabi bersabda: “Jika kamu bisa menjadi orang yang tidak disakiti oleh orang lain dan tidak menyakiti, maka lakukanlah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5115,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya orang yang paling dekat denganku di hari kiamat adalah yang paling baik akhlaknya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5117,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya Allah menyukai apabila seseorang melakukan sesuatu, maka dia menyempurnakannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5119,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa yang menyerupai suatu kaum, maka dia termasuk bagian dari mereka.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5121,
                'isi_hadist'  => 'Nabi bersabda: “Orang yang memberi syafaat dengan baik akan mendapatkan bagian dari pahala.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5123,
                'isi_hadist'  => 'Nabi bersabda: “Orang yang paling dicintai Allah adalah yang paling baik kepada keluarganya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5125,
                'isi_hadist'  => 'Nabi bersabda: “Janganlah kamu meremehkan sedikit pun dari kebaikan.”',
                'kitab_id'    => 2,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5127,
                'isi_hadist'  => 'Nabi bersabda: “Orang yang berjalan untuk mengunjungi saudaranya karena Allah, maka ia dijanjikan surga.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5129,
                'isi_hadist'  => 'Nabi bersabda: “Sebaik-baik Islam seseorang adalah meninggalkan hal-hal yang tidak bermanfaat baginya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5131,
                'isi_hadist'  => 'Nabi bersabda: “Tidak akan lurus iman seseorang sampai lurus hatinya, dan tidak akan lurus hatinya sampai lurus lisannya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5133,
                'isi_hadist'  => 'Nabi bersabda: “Mudah-mudahan Allah merahmati seseorang yang berkata baik atau diam.”',
                'kitab_id'    => 2,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5135,
                'isi_hadist'  => 'Nabi bersabda: “Berpalinglah dari hal yang tidak berguna, karena itu bagian dari kebaikan Islam seseorang.”',
                'kitab_id'    => 2,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5137,
                'isi_hadist'  => 'Nabi bersabda: “Wajah yang berseri kepada saudaramu adalah sedekah.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5139,
                'isi_hadist'  => 'Nabi bersabda: “Sesungguhnya amal-amal itu bergantung pada niatnya.”',
                'kitab_id'    => 2,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5141,
                'isi_hadist'  => 'Nabi bersabda: “Orang mukmin yang membaca Al-Qur’an seperti buah yang harum dan manis.”',
                'kitab_id'    => 2,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5143,
                'isi_hadist'  => 'Nabi bersabda: “Barang siapa yang tidak menyayangi, maka ia tidak akan disayangi.”',
                'kitab_id'    => 2,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5145,
                'isi_hadist'  => 'Nabi bersabda: “Orang yang paling berat timbangannya di hari kiamat adalah orang yang memiliki akhlak mulia.”',
                'kitab_id'    => 2,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1,
                'isi_hadist'  => 'Sesungguhnya amal itu tergantung pada niatnya, dan sesungguhnya setiap orang berdasarkan niatnya.',
                'kitab_id'    => 3,
                'perawi_id'   => 42,   // Umar bin Khattab
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 8,
                'isi_hadist'  => 'Islam dibangun atas lima perkara: syahadat, salat, zakat, puasa Ramadan, dan haji.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,    // Ibnu Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6018,
                'isi_hadist'  => 'Barangsiapa beriman kepada Allah dan hari akhir, hendaklah berkata baik atau diam.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6158,
                'isi_hadist'  => 'Allah tidak melihat rupa dan harta kalian, tapi hati dan amal kalian.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 69,
                'isi_hadist'  => 'Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6114,
                'isi_hadist'  => 'Orang kuat bukan yang menang gulat, tapi yang menahan diri saat marah.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6064,
                'isi_hadist'  => 'Jangan saling membenci, hasad, dan membelakangi; jadilah hamba Allah yang bersaudara.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1298,
                'isi_hadist'  => 'Siapa yang menipu kami maka bukan dari golongan kami.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6035,
                'isi_hadist'  => 'Sebaik-baik kalian adalah yang terbaik akhlaknya.',
                'kitab_id'    => 3,
                'perawi_id'   => 2,    // Abdullah bin Amr
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 893,
                'isi_hadist'  => 'Setiap kalian adalah pemimpin, dan akan dimintai pertanggungjawaban.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 564,
                'isi_hadist'  => 'Orang yang paling berat cobaannya adalah para nabi.',
                'kitab_id'    => 3,
                'perawi_id'   => 34,   // Sa’d bin Abi Waqqash
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 13,
                'isi_hadist'  => 'Tidak sempurna iman seseorang hingga mencintai saudaranya sebagaimana dirinya sendiri.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1353,
                'isi_hadist'  => 'Orang yang menunjukkan kebaikan seperti pelakunya.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,    // Abdullah bin Mas\'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 33,
                'isi_hadist'  => 'Tiga tanda orang munafik: dusta saat bicara, ingkar janji, khianat amanah.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6094,
                'isi_hadist'  => 'Bersikaplah jujur, karena kejujuran membawa kepada kebaikan dan surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,    // Abdullah bin Mas\'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6003,
                'isi_hadist'  => 'Allah Maha Penyayang dan mencintai kasih sayang.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6416,
                'isi_hadist'  => 'Jagalah lima sebelum lima: muda, sehat, kaya, waktu luang, hidup.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,    // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2442,
                'isi_hadist'  => 'Siapa memudahkan urusan orang, Allah mudahkan urusannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6878,
                'isi_hadist'  => 'Tidak halal darah muslim kecuali karena tiga hal: zina, membunuh, murtad.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,    // Abdullah bin Mas\'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6039,
                'isi_hadist'  => 'Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6013,
                'isi_hadist'  => 'Allah tidak mengasihi orang yang tidak mengasihi sesama.',
                'kitab_id'    => 3,
                'perawi_id'   => 28,   // Jarir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1410,
                'isi_hadist'  => 'Bersedekahlah walau dengan setengah kurma.',
                'kitab_id'    => 3,
                'perawi_id'   => 18,   // Adi bin Hatim
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5090,
                'isi_hadist'  => 'Dunia adalah perhiasan, dan sebaik-baik perhiasan adalah wanita salehah.',
                'kitab_id'    => 3,
                'perawi_id'   => 39,   // Ubadah bin Shamit
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6101,
                'isi_hadist'  => 'Tidak masuk surga orang yang di hatinya ada kesombongan seberat biji sawi.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,    // Abdullah bin Mas\'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2442,
                'isi_hadist'  => 'Siapa melepaskan kesulitan muslim, Allah lepaskan kesulitannya di akhirat.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6116,
                'isi_hadist'  => 'Jangan marah.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2750,
                'isi_hadist'  => 'Allah mencintai seseorang yang menyempurnakan pekerjaannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2285,
                'isi_hadist'  => 'Tidak boleh saling mudarat dan membalas mudarat.',
                'kitab_id'    => 3,
                'perawi_id'   => 39,   // Ubadah bin Shamit
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2444,
                'isi_hadist'  => 'Tolonglah saudaramu baik ia zalim maupun dizalimi.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1291,
                'isi_hadist'  => 'Cukuplah seseorang dikatakan pendusta jika menyampaikan semua yang ia dengar.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5678,
                'isi_hadist'  => 'Tidak ada penyakit yang Allah turunkan kecuali ada obatnya.',
                'kitab_id'    => 3,   // Shahih Bukhari
                'perawi_id'   => 44,  // Usamah bin Zaid
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6066,
                'isi_hadist'  => 'Hindarilah prasangka, karena prasangka adalah sedusta-dustanya ucapan.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6018,
                'isi_hadist'  => 'Barang siapa beriman kepada Allah dan hari akhir, hendaklah memuliakan tamunya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 73,
                'isi_hadist'  => 'Tidak boleh iri kecuali pada dua orang: yang berilmu dan yang dermawan.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2566,
                'isi_hadist'  => 'Saling memberi hadiah menumbuhkan cinta.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5984,
                'isi_hadist'  => 'Tidak masuk surga orang yang memutus silaturahmi.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6011,
                'isi_hadist'  => 'Mukmin dalam kasih sayang seperti satu tubuh, bila satu sakit semua ikut merasakannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 33,  // Nu'man bin Basyir
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5668,
                'isi_hadist'  => 'Allah itu indah dan mencintai keindahan.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6086,
                'isi_hadist'  => 'Jangan remehkan kebaikan sekecil apa pun, meski hanya senyum.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2823,
                'isi_hadist'  => 'Kemenangan bersama kesabaran, jalan keluar bersama kesempitan.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6502,
                'isi_hadist'  => 'Perumpamaan orang mukmin yang membaca Al-Qur’an seperti buah utrujjah, harum dan manis rasanya.',
                'kitab_id'    => 3,
                'perawi_id'   => 14,  // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 11,
                'isi_hadist'  => 'Tanda kebaikan Islam seseorang adalah meninggalkan hal yang tak bermanfaat.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 161,
                'isi_hadist'  => 'Kebersihan adalah sebagian dari iman.',
                'kitab_id'    => 3,
                'perawi_id'   => 12,  // Abu Malik Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6344,
                'isi_hadist'  => 'Doa adalah senjata orang mukmin.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 7288,
                'isi_hadist'  => 'Setiap umatku akan masuk surga kecuali yang enggan.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 71,
                'isi_hadist'  => 'Siapa menempuh jalan ilmu, Allah mudahkan jalannya ke surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1773,
                'isi_hadist'  => 'Haji mabrur tidak ada balasan kecuali surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 38,
                'isi_hadist'  => 'Barang siapa puasa Ramadan karena iman dan berharap pahala, akan diampuni dosanya yang lalu.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6490,
                'isi_hadist'  => 'Jika melihat orang lebih baik dalam harta atau rupa, lihatlah yang di bawahmu.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1400,
                'isi_hadist'  => 'Barang siapa berwudhu dengan sempurna lalu salat dua rakaat tanpa lalai, maka diampuni dosanya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 100,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya orang yang paling baik adalah yang belajar Al-Qur’an dan mengajarkannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 51,
                'isi_hadist'  => 'Rasulullah tidak pernah mencela makanan. Jika suka, beliau makan; jika tidak, beliau tinggalkan.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 52,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi dan tidak menghina.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 53,
                'isi_hadist'  => 'Rasulullah melarang menjual buah sebelum nampak baiknya.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Ibnu Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 54,
                'isi_hadist'  => 'Perumpamaan petunjuk dan ilmu yang Allah utus seperti hujan yang menyuburkan bumi.',
                'kitab_id'    => 3,
                'perawi_id'   => 14,  // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 55,
                'isi_hadist'  => 'Orang miskin bukanlah yang berkeliling minta-minta, tetapi yang tidak meminta padahal perlu.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 56,
                'isi_hadist'  => 'Nabi SAW paling dermawan, terutama di bulan Ramadan.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 57,
                'isi_hadist'  => 'Makanan dua orang cukup untuk tiga, dan makanan tiga cukup untuk empat.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 58,
                'isi_hadist'  => 'Rasulullah melarang berjual beli dengan cara yang mengandung penipuan.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 59,
                'isi_hadist'  => 'Rasulullah adalah orang yang paling baik akhlaknya.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 60,
                'isi_hadist'  => 'Doa tiga orang tidak tertolak: orang tua, musafir, dan orang yang terzalimi.',
                'kitab_id'    => 3,   // Shahih Bukhari
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 99,
                'isi_hadist'  => 'Rasulullah tidak pernah mencela makanan. Jika beliau suka, beliau makan. Jika tidak, beliau tinggalkan.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 61,
                'isi_hadist'  => 'Jangan saling iri, saling menawar lebih dahulu, saling benci; jadilah hamba Allah yang bersaudara.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 62,
                'isi_hadist'  => 'Nabi SAW jika diberi pilihan antara dua hal, beliau pilih yang lebih mudah jika tidak berdosa.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 63,
                'isi_hadist'  => 'Sesungguhnya jujur membawa kepada kebaikan, dan kebaikan membawa ke surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 64,
                'isi_hadist'  => 'Orang yang berjalan untuk menuntut ilmu, Allah mudahkan jalannya menuju surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 65,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak boleh menjual barang yang belum dimiliki.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 66,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak sempurna iman seseorang jika ia tidur kenyang sementara tetangganya lapar.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 67,
                'isi_hadist'  => 'Barangsiapa membantu memenuhi kebutuhan saudaranya, Allah akan penuhi kebutuhannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 68,
                'isi_hadist'  => 'Sebaik-baik amal adalah salat pada waktunya, lalu berbakti kepada orang tua.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 69,
                'isi_hadist'  => 'Rasulullah bersabda: Barangsiapa menipu kami, maka dia bukan dari golongan kami.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 70,
                'isi_hadist'  => 'Janganlah seseorang di antara kalian menginginkan kematian karena musibah yang menimpanya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 98,
                'isi_hadist'  => 'Rasulullah bersabda: Jangan kalian saling membenci, dan jangan saling memutuskan hubungan.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 71,
                'isi_hadist'  => 'Tanda orang munafik tiga: bila berbicara dia berdusta, bila berjanji dia ingkar, dan bila dipercaya dia khianat.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 72,
                'isi_hadist'  => 'Nabi SAW tidak pernah memukul sesuatu dengan tangannya kecuali dalam jihad atau karena Allah.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 73,
                'isi_hadist'  => 'Orang yang paling dibenci Allah adalah yang paling keras permusuhannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 74,
                'isi_hadist'  => 'Tidak termasuk golongan kami orang yang tidak menyayangi anak kecil dan tidak menghormati yang tua.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 75,
                'isi_hadist'  => 'Orang yang menjaga salat lima waktu akan masuk surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 76,
                'isi_hadist'  => 'Tidak ada iri kecuali pada dua orang: yang diberi ilmu dan yang diberi harta dan menginfakkannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 77,
                'isi_hadist'  => 'Agama adalah nasihat. Kami bertanya: Untuk siapa? Beliau menjawab: Untuk Allah, kitab-Nya, Rasul-Nya, dan kaum muslimin.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 78,
                'isi_hadist'  => 'Allah tidak menilai bentuk tubuh dan harta kalian, tetapi hati dan amal kalian.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 79,
                'isi_hadist'  => 'Akhlak Nabi SAW adalah Al-Qur\'an.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 80,
                'isi_hadist'  => 'Seorang muslim adalah cermin bagi muslim lainnya; ia tidak menzaliminya dan tidak menyerahkannya (kepada musuh).',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 97,
                'isi_hadist'  => 'Tidak boleh menunda-nunda pembayaran utang bagi yang mampu membayar.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 81,
                'isi_hadist'  => 'Barangsiapa menunjukkan kepada kebaikan, maka ia mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 82,
                'isi_hadist'  => 'Tidak beriman salah satu dari kalian sampai ia mencintai saudaranya seperti dirinya sendiri.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 83,
                'isi_hadist'  => 'Rasulullah tidak pernah menyuruh sesuatu kecuali beliau orang pertama yang mengamalkannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 84,
                'isi_hadist'  => 'Rasulullah jika sedang memilih antara dua hal, beliau memilih yang paling mudah selama bukan dosa.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 85,
                'isi_hadist'  => 'Barangsiapa memudahkan orang yang kesulitan, Allah akan memudahkannya di dunia dan akhirat.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 86,
                'isi_hadist'  => 'Seorang muslim adalah cermin bagi muslim lainnya.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 87,
                'isi_hadist'  => 'Nabi SAW bersabda: Gunakan lima perkara sebelum datang lima perkara: hidup sebelum mati, sehat sebelum sakit, kaya sebelum miskin, muda sebelum tua, dan waktu luang sebelum sibuk.',
                'kitab_id'    => 3,   // Shahih Bukhari
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 88,
                'isi_hadist'  => 'Jangan kamu menganggap remeh satu pun dari kebaikan, meskipun hanya dengan wajah berseri-seri.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 89,
                'isi_hadist'  => 'Rasulullah bersabda: Siapa yang tidak menyayangi, maka dia tidak akan disayangi.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 90,
                'isi_hadist'  => 'Rasulullah bersabda: Sebaik-baik kalian adalah yang paling baik terhadap keluarganya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 96,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak sempurna iman seseorang yang kenyang sementara tetangganya lapar.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 91,
                'isi_hadist'  => 'Rasulullah selalu memilih jalan tengah, tidak ekstrem dalam beragama.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 92,
                'isi_hadist'  => 'Ketika seseorang meninggal dunia, terputus amalnya kecuali tiga: sedekah jariyah, ilmu, dan anak saleh.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 93,
                'isi_hadist'  => 'Sesungguhnya orang yang paling aku cintai dan paling dekat denganku pada hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 94,
                'isi_hadist'  => 'Rasulullah bersabda: Siapa yang memudahkan orang lain dalam urusan dunia, Allah mudahkan urusan akhiratnya.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 95,
                'isi_hadist'  => 'Tak seorang pun yang memiliki kelebihan harta kecuali akan dimintai pertanggungjawaban di akhirat.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 101,
                'isi_hadist'  => 'Dunia adalah penjara bagi orang mukmin dan surga bagi orang kafir.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 102,
                'isi_hadist'  => 'Sesungguhnya di antara kalian ada orang yang amalnya seperti ahli surga sampai satu jengkal, lalu berakhir di neraka.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 103,
                'isi_hadist'  => 'Rasulullah bersabda: Jadilah kamu di dunia seperti orang asing atau orang yang sedang dalam perjalanan.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 104,
                'isi_hadist'  => 'Nabi SAW tidak pernah membalas kejahatan dengan kejahatan, tetapi memaafkan dan bersabar.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 105,
                'isi_hadist'  => 'Allah membagi rahmat menjadi 100 bagian; satu diturunkan ke dunia, sisanya untuk akhirat.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 106,
                'isi_hadist'  => 'Nabi SAW bersabda: Jagalah Allah, maka Allah akan menjagamu.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 107,
                'isi_hadist'  => 'Rasulullah bersabda: Jangan meremehkan kebaikan sekecil apa pun.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 108,
                'isi_hadist'  => 'Sesungguhnya Allah mencintai jika salah satu dari kalian melakukan pekerjaan, maka ia sempurnakan.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 109,
                'isi_hadist'  => 'Rasulullah melarang makan dengan tangan kiri dan berkata: Setan makan dengan tangan kiri.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 110,
                'isi_hadist'  => 'Rasulullah bersabda: Orang yang paling banyak ujiannya adalah para nabi, lalu orang-orang saleh.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 111,
                'isi_hadist'  => 'Rasulullah senang memulai dari sisi kanan ketika bersuci, menyisir rambut, dan mengenakan sandal.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 112,
                'isi_hadist'  => 'Rasulullah tidak pernah mencela makanan, jika suka beliau makan, jika tidak maka ditinggalkan.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 113,
                'isi_hadist'  => 'Jangan saling hasad, jangan menawar barang yang sedang ditawar orang lain.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 114,
                'isi_hadist'  => 'Rasulullah bersabda: Jagalah shalat lima waktu, itu adalah cahaya dan petunjuk di hari kiamat.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 115,
                'isi_hadist'  => 'Rasulullah melarang duduk antara matahari dan bayangan.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 116,
                'isi_hadist'  => 'Tidak ada penyakit yang Allah turunkan kecuali Allah turunkan juga obatnya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 117,
                'isi_hadist'  => 'Rasulullah paling ringan beban hidupnya, dan tidak pernah berlebih-lebihan.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 118,
                'isi_hadist'  => 'Rasulullah bersabda: Sedekah tidak akan mengurangi harta.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 119,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak sempurna iman seseorang jika ia tidak aman dari gangguannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 120,
                'isi_hadist'  => 'Tiga hal yang mengikuti mayat: keluarga, harta, dan amal; dua kembali, satu tetap.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 121,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa menyerupai suatu kaum, maka ia termasuk dari mereka.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 122,
                'isi_hadist'  => 'Rasulullah bersabda: Sebaik-baik kalian adalah yang mempelajari Al-Qur\'an dan mengajarkannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 123,
                'isi_hadist'  => 'Rasulullah bersabda: Allah mencintai apabila seseorang melakukan sesuatu dengan itqan (profesional).',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 124,
                'isi_hadist'  => 'Janganlah salah seorang dari kalian mengangkat dirinya sebagai pemimpin, padahal ada orang yang lebih layak.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Ibnu Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 125,
                'isi_hadist'  => 'Rasulullah bersabda: Mudahkan, jangan persulit. Berilah kabar gembira, jangan membuat orang lari.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 126,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa yang berjalan untuk ilmu, maka Allah akan mudahkan jalannya ke surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 127,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak akan masuk surga orang yang di dalam hatinya ada kesombongan seberat biji sawi.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 128,
                'isi_hadist'  => 'Rasulullah bersabda: Senyum kepada saudaramu adalah sedekah.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 129,
                'isi_hadist'  => 'Rasulullah bersabda: Jauhilah prasangka, karena itu adalah seburuk-buruk perkataan.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 130,
                'isi_hadist'  => 'Rasulullah bersabda: Perumpamaan orang beriman seperti pohon kurma, akarnya kokoh dan buahnya bermanfaat.',
                'kitab_id'    => 3,
                'perawi_id'   => 14,  // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 131,
                'isi_hadist'  => 'Rasulullah tidak suka kekerasan dalam segala hal, dan selalu memilih jalan yang lembut.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 132,
                'isi_hadist'  => 'Rasulullah bersabda: Hak seorang muslim atas muslim lainnya ada enam, salah satunya menjawab salam.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 133,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya orang yang paling buruk kedudukannya di sisi Allah adalah orang yang ditinggalkan karena takut kejelekannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 134,
                'isi_hadist'  => 'Rasulullah bersabda: Dunia itu manis dan hijau, dan Allah akan melihat bagaimana kalian berbuat padanya.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 135,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak ada seorang pun yang meninggal kecuali ditampakkan tempatnya di surga atau neraka.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 136,
                'isi_hadist'  => 'Rasulullah bersabda: Bertakwalah kepada Allah di mana pun kamu berada, dan ikutilah kejelekan dengan kebaikan.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 137,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa menutup aib seorang muslim, Allah akan menutup aibnya di dunia dan akhirat.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 138,
                'isi_hadist'  => 'Rasulullah bersabda: Setiap anak Adam sering berbuat dosa, dan sebaik-baik pelaku dosa adalah yang bertobat.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 139,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa yang ditimpa musibah, hendaklah dia berkata: Inna lillahi wa inna ilaihi raji’un.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 140,
                'isi_hadist'  => 'Rasulullah bersabda: Nikmat yang sering dilalaikan oleh banyak orang adalah kesehatan dan waktu luang.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 141,
                'isi_hadist'  => 'Rasulullah bersabda: Janganlah kalian saling membenci dan memutuskan hubungan; jadilah hamba Allah yang bersaudara.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 142,
                'isi_hadist'  => 'Rasulullah bersabda: Jika kamu tidak malu, maka lakukanlah sesukamu.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 143,
                'isi_hadist'  => 'Rasulullah bersabda: Seorang hamba tidak akan beriman dengan sempurna sampai ia mencintai untuk saudaranya apa yang ia cintai untuk dirinya.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 144,
                'isi_hadist'  => 'Rasulullah bersabda: Orang beriman dengan mukmin lain seperti bangunan yang saling menguatkan.',
                'kitab_id'    => 3,
                'perawi_id'   => 14,  // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 145,
                'isi_hadist'  => 'Rasulullah bersabda: Orang muslim adalah orang yang kaum muslimin selamat dari lisan dan tangannya.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 146,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya orang yang paling dibenci Allah adalah yang suka bertengkar.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 147,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak boleh ada iri hati kecuali kepada dua orang: orang yang diberi ilmu dan orang yang dermawan.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 148,
                'isi_hadist'  => 'Rasulullah bersabda: Manusia akan dibangkitkan sesuai dengan niatnya.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 149,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa menipu kami maka ia bukan dari golongan kami.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 150,
                'isi_hadist'  => 'Rasulullah bersabda: Setiap kebaikan adalah sedekah.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 151,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak ada orang yang bersedekah dengan harta yang baik, kecuali Allah akan menggantinya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 152,
                'isi_hadist'  => 'Rasulullah bersabda: Amal yang paling dicintai oleh Allah adalah yang paling terus-menerus, meskipun sedikit.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 153,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa yang berjalan untuk menolong saudaranya, maka itu lebih baik dari i’tikaf sebulan.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 154,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak masuk surga orang yang memutuskan silaturahmi.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 155,
                'isi_hadist'  => 'Rasulullah bersabda: Jangan remehkan kebaikan, walau hanya memberi seteguk air.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 156,
                'isi_hadist'  => 'Rasulullah bersabda: Sebarkanlah salam di antara kalian.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 157,
                'isi_hadist'  => 'Rasulullah bersabda: Setiap sendi dari manusia wajib atasnya sedekah setiap hari ketika matahari terbit.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 158,
                'isi_hadist'  => 'Rasulullah bersabda: Orang yang paling dekat denganku di hari kiamat adalah yang terbaik akhlaknya.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 159,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa beriman kepada Allah dan hari akhir, hendaklah memuliakan tamunya.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 160,
                'isi_hadist'  => 'Rasulullah bersabda: Dua nikmat yang sering dilalaikan banyak manusia adalah waktu luang dan kesehatan.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 161,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya Allah itu lembut dan mencintai kelembutan dalam segala urusan.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 162,
                'isi_hadist'  => 'Rasulullah bersabda: Setiap umatku akan masuk surga kecuali yang enggan.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 163,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya ucapan yang paling dicintai Allah adalah: Subhanallahi wa bihamdih.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 164,
                'isi_hadist'  => 'Rasulullah bersabda: Janganlah seorang di antara kalian mati kecuali dalam keadaan berbaik sangka kepada Allah.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 165,
                'isi_hadist'  => 'Rasulullah bersabda: Islam dibangun atas lima perkara: syahadat, salat, zakat, puasa, dan haji.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 166,
                'isi_hadist'  => 'Rasulullah bersabda: Takutlah kalian kepada doa orang yang terzalimi, karena tidak ada penghalang antara dia dan Allah.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 167,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa menginginkan dunia, hendaklah ia mencari ilmu. Barang siapa menginginkan akhirat, hendaklah ia mencari ilmu.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 168,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya Allah tidak melihat rupa dan harta kalian, tapi melihat hati dan amal kalian.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 169,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya kejujuran membawa kepada kebaikan, dan kebaikan membawa ke surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 170,
                'isi_hadist'  => 'Rasulullah bersabda: Janganlah berbuat zalim, karena kezaliman adalah kegelapan di hari kiamat.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 171,
                'isi_hadist'  => 'Rasulullah bersabda: Siapa yang tidak meninggalkan perkataan dusta dan perbuatannya, maka Allah tidak butuh ia meninggalkan makan dan minumnya.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 172,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya Allah menulis rahmat atas diri-Nya sebelum menciptakan makhluk.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 173,
                'isi_hadist'  => 'Rasulullah bersabda: Seorang wanita dinikahi karena empat hal, pilihlah yang karena agamanya.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 174,
                'isi_hadist'  => 'Rasulullah bersabda: Sampaikan dariku walau satu ayat.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 175,
                'isi_hadist'  => 'Rasulullah bersabda: Tangan yang di atas lebih baik daripada tangan yang di bawah.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 176,
                'isi_hadist'  => 'Rasulullah bersabda: Orang yang paling berat cobaannya adalah para nabi, lalu yang semisalnya.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 177,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa tidak bersyukur kepada manusia, maka ia tidak bersyukur kepada Allah.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 178,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya Allah menyukai keringanan terhadap umat ini.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 179,
                'isi_hadist'  => 'Rasulullah bersabda: Perumpamaan orang beriman yang membaca Al-Qur’an seperti buah utrujjah.',
                'kitab_id'    => 3,
                'perawi_id'   => 14,  // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 180,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak akan masuk surga orang yang memutus silaturahmi.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 181,
                'isi_hadist'  => 'Rasulullah bersabda: Jagalah lima perkara sebelum lima perkara: masa muda sebelum tua, sehat sebelum sakit, kaya sebelum miskin, waktu luang sebelum sibuk, dan hidup sebelum mati.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 182,
                'isi_hadist'  => 'Rasulullah bersabda: Waktu adalah pedang, jika kamu tidak menggunakannya maka ia akan menebasmu.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 183,
                'isi_hadist'  => 'Rasulullah bersabda: Orang mukmin yang kuat lebih baik dan lebih dicintai Allah daripada mukmin yang lemah.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 184,
                'isi_hadist'  => 'Rasulullah bersabda: Jika salah seorang dari kalian menguap, hendaklah ia menutup mulutnya.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 185,
                'isi_hadist'  => 'Rasulullah bersabda: Orang yang ahli Al-Qur’an akan bersama para malaikat yang mulia dan taat.',
                'kitab_id'    => 3,
                'perawi_id'   => 14,  // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 186,
                'isi_hadist'  => 'Rasulullah bersabda: Tidak beriman seseorang sampai ia mencintai untuk saudaranya apa yang ia cintai untuk dirinya.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 187,
                'isi_hadist'  => 'Rasulullah bersabda: Jangan meremehkan kebaikan sekecil apapun.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 188,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya Allah itu baik dan hanya menerima yang baik.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 189,
                'isi_hadist'  => 'Rasulullah bersabda: Setiap amal ada masa semangat dan masa lelah; siapa yang masa lelahnya masih di atas sunahku, dia akan selamat.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 190,
                'isi_hadist'  => 'Rasulullah bersabda: Sedekah yang paling utama adalah yang diberikan saat dalam keadaan sehat dan takut miskin.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 191,
                'isi_hadist'  => 'Rasulullah bersabda: Sungguh amal yang paling dicintai Allah adalah yang dilakukan secara terus-menerus walau sedikit.',
                'kitab_id'    => 3,
                'perawi_id'   => 19,  // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 192,
                'isi_hadist'  => 'Rasulullah bersabda: Seorang muslim yang menanam pohon atau menabur benih lalu dimakan burung, manusia, atau hewan, maka itu menjadi sedekah baginya.',
                'kitab_id'    => 3,
                'perawi_id'   => 6,   // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 193,
                'isi_hadist'  => 'Rasulullah bersabda: Sesungguhnya Allah itu Maha Pengasih dan menyukai kasih sayang.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 194,
                'isi_hadist'  => 'Rasulullah bersabda: Tidaklah seseorang melemparkan sesuatu kepada saudaranya sebagai candaan kecuali akan dipertanggungjawabkan.',
                'kitab_id'    => 3,
                'perawi_id'   => 21,  // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 195,
                'isi_hadist'  => 'Rasulullah bersabda: Jangan kamu menghina sedikit pun dari kebaikan.',
                'kitab_id'    => 3,
                'perawi_id'   => 4,   // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 196,
                'isi_hadist'  => 'Rasulullah bersabda: Amal yang paling dicintai Allah adalah salat tepat waktu.',
                'kitab_id'    => 3,
                'perawi_id'   => 10,  // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 197,
                'isi_hadist'  => 'Rasulullah bersabda: Barang siapa menempuh jalan untuk mencari ilmu, Allah mudahkan jalannya ke surga.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 198,
                'isi_hadist'  => 'Rasulullah bersabda: Memaafkan adalah bagian dari keutamaan iman.',
                'kitab_id'    => 3,
                'perawi_id'   => 11,  // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 199,
                'isi_hadist'  => 'Rasulullah bersabda: Orang yang menunjukkan kebaikan sama seperti pelakunya.',
                'kitab_id'    => 3,
                'perawi_id'   => 26,  // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 200,
                'isi_hadist'  => 'Rasulullah bersabda: Jangan kamu tertawa terlalu banyak, karena banyak tertawa mematikan hati.',
                'kitab_id'    => 3,
                'perawi_id'   => 1,   // Ibnu Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1,
                'isi_hadist'  => 'Amal itu tergantung niatnya, dan setiap orang mendapatkan sesuai dengan apa yang diniatkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 42,   // Umar bin Khattab
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2,
                'isi_hadist'  => 'Tidaklah salah seorang dari kalian beriman sampai ia mencintai saudaranya sebagaimana ia mencintai dirinya sendiri.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 3,
                'isi_hadist'  => 'Sebaik-baik kalian adalah yang belajar Al-Qur’an dan mengajarkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4,
                'isi_hadist'  => 'Mintalah pertolongan kepada Allah dan janganlah kalian merasa lemah.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5,
                'isi_hadist'  => 'Barangsiapa yang beriman kepada Allah dan hari akhir hendaklah berkata baik atau diam.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6,
                'isi_hadist'  => 'Sedekah tidak akan mengurangi harta, dan Allah akan menambah kemuliaan bagi seorang hamba yang pemaaf.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 7,
                'isi_hadist'  => 'Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 8,
                'isi_hadist'  => 'Jagalah Allah, niscaya Allah akan menjagamu. Jagalah Allah, niscaya kamu akan mendapati-Nya di hadapanmu.',
                'kitab_id'    => 4,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 9,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat kepada rupa kalian dan harta kalian, tetapi Allah melihat kepada hati dan amal kalian.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 10,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi dan tidak menyerahkannya kepada musuh.',
                'kitab_id'    => 4,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 11,
                'isi_hadist'  => 'Tidak halal bagi seorang muslim menakut-nakuti saudaranya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 12,
                'isi_hadist'  => 'Hak seorang muslim atas muslim lainnya ada enam: jika bertemu, berilah salam.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 13,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana saja kamu berada, dan ikutilah keburukan dengan kebaikan, niscaya ia akan menghapusnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 14,
                'isi_hadist'  => 'Barangsiapa yang menghilangkan satu kesusahan dunia dari seorang mukmin, maka Allah akan menghilangkan satu kesusahannya di hari kiamat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 15,
                'isi_hadist'  => 'Mudahkanlah, jangan mempersulit, dan berilah kabar gembira, jangan membuat orang lari.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 16,
                'isi_hadist'  => 'Tidak akan masuk surga orang yang dalam hatinya ada kesombongan seberat biji sawi.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 17,
                'isi_hadist'  => 'Barangsiapa beriman kepada Allah dan hari akhir, hendaklah ia memuliakan tamunya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 18,
                'isi_hadist'  => 'Orang muslim adalah saudara bagi muslim lainnya, tidak menzalimi, tidak membiarkannya dalam kesulitan, dan tidak menghinakannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 19,
                'isi_hadist'  => 'Tanda orang munafik ada tiga: jika berbicara dia berdusta, jika berjanji dia ingkar, dan jika dipercaya dia berkhianat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 20,
                'isi_hadist'  => 'Sesungguhnya agama itu mudah, dan tidaklah seseorang mempersulit agama kecuali akan mengalahkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 21,
                'isi_hadist'  => 'Sesungguhnya Allah itu baik dan tidak menerima kecuali yang baik.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 22,
                'isi_hadist'  => 'Hendaklah kalian jujur, karena kejujuran membawa kepada kebaikan, dan kebaikan membawa ke surga.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 23,
                'isi_hadist'  => 'Orang yang kuat bukanlah yang pandai bergulat, tetapi yang dapat mengendalikan dirinya ketika marah.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 24,
                'isi_hadist'  => 'Tidak beriman salah seorang dari kalian sampai dia mencintai saudaranya sebagaimana dia mencintai dirinya sendiri.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 25,
                'isi_hadist'  => 'Sebaik-baik kalian adalah yang paling baik akhlaknya terhadap keluarganya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 26,
                'isi_hadist'  => 'Sungguh, seorang hamba dapat berbicara dengan satu kata yang diridhai Allah tanpa ia sadari, Allah akan mengangkatnya beberapa derajat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 27,
                'isi_hadist'  => 'Tidak akan masuk surga orang yang memutus tali silaturahmi.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 28,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi, tidak membiarkannya dalam kesulitan, dan tidak menghinakannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 29,
                'isi_hadist'  => 'Ketahuilah, dalam tubuh ada segumpal daging, jika baik maka baiklah seluruh tubuh, jika rusak maka rusaklah seluruh tubuh, ketahuilah itu adalah hati.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 30,
                'isi_hadist'  => 'Barangsiapa beriman kepada Allah dan hari akhir hendaklah berkata baik atau diam.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 31,
                'isi_hadist'  => 'Hak seorang muslim atas muslim lainnya ada enam: jika bertemu maka berilah salam kepadanya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 32,
                'isi_hadist'  => 'Sedekah tidak akan mengurangi harta.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 33,
                'isi_hadist'  => 'Mintalah kepada Allah dengan keyakinan akan dikabulkan.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 34,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat rupa dan harta kalian, tetapi Allah melihat hati dan amal kalian.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 35,
                'isi_hadist'  => 'Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 36,
                'isi_hadist'  => 'Dunia adalah perhiasan, dan sebaik-baik perhiasan dunia adalah wanita shalihah.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 37,
                'isi_hadist'  => 'Tangan di atas lebih baik daripada tangan di bawah.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 38,
                'isi_hadist'  => 'Barangsiapa yang menunjuki kepada kebaikan maka dia akan mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 39,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana saja kamu berada, dan ikutilah keburukan dengan kebaikan, niscaya akan menghapusnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 40,
                'isi_hadist'  => 'Tidaklah seorang muslim menanam tanaman atau menabur benih, lalu dimakan oleh burung, manusia, atau binatang kecuali akan menjadi sedekah baginya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 41,
                'isi_hadist'  => 'Barangsiapa yang meringankan kesulitan seorang mukmin di dunia, Allah akan meringankan kesulitannya di akhirat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 42,
                'isi_hadist'  => 'Sesungguhnya Allah Maha Lembut dan menyukai kelembutan dalam segala urusan.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 43,
                'isi_hadist'  => 'Sesungguhnya kejujuran membawa kepada kebaikan dan kebaikan membawa ke surga.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 44,
                'isi_hadist'  => 'Orang yang menunjukkan kebaikan akan mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 45,
                'isi_hadist'  => 'Janganlah kalian saling iri, membenci, dan memutuskan hubungan. Jadilah kalian hamba Allah yang bersaudara.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 46,
                'isi_hadist'  => 'Tidaklah seseorang beriman hingga dia mencintai untuk saudaranya apa yang dia cintai untuk dirinya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 47,
                'isi_hadist'  => 'Barangsiapa yang menutupi aib seorang muslim, maka Allah akan menutupi aibnya di dunia dan akhirat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 48,
                'isi_hadist'  => 'Jagalah Allah, niscaya Allah akan menjagamu.',
                'kitab_id'    => 4,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 49,
                'isi_hadist'  => 'Tidaklah seseorang beriman hingga dia mencintai Rasulullah lebih dari dirinya sendiri.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 50,
                'isi_hadist'  => 'Sesungguhnya dunia itu terlaknat dan terlaknat apa yang ada di dalamnya kecuali zikir kepada Allah dan apa yang mendukungnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 51,
                'isi_hadist'  => 'Takutlah kepada Allah di mana saja kamu berada, dan ikutilah kejahatan dengan kebaikan, niscaya akan menghapusnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 52,
                'isi_hadist'  => 'Sesungguhnya yang paling aku takutkan atas kalian adalah syirik kecil, yaitu riya.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 53,
                'isi_hadist'  => 'Orang yang kuat bukanlah yang menang dalam bergulat, tetapi yang mampu mengendalikan dirinya saat marah.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 54,
                'isi_hadist'  => 'Barangsiapa yang menginginkan rizki diluaskan dan umurnya dipanjangkan, hendaklah dia menyambung silaturahmi.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 55,
                'isi_hadist'  => 'Sesungguhnya Allah mencintai kelembutan dalam segala urusan.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 56,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dekat denganku pada hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 57,
                'isi_hadist'  => 'Tidaklah seseorang diberikan kelembutan melainkan akan menghiasinya, dan tidaklah dicabut kelembutan melainkan akan memburukkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 58,
                'isi_hadist'  => 'Barangsiapa yang tidak menyayangi maka dia tidak akan disayangi.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 59,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi dan tidak menyerahkannya kepada musuh.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 60,
                'isi_hadist'  => 'Sesungguhnya agama ini mudah dan tidaklah seseorang mempersulit agama ini kecuali dia akan dikalahkan oleh agenda.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 61,
                'isi_hadist'  => 'Sesungguhnya orang yang paling sempurna imannya adalah yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 62,
                'isi_hadist'  => 'Sesungguhnya kejujuran membawa kepada kebaikan dan kebaikan membawa ke surga.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 63,
                'isi_hadist'  => 'Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 64,
                'isi_hadist'  => 'Tidak akan masuk surga orang yang dalam hatinya ada kesombongan seberat biji sawi.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 65,
                'isi_hadist'  => 'Jagalah Allah, niscaya Allah akan menjagamu.',
                'kitab_id'    => 4,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 66,
                'isi_hadist'  => 'Tidaklah seseorang beriman hingga dia mencintai untuk saudaranya apa yang dia cintai untuk dirinya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 67,
                'isi_hadist'  => 'Barangsiapa yang menunjukkan kepada kebaikan maka dia akan mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 68,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi dan tidak menghinakannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 69,
                'isi_hadist'  => 'Tangan di atas lebih baik daripada tangan di bawah.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 70,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana saja kamu berada, dan ikutilah keburukan dengan kebaikan, niscaya akan menghapusnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 71,
                'isi_hadist'  => 'Tidaklah seseorang diberikan kelembutan melainkan akan menghiasinya, dan tidaklah dicabut kelembutan melainkan akan memburukkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 72,
                'isi_hadist'  => 'Barangsiapa yang tidak menyayangi maka dia tidak akan disayangi.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 73,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dekat denganku pada hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 74,
                'isi_hadist'  => 'Sesungguhnya Rasulullah adalah manusia yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 75,
                'isi_hadist'  => 'Barangsiapa yang beriman kepada Allah dan hari akhir hendaklah berkata baik atau diam.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 76,
                'isi_hadist'  => 'Mintalah kepada Allah dengan keyakinan akan dikabulkan.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 77,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat rupa kalian, tetapi Allah melihat hati dan amal kalian.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 78,
                'isi_hadist'  => 'Tidaklah seorang muslim menanam tanaman lalu dimakan oleh burung atau manusia kecuali akan menjadi sedekah baginya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 79,
                'isi_hadist'  => 'Barangsiapa yang menghilangkan kesusahan seorang mukmin, maka Allah akan menghilangkan kesusahannya di akhirat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 80,
                'isi_hadist'  => 'Dunia adalah perhiasan, dan sebaik-baik perhiasan dunia adalah wanita yang shalihah.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 81,
                'isi_hadist'  => 'Sesungguhnya Allah Maha Baik dan tidak menerima kecuali yang baik.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 82,
                'isi_hadist'  => 'Sesungguhnya yang paling aku takutkan atas kalian adalah syirik kecil, yaitu riya.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 83,
                'isi_hadist'  => 'Permudahlah urusan dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 84,
                'isi_hadist'  => 'Orang kuat bukanlah yang menang dalam bergulat, tetapi yang mampu mengendalikan dirinya saat marah.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 85,
                'isi_hadist'  => 'Jagalah Allah, niscaya Allah akan menjagamu, dan jagalah Allah niscaya kamu akan mendapati-Nya di hadapanmu.',
                'kitab_id'    => 4,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 86,
                'isi_hadist'  => 'Tidaklah seseorang beriman hingga dia mencintai Rasulullah lebih dari dirinya sendiri, orang tuanya, dan semua manusia.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 87,
                'isi_hadist'  => 'Barangsiapa yang menunjuki kepada kebaikan, maka dia akan mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 88,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzaliminya dan tidak menghinanya.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 89,
                'isi_hadist'  => 'Sedekah tidak akan mengurangi harta, dan Allah akan menambah kemuliaan bagi seorang hamba yang pemaaf.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 90,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana saja kamu berada, dan ikutilah keburukan dengan kebaikan, niscaya akan menghapusnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 91,
                'isi_hadist'  => 'Tidaklah kelembutan ada pada sesuatu melainkan akan menghiasinya, dan tidaklah dicabut kelembutan melainkan akan memburukkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 92,
                'isi_hadist'  => 'Barangsiapa yang tidak menyayangi, maka dia tidak akan disayangi.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 93,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dekat dengan Rasulullah pada hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 94,
                'isi_hadist'  => 'Tidak beriman seseorang hingga dia mencintai untuk saudaranya apa yang dia cintai untuk dirinya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 95,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat kepada rupa kalian dan harta kalian, tetapi kepada hati dan amal kalian.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 96,
                'isi_hadist'  => 'Mintalah kepada Allah dengan keyakinan akan dikabulkan, dan ketahuilah bahwa Allah tidak akan mengabulkan doa dari hati yang lalai dan main-main.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 97,
                'isi_hadist'  => 'Barangsiapa beriman kepada Allah dan hari akhir hendaklah berkata baik atau diam.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 98,
                'isi_hadist'  => 'Tidaklah seorang muslim menanam tanaman lalu dimakan oleh burung, manusia, atau binatang, kecuali menjadi sedekah baginya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 99,
                'isi_hadist'  => 'Barangsiapa yang menghilangkan satu kesulitan seorang mukmin di dunia, Allah akan menghilangkan satu kesulitannya di akhirat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 100,
                'isi_hadist'  => 'Dunia adalah perhiasan, dan sebaik-baik perhiasan dunia adalah wanita shalihah.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 101,
                'isi_hadist'  => 'Sesungguhnya agama itu mudah, dan tidaklah seseorang mempersulit agama ini kecuali dia akan dikalahkan olehnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 102,
                'isi_hadist'  => 'Sesungguhnya kejujuran membawa kepada kebaikan dan kebaikan membawa ke surga.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 103,
                'isi_hadist'  => 'Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 104,
                'isi_hadist'  => 'Orang yang kuat bukanlah yang menang bergulat, tetapi yang mampu menahan diri saat marah.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 105,
                'isi_hadist'  => 'Jagalah Allah, niscaya Allah akan menjagamu, dan jagalah Allah niscaya kamu akan mendapati-Nya di hadapanmu.',
                'kitab_id'    => 4,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 106,
                'isi_hadist'  => 'Tidaklah seseorang beriman hingga dia mencintai Rasulullah lebih dari dirinya sendiri, orang tuanya, dan semua manusia.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 107,
                'isi_hadist'  => 'Barangsiapa yang menunjukkan kebaikan maka dia akan mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 108,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi dan tidak menghinanya.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 109,
                'isi_hadist'  => 'Sedekah tidak akan mengurangi harta, dan Allah akan menambah kemuliaan bagi seorang hamba yang pemaaf.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 110,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana saja kamu berada, dan ikutilah kejahatan dengan kebaikan, niscaya akan menghapusnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 111,
                'isi_hadist'  => 'Tidaklah kelembutan ada pada sesuatu melainkan akan menghiasinya, dan tidaklah dicabut kelembutan melainkan akan memburukkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 112,
                'isi_hadist'  => 'Barangsiapa yang tidak menyayangi, maka dia tidak akan disayangi.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 113,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dekat dengan Rasulullah pada hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 114,
                'isi_hadist'  => 'Sesungguhnya Rasulullah adalah manusia yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 115,
                'isi_hadist'  => 'Barangsiapa beriman kepada Allah dan hari akhir hendaklah berkata baik atau diam.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 116,
                'isi_hadist'  => 'Mintalah kepada Allah dengan keyakinan akan dikabulkan.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 117,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat kepada rupa kalian dan harta kalian, tetapi kepada hati dan amal kalian.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 118,
                'isi_hadist'  => 'Tidaklah seorang muslim menanam tanaman lalu dimakan oleh burung, manusia, atau binatang, kecuali menjadi sedekah baginya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 119,
                'isi_hadist'  => 'Barangsiapa yang menghilangkan satu kesulitan seorang mukmin di dunia, Allah akan menghilangkan satu kesulitannya di akhirat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 120,
                'isi_hadist'  => 'Dunia adalah perhiasan, dan sebaik-baik perhiasan dunia adalah wanita shalihah.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 121,
                'isi_hadist'  => 'Sesungguhnya agama ini mudah, dan tidaklah seseorang mempersulit agama ini kecuali akan dikalahkan olehnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 122,
                'isi_hadist'  => 'Sesungguhnya kejujuran membawa kepada kebaikan dan kebaikan membawa ke surga, sedangkan dusta membawa kepada kejahatan dan kejahatan membawa ke neraka.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 123,
                'isi_hadist'  => 'Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 124,
                'isi_hadist'  => 'Orang yang kuat bukanlah yang menang dalam bergulat, tetapi yang mampu mengendalikan dirinya saat marah.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 125,
                'isi_hadist'  => 'Jagalah Allah, niscaya Allah akan menjagamu, dan jagalah Allah niscaya kamu akan mendapati-Nya di hadapanmu.',
                'kitab_id'    => 4,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 126,
                'isi_hadist'  => 'Tidaklah sempurna iman seseorang hingga dia mencintai untuk saudaranya apa yang dia cintai untuk dirinya sendiri.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 127,
                'isi_hadist'  => 'Barangsiapa yang menunjukkan kepada kebaikan, dia akan mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 128,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi dan tidak menghinanya.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 129,
                'isi_hadist'  => 'Sedekah tidak mengurangi harta, Allah akan menambah kemuliaan bagi hamba yang pemaaf.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 130,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana saja kamu berada, dan ikutilah keburukan dengan kebaikan, niscaya akan menghapusnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 131,
                'isi_hadist'  => 'Tidaklah kelembutan berada pada sesuatu melainkan akan menghiasinya, dan tidaklah dicabut kelembutan melainkan akan memburukkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 132,
                'isi_hadist'  => 'Barangsiapa yang tidak menyayangi, maka dia tidak akan disayangi.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 133,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dekat dengan Rasulullah pada hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 134,
                'isi_hadist'  => 'Rasulullah adalah manusia yang paling baik akhlaknya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 135,
                'isi_hadist'  => 'Barangsiapa beriman kepada Allah dan hari akhir hendaklah berkata baik atau diam.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 136,
                'isi_hadist'  => 'Mintalah kepada Allah dengan keyakinan akan dikabulkan, karena Allah tidak menerima doa dari hati yang lalai.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 137,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat rupa dan harta kalian, tetapi melihat hati dan amal kalian.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 138,
                'isi_hadist'  => 'Tidaklah seorang muslim menanam tanaman lalu dimakan oleh burung, manusia, atau binatang, kecuali menjadi sedekah baginya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 139,
                'isi_hadist'  => 'Barangsiapa yang menghilangkan kesulitan seorang mukmin di dunia, Allah akan menghilangkan kesulitannya di akhirat.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 140,
                'isi_hadist'  => 'Dunia adalah perhiasan, dan sebaik-baik perhiasan dunia adalah wanita shalihah.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 141,
                'isi_hadist'  => 'Sesungguhnya Allah Maha Lembut dan menyukai kelembutan dalam segala urusan.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 142,
                'isi_hadist'  => 'Sesungguhnya amal itu tergantung pada niat, dan setiap orang mendapatkan sesuai dengan apa yang diniatkannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 143,
                'isi_hadist'  => 'Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 144,
                'isi_hadist'  => 'Orang yang kuat bukanlah yang menang dalam gulat, tetapi yang mampu menahan diri saat marah.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 145,
                'isi_hadist'  => 'Jagalah Allah, niscaya Allah akan menjagamu.',
                'kitab_id'    => 4,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 146,
                'isi_hadist'  => 'Tidak sempurna iman seseorang hingga dia mencintai untuk saudaranya apa yang dia cintai untuk dirinya.',
                'kitab_id'    => 4,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 147,
                'isi_hadist'  => 'Barangsiapa yang menunjukkan kepada kebaikan, dia akan mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 148,
                'isi_hadist'  => 'Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi dan tidak menghinanya.',
                'kitab_id'    => 4,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 149,
                'isi_hadist'  => 'Barangsiapa beriman kepada Allah dan hari akhir, hendaklah berkata baik atau diam.',
                'kitab_id'    => 4,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 150,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana saja kamu berada, dan ikutilah keburukan dengan kebaikan, niscaya akan menghapusnya.',
                'kitab_id'    => 4,
                'perawi_id'   => 10,   // Abu Dzar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            
            [
                'no_hadist'   => 1,
                'isi_hadist'  => 'Rasulullah bersabda, “Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 2,
                'isi_hadist'  => 'Rasulullah bersabda, “Mukmin yang kuat lebih baik dan lebih dicintai Allah daripada mukmin yang lemah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 3,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang terbaik terhadap keluarganya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 4,
                'isi_hadist'  => 'Rasulullah bersabda, “Islam dibangun atas lima perkara: syahadat, shalat, zakat, puasa, dan haji.”',
                'kitab_id'    => 5,
                'perawi_id'   => 6,    // Abdullah bin Umar
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang beriman kepada Allah dan hari akhir, hendaklah ia berkata baik atau diam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 6,
                'isi_hadist'  => 'Rasulullah bersabda, “Shalatlah kalian sebelum matahari terbenam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 7,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak boleh ada bahaya dan tidak boleh membahayakan orang lain.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,   // Abu Said Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 8,
                'isi_hadist'  => 'Rasulullah bersabda, “Sedekah tidak akan mengurangi harta.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 9,
                'isi_hadist'  => 'Rasulullah bersabda, “Perumpamaan orang mukmin yang membaca Al-Qur’an seperti buah utrujjah, baunya harum dan rasanya enak.”',
                'kitab_id'    => 5,
                'perawi_id'   => 14,   // Abu Musa Al-Asy’ari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 10,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak masuk surga orang yang ada dalam hatinya kesombongan sebesar biji sawi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 11,
                'isi_hadist'  => 'Rasulullah bersabda, “Bila salah seorang di antara kalian bersin, hendaklah mengucapkan ‘Alhamdulillah’.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 12,
                'isi_hadist'  => 'Rasulullah bersabda, “Mudahkanlah urusan, jangan persulit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 13,
                'isi_hadist'  => 'Rasulullah bersabda, “Seorang muslim adalah saudara bagi muslim lainnya, tidak menzalimi dan tidak menyerahkannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 14,
                'isi_hadist'  => 'Rasulullah bersabda, “Takutlah kepada Allah di mana pun kamu berada.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,   // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 15,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak beriman salah seorang di antara kalian sampai ia mencintai saudaranya sebagaimana ia mencintai dirinya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 16,
                'isi_hadist'  => 'Rasulullah bersabda, “Tanda orang munafik ada tiga: jika berbicara berdusta, jika berjanji mengingkari, dan jika diberi amanah berkhianat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 17,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah itu Maha Lembut dan mencintai kelembutan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 18,
                'isi_hadist'  => 'Rasulullah bersabda, “Kebersihan adalah sebagian dari iman.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 19,
                'isi_hadist'  => 'Rasulullah bersabda, “Jaga Allah, niscaya Dia akan menjagamu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 20,
                'isi_hadist'  => 'Rasulullah bersabda, “Tangan di atas lebih baik daripada tangan di bawah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 21,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang yang menunjukkan kepada kebaikan, ia mendapatkan pahala seperti orang yang melakukannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 22,
                'isi_hadist'  => 'Rasulullah bersabda, “Berlemah lembutlah kalian, karena kelembutan tidak ada pada sesuatu melainkan akan memperindahnya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 23,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya kejujuran membawa kepada kebaikan, dan kebaikan membawa ke surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 24,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa menghilangkan kesulitan seorang mukmin di dunia, maka Allah akan menghilangkan kesulitannya di hari kiamat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 25,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa menempuh jalan untuk mencari ilmu, maka Allah akan memudahkan baginya jalan menuju surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 26,
                'isi_hadist'  => 'Rasulullah bersabda, “Hak seorang muslim atas muslim lainnya ada enam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 27,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya darah kalian, harta kalian, dan kehormatan kalian adalah haram atas kalian.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 28,
                'isi_hadist'  => 'Rasulullah bersabda, “Amalan yang paling dicintai Allah adalah yang paling rutin meskipun sedikit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,   // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 29,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak termasuk golongan kami orang yang tidak menyayangi yang lebih muda dan tidak menghormati yang lebih tua.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 30,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak akan masuk surga orang yang memutus tali silaturahmi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 31,
                'isi_hadist'  => 'Rasulullah bersabda, “Sedikit bicara adalah bagian dari kebijaksanaan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,   // Abu Dzar Al-Ghifari
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 32,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak halal darah seorang muslim kecuali dengan tiga hal: orang yang menikah berzina, orang yang membunuh, dan orang yang meninggalkan agama.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas’ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 33,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang mempelajari Al-Qur’an dan mengajarkannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 34,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kalian iri hati.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,   // Abu Said Al-Khudri
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 35,
                'isi_hadist'  => 'Rasulullah bersabda, “Agama itu nasihat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 36,
                'isi_hadist'  => 'Rasulullah bersabda, “Setiap kebaikan adalah sedekah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 37,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang menipu kami, maka bukan dari golongan kami.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 38,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,   // Jabir bin Abdullah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 39,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak akan berkurang harta karena sedekah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 40,
                'isi_hadist'  => 'Rasulullah bersabda, “Permudahlah urusan dan jangan mempersulit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 41,
                'isi_hadist'  => 'Rasulullah bersabda, “Allah tidak melihat rupa dan harta kalian, tetapi melihat hati dan amal kalian.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 42,
                'isi_hadist'  => 'Rasulullah bersabda, “Berwasiatlah kepada wanita dengan baik.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 43,
                'isi_hadist'  => 'Rasulullah bersabda, “Bersikap jujurlah, karena kejujuran membawa kepada kebaikan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 44,
                'isi_hadist'  => 'Rasulullah bersabda, “Pemaaf bukanlah karena lemah, tapi karena kekuatan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 45,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa memudahkan urusan orang lain, Allah akan memudahkan urusannya di dunia dan akhirat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 46,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang yang paling dicintai Allah adalah yang paling bermanfaat bagi manusia.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 47,
                'isi_hadist'  => 'Rasulullah bersabda, “Makanan dua orang cukup untuk tiga, makanan tiga cukup untuk empat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 48,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah itu indah dan mencintai keindahan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 49,
                'isi_hadist'  => 'Rasulullah bersabda, “Menyebarkan salam termasuk bagian dari iman.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 50,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kalian saling membenci dan memutuskan hubungan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 51–60 */
            [
                'no_hadist'   => 51,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik manusia adalah yang paling panjang umurnya dan baik amalnya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 52,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa beriman kepada Allah dan hari akhir, hendaklah menghormati tamunya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 53,
                'isi_hadist'  => 'Rasulullah bersabda, “Tuntutlah ilmu dari buaian hingga liang lahat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 54,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kalian duduk di jalan kecuali memberi hak jalan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 55,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak sempurna iman seseorang hingga ia mencintai saudaranya seperti mencintai dirinya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 56,
                'isi_hadist'  => 'Rasulullah bersabda, “Tebarkan salam di antara kalian.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 57,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah Maha Pengampun dan Maha Penyayang.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 58,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa menutup aib seorang muslim, Allah akan menutup aibnya di dunia dan akhirat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 59,
                'isi_hadist'  => 'Rasulullah bersabda, “Berikanlah kemudahan dan jangan mempersulit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 60,
                'isi_hadist'  => 'Rasulullah bersabda, “Hendaklah salah seorang di antara kalian mengucapkan salam ketika bertemu saudaranya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 61–70 */
            [
                'no_hadist'   => 61,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang yang kuat bukan yang pandai bergulat, tetapi yang mampu menahan marah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 62,
                'isi_hadist'  => 'Rasulullah bersabda, “Doa adalah senjata orang mukmin.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 63,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya yang halal itu jelas dan yang haram itu jelas.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 64,
                'isi_hadist'  => 'Rasulullah bersabda, “Senyummu kepada saudaramu adalah sedekah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 65,
                'isi_hadist'  => 'Rasulullah bersabda, “Mintalah pertolongan kepada Allah dan jangan lemah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 66,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa beriman kepada Allah dan hari akhir, hendaklah menyambung tali silaturahmi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 67,
                'isi_hadist'  => 'Rasulullah bersabda, “Haji mabrur tidak ada balasan selain surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 68,
                'isi_hadist'  => 'Rasulullah bersabda, “Shalat adalah tiang agama.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 69,
                'isi_hadist'  => 'Rasulullah bersabda, “Bantulah saudaramu yang zalim atau dizalimi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 70,
                'isi_hadist'  => 'Rasulullah bersabda, “Apabila salah seorang di antara kalian marah, hendaklah ia diam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 71–80 */
            [
                'no_hadist'   => 71,
                'isi_hadist'  => 'Rasulullah bersabda, “Bertakwalah di mana pun kamu berada.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 72,
                'isi_hadist'  => 'Rasulullah bersabda, “Malu itu bagian dari iman.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 73,
                'isi_hadist'  => 'Rasulullah bersabda, “Sedekah dapat memadamkan api kemarahan Allah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 74,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya dunia ini manis dan hijau, dan Allah menjadikan kalian sebagai pengelola di dalamnya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 75,
                'isi_hadist'  => 'Rasulullah bersabda, “Permudahlah urusan dan jangan mempersulit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 76,
                'isi_hadist'  => 'Rasulullah bersabda, “Jauhilah prasangka, karena prasangka adalah perkataan yang paling dusta.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 77,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak akan masuk surga orang yang dalam hatinya terdapat kesombongan sebesar biji sawi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 78,
                'isi_hadist'  => 'Rasulullah bersabda, “Timbangan yang paling berat pada hari kiamat adalah akhlak yang baik.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 79,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang tidak menyayangi, maka ia tidak akan disayangi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 80,
                'isi_hadist'  => 'Rasulullah bersabda, “Tebarkanlah salam di antara kalian.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 81,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kalian saling membenci dan saling memutuskan hubungan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 82,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah itu baik dan hanya menerima yang baik.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 83,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kamu meremehkan kebaikan sedikit pun.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 84,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang memberi kemudahan, Allah akan memudahkannya di dunia dan akhirat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 85,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah itu Maha Pemaaf dan mencintai pemaaf.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 86,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya orang yang paling dibenci oleh Allah adalah yang paling suka bertengkar.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 87,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kalian duduk di jalanan kecuali bila kalian memberikan haknya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 88,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang paling baik akhlaknya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 89,
                'isi_hadist'  => 'Rasulullah bersabda, “Agama itu mudah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 90,
                'isi_hadist'  => 'Rasulullah bersabda, “Hendaklah orang yang hadir menyampaikan kepada yang tidak hadir.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 91–100 */
            [
                'no_hadist'   => 91,
                'isi_hadist'  => 'Rasulullah bersabda, “Takutlah kamu kepada doa orang yang terzalimi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 92,
                'isi_hadist'  => 'Rasulullah bersabda, “Allah tidak menilai tubuh dan rupa kalian, tetapi menilai hati dan amal kalian.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 93,
                'isi_hadist'  => 'Rasulullah bersabda, “Mukmin dengan mukmin lainnya seperti bangunan yang saling menguatkan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 94,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang berpuasa Ramadan karena iman dan mengharap pahala, diampuni dosanya yang telah lalu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 95,
                'isi_hadist'  => 'Rasulullah bersabda, “Menyebarkan salam termasuk tanda keimanan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 96,
                'isi_hadist'  => 'Rasulullah bersabda, “Tangan yang di atas lebih baik daripada tangan yang di bawah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 97,
                'isi_hadist'  => 'Rasulullah bersabda, “Peliharalah Allah, niscaya Dia akan memeliharamu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 98,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang mempelajari Al-Qur’an dan mengajarkannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 99,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang yang memutuskan silaturahmi tidak akan masuk surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 100,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa membantu kebutuhan saudaranya, maka Allah akan membantu kebutuhannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 101–110 */
            [
                'no_hadist'   => 101,
                'isi_hadist'  => 'Rasulullah bersabda, “Jauhilah prasangka, karena prasangka adalah perkataan paling dusta.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 102,
                'isi_hadist'  => 'Rasulullah bersabda, “Saling memberi hadiahlah kalian, maka kalian akan saling mencintai.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 103,
                'isi_hadist'  => 'Rasulullah bersabda, “Tanda orang munafik ada tiga: jika berbicara dusta, jika berjanji ingkar, jika dipercaya berkhianat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 104,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang memudahkan kesulitan orang lain, Allah akan memudahkannya di dunia dan akhirat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 105,
                'isi_hadist'  => 'Rasulullah bersabda, “Berlaku lembutlah kalian kepada wanita.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 106,
                'isi_hadist'  => 'Rasulullah bersabda, “Sedekah itu dapat memadamkan dosa sebagaimana air memadamkan api.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 107,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya shalat itu adalah cahaya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 108,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang paling baik kepada keluarganya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 109,
                'isi_hadist'  => 'Rasulullah bersabda, “Jangan marah, maka bagimu surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 110,
                'isi_hadist'  => 'Rasulullah bersabda, “Mukmin satu dengan yang lain seperti satu bangunan yang saling menguatkan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 111–120 */
            [
                'no_hadist'   => 111,
                'isi_hadist'  => 'Rasulullah bersabda, “Takutlah kamu kepada doa orang yang teraniaya, karena tidak ada hijab antara dia dengan Allah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 112,
                'isi_hadist'  => 'Rasulullah bersabda, “Shalatlah sebelum matahari terbit dan sebelum matahari terbenam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 113,
                'isi_hadist'  => 'Rasulullah bersabda, “Bukanlah orang kuat itu yang menang dalam bergulat, tetapi yang mampu menahan diri ketika marah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 114,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya dunia ini hijau dan manis, dan Allah menjadikan kalian sebagai pengurusnya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 115,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak sempurna iman seseorang hingga dia mencintai saudaranya seperti mencintai dirinya sendiri.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 116,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang beriman kepada Allah dan hari akhir, hendaklah berkata baik atau diam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 117,
                'isi_hadist'  => 'Rasulullah bersabda, “Jagalah Allah, niscaya Dia akan menjagamu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 118,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang mempelajari Al-Qur’an dan mengajarkannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 119,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang yang memutuskan silaturahmi tidak akan masuk surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 120,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa membantu kebutuhan saudaranya, maka Allah akan membantu kebutuhannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 121–130 */
            [
                'no_hadist'   => 121,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah tidak melihat rupa kalian, tetapi melihat hati dan amal kalian.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 122,
                'isi_hadist'  => 'Rasulullah bersabda, “Permudahlah urusan dan jangan mempersulit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 123,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang yang paling dicintai Allah adalah yang paling bermanfaat bagi manusia.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 124,
                'isi_hadist'  => 'Rasulullah bersabda, “Senyumanmu kepada saudaramu adalah sedekah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 125,
                'isi_hadist'  => 'Rasulullah bersabda, “Peliharalah Allah, niscaya Dia akan memeliharamu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 126,
                'isi_hadist'  => 'Rasulullah bersabda, “Bersedekahlah meskipun dengan setengah biji kurma.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 127,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik manusia adalah yang panjang umurnya dan baik amalnya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 128,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah itu Maha Lembut dan mencintai kelembutan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 129,
                'isi_hadist'  => 'Rasulullah bersabda, “Siapa yang tidak menyayangi, tidak akan disayangi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 130,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa menghilangkan kesulitan seorang mukmin, Allah akan menghilangkan kesulitannya di hari kiamat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 131,
                'isi_hadist'  => 'Rasulullah bersabda, “Takutlah kepada Allah di mana pun kamu berada.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 132,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa beriman kepada Allah dan hari akhir, hendaklah ia memuliakan tamunya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 133,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya amal yang paling dicintai Allah adalah yang paling rutin walaupun sedikit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 134,
                'isi_hadist'  => 'Rasulullah bersabda, “Tangan di atas lebih baik daripada tangan di bawah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 135,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak akan masuk surga orang yang memutus silaturahmi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 136,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah itu indah dan mencintai keindahan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 137,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang menempuh jalan untuk mencari ilmu, Allah akan memudahkan jalannya menuju surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 138,
                'isi_hadist'  => 'Rasulullah bersabda, “Shalat adalah tiang agama.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 139,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kamu marah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 140,
                'isi_hadist'  => 'Rasulullah bersabda, “Tebarkanlah salam di antara kalian.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 141–150 */
            [
                'no_hadist'   => 141,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang mukmin dengan mukmin lainnya seperti bangunan yang saling menguatkan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 142,
                'isi_hadist'  => 'Rasulullah bersabda, “Agama itu nasihat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 143,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak halal darah seorang muslim kecuali dengan tiga sebab: zina, membunuh, dan meninggalkan agama.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 144,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya setiap kebaikan adalah sedekah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 145,
                'isi_hadist'  => 'Rasulullah bersabda, “Tanda orang munafik ada tiga: jika berbicara berdusta, jika berjanji ingkar, jika dipercaya berkhianat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 146,
                'isi_hadist'  => 'Rasulullah bersabda, “Sedekah tidak mengurangi harta.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 147,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya shalat itu cahaya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 148,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang paling baik kepada keluarganya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 149,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah itu Maha Pengampun dan mencintai pengampunan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 150,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa menutup aib seorang muslim, Allah akan menutup aibnya di dunia dan akhirat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 151–160 */
            [
                'no_hadist'   => 151,
                'isi_hadist'  => 'Rasulullah bersabda, “Takutlah kepada doa orang yang dizalimi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 152,
                'isi_hadist'  => 'Rasulullah bersabda, “Shalatlah sebelum matahari terbit dan sebelum matahari terbenam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 153,
                'isi_hadist'  => 'Rasulullah bersabda, “Mukmin itu tidak mencela, tidak melaknat, dan tidak berkata kotor.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 154,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kalian iri hati.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 155,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kalian saling membenci dan saling memutuskan hubungan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 156,
                'isi_hadist'  => 'Rasulullah bersabda, “Jauhilah prasangka, karena prasangka adalah perkataan paling dusta.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 157,
                'isi_hadist'  => 'Rasulullah bersabda, “Peliharalah Allah, niscaya Dia akan memeliharamu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 158,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang mempelajari Al-Qur’an dan mengajarkannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 159,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang yang memutus silaturahmi tidak akan masuk surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 160,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa membantu kebutuhan saudaranya, Allah akan membantu kebutuhannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],

            /* 161–170 */
            [
                'no_hadist'   => 161,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah mencintai kelembutan dalam segala urusan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 162,
                'isi_hadist'  => 'Rasulullah bersabda, “Malu adalah bagian dari iman.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 163,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang panjang umurnya dan baik amalnya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 164,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa menghilangkan kesulitan seorang mukmin, Allah akan menghilangkan kesulitannya pada hari kiamat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 165,
                'isi_hadist'  => 'Rasulullah bersabda, “Jagalah Allah, niscaya Allah akan menjagamu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 166,
                'isi_hadist'  => 'Rasulullah bersabda, “Tangan di atas lebih baik daripada tangan di bawah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 167,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa beriman kepada Allah dan hari akhir, hendaklah berkata baik atau diam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 168,
                'isi_hadist'  => 'Rasulullah bersabda, “Amalan yang paling dicintai Allah adalah amalan yang dilakukan terus-menerus walaupun sedikit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 169,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya Allah itu indah dan mencintai keindahan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 170,
                'isi_hadist'  => 'Rasulullah bersabda, “Janganlah kalian saling membenci dan memutuskan hubungan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 171,
                'isi_hadist'  => 'Rasulullah bersabda, “Takutlah kepada doa orang yang terzalimi, karena tidak ada penghalang antara dia dengan Allah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 172,
                'isi_hadist'  => 'Rasulullah bersabda, “Shalatlah sebelum matahari terbit dan sebelum matahari terbenam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 173,
                'isi_hadist'  => 'Rasulullah bersabda, “Sedekah tidak akan mengurangi harta.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 174,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya dunia ini manis dan hijau, dan Allah menjadikan kalian sebagai pengelola.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 175,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak sempurna iman seseorang hingga ia mencintai saudaranya seperti mencintai dirinya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 176,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya amal yang paling dicintai Allah adalah amalan yang terus-menerus walaupun sedikit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 177,
                'isi_hadist'  => 'Rasulullah bersabda, “Peliharalah Allah, niscaya Dia akan memeliharamu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 178,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang mempelajari Al-Qur’an dan mengajarkannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 179,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa memutuskan silaturahmi, maka tidak akan masuk surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 180,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa membantu kebutuhan saudaranya, maka Allah akan membantu kebutuhannya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 181,
                'isi_hadist'  => 'Rasulullah bersabda, “Senyummu kepada saudaramu adalah sedekah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 182,
                'isi_hadist'  => 'Rasulullah bersabda, “Tebarkanlah salam di antara kalian.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 183,
                'isi_hadist'  => 'Rasulullah bersabda, “Kejujuran membawa kepada kebaikan, dan kebaikan membawa ke surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 184,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa menutup aib seorang muslim, Allah akan menutup aibnya di dunia dan akhirat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 185,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa menempuh jalan untuk mencari ilmu, Allah akan memudahkan jalannya menuju surga.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 186,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa yang beriman kepada Allah dan hari akhir, hendaklah berkata baik atau diam.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 187,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya shalat adalah tiang agama.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 188,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik kalian adalah yang paling baik kepada keluarganya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 189,
                'isi_hadist'  => 'Rasulullah bersabda, “Permudahlah urusan dan jangan mempersulit.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 190,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak akan masuk surga orang yang memutus tali silaturahmi.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 191,
                'isi_hadist'  => 'Rasulullah bersabda, “Takutlah kepada Allah di mana pun kamu berada.”',
                'kitab_id'    => 5,
                'perawi_id'   => 10,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 192,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak sempurna iman seseorang hingga ia mencintai saudaranya sebagaimana mencintai dirinya sendiri.”',
                'kitab_id'    => 5,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 193,
                'isi_hadist'  => 'Rasulullah bersabda, “Setiap kebaikan adalah sedekah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 194,
                'isi_hadist'  => 'Rasulullah bersabda, “Sesungguhnya dunia ini hijau dan manis, dan Allah menjadikan kalian sebagai pengelolanya.”',
                'kitab_id'    => 5,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 195,
                'isi_hadist'  => 'Rasulullah bersabda, “Tidak akan berkurang harta karena sedekah.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 196,
                'isi_hadist'  => 'Rasulullah bersabda, “Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 197,
                'isi_hadist'  => 'Rasulullah bersabda, “Peliharalah Allah, niscaya Dia akan memeliharamu.”',
                'kitab_id'    => 5,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 198,
                'isi_hadist'  => 'Rasulullah bersabda, “Barangsiapa memberi kemudahan kepada orang yang kesulitan, Allah akan memberi kemudahan baginya di dunia dan akhirat.”',
                'kitab_id'    => 5,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 199,
                'isi_hadist'  => 'Rasulullah bersabda, “Sedekah memadamkan dosa sebagaimana air memadamkan api.”',
                'kitab_id'    => 5,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 200,
                'isi_hadist'  => 'Rasulullah bersabda, “Orang mukmin dengan mukmin lainnya seperti satu bangunan yang saling menguatkan.”',
                'kitab_id'    => 5,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 1,
                'isi_hadist'  => 'Rasulullah bersabda: "Sesungguhnya amal-amal itu tergantung niatnya..."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 5,
                'isi_hadist'  => '"Tidak ada shalat bagi yang tidak membaca Al-Fatihah."',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 10,
                'isi_hadist'  => '"Sebaik-baik kalian adalah yang paling baik terhadap keluarganya."',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 15,
                'isi_hadist'  => '"Islam dibangun atas lima perkara..."',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 20,
                'isi_hadist'  => '"Barang siapa yang beriman kepada Allah dan hari akhir hendaklah berkata baik..."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 23,
                'isi_hadist'  => '"Mudahkanlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari."',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 30,
                'isi_hadist'  => '"Tidak beriman salah satu dari kalian hingga dia mencintai saudaranya seperti dirinya sendiri."',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 35,
                'isi_hadist'  => '"Tangan di atas lebih baik daripada tangan di bawah."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 40,
                'isi_hadist'  => '"Mintalah ilmu, karena mempelajarinya karena Allah adalah ibadah."',
                'kitab_id'    => 6,
                'perawi_id'   => 21, // Ali bin Abi Thalib
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 45,
                'isi_hadist'  => '"Hisablah diri kalian sebelum kalian dihisab."',
                'kitab_id'    => 6,
                'perawi_id'   => 42, // Umar bin Khattab
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 50,
                'isi_hadist'  => '"Sedekah tidak akan mengurangi harta."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 55,
                'isi_hadist'  => '"Sesungguhnya orang yang jujur berada di atas kebaikan."',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 60,
                'isi_hadist'  => '"Sebaik-baik kalian adalah yang paling baik akhlaknya."',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 65,
                'isi_hadist'  => '"Siapa yang memudahkan kesulitan seorang mukmin, Allah akan memudahkannya."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 70,
                'isi_hadist'  => '"Barang siapa yang tidak menyayangi maka tidak akan disayangi."',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 75,
                'isi_hadist'  => '"Janganlah kalian saling membenci dan saling memutuskan hubungan."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 80,
                'isi_hadist'  => '"Permudahlah, jangan persulit."',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 85,
                'isi_hadist'  => '"Hendaklah orang yang hadir menyampaikan kepada yang tidak hadir."',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 90,
                'isi_hadist'  => '"Tuntutlah ilmu dari buaian hingga ke liang lahat."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 95,
                'isi_hadist'  => '"Setiap kamu adalah pemimpin dan akan dimintai pertanggungjawaban."',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 100,
                'isi_hadist'  => '"Orang mukmin yang kuat lebih baik dan lebih dicintai Allah daripada mukmin yang lemah."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 105,
                'isi_hadist'  => '"Senyummu di hadapan saudaramu adalah sedekah."',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 110,
                'isi_hadist'  => '"Rasulullah suka memulai dari yang kanan."',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 115,
                'isi_hadist'  => '"Tidak akan masuk surga orang yang di dalam hatinya ada kesombongan seberat biji sawi."',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 120,
                'isi_hadist'  => '"Yang terbaik di antara kalian adalah yang belajar Al-Qur’an dan mengajarkannya."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 125,
                'isi_hadist'  => '"Permudahlah, jangan persulit, berilah kabar gembira, jangan membuat orang lari."',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 130,
                'isi_hadist'  => '"Barang siapa yang berpuasa satu hari di jalan Allah, Allah akan menjauhkan wajahnya dari neraka sejauh tujuh puluh tahun."',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 135,
                'isi_hadist'  => '"Sesungguhnya Allah itu baik dan hanya menerima yang baik."',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 140,
                'isi_hadist'  => '"Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lain."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 145,
                'isi_hadist'  => '"Kasih sayang tidaklah dicabut melainkan dari hati orang yang celaka."',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 150,
                'isi_hadist'  => '"Hendaklah kamu berkata benar meski itu pahit."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 155,
                'isi_hadist'  => '"Tidak sempurna iman seseorang sehingga ia mencintai saudaranya seperti mencintai dirinya."',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 160,
                'isi_hadist'  => '"Bertakwalah kepada Allah di manapun kamu berada."',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 165,
                'isi_hadist'  => '"Sesungguhnya dunia itu manis dan hijau, dan Allah menjadikan kalian sebagai khalifah di dalamnya."',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 170,
                'isi_hadist'  => '"Janganlah kalian saling iri hati, saling membenci, dan saling memutuskan hubungan."',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 175,
                'isi_hadist'  => '"Barang siapa yang menunjukkan kepada kebaikan, maka ia mendapatkan pahala seperti orang yang mengerjakannya."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 180,
                'isi_hadist'  => '"Sesungguhnya Allah itu Maha Lembut dan menyukai kelembutan dalam segala urusan."',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 185,
                'isi_hadist'  => '"Saling memberi salam akan menumbuhkan rasa cinta di antara kalian."',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 190,
                'isi_hadist'  => '"Janganlah kalian saling mendengki, dan jangan saling membenci."',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 195,
                'isi_hadist'  => '"Sesungguhnya kejujuran membawa kepada kebaikan."',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 200,
                'isi_hadist'  => 'Barang siapa beriman kepada Allah dan hari akhir hendaklah memuliakan tamunya.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 205,
                'isi_hadist'  => 'Rasulullah melarang keras kita berbohong dalam bercanda.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 210,
                'isi_hadist'  => 'Tidak termasuk golongan kami orang yang tidak menyayangi yang muda dan menghormati yang tua.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 215,
                'isi_hadist'  => 'Siapa yang menempuh jalan untuk mencari ilmu, Allah akan mudahkan baginya jalan menuju surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 220,
                'isi_hadist'  => 'Tangan yang di atas lebih baik daripada tangan yang di bawah.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 225,
                'isi_hadist'  => 'Shalatlah kalian sebagaimana kalian melihat aku shalat.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 230,
                'isi_hadist'  => 'Sesungguhnya orang yang paling utama di antara kalian adalah yang paling baik akhlaknya.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 235,
                'isi_hadist'  => 'Orang yang kuat bukanlah yang pandai bergulat, namun yang dapat menahan amarahnya.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 240,
                'isi_hadist'  => 'Siapa yang memudahkan urusan seorang muslim, Allah akan memudahkan urusannya di dunia dan akhirat.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 245,
                'isi_hadist'  => 'Sebaik-baik kalian adalah yang paling baik kepada istrinya.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 250,
                'isi_hadist'  => 'Janganlah kalian saling iri, saling membenci, dan saling memutuskan hubungan.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 255,
                'isi_hadist'  => 'Barang siapa yang tidak bersyukur kepada manusia, maka ia tidak bersyukur kepada Allah.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 260,
                'isi_hadist'  => 'Janganlah kamu marah, dan baginya surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 265,
                'isi_hadist'  => 'Sesungguhnya sedekah itu dapat memadamkan murka Allah dan mencegah kematian yang buruk.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 270,
                'isi_hadist'  => 'Hendaklah kalian berkata baik atau diam.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 275,
                'isi_hadist'  => 'Permudahlah urusan, jangan mempersulit, dan berilah kabar gembira.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 280,
                'isi_hadist'  => 'Orang yang paling dekat denganku di hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 285,
                'isi_hadist'  => 'Senyum kepada saudaramu adalah sedekah bagimu.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 290,
                'isi_hadist'  => 'Jagalah Allah, maka Allah akan menjagamu.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 295,
                'isi_hadist'  => 'Rasulullah selalu memilih yang lebih mudah selama itu bukan dosa.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 300,
                'isi_hadist'  => 'Siapa yang memberi makan seorang yang berpuasa, dia akan mendapatkan pahala seperti orang yang berpuasa.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 305,
                'isi_hadist'  => 'Barang siapa yang menutupi aib seorang muslim, Allah akan menutupi aibnya di dunia dan akhirat.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 310,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat rupa kalian, tetapi melihat hati dan amal kalian.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 315,
                'isi_hadist'  => 'Sebaik-baik sedekah adalah yang dilakukan dalam keadaan sehat dan penuh harapan.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 320,
                'isi_hadist'  => 'Sesungguhnya amal yang paling dicintai oleh Allah adalah yang terus-menerus meski sedikit.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 325,
                'isi_hadist'  => 'Tuntutlah ilmu, karena menuntut ilmu adalah kewajiban bagi setiap muslim.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 330,
                'isi_hadist'  => 'Tidak halal bagi seorang muslim menakuti muslim lain.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 335,
                'isi_hadist'  => 'Sesungguhnya kelembutan tidaklah ada pada sesuatu kecuali akan menghiasinya.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 340,
                'isi_hadist'  => 'Sesungguhnya Allah menyukai apabila salah satu dari kalian melakukan sesuatu, dia melakukannya dengan itqan (tepat dan baik).',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 345,
                'isi_hadist'  => 'Tebarkanlah salam di antara kalian.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 350,
                'isi_hadist'  => 'Seseorang bersama dengan orang yang dia cintai.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 355,
                'isi_hadist'  => 'Sesungguhnya manusia yang paling dibenci oleh Allah adalah yang keras kepala dalam permusuhan.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 360,
                'isi_hadist'  => 'Tidak masuk surga orang yang memutus silaturahmi.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 365,
                'isi_hadist'  => 'Berikanlah kepada pekerja upahnya sebelum keringatnya kering.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 370,
                'isi_hadist'  => 'Bertakwalah kepada Allah di manapun kamu berada, dan ikutilah keburukan dengan kebaikan.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 375,
                'isi_hadist'  => 'Janganlah kamu marah.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 380,
                'isi_hadist'  => 'Siapa yang beriman kepada Allah dan hari akhir hendaklah mengucapkan perkataan baik atau diam.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 385,
                'isi_hadist'  => 'Sesungguhnya akhlak yang baik akan memberatkan timbangan kebaikan pada hari kiamat.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 390,
                'isi_hadist'  => 'Agama itu nasihat.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 395,
                'isi_hadist'  => 'Siapa yang menyerupai suatu kaum maka dia termasuk bagian dari mereka.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 400,
                'isi_hadist'  => 'Bersikaplah adil, karena keadilan lebih dekat kepada takwa.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 405,
                'isi_hadist'  => 'Janganlah kalian saling mendengki, saling membenci, dan saling memutuskan hubungan.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 410,
                'isi_hadist'  => 'Tidak akan masuk surga orang yang di dalam hatinya terdapat kesombongan seberat biji sawi.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 415,
                'isi_hadist'  => 'Orang yang paling dicintai Allah adalah yang paling bermanfaat bagi manusia.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 420,
                'isi_hadist'  => 'Barang siapa yang bersabar, maka Allah akan menjadikannya sabar.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 425,
                'isi_hadist'  => 'Sungguh Allah mencintai kelembutan dalam setiap perkara.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 430,
                'isi_hadist'  => 'Sesungguhnya sedekah itu dapat memadamkan dosa sebagaimana air memadamkan api.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 435,
                'isi_hadist'  => 'Orang yang paling sempurna imannya adalah yang paling baik akhlaknya.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 440,
                'isi_hadist'  => 'Bertakwalah kepada Allah dan bersikap adillah terhadap anak-anakmu.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 445,
                'isi_hadist'  => 'Saling memberi salam akan menumbuhkan rasa cinta di antara kalian.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 450,
                'isi_hadist'  => 'Barang siapa yang menunjukkan kepada kebaikan, dia akan mendapatkan pahala seperti pelakunya.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 455,
                'isi_hadist'  => 'Orang yang tidak menyayangi, tidak akan disayangi.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 460,
                'isi_hadist'  => 'Sesungguhnya agama itu mudah, dan tidak ada yang mempersulit agama kecuali akan kalah.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 465,
                'isi_hadist'  => 'Sesungguhnya amalan yang paling dicintai Allah adalah yang terus dilakukan meski sedikit.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 470,
                'isi_hadist'  => 'Sesungguhnya kejujuran membawa kepada kebaikan, dan kebaikan membawa ke surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 475,
                'isi_hadist'  => 'Berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 480,
                'isi_hadist'  => 'Sungguh Rasulullah tidak pernah bersikap keras dan tidak pernah berbicara dengan kata-kata kotor.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 485,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana pun kalian berada.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 490,
                'isi_hadist'  => 'Orang muslim adalah saudara bagi muslim lainnya, tidak menzhalimi dan tidak membiarkannya.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 495,
                'isi_hadist'  => 'Tidak beriman salah satu dari kalian hingga dia mencintai untuk saudaranya apa yang dia cintai untuk dirinya.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 500,
                'isi_hadist'  => 'Orang yang paling dekat dengan Rasulullah pada hari kiamat adalah yang paling baik akhlaknya.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 505,
                'isi_hadist'  => 'Hendaklah kalian saling memberi hadiah, karena hadiah akan menghilangkan rasa benci.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 510,
                'isi_hadist'  => 'Sesungguhnya Allah itu baik dan hanya menerima yang baik.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 515,
                'isi_hadist'  => 'Barang siapa yang mengucapkan salam, maka dia berhak dijawab.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 520,
                'isi_hadist'  => 'Sebaik-baik kalian adalah yang paling baik akhlaknya.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 525,
                'isi_hadist'  => 'Sesungguhnya seorang mukmin dengan mukmin lainnya seperti bangunan yang saling menguatkan.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 530,
                'isi_hadist'  => 'Rasulullah suka memulai dari sisi kanan dalam semua urusannya.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 535,
                'isi_hadist'  => 'Barang siapa yang beriman kepada Allah dan hari akhir hendaklah dia menghormati tetangganya.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 540,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dicintai Allah adalah yang paling bermanfaat bagi manusia.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 545,
                'isi_hadist'  => 'Orang yang menutup aib seorang muslim, maka Allah akan menutup aibnya pada hari kiamat.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 550,
                'isi_hadist'  => 'Tidak halal bagi seorang muslim menakut-nakuti muslim lainnya.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 555,
                'isi_hadist'  => 'Sesungguhnya sedekah itu dapat memadamkan murka Allah dan mencegah mati buruk.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 560,
                'isi_hadist'  => 'Janganlah kalian saling iri hati dan jangan saling membenci.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 565,
                'isi_hadist'  => 'Kejujuran membawa kepada kebaikan, dan kebaikan membawa kepada surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 570,
                'isi_hadist'  => 'Permudahlah, jangan mempersulit, dan berilah kabar gembira.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 575,
                'isi_hadist'  => 'Sesungguhnya kelembutan tidaklah ada pada sesuatu melainkan akan menghiasinya.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 580,
                'isi_hadist'  => 'Barang siapa menempuh jalan untuk mencari ilmu, Allah akan memudahkan jalannya menuju surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 585,
                'isi_hadist'  => 'Takwa kepada Allah adalah sebaik-baik bekal.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 590,
                'isi_hadist'  => 'Senyummu di hadapan saudaramu adalah sedekah.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 595,
                'isi_hadist'  => 'Barang siapa yang menunjukkan kepada kebaikan, maka dia mendapatkan pahala seperti orang yang melakukannya.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 600,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dibenci Allah adalah orang yang keras kepala dalam perdebatan.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 605,
                'isi_hadist'  => 'Bersikaplah adil, karena adil itu mendekatkan kepada takwa.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 610,
                'isi_hadist'  => 'Sebaik-baik manusia adalah yang paling bermanfaat bagi manusia lain.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 615,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana pun kamu berada.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 620,
                'isi_hadist'  => 'Sesungguhnya amalan yang paling dicintai Allah adalah yang dilakukan secara terus-menerus meskipun sedikit.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 625,
                'isi_hadist'  => 'Sedekah itu dapat memadamkan dosa sebagaimana air memadamkan api.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 630,
                'isi_hadist'  => 'Sesungguhnya kelembutan tidaklah ada pada sesuatu melainkan akan menghiasinya.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 635,
                'isi_hadist'  => 'Orang mukmin dengan mukmin lainnya seperti bangunan yang saling menguatkan.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 640,
                'isi_hadist'  => 'Berikanlah upah pekerja sebelum keringatnya kering.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 645,
                'isi_hadist'  => 'Tidak sempurna iman seseorang hingga ia mencintai untuk saudaranya apa yang ia cintai untuk dirinya sendiri.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 650,
                'isi_hadist'  => 'Rasulullah melarang keras kita berbohong dalam bercanda.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 655,
                'isi_hadist'  => 'Hendaklah orang yang hadir menyampaikan kepada orang yang tidak hadir.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 660,
                'isi_hadist'  => 'Barang siapa yang tidak menyayangi, maka tidak akan disayangi.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 665,
                'isi_hadist'  => 'Kejujuran membawa kepada kebaikan dan kebaikan membawa kepada surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 670,
                'isi_hadist'  => 'Permudahlah dan jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 675,
                'isi_hadist'  => 'Rasulullah suka memulai dari sisi kanan dalam urusannya.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 680,
                'isi_hadist'  => 'Barang siapa beriman kepada Allah dan hari akhir, hendaklah berkata baik atau diam.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 685,
                'isi_hadist'  => 'Orang muslim adalah saudara bagi muslim lainnya, tidak menzhalimi dan tidak membiarkannya.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 690,
                'isi_hadist'  => 'Tebarkanlah salam di antara kalian.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 695,
                'isi_hadist'  => 'Barang siapa menunjukkan kepada kebaikan, maka ia akan mendapatkan pahala seperti pelakunya.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 700,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat rupa dan harta kalian, tetapi melihat hati dan amal kalian.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 705,
                'isi_hadist'  => 'Berilah kemudahan dan jangan mempersulit.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 710,
                'isi_hadist'  => 'Agama itu nasihat.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 715,
                'isi_hadist'  => 'Sesungguhnya orang yang paling dicintai Rasulullah adalah yang paling baik akhlaknya.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 720,
                'isi_hadist'  => 'Hendaklah kalian berkata benar meski itu pahit.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 725,
                'isi_hadist'  => 'Sedekah dapat memadamkan murka Tuhan.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 730,
                'isi_hadist'  => 'Akhlak yang mulia akan memberatkan timbangan amal pada hari kiamat.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 735,
                'isi_hadist'  => 'Janganlah kamu marah.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 740,
                'isi_hadist'  => 'Hisablah dirimu sebelum kamu dihisab.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 745,
                'isi_hadist'  => 'Permudahlah, jangan mempersulit, berilah kabar gembira, dan jangan membuat orang lari.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 750,
                'isi_hadist'  => 'Orang yang menutup aib saudaranya, Allah akan menutup aibnya di dunia dan akhirat.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 755,
                'isi_hadist'  => 'Sesungguhnya Allah Maha Lembut dan menyukai kelembutan dalam segala perkara.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 760,
                'isi_hadist'  => 'Orang kuat bukanlah yang pandai bergulat, melainkan yang mampu menahan marah.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 765,
                'isi_hadist'  => 'Sesungguhnya jujur membawa pada kebaikan, dan kebaikan membawa pada surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 770,
                'isi_hadist'  => 'Senyummu kepada saudaramu adalah sedekah.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 775,
                'isi_hadist'  => 'Rasulullah selalu memilih yang lebih mudah selama bukan dosa.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 780,
                'isi_hadist'  => 'Barang siapa memaafkan dan berbuat baik, pahalanya di sisi Allah.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 785,
                'isi_hadist'  => 'Orang muslim satu dengan lainnya adalah saudara, jangan menzalimi dan jangan menghinanya.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 790,
                'isi_hadist'  => 'Tebarkanlah salam di antara kalian, maka kalian akan saling mencintai.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 795,
                'isi_hadist'  => 'Barang siapa menempuh jalan untuk menuntut ilmu, Allah mudahkan jalannya ke surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 800,
                'isi_hadist'  => 'Barang siapa menunjukkan kepada kebaikan, maka dia mendapatkan pahala seperti pelakunya.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 805,
                'isi_hadist'  => 'Sesungguhnya orang yang tidak menyayangi, tidak akan disayangi.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 810,
                'isi_hadist'  => 'Hendaklah yang hadir menyampaikan kepada yang tidak hadir.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 815,
                'isi_hadist'  => 'Sesungguhnya sedekah itu memadamkan dosa sebagaimana air memadamkan api.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 820,
                'isi_hadist'  => 'Orang yang paling dicintai Allah adalah yang paling bermanfaat bagi manusia.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 825,
                'isi_hadist'  => 'Sesungguhnya dunia itu manis dan hijau, dan Allah menjadikan kalian khalifah di dalamnya.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 830,
                'isi_hadist'  => 'Sesungguhnya akhlak yang baik akan memberatkan timbangan amal pada hari kiamat.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 835,
                'isi_hadist'  => 'Bertakwalah kepada Allah di mana pun kalian berada.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 840,
                'isi_hadist'  => 'Setiap kalian adalah pemimpin dan akan dimintai pertanggungjawaban atas yang dipimpinnya.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 845,
                'isi_hadist'  => 'Tebarkanlah salam agar kalian saling mencintai.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 850,
                'isi_hadist'  => 'Berikanlah kepada pekerja upahnya sebelum keringatnya kering.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 855,
                'isi_hadist'  => 'Sesungguhnya Allah itu baik dan hanya menerima yang baik.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 860,
                'isi_hadist'  => 'Orang mukmin dengan mukmin lainnya seperti bangunan yang saling menguatkan.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 865,
                'isi_hadist'  => 'Kejujuran membawa kepada kebaikan, dan kebaikan membawa kepada surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 870,
                'isi_hadist'  => 'Barang siapa memudahkan kesulitan seorang muslim, Allah akan memudahkannya di dunia dan akhirat.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 875,
                'isi_hadist'  => 'Sesungguhnya kelembutan tidaklah ada pada sesuatu melainkan akan menghiasinya.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 880,
                'isi_hadist'  => 'Sedekah tidak akan mengurangi harta.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 885,
                'isi_hadist'  => 'Orang muslim satu dengan yang lainnya adalah saudara, tidak menzalimi dan tidak menghinanya.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 890,
                'isi_hadist'  => 'Permudahlah urusan, jangan mempersulit, dan berilah kabar gembira.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 895,
                'isi_hadist'  => 'Barang siapa menempuh jalan untuk mencari ilmu, Allah mudahkan jalannya ke surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 900,
                'isi_hadist'  => 'Barang siapa beriman kepada Allah dan hari akhir hendaklah memuliakan tamunya.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 905,
                'isi_hadist'  => 'Sesungguhnya Allah tidak melihat rupa kalian, tetapi melihat hati dan amal kalian.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 910,
                'isi_hadist'  => 'Senyum kepada saudaramu adalah sedekah.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 915,
                'isi_hadist'  => 'Janganlah kalian saling iri hati dan saling membenci.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 920,
                'isi_hadist'  => 'Bertakwalah kepada Allah di manapun kamu berada.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 925,
                'isi_hadist'  => 'Sesungguhnya sedekah memadamkan dosa sebagaimana air memadamkan api.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 930,
                'isi_hadist'  => 'Rasulullah selalu memilih yang lebih mudah selama bukan dosa.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 935,
                'isi_hadist'  => 'Barang siapa menutup aib saudaranya, Allah akan menutup aibnya pada hari kiamat.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 940,
                'isi_hadist'  => 'Setiap kalian adalah pemimpin dan akan dimintai pertanggungjawaban atas yang dipimpinnya.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 945,
                'isi_hadist'  => 'Permudahlah, jangan mempersulit, berilah kabar gembira dan jangan membuat orang lari.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 950,
                'isi_hadist'  => 'Orang yang paling dicintai Allah adalah yang paling bermanfaat bagi manusia.',
                'kitab_id'    => 6,
                'perawi_id'   => 1,    // Abdullah bin Abbas
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 955,
                'isi_hadist'  => 'Agama itu nasihat.',
                'kitab_id'    => 6,
                'perawi_id'   => 26,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 960,
                'isi_hadist'  => 'Sedekah tidak akan mengurangi harta.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 965,
                'isi_hadist'  => 'Kejujuran membawa kepada kebaikan, dan kebaikan membawa kepada surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 4,    // Abdullah bin Mas'ud
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 970,
                'isi_hadist'  => 'Barang siapa memudahkan kesulitan seorang muslim, Allah akan memudahkannya di dunia dan akhirat.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 975,
                'isi_hadist'  => 'Sesungguhnya kelembutan tidaklah ada pada sesuatu melainkan akan menghiasinya.',
                'kitab_id'    => 6,
                'perawi_id'   => 19,    // Aisyah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 980,
                'isi_hadist'  => 'Orang yang kuat bukanlah yang pandai bergulat, melainkan yang dapat menahan amarahnya.',
                'kitab_id'    => 6,
                'perawi_id'   => 11,   // Abu Hurairah
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 985,
                'isi_hadist'  => 'Berikanlah kepada pekerja upahnya sebelum keringatnya kering.',
                'kitab_id'    => 6,
                'perawi_id'   => 6,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 990,
                'isi_hadist'  => 'Tebarkanlah salam di antara kalian agar kalian saling mencintai.',
                'kitab_id'    => 6,
                'perawi_id'   => 21,   // Anas bin Malik
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
            [
                'no_hadist'   => 995,
                'isi_hadist'  => 'Barang siapa menempuh jalan untuk mencari ilmu, Allah mudahkan jalannya menuju surga.',
                'kitab_id'    => 6,
                'perawi_id'   => 16,
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ],
        ]);
    }
}
