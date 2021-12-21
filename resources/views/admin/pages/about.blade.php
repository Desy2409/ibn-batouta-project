@extends('admin.layouts.app')
@section('page-title', 'A propos')
@section('content-title', 'A propos de nous')
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">A propos de nous</li>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Ajouter l'à propos</h5>
                </div>
                <hr style="margin-top: -5px">
                <div class="card-body">
                    <form id="aboutForm" action="{{ route('about.store') }}" method="POST" style="margin-top: -20px;">
                        @csrf
                        <div class="row">
                            {{-- Start name --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_name_ar" class="form-label">Nom (en arabe) <span class="text-danger">*</span></label>
                                    <input type="text" name="name_ar" id="id_name_ar" class="form-control @error('name_ar') is-invalid @enderror" value="{{ old('name_ar') }}" placeholder="Saisissez le titre du service">
                                    @error('name_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_name_en" class="form-label">Nom (en anglais) <span class="text-danger">*</span></label>
                                    <input type="text" name="name_en" id="id_name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{ old('name_en') }}" placeholder="Saisissez le titre du service">
                                    @error('name_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_name_fr" class="form-label">Nom (en français) <span class="text-danger">*</span></label>
                                    <input type="text" name="name_fr" id="id_name_fr" class="form-control @error('name_fr') is-invalid @enderror" value="{{ old('name_fr') }}" placeholder="Saisissez le titre du service">
                                    @error('name_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End name --}}
                            {{-- Start currency --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_currency_ar" class="form-label">Devise (en arabe) <span class="text-danger">*</span></label>
                                    <input type="text" name="currency_ar" id="id_currency_ar" class="form-control @error('currency_ar') is-invalid @enderror" value="{{ old('currency_ar') }}" placeholder="Saisissez le titre du service">
                                    @error('currency_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_currency_en" class="form-label">Devise (en anglais) <span class="text-danger">*</span></label>
                                    <input type="text" name="currency_en" id="id_currency_en" class="form-control @error('currency_en') is-invalid @enderror" value="{{ old('currency_en') }}" placeholder="Saisissez le titre du service">
                                    @error('currency_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_currency_fr" class="form-label">Devise (en français) <span class="text-danger">*</span></label>
                                    <input type="text" name="currency_fr" id="id_currency_fr" class="form-control @error('currency_fr') is-invalid @enderror" value="{{ old('currency_fr') }}" placeholder="Saisissez le titre du service">
                                    @error('currency_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End currency --}}
                            {{-- Start phone number --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_phone_number_ar" class="form-label">N° Téléphone (en arabe) <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number_ar" id="id_phone_number_ar" class="form-control @error('phone_number_ar') is-invalid @enderror" value="{{ old('phone_number_ar') }}" placeholder="Saisissez le titre du service">
                                    @error('phone_number_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_phone_number_en" class="form-label">N° Téléphone (en anglais) <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number_en" id="id_phone_number_en" class="form-control @error('phone_number_en') is-invalid @enderror" value="{{ old('phone_number_en') }}" placeholder="Saisissez le titre du service">
                                    @error('phone_number_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_phone_number_fr" class="form-label">N° Téléphone (en français) <span class="text-danger">*</span></label>
                                    <input type="text" name="phone_number_fr" id="id_phone_number_fr" class="form-control @error('phone_number_fr') is-invalid @enderror" value="{{ old('phone_number_fr') }}" placeholder="Saisissez le titre du service">
                                    @error('phone_number_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End phone number --}}
                            {{-- Start bp --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_bp_ar" class="form-label">Boîte postale (en arabe) <span class="text-danger">*</span></label>
                                    <input type="text" name="bp_ar" id="id_bp_ar" class="form-control @error('bp_ar') is-invalid @enderror" value="{{ old('bp_ar') }}" placeholder="Saisissez le titre du service">
                                    @error('bp_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_bp_en" class="form-label">Boîte postale (en anglais) <span class="text-danger">*</span></label>
                                    <input type="text" name="bp_en" id="id_bp_en" class="form-control @error('bp_en') is-invalid @enderror" value="{{ old('bp_en') }}" placeholder="Saisissez le titre du service">
                                    @error('bp_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_bp_fr" class="form-label">Boîte postale (en français) <span class="text-danger">*</span></label>
                                    <input type="text" name="bp_fr" id="id_bp_fr" class="form-control @error('bp_fr') is-invalid @enderror" value="{{ old('bp_fr') }}" placeholder="Saisissez le titre du service">
                                    @error('bp_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End bp --}}
                            {{-- End geogaphic situation --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_geogaphic_situation_ar" class="form-label">Situation géographique (en arabe) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('geogaphic_situation_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_geogaphic_situation_en" class="form-label">Situation géographique (en anglais) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('geogaphic_situation_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_geogaphic_situation_fr" class="form-label">Situation géographique (en français) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('geogaphic_situation_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End geogaphic situation --}}
                            {{-- End stopped --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_stopped_ar" class="form-label">Arrêté (en arabe) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="2"></textarea>
                                    @error('stopped_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_stopped_en" class="form-label">Arrêté (en anglais) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="2"></textarea>
                                    @error('stopped_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_stopped_fr" class="form-label">Arrêté (en français) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="2"></textarea>
                                    @error('stopped_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End stopped --}}
                            {{-- End identity --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_identity_ar" class="form-label">Identité (en arabe) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="4"></textarea>
                                    @error('identity_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_identity_en" class="form-label">Identité (en anglais) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="4"></textarea>
                                    @error('identity_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_identity_fr" class="form-label">Identité (en français) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="4"></textarea>
                                    @error('identity_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End identity --}}
                            {{-- End vision --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_vision_ar" class="form-label">Vision (en arabe) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('vision_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_vision_en" class="form-label">Vision (en anglais) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('vision_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_vision_fr" class="form-label">Vision (en français) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('vision_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End vision --}}
                            {{-- End message --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_message_ar" class="form-label">Message (en arabe) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="5"></textarea>
                                    @error('message_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_message_en" class="form-label">Message (en anglais) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="5"></textarea>
                                    @error('message_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_message_fr" class="form-label">Message (en français) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="5"></textarea>
                                    @error('message_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End message --}}
                            {{-- End value --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_value_ar" class="form-label">Valeur (en arabe) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('value_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_value_en" class="form-label">Valeur (en anglais) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('value_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_value_fr" class="form-label">Valeur (en français) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="" rows="3"></textarea>
                                    @error('value_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End value --}}
                            {{-- Start goal --}}
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Objectifs (en arabe) <span class="text-danger">*</span></label>
                                    @error('goal_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_goal_ar" name="goal_ar" class="form-control @error('goal_ar') is-invalid @enderror">{!! old('goal_ar') !!}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Objectifs (en anglais) <span class="text-danger">*</span></label>
                                    @error('goal_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_goal_en" name="goal_en" class="form-control @error('goal_en') is-invalid @enderror">{!! old('goal_en') !!}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Objectifs (en français) <span class="text-danger">*</span></label>
                                    @error('goal_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_goal_fr" name="goal_fr" class="form-control @error('goal_fr') is-invalid @enderror">{!! old('goal_fr') !!}</textarea>
                                </div>
                            </div>
                            {{-- End goal --}}

                            <div class="col-lg-12" style="text-align: right;">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#id_goal_ar').summernote({
                placeholder: "Saisissez les ojectifs dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_goal_en').summernote({
                placeholder: "Saisissez les ojectifs dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_goal_fr').summernote({
                placeholder: "Saisissez les ojectifs dans cette zone.",
                // required,
                height: 400
            });
        });
    </script>
@endsection
