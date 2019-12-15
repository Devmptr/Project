@extends('layouts.dashboard')

@section('tambahan')
    <script src="/js/usersetting.js"></script>
@endsection

@section('content')
<div class="container">
    <div class="head col-12">
        <div class="row">
            <h1>Users Setting</h1>
            <div class="form-inline ml-auto mr-0">
                <input id="searchuser" name="Nama" class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" value="">
            </div>
        </div>
    </div>
    <button type='submit' class='btn btn-primary' data-toggle="modal" data-target="#ModalUserInsert">Tambah Data</button>

    <table id="tabel-user" class="my-3 table table-hover">
        <!--<caption></caption>-->
        <thead>
            <tr>
                <th class="col-1">ID</td>
                <th class="col-2">Nama</th>
                <th class="col-3">Email</th>
                <th class="col-2">Password</th>
                <th class="col-2">Authority</th>
                <th class="col-3">Setting</th>
            </tr>
        </thead>
        <tbody id="datauser">

        </tbody>
    </table>

    <!-- MODAL INSERT -->
    <div class="modal fade" id="ModalUserInsert" tabindex="-1" role="dialog" aria-labelledby="ModalUserInsertLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalUserInsertLabel">Tambahkan Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input value= '' type="text" class="form-control" id="nama" name="inNama" aria-describedby="namaHelp" placeholder="Enter nama">
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input value= '' type="email" class="form-control" id="email" name="inEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="">Password</label> 
                    <input value= '' type="password" class="form-control" id="pass" name="inPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="">Otoritas</label> 
                    <input value= '' type="text" class="form-control" id="auth" name="inAuth" placeholder="Otoritas">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="user-insert btn btn-primary">Simpan</button>
            </div>
            </div>
        </div>
    </div>

    <!-- MODAL EDIT -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="editUser">
                <div class="form-group">
                    <label for="">Nama</label>
                    <input value= '' type="text" class="form-control" id="namauser" name="edNama" aria-describedby="namaHelp" placeholder="Enter nama">
                </div>
                <div class="form-group">
                    <label for="">Email Address</label>
                    <input value= '' type="email" class="form-control" id="emailuser" name="edEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="">Password</label> 
                    <input value= '' type="password" class="form-control" id="passuser" name="edPassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="">Otoritas</label> 
                    <input value= '' type="text" class="form-control" id="authuser" name="edAuth" placeholder="Password">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="text-center user-edit btn btn-primary">Submit</button>
            </div>
            </div>
        </div>
    </div>
    <!--<div class="d-flex justify-content-center">
    </div>-->
</div>
@endsection