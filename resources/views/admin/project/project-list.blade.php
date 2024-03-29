@extends('admin.layout.master')
@section('title', 'Project List')
@section('parentPageTitle', 'Project')
@section('content')
<div class="row clearfix">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="card project_list">
            <div class="table-responsive">
                <table class="table table-hover c_table theme-color">
                    <thead>
                        <tr>
                            <th style="width:50px;">Assigned</th>
                            <th></th>
                            <th>Name</th>
                            <th class="hidden-md-down">Team</th>
                            <th class="hidden-md-down" width="150px">Status</th>
                            <th>Priority</th>
                            <th>Due Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar1.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">Jonathan Deo</a><br>
                                <small>Project Lead</small>
                            </td>
                            <td>
                                <strong>eCommerce Website</strong><br>
                                <small>Cost: $215</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar6.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-info">Medium</span></td>
                            <td>25 Dec 2019</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">Jannie Dvis</a><br>
                                <small>Design Lead</small>
                            </td>
                            <td>
                                <strong>One Page Landing</strong><br>
                                <small>Cost: $100</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar5.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar6.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-success">High</span></td>
                            <td>21 Dec 2019</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar10.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">Petere Husen</a><br>
                                <small>Swift Developer</small>
                            </td>
                            <td>
                                <strong>iOS Game</strong><br>
                                <small>Cost: $890</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar7.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar8.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar9.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-info">Medium</span></td>
                            <td>26 Dec 2019</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">John Deo</a><br>
                                <small>UI UX Lead</small>
                            </td>
                            <td>
                                <strong>Digital Marketing</strong><br>
                                <small>Cost: $350</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar6.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-warning">Panding</span></td>
                            <td>12 Jan 2019</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar5.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">Emma Welson</a><br>
                                <small>Angular Developer</small>
                            </td>
                            <td>
                                <strong>Hospital Admin</strong><br>
                                <small>Hire: $45 Per Hour</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info  margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar8.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-coral" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-primary">Low</span></td>
                            <td>20 Jan 2019</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">Jannie Dvis</a><br>
                                <small>Design Lead</small>
                            </td>
                            <td>
                                <strong>One Page Landing</strong><br>
                                <small>Cost: $100</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar5.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar6.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-success">High</span></td>
                            <td>21 Dec 2019</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar10.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">Petere Husen</a><br>
                                <small>Swift Developer</small>
                            </td>
                            <td>
                                <strong>iOS Game</strong><br>
                                <small>Cost: $890</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar9.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-blue" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-info">Medium</span></td>
                            <td>26 Dec 2019</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">John Deo</a><br>
                                <small>UI UX Lead</small>
                            </td>
                            <td>
                                <strong>Digital Marketing</strong><br>
                                <small>Cost: $350</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar6.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-warning">Panding</span></td>
                            <td>12 Jan 2019</td>
                        </tr>
                        <tr>
                            <td>
                                <img class="rounded avatar" src="{{asset('assets/images/xs/avatar5.jpg')}}" alt="">
                            </td>
                            <td>
                                <a class="single-user-name" href="javascript:void(0);">Emma Welson</a><br>
                                <small>Angular Developer</small>
                            </td>
                            <td>
                                <strong>Hospital Admin</strong><br>
                                <small>Hire: $45 Per Hour</small>
                            </td>
                            <td class="hidden-md-down">
                                <ul class="list-unstyled team-info  margin-0">
                                    <li><img src="{{asset('assets/images/xs/avatar8.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
                                    <li><img src="{{asset('assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="hidden-md-down">
                                <div class="progress">
                                    <div class="progress-bar l-coral" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                </div>
                            </td>
                            <td><span class="badge badge-primary">Low</span></td>
                            <td>20 Jan 2019</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <ul class="pagination pagination-primary mt-4">
                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
            </ul>
        </div>
    </div>
</div>
@stop
