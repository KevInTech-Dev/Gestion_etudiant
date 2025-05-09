
<!DOCTYphptml>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Étudiant</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            
        }
        header {
            background:rgb(89, 70, 133);
            color: whitesmoke;
            padding: 10px;
            text-align: center;
            border : 3px solid rgb(89, 70, 133);
            margin: 0 100px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 20px 40px rgba(16, 1, 1, 0.1);
        }
        h1 {
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-wrap:wrap;
           
        }

        .btn-connexion {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px 19px;
            background: rgb(89, 70, 133);
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background 0.3s;
        }
        .btn-connexion:hover {
            background: rgb(226, 225, 228);
        }

        label {
            flex: 1 0 100%;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="file"],
        select {
            flex: 1 0 48%;
            padding: 10px;
            margin-right: 4%;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="text"]:last-child,
        input[type="email"]:last-child,
        input[type="date"]:last-child,
        input[type="file"]:last-child,
        select:last-child {
            margin-right: 0;
        }
        .radio-group {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        .radio-group label {
            flex: 1 0 30%;
            margin-right: 10px;
        }
        button {
            padding: 10px 20px;
            background: rgb(89, 70, 133);
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: rgb(69, 50, 113);
        }
    </style>
</head>
<body>
    <header>
        <h1>Ajouter un Étudiant</h1>
    </header>
    <main>
        <div class="container">
            <form action="ajouter_etudiant.php" method="POST" enctype="multipart/form-data">
                <h2>Informations Personnelles</h2>
                <div class="form-group">
                    <label for="nomEtu">Nom :</label>
                    <input type="text" id="nomEtu" name="nomEtu" required>

                    <label for="prenomEtu">Prénom :</label>
                    <input type="text" id="prenomEtu" name="prenomEtu" required>
                </div>

                <div class="form-group">
                    <label for="adresseEtu">Adresse :</label>
                    <input type="text" id="adresseEtu" name="adresseEtu" required>

                    <label for="dateNais">Date de Naissance :</label>
                    <input type="date" id="dateNais" name="dateNais" required>
                </div>

                <div class="form-group">
                    <label for="lieuNais">Lieu de Naissance :</label>
                    <input type="text" id="lieuNais" name="lieuNais">

                    <label for="pays">Pays :</label>
                    <select id="pays" name="pays">
                        <option value="">Selectionnez un pays</option>
                                <option value="Afghanistan">Afghanistan </option>
                                <option value="Afrique_Centrale">Afrique_Centrale </option>
                                <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                <option value="Albanie">Albanie </option>
                                <option value="Algerie">Algerie </option>
                                <option value="Allemagne">Allemagne </option>
                                <option value="Andorre">Andorre </option>
                                <option value="Angola">Angola </option>
                                <option value="Anguilla">Anguilla </option>
                                <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                <option value="Argentine">Argentine </option>
                                <option value="Armenie">Armenie </option>
                                <option value="Australie">Australie </option>
                                <option value="Autriche">Autriche </option>
                                <option value="Azerbaidjan">Azerbaidjan </option>

                                <option value="Bahamas">Bahamas </option>
                                <option value="Bangladesh">Bangladesh </option>
                                <option value="Barbade">Barbade </option>
                                <option value="Bahrein">Bahrein </option>
                                <option value="Belgique">Belgique </option>
                                <option value="Belize">Belize </option>
                                <option value="Benin">Benin </option>
                                <option value="Bermudes">Bermudes </option>
                                <option value="Bielorussie">Bielorussie </option>
                                <option value="Bolivie">Bolivie </option>
                                <option value="Botswana">Botswana </option>
                                <option value="Bhoutan">Bhoutan </option>
                                <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                <option value="Bresil">Bresil </option>
                                <option value="Brunei">Brunei </option>
                                <option value="Bulgarie">Bulgarie </option>
                                <option value="Burkina_Faso">Burkina_Faso </option>
                                <option value="Burundi">Burundi </option>
                                <option value="Caiman">Caiman </option>
                                <option value="Cambodge">Cambodge </option>_
                                <option value="Cameroun">Cameroun </option>
                                <option value="Canada">Canada </option>
                                <option value="Canaries">Canaries </option>
                                <option value="Cap_vert">Cap_Vert </option>
                                <option value="Chili">Chili </option>
                                <option value="Chine">Chine </option>
                                <option value="Chypre">Chypre </option>
                                <option value="Colombie">Colombie </option>
                                <option value="Comores">Colombie </option>
                                <option value="Congo">Congo </option>
                                <option value="Congo_democratique">Congo_democratique </option>
                                <option value="Cook">Cook </option>
                                <option value="Coree_du_Nord">Coree_du_Nord </option>
                                <option value="Coree_du_Sud">Coree_du_Sud </option>
                                <option value="Costa_Rica">Costa_Rica </option>
                                <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                <option value="Croatie">Croatie </option>
                                <option value="Cuba">Cuba </option>

                                <option value="Danemark">Danemark </option>
                                <option value="Djibouti">Djibouti </option>
                                <option value="Dominique">Dominique </option>

                                <option value="Egypte">Egypte </option>
                                <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                <option value="Equateur">Equateur </option>
                                <option value="Erythree">Erythree </option>
                                <option value="Espagne">Espagne </option>
                                <option value="Estonie">Estonie </option>
                                <option value="Etats_Unis">Etats_Unis </option>
                                <option value="Ethiopie">Ethiopie </option>

                                <option value="Falkland">Falkland </option>
                                <option value="Feroe">Feroe </option>
                                <option value="Fidji">Fidji </option>
                                <option value="Finlande">Finlande </option>
                                <option value="France">France </option>

                                <option value="Gabon">Gabon </option>
                                <option value="Gambie">Gambie </option>
                                <option value="Georgie">Georgie </option>
                                <option value="Ghana">Ghana </option>
                                <option value="Gibraltar">Gibraltar </option>
                                <option value="Grece">Grece </option>
                                <option value="Grenade">Grenade </option>
                                <option value="Groenland">Groenland </option>
                                <option value="Guadeloupe">Guadeloupe </option>
                                <option value="Guam">Guam </option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernesey">Guernesey </option>
                                <option value="Guinee">Guinee </option>
                                <option value="Guinee_Bissau">Guinee_Bissau </option>
                                <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                <option value="Guyana">Guyana </option>
                                <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                <option value="Haiti">Haiti </option>
                                <option value="Hawaii">Hawaii </option>
                                <option value="Honduras">Honduras </option>
                                <option value="Hong_Kong">Hong_Kong </option>
                                <option value="Hongrie">Hongrie </option>

                                <option value="Inde">Inde </option>
                                <option value="Indonesie">Indonesie </option>
                                <option value="Iran">Iran </option>
                                <option value="Iraq">Iraq </option>
                                <option value="Irlande">Irlande </option>
                                <option value="Islande">Islande </option>
                                <option value="Israel">Israel </option>
                                <option value="Italie">italie </option>

                                <option value="Jamaique">Jamaique </option>
                                <option value="Jan Mayen">Jan Mayen </option>
                                <option value="Japon">Japon </option>
                                <option value="Jersey">Jersey </option>
                                <option value="Jordanie">Jordanie </option>

                                <option value="Kazakhstan">Kazakhstan </option>
                                <option value="Kenya">Kenya </option>
                                <option value="Kirghizstan">Kirghizistan </option>
                                <option value="Kiribati">Kiribati </option>
                                <option value="Koweit">Koweit </option>

                                <option value="Laos">Laos </option>
                                <option value="Lesotho">Lesotho </option>
                                <option value="Lettonie">Lettonie </option>
                                <option value="Liban">Liban </option>
                                <option value="Liberia">Liberia </option>
                                <option value="Liechtenstein">Liechtenstein </option>
                                <option value="Lituanie">Lituanie </option>
                                <option value="Luxembourg">Luxembourg </option>
                                <option value="Lybie">Lybie </option>

                                <option value="Macao">Macao </option>
                                <option value="Macedoine">Macedoine </option>
                                <option value="Madagascar">Madagascar </option>
                                <option value="Madère">Madère </option>
                                <option value="Malaisie">Malaisie </option>
                                <option value="Malawi">Malawi </option>
                                <option value="Maldives">Maldives </option>
                                <option value="Mali">Mali </option>
                                <option value="Malte">Malte </option>
                                <option value="Man">Man </option>
                                <option value="Mariannes du Nord">Mariannes du Nord </option>
                                <option value="Maroc">Maroc </option>
                                <option value="Marshall">Marshall </option>
                                <option value="Martinique">Martinique </option>
                                <option value="Maurice">Maurice </option>
                                <option value="Mauritanie">Mauritanie </option>
                                <option value="Mayotte">Mayotte </option>
                                <option value="Mexique">Mexique </option>
                                <option value="Micronesie">Micronesie </option>
                                <option value="Midway">Midway </option>
                                <option value="Moldavie">Moldavie </option>
                                <option value="Monaco">Monaco </option>
                                <option value="Mongolie">Mongolie </option>
                                <option value="Montserrat">Montserrat </option>
                                <option value="Mozambique">Mozambique </option>

                                <option value="Namibie">Namibie </option>
                                <option value="Nauru">Nauru </option>
                                <option value="Nepal">Nepal </option>
                                <option value="Nicaragua">Nicaragua </option>
                                <option value="Niger">Niger </option>
                                <option value="Nigeria">Nigeria </option>
                                <option value="Niue">Niue </option>
                                <option value="Norfolk">Norfolk </option>
                                <option value="Norvege">Norvege </option>
                                <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                <option value="Oman">Oman </option>
                                <option value="Ouganda">Ouganda </option>
                                <option value="Ouzbekistan">Ouzbekistan </option>

                                <option value="Pakistan">Pakistan </option>
                                <option value="Palau">Palau </option>
                                <option value="Palestine">Palestine </option>
                                <option value="Panama">Panama </option>
                                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                <option value="Paraguay">Paraguay </option>
                                <option value="Pays_Bas">Pays_Bas </option>
                                <option value="Perou">Perou </option>
                                <option value="Philippines">Philippines </option>
                                <option value="Pologne">Pologne </option>
                                <option value="Polynesie">Polynesie </option>
                                <option value="Porto_Rico">Porto_Rico </option>
                                <option value="Portugal">Portugal </option>

                                <option value="Qatar">Qatar </option>

                                <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                <option value="Republique_Tcheque">Republique_Tcheque </option>
                                <option value="Reunion">Reunion </option>
                                <option value="Roumanie">Roumanie </option>
                                <option value="Royaume_Uni">Royaume_Uni </option>
                                <option value="Russie">Russie </option>
                                <option value="Rwanda">Rwanda </option>

                                <option value="Sahara Occidental">Sahara Occidental </option>
                                <option value="Sainte_Lucie">Sainte_Lucie </option>
                                <option value="Saint_Marin">Saint_Marin </option>
                                <option value="Salomon">Salomon </option>
                                <option value="Salvador">Salvador </option>
                                <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                <option value="Samoa_Americaine">Samoa_Americaine </option>
                                <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                <option value="Senegal">Senegal </option>
                                <option value="Seychelles">Seychelles </option>
                                <option value="Sierra Leone">Sierra Leone </option>
                                <option value="Singapour">Singapour </option>
                                <option value="Slovaquie">Slovaquie </option>
                                <option value="Slovenie">Slovenie</option>
                                <option value="Somalie">Somalie </option>
                                <option value="Soudan">Soudan </option>
                                <option value="Sri_Lanka">Sri_Lanka </option>
                                <option value="Suede">Suede </option>
                                <option value="Suisse">Suisse </option>
                                <option value="Surinam">Surinam </option>
                                <option value="Swaziland">Swaziland </option>
                                <option value="Syrie">Syrie </option>

                                <option value="Tadjikistan">Tadjikistan </option>
                                <option value="Taiwan">Taiwan </option>
                                <option value="Tonga">Tonga </option>
                                <option value="Tanzanie">Tanzanie </option>
                                <option value="Tchad">Tchad </option>
                                <option value="Thailande">Thailande </option>
                                <option value="Tibet">Tibet </option>
                                <option value="Timor_Oriental">Timor_Oriental </option>
                                <option value="Togo">Togo </option>
                                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                <option value="Tristan da cunha">Tristan de cuncha </option>
                                <option value="Tunisie">Tunisie </option>
                                <option value="Turkmenistan">Turmenistan </option>
                                <option value="Turquie">Turquie </option>

                                <option value="Ukraine">Ukraine </option>
                                <option value="Uruguay">Uruguay </option>

                                <option value="Vanuatu">Vanuatu </option>
                                <option value="Vatican">Vatican </option>
                                <option value="Venezuela">Venezuela </option>
                                <option value="Vierges_Americaines">Vierges_Americaines </option>
                                <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                <option value="Vietnam">Vietnam </option>

                                <option value="Wake">Wake </option>
                                <option value="Wallis et Futuma">Wallis et Futuma </option>

                                <option value="Yemen">Yemen </option>
                                <option value="Yougoslavie">Yougoslavie </option>

                                <option value="Zambie">Zambie </option>
                                <option value="Zimbabwe">Zimbabwe </option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="nationalite">Nationalité :</label>
                    <select id="nationalite" name="nationalite">
                        <option value="">Selectionnez un pays</option>
                                <option value="Afghanistan">Afghanistan </option>
                                <option value="Afrique_Centrale">Afrique_Centrale </option>
                                <option value="Afrique_du_sud">Afrique_du_Sud </option>
                                <option value="Albanie">Albanie </option>
                                <option value="Algerie">Algerie </option>
                                <option value="Allemagne">Allemagne </option>
                                <option value="Andorre">Andorre </option>
                                <option value="Angola">Angola </option>
                                <option value="Anguilla">Anguilla </option>
                                <option value="Arabie_Saoudite">Arabie_Saoudite </option>
                                <option value="Argentine">Argentine </option>
                                <option value="Armenie">Armenie </option>
                                <option value="Australie">Australie </option>
                                <option value="Autriche">Autriche </option>
                                <option value="Azerbaidjan">Azerbaidjan </option>

                                <option value="Bahamas">Bahamas </option>
                                <option value="Bangladesh">Bangladesh </option>
                                <option value="Barbade">Barbade </option>
                                <option value="Bahrein">Bahrein </option>
                                <option value="Belgique">Belgique </option>
                                <option value="Belize">Belize </option>
                                <option value="Benin">Benin </option>
                                <option value="Bermudes">Bermudes </option>
                                <option value="Bielorussie">Bielorussie </option>
                                <option value="Bolivie">Bolivie </option>
                                <option value="Botswana">Botswana </option>
                                <option value="Bhoutan">Bhoutan </option>
                                <option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
                                <option value="Bresil">Bresil </option>
                                <option value="Brunei">Brunei </option>
                                <option value="Bulgarie">Bulgarie </option>
                                <option value="Burkina_Faso">Burkina_Faso </option>
                                <option value="Burundi">Burundi </option>
                                <option value="Caiman">Caiman </option>
                                <option value="Cambodge">Cambodge </option>_
                                <option value="Cameroun">Cameroun </option>
                                <option value="Canada">Canada </option>
                                <option value="Canaries">Canaries </option>
                                <option value="Cap_vert">Cap_Vert </option>
                                <option value="Chili">Chili </option>
                                <option value="Chine">Chine </option>
                                <option value="Chypre">Chypre </option>
                                <option value="Colombie">Colombie </option>
                                <option value="Comores">Colombie </option>
                                <option value="Congo">Congo </option>
                                <option value="Congo_democratique">Congo_democratique </option>
                                <option value="Cook">Cook </option>
                                <option value="Coree_du_Nord">Coree_du_Nord </option>
                                <option value="Coree_du_Sud">Coree_du_Sud </option>
                                <option value="Costa_Rica">Costa_Rica </option>
                                <option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
                                <option value="Croatie">Croatie </option>
                                <option value="Cuba">Cuba </option>

                                <option value="Danemark">Danemark </option>
                                <option value="Djibouti">Djibouti </option>
                                <option value="Dominique">Dominique </option>

                                <option value="Egypte">Egypte </option>
                                <option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
                                <option value="Equateur">Equateur </option>
                                <option value="Erythree">Erythree </option>
                                <option value="Espagne">Espagne </option>
                                <option value="Estonie">Estonie </option>
                                <option value="Etats_Unis">Etats_Unis </option>
                                <option value="Ethiopie">Ethiopie </option>

                                <option value="Falkland">Falkland </option>
                                <option value="Feroe">Feroe </option>
                                <option value="Fidji">Fidji </option>
                                <option value="Finlande">Finlande </option>
                                <option value="France">France </option>

                                <option value="Gabon">Gabon </option>
                                <option value="Gambie">Gambie </option>
                                <option value="Georgie">Georgie </option>
                                <option value="Ghana">Ghana </option>
                                <option value="Gibraltar">Gibraltar </option>
                                <option value="Grece">Grece </option>
                                <option value="Grenade">Grenade </option>
                                <option value="Groenland">Groenland </option>
                                <option value="Guadeloupe">Guadeloupe </option>
                                <option value="Guam">Guam </option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernesey">Guernesey </option>
                                <option value="Guinee">Guinee </option>
                                <option value="Guinee_Bissau">Guinee_Bissau </option>
                                <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                                <option value="Guyana">Guyana </option>
                                <option value="Guyane_Francaise ">Guyane_Francaise </option>

                                <option value="Haiti">Haiti </option>
                                <option value="Hawaii">Hawaii </option>
                                <option value="Honduras">Honduras </option>
                                <option value="Hong_Kong">Hong_Kong </option>
                                <option value="Hongrie">Hongrie </option>

                                <option value="Inde">Inde </option>
                                <option value="Indonesie">Indonesie </option>
                                <option value="Iran">Iran </option>
                                <option value="Iraq">Iraq </option>
                                <option value="Irlande">Irlande </option>
                                <option value="Islande">Islande </option>
                                <option value="Israel">Israel </option>
                                <option value="Italie">italie </option>

                                <option value="Jamaique">Jamaique </option>
                                <option value="Jan Mayen">Jan Mayen </option>
                                <option value="Japon">Japon </option>
                                <option value="Jersey">Jersey </option>
                                <option value="Jordanie">Jordanie </option>

                                <option value="Kazakhstan">Kazakhstan </option>
                                <option value="Kenya">Kenya </option>
                                <option value="Kirghizstan">Kirghizistan </option>
                                <option value="Kiribati">Kiribati </option>
                                <option value="Koweit">Koweit </option>

                                <option value="Laos">Laos </option>
                                <option value="Lesotho">Lesotho </option>
                                <option value="Lettonie">Lettonie </option>
                                <option value="Liban">Liban </option>
                                <option value="Liberia">Liberia </option>
                                <option value="Liechtenstein">Liechtenstein </option>
                                <option value="Lituanie">Lituanie </option>
                                <option value="Luxembourg">Luxembourg </option>
                                <option value="Lybie">Lybie </option>

                                <option value="Macao">Macao </option>
                                <option value="Macedoine">Macedoine </option>
                                <option value="Madagascar">Madagascar </option>
                                <option value="Madère">Madère </option>
                                <option value="Malaisie">Malaisie </option>
                                <option value="Malawi">Malawi </option>
                                <option value="Maldives">Maldives </option>
                                <option value="Mali">Mali </option>
                                <option value="Malte">Malte </option>
                                <option value="Man">Man </option>
                                <option value="Mariannes du Nord">Mariannes du Nord </option>
                                <option value="Maroc">Maroc </option>
                                <option value="Marshall">Marshall </option>
                                <option value="Martinique">Martinique </option>
                                <option value="Maurice">Maurice </option>
                                <option value="Mauritanie">Mauritanie </option>
                                <option value="Mayotte">Mayotte </option>
                                <option value="Mexique">Mexique </option>
                                <option value="Micronesie">Micronesie </option>
                                <option value="Midway">Midway </option>
                                <option value="Moldavie">Moldavie </option>
                                <option value="Monaco">Monaco </option>
                                <option value="Mongolie">Mongolie </option>
                                <option value="Montserrat">Montserrat </option>
                                <option value="Mozambique">Mozambique </option>

                                <option value="Namibie">Namibie </option>
                                <option value="Nauru">Nauru </option>
                                <option value="Nepal">Nepal </option>
                                <option value="Nicaragua">Nicaragua </option>
                                <option value="Niger">Niger </option>
                                <option value="Nigeria">Nigeria </option>
                                <option value="Niue">Niue </option>
                                <option value="Norfolk">Norfolk </option>
                                <option value="Norvege">Norvege </option>
                                <option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
                                <option value="Nouvelle_Zelande">Nouvelle_Zelande </option>

                                <option value="Oman">Oman </option>
                                <option value="Ouganda">Ouganda </option>
                                <option value="Ouzbekistan">Ouzbekistan </option>

                                <option value="Pakistan">Pakistan </option>
                                <option value="Palau">Palau </option>
                                <option value="Palestine">Palestine </option>
                                <option value="Panama">Panama </option>
                                <option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
                                <option value="Paraguay">Paraguay </option>
                                <option value="Pays_Bas">Pays_Bas </option>
                                <option value="Perou">Perou </option>
                                <option value="Philippines">Philippines </option>
                                <option value="Pologne">Pologne </option>
                                <option value="Polynesie">Polynesie </option>
                                <option value="Porto_Rico">Porto_Rico </option>
                                <option value="Portugal">Portugal </option>

                                <option value="Qatar">Qatar </option>

                                <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                                <option value="Republique_Tcheque">Republique_Tcheque </option>
                                <option value="Reunion">Reunion </option>
                                <option value="Roumanie">Roumanie </option>
                                <option value="Royaume_Uni">Royaume_Uni </option>
                                <option value="Russie">Russie </option>
                                <option value="Rwanda">Rwanda </option>

                                <option value="Sahara Occidental">Sahara Occidental </option>
                                <option value="Sainte_Lucie">Sainte_Lucie </option>
                                <option value="Saint_Marin">Saint_Marin </option>
                                <option value="Salomon">Salomon </option>
                                <option value="Salvador">Salvador </option>
                                <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                                <option value="Samoa_Americaine">Samoa_Americaine </option>
                                <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                                <option value="Senegal">Senegal </option>
                                <option value="Seychelles">Seychelles </option>
                                <option value="Sierra Leone">Sierra Leone </option>
                                <option value="Singapour">Singapour </option>
                                <option value="Slovaquie">Slovaquie </option>
                                <option value="Slovenie">Slovenie</option>
                                <option value="Somalie">Somalie </option>
                                <option value="Soudan">Soudan </option>
                                <option value="Sri_Lanka">Sri_Lanka </option>
                                <option value="Suede">Suede </option>
                                <option value="Suisse">Suisse </option>
                                <option value="Surinam">Surinam </option>
                                <option value="Swaziland">Swaziland </option>
                                <option value="Syrie">Syrie </option>

                                <option value="Tadjikistan">Tadjikistan </option>
                                <option value="Taiwan">Taiwan </option>
                                <option value="Tonga">Tonga </option>
                                <option value="Tanzanie">Tanzanie </option>
                                <option value="Tchad">Tchad </option>
                                <option value="Thailande">Thailande </option>
                                <option value="Tibet">Tibet </option>
                                <option value="Timor_Oriental">Timor_Oriental </option>
                                <option value="Togo">Togo </option>
                                <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                                <option value="Tristan da cunha">Tristan de cuncha </option>
                                <option value="Tunisie">Tunisie </option>
                                <option value="Turkmenistan">Turmenistan </option>
                                <option value="Turquie">Turquie </option>

                                <option value="Ukraine">Ukraine </option>
                                <option value="Uruguay">Uruguay </option>

                                <option value="Vanuatu">Vanuatu </option>
                                <option value="Vatican">Vatican </option>
                                <option value="Venezuela">Venezuela </option>
                                <option value="Vierges_Americaines">Vierges_Americaines </option>
                                <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                                <option value="Vietnam">Vietnam </option>

                                <option value="Wake">Wake </option>
                                <option value="Wallis et Futuma">Wallis et Futuma </option>

                                <option value="Yemen">Yemen </option>
                                <option value="Yougoslavie">Yougoslavie </option>

                                <option value="Zambie">Zambie </option>
                                <option value="Zimbabwe">Zimbabwe </option>
                        <option value="Autre">Autre</option>
                    </select>
                    
                    <label for="sexe">Sexe :</label>
                    <div class="radio-group">
                        <label><input type="radio" name="sexe" value="Masculin"> Masculin</label>
                        <label><input type="radio" name="sexe" value="Féminin"> Féminin</label>
                        <label><input type="radio" name="sexe" value="Autre"> Autre</label>
                    </div>
                </div>

                <div class="form-group">
                   
                    <label for="situation_matrimoniale">Situation Matrimoniale :</label>
                    <div class="radio-group">
                        <label><input type="radio" name="situation_matrimoniale" value="Célibataire"> Célibataire</label>
                        <label><input type="radio" name="situation_matrimoniale" value="Marié"> Marié</label>
                        <label><input type="radio" name="situation_matrimoniale" value="Veuf"> Veuf</label>
                    </div>
                    <label for="email">Adresse e-mail :</label>
                    <input type="email" id="email" name="email" placeholder="komlan@gamail.com" required>
                </div>

                <h2>Informations Académiques</h2>
                <div class="form-group">
                    <label for="niveauEtude">Niveau d'Étude :</label>
                    <input type="text" id="niveauEtude" name="niveauEtude">

                    <label for="parcours">Parcours :</label>
                    <div class="radio-group">
                        <label><input type="radio" name="parcours" value="BTS"> BTS</label>
                        <label><input type="radio" name="parcours" value="Licence"> Licence</label>
                        <label><input type="radio" name="parcours" value="Master"> Master</label>
                        <label><input type="radio" name="parcours" value="Doctorat"> Doctorat</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="filiere">Filière :</label>
                    <input type="text" id="filiere" name="filiere">

                    <label for="photo">Photo :</label>
                    <input type="file" id="photo" name="photo">
                </div>

                <div class="formgroup">
                    <label for="acteNaissance">Acte de Naissance :</label>
                    <input type="file" id="acteNaissance" name="acteNaissance">

                    <label for="releve">Relevé :</label>
                    <input type="file" id="releve" name="releve">
                </div>

                <h2>Informations du personnel à prévenir</h2>
                <div class="form-group">
                    <label for="nomResponsable">Nom et Prénoms:</label>
                    <input type="text" id="nomResponsable" name="nomResponsable" required>

                    <label for="emailResponsable">Adresse e-mail:</label>
                    <input type="email" id="emailResponsable" name="emailResponsable" placeholder="komlan@gmail.com" required>
                </div>

                <div class="form-group">
                    <label for="professionResponsable">Profession :</label>
                    <input type="text" id="professionResponsable" name="professionResponsable">

                    <label for="NumTelResponsable">Numéro de Téléphone:</label>
                    <input type="text" id="NumTelResponsable" name="NumTelResponsable">
                </div>

                <input type="hidden" name="dateInscription" value="<?php echo date('Y-m-d H:i:s'); ?>">

                <button type="submit">Ajouter l'Étudiant</button>
                <a href="admin.php" class="btn-connexion">Retour</a>
            </form>
        </div>
    </main>
</body>
</html>