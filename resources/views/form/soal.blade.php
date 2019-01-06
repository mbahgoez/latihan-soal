@extends('master')
    @section('title', 'Masukan Soal')
    @section('content')
    <style>
        * {
            font-family:'Segoe UI';
        }
        
        form input,form textarea, form select {
            width:100%;
            padding:5px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <br>
                {{ $data->links() }}
                <table class="table table-striped table-bordered">
                    <thead>        
                        <tr>
                            <td>#</td>
                            <td>Soal</td>    
                            <td>Jawaban</td>
                            <td>Mata Kuliah</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td align="center">{{ $loop->iteration }}</td>
                            <td>{{$d->soal}}</td>
                            <td>{{$d->jawaban}}</td>
                            <td>{{ $d->kode_matkul }}</td>
                            <td>
                                <a href="{{ url('admin/soal/edit?id='.$d->id) }}" class="btn btn-default">Update</a>
                                <br>
                                <a onclick="return confirm('Yakin ingin delete?')" href="{{ url('admin/soal/delete?id=').$d->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <td align="center" colspan="3">
                                {{ $data->links() }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-5">
                <div>
        <h3 style="text-align:center;">Masukan Latihan Soal</h3>
        <form action="{{ url('admin/soal/tambah') }}" method="POST">
        {{ csrf_field() }}
        <table style="width:100%;">
            <tr>
                <td>Soal</td>
                <td>:</td>
                <td>
                    <input placeholder="Soal untuk latihan" type="text" name="soal"><br>
                </td>
            </tr>
            
            <tr>
                <td>Type Soal</td>
                <td>:</td>
                <td>
                    <select id="#" name="type">
                        <option value="essai">Essai</option>
                        <option value="pilihan-ganda">Pilihan Ganda</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Jawaban</td>
                <td>:</td>
                <td>
                    <textarea name="jawaban" placeholder="Jawaban Sebenarnya..." cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>:</td>
                <td>
                    <select name="semester">
                        <?php for($i = 1; $i <= 8; $i++){ ?>
                            <option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
                        <?php } ?>
                 </select>
                </td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>:</td>
                <td>
                    <select name="kode_matkul">
                        
                        <?php
                            $matkuls = ['ppti', 'pti', 'palpro', 'alpro', 'kasi', 'pancasila', 'english-1', 'matdis']; 
                            foreach($matkuls as $matkul){
                                echo $matkul;
                        ?>
                            <option value="<?php echo $matkul; ?>"><?php echo $matkul; ?></option>
                        <?php } ?>
                 </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td align="right">
                    <button style="width:100%;padding:10px;" type="submit">Submit</button>
                </td>
            </tr>
        </table>
        </form>
    </div>
            </div>
        </div>
    </div>
    
@endsection