@extends('users.user_dashboard.layouts.master')
@section('content')
    <div class="col-lg-9">
        <!-- Start Instructor Profile  -->
        <div class="rbt-dashboard-content bg-color-white rbt-shadow-box">
            <div class="content">

                <div class="section-title">
                    <h4 class="rbt-title-style-3">Settings</h4>
                </div>
                @if (Session::has('success'))
                    <div class="rbt-btn btn-gradient">{{ Session::get('success') }}</div>
                @endif

                <div class="advance-tab-button mb--30">
                    <ul class="nav nav-tabs tab-button-style-2 justify-content-start" id="settinsTab-4" role="tablist">
                        <li role="presentation">
                            <a href="#" class="tab-button active" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" role="tab" aria-controls="profile" aria-selected="true">
                                <span class="title">Profile</span>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#" class="tab-button" id="password-tab" data-bs-toggle="tab"
                                data-bs-target="#password" role="tab" aria-controls="password" aria-selected="false">
                                <span class="title">Password</span>
                            </a>
                        </li>
                        <!-- <li role="presentation">
                                                                                                                                                                                                                                                                                                                                                                                                    <a href="#" class="tab-button" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" role="tab" aria-controls="social" aria-selected="false">
                                                                                                                                                                                                                                                                                                                                                                                                        <span class="title">Social Share</span>
                                                                                                                                                                                                                                                                                                                                                                                                    </a>
                                                                                                                                                                                                                                                                                                                                                                                                </li> -->
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form action="{{ route('edit_profile_link') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="rbt-tutor-information-left">
                                <div class="thumbnail rbt-avatars size-lg position-relative">
                                    @if (Auth::user()->image !== '')
                                        <img src="{{ Auth::user()->imageUrl() }}" id="previewImage" alt="">
                                    @else
                                        <img src="{{ asset('assets/images/icons/avatar.png') }}" id="previewImage"
                                            alt="">
                                    @endif
                                    <div class="rbt-edit-photo-inner">
                                        <a class="rbt-edit-photo" title="Upload Photo">
                                            <i class="feather-camera"></i>
                                        </a>
                                        <!-- Ajouter un input de type file caché -->
                                        <input type="file" id="uploadInput" name="image" style="display:none">
                                    </div>
                                </div>
                            </div>
                            <!-- Start Profile Row  -->
                            <div class="rbt-profile-row rbt-default-form row row--15">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="rbt-form-group">
                                        <label for="firstName">Nom</label>
                                        <input id="firstName" name="firstName" type="text"
                                            value="{{ Auth::user()->firstName }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="rbt-form-group">
                                        <label for="lastName">Prénom</label>
                                        <input id="lastName" name="lastName" type="text"
                                            value="{{ Auth::user()->lastName }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="rbt-form-group">
                                        <label for="email">E-mail</label>
                                        <input id="email" type="text" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="rbt-form-group">
                                        <label for="phonenumber">Téléphone</label>
                                        <input id="phonenumber" name="tel" type="tel"
                                            value="{{ Auth::user()->tel }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="rbt-form-group">
                                        <label for="domaine">Profession</label>
                                        <input id="domaine" name="domaine" type="text"
                                            value="{{ Auth::user()->domaine }}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                    <div class="rbt-form-group">
                                        <label for="adress">Adresse</label>
                                        <input id="adress" name="address" type="text"
                                            value="{{ Auth::user()->address }}">
                                    </div>
                                </div>


                                <div class="col-12 mt--20">
                                    <div class="rbt-form-group">
                                        <button type="submit" class="rbt-btn btn-gradient"> Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Profile Row  -->
                        </form>

                    </div>

                    <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                        <!-- Start Profile Row  -->

                        <form action="{{ route('edit_password_link') }}" method="POST"
                            class="rbt-profile-row rbt-default-form row row--15">
                            @csrf
                            <div class="col-12">
                                <div class="rbt-form-group">
                                    <label for="currentpassword">Current Password</label>
                                    <input id="currentpassword" name="currentpassword" type="password"
                                        placeholder="Current Password">
                                    @error('currentpassword')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="rbt-form-group">
                                    <label for="password">New Password</label>
                                    <input id="password" name="password" type="password" placeholder="New Password">
                                    @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <div class="rbt-form-group">
                                    <label for="password_confirmation">Re-type New Password</label>
                                    <input id="password_confirmation" name="password_confirmation" type="password"
                                        placeholder="Re-type New Password">
                                    @error('password_confirmation')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mt--10">
                                <div class="rbt-form-group">
                                    <button type="submit" class="rbt-btn btn-gradient">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Profile Row  -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Instructor Profile  -->

    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const uploadButton = document.querySelector('.rbt-edit-photo');
            const uploadInput = document.getElementById('uploadInput');
            const previewImage = document.getElementById('previewImage');

            uploadButton.addEventListener('click', function() {
                uploadInput.click();
            });


            uploadInput.addEventListener('change', function() {
                const selectedFile = uploadInput.files[0];

                // Vérifier si un fichier a été sélectionné
                if (selectedFile) {
                    // Utiliser FileReader pour lire le contenu du fichier en tant que données URL
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        // Attribuer l'URL des données à la source de l'élément img
                        previewImage.src = e.target.result;
                        // Afficher l'élément img
                        // previewImage.style.display = 'block';
                    };

                    // Lire le contenu du fichier en tant que données URL
                    reader.readAsDataURL(selectedFile);
                }
            });

        });
    </script>
@stop
