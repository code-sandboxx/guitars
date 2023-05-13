@extends('master')
@section('title', 'Form')
@section('content')
<section class="page-section p-5" id="contact">
            <div class="container">
                <div class="text-center mt-5">
                    <div class="section-heading fs-4">
                        Nous organisons un tirage au sort où vous pourriez gagner une guitare électrique Fender Stratocaster. Tout le monde est invité à participer. Pour participer au tirage au sort, veuillez remplir le formulaire. Le gagnant sera contacté directement. Bonne chance!
                    </div>
                    <h2 class="section-heading text-uppercase mt-5">Votre information</h2>                   
                </div>
                
                <form id="contactForm" method="post">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6 flex-grow-1">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" name="name" id="name" type="text" placeholder="Votre prénom *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Last Name input-->
                                <input class="form-control" name="lastname" id="lastname" type="text" placeholder="Votre nom *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" name="email" id="email" type="email" placeholder="Votre courriel *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" name="phone" id="phone" type="tel" placeholder="Votre numero de téléphone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>                       
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Envoyer</button></div>
                </form>
            </div>
            
            @isset($data)
            <div class="text-white mt-5">
                <h1>Voici les informations que vous avez fournies: </h1>
                <span class="fs-4">Prénom : {{ $data->name  ?? ''}} </span><br>
                <span class="fs-4">Nom : {{ $data->lastname  ?? ''}} </span><br>
                <span class="fs-4">Courriel : {{ $data->email  ?? ''}} </span><br>
                <span class="fs-4">Numero de téléphone : {{ $data->phone  ?? ''}}</span><br>
                <h2 class="mt-5">Merci de votre participation! </h2>
            </div>
            @endisset

        </section>
@endsection 