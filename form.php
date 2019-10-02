<title>台德建交連署書</title>
<?php
include 'style.html';
$timestamp = 'timestamp';
?>

<body>
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title">
            ──台德建交連署表單──
        </div>
        <div class="m-b-md">
            <form name="form1" action="https://epetitionen.bundestag.de/content/epet/registrieren.danke.html" method="post">
                <input type="hidden" name="timestamp" value="<?=$timestamp?>">
                <p>信箱：<input type="text" name="email"></p>
                <p>密碼：<input type="password" name="passwort">&nbsp;確認密碼：<input type="password" name="passwort_wiederholen"></p>
                <div class="warning">
                    <p>*您的密碼必須至少8個字符長</p>
                    <p>*它必須至少包含一個大寫和小寫字母以及一個數字或特殊字符（例如_＃@ * + ?!-$）</p>
                </div>

                <p>--請輸入英文拼音--&nbsp;&nbsp</p>
                姓：<input size="3" type="text" name="nachname">&nbsp;名：<input size="5" type="text" name="vorname"></p>
                <p>暱稱(非必填)：<input type="text" name="pseudonym"></p>
                <p>----------------------</p>
                <p>國家：<select name="land" id="land">

                    <option value="">Bitte wählen Sie Ihr Land hier aus!</option>

                    <option value="AD">AD - Andorra</option>

                    <option value="AE">AE - Vereinigte Arabische Emirate</option>

                    <option value="AF">AF - Afghanistan</option>

                    <option value="AG">AG - Antigua und Barbuda</option>

                    <option value="AI">AI - Anguilla</option>

                    <option value="AL">AL - Albanien</option>

                    <option value="AM">AM - Armenien</option>

                    <option value="AO">AO - Angola</option>

                    <option value="AQ">AQ - Antarktis</option>

                    <option value="AR">AR - Argentinien</option>

                    <option value="AS">AS - Samoa-Amerikanisch (US-Verwaltung)</option>

                    <option value="AT">AT - Österreich</option>

                    <option value="AU">AU - Australien</option>

                    <option value="AW">AW - Aruba</option>

                    <option value="AZ">AZ - Aserbaidschan</option>

                    <option value="BA">BA - Bosnien und Herzegowina</option>

                    <option value="BB">BB - Barbados</option>

                    <option value="BD">BD - Bangladesch</option>

                    <option value="BE">BE - Belgien</option>

                    <option value="BF">BF - Burkina Faso</option>

                    <option value="BG">BG - Bulgarien</option>

                    <option value="BH">BH - Bahrain</option>

                    <option value="BI">BI - Burundi</option>

                    <option value="BJ">BJ - Benin</option>

                    <option value="BL">BL - Saint Barthélemy (Französische Verwaltung)</option>

                    <option value="BM">BM - Bermuda</option>

                    <option value="BN">BN - Brunei Darussalam</option>

                    <option value="BO">BO - Bolivien</option>

                    <option value="BQ">BQ - Bonaire, St. Eustatius, Saba</option>

                    <option value="BR">BR - Brasilien</option>

                    <option value="BS">BS - Bahamas</option>

                    <option value="BT">BT - Bhutan</option>

                    <option value="BV">BV - Bouvetinsel</option>

                    <option value="BW">BW - Botsuana</option>

                    <option value="BY">BY - Belarus (Weißrussland)</option>

                    <option value="BZ">BZ - Belize</option>

                    <option value="CA">CA - Kanada</option>

                    <option value="CC">CC - Kokosinseln (Keeling)</option>

                    <option value="CD">CD - Kongo, Demokratische Republik</option>

                    <option value="CF">CF - Zentralafrikanische Republik</option>

                    <option value="CG">CG - Kongo</option>

                    <option value="CH">CH - Schweiz</option>

                    <option value="CI">CI - Côte d'Ivoire (Elfenbeinküste)</option>

                    <option value="CK">CK - Cook-Inseln (Neuseeländische Verwaltung)</option>

                    <option value="CL">CL - Chile</option>

                    <option value="CM">CM - Kamerun</option>

                    <option value="CN">CN - China</option>

                    <option value="CO">CO - Kolumbien</option>

                    <option value="CR">CR - Costa Rica</option>

                    <option value="CT">CT - Canton und Enderburyinseln (US-Verwaltung)</option>

                    <option value="CU">CU - Kuba</option>

                    <option value="CV">CV - Kap Verde</option>

                    <option value="CW">CW - Curacao</option>

                    <option value="CX">CX - Weihnachtsinsel (Australische Verwaltung)</option>

                    <option value="CY">CY - Zypern</option>

                    <option value="CZ">CZ - Tschechische Republik</option>

                    <option value="DE" selected="selected">DE - Deutschland</option>

                    <option value="DJ">DJ - Dschibuti</option>

                    <option value="DK">DK - Dänemark</option>

                    <option value="DM">DM - Dominica</option>

                    <option value="DO">DO - Dominikanische Republik</option>

                    <option value="DZ">DZ - Algerien</option>

                    <option value="EC">EC - Ecuador</option>

                    <option value="EE">EE - Estland</option>

                    <option value="EG">EG - Ägypten</option>

                    <option value="EH">EH - Westsahara (Eigenständiger Staat)</option>

                    <option value="ER">ER - Eritrea</option>

                    <option value="ES">ES - Spanien</option>

                    <option value="ET">ET - Äthiopien</option>

                    <option value="FI">FI - Finnland</option>

                    <option value="FJ">FJ - Fidschi</option>

                    <option value="FK">FK - Falklandinseln (Malvinen)</option>

                    <option value="FM">FM - Mikronesien</option>

                    <option value="FO">FO - Färöer Inseln (Dänische Verwaltung)</option>

                    <option value="FQ">FQ - Französische Südpolargebiete</option>

                    <option value="FR">FR - Frankreich</option>

                    <option value="GA">GA - Gabun</option>

                    <option value="GB">GB - Großbritannien</option>

                    <option value="GD">GD - Grenada</option>

                    <option value="GE">GE - Georgien</option>

                    <option value="GF">GF - Französisch Guayana (Französische Verwaltung)</option>

                    <option value="GG">GG - Guernsey Insel</option>

                    <option value="GH">GH - Ghana</option>

                    <option value="GI">GI - Gibraltar</option>

                    <option value="GL">GL - Grönland (Dänische Verwaltung)</option>

                    <option value="GM">GM - Gambia</option>

                    <option value="GN">GN - Guinea</option>

                    <option value="GP">GP - Guadeloupe (Französische Verwaltung)</option>

                    <option value="GQ">GQ - Äquatorial Guinea</option>

                    <option value="GR">GR - Griechenland</option>

                    <option value="GS">GS - Südgeorgien und Südliche-Sandwich-Inseln</option>

                    <option value="GT">GT - Guatemala</option>

                    <option value="GU">GU - Guam (US-Verwaltung)</option>

                    <option value="GW">GW - Guinea-Bissau</option>

                    <option value="GY">GY - Guyana</option>

                    <option value="HK">HK - Hongkong (Verwaltung der Volksrepublik China)</option>

                    <option value="HM">HM - Heard und McDonaldinseln (Australische Verwaltung)</option>

                    <option value="HN">HN - Honduras</option>

                    <option value="HR">HR - Kroatien</option>

                    <option value="HT">HT - Haiti</option>

                    <option value="HU">HU - Ungarn</option>

                    <option value="IC">IC - Kanarische Inseln</option>

                    <option value="ID">ID - Indonesien</option>

                    <option value="IE">IE - Irland</option>

                    <option value="IL">IL - Israel</option>

                    <option value="IM">IM - Man, Insel</option>

                    <option value="IN">IN - Indien</option>

                    <option value="IO">IO - Britisches Territorium im Indischen Ozean</option>

                    <option value="IQ">IQ - Irak</option>

                    <option value="IR">IR - Iran</option>

                    <option value="IS">IS - Island</option>

                    <option value="IT">IT - Italien</option>

                    <option value="JE">JE - Jersey Insel</option>

                    <option value="JM">JM - Jamaika</option>

                    <option value="JO">JO - Jordanien</option>

                    <option value="JP">JP - Japan</option>

                    <option value="JT">JT - Johnston Insel (US-Verwaltung)</option>

                    <option value="KE">KE - Kenia</option>

                    <option value="KG">KG - Kirgisistan</option>

                    <option value="KH">KH - Kambodscha</option>

                    <option value="KI">KI - Kiribati</option>

                    <option value="KM">KM - Komoren</option>

                    <option value="KN">KN - St. Kitts und Nevis</option>

                    <option value="KP">KP - Korea, Demokratische Volksrepublik</option>

                    <option value="KR">KR - Korea, Republik</option>

                    <option value="KW">KW - Kuwait</option>

                    <option value="KY">KY - Kaimaninseln (Cayman Isle)</option>

                    <option value="KZ">KZ - Kasachstan</option>

                    <option value="LA">LA - Laos</option>

                    <option value="LB">LB - Libanon</option>

                    <option value="LC">LC - St. Lucia</option>

                    <option value="LI">LI - Liechtenstein</option>

                    <option value="LK">LK - Sri Lanka</option>

                    <option value="LR">LR - Liberien</option>

                    <option value="LS">LS - Lesotho</option>

                    <option value="LT">LT - Litauen</option>

                    <option value="LU">LU - Luxemburg</option>

                    <option value="LV">LV - Lettland</option>

                    <option value="LY">LY - Libysch-Arabische Dschamahirija</option>

                    <option value="MA">MA - Marokko</option>

                    <option value="MC">MC - Monaco</option>

                    <option value="MD">MD - Moldau, Republik</option>

                    <option value="ME">ME - Montenegro</option>

                    <option value="MF">MF - Saint Martin (Französische Verwaltung)</option>

                    <option value="MG">MG - Madagaskar</option>

                    <option value="MH">MH - Marshall Inseln</option>

                    <option value="MI">MI - Midway Inseln (US-Verwaltung)</option>

                    <option value="MK">MK - Mazedonien</option>

                    <option value="ML">ML - Mali</option>

                    <option value="MM">MM - Myanmar</option>

                    <option value="MN">MN - Mongolei</option>

                    <option value="MO">MO - Macao (Verwaltung der Volksrepublik China)</option>

                    <option value="MP">MP - Marianen, Nördliche</option>

                    <option value="MQ">MQ - Martinique (Französische Verwaltung)</option>

                    <option value="MR">MR - Mauretanien</option>

                    <option value="MS">MS - Montserrat (Britische Verwaltung)</option>

                    <option value="MT">MT - Malta</option>

                    <option value="MU">MU - Mauritius</option>

                    <option value="MV">MV - Malediven</option>

                    <option value="MW">MW - Malawi</option>

                    <option value="MX">MX - Mexiko</option>

                    <option value="MY">MY - Malaysia</option>

                    <option value="MZ">MZ - Mosambik</option>

                    <option value="NA">NA - Namibia</option>

                    <option value="NC">NC - Neukaledonien</option>

                    <option value="NE">NE - Niger</option>

                    <option value="NF">NF - Norfolkinsel</option>

                    <option value="NG">NG - Nigeria</option>

                    <option value="NI">NI - Nicaragua</option>

                    <option value="NL">NL - Niederlande</option>

                    <option value="NO">NO - Norwegen</option>

                    <option value="NP">NP - Nepal</option>

                    <option value="NR">NR - Nauru</option>

                    <option value="NU">NU - Niue (Neuseeländische Verwaltung)</option>

                    <option value="NZ">NZ - Neuseeland</option>

                    <option value="OM">OM - Oman</option>

                    <option value="PA">PA - Panama</option>

                    <option value="PE">PE - Peru</option>

                    <option value="PF">PF - Französisch Polynesien</option>

                    <option value="PG">PG - Papua Neuguinea</option>

                    <option value="PH">PH - Philippinen</option>

                    <option value="PK">PK - Pakistan</option>

                    <option value="PL">PL - Polen</option>

                    <option value="PM">PM - St. Pierre und Miquelon</option>

                    <option value="PN">PN - Pitcairn Inseln</option>

                    <option value="PR">PR - Puerto Rico (US-Verwaltung)</option>

                    <option value="PS">PS - Palästina, Besetzt</option>

                    <option value="PT">PT - Portugal</option>

                    <option value="PU">PU - Pazifische Inseln (US-Verwaltung)</option>

                    <option value="PW">PW - Palau</option>

                    <option value="PY">PY - Paraguay</option>

                    <option value="PZ">PZ - Panama, Kanalzone</option>

                    <option value="QA">QA - Katar</option>

                    <option value="RE">RE - Réunion (Französische Verwaltung)</option>

                    <option value="RO">RO - Rumänien</option>

                    <option value="RS">RS - Serbien</option>

                    <option value="RU">RU - Russische Föderation</option>

                    <option value="RW">RW - Ruanda</option>

                    <option value="SA">SA - Saudi-Arabien</option>

                    <option value="SB">SB - Salomonen</option>

                    <option value="SC">SC - Seychellen</option>

                    <option value="SD">SD - Sudan</option>

                    <option value="SE">SE - Schweden</option>

                    <option value="SG">SG - Singapur</option>

                    <option value="SH">SH - St. Helena</option>

                    <option value="SI">SI - Slowenien</option>

                    <option value="SJ">SJ - Spitzbergen und Jan Mayen Inseln (Norwegische Verwaltung)</option>

                    <option value="SK">SK - Slowakei</option>

                    <option value="SL">SL - Sierra Leone</option>

                    <option value="SM">SM - San Marino</option>

                    <option value="SN">SN - Senegal</option>

                    <option value="SO">SO - Somalia</option>

                    <option value="SR">SR - Suriname</option>

                    <option value="ST">ST - São Tomé und Príncipe</option>

                    <option value="SV">SV - El Salvador</option>

                    <option value="SX">SX - St. Maarten</option>

                    <option value="SY">SY - Syrien</option>

                    <option value="SZ">SZ - Swasiland</option>

                    <option value="TC">TC - Turks- und Caicosinseln</option>

                    <option value="TD">TD - Tschad</option>

                    <option value="TF">TF - Französische Südgebiete</option>

                    <option value="TG">TG - Togo</option>

                    <option value="TH">TH - Thailand</option>

                    <option value="TJ">TJ - Tadschikistan</option>

                    <option value="TK">TK - Tokelau (Neuseeländische Verwaltung)</option>

                    <option value="TL">TL - Timor-Leste</option>

                    <option value="TM">TM - Turkmenistan</option>

                    <option value="TN">TN - Tunesien</option>

                    <option value="TO">TO - Tonga</option>

                    <option value="TR">TR - Türkei</option>

                    <option value="TT">TT - Trinidad und Tobago</option>

                    <option value="TV">TV - Tuvalu</option>

                    <option value="TW">TW - Taiwan</option>

                    <option value="TZ">TZ - Tansania, Vereinigte Republik</option>

                    <option value="UA">UA - Ukraine</option>

                    <option value="UG">UG - Uganda</option>

                    <option value="UM">UM - USA - Sonstige Kleine Inseln</option>

                    <option value="US">US - Vereinigte Staaten</option>

                    <option value="UY">UY - Uruguay</option>

                    <option value="UZ">UZ - Usbekistan</option>

                    <option value="VA">VA - Vatikan</option>

                    <option value="VC">VC - St. Vincent und die Grenadinen</option>

                    <option value="VE">VE - Venezuela</option>

                    <option value="VG">VG - Jungfern-Inseln (Britisch)</option>

                    <option value="VI">VI - Jungfern-Inseln (USA)</option>

                    <option value="VN">VN - Vietnam</option>

                    <option value="VU">VU - Vanuatu</option>

                    <option value="WF">WF - Wallis und Futuna</option>

                    <option value="WK">WK - Wake Insel (US-Verwaltung)</option>

                    <option value="WS">WS - Samoa-West</option>

                    <option value="X1">X1 - Organisation für Sicherheit und Zusammenarbeit in Europa</option>

                    <option value="XC">XC - Ceuta</option>

                    <option value="XK">XK - Kosovo</option>

                    <option value="XL">XL - Melilla</option>

                    <option value="YE">YE - Jemen</option>

                    <option value="YT">YT - Mayotte</option>

                    <option value="ZA">ZA - Südafrika</option>

                    <option value="ZM">ZM - Sambia</option>

                    <option value="ZW">ZW - Simbabwe</option>

                </select>
                <p>郵遞區號：<input size="5" type="text" name="plz">&nbsp;<p>--請輸入英文地址--&nbsp;&nbsp;<a href="https://www.post.gov.tw/post/internet/SearchZone/index.jsp?ID=130112" style="color: #adc4b2">按此翻譯地址</a>
                <p>縣市：<input type="text"size="30" name="ort">&nbsp;</p>
                <p>街道：<input type="text"size="50" name="str_nr"></p>
                <p>----------------------</p>
                <p><input type="checkbox" name="datenschutz_ok">我已經閱讀並理解了隱私政策</p>
                <p> <input type="checkbox" name="nutzungsbed_ok">我同意使用條款</p>
                <p>----------------------</p>
                <p><input type="submit" name="submit" value="送出">
                    <style>
                        input {padding:5px 15px; background:#CCEEFF; border:0 none;
                            cursor:pointer;
                            -webkit-border-radius: 5px;
                            font-family: 'Nunito', sans-serif;
                            border-radius: 5px; }
                    </style>
                    <style>
                        input {
                            padding:5px 15px;
                            background:	#CCEEFF;
                            border:0 none;f
                        cursor:pointer;
                            -webkit-border-radius: 5px;
                            border-radius: 5px;
                            font-family: 'Nunito', sans-serif;
                            font-size: 18px;
                        }
                    </style>
            </form>
        </div>

</body>
</html>
<?php
if (isset($_POST[submit])) {
    echo '<div class="success">Added successfully ！</div>';
    $name = $_POST['name'];
    $subject = $_POST["subject"];
    $content = $_POST["content"];

        echo "
                <script>
                setTimeout(function(){window.location.href='view.php?name=" . $name . "';},500);
                </script>";


}

//data:method = post, action = ''; name => value
//email: heaa1417@kimo.com
//passwort: Abc12345
//passwort_wiederholen: bc12345A
//datenschutz_ok: 1
//nutzungsbed_ok: 1
//anrede:
//titel:
//vorname: PJ
//nachname: Peng
//coadresse:
//str_nr: 6F., No. 5, Ln. 344, Sec. 2, Beimen Rd., North Dist.
//plz: 704
//ort: Tainan City
//land: TW
//organisation:
//telefon:
//btAbsendenMitRegistrieren: Jetzt registrieren
//_charset_: UTF-8
//sectimestamp: 1570000951140
//secinvisible:
//JavaScriptEnable: true
//clearPwdIfEmpty:
//clearPwdWdhlIfEmpty:
//sectimestamp: 1570000951137
//secinvisible:
