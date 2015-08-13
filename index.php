<?php
  session_start();
  
  // $_SESSION["code"]
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title>Unique and Meaningful Travel Experiences | Book Tours with Local Alike</title>
  <meta property="og:title" content="Unique and Meaningful Travel Experiences | Book Tours with Local Alike" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="http://lightningthunder.github.io/index.php" />
  <meta property="og:image" content="http://lightningthunder.github.io/img/kohyaonoi_people_1-graff.jpg" />
  <meta property="og:image" content="http://lightningthunder.github.io/img/kohyaonoi_scenery_1_credit-graff.jpg" />
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/la_global.css">
  <link rel="stylesheet" href="css/la_input.css">
  <link rel="stylesheet" href="css/la_cards.css">
  <link rel="stylesheet" href="css/la_external-privilege.css">
  <link rel="stylesheet" href="css/monkey_baby.css">
  <link rel="stylesheet" href="css/la_home.css">
  <!-- Hotjar Tracking Code for lightningthunder.github.io -->
<script>
	(function(h,o,t,j,a,r){
		h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
		h._hjSettings={hjid:56218,hjsv:5};
		a=o.getElementsByTagName('head')[0];
		r=o.createElement('script');r.async=1;
		r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
		a.appendChild(r);
	})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<script src="js/jquery.min.js"></script>
