@extends('admin.layouts.app')
@section('page-title', 'Nos formations')
@section('content-title', 'Nos formations')
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Nos formations</li>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Ajouter nos formations</h5>
                </div>
                <hr style="margin-top: -5px">
                <div class="card-body">
                    <form id="trainingForm" action="{{ route('training.store') }}" method="POST" style="margin-top: -20px;">
                        @csrf
                        <div class="row">
                            {{-- Start instruction languages --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_instruction_languages_ar" class="form-label">Langues de l'enseignement (en arabe) <span class="text-danger">*</span></label>
                                    <input type="text" name="instruction_languages_ar" id="id_instruction_languages_ar" class="form-control @error('instruction_languages_ar') is-invalid @enderror" value="{{ old('instruction_languages_ar') ?? $trainingArabic ? $trainingArabic->instruction_languages : '' }}" placeholder="Saisissez les langues de l'enseignement">
                                    @error('instruction_languages_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_instruction_languages_en" class="form-label">Langues de l'enseignement (en anglais) <span class="text-danger">*</span></label>
                                    <input type="text" name="instruction_languages_en" id="id_instruction_languages_en" class="form-control @error('instruction_languages_en') is-invalid @enderror" value="{{ old('instruction_languages_en') ?? $trainingEnglish ? $trainingEnglish->instruction_languages : '' }}" placeholder="Saisissez les langues de l'enseignement">
                                    @error('instruction_languages_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_instruction_languages_fr" class="form-label">Langues de l'enseignement (en français) <span class="text-danger">*</span></label>
                                    <input type="text" name="instruction_languages_fr" id="id_instruction_languages_fr" class="form-control @error('instruction_languages_fr') is-invalid @enderror" value="{{ old('instruction_languages_fr') ?? $trainingFrench ? $trainingFrench->instruction_languages : '' }}" placeholder="Saisissez les langues de l'enseignement">
                                    @error('instruction_languages_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End instruction languages --}}
                            {{-- Start institute program --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Programme de l'institut (en arabe) <span class="text-danger">*</span></label>
                                    @error('program_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_program_ar" name="program_ar" class="form-control @error('program_ar') is-invalid @enderror">{{ $trainingArabic ? $trainingArabic->program : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Programme de l'institut (en anglais) <span class="text-danger">*</span></label>
                                    @error('program_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_program_en" name="program_en" class="form-control @error('program_en') is-invalid @enderror">{{ $trainingEnglish ? $trainingEnglish->program : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Programme de l'institut (en français) <span class="text-danger">*</span></label>
                                    @error('program_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_program_fr" name="program_fr" class="form-control @error('program_fr') is-invalid @enderror">{{ $trainingFrench ? $trainingFrench->program : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End institute program --}}
                            {{-- Start faculty --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Filières (en arabe) <span class="text-danger">*</span></label>
                                    @error('faculty_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_faculty_ar" name="faculty_ar" class="form-control @error('faculty_ar') is-invalid @enderror">{{ $trainingArabic ? $trainingArabic->faculty : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Filières (en anglais) <span class="text-danger">*</span></label>
                                    @error('faculty_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_faculty_en" name="faculty_en" class="form-control @error('faculty_en') is-invalid @enderror">{{ $trainingEnglish ? $trainingEnglish->faculty : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Filières (en français) <span class="text-danger">*</span></label>
                                    @error('faculty_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_faculty_fr" name="faculty_fr" class="form-control @error('faculty_fr') is-invalid @enderror">{{ $trainingFrench ? $trainingFrench->faculty : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End faculty --}}
                            {{-- Start job --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Métiers (en arabe) <span class="text-danger">*</span></label>
                                    @error('job_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_job_ar" name="job_ar" class="form-control @error('job_ar') is-invalid @enderror">{{ $trainingArabic ? $trainingArabic->job : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Métiers (en anglais) <span class="text-danger">*</span></label>
                                    @error('job_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_job_en" name="job_en" class="form-control @error('job_en') is-invalid @enderror">{{ $trainingEnglish ? $trainingEnglish->job : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Métiers (en français) <span class="text-danger">*</span></label>
                                    @error('job_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_job_fr" name="job_fr" class="form-control @error('job_fr') is-invalid @enderror">{{ $trainingFrench ? $trainingFrench->job : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End job --}}
                            {{-- Start final registration fee --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_final_registration_fee_ar" class="form-label">Frais d'inscription définitive (en arabe) <span class="text-danger">*</span></label>
                                    <input type="text" name="final_registration_fee_ar" id="id_final_registration_fee_ar" class="form-control @error('final_registration_fee_ar') is-invalid @enderror" value="{{ old('final_registration_fee_ar') ?? $trainingArabic ? $trainingArabic->final_registration_fee : '' }}" placeholder="Saisissez les frais d'inscription définitive">
                                    @error('final_registration_fee_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_final_registration_fee_en" class="form-label">Frais d'inscription définitive (en anglais) <span class="text-danger">*</span></label>
                                    <input type="text" name="final_registration_fee_en" id="id_final_registration_fee_en" class="form-control @error('final_registration_fee_en') is-invalid @enderror" value="{{ old('final_registration_fee_en') ?? $trainingEnglish ? $trainingEnglish->final_registration_fee : '' }}" placeholder="Saisissez les frais d'inscription définitive">
                                    @error('final_registration_fee_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_final_registration_fee_fr" class="form-label">Frais d'inscription définitive (en français) <span class="text-danger">*</span></label>
                                    <input type="text" name="final_registration_fee_fr" id="id_final_registration_fee_fr" class="form-control @error('final_registration_fee_fr') is-invalid @enderror" value="{{ old('final_registration_fee_fr') ?? $trainingFrench ? $trainingFrench->final_registration_fee : '' }}" placeholder="Saisissez les frais d'inscription définitive">
                                    @error('final_registration_fee_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End final registration fee --}}
                            {{-- Start annual registration fee --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_annual_registration_period_ar" class="form-label">Période d'inscription annuelle (en arabe) <span class="text-danger">*</span></label>
                                    <input type="text" name="annual_registration_period_ar" id="id_annual_registration_period_ar" class="form-control @error('annual_registration_period_ar') is-invalid @enderror" value="{{ old('annual_registration_period_ar') ?? $trainingArabic ? $trainingArabic->annual_registration_period : '' }}" placeholder="Saisissez la période d'inscription annuelle">
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
                                    <input type="text" name="annual_registration_period_en" id="id_annual_registration_period_en" class="form-control @error('annual_registration_period_en') is-invalid @enderror" value="{{ old('annual_registration_period_en') ?? $trainingEnglish ? $trainingEnglish->annual_registration_period : '' }}" placeholder="Saisissez la période d'inscription annuelle">
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
                                    <input type="text" name="annual_registration_period_fr" id="id_annual_registration_period_fr" class="form-control @error('annual_registration_period_fr') is-invalid @enderror" value="{{ old('annual_registration_period_fr') ?? $trainingFrench ? $trainingFrench->annual_registration_period : '' }}" placeholder="Saisissez la période d'inscription annuelle">
                                    @error('annual_registration_period_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End annual registration period --}}
                            {{-- Start tuition fees --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Frais de scolarité (en arabe) <span class="text-danger">*</span></label>
                                    @error('tuition_fees_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_tuition_fees_ar" name="tuition_fees_ar" class="form-control @error('tuition_fees_ar') is-invalid @enderror">{{ $trainingArabic ? $trainingArabic->tuition_fees : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Frais de scolarité (en anglais) <span class="text-danger">*</span></label>
                                    @error('tuition_fees_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_tuition_fees_en" name="tuition_fees_en" class="form-control @error('tuition_fees_en') is-invalid @enderror">{{ $trainingEnglish ? $trainingEnglish->tuition_fees : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Frais de scolarité (en français) <span class="text-danger">*</span></label>
                                    @error('tuition_fees_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_tuition_fees_fr" name="tuition_fees_fr" class="form-control @error('tuition_fees_fr') is-invalid @enderror">{{ $trainingFrench ? $trainingFrench->tuition_fees : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End tuition fees --}}
                            {{-- Start scholarship --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Bourse de l'institut (en arabe) <span class="text-danger">*</span></label>
                                    @error('scholarship_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_scholarship_ar" name="scholarship_ar" class="form-control @error('scholarship_ar') is-invalid @enderror">{{ $trainingArabic ? $trainingArabic->scholarship : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Bourse de l'institut (en anglais) <span class="text-danger">*</span></label>
                                    @error('scholarship_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_scholarship_en" name="scholarship_en" class="form-control @error('scholarship_en') is-invalid @enderror">{{ $trainingEnglish ? $trainingEnglish->scholarship : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Bourse de l'institut (en français) <span class="text-danger">*</span></label>
                                    @error('scholarship_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_scholarship_fr" name="scholarship_fr" class="form-control @error('scholarship_fr') is-invalid @enderror">{{ $trainingFrench ? $trainingFrench->scholarship : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End scholarship --}}
                            {{-- End number of students --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_number_of_students_ar" class="form-label">Nombre d'étudiants (en arabe) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="id_number_of_students_ar" name="number_of_students_ar" class="form-control @error('number_of_students_ar') is-invalid @enderror" placeholder="Saisissez le nombre d'étudiants" rows="3">{{ $trainingArabic ? $trainingArabic->number_of_students : '' }}</textarea>
                                    @error('number_of_students_ar')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_number_of_students_en" class="form-label">Nombre d'étudiants (en anglais) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="id_number_of_students_en" name="number_of_students_en" class="form-control @error('number_of_students_en') is-invalid @enderror" placeholder="Saisissez le nombre d'étudiants" rows="3">{{ $trainingEnglish ? $trainingEnglish->number_of_students : '' }}</textarea>
                                    @error('number_of_students_en')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label for="id_number_of_students_fr" class="form-label">Nombre d'étudiants (en français) <span class="text-danger">*</span></label>
                                    <textarea class="form-control" id="id_number_of_students_fr" name="number_of_students_fr" class="form-control @error('number_of_students_fr') is-invalid @enderror" placeholder="Saisissez le nombre d'étudiants" rows="3">{{ $trainingFrench ? $trainingFrench->number_of_students : '' }}</textarea>
                                    @error('number_of_students_fr')
                                        <span class="invalid-feedback" role="alert">
                                            <strong class="text-danger">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- End number of students --}}
                            {{-- Start target social category --}}
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Catégories sociales ciblées (en arabe) <span class="text-danger">*</span></label>
                                    @error('target_social_category_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_target_social_category_ar" name="target_social_category_ar" class="form-control @error('target_social_category_ar') is-invalid @enderror">{{ $trainingArabic ? $trainingArabic->target_social_category : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Catégories sociales ciblées (en anglais) <span class="text-danger">*</span></label>
                                    @error('target_social_category_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_target_social_category_en" name="target_social_category_en" class="form-control @error('target_social_category_en') is-invalid @enderror">{{ $trainingEnglish ? $trainingEnglish->target_social_category : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Catégories sociales ciblées (en français) <span class="text-danger">*</span></label>
                                    @error('target_social_category_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_target_social_category_fr" name="target_social_category_fr" class="form-control @error('target_social_category_fr') is-invalid @enderror">{{ $trainingFrench ? $trainingFrench->target_social_category : '' }}</textarea>
                                </div>
                            </div>
                            {{-- End target social category --}}

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
            $('#id_program_ar').summernote({
                placeholder: "Saisissez le programme de l'institut dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_program_en').summernote({
                placeholder: "Saisissez le programme de l'institut dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_program_fr').summernote({
                placeholder: "Saisissez le programme de l'institut dans cette zone.",
                // required,
                height: 400
            });
        });


        $(document).ready(function() {
            $('#id_faculty_ar').summernote({
                placeholder: "Saisissez les filières dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_faculty_en').summernote({
                placeholder: "Saisissez les filières dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_faculty_fr').summernote({
                placeholder: "Saisissez les filières dans cette zone.",
                // required,
                height: 400
            });
        });


        $(document).ready(function() {
            $('#id_job_ar').summernote({
                placeholder: "Saisissez les métiers dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_job_en').summernote({
                placeholder: "Saisissez les métiers dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_job_fr').summernote({
                placeholder: "Saisissez les métiers dans cette zone.",
                // required,
                height: 400
            });
        });


        $(document).ready(function() {
            $('#id_tuition_fees_ar').summernote({
                placeholder: "Saisissez les frais de scolarité dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_tuition_fees_en').summernote({
                placeholder: "Saisissez les frais de scolarité dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_tuition_fees_fr').summernote({
                placeholder: "Saisissez les frais de scolarité dans cette zone.",
                // required,
                height: 400
            });
        });


        $(document).ready(function() {
            $('#id_scholarship_ar').summernote({
                placeholder: "Saisissez la bourse de l'institut dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_scholarship_en').summernote({
                placeholder: "Saisissez la bourse de l'institut dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_scholarship_fr').summernote({
                placeholder: "Saisissez la bourse de l'institut dans cette zone.",
                // required,
                height: 400
            });
        });


        $(document).ready(function() {
            $('#id_target_social_category_ar').summernote({
                placeholder: "Saisissez les catégories sociales ciblées dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_target_social_category_en').summernote({
                placeholder: "Saisissez les catégories sociales ciblées dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_target_social_category_fr').summernote({
                placeholder: "Saisissez les catégories sociales ciblées dans cette zone.",
                // required,
                height: 400
            });
        });
    </script>
@endsection
