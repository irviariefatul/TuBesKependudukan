<!DOCTYPE html>
<html lang="en">

<html> 
    <head> 
        <title>Mencetak Surat Keterangan Lahir</title> 
    </head> 
    <body> 
        <style type="text/css"> table tr td, table tr th{ font-size: 12pt; } </style>
        
        <center>
            <h4 style="margin:0px;font-size:19px;"><b>SURAT</b></h4>
            <h4 style="margin:0px;font-size:19px;"><b>KETERANGAN LAHIR</b></h4>
            <p style="line-height: 10px;">Nomor : 00{{ $kelahiran->id }}/DS.372/X/2021
        </center>
             
        <br><br><br>
        <table width="100%" border="0">
            <tr>
            <td colspan="3">Yang bertanda tangan dibawah ini, menerangkan dengan sesungguhnya bahwa :</td>
            </tr>
            <tr>
            <td width="200">Nama Ibu</td>
            <td width="1">:</td>
            <td><?php echo 'Ny. '.$kelahiran ->penduduks->nama ?></td>
            </tr>
            <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $kelahiran ->penduduks->nik; ?></td>
            </tr>
            <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $kelahiran ->penduduks->tempat_lahir.', '.$kelahiran ->penduduks->tanggal_lahir; ?></td>
            </tr>
            <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $kelahiran ->penduduks->jenis_kelamin; ?></td>
            </tr>            
            <tr>
            <td>Pekerjaan</td>
            <td>:</td>
            <td><?php echo $kelahiran ->penduduks->pekerjaan; ?></td>
            </tr>
            <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo 'RT. '.$kelahiran ->penduduks->rt.', '.'RW. '.$kelahiran ->penduduks->rw.', '.'Ds. '.
            $kelahiran ->penduduks->kelurahan.', '.'Kec. '.$kelahiran ->penduduks->kecamatan; ?></td>
            </tr>
            <tr>            
        </table>

        <br>
        <table width="100%" border="0">
            <tr>
            <td colspan="3">Telah melahirkan seorang anak :</td>
            </tr>
            <tr>
            <td width="200">Nama Anak</td>
            <td width="1">:</td>
            <td><?php echo $kelahiran->nama; ?></td>
            </tr> 
            <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $kelahiran->tempat.', '.$kelahiran->tanggal; ?></td>
            </tr><br>            
            <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $kelahiran->jenis_kelamin; ?></td>                      
            </tr>  
            <tr>
            <td>Anak Ke</td>
            <td>:</td>
            <td><?php echo $kelahiran->anak_ke; ?></td>                      
            </tr>                          
        </table>
        
        <br>

        <div>Demikian surat keterangan ini diberikan agar dapat dipergunakan sebagaimana mestinya</div>
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