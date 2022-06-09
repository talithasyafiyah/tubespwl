<div class="modal fade text-left" id="inlineForm{{$loop->iteration}}" tabindex="-1"
                                role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel33">Data Siswa </h4>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <form action="/tampildata/{{$siswa->NISN}}">
                                            <div class="modal-body">
                                                <label>NISN: </label>
                                                <div class="form-group">
                                                    <input type="text" name="NISN"
                                                        class="form-control" value="{{$siswa->NISN}}">
                                                </div>
                                                <label>Nama: </label>
                                                <div class="form-group">
                                                    <input type="text" name="nama"
                                                        class="form-control" value="{{$siswa->nama}}">
                                                </div>
                                                <label>Kelas: </label>
                                                <div class="form-group">
                                                    <input type="text" name="nama_kelas"
                                                        class="form-control" value="{{$siswa->nama_kelas}}">
                                                </div>
                                                <label>Alamat: </label>
                                                <div class="form-group">
                                                    <input type="text" name="alamat"
                                                        class="form-control" value="{{$siswa->alamat}}">
                                                </div>
                                                <label>No Hp: </label>
                                                <div class="form-group">
                                                    <input type="text" name="no_hp"
                                                        class="form-control" value="{{$siswa->no_hp}}">
                                                </div>
                                                <label>Saldo: </label>
                                                <div class="form-group">
                                                    <input type="number" name="saldo"
                                                        class="form-control" value="{{$siswa->saldo}}">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-secondary"
                                                    data-bs-dismiss="modal">
                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">Close</span>
                                                </button>
                                                <br>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>