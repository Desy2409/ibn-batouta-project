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
                            <div class="mb-3">
                                <button type="button" id="id_btn_base_info" onclick="showBaseInfoFunction()" class="btn btn-outline-info">Informations de base</button>
                                <button type="button" id="id_btn_mission_plan_vision_value" onclick="showMissionPlanVisionValueFunction()" class="btn btn-outline-primary">Mission | Plan | Vision | Valeur</button>
                                <button type="button" id="id_btn_message_goal" onclick="showMessageGoalFunction()" class="btn btn-outline-secondary">Message & Objectifs</button>
                            </div>
                            <div id="id_base_info">
                                <div class="row">
                                    {{-- Start name --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_name_ar" class="form-label">Nom (en arabe) <span class="text-danger">*</span></label>
                                            <input type="text" name="name_ar" id="id_name_ar" class="form-control @error('name_ar') is-invalid @enderror" value="{{ old('name_ar') ?? $aboutArabic ? $aboutArabic->name : '' }}" placeholder="Saisissez le nom">
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
                                            <input type="text" name="name_en" id="id_name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{ old('name_en') ?? $aboutEnglish ? $aboutEnglish->name : '' }}" placeholder="Saisissez le nom">
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
                                            <input type="text" name="name_fr" id="id_name_fr" class="form-control @error('name_fr') is-invalid @enderror" value="{{ old('name_fr') ?? $aboutFrench ? $aboutFrench->name : '' }}" placeholder="Saisissez le nom">
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
                                            <input type="text" name="currency_ar" id="id_currency_ar" class="form-control @error('currency_ar') is-invalid @enderror" value="{{ old('currency_ar') ?? $aboutArabic ? $aboutArabic->currency : '' }}" placeholder="Saisissez la devise">
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
                                            <input type="text" name="currency_en" id="id_currency_en" class="form-control @error('currency_en') is-invalid @enderror" value="{{ old('currency_en') ?? $aboutEnglish ? $aboutEnglish->currency : '' }}" placeholder="Saisissez la devise">
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
                                            <input type="text" name="currency_fr" id="id_currency_fr" class="form-control @error('currency_fr') is-invalid @enderror" value="{{ old('currency_fr') ?? $aboutFrench ? $aboutFrench->currency : '' }}" placeholder="Saisissez la devise">
                                            @error('currency_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End currency --}}
                                    {{-- strat geogaphic situation --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_geographic_location_ar" class="form-label">Situation géographique (en arabe) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="geographic_location_ar" placeholder="Renseignez la situation géographique" rows="3">{{ $aboutArabic ? $aboutArabic->geographic_location : '' }}</textarea>
                                            @error('geographic_location_ar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_geographic_location_en" class="form-label">Situation géographique (en anglais) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="geographic_location_en" placeholder="Renseignez la situation géographique" rows="3">{{ $aboutEnglish ? $aboutEnglish->geographic_location : '' }}</textarea>
                                            @error('geographic_location_en')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_geographic_location_fr" class="form-label">Situation géographique (en français) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="geographic_location_fr" placeholder="Renseignez la situation géographique" rows="3">{{ $aboutFrench ? $aboutFrench->geographic_location : '' }}</textarea>
                                            @error('geographic_location_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End geogaphic situation --}}
                                    {{-- Start phone number --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_phone_number_ar" class="form-label">N° Téléphone (en arabe) <span class="text-danger">*</span></label>
                                            <input type="text" name="phone_number_ar" id="id_phone_number_ar" class="form-control @error('phone_number_ar') is-invalid @enderror" value="{{ old('phone_number_ar') ?? $aboutArabic ? $aboutArabic->phone_number : '' }}" placeholder="Saisissez le N° de téléphone">
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
                                            <input type="text" name="phone_number_en" id="id_phone_number_en" class="form-control @error('phone_number_en') is-invalid @enderror" value="{{ old('phone_number_en') ?? $aboutEnglish ? $aboutEnglish->phone_number : '' }}" placeholder="Saisissez le N° de téléphone">
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
                                            <input type="text" name="phone_number_fr" id="id_phone_number_fr" class="form-control @error('phone_number_fr') is-invalid @enderror" value="{{ old('phone_number_fr') ?? $aboutFrench ? $aboutFrench->phone_number : '' }}" placeholder="Saisissez le N° de téléphone">
                                            @error('phone_number_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End phone number --}}
                                    {{-- Start email and web site --}}
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="id_email" class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" name="email" id="id_email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $aboutEnglish ? $aboutEnglish->email : '' }}" placeholder="Saisissez l'email'">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-3">
                                        <div class="form-group">
                                            <label for="id_web_site" class="form-label">Site web <span class="text-danger">*</span></label>
                                            <input type="text" name="web_site" id="id_web_site" class="form-control @error('web_site') is-invalid @enderror" value="{{ old('web_site') ?? $aboutFrench ? $aboutFrench->web_site : '' }}" placeholder="Saisissez l'url du site web">
                                            @error('web_site')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End email and web site --}}
                                    {{-- Start bp --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_bp_ar" class="form-label">Boîte postale (en arabe) <span class="text-danger">*</span></label>
                                            <input type="text" name="bp_ar" id="id_bp_ar" class="form-control @error('bp_ar') is-invalid @enderror" value="{{ old('bp_ar') ?? $aboutArabic ? $aboutArabic->bp : '' }}" placeholder="Saisissez la boîte postale">
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
                                            <input type="text" name="bp_en" id="id_bp_en" class="form-control @error('bp_en') is-invalid @enderror" value="{{ old('bp_en') ?? $aboutEnglish ? $aboutEnglish->bp : '' }}" placeholder="Saisissez la boîte postale">
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
                                            <input type="text" name="bp_fr" id="id_bp_fr" class="form-control @error('bp_fr') is-invalid @enderror" value="{{ old('bp_fr') ?? $aboutFrench ? $aboutFrench->bp : '' }}" placeholder="Saisissez la boîte postale">
                                            @error('bp_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End bp --}}
                                    {{-- strat legal situation --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_legal_situation_ar" class="form-label">Situation juridique (en arabe) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="legal_situation_ar" placeholder="Renseignez la situation juridique" rows="3">{{ $aboutArabic ? $aboutArabic->legal_situation : '' }}</textarea>
                                            @error('legal_situation_ar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_legal_situation_en" class="form-label">Situation juridique (en anglais) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="legal_situation_en" placeholder="Renseignez la situation juridique" rows="3">{{ $aboutEnglish ? $aboutEnglish->legal_situation : '' }}</textarea>
                                            @error('legal_situation_en')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_legal_situation_fr" class="form-label">Situation juridique (en français) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="legal_situation_fr" placeholder="Renseignez la situation juridique" rows="3">{{ $aboutFrench ? $aboutFrench->legal_situation : '' }}</textarea>
                                            @error('legal_situation_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End legal situation --}}
                                    {{-- End stopped --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_stopped_ar" class="form-label">Arrêté (en arabe) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="stopped_ar" placeholder="Renseignez l'arrêté" rows="2">{{ $aboutArabic ? $aboutArabic->stopped : '' }}</textarea>
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
                                            <textarea class="form-control" name="stopped_en" placeholder="Renseignez l'arrêté" rows="2">{{ $aboutEnglish ? $aboutEnglish->stopped : '' }}</textarea>
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
                                            <textarea class="form-control" name="stopped_fr" placeholder="Renseignez l'arrêté" rows="2">{{ $aboutFrench ? $aboutFrench->stopped : '' }}</textarea>
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
                                            <textarea class="form-control" name="identity_ar" placeholder="Renseignez l'identité" rows="4">{{ $aboutArabic ? $aboutArabic->identity : '' }}</textarea>
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
                                            <textarea class="form-control" class="identity_en" placeholder="Renseignez l'identité" rows="4">{{ $aboutEnglish ? $aboutEnglish->identity : '' }}</textarea>
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
                                            <textarea class="form-control" name="identity_fr" placeholder="Renseignez l'identité" rows="4">{{ $aboutFrench ? $aboutFrench->identity : '' }}</textarea>
                                            @error('identity_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End identity --}}
                                </div>
                            </div>
                            <div id="id_mission_plan_vision_value">
                                <div class="row">
                                    {{-- End mission --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_mission_ar" class="form-label">Mission (en arabe) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="mission_ar" placeholder="Renseignez la mission" rows="10">{{ $aboutArabic ? $aboutArabic->mission : '' }}</textarea>
                                            @error('mission_ar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_mission_en" class="form-label">Mission (en anglais) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="mission_en" placeholder="Renseignez la mission" rows="10">{{ $aboutEnglish ? $aboutEnglish->mission : '' }}</textarea>
                                            @error('mission_en')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_mission_fr" class="form-label">Mission (en français) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="mission_fr" placeholder="Renseignez la mission" rows="10">{{ $aboutFrench ? $aboutFrench->mission : '' }}</textarea>
                                            @error('mission_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End mission --}}
                                    {{-- End plan --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_plan_ar" class="form-label">Plan (en arabe) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="plan_ar" placeholder="Renseignez la plan" rows="10">{{ $aboutArabic ? $aboutArabic->plan : '' }}</textarea>
                                            @error('plan_ar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_plan_en" class="form-label">Plan (en anglais) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="plan_en" placeholder="Renseignez la plan" rows="10">{{ $aboutEnglish ? $aboutEnglish->plan : '' }}</textarea>
                                            @error('plan_en')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_plan_fr" class="form-label">Plan (en français) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="plan_fr" placeholder="Renseignez la plan" rows="10">{{ $aboutFrench ? $aboutFrench->plan : '' }}</textarea>
                                            @error('plan_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End plan --}}
                                    {{-- End vision --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_vision_ar" class="form-label">Vision (en arabe) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="vision_ar" placeholder="Renseignez la vision" rows="10">{{ $aboutArabic ? $aboutArabic->vision : '' }}</textarea>
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
                                            <textarea class="form-control" name="vision_en" placeholder="Renseignez la vision" rows="10">{{ $aboutEnglish ? $aboutEnglish->vision : '' }}</textarea>
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
                                            <textarea class="form-control" name="vision_fr" placeholder="Renseignez la vision" rows="10">{{ $aboutFrench ? $aboutFrench->vision : '' }}</textarea>
                                            @error('vision_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End vision --}}
                                     {{-- End value --}}
                                     <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_value_ar" class="form-label">Valeur (en arabe) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="value_ar" placeholder="Renseignez la valeur" rows="10">{{ $aboutArabic ? $aboutArabic->value : '' }}</textarea>
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
                                            <textarea class="form-control" name="value_en" placeholder="Renseignez la valeur" rows="10">{{ $aboutEnglish ? $aboutEnglish->value : '' }}</textarea>
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
                                            <textarea class="form-control" name="value_fr" placeholder="Renseignez la valeur" rows="10">{{ $aboutFrench ? $aboutFrench->value : '' }}</textarea>
                                            @error('value_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End value --}}
                                </div>
                            </div>
                            <div id="id_message_goal">
                                <div class="row">
                                    {{-- End message --}}
                                    <div class="col-lg-4 mb-3">
                                        <div class="form-group">
                                            <label for="id_message_ar" class="form-label">Message (en arabe) <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="message_ar" placeholder="Saisissez le message" rows="5">{{ $aboutArabic ? $aboutArabic->message : '' }}</textarea>
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
                                            <textarea class="form-control" name="message_en" placeholder="Saisissez le message" rows="5">{{ $aboutEnglish ? $aboutEnglish->message : '' }}</textarea>
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
                                            <textarea class="form-control" name="message_fr" placeholder="Saisissez le message" rows="5">{{ $aboutFrench ? $aboutFrench->message : '' }}</textarea>
                                            @error('message_fr')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong class="text-danger">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- End message --}}
                                    {{-- Start goal --}}
                                    <div class="col-lg-12 mb-3">
                                        <div class="form-group">
                                            <label class="form-label">Objectifs (en arabe) <span class="text-danger">*</span></label>
                                            @error('goal_ar')
                                                <span class="" role="alert">
                                                    <strong class="text-danger text-sm">{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <textarea id="id_goal_ar" name="goal_ar" class="form-control @error('goal_ar') is-invalid @enderror">{{ $aboutArabic ? $aboutArabic->goal : '' }}</textarea>
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
                                            <textarea id="id_goal_en" name="goal_en" class="form-control @error('goal_en') is-invalid @enderror">{{ $aboutEnglish ? $aboutEnglish->goal : '' }}</textarea>
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
                                            <textarea id="id_goal_fr" name="goal_fr" class="form-control @error('goal_fr') is-invalid @enderror">{{ $aboutFrench ? $aboutFrench->goal : '' }}</textarea>
                                        </div>
                                    </div>
                                    {{-- End goal --}}
                                </div>
                            </div>

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
        $('#id_mission_plan_vision_value').hide();
        $('#id_message_goal').hide();

        function showBaseInfoFunction() {
            // alert('showBaseInfoFunction');
            $('#id_base_info').show();
            $('#id_mission_plan_vision_value').hide();
            $('#id_message_goal').hide();
        }

        function showMissionPlanVisionValueFunction() {
            // alert('showBaseInfoFunction');
            $('#id_mission_plan_vision_value').show();
            $('#id_base_info').hide();
            $('#id_message_goal').hide();
        }

        function showMessageGoalFunction() {
            // alert('showBaseInfoFunction');
            $('#id_message_goal').show();
            $('#id_base_info').hide();
            $('#id_mission_plan_vision_value').hide();
        }
    </script>

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
