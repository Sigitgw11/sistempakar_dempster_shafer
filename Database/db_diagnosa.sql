-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 07.54
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diagnosa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `idadmin` int(3) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`idadmin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `id` int(11) NOT NULL,
  `kdgejala` varchar(3) DEFAULT NULL,
  `gejala` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_gejala`
--

INSERT INTO `tb_gejala` (`id`, `kdgejala`, `gejala`) VALUES
(1, 'G01', 'Berprilaku aneh'),
(2, 'G02', 'Insomnia'),
(3, 'G03', 'Kesulitan melakukan segala hal'),
(4, 'G04', 'Ganguan tidur'),
(5, 'G05', 'Cemas berlebihan'),
(6, 'G06', 'Sakit Kepala'),
(7, 'G07', 'Stress tidak dapat menyelesaikan suatu pekerjaan'),
(8, 'G08', 'Menghindari tempat ramai'),
(9, 'G09', 'Menarik diri'),
(10, 'G10', 'Sering kaget'),
(11, 'G11', 'Halusinasi'),
(12, 'G12', 'Waham'),
(13, 'G13', 'Gelisah'),
(14, 'G14', 'Mengomel sendiri'),
(15, 'G15', 'Menjawab pertanyaan dengan tidak sesuai'),
(16, 'G16', 'Kurang merawat diri'),
(17, 'G17', 'Berbicara cepat'),
(18, 'G18', 'Kecanduan akan obat-obatan terlarang dan minuman beralkohol'),
(19, 'G19', 'Depresi'),
(20, 'G20', 'Tidak bertanggung jawab secara sosial sepert sesksual tidak pantas .');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `idhasil` int(5) NOT NULL,
  `idpasien` int(5) NOT NULL,
  `kdpenyakit` varchar(3) CHARACTER SET utf8 NOT NULL,
  `persentase` double NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_hasil`
--

INSERT INTO `tb_hasil` (`idhasil`, `idpasien`, `kdpenyakit`, `persentase`, `tanggal`) VALUES
(1, 1, 'P1', 41.18, '2021-01-11 09:09:53'),
(2, 1, 'P4', 41.18, '2021-01-11 09:09:53'),
(3, 2, 'P3', 26.47, '2021-06-02 10:55:23'),
(4, 2, 'P4', 55.88, '2021-06-02 10:55:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `idpasien` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`idpasien`, `nama`, `kelamin`, `umur`, `alamat`, `tanggal`, `email`) VALUES
(1, 'Bayu Biantara', 'Laki-laki', '20', 'derik', '2021-01-11', 'ahay'),
(2, 'Bayu Biantara', 'Laki-laki', '20', 'derik', '2021-06-02', 'bayutherick@gmail.co');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `id` int(11) NOT NULL,
  `kdpenyakit` varchar(3) DEFAULT NULL,
  `nama_penyakit` varchar(100) DEFAULT NULL,
  `definisi` text DEFAULT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`id`, `kdpenyakit`, `nama_penyakit`, `definisi`, `solusi`) VALUES
(1, 'P1', 'Depresi', 'Depresi merupakan gangguan suasana hati yang menyebabkan penderitanya terus-menerus merasa sedih. Berbeda dengan kesedihan biasa yang berlangsung selama beberapa hari, perasaan sedih pada depresi bisa berlangsung hingga berminggu-minggu atau berbulan-bulan.', 'Melakukan psikoterapi dan mengkonsumsi obat antidepresan dimana bekerja dengan cara menyeimbangkan kandungan senyawa kimia alami di dalam otak yang disebut neurotransmitter, sehingga bisa meredakan keluhan dan membantu memperbaiki suasana hati dan emosi'),
(2, 'P2', 'Kecemasan', 'Kecemasan adalah munculnya rasa cemas atau kawatir yang berlebihan dan tidak terkendali terhadap beberapa hal dan kondisi ini akan mengganggu aktivitas sehari-hari penderita umumnya terjadi pada usia lebih dari 30 tahun.', 'Melakukan terapi perilaku kognitif (CBT) dan penggunaan obat-obatan seperti antidepresan, pregabalin dan benzodiazepine'),
(3, 'P3', 'Skizofrenia', 'Skizofrenia adalah gangguan yang mempengaruhi kemampuan seseorang untuk berfikir merasakan dan berperilaku dengan baik. Gangguan mental ini bersifat jangka panjang yang menyebabkan penderitanya selalu mengalami halusinasi, delusi, dan waham.', 'Dokter sering merekomendasikan obat antiksikotikatipikal, chlorpromazine, fluphenazine, dan haloperidol.'),
(4, 'P4', 'Gangguan bipolar', 'Gangguan bipolar adalah gangguan mental yang ditandai dengan perubahan emosi yang drastis. seseorang yang menderita bipolar dapat merasakan gejala mania (sangat senang) dan depresif (sangat terpuruk).', 'Bisa dengan melakukan psikoterapi diantaranya interpersonal and social rhythm therapy (IPSRT), Cognitive behavioral therapy (CBT), dan Psychoeducation . dan obat yang dapat dikonsumsi yaitu : Moodstabilizer, Antikonvulsan, Antipsikotik, dan Antidepresan'),
(5, 'P5', 'Psikotik', 'Psikotik adalah kondisi dimana penderitanya mengalami kesulitan membedakan kenyataan dan imajinasi.', 'Dilakukan dengan meminum obat-obatan golongan antipsikotik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rules`
--

