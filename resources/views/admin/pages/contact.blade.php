@extends('admin.layouts.app')
@section('page-title', 'Contact')
@section('content-title', 'Contact')
@section('breadcrumb')
    <li class="breadcrumb-item active" aria-current="page">Contact</li>
@endsection
@section('page-content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Ajouter les contacts</h5>
                </div>
                <hr style="margin-top: -5px">
                <div class="card-body">
                    <form id="contactForm" action="{{ route('contact.store') }}" method="POST" style="margin-top: -20px;">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Contact (en arabe) <span class="text-danger">*</span></label>
                                    @error('address_ar')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_address_ar" name="address_ar" class="form-control @error('address_ar') is-invalid @enderror">{{ $contactArabic ? $contactArabic->address : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Contact (en anglais) <span class="text-danger">*</span></label>
                                    @error('address_en')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_address_en" name="address_en" class="form-control @error('address_en') is-invalid @enderror">{{ $contactEnglish ? $contactEnglish->address : '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label">Contact (en français) <span class="text-danger">*</span></label>
                                    @error('address_fr')
                                        <span class="" role="alert">
                                            <strong class="text-danger text-sm">{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <textarea id="id_address_fr" name="address_fr" class="form-control @error('address_fr') is-invalid @enderror">{{ $contactFrench ? $contactFrench->address : '' }}</textarea>
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
            $('#id_address_ar').summernote({
                placeholder: "Saisissez les adresses dans cette zone.",
                // required,
                height: 250
            });
        });

        $(document).ready(function() {
            $('#id_address_en').summernote({
                placeholder: "Saisissez les adresses dans cette zone.",
                // required,
                height: 250
            });
        });

        $(document).ready(function() {
            $('#id_address_fr').summernote({
                placeholder: "Saisissez les adresses dans cette zone.",
                // required,
                height: 250
            });
        });
    </script>



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Datatables Responsive
            $("#address_datatable").DataTable({
                responsive: true
            });
        });
    </script>

    <script>
        // DataTables with Column Search by Text Inputs
        document.addEventListener("DOMContentLoaded", function() {
            // Setup - add a text input to each footer cell
            $('#address_datatable tfoot th').each(function() {
                var title = $(this).text();
                $(this).html('<input type="text" class="form-control" placeholder=" ' + title + '" />');
            });
            // DataTables
            var table = $('#address_datatable').DataTable();
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
            $('#contactForm').validate({
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
