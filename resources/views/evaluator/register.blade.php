<x-unauthenticated_layout>
@vite(['resources/css/employee_login.css'])

<div class="flex-container">
    <div class="container">
        <div class="row row-inner-container">
            <div class="col-md-12">
                <div class="row my-form-row" >
                    <div class="col-md-6 my-col position-relative right-side">
                        <div class="logo-container py-2 m-0 bg-white border-top border-bottom border-primary border-5">
                            <img class="img-logo" src="{{ asset('images/logo-v2.png') }}">
                        </div>
                        <img src="{{ asset('images/portal1.png') }}" class="position-absolute img-fluid"/>
                    </div>
                    <div class="col-md-6 my-col">
                        <div class="my-form-container">
                            <div class="my-form-inner-container">
                                <div class="panel-header">
                                    <h2 class="text-center">
                                      EVALUATOR PORTAL
                                    </h2>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                                                                <div class="col-xs-12">
                                            <h3 style="font-weight: bold;margin-bottom: 20px;" class="text-center">Register</h3>
                                            <form action="#" id="authentication" method="post" class="login_validator">
                                                <input type="hidden" name="ci_csrf_token" value="" />
                                                <div class="form-group mb-3">
                                                    <label for="email" class="sr-only">Enter Employee ID</label>
                                                    <input value="" type="text" class="form-control" id="username" name="username">
                                                </div>
                                                <div class="form-group">
                                                    <label for="password" class="sr-only">Enter Employee Email</label>
                                                    <input type="email" class="form-control" id="email"
                                                           name="email">
                                                </div>

                                                <div class="form-group">
                                                    <div id='recaptcha' class="g-recaptcha" data-size="invisible" data-callback='onSubmit'></div>
                                                    <button class="btn btn-primary btn-block my-3 w-100"  type="submit">Confirm</button>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                  <a href="#" class="nav-link" ><i>Forgot password</i></a>
                                                  <a href="../evaluator/login" class="nav-link text-info" ><i>Sign in</i></a>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-xs-12">
                                            <br><br>
                                            <p class="text-center">By using this service, you understood and agree to the <a href="../../terms_and_conditions/" class="nav-link text-dark fw-bold" target="_blank">EVSU Online Services Terms of Use and Privacy Statement</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p style="margin: 10px 0px"><a href="#"><small>&larr; Back to Homepage</small></a></p>
            </div>
        </div>
    </div>
</div>
</x-unauthenticated_layout>
