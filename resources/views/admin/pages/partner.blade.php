@extends('admin.layouts.app')
@section('page-title', 'Partenaires techniques et financiers')
@section('content-title', 'Partenaires techniques et financiers')
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Partenaires techniques et financiers</li>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Ajouter les partenaires techniques et financiers</h5>
                </div>
                <hr style="margin-top: -5px">
                <div class="card-body">
                    <form id="partnerForm" action="{{ route('partner.store') }}" method="POST" style="margin-top: -20px;">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Partenaires techniques et financiers (en arabe) <span class="text-danger">*</span></label>
                                    @error('partner_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_partner_ar" name="partner_ar" class="form-control @error('partner_ar') is-invalid @enderror">{{ $arabicPartner ? $arabicPartner->partner : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Partenaires techniques et financiers (en anglais) <span class="text-danger">*</span></label>
                                    @error('partner_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_partner_en" name="partner_en" class="form-control @error('partner_en') is-invalid @enderror">{{ $englishPartner ? $englishPartner->partner : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Partenaires techniques et financiers (en français) <span class="text-danger">*</span></label>
                                    @error('partner_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_partner_fr" name="partner_fr" class="form-control @error('partner_fr') is-invalid @enderror">{{ $frenchPartner ? $frenchPartner->partner : '' }}</textarea>
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

    <style>
        .action {
            display: none;
        }

    </style>

    @php
    $id = 0;
    $submit = 0;
    if (!empty(old())) {
        $submit = 1;
        $id = old('btnId');
    }
    @endphp

    <script>
        $(document).ready(function() {
            let submit = {!! $submit !!}
            let id = {!! $id !!}
            if (submit == 1) {
                $('#btn' + id).trigger('click')
            }
        })
    </script>

    <script>
        $(document).ready(function() {
            $('#id_partner_ar').summernote({
                placeholder: "Saisissez les partenaires techniques et financiers dans cette zone.",
                // required,
                height: 250
            });
        });

        $(document).ready(function() {
            $('#id_partner_en').summernote({
                placeholder: "Saisissez les partenaires techniques et financiers dans cette zone.",
                // required,
                height: 250
            });
        });

        $(document).ready(function() {
            $('#id_partner_fr').summernote({
                placeholder: "Saisissez les partenaires techniques et financiers dans cette zone.",
                // required,
                height: 250
            });
        });
    </script>

@endsection

@section('script')
    <script>
        $(function() {
            $('#partnerForm').validate({
                rules: {
                    question: {
                        required: true,
                        maxlength: 255,
                    },
                    response: {
                        required: true,
                    },
                },
                messages: {
                    question: {
                        required: "Le champ question est obligatoire.",
                        maxlength: "Le champ question ne doit pas dépasser 255 caractères."
                    },
                    response: {
                        required: "Le champ réponse(s) est obligatoire.",
                    },
                },
                errorElement: 'em',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                // errorElement.
            });
        });
    </script>
@endsection
