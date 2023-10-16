<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ongkir</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>


                <div class="container mt-3">
                    <div class="card">
                        <form action="{{ url('/') }}" method="get">
                        @csrf
                            <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <h6>Nama Anda</h6>
                                                <input type="text" class="form-control" name="name">
                                             </div>
                                        </div>
                                    </div>
                                  
                                 
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                              <h6>Kirim Dari</h6>
                                                <select name="province_from" class="form-select">
                                                    <option value="" holder>Pilih Provinsi</option>
                                                    @foreach ($provinsi as $result)
                                                    <option value="{{ $result->id }}">{{ $result->province }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="origin" class="form-select">
                                                    <option value="" holder>Pilih Kota</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <div class="form-group mb-3">
                                                    <h6>Kirim Ke</h6>
                                                    <select name="province_to" class="form-select">
                                                        <option value="" holder>Pilih Provinsi</option>
                                                        <option value="" holder>Pilih Provinsi</option>
                                                        @foreach ($provinsi as $result)
                                                        <option value="{{ $result->id }}">{{ $result->province }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                      <select name="destination" class="form-select">
                                                          <option value="" holder>Pilih Kota</option>
                                                      </select>
                                                </div>
                                        </div>
                                    </div>
                                 
                                
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <h6>Berat Paket</h6>
                                                <input type="text" class="form-control" name="weight">
                                                <small>dalam gram contoh = 1700/1,7g</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <h6>Pilih Kurir</h6>
                                                    <select name="courier" class="form-select">
                                                        <option value="" holder>Pilih Kurir</option>
                                                        <option value="jne">JNE</option>
                                                        <option value="tiki">TIKI</option>
                                                        <option value="pos">POS Indonesia</option>
                                                    </select>
                                                </div>
                                        </div>
                                    </div>
                                
        
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group d-grid">
                                                <button type="submit" class="btn btn-info">Hitung Ongkir</button>
                                            </div>
                                        </div>
                                    </div>
        
                            
                        </form>
                         @if ($cekongkir)
                         <div class="row">
                             <div class="col">
                                 <table class="table table-striped table-bordered table-hovered mt-3" width="100%">
                                     <thead>
                                         <tr>
                                             <th>Service</th>
                                             <th>Deskripsi</th>
                                             <th>Harga</th>
                                             <th>Estimasi</th>
                                             <th>Note</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         @foreach ($cekongkir as $result)
                                             <tr>
                                                <td>{{ $result['service'] }}</td>
                                                <td>{{ $result['description'] }}</td>
                                                <td>{{ $result['cost'][0]['value'] }}</td>
                                                <td>{{ $result['cost'][0]['etd'] }}</td>
                                                <td>{{ $result['cost'][0]['note'] }}</td>
                                             </tr>
                                         @endforeach
                                     </tbody>
                                 </table>
                             </div>
                         </div> 
                         @else

                         @endif
                        </div>
                    </div>
                </div>




    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="province_from"]').on('change', function() {
                let cityId = $(this).val();
                if(cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="origin"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="origin"]').append(
                                    '<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    $('select[name="origin"]').empty();
                }
            });

             $('select[name="province_to"]').on('change', function() {
                let cityId = $(this).val();
                if(cityId) {
                    $.ajax({
                        url: 'getCity/ajax/' + cityId,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="destination"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="destination"]').append(
                                    '<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    $('select[name="destination"]').empty();
                }
            });
        });
    </script>
</body>
</html>