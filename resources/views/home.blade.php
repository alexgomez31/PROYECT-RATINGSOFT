@extends('layouts.app')
@section('titulo', 'Principal')
@section('content')
    <div style="padding: 20px">
        <h2 class="text-center">RATINGSOFT GESTIÓN DE CALIFICACIONES</h2>

        <!-- Primera fila de tarjetas -->
        <div class="row" style="margin-top: 30px">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card" style="background: #ffa6008e; border-radius: 20%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 19px">
                            <div style="border-right: solid rgb(255, 255, 255) 2px">
                                <img style="width: 135px; height: 135px; border-radius: 50%; object-fit: cover;"
                                    src="{{ asset('img/img2.jpg') }}" alt="">
                            </div>
                            <div
                                style="font-size: 40px; color: rgb(255, 255, 255); font-weight: bold; background: rgba(0, 0, 0, 0.13); padding: 5px">
                                @foreach ($sql4 as $item)
                                    {{ $item->total }}
                                @endforeach
                            </div>
                        </div>
                        <h4 style="color: white" class="text-center">USUARIOS</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class "card" style="background: #00bfa6bb; border-radius: 20%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 19px">
                            <div style="border-right: solid rgb(255, 255, 255) 2px">
                                <img style="width: 135px; height: 135px; border-radius: 50%; object-fit: cover;"
                                    src="{{ asset('img/descarga.png') }}" alt="">
                            </div>
                            <div
                                style="font-size: 30px; color: rgb(255, 255, 255); font-weight: bold; background: rgba(0, 0, 0, 0.13); padding: 5px">
                                @foreach ($sql as $item)
                                    {{ $item->total }}
                                @endforeach
                            </div>
                        </div>
                        <h4 style="color: white" class="text-center">ADMINISTRADOR</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card" style="background: #00a2ff94; border-radius: 20%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 19px">
                            <div style="border-right: solid rgb(255, 255, 255) 2px">
                                <img style="width: 135px; height: 135px; border-radius: 50%; object-fit: cover;"
                                    src="{{ asset('img/3.jpeg') }}" alt="">
                            </div>
                            <div
                                style="font-size: 30px; color: rgb(255, 255, 255); font-weight: bold; background: rgba(0, 0, 0, 0.13); padding: 5px">
                                @foreach ($sql2 as $item)
                                    {{ $item->total }}
                                @endforeach
                            </div>
                        </div>
                        <h4 style="color: white" class="text-center">DOCENTES</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card" style="background: #cc00ff96; border-radius: 20%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 19px">
                            <div style="border-right: solid rgb(255, 255, 255) 2px">
                                <img style="width: 135px; height: 135px; border-radius: 50%; object-fit: cover;"
                                    src="{{ asset('img/home5.jpg') }}" alt="">
                            </div>
                            <div
                                style="font-size: 30px; color: rgb(255, 255, 255); font-weight: bold; background: rgba(0, 0, 0, 0.13); padding: 5px">
                                @foreach ($sql3 as $item)
                                    {{ $item->total }}
                                @endforeach
                            </div>
                        </div>
                        <h4 style="color: white" class="text-center">ESTUDIANTES</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segunda fila de tarjetas -->
        <div class="row" style="margin-top: 30px">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card" style="background: #ff000081; border-radius: 20%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 19px">
                            <div style="border-right: solid rgb(255, 255, 255) 2px">
                                <img style="width: 135px; height: 135px; border-radius: 50%; object-fit: cover;"
                                    src="{{ asset('img/materias.jpeg') }}" alt="">
                            </div>
                            <div
                                style="font-size: 30px; color: rgb(255, 255, 255); font-weight: bold; background: rgba(0, 0, 0, 0.13); padding: 5px">
                                @foreach ($sql5 as $item)
                                    {{ $item->total }}
                                @endforeach
                            </div>
                        </div>
                        <h4 style="color: white" class="text-center">MATERIAS</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card" style="background: #abbe00; border-radius: 20%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 19px">
                            <div style="border-right: solid rgb(255, 255, 255) 2px">
                                <img style="width: 135px; height: 135px; border-radius: 50%; object-fit: cover;"
                                    src="{{ asset('img/home.jpg') }}" alt="">
                            </div>
                            <div
                                style="font-size: 13px; color: rgb(255, 255, 255); font-weight: bold; background: rgba(0, 0, 0, 0.13); padding: 5px">
                                @foreach ($sql7 as $item)
                                    <p>Max : {{ $item->promedio }}</p>
                                @endforeach
                                @foreach ($sql8 as $item)
                                    <p>Min : {{ $item->promedio }}</p>
                                @endforeach
                                @foreach ($sql6 as $item)
                                    <p>Pro : {{ $item->promedio }}</p>
                                @endforeach
                            </div>
                        </div>
                        <h4 style="color: white" class="text-center">NOTAS</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card" style="background: #ff007785; border-radius: 20%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 19px">
                            <div style="border-right: solid rgb(255, 255, 255) 2px">
                                <img style="width: 135px; height: 135px; border-radius: 50%; object-fit: cover;"
                                    src="{{ asset('img/curso1.jpeg') }}" alt="">
                            </div>
                            <div
                                style="font-size: 30px; color: rgb(255, 255, 255); font-weight: bold; background: rgba(0, 0, 0, 0.13); padding: 5px">
                                @foreach ($sql9 as $item)
                                    {{ $item->total }}
                                @endforeach
                            </div>
                        </div>
                        <h4 style="color: white" class="text-center">CURSOS</h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <div class="card" style="background: #1088008a; border-radius: 20%;">
                    <div class="card-body">
                        <div style="display: flex; justify-content: space-between; align-items: center; padding: 19px">
                            <div style="border-right: solid rgb(255, 255, 255) 2px">
                                <img style="width: 135px; height: 135px; border-radius: 50%; object-fit: cover;"
                                    src="{{ asset('img/curso.webp') }}" alt="">
                            </div>
                            <div
                                style="font-size: 30px; color: rgb(255, 255, 255); font-weight: bold; background: rgba(0, 0, 0, 0.13); padding: 5px">
                                @foreach ($sql10 as $item)
                                    {{ $item->total }}
                                @endforeach
                            </div>
                        </div>
                        <h4 style="color: white" class="text-center">GRADO Y CURSO</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
