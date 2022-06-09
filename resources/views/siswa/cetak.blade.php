<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <table align="center">
        <tr>
            <td align="center">
                <b><p>SD Pelita Harapan Medan</p></b>
                <p>Jalan Dr. T. Mansur No.9, Padang Bulan</p>
                <p>Kec. Medan Baru, Kota Medan, Sumatera Utara 20222</p>
                <p>Telp: 021-566-777 Wa: 0812-6015-2610</p>
                <p>sdpelitaharapan@gmail.com</p>
            </td>
        </tr>
    </table>
    <hr size="2" style="color: #000;">
    <table class="table table-bordered">
      {{-- <thead>
          <tr>
              <th>No</th>
              <th>Jumlah Setoran</th>
              <th>Tanggal Setoran</th>
              <th>Payment</th>
              <th>Status</th>
          </tr>
      </thead> --}}
      
      <tbody>
      @php $i = 0 @endphp
          
          @foreach($tabungan as $tabung)
          <tr>
              <td>NISN</td>
              <td>:</td>
              <td>{{$tabung->NISN}}</td>
          </tr>
          <tr>
              <td>Jumlah Setoran</td>
              <td>:</td>
              <td>{{$tabung->jlh_setoran}}</td>
          </tr>
          <tr>
              <td>Tanggal Setoran</td>
              <td>:</td>
              <?php $time = strtotime($tabung->tgl_setoran) ?>
              <td>{{date('d/M/Y', $time)}}</td>
          </tr>
          <tr>
              <td>Payment</td>
              <td>:</td>
              <td>{{$tabung->payment}}</td>
          </tr>
          <tr>
              <td>Status</td>
              <td>:</td>
              <td>{{$tabung->status}}</td>
          </tr>
          @endforeach
          
      </tbody>
      
    </table>
  </body>
</html>