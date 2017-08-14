<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="module-4017">
    <div class="container">
        <div class="contacts">
            <h3>CONTACTS</h3>
        </div>
        <div class="tren">
            <div class="content">
                <p>SALES IN VIETNAM <span class="span">Change Location</span></p>
            </div>
            <div class="contacts-notification">
                <div class="x">X</div>
                <h4>Change Location</h4>
                <select>
                    <option>Vietnam</option>
                    <option>Vietnam</option>
                    <option>Vietnam</option>
                    <option>Vietnam</option>
                    <option>Vietnam</option>
                </select>
                <div class="change">
                    <h1>CHANGE</h1>
                </div>
            </div>
            <div class="contact-list">
                <div class="row">
                    <div class="col-xs-12 col-sm-2">
                        <h4>Access, Inc. (Michigan)</h4>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <div class="item">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i><span> Email Contact </span> </div>
                        <div class="item">
                            <i class="fa fa-phone" aria-hidden="true"></i><span>+1 248 616 9200</span></div>
                        <span>Fax  +1 248 616 8980</span>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <h1>1409-G Allen Drive<br>
                            Troy Michigan 48083<br>
                            USA</h1>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <a>Product areas of focus:</a> <span class="unin">Uninterruptible Power Supplies (UPS), DC Power Systems, Industrial AC and DC Systems, Power Distribution, Power Transfer Switches, Paralleling Switch Gear, Surge Protective Devices, Fire Pump Controllers, Power Control and Monitoring, Thermal Management, Integrated Solutions, Outdoor Enclosures, Racks and Containment, Software, IT Management, Monitoring</span>
                    </div>
                </div>
            </div>
            <div class="contact-list hang2">
                <div class="row">
                    <div class="col-xs-12 col-sm-2">
                        <h4>Access, Inc. (Michigan)</h4>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <div class="item">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i><span> Email Contact </span> </div>
                        <div class="item">
                            <i class="fa fa-phone" aria-hidden="true"></i><span>+1 248 616 9200</span></div>
                        <span>Fax  +1 248 616 8980</span>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <h1>1409-G Allen Drive<br>
                            Troy Michigan 48083<br>
                            USA</h1>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <a>Product areas of focus:</a> <span class="unin">Uninterruptible Power Supplies (UPS), DC Power Systems, Industrial AC and DC Systems, Power Distribution, Power Transfer Switches, Paralleling Switch Gear, Surge Protective Devices, Fire Pump Controllers, Power Control and Monitoring, Thermal Management, Integrated Solutions, Outdoor Enclosures, Racks and Containment, Software, IT Management, Monitoring</span>
                    </div>
                </div>
            </div>

            <div class="submit">
                <a href="#" class="primary">more contacts</a>
            </div>
        </div>
        <div class="tren">
            <div class="content">
                <p>SALES IN VIETNAM <span class="span">Change Location</span></p>
            </div>
            <div class="contacts-notification">
                <div class="x">X</div>
                <h4>Change Location</h4>
                <select>
                    <option value="2">Albania</option>
                    <option value="3">Algeria</option>
                    <option value="4">Andorra</option>
                    <option value="5">Angola</option>
                    <option value="6">Anguilla</option>
                    <option value="7">Antigua and Barbuda</option>
                    <option value="8">Argentina</option>
                    <option value="9">Armenia</option>
                    <option value="10">Aruba</option>
                    <option value="11">Australia</option>
                    <option value="12">Austria</option>
                    <option value="13">Azerbaijan</option>
                    <option value="14">Bahamas</option>
                    <option value="15">Bahrain</option>
                    <option value="16">Bangladesh</option>
                    <option value="17">Barbados</option>
                    <option value="18">Belarus</option>
                    <option value="19">Belgium</option>
                    <option value="20">Belize</option>
                    <option value="21">Benin</option>
                    <option value="22">Bermuda</option>
                    <option value="23">Bhutan</option>
                    <option value="24">Bolivia</option>
                    <option value="25">Bosnia and Herzegovina</option>
                    <option value="26">Botswana</option>
                    <option value="27">Brazil</option>
                    <option value="28">Brunei</option>
                    <option value="29">Bulgaria</option>
                    <option value="30">Burkina Faso</option>
                    <option value="31">Burundi</option>
                    <option value="32">Cambodia</option>
                    <option value="33">Cameroon</option>
                    <option value="34">Canada</option>
                    <option value="35">Cape Verde</option>
                    <option value="36">Cayman Islands</option>
                    <option value="37">Central African Republic</option>
                    <option value="38">Chad</option>
                    <option value="39">Channel Islands</option>
                    <option value="40">Chile</option>
                    <option value="41">China</option>
                    <option value="42">Colombia</option>
                    <option value="43">Comoros</option>
                    <option value="44">Congo</option>
                    <option value="45">Cook Islands</option>
                    <option value="46">Costa Rica</option>
                    <option value="47">Cote dIvoire</option>
                    <option value="48">Croatia</option>
                    <option value="49">Cyprus</option>
                    <option value="50">Czech Republic</option>
                    <option value="51">Denmark</option>
                    <option value="52">Djibouti</option>
                    <option value="53">Dominica</option>
                    <option value="54">Dominican Republic</option>
                    <option value="55">Dubai</option>
                    <option value="56">Ecuador</option>
                    <option value="57">Egypt</option>
                    <option value="58">El Salvador</option>
                    <option value="59">Equatorial Guinea</option>
                    <option value="60">Eritrea</option>
                    <option value="61">Estonia</option>
                    <option value="62">Ethiopia</option>
                    <option value="63">Faroe Islands</option>
                    <option value="64">Fiji</option>
                    <option value="65">Finland</option>
                    <option value="66">France</option>
                    <option value="67">French Polynesia</option>
                    <option value="68">Gabon</option>
                    <option value="69">Gambia</option>
                    <option value="70">Gaza Strip</option>
                    <option value="71">Georgia</option>
                    <option value="72">Germany</option>
                    <option value="73">Ghana</option>
                    <option value="74">Gibraltar</option>
                    <option value="75">Greece</option>
                    <option value="76">Greenland</option>
                    <option value="77">Grenada</option>
                    <option value="78">Guam</option>
                    <option value="79">Guatemala</option>
                    <option value="80">Guinea</option>
                    <option value="81">Guyana</option>
                    <option value="82">Haiti</option>
                    <option value="83">Honduras</option>
                    <option value="84">Hong Kong</option>
                    <option value="85">Hungary</option>
                    <option value="86">Iceland</option>
                    <option value="87">India</option>
                    <option value="88">Indonesia</option>
                    <option value="89">Iraq</option>
                    <option value="90">Ireland</option>
                    <option value="91">Israel</option>
                    <option value="92">Italy</option>
                    <option value="93">Jamaica</option>
                    <option value="94">Japan</option>
                    <option value="95">Jordan</option>
                    <option value="96">Kazakhstan</option>
                    <option value="97">Kenya</option>
                    <option value="98">Kiribati</option>
                    <option value="99">Korea</option>
                    <option value="100">Kosovo</option>
                    <option value="101">Kuwait</option>
                    <option value="102">Kyrgyzstan</option>
                    <option value="103">Laos</option>
                    <option value="104">Latvia</option>
                    <option value="105">Lebanon</option>
                    <option value="106">Lesotho</option>
                    <option value="107">Liberia</option>
                    <option value="108">Libya</option>
                    <option value="109">Liechtenstein</option>
                    <option value="110">Lithuania</option>
                    <option value="111">Luxembourg</option>
                    <option value="112">Macedonia</option>
                    <option value="113">Madagascar</option>
                    <option value="114">Malawi</option>
                    <option value="115">Malaysia</option>
                    <option value="116">Maldives</option>
                    <option value="117">Mali</option>
                    <option value="118">Malta</option>
                    <option value="119">Mauritania</option>
                    <option value="120">Mauritius</option>
                    <option value="121">Mexico</option>
                    <option value="122">Moldova</option>
                    <option value="123">Monaco</option>
                    <option value="124">Mongolia</option>
                    <option value="125">Montenegro</option>
                    <option value="126">Morocco</option>
                    <option value="127">Mozambique</option>
                    <option value="128">Myanmar</option>
                    <option value="129">Namibia</option>
                    <option value="130">Nepal</option>
                    <option value="131">Netherlands</option>
                    <option value="132">Netherlands Antilles</option>
                    <option value="133">New Caledonia</option>
                    <option value="134">New Zealand</option>
                    <option value="135">Nicaragua</option>
                    <option value="136">Niger</option>
                    <option value="137">Nigeria</option>
                    <option value="138">Niue</option>
                    <option value="139">Norfolk Island</option>
                    <option value="140">Northern Mariana Island</option>
                    <option value="141">Norway</option>
                    <option value="142">Oman</option>
                    <option value="143">Pakistan</option>
                    <option value="144">Palau</option>
                    <option value="145">Panama</option>
                    <option value="146">Papua New Guinea</option>
                    <option value="147">Paraguay</option>
                    <option value="148">Peru</option>
                    <option value="149">Philippines</option>
                    <option value="150">Poland</option>
                    <option value="151">Portugal</option>
                    <option value="152">Puerto Rico</option>
                    <option value="153">Qatar</option>
                    <option value="154">Republic of Korea</option>
                    <option value="155">Romania</option>
                    <option value="156">Russia</option>
                    <option value="157">Rwanda</option>
                    <option value="158">Saint Kitts and Nevis</option>
                    <option value="159">Saint Lucia</option>
                    <option value="160">Saint Vincent and the Grenadines</option>
                    <option value="161">Samoa</option>
                    <option value="162">San Marino</option>
                    <option value="163">Sao Tome and Principe</option>
                    <option value="164">Saudi Arabia</option>
                    <option value="165">Senegal</option>
                    <option value="166">Serbia</option>
                    <option value="167">Seychelles</option>
                    <option value="168">Sierra Leone</option>
                    <option value="169">Singapore</option>
                    <option value="170">Slovakia</option>
                    <option value="171">Slovenia</option>
                    <option value="172">Solomon Islands</option>
                    <option value="173">Somalia</option>
                    <option value="174">South Africa</option>
                    <option value="175">Spain</option>
                    <option value="176">Sri Lanka</option>
                    <option value="177">Suriname</option>
                    <option value="178">Swaziland</option>
                    <option value="179">Sweden</option>
                    <option value="180">Switzerland</option>
                    <option value="181">Taiwan</option>
                    <option value="182">Tajikistan</option>
                    <option value="183">Tanzania</option>
                    <option value="184">Thailand</option>
                    <option value="185">Timor Leste</option>
                    <option value="186">Togo</option>
                    <option value="187">Tonga</option>
                    <option value="188">Trinidad and Tobago</option>
                    <option value="189">Tunisia</option>
                    <option value="190">Turkey</option>
                    <option value="191">Turkmenistan</option>
                    <option value="192">Turks and Caicos Islands</option>
                    <option value="193">Tuvalu</option>
                    <option value="194">Uganda</option>
                    <option value="195">Ukraine</option>
                    <option value="196">United Arab Emirates</option>
                    <option value="197">United Kingdom</option>
                    <option value="198">USA</option>
                    <option value="199">Uruguay</option>
                    <option value="200">US Virgin Islands</option>
                    <option value="202">Uzbekistan</option>
                    <option value="203">Vanuatu</option>
                    <option value="204">Venezuela</option>
                    <option value="205" selected="selected">Vietnam</option>
                    <option value="206">West Bank</option>
                    <option value="207">Western Sahara</option>
                    <option value="208">Yemen</option>
                    <option value="209">Zambia</option>
                    <option value="210">Zimbabwe</option>
                </select>
                <div class="change">
                    <h1>CHANGE</h1>
                </div>
            </div>
            <div class="contact-list">
                <div class="row">
                    <div class="col-xs-12 col-sm-2">
                        <h4>Access, Inc. (Michigan)</h4>
                    </div>
                    <div class="col-xs-12 col-sm-2">
                        <div class="item">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i><span> Email Contact </span> </div>
                        <div class="item">
                            <i class="fa fa-phone" aria-hidden="true"></i><span>+1 248 616 9200</span></div>
                        <span>Fax  +1 248 616 8980</span>
                    </div>
                    <div class="col-xs-12 col-sm-3">
                        <h1>1409-G Allen Drive<br>
                            Troy Michigan 48083<br>
                            USA</h1>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <a>Product areas of focus:</a> <span class="unin">Uninterruptible Power Supplies (UPS), Power Distribution, Power Transfer Switches, Surge Protective Devices, Thermal Management, Integrated Solutions, Racks and Containment, Monitoring</span>
                    </div>
                </div>
            </div>
            <div class="submit">
                <a href="#" class="primary">more contacts</a>
            </div>
        </div>
    </div>
</div>