CREATE TABLE `tb_rules` (
  `id_problem` int(11) DEFAULT NULL,
  `id_evidence` int(11) DEFAULT NULL,
  `cf` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_rules`
--

INSERT INTO `tb_rules` (`id_problem`, `id_evidence`, `cf`) VALUES
(2, 2, 0.7),
(2, 4, 0.7),
(2, 5, 0.6),
(2, 8, 0.8),
(2, 10, 0.6),
(2, 11, 0.8),
(2, 12, 0.8),
(3, 9, 0.7),
(3, 12, 0.8),
(3, 13, 0.6),
(3, 14, 0.8),
(3, 15, 0.6),
(3, 16, 0.6),
(4, 7, 0.6),
(4, 17, 0.6),
(4, 18, 0.4),
(4, 19, 0.5),
(5, 1, 0.6),
(5, 2, 0.7),
(5, 5, 0.6),
(5, 7, 0.6),
(5, 10, 0.6),
(5, 11, 0.8),
(5, 12, 0.8),
(5, 13, 0.6),
(1, 1, 0.6),
(1, 2, 0.7),
(1, 3, 0.5),
(1, 6, 0.8),
(1, 7, 0.6),
(1, 20, 0.7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indeks untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`idhasil`),
  ADD KEY `idpasien` (`idpasien`),
  ADD KEY `kdpenyakit` (`kdpenyakit`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indeks untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kdpenyakit` (`kdpenyakit`);

--
-- Indeks untuk tabel `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD KEY `id_problem` (`id_problem`),
  ADD KEY `id_evidence` (`id_evidence`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  MODIFY `idhasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `idpasien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `tb_hasil_ibfk_1` FOREIGN KEY (`idpasien`) REFERENCES `tb_pasien` (`idpasien`),
  ADD CONSTRAINT `tb_hasil_ibfk_2` FOREIGN KEY (`kdpenyakit`) REFERENCES `tb_penyakit` (`kdpenyakit`);

--
-- Ketidakleluasaan untuk tabel `tb_rules`
--
ALTER TABLE `tb_rules`
  ADD CONSTRAINT `tb_rules_ibfk_1` FOREIGN KEY (`id_problem`) REFERENCES `tb_penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rules_ibfk_2` FOREIGN KEY (`id_evidence`) REFERENCES `tb_gejala` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