</head>
<body>
   
   <?php include("module/module_nav.php"); ?>
  <div class="container-fluid la_home-hero">
	<!-- <div class="row la_home-header">
	  <img class="la_home-header-logo" src="img/la_logo_script_salmon-on-transparent.png" alt="local alike logo" />
	</div> -->
	<div class="row la_home-hero-wrapper center-block vertical-center">
	  <h1 class="text-center h1">Let&#39;s Travel with Purpose</h1>
	  <h2 class="text-center">Book Unique Once-in-a-Lifetime Experiences Today</h2>
	  <div class="col-xs-12 col-lg-12 form-group home_country required">
		<div class="select-block clearfix">
			<select name="country" id="country-selector" autofocus="autofocus" autocorrect="off" autocomplete="off">
				<option value="" selected="selected" disabled>Select Country</option>
				<!-- <option value="Afghanistan" data-alternative-spellings="AF افغانستان">Afghanistan</option>
				<option value="Åland Islands" data-alternative-spellings="AX Aaland Aland" data-relevancy-booster="0.5">Aland Islands</option>
				<option value="Albania" data-alternative-spellings="AL">Albania</option>
				<option value="Algeria" data-alternative-spellings="DZ الجزائر">Algeria</option>
				<option value="American Samoa" data-alternative-spellings="AS" data-relevancy-booster="0.5">American Samoa</option>
				<option value="Andorra" data-alternative-spellings="AD" data-relevancy-booster="0.5">Andorra</option>
				<option value="Angola" data-alternative-spellings="AO">Angola</option>
				<option value="Anguilla" data-alternative-spellings="AI" data-relevancy-booster="0.5">Anguilla</option>
				<option value="Antarctica" data-alternative-spellings="AQ" data-relevancy-booster="0.5">Antarctica</option>
				<option value="Antigua And Barbuda" data-alternative-spellings="AG" data-relevancy-booster="0.5">Antigua And Barbuda</option>
				<option value="Argentina" data-alternative-spellings="AR">Argentina</option>
				<option value="Armenia" data-alternative-spellings="AM Հայաստան">Armenia</option>
				<option value="Aruba" data-alternative-spellings="AW" data-relevancy-booster="0.5">Aruba</option>
				<option value="Australia" data-alternative-spellings="AU" data-relevancy-booster="1.5">Australia</option>
				<option value="Austria" data-alternative-spellings="AT Österreich Osterreich Oesterreich ">Austria</option>
				<option value="Azerbaijan" data-alternative-spellings="AZ">Azerbaijan</option>
				<option value="Bahamas" data-alternative-spellings="BS">Bahamas</option>
				<option value="Bahrain" data-alternative-spellings="BH البحرين">Bahrain</option>
				<option value="Bangladesh" data-alternative-spellings="BD বাংলাদেশ" data-relevancy-booster="2">Bangladesh</option>
				<option value="Barbados" data-alternative-spellings="BB">Barbados</option>
				<option value="Belarus" data-alternative-spellings="BY Беларусь">Belarus</option>
				<option value="Belgium" data-alternative-spellings="BE België Belgie Belgien Belgique" data-relevancy-booster="1.5">Belgium</option>
				<option value="Belize" data-alternative-spellings="BZ">Belize</option>
				<option value="Benin" data-alternative-spellings="BJ">Benin</option>
				<option value="Bermuda" data-alternative-spellings="BM" data-relevancy-booster="0.5">Bermuda</option>
				<option value="Bhutan" data-alternative-spellings="BT भूटान">Bhutan</option>
				<option value="Bolivia" data-alternative-spellings="BO">Bolivia</option>
				<option value="Bonaire, Sint Eustatius and Saba" data-alternative-spellings="BQ">Bonaire, Sint Eustatius and Saba</option>
				<option value="Bosnia and Herzegovina" data-alternative-spellings="BA BiH Bosna i Hercegovina Босна и Херцеговина">Bosnia and Herzegovina</option>
				<option value="Botswana" data-alternative-spellings="BW">Botswana</option>
				<option value="Bouvet Island" data-alternative-spellings="BV">Bouvet Island</option>
				<option value="Brazil" data-alternative-spellings="BR Brasil" data-relevancy-booster="2">Brazil</option>
				<option value="British Indian Ocean Territory" data-alternative-spellings="IO">British Indian Ocean Territory</option>
				<option value="Brunei Darussalam" data-alternative-spellings="BN">Brunei Darussalam</option>
				<option value="Bulgaria" data-alternative-spellings="BG България">Bulgaria</option>
				<option value="Burkina Faso" data-alternative-spellings="BF">Burkina Faso</option>
				<option value="Burundi" data-alternative-spellings="BI">Burundi</option>
				<option value="Cambodia" data-alternative-spellings="KH កម្ពុជា">Cambodia</option>
				<option value="Cameroon" data-alternative-spellings="CM">Cameroon</option>
				<option value="Canada" data-alternative-spellings="CA" data-relevancy-booster="2">Canada</option>
				<option value="Cape Verde" data-alternative-spellings="CV Cabo">Cape Verde</option>
				<option value="Cayman Islands" data-alternative-spellings="KY" data-relevancy-booster="0.5">Cayman Islands</option>
				<option value="Central African Republic" data-alternative-spellings="CF">Central African Republic</option>
				<option value="Chad" data-alternative-spellings="TD تشاد‎ Tchad">Chad</option>
				<option value="Chile" data-alternative-spellings="CL">Chile</option>
				<option value="China" data-relevancy-booster="3.5" data-alternative-spellings="CN Zhongguo Zhonghua Peoples Republic 中国/中华">China</option>
				<option value="Christmas Island" data-alternative-spellings="CX" data-relevancy-booster="0.5">Christmas Island</option>
				<option value="Cocos (Keeling) Islands" data-alternative-spellings="CC" data-relevancy-booster="0.5">Cocos (Keeling) Islands</option>
				<option value="Colombia" data-alternative-spellings="CO">Colombia</option>
				<option value="Comoros" data-alternative-spellings="KM جزر القمر">Comoros</option>
				<option value="Congo" data-alternative-spellings="CG">Congo</option>
				<option value="Congo, the Democratic Republic of the" data-alternative-spellings="CD Congo-Brazzaville Repubilika ya Kongo">Congo, the Democratic Republic of the</option>
				<option value="Cook Islands" data-alternative-spellings="CK" data-relevancy-booster="0.5">Cook Islands</option>
				<option value="Costa Rica" data-alternative-spellings="CR">Costa Rica</option>
				<option value="Côte d'Ivoire" data-alternative-spellings="CI Cote dIvoire">Côte d'Ivoire</option>
				<option value="Croatia" data-alternative-spellings="HR Hrvatska">Croatia</option>
				<option value="Cuba" data-alternative-spellings="CU">Cuba</option>
				<option value="Curaçao" data-alternative-spellings="CW Curacao">Curaçao</option>
				<option value="Cyprus" data-alternative-spellings="CY Κύπρος Kýpros Kıbrıs">Cyprus</option>
				<option value="Czech Republic" data-alternative-spellings="CZ Česká Ceska">Czech Republic</option>
				<option value="Denmark" data-alternative-spellings="DK Danmark" data-relevancy-booster="1.5">Denmark</option>
				<option value="Djibouti" data-alternative-spellings="DJ جيبوتي‎ Jabuuti Gabuuti">Djibouti</option>
				<option value="Dominica" data-alternative-spellings="DM Dominique" data-relevancy-booster="0.5">Dominica</option>
				<option value="Dominican Republic" data-alternative-spellings="DO">Dominican Republic</option>
				<option value="Ecuador" data-alternative-spellings="EC">Ecuador</option>
				<option value="Egypt" data-alternative-spellings="EG" data-relevancy-booster="1.5">Egypt</option>
				<option value="El Salvador" data-alternative-spellings="SV">El Salvador</option>
				<option value="Equatorial Guinea" data-alternative-spellings="GQ">Equatorial Guinea</option>
				<option value="Eritrea" data-alternative-spellings="ER إرتريا ኤርትራ">Eritrea</option>
				<option value="Estonia" data-alternative-spellings="EE Eesti">Estonia</option>
				<option value="Ethiopia" data-alternative-spellings="ET ኢትዮጵያ">Ethiopia</option>
				<option value="Falkland Islands (Malvinas)" data-alternative-spellings="FK" data-relevancy-booster="0.5">Falkland Islands (Malvinas)</option>
				<option value="Faroe Islands" data-alternative-spellings="FO Føroyar Færøerne" data-relevancy-booster="0.5">Faroe Islands</option>
				<option value="Fiji" data-alternative-spellings="FJ Viti फ़िजी">Fiji</option>
				<option value="Finland" data-alternative-spellings="FI Suomi">Finland</option>
				<option value="France" data-alternative-spellings="FR République française" data-relevancy-booster="2.5">France</option>
				<option value="French Guiana" data-alternative-spellings="GF">French Guiana</option>
				<option value="French Polynesia" data-alternative-spellings="PF Polynésie française">French Polynesia</option>
				<option value="French Southern Territories" data-alternative-spellings="TF">French Southern Territories</option>
				<option value="Gabon" data-alternative-spellings="GA République Gabonaise">Gabon</option>
				<option value="Gambia" data-alternative-spellings="GM">Gambia</option>
				<option value="Georgia" data-alternative-spellings="GE საქართველო">Georgia</option>
				<option value="Germany" data-alternative-spellings="DE Bundesrepublik Deutschland" data-relevancy-booster="3">Germany</option>
				<option value="Ghana" data-alternative-spellings="GH">Ghana</option>
				<option value="Gibraltar" data-alternative-spellings="GI" data-relevancy-booster="0.5">Gibraltar</option>
				<option value="Greece" data-alternative-spellings="GR Ελλάδα" data-relevancy-booster="1.5">Greece</option>
				<option value="Greenland" data-alternative-spellings="GL grønland" data-relevancy-booster="0.5">Greenland</option>
				<option value="Grenada" data-alternative-spellings="GD">Grenada</option>
				<option value="Guadeloupe" data-alternative-spellings="GP">Guadeloupe</option>
				<option value="Guam" data-alternative-spellings="GU">Guam</option>
				<option value="Guatemala" data-alternative-spellings="GT">Guatemala</option>
				<option value="Guernsey" data-alternative-spellings="GG" data-relevancy-booster="0.5">Guernsey</option>
				<option value="Guinea" data-alternative-spellings="GN">Guinea</option>
				<option value="Guinea-Bissau" data-alternative-spellings="GW">Guinea-Bissau</option>
				<option value="Guyana" data-alternative-spellings="GY">Guyana</option>
				<option value="Haiti" data-alternative-spellings="HT">Haiti</option>
				<option value="Heard Island and McDonald Islands" data-alternative-spellings="HM">Heard Island and McDonald Islands</option>
				<option value="Holy See (Vatican City State)" data-alternative-spellings="VA" data-relevancy-booster="0.5">Holy See (Vatican City State)</option>
				<option value="Honduras" data-alternative-spellings="HN">Honduras</option>
				<option value="Hong Kong" data-alternative-spellings="HK 香港">Hong Kong</option>
				<option value="Hungary" data-alternative-spellings="HU Magyarország">Hungary</option>
				<option value="Iceland" data-alternative-spellings="IS Island">Iceland</option>
				<option value="India" data-alternative-spellings="IN भारत गणराज्य Hindustan" data-relevancy-booster="3">India</option>
				<option value="Indonesia" data-alternative-spellings="ID" data-relevancy-booster="2">Indonesia</option>
				<option value="Iran, Islamic Republic of" data-alternative-spellings="IR ایران">Iran, Islamic Republic of</option>
				<option value="Iraq" data-alternative-spellings="IQ العراق‎">Iraq</option>
				<option value="Ireland" data-alternative-spellings="IE Éire" data-relevancy-booster="1.2">Ireland</option>
				<option value="Isle of Man" data-alternative-spellings="IM" data-relevancy-booster="0.5">Isle of Man</option>
				<option value="Israel" data-alternative-spellings="IL إسرائيل ישראל">Israel</option>
				<option value="Italy" data-alternative-spellings="IT Italia" data-relevancy-booster="2">Italy</option>
				<option value="Jamaica" data-alternative-spellings="JM">Jamaica</option>
				<option value="Japan" data-alternative-spellings="JP Nippon Nihon 日本" data-relevancy-booster="2.5">Japan</option>
				<option value="Jersey" data-alternative-spellings="JE" data-relevancy-booster="0.5">Jersey</option>
				<option value="Jordan" data-alternative-spellings="JO الأردن">Jordan</option>
				<option value="Kazakhstan" data-alternative-spellings="KZ Қазақстан Казахстан">Kazakhstan</option>
				<option value="Kenya" data-alternative-spellings="KE">Kenya</option>
				<option value="Kiribati" data-alternative-spellings="KI">Kiribati</option>
				<option value="Korea, Democratic People's Republic of" data-alternative-spellings="KP North Korea">Korea, Democratic People's Republic of</option>
				<option value="Korea, Republic of" data-alternative-spellings="KR South Korea" data-relevancy-booster="1.5">Korea, Republic of</option>
				<option value="Kuwait" data-alternative-spellings="KW الكويت">Kuwait</option>
				<option value="Kyrgyzstan" data-alternative-spellings="KG Кыргызстан">Kyrgyzstan</option>
				<option value="Lao People's Democratic Republic" data-alternative-spellings="LA">Lao People's Democratic Republic</option>
				<option value="Latvia" data-alternative-spellings="LV Latvija">Latvia</option>
				<option value="Lebanon" data-alternative-spellings="LB لبنان">Lebanon</option>
				<option value="Lesotho" data-alternative-spellings="LS">Lesotho</option>
				<option value="Liberia" data-alternative-spellings="LR">Liberia</option>
				<option value="Libyan Arab Jamahiriya" data-alternative-spellings="LY ليبيا">Libyan Arab Jamahiriya</option>
				<option value="Liechtenstein" data-alternative-spellings="LI">Liechtenstein</option>
				<option value="Lithuania" data-alternative-spellings="LT Lietuva">Lithuania</option>
				<option value="Luxembourg" data-alternative-spellings="LU">Luxembourg</option>
				<option value="Macao" data-alternative-spellings="MO">Macao</option>
				<option value="Macedonia, The Former Yugoslav Republic Of" data-alternative-spellings="MK Македонија">Macedonia, The Former Yugoslav Republic Of</option>
				<option value="Madagascar" data-alternative-spellings="MG Madagasikara">Madagascar</option>
				<option value="Malawi" data-alternative-spellings="MW">Malawi</option> -->
				<option value="Malaysia" data-alternative-spellings="MY">Malaysia</option>
				<!-- <option value="Maldives" data-alternative-spellings="MV">Maldives</option>
				<option value="Mali" data-alternative-spellings="ML">Mali</option>
				<option value="Malta" data-alternative-spellings="MT">Malta</option>
				<option value="Marshall Islands" data-alternative-spellings="MH" data-relevancy-booster="0.5">Marshall Islands</option>
				<option value="Martinique" data-alternative-spellings="MQ">Martinique</option>
				<option value="Mauritania" data-alternative-spellings="MR الموريتانية">Mauritania</option>
				<option value="Mauritius" data-alternative-spellings="MU">Mauritius</option>
				<option value="Mayotte" data-alternative-spellings="YT">Mayotte</option>
				<option value="Mexico" data-alternative-spellings="MX Mexicanos" data-relevancy-booster="1.5">Mexico</option>
				<option value="Micronesia, Federated States of" data-alternative-spellings="FM">Micronesia, Federated States of</option>
				<option value="Moldova, Republic of" data-alternative-spellings="MD">Moldova, Republic of</option>
				<option value="Monaco" data-alternative-spellings="MC">Monaco</option>
				<option value="Mongolia" data-alternative-spellings="MN Mongγol ulus Монгол улс">Mongolia</option>
				<option value="Montenegro" data-alternative-spellings="ME">Montenegro</option>
				<option value="Montserrat" data-alternative-spellings="MS" data-relevancy-booster="0.5">Montserrat</option>
				<option value="Morocco" data-alternative-spellings="MA المغرب">Morocco</option>
				<option value="Mozambique" data-alternative-spellings="MZ Moçambique">Mozambique</option>
				<option value="Myanmar" data-alternative-spellings="MM">Myanmar</option>
				<option value="Namibia" data-alternative-spellings="NA Namibië">Namibia</option>
				<option value="Nauru" data-alternative-spellings="NR Naoero" data-relevancy-booster="0.5">Nauru</option>
				<option value="Nepal" data-alternative-spellings="NP नेपाल">Nepal</option>
				<option value="Netherlands" data-alternative-spellings="NL Holland Nederland" data-relevancy-booster="1.5">Netherlands</option>
				<option value="New Caledonia" data-alternative-spellings="NC" data-relevancy-booster="0.5">New Caledonia</option>
				<option value="New Zealand" data-alternative-spellings="NZ Aotearoa">New Zealand</option>
				<option value="Nicaragua" data-alternative-spellings="NI">Nicaragua</option>
				<option value="Niger" data-alternative-spellings="NE Nijar">Niger</option>
				<option value="Nigeria" data-alternative-spellings="NG Nijeriya Naíjíríà" data-relevancy-booster="1.5">Nigeria</option>
				<option value="Niue" data-alternative-spellings="NU" data-relevancy-booster="0.5">Niue</option>
				<option value="Norfolk Island" data-alternative-spellings="NF" data-relevancy-booster="0.5">Norfolk Island</option>
				<option value="Northern Mariana Islands" data-alternative-spellings="MP" data-relevancy-booster="0.5">Northern Mariana Islands</option>
				<option value="Norway" data-alternative-spellings="NO Norge Noreg" data-relevancy-booster="1.5">Norway</option>
				<option value="Oman" data-alternative-spellings="OM عمان">Oman</option>
				<option value="Pakistan" data-alternative-spellings="PK پاکستان" data-relevancy-booster="2">Pakistan</option>
				<option value="Palau" data-alternative-spellings="PW" data-relevancy-booster="0.5">Palau</option>
				<option value="Palestinian Territory, Occupied" data-alternative-spellings="PS فلسطين">Palestinian Territory, Occupied</option>
				<option value="Panama" data-alternative-spellings="PA">Panama</option>
				<option value="Papua New Guinea" data-alternative-spellings="PG">Papua New Guinea</option>
				<option value="Paraguay" data-alternative-spellings="PY">Paraguay</option>
				<option value="Peru" data-alternative-spellings="PE">Peru</option> -->
				<option value="Philippines" data-alternative-spellings="PH Pilipinas" data-relevancy-booster="1.5">Philippines</option>
				<!-- <option value="Pitcairn" data-alternative-spellings="PN" data-relevancy-booster="0.5">Pitcairn</option>
				<option value="Poland" data-alternative-spellings="PL Polska" data-relevancy-booster="1.25">Poland</option>
				<option value="Portugal" data-alternative-spellings="PT Portuguesa" data-relevancy-booster="1.5">Portugal</option>
				<option value="Puerto Rico" data-alternative-spellings="PR">Puerto Rico</option>
				<option value="Qatar" data-alternative-spellings="QA قطر">Qatar</option>
				<option value="Réunion" data-alternative-spellings="RE Reunion">Réunion</option>
				<option value="Romania" data-alternative-spellings="RO Rumania Roumania România">Romania</option>
				<option value="Russian Federation" data-alternative-spellings="RU Rossiya Российская Россия" data-relevancy-booster="2.5">Russian Federation</option>
				<option value="Rwanda" data-alternative-spellings="RW">Rwanda</option>
				<option value="Saint Barthélemy" data-alternative-spellings="BL St. Barthelemy">Saint Barthélemy</option>
				<option value="Saint Helena" data-alternative-spellings="SH St.">Saint Helena</option>
				<option value="Saint Kitts and Nevis" data-alternative-spellings="KN St.">Saint Kitts and Nevis</option>
				<option value="Saint Lucia" data-alternative-spellings="LC St.">Saint Lucia</option>
				<option value="Saint Martin (French Part)" data-alternative-spellings="MF St.">Saint Martin (French Part)</option>
				<option value="Saint Pierre and Miquelon" data-alternative-spellings="PM St.">Saint Pierre and Miquelon</option>
				<option value="Saint Vincent and the Grenadines" data-alternative-spellings="VC St.">Saint Vincent and the Grenadines</option>
				<option value="Samoa" data-alternative-spellings="WS">Samoa</option>
				<option value="San Marino" data-alternative-spellings="SM RSM Repubblica">San Marino</option>
				<option value="Sao Tome and Principe" data-alternative-spellings="ST">Sao Tome and Principe</option>
				<option value="Saudi Arabia" data-alternative-spellings="SA السعودية">Saudi Arabia</option>
				<option value="Senegal" data-alternative-spellings="SN Sénégal">Senegal</option>
				<option value="Serbia" data-alternative-spellings="RS Србија Srbija">Serbia</option>
				<option value="Seychelles" data-alternative-spellings="SC" data-relevancy-booster="0.5">Seychelles</option>
				<option value="Sierra Leone" data-alternative-spellings="SL">Sierra Leone</option>
				<option value="Singapore" data-alternative-spellings="SG Singapura  சிங்கப்பூர் குடியரசு 新加坡共和国">Singapore</option>
				<option value="Sint Maarten (Dutch Part)" data-alternative-spellings="SX">Sint Maarten (Dutch Part)</option>
				<option value="Slovakia" data-alternative-spellings="SK Slovenská Slovensko">Slovakia</option>
				<option value="Slovenia" data-alternative-spellings="SI Slovenija">Slovenia</option>
				<option value="Solomon Islands" data-alternative-spellings="SB">Solomon Islands</option>
				<option value="Somalia" data-alternative-spellings="SO الصومال">Somalia</option>
				<option value="South Africa" data-alternative-spellings="ZA RSA Suid-Afrika">South Africa</option>
				<option value="South Georgia and the South Sandwich Islands" data-alternative-spellings="GS">South Georgia and the South Sandwich Islands</option>
				<option value="South Sudan" data-alternative-spellings="SS">South Sudan</option>
				<option value="Spain" data-alternative-spellings="ES España" data-relevancy-booster="2">Spain</option>
				<option value="Sri Lanka" data-alternative-spellings="LK ශ්‍රී ලංකා இலங்கை Ceylon">Sri Lanka</option>
				<option value="Sudan" data-alternative-spellings="SD السودان">Sudan</option>
				<option value="Suriname" data-alternative-spellings="SR शर्नम् Sarnam Sranangron">Suriname</option>
				<option value="Svalbard and Jan Mayen" data-alternative-spellings="SJ" data-relevancy-booster="0.5">Svalbard and Jan Mayen</option>
				<option value="Swaziland" data-alternative-spellings="SZ weSwatini Swatini Ngwane">Swaziland</option>
				<option value="Sweden" data-alternative-spellings="SE Sverige" data-relevancy-booster="1.5">Sweden</option>
				<option value="Switzerland" data-alternative-spellings="CH Swiss Confederation Schweiz Suisse Svizzera Svizra" data-relevancy-booster="1.5">Switzerland</option>
				<option value="Syrian Arab Republic" data-alternative-spellings="SY Syria سورية">Syrian Arab Republic</option> -->
				<option value="Taiwan, Province of China" data-alternative-spellings="TW 台灣 臺灣">Taiwan, Province of China</option>
				<!-- <option value="Tajikistan" data-alternative-spellings="TJ Тоҷикистон Toçikiston">Tajikistan</option>
				<option value="Tanzania, United Republic of" data-alternative-spellings="TZ">Tanzania, United Republic of</option> -->
				<option value="Thailand" data-alternative-spellings="TH ประเทศไทย Prathet Thai">Thailand</option>
				<!-- <option value="Timor-Leste" data-alternative-spellings="TL">Timor-Leste</option>
				<option value="Togo" data-alternative-spellings="TG Togolese">Togo</option>
				<option value="Tokelau" data-alternative-spellings="TK" data-relevancy-booster="0.5">Tokelau</option>
				<option value="Tonga" data-alternative-spellings="TO">Tonga</option>
				<option value="Trinidad and Tobago" data-alternative-spellings="TT">Trinidad and Tobago</option>
				<option value="Tunisia" data-alternative-spellings="TN تونس">Tunisia</option>
				<option value="Turkey" data-alternative-spellings="TR Türkiye Turkiye">Turkey</option>
				<option value="Turkmenistan" data-alternative-spellings="TM Türkmenistan">Turkmenistan</option>
				<option value="Turks and Caicos Islands" data-alternative-spellings="TC" data-relevancy-booster="0.5">Turks and Caicos Islands</option>
				<option value="Tuvalu" data-alternative-spellings="TV" data-relevancy-booster="0.5">Tuvalu</option>
				<option value="Uganda" data-alternative-spellings="UG">Uganda</option>
				<option value="Ukraine" data-alternative-spellings="UA Ukrayina Україна">Ukraine</option>
				<option value="United Arab Emirates" data-alternative-spellings="AE UAE الإمارات">United Arab Emirates</option>
				<option value="United Kingdom" data-alternative-spellings="GB Great Britain England UK Wales Scotland Northern Ireland" data-relevancy-booster="2.5">United Kingdom</option>
				<option value="United States" data-relevancy-booster="3.5" data-alternative-spellings="US USA United States of America">United States</option>
				<option value="United States Minor Outlying Islands" data-alternative-spellings="UM">United States Minor Outlying Islands</option>
				<option value="Uruguay" data-alternative-spellings="UY">Uruguay</option>
				<option value="Uzbekistan" data-alternative-spellings="UZ Ўзбекистон O'zbekstan O‘zbekiston">Uzbekistan</option>
				<option value="Vanuatu" data-alternative-spellings="VU">Vanuatu</option>
				<option value="Venezuela" data-alternative-spellings="VE">Venezuela</option>
				<option value="Vietnam" data-alternative-spellings="VN Việt Nam" data-relevancy-booster="1.5">Vietnam</option>
				<option value="Virgin Islands, British" data-alternative-spellings="VG" data-relevancy-booster="0.5">Virgin Islands, British</option>
				<option value="Virgin Islands, U.S." data-alternative-spellings="VI" data-relevancy-booster="0.5">Virgin Islands, U.S.</option>
				<option value="Wallis and Futuna" data-alternative-spellings="WF" data-relevancy-booster="0.5">Wallis and Futuna</option>
				<option value="Western Sahara" data-alternative-spellings="EH لصحراء الغربية">Western Sahara</option>
				<option value="Yemen" data-alternative-spellings="YE اليمن">Yemen</option>
				<option value="Zambia" data-alternative-spellings="ZM">Zambia</option>
				<option value="Zimbabwe" data-alternative-spellings="ZW">Zimbabwe</option> -->
			  </select>
		</div>
		<div class="select-block clearfix">
		  <select name="town" placeholder="Select Town">
			<option selected disabled>Select Town</option>
			<option value="Bangkok" data-alternative-spellings="">Bangkok</option>
			<option value="Chiang Mai" data-alternative-spellings="Chiang Mai Chiang Rai">Chiang Mai</option>
			<option value="Phuket" data-alternative-spellings="">Nakhon Si Thammarat</option>
			<option value="Phuket" data-alternative-spellings="Phuket Koh Yao Pang Nga">Phuket</option>
			<option value="Trat" data-alternative-spellings="Huai Raeng">Trat</option>
			<option value="All_Thailand" data-alternative-spellings="All">All in Thailand</option>
		  </select>
		</div>
		<button onclick="window.location.href='results.php'" class="btn btn-default btn-primary btn-search-now center-block">
		  <span>Search</span> <i class="fa fa-search"></i>
		</button>
	  </div>

	  <div class="col-xs-12 col-lg-12 what-is">
		<!-- <p class="lead text-center">Local Alike is a community based tourism marketplace. <br>All your spendings goes to support locals.</p> -->
		<button class="btn btn-ghost center-block" data-toggle="modal" data-target="#basicModal_howitworks" href="#">How does Local Alike work?</button> 
		<div class="modal fade" id="basicModal_howitworks" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog la_howitworks_modal">
			<div class="modal-content">
			  <div class="modal-body">
				<div class="col-xs-12 col-md-4"></div>
				<div class="col-xs-12 col-md-4">
					<iframe style="width: 100%" src="http://giphy.com/embed/rC5aQt1aiRNlK" width="480" height="366" frameBorder="0" style="max-width: 100%" class="giphy-embed" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					<p class="text-center" style="color:#fff">lol, get out of here</p>
				</div>
				<div class="col-xs-12 col-md-4"></div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default btn-warning btn-sm" data-dismiss="modal">Close this cat gif <span class="glyphicon glyphicon-remove"</button>
			  </div>
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
	  </div> 
	</div>
  </div>

  <!-- popular carousels -->
  <div class="container promo">
	<div class="row">
	  <div class="col-xs-12 col-sm-6 col-lg-6 padding-top-20">
		<div class="la_promo-carousel la_popular-day">
		  <div id="promo-carousel" class="carousel slide" data-interval="600000" data-ride="carousel" data-pause="hover">
			<!-- Carousel indicators -->
			  <ol class="carousel-indicators">
				  <li data-target="#promo-carousel" data-slide-to="0" class="active"></li>
				  <li data-target="#promo-carousel" data-slide-to="1"></li>
				  <li data-target="#promo-carousel" data-slide-to="2"></li>
			  </ol>   

			  <!-- Carousel tag -->
			  <span class="promo-type">
				City Tours
			  </span>

			  <!-- Wrapper for carousel items -->
			  <div class="carousel-inner card">
				  <div onclick="window.location.href='details.php'" class="active item" id="day0001">
					<div class="slideshow">
					  <div class="slideshow-bg" style="background-image:url('img/ltbkk_people_2.jpg');">
					  </div>
					  <div class="slideshow-overlay">
						
					  </div>
					  <span class="price">
						1200
					  </span>
					</div>
					<!-- <span class="price">2500</span> -->
					<div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">Lost Treasure in Bangkok: Explore Hidden Gems</h2>
							<span class="item_geo">Kudeejeen Community</span>
							<span class="item_geo_2">Bangkok, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">One Day Tour</span>
						  <span class="item_theme">Active and Fit, Culture and Religion</span>
						</div>
					</div>
				  </div>
				  <div class="item" id="day0002">
					  <div class="slideshow">
						  <div class="slideshow-bg" style="background-image:url('img/huatung_scenery_3.jpg');">
						  </div>
						  <div class="slideshow-overlay">
							
						  </div>
						  <span class="price">
							1200
						  </span>
						</div>
					  <div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">A Day as an Artisan in Chiang Mai</h2>
							<span class="item_geo">Wua Lai Community</span>
							<span class="item_geo_2">Chiang Mai, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">One Day Tour</span>
						  <span class="item_theme">Active and Fit, Culture and Religion</span>
						</div>
					</div>
				  </div>
				  <div class="item" id="day0003">
					  <div class="slideshow">
						  <div class="slideshow-bg" style="background-image:url('img/bangplub_food_7.jpg');">
						  </div>
						  <div class="slideshow-overlay">
							
						  </div>
						  <span class="price">
							1200
						  </span>
						</div>
					  <div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">Bangkok 360: Travel and Eat Like a Local</h2>
							<span class="item_geo">Multiple Communities</span>
							<span class="item_geo_2">Bangkok, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">One Day Tour</span>
						  <span class="item_theme">Active and Fit, Culture and Religion</span>
						</div>
					</div>
				  </div>
			  </div>
			  <!-- Carousel controls -->
			  <a class="carousel-control left" href="#promo-carousel" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="carousel-control right" href="#promo-carousel" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
		  </div>
		</div>
	  </div>

	  <div class="col-xs-12 col-sm-6 col-lg-6 padding-top-20">
		<div class="la_promo-carousel la_popular-overnight">
		  <div id="promo-carousel-2" class="carousel slide" data-interval="50000" data-ride="carousel" data-pause="hover">
			<!-- Carousel indicators -->
			  <ol class="carousel-indicators">
				  <li data-target="#promo-carousel-2" data-slide-to="0" class="active"></li>
				  <li data-target="#promo-carousel-2" data-slide-to="1"></li>
				  <li data-target="#promo-carousel-2" data-slide-to="2"></li>
			  </ol>   

			   <!-- Carousel tag -->
			  <span class="promo-type">
				#Culture #Religion
			  </span>


			  <!-- Wrapper for carousel items -->
			  <div class="carousel-inner card">
				  <div class="active item" id="ov0001">
					 <div class="slideshow">
					  <div class="slideshow-bg" style="background-image:url('img/promlok_scenery_4.jpg');">
					  </div>
					  <div class="slideshow-overlay">
						
					  </div>
					  <span class="price">
						1200
					  </span>
					</div>
					<div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">Explore the Cave Temple of Prom Lok</h2>
							<span class="item_geo">Prom Lok Village</span>
							<span class="item_geo_2">Nakhon Si Thammarat, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">Half Day Tour</span>
						  <span class="item_theme">Culture and Religion</span>
						</div>
					</div>
				  </div>
				  <div class="item" id="ov0002">
					  <div class="slideshow">
						  <div class="slideshow-bg" style="background-image:url('img/huairaeng_people_1.jpg');">
						  </div>
						  <div class="slideshow-overlay">
							
						  </div>
						  <span class="price">
							1200
						  </span>
						</div>
					  <div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">Thai Cooking Class and Tour in Trat Province</h2>
							<span class="item_geo">Huai Raeng Village</span>
							<span class="item_geo_2">Trat, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">3D2N Tour</span>
						  <span class="item_theme">Culture and Religion</span>
						</div>
					</div>
				  </div>
				  <div class="item" id="ov0003">
					  <div class="slideshow">
						  <div class="slideshow-bg" style="background-image:url('img/kohyaonoi_people_1_credit-graff.jpg');">
						  </div>
						  <div class="slideshow-overlay">
							
						  </div>
						  <span class="price">
							1200
						  </span>
						</div>
					  <div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">Make Art and Make Merit near Bangkok</h2>
							<span class="item_geo">Hua Takay Community</span>
							<span class="item_geo_2">Bangkok, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">Half Day Tour</span>
						  <span class="item_theme">Culture and Religion</span>
						</div>
					</div>
				  </div>
			  </div>
			  <!-- Carousel controls -->
			  <a class="carousel-control left" href="#promo-carousel-2" data-slide="prev">
				  <span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="carousel-control right" href="#promo-carousel-2" data-slide="next">
				  <span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
		  </div>
		</div>
	  </div>
	</div>
  </div>

  <!-- ais module -->
 	<div class="container padding-top-20">
		<div class="row promo external-asset">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<?php include("module/module_ais.php"); ?>
			</div>
		</div>
	</div>
  <!-- end ais module -->

  <!-- monkey business -->
  <div class="container monkey_container padding-top-20">
	<div class="row promo deals">
	  <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<div class="content la_hot-deals">
		  <!-- Carousel tag -->
		  <span class="promo-type">
			Hot deal this week
		  </span>
		  <h2>
			20% off all tours in Chiang Mai
		  </h2>
		  <p class="lead">
			Discount applied at checkout. Use LALAUNCH15 redeem discount. 
		  </p>
		  <p><small>Terms and conditions apply. Deals are not stackable, only one deal can be applied per transaction.</small></p>
		  <a href="results.php" class="btn btn-primary btn-sm">View all Chiang Mai tours</a>
		</div>
	  </div>

	  <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 no-side-padding">
		<div class="carousel la_monkey_carousel_promonkey slide" id="monkey_baby">
		<div class="carousel-inner">
		  <div class="item active">
			<a href="details.php">
				<div class="col-xs-12 col-sm-6 col-md-4 monkey-card">
					<div class="slideshow">
					  <div class="slideshow-bg" style="background-image:url('img/huatung_people_host.jpg');">
					  </div>
					  <div class="slideshow-overlay">
						
					  </div>
					  <div class="promo_price">   
						<span class="price_before">5000</span>
						<span class="price">4000</span>
					</div>
					</div>
					<div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">Volunteer and Build a Check Dam at Hill Tribe Village</h2>
							<span class="item_geo">Hua Tung Community</span>
							<span class="item_geo_2">Chiang Mai, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">One Day Tour</span>
						  <span class="item_theme">Active and Fit</span>
						</div>
					</div>
				</div>
			</a>
		  </div>
		  <div class="item">
			<a href="#">
				<div class="col-xs-12 col-sm-6 col-md-4 monkey-card">
					
					<div class="slideshow">
					  <div class="slideshow-bg" style="background-image:url('img/hloyo_people_2.jpg');">
					  </div>
					  <div class="slideshow-overlay">
						
					  </div>
					  <div class="promo_price">   
						<span class="price_before">5000</span>
						<span class="price">4000</span>
					</div>
					</div>
					<div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">Learn Northern Thai Cooking and Art of Foraging</h2>
							<span class="item_geo">Hua Tung Community</span>
							<span class="item_geo_2">Chiang Mai, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">Half Day Tour</span>
						  <span class="item_theme">Culture and Religion</span>
						</div>
					</div>
				</div>
			</a>
		  </div>
		  <div class="item">
			<a href="#">
				<div class="col-xs-12 col-sm-6 col-md-4 monkey-card">
					<div class="slideshow">
					  <div class="slideshow-bg" style="background-image:url('img/maekampong_people_1.jpg');">
					  </div>
					  <div class="slideshow-overlay">
						
					  </div>
					  <div class="promo_price">   
						<span class="price_before">5000</span>
						<span class="price">4000</span>
					</div>
					</div>
					<div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">Hike and Camp on the Hills of Mae Kampong</h2>
							<span class="item_geo">Mae Kampong Village</span>
							<span class="item_geo_2">Chiang Mai, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">3D2N Tour</span>
						  <span class="item_theme">Active and Fit</span>
						</div>
					</div>
				</div>
			</a>
		  </div>
		  <div class="item">
			<a href="#">
				<div class="col-xs-12 col-sm-6 col-md-4 monkey-card">
					<div class="slideshow">
					  <div class="slideshow-bg" style="background-image:url('img/promlok_scenery_4.jpg');">
					  </div>
					  <div class="slideshow-overlay">
						
					  </div>
					  <div class="promo_price">   
						<span class="price_before">5000</span>
						<span class="price">4000</span>
					</div>
					</div>
					<div class="carousel-caption">
						<div class="content">
							<h2 class="item_name" max-char="45">All Inclusive Hill Tribe Experience</h2>
							<span class="item_geo">Hloyo Village</span>
							<span class="item_geo_2">Chiang Mai, Thailand</span>
						</div>
						<div class="footer">
						  <span class="item_duration">5D4N</span>
						  <span class="item_theme">Culture and Religion</span>
						</div>
					</div>
				</div>
			</a>
		  </div>
		</div>
		<a class="left carousel-control" href="#monkey_baby" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
		<a class="right carousel-control" href="#monkey_baby" data-slide="next"><i class="fa fa-chevron-right"></i></a>
	  </div>
	</div>
  </div>
