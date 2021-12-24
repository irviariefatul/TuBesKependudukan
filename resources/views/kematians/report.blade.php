<!DOCTYPE html>
<html lang="en">

<html> 
    <head> 
        <title>Mencetak Surat Keterangan Kematian</title> 
    </head> 
    <body> 
        <style type="text/css"> table tr td, table tr th{ font-size: 12pt; } </style>
        
        <center>
            <h4 style="margin:0px;font-size:19px;"><u><b>SURAT KETERANGAN KEMATIAN</b></u></h4>
            <p style="line-height: 10px;">Nomor : 00{{ $kematian->id }}/DS.510/IX/2021
        </center>
             
        <br><br><br>
        <table width="100%" border="0">
            <tr>
            <td colspan="3">Yang bertanda tangan dibawah ini menerangkan bahwa :</td>
            </tr>
            <tr>
            <td width="200">Nama</td>
            <td width="1">:</td>
            <td><?php echo $kematian ->penduduks->nama ?></td>
            </tr>
            <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $kematian ->penduduks->nik; ?></td>
            </tr>
            <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $kematian ->penduduks->jenis_kelamin; ?></td>
            </tr>
            <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $kematian ->penduduks->tempat_lahir; ?></td>
            </tr>
            <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $kematian ->penduduks->tanggal_lahir; ?></td>
            </tr>
            <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo 'RT. '.$kematian ->penduduks->rt.', '.'RW. '.$kematian ->penduduks->rw.', '.'Ds. '.
            $kematian ->penduduks->kelurahan.', '.'Kec. '.$kematian ->penduduks->kecamatan; ?></td>
            </tr>
            <tr>            
        </table>

        <br>
        <table width="100%" border="0">
            <tr>
            <td colspan="3">Telah meninggal dunia pada :</td>
            </tr>
            <tr>
            <td width="200">Tanggal Meninggal</td>
            <td width="1">:</td>
            <td><?php echo $kematian->tanggal; ?></td>
            </tr> 
            <tr>
            <td>Tempat</td>
            <td>:</td>
            <td><?php echo $kematian->tempat; ?></td>
            </tr><br>            
            <tr>
            <td>Di sebabkan karena</td>
            <td>:</td>                      
            </tr>                                  
        </table>

        <center>
            <b style="font-size:20px;"><u>{{ $kematian->alasan }}</u></b>        
        </center>
        <br>

        <div>Surat keterangan ini dibuat atas dasar yang sebenarnya</div>
        <br><br>  
        <div style="float:right;">
            <br>Malang, </br><?php echo date('d-m-Y'); ?> <br>
            Kepala Desa, <br>
            <br>
            <img src="{{ public_path('quixlab/images/ttd.jpg') }}" alt="" width="100"><br>        
            <b><u> Sofyan Budianto </u></b><br>
            NIP. 19818376580284 
        </div>      
    </body> 
</html>