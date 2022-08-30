@extends('dashboard.layout.app')
@section('content')

<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">

        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Payment Accounts</h2>
                    <div class="nk-block-des">
                        <p>You have full control to manage your own account setting.</p>
                    </div>
                </div>
            </div>
            <ul class="nk-nav nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('user.accounts') }}">Accounts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('user.security') }}">Security</a>
                </li>
            </ul>
            <div class="nk-block">
                <div class="nk-block-head">
                    <div class="col-lg-12">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="nk-block-between-md g-3">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Your Accounts</h5>
                            <div class="nk-block-des">
                                <p>Below accounts that you’d like to withdraw funds.</p>
                            </div>
                        </div>
                        <div class="nk-block-head-tools">
                            <div class="dropdown">
                                <a href="#" class="btn btn-primary" data-toggle="dropdown" aria-expanded="false">Add Account</a>
                                <div class="dropdown-menu dropdown-menu-right" style="">
                                    <ul class="link-list-opt no-bdr">
                                        <li>
                                            <a href="javascript:void(0)" class="wd-new-account" data-target="#wdm-account" data-modal="wdm-account" data-toggle="modal">
                                                <em class="icon ni ni-building-fill"></em>
                                                <span>Bank Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="wd-new-account" data-target="#wdm-crypto" data-modal="wdm-crypto" data-toggle="modal">
                                                <em class="icon ni ni-bitcoin"></em>
                                                <span>Crypto Wallet(Bitcoin)</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @forelse($accounts as $item)
                    @if($item->payment_type == 1)
                <div class="card card-bordered" id="wd-account-list">
                    <div class="nk-data data-list">
                        <div class="data-item">
                            <div class="data-col">
                                <span class="data-label">
                                    {{ $item->transType() }} ({{ $item->acct_label }})
                                    <br>
                                    <em class="small text-soft"></em>
                                </span>
                                <span class="data-value">{{ $item->bank_name }}, {{ $item->bank_branch }} <br>{{ $item->acct_name }} (XXXX-{{ substr($item->acct_number, 4) }})<br></span>
                            </div>
                            <div class="data-col data-col-end">
                                <a class="wd-view-account" href="javascript:void(0);" data-action="https://www.beckstocker.com/public/withdraw/account/bank/MnhQZkYyOUNpVi9wc25YMUJuajVOdz09" data-modal="wdm-account"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                    @else
                        <div class="card card-bordered" id="wd-account-list">
                            <div class="nk-data data-list">
                                <div class="data-item">
                                    <div class="data-col">
                                <span class="data-label">
                                    {{ $item->transType() }} ({{ $item->acct_label }})
                                    <br>
                                    <em class="small text-soft"></em>
                                </span>
                                        <span class="data-value">{{ $item->wallet_address }} </span>
                                    </div>
                                    <div class="data-col data-col-end">
                                        <a class="wd-view-account" href="javascript:void(0);" data-action="https://www.beckstocker.com/public/withdraw/account/bank/MnhQZkYyOUNpVi9wc25YMUJuajVOdz09" data-modal="wdm-account"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                    <div class="nk-odr-list is-stretch card card-bordered is-compact">
                        <div class="nk-odr-item">
                            <div class="nk-odr-col">No account found!</div>
                        </div>
                    </div>

                @endforelse

                <div class="notes mt-4">
                    <ul>
                        <li class="alert-note is-plain text-danger">
                            <em class="icon ni ni-alert-circle"></em>
                            <p>Caution: Your updated information only effect on new withdraw request.</p>
                        </li>
                        <li class="alert-note is-plain">
                            <em class="icon ni ni-info"></em>
                            <p>You should enter your correct information for receiving payment.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="wdm-account" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body">
                <h4 class="title">Add Bank Account</h4>
                <p>Add your bank information to withdraw your funds.</p>
                <div class="divider sm stretched"></div>
                <form action="{{ route('user.accountUpdate') }}" method="POST" class="form">
                    @csrf

                    <div class="row gy-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Account Type <span class="text-danger">*</span></label>
                                <ul class="custom-control-group g-3 align-center">
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input name="acct_type" type="radio" class="custom-control-input" id="account-personal" value="personal">
                                            <label class="custom-control-label" for="account-personal">Personal</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-control custom-radio">
                                            <input name="acct_type" type="radio" class="custom-control-input" id="account-business" value="business">
                                            <label class="custom-control-label" for="account-business">Business</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="acccount-name">Account Holder Name <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="acct_name" type="text" class="form-control" id="acccount-name" placeholder="Your Account Name" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="account-number">Account Number <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="acct_number" type="text" class="form-control" id="account-number" placeholder="eg. 39485" value="" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-note text-danger mt-n1">You must ensure that the name of the your account and bank account number should match.</div>
                        </div>
                    </div>

                    <div class="row gy-3 pt-1">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="bank-county">Bank Location / Country <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <select name="bank_country" class="form-select form-control" id="bank-county" data-placeholder="Choose Country" data-select2-id="bank-county" tabindex="-1" aria-hidden="true">
                                        <option></option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="0" selected="" data-select2-id="1982">Argentina</option>
                                        <option value="Armenia">Argentina</option>
                                        <option value="1">Armenia</option>
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
                                        <option value="Cote d'Ivoire">Cote d'Ivoire</option>
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
                                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                        <option value="Korea, Republic of">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
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
                                        <option value="Zimbabw">Zimba</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="form-label" for="bank-currency">Bank Currency <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <select name="base_currency" class="form-select form-control" id="bank-currency" data-placeholder="Choose Currency" data-select2-id="bank-currency" tabindex="-1" aria-hidden="true">
                                        <option value="USD">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="GBP">GBP</option>
                                        <option value="CAD">CAD</option>
                                        <option value="AUD">AUD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-3 pt-1">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="bank-name">Bank Name <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="bank_name" required type="text" value="" class="form-control" id="bank-name" placeholder="Your Bank Name">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="branch-name">Branch Name <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="bank_branch" required type="text" class="form-control" id="branch-name" placeholder="Name of Branch" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="branch-address">Bank Address </label>
                                <div class="form-control-wrap">
                                    <input name="bank_address" required type="text" class="form-control" id="branch-address" placeholder="Your Bank Address" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-3 pt-1">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="sortcode-bic">Sort code </label>
                                <div class="form-control-wrap">
                                    <input name="sort_code" required type="text" class="form-control" id="sortcode-bic" placeholder="Bank Sort code" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="routing-number">Routing Number </label>
                                <div class="form-control-wrap">
                                    <input name="routing_number" required type="text" class="form-control" id="routing-number" placeholder="Routing Number" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="swift-bic">Swift Code / BIC <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="swift_code" required type="text" class="form-control" id="swift-bic" placeholder="Bank Swift / BIC code" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="iban-number">IBAN Number </label>
                                <div class="form-control-wrap">
                                    <input name="iban_code" required type="text" class="form-control" id="iban-number" placeholder="Bank IBAN Number" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-3 pt-1">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="account-label">Label of account <span>(Optional)</span></label>
                                <div class="form-control-wrap">
                                    <input type="text" name="acct_label" value="" class="form-control" id="account-label" placeholder="eg. Personal">
                                </div>
                                <div class="form-note">
                                    You can easily identify using this. The label will auto genarate if you leave blank.<br>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divider md stretched"></div>
                    <div class="row gy-3">
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-primary" id="save-user-wd-account" data-redirect="no">
                                        <span class="spinner-border spinner-border-sm hide" role="status" aria-hidden="true" style="display: none;"></span>
                                        <span>Add Account</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="wdm-crypto" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
            <div class="modal-body">
                <h4 class="title">Add Crypto Wallet</h4>
                <p>Add your bitcoin wallet to withdraw your funds.</p>
                <div class="divider sm stretched"></div>
                <form action="{{ route('user.storeBTC') }}" method="POST" class="form">
                    @csrf

                    <div class="row gy-3">


                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="acccount-name">Wallet Address <span class="text-danger">*</span></label>
                                <div class="form-control-wrap">
                                    <input name="wallet_address" type="text" class="form-control" id="acccount-name" placeholder="Your Account Name" value="" required>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row gy-3 pt-1">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="form-label" for="account-label">Label of account <span>(Optional)</span></label>
                                <div class="form-control-wrap">
                                    <input type="text" name="acct_label" value="" class="form-control" id="account-label" placeholder="eg. Personal">
                                </div>
                                <div class="form-note">
                                    You can easily identify using this. The label will auto genarate if you leave blank.<br>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider md stretched"></div>
                    <div class="row gy-3">
                        <div class="col-12">
                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                <li>
                                    <button type="submit" class="btn btn-primary" id="save-user-wd-account" data-redirect="no">
                                        <span class="spinner-border spinner-border-sm hide" role="status" aria-hidden="true" style="display: none;"></span>
                                        <span>Add Account</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="wdm-account"></div>

<script type="text/javascript">
    const updateSetting = "https://www.beckstocker.com/public/update/setting", getTnxDetails = "https://www.beckstocker.com/public/transactions/details";
</script>
<script type="text/javascript">
    const msgs = { wdm: {title: "Are you sure you want to delete?", context: "The withdraw account will be deleted immediately. You can't undo this action. Are you sure you want to proceed?", btn: {confirm: "Delete Account", cancel: "Cancel" } } };
</script>
@endsection
