@extends('public')

@section('title')
    Contact
@endsection

@section('body')
    <div class="contact-wrapper">
        <div class="contact-form">
            <h1 class="title">Pour me contacter :</h1>
                <div class="contact-form-wrapper">
                    <form action="{{ url('contact') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="@error('nom') @enderror" name="nom" id="nom" placeholder="Votre nom"
                                value="{{ old('nom') }}" autocomplete="off">
                            @error('nom')
                                <div class="error-contact">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="@error('email') @enderror" name="email" id="email"
                                placeholder="Votre email" value="{{ old('email') }}" autocomplete="off">
                            @error('email')
                                <div class="error-contact">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="@error('message') @enderror" name="message" id="message"
                                placeholder="Votre message" autocomplete="off">{{ old('message') }}</textarea>
                            @error('message')
                                <div class="error-contact">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="">Envoyer</button>
                    </form>
                </div>
        </div>
    </div>
@endsection
