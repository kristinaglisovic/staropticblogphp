@extends('layouts.front.mainlayout')
@section('title') Kontakt @endsection
@section('pagedescription') Page Description 2 @endsection
@section('keywords') staroptic,kontakt,message,poruka @endsection
@section('content')

    <section class="p-lg-4 text-center auth" id="contact">
        <div class="container bg-light shadow-sm pt-2 pb-5">
            <h2 class="mb-4 pt-3">Kontakt</h2>

            <ul class="fa-ul mb-4 ml-0">
                <li id="mail-address">
                    <i class="fa fa-google mr-2 contact-icons"></i>office@staroptic.rs</a>
                </li>
                <li>
                    <i class="fa fa-phone mr-2 contact-icons"></i>+381 64 6689 857
                </li>
                <li>
                    <i class="fa fa-map-pin mr-2 contact-icons"></i>Raše Plaovića 2, 11160 Beograd
                </li>
            </ul>

            <p>
                Ili nas kontaktirajte putem poruke, a mi ćemo Vam odgovoriti u najkraćem mogućem roku.
            </p>

            <form class="contact-form d-flex flex-wrap align-items-center justify-content-center"
                  action="{{route('contactSend')}}" method="POST">
               @csrf
                <div class="form-group maximize mr-4">
                    <input type="text" class="form-control {{$errors->has('firstname') ? 'novalid' :  session('sent')}} " placeholder="Ime *" value="{{old('firstname')}}" name="firstname"/>
                    @error('firstname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group maximize">
                    <input type="text" class="form-control {{$errors->has('lastname') ? 'novalid' : session('sent')}}" placeholder="Prezime *" value="{{old('lastname')}}" name="lastname"/>
                    @error('lastname')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group w-75">
                    <input type="text" class="form-control {{$errors->has('phone') ? 'novalid' : session('sent') }}" placeholder="Telefon(opciono)" value="{{old('phone')}}" name="phone"/>
                    @error('phone')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group w-75">
                    <input type="text" class="form-control {{$errors->has('email') ? 'novalid' : session('sent') }}" placeholder="Email *" value="{{old('email')}}" name="email"/>
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group w-75">
                    <textarea class="form-control {{$errors->has('message') ? 'novalid' : session('sent') }}" type="text" placeholder="Poruka *" rows="7"  name="message">{{old('message')}}</textarea>
                    @error('message')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <button type="submit" class="btn btn-info w-75">Pošalji</button>

            </form>
            <p class="text-success pt-2">{{session('msg')}}</p>
        </div>
    </section>

@endsection
