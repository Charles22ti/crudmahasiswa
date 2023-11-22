<?php

class latihan {
    public function hitung_total_harga($jenis_laundry, $berat_pakaian, $pakaian_dalam = false, $membawa_struk = true) {
        $harga_setrika_saja = 3500;
        $harga_cuci_dan_setrika = 5000;
        $biaya_pakaian_dalam = 5000;
        $denda_struk = 10000;

        echo "Harga Per kg Untuk Jenis Laundry Setrika Saja : Rp. 3.500";
        echo "</br>";
        echo "Harga Per kg Untuk Jenis Laundry Cuci dan Setrika : Rp.5.000";
        echo "</br>";
        echo "Jika Terdapat Pakaian Dalam Maka Dikenakan Cas : Rp.5.000";
        echo "</br>";
        echo "Jika Tidak Membawa Struk Maka Dikenakan Denda : Rp.10.000";
        echo "</br>";
        echo "</br>";


        if ($jenis_laundry == "Setrika") {
            $harga_per_kg = $harga_setrika_saja;
            echo "harga per_kg = $harga_per_kg";
            echo "<br/>";
        }
        elseif ($jenis_laundry == "Cuci dan Setrika") {
            $harga_per_kg = $harga_cuci_dan_setrika;
            echo "harga per_kg = $harga_per_kg";
            echo "<br/>";
        } else {
            return "Jenis laundry tidak valid";
        }
        $total_harga = $harga_per_kg * $berat_pakaian;

        if ($pakaian_dalam) {
            $total_harga += $biaya_pakaian_dalam;
            echo "Tambah pakaian dalam : $total_harga";
            echo "<br/>";
        }

        if (!$membawa_struk) {
            $total_harga += $denda_struk;
            echo "Tidak membawa struk : $total_harga";
        }

        return $total_harga;
    }

}