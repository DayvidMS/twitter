@extends('layouts.main')
@section('content')
    <div class="topo">
        <div class="container w-clearfix">
            <div class="div-azul"></div>
            <div class="div-formulario">
                <div class="div-entrar">
                    <div class="w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix" method="POST"
                              action="{{ route('login') }}">
                    @csrf
                                  <div class="div-text-field w-clearfix">
                        <input type="text" maxlength="256" placeholder="E-MAIL" id="email" name="email"
                               class="text-field-entrar margem-right w-input">
                        <input type="password" maxlength="256" placeholder="SENHA" id="password" name="password"
                               class="text-field-entrar w-input">
                        <a href="#" class="link-esqueceu-sua-senha">Esqueceu sua senha?</a>
                    </div>
                    <input type="submit" value="ENTRAR" data-wait="Please wait..." class="botao-entrar w-button">
                    </form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
            <div class="div-cadastrar">
                <p class="cadastre-se">cadastre-se</p>
                <div class="w-form">
                    <form id="email-form-2" name="email-form-2" data-name="Email Form 2" method="POST"
                          action="{{ route('register') }}">
                        @csrf
                        <input type="text" class="text-field-cadastrar w-input" maxlength="256" name="name"
                               data-name="Name" placeholder="NOME" id="name">
                        <input type="text" class="text-field-cadastrar w-input" maxlength="256" name="email"
                               data-name="email" placeholder="E-MAIL" id="email">
                        <input type="password" class="text-field-cadastrar w-input" maxlength="256" name="password"
                               data-name="password" placeholder="SENHA" id="password">
                        <input type="password" class="text-field-cadastrar w-input" maxlength="256"
                               name="password_confirmation" data-name="password_confirmation"
                               placeholder="CONFIRMAR SENHA" id="password_confirmation">
                        <input type="submit" value="CADASTRAR" data-wait="Please wait..."
                               class="botao-cadastrar w-button"></form>
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="w-embed">
        <style>
            .w-webflow-badge {
                display: none !important;
            }
        </style>
    </div>
@endsection

