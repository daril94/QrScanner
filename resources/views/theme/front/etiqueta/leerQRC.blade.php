@extends('theme.back.app')
@section('title', 'Leer QR')
@section('contenido')
<!doctype html>
<html lang="en-US" xmlns:fb="https://www.facebook.com/2008/fbml" xmlns:addthis="https://www.addthis.com/help/api-spec"
    prefix="og: http://ogp.me/ns#" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Leer codigo QR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <div class="container-fluid">
        <div class="row row justify-content-center">


            <div class="col-8 text-center">
                <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
               <br>
                <h1>Leer Codigos QR</h1>
                 <br>
                <div class="col-sm-12">
                    <video id="preview" class="p-1 border" style="width:100%;"></video>
                </div>
                <script type="text/javascript">
                    var scanner = new Instascan.Scanner({
                        video: document.getElementById('preview'),
                        scanPeriod: 5,
                        mirror: false
                    });
                    scanner.addListener('scan', function(content) {
                        alert("Código leído ");
                        // content = "a";
                        $("#qr").val(content);
                        //window.location.href=content;
                    });
                    Instascan.Camera.getCameras().then(function(cameras) {
                        if (cameras.length > 0) {
                            scanner.start(cameras[0]);
                            $('[name="options"]').on('change', function() {
                                if ($(this).val() == 1) {
                                    if (cameras[0] != "") {
                                        scanner.start(cameras[0]);
                                    } else {
                                        alert('No Front camera found!');
                                    }
                                } else if ($(this).val() == 2) {
                                    if (cameras[1] != "") {
                                        scanner.start(cameras[1]);
                                    } else {
                                        alert('No Back camera found!');
                                    }
                                }
                            });
                        } else {
                            console.error('No cameras found.');
                            alert('No cameras found.');
                        }
                    }).catch(function(e) {
                        console.error(e);
                        alert(e);
                    });
                </script>
                <div class="btn-group btn-group-toggle mb-5" data-toggle="buttons">
                    <label class="btn btn-primary active">
                        <input type="radio" name="options" value="1" autocomplete="off" checked> Front Camera
                    </label>
                    <label class="btn btn-secondary">
                        <input type="radio" name="options" value="2" autocomplete="off"> Back Camera
                    </label>
                </div>

                <form action="{{route('control.crear')}}" method="POST">
                    @csrf
                    <input type="text" readonly hidden name="qrdata" id="qr"> <br>
                    <button type="submit" class="btn btn-success">Continuar</button>
                </form>
            </div>



        </div>

    </div>

</body>

</html>
@endsection
