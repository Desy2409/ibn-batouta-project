@extends('admin.layouts.app')
@section('page-title', "Conditions d'admission")
@section('content-title', "Conditions d'admission")
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Conditions d'admission</li>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Ajouter les conditions d'admission</h5>
                </div>
                <hr style="margin-top: -5px">
                <div class="card-body">
                    <form id="admissionForm" action="{{ route('admission.store') }}" method="POST" style="margin-top: -20px;">
                        @csrf
                        <div class="row">
                            {{-- Start annual registration fee --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_annual_registration_period_ar" class="form-label">Période d'inscription annuelle (en arabe) <span class="text-danger">*</span></label>
                                    <input type="text" name="annual_registration_period_ar" id="id_annual_registration_period_ar" class="form-control @error('annual_registration_period_ar') is-invalid @enderror" value="{{ old('annual_registration_period_ar') ?? $admissionArabic ? $admissionArabic->annual_registration_period : ''  }}" placeholder="Saisissez la période d'inscription annuelle">
                                    @error('annual_registration_period_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_annual_registration_period_en" class="form-label">Période d'inscription annuelle (en anglais) <span class="text-danger">*</span></label>
                                    <input type="text" name="annual_registration_period_en" id="id_annual_registration_period_en" class="form-control @error('annual_registration_period_en') is-invalid @enderror" value="{{ old('annual_registration_period_en') ?? $admissionEnglish ? $admissionEnglish->annual_registration_period : ''  }}" placeholder="Saisissez la période d'inscription annuelle">
                                    @error('annual_registration_period_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_annual_registration_period_fr" class="form-label">Période d'inscription annuelle (en français) <span class="text-danger">*</span></label>
                                    <input type="text" name="annual_registration_period_fr" id="id_annual_registration_period_fr" class="form-control @error('annual_registration_period_fr') is-invalid @enderror" value="{{ old('annual_registration_period_fr') ?? $admissionFrench ? $admissionFrench->annual_registration_period : ''  }}" placeholder="Saisissez la période d'inscription annuelle">
                                    @error('annual_registration_period_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End annual registration period --}}
                            {{-- End general requirement --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_general_requirement_ar" class="form-label">Conditions générales (en arabe) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="id_general_requirement_ar" name="general_requirement_ar" class="form-control @error('general_requirement_ar') is-invalid @enderror" placeholder="" rows="3">{{ $admissionArabic ? $admissionArabic->general_requirement : '' }}</textarea>
                                    @error('general_requirement_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_general_requirement_en" class="form-label">Conditions générales (en anglais) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="id_general_requirement_en" name="general_requirement_en" class="form-control @error('general_requirement_en') is-invalid @enderror" placeholder="" rows="3">{{ $admissionEnglish ? $admissionEnglish->general_requirement : '' }}</textarea>
                                    @error('general_requirement_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_general_requirement_fr" class="form-label">Conditions générales (en français) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="id_general_requirement_fr" name="general_requirement_fr" class="form-control @error('general_requirement_fr') is-invalid @enderror" placeholder="" rows="3">{{ $admissionFrench ? $admissionFrench->general_requirement : '' }}</textarea>
                                    @error('general_requirement_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End general requirement --}}
                            {{-- Start documents to provide --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Documents à fournir (en arabe) <span class="text-danger">*</span></label>
                                    @error('documents_to_provide_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_documents_to_provide_ar" name="documents_to_provide_ar" class="form-control @error('documents_to_provide_ar') is-invalid @enderror">{{ $admissionArabic ? $admissionArabic->documents_to_provide : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Documents à fournir (en anglais) <span class="text-danger">*</span></label>
                                    @error('documents_to_provide_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_documents_to_provide_en" name="documents_to_provide_en" class="form-control @error('documents_to_provide_en') is-invalid @enderror">{{ $admissionEnglish ? $admissionEnglish->documents_to_provide : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Documents à fournir (en français) <span class="text-danger">*</span></label>
                                    @error('documents_to_provide_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_documents_to_provide_fr" name="documents_to_provide_fr" class="form-control @error('documents_to_provide_fr') is-invalid @enderror">{{ $admissionFrench ? $admissionFrench->documents_to_provide : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End documents to provide --}}
                            {{-- Start assessment test --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Mention du test d'évaluation (en arabe) <span class="text-danger">*</span></label>
                                    @error('assessment_test_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_assessment_test_ar" name="assessment_test_ar" class="form-control @error('assessment_test_ar') is-invalid @enderror">{{ $admissionArabic ? $admissionArabic->assessment_test : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Mention du test d'évaluation (en anglais) <span class="text-danger">*</span></label>
                                    @error('assessment_test_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_assessment_test_en" name="assessment_test_en" class="form-control @error('assessment_test_en') is-invalid @enderror">{{ $admissionEnglish ? $admissionEnglish->assessment_test : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Mention du test d'évaluation (en français) <span class="text-danger">*</span></label>
                                    @error('assessment_test_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_assessment_test_fr" name="assessment_test_fr" class="form-control @error('assessment_test_fr') is-invalid @enderror">{{ $admissionFrench ? $admissionFrench->assessment_test : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End assessment test --}}
                            {{-- Start compulsory fees --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Frais obligatoires à payer à l'inscription (en arabe) <span class="text-danger">*</span></label>
                                    @error('compulsory_fees_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_compulsory_fees_ar" name="compulsory_fees_ar" class="form-control @error('compulsory_fees_ar') is-invalid @enderror">{{ $admissionArabic ? $admissionArabic->compulsory_fees : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Frais obligatoires à payer à l'inscription (en anglais) <span class="text-danger">*</span></label>
                                    @error('compulsory_fees_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_compulsory_fees_en" name="compulsory_fees_en" class="form-control @error('compulsory_fees_en') is-invalid @enderror">{{ $admissionEnglish ? $admissionEnglish->compulsory_fees : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Frais obligatoires à payer à l'inscription (en français) <span class="text-danger">*</span></label>
                                    @error('compulsory_fees_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_compulsory_fees_fr" name="compulsory_fees_fr" class="form-control @error('compulsory_fees_fr') is-invalid @enderror">{{ $admissionFrench ? $admissionFrench->compulsory_fees : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End compulsory fees --}}

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
            $('#id_documents_to_provide_ar').summernote({
                placeholder: "Saisissez le documents à fournir dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_documents_to_provide_en').summernote({
                placeholder: "Saisissez le documents à fournir dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_documents_to_provide_fr').summernote({
                placeholder: "Saisissez le documents à fournir dans cette zone.",
                // required,
                height: 400
            });
        });


        $(document).ready(function() {
            $('#id_assessment_test_ar').summernote({
                placeholder: "Saisissez la mention du test d'évaluation dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_assessment_test_en').summernote({
                placeholder: "Saisissez la mention du test d'évaluation dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_assessment_test_fr').summernote({
                placeholder: "Saisissez la mention du test d'évaluation dans cette zone.",
                // required,
                height: 400
            });
        });


        $(document).ready(function() {
            $('#id_compulsory_fees_ar').summernote({
                placeholder: "Saisissez les frais obligatoires à payer à l'inscription dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_compulsory_fees_en').summernote({
                placeholder: "Saisissez les frais obligatoires à payer à l'inscription dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_compulsory_fees_fr').summernote({
                placeholder: "Saisissez les frais obligatoires à payer à l'inscription dans cette zone.",
                // required,
                height: 400
            });
        });
    </script>
@endsection
