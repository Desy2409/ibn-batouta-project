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
                                    @error('information_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_information_ar" name="information_ar" class="form-control @error('information_ar') is-invalid @enderror">{{ $informationArabic ? $informationArabic->information : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Informations du site (en anglais) <span class="text-danger">*</span></label>
                                    @error('information_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_information_en" name="information_en" class="form-control @error('information_en') is-invalid @enderror">{{ $informationEnglish ? $informationEnglish->information : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Informations du site (en français) <span class="text-danger">*</span></label>
                                    @error('information_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_information_fr" name="information_fr" class="form-control @error('information_fr') is-invalid @enderror">{{ $informationFrench ? $informationFrench->information : '' }}</textarea>
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
            $('#id_information_ar').summernote({
                placeholder: "Saisissez les informations du site dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_information_en').summernote({
                placeholder: "Saisissez les informations du site dans cette zone.",
                // required,
                height: 400
            });
        });

        $(document).ready(function() {
            $('#id_information_fr').summernote({
                placeholder: "Saisissez les informations du site dans cette zone.",
                // required,
                height: 400
            });
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#information_datatable").DataTable({
                responsive: true
            });
        });
    </script>

    <script>
        // DataTables with Column Search by Text Inputs
        document.addEventListener("DOMContentLoaded", function() {
            // Setup - add a text input to each footer cell
            $('#information_datatable tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder=" ' + title + '" />');
            });
            // DataTables
            var table = $('#information_datatable').DataTable();
            // Apply the search
            table.columns().every(function() {
                var that = this;
                $('input', this.footer()).on('keyup change clear', function() {
                    if (that.search() !== this.value) {
                        that
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
    </script>
@endsection

@section('script')
    <script>
        $(function() {
            $('#informationForm').validate({
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
