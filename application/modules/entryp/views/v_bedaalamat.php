<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>DOM-PDF CODEIGNITER 3</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     

</head>
        <page >
        <p align="right"><font size="1">Form no. 00013/0625 </font></p>

        <font size="4"><p align="center" style="margin-bottom: 50px"><b> SURAT PERNYATAAN BEDA DATA
        ALAMAT </b></font><br><font size="2"> (Untuk Nomor Aplikasi : <span class="lineJudul" id="appnumber"></span>)</font></p>

        <font size="2"> Saya yang bertanda tangan dibawah ini : </font>

        <table border="double">
        <tbody>
        <tr style="height: 15px;">
            <td>Nama Sales</td>
            <td>&nbsp;:&nbsp;</td>
            <td></td>
        </tr>
        <tr style="height: 15px;">
            <td>NIK</td>
            <td>&nbsp;:&nbsp;</td>
            <td></td>
        </tr>
        <tr style="height: 15px;" >
            <td>Sales Code</td>
            <td>&nbsp;:&nbsp;</td>
            <td></td>
        </tr>
        <tr style="height: 15px;" >
            <td>POS / Kantor Cabang</td>
            <td>&nbsp;:&nbsp;</td>
            <td></td>
        </tr>
        <tr style="height: 15px;width:50px;word-wrap:break-word" >
            <td>Nama Pelanggan</td>
            <td>&nbsp;:&nbsp;</td>
           <td></td>
        </tr>
        <tr style="height: 15px;">
            <td>Alamat Identitas Pelanggan</td>
            <td>&nbsp;:&nbsp;</td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3">
                <p align="left" style="margin-top: 10px"><font size="2">
                    Adalah benar memiliki data alamat di identitas pelanggan (KTP / SIM / Paspor /
                    KITAS) berbeda dengan data alamat pemasangan, dengan alamat pemasangan sebagi
                    berikut :
                </font>
                </p>
            </td>
        </tr>
        <tr style="height: 5px;" >
            <td>Alamat Pemasangan</td>
            <td>&nbsp;:&nbsp;</td>
            <td style="vertical-align:bottom;border-bottom: 1px solid #000;width: 70%;"></td>
        </tr>
        <tr style="height: 5px;" >
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="vertical-align:bottom;border-bottom: 1px solid #000;width: 70%;"></td>
        </tr>
        <tr style="height: 5px;" >
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="vertical-align:bottom;border-bottom: 1px solid #000;width: 70%;"></td>
        </tr>

        <tr style="height: 5px;"  >
            <td>Penyebab data berbeda</td>
            <td>&nbsp;:&nbsp;</td>
            <td style="vertical-align:bottom;border-bottom: 1px solid #000;width: 70%;"></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td style="vertical-align:bottom;border-bottom: 1px solid #000;width: 70%;">dkjandkjasndkjasndkajnd</td>
        </tr>
        </tbody>
    </table>
    <p align="left">
        <font size="2">
            Status kepemilikan rumah/tempat pemasangan :
            <p>
            <input type="radio" name='kepemilikan' value='1'>Milik Sendiri
            &nbsp;
            <input id="kepemilikan2" type="radio" name='kepemilikan' value='2'>Milik sendiri Sewa/Kost/Kontrakan
            </p>
            Demikian Surat pernyataan ini saya buat sebenar-benarnya, dalam keadaan sadar dan tanpa
            ada paksaan dari pihak manapun.
        </font>
    </p>
    <table style="width:100%" class="mini">
        <tbody>
        <tr style="height: 10%">
            <td>Dibuat Oleh,</td>
            <td>&nbsp;:&nbsp;</td>
            <td style="vertical-align:bottom;border-bottom: 1px solid #000;width: 60%;text-align:center;"><p
                    class='ttdpelangganP'></p></td>
            <td>Nama Pelanggan</td>
        </tr>
        <tr style="height: 10%">
            <td>&nbsp;</td>
            <td>&nbsp;:&nbsp;</td>
            <td style="vertical-align:bottom;border-bottom: 1px solid #000;width: 60%;"><p
                    class='ttdpelangganP'><img class='ttdsales' src=''  />
            </p></td>
            <td>Nama Sales <br/> &amp; Sales Code</td>
        </tr>
        <tr style="height: 10%;">
            <td>Disetujui oleh,</td>
            <td>&nbsp;:&nbsp;</td>
            <td style="vertical-align:bottom;border-bottom: 1px solid #000;width: 60%;"><p
                    class='ttdpelangganP'><img class='ttdwaka' src=''   /></p>
            </td>
            <td class="wraps" ><p> Nama Waka&#47;Kecab&#47;
                <br/>Kadept&#47;POS&#47;ASM</p></td>
        </tr>
        </tbody>
    </table>

</body>
</html>