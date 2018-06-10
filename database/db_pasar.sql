CREATE DATABASE IF NOT EXISTS db_pasar;
CREATE TABLE Pasar
(
  ID_Pasar VARCHAR(5), 
  nama_pasar VARCHAR(35),
  lokasi VARCHAR(50),
  jenis_pasar VARCHAR(10),
  foto_pasar VARCHAR(20),
  deskripsi_pasar VARCHAR(500),
  PRIMARY KEY (ID_Pasar)
);

CREATE TABLE Kategori_Kios
(
  id_katkios VARCHAR(5),
  jenis_kios VARCHAR(10),
  ukuran_kios VARCHAR(8),
  harga INT,
  PRIMARY KEY (id_katkios)
);

CREATE TABLE status__kios
(
  id_statkios VARCHAR(5),
  jenis_status VARCHAR(10),
  PRIMARY KEY (id_statkios)
);

CREATE TABLE komoditi
(
  id_komoditi VARCHAR(5),
  nama_komoditi VARCHAR(20),
  jenis_komoditi VARCHAR(15),
  harga INT,
  PRIMARY KEY (id_komoditi)
);

CREATE TABLE berita
(
  id_berita VARCHAR(5),
  judul_berita VARCHAR(30),
  foto_berita VARCHAR(32),
  deskripsi_berita VARCHAR(1000)
);

CREATE TABLE akun
(
  id_akun VARCHAR(5),
  username VARCHAR(20),
  password VARCHAR(20),
  status_akun VARCHAR(10)
);

CREATE TABLE Kios
(
  ID_kios VARCHAR(5),
  nama_kios VARCHAR(10),
  id_katkios VARCHAR(5),
  PRIMARY KEY (ID_kios),
  FOREIGN KEY (id_katkios) REFERENCES Kategori_Kios(id_katkios)
);

CREATE TABLE pemilik_kios
(
  id_pemilik VARCHAR(5),
  nama_pemilik CHAR(30),
  ID_kios VARCHAR(5),
  id_statkios VARCHAR(5),
  id_komoditi VARCHAR(5),
  ID_Pasar VARCHAR(5),
  PRIMARY KEY (id_pemilik),
  FOREIGN KEY (ID_kios) REFERENCES Kios(ID_kios),
  FOREIGN KEY (id_statkios) REFERENCES status__kios(id_statkios),
  FOREIGN KEY (id_komoditi) REFERENCES komoditi(id_komoditi),
  FOREIGN KEY (ID_Pasar) REFERENCES Pasar(ID_Pasar)
);
