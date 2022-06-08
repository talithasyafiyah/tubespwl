<div class="modal fade text-left" id="inlineForm{{$loop->iteration}}" tabindex="-1"
                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Login Form </h4>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="/showtabungan/" method="#">
                                            <div class="modal-body">
                                                <label>NISN: </label>
                                                <div class="form-group">
                                                    <input type="text" name="NISN"
                                                        class="form-control" value="{{$tabungan->NISN}}">
                                                </div>
                                                <label>Nama: </label>
                                                <div class="form-group">
                                                    <input type="text" name="nama"
                                                        class="form-control" value="{{$tabungan->nama}}">
                                                </div>
                                                <label>Jumlah Setoran: </label>
                                                <div class="form-group">
                                                    <input type="text" name="jlh_setoran"
                                                        class="form-control" value="{{$tabungan->jlh_setoran}}">
                                                </div>
                                                <label>Tanggal Setoran: </label>
                                                <div class="form-group">
                                                    <?php $time = strtotime($tabungan->tgl_setoran) ?>
                                                    <input type="text" name="tgl_setoran"
                                                        class="form-control" value="{{date('d/M/Y',$time)}}">
                                                </div>
                                                <label>Payment: </label>
                                                <div class="form-group">
                                                    <input type="text" name="payment"
                                                        class="form-control" value="{{$tabungan->payment}}">
                                                </div>
                                                <label>No Rekening: </label>
                                                <div class="form-group">
                                                    <input type="text" name="no_rekening"
                                                        class="form-control" value="{{$tabungan->no_rekening}}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>