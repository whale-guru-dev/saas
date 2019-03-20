@extends('account.layouts.default')
@section('title', trans('saas.menu.users'))
@section('account.content')



    <h6>

        @lang('saas.menu.users')

        <button @click="onCreateClick" data-toggle="modal" data-target="#userDataModal"
                class="btn btn-sm btn-success pull-right">@lang('saas.invite_user')</button>

    </h6>
    <div class="card card-default" style="margin-top: 30px">
        <div class="card-body">

            <table class="table" style="font-size: 14px">
                <thead>
                <tr>
                    <th>
                        @lang('saas.first_name')
                    </th>
                    <th>
                        @lang('saas.email')
                    </th>
                    <th>
                        @lang('saas.active')
                    </th>
                    <th>

                    </th>
                </tr>
                </thead>

                <tbody>

                <tr :key="user.id" v-for="user in this.users">
                    <td>
                        @{{ user.first_name }}
                    </td>
                    <td>
                        @{{ user.email }}
                    </td>
                    <td>
                        <span v-if="user.is_active">
                            @lang('saas.active')
                        </span>
                        <span v-if="!user.is_active">
                            @lang('saas.inactive')
                        </span>
                    </td>
                    <td>
                        <button @click="onUpdateClick(user)" data-toggle="modal" data-target="#userDataModal"
                                class="btn btn-sm btn-success pull-right">@lang('saas.update')</button>
                    </td>
                </tr>

                </tbody>
            </table>

        </div>
    </div>

    <div id="userDataModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">@{{ $data.title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <p v-if="errors.length">
                        <b>@lang('saas.please_correct_following_errors')</b>
                    <ul>
                        <li v-for="error in this.errors">@{{ error }}</li>
                    </ul>
                    </p>


                    <form autocomplete="false">

                        <div class="form-group row">
                            <label for="form_first_name"
                                   class="col-md-4 col-form-label text-md-right">@lang('saas.first_name')</label>

                            <div class="col-md-6">
                                <input v-model="user.form_first_name" id="form_first_name"
                                       class="form-control form-control-alternative" name="form_first_name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">@lang('saas.email')</label>

                            <div class="col-md-6">
                                <input v-model="user.form_email" id="form_email" type="form_email"
                                       class="form-control form-control-alternative" name="form_email" required>
                            </div>
                        </div>

                        <div class="form-group row">

                            <label for="form_password"
                                   class="col-md-4 col-form-label text-md-right">@lang('saas.password')</label>

                            <div class="col-md-6">
                                <input v-model="user.form_password" autocomplete="new-password" id="form_password"
                                       type="password" class="form-control form-control-alternative"
                                       name="form_password" required>
                                <span v-if="user.form_id > 0 "
                                      class="small text-muted">@lang('saas.fill_only_if_change_pass')</span>

                            </div>


                        </div>


                        <div class="form-group row" v-if="user.form_id > 0 ">
                            <div class="col-md-4">
                                &nbsp;
                            </div>
                            <div class="col-md-6">

                                <div class="custom-control custom-control-alternative custom-checkbox">


                                    <input v-model="user.form_is_active" class="custom-control-input form-check-input"
                                           type="checkbox" id="form_is_active" name="form_is_active" required>
                                    <label class="custom-control-label" for="form_is_active">
                                        @lang('saas.is_active') <br/>
                                    </label>
                                </div>


                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button v-if="this.user.form_id > 0 " type="button" @click="deleteUser"
                            class="btn btn-danger">@lang('saas.delete_user')</button>
                    <button type="button" @click="storeUser" class="btn btn-primary">@{{ $data.title }}</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')

        @if(config('app.env') == 'production')
            <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.2.5/polyfill.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/vue"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
        @else
            <!-- development version, includes helpful console warnings -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/7.2.5/polyfill.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
        @endif

        <script>
            "use strict";

            var app = new Vue({
                el: '#app',
                data: {
                    title: '',
                    users: null,
                    errors: [],
                    user: {
                        form_id: null,
                        form_first_name: '',
                        form_email: '',
                        form_is_active: false,
                        form_password: ''
                    }
                },
                mounted: function mounted() {
                    this.loadUsers();
                },
                methods: {
                    loadUsers: function loadUsers() {
                        var _this = this;

                        axios.defaults.headers.common = {
                            'X-CSRF-TOKEN': window.csrfToken,
                            'X-Requested-With': 'XMLHttpRequest'
                        };
                        axios.post('users/u/list').then(function (response) {
                            _this.users = response.data;
                        }).catch(function (error) {
                            console.log(error);
                        });
                    },
                    onUpdateClick: function onUpdateClick(user) {
                        var _this2 = this;

                        this.title = "@lang('saas.update')";
                        axios.defaults.headers.common = {
                            'X-CSRF-TOKEN': window.csrfToken,
                            'X-Requested-With': 'XMLHttpRequest'
                        };
                        axios.post('/account/users/u/get/' + user.id).then(function (response) {
                            _this2.user.form_id = response.data.id;
                            _this2.user.form_first_name = response.data.first_name;
                            _this2.user.form_email = response.data.email;
                            _this2.user.form_password = '';
                            _this2.user.form_is_active = response.data.is_active;
                        }).catch(function (error) {
                            console.log(error);
                        });
                    },
                    onCreateClick: function onCreateClick() {
                        this.title = "@lang('saas.invite_user')";
                        this.user.form_id = null;
                        this.user.form_first_name = '';
                        this.user.form_email = '';
                        this.user.form_password = '';
                        this.user.form_is_active = false;
                    },
                    validEmail: function validEmail(email) {
                        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                        return re.test(email);
                    },
                    checkForm: function checkForm(e) {
                        this.errors = [];

                        if (!this.user.form_first_name) {
                            this.errors.push("@lang('saas.first_name_required')");
                        }

                        if (this.user.form_id == null && this.user.form_password == '') {
                            this.errors.push("@lang('saas.password_required')");
                        }

                        if (!this.user.form_email) {
                            this.errors.push("@lang('saas.email_required')");
                        } else if (!this.validEmail(this.user.form_email)) {
                            this.errors.push("@lang('saas.valid_email_required')");
                        }

                        if (!this.errors.length) {
                            return true;
                        }
                    },
                    deleteUser: function deleteUser() {
                        var _this3 = this;

                        axios.defaults.headers.common = {
                            'X-CSRF-TOKEN': window.csrfToken,
                            'X-Requested-With': 'XMLHttpRequest'
                        };
                        axios.post('/account/users/u/delete', {
                            id: this.user.form_id
                        }).then(function (response) {
                            $('#userDataModal').modal('hide');
                            Application.notify(response.data.message, response.data.status);

                            _this3.loadUsers();
                        }).catch(function (error) {
                            $('#userDataModal').modal('hide');
                            Application.notify(error.response.data.message, 'danger');
                        });
                    },
                    storeUser: function storeUser() {
                        var _this4 = this;

                        if (this.checkForm()) {
                            axios.defaults.headers.common = {
                                'X-CSRF-TOKEN': window.csrfToken,
                                'X-Requested-With': 'XMLHttpRequest'
                            };
                            axios.post('/account/users/u/save', {
                                id: this.user.form_id,
                                first_name: this.user.form_first_name,
                                email: this.user.form_email,
                                password: this.user.form_password,
                                is_active: this.user.form_is_active
                            }).then(function (response) {
                                $('#userDataModal').modal('hide');
                                Application.notify(response.data.message, response.data.status);

                                _this4.loadUsers();
                            }).catch(function (error) {
                                $('#userDataModal').modal('hide');
                                Application.notify(error.response.data.message, 'danger');
                            });
                        }
                    }
                }
            });
        </script>
    @endpush


@endsection
