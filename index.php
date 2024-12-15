<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Create Bank Account </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="form-container">
    <div class="head-name">
    <div class="bankname">
    <h2>Islami Bank Bangladesh </h2>
    <h2>ইসলামী ব্যাংক বাংলাদেশ </h2>
    <h3> shahbag 2501, Block F, shahbag, Dhaka 1213</h3>
    <h3>Create New Account</h3>
    </div>
    </div>

    <form action="output.php" method="POST"> 
        <div class="partOne">প্রথম অংশ : হিসাব সংক্রান্ত তথ্যাদি </div>
        <ol type="1">
            <li>
                
              
                <label>হিসাবের শিরোনাম :(বাংলায়) </label>
                    <input type="text" name="hisab" required >  
                  <br>
                 <label>Account title : In English (Block Letter)</label>
                    <input type="text" name="nameOfTheAccount" placeholder="USE CAPITAL LETTER" required >          
            </li>

            <li>
                <label>হিসাবের প্রকৃতি [ টিক দিন ]: </label> <br>

                
                <label> মুদারাবা সঞ্চয়ী হিসাব : </label>
                    <input type="radio" name="typeOfAc[]" value="Saving" required > MSA-Genera
                    <input type="radio" name="typeOfAc[]" value="Current" required > MSA-Staf
                    <input type="radio" name="typeOfAc[]" value="SND" required > MSA-RDS
                    <input type="radio" name="typeOfAc[]" value="FC" required > SMSA
                    <input type="radio" name="typeOfAc[]" value="RFCD" required > MFSA
                    <input type="radio" name="typeOfAc[]" value="NFCD" required > MIESA
                    <input type="radio" name="typeOfAc[]" value=" " required > MPA  
                    <input type="text" name="typeOfAcOther" value=" " >                  
            </li>

            <li>
                <label>কারেন্সি (Currency) [ টিক দিন ]: </label>
                    <input type="radio" name="CurrencyMarkTick[]" value="Taka " required > টাকা 
                    <input type="radio" name="CurrencyMarkTick[]" value="USD " required > ডলার  
                    <input type="radio" name="CurrencyMarkTick[]" value="Euro" required > ইউরো  
                    <input type="radio" name="CurrencyMarkTick[]" value="GBP" required > পাউন্ড  
                    <input type="radio" name="CurrencyMarkTick[]" value=" " required > অন্যান্য 
                    <input type="text" name="otherCurrencyMarkTick" value="">                
            </li>

            <li>
                <label>হিসাব পরিচালনা পদ্ধতি [ টিক দিন ]: 
                    <input type="radio" name="modeOfOperation[]" value="Singly" required > এককভাবে  
                    <input type="radio" name="modeOfOperation[]" value="Jointly" required > যৌথভাবে  
                    <input type="radio" name="modeOfOperation[]" value="Either or Survivor" required > যে কোনো একজন অথবা জীবিতজন 
                    <input type="radio" name="modeOfOperation[]" value="Any One " required > যে কোনো একজন
                    <input type="radio" name="modeOfOperation[]" value=" " required >  অন্যান্য  
                    <input type="text" name="otherModeOfOperation" value=""> </label>
            </li>

            <li>
                <label>প্রাথমিক জমার পরিমান (অংকে ): </label> 
                    <input type="text" name="amountFigure" required > 
                    কথায় <input type="text" name="amountWord" required > 
                <br/>
                   
            </li>

            <li>
                <label>আধুনিক ব্যাংকিং সুবিধা [ টিক দিন ]: </label>
                    <input type="radio" name="otherServices[]" value="Cheque Book " required > Online Service
                    <input type="radio" name="otherServices[]" value="Debit Card" required > ATM Service 
                    <input type="radio" name="otherServices[]" value="Internet Banking" required > i-Banking 
                    <input type="radio" name="otherServices[]" value="SMS Banking" required > SMS service  
                    <input type="radio" name="otherServices[]" value="Online Transaction" required > Others
                    <input type="text" name="otherModeOfOperation" value=""> </label>
                    
            </li>

        </ol>

        <div class="partOne">দ্বিতীয় অংশ : ব্যক্তি সংক্রান্ত তথ্যাদি 
            <sup>(১)</sup> 
        </div>
            <br/>
            <label class="acno"><input type="text" name="acNo" placeholder="For Bank's Use Only" > <b>হিসাব নাম্বার :</b> </label> 
                

        <ol type="1">
            <div class="container">
                <div class="folabel">
                    <li>
                        <label>হিসাবধারীর নাম (বাংলায় ):</label>
                        <input type="text" name="sironameHisab" required >  
                        <br/>
                        <label>In English (Block Letter):</label> 
                        <input type="text" name="nameOf_the_aco" placeholder="USE CAPITAL LETTER" required >
                    </li>

                    <li>
                        <label>জন্ম তারিখ : </label> 
                        <input type="date" name="dateOfBirth" required >          
                    </li>

                    <li>
                        <label>পিতার নাম : </label>  
                        <input type="text" name="fathersName" required >           
                    </li>

                    <li>
                        <label>মাতার নাম : </label>
                        <input type="text" name="mothersName" required >            
                    </li>

                    <li>
                        <label>স্বামী /স্ত্রীর নাম : </label>
                        <input type="text" name="spouseOfName" required >             
                    </li>
                </div>

                <div class="photo">
                    <div class="photo-sec">
                    <p>হিসাবধারীর ছবি </p>
                    <input type="file" name="photo" accept="image/*" required >
                </div>
                   
                </div>
            </div>
            
            <div class="rowTwo">
                <li>
                    <label>জাতীয়তা : </label>
                    <input type="text" name="nationality" value="" required >
                </li>  
                      
                <li>
                    <label>লিঙ্গ : </label>
                    <input type="text" name="gender" value="" required >             
                </li>
                <br>
                <br>
                হিসাবধারী বিদেশী নাগরিক হলে ভিসাসহ পাসপোর্টের কপি আবশ্যিকভাবে গ্রহণ করতে হবে। 
                
            </div>

            <li>
                <label>রেসিডেন্স স্ট্যাটাস [ টিক দিন ]: </label>
                <input type="radio" name="resident[]" value="Resident " required > রেসিডেন্ট  
                <input type="radio" name="resident[]" value="Non-Resident" required > নন-রেসিডেন্ট  
                <span>(প্রয়োজনীয় ক্ষেত্রে ব্যাংক কর্তৃক গাইডলাইনস ফর ফরেন এক্সচেঞ্জ ট্রানজেকশন্স-এর নির্দেশনা অনুসরণ করতে হবে। )</span>
                <br/>                  
            </li>

            <div class="rowTwo">
                <li>
                    <label>পেশা (বিস্তারিত ): </label>
                    <input type="text" name="occupationDetailed" value="" required >              
                </li>
                <li>
                    <label>মাসিক আয় : </label>
                    <input type="text" name="monthlyIncome" value="" required >              
                </li>
            </div>

            <li>
                <label>অর্থের উৎস (বিস্তারিত): </label> 
                <input type="text" name="sourceOfFund" value="" required >             
            </li>

            <li>
                <label>ট্যাক্স আইডি (TIN/eTIN) (যদি থাকে ): </label> 
                    <input type="text" name="taxIdentification" value="">              
            </li>

            <li>
                <ol type="a">
                    <li>
                        <label>বর্তমান ঠিকানা : </label> 
                        সড়ক /গ্রাম : <input type="text" name="roadVill" required >
                        পোঃ <input type="text" name="postOffice" required >
                        থানা: <input type="text" name="policeSta" required >
                        জেলা: <input type="text" name="district" required >
                    </li>
                    <li>
                        <label>স্থায়ী ঠিকানা :</label> 
                        সড়ক /গ্রাম : <input type="text" name="perRoadVil" required >
                        পোঃ  <input type="text" name="perPostOffice" required >
                        থানা : <input type="text" name="perPoliceStation" required >
                        জেলা : <input type="text" name="perDistrict" required >
                        ফোন নাম্বার: <input type="text" name="phoneNumber" required >
                        ই-মেইল: <input type="text" name="emailAddress" required >
                    </li>
                </ol>            
            </li>

            <li> 
            পরিচিতি পত্র :
                <ol type="a">
                    <li>
                        <label>ক/ জাতীয় পরিচয় পত্রের নম্বর : </label> 
                            <input type="text" name="nationalIdCardNo" required >
                            <b>অথবা</b>
                    </li>
                    <li>
                        <label>খ/ পাসপোর্ট নম্বর /জন্মনিবন্ধন নম্বর/ অন্যান্য <sup>(2)</sup> / (নির্দিষ্টভাবে উল্লেখ করতে হবে ).... </label>
                            <input type="text" name="passportNo" >  
                    </li>
                    <li>
                        <label>গ/ পরিচয়দানকারীর তথ্য (জাতীয় পরিচয়পত্র ব্যতীত অন্য পরিচয় প্রদানের ক্ষেত্রে ) </label><br>
                        নাম : <input type="text" name="nidOfUnaName" > 
                        হিসাব /জাতীয় পরিচয়পত্র নম্বর : <input type="text" name="accountNationalIdCart" > 
                        স্বাক্ষর (তারিখ সহ ): <input type="text" name="signature" >  
                    </li>
                </ol>            
            </li>
        </ol>
        <button class="btn" type="submit" > Create </button>
    </form>
</div>

</body>
</html>