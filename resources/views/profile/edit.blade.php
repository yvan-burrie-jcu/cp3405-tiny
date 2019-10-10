@extends('layouts.app')

@section('content')
    <div class="container" style="background-color: white">
        <form action="{{route('profile.update')}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')

            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h1>Edit Profile</h1>
                    </div>

                    @switch($user_type)

                        @case('student')

                            <div class="form-group row">

                                <label for="jcu_id" class="col-md-4 col-form-label-lg">JCU ID</label>

                                <input id="jcu_id"
                                       type="text"
                                       class="form-control{{ $errors->has('jcu_id') ? ' is-invalid' : '' }}"
                                       name="jcu_id"
                                       value="{{ old('jcu_id') ?? $profile->jcu_id }}"
                                       autocomplete="jcu_id" autofocus>

                                @if ($errors->has('jcu_id'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('jcu_id') }}</strong>
                            </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label-lg">EMail</label>

                                <input id="email"
                                       type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ old('email') ?? $profile->email}}"
                                       autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="aboutme" class="col-md-4 col-form-label-lg">About Me</label>

                                <input id="aboutme"
                                       type="text"
                                       class="form-control{{ $errors->has('aboutme') ? ' is-invalid' : '' }}"
                                       name="aboutme" value="{{ old('url') ?? $profile->aboutme}}"
                                       autocomplete="aboutme" autofocus>

                                @if ($errors->has('aboutme'))
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('aboutme') }}</strong>
                            </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="education" class="col-md-4 col-form-label-lg">Education</label>

                                <input id="education"
                                       type="text"
                                       class="form-control{{ $errors->has('education') ? ' is-invalid' : '' }}"
                                       name="education" value="{{ old('education') ?? $profile->education}}"
                                       autocomplete="education" autofocus>

                                @if ($errors->has('education'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('education') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="experience" class="col-md-4 col-form-label-lg">Experience</label>

                                <input id="experience"
                                       type="text"
                                       class="form-control{{ $errors->has('experience') ? ' is-invalid' : '' }}"
                                       name="experience" value="{{ old('experience') ?? $profile->experience}}"
                                       autocomplete="experience" autofocus>

                                @if ($errors->has('experience'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('experience') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="certifications" class="col-md-4 col-form-label-lg">Certifications</label>

                                <input id="certifications"
                                       type="text"
                                       class="form-control{{ $errors->has('certifications') ? ' is-invalid' : '' }}"
                                       name="certifications" value="{{ old('certifications') ?? $profile->certifications}}"
                                       autocomplete="certifications" autofocus>

                                @if ($errors->has('certifications'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('certifications') }}</strong>
                                    </span>
                                @endif
                            </div>
                        @break

                        @case('company')

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label-lg">EMail</label>

                                <input id="email"
                                       type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ old('email') ?? $profile->email}}"
                                       autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="website" class="col-md-4 col-form-label-lg">Website</label>

                                <input id="website"
                                       type="text"
                                       class="form-control{{ $errors->has('website') ? ' is-invalid' : '' }}"
                                       name="website" value="{{ old('website') ?? $profile->website}}"
                                       autocomplete="website" autofocus>

                                @if ($errors->has('website'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('website') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="aboutus" class="col-md-4 col-form-label-lg">About Us</label>

                                <input id="aboutus"
                                       type="text"
                                       class="form-control{{ $errors->has('aboutus') ? ' is-invalid' : '' }}"
                                       name="aboutus" value="{{ old('aboutus') ?? $profile->aboutus}}"
                                       autocomplete="aboutus" autofocus>

                                @if ($errors->has('aboutus'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('aboutus') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label-lg">Address</label>

                                <input id="address"
                                       type="text"
                                       class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"
                                       name="address" value="{{ old('address') ?? $profile->address}}"
                                       autocomplete="address" autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        @break

                        @case('teacher')

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label-lg">EMail</label>

                                <input id="email"
                                       type="email"
                                       class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ old('email') ?? $profile->email}}"
                                       autocomplete="email" autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group row">
                                <label for="faculty" class="col-md-4 col-form-label-lg">Faculty</label>

                                <input id="faculty"
                                       type="text"
                                       class="form-control{{ $errors->has('faculty') ? ' is-invalid' : '' }}"
                                       name="faculty" value="{{ old('faculty') ?? $profile->faculty}}"
                                       autocomplete="faculty" autofocus>

                                @if ($errors->has('faculty'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('faculty') }}</strong>
                                    </span>
                                @endif
                            </div>
                        @break
                    @endswitch

                            <div class="row">
                                <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                                <input type="file" class="form-control-file" id="image" name="image">

                                @if ($errors->has('image'))
                                    <strong>{{ $errors->first('image') }}</strong>
                                @endif
                            </div>

                            <div class="row pt-4">
                                <button class="btn btn-primary" type="submit">Save Profile</button>
                            </div>
                </div>
            </div>
        </form>
    </div>
@endsection
