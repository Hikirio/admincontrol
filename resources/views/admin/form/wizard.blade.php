@extends('admin.layout.master')
@section('title', 'Wizard')
@section('parentPageTitle', 'Form')
@section('page-style')
<link rel="stylesheet" href="{{asset('assets/plugins/jquery-steps/jquery.steps.css')}}"/>
@stop
@section('content')
<!-- Basic Example | Horizontal Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Basic Example</strong> - Horizontal Layout</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <p>Taken from <a href="https://github.com/rstaib/jquery-steps" target="_blank">github.com/rstaib/jquery-steps</a> &amp; <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></p>
                <div id="wizard_horizontal">
                    <h2>First Step</h2>
                    <section>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas
                            arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac habitasse platea
                            dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. Nam tellus
                            dolor, tristique ac tempus nec, iaculis quis nisi. </p>
                    </section>
                    <h2>Second Step</h2>
                    <section>
                        <p>Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                            ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                            tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                            nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                            a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                            arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                            velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                            iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus. </p>
                    </section>
                    <h2>Third Step</h2>
                    <section>
                        <p> Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                            condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                            Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                            Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                            commodo lectus sollicitudin in auctor mauris venenatis. </p>
                    </section>
                    <h2>Forth Step</h2>
                    <section>
                        <p> Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula
                            vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris feugiat iaculis nec
                            ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                            Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
                            tortor. </p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Basic Example | Vertical Layout -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Basic Example</strong> - Vertical Layout</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="wizard_vertical">
                    <h2>First Step</h2>
                    <section>
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut nulla nunc. Maecenas
                            arcu sem, hendrerit a tempor quis, sagittis accumsan tellus. In hac habitasse platea
                            dictumst. Donec a semper dui. Nunc eget quam libero. Nam at felis metus. Nam tellus
                            dolor, tristique ac tempus nec, iaculis quis nisi. </p>
                    </section>
                    <h2>Second Step</h2>
                    <section>
                        <p> Donec mi sapien, hendrerit nec egestas a, rutrum vitae dolor. Nullam venenatis diam ac
                            ligula elementum pellentesque. In lobortis sollicitudin felis non eleifend. Morbi
                            tristique tellus est, sed tempor elit. Morbi varius, nulla quis condimentum dictum,
                            nisi elit condimentum magna, nec venenatis urna quam in nisi. Integer hendrerit sapien
                            a diam adipiscing consectetur. In euismod augue ullamcorper leo dignissim quis elementum
                            arcu porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum leo
                            velit, blandit ac tempor nec, ultrices id diam. Donec metus lacus, rhoncus sagittis
                            iaculis nec, malesuada a diam. Donec non pulvinar urna. Aliquam id velit lacus. </p>
                    </section>
                    <h2>Third Step</h2>
                    <section>
                        <p> Morbi ornare tellus at elit ultrices id dignissim lorem elementum. Sed eget nisl at justo
                            condimentum dapibus. Fusce eros justo, pellentesque non euismod ac, rutrum sed quam.
                            Ut non mi tortor. Vestibulum eleifend varius ullamcorper. Aliquam erat volutpat.
                            Donec diam massa, porta vel dictum sit amet, iaculis ac massa. Sed elementum dui
                            commodo lectus sollicitudin in auctor mauris venenatis. </p>
                    </section>
                    <h2>Forth Step</h2>
                    <section>
                        <p> Quisque at sem turpis, id sagittis diam. Suspendisse malesuada eros posuere mauris vehicula
                            vulputate. Aliquam sed sem tortor. Quisque sed felis ut mauris feugiat iaculis nec
                            ac lectus. Sed consequat vestibulum purus, imperdiet varius est pellentesque vitae.
                            Suspendisse consequat cursus eros, vitae tempus enim euismod non. Nullam ut commodo
                            tortor. </p>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Advanced Form Example With Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Advanced</strong> Form Example With Validation</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form id="wizard_with_validation" method="POST">
                    <h3>Account Information</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <input type="text" class="form-control" placeholder="Username *" name="username" required>
                        </div>
                        <div class="form-group form-float">
                            <input type="password" class="form-control" placeholder="Password *" name="password" id="password" required>
                        </div>
                        <div class="form-group form-float">
                            <input type="password" class="form-control" placeholder="Confirm Password *" name="confirm" required>
                        </div>
                    </fieldset>
                    <h3>Profile Information</h3>
                    <fieldset>
                        <div class="form-group form-float">
                            <input type="text" name="name" placeholder="First Name *" class="form-control" required>
                        </div>
                        <div class="form-group form-float">
                            <input type="text" name="surname" placeholder="Last Name *" class="form-control" required>
                        </div>
                        <div class="form-group form-float">
                                <input type="email" name="email" placeholder="Email *" class="form-control" required
                        </div>
                        <div class="form-group form-float">
                            <textarea name="address" cols="30" rows="3" placeholder="Address *" class="form-control no-resize" required></textarea>
                        </div>
                        <div class="form-group form-float">
                            <input min="18" type="number" name="age" placeholder="Age *" class="form-control" required>
                            <div class="help-info">The warning step will show up if age is less than 18</div>
                        </div>
                    </fieldset>
                    <h3>Terms & Conditions - Finish</h3>
                    <fieldset>
                        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                        <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-script')
<script src="{{asset('assets/plugins/jquery-validation/jquery.validate.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-steps/jquery.steps.js')}}"></script>
<script src="{{asset('assets/js/pages/forms/form-wizard.js')}}"></script>
@stop
