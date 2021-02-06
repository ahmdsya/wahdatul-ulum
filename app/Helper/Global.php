<?php

use App\Artikel;
use App\Pengaturan;

function artikel($bagian)
{
	$artikel = Artikel::where('bagian', $bagian)->get();

	return $artikel;
}

function siteTitle()
{
	$siteTitle = Pengaturan::find(1);

	return $siteTitle->judul;
}

function siteDeskripsi()
{
	$des = Pengaturan::find(1);

	return $des->deskripsi;
}

function bagianPertama()
{
	$artikel = Artikel::where('bagian', 'Bagian Pertama')->get();

	return $artikel;
}

function bagianKedua()
{
	$artikel = Artikel::where('bagian', 'Bagian Kedua')->get();

	return $artikel;
}

function bagianKetiga()
{
	$artikel = Artikel::where('bagian', 'Bagian Ketiga')->get();

	return $artikel;
}

function bagianKeempat()
{
	$artikel = Artikel::where('bagian', 'Bagian Keempat')->get();

	return $artikel;
}