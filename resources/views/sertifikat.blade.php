<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<header>

</header>
<table background="" align="Center" border="0" width="100%" height="100%">
	<tr>
		<td width="321">&nbsp</td>
		<td width="852">&nbsp</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>&nbsp</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>Nomor : {{ $cetak->no_sertifikat }}</br>
        diberikan kepada :
        </td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td></td>
	</tr>
	<tr>
		<td rowspan="2">&nbsp</td>	
		<td style="line-height:0px"><h1>{{ $cetak->nama_peserta }}</h1>
        Tempat & Tanggal lahir: {{ $cetak->tempat_lahir }}, {{ $cetak->tanggal_lahir}}</td>
	</tr>
	<tr>
		<td>&nbsp</td>
	</tr>
	<tr>
		<td>&nbsp</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td style="line-height:0px">Telah mengikuti pelatihan </br>
			<h1>{{ $cetak->nama_kelas }}</h1></td>
	</tr>
	<tr>
		<td height="30">&nbsp</td>
	  <td>
      <p>&nbsp;</p></td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>di Be Genius IT Training Center dengan pola waktu {{ $cetak->total_jam }}<br>
		yang dilaksanakan dari tanggal {{ $cetak->tgl_mulai }} hingga  {{ $cetak->tgl_selesai }}</td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td></td>
	</tr>
	<tr>
		<td>&nbsp</td>
		<td>Pe kanbaru, {{ $cetak->tgl_keluar_sertifikat}}<br>
			Direktur<br><br><br><br>
			<b>Hijratul Laktifa S.Pd.I</b></td>
	</tr>
</table>
</body>
</html>