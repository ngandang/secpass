@extends('layouts.master')

@section('content')

<div class="m-subheader">
    <div class="d-flex align-items-center">
        <div class="mr-auto">
            <h3 class="m-subheader__title m-subheader__title--separator">
                Kho lưu trữ
            </h3>
            <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                <li class="m-nav__item m-nav__item--home">
                    <a href="#" class="m-nav__link m-nav__link--icon">
                        <i class="m-nav__link-icon la la-home"></i>
                    </a>
                </li>
                <li class="m-nav__separator">
                    -
                </li>
                <li class="m-nav__item">
                    <a href="" class="m-nav__link">
                        <span class="m-nav__link-text">
                            Ghi chú bảo mật
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="btn-add-note">
            <a class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air" href="#addNoteForm" data-toggle="modal" data-backdrop="static" data-keyboard="false">
                <span>
                    <i class="la la-plus"></i>
                    <span>
                        Thêm ghi chú
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>
 
<!-- BEGIN: Content -->
<div class="m-content">
    <div class="m-section">
    @include('content.content-notes')
    </div>
</div>
<!-- END: Content -->

@include('layouts.modals.note')

@endsection

@section('pageSnippets')
<!-- BEGIN: Page Scripts -->
<script src="{{ asset('app/js/notes.js') }}"></script>

<!-- END: Page Scripts -->
@endsection
