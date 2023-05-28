<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <br>
        <h3 style="text-align: center;">Form</h3>
        <br>
        <form method="POST" action="{{url('forminput')}}">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukkan Nama Anda">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label> 
                <div class="col-8">
                <input id="email" name="email" type="email" class="form-control" placeholder="Masukkan Email Anda">
                </div>
            </div>
            <div class="form-group row">
                <label for="lokasi" class="col-4 col-form-label">Tempat Domisili</label> 
                <div class="col-8">
                <select id="lokasi" name="lokasi" class="custom-select">
                    <option value="surakarta">Surakarta</option>
                    <option value="jakarta">Jakarta</option>
                    <option value="depok">Depok</option>
                    <option value="bogor">Bogor</option>
                    <option value="tanggerang">Tanggerang</option>
                    <option value="bekasi">Bekasi</option>
                    <option value="lainnya">Lainnya</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Jenis Kelamin</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki-laki"> 
                    <label for="jk_0" class="custom-control-label">Laki - Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="perempuan"> 
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <label class="col-4">Skill</label> 
                <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_0" type="checkbox" class="custom-control-input" value="php"> 
                    <label for="skill[]_0" class="custom-control-label">PHP</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_1" type="checkbox" class="custom-control-input" value="mysql"> 
                    <label for="skill[]_1" class="custom-control-label">Mysql</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_2" type="checkbox" class="custom-control-input" value="javascript"> 
                    <label for="skill[]_2" class="custom-control-label">JavaScript</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_3" type="checkbox" class="custom-control-input" value="html"> 
                    <label for="skill[]_3" class="custom-control-label">HTML</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="skill[]" id="skill[]_4" type="checkbox" class="custom-control-input" value="css"> 
                    <label for="skill[]_4" class="custom-control-label">CSS</label>
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <br><hr>
        <h3>Hasil input: </h3>

        @if (@isset($_POST['submit']))    
        @php
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $lokasi = $_POST['lokasi'];
        $jk = $_POST['jk'];
        $skill = $_POST['skill'];
        @endphp
        <table class="table" style="text-align: center;">
            <thead style="background-color: lavender;">
                <tr>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>Lokasi</td>
                    <td>Jenis kelamin</td>
                    <td>Skill</td>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $data ['nama'] }}</td>
                    <td>{{ $data ['email'] }}</td>
                    <td>{{ $data ['lokasi'] }}</td>
                    <td>{{ $data ['jk'] }}</td>
                    <td style="text-align: left;">
                        <ul>
                            @foreach ($skill as $item)
                               <li>
                                  {{$item}}  
                              </li> 
                            @endforeach  
                        </ul>  
                      </td>
                </tr>
            </tbody>
        </table>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
