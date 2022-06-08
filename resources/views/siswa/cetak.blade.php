<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
    <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jumlah Topup</th>
                                        <th>Tanggal Setoran</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                @php $i = 0 @endphp
                                    <tr>
                                    @php $i++ @endphp
                                    @foreach($tabungan as $tabung)
                                        <td>{{$i}}</td>
                                        <td>{{$tabung->jlh_setoran}}</td>
                                        <td>{{$tabung->tgl_setoran}}</td>
                                        <td>{{$tabung->payment}}</td>
                                        <td>{{$tabung->status}}</td>
                                        @endforeach
                                    </tr>
                                </tbody>
                                
                            </table>
  </body>
</html>