@extends('dashboard.layout.app')
@section('content')


    <div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">


        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Profile Info</h2>
                    <div class="nk-block-des">
                        <p>You have full control to manage your own account setting.</p>
                    </div>
                </div>
            </div>
            <ul class="nk-nav nav nav-tabs">

                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.accounts') }}">Accounts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.security') }}">Security</a>
                </li>
            </ul>
            <div class="nk-block">

{{--                <div class="nk-block">--}}

{{--                    <div class="alert alert-primary alert-thick alert-plain">--}}
{{--                        <div class="alert-cta flex-wrap flex-md-nowrap g-2">--}}
{{--                            <div class="alert-text has-icon">--}}
{{--                                <em class="icon ni ni-info-fill text-primary"></em>--}}
{{--                                <p>Update your account information from your user to complete account setup.</p>--}}
{{--                            </div>--}}
{{--                            <div class="alert-actions my-1 my-md-0">--}}
{{--                                <a href="#user-edit" data-toggle="modal" class="link link-primary">Update Profile</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title">Personal Information</h5>
                        <div class="nk-block-des">
                            <p>Basic info, like your name and address, that you use on our platform.</p>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <div class="card card-bordered">
                    <div class="nk-data data-list">
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Full Name</span>
                                <span class="data-value">{{ $user->name }}</span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Username</span>
                                <span class="data-value">{{ $user->username }}</span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">Email</span>
                                <span class="data-value">{{ $user->email }}</span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                        </div>
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Phone Number</span>
                                <span class="data-value text-soft font-italic">
                                 {{ $user->phone ? : "Not added yet" }}
                            </span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                            <div class="data-col">
                                <span class="data-label">Telegram</span>
                                <span class="data-value text-soft font-italic">
                               {{ $user->telegram ? : "Not added yet" }}
                            </span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                        </div>

                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                            <div class="data-col">
                                <span class="data-label">Country</span>
                                <span class="data-value text-soft font-italic">
                               {{ $user->country ? : "Not added yet" }}
                            </span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                            <div class="data-col">
                                <span class="data-label">Address</span>
                                <span class="data-value text-soft font-italic">
                                    {{ $user->address ? : "Not added yet" }}
                            </span>
                            </div>
                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="javascript:void(0)" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h4 class="title">Update Profile</h4>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="{{ route('user.updateProfile') }}" method="POST" class="form-validate is-alter form-profile" >
                            @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="full-name">Full Name  <span class="text-danger">*</span></label>
                                            </div>

                                            <div class="form-control-wrap">
                                                <input type="text" name="name" value="{{ old('name', optional($user)->name) }}" class="form-control form-control-lg" id="full-name" placeholder="Enter Full name" required maxlength="190">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="display-name">UserName <span class="text-danger">*</span></label>
                                            </div>

                                            <div class="form-control-wrap">
                                                <input type="text" name="username" value="{{ old('usernmae', optional($user)->username) }}" class="form-control form-control-lg" id="display-name" placeholder="Enter display name" required maxlength="190">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="phone-no">Phone Number</label>
                                            </div>

                                            <div class="form-control-wrap">
                                                <input type="text" name="phone" value="{{ old('phone', optional($user)->phone) }}" class="form-control form-control-lg" id="phone-no" placeholder="Phone Number">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="telegram">Telegram</label>
                                            </div>

                                            <div class="form-control-wrap">
                                                <input type="text" name="telegram" value="{{ old('telegram', optional($user)->telegram) }}" class="form-control form-control-lg" id="telegram" placeholder="Telegram">
                                            </div>
                                        </div>
                                    </div>

{{--                                    <div class="col-md-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="form-label" for="birth-day">Date of Birth</label>--}}
{{--                                            <input type="text" name="date_of_birth" value="{{ old('date_of_birth', optional($user)->date_of_birth) }}" data-date-start-date="-85y" data-date-end-date="-12y" class="form-control form-control-lg date-picker-alt" id="birth-day" placeholder="Enter your date of birth">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2 pt-2">
                                            <li>
                                                <button type="submit" id="update-profile" class="btn btn-lg btn-primary">Update Profile</button>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="address">
                            <form action="{{ route('user.updateProfile') }}" method="POST" class="form-validate is-alter form-profile">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="address-l1">Address  <span class="text-danger">*</span></label>
                                            </div>

                                            <div class="form-control-wrap">
                                                <input type="text" name="address" class="form-control form-control-lg" id="address-l1" value="" required maxlength="190">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="address-st">State <span class="text-danger">*</span></label>
                                            </div>

                                            <div class="form-control-wrap">
                                                <input type="text" name="state" class="form-control form-control-lg" id="address-st" value="" required maxlength="190">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-county">Country <span class="text-danger">*</span></label>
                                            <select name="country" class="form-select form-control" id="address-county" data-ui="lg" data-search="on">
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic</option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire</option>
                                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="France Metropolitan">France Metropolitan</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories</option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao, People&#039;s Democratic Republic">Lao, People&#039;s Democratic Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="St. Helena">St. Helena</option>
                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Yugoslavia">Yugoslavia</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimba">Zimba</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2 pt-2">
                                            <li>
                                                <button type="submit" id="update-address" class="btn btn-lg btn-primary">Update Address</button>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="change-unverified-email">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Enter Your Valid Email Address</h5>
                    <form action="https://www.beckstocker.com/public/profile/change-unverified-email" method="POST" class="form-validate is-alter mt-4 form-profile" autocomplete="off">
                        <input type="hidden" name="_token" value="1lRKfI0HDEi6Yj8kbmcKn62heRVToXVrUjZyruFX">                        <div class="form-group">
                            <label class="form-label" for="email-address">Current Email Address</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control form-control-lg" id="email-address" readonly value="emmanuelodih2@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="new-unverified-email-address">New Email Address  <span class="text-danger">*</span></label>
                            <div class="form-control-wrap">
                                <input type="email" id="new-unverified-email-address" autocomplete="new-email" name="user_new_unverified_email" class="form-control form-control-lg"  placeholder="Enter Email Address" required maxlength="190">
                            </div>
                        </div>
                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                            <li>
                                <button type="submit" id="update-unverified-email" class="btn btn-md btn-primary">Send Verification Email</button>
                            </li>
                        </ul>
                        <div class="notes mt-gs">
                            <ul>
                                <li class="alert-note is-plain text-danger">
                                    <em class="icon ni ni-alert-circle"></em>
                                    <p>Wether you verify your email or not, from next login you have to use your new email address.</p>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="send-verification-link">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Resend Email Verification Link</h5>
                    <form action="https://www.beckstocker.com/public/profile/verify-unverified-email/283" method="POST" class="form-validate is-alter mt-4">
                        <input type="hidden" name="_token" value="1lRKfI0HDEi6Yj8kbmcKn62heRVToXVrUjZyruFX">                        <div class="form-group">
                            <p class="text-dark fs-16px"><strong>Are you sure to proceed with email verification link for your exisiting email?</strong></p>
                        </div>
                        <div class="form-group">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-md btn-primary">Send Verification Email</button>
                                </li>
                            </ul>
                        </div>
                        <div class="notes mt-gs">
                            <ul>
                                <li class="alert-note is-plain text-danger">
                                    <em class="icon ni ni-alert-circle"></em>
                                    <p>After verification, from next login you have to use your new verified email address.</p>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" tabindex="-1" role="dialog" id="change-unverified-email">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Enter Your Valid Email Address</h5>
                    <form action="https://www.beckstocker.com/public/profile/change-unverified-email" method="POST" class="form-validate is-alter mt-4 form-profile" autocomplete="off">
                        <input type="hidden" name="_token" value="1lRKfI0HDEi6Yj8kbmcKn62heRVToXVrUjZyruFX">                        <div class="form-group">
                            <label class="form-label" for="email-address">Current Email Address</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control form-control-lg" id="email-address" readonly value="emmanuelodih2@gmail.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="new-unverified-email-address">New Email Address  <span class="text-danger">*</span></label>
                            <div class="form-control-wrap">
                                <input type="email" id="new-unverified-email-address" autocomplete="new-email" name="user_new_unverified_email" class="form-control form-control-lg"  placeholder="Enter Email Address" required maxlength="190">
                            </div>
                        </div>
                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                            <li>
                                <button type="submit" id="update-unverified-email" class="btn btn-md btn-primary">Send Verification Email</button>
                            </li>
                        </ul>
                        <div class="notes mt-gs">
                            <ul>
                                <li class="alert-note is-plain text-danger">
                                    <em class="icon ni ni-alert-circle"></em>
                                    <p>Wether you verify your email or not, from next login you have to use your new email address.</p>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="send-verification-link">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Resend Email Verification Link</h5>
                    <form action="https://www.beckstocker.com/public/profile/verify-unverified-email/283" method="POST" class="form-validate is-alter mt-4">
                        <input type="hidden" name="_token" value="1lRKfI0HDEi6Yj8kbmcKn62heRVToXVrUjZyruFX">                        <div class="form-group">
                            <p class="text-dark fs-16px"><strong>Are you sure to proceed with email verification link for your exisiting email?</strong></p>
                        </div>
                        <div class="form-group">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-md btn-primary">Send Verification Email</button>
                                </li>
                            </ul>
                        </div>
                        <div class="notes mt-gs">
                            <ul>
                                <li class="alert-note is-plain text-danger">
                                    <em class="icon ni ni-alert-circle"></em>
                                    <p>After verification, from next login you have to use your new verified email address.</p>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
