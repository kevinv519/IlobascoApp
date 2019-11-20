@extends('layouts.app')

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', __('messages.navbar.contact') . ' - Ilobasco')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <h3 class="mt-5">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle  fa-stack-2x text-dark"></i>
                        <i class="fa fa-envelope-o fa-stack-1x text-white"></i>
                    </span>
                    @lang('messages.contact.leave_message')
                </h3>
                <form>
                    <div class="form-group col-md-8">
                        <label for="name">@lang('messages.contact.name')</label>
                        <input type="text" class="form-control rounded-0" placeholder="@lang('messages.contact.name_placeholder')" name="name" id="name" required>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="email">@lang('messages.contact.email')</label>
                        <input type="email" class="form-control rounded-0" placeholder="example@example.com" name="email" id="email" required>
                    </div>
                    <div class="form-group col-12">
                        <label for="mensaje">@lang('messages.contact.message')</label>
                        <textarea name="mensaje" class="form-control rounded-0" id="mensaje" placeholder="@lang('messages.contact.message_placeholder')" rows="5" maxlength="300" aria-describedby="contador-mensaje" required></textarea>
                        <small class="form-text" id="contador-mensaje">0/300</small>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-outline-success btn-lg ml-auto rounded-0" type="submit">@lang('messages.contact.send_button')</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-5 pb-5 pb-md-5 justify-content-between">
            <div class="col-md-5 pb-md-0 pb-4">
                <h3>
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle  fa-stack-2x text-dark"></i>
                    <i class="fa fa-map-marker fa-stack-1x text-white"></i>
                </span>
                    @lang('messages.contact.location')
                </h3>
                <div class="embed-responsive embed-responsive-1by1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19917.927869186144!2d-88.86550401602375!3d13.837996033628407!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f635e960d89ac15%3A0xae253e2b8cab635c!2sIlobasco!5e0!3m2!1ses-419!2ssv!4v1510721246214" class="embed-responsive-item" width="300" height="300" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-5">
                <h3>
                <span class="fa-stack fa-lg">
                    <i class="fa fa-circle  fa-stack-2x text-dark"></i>
                    <i class="fa fa-phone fa-stack-1x text-white"></i>
                </span>
                    @lang('messages.contact.other_info')
                </h3>
                <div class="pl-5 ml-5">
                    <p><strong>@lang('messages.contact.city_hall')</strong></p>
                    <p>@lang('messages.contact.address'): 1ª Calle Oriente y 2 Av. Norte Barrio El Centro</p>
                    <p>@lang('messages.contact.phone_numbers'): (503) 2332-2451, (503) 2362-6700</p>
                    <p>@lang('messages.contact.email'): <a href="mailto:alcaldiailobasco@yahoo.com">alcaldiailobasco@yahoo.com</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection