@extends('layouts.master')

@section('contenido')
<div class="container">
    <div class="col d-flex">
        <div class="bg-dark w-20 mt-5 rounded d-inline-block pr-5" style="height: 450px">
            <div class="text-white text-center">
                <h3 class="mt-2">Mi Perfil</h3>
            </div>
                <div class="nombre text-white ml-3">
                    <p class="font-weight-bold"> {{Auth::user()->name}}</p>
                </div>
                <div class="nombre text-white ml-3">
                    <p class="font-weight-bold">{{Auth::user()->apellido}}</p>
                </div>
                <div class="nombre text-white ml-3">
                    <p class="font-weight-bold"> {{Auth::user()->username}}</p>
                </div>
                <div class="nombre text-white ml-3">
                    <p class="font-weight-bold">{{Auth::user()->email}}</p>
                </div>
                <div class="nombre text-white ml-3">
                    <img src="{{asset('storage/avatar/generic.png')}}" alt="">
                </div>
                
                
        </div>
        <div class="posteos w-75 m-auto">
            @foreach ($posts as $post)
            
            <article class="post bg-dark rounded text-white pr-3 pl-3 pt-4 pb-5 ">
                <div class="persona">
                 <!-- imagen perfil -->
                    <h6 class=" font-weight-bold">{{Auth::user()->name}} {{Auth::user()->apellido}}</h6>
                </div>
               <!-- <button type="button" class="btn btn-dark _eliminar">Eliminar</button>-->
                <div class="informe" >
                    <h6></h6>
                    <h6>{{$post->titulo}}</h6>
                    <a href="/publicacion/{{$post->id}}"></a>
                    <p>
                        {{$post->mensaje}}
                    </p>
                    <!-- imagen publicacion (chequear para que haya un tama;o maximo de imagen y que se adapte a eso, ) -->

                </div>
                
            </article>
            @endforeach
    </div>

</div>
@endsection
