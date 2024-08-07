@extends('layouts.dashboard')
@section('content')
<div class="page-wrapper cardhead">
   <div class="content container-fluid">
      <div class="page-header">
         <div class="row">
            <div class="col">
               <h3 class="page-title">{{ $section->heading }}</h3>
               <ul class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a></li>
                  <li class="breadcrumb-item"><a href="{{ route('services.index') }}">{{ $section->heading }}</a></li>
                  <li class="breadcrumb-item active">{{ $section->title }}</li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <!-- main alert @s -->
            @include('partials.alerts')
            <!-- main alert @e -->
            <div class="card">
               <div class="card-header">
                  <h5 class="card-title">{{ $section->title }}</h5>
               </div>
               <div class="card-body">
                  {!! Form::model($service, ['route' => $section->route, 'class' => 'form-validate', 'id' => 'form-validate', 'files' => true, 'enctype' => 'multipart/form-data', 'autocomplete' => 'off']) !!}
                  @method($section->method)
                  <!-- <div class="error-message">Please fill all required fields.</div> -->
                  <div class="steps active" id="content1">
                     <div class="form-row row">
                        <div class="col-md-4 mb-3">
                           <label class="form-label" for="validationCustom01">First name</label>
                           <input type="text" class="form-control" id="validationCustom01" name="first_name" placeholder="First name" value="{{ auth()->user()->name }}" required="" class="required">
                           <div class="valid-feedback">
                              Looks good!
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label" for="validationCustom02">Last name</label>
                           <input type="text" class="form-control" id="validationCustom02" name="last_name" placeholder="Last name" value="" required="" class="required">
                           <div class="valid-feedback">
                              Looks good!
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Email</label>
                           <input type="email" class="form-control" placeholder="Email" name="email" value="{{ auth()->user()->email }}">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Contact Number</label>
                           <input type="text" class="form-control" placeholder="Phone Number" name="phone" value="{{ auth()->user()->phone }}" onkeypress="return isNumber(event)">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">DOB</label>
                           <input type="date" class="form-control" name="dob">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label class="form-label">Age</label>
                           <input type="text" class="form-control" name="age" placeholder="Age" onkeypress="return isNumber(event)">
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Is it OK to leave a message at this number?</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="ok_to_number" id="flexRadioDefault1">
                                 <label class="form-check-label" for="flexRadioDefault1"> Yes </label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="ok_to_number" id="flexRadioDefault2" checked="">
                                 <label class="form-check-label" for="flexRadioDefault2"> No </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Is it OK to send you an email?</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="ok_to_email" id="emailSendYes">
                                 <label class="form-check-label" for="emailSendYes"> Yes </label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="ok_to_email" id="emailSendNo" checked="">
                                 <label class="form-check-label" for="emailSendNo"> No </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-row row">
                        <div class="col-md-4 mb-3">
                           <label for="inputAddress" class="form-label">Address</label>
                           <input type="text" class="form-control" id="inputAddress" name="address1">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="inputAddress2" class="form-label">Address 2</label>
                           <input type="text" class="form-control" id="inputAddress2" name="address2">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="inputCountry" class="form-label">Country</label>
                           <select id="inputCountry" class="form-select" name="country">
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
                              <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Bouvet Island">Bouvet Island</option>
                              <option value="Brazil">Brazil</option>
                              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                              <option value="Brunei Darussalam">Brunei Darussalam</option>
                              <option value="Bulgaria">Bulgaria</option>
                              <option value="Burkina Faso">Burkina Faso</option>
                              <option value="Burundi">Burundi</option>
                              <option value="Cabo Verde">Cabo Verde</option>
                              <option value="Cambodia">Cambodia</option>
                              <option value="Cameroon">Cameroon</option>
                              <option value="Canada">Canada</option>
                              <option value="Cayman Islands">Cayman Islands</option>
                              <option value="Central African Republic">Central African Republic</option>
                              <option value="Chad">Chad</option>
                              <option value="Chile">Chile</option>
                              <option value="China">China</option>
                              <option value="Christmas Island">Christmas Island</option>
                              <option value="Cocos Islands">Cocos Islands</option>
                              <option value="Colombia">Colombia</option>
                              <option value="Comoros">Comoros</option>
                              <option value="Congo">Congo</option>
                              <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                              <option value="Cook Islands">Cook Islands</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Croatia">Croatia</option>
                              <option value="Cuba">Cuba</option>
                              <option value="Curaçao">Curaçao</option>
                              <option value="Cyprus">Cyprus</option>
                              <option value="Czechia">Czechia</option>
                              <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                              <option value="Denmark">Denmark</option>
                              <option value="Djibouti">Djibouti</option>
                              <option value="Dominica">Dominica</option>
                              <option value="Dominican Republic">Dominican Republic</option>
                              <option value="Ecuador">Ecuador</option>
                              <option value="Egypt">Egypt</option>
                              <option value="El Salvador">El Salvador</option>
                              <option value="Equatorial Guinea">Equatorial Guinea</option>
                              <option value="Eritrea">Eritrea</option>
                              <option value="Estonia">Estonia</option>
                              <option value="Eswatini">Eswatini</option>
                              <option value="Ethiopia">Ethiopia</option>
                              <option value="Falkland Islands">Falkland Islands</option>
                              <option value="Faroe Islands">Faroe Islands</option>
                              <option value="Fiji">Fiji</option>
                              <option value="Finland">Finland</option>
                              <option value="France">France</option>
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
                              <option value="Guernsey">Guernsey</option>
                              <option value="Guinea">Guinea</option>
                              <option value="Guinea-Bissau">Guinea-Bissau</option>
                              <option value="Guyana">Guyana</option>
                              <option value="Haiti">Haiti</option>
                              <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                              <option value="Holy See">Holy See</option>
                              <option value="Honduras">Honduras</option>
                              <option value="Hong Kong">Hong Kong</option>
                              <option value="Hungary">Hungary</option>
                              <option value="Iceland">Iceland</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Iran">Iran</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Ireland">Ireland</option>
                              <option value="Isle of Man">Isle of Man</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Jamaica">Jamaica</option>
                              <option value="Japan">Japan</option>
                              <option value="Jersey">Jersey</option>
                              <option value="Jordan">Jordan</option>
                              <option value="Kazakhstan">Kazakhstan</option>
                              <option value="Kenya">Kenya</option>
                              <option value="Kiribati">Kiribati</option>
                              <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                              <option value="Korea, Republic of">Korea, Republic of</option>
                              <option value="Kuwait">Kuwait</option>
                              <option value="Kyrgyzstan">Kyrgyzstan</option>
                              <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                              <option value="Latvia">Latvia</option>
                              <option value="Lebanon">Lebanon</option>
                              <option value="Lesotho">Lesotho</option>
                              <option value="Liberia">Liberia</option>
                              <option value="Libya">Libya</option>
                              <option value="Liechtenstein">Liechtenstein</option>
                              <option value="Lithuania">Lithuania</option>
                              <option value="Luxembourg">Luxembourg</option>
                              <option value="Macao">Macao</option>
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
                              <option value="Micronesia">Micronesia</option>
                              <option value="Moldova">Moldova</option>
                              <option value="Monaco">Monaco</option>
                              <option value="Mongolia">Mongolia</option>
                              <option value="Montenegro">Montenegro</option>
                              <option value="Montserrat">Montserrat</option>
                              <option value="Morocco">Morocco</option>
                              <option value="Mozambique">Mozambique</option>
                              <option value="Myanmar">Myanmar</option>
                              <option value="Namibia">Namibia</option>
                              <option value="Nauru">Nauru</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Netherlands">Netherlands</option>
                              <option value="New Caledonia">New Caledonia</option>
                              <option value="New Zealand">New Zealand</option>
                              <option value="Nicaragua">Nicaragua</option>
                              <option value="Niger">Niger</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Niue">Niue</option>
                              <option value="Norfolk Island">Norfolk Island</option>
                              <option value="North Macedonia">North Macedonia</option>
                              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                              <option value="Norway">Norway</option>
                              <option value="Oman">Oman</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Palau">Palau</option>
                              <option value="Palestine, State of">Palestine, State of</option>
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
                              <option value="Romania">Romania</option>
                              <option value="Russian Federation">Russian Federation</option>
                              <option value="Rwanda">Rwanda</option>
                              <option value="Réunion">Réunion</option>
                              <option value="Saint Barthélemy">Saint Barthélemy</option>
                              <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                              <option value="Saint Lucia">Saint Lucia</option>
                              <option value="Saint Martin">Saint Martin</option>
                              <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                              <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                              <option value="Samoa">Samoa</option>
                              <option value="San Marino">San Marino</option>
                              <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                              <option value="Saudi Arabia">Saudi Arabia</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Serbia">Serbia</option>
                              <option value="Seychelles">Seychelles</option>
                              <option value="Sierra Leone">Sierra Leone</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Sint Maarten">Sint Maarten</option>
                              <option value="Slovakia">Slovakia</option>
                              <option value="Slovenia">Slovenia</option>
                              <option value="Solomon Islands">Solomon Islands</option>
                              <option value="Somalia">Somalia</option>
                              <option value="South Africa">South Africa</option>
                              <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                              <option value="South Sudan">South Sudan</option>
                              <option value="Spain">Spain</option>
                              <option value="Sri Lanka">Sri Lanka</option>
                              <option value="Sudan">Sudan</option>
                              <option value="Suriname">Suriname</option>
                              <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                              <option value="Sweden">Sweden</option>
                              <option value="Switzerland">Switzerland</option>
                              <option value="Syria Arab Republic">Syria Arab Republic</option>
                              <option value="Taiwan">Taiwan</option>
                              <option value="Tajikistan">Tajikistan</option>
                              <option value="Tanzania, the United Republic of">Tanzania, the United Republic of</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Timor-Leste">Timor-Leste</option>
                              <option value="Togo">Togo</option>
                              <option value="Tokelau">Tokelau</option>
                              <option value="Tonga">Tonga</option>
                              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                              <option value="Tunisia">Tunisia</option>
                              <option value="Turkmenistan">Turkmenistan</option>
                              <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                              <option value="Tuvalu">Tuvalu</option>
                              <option value="Türkiye">Türkiye</option>
                              <option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
                              <option value="Uganda">Uganda</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States" selected="selected">United States</option>
                              <option value="Uruguay">Uruguay</option>
                              <option value="Uzbekistan">Uzbekistan</option>
                              <option value="Vanuatu">Vanuatu</option>
                              <option value="Venezuela">Venezuela</option>
                              <option value="Viet Nam">Viet Nam</option>
                              <option value="Virgin Islands, British">Virgin Islands, British</option>
                              <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                              <option value="Wallis and Futuna">Wallis and Futuna</option>
                              <option value="Western Sahara">Western Sahara</option>
                              <option value="Yemen">Yemen</option>
                              <option value="Zambia">Zambia</option>
                              <option value="Zimbabwe">Zimbabwe</option>
                              <option value="Åland Islands">Åland Islands</option>
                           </select>
                        </div>
                        {{-- 
                        <div class="col-md-2 mb-3">
                           <label for="inputState" class="form-label">State</label>
                           <select id="inputState" class="form-select">
                              <option selected="">Choose...</option>
                              <option>...</option>
                           </select>
                        </div>
                        --}}
                        <div class="col-md-2 mb-3">
                           <label for="inputCity" class="form-label">City</label>
                           <input type="text" class="form-control" id="inputCity" name="city">
                        </div>
                        <div class="col-md-2 mb-3">
                           <label for="inputZip" class="form-label">Zip</label>
                           <input type="text" class="form-control" id="inputZip" name="zip_code" onkeypress="return isNumber(event)">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="inputEmployer" class="form-label">Employer</label>
                           <input type="text" class="form-control" id="inputEmployer" name="employer">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="inputSchool" class="form-label">School</label>
                           <input type="text" class="form-control" id="inputSchool" name="school">
                        </div>
                        {{-- 
                        <div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label class="form-label">Select a Service</label>
                              <select class="select" name="therapy_services" id="TherapyServices">
                                 <option value="Therapy 45 min" selected="selected">Therapy 45 min</option>
                                 <option value="Therapy 60 min">Therapy 60 min</option>
                                 <option value="Therapy 120 min">Therapy 120 min</option>
                              </select>
                           </div>
                        </div>
                        --}}
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Sex/Gender</label>
                              <div class="form-check"> <input class="form-check-input" type="radio" value="Male" name="gender" id="Male">
                                 <label class="form-check-label" for="Male">Male</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="gender" value="Female" id="Female" checked="">
                                 <label class="form-check-label" for="Female">Female</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="gender" value="Transgender Male" id="TransgenderMale" checked="">
                                 <label class="form-check-label" for="TransgenderMale">Transgender Male</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="gender" value="Transgender Female" id="TransgenderFemale" checked="">
                                 <label class="form-check-label" for="TransgenderFemale">Transgender Female</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="gender" value="Genderqueer" id="Genderqueer" checked="">
                                 <label class="form-check-label" for="Genderqueer">Genderqueer</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="gender" value="Choose not to disclose" id="Choosenottodisclose" checked="">
                                 <label class="form-check-label" for="Choosenottodisclose">Choose not to disclose</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Current relationship status (please “X” one)</label>
                              <div class="form-check"> <input class="form-check-input" type="radio" name="relationship_status" value="Single" id="Single">
                                 <label class="form-check-label" for="Single">Single</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="relationship_status" value="Married" id="Married" checked="">
                                 <label class="form-check-label" for="Married">Married</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="relationship_status" value="Partnered/Committed Relationship" id="Partnered/CommittedRelationship" checked="">
                                 <label class="form-check-label" for="Partnered/CommittedRelationship">Partnered/Committed Relationship</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="relationship_status" value="Separated" id="Separated" checked="">
                                 <label class="form-check-label" for="Separated">Separated</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="relationship_status" value="Divorced" id="Divorced" checked="">
                                 <label class="form-check-label" for="Divorced">Divorced</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="relationship_status" value="Remarried" id="Remarried" checked="">
                                 <label class="form-check-label" for="Remarried">Remarried</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="relationship_status" value="Widowed" id="Widowed" checked="">
                                 <label class="form-check-label" for="Widowed">Widowed</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Sexual Orientation</label>
                              <div class="form-check "> <input class="form-check-input" type="radio" name="sexual_orientation" value="Straight/heterosexual" id="Straight/heterosexual">
                                 <label class="form-check-label" for="Straight/heterosexual">Straight/heterosexual</label>
                              </div>
                              <div class="form-check ">
                                 <input class="form-check-input" type="radio" name="sexual_orientation" value="Lesbian/homosexual" id="Lesbian/homosexual" checked="">
                                 <label class="form-check-label" for="Lesbian/homosexual">Lesbian/homosexual</label>
                              </div>
                              <div class="form-check ">
                                 <input class="form-check-input" type="radio" name="sexual_orientation" value="Gay/Homosexual" id="Gay/Homosexual" checked="">
                                 <label class="form-check-label" for="Gay/Homosexual">Gay/Homosexual</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="sexual_orientation" value="Bisexual" id="Bisexual" checked="">
                                 <label class="form-check-label" for="Bisexual">Bisexual</label>
                              </div>
                              <div class="form-check ">
                                 <input class="form-check-input" type="radio" name="sexual_orientation" value="Something else" id="Somethingelse" checked="">
                                 <label class="form-check-label" for="Somethingelse">Something else</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="sexual_orientation" value="Don’t know" id="Don’tknow" checked="">
                                 <label class="form-check-label" for="Don’tknow">Don’t know</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="sexual_orientation" value="Choose not to disclose" id="Choosenottodisclose" checked="">
                                 <label class="form-check-label" for="Choosenottodisclose">Choose not to disclose</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-2 mb-3">
                           <div class="form-group">
                              <label>Pronouns</label>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="pronouns" value="He/him" id="PronounsHe/him" checked="">
                                 <label class="form-check-label" for="PronounsHe/him">He/him</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="pronouns" value="She/her" id="PronounsShe/her" checked="">
                                 <label class="form-check-label" for="PronounsShe/her">She/her</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="pronouns" value="They/them" id="PronounsThey/them" checked="">
                                 <label class="form-check-label" for="PronounsThey/them">They/them</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="pronouns" value="Other" id="PronounsOther" checked="">
                                 <label class="form-check-label" for="PronounsOther">Other</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 mb-3">
                           <label for="NameofSignificant" class="form-label">Name of Significant other</label>
                           <input type="text" class="form-control" id="NameofSignificant" name="name_of_significant" >
                        </div>
                        <div class="col-md-2 mb-3">
                           <label for="SignificantAge" class="form-label">Age</label>
                           <input type="text" class="form-control" id="SignificantAge" name="age_of_significant"  onkeypress="return isNumber(event)">
                        </div>
                        <div class="col-md-3 mb-3">
                           <label for="SignificantOccupation" class="form-label">Occupation</label>
                           <input type="text" class="form-control" name="occupation_of_significant" id="SignificantOccupation">
                        </div>
                        <div class="col-md-2 mb-3">
                           <label for="SignificantYearsMarried" class="form-label">Years Married</label>
                           <input type="text" class="form-control" name="year_married_of_significant" id="SignificantYearsMarried"  onkeypress="return isNumber(event)">
                        </div>
                        <div class="col-md-3 mb-3">
                           <div class="form-group">
                              <label>Previous marriages</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="previous_marriages" value="yes" id="PreviousmarriagesYes">
                                 <label class="form-check-label" for="PreviousmarriagesYes"> Yes </label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="previous_marriages" value="no" id="PreviousmarriagesNo" checked="">
                                 <label class="form-check-label" for="PreviousmarriagesNo"> No </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 mb-3 PreviousMarriageFields hidden">
                           <label for="yearsmarried" class="form-label"># of years married</label>
                           <textarea class="form-control" placeholder="Please Describe"  id="yearsmarried" name="year_previous_marriages" onkeypress="return isNumber(event)" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                        <div class="col-md-3 mb-3 PreviousMarriageFields hidden">
                           <label for="yearsdivorce" class="form-label">years of divorce</label>
                           <textarea class="form-control" placeholder="Please Describe" id="yearsdivorce" name="divorce_previous_marriages" onkeypress="return isNumber(event)" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                        <div class="col-md-3 mb-3 PreviousMarriageFields hidden">
                           <label for="reasonfordivorce" class="form-label">reason for divorce</label>
                           <textarea class="form-control" placeholder="Please Describe" name="reason_previous_marriages" id="reasonfordivorce" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                     </div>
                     <div class="form-row row">
                        <div class="col-md-12">
                           <h3 class="mb-3">Who currently lives in your household?</h3>
                           <h5 class="mb-3">ease list age and gender of your children</h5>
                        </div>
                     </div>
                     <!-- HouseHoldFields Start -->
                     <div class="form-row row">
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Sex/Gender</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="household_gender" value="male" id="HouseHoldMale">
                                 <label class="form-check-label" for="HouseHoldMale">Male</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="household_gender" value="female" id="HouseHoldFemale" checked="">
                                 <label class="form-check-label" for="HouseHoldFemale">Female</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="HouseHoldAge" class="form-label">Age</label>
                           <input type="text" class="form-control" id="HouseHoldAge" name="household_age"  onkeypress="return isNumber(event)">
                        </div>
                        <div class="col-md-4 mb-3">
                           <label for="HouseHoldRelationship" class="form-label">Relationship</label>
                           <input type="text" class="form-control" id="HouseHoldRelationship" name="household_relation">
                        </div>
                     </div>
                     <!-- HouseHoldFields END -->
                     <div class="form-row row">
                        <div class="col-md-12">
                           <h3 class="mb-3">Are there any relationships that you are concerned about?</h3>
                           <h5 class="mb-3">Abuse History</h5>
                        </div>
                     </div>
                     <div class="form-row row">
                        <div class="col-md-3 mb-3">
                           <div class="form-group">
                              <label>Are you currently in an abusive relationship?</label>
                              <div class="form-check form-check-inline"> 
                                 <input class="form-check-input" type="radio" name="abusive_relationship" id="abusiveRelationshipYes" value="yes">
                                 <label class="form-check-label" for="abusiveRelationshipYes"> Yes </label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="abusive_relationship" id="abusiveRelationshipNo" checked="" value="no">
                                 <label class="form-check-label" for="abusiveRelationshipNo"> No </label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 mb-3 relationshipAbuseFeilds hidden">
                           <div class="form-group">
                              <label>If “Yes”, check the types of abuse that apply to this relationship</label>
                              <div class="form-check"> 
                                 <input class="form-check-input" value="Emotional" type="radio" name="abusive_relationship_apply" id="abusiveRelationshipEmotional">
                                 <label class="form-check-label" for="abusiveRelationshipEmotional">Emotional</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" value="Sexual" type="radio" name="abusive_relationship_apply" id="abusiveRelationshipSexual" checked="">
                                 <label class="form-check-label" for="abusiveRelationshipSexual">Sexual</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" value="Financial" type="radio" name="abusive_relationship_apply" id="abusiveRelationshipFinancial" checked="">
                                 <label class="form-check-label" for="abusiveRelationshipFinancial">Financial</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" value="Spiritual" type="radio" name="abusive_relationship_apply" id="abusiveRelationshipSpiritual" checked="">
                                 <label class="form-check-label" for="abusiveRelationshipSpiritual">Spiritual</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" value="Verbal" type="radio" name="abusive_relationship_apply" id="abusiveRelationshipVerbal" checked="">
                                 <label class="form-check-label" for="abusiveRelationshipVerbal">Verbal</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" value="Physical" type="radio" name="abusive_relationship_apply" id="abusiveRelationshipPhysical" checked="">
                                 <label class="form-check-label" for="abusiveRelationshipPhysical">Physical</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 mb-3 relationshipAbuseFeilds hidden">
                           <div class="form-group">
                              <label>How often does this occur?</label>
                              <div class="form-check"> 
                                 <input class="form-check-input" value="Daily" type="radio" name="abusive_relationship_occur" id="OccurDaily" checked="">
                                 <label class="form-check-label" for="OccurDaily">Daily</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" value="Weekly" type="radio" name="abusive_relationship_occur" id="OccurWeekly">
                                 <label class="form-check-label" for="OccurWeekly">Weekly</label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" value="Other" type="radio" name="abusive_relationship_occur" id="OccurOther" >
                                 <label class="form-check-label" for="OccurOther">Other</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 mb-3 OccurOthersFields hidden relationshipAbuseNoFeilds hide">
                           <label for="OccurOthers" class="form-label">Other</label>
                           <input type="text" name="abusive_relationship_others" class="form-control" id="OccurOthers">
                        </div>
                     </div>
                     <!-- relationshipAbusiveCustom start -->
                     <div class="form-row row relationshipAbusiveCustom">
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Have you had past relationships that were abusive?</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="past_relationships_abusive" value="yes" id="relationshipsAbusiveYes">
                                 <label class="form-check-label" for="relationshipsAbusiveYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" value="no" type="radio" name="past_relationships_abusive" id="relationshipsAbusiveNo" checked="">
                                 <label class="form-check-label" for="relationshipsAbusiveNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8 mb-3 relationshipsAbusiveFields hidden">
                           <label for="Abusivedescribe" class="form-label">If “Yes”, please describe</label>
                           <textarea class="form-control" placeholder="Please Describe"  name="past_relationships_abusive_describe" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                     </div>
                     <!-- relationshipAbusiveCustom end -->
                     <!-- sexually/violated/assaulted Start -->
                     <div class="form-row row CustomSexuallyViolatedAssaulted">
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Were you ever sexually violated/assaulted as a child (0-18 years)?</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="sexually_violated_assaulted" value="yes" id="SexuallyViolatedAssaultedYes">
                                 <label class="form-check-label" for="SexuallyViolatedAssaultedYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" value="no" type="radio" name="sexually_violated_assaulted" id="SexuallyViolatedAssaultedNo" checked="">
                                 <label class="form-check-label" for="SexuallyViolatedAssaultedNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3 SexuallyViolatedAssaultedFields hidden">
                           <label for="SexuallyOldWere" class="form-label">If “Yes”, how old were you?</label>
                           <textarea class="form-control" placeholder="Please Describe"  id="SexuallyOldWere" name="sexually_violated_assaulted_year" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                        <div class="col-md-4 mb-3 SexuallyViolatedAssaultedFields hidden">
                           <label for="SexuallyRelationship" class="form-label">Relationship</label>
                           <textarea class="form-control" placeholder="Please Describe"  name="sexually_violated_assaulted_relationship" id="SexuallyRelationship" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                     </div>
                     <!-- sexually/violated/assaulted End -->
                     <!-- CustomAdultRaped Start -->
                     <div class="form-row row">
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Have you ever been sexually assaulted or raped as an adult?</label>
                              <div class="form-check form-check-inline"> 
                                 <input class="form-check-input" value="yes" type="radio" name="sexually_assaulted_raped" id="CustomAdultRapedYes">
                                 <label class="form-check-label" for="CustomAdultRapedYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" value="no" type="radio" name="sexually_assaulted_raped" id="CustomAdultRapedNo" checked="">
                                 <label class="form-check-label" for="CustomAdultRapedNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3 CustomAdultRapedFields hidden">
                           <label for="RapeYesWhen" class="form-label">“Yes”, when?</label>
                           <textarea class="form-control" placeholder="Please Describe"  name="sexually_assaulted_raped_when" id="RapeYesWhen" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                        <div class="col-md-4 mb-3 CustomAdultRapedFields hidden">
                           <label for="RapeRelationship" class="form-label">Relationship</label>
                           <textarea class="form-control" placeholder="Please Describe"  id="RapeRelationship" name="sexually_assaulted_raped_relation" id="RapeYesWhen" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                     </div>
                     <!-- CustomAdultRaped End -->
                     <div class="form-row row">
                        <div class="col-md-12">
                           <h3 class="mb-3">Therapy History:</h3>
                        </div>
                     </div>
                     <div class="form-row row">
                        <div class="col-md-3 mb-3">
                           <div class="form-group">
                              <label>Are you currently receiving therapy with anyone?</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" value="yes" name="receiving_therapy_any_one" id="CustomReceivingTherapyYes">
                                 <label class="form-check-label" for="CustomReceivingTherapyYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="receiving_therapy_any_one" value="no" id="CustomReceivingTherapyNo" checked="">
                                 <label class="form-check-label" for="CustomReceivingTherapyNo">No</label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- CustomCounselingServices Start -->
                     <div class="form-row row">
                        <div class="col-md-3 mb-3">
                           <div class="form-group">
                              <label>Have you ever received any type of counseling services before today?</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="counseling_services" value="yes" id="CounselingServicesYes">
                                 <label class="form-check-label" for="CounselingServicesYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" value="no" type="radio" name="counseling_services" id="CounselingServicesNo" checked="">
                                 <label class="form-check-label" for="CounselingServicesNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 mb-3 CounselingServicesFields hidden">
                           <label for="CounselingServicesWhen" class="form-label">When?</label>
                           <textarea class="form-control" placeholder="Please Describe" id="CounselingServicesWhen" name="counseling_services_when" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                        <div class="col-md-3 mb-3 CounselingServicesFields hidden">
                           <label for="CounselingServicesFromwhom" class="form-label">Form whom?</label>
                           <textarea class="form-control" placeholder="Please Describe" id="CounselingServicesFromwhom" name="counseling_services_whom" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                        <div class="col-md-3 mb-3 CounselingServicesFields hidden">
                           <label for="CounselingServicesForWhat" class="form-label">For what?</label>
                           <textarea class="form-control" placeholder="Please Describe"  id="CounselingServicesForWhat" name="counseling_services_what" cols="50" rows="1" spellcheck="true"></textarea>
                        </div>
                     </div>
                     <!-- CustomCounselingServices END -->
                     <!-- MedicalHistory Start -->
                     <div class="form-row row">
                        <div class="col-md-12 mb-3">
                           <label for="inputCurrentMedical" class="form-label">Do you have any current medical conditions?</label>
                           <textarea class="form-control" placeholder="Please Describe" required="required" name="current_medical" cols="50" rows="5" spellcheck="false"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                           <label for="inputMentalHealthDiagnoses" class="form-label">Please list any mental health diagnoses received from a mental health or medical professional</label>
                           <textarea class="form-control" placeholder="Please Describe" required="required" name="mental_health_diagnoses" cols="50" rows="5" spellcheck="false"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                           <label for="inputWhatTreatments" class="form-label">What treatments have you tried for these medical and mental health diagnoses?</label>
                           <textarea class="form-control" placeholder="Please Describe" required="required" name="what_treatments" cols="50" rows="5" spellcheck="false"></textarea>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Have you ever been hospitalized for medical reasons other than childbirth?</label>
                              <div class="form-check form-check-inline"> 
                                 <input class="form-check-input" type="radio" value="yes" name="hospitalized_child_birth" id="ChildBirthYes">
                                 <label class="form-check-label" for="ChildBirthYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" value="no" name="hospitalized_child_birth" id="ChildBirthNo" checked="">
                                 <label class="form-check-label" for="ChildBirthNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-8 mb-3 radioChildBirthFields hidden">
                           <label for="inputWhatReasons" class="form-label">for what reasons?</label>
                           <input type="text" class="form-control" name="hospitalized_child_birth_reason" id="inputWhatReasons">
                        </div>
                        <div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label>Have you ever been hospitalized for mental health reasons?</label>
                              <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" value="yes" name="hospitalized_mental_health" id="HospitalizedYes">
                                 <label class="form-check-label" for="HospitalizedYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" type="radio" name="hospitalized_mental_health" value="no" id="HospitalizedNo" checked="">
                                 <label class="form-check-label" for="HospitalizedNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Is there a history of drug or alcohol usage?</label>
                              <div class="form-check form-check-inline"> 
                                 <input class="form-check-input" value="yes" type="radio" name="alcohol_usaged" id="radioAlcoholUsagedYes">
                                 <label class="form-check-label" for="radioAlcoholUsagedYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" value="no" type="radio" name="alcohol_usaged" id="radioAlcoholUsagedNo" checked="">
                                 <label class="form-check-label" for="radioAlcoholUsagedNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3 radioAlcoholUsagedFields hidden">
                           <label for="inputDrugAlcoholType" class="form-label">Drug/Alcohol Type</label>
                           <input type="text" class="form-control" name="alcohol_usaged_type" id="inputDrugAlcoholType">
                        </div>
                        <div class="col-md-4 mb-3 radioAlcoholUsagedFields hidden">
                           <label for="inputDrugFrequency" class="form-label">Drug/Alcohol Frequency</label>
                           <input type="text" class="form-control" name="alcohol_usaged_frequency" id="inputDrugFrequency">
                        </div>
                     </div>
                     <div class="form-row row">
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Is there a family history of drug or alcohol usage?</label>
                              <div class="form-check form-check-inline"> 
                                 <input class="form-check-input" value="yes" type="radio" name="family_alcohol_usaged" id="radioFamilyAlcoholUsagedYes">
                                 <label class="form-check-label" for="radioFamilyAlcoholUsagedYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" value="no" type="radio" name="family_alcohol_usaged" id="radioFamilyAlcoholUsagedNo" checked="">
                                 <label class="form-check-label" for="radioFamilyAlcoholUsagedNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3 radioFamilyAlcoholUsagedFields hidden">
                           <label for="inputRelationshipAlcoholType" class="form-label">Relationship</label>
                           <input type="text" class="form-control" name="family_alcohol_usaged_relationship" id="inputRelationshipAlcoholType">
                        </div>
                        <div class="col-md-4 mb-3 radioFamilyAlcoholUsagedFields hidden">
                           <label for="inputDescribeAlcoholType" class="form-label">Describe</label>
                           <input type="text" class="form-control" name="family_alcohol_usaged_describe" id="inputDescribeAlcoholType">
                        </div>
                     </div>
                     <div class="form-row row">
                        <div class="col-md-3 mb-3">
                           <div class="form-group">
                              <label>Are you currently taking any prescription medications? Over the counter medications?</label>
                              <div class="form-check form-check-inline"> 
                                 <input class="form-check-input" value="yes" type="radio" name="prescription_medications" id="radioPrescriptionMedicationsYes">
                                 <label class="form-check-label" for="radioPrescriptionMedicationsYes">Yes</label>
                              </div>
                              <div class="form-check form-check-inline">
                                 <input class="form-check-input" value="no" type="radio" name="prescription_medications" id="radioPrescriptionMedicationsNo" checked="">
                                 <label class="form-check-label" for="radioPrescriptionMedicationsNo">No</label>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 mb-3 radioPrescriptionMedicationsFields hidden">
                           <label for="inputMedication" class="form-label">Medication</label>
                           <input type="text" class="form-control" name="prescription_medications_name" id="inputMedication">
                        </div>
                        <div class="col-md-3 mb-3 radioPrescriptionMedicationsFields hidden">
                           <label for="inputDosage" class="form-label">Dosage</label>
                           <input type="text" class="form-control" name="prescription_medications_dosage" id="inputDosage">
                        </div>
                        <div class="col-md-3 mb-3 radioPrescriptionMedicationsFields hidden">
                           <label for="inputPrescribingDoctor" class="form-label">Prescribing Doctor</label>
                           <input type="text" class="form-control" name="prescription_medications_doctor" id="inputPrescribingDoctor">
                        </div>
                        <div class="col-md-12 mb-3">
                           <label for="inputHeadInjury" class="form-label">Have you ever suffered a head injury? (Car accidents, sports, violence, etc.)</label>
                           <textarea class="form-control" placeholder="Please Describe" required="required" name="head_injury" cols="50" rows="5" spellcheck="false"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                           <label for="inputConsciousnessHallucinations" class="form-label">Have you ever experienced any unusual states of consciousness like hallucinations, loss of time, long periods of confusion, out of body, etc.?</label>
                           <textarea class="form-control" placeholder="Please Describe" required="required" name="consciousness_hallucinations" cols="50" rows="5" spellcheck="false"></textarea>
                        </div>
                     </div>
                     <!-- MedicalHistory END -->
                     <!-- Symptom History Started -->
                     <div class="form-row row">
                        <div class="col-md-12">
                           <h3 class="mb-3">Symptom History:</h3>
                        </div>
                     </div>
                     <div class="form-row row">
                        <div class="col-md-12 mb-3">
                           <label for="textareaSymptomProblems" class="form-label">What symptoms/problems are you hoping to improve?</label>
                           <textarea class="form-control" placeholder="Please Describe" required="required" name="symptom_problems" id="textareaSymptomProblems" cols="50" rows="5" spellcheck="false"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                           <label for="textareaSymptomProblems" class="form-label">When did these symptoms/problems first become noticeable?</label>
                           <textarea class="form-control" placeholder="Please Describe" required="required" name="symptom_noticeable" id="textareaSymptomNoticeable" cols="50" rows="5" spellcheck="false"></textarea>
                        </div>
                        <div class="col-md-12 mb-3">
                           <label for="textareaSymptomProblems" class="form-label">What have been the major negative consequences of these symptoms/problems?</label>
                           <textarea class="form-control" placeholder="Please Describe" required="required" name="symptom_negative" id="textareaSymptomNegative" cols="50" rows="5" spellcheck="false"></textarea>
                        </div>
                     </div>
                     <div class="form-row row">
                        <div class="col-md-12">
                           <h3 class="mb-3">Please list your three primary goals for therapy.</h3>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="input-group mb-3">
                              <span class="input-group-text">1</span>
                              <input type="text" class="form-control" name="primary_goal_one" id="inputThreePrimaryGoals1" placeholder="" value="" required="" class="required">
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="input-group mb-3">
                              <span class="input-group-text">2</span>
                              <input type="text" class="form-control" name="primary_goal_two" id="inputThreePrimaryGoals2" placeholder="" value="" required="" class="required">
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="input-group mb-3">
                              <span class="input-group-text">3</span>
                              <input type="text" class="form-control" name="primary_goal_three" id="inputThreePrimaryGoals3" placeholder="" value="" required="" class="required">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="steps" id="content2">
                     <div class="form-row row">
                        <div class="col-md-12 mb-3">
                           <h6 class="mb-5" style="text-transform: uppercase;"><strong>Note: Kindly download all these forms, fill them out, and then upload them again.</strong></h6>
                           <div class="accordions-items-seperate" id="accordionSpacingExample">
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingSpacingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SpacingOne" aria-expanded="false" aria-controls="SpacingOne">
                                    <strong>Severity of Posttraumatic Stress Symptoms - Adult* <br/>*Nationnal Stressful Events Survey PTSD Short Scale (NSESSS)</strong>
                                    </button>
                                 </h2>
                                 <div id="SpacingOne" class="accordion-collapse collapse" aria-labelledby="headingSpacingOne" data-bs-parent="#accordionSpacingExample">
                                    <div class="accordion-body">
                                       <div class="form-row row">
                                          <div class="form-row row">
                                             <div class="col-md-12 mb-3">
                                                <label name="assessment_form_one[]"  class="form-label"><u>Instructions:</u></label>
                                                <label name="assessment_form_one[]"  class="form-label">People sometimes have problems after extremely stressful events or experiences.  How much have you been bothered during the <strong>PAST SEVEN (7) DAYS</strong> by each of the following problems that occurred or became worse after an extremely stressful event/experience?  Please respond to each item by marking one circle per row. <strong>0 = Not at all     1 = A little bit     2 = Moderately     3 = Quite a bit     4 = Extremely</strong></label>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>1. Having "flashbacks," that is, you suddenly acted or felt as if a stressful experience from the past was happening all over again <br/>(for example, you reexperienced parts of a stressful experience by seeing, hearing, smelling, or physically feeling parts of the experience)?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[flashbacks][]" checked="" id="assessment_form_one[flashbacks][0]">
                                                   <label class="form-check-label" for="assessment_form_one[flashbacks][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[flashbacks][]" id="assessment_form_one[flashbacks][01]">
                                                   <label class="form-check-label" for="assessment_form_one[flashbacks][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[flashbacks][]" id="assessment_form_one[flashbacks][02]">
                                                   <label class="form-check-label" for="assessment_form_one[flashbacks][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[flashbacks][]" id="assessment_form_one[flashbacks][03]">
                                                   <label class="form-check-label" for="assessment_form_one[flashbacks][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[flashbacks][]" id="assessment_form_one[flashbacks][04]">
                                                   <label class="form-check-label" for="assessment_form_one[flashbacks][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>2. Feeling very emotionally upset when something reminded you of a stressful experience?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[emotionally][]" checked="" id="assessment_form_one[emotionally][0]">
                                                   <label class="form-check-label" for="assessment_form_one[emotionally][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[emotionally][]" id="assessment_form_one[emotionally][01]">
                                                   <label class="form-check-label" for="assessment_form_one[emotionally][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[emotionally][]" id="assessment_form_one[emotionally][02]">
                                                   <label class="form-check-label" for="assessment_form_one[emotionally][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[emotionally][]" id="assessment_form_one[emotionally][03]">
                                                   <label class="form-check-label" for="assessment_form_one[emotionally][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[emotionally][]" id="assessment_form_one[emotionally][04]">
                                                   <label class="form-check-label" for="assessment_form_one[emotionally][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>3. Trying to avoid thoughts, feelings, or physical sensations that reminded you of a stressful experience?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[stressful_experience][]" checked="" id="assessment_form_one[stressful_experience][0]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_experience][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[stressful_experience][]" id="assessment_form_one[stressful_experience][01]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_experience][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[stressful_experience][]" id="assessment_form_one[stressful_experience][02]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_experience][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[stressful_experience][]" id="assessment_form_one[stressful_experience][03]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_experience][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[stressful_experience][]" id="assessment_form_one[stressful_experience][04]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_experience][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>4. Thinking that a stressful event happened because you or someone else (who didn't directly harm you) did something wrong or didn't do everything possible to prevent it, or because of something about you?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[stressful_event][]" checked="" id="assessment_form_one[stressful_event][0]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_event][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[stressful_event][]" id="assessment_form_one[stressful_event][01]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_event][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[stressful_event][]" id="assessment_form_one[stressful_event][02]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_event][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[stressful_event][]" id="assessment_form_one[stressful_event][03]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_event][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[stressful_event][]" id="assessment_form_one[stressful_event][04]">
                                                   <label class="form-check-label" for="assessment_form_one[stressful_event][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>5. Having a very negative emotional state (for example, you were experiencing lots of fear, anger, guilt, shame, or horror) after a stressful experience?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[negative_emotional][]" checked="" id="assessment_form_one[negative_emotional][0]">
                                                   <label class="form-check-label" for="assessment_form_one[negative_emotional][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[negative_emotional][]" id="assessment_form_one[negative_emotional][01]">
                                                   <label class="form-check-label" for="assessment_form_one[negative_emotional][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[negative_emotional][]" id="assessment_form_one[negative_emotional][02]">
                                                   <label class="form-check-label" for="assessment_form_one[negative_emotional][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[negative_emotional][]" id="assessment_form_one[negative_emotional][03]">
                                                   <label class="form-check-label" for="assessment_form_one[negative_emotional][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[negative_emotional][]" id="assessment_form_one[negative_emotional][04]">
                                                   <label class="form-check-label" for="assessment_form_one[negative_emotional][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>6. Losing interest in activities you used to enjoy before having a stressful experience?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[Losing_interest][]" checked="" id="assessment_form_one[Losing_interest][0]">
                                                   <label class="form-check-label" for="assessment_form_one[Losing_interest][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[Losing_interest][]" id="assessment_form_one[Losing_interest][01]">
                                                   <label class="form-check-label" for="assessment_form_one[Losing_interest][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[Losing_interest][]" id="assessment_form_one[Losing_interest][02]">
                                                   <label class="form-check-label" for="assessment_form_one[Losing_interest][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[Losing_interest][]" id="assessment_form_one[Losing_interest][03]">
                                                   <label class="form-check-label" for="assessment_form_one[Losing_interest][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[Losing_interest][]" id="assessment_form_one[Losing_interest][04]">
                                                   <label class="form-check-label" for="assessment_form_one[Losing_interest][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>7. Being "super alert" on guard, or constantly on the lookout for danger?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[super_alert][]" checked="" id="assessment_form_one[super_alert][0]">
                                                   <label class="form-check-label" for="assessment_form_one[super_alert][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[super_alert][]" id="assessment_form_one[super_alert][01]">
                                                   <label class="form-check-label" for="assessment_form_one[super_alert][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[super_alert][]" id="assessment_form_one[super_alert][02]">
                                                   <label class="form-check-label" for="assessment_form_one[super_alert][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[super_alert][]" id="assessment_form_one[super_alert][03]">
                                                   <label class="form-check-label" for="assessment_form_one[super_alert][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[super_alert][]" id="assessment_form_one[super_alert][04]">
                                                   <label class="form-check-label" for="assessment_form_one[super_alert][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>8. Feeling jumpy or easily startled when you hear an unexpected noise?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[unexpected_noise][]" checked="" id="assessment_form_one[unexpected_noise][0]">
                                                   <label class="form-check-label" for="assessment_form_one[unexpected_noise][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[unexpected_noise][]" id="assessment_form_one[unexpected_noise][01]">
                                                   <label class="form-check-label" for="assessment_form_one[unexpected_noise][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[unexpected_noise][]" id="assessment_form_one[unexpected_noise][02]">
                                                   <label class="form-check-label" for="assessment_form_one[unexpected_noise][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[unexpected_noise][]" id="assessment_form_one[unexpected_noise][03]">
                                                   <label class="form-check-label" for="assessment_form_one[unexpected_noise][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[unexpected_noise][]" id="assessment_form_one[unexpected_noise][04]">
                                                   <label class="form-check-label" for="assessment_form_one[unexpected_noise][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label>9. Being extremely irritable or angry to the point where you yelled at other people, got into fights, or destroyed things?</label>
                                                <div class="form-check-inline">
                                                   <strong>Not at all</strong>
                                                </div>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="0" name="assessment_form_one[extremely_irritable][]" checked="" id="assessment_form_one[extremely_irritable][0]">
                                                   <label class="form-check-label" for="assessment_form_one[extremely_irritable][0]">0</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="1" name="assessment_form_one[extremely_irritable][]" id="assessment_form_one[extremely_irritable][01]">
                                                   <label class="form-check-label" for="assessment_form_one[extremely_irritable][01]">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="2" name="assessment_form_one[extremely_irritable][]" id="assessment_form_one[extremely_irritable][02]">
                                                   <label class="form-check-label" for="assessment_form_one[extremely_irritable][02]">2</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="3" name="assessment_form_one[extremely_irritable][]" id="assessment_form_one[extremely_irritable][03]">
                                                   <label class="form-check-label" for="assessment_form_one[extremely_irritable][03]">3</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="4" name="assessment_form_one[extremely_irritable][]" id="assessment_form_one[extremely_irritable][04]">
                                                   <label class="form-check-label" for="assessment_form_one[extremely_irritable][04]">4</label>
                                                </div>
                                                <div class="form-check-inline">
                                                   <strong>Extremely</strong>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <!-- Radio Section end -->
                                       <div class="form-row row">
                                          <div class="col-md-4 mb-3">
                                             <label for="assessment_form_one[]" class="form-label">Total Raw Score</label>
                                             <input type="text" class="form-control" name="assessment_form_one[]" required="" class="required">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingSpacingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SpacingTwo" aria-expanded="false" aria-controls="SpacingTwo">
                                    <strong>The Columbia Protocol (C-SSRS)
                                    Suicide Assessment</strong>
                                    </button>
                                 </h2>
                                 <div id="SpacingTwo" class="accordion-collapse collapse" aria-labelledby="headingSpacingTwo" data-bs-parent="#accordionSpacingExample">
                                    <div class="accordion-body">
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <strong>Always answer questions 1 and 2.</strong>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-4 mb-3">
                                             <label for="assessment_form_two[]" class="form-label">1. Have you wished you were dead or wished you could go to sleep and not wake up?</label>
                                             <select class="form-select" name="assessment_form_two[]">
                                                <option value="Yes">YES</option>
                                                <option value="No">NO</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-4 mb-3">
                                             <label for="assessment_form_two[]" class="form-label">2. Have you actually had any thoughts about killing yourself?</label>
                                             <select class="form-select" name="assessment_form_two[]">
                                                <option value="Yes">YES</option>
                                                <option value="No">NO</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-4 mb-3">
                                             <label for="assessment_form_two[]" class="form-label">Have you done anything, started to do anything, or prepared to do anything to end your life?  Examples:  collected pills, obtained a gun, gave away valuables, wrote a will or suicide note, held a gun but changed your mind, cut yourself, tried to hang yourself, etc.</label>
                                             <select class="form-select" name="assessment_form_two[]">
                                                <option value="Yes">YES</option>
                                                <option value="No">NO</option>
                                             </select>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-4 mb-3">
                                             <label name="assessment_form_two[]" class="form-label">Total Number of YES answers</label>
                                             <input type="text" class="form-control" name="assessment_form_two[]" required="" class="required">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- SpacingTwo END -->
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingSpacingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SpacingThree" aria-expanded="false" aria-controls="SpacingThree">
                                    <strong>GAD-7 </strong>
                                    </button>
                                 </h2>
                                 <div id="SpacingThree" class="accordion-collapse collapse" aria-labelledby="headingSpacingThree" data-bs-parent="#accordionSpacingExample">
                                    <div class="accordion-body">
                                       <div class="form-row row mb-3">
                                          <div class="col-md-12 mb-3">
                                             <strong>Over the last 2 weeks, how often have you been bothered by the following problems?</strong><br/>
                                             <strong>(Use “✔” to indicate your answer</strong>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>1. Feeling nervous, anxious or on edge</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[feeling_nervous][]" id="assessment_form_three[feeling_nervous][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[feeling_nervous][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[feeling_nervous][]" id="assessment_form_three[feeling_nervous][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[feeling_nervous][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[feeling_nervous][]" id="assessment_form_three[feeling_nervous][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[feeling_nervous][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[feeling_nervous][]" id="assessment_form_three[feeling_nervous][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[feeling_nervous][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>2. Not being able to stop or control worrying</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[control_worrying][]" id="assessment_form_three[control_worrying][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[control_worrying][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[control_worrying][]" id="assessment_form_three[control_worrying][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[control_worrying][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[control_worrying][]" id="assessment_form_three[control_worrying][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[control_worrying][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[control_worrying][]" id="assessment_form_three[control_worrying][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[control_worrying][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>3. Worrying too much about different things</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[Worrying][]" id="assessment_form_three[Worrying][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[Worrying][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[Worrying][]" id="assessment_form_three[Worrying][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Worrying][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[Worrying][]" id="assessment_form_three[Worrying][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Worrying][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[Worrying][]" id="assessment_form_three[Worrying][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[Worrying][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>4. Trouble relaxing</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[Trouble_relaxing][]" id="assessment_form_three[Trouble_relaxing][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[Trouble_relaxing][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[Trouble_relaxing][]" id="assessment_form_three[Trouble_relaxing][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Trouble_relaxing][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[Trouble_relaxing][]" id="assessment_form_three[Trouble_relaxing][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Trouble_relaxing][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[Trouble_relaxing][]" id="assessment_form_three[Trouble_relaxing][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[Trouble_relaxing][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>5. Being so restless that it is hard to sit still</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[restless][]" id="assessment_form_three[restless][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[restless][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[restless][]" id="assessment_form_three[restless][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[restless][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[restless][]" id="assessment_form_three[restless][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[restless][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[restless][]" id="assessment_form_three[restless][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[restless][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>6. Becoming easily annoyed or irritable</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[annoyed_or_irritable][]" id="assessment_form_three[annoyed_or_irritable][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[annoyed_or_irritable][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[annoyed_or_irritable][]" id="assessment_form_three[annoyed_or_irritable][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[annoyed_or_irritable][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[annoyed_or_irritable][]" id="assessment_form_three[annoyed_or_irritable][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[annoyed_or_irritable][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[annoyed_or_irritable][]" id="assessment_form_three[annoyed_or_irritable][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[annoyed_or_irritable][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>7. Feeling afraid as if something awful might happen</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[awful_might_happen][]" id="assessment_form_three[awful_might_happen][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[awful_might_happen][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[awful_might_happen][]" id="assessment_form_three[awful_might_happen][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[awful_might_happen][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[awful_might_happen][]" id="assessment_form_three[awful_might_happen][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[awful_might_happen][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[awful_might_happen][]" id="assessment_form_three[awful_might_happen][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[awful_might_happen][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col mb-3">
                                             <strong>(For office coding: Total Score T____ = ____ + ____ + ____ )</strong>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="accordion-item">
                                 <h2 class="accordion-header" id="headingSpacingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#SpacingFour" aria-expanded="false" aria-controls="SpacingFour">
                                    <strong>PATIENT HEALTH QUESTIONNAIRE-9 (PHQ-9)</strong>
                                    </button>
                                 </h2>
                                 <div id="SpacingFour" class="accordion-collapse collapse" aria-labelledby="headingSpacingFour" data-bs-parent="#accordionSpacingExample">
                                    <div class="accordion-body">
                                       <div class="form-row row mb-3">
                                          <div class="col-md-12 mb-3">
                                             <strong>Over the last 2 weeks, how often have you been bothered by any of the following problems?</strong><br/>
                                             <strong>(Use “✔” to indicate your answer</strong>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>1. Little interest or pleasure in doing things</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[interest_or_pleasure][]" id="assessment_form_three[interest_or_pleasure][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[interest_or_pleasure][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[interest_or_pleasure][]" id="assessment_form_three[interest_or_pleasure][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[interest_or_pleasure][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[interest_or_pleasure][]" id="assessment_form_three[interest_or_pleasure][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[interest_or_pleasure][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[interest_or_pleasure][]" id="assessment_form_three[interest_or_pleasure][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[interest_or_pleasure][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>2. Feeling down, depressed, or hopeless</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[depressed][]" id="assessment_form_three[depressed][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[depressed][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[depressed][]" id="assessment_form_three[depressed][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[depressed][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[depressed][]" id="assessment_form_three[depressed][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[depressed][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[depressed][]" id="assessment_form_three[depressed][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[depressed][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>3. Trouble falling or staying asleep, or sleeping too much</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[Trouble_falling][]" id="assessment_form_three[Trouble_falling][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[Trouble_falling][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[Trouble_falling][]" id="assessment_form_three[Trouble_falling][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Trouble_falling][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[Trouble_falling][]" id="assessment_form_three[Trouble_falling][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Trouble_falling][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[Trouble_falling][]" id="assessment_form_three[Trouble_falling][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[Trouble_falling][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>4. Feeling tired or having little energy</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[Feeling_tired][]" id="assessment_form_three[Feeling_tired][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[Feeling_tired][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[Feeling_tired][]" id="assessment_form_three[Feeling_tired][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Feeling_tired][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[Feeling_tired][]" id="assessment_form_three[Feeling_tired][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Feeling_tired][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[Feeling_tired][]" id="assessment_form_three[Feeling_tired][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[Feeling_tired][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>5. Poor appetite or overeating</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[Poor_appetite][]" id="assessment_form_three[Poor_appetite][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[Poor_appetite][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[Poor_appetite][]" id="assessment_form_three[Poor_appetite][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Poor_appetite][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[Poor_appetite][]" id="assessment_form_three[Poor_appetite][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[Poor_appetite][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[Poor_appetite][]" id="assessment_form_three[Poor_appetite][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[Poor_appetite][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>6. Feeling bad about yourself — or that you are a failure or have let yourself or your family down</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[family_down][]" id="assessment_form_three[family_down][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[family_down][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[family_down][]" id="assessment_form_three[family_down][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[family_down][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[family_down][]" id="assessment_form_three[family_down][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[family_down][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[family_down][]" id="assessment_form_three[family_down][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[family_down][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>7. Trouble concentrating on things, such as reading the newspaper or watching television</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[concentrating][]" id="assessment_form_three[concentrating][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[concentrating][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[concentrating][]" id="assessment_form_three[concentrating][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[concentrating][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[concentrating][]" id="assessment_form_three[concentrating][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[concentrating][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[concentrating][]" id="assessment_form_three[concentrating][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[concentrating][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>8. Moving or speaking so slowly that other people could have noticed? Or the opposite — being so fidgety or restless that you have been moving around a lot more than usual</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[speaking_so_slowly][]" id="assessment_form_three[speaking_so_slowly][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[speaking_so_slowly][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[speaking_so_slowly][]" id="assessment_form_three[speaking_so_slowly][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[speaking_so_slowly][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[speaking_so_slowly][]" id="assessment_form_three[speaking_so_slowly][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[speaking_so_slowly][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[speaking_so_slowly][]" id="assessment_form_three[speaking_so_slowly][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[speaking_so_slowly][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row">
                                          <div class="col-md-12 mb-3">
                                             <div class="form-group">
                                                <label><strong>9. Thoughts that you would be better off dead or of hurting yourself in some way</strong></label>
                                                <div class="form-check form-check-inline"> 
                                                   <input class="form-check-input" type="radio" value="Not-at-all" name="assessment_form_three[hurting_yourself][]" id="assessment_form_three[hurting_yourself][Not-at-all]">
                                                   <label class="form-check-label" for="assessment_form_three[hurting_yourself][Not-at-all]">Not at all</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Several-days" name="assessment_form_three[hurting_yourself][]" id="assessment_form_three[hurting_yourself][Several-days]">
                                                   <label class="form-check-label" for="assessment_form_three[hurting_yourself][Several-days]">Several days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="More-than-half-the-days" name="assessment_form_three[hurting_yourself][]" id="assessment_form_three[hurting_yourself][More-than-half-the-days]">
                                                   <label class="form-check-label" for="assessment_form_three[hurting_yourself][More-than-half-the-days]">More than half the days</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" value="Nearly-every-day" name="assessment_form_three[hurting_yourself][]" id="assessment_form_three[hurting_yourself][Nearly-every-day]">
                                                   <label class="form-check-label" for="assessment_form_three[hurting_yourself][Nearly-every-day]">Nearly every day</label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="form-row row mb-3">
                                          <div class="col mb-3">
                                             <strong>FOR OFFICE CODING 0 + ______ + ______ + ______=Total Score: ______ </strong>
                                          </div>
                                       </div>
                                       <div class="col-md-12 mb-3">
                                          <div class="form-group">
                                             <label><strong>If you checked off any problems, how difficult have these problems made it for you to do your work, take care of things at home, or get along with other people?</strong></label>
                                             <div class="form-check form-check-inline"> 
                                                <input class="form-check-input" type="radio" value="Not-difficult-at-all" name="assessment_form_four[takecare_things_home][]" id="">
                                                <label class="form-check-label" for="assessment_form_four[takecare_things_home][Not-difficult-at-all]">Not difficult at all</label>
                                             </div>
                                             <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="Some what difficult" name="assessment_form_four[takecare_things_home][]" checked="" id="assessment_form_four[takecare_things_home][Somewhat-difficult]">
                                                <label class="form-check-label" for="assessment_form_four[takecare_things_home][Somewhat-difficult]">Some what difficult</label>
                                             </div>
                                             <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="Very difficult" name="assessment_form_four[takecare_things_home][]" checked="" id="assessment_form_four[takecare_things_home][Very-difficult]">
                                                <label class="form-check-label" for="assessment_form_four[takecare_things_home][Very-difficult]">Very difficult</label>
                                             </div>
                                             <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" value="Extremely difficult" name="assessment_form_four[takecare_things_home][]" checked="" id="assessment_form_four[takecare_things_home][Extremely-difficult]">
                                                <label class="form-check-label" for="assessment_form_four[takecare_things_home][Extremely-difficult]">Extremely difficult </label>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 mb-3">
                           <h6 class="mb-5" style="text-transform: uppercase;"><strong>Note: Kindly download all these forms, fill them out, and then upload them again.</strong></h6>
                           @if($downloadFiles)
                           <div class="attach-files">
                              <ul class="attach-list">
                                 @foreach($downloadFiles as $key => $downloadFile)
                                 <li style="text-align: center; width:200px; float:left;" class="attach-item" data-toggle="tooltip" data-placement="top" title="{{ $downloadFile->title }}"><a class="download" target="_blank" href="{{ $downloadFile->file_path }}"><img src="{{ asset('assets/img/DOC.png') }}" width="35px"><span><br/>{{ $downloadFile->title }}</span></a></></li>
                                 @endforeach
                              </ul>
                           </div>
                           @endif
                        </div>
                        <div class="col-md-12 mb-3">
                           <div class="form-control-wrap">
                              {{-- <label for="dropzone" class="form-label">Upload Files</label> --}}
                              <div class="custom-file">
                                 <div class="dropzone" data-test="photos" id="dropzone"></div>
                                 {{-- 
                                 <div class="form-note">Max. file size: 15 GB, Max. files: 5.</div>
                                 --}}
                              </div>
                           </div>
                           <input type="hidden" class="form-control" name="photos" id="photos" />
                        </div>
                     </div>
                  </div>
                  <div class="steps" id="content3">
                     <div class="form-row row">
                        <div class="col-md-12 mb-3">
                           <div class="form-group">
                              <label class="form-label">Select a Service</label>
                              <select class="select" name="appoinment_type" id="theropyServices">
                                 <option value="">Select Theropy Service Timing</option>
                                 <option value="45 min">Theropy Service 45 min</option>
                                 <option value="60 min">Theropy Service 60 min</option>
                                 <option value="90 min">Theropy Service 90 min</option>
                                 <option value="120 min">Theropy Service 120 min</option>
                                 <option value="half day">Theropy Service Half Day</option>
                                 <option value="full day">Theropy Service Full Day</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-4 mb-3">
                           <div class="form-group">
                              <label>Select Date</label>
                              <div id="selectDate"></div>
                              {{-- <input class="form-control" placeholder="Enter Title" required="required" name="appoinment_date" type="date"> --}}
                           </div>
                        </div>
                        {{-- 
                        <div class="col-md-3 mb-3">
                           <div class="form-group">
                              <label>Select Date</label>
                              <input class="form-control" placeholder="Enter Title" required="required" name="appoinment_date" type="date">
                           </div>
                        </div>
                        <div class="col-md-3 mb-3">
                           <div class="form-group col-md-6">
                              <label for="time">Time</label>
                              <input class="form-control" type="text" name="appoinment_time" id="datetime">
                           </div>
                        </div>
                        --}}
                     </div>
                     <div class="form-row row" id='serviceTimingFetch'></div>
                  </div>
                  <div class="form-row row">
                     <div class="col-6">
                        <div class="text-start">
                           <a id="prev" class="btn btn-lg btn-dark">Previous</a>
                        </div>
                     </div>
                     <div class="col-6">
                        <div class="text-end">
                           <a id="next" class="btn btn-lg btn-dark">Next</a>
                           <button id="lastSubmit" type="submit" class="btn btn-lg btn-primary">Submit</button>
                        </div>
                     </div>
                  </div>
                  {!! Form::close() !!}
               </div>
               <!-- CARD BODY END -->
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('scripts')
<!-- PLEASE MOVE INTO CSS FILE -->
<style>
   .steps { display: none; }
   .steps.active { display: block; }
   button { display: inline-block; margin: 5px; }
   /*.error { border: 2px solid red; }
   .error-message { color: red; display: none; }*/
</style>
<!-- PLEASE MOVE INTO CSS FILE -->
<script>
   $(document).ready(function() {
   // previous marriage section;
   $('input[name="previous_marriages"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.PreviousMarriageFields').removeClass('hidden');
       } else {
           $('.PreviousMarriageFields').addClass('hidden');
       }
   });
   
   // abusive relationship section;
   $('input[name="abusive_relationship"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.relationshipAbuseFeilds').removeClass('hidden').alert("abusive_relationship");
       } else {
           $('.relationshipAbuseFeilds').addClass('hidden');
       }
   });
   
   $('input[name="abusive_relationship"]').on('change', function() {
       if ($(this).val() === 'no') {
           $('.relationshipAbuseNoFeilds').addClass('hidden hide');
       } else {
           $('.relationshipAbuseNoFeilds').removeClass('hidden hide');
       }
   });
   
   // occur Offer section;
   $('input[name="abusive_relationship_occur"]').on('change', function() {
       if ($(this).val() === 'Other') {
           $('.OccurOthersFields').removeClass('hidden hide');
       } else {
           $('.OccurOthersFields').addClass('hidden hide');
       }
   });
   
    // relationshipsAbusive section;
   $('input[name="past_relationships_abusive"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.relationshipsAbusiveFields').removeClass('hidden');
       } else {
           $('.relationshipsAbusiveFields').addClass('hidden');
       }
   });
   
   // SexuallyViolatedAssaulted section;
   $('input[name="sexually_violated_assaulted"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.SexuallyViolatedAssaultedFields').removeClass('hidden');
       } else {
           $('.SexuallyViolatedAssaultedFields').addClass('hidden');
       }
   });
   
   // CustomAdultRaped section;
   $('input[name="sexually_assaulted_raped"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.CustomAdultRapedFields').removeClass('hidden');
       } else {
           $('.CustomAdultRapedFields').addClass('hidden');
       }
   });
   
   // ReceivingTherapyFields section;
   $('input[name="receiving_therapy_any_one"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.ReceivingTherapyFields').removeClass('hidden');
       } else {
           $('.ReceivingTherapyFields').addClass('hidden');
       }
   });
   
   // CounselingServices section;
   $('input[name="counseling_services"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.CounselingServicesFields').removeClass('hidden');
       } else {
           $('.CounselingServicesFields').addClass('hidden');
       }
   });
   
   // radioChildBirth section;
   $('input[name="hospitalized_child_birth"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.radioChildBirthFields').removeClass('hidden');
       } else {
           $('.radioChildBirthFields').addClass('hidden');
       }
   });
   
   // radioAlcoholUsaged section;
   $('input[name="alcohol_usaged"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.radioAlcoholUsagedFields').removeClass('hidden');
       } else {
           $('.radioAlcoholUsagedFields').addClass('hidden');
       }
   });
   
   // radioFamilyAlcoholUsaged section;
   $('input[name="family_alcohol_usaged"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.radioFamilyAlcoholUsagedFields').removeClass('hidden');
       } else {
           $('.radioFamilyAlcoholUsagedFields').addClass('hidden');
       }
   });
   
   // radioPrescriptionMedications section;
   $('input[name="prescription_medications"]').on('change', function() {
       if ($(this).val() === 'yes') {
           $('.radioPrescriptionMedicationsFields').removeClass('hidden');
       } else {
           $('.radioPrescriptionMedicationsFields').addClass('hidden');
       }
   });
   
   $(document).on('change', '.hasDatepicker', function() {
       var dateString = $('#datepicker').val();
       console.log(dateString);
       var date = new Date(dateString);
       var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
       var day = daysOfWeek[date.getDay()];
       console.log(day);
       // Get CSRF token
       var csrfToken = $('meta[name="csrf-token"]').attr('content');
   
       var selectedValue = $('#theropyServices').val();
       // console.log('Selected value:', selectedValue);
   
       $.ajax({
           url: '{{ route('services.getServiceDayTimings') }}', // Laravel route
           type: 'POST',
           data: {
               _token: csrfToken, // CSRF token for Laravel
               service_day : day,
               service_type : selectedValue,
               service_id : 1
           },
           success: function(response) {
               // console.log("Response from server:", response);
               $('#serviceTimingFetch').html(response);
           },
           error: function(xhr, status, error) {
               console.error("Error:", error);
           }
       });
   });
   
   $('#theropyServices').change(function() {
       var selectedValue = $(this).val();
       $('#selectDate').html('<input type="text" id="datepicker" name="appoinment_date">');
       $('#serviceTimingFetch').html('');
       // Get CSRF token
       var csrfToken = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
           url: '{{ route('services.getServiceDays') }}', // Laravel route
           type: 'POST',
           data: {
               _token: csrfToken, // CSRF token for Laravel
               service_type: selectedValue,
               service_id : 1
           },
           success: function(response) {
               console.log("Response from server:", response);
               var daysString = '';
               daysString = JSON.stringify(response);
               var today = new Date();
               var threeMonthsLater = new Date();
               threeMonthsLater.setMonth(today.getMonth() + 3);
   
               var disabledDays = null;
               var disabledDays = JSON.parse(daysString); //['tuesday', 'monday']; // Your dynamic days array
               
               var dayMap = {
                   'sunday': 0,
                   'monday': 1,
                   'tuesday': 2,
                   'wednesday': 3,
                   'thursday': 4,
                   'friday': 5,
                   'saturday': 6
               };
               // Convert the day names to numerical values
               var disabledDaysNumbers = disabledDays.map(day => dayMap[day.toLowerCase()]);
               $("#datepicker").datepicker({
                   dateFormat: 'yy-mm-dd',
                   minDate: today,
                   maxDate: threeMonthsLater,
                   beforeShowDay: function(date) {
                       var day = date.getDay();
                       return [disabledDaysNumbers.includes(day), ''];
                   }
               });
           },
           error: function(xhr, status, error) {
               console.error("Error:", error);
           }
       });
   });
   
   });
   
   // Below code sets format to the 
   // datetimepicker having id as 
   // datetime
   $('#datetime').datetimepicker({
      format: 'hh:mm:ss a'
   });
</script>
<!-- Include Bootstrap DateTimePicker CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css"
   rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="{{ asset('assets/css/richtext.min.css') }}">
<script src="{{ asset('assets/js/jquery.richtext.js') }}"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<script>
   //NEXT AND PREVIOUS CONDITION;
   $(document).ready(function(){
       var currentIndex = 0;
       var contents = $('.steps');
       var contentCount = contents.length;
   
       function updateButtons() {
           $('#prev').toggle(currentIndex > 0);
           $('#next').toggle(currentIndex < contentCount - 1);
           $('#lastSubmit').toggle(currentIndex === contentCount - 1);
       }
   
       $('#next').click(function(){
           if (currentIndex < contentCount - 1) {
               $(contents[currentIndex]).removeClass('active');
               currentIndex++;
               $(contents[currentIndex]).addClass('active');
               updateButtons();
           }
       });
   
       $('#prev').click(function(){
           if (currentIndex > 0) {
               $(contents[currentIndex]).removeClass('active');
               currentIndex--;
               $(contents[currentIndex]).addClass('active');
               updateButtons();
           }
       });
   
       updateButtons();
   });
   $(document).ready(function() {
       $('.contentArea').richText({
           // text formatting
           bold: true,
           italic: true,
           underline: true,
   
           // text alignment
           leftAlign: true,
           centerAlign: true,
           rightAlign: true,
           justify: true,
   
           // lists
           ol: true,
           ul: true,
   
           // title
           heading: true,
   
           // link
           urls: true,
   
           // tables
           table: true,
   
           // code
           removeStyles: true,
           code: true,
   
           // colors
           colors: [],
   
           // dropdowns
           fileHTML: '',
           imageHTML: '',
   
           // privacy
           youtubeCookies: false,
   
           // preview
           preview: false,
   
           // placeholder
           placeholder: '',
   
           // dev settings
           useSingleQuotes: false,
           height: 0,
           heightPercentage: 0,
           id: "",
           class: "",
           useParagraph: false,
           maxlength: 0,
           useTabForNext: false,
   
           // callback function after init
           callback: undefined,
       });
   
   });
   
   
   var imageUploadClass;
   
   $('.dropzone').on('click',function(e) {
       console.log('On Click - '+$(this).data('test'));
       imageUploadClass = $(this).data('test');
   });
   
   Dropzone.options.dropzone =
   {
       url: '{{url('dashboard/image/upload/store')}}',
       maxFilesize: 25,
       renameFile: function (file) {
           var dt = new Date();
           var time = dt.getTime();
           return time + '_' + file.name;
       },
       acceptedFiles: "image/*",
       addRemoveLinks: false,
       headers: {
           'X-CSRF-TOKEN': "{{ csrf_token() }}"
       },
       timeout: 50000,
       removedfile: function (file) {
           console.log(file._removeLink.className);
           console.log($(this).data('test'));
           var imageUploadClass = $(this).closest('#dropzone').data('test');
   
           console.log(imageUploadClass);
           var name = file.upload.filename;
           $.ajax({
               headers: {
                   'X-CSRF-TOKEN': "{{ csrf_token() }}"
               },
               type: 'POST',
               url: '{{ url("dashboard/image/delete") }}',
               data: {filename: name},
               success: function (data) {
                   console.log(imageUploadClass);
                   var newArr = [];
                   if ($('#'+imageUploadClass).val().length != 0){
                       newArr = $('#'+imageUploadClass).val().split(',');
                       console.log('Remove Item');
                       console.log(newArr);
                   }
                   console.log("File has been successfully removed!!");
                   var removeItem = data;
                   newArr = jQuery.grep(newArr, function (va) {
                       return va != removeItem;
                   });
                   $('#'+imageUploadClass).val(newArr);
               },
               error: function (e) {
                   console.log(e);
               }
           });
           var fileRef;
           return (fileRef = file.previewElement) != null ?
               fileRef.parentNode.removeChild(file.previewElement) : void 0;
       },
       success: function (file, response) {
           console.log(imageUploadClass);
           var newArr = [];
           if ($('#'+imageUploadClass).val().length != 0){
               newArr = $('#'+imageUploadClass).val().split(',');
               console.log(newArr);
           }
           console.log(newArr);
           $.each(response, function (key, value) {
               console.log(value);
               newArr.push(value);
           });
           console.log(newArr);
           $('#'+imageUploadClass).val(newArr);
       },
       error: function (file, response) {
           return false;
       }
   };
</script>
@endsection