</div>

 

  <div class="container cta padding-bottom-20">
	<div class="row">
	  <div class="col-xs-12 col-md-4 col-lg-4">
		<div class="la_cta-box" id="mktg-1">
		  <div class="content text-center">
			<h3>What is Community Based Tourism?</h3>
		  </div>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-4 col-lg-4">
		<div class="la_cta-box" id="mktg-2">
		  <div class="content text-center">
			<h3>Frequenty Asked Questions</h3>
		  </div>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-4 col-lg-4">
		<div class="la_cta-box" id="mktg-3">
		  <div class="content text-center">
			<h3>Our Sustainability Standards</h3>
		  </div>
		</div>
	  </div>  
	</div>
  </div>

  <!-- footer -->
  <div class="container-fluid global-footer-wrap">
	<div class="row global-footer center-block text-left">
	  <div class="col-xs-12 no-side-padding">
		<ul class="list-inline text-left">
		  <li><img class="la-footer-logo" src="img/la_logo_script_salmon-on-transparent.png" alt="local alike logo" /></li>
		  <li>Don't judge me, I'm just a footer.</li>
		</ul>
	  </div>
	</div>
  </div>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.dotdotdot.min.js"></script>
  <script src="js/jquery.touchSwipe.min.js"></script>
  <script>

	$(document).ready(ellipsizeText);        // Plugin must have been working flawles inhere as described in documentation.
	window.setTimeout(ellipsizeText, 0);   // Just for any case.
	window.setTimeout(ellipsizeText, 0);   // Maybe user didn't saw it flickering.
	$(window).load(ellipsizeText);           // Oh hell! the images are loading so not all containers are yet on their places. We wait on them..
	function ellipsizeText()
	{
		$(".carousel-caption p").dotdotdot({
			watch: true
		});

</script>

<script>
$(document).ready(function() { 

	var previousScroll = 0,
	headerOrgOffset = $('#global-header').height();

	$('#global-header-wrap').height($('#global-header').height());

	$(window).scroll(function () {
	  var currentScroll = $(this).scrollTop();
	  if (currentScroll > headerOrgOffset) {
		if (currentScroll > previousScroll) {
		  $('#global-header-wrap').css('top','-50px');
		} else {
		  $('#global-header-wrap').css('top','0px');
		}
	  } 
	  previousScroll = currentScroll;
	}); 

	//Enable swiping...
	// $(".carousel-inner").swipe( {
	//     //Generic swipe handler for all directions
	//     swipeLeft:function(event, direction, distance, duration, fingerCount) {
	//         $(this).parent().carousel('next'); 
	//     },
	//     swipeRight: function() {
	//         $(this).parent().carousel('prev'); 
	//     },
	//     //Default is 75px, set to 0 for demo so any distance triggers swipe
	//     threshold:0
	// });
});
</script>

<script>

	(function(){
  // setup your carousels as you normally would using JS
  // or via data attributes according to the documentation
  // http://getbootstrap.com/javascript/#carousel
  $('#monkey_baby').carousel({ interval: 600000 });
	}());

	(function(){
	  $('.la_monkey_carousel_promonkey .item').each(function(){
		var itemToClone = $(this);

		for (var i=1;i<3;i++) {
		  itemToClone = itemToClone.next();

		  // wrap around if at end of item collection
		  if (!itemToClone.length) {
			itemToClone = $(this).siblings(':first');
		  }

		  // grab item, clone, add marker class, add to collection
		  itemToClone.children(':first-child').clone()
			.addClass("cloneditem-"+(i))
			.appendTo($(this));
		}
	  });
	}());

  </script>
</body>
</html>
