@extends('site.modelo')

@section('body')
    <!-- Informar menu localização página -->
    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Início</a></li>
                    <li class="active">Contato</li>
                </ul>
            </div>
        </div>

        <!-- Informar titulo div -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title"><h1 class="title">Contato</h1>
                        <p class="title-desc">
                            Dúvida ou sugestão fique a vontade para comentar.
                        </p>
                    </header>
                    <div class="xs-margin"></div>
                    <div class="row">

                        <!-- Informar comentário -->
                        <div class="col-md-8 col-sm-8 col-xs-12"><h2 class="sub-title">DEIXE UM COMENTÁRIO</h2>

                            <div class="row">

                                <!-- Informar dados para o comentário -->
                                <form action="#" id="contact-form">
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <!-- Informar nome comentário -->
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="input-icon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <span class="input-text">
                                                    Nome
                                                </span>
                                            </span>
                                            <input type="text" name="contact-name" id="contact-name" required class="form-control input-lg" placeholder="Seu Nome" />
                                        </div>

                                        <!-- Informar e-mail comentário -->
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="input-icon">
                                                    <i class="fa fa fa-envelope"></i>
                                                </span>
                                                <span class="input-text">
                                                    E-mail
                                                </span>
                                            </span>
                                            <input type="email" name="contact-email" id="contact-email" required class="form-control input-lg" placeholder="Seu e-mail" />
                                        </div>

                                        <!-- Informar assunto comentário -->
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="input-icon">
                                                    <i class="fa fa-comment"></i>
                                                </span>
                                                <span class="input-text">
                                                    Assunto
                                                </span>
                                            </span>
                                            <input type="text" name="contact-subject" id="contact-subject" required class="form-control input-lg" placeholder="Assunto" />
                                        </div>
                                        <p class="item-desc">
                                            Fique tranquilo, seu endereço de e-mail não será publicado.
                                        </p>
                                    </div>

                                    <!-- Informar texto para o comentário -->
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="input-group textarea-container">
                                            <span class="input-group-addon">
                                                <span class="input-icon">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                                <span class="input-text">
                                                    Seu comentário
                                                </span>
                                            </span>
                                        <textarea name="contact-message" id="contact-message" class="form-control" cols="30" rows="6" placeholder="Sua mensagem"></textarea>
                                        </div>
                                        <input type="submit" value="ENVIAR" class="btn btn-custom-2 md-margin">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Informar contato para atendimento -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <h2 class="sub-title">
                                CONTATOS
                            </h2>
                            <ul class="contact-details-list">
                                <li>
                                    <span class="contact-icon contact-icon-phone"></span>
                                    <ul>
                                        <li>69 3441 5237</li>
                                        <li>69 3441 1111</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="contact-icon contact-icon-mobile"></span>
                                    <ul>
                                        <li>69 8448 2693</li>
                                        <li>69 8484 8484</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="contact-icon contact-icon-email"></span>
                                    <ul>
                                        <li>futprdiego@gmail.com</li>
                                        <li>bugao7@gmail.com</li>
                                    </ul>
                                </li>
                                <li>
                                    <span class="contact-icon contact-icon-skype"></span>
                                    <ul>
                                        <li>diego.iel.cacoal</li>
                                        <li>bugao7.cacoal</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop