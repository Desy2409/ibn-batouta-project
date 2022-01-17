@extends('admin.layouts.app')
@section('page-title', 'Informations du site')
@section('content-title', 'Informations du site')
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Informations du site</li>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Ajouter les informations du site</h5>
                </div>
                <hr style="margin-top: -5px">
                <div class="card-body">
                    <form id="informationForm" action="{{ route('information.store') }}" method="POST" style="margin-top: -20px;">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Informations du site (en arabe) <span class="text-danger">*</span></label>
                                    @error('site_information_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_site_information_ar" name="site_information_ar" class="form-control @error('site_information_ar') is-invalid @enderror">{{ $informationArabic ? $informationArabic->site_information : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Informations du site (en anglais) <span class="text-danger">*</span></label>
                                    @error('site_information_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_site_information_en" name="site_information_en" class="form-control @error('site_information_en') is-invalid @enderror">{{ $informationEnglish ? $informationEnglish->site_information : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Informations du site (en français) <span class="text-danger">*</span></label>
                                    @error('site_information_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_site_information_fr" name="site_information_fr" class="form-control @error('site_information_fr') is-invalid @enderror">{{ $informationFrench ? $informationFrench->site_information : '' }}</textarea>
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
        $(document).ready(function() {
            $('#id_site_information_ar').summernote({
                placeholder: "Saisissez les informations du site dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_site_information_en').summernote({
                placeholder: "Saisissez les informations du site dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_site_information_fr').summernote({
                placeholder: "Saisissez les informations du site dans cette zone.",
                // required,
                height: 400
            });
        });
    </script>

@endsection

@section('script')
    
@endsection
