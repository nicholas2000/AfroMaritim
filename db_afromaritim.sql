CREATE TABLE master_tcabang
(
id_cabang VARCHAR(255) PRIMARY KEY,
nama_cabang VARCHAR(255) NOT NULL,
jum_cabang VARCHAR(255)  NOT NULL,
alamat_cabang VARCHAR(255) NOT NULL,
provinsi_cabang VARCHAR(255) NOT NULL,
kota_cabang VARCHAR(255) NOT NULL,
kecamatan_cabang VARCHAR(255)  NOT NULL,
kelurahan_cabang VARCHAR(255) NOT NULL,
kodepos_cabang VARCHAR(255) NOT NULL,
gmaps_cabang VARCHAR(255)  NOT NULL,
email_cabang VARCHAR(255) NOT NULL,
status_cabang VARCHAR(2) NOT NULL
);

CREATE TABLE master_tkompetitor
(
id_kompetitor VARCHAR(255) PRIMARY KEY,
nama_kompetitor VARCHAR(255) NOT NULL,
npwp_kompetitor VARCHAR(255) NOT NULL,
alamat_kompetitor VARCHAR(255) NOT NULL,
provinsi_kompetitor VARCHAR(255) NOT NULL,
kota_kompetitor VARCHAR(255) NOT NULL,
kecamatan_kompetitor VARCHAR(255)  NOT NULL,
kelurahan_kompetitor VARCHAR(255) NOT NULL,
kodepos_kompetitor VARCHAR(255) NOT NULL,
nohp_kompetitor VARCHAR(255)  NOT NULL,
telp_kompetitor VARCHAR(255)  NOT NULL,
email_kompetitor VARCHAR(255) NOT NULL,
rute_kompetitor VARCHAR(255) NOT NULL,
namabank_kompetitor VARCHAR(255)  NOT NULL,
norek_kompetitor VARCHAR(255) NOT NULL
);

CREATE TABLE master_tpegawai
(
id_pegawai VARCHAR(255) PRIMARY KEY,
nama_pegawai VARCHAR(255) NOT NULL,
npwp_pegawai VARCHAR(255) NOT NULL,
alamat_pegawai VARCHAR(255) NOT NULL,
provinsi_pegawai VARCHAR(255) NOT NULL, 
kota_pegawai VARCHAR(255) NOT NULL,
kecamatan_pegawai VARCHAR(255) NOT NULL,
kelurahan_pegawai VARCHAR(255) NOT NULL,
kodepos_pegawai VARCHAR(255) NOT NULL,
nohp_pegawai VARCHAR(255) NOT NULL,
telp_pegawai VARCHAR(255) NOT NULL,
emaill_pegawai VARCHAR(255) NOT NULL,
role_pegawai VARCHAR(255)NOT NULL REFERENCES master_jabatan(id_jabatan)
);

CREATE TABLE master_jabatan
(
id_jabatan VARCHAR(255) PRIMARY KEY,
nama_jabatan VARCHAR(255) NOT NULL,
status_jabatan VARCHAR(255) NOT NULL
);