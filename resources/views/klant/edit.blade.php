<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
            <div class="container">
                <div class="row">

            
                        <form action="POST" action="{{ route('klant.update', $klanten[0]->id)}}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row col-12 mt-3 ms-5">
                        <label for="gezin_naam" class="col-4 col-form-label text-end">{{ __('Gezin naam')}}</label>
                            
                        <div class="col-3">
                            <input id="gezin_naam" type="text"
                                class="form-control @error('gezin_naam') is-invalid @enderror"
                                name="gezin_naam" value="{{$klanten[0]->gezin_naam}}" required>

                            @error('gezin_naam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    {{--Now do the same as above voornaam, tussenvoegsel, achternaam, aantal_volwassenen, aantal_kinderen, aantal_babys, straatnaam, postcode, plaats, telefoonnummer, email, wensen, allergie  --}}
                    <div class="row col-12 mt-3 ms-5">
                        <label for="voornaam" class="col-4 col-form-label text-end">{{ __('Voornaam')}}</label>

                        <div class="col-3">
                            <input id="voornaam" type="text"
                                class="form-control @error('voornaam') is-invalid @enderror"
                                name="voornaam" value="{{$klanten[0]->voornaam}}" required>

                            @error('voornaam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    {{--Now do the same as above tussenvoegsel, achternaam, aantal_volwassenen, aantal_kinderen, aantal_babys, straatnaam, postcode, plaats, telefoonnummer, email, wensen, allergie  --}}
                    <div class="row col-12 mt-3 ms-5">
                        <label for="tussenvoegsel" class="col-4 col-form-label text-end">{{ __('Tussenvoegsel')}}</label>

                        <div class="col-3">
                            <input id="tussenvoegsel" type="text"
                                class="form-control @error('tussenvoegsel') is-invalid @enderror"
                                name="tussenvoegsel" value="{{$klanten[0]->tussenvoegsel}}" required>

                            @error('tussenvoegsel')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                        
                        {{--Now do the same as above achternaam, aantal_volwassenen, aantal_kinderen, aantal_babys, straatnaam, postcode, plaats, telefoonnummer, email, wensen, allergie  --}}
                        <div class="row col-12 mt-3 ms-5">
                        <label for="achternaam" class="col-4 col-form-label text-end">{{ __('Achternaam')}}</label>

                        <div class="col-3">
                            <input id="achternaam" type="text"
                                class="form-control @error('achternaam') is-invalid @enderror"
                                name="achternaam" value="{{$klanten[0]->achternaam}}" required>

                            @error('achternaam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    {{--Now do the same as above for aantal_volwassenen, aantal_kinderen, aantal_babys, straatnaam, postcode, plaats, telefoonnummer, email, wensen, allergie  --}}
                    <div class="row col-12 mt-3 ms-5">
                        <label for="aantal_volwassenen" class="col-4 col-form-label text-end">{{ __('Aantal Volwassenen')}}</label>

                        <div class="col-3">
                            <input id="aantal_volwassenen" type="text"
                                class="form-control @error('aantal_volwassenen') is-invalid @enderror"
                                name="aantal_volwassenen" value="{{$klanten[0]->aantal_volwassenen}}" required>

                            @error('aantal_volwassenen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                        
                        {{--Now do the same as above for aantal_kinderen, aantal_babys, straatnaam, postcode, plaats, telefoonnummer, email, wensen, allergie  --}}
                        
                        <div class="row col-12 mt-3 ms-5">
                        <label for="aantal_kinderen" class="col-4 col-form-label text-end">{{ __('Aantal Kinder')}}</label>

                        <div class="col-3">
                            <input id="aantal_kinderen" type="text"
                                class="form-control @error('aantal_volwassenen') is-invalid @enderror"
                                name="aantal_kinderen" value="{{$klanten[0]->aantal_kinderen}}" required>

                            @error('aantal_kinderen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                        {{--Now do the same as above for aantal_babys, straatnaam, postcode, plaats, telefoonnummer, email, wensen, allergie  --}}
                        <div class="row col-12 mt-3 ms-5">
                        <label for="aantal_babys" class="col-4 col-form-label text-end">{{ __('Aantal Babys')}}</label>

                        <div class="col-3">
                            <input id="aantal_babys" type="text"
                                class="form-control @error('aantal_babys') is-invalid @enderror"
                                name="aantal_babys" value="{{$klanten[0]->aantal_babys}}" required>

                            @error('aantal_babys')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                        {{--Now do the same as above for straatnaam, postcode, plaats, telefoonnummer, email, wensen, allergie  --}}
                        <div class="row col-12 mt-3 ms-5">
                        <label for="straatnaam" class="col-4 col-form-label text-end">{{ __('Straatnaam')}}</label>

                        <div class="col-3">
                            <input id="straatnaam" type="text"
                                class="form-control @error('straatnaam') is-invalid @enderror"
                                name="straatnaam" value="{{$klanten[0]->straatnaam}}" required>

                            @error('straatnaam')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                        {{--Now do the same as above for postcode, plaats, telefoonnummer, email, wensen, allergie  --}}
                        <div class="row col-12 mt-3 ms-5">
                        <label for="postcode" class="col-4 col-form-label text-end">{{ __('Postcode')}}</label>

                        <div class="col-3">
                            <input id="postcode" type="text"
                                class="form-control @error('postcode') is-invalid @enderror"
                                name="postcode" value="{{$klanten[0]->postcode}}" required>

                            @error('postcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>  
                    </div>

                        {{--Now do the same as above for plaats, telefoonnummer, email, wensen, allergie  --}}

                        <div class="row col-12 mt-3 ms-5">
                        <label for="plaats" class="col-4 col-form-label text-end">{{ __('Plaats')}}</label>

                        <div class="col-3">
                            <input id="plaats" type="text"
                                class="form-control @error('plaats') is-invalid @enderror"
                                name="plaats" value="{{$klanten[0]->plaats}}" required>

                            @error('plaats')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>  
                    </div>

                        {{--Now do the same as above for telefoonnummer, email, wensen, allergie  --}}
                        <div class="row col-12 mt-3 ms-5">
                        <label for="telefoonnummer" class="col-4 col-form-label text-end">{{ __('Telefoonnummer')}}</label>

                        <div class="col-3">
                            <input id="telefoonnummer" type="text"
                                class="form-control @error('telefoonnummer') is-invalid @enderror"
                                name="telefoonnummer" value="{{$klanten[0]->telefoonnummer}}" required>

                            @error('telefoonnummer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>
                            
                            {{--Now do the same as above for email, wensen, allergie  --}}

                        <div class="row col-12 mt-3 ms-5">
                        <label for="email" class="col-4 col-form-label text-end">{{ __('E-mail')}}</label>

                        <div class="col-3">
                            <input id="email" type="text"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{$klanten[0]->email}}" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>
                            
                         <div class="row col-12 mt-3 ms-5">
                        <label for="allergie" class="col-4 col-form-label text-end">{{ __('Allergie')}}</label>

                        <div class="col-3">
                            <input id="allergie" type="text"
                                class="form-control @error('allergie') is-invalid @enderror"
                                name="allergie" value="{{$klanten[0]->allergie}}" required>

                            @error('allergie')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        </div>

                        <div class="row col-12 mt-3 ms-5">
                        <label for="wensen" class="col-4 col-form-label text-end">{{ __('Wensen')}}</label>

                        <div class="col-3">
                            <input id="wensen" type="text"
                                class="form-control @error('wensen') is-invalid @enderror"
                                name="wensen" value="{{$klanten->wensen}}" required>

                            @error('wensen')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                    </div>
                   </div>

                   {{-- make a button to go to the edit page --}}
                   
                            <div class="col-6 ms-auto mb-5 float-end">
                                <button type="submit" class="btn btn-warning">opslaan</button>
                            </div>
                      </div>
                      </form>
                  </div>
                </div>