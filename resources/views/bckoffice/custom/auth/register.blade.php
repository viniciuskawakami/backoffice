@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h3 class="card-header text-center">{{ __('[BackOffice]::::Register::::') }}</h3>

                <div class="card-body">
                    <form method="POST" action="{{ route('auth.customRegister') }}">
                        @csrf

                        @error('is_active')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        @error('terms')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
{{--                        {{dd($errors, $errors->any(), $errors-> all())}}--}}
                        <div class="row mb-3">
                            <label for="aka_name" class="col-md-4 col-form-label text-md-end">{{ __('As Know As') }}</label>
                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('aka_name') is-invalid @enderror" name="aka_name" value="{{ old('name') }}"  autocomplete="\aka_name" autofocus>

                            @error('aka_name')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('name') }}"  autocomplete="\aka_name" autofocus>

                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                @enderror
                            </div>
                        </div>
                    <div class="row mb-3">
                        <label for="middle_name" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" value="{{ old('middle_name') }}"  autocomplete="middle_name" autofocus>

                            @error('middle_name')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Surname') }}</label>

                        <div class="col-md-6">
                            <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('name') }}"  autocomplete="\aka_name" autofocus>

                            @error('surname')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Social Name') }}</label>

                        <div class="col-md-6">
                            <input id="social_name" type="text" class="form-control @error('social_name') is-invalid @enderror" name="social_name" value="{{ old('social_name') }}"  autocomplete="social_name" autofocus>

                            @error('social_name')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="gender_Identity_id" class="col-md-4 col-form-label text-md-end">{{ __('Gender Identity') }}</label>

                        <div class="col-md-6">
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="gender_Identity_id" id="gender_Identity_id">
                                <option selected value="-1">Select One</option>
                                @foreach($genderIdentities as $genderIdentities)
                                    <option value="{{ $genderIdentities->id }}">{{ $genderIdentities->name }}</option>
                                @endforeach
                            </select>

                            @error('gender_Identity_id')
                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                            @enderror
                        </div>
                    </div>
                        <div class="row mb-3">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control @error('date_of_birth') is-invalid @enderror"  name="date_of_birth" value="{{ old('date_of_birth') }}"  autocomplete="date_of_birth">

                                @error('date_of_birth')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Confirm') }}</label>

                            <div class="col-md-6">
                                <input id="email_confirm" type="email" class="form-control @error('email_confirm') is-invalid @enderror" name="email_confirm" value="{{ old('email_confirm') }}"  autocomplete="email_confirm">

                                @error('email_confirm')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="user_type_id" class="col-md-4 col-form-label text-md-end">{{ __('User Type') }}</label>

                            <div class="col-md-6">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="user_type_id" id="user_type_id">
                                    <option selected value="-1">Select One</option>
                                    @foreach($userTypes as $userType)
                                        <option value="{{ $userType->id }}">{{ $userType->name }}</option>
                                    @endforeach
                                </select>

                                @error('user_type_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="document_type_id" class="col-md-4 col-form-label text-md-end">{{ __('Document Type') }}</label>

                            <div class="col-md-6">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="document_type_id" id="document_type_id">
                                    <option selected value="-1">Select One</option>
                                    @foreach($documentTypes as $documentType)
                                        <option value="{{ $documentType->id }}">{{ $documentType->name }}</option>
                                    @endforeach
                                </select>

                                @error('document_type_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="document_number" class="col-md-4 col-form-label text-md-end">{{ __('Document Number') }}</label>

                            <div class="col-md-6">
                                <input id="document_number" type="document_number" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}"  autocomplete="document_number">

                                @error('document_number')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="mobile" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control @error('mobile') is-invalid @enderror"  name="mobile" value="{{ old('mobile') }}"  autocomplete="mobile" pattern="([0-9{2})[0-9]{5}-[0-9]{4}">

                                @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="department_id" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="department_id" id="department_id">
                                    <option selected value="-1">Select One</option>
                                    @foreach($departments as $department)
                                        <option value="{{ $department->id}}">{{ $department->name}}</option>
                                    @endforeach
                                </select>

                                @error('department_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="position_id" class="col-md-4 col-form-label text-md-end">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="position_id" id="position_id">
                                    <option selected value="-1">Select One</option>
                                    @foreach($positions as $position)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                    @endforeach
                                </select>

                                @error('position_id')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for=password_confirmation" class="col-md-4 col-form-label text-md-end">{{ __('Password Confirmation') }}</label>

                            <div class="col-md-6">
                                <input id=password_confirmation" type="password" class="form-control"@error('password_confirmation') is-invalid @enderror" name="password_confirmation"  autocomplete="password_confirmation">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <div class="form-check form-switch">
                                    <input class="form-check-input @error('is_active') is-invalid @enderror" name="is_active" type="checkbox" id="is_active">
                                    <label class="form-check-label" for="is_active">Is Active?</label>
                                </div>

                                @error('is_active')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Accept') }}</label>

                            <div class="col-md-6">
                                <div class="form-check">
                                    <input class="form-check-input @error('terms') is-invalid @enderror" name="terms" type="checkbox" value="1" id="terms" autocomplete="terms">
                                    <label class="form-check-label" for="terms">
                                        Accept our terms and conditions?
                                    </label>
                                </div>

                                @error('terms')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('terms') }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-outline-success">
                                    {{ __('Register') }}
                                </button>
                                <p class="text-muted">Have an account?<a href="{{ route('auth.customLogin') }}" class="text-reset">Sign In here!</a>.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/intlTelInput.min.js"></script>
<script>
    const input = document.querySelector("#mobile");
    window.intlTelInput(input, {
        initialCountry: "br",
        separateDialCode: true,
        preferredCountries: ["br", "jp", "us", "gb", "pt"],
        geoIpLookup: function(callback) {
            $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.12/js/utils.js"
    });
</script>
@endsection
